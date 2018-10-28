<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing SendEmailInput
 */
class SendEmailInput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\SendEmail $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\SendEmail
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\SendEmail $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\SendEmail $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

