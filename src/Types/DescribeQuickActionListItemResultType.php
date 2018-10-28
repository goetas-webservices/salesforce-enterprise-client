<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribeQuickActionListItemResultType
 *
 *
 * XSD Type: DescribeQuickActionListItemResult
 */
class DescribeQuickActionListItemResultType
{

    /**
     * @property string $accessLevelRequired
     */
    private $accessLevelRequired = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeColorType[] $colors
     */
    private $colors = [
        
    ];

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
     * @property string $quickActionName
     */
    private $quickActionName = null;

    /**
     * @property string $targetSobjectType
     */
    private $targetSobjectType = null;

    /**
     * @property string $type
     */
    private $type = null;

    /**
     * Gets as accessLevelRequired
     *
     * @return string
     */
    public function getAccessLevelRequired()
    {
        return $this->accessLevelRequired;
    }

    /**
     * Sets a new accessLevelRequired
     *
     * @param string $accessLevelRequired
     * @return self
     */
    public function setAccessLevelRequired($accessLevelRequired)
    {
        $this->accessLevelRequired = $accessLevelRequired;
        return $this;
    }

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
     * Gets as quickActionName
     *
     * @return string
     */
    public function getQuickActionName()
    {
        return $this->quickActionName;
    }

    /**
     * Sets a new quickActionName
     *
     * @param string $quickActionName
     * @return self
     */
    public function setQuickActionName($quickActionName)
    {
        $this->quickActionName = $quickActionName;
        return $this;
    }

    /**
     * Gets as targetSobjectType
     *
     * @return string
     */
    public function getTargetSobjectType()
    {
        return $this->targetSobjectType;
    }

    /**
     * Sets a new targetSobjectType
     *
     * @param string $targetSobjectType
     * @return self
     */
    public function setTargetSobjectType($targetSobjectType)
    {
        $this->targetSobjectType = $targetSobjectType;
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


}

