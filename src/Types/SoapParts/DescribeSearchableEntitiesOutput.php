<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing DescribeSearchableEntitiesOutput
 */
class DescribeSearchableEntitiesOutput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSearchableEntitiesResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSearchableEntitiesResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSearchableEntitiesResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSearchableEntitiesResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

