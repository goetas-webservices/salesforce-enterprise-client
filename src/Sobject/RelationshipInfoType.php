<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing RelationshipInfoType
 *
 *
 * XSD Type: RelationshipInfo
 */
class RelationshipInfoType extends SObjectType
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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $relationshipDomains
     */
    private $relationshipDomains = null;

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
     * Gets as relationshipDomains
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getRelationshipDomains()
    {
        return $this->relationshipDomains;
    }

    /**
     * Sets a new relationshipDomains
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $relationshipDomains
     * @return self
     */
    public function setRelationshipDomains(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $relationshipDomains)
    {
        $this->relationshipDomains = $relationshipDomains;
        return $this;
    }


}

