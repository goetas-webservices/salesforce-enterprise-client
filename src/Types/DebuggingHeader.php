<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DebuggingHeader
 */
class DebuggingHeader
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\LogInfoType[] $categories
     */
    private $categories = [
        
    ];

    /**
     * @property string $debugLevel
     */
    private $debugLevel = null;

    /**
     * Adds as categories
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\LogInfoType $categories
     */
    public function addToCategories(\GoetasWebservices\Client\SalesforceEnterprise\Types\LogInfoType $categories)
    {
        $this->categories[] = $categories;
        return $this;
    }

    /**
     * isset categories
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCategories($index)
    {
        return isset($this->categories[$index]);
    }

    /**
     * unset categories
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCategories($index)
    {
        unset($this->categories[$index]);
    }

    /**
     * Gets as categories
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\LogInfoType[]
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Sets a new categories
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\LogInfoType[] $categories
     * @return self
     */
    public function setCategories(array $categories)
    {
        $this->categories = $categories;
        return $this;
    }

    /**
     * Gets as debugLevel
     *
     * @return string
     */
    public function getDebugLevel()
    {
        return $this->debugLevel;
    }

    /**
     * Sets a new debugLevel
     *
     * @param string $debugLevel
     * @return self
     */
    public function setDebugLevel($debugLevel)
    {
        $this->debugLevel = $debugLevel;
        return $this;
    }


}

