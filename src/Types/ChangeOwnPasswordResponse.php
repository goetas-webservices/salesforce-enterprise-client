<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing ChangeOwnPasswordResponse
 */
class ChangeOwnPasswordResponse
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\ChangeOwnPasswordResultType $result
     */
    private $result = null;

    /**
     * Gets as result
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\ChangeOwnPasswordResultType
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Sets a new result
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\ChangeOwnPasswordResultType $result
     * @return self
     */
    public function setResult(\GoetasWebservices\Client\SalesforceEnterprise\Types\ChangeOwnPasswordResultType $result)
    {
        $this->result = $result;
        return $this;
    }


}

