<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing DescribeSearchLayoutsInput
 */
class DescribeSearchLayoutsInput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSearchLayouts $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSearchLayouts
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSearchLayouts $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSearchLayouts $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

