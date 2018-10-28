<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing FilteredLookupInfoType
 *
 *
 * XSD Type: FilteredLookupInfo
 */
class FilteredLookupInfoType
{

    /**
     * @property string[] $controllingFields
     */
    private $controllingFields = [
        
    ];

    /**
     * @property bool $dependent
     */
    private $dependent = null;

    /**
     * @property bool $optionalFilter
     */
    private $optionalFilter = null;

    /**
     * Adds as controllingFields
     *
     * @return self
     * @param string $controllingFields
     */
    public function addToControllingFields($controllingFields)
    {
        $this->controllingFields[] = $controllingFields;
        return $this;
    }

    /**
     * isset controllingFields
     *
     * @param int|string $index
     * @return bool
     */
    public function issetControllingFields($index)
    {
        return isset($this->controllingFields[$index]);
    }

    /**
     * unset controllingFields
     *
     * @param int|string $index
     * @return void
     */
    public function unsetControllingFields($index)
    {
        unset($this->controllingFields[$index]);
    }

    /**
     * Gets as controllingFields
     *
     * @return string[]
     */
    public function getControllingFields()
    {
        return $this->controllingFields;
    }

    /**
     * Sets a new controllingFields
     *
     * @param string[] $controllingFields
     * @return self
     */
    public function setControllingFields(array $controllingFields)
    {
        $this->controllingFields = $controllingFields;
        return $this;
    }

    /**
     * Gets as dependent
     *
     * @return bool
     */
    public function getDependent()
    {
        return $this->dependent;
    }

    /**
     * Sets a new dependent
     *
     * @param bool $dependent
     * @return self
     */
    public function setDependent($dependent)
    {
        $this->dependent = $dependent;
        return $this;
    }

    /**
     * Gets as optionalFilter
     *
     * @return bool
     */
    public function getOptionalFilter()
    {
        return $this->optionalFilter;
    }

    /**
     * Sets a new optionalFilter
     *
     * @param bool $optionalFilter
     * @return self
     */
    public function setOptionalFilter($optionalFilter)
    {
        $this->optionalFilter = $optionalFilter;
        return $this;
    }


}

