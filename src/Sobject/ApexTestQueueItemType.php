<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing ApexTestQueueItemType
 *
 *
 * XSD Type: ApexTestQueueItem
 */
class ApexTestQueueItemType extends SObjectType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ApexClassType $apexClass
     */
    private $apexClass = null;

    /**
     * @property string $apexClassId
     */
    private $apexClassId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $createdBy
     */
    private $createdBy = null;

    /**
     * @property string $createdById
     */
    private $createdById = null;

    /**
     * @property \DateTime $createdDate
     */
    private $createdDate = null;

    /**
     * @property string $extendedStatus
     */
    private $extendedStatus = null;

    /**
     * @property string $parentJobId
     */
    private $parentJobId = null;

    /**
     * @property bool $shouldSkipCodeCoverage
     */
    private $shouldSkipCodeCoverage = null;

    /**
     * @property string $status
     */
    private $status = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property string $testRunResultId
     */
    private $testRunResultId = null;

    /**
     * Gets as apexClass
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ApexClassType
     */
    public function getApexClass()
    {
        return $this->apexClass;
    }

    /**
     * Sets a new apexClass
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ApexClassType $apexClass
     * @return self
     */
    public function setApexClass(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\ApexClassType $apexClass)
    {
        $this->apexClass = $apexClass;
        return $this;
    }

    /**
     * Gets as apexClassId
     *
     * @return string
     */
    public function getApexClassId()
    {
        return $this->apexClassId;
    }

    /**
     * Sets a new apexClassId
     *
     * @param string $apexClassId
     * @return self
     */
    public function setApexClassId($apexClassId)
    {
        $this->apexClassId = $apexClassId;
        return $this;
    }

    /**
     * Gets as createdBy
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Sets a new createdBy
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $createdBy
     * @return self
     */
    public function setCreatedBy(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $createdBy)
    {
        $this->createdBy = $createdBy;
        return $this;
    }

    /**
     * Gets as createdById
     *
     * @return string
     */
    public function getCreatedById()
    {
        return $this->createdById;
    }

    /**
     * Sets a new createdById
     *
     * @param string $createdById
     * @return self
     */
    public function setCreatedById($createdById)
    {
        $this->createdById = $createdById;
        return $this;
    }

    /**
     * Gets as createdDate
     *
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * Sets a new createdDate
     *
     * @param \DateTime $createdDate
     * @return self
     */
    public function setCreatedDate(\DateTime $createdDate)
    {
        $this->createdDate = $createdDate;
        return $this;
    }

    /**
     * Gets as extendedStatus
     *
     * @return string
     */
    public function getExtendedStatus()
    {
        return $this->extendedStatus;
    }

    /**
     * Sets a new extendedStatus
     *
     * @param string $extendedStatus
     * @return self
     */
    public function setExtendedStatus($extendedStatus)
    {
        $this->extendedStatus = $extendedStatus;
        return $this;
    }

    /**
     * Gets as parentJobId
     *
     * @return string
     */
    public function getParentJobId()
    {
        return $this->parentJobId;
    }

    /**
     * Sets a new parentJobId
     *
     * @param string $parentJobId
     * @return self
     */
    public function setParentJobId($parentJobId)
    {
        $this->parentJobId = $parentJobId;
        return $this;
    }

    /**
     * Gets as shouldSkipCodeCoverage
     *
     * @return bool
     */
    public function getShouldSkipCodeCoverage()
    {
        return $this->shouldSkipCodeCoverage;
    }

    /**
     * Sets a new shouldSkipCodeCoverage
     *
     * @param bool $shouldSkipCodeCoverage
     * @return self
     */
    public function setShouldSkipCodeCoverage($shouldSkipCodeCoverage)
    {
        $this->shouldSkipCodeCoverage = $shouldSkipCodeCoverage;
        return $this;
    }

    /**
     * Gets as status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
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
     * Gets as testRunResultId
     *
     * @return string
     */
    public function getTestRunResultId()
    {
        return $this->testRunResultId;
    }

    /**
     * Sets a new testRunResultId
     *
     * @param string $testRunResultId
     * @return self
     */
    public function setTestRunResultId($testRunResultId)
    {
        $this->testRunResultId = $testRunResultId;
        return $this;
    }


}

