<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing PerformQuickActionsOutput
 */
class PerformQuickActionsOutput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\PerformQuickActionsResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\PerformQuickActionsResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\PerformQuickActionsResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\PerformQuickActionsResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

