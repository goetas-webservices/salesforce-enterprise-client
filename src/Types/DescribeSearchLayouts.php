<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribeSearchLayouts
 */
class DescribeSearchLayouts
{

    /**
     * @property string[] $sObjectType
     */
    private $sObjectType = [
        
    ];

    /**
     * Adds as sObjectType
     *
     * @return self
     * @param string $sObjectType
     */
    public function addToSObjectType($sObjectType)
    {
        $this->sObjectType[] = $sObjectType;
        return $this;
    }

    /**
     * isset sObjectType
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSObjectType($index)
    {
        return isset($this->sObjectType[$index]);
    }

    /**
     * unset sObjectType
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSObjectType($index)
    {
        unset($this->sObjectType[$index]);
    }

    /**
     * Gets as sObjectType
     *
     * @return string[]
     */
    public function getSObjectType()
    {
        return $this->sObjectType;
    }

    /**
     * Sets a new sObjectType
     *
     * @param string[] $sObjectType
     * @return self
     */
    public function setSObjectType(array $sObjectType)
    {
        $this->sObjectType = $sObjectType;
        return $this;
    }


}

