<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing RelationshipDomainType
 *
 *
 * XSD Type: RelationshipDomain
 */
class RelationshipDomainType extends SObjectType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\EntityDefinitionType $childSobject
     */
    private $childSobject = null;

    /**
     * @property string $childSobjectId
     */
    private $childSobjectId = null;

    /**
     * @property string $durableId
     */
    private $durableId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\FieldDefinitionType $field
     */
    private $field = null;

    /**
     * @property string $fieldId
     */
    private $fieldId = null;

    /**
     * @property bool $isCascadeDelete
     */
    private $isCascadeDelete = null;

    /**
     * @property bool $isDeprecatedAndHidden
     */
    private $isDeprecatedAndHidden = null;

    /**
     * @property bool $isRestrictedDelete
     */
    private $isRestrictedDelete = null;

    /**
     * @property string[] $junctionIdListNames
     */
    private $junctionIdListNames = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\EntityDefinitionType $parentSobject
     */
    private $parentSobject = null;

    /**
     * @property string $parentSobjectId
     */
    private $parentSobjectId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\RelationshipInfoType $relationshipInfo
     */
    private $relationshipInfo = null;

    /**
     * @property string $relationshipInfoId
     */
    private $relationshipInfoId = null;

    /**
     * @property string $relationshipName
     */
    private $relationshipName = null;

    /**
     * Gets as childSobject
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\EntityDefinitionType
     */
    public function getChildSobject()
    {
        return $this->childSobject;
    }

    /**
     * Sets a new childSobject
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\EntityDefinitionType $childSobject
     * @return self
     */
    public function setChildSobject(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\EntityDefinitionType $childSobject)
    {
        $this->childSobject = $childSobject;
        return $this;
    }

    /**
     * Gets as childSobjectId
     *
     * @return string
     */
    public function getChildSobjectId()
    {
        return $this->childSobjectId;
    }

    /**
     * Sets a new childSobjectId
     *
     * @param string $childSobjectId
     * @return self
     */
    public function setChildSobjectId($childSobjectId)
    {
        $this->childSobjectId = $childSobjectId;
        return $this;
    }

    /**
     * Gets as durableId
     *
     * @return string
     */
    public function getDurableId()
    {
        return $this->durableId;
    }

    /**
     * Sets a new durableId
     *
     * @param string $durableId
     * @return self
     */
    public function setDurableId($durableId)
    {
        $this->durableId = $durableId;
        return $this;
    }

    /**
     * Gets as field
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\FieldDefinitionType
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * Sets a new field
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\FieldDefinitionType $field
     * @return self
     */
    public function setField(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\FieldDefinitionType $field)
    {
        $this->field = $field;
        return $this;
    }

    /**
     * Gets as fieldId
     *
     * @return string
     */
    public function getFieldId()
    {
        return $this->fieldId;
    }

    /**
     * Sets a new fieldId
     *
     * @param string $fieldId
     * @return self
     */
    public function setFieldId($fieldId)
    {
        $this->fieldId = $fieldId;
        return $this;
    }

    /**
     * Gets as isCascadeDelete
     *
     * @return bool
     */
    public function getIsCascadeDelete()
    {
        return $this->isCascadeDelete;
    }

    /**
     * Sets a new isCascadeDelete
     *
     * @param bool $isCascadeDelete
     * @return self
     */
    public function setIsCascadeDelete($isCascadeDelete)
    {
        $this->isCascadeDelete = $isCascadeDelete;
        return $this;
    }

    /**
     * Gets as isDeprecatedAndHidden
     *
     * @return bool
     */
    public function getIsDeprecatedAndHidden()
    {
        return $this->isDeprecatedAndHidden;
    }

    /**
     * Sets a new isDeprecatedAndHidden
     *
     * @param bool $isDeprecatedAndHidden
     * @return self
     */
    public function setIsDeprecatedAndHidden($isDeprecatedAndHidden)
    {
        $this->isDeprecatedAndHidden = $isDeprecatedAndHidden;
        return $this;
    }

    /**
     * Gets as isRestrictedDelete
     *
     * @return bool
     */
    public function getIsRestrictedDelete()
    {
        return $this->isRestrictedDelete;
    }

    /**
     * Sets a new isRestrictedDelete
     *
     * @param bool $isRestrictedDelete
     * @return self
     */
    public function setIsRestrictedDelete($isRestrictedDelete)
    {
        $this->isRestrictedDelete = $isRestrictedDelete;
        return $this;
    }

    /**
     * Adds as names
     *
     * @return self
     * @param string $names
     */
    public function addToJunctionIdListNames($names)
    {
        $this->junctionIdListNames[] = $names;
        return $this;
    }

    /**
     * isset junctionIdListNames
     *
     * @param int|string $index
     * @return bool
     */
    public function issetJunctionIdListNames($index)
    {
        return isset($this->junctionIdListNames[$index]);
    }

    /**
     * unset junctionIdListNames
     *
     * @param int|string $index
     * @return void
     */
    public function unsetJunctionIdListNames($index)
    {
        unset($this->junctionIdListNames[$index]);
    }

    /**
     * Gets as junctionIdListNames
     *
     * @return string[]
     */
    public function getJunctionIdListNames()
    {
        return $this->junctionIdListNames;
    }

    /**
     * Sets a new junctionIdListNames
     *
     * @param string[] $junctionIdListNames
     * @return self
     */
    public function setJunctionIdListNames(array $junctionIdListNames)
    {
        $this->junctionIdListNames = $junctionIdListNames;
        return $this;
    }

    /**
     * Gets as parentSobject
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\EntityDefinitionType
     */
    public function getParentSobject()
    {
        return $this->parentSobject;
    }

    /**
     * Sets a new parentSobject
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\EntityDefinitionType $parentSobject
     * @return self
     */
    public function setParentSobject(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\EntityDefinitionType $parentSobject)
    {
        $this->parentSobject = $parentSobject;
        return $this;
    }

    /**
     * Gets as parentSobjectId
     *
     * @return string
     */
    public function getParentSobjectId()
    {
        return $this->parentSobjectId;
    }

    /**
     * Sets a new parentSobjectId
     *
     * @param string $parentSobjectId
     * @return self
     */
    public function setParentSobjectId($parentSobjectId)
    {
        $this->parentSobjectId = $parentSobjectId;
        return $this;
    }

    /**
     * Gets as relationshipInfo
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\RelationshipInfoType
     */
    public function getRelationshipInfo()
    {
        return $this->relationshipInfo;
    }

    /**
     * Sets a new relationshipInfo
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\RelationshipInfoType $relationshipInfo
     * @return self
     */
    public function setRelationshipInfo(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\RelationshipInfoType $relationshipInfo)
    {
        $this->relationshipInfo = $relationshipInfo;
        return $this;
    }

    /**
     * Gets as relationshipInfoId
     *
     * @return string
     */
    public function getRelationshipInfoId()
    {
        return $this->relationshipInfoId;
    }

    /**
     * Sets a new relationshipInfoId
     *
     * @param string $relationshipInfoId
     * @return self
     */
    public function setRelationshipInfoId($relationshipInfoId)
    {
        $this->relationshipInfoId = $relationshipInfoId;
        return $this;
    }

    /**
     * Gets as relationshipName
     *
     * @return string
     */
    public function getRelationshipName()
    {
        return $this->relationshipName;
    }

    /**
     * Sets a new relationshipName
     *
     * @param string $relationshipName
     * @return self
     */
    public function setRelationshipName($relationshipName)
    {
        $this->relationshipName = $relationshipName;
        return $this;
    }


}

