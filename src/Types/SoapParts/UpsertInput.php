<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing UpsertInput
 */
class UpsertInput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\Upsert $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\Upsert
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\Upsert $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\Upsert $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

