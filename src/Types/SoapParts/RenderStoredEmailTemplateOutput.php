<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing RenderStoredEmailTemplateOutput
 */
class RenderStoredEmailTemplateOutput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\RenderStoredEmailTemplateResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\RenderStoredEmailTemplateResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\RenderStoredEmailTemplateResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\RenderStoredEmailTemplateResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

