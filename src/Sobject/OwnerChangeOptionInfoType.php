<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing OwnerChangeOptionInfoType
 *
 *
 * XSD Type: OwnerChangeOptionInfo
 */
class OwnerChangeOptionInfoType extends SObjectType
{

    /**
     * @property bool $defaultValue
     */
    private $defaultValue = null;

    /**
     * @property string $durableId
     */
    private $durableId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\EntityDefinitionType $entityDefinition
     */
    private $entityDefinition = null;

    /**
     * @property string $entityDefinitionId
     */
    private $entityDefinitionId = null;

    /**
     * @property bool $isEditable
     */
    private $isEditable = null;

    /**
     * @property string $label
     */
    private $label = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\OwnerChangeOptionInfoType $parent
     */
    private $parent = null;

    /**
     * @property string $parentId
     */
    private $parentId = null;

    /**
     * Gets as defaultValue
     *
     * @return bool
     */
    public function getDefaultValue()
    {
        return $this->defaultValue;
    }

    /**
     * Sets a new defaultValue
     *
     * @param bool $defaultValue
     * @return self
     */
    public function setDefaultValue($defaultValue)
    {
        $this->defaultValue = $defaultValue;
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
     * Gets as entityDefinition
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\EntityDefinitionType
     */
    public function getEntityDefinition()
    {
        return $this->entityDefinition;
    }

    /**
     * Sets a new entityDefinition
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\EntityDefinitionType $entityDefinition
     * @return self
     */
    public function setEntityDefinition(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\EntityDefinitionType $entityDefinition)
    {
        $this->entityDefinition = $entityDefinition;
        return $this;
    }

    /**
     * Gets as entityDefinitionId
     *
     * @return string
     */
    public function getEntityDefinitionId()
    {
        return $this->entityDefinitionId;
    }

    /**
     * Sets a new entityDefinitionId
     *
     * @param string $entityDefinitionId
     * @return self
     */
    public function setEntityDefinitionId($entityDefinitionId)
    {
        $this->entityDefinitionId = $entityDefinitionId;
        return $this;
    }

    /**
     * Gets as isEditable
     *
     * @return bool
     */
    public function getIsEditable()
    {
        return $this->isEditable;
    }

    /**
     * Sets a new isEditable
     *
     * @param bool $isEditable
     * @return self
     */
    public function setIsEditable($isEditable)
    {
        $this->isEditable = $isEditable;
        return $this;
    }

    /**
     * Gets as label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Sets a new label
     *
     * @param string $label
     * @return self
     */
    public function setLabel($label)
    {
        $this->label = $label;
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
     * Gets as parent
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\OwnerChangeOptionInfoType
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Sets a new parent
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\OwnerChangeOptionInfoType $parent
     * @return self
     */
    public function setParent(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\OwnerChangeOptionInfoType $parent)
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * Gets as parentId
     *
     * @return string
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * Sets a new parentId
     *
     * @param string $parentId
     * @return self
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;
        return $this;
    }


}

