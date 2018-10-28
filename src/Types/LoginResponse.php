<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing LoginResponse
 */
class LoginResponse
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\LoginResultType $result
     */
    private $result = null;

    /**
     * Gets as result
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\LoginResultType
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Sets a new result
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\LoginResultType $result
     * @return self
     */
    public function setResult(\GoetasWebservices\Client\SalesforceEnterprise\Types\LoginResultType $result)
    {
        $this->result = $result;
        return $this;
    }


}

