<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing RenderEmailTemplateInput
 */
class RenderEmailTemplateInput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\RenderEmailTemplate $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\RenderEmailTemplate
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\RenderEmailTemplate $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\RenderEmailTemplate $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

