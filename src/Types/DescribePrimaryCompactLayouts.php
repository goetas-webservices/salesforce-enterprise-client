<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribePrimaryCompactLayouts
 */
class DescribePrimaryCompactLayouts
{

    /**
     * @property string[] $sObjectTypes
     */
    private $sObjectTypes = [
        
    ];

    /**
     * Adds as sObjectTypes
     *
     * @return self
     * @param string $sObjectTypes
     */
    public function addToSObjectTypes($sObjectTypes)
    {
        $this->sObjectTypes[] = $sObjectTypes;
        return $this;
    }

    /**
     * isset sObjectTypes
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSObjectTypes($index)
    {
        return isset($this->sObjectTypes[$index]);
    }

    /**
     * unset sObjectTypes
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSObjectTypes($index)
    {
        unset($this->sObjectTypes[$index]);
    }

    /**
     * Gets as sObjectTypes
     *
     * @return string[]
     */
    public function getSObjectTypes()
    {
        return $this->sObjectTypes;
    }

    /**
     * Sets a new sObjectTypes
     *
     * @param string[] $sObjectTypes
     * @return self
     */
    public function setSObjectTypes(array $sObjectTypes)
    {
        $this->sObjectTypes = $sObjectTypes;
        return $this;
    }


}

