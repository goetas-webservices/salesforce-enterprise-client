<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing FindDuplicatesByIdsInput
 */
class FindDuplicatesByIdsInput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\FindDuplicatesByIds $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\FindDuplicatesByIds
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\FindDuplicatesByIds $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\FindDuplicatesByIds $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

