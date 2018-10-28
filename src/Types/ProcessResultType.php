<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing ProcessResultType
 *
 *
 * XSD Type: ProcessResult
 */
class ProcessResultType
{

    /**
     * @property string[] $actorIds
     */
    private $actorIds = [
        
    ];

    /**
     * @property string $entityId
     */
    private $entityId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\ErrorType[] $errors
     */
    private $errors = [
        
    ];

    /**
     * @property string $instanceId
     */
    private $instanceId = null;

    /**
     * @property string $instanceStatus
     */
    private $instanceStatus = null;

    /**
     * @property string[] $newWorkitemIds
     */
    private $newWorkitemIds = [
        
    ];

    /**
     * @property bool $success
     */
    private $success = null;

    /**
     * Adds as actorIds
     *
     * @return self
     * @param string $actorIds
     */
    public function addToActorIds($actorIds)
    {
        $this->actorIds[] = $actorIds;
        return $this;
    }

    /**
     * isset actorIds
     *
     * @param int|string $index
     * @return bool
     */
    public function issetActorIds($index)
    {
        return isset($this->actorIds[$index]);
    }

    /**
     * unset actorIds
     *
     * @param int|string $index
     * @return void
     */
    public function unsetActorIds($index)
    {
        unset($this->actorIds[$index]);
    }

    /**
     * Gets as actorIds
     *
     * @return string[]
     */
    public function getActorIds()
    {
        return $this->actorIds;
    }

    /**
     * Sets a new actorIds
     *
     * @param string $actorIds
     * @return self
     */
    public function setActorIds(array $actorIds)
    {
        $this->actorIds = $actorIds;
        return $this;
    }

    /**
     * Gets as entityId
     *
     * @return string
     */
    public function getEntityId()
    {
        return $this->entityId;
    }

    /**
     * Sets a new entityId
     *
     * @param string $entityId
     * @return self
     */
    public function setEntityId($entityId)
    {
        $this->entityId = $entityId;
        return $this;
    }

    /**
     * Adds as errors
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\ErrorType $errors
     */
    public function addToErrors(\GoetasWebservices\Client\SalesforceEnterprise\Types\ErrorType $errors)
    {
        $this->errors[] = $errors;
        return $this;
    }

    /**
     * isset errors
     *
     * @param int|string $index
     * @return bool
     */
    public function issetErrors($index)
    {
        return isset($this->errors[$index]);
    }

    /**
     * unset errors
     *
     * @param int|string $index
     * @return void
     */
    public function unsetErrors($index)
    {
        unset($this->errors[$index]);
    }

    /**
     * Gets as errors
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\ErrorType[]
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * Sets a new errors
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\ErrorType[] $errors
     * @return self
     */
    public function setErrors(array $errors)
    {
        $this->errors = $errors;
        return $this;
    }

    /**
     * Gets as instanceId
     *
     * @return string
     */
    public function getInstanceId()
    {
        return $this->instanceId;
    }

    /**
     * Sets a new instanceId
     *
     * @param string $instanceId
     * @return self
     */
    public function setInstanceId($instanceId)
    {
        $this->instanceId = $instanceId;
        return $this;
    }

    /**
     * Gets as instanceStatus
     *
     * @return string
     */
    public function getInstanceStatus()
    {
        return $this->instanceStatus;
    }

    /**
     * Sets a new instanceStatus
     *
     * @param string $instanceStatus
     * @return self
     */
    public function setInstanceStatus($instanceStatus)
    {
        $this->instanceStatus = $instanceStatus;
        return $this;
    }

    /**
     * Adds as newWorkitemIds
     *
     * @return self
     * @param string $newWorkitemIds
     */
    public function addToNewWorkitemIds($newWorkitemIds)
    {
        $this->newWorkitemIds[] = $newWorkitemIds;
        return $this;
    }

    /**
     * isset newWorkitemIds
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNewWorkitemIds($index)
    {
        return isset($this->newWorkitemIds[$index]);
    }

    /**
     * unset newWorkitemIds
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNewWorkitemIds($index)
    {
        unset($this->newWorkitemIds[$index]);
    }

    /**
     * Gets as newWorkitemIds
     *
     * @return string[]
     */
    public function getNewWorkitemIds()
    {
        return $this->newWorkitemIds;
    }

    /**
     * Sets a new newWorkitemIds
     *
     * @param string $newWorkitemIds
     * @return self
     */
    public function setNewWorkitemIds(array $newWorkitemIds)
    {
        $this->newWorkitemIds = $newWorkitemIds;
        return $this;
    }

    /**
     * Gets as success
     *
     * @return bool
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * Sets a new success
     *
     * @param bool $success
     * @return self
     */
    public function setSuccess($success)
    {
        $this->success = $success;
        return $this;
    }


}

