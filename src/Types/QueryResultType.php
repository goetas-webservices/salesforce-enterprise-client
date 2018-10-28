<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing QueryResultType
 *
 *
 * XSD Type: QueryResult
 */
class QueryResultType
{

    /**
     * @property bool $done
     */
    private $done = null;

    /**
     * @property string $queryLocator
     */
    private $queryLocator = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType[] $records
     */
    private $records = [
        
    ];

    /**
     * @property int $size
     */
    private $size = null;

    /**
     * Gets as done
     *
     * @return bool
     */
    public function getDone()
    {
        return $this->done;
    }

    /**
     * Sets a new done
     *
     * @param bool $done
     * @return self
     */
    public function setDone($done)
    {
        $this->done = $done;
        return $this;
    }

    /**
     * Gets as queryLocator
     *
     * @return string
     */
    public function getQueryLocator()
    {
        return $this->queryLocator;
    }

    /**
     * Sets a new queryLocator
     *
     * @param string $queryLocator
     * @return self
     */
    public function setQueryLocator($queryLocator)
    {
        $this->queryLocator = $queryLocator;
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

    /**
     * Gets as size
     *
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Sets a new size
     *
     * @param int $size
     * @return self
     */
    public function setSize($size)
    {
        $this->size = $size;
        return $this;
    }


}

