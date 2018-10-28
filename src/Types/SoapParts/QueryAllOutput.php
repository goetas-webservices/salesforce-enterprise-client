<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing QueryAllOutput
 */
class QueryAllOutput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryAllResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryAllResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryAllResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryAllResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

