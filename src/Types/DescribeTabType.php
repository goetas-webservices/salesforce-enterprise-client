<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribeTabType
 *
 *
 * XSD Type: DescribeTab
 */
class DescribeTabType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeColorType[] $colors
     */
    private $colors = [
        
    ];

    /**
     * @property bool $custom
     */
    private $custom = null;

    /**
     * @property string $iconUrl
     */
    private $iconUrl = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeIconType[] $icons
     */
    private $icons = [
        
    ];

    /**
     * @property string $label
     */
    private $label = null;

    /**
     * @property string $miniIconUrl
     */
    private $miniIconUrl = null;

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
     * Adds as colors
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeColorType $colors
     */
    public function addToColors(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeColorType $colors)
    {
        $this->colors[] = $colors;
        return $this;
    }

    /**
     * isset colors
     *
     * @param int|string $index
     * @return bool
     */
    public function issetColors($index)
    {
        return isset($this->colors[$index]);
    }

    /**
     * unset colors
     *
     * @param int|string $index
     * @return void
     */
    public function unsetColors($index)
    {
        unset($this->colors[$index]);
    }

    /**
     * Gets as colors
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeColorType[]
     */
    public function getColors()
    {
        return $this->colors;
    }

    /**
     * Sets a new colors
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeColorType[] $colors
     * @return self
     */
    public function setColors(array $colors)
    {
        $this->colors = $colors;
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
     * Gets as iconUrl
     *
     * @return string
     */
    public function getIconUrl()
    {
        return $this->iconUrl;
    }

    /**
     * Sets a new iconUrl
     *
     * @param string $iconUrl
     * @return self
     */
    public function setIconUrl($iconUrl)
    {
        $this->iconUrl = $iconUrl;
        return $this;
    }

    /**
     * Adds as icons
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeIconType $icons
     */
    public function addToIcons(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeIconType $icons)
    {
        $this->icons[] = $icons;
        return $this;
    }

    /**
     * isset icons
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIcons($index)
    {
        return isset($this->icons[$index]);
    }

    /**
     * unset icons
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIcons($index)
    {
        unset($this->icons[$index]);
    }

    /**
     * Gets as icons
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeIconType[]
     */
    public function getIcons()
    {
        return $this->icons;
    }

    /**
     * Sets a new icons
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeIconType[] $icons
     * @return self
     */
    public function setIcons(array $icons)
    {
        $this->icons = $icons;
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
     * Gets as miniIconUrl
     *
     * @return string
     */
    public function getMiniIconUrl()
    {
        return $this->miniIconUrl;
    }

    /**
     * Sets a new miniIconUrl
     *
     * @param string $miniIconUrl
     * @return self
     */
    public function setMiniIconUrl($miniIconUrl)
    {
        $this->miniIconUrl = $miniIconUrl;
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

