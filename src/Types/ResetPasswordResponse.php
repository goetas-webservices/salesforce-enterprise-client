<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing ResetPasswordResponse
 */
class ResetPasswordResponse
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\ResetPasswordResultType $result
     */
    private $result = null;

    /**
     * Gets as result
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\ResetPasswordResultType
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Sets a new result
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\ResetPasswordResultType $result
     * @return self
     */
    public function setResult(\GoetasWebservices\Client\SalesforceEnterprise\Types\ResetPasswordResultType $result)
    {
        $this->result = $result;
        return $this;
    }


}

