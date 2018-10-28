<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing Retrieve
 */
class Retrieve
{

    /**
     * @property string $fieldList
     */
    private $fieldList = null;

    /**
     * @property string $sObjectType
     */
    private $sObjectType = null;

    /**
     * @property string[] $ids
     */
    private $ids = [
        
    ];

    /**
     * Gets as fieldList
     *
     * @return string
     */
    public function getFieldList()
    {
        return $this->fieldList;
    }

    /**
     * Sets a new fieldList
     *
     * @param string $fieldList
     * @return self
     */
    public function setFieldList($fieldList)
    {
        $this->fieldList = $fieldList;
        return $this;
    }

    /**
     * Gets as sObjectType
     *
     * @return string
     */
    public function getSObjectType()
    {
        return $this->sObjectType;
    }

    /**
     * Sets a new sObjectType
     *
     * @param string $sObjectType
     * @return self
     */
    public function setSObjectType($sObjectType)
    {
        $this->sObjectType = $sObjectType;
        return $this;
    }

    /**
     * Adds as ids
     *
     * @return self
     * @param string $ids
     */
    public function addToIds($ids)
    {
        $this->ids[] = $ids;
        return $this;
    }

    /**
     * isset ids
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIds($index)
    {
        return isset($this->ids[$index]);
    }

    /**
     * unset ids
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIds($index)
    {
        unset($this->ids[$index]);
    }

    /**
     * Gets as ids
     *
     * @return string[]
     */
    public function getIds()
    {
        return $this->ids;
    }

    /**
     * Sets a new ids
     *
     * @param string $ids
     * @return self
     */
    public function setIds(array $ids)
    {
        $this->ids = $ids;
        return $this;
    }


}

