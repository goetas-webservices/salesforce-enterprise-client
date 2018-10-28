<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing RenderStoredEmailTemplate
 */
class RenderStoredEmailTemplate
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\RenderStoredEmailTemplateRequestType $request
     */
    private $request = null;

    /**
     * Gets as request
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\RenderStoredEmailTemplateRequestType
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets a new request
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\RenderStoredEmailTemplateRequestType $request
     * @return self
     */
    public function setRequest(\GoetasWebservices\Client\SalesforceEnterprise\Types\RenderStoredEmailTemplateRequestType $request)
    {
        $this->request = $request;
        return $this;
    }


}

