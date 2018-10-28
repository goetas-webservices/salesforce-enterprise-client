<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing FindDuplicatesByIdsOutput
 */
class FindDuplicatesByIdsOutput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\FindDuplicatesByIdsResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\FindDuplicatesByIdsResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\FindDuplicatesByIdsResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\FindDuplicatesByIdsResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

