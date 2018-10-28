<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing ChangeOwnPasswordInput
 */
class ChangeOwnPasswordInput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\ChangeOwnPassword $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\ChangeOwnPassword
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\ChangeOwnPassword $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\ChangeOwnPassword $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

