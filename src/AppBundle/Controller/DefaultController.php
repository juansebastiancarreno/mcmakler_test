<?php

namespace AppBundle\Controller;

use AppBundle\Document\Data;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // This Route show a "Hello World" on json Format
        $arreglo = array("Hello" => "World");
        $response = new Response(json_encode($arreglo));
        $response->headers->set('Content-Type', 'application/json');
        return $this->render('AppBundle:Default:index.html.twig', array('response' => $response ));
    }

    /**
     * @Route("/Load")
     */
    public function loadAction(SerializerInterface $serializer)
    {
        //This route was create to load the data from the api
        //Getting last 3 days
        $day1 = date('Y-m-d');
        $day2 = date("Y-m-d", strtotime("$day1 -1 day"));
        $day3 = date("Y-m-d", strtotime("$day1 -2 day"));
        $day4 = date("Y-m-d", strtotime("$day1 -3 day"));
        $arr_date = array($day1, $day2, $day3, $day4);
        //Consuming the API and gather the data
        $service_url = "https://api.nasa.gov/neo/rest/v1/feed?start_date={$day1}&end_date={$day4}&detailed=true&api_key=N7LkblDsc5aen05FJqBQ8wU4qSdmsftwJagVK7UD";
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => $service_url, CURLOPT_RETURNTRANSFER => true, CURLOPT_ENCODING => "",CURLOPT_MAXREDIRS => 10,CURLOPT_TIMEOUT => 30,CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1, CURLOPT_CUSTOMREQUEST => "GET"
        ));
        $response = curl_exec($curl); $err = curl_error($curl); curl_close($curl);
        $arr_data = json_decode($response);
        //Set the variable
        $to_persist = array();
        //Parsing the json
        foreach($arr_date as $v_date) {
          foreach($arr_data->near_earth_objects->$v_date as $id => $data) {
            foreach ($data->close_approach_data as $key => $value) {
              $to_persist = array("date" => $v_date,
                                "neo_reference_id" => $data->neo_reference_id,
                                "name" => $data->name,
                                "is_potentially_hazardous_asteroid" => $data->is_potentially_hazardous_asteroid,
                                "kilometers_per_hour" => $value->relative_velocity->kilometers_per_hour);
              $response2 = json_encode($to_persist);
              //Serialize the array on Data class
              $person = $serializer->deserialize($response2, Data::class, 'json');
              //Persist
              $dm = $this->get('doctrine_mongodb')->getManager();
              $dm->persist($person);
              $dm->flush();
            }
          }
        }
        //render for web
        return $this->render('AppBundle:Default:index.html.twig', array('response' => "The Data has being create!"));
    }

    /**
    * @Route("/neo/hazardous", name="Hazardous")
    */
    public function showHazardous(SerializerInterface $serializer) {
      //This route show the whole data where the asteroid is potentially hazardous
      $data = new Data();
      $dm = $this->get('doctrine_mongodb')->getManager();
      //Getting the data
      $hazardous = $dm->getRepository('AppBundle:Data')
        ->findBy(array('isPotentiallyHazardousAsteroid' => true)
        );
      //serialize on json
      $hazardous = $serializer->serialize($hazardous, 'json');
      if (!$hazardous) {
        throw $this->createNotFoundException('No asteroid hazardous found');
      }
      //render for web
      $response = new Response($hazardous);
      $response->headers->set('Content-Type', 'application/json');
      return $this->render('AppBundle:Default:index.html.twig', array('response' => $response));
    }

    /**
    * @Route("/neo/fastest", name="Fastest")
    */
    public function showFastest(SerializerInterface $serializer, Request $request) {
      //This route returns the fastest asteroid on the data stored and have a variable that
      $data = new Data();
      //Get the boolean variable "hazardous" that show the hazardous if its true or not hazardous if its false
      //Getting the hazardous variable
      $var1 = $request->query->get('hazardous');
      if($var1 == "") {
        $v_get = false;
      } else {
        $v_get = $var1;
      }
      $v_get = filter_var($v_get, FILTER_VALIDATE_BOOLEAN);
      //Setting the data manager
      $dm = $this->get('doctrine_mongodb')->getManager();
      //Getting and executing the query
      $query = $this->get('doctrine_mongodb')
                      ->getManager()
                      ->createQueryBuilder('AppBundle:Data')
                      ->field('isPotentiallyHazardousAsteroid')->equals($v_get)
                      ->sort('kilometersPerHour', -1)
                      ->limit(1)
                      ->getQuery()
                      ->execute();

      //serialize on json
      $hazardous = $serializer->serialize($query, 'json');
      if (!$hazardous) {
        throw $this->createNotFoundException('No asteroid hazardous found');
      }

      $response = new Response($hazardous);
      $response->headers->set('Content-Type', 'application/json');
      return $this->render('AppBundle:Default:index.html.twig', array('response' => $response));
    }

    /**
    * @Route("/neo/best-year", name="Best Year")
    */
    public function showBestYear(SerializerInterface $serializer, Request $request) {
      //This route show the the year with most asteroid with a get variable that show if its hazardous or not
      $var1 = $request->query->get('hazardous');

      //If the variable is empty, hazardous is false
      if($var1 == "") {
        $v_get = false;
      } else {
        $v_get = $var1;
      }
      $v_get = filter_var($v_get, FILTER_VALIDATE_BOOLEAN);
      //Setting the aggregate query
      $pipeline = [
          [
              '$match' => [
                  'isPotentiallyHazardousAsteroid' => $v_get,
              ]
          ],
          [
              '$group' => [
                  '_id' => ['year' => [ '$year' => '$date' ]],
                  'count' => [ '$sum' => 1]
              ]
          ]
      ];

      $dm = $this->get('doctrine_mongodb')->getManager();
      $collection = $dm->getDocumentCollection(Data::class);
      $query = $collection->aggregate($pipeline)->toArray();
      //Serialize the result
      $hazardous = $serializer->serialize($query,  'json');
      if (!$hazardous) {
        throw $this->createNotFoundException('No data found');
      }
      $response = new Response($hazardous);
      $response->headers->set('Content-Type', 'application/json');
      return $this->render('AppBundle:Default:index.html.twig', array('response' => $response));
    }

    /**
    * @Route("/neo/best-month", name="Best Month")
    */
    public function showBestMonth(SerializerInterface $serializer, Request $request) {
      //This route show the the month with most asteroid with a get variable that show if its hazardous or not
      $var1 = $request->query->get('hazardous');

      //If the variable is empty, hazardous is false
      if($var1 == "") {
        $v_get = false;
      } else {
        $v_get = $var1;
      }
      $v_get = filter_var($v_get, FILTER_VALIDATE_BOOLEAN);
      //Setting the aggregate query
      $pipeline = [
          [
              '$match' => [
                  'isPotentiallyHazardousAsteroid' => $v_get,
              ]
          ],
          [
              '$group' => [
                  '_id' => ['month' => [ '$month' => '$date' ]],
                  'count' => [ '$sum' => 1]
              ]
          ]
      ];

      $dm = $this->get('doctrine_mongodb')->getManager();
      $collection = $dm->getDocumentCollection(Data::class);
      $query = $collection->aggregate($pipeline)->toArray();
      $hazardous = $serializer->serialize($query,  'json');
      if (!$hazardous) {
        throw $this->createNotFoundException('No data found');
      }
      return $this->render('AppBundle:Default:index.html.twig', array('response' => $hazardous));
    }
}
