<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing UpdateOutput
 */
class UpdateOutput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\UpdateResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\UpdateResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\UpdateResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\UpdateResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

