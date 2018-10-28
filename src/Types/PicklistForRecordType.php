<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing PicklistForRecordType
 *
 *
 * XSD Type: PicklistForRecordType
 */
class PicklistForRecordType
{

    /**
     * @property string $picklistName
     */
    private $picklistName = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\PicklistEntryType[] $picklistValues
     */
    private $picklistValues = [
        
    ];

    /**
     * Gets as picklistName
     *
     * @return string
     */
    public function getPicklistName()
    {
        return $this->picklistName;
    }

    /**
     * Sets a new picklistName
     *
     * @param string $picklistName
     * @return self
     */
    public function setPicklistName($picklistName)
    {
        $this->picklistName = $picklistName;
        return $this;
    }

    /**
     * Adds as picklistValues
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\PicklistEntryType $picklistValues
     */
    public function addToPicklistValues(\GoetasWebservices\Client\SalesforceEnterprise\Types\PicklistEntryType $picklistValues)
    {
        $this->picklistValues[] = $picklistValues;
        return $this;
    }

    /**
     * isset picklistValues
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPicklistValues($index)
    {
        return isset($this->picklistValues[$index]);
    }

    /**
     * unset picklistValues
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPicklistValues($index)
    {
        unset($this->picklistValues[$index]);
    }

    /**
     * Gets as picklistValues
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\PicklistEntryType[]
     */
    public function getPicklistValues()
    {
        return $this->picklistValues;
    }

    /**
     * Sets a new picklistValues
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\PicklistEntryType[] $picklistValues
     * @return self
     */
    public function setPicklistValues(array $picklistValues)
    {
        $this->picklistValues = $picklistValues;
        return $this;
    }


}

