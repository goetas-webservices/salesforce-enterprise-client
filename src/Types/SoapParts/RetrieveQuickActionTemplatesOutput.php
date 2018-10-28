<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing RetrieveQuickActionTemplatesOutput
 */
class RetrieveQuickActionTemplatesOutput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\RetrieveQuickActionTemplatesResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\RetrieveQuickActionTemplatesResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\RetrieveQuickActionTemplatesResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\RetrieveQuickActionTemplatesResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

