<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing FieldDefinitionType
 *
 *
 * XSD Type: FieldDefinition
 */
class FieldDefinitionType extends SObjectType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $businessOwner
     */
    private $businessOwner = null;

    /**
     * @property string $businessOwnerId
     */
    private $businessOwnerId = null;

    /**
     * @property string $businessStatus
     */
    private $businessStatus = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $controlledFields
     */
    private $controlledFields = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\FieldDefinitionType $controllingFieldDefinition
     */
    private $controllingFieldDefinition = null;

    /**
     * @property string $controllingFieldDefinitionId
     */
    private $controllingFieldDefinitionId = null;

    /**
     * @property string $dataType
     */
    private $dataType = null;

    /**
     * @property string $description
     */
    private $description = null;

    /**
     * @property string $developerName
     */
    private $developerName = null;

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
     * @property string $extraTypeInfo
     */
    private $extraTypeInfo = null;

    /**
     * @property bool $isApiFilterable
     */
    private $isApiFilterable = null;

    /**
     * @property bool $isApiGroupable
     */
    private $isApiGroupable = null;

    /**
     * @property bool $isApiSortable
     */
    private $isApiSortable = null;

    /**
     * @property bool $isCalculated
     */
    private $isCalculated = null;

    /**
     * @property bool $isCompactLayoutable
     */
    private $isCompactLayoutable = null;

    /**
     * @property bool $isCompound
     */
    private $isCompound = null;

    /**
     * @property bool $isFieldHistoryTracked
     */
    private $isFieldHistoryTracked = null;

    /**
     * @property bool $isHighScaleNumber
     */
    private $isHighScaleNumber = null;

    /**
     * @property bool $isHtmlFormatted
     */
    private $isHtmlFormatted = null;

    /**
     * @property bool $isIndexed
     */
    private $isIndexed = null;

    /**
     * @property bool $isListFilterable
     */
    private $isListFilterable = null;

    /**
     * @property bool $isListSortable
     */
    private $isListSortable = null;

    /**
     * @property bool $isListVisible
     */
    private $isListVisible = null;

    /**
     * @property bool $isNameField
     */
    private $isNameField = null;

    /**
     * @property bool $isNillable
     */
    private $isNillable = null;

    /**
     * @property bool $isPolymorphicForeignKey
     */
    private $isPolymorphicForeignKey = null;

    /**
     * @property bool $isSearchPrefilterable
     */
    private $isSearchPrefilterable = null;

    /**
     * @property bool $isWorkflowFilterable
     */
    private $isWorkflowFilterable = null;

    /**
     * @property string $label
     */
    private $label = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $lastModifiedBy
     */
    private $lastModifiedBy = null;

    /**
     * @property string $lastModifiedById
     */
    private $lastModifiedById = null;

    /**
     * @property \DateTime $lastModifiedDate
     */
    private $lastModifiedDate = null;

    /**
     * @property int $length
     */
    private $length = null;

    /**
     * @property string $masterLabel
     */
    private $masterLabel = null;

    /**
     * @property string $namespacePrefix
     */
    private $namespacePrefix = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $particles
     */
    private $particles = null;

    /**
     * @property int $precision
     */
    private $precision = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\PublisherType $publisher
     */
    private $publisher = null;

    /**
     * @property string $publisherId
     */
    private $publisherId = null;

    /**
     * @property string $qualifiedApiName
     */
    private $qualifiedApiName = null;

    /**
     * @property string $referenceTargetField
     */
    private $referenceTargetField = null;

    /**
     * @property string[] $referenceTo
     */
    private $referenceTo = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $relationshipDomains
     */
    private $relationshipDomains = null;

    /**
     * @property string $relationshipName
     */
    private $relationshipName = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserFieldAccessType $runningUserFieldAccess
     */
    private $runningUserFieldAccess = null;

    /**
     * @property string $runningUserFieldAccessId
     */
    private $runningUserFieldAccessId = null;

    /**
     * @property int $scale
     */
    private $scale = null;

    /**
     * @property string $securityClassification
     */
    private $securityClassification = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\DataType $serviceDataType
     */
    private $serviceDataType = null;

    /**
     * @property string $serviceDataTypeId
     */
    private $serviceDataTypeId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\DataType $valueType
     */
    private $valueType = null;

    /**
     * @property string $valueTypeId
     */
    private $valueTypeId = null;

    /**
     * Gets as businessOwner
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType
     */
    public function getBusinessOwner()
    {
        return $this->businessOwner;
    }

    /**
     * Sets a new businessOwner
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $businessOwner
     * @return self
     */
    public function setBusinessOwner(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $businessOwner)
    {
        $this->businessOwner = $businessOwner;
        return $this;
    }

    /**
     * Gets as businessOwnerId
     *
     * @return string
     */
    public function getBusinessOwnerId()
    {
        return $this->businessOwnerId;
    }

    /**
     * Sets a new businessOwnerId
     *
     * @param string $businessOwnerId
     * @return self
     */
    public function setBusinessOwnerId($businessOwnerId)
    {
        $this->businessOwnerId = $businessOwnerId;
        return $this;
    }

    /**
     * Gets as businessStatus
     *
     * @return string
     */
    public function getBusinessStatus()
    {
        return $this->businessStatus;
    }

    /**
     * Sets a new businessStatus
     *
     * @param string $businessStatus
     * @return self
     */
    public function setBusinessStatus($businessStatus)
    {
        $this->businessStatus = $businessStatus;
        return $this;
    }

    /**
     * Gets as controlledFields
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getControlledFields()
    {
        return $this->controlledFields;
    }

    /**
     * Sets a new controlledFields
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $controlledFields
     * @return self
     */
    public function setControlledFields(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $controlledFields)
    {
        $this->controlledFields = $controlledFields;
        return $this;
    }

    /**
     * Gets as controllingFieldDefinition
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\FieldDefinitionType
     */
    public function getControllingFieldDefinition()
    {
        return $this->controllingFieldDefinition;
    }

    /**
     * Sets a new controllingFieldDefinition
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\FieldDefinitionType $controllingFieldDefinition
     * @return self
     */
    public function setControllingFieldDefinition(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\FieldDefinitionType $controllingFieldDefinition)
    {
        $this->controllingFieldDefinition = $controllingFieldDefinition;
        return $this;
    }

    /**
     * Gets as controllingFieldDefinitionId
     *
     * @return string
     */
    public function getControllingFieldDefinitionId()
    {
        return $this->controllingFieldDefinitionId;
    }

    /**
     * Sets a new controllingFieldDefinitionId
     *
     * @param string $controllingFieldDefinitionId
     * @return self
     */
    public function setControllingFieldDefinitionId($controllingFieldDefinitionId)
    {
        $this->controllingFieldDefinitionId = $controllingFieldDefinitionId;
        return $this;
    }

    /**
     * Gets as dataType
     *
     * @return string
     */
    public function getDataType()
    {
        return $this->dataType;
    }

    /**
     * Sets a new dataType
     *
     * @param string $dataType
     * @return self
     */
    public function setDataType($dataType)
    {
        $this->dataType = $dataType;
        return $this;
    }

    /**
     * Gets as description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as developerName
     *
     * @return string
     */
    public function getDeveloperName()
    {
        return $this->developerName;
    }

    /**
     * Sets a new developerName
     *
     * @param string $developerName
     * @return self
     */
    public function setDeveloperName($developerName)
    {
        $this->developerName = $developerName;
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
     * Gets as extraTypeInfo
     *
     * @return string
     */
    public function getExtraTypeInfo()
    {
        return $this->extraTypeInfo;
    }

    /**
     * Sets a new extraTypeInfo
     *
     * @param string $extraTypeInfo
     * @return self
     */
    public function setExtraTypeInfo($extraTypeInfo)
    {
        $this->extraTypeInfo = $extraTypeInfo;
        return $this;
    }

    /**
     * Gets as isApiFilterable
     *
     * @return bool
     */
    public function getIsApiFilterable()
    {
        return $this->isApiFilterable;
    }

    /**
     * Sets a new isApiFilterable
     *
     * @param bool $isApiFilterable
     * @return self
     */
    public function setIsApiFilterable($isApiFilterable)
    {
        $this->isApiFilterable = $isApiFilterable;
        return $this;
    }

    /**
     * Gets as isApiGroupable
     *
     * @return bool
     */
    public function getIsApiGroupable()
    {
        return $this->isApiGroupable;
    }

    /**
     * Sets a new isApiGroupable
     *
     * @param bool $isApiGroupable
     * @return self
     */
    public function setIsApiGroupable($isApiGroupable)
    {
        $this->isApiGroupable = $isApiGroupable;
        return $this;
    }

    /**
     * Gets as isApiSortable
     *
     * @return bool
     */
    public function getIsApiSortable()
    {
        return $this->isApiSortable;
    }

    /**
     * Sets a new isApiSortable
     *
     * @param bool $isApiSortable
     * @return self
     */
    public function setIsApiSortable($isApiSortable)
    {
        $this->isApiSortable = $isApiSortable;
        return $this;
    }

    /**
     * Gets as isCalculated
     *
     * @return bool
     */
    public function getIsCalculated()
    {
        return $this->isCalculated;
    }

    /**
     * Sets a new isCalculated
     *
     * @param bool $isCalculated
     * @return self
     */
    public function setIsCalculated($isCalculated)
    {
        $this->isCalculated = $isCalculated;
        return $this;
    }

    /**
     * Gets as isCompactLayoutable
     *
     * @return bool
     */
    public function getIsCompactLayoutable()
    {
        return $this->isCompactLayoutable;
    }

    /**
     * Sets a new isCompactLayoutable
     *
     * @param bool $isCompactLayoutable
     * @return self
     */
    public function setIsCompactLayoutable($isCompactLayoutable)
    {
        $this->isCompactLayoutable = $isCompactLayoutable;
        return $this;
    }

    /**
     * Gets as isCompound
     *
     * @return bool
     */
    public function getIsCompound()
    {
        return $this->isCompound;
    }

    /**
     * Sets a new isCompound
     *
     * @param bool $isCompound
     * @return self
     */
    public function setIsCompound($isCompound)
    {
        $this->isCompound = $isCompound;
        return $this;
    }

    /**
     * Gets as isFieldHistoryTracked
     *
     * @return bool
     */
    public function getIsFieldHistoryTracked()
    {
        return $this->isFieldHistoryTracked;
    }

    /**
     * Sets a new isFieldHistoryTracked
     *
     * @param bool $isFieldHistoryTracked
     * @return self
     */
    public function setIsFieldHistoryTracked($isFieldHistoryTracked)
    {
        $this->isFieldHistoryTracked = $isFieldHistoryTracked;
        return $this;
    }

    /**
     * Gets as isHighScaleNumber
     *
     * @return bool
     */
    public function getIsHighScaleNumber()
    {
        return $this->isHighScaleNumber;
    }

    /**
     * Sets a new isHighScaleNumber
     *
     * @param bool $isHighScaleNumber
     * @return self
     */
    public function setIsHighScaleNumber($isHighScaleNumber)
    {
        $this->isHighScaleNumber = $isHighScaleNumber;
        return $this;
    }

    /**
     * Gets as isHtmlFormatted
     *
     * @return bool
     */
    public function getIsHtmlFormatted()
    {
        return $this->isHtmlFormatted;
    }

    /**
     * Sets a new isHtmlFormatted
     *
     * @param bool $isHtmlFormatted
     * @return self
     */
    public function setIsHtmlFormatted($isHtmlFormatted)
    {
        $this->isHtmlFormatted = $isHtmlFormatted;
        return $this;
    }

    /**
     * Gets as isIndexed
     *
     * @return bool
     */
    public function getIsIndexed()
    {
        return $this->isIndexed;
    }

    /**
     * Sets a new isIndexed
     *
     * @param bool $isIndexed
     * @return self
     */
    public function setIsIndexed($isIndexed)
    {
        $this->isIndexed = $isIndexed;
        return $this;
    }

    /**
     * Gets as isListFilterable
     *
     * @return bool
     */
    public function getIsListFilterable()
    {
        return $this->isListFilterable;
    }

    /**
     * Sets a new isListFilterable
     *
     * @param bool $isListFilterable
     * @return self
     */
    public function setIsListFilterable($isListFilterable)
    {
        $this->isListFilterable = $isListFilterable;
        return $this;
    }

    /**
     * Gets as isListSortable
     *
     * @return bool
     */
    public function getIsListSortable()
    {
        return $this->isListSortable;
    }

    /**
     * Sets a new isListSortable
     *
     * @param bool $isListSortable
     * @return self
     */
    public function setIsListSortable($isListSortable)
    {
        $this->isListSortable = $isListSortable;
        return $this;
    }

    /**
     * Gets as isListVisible
     *
     * @return bool
     */
    public function getIsListVisible()
    {
        return $this->isListVisible;
    }

    /**
     * Sets a new isListVisible
     *
     * @param bool $isListVisible
     * @return self
     */
    public function setIsListVisible($isListVisible)
    {
        $this->isListVisible = $isListVisible;
        return $this;
    }

    /**
     * Gets as isNameField
     *
     * @return bool
     */
    public function getIsNameField()
    {
        return $this->isNameField;
    }

    /**
     * Sets a new isNameField
     *
     * @param bool $isNameField
     * @return self
     */
    public function setIsNameField($isNameField)
    {
        $this->isNameField = $isNameField;
        return $this;
    }

    /**
     * Gets as isNillable
     *
     * @return bool
     */
    public function getIsNillable()
    {
        return $this->isNillable;
    }

    /**
     * Sets a new isNillable
     *
     * @param bool $isNillable
     * @return self
     */
    public function setIsNillable($isNillable)
    {
        $this->isNillable = $isNillable;
        return $this;
    }

    /**
     * Gets as isPolymorphicForeignKey
     *
     * @return bool
     */
    public function getIsPolymorphicForeignKey()
    {
        return $this->isPolymorphicForeignKey;
    }

    /**
     * Sets a new isPolymorphicForeignKey
     *
     * @param bool $isPolymorphicForeignKey
     * @return self
     */
    public function setIsPolymorphicForeignKey($isPolymorphicForeignKey)
    {
        $this->isPolymorphicForeignKey = $isPolymorphicForeignKey;
        return $this;
    }

    /**
     * Gets as isSearchPrefilterable
     *
     * @return bool
     */
    public function getIsSearchPrefilterable()
    {
        return $this->isSearchPrefilterable;
    }

    /**
     * Sets a new isSearchPrefilterable
     *
     * @param bool $isSearchPrefilterable
     * @return self
     */
    public function setIsSearchPrefilterable($isSearchPrefilterable)
    {
        $this->isSearchPrefilterable = $isSearchPrefilterable;
        return $this;
    }

    /**
     * Gets as isWorkflowFilterable
     *
     * @return bool
     */
    public function getIsWorkflowFilterable()
    {
        return $this->isWorkflowFilterable;
    }

    /**
     * Sets a new isWorkflowFilterable
     *
     * @param bool $isWorkflowFilterable
     * @return self
     */
    public function setIsWorkflowFilterable($isWorkflowFilterable)
    {
        $this->isWorkflowFilterable = $isWorkflowFilterable;
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
     * Gets as lastModifiedBy
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType
     */
    public function getLastModifiedBy()
    {
        return $this->lastModifiedBy;
    }

    /**
     * Sets a new lastModifiedBy
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $lastModifiedBy
     * @return self
     */
    public function setLastModifiedBy(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $lastModifiedBy)
    {
        $this->lastModifiedBy = $lastModifiedBy;
        return $this;
    }

    /**
     * Gets as lastModifiedById
     *
     * @return string
     */
    public function getLastModifiedById()
    {
        return $this->lastModifiedById;
    }

    /**
     * Sets a new lastModifiedById
     *
     * @param string $lastModifiedById
     * @return self
     */
    public function setLastModifiedById($lastModifiedById)
    {
        $this->lastModifiedById = $lastModifiedById;
        return $this;
    }

    /**
     * Gets as lastModifiedDate
     *
     * @return \DateTime
     */
    public function getLastModifiedDate()
    {
        return $this->lastModifiedDate;
    }

    /**
     * Sets a new lastModifiedDate
     *
     * @param \DateTime $lastModifiedDate
     * @return self
     */
    public function setLastModifiedDate(\DateTime $lastModifiedDate)
    {
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }

    /**
     * Gets as length
     *
     * @return int
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Sets a new length
     *
     * @param int $length
     * @return self
     */
    public function setLength($length)
    {
        $this->length = $length;
        return $this;
    }

    /**
     * Gets as masterLabel
     *
     * @return string
     */
    public function getMasterLabel()
    {
        return $this->masterLabel;
    }

    /**
     * Sets a new masterLabel
     *
     * @param string $masterLabel
     * @return self
     */
    public function setMasterLabel($masterLabel)
    {
        $this->masterLabel = $masterLabel;
        return $this;
    }

    /**
     * Gets as namespacePrefix
     *
     * @return string
     */
    public function getNamespacePrefix()
    {
        return $this->namespacePrefix;
    }

    /**
     * Sets a new namespacePrefix
     *
     * @param string $namespacePrefix
     * @return self
     */
    public function setNamespacePrefix($namespacePrefix)
    {
        $this->namespacePrefix = $namespacePrefix;
        return $this;
    }

    /**
     * Gets as particles
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getParticles()
    {
        return $this->particles;
    }

    /**
     * Sets a new particles
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $particles
     * @return self
     */
    public function setParticles(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $particles)
    {
        $this->particles = $particles;
        return $this;
    }

    /**
     * Gets as precision
     *
     * @return int
     */
    public function getPrecision()
    {
        return $this->precision;
    }

    /**
     * Sets a new precision
     *
     * @param int $precision
     * @return self
     */
    public function setPrecision($precision)
    {
        $this->precision = $precision;
        return $this;
    }

    /**
     * Gets as publisher
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\PublisherType
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * Sets a new publisher
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\PublisherType $publisher
     * @return self
     */
    public function setPublisher(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\PublisherType $publisher)
    {
        $this->publisher = $publisher;
        return $this;
    }

    /**
     * Gets as publisherId
     *
     * @return string
     */
    public function getPublisherId()
    {
        return $this->publisherId;
    }

    /**
     * Sets a new publisherId
     *
     * @param string $publisherId
     * @return self
     */
    public function setPublisherId($publisherId)
    {
        $this->publisherId = $publisherId;
        return $this;
    }

    /**
     * Gets as qualifiedApiName
     *
     * @return string
     */
    public function getQualifiedApiName()
    {
        return $this->qualifiedApiName;
    }

    /**
     * Sets a new qualifiedApiName
     *
     * @param string $qualifiedApiName
     * @return self
     */
    public function setQualifiedApiName($qualifiedApiName)
    {
        $this->qualifiedApiName = $qualifiedApiName;
        return $this;
    }

    /**
     * Gets as referenceTargetField
     *
     * @return string
     */
    public function getReferenceTargetField()
    {
        return $this->referenceTargetField;
    }

    /**
     * Sets a new referenceTargetField
     *
     * @param string $referenceTargetField
     * @return self
     */
    public function setReferenceTargetField($referenceTargetField)
    {
        $this->referenceTargetField = $referenceTargetField;
        return $this;
    }

    /**
     * Adds as referenceTo
     *
     * @return self
     * @param string $referenceTo
     */
    public function addToReferenceTo($referenceTo)
    {
        $this->referenceTo[] = $referenceTo;
        return $this;
    }

    /**
     * isset referenceTo
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReferenceTo($index)
    {
        return isset($this->referenceTo[$index]);
    }

    /**
     * unset referenceTo
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReferenceTo($index)
    {
        unset($this->referenceTo[$index]);
    }

    /**
     * Gets as referenceTo
     *
     * @return string[]
     */
    public function getReferenceTo()
    {
        return $this->referenceTo;
    }

    /**
     * Sets a new referenceTo
     *
     * @param string[] $referenceTo
     * @return self
     */
    public function setReferenceTo(array $referenceTo)
    {
        $this->referenceTo = $referenceTo;
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

    /**
     * Gets as runningUserFieldAccess
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserFieldAccessType
     */
    public function getRunningUserFieldAccess()
    {
        return $this->runningUserFieldAccess;
    }

    /**
     * Sets a new runningUserFieldAccess
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserFieldAccessType $runningUserFieldAccess
     * @return self
     */
    public function setRunningUserFieldAccess(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserFieldAccessType $runningUserFieldAccess)
    {
        $this->runningUserFieldAccess = $runningUserFieldAccess;
        return $this;
    }

    /**
     * Gets as runningUserFieldAccessId
     *
     * @return string
     */
    public function getRunningUserFieldAccessId()
    {
        return $this->runningUserFieldAccessId;
    }

    /**
     * Sets a new runningUserFieldAccessId
     *
     * @param string $runningUserFieldAccessId
     * @return self
     */
    public function setRunningUserFieldAccessId($runningUserFieldAccessId)
    {
        $this->runningUserFieldAccessId = $runningUserFieldAccessId;
        return $this;
    }

    /**
     * Gets as scale
     *
     * @return int
     */
    public function getScale()
    {
        return $this->scale;
    }

    /**
     * Sets a new scale
     *
     * @param int $scale
     * @return self
     */
    public function setScale($scale)
    {
        $this->scale = $scale;
        return $this;
    }

    /**
     * Gets as securityClassification
     *
     * @return string
     */
    public function getSecurityClassification()
    {
        return $this->securityClassification;
    }

    /**
     * Sets a new securityClassification
     *
     * @param string $securityClassification
     * @return self
     */
    public function setSecurityClassification($securityClassification)
    {
        $this->securityClassification = $securityClassification;
        return $this;
    }

    /**
     * Gets as serviceDataType
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\DataType
     */
    public function getServiceDataType()
    {
        return $this->serviceDataType;
    }

    /**
     * Sets a new serviceDataType
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\DataType $serviceDataType
     * @return self
     */
    public function setServiceDataType(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\DataType $serviceDataType)
    {
        $this->serviceDataType = $serviceDataType;
        return $this;
    }

    /**
     * Gets as serviceDataTypeId
     *
     * @return string
     */
    public function getServiceDataTypeId()
    {
        return $this->serviceDataTypeId;
    }

    /**
     * Sets a new serviceDataTypeId
     *
     * @param string $serviceDataTypeId
     * @return self
     */
    public function setServiceDataTypeId($serviceDataTypeId)
    {
        $this->serviceDataTypeId = $serviceDataTypeId;
        return $this;
    }

    /**
     * Gets as valueType
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\DataType
     */
    public function getValueType()
    {
        return $this->valueType;
    }

    /**
     * Sets a new valueType
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\DataType $valueType
     * @return self
     */
    public function setValueType(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\DataType $valueType)
    {
        $this->valueType = $valueType;
        return $this;
    }

    /**
     * Gets as valueTypeId
     *
     * @return string
     */
    public function getValueTypeId()
    {
        return $this->valueTypeId;
    }

    /**
     * Sets a new valueTypeId
     *
     * @param string $valueTypeId
     * @return self
     */
    public function setValueTypeId($valueTypeId)
    {
        $this->valueTypeId = $valueTypeId;
        return $this;
    }


}

