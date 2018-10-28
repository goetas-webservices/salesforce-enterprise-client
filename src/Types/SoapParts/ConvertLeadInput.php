<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing ConvertLeadInput
 */
class ConvertLeadInput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\ConvertLead $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\ConvertLead
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\ConvertLead $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\ConvertLead $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

