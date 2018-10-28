<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing QueryMoreInput
 */
class QueryMoreInput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryMore $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryMore
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryMore $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryMore $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

