<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing InvalidateSessionsInput
 */
class InvalidateSessionsInput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\InvalidateSessions $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\InvalidateSessions
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\InvalidateSessions $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\InvalidateSessions $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

