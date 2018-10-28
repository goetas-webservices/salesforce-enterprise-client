<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing SetPasswordInput
 */
class SetPasswordInput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\SetPassword $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\SetPassword
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\SetPassword $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\SetPassword $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

