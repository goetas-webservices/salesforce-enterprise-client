<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribePathAssistantsResponse
 */
class DescribePathAssistantsResponse
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribePathAssistantType[] $result
     */
    private $result = null;

    /**
     * Adds as pathAssistants
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribePathAssistantType $pathAssistants
     */
    public function addToResult(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribePathAssistantType $pathAssistants)
    {
        $this->result[] = $pathAssistants;
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
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribePathAssistantType[]
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Sets a new result
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribePathAssistantType[] $result
     * @return self
     */
    public function setResult(array $result)
    {
        $this->result = $result;
        return $this;
    }


}

