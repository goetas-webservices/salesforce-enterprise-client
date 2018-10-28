<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing DescribeQuickActionsForRecordTypeInput
 */
class DescribeQuickActionsForRecordTypeInput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeQuickActionsForRecordType $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeQuickActionsForRecordType
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeQuickActionsForRecordType $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeQuickActionsForRecordType $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

