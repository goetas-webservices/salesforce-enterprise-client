<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing AsyncApexJobType
 *
 *
 * XSD Type: AsyncApexJob
 */
class AsyncApexJobType extends SObjectType
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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $asyncApex
     */
    private $asyncApex = null;

    /**
     * @property \DateTime $completedDate
     */
    private $completedDate = null;

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
     * @property int $jobItemsProcessed
     */
    private $jobItemsProcessed = null;

    /**
     * @property string $jobType
     */
    private $jobType = null;

    /**
     * @property string $lastProcessed
     */
    private $lastProcessed = null;

    /**
     * @property int $lastProcessedOffset
     */
    private $lastProcessedOffset = null;

    /**
     * @property string $methodName
     */
    private $methodName = null;

    /**
     * @property int $numberOfErrors
     */
    private $numberOfErrors = null;

    /**
     * @property string $parentJobId
     */
    private $parentJobId = null;

    /**
     * @property string $status
     */
    private $status = null;

    /**
     * @property int $totalJobItems
     */
    private $totalJobItems = null;

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
     * Gets as asyncApex
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getAsyncApex()
    {
        return $this->asyncApex;
    }

    /**
     * Sets a new asyncApex
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $asyncApex
     * @return self
     */
    public function setAsyncApex(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $asyncApex)
    {
        $this->asyncApex = $asyncApex;
        return $this;
    }

    /**
     * Gets as completedDate
     *
     * @return \DateTime
     */
    public function getCompletedDate()
    {
        return $this->completedDate;
    }

    /**
     * Sets a new completedDate
     *
     * @param \DateTime $completedDate
     * @return self
     */
    public function setCompletedDate(\DateTime $completedDate)
    {
        $this->completedDate = $completedDate;
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
     * Gets as jobItemsProcessed
     *
     * @return int
     */
    public function getJobItemsProcessed()
    {
        return $this->jobItemsProcessed;
    }

    /**
     * Sets a new jobItemsProcessed
     *
     * @param int $jobItemsProcessed
     * @return self
     */
    public function setJobItemsProcessed($jobItemsProcessed)
    {
        $this->jobItemsProcessed = $jobItemsProcessed;
        return $this;
    }

    /**
     * Gets as jobType
     *
     * @return string
     */
    public function getJobType()
    {
        return $this->jobType;
    }

    /**
     * Sets a new jobType
     *
     * @param string $jobType
     * @return self
     */
    public function setJobType($jobType)
    {
        $this->jobType = $jobType;
        return $this;
    }

    /**
     * Gets as lastProcessed
     *
     * @return string
     */
    public function getLastProcessed()
    {
        return $this->lastProcessed;
    }

    /**
     * Sets a new lastProcessed
     *
     * @param string $lastProcessed
     * @return self
     */
    public function setLastProcessed($lastProcessed)
    {
        $this->lastProcessed = $lastProcessed;
        return $this;
    }

    /**
     * Gets as lastProcessedOffset
     *
     * @return int
     */
    public function getLastProcessedOffset()
    {
        return $this->lastProcessedOffset;
    }

    /**
     * Sets a new lastProcessedOffset
     *
     * @param int $lastProcessedOffset
     * @return self
     */
    public function setLastProcessedOffset($lastProcessedOffset)
    {
        $this->lastProcessedOffset = $lastProcessedOffset;
        return $this;
    }

    /**
     * Gets as methodName
     *
     * @return string
     */
    public function getMethodName()
    {
        return $this->methodName;
    }

    /**
     * Sets a new methodName
     *
     * @param string $methodName
     * @return self
     */
    public function setMethodName($methodName)
    {
        $this->methodName = $methodName;
        return $this;
    }

    /**
     * Gets as numberOfErrors
     *
     * @return int
     */
    public function getNumberOfErrors()
    {
        return $this->numberOfErrors;
    }

    /**
     * Sets a new numberOfErrors
     *
     * @param int $numberOfErrors
     * @return self
     */
    public function setNumberOfErrors($numberOfErrors)
    {
        $this->numberOfErrors = $numberOfErrors;
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
     * Gets as totalJobItems
     *
     * @return int
     */
    public function getTotalJobItems()
    {
        return $this->totalJobItems;
    }

    /**
     * Sets a new totalJobItems
     *
     * @param int $totalJobItems
     * @return self
     */
    public function setTotalJobItems($totalJobItems)
    {
        $this->totalJobItems = $totalJobItems;
        return $this;
    }


}

