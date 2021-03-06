<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing EmptyRecycleBinOutput
 */
class EmptyRecycleBinOutput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\EmptyRecycleBinResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\EmptyRecycleBinResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\EmptyRecycleBinResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\EmptyRecycleBinResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

