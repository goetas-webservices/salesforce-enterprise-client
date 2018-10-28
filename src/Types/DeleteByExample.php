<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DeleteByExample
 */
class DeleteByExample
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType[] $sObjects
     */
    private $sObjects = [
        
    ];

    /**
     * Adds as sObjects
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $sObjects
     */
    public function addToSObjects(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $sObjects)
    {
        $this->sObjects[] = $sObjects;
        return $this;
    }

    /**
     * isset sObjects
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSObjects($index)
    {
        return isset($this->sObjects[$index]);
    }

    /**
     * unset sObjects
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSObjects($index)
    {
        unset($this->sObjects[$index]);
    }

    /**
     * Gets as sObjects
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType[]
     */
    public function getSObjects()
    {
        return $this->sObjects;
    }

    /**
     * Sets a new sObjects
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType[] $sObjects
     * @return self
     */
    public function setSObjects(array $sObjects)
    {
        $this->sObjects = $sObjects;
        return $this;
    }


}

