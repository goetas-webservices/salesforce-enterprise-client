<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing QueueSobjectType
 *
 *
 * XSD Type: QueueSobject
 */
class QueueSobjectType extends SObjectType
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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\GroupType $queue
     */
    private $queue = null;

    /**
     * @property string $queueId
     */
    private $queueId = null;

    /**
     * @property string $sobjectType
     */
    private $sobjectType = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

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
     * Gets as queue
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\GroupType
     */
    public function getQueue()
    {
        return $this->queue;
    }

    /**
     * Sets a new queue
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\GroupType $queue
     * @return self
     */
    public function setQueue(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\GroupType $queue)
    {
        $this->queue = $queue;
        return $this;
    }

    /**
     * Gets as queueId
     *
     * @return string
     */
    public function getQueueId()
    {
        return $this->queueId;
    }

    /**
     * Sets a new queueId
     *
     * @param string $queueId
     * @return self
     */
    public function setQueueId($queueId)
    {
        $this->queueId = $queueId;
        return $this;
    }

    /**
     * Gets as sobjectType
     *
     * @return string
     */
    public function getSobjectType()
    {
        return $this->sobjectType;
    }

    /**
     * Sets a new sobjectType
     *
     * @param string $sobjectType
     * @return self
     */
    public function setSobjectType($sobjectType)
    {
        $this->sobjectType = $sobjectType;
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

