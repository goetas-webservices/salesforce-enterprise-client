<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing EntityDefinitionType
 *
 *
 * XSD Type: EntityDefinition
 */
class EntityDefinitionType extends SObjectType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $childRelationships
     */
    private $childRelationships = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $dataSteward
     */
    private $dataSteward = null;

    /**
     * @property string $dataStewardId
     */
    private $dataStewardId = null;

    /**
     * @property string $defaultCompactLayoutId
     */
    private $defaultCompactLayoutId = null;

    /**
     * @property string $detailUrl
     */
    private $detailUrl = null;

    /**
     * @property string $developerName
     */
    private $developerName = null;

    /**
     * @property string $durableId
     */
    private $durableId = null;

    /**
     * @property string $editDefinitionUrl
     */
    private $editDefinitionUrl = null;

    /**
     * @property string $editUrl
     */
    private $editUrl = null;

    /**
     * @property string $externalSharingModel
     */
    private $externalSharingModel = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $fields
     */
    private $fields = null;

    /**
     * @property bool $hasSubtypes
     */
    private $hasSubtypes = null;

    /**
     * @property string $helpSettingPageName
     */
    private $helpSettingPageName = null;

    /**
     * @property string $helpSettingPageUrl
     */
    private $helpSettingPageUrl = null;

    /**
     * @property string $internalSharingModel
     */
    private $internalSharingModel = null;

    /**
     * @property bool $isApexTriggerable
     */
    private $isApexTriggerable = null;

    /**
     * @property bool $isAutoActivityCaptureEnabled
     */
    private $isAutoActivityCaptureEnabled = null;

    /**
     * @property bool $isCompactLayoutable
     */
    private $isCompactLayoutable = null;

    /**
     * @property bool $isCustomSetting
     */
    private $isCustomSetting = null;

    /**
     * @property bool $isCustomizable
     */
    private $isCustomizable = null;

    /**
     * @property bool $isDeprecatedAndHidden
     */
    private $isDeprecatedAndHidden = null;

    /**
     * @property bool $isEverCreatable
     */
    private $isEverCreatable = null;

    /**
     * @property bool $isEverDeletable
     */
    private $isEverDeletable = null;

    /**
     * @property bool $isEverUpdatable
     */
    private $isEverUpdatable = null;

    /**
     * @property bool $isFeedEnabled
     */
    private $isFeedEnabled = null;

    /**
     * @property bool $isIdEnabled
     */
    private $isIdEnabled = null;

    /**
     * @property bool $isLayoutable
     */
    private $isLayoutable = null;

    /**
     * @property bool $isMruEnabled
     */
    private $isMruEnabled = null;

    /**
     * @property bool $isProcessEnabled
     */
    private $isProcessEnabled = null;

    /**
     * @property bool $isQueryable
     */
    private $isQueryable = null;

    /**
     * @property bool $isReplicateable
     */
    private $isReplicateable = null;

    /**
     * @property bool $isRetrieveable
     */
    private $isRetrieveable = null;

    /**
     * @property bool $isSearchLayoutable
     */
    private $isSearchLayoutable = null;

    /**
     * @property bool $isSearchable
     */
    private $isSearchable = null;

    /**
     * @property bool $isSubtype
     */
    private $isSubtype = null;

    /**
     * @property bool $isTriggerable
     */
    private $isTriggerable = null;

    /**
     * @property bool $isWorkflowEnabled
     */
    private $isWorkflowEnabled = null;

    /**
     * @property string $keyPrefix
     */
    private $keyPrefix = null;

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
     * @property string $masterLabel
     */
    private $masterLabel = null;

    /**
     * @property string $namespacePrefix
     */
    private $namespacePrefix = null;

    /**
     * @property string $newUrl
     */
    private $newUrl = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $ownerChangeOptions
     */
    private $ownerChangeOptions = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $particles
     */
    private $particles = null;

    /**
     * @property string $pluralLabel
     */
    private $pluralLabel = null;

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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\RecordTypeInfoType[] $recordTypesSupported
     */
    private $recordTypesSupported = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $relationshipDomains
     */
    private $relationshipDomains = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserEntityAccessType $runningUserEntityAccess
     */
    private $runningUserEntityAccess = null;

    /**
     * @property string $runningUserEntityAccessId
     */
    private $runningUserEntityAccessId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $searchLayouts
     */
    private $searchLayouts = null;

    /**
     * Gets as childRelationships
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getChildRelationships()
    {
        return $this->childRelationships;
    }

    /**
     * Sets a new childRelationships
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $childRelationships
     * @return self
     */
    public function setChildRelationships(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $childRelationships)
    {
        $this->childRelationships = $childRelationships;
        return $this;
    }

    /**
     * Gets as dataSteward
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType
     */
    public function getDataSteward()
    {
        return $this->dataSteward;
    }

    /**
     * Sets a new dataSteward
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $dataSteward
     * @return self
     */
    public function setDataSteward(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $dataSteward)
    {
        $this->dataSteward = $dataSteward;
        return $this;
    }

    /**
     * Gets as dataStewardId
     *
     * @return string
     */
    public function getDataStewardId()
    {
        return $this->dataStewardId;
    }

    /**
     * Sets a new dataStewardId
     *
     * @param string $dataStewardId
     * @return self
     */
    public function setDataStewardId($dataStewardId)
    {
        $this->dataStewardId = $dataStewardId;
        return $this;
    }

    /**
     * Gets as defaultCompactLayoutId
     *
     * @return string
     */
    public function getDefaultCompactLayoutId()
    {
        return $this->defaultCompactLayoutId;
    }

    /**
     * Sets a new defaultCompactLayoutId
     *
     * @param string $defaultCompactLayoutId
     * @return self
     */
    public function setDefaultCompactLayoutId($defaultCompactLayoutId)
    {
        $this->defaultCompactLayoutId = $defaultCompactLayoutId;
        return $this;
    }

    /**
     * Gets as detailUrl
     *
     * @return string
     */
    public function getDetailUrl()
    {
        return $this->detailUrl;
    }

    /**
     * Sets a new detailUrl
     *
     * @param string $detailUrl
     * @return self
     */
    public function setDetailUrl($detailUrl)
    {
        $this->detailUrl = $detailUrl;
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
     * Gets as editDefinitionUrl
     *
     * @return string
     */
    public function getEditDefinitionUrl()
    {
        return $this->editDefinitionUrl;
    }

    /**
     * Sets a new editDefinitionUrl
     *
     * @param string $editDefinitionUrl
     * @return self
     */
    public function setEditDefinitionUrl($editDefinitionUrl)
    {
        $this->editDefinitionUrl = $editDefinitionUrl;
        return $this;
    }

    /**
     * Gets as editUrl
     *
     * @return string
     */
    public function getEditUrl()
    {
        return $this->editUrl;
    }

    /**
     * Sets a new editUrl
     *
     * @param string $editUrl
     * @return self
     */
    public function setEditUrl($editUrl)
    {
        $this->editUrl = $editUrl;
        return $this;
    }

    /**
     * Gets as externalSharingModel
     *
     * @return string
     */
    public function getExternalSharingModel()
    {
        return $this->externalSharingModel;
    }

    /**
     * Sets a new externalSharingModel
     *
     * @param string $externalSharingModel
     * @return self
     */
    public function setExternalSharingModel($externalSharingModel)
    {
        $this->externalSharingModel = $externalSharingModel;
        return $this;
    }

    /**
     * Gets as fields
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * Sets a new fields
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $fields
     * @return self
     */
    public function setFields(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $fields)
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
     * Gets as helpSettingPageName
     *
     * @return string
     */
    public function getHelpSettingPageName()
    {
        return $this->helpSettingPageName;
    }

    /**
     * Sets a new helpSettingPageName
     *
     * @param string $helpSettingPageName
     * @return self
     */
    public function setHelpSettingPageName($helpSettingPageName)
    {
        $this->helpSettingPageName = $helpSettingPageName;
        return $this;
    }

    /**
     * Gets as helpSettingPageUrl
     *
     * @return string
     */
    public function getHelpSettingPageUrl()
    {
        return $this->helpSettingPageUrl;
    }

    /**
     * Sets a new helpSettingPageUrl
     *
     * @param string $helpSettingPageUrl
     * @return self
     */
    public function setHelpSettingPageUrl($helpSettingPageUrl)
    {
        $this->helpSettingPageUrl = $helpSettingPageUrl;
        return $this;
    }

    /**
     * Gets as internalSharingModel
     *
     * @return string
     */
    public function getInternalSharingModel()
    {
        return $this->internalSharingModel;
    }

    /**
     * Sets a new internalSharingModel
     *
     * @param string $internalSharingModel
     * @return self
     */
    public function setInternalSharingModel($internalSharingModel)
    {
        $this->internalSharingModel = $internalSharingModel;
        return $this;
    }

    /**
     * Gets as isApexTriggerable
     *
     * @return bool
     */
    public function getIsApexTriggerable()
    {
        return $this->isApexTriggerable;
    }

    /**
     * Sets a new isApexTriggerable
     *
     * @param bool $isApexTriggerable
     * @return self
     */
    public function setIsApexTriggerable($isApexTriggerable)
    {
        $this->isApexTriggerable = $isApexTriggerable;
        return $this;
    }

    /**
     * Gets as isAutoActivityCaptureEnabled
     *
     * @return bool
     */
    public function getIsAutoActivityCaptureEnabled()
    {
        return $this->isAutoActivityCaptureEnabled;
    }

    /**
     * Sets a new isAutoActivityCaptureEnabled
     *
     * @param bool $isAutoActivityCaptureEnabled
     * @return self
     */
    public function setIsAutoActivityCaptureEnabled($isAutoActivityCaptureEnabled)
    {
        $this->isAutoActivityCaptureEnabled = $isAutoActivityCaptureEnabled;
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
     * Gets as isCustomSetting
     *
     * @return bool
     */
    public function getIsCustomSetting()
    {
        return $this->isCustomSetting;
    }

    /**
     * Sets a new isCustomSetting
     *
     * @param bool $isCustomSetting
     * @return self
     */
    public function setIsCustomSetting($isCustomSetting)
    {
        $this->isCustomSetting = $isCustomSetting;
        return $this;
    }

    /**
     * Gets as isCustomizable
     *
     * @return bool
     */
    public function getIsCustomizable()
    {
        return $this->isCustomizable;
    }

    /**
     * Sets a new isCustomizable
     *
     * @param bool $isCustomizable
     * @return self
     */
    public function setIsCustomizable($isCustomizable)
    {
        $this->isCustomizable = $isCustomizable;
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
     * Gets as isEverCreatable
     *
     * @return bool
     */
    public function getIsEverCreatable()
    {
        return $this->isEverCreatable;
    }

    /**
     * Sets a new isEverCreatable
     *
     * @param bool $isEverCreatable
     * @return self
     */
    public function setIsEverCreatable($isEverCreatable)
    {
        $this->isEverCreatable = $isEverCreatable;
        return $this;
    }

    /**
     * Gets as isEverDeletable
     *
     * @return bool
     */
    public function getIsEverDeletable()
    {
        return $this->isEverDeletable;
    }

    /**
     * Sets a new isEverDeletable
     *
     * @param bool $isEverDeletable
     * @return self
     */
    public function setIsEverDeletable($isEverDeletable)
    {
        $this->isEverDeletable = $isEverDeletable;
        return $this;
    }

    /**
     * Gets as isEverUpdatable
     *
     * @return bool
     */
    public function getIsEverUpdatable()
    {
        return $this->isEverUpdatable;
    }

    /**
     * Sets a new isEverUpdatable
     *
     * @param bool $isEverUpdatable
     * @return self
     */
    public function setIsEverUpdatable($isEverUpdatable)
    {
        $this->isEverUpdatable = $isEverUpdatable;
        return $this;
    }

    /**
     * Gets as isFeedEnabled
     *
     * @return bool
     */
    public function getIsFeedEnabled()
    {
        return $this->isFeedEnabled;
    }

    /**
     * Sets a new isFeedEnabled
     *
     * @param bool $isFeedEnabled
     * @return self
     */
    public function setIsFeedEnabled($isFeedEnabled)
    {
        $this->isFeedEnabled = $isFeedEnabled;
        return $this;
    }

    /**
     * Gets as isIdEnabled
     *
     * @return bool
     */
    public function getIsIdEnabled()
    {
        return $this->isIdEnabled;
    }

    /**
     * Sets a new isIdEnabled
     *
     * @param bool $isIdEnabled
     * @return self
     */
    public function setIsIdEnabled($isIdEnabled)
    {
        $this->isIdEnabled = $isIdEnabled;
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
     * Gets as isMruEnabled
     *
     * @return bool
     */
    public function getIsMruEnabled()
    {
        return $this->isMruEnabled;
    }

    /**
     * Sets a new isMruEnabled
     *
     * @param bool $isMruEnabled
     * @return self
     */
    public function setIsMruEnabled($isMruEnabled)
    {
        $this->isMruEnabled = $isMruEnabled;
        return $this;
    }

    /**
     * Gets as isProcessEnabled
     *
     * @return bool
     */
    public function getIsProcessEnabled()
    {
        return $this->isProcessEnabled;
    }

    /**
     * Sets a new isProcessEnabled
     *
     * @param bool $isProcessEnabled
     * @return self
     */
    public function setIsProcessEnabled($isProcessEnabled)
    {
        $this->isProcessEnabled = $isProcessEnabled;
        return $this;
    }

    /**
     * Gets as isQueryable
     *
     * @return bool
     */
    public function getIsQueryable()
    {
        return $this->isQueryable;
    }

    /**
     * Sets a new isQueryable
     *
     * @param bool $isQueryable
     * @return self
     */
    public function setIsQueryable($isQueryable)
    {
        $this->isQueryable = $isQueryable;
        return $this;
    }

    /**
     * Gets as isReplicateable
     *
     * @return bool
     */
    public function getIsReplicateable()
    {
        return $this->isReplicateable;
    }

    /**
     * Sets a new isReplicateable
     *
     * @param bool $isReplicateable
     * @return self
     */
    public function setIsReplicateable($isReplicateable)
    {
        $this->isReplicateable = $isReplicateable;
        return $this;
    }

    /**
     * Gets as isRetrieveable
     *
     * @return bool
     */
    public function getIsRetrieveable()
    {
        return $this->isRetrieveable;
    }

    /**
     * Sets a new isRetrieveable
     *
     * @param bool $isRetrieveable
     * @return self
     */
    public function setIsRetrieveable($isRetrieveable)
    {
        $this->isRetrieveable = $isRetrieveable;
        return $this;
    }

    /**
     * Gets as isSearchLayoutable
     *
     * @return bool
     */
    public function getIsSearchLayoutable()
    {
        return $this->isSearchLayoutable;
    }

    /**
     * Sets a new isSearchLayoutable
     *
     * @param bool $isSearchLayoutable
     * @return self
     */
    public function setIsSearchLayoutable($isSearchLayoutable)
    {
        $this->isSearchLayoutable = $isSearchLayoutable;
        return $this;
    }

    /**
     * Gets as isSearchable
     *
     * @return bool
     */
    public function getIsSearchable()
    {
        return $this->isSearchable;
    }

    /**
     * Sets a new isSearchable
     *
     * @param bool $isSearchable
     * @return self
     */
    public function setIsSearchable($isSearchable)
    {
        $this->isSearchable = $isSearchable;
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
     * Gets as isTriggerable
     *
     * @return bool
     */
    public function getIsTriggerable()
    {
        return $this->isTriggerable;
    }

    /**
     * Sets a new isTriggerable
     *
     * @param bool $isTriggerable
     * @return self
     */
    public function setIsTriggerable($isTriggerable)
    {
        $this->isTriggerable = $isTriggerable;
        return $this;
    }

    /**
     * Gets as isWorkflowEnabled
     *
     * @return bool
     */
    public function getIsWorkflowEnabled()
    {
        return $this->isWorkflowEnabled;
    }

    /**
     * Sets a new isWorkflowEnabled
     *
     * @param bool $isWorkflowEnabled
     * @return self
     */
    public function setIsWorkflowEnabled($isWorkflowEnabled)
    {
        $this->isWorkflowEnabled = $isWorkflowEnabled;
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
     * Gets as newUrl
     *
     * @return string
     */
    public function getNewUrl()
    {
        return $this->newUrl;
    }

    /**
     * Sets a new newUrl
     *
     * @param string $newUrl
     * @return self
     */
    public function setNewUrl($newUrl)
    {
        $this->newUrl = $newUrl;
        return $this;
    }

    /**
     * Gets as ownerChangeOptions
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getOwnerChangeOptions()
    {
        return $this->ownerChangeOptions;
    }

    /**
     * Sets a new ownerChangeOptions
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $ownerChangeOptions
     * @return self
     */
    public function setOwnerChangeOptions(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $ownerChangeOptions)
    {
        $this->ownerChangeOptions = $ownerChangeOptions;
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
     * Gets as pluralLabel
     *
     * @return string
     */
    public function getPluralLabel()
    {
        return $this->pluralLabel;
    }

    /**
     * Sets a new pluralLabel
     *
     * @param string $pluralLabel
     * @return self
     */
    public function setPluralLabel($pluralLabel)
    {
        $this->pluralLabel = $pluralLabel;
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
     * Adds as recordTypeInfos
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\RecordTypeInfoType $recordTypeInfos
     */
    public function addToRecordTypesSupported(\GoetasWebservices\Client\SalesforceEnterprise\Types\RecordTypeInfoType $recordTypeInfos)
    {
        $this->recordTypesSupported[] = $recordTypeInfos;
        return $this;
    }

    /**
     * isset recordTypesSupported
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRecordTypesSupported($index)
    {
        return isset($this->recordTypesSupported[$index]);
    }

    /**
     * unset recordTypesSupported
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRecordTypesSupported($index)
    {
        unset($this->recordTypesSupported[$index]);
    }

    /**
     * Gets as recordTypesSupported
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\RecordTypeInfoType[]
     */
    public function getRecordTypesSupported()
    {
        return $this->recordTypesSupported;
    }

    /**
     * Sets a new recordTypesSupported
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\RecordTypeInfoType[] $recordTypesSupported
     * @return self
     */
    public function setRecordTypesSupported(array $recordTypesSupported)
    {
        $this->recordTypesSupported = $recordTypesSupported;
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
     * Gets as runningUserEntityAccess
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserEntityAccessType
     */
    public function getRunningUserEntityAccess()
    {
        return $this->runningUserEntityAccess;
    }

    /**
     * Sets a new runningUserEntityAccess
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserEntityAccessType $runningUserEntityAccess
     * @return self
     */
    public function setRunningUserEntityAccess(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserEntityAccessType $runningUserEntityAccess)
    {
        $this->runningUserEntityAccess = $runningUserEntityAccess;
        return $this;
    }

    /**
     * Gets as runningUserEntityAccessId
     *
     * @return string
     */
    public function getRunningUserEntityAccessId()
    {
        return $this->runningUserEntityAccessId;
    }

    /**
     * Sets a new runningUserEntityAccessId
     *
     * @param string $runningUserEntityAccessId
     * @return self
     */
    public function setRunningUserEntityAccessId($runningUserEntityAccessId)
    {
        $this->runningUserEntityAccessId = $runningUserEntityAccessId;
        return $this;
    }

    /**
     * Gets as searchLayouts
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getSearchLayouts()
    {
        return $this->searchLayouts;
    }

    /**
     * Sets a new searchLayouts
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $searchLayouts
     * @return self
     */
    public function setSearchLayouts(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $searchLayouts)
    {
        $this->searchLayouts = $searchLayouts;
        return $this;
    }


}

