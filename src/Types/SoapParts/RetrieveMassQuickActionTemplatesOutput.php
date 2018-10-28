<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing RetrieveMassQuickActionTemplatesOutput
 */
class RetrieveMassQuickActionTemplatesOutput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\RetrieveMassQuickActionTemplatesResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\RetrieveMassQuickActionTemplatesResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\RetrieveMassQuickActionTemplatesResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\RetrieveMassQuickActionTemplatesResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

