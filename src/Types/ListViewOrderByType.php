<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing ListViewOrderByType
 *
 *
 * XSD Type: ListViewOrderBy
 */
class ListViewOrderByType
{

    /**
     * @property string $fieldNameOrPath
     */
    private $fieldNameOrPath = null;

    /**
     * @property string $nullsPosition
     */
    private $nullsPosition = null;

    /**
     * @property string $sortDirection
     */
    private $sortDirection = null;

    /**
     * Gets as fieldNameOrPath
     *
     * @return string
     */
    public function getFieldNameOrPath()
    {
        return $this->fieldNameOrPath;
    }

    /**
     * Sets a new fieldNameOrPath
     *
     * @param string $fieldNameOrPath
     * @return self
     */
    public function setFieldNameOrPath($fieldNameOrPath)
    {
        $this->fieldNameOrPath = $fieldNameOrPath;
        return $this;
    }

    /**
     * Gets as nullsPosition
     *
     * @return string
     */
    public function getNullsPosition()
    {
        return $this->nullsPosition;
    }

    /**
     * Sets a new nullsPosition
     *
     * @param string $nullsPosition
     * @return self
     */
    public function setNullsPosition($nullsPosition)
    {
        $this->nullsPosition = $nullsPosition;
        return $this;
    }

    /**
     * Gets as sortDirection
     *
     * @return string
     */
    public function getSortDirection()
    {
        return $this->sortDirection;
    }

    /**
     * Sets a new sortDirection
     *
     * @param string $sortDirection
     * @return self
     */
    public function setSortDirection($sortDirection)
    {
        $this->sortDirection = $sortDirection;
        return $this;
    }


}

