<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribeRelatedContentItemType
 *
 *
 * XSD Type: DescribeRelatedContentItem
 */
class DescribeRelatedContentItemType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutItemType $describeLayoutItem
     */
    private $describeLayoutItem = null;

    /**
     * Gets as describeLayoutItem
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutItemType
     */
    public function getDescribeLayoutItem()
    {
        return $this->describeLayoutItem;
    }

    /**
     * Sets a new describeLayoutItem
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutItemType $describeLayoutItem
     * @return self
     */
    public function setDescribeLayoutItem(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutItemType $describeLayoutItem)
    {
        $this->describeLayoutItem = $describeLayoutItem;
        return $this;
    }


}

