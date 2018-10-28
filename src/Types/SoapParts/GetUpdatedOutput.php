<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing GetUpdatedOutput
 */
class GetUpdatedOutput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\GetUpdatedResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\GetUpdatedResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\GetUpdatedResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\GetUpdatedResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

