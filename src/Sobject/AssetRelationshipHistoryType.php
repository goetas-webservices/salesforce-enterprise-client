<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing AssetRelationshipHistoryType
 *
 *
 * XSD Type: AssetRelationshipHistory
 */
class AssetRelationshipHistoryType extends SObjectType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AssetRelationshipType $assetRelationship
     */
    private $assetRelationship = null;

    /**
     * @property string $assetRelationshipId
     */
    private $assetRelationshipId = null;

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
     * Gets as assetRelationship
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AssetRelationshipType
     */
    public function getAssetRelationship()
    {
        return $this->assetRelationship;
    }

    /**
     * Sets a new assetRelationship
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AssetRelationshipType $assetRelationship
     * @return self
     */
    public function setAssetRelationship(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\AssetRelationshipType $assetRelationship)
    {
        $this->assetRelationship = $assetRelationship;
        return $this;
    }

    /**
     * Gets as assetRelationshipId
     *
     * @return string
     */
    public function getAssetRelationshipId()
    {
        return $this->assetRelationshipId;
    }

    /**
     * Sets a new assetRelationshipId
     *
     * @param string $assetRelationshipId
     * @return self
     */
    public function setAssetRelationshipId($assetRelationshipId)
    {
        $this->assetRelationshipId = $assetRelationshipId;
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


}

