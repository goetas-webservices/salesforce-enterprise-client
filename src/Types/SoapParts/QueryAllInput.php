<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing QueryAllInput
 */
class QueryAllInput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryAll $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryAll
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryAll $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryAll $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

