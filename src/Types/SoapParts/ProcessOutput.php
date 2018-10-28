<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing ProcessOutput
 */
class ProcessOutput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\ProcessResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\ProcessResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\ProcessResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\ProcessResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

