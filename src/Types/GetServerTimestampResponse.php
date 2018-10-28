<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing GetServerTimestampResponse
 */
class GetServerTimestampResponse
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\GetServerTimestampResultType $result
     */
    private $result = null;

    /**
     * Gets as result
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\GetServerTimestampResultType
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Sets a new result
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\GetServerTimestampResultType $result
     * @return self
     */
    public function setResult(\GoetasWebservices\Client\SalesforceEnterprise\Types\GetServerTimestampResultType $result)
    {
        $this->result = $result;
        return $this;
    }


}

