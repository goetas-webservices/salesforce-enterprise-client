<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing DescribeApprovalLayoutInput
 */
class DescribeApprovalLayoutInput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeApprovalLayout $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeApprovalLayout
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeApprovalLayout $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeApprovalLayout $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

