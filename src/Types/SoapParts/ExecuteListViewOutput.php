<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing ExecuteListViewOutput
 */
class ExecuteListViewOutput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\ExecuteListViewResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\ExecuteListViewResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\ExecuteListViewResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\ExecuteListViewResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

