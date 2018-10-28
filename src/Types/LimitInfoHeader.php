<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing LimitInfoHeader
 */
class LimitInfoHeader
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\LimitInfoType[] $limitInfo
     */
    private $limitInfo = [
        
    ];

    /**
     * Adds as limitInfo
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\LimitInfoType $limitInfo
     */
    public function addToLimitInfo(\GoetasWebservices\Client\SalesforceEnterprise\Types\LimitInfoType $limitInfo)
    {
        $this->limitInfo[] = $limitInfo;
        return $this;
    }

    /**
     * isset limitInfo
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLimitInfo($index)
    {
        return isset($this->limitInfo[$index]);
    }

    /**
     * unset limitInfo
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLimitInfo($index)
    {
        unset($this->limitInfo[$index]);
    }

    /**
     * Gets as limitInfo
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\LimitInfoType[]
     */
    public function getLimitInfo()
    {
        return $this->limitInfo;
    }

    /**
     * Sets a new limitInfo
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\LimitInfoType[] $limitInfo
     * @return self
     */
    public function setLimitInfo(array $limitInfo)
    {
        $this->limitInfo = $limitInfo;
        return $this;
    }


}

