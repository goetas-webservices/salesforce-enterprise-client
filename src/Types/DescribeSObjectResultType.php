<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribeSObjectResultType
 *
 *
 * XSD Type: DescribeSObjectResult
 */
class DescribeSObjectResultType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\ActionOverrideType[] $actionOverrides
     */
    private $actionOverrides = [
        
    ];

    /**
     * @property bool $activateable
     */
    private $activateable = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\ChildRelationshipType[] $childRelationships
     */
    private $childRelationships = [
        
    ];

    /**
     * @property bool $compactLayoutable
     */
    private $compactLayoutable = null;

    /**
     * @property bool $createable
     */
    private $createable = null;

    /**
     * @property bool $custom
     */
    private $custom = null;

    /**
     * @property bool $customSetting
     */
    private $customSetting = null;

    /**
     * @property bool $deletable
     */
    private $deletable = null;

    /**
     * @property bool $deprecatedAndHidden
     */
    private $deprecatedAndHidden = null;

    /**
     * @property bool $feedEnabled
     */
    private $feedEnabled = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\FieldType[] $fields
     */
    private $fields = [
        
    ];

    /**
     * @property bool $hasSubtypes
     */
    private $hasSubtypes = null;

    /**
     * @property bool $idEnabled
     */
    private $idEnabled = null;

    /**
     * @property bool $isSubtype
     */
    private $isSubtype = null;

    /**
     * @property string $keyPrefix
     */
    private $keyPrefix = null;

    /**
     * @property string $label
     */
    private $label = null;

    /**
     * @property string $labelPlural
     */
    private $labelPlural = null;

    /**
     * @property bool $layoutable
     */
    private $layoutable = null;

    /**
     * @property bool $mergeable
     */
    private $mergeable = null;

    /**
     * @property bool $mruEnabled
     */
    private $mruEnabled = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\NamedLayoutInfoType[] $namedLayoutInfos
     */
    private $namedLayoutInfos = [
        
    ];

    /**
     * @property string $networkScopeFieldName
     */
    private $networkScopeFieldName = null;

    /**
     * @property bool $queryable
     */
    private $queryable = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\RecordTypeInfoType[] $recordTypeInfos
     */
    private $recordTypeInfos = [
        
    ];

    /**
     * @property bool $replicateable
     */
    private $replicateable = null;

    /**
     * @property bool $retrieveable
     */
    private $retrieveable = null;

    /**
     * @property bool $searchLayoutable
     */
    private $searchLayoutable = null;

    /**
     * @property bool $searchable
     */
    private $searchable = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\ScopeInfoType[] $supportedScopes
     */
    private $supportedScopes = [
        
    ];

    /**
     * @property bool $triggerable
     */
    private $triggerable = null;

    /**
     * @property bool $undeletable
     */
    private $undeletable = null;

    /**
     * @property bool $updateable
     */
    private $updateable = null;

    /**
     * @property string $urlDetail
     */
    private $urlDetail = null;

    /**
     * @property string $urlEdit
     */
    private $urlEdit = null;

    /**
     * @property string $urlNew
     */
    private $urlNew = null;

    /**
     * Adds as actionOverrides
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\ActionOverrideType $actionOverrides
     */
    public function addToActionOverrides(\GoetasWebservices\Client\SalesforceEnterprise\Types\ActionOverrideType $actionOverrides)
    {
        $this->actionOverrides[] = $actionOverrides;
        return $this;
    }

    /**
     * isset actionOverrides
     *
     * @param int|string $index
     * @return bool
     */
    public function issetActionOverrides($index)
    {
        return isset($this->actionOverrides[$index]);
    }

    /**
     * unset actionOverrides
     *
     * @param int|string $index
     * @return void
     */
    public function unsetActionOverrides($index)
    {
        unset($this->actionOverrides[$index]);
    }

    /**
     * Gets as actionOverrides
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\ActionOverrideType[]
     */
    public function getActionOverrides()
    {
        return $this->actionOverrides;
    }

    /**
     * Sets a new actionOverrides
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\ActionOverrideType[] $actionOverrides
     * @return self
     */
    public function setActionOverrides(array $actionOverrides)
    {
        $this->actionOverrides = $actionOverrides;
        return $this;
    }

    /**
     * Gets as activateable
     *
     * @return bool
     */
    public function getActivateable()
    {
        return $this->activateable;
    }

    /**
     * Sets a new activateable
     *
     * @param bool $activateable
     * @return self
     */
    public function setActivateable($activateable)
    {
        $this->activateable = $activateable;
        return $this;
    }

    /**
     * Adds as childRelationships
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\ChildRelationshipType $childRelationships
     */
    public function addToChildRelationships(\GoetasWebservices\Client\SalesforceEnterprise\Types\ChildRelationshipType $childRelationships)
    {
        $this->childRelationships[] = $childRelationships;
        return $this;
    }

    /**
     * isset childRelationships
     *
     * @param int|string $index
     * @return bool
     */
    public function issetChildRelationships($index)
    {
        return isset($this->childRelationships[$index]);
    }

    /**
     * unset childRelationships
     *
     * @param int|string $index
     * @return void
     */
    public function unsetChildRelationships($index)
    {
        unset($this->childRelationships[$index]);
    }

    /**
     * Gets as childRelationships
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\ChildRelationshipType[]
     */
    public function getChildRelationships()
    {
        return $this->childRelationships;
    }

    /**
     * Sets a new childRelationships
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\ChildRelationshipType[] $childRelationships
     * @return self
     */
    public function setChildRelationships(array $childRelationships)
    {
        $this->childRelationships = $childRelationships;
        return $this;
    }

    /**
     * Gets as compactLayoutable
     *
     * @return bool
     */
    public function getCompactLayoutable()
    {
        return $this->compactLayoutable;
    }

    /**
     * Sets a new compactLayoutable
     *
     * @param bool $compactLayoutable
     * @return self
     */
    public function setCompactLayoutable($compactLayoutable)
    {
        $this->compactLayoutable = $compactLayoutable;
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
     * Gets as customSetting
     *
     * @return bool
     */
    public function getCustomSetting()
    {
        return $this->customSetting;
    }

    /**
     * Sets a new customSetting
     *
     * @param bool $customSetting
     * @return self
     */
    public function setCustomSetting($customSetting)
    {
        $this->customSetting = $customSetting;
        return $this;
    }

    /**
     * Gets as deletable
     *
     * @return bool
     */
    public function getDeletable()
    {
        return $this->deletable;
    }

    /**
     * Sets a new deletable
     *
     * @param bool $deletable
     * @return self
     */
    public function setDeletable($deletable)
    {
        $this->deletable = $deletable;
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
     * Gets as feedEnabled
     *
     * @return bool
     */
    public function getFeedEnabled()
    {
        return $this->feedEnabled;
    }

    /**
     * Sets a new feedEnabled
     *
     * @param bool $feedEnabled
     * @return self
     */
    public function setFeedEnabled($feedEnabled)
    {
        $this->feedEnabled = $feedEnabled;
        return $this;
    }

    /**
     * Adds as fields
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\FieldType $fields
     */
    public function addToFields(\GoetasWebservices\Client\SalesforceEnterprise\Types\FieldType $fields)
    {
        $this->fields[] = $fields;
        return $this;
    }

    /**
     * isset fields
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFields($index)
    {
        return isset($this->fields[$index]);
    }

    /**
     * unset fields
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFields($index)
    {
        unset($this->fields[$index]);
    }

    /**
     * Gets as fields
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\FieldType[]
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * Sets a new fields
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\FieldType[] $fields
     * @return self
     */
    public function setFields(array $fields)
    {
        $this->fields = $fields;
        return $this;
    }

    /**
     * Gets as hasSubtypes
     *
     * @return bool
     */
    public function getHasSubtypes()
    {
        return $this->hasSubtypes;
    }

    /**
     * Sets a new hasSubtypes
     *
     * @param bool $hasSubtypes
     * @return self
     */
    public function setHasSubtypes($hasSubtypes)
    {
        $this->hasSubtypes = $hasSubtypes;
        return $this;
    }

    /**
     * Gets as idEnabled
     *
     * @return bool
     */
    public function getIdEnabled()
    {
        return $this->idEnabled;
    }

    /**
     * Sets a new idEnabled
     *
     * @param bool $idEnabled
     * @return self
     */
    public function setIdEnabled($idEnabled)
    {
        $this->idEnabled = $idEnabled;
        return $this;
    }

    /**
     * Gets as isSubtype
     *
     * @return bool
     */
    public function getIsSubtype()
    {
        return $this->isSubtype;
    }

    /**
     * Sets a new isSubtype
     *
     * @param bool $isSubtype
     * @return self
     */
    public function setIsSubtype($isSubtype)
    {
        $this->isSubtype = $isSubtype;
        return $this;
    }

    /**
     * Gets as keyPrefix
     *
     * @return string
     */
    public function getKeyPrefix()
    {
        return $this->keyPrefix;
    }

    /**
     * Sets a new keyPrefix
     *
     * @param string $keyPrefix
     * @return self
     */
    public function setKeyPrefix($keyPrefix)
    {
        $this->keyPrefix = $keyPrefix;
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
     * Gets as labelPlural
     *
     * @return string
     */
    public function getLabelPlural()
    {
        return $this->labelPlural;
    }

    /**
     * Sets a new labelPlural
     *
     * @param string $labelPlural
     * @return self
     */
    public function setLabelPlural($labelPlural)
    {
        $this->labelPlural = $labelPlural;
        return $this;
    }

    /**
     * Gets as layoutable
     *
     * @return bool
     */
    public function getLayoutable()
    {
        return $this->layoutable;
    }

    /**
     * Sets a new layoutable
     *
     * @param bool $layoutable
     * @return self
     */
    public function setLayoutable($layoutable)
    {
        $this->layoutable = $layoutable;
        return $this;
    }

    /**
     * Gets as mergeable
     *
     * @return bool
     */
    public function getMergeable()
    {
        return $this->mergeable;
    }

    /**
     * Sets a new mergeable
     *
     * @param bool $mergeable
     * @return self
     */
    public function setMergeable($mergeable)
    {
        $this->mergeable = $mergeable;
        return $this;
    }

    /**
     * Gets as mruEnabled
     *
     * @return bool
     */
    public function getMruEnabled()
    {
        return $this->mruEnabled;
    }

    /**
     * Sets a new mruEnabled
     *
     * @param bool $mruEnabled
     * @return self
     */
    public function setMruEnabled($mruEnabled)
    {
        $this->mruEnabled = $mruEnabled;
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
     * Adds as namedLayoutInfos
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\NamedLayoutInfoType $namedLayoutInfos
     */
    public function addToNamedLayoutInfos(\GoetasWebservices\Client\SalesforceEnterprise\Types\NamedLayoutInfoType $namedLayoutInfos)
    {
        $this->namedLayoutInfos[] = $namedLayoutInfos;
        return $this;
    }

    /**
     * isset namedLayoutInfos
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNamedLayoutInfos($index)
    {
        return isset($this->namedLayoutInfos[$index]);
    }

    /**
     * unset namedLayoutInfos
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNamedLayoutInfos($index)
    {
        unset($this->namedLayoutInfos[$index]);
    }

    /**
     * Gets as namedLayoutInfos
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\NamedLayoutInfoType[]
     */
    public function getNamedLayoutInfos()
    {
        return $this->namedLayoutInfos;
    }

    /**
     * Sets a new namedLayoutInfos
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\NamedLayoutInfoType[] $namedLayoutInfos
     * @return self
     */
    public function setNamedLayoutInfos(array $namedLayoutInfos)
    {
        $this->namedLayoutInfos = $namedLayoutInfos;
        return $this;
    }

    /**
     * Gets as networkScopeFieldName
     *
     * @return string
     */
    public function getNetworkScopeFieldName()
    {
        return $this->networkScopeFieldName;
    }

    /**
     * Sets a new networkScopeFieldName
     *
     * @param string $networkScopeFieldName
     * @return self
     */
    public function setNetworkScopeFieldName($networkScopeFieldName)
    {
        $this->networkScopeFieldName = $networkScopeFieldName;
        return $this;
    }

    /**
     * Gets as queryable
     *
     * @return bool
     */
    public function getQueryable()
    {
        return $this->queryable;
    }

    /**
     * Sets a new queryable
     *
     * @param bool $queryable
     * @return self
     */
    public function setQueryable($queryable)
    {
        $this->queryable = $queryable;
        return $this;
    }

    /**
     * Adds as recordTypeInfos
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\RecordTypeInfoType $recordTypeInfos
     */
    public function addToRecordTypeInfos(\GoetasWebservices\Client\SalesforceEnterprise\Types\RecordTypeInfoType $recordTypeInfos)
    {
        $this->recordTypeInfos[] = $recordTypeInfos;
        return $this;
    }

    /**
     * isset recordTypeInfos
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRecordTypeInfos($index)
    {
        return isset($this->recordTypeInfos[$index]);
    }

    /**
     * unset recordTypeInfos
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRecordTypeInfos($index)
    {
        unset($this->recordTypeInfos[$index]);
    }

    /**
     * Gets as recordTypeInfos
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\RecordTypeInfoType[]
     */
    public function getRecordTypeInfos()
    {
        return $this->recordTypeInfos;
    }

    /**
     * Sets a new recordTypeInfos
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\RecordTypeInfoType[] $recordTypeInfos
     * @return self
     */
    public function setRecordTypeInfos(array $recordTypeInfos)
    {
        $this->recordTypeInfos = $recordTypeInfos;
        return $this;
    }

    /**
     * Gets as replicateable
     *
     * @return bool
     */
    public function getReplicateable()
    {
        return $this->replicateable;
    }

    /**
     * Sets a new replicateable
     *
     * @param bool $replicateable
     * @return self
     */
    public function setReplicateable($replicateable)
    {
        $this->replicateable = $replicateable;
        return $this;
    }

    /**
     * Gets as retrieveable
     *
     * @return bool
     */
    public function getRetrieveable()
    {
        return $this->retrieveable;
    }

    /**
     * Sets a new retrieveable
     *
     * @param bool $retrieveable
     * @return self
     */
    public function setRetrieveable($retrieveable)
    {
        $this->retrieveable = $retrieveable;
        return $this;
    }

    /**
     * Gets as searchLayoutable
     *
     * @return bool
     */
    public function getSearchLayoutable()
    {
        return $this->searchLayoutable;
    }

    /**
     * Sets a new searchLayoutable
     *
     * @param bool $searchLayoutable
     * @return self
     */
    public function setSearchLayoutable($searchLayoutable)
    {
        $this->searchLayoutable = $searchLayoutable;
        return $this;
    }

    /**
     * Gets as searchable
     *
     * @return bool
     */
    public function getSearchable()
    {
        return $this->searchable;
    }

    /**
     * Sets a new searchable
     *
     * @param bool $searchable
     * @return self
     */
    public function setSearchable($searchable)
    {
        $this->searchable = $searchable;
        return $this;
    }

    /**
     * Adds as supportedScopes
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\ScopeInfoType $supportedScopes
     */
    public function addToSupportedScopes(\GoetasWebservices\Client\SalesforceEnterprise\Types\ScopeInfoType $supportedScopes)
    {
        $this->supportedScopes[] = $supportedScopes;
        return $this;
    }

    /**
     * isset supportedScopes
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSupportedScopes($index)
    {
        return isset($this->supportedScopes[$index]);
    }

    /**
     * unset supportedScopes
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSupportedScopes($index)
    {
        unset($this->supportedScopes[$index]);
    }

    /**
     * Gets as supportedScopes
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\ScopeInfoType[]
     */
    public function getSupportedScopes()
    {
        return $this->supportedScopes;
    }

    /**
     * Sets a new supportedScopes
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\ScopeInfoType[] $supportedScopes
     * @return self
     */
    public function setSupportedScopes(array $supportedScopes)
    {
        $this->supportedScopes = $supportedScopes;
        return $this;
    }

    /**
     * Gets as triggerable
     *
     * @return bool
     */
    public function getTriggerable()
    {
        return $this->triggerable;
    }

    /**
     * Sets a new triggerable
     *
     * @param bool $triggerable
     * @return self
     */
    public function setTriggerable($triggerable)
    {
        $this->triggerable = $triggerable;
        return $this;
    }

    /**
     * Gets as undeletable
     *
     * @return bool
     */
    public function getUndeletable()
    {
        return $this->undeletable;
    }

    /**
     * Sets a new undeletable
     *
     * @param bool $undeletable
     * @return self
     */
    public function setUndeletable($undeletable)
    {
        $this->undeletable = $undeletable;
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
     * Gets as urlDetail
     *
     * @return string
     */
    public function getUrlDetail()
    {
        return $this->urlDetail;
    }

    /**
     * Sets a new urlDetail
     *
     * @param string $urlDetail
     * @return self
     */
    public function setUrlDetail($urlDetail)
    {
        $this->urlDetail = $urlDetail;
        return $this;
    }

    /**
     * Gets as urlEdit
     *
     * @return string
     */
    public function getUrlEdit()
    {
        return $this->urlEdit;
    }

    /**
     * Sets a new urlEdit
     *
     * @param string $urlEdit
     * @return self
     */
    public function setUrlEdit($urlEdit)
    {
        $this->urlEdit = $urlEdit;
        return $this;
    }

    /**
     * Gets as urlNew
     *
     * @return string
     */
    public function getUrlNew()
    {
        return $this->urlNew;
    }

    /**
     * Sets a new urlNew
     *
     * @param string $urlNew
     * @return self
     */
    public function setUrlNew($urlNew)
    {
        $this->urlNew = $urlNew;
        return $this;
    }


}

