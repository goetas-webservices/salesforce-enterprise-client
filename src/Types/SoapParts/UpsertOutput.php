<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing UpsertOutput
 */
class UpsertOutput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\UpsertResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\UpsertResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\UpsertResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\UpsertResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

