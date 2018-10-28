<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing ResetPasswordOutput
 */
class ResetPasswordOutput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\ResetPasswordResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\ResetPasswordResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\ResetPasswordResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\ResetPasswordResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

