<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribeApprovalLayoutType
 *
 *
 * XSD Type: DescribeApprovalLayout
 */
class DescribeApprovalLayoutType
{

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * @property string $label
     */
    private $label = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutItemType[] $layoutItems
     */
    private $layoutItems = [
        
    ];

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
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
     * Adds as layoutItems
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutItemType $layoutItems
     */
    public function addToLayoutItems(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutItemType $layoutItems)
    {
        $this->layoutItems[] = $layoutItems;
        return $this;
    }

    /**
     * isset layoutItems
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLayoutItems($index)
    {
        return isset($this->layoutItems[$index]);
    }

    /**
     * unset layoutItems
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLayoutItems($index)
    {
        unset($this->layoutItems[$index]);
    }

    /**
     * Gets as layoutItems
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutItemType[]
     */
    public function getLayoutItems()
    {
        return $this->layoutItems;
    }

    /**
     * Sets a new layoutItems
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutItemType[] $layoutItems
     * @return self
     */
    public function setLayoutItems(array $layoutItems)
    {
        $this->layoutItems = $layoutItems;
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

