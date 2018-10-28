<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribeLayoutRowType
 *
 *
 * XSD Type: DescribeLayoutRow
 */
class DescribeLayoutRowType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutItemType[] $layoutItems
     */
    private $layoutItems = [
        
    ];

    /**
     * @property int $numItems
     */
    private $numItems = null;

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
     * Gets as numItems
     *
     * @return int
     */
    public function getNumItems()
    {
        return $this->numItems;
    }

    /**
     * Sets a new numItems
     *
     * @param int $numItems
     * @return self
     */
    public function setNumItems($numItems)
    {
        $this->numItems = $numItems;
        return $this;
    }


}

