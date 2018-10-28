<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing RenderStoredEmailTemplateInput
 */
class RenderStoredEmailTemplateInput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\RenderStoredEmailTemplate $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\RenderStoredEmailTemplate
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\RenderStoredEmailTemplate $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\RenderStoredEmailTemplate $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

