<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribeSoqlListViews
 */
class DescribeSoqlListViews
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSoqlListViewParamsType[] $request
     */
    private $request = null;

    /**
     * Adds as listViewParams
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSoqlListViewParamsType $listViewParams
     */
    public function addToRequest(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSoqlListViewParamsType $listViewParams)
    {
        $this->request[] = $listViewParams;
        return $this;
    }

    /**
     * isset request
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequest($index)
    {
        return isset($this->request[$index]);
    }

    /**
     * unset request
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequest($index)
    {
        unset($this->request[$index]);
    }

    /**
     * Gets as request
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSoqlListViewParamsType[]
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets a new request
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSoqlListViewParamsType[] $request
     * @return self
     */
    public function setRequest(array $request)
    {
        $this->request = $request;
        return $this;
    }


}

