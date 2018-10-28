<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing ProcessInstanceType
 *
 *
 * XSD Type: ProcessInstance
 */
class ProcessInstanceType extends SObjectType
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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $nodes
     */
    private $nodes = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ProcessDefinitionType $processDefinition
     */
    private $processDefinition = null;

    /**
     * @property string $processDefinitionId
     */
    private $processDefinitionId = null;

    /**
     * @property string $status
     */
    private $status = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $steps
     */
    private $steps = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $stepsAndWorkitems
     */
    private $stepsAndWorkitems = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $submittedBy
     */
    private $submittedBy = null;

    /**
     * @property string $submittedById
     */
    private $submittedById = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $targetObject
     */
    private $targetObject = null;

    /**
     * @property string $targetObjectId
     */
    private $targetObjectId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $workitems
     */
    private $workitems = null;

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
     * Gets as nodes
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getNodes()
    {
        return $this->nodes;
    }

    /**
     * Sets a new nodes
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $nodes
     * @return self
     */
    public function setNodes(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $nodes)
    {
        $this->nodes = $nodes;
        return $this;
    }

    /**
     * Gets as processDefinition
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ProcessDefinitionType
     */
    public function getProcessDefinition()
    {
        return $this->processDefinition;
    }

    /**
     * Sets a new processDefinition
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ProcessDefinitionType $processDefinition
     * @return self
     */
    public function setProcessDefinition(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\ProcessDefinitionType $processDefinition)
    {
        $this->processDefinition = $processDefinition;
        return $this;
    }

    /**
     * Gets as processDefinitionId
     *
     * @return string
     */
    public function getProcessDefinitionId()
    {
        return $this->processDefinitionId;
    }

    /**
     * Sets a new processDefinitionId
     *
     * @param string $processDefinitionId
     * @return self
     */
    public function setProcessDefinitionId($processDefinitionId)
    {
        $this->processDefinitionId = $processDefinitionId;
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
     * Gets as steps
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getSteps()
    {
        return $this->steps;
    }

    /**
     * Sets a new steps
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $steps
     * @return self
     */
    public function setSteps(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $steps)
    {
        $this->steps = $steps;
        return $this;
    }

    /**
     * Gets as stepsAndWorkitems
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getStepsAndWorkitems()
    {
        return $this->stepsAndWorkitems;
    }

    /**
     * Sets a new stepsAndWorkitems
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $stepsAndWorkitems
     * @return self
     */
    public function setStepsAndWorkitems(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $stepsAndWorkitems)
    {
        $this->stepsAndWorkitems = $stepsAndWorkitems;
        return $this;
    }

    /**
     * Gets as submittedBy
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType
     */
    public function getSubmittedBy()
    {
        return $this->submittedBy;
    }

    /**
     * Sets a new submittedBy
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $submittedBy
     * @return self
     */
    public function setSubmittedBy(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $submittedBy)
    {
        $this->submittedBy = $submittedBy;
        return $this;
    }

    /**
     * Gets as submittedById
     *
     * @return string
     */
    public function getSubmittedById()
    {
        return $this->submittedById;
    }

    /**
     * Sets a new submittedById
     *
     * @param string $submittedById
     * @return self
     */
    public function setSubmittedById($submittedById)
    {
        $this->submittedById = $submittedById;
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
     * Gets as targetObject
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType
     */
    public function getTargetObject()
    {
        return $this->targetObject;
    }

    /**
     * Sets a new targetObject
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $targetObject
     * @return self
     */
    public function setTargetObject(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $targetObject)
    {
        $this->targetObject = $targetObject;
        return $this;
    }

    /**
     * Gets as targetObjectId
     *
     * @return string
     */
    public function getTargetObjectId()
    {
        return $this->targetObjectId;
    }

    /**
     * Sets a new targetObjectId
     *
     * @param string $targetObjectId
     * @return self
     */
    public function setTargetObjectId($targetObjectId)
    {
        $this->targetObjectId = $targetObjectId;
        return $this;
    }

    /**
     * Gets as workitems
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getWorkitems()
    {
        return $this->workitems;
    }

    /**
     * Sets a new workitems
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $workitems
     * @return self
     */
    public function setWorkitems(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $workitems)
    {
        $this->workitems = $workitems;
        return $this;
    }


}

