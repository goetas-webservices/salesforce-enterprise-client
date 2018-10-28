<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing SetPasswordResponse
 */
class SetPasswordResponse
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\SetPasswordResultType $result
     */
    private $result = null;

    /**
     * Gets as result
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\SetPasswordResultType
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Sets a new result
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\SetPasswordResultType $result
     * @return self
     */
    public function setResult(\GoetasWebservices\Client\SalesforceEnterprise\Types\SetPasswordResultType $result)
    {
        $this->result = $result;
        return $this;
    }


}

