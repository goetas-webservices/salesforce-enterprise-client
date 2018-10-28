<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing ChangeOwnPasswordOutput
 */
class ChangeOwnPasswordOutput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\ChangeOwnPasswordResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\ChangeOwnPasswordResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\ChangeOwnPasswordResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\ChangeOwnPasswordResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

