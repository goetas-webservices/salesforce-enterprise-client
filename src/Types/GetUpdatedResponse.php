<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing GetUpdatedResponse
 */
class GetUpdatedResponse
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\GetUpdatedResultType $result
     */
    private $result = null;

    /**
     * Gets as result
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\GetUpdatedResultType
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Sets a new result
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\GetUpdatedResultType $result
     * @return self
     */
    public function setResult(\GoetasWebservices\Client\SalesforceEnterprise\Types\GetUpdatedResultType $result)
    {
        $this->result = $result;
        return $this;
    }


}

