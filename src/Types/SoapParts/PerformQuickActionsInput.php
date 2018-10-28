<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing PerformQuickActionsInput
 */
class PerformQuickActionsInput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\PerformQuickActions $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\PerformQuickActions
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\PerformQuickActions $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\PerformQuickActions $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

