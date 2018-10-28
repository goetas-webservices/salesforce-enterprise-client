<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing UndeleteOutput
 */
class UndeleteOutput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\UndeleteResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\UndeleteResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\UndeleteResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\UndeleteResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

