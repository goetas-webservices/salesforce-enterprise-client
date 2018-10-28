<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing LocationType
 *
 *
 * XSD Type: location
 */
class LocationType
{

    /**
     * @property float $latitude
     */
    private $latitude = null;

    /**
     * @property float $longitude
     */
    private $longitude = null;

    /**
     * Gets as latitude
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Sets a new latitude
     *
     * @param float $latitude
     * @return self
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * Gets as longitude
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Sets a new longitude
     *
     * @param float $longitude
     * @return self
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
        return $this;
    }


}

