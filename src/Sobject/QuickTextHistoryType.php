<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing QuickTextHistoryType
 *
 *
 * XSD Type: QuickTextHistory
 */
class QuickTextHistoryType extends SObjectType
{

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
     * @property string $field
     */
    private $field = null;

    /**
     * @property bool $isDeleted
     */
    private $isDeleted = null;

    /**
     * @property mixed $newValue
     */
    private $newValue = null;

    /**
     * @property mixed $oldValue
     */
    private $oldValue = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\QuickTextType $quickText
     */
    private $quickText = null;

    /**
     * @property string $quickTextId
     */
    private $quickTextId = null;

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
     * Gets as field
     *
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * Sets a new field
     *
     * @param string $field
     * @return self
     */
    public function setField($field)
    {
        $this->field = $field;
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

    /**
     * Gets as quickText
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\QuickTextType
     */
    public function getQuickText()
    {
        return $this->quickText;
    }

    /**
     * Sets a new quickText
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\QuickTextType $quickText
     * @return self
     */
    public function setQuickText(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\QuickTextType $quickText)
    {
        $this->quickText = $quickText;
        return $this;
    }

    /**
     * Gets as quickTextId
     *
     * @return string
     */
    public function getQuickTextId()
    {
        return $this->quickTextId;
    }

    /**
     * Sets a new quickTextId
     *
     * @param string $quickTextId
     * @return self
     */
    public function setQuickTextId($quickTextId)
    {
        $this->quickTextId = $quickTextId;
        return $this;
    }


}

