<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('{"Hello":"World"}', $crawler->filter('')->text());
    }

    public function testHazardous()
    {
        $client = static::createClient();

        $crawler = $client->request(
            'GET', '/neo/hazardous', array(), array(),
            array(
                'CONTENT_TYPE'          => 'application/json'
            )
        );

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('name', $crawler->filter('')->text());
    }

    public function testFastest()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/neo/fastest', array(
                "hazardous"        => true), array(),
            array('CONTENT_TYPE'          => 'application/json'
            )
        );

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('name', $crawler->filter('')->text());
    }

    public function testBestYear()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/neo/best-year', array(
                "hazardous"        => true), array(),
            array('CONTENT_TYPE'          => 'application/json'
            )
        );

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('year', $crawler->filter('')->text());
    }

    public function testBestMonth()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/neo/best-month', array(
                "hazardous"        => true), array(),
            array('CONTENT_TYPE'          => 'application/json'
            )
        );

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('month', $crawler->filter('')->text());
    }
}
