<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing RecordTypeInfoType
 *
 *
 * XSD Type: RecordTypeInfo
 */
class RecordTypeInfoType
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
     * @property bool $master
     */
    private $master = null;

    /**
     * @property string $name
     */
    private $name = null;

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

