<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing DescribeDataCategoryGroupStructuresInput
 */
class DescribeDataCategoryGroupStructuresInput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeDataCategoryGroupStructures $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeDataCategoryGroupStructures
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeDataCategoryGroupStructures $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeDataCategoryGroupStructures $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

