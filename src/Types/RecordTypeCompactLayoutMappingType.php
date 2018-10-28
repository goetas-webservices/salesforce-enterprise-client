<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing RecordTypeCompactLayoutMappingType
 *
 *
 * XSD Type: RecordTypeCompactLayoutMapping
 */
class RecordTypeCompactLayoutMappingType
{

    /**
     * @property bool $available
     */
    private $available = null;

    /**
     * @property string $compactLayoutId
     */
    private $compactLayoutId = null;

    /**
     * @property string $compactLayoutName
     */
    private $compactLayoutName = null;

    /**
     * @property string $recordTypeId
     */
    private $recordTypeId = null;

    /**
     * @property string $recordTypeName
     */
    private $recordTypeName = null;

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
     * Gets as compactLayoutId
     *
     * @return string
     */
    public function getCompactLayoutId()
    {
        return $this->compactLayoutId;
    }

    /**
     * Sets a new compactLayoutId
     *
     * @param string $compactLayoutId
     * @return self
     */
    public function setCompactLayoutId($compactLayoutId)
    {
        $this->compactLayoutId = $compactLayoutId;
        return $this;
    }

    /**
     * Gets as compactLayoutName
     *
     * @return string
     */
    public function getCompactLayoutName()
    {
        return $this->compactLayoutName;
    }

    /**
     * Sets a new compactLayoutName
     *
     * @param string $compactLayoutName
     * @return self
     */
    public function setCompactLayoutName($compactLayoutName)
    {
        $this->compactLayoutName = $compactLayoutName;
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

    /**
     * Gets as recordTypeName
     *
     * @return string
     */
    public function getRecordTypeName()
    {
        return $this->recordTypeName;
    }

    /**
     * Sets a new recordTypeName
     *
     * @param string $recordTypeName
     * @return self
     */
    public function setRecordTypeName($recordTypeName)
    {
        $this->recordTypeName = $recordTypeName;
        return $this;
    }


}

