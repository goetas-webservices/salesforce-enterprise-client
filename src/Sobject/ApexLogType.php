<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing ApexLogType
 *
 *
 * XSD Type: ApexLog
 */
class ApexLogType extends SObjectType
{

    /**
     * @property string $application
     */
    private $application = null;

    /**
     * @property int $durationMilliseconds
     */
    private $durationMilliseconds = null;

    /**
     * @property \DateTime $lastModifiedDate
     */
    private $lastModifiedDate = null;

    /**
     * @property string $location
     */
    private $location = null;

    /**
     * @property int $logLength
     */
    private $logLength = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $logUser
     */
    private $logUser = null;

    /**
     * @property string $logUserId
     */
    private $logUserId = null;

    /**
     * @property string $operation
     */
    private $operation = null;

    /**
     * @property string $request
     */
    private $request = null;

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
     * Gets as application
     *
     * @return string
     */
    public function getApplication()
    {
        return $this->application;
    }

    /**
     * Sets a new application
     *
     * @param string $application
     * @return self
     */
    public function setApplication($application)
    {
        $this->application = $application;
        return $this;
    }

    /**
     * Gets as durationMilliseconds
     *
     * @return int
     */
    public function getDurationMilliseconds()
    {
        return $this->durationMilliseconds;
    }

    /**
     * Sets a new durationMilliseconds
     *
     * @param int $durationMilliseconds
     * @return self
     */
    public function setDurationMilliseconds($durationMilliseconds)
    {
        $this->durationMilliseconds = $durationMilliseconds;
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
     * Gets as location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * @param string $location
     * @return self
     */
    public function setLocation($location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Gets as logLength
     *
     * @return int
     */
    public function getLogLength()
    {
        return $this->logLength;
    }

    /**
     * Sets a new logLength
     *
     * @param int $logLength
     * @return self
     */
    public function setLogLength($logLength)
    {
        $this->logLength = $logLength;
        return $this;
    }

    /**
     * Gets as logUser
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType
     */
    public function getLogUser()
    {
        return $this->logUser;
    }

    /**
     * Sets a new logUser
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $logUser
     * @return self
     */
    public function setLogUser(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $logUser)
    {
        $this->logUser = $logUser;
        return $this;
    }

    /**
     * Gets as logUserId
     *
     * @return string
     */
    public function getLogUserId()
    {
        return $this->logUserId;
    }

    /**
     * Sets a new logUserId
     *
     * @param string $logUserId
     * @return self
     */
    public function setLogUserId($logUserId)
    {
        $this->logUserId = $logUserId;
        return $this;
    }

    /**
     * Gets as operation
     *
     * @return string
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * Sets a new operation
     *
     * @param string $operation
     * @return self
     */
    public function setOperation($operation)
    {
        $this->operation = $operation;
        return $this;
    }

    /**
     * Gets as request
     *
     * @return string
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets a new request
     *
     * @param string $request
     * @return self
     */
    public function setRequest($request)
    {
        $this->request = $request;
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


}

