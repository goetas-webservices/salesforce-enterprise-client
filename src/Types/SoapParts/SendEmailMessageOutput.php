<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing SendEmailMessageOutput
 */
class SendEmailMessageOutput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\SendEmailMessageResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\SendEmailMessageResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\SendEmailMessageResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\SendEmailMessageResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

