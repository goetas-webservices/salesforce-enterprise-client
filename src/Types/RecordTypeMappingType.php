<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing RecordTypeMappingType
 *
 *
 * XSD Type: RecordTypeMapping
 */
class RecordTypeMappingType
{

    /**
     * @property bool $active
     */
    private $active = null;

    /**
     * @property bool $available
     */
    private $available = null;

    /**
     * @property bool $defaultRecordTypeMapping
     */
    private $defaultRecordTypeMapping = null;

    /**
     * @property string $developerName
     */
    private $developerName = null;

    /**
     * @property string $layoutId
     */
    private $layoutId = null;

    /**
     * @property bool $master
     */
    private $master = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\PicklistForRecordType[] $picklistsForRecordType
     */
    private $picklistsForRecordType = [
        
    ];

    /**
     * @property string $recordTypeId
     */
    private $recordTypeId = null;

    /**
     * Gets as active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Sets a new active
     *
     * @param bool $active
     * @return self
     */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }

    /**
     * Gets as available
     *
     * @return bool
     */
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * Sets a new available
     *
     * @param bool $available
     * @return self
     */
    public function setAvailable($available)
    {
        $this->available = $available;
        return $this;
    }

    /**
     * Gets as defaultRecordTypeMapping
     *
     * @return bool
     */
    public function getDefaultRecordTypeMapping()
    {
        return $this->defaultRecordTypeMapping;
    }

    /**
     * Sets a new defaultRecordTypeMapping
     *
     * @param bool $defaultRecordTypeMapping
     * @return self
     */
    public function setDefaultRecordTypeMapping($defaultRecordTypeMapping)
    {
        $this->defaultRecordTypeMapping = $defaultRecordTypeMapping;
        return $this;
    }

    /**
     * Gets as developerName
     *
     * @return string
     */
    public function getDeveloperName()
    {
        return $this->developerName;
    }

    /**
     * Sets a new developerName
     *
     * @param string $developerName
     * @return self
     */
    public function setDeveloperName($developerName)
    {
        $this->developerName = $developerName;
        return $this;
    }

    /**
     * Gets as layoutId
     *
     * @return string
     */
    public function getLayoutId()
    {
        return $this->layoutId;
    }

    /**
     * Sets a new layoutId
     *
     * @param string $layoutId
     * @return self
     */
    public function setLayoutId($layoutId)
    {
        $this->layoutId = $layoutId;
        return $this;
    }

    /**
     * Gets as master
     *
     * @return bool
     */
    public function getMaster()
    {
        return $this->master;
    }

    /**
     * Sets a new master
     *
     * @param bool $master
     * @return self
     */
    public function setMaster($master)
    {
        $this->master = $master;
        return $this;
    }

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Adds as picklistsForRecordType
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\PicklistForRecordType $picklistsForRecordType
     */
    public function addToPicklistsForRecordType(\GoetasWebservices\Client\SalesforceEnterprise\Types\PicklistForRecordType $picklistsForRecordType)
    {
        $this->picklistsForRecordType[] = $picklistsForRecordType;
        return $this;
    }

    /**
     * isset picklistsForRecordType
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPicklistsForRecordType($index)
    {
        return isset($this->picklistsForRecordType[$index]);
    }

    /**
     * unset picklistsForRecordType
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPicklistsForRecordType($index)
    {
        unset($this->picklistsForRecordType[$index]);
    }

    /**
     * Gets as picklistsForRecordType
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\PicklistForRecordType[]
     */
    public function getPicklistsForRecordType()
    {
        return $this->picklistsForRecordType;
    }

    /**
     * Sets a new picklistsForRecordType
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\PicklistForRecordType[] $picklistsForRecordType
     * @return self
     */
    public function setPicklistsForRecordType(array $picklistsForRecordType)
    {
        $this->picklistsForRecordType = $picklistsForRecordType;
        return $this;
    }

    /**
     * Gets as recordTypeId
     *
     * @return string
     */
    public function getRecordTypeId()
    {
        return $this->recordTypeId;
    }

    /**
     * Sets a new recordTypeId
     *
     * @param string $recordTypeId
     * @return self
     */
    public function setRecordTypeId($recordTypeId)
    {
        $this->recordTypeId = $recordTypeId;
        return $this;
    }


}

