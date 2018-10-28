<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing GetUserInfoResponse
 */
class GetUserInfoResponse
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\GetUserInfoResultType $result
     */
    private $result = null;

    /**
     * Gets as result
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\GetUserInfoResultType
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Sets a new result
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\GetUserInfoResultType $result
     * @return self
     */
    public function setResult(\GoetasWebservices\Client\SalesforceEnterprise\Types\GetUserInfoResultType $result)
    {
        $this->result = $result;
        return $this;
    }


}

