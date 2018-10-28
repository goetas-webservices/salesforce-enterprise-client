<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing LogoutOutput
 */
class LogoutOutput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\LogoutResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\LogoutResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\LogoutResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\LogoutResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

