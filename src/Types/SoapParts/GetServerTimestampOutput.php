<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing GetServerTimestampOutput
 */
class GetServerTimestampOutput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\GetServerTimestampResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\GetServerTimestampResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\GetServerTimestampResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\GetServerTimestampResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

