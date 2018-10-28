<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing ExecuteListViewResponse
 */
class ExecuteListViewResponse
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\ExecuteListViewResultType $result
     */
    private $result = null;

    /**
     * Gets as result
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\ExecuteListViewResultType
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Sets a new result
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\ExecuteListViewResultType $result
     * @return self
     */
    public function setResult(\GoetasWebservices\Client\SalesforceEnterprise\Types\ExecuteListViewResultType $result)
    {
        $this->result = $result;
        return $this;
    }


}

