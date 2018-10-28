<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribeSearchLayoutResultType
 *
 *
 * XSD Type: DescribeSearchLayoutResult
 */
class DescribeSearchLayoutResultType
{

    /**
     * @property string $errorMsg
     */
    private $errorMsg = null;

    /**
     * @property string $label
     */
    private $label = null;

    /**
     * @property int $limitRows
     */
    private $limitRows = null;

    /**
     * @property string $objectType
     */
    private $objectType = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeColumnType[] $searchColumns
     */
    private $searchColumns = [
        
    ];

    /**
     * Gets as errorMsg
     *
     * @return string
     */
    public function getErrorMsg()
    {
        return $this->errorMsg;
    }

    /**
     * Sets a new errorMsg
     *
     * @param string $errorMsg
     * @return self
     */
    public function setErrorMsg($errorMsg)
    {
        $this->errorMsg = $errorMsg;
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
     * Gets as limitRows
     *
     * @return int
     */
    public function getLimitRows()
    {
        return $this->limitRows;
    }

    /**
     * Sets a new limitRows
     *
     * @param int $limitRows
     * @return self
     */
    public function setLimitRows($limitRows)
    {
        $this->limitRows = $limitRows;
        return $this;
    }

    /**
     * Gets as objectType
     *
     * @return string
     */
    public function getObjectType()
    {
        return $this->objectType;
    }

    /**
     * Sets a new objectType
     *
     * @param string $objectType
     * @return self
     */
    public function setObjectType($objectType)
    {
        $this->objectType = $objectType;
        return $this;
    }

    /**
     * Adds as searchColumns
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeColumnType $searchColumns
     */
    public function addToSearchColumns(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeColumnType $searchColumns)
    {
        $this->searchColumns[] = $searchColumns;
        return $this;
    }

    /**
     * isset searchColumns
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSearchColumns($index)
    {
        return isset($this->searchColumns[$index]);
    }

    /**
     * unset searchColumns
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSearchColumns($index)
    {
        unset($this->searchColumns[$index]);
    }

    /**
     * Gets as searchColumns
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeColumnType[]
     */
    public function getSearchColumns()
    {
        return $this->searchColumns;
    }

    /**
     * Sets a new searchColumns
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeColumnType[] $searchColumns
     * @return self
     */
    public function setSearchColumns(array $searchColumns)
    {
        $this->searchColumns = $searchColumns;
        return $this;
    }


}

