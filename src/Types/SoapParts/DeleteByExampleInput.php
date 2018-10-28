<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing DeleteByExampleInput
 */
class DeleteByExampleInput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DeleteByExample $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DeleteByExample
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DeleteByExample $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\DeleteByExample $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

