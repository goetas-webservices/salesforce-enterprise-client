<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribeVisualForceResponse
 */
class DescribeVisualForceResponse
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeVisualForceResultType $result
     */
    private $result = null;

    /**
     * Gets as result
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeVisualForceResultType
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Sets a new result
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeVisualForceResultType $result
     * @return self
     */
    public function setResult(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeVisualForceResultType $result)
    {
        $this->result = $result;
        return $this;
    }


}

