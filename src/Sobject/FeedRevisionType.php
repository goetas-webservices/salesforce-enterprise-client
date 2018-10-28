<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing FeedRevisionType
 *
 *
 * XSD Type: FeedRevision
 */
class FeedRevisionType extends SObjectType
{

    /**
     * @property string $action
     */
    private $action = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $createdBy
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
     * @property string $editedAttribute
     */
    private $editedAttribute = null;

    /**
     * @property string $feedEntityId
     */
    private $feedEntityId = null;

    /**
     * @property bool $isDeleted
     */
    private $isDeleted = null;

    /**
     * @property bool $isValueRichText
     */
    private $isValueRichText = null;

    /**
     * @property int $revision
     */
    private $revision = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property string $value
     */
    private $value = null;

    /**
     * Gets as action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Sets a new action
     *
     * @param string $action
     * @return self
     */
    public function setAction($action)
    {
        $this->action = $action;
        return $this;
    }

    /**
     * Gets as createdBy
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Sets a new createdBy
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $createdBy
     * @return self
     */
    public function setCreatedBy(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $createdBy)
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
     * Gets as editedAttribute
     *
     * @return string
     */
    public function getEditedAttribute()
    {
        return $this->editedAttribute;
    }

    /**
     * Sets a new editedAttribute
     *
     * @param string $editedAttribute
     * @return self
     */
    public function setEditedAttribute($editedAttribute)
    {
        $this->editedAttribute = $editedAttribute;
        return $this;
    }

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
     * Gets as isValueRichText
     *
     * @return bool
     */
    public function getIsValueRichText()
    {
        return $this->isValueRichText;
    }

    /**
     * Sets a new isValueRichText
     *
     * @param bool $isValueRichText
     * @return self
     */
    public function setIsValueRichText($isValueRichText)
    {
        $this->isValueRichText = $isValueRichText;
        return $this;
    }

    /**
     * Gets as revision
     *
     * @return int
     */
    public function getRevision()
    {
        return $this->revision;
    }

    /**
     * Sets a new revision
     *
     * @param int $revision
     * @return self
     */
    public function setRevision($revision)
    {
        $this->revision = $revision;
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

