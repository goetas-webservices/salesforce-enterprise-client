<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing DescribeDataCategoryMappingsInput
 */
class DescribeDataCategoryMappingsInput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeDataCategoryMappings $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeDataCategoryMappings
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeDataCategoryMappings $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeDataCategoryMappings $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

