<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing ConvertLeadOutput
 */
class ConvertLeadOutput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\ConvertLeadResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\ConvertLeadResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\ConvertLeadResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\ConvertLeadResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

