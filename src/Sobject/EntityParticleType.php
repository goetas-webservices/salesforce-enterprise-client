<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing EntityParticleType
 *
 *
 * XSD Type: EntityParticle
 */
class EntityParticleType extends SObjectType
{

    /**
     * @property int $byteLength
     */
    private $byteLength = null;

    /**
     * @property string $dataType
     */
    private $dataType = null;

    /**
     * @property string $defaultValueFormula
     */
    private $defaultValueFormula = null;

    /**
     * @property string $developerName
     */
    private $developerName = null;

    /**
     * @property int $digits
     */
    private $digits = null;

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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\FieldDefinitionType $fieldDefinition
     */
    private $fieldDefinition = null;

    /**
     * @property string $fieldDefinitionId
     */
    private $fieldDefinitionId = null;

    /**
     * @property string $inlineHelpText
     */
    private $inlineHelpText = null;

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
     * @property bool $isAutonumber
     */
    private $isAutonumber = null;

    /**
     * @property bool $isCalculated
     */
    private $isCalculated = null;

    /**
     * @property bool $isCaseSensitive
     */
    private $isCaseSensitive = null;

    /**
     * @property bool $isCompactLayoutable
     */
    private $isCompactLayoutable = null;

    /**
     * @property bool $isComponent
     */
    private $isComponent = null;

    /**
     * @property bool $isCompound
     */
    private $isCompound = null;

    /**
     * @property bool $isCreatable
     */
    private $isCreatable = null;

    /**
     * @property bool $isDefaultedOnCreate
     */
    private $isDefaultedOnCreate = null;

    /**
     * @property bool $isDependentPicklist
     */
    private $isDependentPicklist = null;

    /**
     * @property bool $isDeprecatedAndHidden
     */
    private $isDeprecatedAndHidden = null;

    /**
     * @property bool $isDisplayLocationInDecimal
     */
    private $isDisplayLocationInDecimal = null;

    /**
     * @property bool $isEncrypted
     */
    private $isEncrypted = null;

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
     * @property bool $isIdLookup
     */
    private $isIdLookup = null;

    /**
     * @property bool $isLayoutable
     */
    private $isLayoutable = null;

    /**
     * @property bool $isListVisible
     */
    private $isListVisible = null;

    /**
     * @property bool $isNameField
     */
    private $isNameField = null;

    /**
     * @property bool $isNamePointing
     */
    private $isNamePointing = null;

    /**
     * @property bool $isNillable
     */
    private $isNillable = null;

    /**
     * @property bool $isPermissionable
     */
    private $isPermissionable = null;

    /**
     * @property bool $isUnique
     */
    private $isUnique = null;

    /**
     * @property bool $isUpdatable
     */
    private $isUpdatable = null;

    /**
     * @property bool $isWorkflowFilterable
     */
    private $isWorkflowFilterable = null;

    /**
     * @property bool $isWriteRequiresMasterRead
     */
    private $isWriteRequiresMasterRead = null;

    /**
     * @property string $label
     */
    private $label = null;

    /**
     * @property int $length
     */
    private $length = null;

    /**
     * @property string $mask
     */
    private $mask = null;

    /**
     * @property string $maskType
     */
    private $maskType = null;

    /**
     * @property string $masterLabel
     */
    private $masterLabel = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $namespacePrefix
     */
    private $namespacePrefix = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $picklistValues
     */
    private $picklistValues = null;

    /**
     * @property int $precision
     */
    private $precision = null;

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
     * @property string $relationshipName
     */
    private $relationshipName = null;

    /**
     * @property int $relationshipOrder
     */
    private $relationshipOrder = null;

    /**
     * @property int $scale
     */
    private $scale = null;

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
     * Gets as byteLength
     *
     * @return int
     */
    public function getByteLength()
    {
        return $this->byteLength;
    }

    /**
     * Sets a new byteLength
     *
     * @param int $byteLength
     * @return self
     */
    public function setByteLength($byteLength)
    {
        $this->byteLength = $byteLength;
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
     * Gets as defaultValueFormula
     *
     * @return string
     */
    public function getDefaultValueFormula()
    {
        return $this->defaultValueFormula;
    }

    /**
     * Sets a new defaultValueFormula
     *
     * @param string $defaultValueFormula
     * @return self
     */
    public function setDefaultValueFormula($defaultValueFormula)
    {
        $this->defaultValueFormula = $defaultValueFormula;
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
     * Gets as digits
     *
     * @return int
     */
    public function getDigits()
    {
        return $this->digits;
    }

    /**
     * Sets a new digits
     *
     * @param int $digits
     * @return self
     */
    public function setDigits($digits)
    {
        $this->digits = $digits;
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
     * Gets as fieldDefinition
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\FieldDefinitionType
     */
    public function getFieldDefinition()
    {
        return $this->fieldDefinition;
    }

    /**
     * Sets a new fieldDefinition
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\FieldDefinitionType $fieldDefinition
     * @return self
     */
    public function setFieldDefinition(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\FieldDefinitionType $fieldDefinition)
    {
        $this->fieldDefinition = $fieldDefinition;
        return $this;
    }

    /**
     * Gets as fieldDefinitionId
     *
     * @return string
     */
    public function getFieldDefinitionId()
    {
        return $this->fieldDefinitionId;
    }

    /**
     * Sets a new fieldDefinitionId
     *
     * @param string $fieldDefinitionId
     * @return self
     */
    public function setFieldDefinitionId($fieldDefinitionId)
    {
        $this->fieldDefinitionId = $fieldDefinitionId;
        return $this;
    }

    /**
     * Gets as inlineHelpText
     *
     * @return string
     */
    public function getInlineHelpText()
    {
        return $this->inlineHelpText;
    }

    /**
     * Sets a new inlineHelpText
     *
     * @param string $inlineHelpText
     * @return self
     */
    public function setInlineHelpText($inlineHelpText)
    {
        $this->inlineHelpText = $inlineHelpText;
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
     * Gets as isAutonumber
     *
     * @return bool
     */
    public function getIsAutonumber()
    {
        return $this->isAutonumber;
    }

    /**
     * Sets a new isAutonumber
     *
     * @param bool $isAutonumber
     * @return self
     */
    public function setIsAutonumber($isAutonumber)
    {
        $this->isAutonumber = $isAutonumber;
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
     * Gets as isCaseSensitive
     *
     * @return bool
     */
    public function getIsCaseSensitive()
    {
        return $this->isCaseSensitive;
    }

    /**
     * Sets a new isCaseSensitive
     *
     * @param bool $isCaseSensitive
     * @return self
     */
    public function setIsCaseSensitive($isCaseSensitive)
    {
        $this->isCaseSensitive = $isCaseSensitive;
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
     * Gets as isComponent
     *
     * @return bool
     */
    public function getIsComponent()
    {
        return $this->isComponent;
    }

    /**
     * Sets a new isComponent
     *
     * @param bool $isComponent
     * @return self
     */
    public function setIsComponent($isComponent)
    {
        $this->isComponent = $isComponent;
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
     * Gets as isCreatable
     *
     * @return bool
     */
    public function getIsCreatable()
    {
        return $this->isCreatable;
    }

    /**
     * Sets a new isCreatable
     *
     * @param bool $isCreatable
     * @return self
     */
    public function setIsCreatable($isCreatable)
    {
        $this->isCreatable = $isCreatable;
        return $this;
    }

    /**
     * Gets as isDefaultedOnCreate
     *
     * @return bool
     */
    public function getIsDefaultedOnCreate()
    {
        return $this->isDefaultedOnCreate;
    }

    /**
     * Sets a new isDefaultedOnCreate
     *
     * @param bool $isDefaultedOnCreate
     * @return self
     */
    public function setIsDefaultedOnCreate($isDefaultedOnCreate)
    {
        $this->isDefaultedOnCreate = $isDefaultedOnCreate;
        return $this;
    }

    /**
     * Gets as isDependentPicklist
     *
     * @return bool
     */
    public function getIsDependentPicklist()
    {
        return $this->isDependentPicklist;
    }

    /**
     * Sets a new isDependentPicklist
     *
     * @param bool $isDependentPicklist
     * @return self
     */
    public function setIsDependentPicklist($isDependentPicklist)
    {
        $this->isDependentPicklist = $isDependentPicklist;
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
     * Gets as isDisplayLocationInDecimal
     *
     * @return bool
     */
    public function getIsDisplayLocationInDecimal()
    {
        return $this->isDisplayLocationInDecimal;
    }

    /**
     * Sets a new isDisplayLocationInDecimal
     *
     * @param bool $isDisplayLocationInDecimal
     * @return self
     */
    public function setIsDisplayLocationInDecimal($isDisplayLocationInDecimal)
    {
        $this->isDisplayLocationInDecimal = $isDisplayLocationInDecimal;
        return $this;
    }

    /**
     * Gets as isEncrypted
     *
     * @return bool
     */
    public function getIsEncrypted()
    {
        return $this->isEncrypted;
    }

    /**
     * Sets a new isEncrypted
     *
     * @param bool $isEncrypted
     * @return self
     */
    public function setIsEncrypted($isEncrypted)
    {
        $this->isEncrypted = $isEncrypted;
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
     * Gets as isIdLookup
     *
     * @return bool
     */
    public function getIsIdLookup()
    {
        return $this->isIdLookup;
    }

    /**
     * Sets a new isIdLookup
     *
     * @param bool $isIdLookup
     * @return self
     */
    public function setIsIdLookup($isIdLookup)
    {
        $this->isIdLookup = $isIdLookup;
        return $this;
    }

    /**
     * Gets as isLayoutable
     *
     * @return bool
     */
    public function getIsLayoutable()
    {
        return $this->isLayoutable;
    }

    /**
     * Sets a new isLayoutable
     *
     * @param bool $isLayoutable
     * @return self
     */
    public function setIsLayoutable($isLayoutable)
    {
        $this->isLayoutable = $isLayoutable;
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
     * Gets as isNamePointing
     *
     * @return bool
     */
    public function getIsNamePointing()
    {
        return $this->isNamePointing;
    }

    /**
     * Sets a new isNamePointing
     *
     * @param bool $isNamePointing
     * @return self
     */
    public function setIsNamePointing($isNamePointing)
    {
        $this->isNamePointing = $isNamePointing;
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
     * Gets as isPermissionable
     *
     * @return bool
     */
    public function getIsPermissionable()
    {
        return $this->isPermissionable;
    }

    /**
     * Sets a new isPermissionable
     *
     * @param bool $isPermissionable
     * @return self
     */
    public function setIsPermissionable($isPermissionable)
    {
        $this->isPermissionable = $isPermissionable;
        return $this;
    }

    /**
     * Gets as isUnique
     *
     * @return bool
     */
    public function getIsUnique()
    {
        return $this->isUnique;
    }

    /**
     * Sets a new isUnique
     *
     * @param bool $isUnique
     * @return self
     */
    public function setIsUnique($isUnique)
    {
        $this->isUnique = $isUnique;
        return $this;
    }

    /**
     * Gets as isUpdatable
     *
     * @return bool
     */
    public function getIsUpdatable()
    {
        return $this->isUpdatable;
    }

    /**
     * Sets a new isUpdatable
     *
     * @param bool $isUpdatable
     * @return self
     */
    public function setIsUpdatable($isUpdatable)
    {
        $this->isUpdatable = $isUpdatable;
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
     * Gets as isWriteRequiresMasterRead
     *
     * @return bool
     */
    public function getIsWriteRequiresMasterRead()
    {
        return $this->isWriteRequiresMasterRead;
    }

    /**
     * Sets a new isWriteRequiresMasterRead
     *
     * @param bool $isWriteRequiresMasterRead
     * @return self
     */
    public function setIsWriteRequiresMasterRead($isWriteRequiresMasterRead)
    {
        $this->isWriteRequiresMasterRead = $isWriteRequiresMasterRead;
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
     * Gets as mask
     *
     * @return string
     */
    public function getMask()
    {
        return $this->mask;
    }

    /**
     * Sets a new mask
     *
     * @param string $mask
     * @return self
     */
    public function setMask($mask)
    {
        $this->mask = $mask;
        return $this;
    }

    /**
     * Gets as maskType
     *
     * @return string
     */
    public function getMaskType()
    {
        return $this->maskType;
    }

    /**
     * Sets a new maskType
     *
     * @param string $maskType
     * @return self
     */
    public function setMaskType($maskType)
    {
        $this->maskType = $maskType;
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
     * Gets as picklistValues
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getPicklistValues()
    {
        return $this->picklistValues;
    }

    /**
     * Sets a new picklistValues
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $picklistValues
     * @return self
     */
    public function setPicklistValues(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $picklistValues)
    {
        $this->picklistValues = $picklistValues;
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
     * Gets as relationshipOrder
     *
     * @return int
     */
    public function getRelationshipOrder()
    {
        return $this->relationshipOrder;
    }

    /**
     * Sets a new relationshipOrder
     *
     * @param int $relationshipOrder
     * @return self
     */
    public function setRelationshipOrder($relationshipOrder)
    {
        $this->relationshipOrder = $relationshipOrder;
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

