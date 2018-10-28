<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing RenderStoredEmailTemplateResponse
 */
class RenderStoredEmailTemplateResponse
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\RenderStoredEmailTemplateResultType $result
     */
    private $result = null;

    /**
     * Gets as result
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\RenderStoredEmailTemplateResultType
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Sets a new result
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\RenderStoredEmailTemplateResultType $result
     * @return self
     */
    public function setResult(\GoetasWebservices\Client\SalesforceEnterprise\Types\RenderStoredEmailTemplateResultType $result)
    {
        $this->result = $result;
        return $this;
    }


}

