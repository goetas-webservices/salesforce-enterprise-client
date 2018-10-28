<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing BackgroundOperationType
 *
 *
 * XSD Type: BackgroundOperation
 */
class BackgroundOperationType extends SObjectType
{

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
     * @property string $error
     */
    private $error = null;

    /**
     * @property string $executionGroup
     */
    private $executionGroup = null;

    /**
     * @property \DateTime $expiresAt
     */
    private $expiresAt = null;

    /**
     * @property \DateTime $finishedAt
     */
    private $finishedAt = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\BackgroundOperationType $groupLeader
     */
    private $groupLeader = null;

    /**
     * @property string $groupLeaderId
     */
    private $groupLeaderId = null;

    /**
     * @property bool $isDeleted
     */
    private $isDeleted = null;

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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $mergedOperations
     */
    private $mergedOperations = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property int $numFollowers
     */
    private $numFollowers = null;

    /**
     * @property string $parentKey
     */
    private $parentKey = null;

    /**
     * @property \DateTime $processAfter
     */
    private $processAfter = null;

    /**
     * @property int $retryBackoff
     */
    private $retryBackoff = null;

    /**
     * @property int $retryCount
     */
    private $retryCount = null;

    /**
     * @property int $retryLimit
     */
    private $retryLimit = null;

    /**
     * @property string $sequenceGroup
     */
    private $sequenceGroup = null;

    /**
     * @property int $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * @property \DateTime $startedAt
     */
    private $startedAt = null;

    /**
     * @property string $status
     */
    private $status = null;

    /**
     * @property \DateTime $submittedAt
     */
    private $submittedAt = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property int $timeout
     */
    private $timeout = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserRecordAccessType $userRecordAccess
     */
    private $userRecordAccess = null;

    /**
     * @property string $workerUri
     */
    private $workerUri = null;

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
     * Gets as error
     *
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Sets a new error
     *
     * @param string $error
     * @return self
     */
    public function setError($error)
    {
        $this->error = $error;
        return $this;
    }

    /**
     * Gets as executionGroup
     *
     * @return string
     */
    public function getExecutionGroup()
    {
        return $this->executionGroup;
    }

    /**
     * Sets a new executionGroup
     *
     * @param string $executionGroup
     * @return self
     */
    public function setExecutionGroup($executionGroup)
    {
        $this->executionGroup = $executionGroup;
        return $this;
    }

    /**
     * Gets as expiresAt
     *
     * @return \DateTime
     */
    public function getExpiresAt()
    {
        return $this->expiresAt;
    }

    /**
     * Sets a new expiresAt
     *
     * @param \DateTime $expiresAt
     * @return self
     */
    public function setExpiresAt(\DateTime $expiresAt)
    {
        $this->expiresAt = $expiresAt;
        return $this;
    }

    /**
     * Gets as finishedAt
     *
     * @return \DateTime
     */
    public function getFinishedAt()
    {
        return $this->finishedAt;
    }

    /**
     * Sets a new finishedAt
     *
     * @param \DateTime $finishedAt
     * @return self
     */
    public function setFinishedAt(\DateTime $finishedAt)
    {
        $this->finishedAt = $finishedAt;
        return $this;
    }

    /**
     * Gets as groupLeader
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\BackgroundOperationType
     */
    public function getGroupLeader()
    {
        return $this->groupLeader;
    }

    /**
     * Sets a new groupLeader
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\BackgroundOperationType $groupLeader
     * @return self
     */
    public function setGroupLeader(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\BackgroundOperationType $groupLeader)
    {
        $this->groupLeader = $groupLeader;
        return $this;
    }

    /**
     * Gets as groupLeaderId
     *
     * @return string
     */
    public function getGroupLeaderId()
    {
        return $this->groupLeaderId;
    }

    /**
     * Sets a new groupLeaderId
     *
     * @param string $groupLeaderId
     * @return self
     */
    public function setGroupLeaderId($groupLeaderId)
    {
        $this->groupLeaderId = $groupLeaderId;
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
     * Gets as mergedOperations
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getMergedOperations()
    {
        return $this->mergedOperations;
    }

    /**
     * Sets a new mergedOperations
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $mergedOperations
     * @return self
     */
    public function setMergedOperations(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $mergedOperations)
    {
        $this->mergedOperations = $mergedOperations;
        return $this;
    }

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as numFollowers
     *
     * @return int
     */
    public function getNumFollowers()
    {
        return $this->numFollowers;
    }

    /**
     * Sets a new numFollowers
     *
     * @param int $numFollowers
     * @return self
     */
    public function setNumFollowers($numFollowers)
    {
        $this->numFollowers = $numFollowers;
        return $this;
    }

    /**
     * Gets as parentKey
     *
     * @return string
     */
    public function getParentKey()
    {
        return $this->parentKey;
    }

    /**
     * Sets a new parentKey
     *
     * @param string $parentKey
     * @return self
     */
    public function setParentKey($parentKey)
    {
        $this->parentKey = $parentKey;
        return $this;
    }

    /**
     * Gets as processAfter
     *
     * @return \DateTime
     */
    public function getProcessAfter()
    {
        return $this->processAfter;
    }

    /**
     * Sets a new processAfter
     *
     * @param \DateTime $processAfter
     * @return self
     */
    public function setProcessAfter(\DateTime $processAfter)
    {
        $this->processAfter = $processAfter;
        return $this;
    }

    /**
     * Gets as retryBackoff
     *
     * @return int
     */
    public function getRetryBackoff()
    {
        return $this->retryBackoff;
    }

    /**
     * Sets a new retryBackoff
     *
     * @param int $retryBackoff
     * @return self
     */
    public function setRetryBackoff($retryBackoff)
    {
        $this->retryBackoff = $retryBackoff;
        return $this;
    }

    /**
     * Gets as retryCount
     *
     * @return int
     */
    public function getRetryCount()
    {
        return $this->retryCount;
    }

    /**
     * Sets a new retryCount
     *
     * @param int $retryCount
     * @return self
     */
    public function setRetryCount($retryCount)
    {
        $this->retryCount = $retryCount;
        return $this;
    }

    /**
     * Gets as retryLimit
     *
     * @return int
     */
    public function getRetryLimit()
    {
        return $this->retryLimit;
    }

    /**
     * Sets a new retryLimit
     *
     * @param int $retryLimit
     * @return self
     */
    public function setRetryLimit($retryLimit)
    {
        $this->retryLimit = $retryLimit;
        return $this;
    }

    /**
     * Gets as sequenceGroup
     *
     * @return string
     */
    public function getSequenceGroup()
    {
        return $this->sequenceGroup;
    }

    /**
     * Sets a new sequenceGroup
     *
     * @param string $sequenceGroup
     * @return self
     */
    public function setSequenceGroup($sequenceGroup)
    {
        $this->sequenceGroup = $sequenceGroup;
        return $this;
    }

    /**
     * Gets as sequenceNumber
     *
     * @return int
     */
    public function getSequenceNumber()
    {
        return $this->sequenceNumber;
    }

    /**
     * Sets a new sequenceNumber
     *
     * @param int $sequenceNumber
     * @return self
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->sequenceNumber = $sequenceNumber;
        return $this;
    }

    /**
     * Gets as startedAt
     *
     * @return \DateTime
     */
    public function getStartedAt()
    {
        return $this->startedAt;
    }

    /**
     * Sets a new startedAt
     *
     * @param \DateTime $startedAt
     * @return self
     */
    public function setStartedAt(\DateTime $startedAt)
    {
        $this->startedAt = $startedAt;
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
     * Gets as submittedAt
     *
     * @return \DateTime
     */
    public function getSubmittedAt()
    {
        return $this->submittedAt;
    }

    /**
     * Sets a new submittedAt
     *
     * @param \DateTime $submittedAt
     * @return self
     */
    public function setSubmittedAt(\DateTime $submittedAt)
    {
        $this->submittedAt = $submittedAt;
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
     * Gets as timeout
     *
     * @return int
     */
    public function getTimeout()
    {
        return $this->timeout;
    }

    /**
     * Sets a new timeout
     *
     * @param int $timeout
     * @return self
     */
    public function setTimeout($timeout)
    {
        $this->timeout = $timeout;
        return $this;
    }

    /**
     * Gets as userRecordAccess
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserRecordAccessType
     */
    public function getUserRecordAccess()
    {
        return $this->userRecordAccess;
    }

    /**
     * Sets a new userRecordAccess
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserRecordAccessType $userRecordAccess
     * @return self
     */
    public function setUserRecordAccess(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserRecordAccessType $userRecordAccess)
    {
        $this->userRecordAccess = $userRecordAccess;
        return $this;
    }

    /**
     * Gets as workerUri
     *
     * @return string
     */
    public function getWorkerUri()
    {
        return $this->workerUri;
    }

    /**
     * Sets a new workerUri
     *
     * @param string $workerUri
     * @return self
     */
    public function setWorkerUri($workerUri)
    {
        $this->workerUri = $workerUri;
        return $this;
    }


}

