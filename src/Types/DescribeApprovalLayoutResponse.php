<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribeApprovalLayoutResponse
 */
class DescribeApprovalLayoutResponse
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeApprovalLayoutType[] $result
     */
    private $result = null;

    /**
     * Adds as approvalLayouts
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeApprovalLayoutType $approvalLayouts
     */
    public function addToResult(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeApprovalLayoutType $approvalLayouts)
    {
        $this->result[] = $approvalLayouts;
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
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeApprovalLayoutType[]
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Sets a new result
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeApprovalLayoutType[] $result
     * @return self
     */
    public function setResult(array $result)
    {
        $this->result = $result;
        return $this;
    }


}

