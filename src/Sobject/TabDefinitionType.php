<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing TabDefinitionType
 *
 *
 * XSD Type: TabDefinition
 */
class TabDefinitionType extends SObjectType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $appTabs
     */
    private $appTabs = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $colors
     */
    private $colors = null;

    /**
     * @property string $durableId
     */
    private $durableId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $icons
     */
    private $icons = null;

    /**
     * @property bool $isAvailableInAloha
     */
    private $isAvailableInAloha = null;

    /**
     * @property bool $isAvailableInLightning
     */
    private $isAvailableInLightning = null;

    /**
     * @property bool $isCustom
     */
    private $isCustom = null;

    /**
     * @property string $label
     */
    private $label = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $sobjectName
     */
    private $sobjectName = null;

    /**
     * @property string $url
     */
    private $url = null;

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
     * Gets as colors
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getColors()
    {
        return $this->colors;
    }

    /**
     * Sets a new colors
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $colors
     * @return self
     */
    public function setColors(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $colors)
    {
        $this->colors = $colors;
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
     * Gets as icons
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getIcons()
    {
        return $this->icons;
    }

    /**
     * Sets a new icons
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $icons
     * @return self
     */
    public function setIcons(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $icons)
    {
        $this->icons = $icons;
        return $this;
    }

    /**
     * Gets as isAvailableInAloha
     *
     * @return bool
     */
    public function getIsAvailableInAloha()
    {
        return $this->isAvailableInAloha;
    }

    /**
     * Sets a new isAvailableInAloha
     *
     * @param bool $isAvailableInAloha
     * @return self
     */
    public function setIsAvailableInAloha($isAvailableInAloha)
    {
        $this->isAvailableInAloha = $isAvailableInAloha;
        return $this;
    }

    /**
     * Gets as isAvailableInLightning
     *
     * @return bool
     */
    public function getIsAvailableInLightning()
    {
        return $this->isAvailableInLightning;
    }

    /**
     * Sets a new isAvailableInLightning
     *
     * @param bool $isAvailableInLightning
     * @return self
     */
    public function setIsAvailableInLightning($isAvailableInLightning)
    {
        $this->isAvailableInLightning = $isAvailableInLightning;
        return $this;
    }

    /**
     * Gets as isCustom
     *
     * @return bool
     */
    public function getIsCustom()
    {
        return $this->isCustom;
    }

    /**
     * Sets a new isCustom
     *
     * @param bool $isCustom
     * @return self
     */
    public function setIsCustom($isCustom)
    {
        $this->isCustom = $isCustom;
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
     * Gets as sobjectName
     *
     * @return string
     */
    public function getSobjectName()
    {
        return $this->sobjectName;
    }

    /**
     * Sets a new sobjectName
     *
     * @param string $sobjectName
     * @return self
     */
    public function setSobjectName($sobjectName)
    {
        $this->sobjectName = $sobjectName;
        return $this;
    }

    /**
     * Gets as url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Sets a new url
     *
     * @param string $url
     * @return self
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }


}

