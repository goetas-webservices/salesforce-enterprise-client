<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing EmptyRecycleBinInput
 */
class EmptyRecycleBinInput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\EmptyRecycleBin $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\EmptyRecycleBin
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\EmptyRecycleBin $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\EmptyRecycleBin $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

