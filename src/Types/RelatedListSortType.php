<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing RelatedListSortType
 *
 *
 * XSD Type: RelatedListSort
 */
class RelatedListSortType
{

    /**
     * @property bool $ascending
     */
    private $ascending = null;

    /**
     * @property string $column
     */
    private $column = null;

    /**
     * Gets as ascending
     *
     * @return bool
     */
    public function getAscending()
    {
        return $this->ascending;
    }

    /**
     * Sets a new ascending
     *
     * @param bool $ascending
     * @return self
     */
    public function setAscending($ascending)
    {
        $this->ascending = $ascending;
        return $this;
    }

    /**
     * Gets as column
     *
     * @return string
     */
    public function getColumn()
    {
        return $this->column;
    }

    /**
     * Sets a new column
     *
     * @param string $column
     * @return self
     */
    public function setColumn($column)
    {
        $this->column = $column;
        return $this;
    }


}

