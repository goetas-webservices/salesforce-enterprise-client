<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing PerformQuickActionRequestType
 *
 *
 * XSD Type: PerformQuickActionRequest
 */
class PerformQuickActionRequestType
{

    /**
     * @property string $contextId
     */
    private $contextId = null;

    /**
     * @property string $quickActionName
     */
    private $quickActionName = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType[] $records
     */
    private $records = [
        
    ];

    /**
     * Gets as contextId
     *
     * @return string
     */
    public function getContextId()
    {
        return $this->contextId;
    }

    /**
     * Sets a new contextId
     *
     * @param string $contextId
     * @return self
     */
    public function setContextId($contextId)
    {
        $this->contextId = $contextId;
        return $this;
    }

    /**
     * Gets as quickActionName
     *
     * @return string
     */
    public function getQuickActionName()
    {
        return $this->quickActionName;
    }

    /**
     * Sets a new quickActionName
     *
     * @param string $quickActionName
     * @return self
     */
    public function setQuickActionName($quickActionName)
    {
        $this->quickActionName = $quickActionName;
        return $this;
    }

    /**
     * Adds as records
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $records
     */
    public function addToRecords(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $records)
    {
        $this->records[] = $records;
        return $this;
    }

    /**
     * isset records
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRecords($index)
    {
        return isset($this->records[$index]);
    }

    /**
     * unset records
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRecords($index)
    {
        unset($this->records[$index]);
    }

    /**
     * Gets as records
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType[]
     */
    public function getRecords()
    {
        return $this->records;
    }

    /**
     * Sets a new records
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType[] $records
     * @return self
     */
    public function setRecords(array $records)
    {
        $this->records = $records;
        return $this;
    }


}

