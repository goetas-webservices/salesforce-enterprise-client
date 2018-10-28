<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribeThemeItemType
 *
 *
 * XSD Type: DescribeThemeItem
 */
class DescribeThemeItemType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeColorType[] $colors
     */
    private $colors = [
        
    ];

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeIconType[] $icons
     */
    private $icons = [
        
    ];

    /**
     * @property string $name
     */
    private $name = null;

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


}

