<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing DeleteByExampleOutput
 */
class DeleteByExampleOutput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DeleteByExampleResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DeleteByExampleResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DeleteByExampleResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\DeleteByExampleResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

