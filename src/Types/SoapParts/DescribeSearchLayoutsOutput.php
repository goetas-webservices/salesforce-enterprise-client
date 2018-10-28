<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing DescribeSearchLayoutsOutput
 */
class DescribeSearchLayoutsOutput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSearchLayoutsResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSearchLayoutsResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSearchLayoutsResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSearchLayoutsResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

