<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribeCompactLayoutsResponse
 */
class DescribeCompactLayoutsResponse
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeCompactLayoutsResultType $result
     */
    private $result = null;

    /**
     * Gets as result
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeCompactLayoutsResultType
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Sets a new result
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeCompactLayoutsResultType $result
     * @return self
     */
    public function setResult(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeCompactLayoutsResultType $result)
    {
        $this->result = $result;
        return $this;
    }


}

