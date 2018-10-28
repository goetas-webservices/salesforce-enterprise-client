<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing ExecuteListView
 */
class ExecuteListView
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\ExecuteListViewRequestType $request
     */
    private $request = null;

    /**
     * Gets as request
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\ExecuteListViewRequestType
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets a new request
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\ExecuteListViewRequestType $request
     * @return self
     */
    public function setRequest(\GoetasWebservices\Client\SalesforceEnterprise\Types\ExecuteListViewRequestType $request)
    {
        $this->request = $request;
        return $this;
    }


}

