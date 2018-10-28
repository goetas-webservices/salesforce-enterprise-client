<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing RetrieveResponse
 */
class RetrieveResponse
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType[] $result
     */
    private $result = [
        
    ];

    /**
     * Adds as result
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $result
     */
    public function addToResult(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $result)
    {
        $this->result[] = $result;
        return $this;
    }

    /**
     * isset result
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResult($index)
    {
        return isset($this->result[$index]);
    }

    /**
     * unset result
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResult($index)
    {
        unset($this->result[$index]);
    }

    /**
     * Gets as result
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType[]
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Sets a new result
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType[] $result
     * @return self
     */
    public function setResult(array $result)
    {
        $this->result = $result;
        return $this;
    }


}

