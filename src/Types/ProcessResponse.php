<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing ProcessResponse
 */
class ProcessResponse
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\ProcessResultType[] $result
     */
    private $result = [
        
    ];

    /**
     * Adds as result
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\ProcessResultType $result
     */
    public function addToResult(\GoetasWebservices\Client\SalesforceEnterprise\Types\ProcessResultType $result)
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
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\ProcessResultType[]
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Sets a new result
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\ProcessResultType[] $result
     * @return self
     */
    public function setResult(array $result)
    {
        $this->result = $result;
        return $this;
    }


}

