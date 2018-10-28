<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing RelatedListType
 *
 *
 * XSD Type: RelatedList
 */
class RelatedListType
{

    /**
     * @property string $accessLevelRequiredForCreate
     */
    private $accessLevelRequiredForCreate = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutButtonType[] $buttons
     */
    private $buttons = [
        
    ];

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\RelatedListColumnType[] $columns
     */
    private $columns = [
        
    ];

    /**
     * @property bool $custom
     */
    private $custom = null;

    /**
     * @property string $field
     */
    private $field = null;

    /**
     * @property string $label
     */
    private $label = null;

    /**
     * @property int $limitRows
     */
    private $limitRows = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $sobject
     */
    private $sobject = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\RelatedListSortType[] $sort
     */
    private $sort = [
        
    ];

    /**
     * Gets as accessLevelRequiredForCreate
     *
     * @return string
     */
    public function getAccessLevelRequiredForCreate()
    {
        return $this->accessLevelRequiredForCreate;
    }

    /**
     * Sets a new accessLevelRequiredForCreate
     *
     * @param string $accessLevelRequiredForCreate
     * @return self
     */
    public function setAccessLevelRequiredForCreate($accessLevelRequiredForCreate)
    {
        $this->accessLevelRequiredForCreate = $accessLevelRequiredForCreate;
        return $this;
    }

    /**
     * Adds as buttons
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutButtonType $buttons
     */
    public function addToButtons(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutButtonType $buttons)
    {
        $this->buttons[] = $buttons;
        return $this;
    }

    /**
     * isset buttons
     *
     * @param int|string $index
     * @return bool
     */
    public function issetButtons($index)
    {
        return isset($this->buttons[$index]);
    }

    /**
     * unset buttons
     *
     * @param int|string $index
     * @return void
     */
    public function unsetButtons($index)
    {
        unset($this->buttons[$index]);
    }

    /**
     * Gets as buttons
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutButtonType[]
     */
    public function getButtons()
    {
        return $this->buttons;
    }

    /**
     * Sets a new buttons
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutButtonType[] $buttons
     * @return self
     */
    public function setButtons(array $buttons)
    {
        $this->buttons = $buttons;
        return $this;
    }

    /**
     * Adds as columns
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\RelatedListColumnType $columns
     */
    public function addToColumns(\GoetasWebservices\Client\SalesforceEnterprise\Types\RelatedListColumnType $columns)
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
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\RelatedListColumnType[]
     */
    public function getColumns()
    {
        return $this->columns;
    }

    /**
     * Sets a new columns
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\RelatedListColumnType[] $columns
     * @return self
     */
    public function setColumns(array $columns)
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * Gets as custom
     *
     * @return bool
     */
    public function getCustom()
    {
        return $this->custom;
    }

    /**
     * Sets a new custom
     *
     * @param bool $custom
     * @return self
     */
    public function setCustom($custom)
    {
        $this->custom = $custom;
        return $this;
    }

    /**
     * Gets as field
     *
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * Sets a new field
     *
     * @param string $field
     * @return self
     */
    public function setField($field)
    {
        $this->field = $field;
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
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as sobject
     *
     * @return string
     */
    public function getSobject()
    {
        return $this->sobject;
    }

    /**
     * Sets a new sobject
     *
     * @param string $sobject
     * @return self
     */
    public function setSobject($sobject)
    {
        $this->sobject = $sobject;
        return $this;
    }

    /**
     * Adds as sort
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\RelatedListSortType $sort
     */
    public function addToSort(\GoetasWebservices\Client\SalesforceEnterprise\Types\RelatedListSortType $sort)
    {
        $this->sort[] = $sort;
        return $this;
    }

    /**
     * isset sort
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSort($index)
    {
        return isset($this->sort[$index]);
    }

    /**
     * unset sort
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSort($index)
    {
        unset($this->sort[$index]);
    }

    /**
     * Gets as sort
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\RelatedListSortType[]
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * Sets a new sort
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\RelatedListSortType[] $sort
     * @return self
     */
    public function setSort(array $sort)
    {
        $this->sort = $sort;
        return $this;
    }


}

