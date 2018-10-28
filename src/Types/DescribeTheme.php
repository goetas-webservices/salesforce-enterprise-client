<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribeTheme
 */
class DescribeTheme
{

    /**
     * @property string[] $sobjectType
     */
    private $sobjectType = [
        
    ];

    /**
     * Adds as sobjectType
     *
     * @return self
     * @param string $sobjectType
     */
    public function addToSobjectType($sobjectType)
    {
        $this->sobjectType[] = $sobjectType;
        return $this;
    }

    /**
     * isset sobjectType
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSobjectType($index)
    {
        return isset($this->sobjectType[$index]);
    }

    /**
     * unset sobjectType
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSobjectType($index)
    {
        unset($this->sobjectType[$index]);
    }

    /**
     * Gets as sobjectType
     *
     * @return string[]
     */
    public function getSobjectType()
    {
        return $this->sobjectType;
    }

    /**
     * Sets a new sobjectType
     *
     * @param string[] $sobjectType
     * @return self
     */
    public function setSobjectType(array $sobjectType)
    {
        $this->sobjectType = $sobjectType;
        return $this;
    }


}

