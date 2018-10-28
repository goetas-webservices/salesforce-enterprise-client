<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing RetrieveMassQuickActionTemplatesInput
 */
class RetrieveMassQuickActionTemplatesInput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\RetrieveMassQuickActionTemplates $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\RetrieveMassQuickActionTemplates
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\RetrieveMassQuickActionTemplates $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\RetrieveMassQuickActionTemplates $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

