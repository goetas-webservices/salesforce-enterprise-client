<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribeSObjectResponse
 */
class DescribeSObjectResponse
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSObjectResultType $result
     */
    private $result = null;

    /**
     * Gets as result
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSObjectResultType
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Sets a new result
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSObjectResultType $result
     * @return self
     */
    public function setResult(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSObjectResultType $result)
    {
        $this->result = $result;
        return $this;
    }


}

