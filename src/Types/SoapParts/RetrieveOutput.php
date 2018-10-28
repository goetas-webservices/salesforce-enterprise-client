<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing RetrieveOutput
 */
class RetrieveOutput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\RetrieveResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\RetrieveResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\RetrieveResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\RetrieveResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

