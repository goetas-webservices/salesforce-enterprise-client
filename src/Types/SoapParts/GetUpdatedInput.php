<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing GetUpdatedInput
 */
class GetUpdatedInput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\GetUpdated $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\GetUpdated
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\GetUpdated $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\GetUpdated $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

