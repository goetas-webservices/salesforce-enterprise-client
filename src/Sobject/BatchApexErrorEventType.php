<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing BatchApexErrorEventType
 *
 *
 * XSD Type: BatchApexErrorEvent
 */
class BatchApexErrorEventType extends SObjectType
{

    /**
     * @property string $asyncApexJobId
     */
    private $asyncApexJobId = null;

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
     * @property bool $doesExceedJobScopeMaxLength
     */
    private $doesExceedJobScopeMaxLength = null;

    /**
     * @property string $exceptionType
     */
    private $exceptionType = null;

    /**
     * @property string $jobScope
     */
    private $jobScope = null;

    /**
     * @property string $message
     */
    private $message = null;

    /**
     * @property string $replayId
     */
    private $replayId = null;

    /**
     * @property string $requestId
     */
    private $requestId = null;

    /**
     * @property string $stackTrace
     */
    private $stackTrace = null;

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
     * Gets as doesExceedJobScopeMaxLength
     *
     * @return bool
     */
    public function getDoesExceedJobScopeMaxLength()
    {
        return $this->doesExceedJobScopeMaxLength;
    }

    /**
     * Sets a new doesExceedJobScopeMaxLength
     *
     * @param bool $doesExceedJobScopeMaxLength
     * @return self
     */
    public function setDoesExceedJobScopeMaxLength($doesExceedJobScopeMaxLength)
    {
        $this->doesExceedJobScopeMaxLength = $doesExceedJobScopeMaxLength;
        return $this;
    }

    /**
     * Gets as exceptionType
     *
     * @return string
     */
    public function getExceptionType()
    {
        return $this->exceptionType;
    }

    /**
     * Sets a new exceptionType
     *
     * @param string $exceptionType
     * @return self
     */
    public function setExceptionType($exceptionType)
    {
        $this->exceptionType = $exceptionType;
        return $this;
    }

    /**
     * Gets as jobScope
     *
     * @return string
     */
    public function getJobScope()
    {
        return $this->jobScope;
    }

    /**
     * Sets a new jobScope
     *
     * @param string $jobScope
     * @return self
     */
    public function setJobScope($jobScope)
    {
        $this->jobScope = $jobScope;
        return $this;
    }

    /**
     * Gets as message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Sets a new message
     *
     * @param string $message
     * @return self
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    /**
     * Gets as replayId
     *
     * @return string
     */
    public function getReplayId()
    {
        return $this->replayId;
    }

    /**
     * Sets a new replayId
     *
     * @param string $replayId
     * @return self
     */
    public function setReplayId($replayId)
    {
        $this->replayId = $replayId;
        return $this;
    }

    /**
     * Gets as requestId
     *
     * @return string
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * Sets a new requestId
     *
     * @param string $requestId
     * @return self
     */
    public function setRequestId($requestId)
    {
        $this->requestId = $requestId;
        return $this;
    }

    /**
     * Gets as stackTrace
     *
     * @return string
     */
    public function getStackTrace()
    {
        return $this->stackTrace;
    }

    /**
     * Sets a new stackTrace
     *
     * @param string $stackTrace
     * @return self
     */
    public function setStackTrace($stackTrace)
    {
        $this->stackTrace = $stackTrace;
        return $this;
    }


}

