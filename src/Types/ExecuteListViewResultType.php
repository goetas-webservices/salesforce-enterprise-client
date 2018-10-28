<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing ExecuteListViewResultType
 *
 *
 * XSD Type: ExecuteListViewResult
 */
class ExecuteListViewResultType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\ListViewColumnType[] $columns
     */
    private $columns = [
        
    ];

    /**
     * @property string $developerName
     */
    private $developerName = null;

    /**
     * @property bool $done
     */
    private $done = null;

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * @property string $label
     */
    private $label = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\ListViewRecordColumnType[] $records
     */
    private $records = null;

    /**
     * @property int $size
     */
    private $size = null;

    /**
     * Adds as columns
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\ListViewColumnType $columns
     */
    public function addToColumns(\GoetasWebservices\Client\SalesforceEnterprise\Types\ListViewColumnType $columns)
    {
        $this->columns[] = $columns;
        return $this;
    }

    /**
     * isset columns
     *
     * @param int|string $index
     * @return bool
     */
    public function issetColumns($index)
    {
        return isset($this->columns[$index]);
    }

    /**
     * unset columns
     *
     * @param int|string $index
     * @return void
     */
    public function unsetColumns($index)
    {
        unset($this->columns[$index]);
    }

    /**
     * Gets as columns
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\ListViewColumnType[]
     */
    public function getColumns()
    {
        return $this->columns;
    }

    /**
     * Sets a new columns
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\ListViewColumnType[] $columns
     * @return self
     */
    public function setColumns(array $columns)
    {
        $this->columns = $columns;
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
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Sets a new label
     *
     * @param string $label
     * @return self
     */
    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }

    /**
     * Adds as columns
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\ListViewRecordColumnType $columns
     */
    public function addToRecords(\GoetasWebservices\Client\SalesforceEnterprise\Types\ListViewRecordColumnType $columns)
    {
        $this->records[] = $columns;
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
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\ListViewRecordColumnType[]
     */
    public function getRecords()
    {
        return $this->records;
    }

    /**
     * Sets a new records
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\ListViewRecordColumnType[] $records
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

