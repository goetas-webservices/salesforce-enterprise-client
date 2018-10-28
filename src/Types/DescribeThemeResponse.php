<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribeThemeResponse
 */
class DescribeThemeResponse
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeThemeItemType[] $result
     */
    private $result = null;

    /**
     * Adds as themeItems
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeThemeItemType $themeItems
     */
    public function addToResult(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeThemeItemType $themeItems)
    {
        $this->result[] = $themeItems;
        return $this;
    }

    /**
     * isset result
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResult($index)
    {
        return isset($this->result[$index]);
    }

    /**
     * unset result
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResult($index)
    {
        unset($this->result[$index]);
    }

    /**
     * Gets as result
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeThemeItemType[]
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Sets a new result
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeThemeItemType[] $result
     * @return self
     */
    public function setResult(array $result)
    {
        $this->result = $result;
        return $this;
    }


}

