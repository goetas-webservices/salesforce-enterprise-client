<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing SetPasswordOutput
 */
class SetPasswordOutput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\SetPasswordResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\SetPasswordResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\SetPasswordResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\SetPasswordResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

