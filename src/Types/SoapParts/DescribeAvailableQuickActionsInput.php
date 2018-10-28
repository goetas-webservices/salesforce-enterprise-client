<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapParts;

/**
 * Class representing DescribeAvailableQuickActionsInput
 */
class DescribeAvailableQuickActionsInput
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeAvailableQuickActions $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeAvailableQuickActions
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeAvailableQuickActions $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeAvailableQuickActions $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

