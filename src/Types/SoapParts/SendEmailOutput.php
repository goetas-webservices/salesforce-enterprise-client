<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing SendEmailOutput
 */
class SendEmailOutput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\SendEmailResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\SendEmailResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\SendEmailResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\SendEmailResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

