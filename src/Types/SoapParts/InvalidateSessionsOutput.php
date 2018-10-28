<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing InvalidateSessionsOutput
 */
class InvalidateSessionsOutput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\InvalidateSessionsResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\InvalidateSessionsResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\InvalidateSessionsResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\InvalidateSessionsResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

