<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribeSoftphoneLayoutItemType
 *
 *
 * XSD Type: DescribeSoftphoneLayoutItem
 */
class DescribeSoftphoneLayoutItemType
{

    /**
     * @property string $itemApiName
     */
    private $itemApiName = null;

    /**
     * Gets as itemApiName
     *
     * @return string
     */
    public function getItemApiName()
    {
        return $this->itemApiName;
    }

    /**
     * Sets a new itemApiName
     *
     * @param string $itemApiName
     * @return self
     */
    public function setItemApiName($itemApiName)
    {
        $this->itemApiName = $itemApiName;
        return $this;
    }


}

