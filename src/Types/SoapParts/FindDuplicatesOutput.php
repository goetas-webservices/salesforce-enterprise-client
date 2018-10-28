<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing FindDuplicatesOutput
 */
class FindDuplicatesOutput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\FindDuplicatesResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\FindDuplicatesResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\FindDuplicatesResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\FindDuplicatesResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

