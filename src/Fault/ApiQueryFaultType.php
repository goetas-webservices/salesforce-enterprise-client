<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Fault;

/**
 * Class representing ApiQueryFaultType
 *
 *
 * XSD Type: ApiQueryFault
 */
class ApiQueryFaultType extends ApiFaultType
{

    /**
     * @property int $row
     */
    private $row = null;

    /**
     * @property int $column
     */
    private $column = null;

    /**
     * Gets as row
     *
     * @return int
     */
    public function getRow()
    {
        return $this->row;
    }

    /**
     * Sets a new row
     *
     * @param int $row
     * @return self
     */
    public function setRow($row)
    {
        $this->row = $row;
        return $this;
    }

    /**
     * Gets as column
     *
     * @return int
     */
    public function getColumn()
    {
        return $this->column;
    }

    /**
     * Sets a new column
     *
     * @param int $column
     * @return self
     */
    public function setColumn($column)
    {
        $this->column = $column;
        return $this;
    }


}

