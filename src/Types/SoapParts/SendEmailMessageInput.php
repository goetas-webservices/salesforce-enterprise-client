<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing SendEmailMessageInput
 */
class SendEmailMessageInput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\SendEmailMessage $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\SendEmailMessage
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\SendEmailMessage $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\SendEmailMessage $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

