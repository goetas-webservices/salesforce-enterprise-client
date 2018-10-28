<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapEnvelope\Messages;

/**
 * Class representing DescribeSearchScopeOrderInput
 */
class DescribeSearchScopeOrderInput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts\DescribeSearchScopeOrderInput $body
     */
    private $body = null;

    /**
     * @property \GoetasWebservices\SoapServices\SoapClient\Arguments\Headers\Handler\HeaderPlaceholder $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts\DescribeSearchScopeOrderInput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts\DescribeSearchScopeOrderInput $body
     * @return self
     */
    public function setBody(\GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts\DescribeSearchScopeOrderInput $body)
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

