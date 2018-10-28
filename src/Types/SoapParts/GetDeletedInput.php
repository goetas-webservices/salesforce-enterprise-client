<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing GetDeletedInput
 */
class GetDeletedInput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\GetDeleted $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\GetDeleted
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\GetDeleted $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\GetDeleted $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

