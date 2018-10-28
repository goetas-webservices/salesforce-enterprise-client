<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing DescribeSObjectListViewsOutput
 */
class DescribeSObjectListViewsOutput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSObjectListViewsResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSObjectListViewsResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSObjectListViewsResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSObjectListViewsResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

