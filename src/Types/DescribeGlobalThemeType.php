<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribeGlobalThemeType
 *
 *
 * XSD Type: DescribeGlobalTheme
 */
class DescribeGlobalThemeType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeGlobalResultType $global
     */
    private $global = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeThemeItemType[] $theme
     */
    private $theme = null;

    /**
     * Gets as global
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeGlobalResultType
     */
    public function getGlobal()
    {
        return $this->global;
    }

    /**
     * Sets a new global
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeGlobalResultType $global
     * @return self
     */
    public function setGlobal(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeGlobalResultType $global)
    {
        $this->global = $global;
        return $this;
    }

    /**
     * Adds as themeItems
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeThemeItemType $themeItems
     */
    public function addToTheme(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeThemeItemType $themeItems)
    {
        $this->theme[] = $themeItems;
        return $this;
    }

    /**
     * isset theme
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTheme($index)
    {
        return isset($this->theme[$index]);
    }

    /**
     * unset theme
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTheme($index)
    {
        unset($this->theme[$index]);
    }

    /**
     * Gets as theme
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeThemeItemType[]
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * Sets a new theme
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeThemeItemType[] $theme
     * @return self
     */
    public function setTheme(array $theme)
    {
        $this->theme = $theme;
        return $this;
    }


}

