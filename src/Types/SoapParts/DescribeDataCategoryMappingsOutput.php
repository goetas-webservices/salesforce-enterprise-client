<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing DescribeDataCategoryMappingsOutput
 */
class DescribeDataCategoryMappingsOutput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeDataCategoryMappingsResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeDataCategoryMappingsResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeDataCategoryMappingsResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeDataCategoryMappingsResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

