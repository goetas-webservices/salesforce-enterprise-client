<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing DescribeSearchScopeOrderInput
 */
class DescribeSearchScopeOrderInput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSearchScopeOrder $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSearchScopeOrder
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSearchScopeOrder $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSearchScopeOrder $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

