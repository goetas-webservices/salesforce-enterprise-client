<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing GetUserInfoInput
 */
class GetUserInfoInput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\GetUserInfo $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\GetUserInfo
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\GetUserInfo $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\GetUserInfo $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

