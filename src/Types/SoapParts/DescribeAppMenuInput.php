<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing DescribeAppMenuInput
 */
class DescribeAppMenuInput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeAppMenu $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeAppMenu
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeAppMenu $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeAppMenu $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

