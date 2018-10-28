<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing QueryMoreOutput
 */
class QueryMoreOutput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryMoreResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryMoreResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryMoreResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryMoreResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

