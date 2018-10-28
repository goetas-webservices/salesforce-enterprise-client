<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing ListViewColumnType
 *
 *
 * XSD Type: ListViewColumn
 */
class ListViewColumnType
{

    /**
     * @property string $ascendingLabel
     */
    private $ascendingLabel = null;

    /**
     * @property string $descendingLabel
     */
    private $descendingLabel = null;

    /**
     * @property string $fieldNameOrPath
     */
    private $fieldNameOrPath = null;

    /**
     * @property bool $hidden
     */
    private $hidden = null;

    /**
     * @property string $label
     */
    private $label = null;

    /**
     * @property bool $searchable
     */
    private $searchable = null;

    /**
     * @property string $selectListItem
     */
    private $selectListItem = null;

    /**
     * @property string $sortDirection
     */
    private $sortDirection = null;

    /**
     * @property int $sortIndex
     */
    private $sortIndex = null;

    /**
     * @property bool $sortable
     */
    private $sortable = null;

    /**
     * @property string $type
     */
    private $type = null;

    /**
     * Gets as ascendingLabel
     *
     * @return string
     */
    public function getAscendingLabel()
    {
        return $this->ascendingLabel;
    }

    /**
     * Sets a new ascendingLabel
     *
     * @param string $ascendingLabel
     * @return self
     */
    public function setAscendingLabel($ascendingLabel)
    {
        $this->ascendingLabel = $ascendingLabel;
        return $this;
    }

    /**
     * Gets as descendingLabel
     *
     * @return string
     */
    public function getDescendingLabel()
    {
        return $this->descendingLabel;
    }

    /**
     * Sets a new descendingLabel
     *
     * @param string $descendingLabel
     * @return self
     */
    public function setDescendingLabel($descendingLabel)
    {
        $this->descendingLabel = $descendingLabel;
        return $this;
    }

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
     * Gets as hidden
     *
     * @return bool
     */
    public function getHidden()
    {
        return $this->hidden;
    }

    /**
     * Sets a new hidden
     *
     * @param bool $hidden
     * @return self
     */
    public function setHidden($hidden)
    {
        $this->hidden = $hidden;
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
     * Gets as searchable
     *
     * @return bool
     */
    public function getSearchable()
    {
        return $this->searchable;
    }

    /**
     * Sets a new searchable
     *
     * @param bool $searchable
     * @return self
     */
    public function setSearchable($searchable)
    {
        $this->searchable = $searchable;
        return $this;
    }

    /**
     * Gets as selectListItem
     *
     * @return string
     */
    public function getSelectListItem()
    {
        return $this->selectListItem;
    }

    /**
     * Sets a new selectListItem
     *
     * @param string $selectListItem
     * @return self
     */
    public function setSelectListItem($selectListItem)
    {
        $this->selectListItem = $selectListItem;
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

    /**
     * Gets as sortIndex
     *
     * @return int
     */
    public function getSortIndex()
    {
        return $this->sortIndex;
    }

    /**
     * Sets a new sortIndex
     *
     * @param int $sortIndex
     * @return self
     */
    public function setSortIndex($sortIndex)
    {
        $this->sortIndex = $sortIndex;
        return $this;
    }

    /**
     * Gets as sortable
     *
     * @return bool
     */
    public function getSortable()
    {
        return $this->sortable;
    }

    /**
     * Sets a new sortable
     *
     * @param bool $sortable
     * @return self
     */
    public function setSortable($sortable)
    {
        $this->sortable = $sortable;
        return $this;
    }

    /**
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }


}

