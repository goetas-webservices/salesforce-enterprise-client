<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing CustomObjectUserLicenseMetricsType
 *
 *
 * XSD Type: CustomObjectUserLicenseMetrics
 */
class CustomObjectUserLicenseMetricsType extends SObjectType
{

    /**
     * @property string $customObjectId
     */
    private $customObjectId = null;

    /**
     * @property string $customObjectName
     */
    private $customObjectName = null;

    /**
     * @property string $customObjectType
     */
    private $customObjectType = null;

    /**
     * @property \DateTime $metricsDate
     */
    private $metricsDate = null;

    /**
     * @property int $objectCount
     */
    private $objectCount = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserLicenseType $userLicense
     */
    private $userLicense = null;

    /**
     * @property string $userLicenseId
     */
    private $userLicenseId = null;

    /**
     * Gets as customObjectId
     *
     * @return string
     */
    public function getCustomObjectId()
    {
        return $this->customObjectId;
    }

    /**
     * Sets a new customObjectId
     *
     * @param string $customObjectId
     * @return self
     */
    public function setCustomObjectId($customObjectId)
    {
        $this->customObjectId = $customObjectId;
        return $this;
    }

    /**
     * Gets as customObjectName
     *
     * @return string
     */
    public function getCustomObjectName()
    {
        return $this->customObjectName;
    }

    /**
     * Sets a new customObjectName
     *
     * @param string $customObjectName
     * @return self
     */
    public function setCustomObjectName($customObjectName)
    {
        $this->customObjectName = $customObjectName;
        return $this;
    }

    /**
     * Gets as customObjectType
     *
     * @return string
     */
    public function getCustomObjectType()
    {
        return $this->customObjectType;
    }

    /**
     * Sets a new customObjectType
     *
     * @param string $customObjectType
     * @return self
     */
    public function setCustomObjectType($customObjectType)
    {
        $this->customObjectType = $customObjectType;
        return $this;
    }

    /**
     * Gets as metricsDate
     *
     * @return \DateTime
     */
    public function getMetricsDate()
    {
        return $this->metricsDate;
    }

    /**
     * Sets a new metricsDate
     *
     * @param \DateTime $metricsDate
     * @return self
     */
    public function setMetricsDate(\DateTime $metricsDate)
    {
        $this->metricsDate = $metricsDate;
        return $this;
    }

    /**
     * Gets as objectCount
     *
     * @return int
     */
    public function getObjectCount()
    {
        return $this->objectCount;
    }

    /**
     * Sets a new objectCount
     *
     * @param int $objectCount
     * @return self
     */
    public function setObjectCount($objectCount)
    {
        $this->objectCount = $objectCount;
        return $this;
    }

    /**
     * Gets as systemModstamp
     *
     * @return \DateTime
     */
    public function getSystemModstamp()
    {
        return $this->systemModstamp;
    }

    /**
     * Sets a new systemModstamp
     *
     * @param \DateTime $systemModstamp
     * @return self
     */
    public function setSystemModstamp(\DateTime $systemModstamp)
    {
        $this->systemModstamp = $systemModstamp;
        return $this;
    }

    /**
     * Gets as userLicense
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserLicenseType
     */
    public function getUserLicense()
    {
        return $this->userLicense;
    }

    /**
     * Sets a new userLicense
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserLicenseType $userLicense
     * @return self
     */
    public function setUserLicense(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserLicenseType $userLicense)
    {
        $this->userLicense = $userLicense;
        return $this;
    }

    /**
     * Gets as userLicenseId
     *
     * @return string
     */
    public function getUserLicenseId()
    {
        return $this->userLicenseId;
    }

    /**
     * Sets a new userLicenseId
     *
     * @param string $userLicenseId
     * @return self
     */
    public function setUserLicenseId($userLicenseId)
    {
        $this->userLicenseId = $userLicenseId;
        return $this;
    }


}

