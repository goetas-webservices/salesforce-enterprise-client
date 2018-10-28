<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing FeedAttachmentType
 *
 *
 * XSD Type: FeedAttachment
 */
class FeedAttachmentType extends SObjectType
{

    /**
     * @property string $feedEntityId
     */
    private $feedEntityId = null;

    /**
     * @property bool $isDeleted
     */
    private $isDeleted = null;

    /**
     * @property string $recordId
     */
    private $recordId = null;

    /**
     * @property string $title
     */
    private $title = null;

    /**
     * @property string $type
     */
    private $type = null;

    /**
     * @property string $value
     */
    private $value = null;

    /**
     * Gets as feedEntityId
     *
     * @return string
     */
    public function getFeedEntityId()
    {
        return $this->feedEntityId;
    }

    /**
     * Sets a new feedEntityId
     *
     * @param string $feedEntityId
     * @return self
     */
    public function setFeedEntityId($feedEntityId)
    {
        $this->feedEntityId = $feedEntityId;
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
     * Gets as recordId
     *
     * @return string
     */
    public function getRecordId()
    {
        return $this->recordId;
    }

    /**
     * Sets a new recordId
     *
     * @param string $recordId
     * @return self
     */
    public function setRecordId($recordId)
    {
        $this->recordId = $recordId;
        return $this;
    }

    /**
     * Gets as title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * @param string $title
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;
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

    /**
     * Gets as value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * @param string $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }


}

