<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing ExecuteListViewInput
 */
class ExecuteListViewInput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\ExecuteListView $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\ExecuteListView
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\ExecuteListView $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\ExecuteListView $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

