<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapEnvelope\Messages;

/**
 * Class representing ExecuteListViewOutput
 */
class ExecuteListViewOutput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts\ExecuteListViewOutput $body
     */
    private $body = null;

    /**
     * @property \GoetasWebservices\SoapServices\SoapClient\Arguments\Headers\Handler\HeaderPlaceholder $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts\ExecuteListViewOutput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts\ExecuteListViewOutput $body
     * @return self
     */
    public function setBody(\GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts\ExecuteListViewOutput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \GoetasWebservices\SoapServices\SoapClient\Arguments\Headers\Handler\HeaderPlaceholder
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \GoetasWebservices\SoapServices\SoapClient\Arguments\Headers\Handler\HeaderPlaceholder $header
     * @return self
     */
    public function setHeader(\GoetasWebservices\SoapServices\SoapClient\Arguments\Headers\Handler\HeaderPlaceholder $header)
    {
        $this->header = $header;
        return $this;
    }


}

