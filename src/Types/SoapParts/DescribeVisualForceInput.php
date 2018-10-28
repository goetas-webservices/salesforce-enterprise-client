<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing DescribeVisualForceInput
 */
class DescribeVisualForceInput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeVisualForce $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeVisualForce
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeVisualForce $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeVisualForce $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

