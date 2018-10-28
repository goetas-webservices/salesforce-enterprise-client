<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing FindDuplicatesInput
 */
class FindDuplicatesInput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\FindDuplicates $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\FindDuplicates
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\FindDuplicates $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\FindDuplicates $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

