<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing RenderEmailTemplateOutput
 */
class RenderEmailTemplateOutput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\RenderEmailTemplateResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\RenderEmailTemplateResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\RenderEmailTemplateResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\RenderEmailTemplateResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

