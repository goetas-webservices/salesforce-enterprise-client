<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing DescribeCompactLayoutsOutput
 */
class DescribeCompactLayoutsOutput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeCompactLayoutsResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeCompactLayoutsResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeCompactLayoutsResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeCompactLayoutsResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

