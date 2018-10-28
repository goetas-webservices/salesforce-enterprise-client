<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribeLayoutSectionType
 *
 *
 * XSD Type: DescribeLayoutSection
 */
class DescribeLayoutSectionType
{

    /**
     * @property bool $collapsed
     */
    private $collapsed = null;

    /**
     * @property int $columns
     */
    private $columns = null;

    /**
     * @property string $heading
     */
    private $heading = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutRowType[] $layoutRows
     */
    private $layoutRows = [
        
    ];

    /**
     * @property string $layoutSectionId
     */
    private $layoutSectionId = null;

    /**
     * @property string $parentLayoutId
     */
    private $parentLayoutId = null;

    /**
     * @property int $rows
     */
    private $rows = null;

    /**
     * @property string $tabOrder
     */
    private $tabOrder = null;

    /**
     * @property bool $useCollapsibleSection
     */
    private $useCollapsibleSection = null;

    /**
     * @property bool $useHeading
     */
    private $useHeading = null;

    /**
     * Gets as collapsed
     *
     * @return bool
     */
    public function getCollapsed()
    {
        return $this->collapsed;
    }

    /**
     * Sets a new collapsed
     *
     * @param bool $collapsed
     * @return self
     */
    public function setCollapsed($collapsed)
    {
        $this->collapsed = $collapsed;
        return $this;
    }

    /**
     * Gets as columns
     *
     * @return int
     */
    public function getColumns()
    {
        return $this->columns;
    }

    /**
     * Sets a new columns
     *
     * @param int $columns
     * @return self
     */
    public function setColumns($columns)
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * Gets as heading
     *
     * @return string
     */
    public function getHeading()
    {
        return $this->heading;
    }

    /**
     * Sets a new heading
     *
     * @param string $heading
     * @return self
     */
    public function setHeading($heading)
    {
        $this->heading = $heading;
        return $this;
    }

    /**
     * Adds as layoutRows
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutRowType $layoutRows
     */
    public function addToLayoutRows(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutRowType $layoutRows)
    {
        $this->layoutRows[] = $layoutRows;
        return $this;
    }

    /**
     * isset layoutRows
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLayoutRows($index)
    {
        return isset($this->layoutRows[$index]);
    }

    /**
     * unset layoutRows
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLayoutRows($index)
    {
        unset($this->layoutRows[$index]);
    }

    /**
     * Gets as layoutRows
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutRowType[]
     */
    public function getLayoutRows()
    {
        return $this->layoutRows;
    }

    /**
     * Sets a new layoutRows
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutRowType[] $layoutRows
     * @return self
     */
    public function setLayoutRows(array $layoutRows)
    {
        $this->layoutRows = $layoutRows;
        return $this;
    }

    /**
     * Gets as layoutSectionId
     *
     * @return string
     */
    public function getLayoutSectionId()
    {
        return $this->layoutSectionId;
    }

    /**
     * Sets a new layoutSectionId
     *
     * @param string $layoutSectionId
     * @return self
     */
    public function setLayoutSectionId($layoutSectionId)
    {
        $this->layoutSectionId = $layoutSectionId;
        return $this;
    }

    /**
     * Gets as parentLayoutId
     *
     * @return string
     */
    public function getParentLayoutId()
    {
        return $this->parentLayoutId;
    }

    /**
     * Sets a new parentLayoutId
     *
     * @param string $parentLayoutId
     * @return self
     */
    public function setParentLayoutId($parentLayoutId)
    {
        $this->parentLayoutId = $parentLayoutId;
        return $this;
    }

    /**
     * Gets as rows
     *
     * @return int
     */
    public function getRows()
    {
        return $this->rows;
    }

    /**
     * Sets a new rows
     *
     * @param int $rows
     * @return self
     */
    public function setRows($rows)
    {
        $this->rows = $rows;
        return $this;
    }

    /**
     * Gets as tabOrder
     *
     * @return string
     */
    public function getTabOrder()
    {
        return $this->tabOrder;
    }

    /**
     * Sets a new tabOrder
     *
     * @param string $tabOrder
     * @return self
     */
    public function setTabOrder($tabOrder)
    {
        $this->tabOrder = $tabOrder;
        return $this;
    }

    /**
     * Gets as useCollapsibleSection
     *
     * @return bool
     */
    public function getUseCollapsibleSection()
    {
        return $this->useCollapsibleSection;
    }

    /**
     * Sets a new useCollapsibleSection
     *
     * @param bool $useCollapsibleSection
     * @return self
     */
    public function setUseCollapsibleSection($useCollapsibleSection)
    {
        $this->useCollapsibleSection = $useCollapsibleSection;
        return $this;
    }

    /**
     * Gets as useHeading
     *
     * @return bool
     */
    public function getUseHeading()
    {
        return $this->useHeading;
    }

    /**
     * Sets a new useHeading
     *
     * @param bool $useHeading
     * @return self
     */
    public function setUseHeading($useHeading)
    {
        $this->useHeading = $useHeading;
        return $this;
    }


}

