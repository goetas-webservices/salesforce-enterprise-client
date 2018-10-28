<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing GetUserInfoOutput
 */
class GetUserInfoOutput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\GetUserInfoResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\GetUserInfoResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\GetUserInfoResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\GetUserInfoResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

