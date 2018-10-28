<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing GetDeletedOutput
 */
class GetDeletedOutput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\GetDeletedResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\GetDeletedResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\GetDeletedResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\GetDeletedResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

