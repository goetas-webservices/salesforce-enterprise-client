<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing GetServerTimestampInput
 */
class GetServerTimestampInput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\GetServerTimestamp $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\GetServerTimestamp
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\GetServerTimestamp $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\GetServerTimestamp $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

