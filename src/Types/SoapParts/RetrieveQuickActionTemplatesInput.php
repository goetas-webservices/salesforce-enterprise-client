<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing RetrieveQuickActionTemplatesInput
 */
class RetrieveQuickActionTemplatesInput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\RetrieveQuickActionTemplates $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\RetrieveQuickActionTemplates
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\RetrieveQuickActionTemplates $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\RetrieveQuickActionTemplates $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

