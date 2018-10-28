<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing ApexTestRunResultType
 *
 *
 * XSD Type: ApexTestRunResult
 */
class ApexTestRunResultType extends SObjectType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AsyncApexJobType $asyncApexJob
     */
    private $asyncApexJob = null;

    /**
     * @property string $asyncApexJobId
     */
    private $asyncApexJobId = null;

    /**
     * @property int $classesCompleted
     */
    private $classesCompleted = null;

    /**
     * @property int $classesEnqueued
     */
    private $classesEnqueued = null;

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
     * @property \DateTime $endTime
     */
    private $endTime = null;

    /**
     * @property bool $isAllTests
     */
    private $isAllTests = null;

    /**
     * @property bool $isDeleted
     */
    private $isDeleted = null;

    /**
     * @property string $jobName
     */
    private $jobName = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $lastModifiedBy
     */
    private $lastModifiedBy = null;

    /**
     * @property string $lastModifiedById
     */
    private $lastModifiedById = null;

    /**
     * @property \DateTime $lastModifiedDate
     */
    private $lastModifiedDate = null;

    /**
     * @property int $methodsCompleted
     */
    private $methodsCompleted = null;

    /**
     * @property int $methodsEnqueued
     */
    private $methodsEnqueued = null;

    /**
     * @property int $methodsFailed
     */
    private $methodsFailed = null;

    /**
     * @property string $source
     */
    private $source = null;

    /**
     * @property \DateTime $startTime
     */
    private $startTime = null;

    /**
     * @property string $status
     */
    private $status = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property int $testTime
     */
    private $testTime = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $user
     */
    private $user = null;

    /**
     * @property string $userId
     */
    private $userId = null;

    /**
     * Gets as asyncApexJob
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AsyncApexJobType
     */
    public function getAsyncApexJob()
    {
        return $this->asyncApexJob;
    }

    /**
     * Sets a new asyncApexJob
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AsyncApexJobType $asyncApexJob
     * @return self
     */
    public function setAsyncApexJob(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\AsyncApexJobType $asyncApexJob)
    {
        $this->asyncApexJob = $asyncApexJob;
        return $this;
    }

    /**
     * Gets as asyncApexJobId
     *
     * @return string
     */
    public function getAsyncApexJobId()
    {
        return $this->asyncApexJobId;
    }

    /**
     * Sets a new asyncApexJobId
     *
     * @param string $asyncApexJobId
     * @return self
     */
    public function setAsyncApexJobId($asyncApexJobId)
    {
        $this->asyncApexJobId = $asyncApexJobId;
        return $this;
    }

    /**
     * Gets as classesCompleted
     *
     * @return int
     */
    public function getClassesCompleted()
    {
        return $this->classesCompleted;
    }

    /**
     * Sets a new classesCompleted
     *
     * @param int $classesCompleted
     * @return self
     */
    public function setClassesCompleted($classesCompleted)
    {
        $this->classesCompleted = $classesCompleted;
        return $this;
    }

    /**
     * Gets as classesEnqueued
     *
     * @return int
     */
    public function getClassesEnqueued()
    {
        return $this->classesEnqueued;
    }

    /**
     * Sets a new classesEnqueued
     *
     * @param int $classesEnqueued
     * @return self
     */
    public function setClassesEnqueued($classesEnqueued)
    {
        $this->classesEnqueued = $classesEnqueued;
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
     * Gets as endTime
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Sets a new endTime
     *
     * @param \DateTime $endTime
     * @return self
     */
    public function setEndTime(\DateTime $endTime)
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * Gets as isAllTests
     *
     * @return bool
     */
    public function getIsAllTests()
    {
        return $this->isAllTests;
    }

    /**
     * Sets a new isAllTests
     *
     * @param bool $isAllTests
     * @return self
     */
    public function setIsAllTests($isAllTests)
    {
        $this->isAllTests = $isAllTests;
        return $this;
    }

    /**
     * Gets as isDeleted
     *
     * @return bool
     */
    public function getIsDeleted()
    {
        return $this->isDeleted;
    }

    /**
     * Sets a new isDeleted
     *
     * @param bool $isDeleted
     * @return self
     */
    public function setIsDeleted($isDeleted)
    {
        $this->isDeleted = $isDeleted;
        return $this;
    }

    /**
     * Gets as jobName
     *
     * @return string
     */
    public function getJobName()
    {
        return $this->jobName;
    }

    /**
     * Sets a new jobName
     *
     * @param string $jobName
     * @return self
     */
    public function setJobName($jobName)
    {
        $this->jobName = $jobName;
        return $this;
    }

    /**
     * Gets as lastModifiedBy
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType
     */
    public function getLastModifiedBy()
    {
        return $this->lastModifiedBy;
    }

    /**
     * Sets a new lastModifiedBy
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $lastModifiedBy
     * @return self
     */
    public function setLastModifiedBy(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $lastModifiedBy)
    {
        $this->lastModifiedBy = $lastModifiedBy;
        return $this;
    }

    /**
     * Gets as lastModifiedById
     *
     * @return string
     */
    public function getLastModifiedById()
    {
        return $this->lastModifiedById;
    }

    /**
     * Sets a new lastModifiedById
     *
     * @param string $lastModifiedById
     * @return self
     */
    public function setLastModifiedById($lastModifiedById)
    {
        $this->lastModifiedById = $lastModifiedById;
        return $this;
    }

    /**
     * Gets as lastModifiedDate
     *
     * @return \DateTime
     */
    public function getLastModifiedDate()
    {
        return $this->lastModifiedDate;
    }

    /**
     * Sets a new lastModifiedDate
     *
     * @param \DateTime $lastModifiedDate
     * @return self
     */
    public function setLastModifiedDate(\DateTime $lastModifiedDate)
    {
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }

    /**
     * Gets as methodsCompleted
     *
     * @return int
     */
    public function getMethodsCompleted()
    {
        return $this->methodsCompleted;
    }

    /**
     * Sets a new methodsCompleted
     *
     * @param int $methodsCompleted
     * @return self
     */
    public function setMethodsCompleted($methodsCompleted)
    {
        $this->methodsCompleted = $methodsCompleted;
        return $this;
    }

    /**
     * Gets as methodsEnqueued
     *
     * @return int
     */
    public function getMethodsEnqueued()
    {
        return $this->methodsEnqueued;
    }

    /**
     * Sets a new methodsEnqueued
     *
     * @param int $methodsEnqueued
     * @return self
     */
    public function setMethodsEnqueued($methodsEnqueued)
    {
        $this->methodsEnqueued = $methodsEnqueued;
        return $this;
    }

    /**
     * Gets as methodsFailed
     *
     * @return int
     */
    public function getMethodsFailed()
    {
        return $this->methodsFailed;
    }

    /**
     * Sets a new methodsFailed
     *
     * @param int $methodsFailed
     * @return self
     */
    public function setMethodsFailed($methodsFailed)
    {
        $this->methodsFailed = $methodsFailed;
        return $this;
    }

    /**
     * Gets as source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Sets a new source
     *
     * @param string $source
     * @return self
     */
    public function setSource($source)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * Gets as startTime
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Sets a new startTime
     *
     * @param \DateTime $startTime
     * @return self
     */
    public function setStartTime(\DateTime $startTime)
    {
        $this->startTime = $startTime;
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
     * Gets as testTime
     *
     * @return int
     */
    public function getTestTime()
    {
        return $this->testTime;
    }

    /**
     * Sets a new testTime
     *
     * @param int $testTime
     * @return self
     */
    public function setTestTime($testTime)
    {
        $this->testTime = $testTime;
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

