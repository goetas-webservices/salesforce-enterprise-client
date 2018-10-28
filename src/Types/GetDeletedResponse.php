<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing GetDeletedResponse
 */
class GetDeletedResponse
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\GetDeletedResultType $result
     */
    private $result = null;

    /**
     * Gets as result
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\GetDeletedResultType
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Sets a new result
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\GetDeletedResultType $result
     * @return self
     */
    public function setResult(\GoetasWebservices\Client\SalesforceEnterprise\Types\GetDeletedResultType $result)
    {
        $this->result = $result;
        return $this;
    }


}

