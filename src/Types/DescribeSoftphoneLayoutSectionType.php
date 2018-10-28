<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribeSoftphoneLayoutSectionType
 *
 *
 * XSD Type: DescribeSoftphoneLayoutSection
 */
class DescribeSoftphoneLayoutSectionType
{

    /**
     * @property string $entityApiName
     */
    private $entityApiName = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSoftphoneLayoutItemType[] $items
     */
    private $items = [
        
    ];

    /**
     * Gets as entityApiName
     *
     * @return string
     */
    public function getEntityApiName()
    {
        return $this->entityApiName;
    }

    /**
     * Sets a new entityApiName
     *
     * @param string $entityApiName
     * @return self
     */
    public function setEntityApiName($entityApiName)
    {
        $this->entityApiName = $entityApiName;
        return $this;
    }

    /**
     * Adds as items
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSoftphoneLayoutItemType $items
     */
    public function addToItems(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSoftphoneLayoutItemType $items)
    {
        $this->items[] = $items;
        return $this;
    }

    /**
     * isset items
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItems($index)
    {
        return isset($this->items[$index]);
    }

    /**
     * unset items
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItems($index)
    {
        unset($this->items[$index]);
    }

    /**
     * Gets as items
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSoftphoneLayoutItemType[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Sets a new items
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSoftphoneLayoutItemType[] $items
     * @return self
     */
    public function setItems(array $items)
    {
        $this->items = $items;
        return $this;
    }


}

