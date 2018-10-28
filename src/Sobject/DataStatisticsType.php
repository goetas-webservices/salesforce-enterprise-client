<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing DataStatisticsType
 *
 *
 * XSD Type: DataStatistics
 */
class DataStatisticsType extends SObjectType
{

    /**
     * @property string $externalId
     */
    private $externalId = null;

    /**
     * @property string $statType
     */
    private $statType = null;

    /**
     * @property int $statValue
     */
    private $statValue = null;

    /**
     * @property string $type
     */
    private $type = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $user
     */
    private $user = null;

    /**
     * @property string $userId
     */
    private $userId = null;

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
     * Gets as statType
     *
     * @return string
     */
    public function getStatType()
    {
        return $this->statType;
    }

    /**
     * Sets a new statType
     *
     * @param string $statType
     * @return self
     */
    public function setStatType($statType)
    {
        $this->statType = $statType;
        return $this;
    }

    /**
     * Gets as statValue
     *
     * @return int
     */
    public function getStatValue()
    {
        return $this->statValue;
    }

    /**
     * Sets a new statValue
     *
     * @param int $statValue
     * @return self
     */
    public function setStatValue($statValue)
    {
        $this->statValue = $statValue;
        return $this;
    }

    /**
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as user
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Sets a new user
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $user
     * @return self
     */
    public function setUser(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * Gets as userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Sets a new userId
     *
     * @param string $userId
     * @return self
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }


}

