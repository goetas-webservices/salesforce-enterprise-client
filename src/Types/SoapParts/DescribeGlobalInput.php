<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing DescribeGlobalInput
 */
class DescribeGlobalInput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeGlobal $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeGlobal
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeGlobal $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeGlobal $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

