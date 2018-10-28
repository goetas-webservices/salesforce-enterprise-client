<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing ProcessInstanceNodeType
 *
 *
 * XSD Type: ProcessInstanceNode
 */
class ProcessInstanceNodeType extends SObjectType
{

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
     * @property float $elapsedTimeInDays
     */
    private $elapsedTimeInDays = null;

    /**
     * @property float $elapsedTimeInHours
     */
    private $elapsedTimeInHours = null;

    /**
     * @property float $elapsedTimeInMinutes
     */
    private $elapsedTimeInMinutes = null;

    /**
     * @property bool $isDeleted
     */
    private $isDeleted = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $lastActor
     */
    private $lastActor = null;

    /**
     * @property string $lastActorId
     */
    private $lastActorId = null;

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
     * @property string $nodeStatus
     */
    private $nodeStatus = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ProcessInstanceType $processInstance
     */
    private $processInstance = null;

    /**
     * @property string $processInstanceId
     */
    private $processInstanceId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ProcessNodeType $processNode
     */
    private $processNode = null;

    /**
     * @property string $processNodeId
     */
    private $processNodeId = null;

    /**
     * @property string $processNodeName
     */
    private $processNodeName = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserRecordAccessType $userRecordAccess
     */
    private $userRecordAccess = null;

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
     * Gets as elapsedTimeInDays
     *
     * @return float
     */
    public function getElapsedTimeInDays()
    {
        return $this->elapsedTimeInDays;
    }

    /**
     * Sets a new elapsedTimeInDays
     *
     * @param float $elapsedTimeInDays
     * @return self
     */
    public function setElapsedTimeInDays($elapsedTimeInDays)
    {
        $this->elapsedTimeInDays = $elapsedTimeInDays;
        return $this;
    }

    /**
     * Gets as elapsedTimeInHours
     *
     * @return float
     */
    public function getElapsedTimeInHours()
    {
        return $this->elapsedTimeInHours;
    }

    /**
     * Sets a new elapsedTimeInHours
     *
     * @param float $elapsedTimeInHours
     * @return self
     */
    public function setElapsedTimeInHours($elapsedTimeInHours)
    {
        $this->elapsedTimeInHours = $elapsedTimeInHours;
        return $this;
    }

    /**
     * Gets as elapsedTimeInMinutes
     *
     * @return float
     */
    public function getElapsedTimeInMinutes()
    {
        return $this->elapsedTimeInMinutes;
    }

    /**
     * Sets a new elapsedTimeInMinutes
     *
     * @param float $elapsedTimeInMinutes
     * @return self
     */
    public function setElapsedTimeInMinutes($elapsedTimeInMinutes)
    {
        $this->elapsedTimeInMinutes = $elapsedTimeInMinutes;
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
     * Gets as lastActor
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType
     */
    public function getLastActor()
    {
        return $this->lastActor;
    }

    /**
     * Sets a new lastActor
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $lastActor
     * @return self
     */
    public function setLastActor(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $lastActor)
    {
        $this->lastActor = $lastActor;
        return $this;
    }

    /**
     * Gets as lastActorId
     *
     * @return string
     */
    public function getLastActorId()
    {
        return $this->lastActorId;
    }

    /**
     * Sets a new lastActorId
     *
     * @param string $lastActorId
     * @return self
     */
    public function setLastActorId($lastActorId)
    {
        $this->lastActorId = $lastActorId;
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
     * Gets as nodeStatus
     *
     * @return string
     */
    public function getNodeStatus()
    {
        return $this->nodeStatus;
    }

    /**
     * Sets a new nodeStatus
     *
     * @param string $nodeStatus
     * @return self
     */
    public function setNodeStatus($nodeStatus)
    {
        $this->nodeStatus = $nodeStatus;
        return $this;
    }

    /**
     * Gets as processInstance
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ProcessInstanceType
     */
    public function getProcessInstance()
    {
        return $this->processInstance;
    }

    /**
     * Sets a new processInstance
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ProcessInstanceType $processInstance
     * @return self
     */
    public function setProcessInstance(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\ProcessInstanceType $processInstance)
    {
        $this->processInstance = $processInstance;
        return $this;
    }

    /**
     * Gets as processInstanceId
     *
     * @return string
     */
    public function getProcessInstanceId()
    {
        return $this->processInstanceId;
    }

    /**
     * Sets a new processInstanceId
     *
     * @param string $processInstanceId
     * @return self
     */
    public function setProcessInstanceId($processInstanceId)
    {
        $this->processInstanceId = $processInstanceId;
        return $this;
    }

    /**
     * Gets as processNode
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ProcessNodeType
     */
    public function getProcessNode()
    {
        return $this->processNode;
    }

    /**
     * Sets a new processNode
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ProcessNodeType $processNode
     * @return self
     */
    public function setProcessNode(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\ProcessNodeType $processNode)
    {
        $this->processNode = $processNode;
        return $this;
    }

    /**
     * Gets as processNodeId
     *
     * @return string
     */
    public function getProcessNodeId()
    {
        return $this->processNodeId;
    }

    /**
     * Sets a new processNodeId
     *
     * @param string $processNodeId
     * @return self
     */
    public function setProcessNodeId($processNodeId)
    {
        $this->processNodeId = $processNodeId;
        return $this;
    }

    /**
     * Gets as processNodeName
     *
     * @return string
     */
    public function getProcessNodeName()
    {
        return $this->processNodeName;
    }

    /**
     * Sets a new processNodeName
     *
     * @param string $processNodeName
     * @return self
     */
    public function setProcessNodeName($processNodeName)
    {
        $this->processNodeName = $processNodeName;
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


}

