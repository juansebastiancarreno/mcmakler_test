<?php
namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use JMS\Serializer\Annotation as Serializer;

/**
 * @MongoDB\Document
 */
class Data
{
    /**
     * @MongoDB\Id
     */
    protected $id;

     /**
      * @MongoDB\Field(type="date")
      * @Serializer\Type("date")
      */
     protected $date;

    /**
     * @MongoDB\Field(type="string")
     * @Serializer\Type("string")
     */
    protected $neoReferenceId;

    /**
     * @MongoDB\Field(type="string")
     * @Serializer\Type("string")
     */
    protected $name;

    /**
     * @MongoDB\Field(type="float")
     * @Serializer\Type("float")
     */
    protected $kilometersPerHour;

    /**
     * @MongoDB\Field(type="bool")
     * @Serializer\Type("bool")
     */
    protected $isPotentiallyHazardousAsteroid;

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param date $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Get date
     *
     * @return date $date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set neo_reference_id
     *
     * @param string $neo_reference_id
     * @return $this
     */
    public function setNeoReferenceId($neoReferenceId)
    {
        $this->neoReferenceId = $neoReferenceId;
        return $this;
    }

    /**
     * Get neo_reference_id
     *
     * @return string $neo_reference_id
     */
    public function getNeoReferenceId()
    {
        return $this->neoReferenceId;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set kilometers_per_hour
     *
     * @param float $kilometers_per_hour
     * @return $this
     */
    public function setKilometersPerHour($kilometersPerHour)
    {
        $this->kilometersPerHour = $kilometersPerHour;
        return $this;
    }

    /**
     * Get kilometersPerHour
     *
     * @return float $$kilometersPerHour
     */
    public function getKilometersPerHour()
    {
        return $this->kilometersPerHour;
    }


    /**
     * Set is_potentially_hazardous_asteroid
     *
     * @param bool $hazardous
     * @return $this
     */
    public function setIsPotentiallyHazardousAsteroid($isPotentiallyHazardousAsteroid)
    {
        $this->isPotentiallyHazardousAsteroid = $isPotentiallyHazardousAsteroid;
        return $this;
    }

    /**
     * Get is_potentially_hazardous_asteroid
     *
     * @return bool $is_potentially_hazardous_asteroid
     */
    public function getIsPotentiallyHazardousAsteroid()
    {
        return $this->isPotentiallyHazardousAsteroid;
    }
}
