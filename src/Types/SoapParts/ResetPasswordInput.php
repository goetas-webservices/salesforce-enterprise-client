<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing ResetPasswordInput
 */
class ResetPasswordInput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\ResetPassword $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\ResetPassword
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\ResetPassword $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\ResetPassword $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

