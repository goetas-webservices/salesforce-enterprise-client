<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribeApprovalLayout
 */
class DescribeApprovalLayout
{

    /**
     * @property string $sObjectType
     */
    private $sObjectType = null;

    /**
     * @property string[] $approvalProcessNames
     */
    private $approvalProcessNames = [
        
    ];

    /**
     * Gets as sObjectType
     *
     * @return string
     */
    public function getSObjectType()
    {
        return $this->sObjectType;
    }

    /**
     * Sets a new sObjectType
     *
     * @param string $sObjectType
     * @return self
     */
    public function setSObjectType($sObjectType)
    {
        $this->sObjectType = $sObjectType;
        return $this;
    }

    /**
     * Adds as approvalProcessNames
     *
     * @return self
     * @param string $approvalProcessNames
     */
    public function addToApprovalProcessNames($approvalProcessNames)
    {
        $this->approvalProcessNames[] = $approvalProcessNames;
        return $this;
    }

    /**
     * isset approvalProcessNames
     *
     * @param int|string $index
     * @return bool
     */
    public function issetApprovalProcessNames($index)
    {
        return isset($this->approvalProcessNames[$index]);
    }

    /**
     * unset approvalProcessNames
     *
     * @param int|string $index
     * @return void
     */
    public function unsetApprovalProcessNames($index)
    {
        unset($this->approvalProcessNames[$index]);
    }

    /**
     * Gets as approvalProcessNames
     *
     * @return string[]
     */
    public function getApprovalProcessNames()
    {
        return $this->approvalProcessNames;
    }

    /**
     * Sets a new approvalProcessNames
     *
     * @param string[] $approvalProcessNames
     * @return self
     */
    public function setApprovalProcessNames(array $approvalProcessNames)
    {
        $this->approvalProcessNames = $approvalProcessNames;
        return $this;
    }


}

