<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribeTabSetResultType
 *
 *
 * XSD Type: DescribeTabSetResult
 */
class DescribeTabSetResultType
{

    /**
     * @property string $description
     */
    private $description = null;

    /**
     * @property string $label
     */
    private $label = null;

    /**
     * @property string $logoUrl
     */
    private $logoUrl = null;

    /**
     * @property string $namespace
     */
    private $namespace = null;

    /**
     * @property bool $selected
     */
    private $selected = null;

    /**
     * @property string $tabSetId
     */
    private $tabSetId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeTabType[] $tabs
     */
    private $tabs = [
        
    ];

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
     * Gets as namespace
     *
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * Sets a new namespace
     *
     * @param string $namespace
     * @return self
     */
    public function setNamespace($namespace)
    {
        $this->namespace = $namespace;
        return $this;
    }

    /**
     * Gets as selected
     *
     * @return bool
     */
    public function getSelected()
    {
        return $this->selected;
    }

    /**
     * Sets a new selected
     *
     * @param bool $selected
     * @return self
     */
    public function setSelected($selected)
    {
        $this->selected = $selected;
        return $this;
    }

    /**
     * Gets as tabSetId
     *
     * @return string
     */
    public function getTabSetId()
    {
        return $this->tabSetId;
    }

    /**
     * Sets a new tabSetId
     *
     * @param string $tabSetId
     * @return self
     */
    public function setTabSetId($tabSetId)
    {
        $this->tabSetId = $tabSetId;
        return $this;
    }

    /**
     * Adds as tabs
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeTabType $tabs
     */
    public function addToTabs(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeTabType $tabs)
    {
        $this->tabs[] = $tabs;
        return $this;
    }

    /**
     * isset tabs
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTabs($index)
    {
        return isset($this->tabs[$index]);
    }

    /**
     * unset tabs
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTabs($index)
    {
        unset($this->tabs[$index]);
    }

    /**
     * Gets as tabs
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeTabType[]
     */
    public function getTabs()
    {
        return $this->tabs;
    }

    /**
     * Sets a new tabs
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeTabType[] $tabs
     * @return self
     */
    public function setTabs(array $tabs)
    {
        $this->tabs = $tabs;
        return $this;
    }


}

