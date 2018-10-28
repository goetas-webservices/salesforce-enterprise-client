<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing ListViewChartInstanceType
 *
 *
 * XSD Type: ListViewChartInstance
 */
class ListViewChartInstanceType extends SObjectType
{

    /**
     * @property string $aggregateField
     */
    private $aggregateField = null;

    /**
     * @property string $aggregateType
     */
    private $aggregateType = null;

    /**
     * @property string $chartType
     */
    private $chartType = null;

    /**
     * @property string $dataQuery
     */
    private $dataQuery = null;

    /**
     * @property string $dataQueryWithoutUserFilters
     */
    private $dataQueryWithoutUserFilters = null;

    /**
     * @property string $developerName
     */
    private $developerName = null;

    /**
     * @property string $externalId
     */
    private $externalId = null;

    /**
     * @property string $groupingField
     */
    private $groupingField = null;

    /**
     * @property bool $isDeletable
     */
    private $isDeletable = null;

    /**
     * @property bool $isEditable
     */
    private $isEditable = null;

    /**
     * @property bool $isLastViewed
     */
    private $isLastViewed = null;

    /**
     * @property string $label
     */
    private $label = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ListViewChartType $listViewChart
     */
    private $listViewChart = null;

    /**
     * @property string $listViewChartId
     */
    private $listViewChartId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ListViewType $listViewContext
     */
    private $listViewContext = null;

    /**
     * @property string $listViewContextId
     */
    private $listViewContextId = null;

    /**
     * @property string $sourceEntity
     */
    private $sourceEntity = null;

    /**
     * Gets as aggregateField
     *
     * @return string
     */
    public function getAggregateField()
    {
        return $this->aggregateField;
    }

    /**
     * Sets a new aggregateField
     *
     * @param string $aggregateField
     * @return self
     */
    public function setAggregateField($aggregateField)
    {
        $this->aggregateField = $aggregateField;
        return $this;
    }

    /**
     * Gets as aggregateType
     *
     * @return string
     */
    public function getAggregateType()
    {
        return $this->aggregateType;
    }

    /**
     * Sets a new aggregateType
     *
     * @param string $aggregateType
     * @return self
     */
    public function setAggregateType($aggregateType)
    {
        $this->aggregateType = $aggregateType;
        return $this;
    }

    /**
     * Gets as chartType
     *
     * @return string
     */
    public function getChartType()
    {
        return $this->chartType;
    }

    /**
     * Sets a new chartType
     *
     * @param string $chartType
     * @return self
     */
    public function setChartType($chartType)
    {
        $this->chartType = $chartType;
        return $this;
    }

    /**
     * Gets as dataQuery
     *
     * @return string
     */
    public function getDataQuery()
    {
        return $this->dataQuery;
    }

    /**
     * Sets a new dataQuery
     *
     * @param string $dataQuery
     * @return self
     */
    public function setDataQuery($dataQuery)
    {
        $this->dataQuery = $dataQuery;
        return $this;
    }

    /**
     * Gets as dataQueryWithoutUserFilters
     *
     * @return string
     */
    public function getDataQueryWithoutUserFilters()
    {
        return $this->dataQueryWithoutUserFilters;
    }

    /**
     * Sets a new dataQueryWithoutUserFilters
     *
     * @param string $dataQueryWithoutUserFilters
     * @return self
     */
    public function setDataQueryWithoutUserFilters($dataQueryWithoutUserFilters)
    {
        $this->dataQueryWithoutUserFilters = $dataQueryWithoutUserFilters;
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
     * Gets as externalId
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * Sets a new externalId
     *
     * @param string $externalId
     * @return self
     */
    public function setExternalId($externalId)
    {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * Gets as groupingField
     *
     * @return string
     */
    public function getGroupingField()
    {
        return $this->groupingField;
    }

    /**
     * Sets a new groupingField
     *
     * @param string $groupingField
     * @return self
     */
    public function setGroupingField($groupingField)
    {
        $this->groupingField = $groupingField;
        return $this;
    }

    /**
     * Gets as isDeletable
     *
     * @return bool
     */
    public function getIsDeletable()
    {
        return $this->isDeletable;
    }

    /**
     * Sets a new isDeletable
     *
     * @param bool $isDeletable
     * @return self
     */
    public function setIsDeletable($isDeletable)
    {
        $this->isDeletable = $isDeletable;
        return $this;
    }

    /**
     * Gets as isEditable
     *
     * @return bool
     */
    public function getIsEditable()
    {
        return $this->isEditable;
    }

    /**
     * Sets a new isEditable
     *
     * @param bool $isEditable
     * @return self
     */
    public function setIsEditable($isEditable)
    {
        $this->isEditable = $isEditable;
        return $this;
    }

    /**
     * Gets as isLastViewed
     *
     * @return bool
     */
    public function getIsLastViewed()
    {
        return $this->isLastViewed;
    }

    /**
     * Sets a new isLastViewed
     *
     * @param bool $isLastViewed
     * @return self
     */
    public function setIsLastViewed($isLastViewed)
    {
        $this->isLastViewed = $isLastViewed;
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
     * Gets as listViewChart
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ListViewChartType
     */
    public function getListViewChart()
    {
        return $this->listViewChart;
    }

    /**
     * Sets a new listViewChart
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ListViewChartType $listViewChart
     * @return self
     */
    public function setListViewChart(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\ListViewChartType $listViewChart)
    {
        $this->listViewChart = $listViewChart;
        return $this;
    }

    /**
     * Gets as listViewChartId
     *
     * @return string
     */
    public function getListViewChartId()
    {
        return $this->listViewChartId;
    }

    /**
     * Sets a new listViewChartId
     *
     * @param string $listViewChartId
     * @return self
     */
    public function setListViewChartId($listViewChartId)
    {
        $this->listViewChartId = $listViewChartId;
        return $this;
    }

    /**
     * Gets as listViewContext
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ListViewType
     */
    public function getListViewContext()
    {
        return $this->listViewContext;
    }

    /**
     * Sets a new listViewContext
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ListViewType $listViewContext
     * @return self
     */
    public function setListViewContext(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\ListViewType $listViewContext)
    {
        $this->listViewContext = $listViewContext;
        return $this;
    }

    /**
     * Gets as listViewContextId
     *
     * @return string
     */
    public function getListViewContextId()
    {
        return $this->listViewContextId;
    }

    /**
     * Sets a new listViewContextId
     *
     * @param string $listViewContextId
     * @return self
     */
    public function setListViewContextId($listViewContextId)
    {
        $this->listViewContextId = $listViewContextId;
        return $this;
    }

    /**
     * Gets as sourceEntity
     *
     * @return string
     */
    public function getSourceEntity()
    {
        return $this->sourceEntity;
    }

    /**
     * Sets a new sourceEntity
     *
     * @param string $sourceEntity
     * @return self
     */
    public function setSourceEntity($sourceEntity)
    {
        $this->sourceEntity = $sourceEntity;
        return $this;
    }


}

