<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing DescribePrimaryCompactLayoutsInput
 */
class DescribePrimaryCompactLayoutsInput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribePrimaryCompactLayouts $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribePrimaryCompactLayouts
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribePrimaryCompactLayouts $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribePrimaryCompactLayouts $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

