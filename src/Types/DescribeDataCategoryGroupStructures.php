<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribeDataCategoryGroupStructures
 */
class DescribeDataCategoryGroupStructures
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DataCategoryGroupSobjectTypePairType[] $pairs
     */
    private $pairs = [
        
    ];

    /**
     * @property bool $topCategoriesOnly
     */
    private $topCategoriesOnly = null;

    /**
     * Adds as pairs
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DataCategoryGroupSobjectTypePairType $pairs
     */
    public function addToPairs(\GoetasWebservices\Client\SalesforceEnterprise\Types\DataCategoryGroupSobjectTypePairType $pairs)
    {
        $this->pairs[] = $pairs;
        return $this;
    }

    /**
     * isset pairs
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPairs($index)
    {
        return isset($this->pairs[$index]);
    }

    /**
     * unset pairs
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPairs($index)
    {
        unset($this->pairs[$index]);
    }

    /**
     * Gets as pairs
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DataCategoryGroupSobjectTypePairType[]
     */
    public function getPairs()
    {
        return $this->pairs;
    }

    /**
     * Sets a new pairs
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DataCategoryGroupSobjectTypePairType[] $pairs
     * @return self
     */
    public function setPairs(array $pairs)
    {
        $this->pairs = $pairs;
        return $this;
    }

    /**
     * Gets as topCategoriesOnly
     *
     * @return bool
     */
    public function getTopCategoriesOnly()
    {
        return $this->topCategoriesOnly;
    }

    /**
     * Sets a new topCategoriesOnly
     *
     * @param bool $topCategoriesOnly
     * @return self
     */
    public function setTopCategoriesOnly($topCategoriesOnly)
    {
        $this->topCategoriesOnly = $topCategoriesOnly;
        return $this;
    }


}

