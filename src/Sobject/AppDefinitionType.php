<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing AppDefinitionType
 *
 *
 * XSD Type: AppDefinition
 */
class AppDefinitionType extends SObjectType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $appTabs
     */
    private $appTabs = null;

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
     * @property string $headerColor
     */
    private $headerColor = null;

    /**
     * @property bool $isLargeFormFactorSupported
     */
    private $isLargeFormFactorSupported = null;

    /**
     * @property bool $isMediumFormFactorSupported
     */
    private $isMediumFormFactorSupported = null;

    /**
     * @property bool $isNavAutoTempTabsDisabled
     */
    private $isNavAutoTempTabsDisabled = null;

    /**
     * @property bool $isNavPersonalizationDisabled
     */
    private $isNavPersonalizationDisabled = null;

    /**
     * @property bool $isOverrideOrgTheme
     */
    private $isOverrideOrgTheme = null;

    /**
     * @property bool $isSmallFormFactorSupported
     */
    private $isSmallFormFactorSupported = null;

    /**
     * @property string $label
     */
    private $label = null;

    /**
     * @property string $logoUrl
     */
    private $logoUrl = null;

    /**
     * @property string $masterLabel
     */
    private $masterLabel = null;

    /**
     * @property string $namespacePrefix
     */
    private $namespacePrefix = null;

    /**
     * @property string $navType
     */
    private $navType = null;

    /**
     * @property string $uiType
     */
    private $uiType = null;

    /**
     * @property string $utilityBar
     */
    private $utilityBar = null;

    /**
     * Gets as appTabs
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getAppTabs()
    {
        return $this->appTabs;
    }

    /**
     * Sets a new appTabs
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $appTabs
     * @return self
     */
    public function setAppTabs(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $appTabs)
    {
        $this->appTabs = $appTabs;
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
     * Gets as headerColor
     *
     * @return string
     */
    public function getHeaderColor()
    {
        return $this->headerColor;
    }

    /**
     * Sets a new headerColor
     *
     * @param string $headerColor
     * @return self
     */
    public function setHeaderColor($headerColor)
    {
        $this->headerColor = $headerColor;
        return $this;
    }

    /**
     * Gets as isLargeFormFactorSupported
     *
     * @return bool
     */
    public function getIsLargeFormFactorSupported()
    {
        return $this->isLargeFormFactorSupported;
    }

    /**
     * Sets a new isLargeFormFactorSupported
     *
     * @param bool $isLargeFormFactorSupported
     * @return self
     */
    public function setIsLargeFormFactorSupported($isLargeFormFactorSupported)
    {
        $this->isLargeFormFactorSupported = $isLargeFormFactorSupported;
        return $this;
    }

    /**
     * Gets as isMediumFormFactorSupported
     *
     * @return bool
     */
    public function getIsMediumFormFactorSupported()
    {
        return $this->isMediumFormFactorSupported;
    }

    /**
     * Sets a new isMediumFormFactorSupported
     *
     * @param bool $isMediumFormFactorSupported
     * @return self
     */
    public function setIsMediumFormFactorSupported($isMediumFormFactorSupported)
    {
        $this->isMediumFormFactorSupported = $isMediumFormFactorSupported;
        return $this;
    }

    /**
     * Gets as isNavAutoTempTabsDisabled
     *
     * @return bool
     */
    public function getIsNavAutoTempTabsDisabled()
    {
        return $this->isNavAutoTempTabsDisabled;
    }

    /**
     * Sets a new isNavAutoTempTabsDisabled
     *
     * @param bool $isNavAutoTempTabsDisabled
     * @return self
     */
    public function setIsNavAutoTempTabsDisabled($isNavAutoTempTabsDisabled)
    {
        $this->isNavAutoTempTabsDisabled = $isNavAutoTempTabsDisabled;
        return $this;
    }

    /**
     * Gets as isNavPersonalizationDisabled
     *
     * @return bool
     */
    public function getIsNavPersonalizationDisabled()
    {
        return $this->isNavPersonalizationDisabled;
    }

    /**
     * Sets a new isNavPersonalizationDisabled
     *
     * @param bool $isNavPersonalizationDisabled
     * @return self
     */
    public function setIsNavPersonalizationDisabled($isNavPersonalizationDisabled)
    {
        $this->isNavPersonalizationDisabled = $isNavPersonalizationDisabled;
        return $this;
    }

    /**
     * Gets as isOverrideOrgTheme
     *
     * @return bool
     */
    public function getIsOverrideOrgTheme()
    {
        return $this->isOverrideOrgTheme;
    }

    /**
     * Sets a new isOverrideOrgTheme
     *
     * @param bool $isOverrideOrgTheme
     * @return self
     */
    public function setIsOverrideOrgTheme($isOverrideOrgTheme)
    {
        $this->isOverrideOrgTheme = $isOverrideOrgTheme;
        return $this;
    }

    /**
     * Gets as isSmallFormFactorSupported
     *
     * @return bool
     */
    public function getIsSmallFormFactorSupported()
    {
        return $this->isSmallFormFactorSupported;
    }

    /**
     * Sets a new isSmallFormFactorSupported
     *
     * @param bool $isSmallFormFactorSupported
     * @return self
     */
    public function setIsSmallFormFactorSupported($isSmallFormFactorSupported)
    {
        $this->isSmallFormFactorSupported = $isSmallFormFactorSupported;
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
     * Gets as logoUrl
     *
     * @return string
     */
    public function getLogoUrl()
    {
        return $this->logoUrl;
    }

    /**
     * Sets a new logoUrl
     *
     * @param string $logoUrl
     * @return self
     */
    public function setLogoUrl($logoUrl)
    {
        $this->logoUrl = $logoUrl;
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
     * Gets as navType
     *
     * @return string
     */
    public function getNavType()
    {
        return $this->navType;
    }

    /**
     * Sets a new navType
     *
     * @param string $navType
     * @return self
     */
    public function setNavType($navType)
    {
        $this->navType = $navType;
        return $this;
    }

    /**
     * Gets as uiType
     *
     * @return string
     */
    public function getUiType()
    {
        return $this->uiType;
    }

    /**
     * Sets a new uiType
     *
     * @param string $uiType
     * @return self
     */
    public function setUiType($uiType)
    {
        $this->uiType = $uiType;
        return $this;
    }

    /**
     * Gets as utilityBar
     *
     * @return string
     */
    public function getUtilityBar()
    {
        return $this->utilityBar;
    }

    /**
     * Sets a new utilityBar
     *
     * @param string $utilityBar
     * @return self
     */
    public function setUtilityBar($utilityBar)
    {
        $this->utilityBar = $utilityBar;
        return $this;
    }


}

