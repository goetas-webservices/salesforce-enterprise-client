<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing EventBusSubscriberType
 *
 *
 * XSD Type: EventBusSubscriber
 */
class EventBusSubscriberType extends SObjectType
{

    /**
     * @property string $externalId
     */
    private $externalId = null;

    /**
     * @property string $lastError
     */
    private $lastError = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property int $position
     */
    private $position = null;

    /**
     * @property int $retries
     */
    private $retries = null;

    /**
     * @property string $status
     */
    private $status = null;

    /**
     * @property int $tip
     */
    private $tip = null;

    /**
     * @property string $topic
     */
    private $topic = null;

    /**
     * @property string $type
     */
    private $type = null;

    /**
     * Gets as externalId
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * Sets a new externalId
     *
     * @param string $externalId
     * @return self
     */
    public function setExternalId($externalId)
    {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * Gets as lastError
     *
     * @return string
     */
    public function getLastError()
    {
        return $this->lastError;
    }

    /**
     * Sets a new lastError
     *
     * @param string $lastError
     * @return self
     */
    public function setLastError($lastError)
    {
        $this->lastError = $lastError;
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
     * Gets as position
     *
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Sets a new position
     *
     * @param int $position
     * @return self
     */
    public function setPosition($position)
    {
        $this->position = $position;
        return $this;
    }

    /**
     * Gets as retries
     *
     * @return int
     */
    public function getRetries()
    {
        return $this->retries;
    }

    /**
     * Sets a new retries
     *
     * @param int $retries
     * @return self
     */
    public function setRetries($retries)
    {
        $this->retries = $retries;
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
     * Gets as tip
     *
     * @return int
     */
    public function getTip()
    {
        return $this->tip;
    }

    /**
     * Sets a new tip
     *
     * @param int $tip
     * @return self
     */
    public function setTip($tip)
    {
        $this->tip = $tip;
        return $this;
    }

    /**
     * Gets as topic
     *
     * @return string
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * Sets a new topic
     *
     * @param string $topic
     * @return self
     */
    public function setTopic($topic)
    {
        $this->topic = $topic;
        return $this;
    }

    /**
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }


}

