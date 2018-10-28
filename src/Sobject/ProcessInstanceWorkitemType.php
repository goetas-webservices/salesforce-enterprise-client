<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing ProcessInstanceWorkitemType
 *
 *
 * XSD Type: ProcessInstanceWorkitem
 */
class ProcessInstanceWorkitemType extends SObjectType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $actor
     */
    private $actor = null;

    /**
     * @property string $actorId
     */
    private $actorId = null;

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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $originalActor
     */
    private $originalActor = null;

    /**
     * @property string $originalActorId
     */
    private $originalActorId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ProcessInstanceType $processInstance
     */
    private $processInstance = null;

    /**
     * @property string $processInstanceId
     */
    private $processInstanceId = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * Gets as actor
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * Sets a new actor
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $actor
     * @return self
     */
    public function setActor(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $actor)
    {
        $this->actor = $actor;
        return $this;
    }

    /**
     * Gets as actorId
     *
     * @return string
     */
    public function getActorId()
    {
        return $this->actorId;
    }

    /**
     * Sets a new actorId
     *
     * @param string $actorId
     * @return self
     */
    public function setActorId($actorId)
    {
        $this->actorId = $actorId;
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
     * Gets as originalActor
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType
     */
    public function getOriginalActor()
    {
        return $this->originalActor;
    }

    /**
     * Sets a new originalActor
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $originalActor
     * @return self
     */
    public function setOriginalActor(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $originalActor)
    {
        $this->originalActor = $originalActor;
        return $this;
    }

    /**
     * Gets as originalActorId
     *
     * @return string
     */
    public function getOriginalActorId()
    {
        return $this->originalActorId;
    }

    /**
     * Sets a new originalActorId
     *
     * @param string $originalActorId
     * @return self
     */
    public function setOriginalActorId($originalActorId)
    {
        $this->originalActorId = $originalActorId;
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

