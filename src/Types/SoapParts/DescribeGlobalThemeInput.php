<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing DescribeGlobalThemeInput
 */
class DescribeGlobalThemeInput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeGlobalTheme $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeGlobalTheme
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeGlobalTheme $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeGlobalTheme $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

