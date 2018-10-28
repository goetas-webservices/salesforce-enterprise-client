<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing RetrieveInput
 */
class RetrieveInput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\Retrieve $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\Retrieve
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\Retrieve $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\Retrieve $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

