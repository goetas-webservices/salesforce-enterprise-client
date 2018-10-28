<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing DatacloudAddressType
 *
 *
 * XSD Type: DatacloudAddress
 */
class DatacloudAddressType extends SObjectType
{

    /**
     * @property string $addressLine1
     */
    private $addressLine1 = null;

    /**
     * @property string $addressLine2
     */
    private $addressLine2 = null;

    /**
     * @property string $city
     */
    private $city = null;

    /**
     * @property string $country
     */
    private $country = null;

    /**
     * @property string $externalId
     */
    private $externalId = null;

    /**
     * @property string $geoAccuracyCode
     */
    private $geoAccuracyCode = null;

    /**
     * @property string $geoAccuracyNum
     */
    private $geoAccuracyNum = null;

    /**
     * @property string $latitude
     */
    private $latitude = null;

    /**
     * @property string $longitude
     */
    private $longitude = null;

    /**
     * @property string $postalCode
     */
    private $postalCode = null;

    /**
     * @property string $state
     */
    private $state = null;

    /**
     * Gets as addressLine1
     *
     * @return string
     */
    public function getAddressLine1()
    {
        return $this->addressLine1;
    }

    /**
     * Sets a new addressLine1
     *
     * @param string $addressLine1
     * @return self
     */
    public function setAddressLine1($addressLine1)
    {
        $this->addressLine1 = $addressLine1;
        return $this;
    }

    /**
     * Gets as addressLine2
     *
     * @return string
     */
    public function getAddressLine2()
    {
        return $this->addressLine2;
    }

    /**
     * Sets a new addressLine2
     *
     * @param string $addressLine2
     * @return self
     */
    public function setAddressLine2($addressLine2)
    {
        $this->addressLine2 = $addressLine2;
        return $this;
    }

    /**
     * Gets as city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Sets a new city
     *
     * @param string $city
     * @return self
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * Gets as country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets a new country
     *
     * @param string $country
     * @return self
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * Gets as externalId
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * Sets a new externalId
     *
     * @param string $externalId
     * @return self
     */
    public function setExternalId($externalId)
    {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * Gets as geoAccuracyCode
     *
     * @return string
     */
    public function getGeoAccuracyCode()
    {
        return $this->geoAccuracyCode;
    }

    /**
     * Sets a new geoAccuracyCode
     *
     * @param string $geoAccuracyCode
     * @return self
     */
    public function setGeoAccuracyCode($geoAccuracyCode)
    {
        $this->geoAccuracyCode = $geoAccuracyCode;
        return $this;
    }

    /**
     * Gets as geoAccuracyNum
     *
     * @return string
     */
    public function getGeoAccuracyNum()
    {
        return $this->geoAccuracyNum;
    }

    /**
     * Sets a new geoAccuracyNum
     *
     * @param string $geoAccuracyNum
     * @return self
     */
    public function setGeoAccuracyNum($geoAccuracyNum)
    {
        $this->geoAccuracyNum = $geoAccuracyNum;
        return $this;
    }

    /**
     * Gets as latitude
     *
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Sets a new latitude
     *
     * @param string $latitude
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
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Sets a new longitude
     *
     * @param string $longitude
     * @return self
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * Gets as postalCode
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Sets a new postalCode
     *
     * @param string $postalCode
     * @return self
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    /**
     * Gets as state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Sets a new state
     *
     * @param string $state
     * @return self
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }


}

