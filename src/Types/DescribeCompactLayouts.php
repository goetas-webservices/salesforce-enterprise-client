<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribeCompactLayouts
 */
class DescribeCompactLayouts
{

    /**
     * @property string $sObjectType
     */
    private $sObjectType = null;

    /**
     * @property string[] $recordTypeIds
     */
    private $recordTypeIds = [
        
    ];

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
     * Adds as recordTypeIds
     *
     * @return self
     * @param string $recordTypeIds
     */
    public function addToRecordTypeIds($recordTypeIds)
    {
        $this->recordTypeIds[] = $recordTypeIds;
        return $this;
    }

    /**
     * isset recordTypeIds
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRecordTypeIds($index)
    {
        return isset($this->recordTypeIds[$index]);
    }

    /**
     * unset recordTypeIds
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRecordTypeIds($index)
    {
        unset($this->recordTypeIds[$index]);
    }

    /**
     * Gets as recordTypeIds
     *
     * @return string[]
     */
    public function getRecordTypeIds()
    {
        return $this->recordTypeIds;
    }

    /**
     * Sets a new recordTypeIds
     *
     * @param string $recordTypeIds
     * @return self
     */
    public function setRecordTypeIds(array $recordTypeIds)
    {
        $this->recordTypeIds = $recordTypeIds;
        return $this;
    }


}

