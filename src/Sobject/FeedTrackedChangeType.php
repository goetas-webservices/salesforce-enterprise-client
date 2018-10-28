<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing FeedTrackedChangeType
 *
 *
 * XSD Type: FeedTrackedChange
 */
class FeedTrackedChangeType extends SObjectType
{

    /**
     * @property string $feedItemId
     */
    private $feedItemId = null;

    /**
     * @property string $fieldName
     */
    private $fieldName = null;

    /**
     * @property mixed $newValue
     */
    private $newValue = null;

    /**
     * @property mixed $oldValue
     */
    private $oldValue = null;

    /**
     * Gets as feedItemId
     *
     * @return string
     */
    public function getFeedItemId()
    {
        return $this->feedItemId;
    }

    /**
     * Sets a new feedItemId
     *
     * @param string $feedItemId
     * @return self
     */
    public function setFeedItemId($feedItemId)
    {
        $this->feedItemId = $feedItemId;
        return $this;
    }

    /**
     * Gets as fieldName
     *
     * @return string
     */
    public function getFieldName()
    {
        return $this->fieldName;
    }

    /**
     * Sets a new fieldName
     *
     * @param string $fieldName
     * @return self
     */
    public function setFieldName($fieldName)
    {
        $this->fieldName = $fieldName;
        return $this;
    }

    /**
     * Gets as newValue
     *
     * @return mixed
     */
    public function getNewValue()
    {
        return $this->newValue;
    }

    /**
     * Sets a new newValue
     *
     * @param mixed $newValue
     * @return self
     */
    public function setNewValue($newValue)
    {
        $this->newValue = $newValue;
        return $this;
    }

    /**
     * Gets as oldValue
     *
     * @return mixed
     */
    public function getOldValue()
    {
        return $this->oldValue;
    }

    /**
     * Sets a new oldValue
     *
     * @param mixed $oldValue
     * @return self
     */
    public function setOldValue($oldValue)
    {
        $this->oldValue = $oldValue;
        return $this;
    }


}

