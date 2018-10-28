<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing FieldType
 *
 *
 * XSD Type: Field
 */
class FieldType
{

    /**
     * @property bool $aggregatable
     */
    private $aggregatable = null;

    /**
     * @property bool $aiPredictionField
     */
    private $aiPredictionField = null;

    /**
     * @property bool $autoNumber
     */
    private $autoNumber = null;

    /**
     * @property int $byteLength
     */
    private $byteLength = null;

    /**
     * @property bool $calculated
     */
    private $calculated = null;

    /**
     * @property string $calculatedFormula
     */
    private $calculatedFormula = null;

    /**
     * @property bool $cascadeDelete
     */
    private $cascadeDelete = null;

    /**
     * @property bool $caseSensitive
     */
    private $caseSensitive = null;

    /**
     * @property string $compoundFieldName
     */
    private $compoundFieldName = null;

    /**
     * @property string $controllerName
     */
    private $controllerName = null;

    /**
     * @property bool $createable
     */
    private $createable = null;

    /**
     * @property bool $custom
     */
    private $custom = null;

    /**
     * @property mixed $defaultValue
     */
    private $defaultValue = null;

    /**
     * @property string $defaultValueFormula
     */
    private $defaultValueFormula = null;

    /**
     * @property bool $defaultedOnCreate
     */
    private $defaultedOnCreate = null;

    /**
     * @property bool $dependentPicklist
     */
    private $dependentPicklist = null;

    /**
     * @property bool $deprecatedAndHidden
     */
    private $deprecatedAndHidden = null;

    /**
     * @property int $digits
     */
    private $digits = null;

    /**
     * @property bool $displayLocationInDecimal
     */
    private $displayLocationInDecimal = null;

    /**
     * @property bool $encrypted
     */
    private $encrypted = null;

    /**
     * @property bool $externalId
     */
    private $externalId = null;

    /**
     * @property string $extraTypeInfo
     */
    private $extraTypeInfo = null;

    /**
     * @property bool $filterable
     */
    private $filterable = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\FilteredLookupInfoType $filteredLookupInfo
     */
    private $filteredLookupInfo = null;

    /**
     * @property bool $formulaTreatNullNumberAsZero
     */
    private $formulaTreatNullNumberAsZero = null;

    /**
     * @property bool $groupable
     */
    private $groupable = null;

    /**
     * @property bool $highScaleNumber
     */
    private $highScaleNumber = null;

    /**
     * @property bool $htmlFormatted
     */
    private $htmlFormatted = null;

    /**
     * @property bool $idLookup
     */
    private $idLookup = null;

    /**
     * @property string $inlineHelpText
     */
    private $inlineHelpText = null;

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
     * @property string $name
     */
    private $name = null;

    /**
     * @property bool $nameField
     */
    private $nameField = null;

    /**
     * @property bool $namePointing
     */
    private $namePointing = null;

    /**
     * @property bool $nillable
     */
    private $nillable = null;

    /**
     * @property bool $permissionable
     */
    private $permissionable = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\PicklistEntryType[] $picklistValues
     */
    private $picklistValues = [
        
    ];

    /**
     * @property bool $polymorphicForeignKey
     */
    private $polymorphicForeignKey = null;

    /**
     * @property int $precision
     */
    private $precision = null;

    /**
     * @property bool $queryByDistance
     */
    private $queryByDistance = null;

    /**
     * @property string $referenceTargetField
     */
    private $referenceTargetField = null;

    /**
     * @property string[] $referenceTo
     */
    private $referenceTo = [
        
    ];

    /**
     * @property string $relationshipName
     */
    private $relationshipName = null;

    /**
     * @property int $relationshipOrder
     */
    private $relationshipOrder = null;

    /**
     * @property bool $restrictedDelete
     */
    private $restrictedDelete = null;

    /**
     * @property bool $restrictedPicklist
     */
    private $restrictedPicklist = null;

    /**
     * @property int $scale
     */
    private $scale = null;

    /**
     * @property bool $searchPrefilterable
     */
    private $searchPrefilterable = null;

    /**
     * @property string $soapType
     */
    private $soapType = null;

    /**
     * @property bool $sortable
     */
    private $sortable = null;

    /**
     * @property string $type
     */
    private $type = null;

    /**
     * @property bool $unique
     */
    private $unique = null;

    /**
     * @property bool $updateable
     */
    private $updateable = null;

    /**
     * @property bool $writeRequiresMasterRead
     */
    private $writeRequiresMasterRead = null;

    /**
     * Gets as aggregatable
     *
     * @return bool
     */
    public function getAggregatable()
    {
        return $this->aggregatable;
    }

    /**
     * Sets a new aggregatable
     *
     * @param bool $aggregatable
     * @return self
     */
    public function setAggregatable($aggregatable)
    {
        $this->aggregatable = $aggregatable;
        return $this;
    }

    /**
     * Gets as aiPredictionField
     *
     * @return bool
     */
    public function getAiPredictionField()
    {
        return $this->aiPredictionField;
    }

    /**
     * Sets a new aiPredictionField
     *
     * @param bool $aiPredictionField
     * @return self
     */
    public function setAiPredictionField($aiPredictionField)
    {
        $this->aiPredictionField = $aiPredictionField;
        return $this;
    }

    /**
     * Gets as autoNumber
     *
     * @return bool
     */
    public function getAutoNumber()
    {
        return $this->autoNumber;
    }

    /**
     * Sets a new autoNumber
     *
     * @param bool $autoNumber
     * @return self
     */
    public function setAutoNumber($autoNumber)
    {
        $this->autoNumber = $autoNumber;
        return $this;
    }

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
     * Gets as calculated
     *
     * @return bool
     */
    public function getCalculated()
    {
        return $this->calculated;
    }

    /**
     * Sets a new calculated
     *
     * @param bool $calculated
     * @return self
     */
    public function setCalculated($calculated)
    {
        $this->calculated = $calculated;
        return $this;
    }

    /**
     * Gets as calculatedFormula
     *
     * @return string
     */
    public function getCalculatedFormula()
    {
        return $this->calculatedFormula;
    }

    /**
     * Sets a new calculatedFormula
     *
     * @param string $calculatedFormula
     * @return self
     */
    public function setCalculatedFormula($calculatedFormula)
    {
        $this->calculatedFormula = $calculatedFormula;
        return $this;
    }

    /**
     * Gets as cascadeDelete
     *
     * @return bool
     */
    public function getCascadeDelete()
    {
        return $this->cascadeDelete;
    }

    /**
     * Sets a new cascadeDelete
     *
     * @param bool $cascadeDelete
     * @return self
     */
    public function setCascadeDelete($cascadeDelete)
    {
        $this->cascadeDelete = $cascadeDelete;
        return $this;
    }

    /**
     * Gets as caseSensitive
     *
     * @return bool
     */
    public function getCaseSensitive()
    {
        return $this->caseSensitive;
    }

    /**
     * Sets a new caseSensitive
     *
     * @param bool $caseSensitive
     * @return self
     */
    public function setCaseSensitive($caseSensitive)
    {
        $this->caseSensitive = $caseSensitive;
        return $this;
    }

    /**
     * Gets as compoundFieldName
     *
     * @return string
     */
    public function getCompoundFieldName()
    {
        return $this->compoundFieldName;
    }

    /**
     * Sets a new compoundFieldName
     *
     * @param string $compoundFieldName
     * @return self
     */
    public function setCompoundFieldName($compoundFieldName)
    {
        $this->compoundFieldName = $compoundFieldName;
        return $this;
    }

    /**
     * Gets as controllerName
     *
     * @return string
     */
    public function getControllerName()
    {
        return $this->controllerName;
    }

    /**
     * Sets a new controllerName
     *
     * @param string $controllerName
     * @return self
     */
    public function setControllerName($controllerName)
    {
        $this->controllerName = $controllerName;
        return $this;
    }

    /**
     * Gets as createable
     *
     * @return bool
     */
    public function getCreateable()
    {
        return $this->createable;
    }

    /**
     * Sets a new createable
     *
     * @param bool $createable
     * @return self
     */
    public function setCreateable($createable)
    {
        $this->createable = $createable;
        return $this;
    }

    /**
     * Gets as custom
     *
     * @return bool
     */
    public function getCustom()
    {
        return $this->custom;
    }

    /**
     * Sets a new custom
     *
     * @param bool $custom
     * @return self
     */
    public function setCustom($custom)
    {
        $this->custom = $custom;
        return $this;
    }

    /**
     * Gets as defaultValue
     *
     * @return mixed
     */
    public function getDefaultValue()
    {
        return $this->defaultValue;
    }

    /**
     * Sets a new defaultValue
     *
     * @param mixed $defaultValue
     * @return self
     */
    public function setDefaultValue($defaultValue)
    {
        $this->defaultValue = $defaultValue;
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
     * Gets as defaultedOnCreate
     *
     * @return bool
     */
    public function getDefaultedOnCreate()
    {
        return $this->defaultedOnCreate;
    }

    /**
     * Sets a new defaultedOnCreate
     *
     * @param bool $defaultedOnCreate
     * @return self
     */
    public function setDefaultedOnCreate($defaultedOnCreate)
    {
        $this->defaultedOnCreate = $defaultedOnCreate;
        return $this;
    }

    /**
     * Gets as dependentPicklist
     *
     * @return bool
     */
    public function getDependentPicklist()
    {
        return $this->dependentPicklist;
    }

    /**
     * Sets a new dependentPicklist
     *
     * @param bool $dependentPicklist
     * @return self
     */
    public function setDependentPicklist($dependentPicklist)
    {
        $this->dependentPicklist = $dependentPicklist;
        return $this;
    }

    /**
     * Gets as deprecatedAndHidden
     *
     * @return bool
     */
    public function getDeprecatedAndHidden()
    {
        return $this->deprecatedAndHidden;
    }

    /**
     * Sets a new deprecatedAndHidden
     *
     * @param bool $deprecatedAndHidden
     * @return self
     */
    public function setDeprecatedAndHidden($deprecatedAndHidden)
    {
        $this->deprecatedAndHidden = $deprecatedAndHidden;
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
     * Gets as displayLocationInDecimal
     *
     * @return bool
     */
    public function getDisplayLocationInDecimal()
    {
        return $this->displayLocationInDecimal;
    }

    /**
     * Sets a new displayLocationInDecimal
     *
     * @param bool $displayLocationInDecimal
     * @return self
     */
    public function setDisplayLocationInDecimal($displayLocationInDecimal)
    {
        $this->displayLocationInDecimal = $displayLocationInDecimal;
        return $this;
    }

    /**
     * Gets as encrypted
     *
     * @return bool
     */
    public function getEncrypted()
    {
        return $this->encrypted;
    }

    /**
     * Sets a new encrypted
     *
     * @param bool $encrypted
     * @return self
     */
    public function setEncrypted($encrypted)
    {
        $this->encrypted = $encrypted;
        return $this;
    }

    /**
     * Gets as externalId
     *
     * @return bool
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * Sets a new externalId
     *
     * @param bool $externalId
     * @return self
     */
    public function setExternalId($externalId)
    {
        $this->externalId = $externalId;
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
     * Gets as filterable
     *
     * @return bool
     */
    public function getFilterable()
    {
        return $this->filterable;
    }

    /**
     * Sets a new filterable
     *
     * @param bool $filterable
     * @return self
     */
    public function setFilterable($filterable)
    {
        $this->filterable = $filterable;
        return $this;
    }

    /**
     * Gets as filteredLookupInfo
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\FilteredLookupInfoType
     */
    public function getFilteredLookupInfo()
    {
        return $this->filteredLookupInfo;
    }

    /**
     * Sets a new filteredLookupInfo
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\FilteredLookupInfoType $filteredLookupInfo
     * @return self
     */
    public function setFilteredLookupInfo(\GoetasWebservices\Client\SalesforceEnterprise\Types\FilteredLookupInfoType $filteredLookupInfo)
    {
        $this->filteredLookupInfo = $filteredLookupInfo;
        return $this;
    }

    /**
     * Gets as formulaTreatNullNumberAsZero
     *
     * @return bool
     */
    public function getFormulaTreatNullNumberAsZero()
    {
        return $this->formulaTreatNullNumberAsZero;
    }

    /**
     * Sets a new formulaTreatNullNumberAsZero
     *
     * @param bool $formulaTreatNullNumberAsZero
     * @return self
     */
    public function setFormulaTreatNullNumberAsZero($formulaTreatNullNumberAsZero)
    {
        $this->formulaTreatNullNumberAsZero = $formulaTreatNullNumberAsZero;
        return $this;
    }

    /**
     * Gets as groupable
     *
     * @return bool
     */
    public function getGroupable()
    {
        return $this->groupable;
    }

    /**
     * Sets a new groupable
     *
     * @param bool $groupable
     * @return self
     */
    public function setGroupable($groupable)
    {
        $this->groupable = $groupable;
        return $this;
    }

    /**
     * Gets as highScaleNumber
     *
     * @return bool
     */
    public function getHighScaleNumber()
    {
        return $this->highScaleNumber;
    }

    /**
     * Sets a new highScaleNumber
     *
     * @param bool $highScaleNumber
     * @return self
     */
    public function setHighScaleNumber($highScaleNumber)
    {
        $this->highScaleNumber = $highScaleNumber;
        return $this;
    }

    /**
     * Gets as htmlFormatted
     *
     * @return bool
     */
    public function getHtmlFormatted()
    {
        return $this->htmlFormatted;
    }

    /**
     * Sets a new htmlFormatted
     *
     * @param bool $htmlFormatted
     * @return self
     */
    public function setHtmlFormatted($htmlFormatted)
    {
        $this->htmlFormatted = $htmlFormatted;
        return $this;
    }

    /**
     * Gets as idLookup
     *
     * @return bool
     */
    public function getIdLookup()
    {
        return $this->idLookup;
    }

    /**
     * Sets a new idLookup
     *
     * @param bool $idLookup
     * @return self
     */
    public function setIdLookup($idLookup)
    {
        $this->idLookup = $idLookup;
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
     * Gets as nameField
     *
     * @return bool
     */
    public function getNameField()
    {
        return $this->nameField;
    }

    /**
     * Sets a new nameField
     *
     * @param bool $nameField
     * @return self
     */
    public function setNameField($nameField)
    {
        $this->nameField = $nameField;
        return $this;
    }

    /**
     * Gets as namePointing
     *
     * @return bool
     */
    public function getNamePointing()
    {
        return $this->namePointing;
    }

    /**
     * Sets a new namePointing
     *
     * @param bool $namePointing
     * @return self
     */
    public function setNamePointing($namePointing)
    {
        $this->namePointing = $namePointing;
        return $this;
    }

    /**
     * Gets as nillable
     *
     * @return bool
     */
    public function getNillable()
    {
        return $this->nillable;
    }

    /**
     * Sets a new nillable
     *
     * @param bool $nillable
     * @return self
     */
    public function setNillable($nillable)
    {
        $this->nillable = $nillable;
        return $this;
    }

    /**
     * Gets as permissionable
     *
     * @return bool
     */
    public function getPermissionable()
    {
        return $this->permissionable;
    }

    /**
     * Sets a new permissionable
     *
     * @param bool $permissionable
     * @return self
     */
    public function setPermissionable($permissionable)
    {
        $this->permissionable = $permissionable;
        return $this;
    }

    /**
     * Adds as picklistValues
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\PicklistEntryType $picklistValues
     */
    public function addToPicklistValues(\GoetasWebservices\Client\SalesforceEnterprise\Types\PicklistEntryType $picklistValues)
    {
        $this->picklistValues[] = $picklistValues;
        return $this;
    }

    /**
     * isset picklistValues
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPicklistValues($index)
    {
        return isset($this->picklistValues[$index]);
    }

    /**
     * unset picklistValues
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPicklistValues($index)
    {
        unset($this->picklistValues[$index]);
    }

    /**
     * Gets as picklistValues
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\PicklistEntryType[]
     */
    public function getPicklistValues()
    {
        return $this->picklistValues;
    }

    /**
     * Sets a new picklistValues
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\PicklistEntryType[] $picklistValues
     * @return self
     */
    public function setPicklistValues(array $picklistValues)
    {
        $this->picklistValues = $picklistValues;
        return $this;
    }

    /**
     * Gets as polymorphicForeignKey
     *
     * @return bool
     */
    public function getPolymorphicForeignKey()
    {
        return $this->polymorphicForeignKey;
    }

    /**
     * Sets a new polymorphicForeignKey
     *
     * @param bool $polymorphicForeignKey
     * @return self
     */
    public function setPolymorphicForeignKey($polymorphicForeignKey)
    {
        $this->polymorphicForeignKey = $polymorphicForeignKey;
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
     * Gets as queryByDistance
     *
     * @return bool
     */
    public function getQueryByDistance()
    {
        return $this->queryByDistance;
    }

    /**
     * Sets a new queryByDistance
     *
     * @param bool $queryByDistance
     * @return self
     */
    public function setQueryByDistance($queryByDistance)
    {
        $this->queryByDistance = $queryByDistance;
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
     * Gets as restrictedDelete
     *
     * @return bool
     */
    public function getRestrictedDelete()
    {
        return $this->restrictedDelete;
    }

    /**
     * Sets a new restrictedDelete
     *
     * @param bool $restrictedDelete
     * @return self
     */
    public function setRestrictedDelete($restrictedDelete)
    {
        $this->restrictedDelete = $restrictedDelete;
        return $this;
    }

    /**
     * Gets as restrictedPicklist
     *
     * @return bool
     */
    public function getRestrictedPicklist()
    {
        return $this->restrictedPicklist;
    }

    /**
     * Sets a new restrictedPicklist
     *
     * @param bool $restrictedPicklist
     * @return self
     */
    public function setRestrictedPicklist($restrictedPicklist)
    {
        $this->restrictedPicklist = $restrictedPicklist;
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
     * Gets as searchPrefilterable
     *
     * @return bool
     */
    public function getSearchPrefilterable()
    {
        return $this->searchPrefilterable;
    }

    /**
     * Sets a new searchPrefilterable
     *
     * @param bool $searchPrefilterable
     * @return self
     */
    public function setSearchPrefilterable($searchPrefilterable)
    {
        $this->searchPrefilterable = $searchPrefilterable;
        return $this;
    }

    /**
     * Gets as soapType
     *
     * @return string
     */
    public function getSoapType()
    {
        return $this->soapType;
    }

    /**
     * Sets a new soapType
     *
     * @param string $soapType
     * @return self
     */
    public function setSoapType($soapType)
    {
        $this->soapType = $soapType;
        return $this;
    }

    /**
     * Gets as sortable
     *
     * @return bool
     */
    public function getSortable()
    {
        return $this->sortable;
    }

    /**
     * Sets a new sortable
     *
     * @param bool $sortable
     * @return self
     */
    public function setSortable($sortable)
    {
        $this->sortable = $sortable;
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
     * Gets as unique
     *
     * @return bool
     */
    public function getUnique()
    {
        return $this->unique;
    }

    /**
     * Sets a new unique
     *
     * @param bool $unique
     * @return self
     */
    public function setUnique($unique)
    {
        $this->unique = $unique;
        return $this;
    }

    /**
     * Gets as updateable
     *
     * @return bool
     */
    public function getUpdateable()
    {
        return $this->updateable;
    }

    /**
     * Sets a new updateable
     *
     * @param bool $updateable
     * @return self
     */
    public function setUpdateable($updateable)
    {
        $this->updateable = $updateable;
        return $this;
    }

    /**
     * Gets as writeRequiresMasterRead
     *
     * @return bool
     */
    public function getWriteRequiresMasterRead()
    {
        return $this->writeRequiresMasterRead;
    }

    /**
     * Sets a new writeRequiresMasterRead
     *
     * @param bool $writeRequiresMasterRead
     * @return self
     */
    public function setWriteRequiresMasterRead($writeRequiresMasterRead)
    {
        $this->writeRequiresMasterRead = $writeRequiresMasterRead;
        return $this;
    }


}

