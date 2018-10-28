<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribeSoqlListViewType
 *
 *
 * XSD Type: DescribeSoqlListView
 */
class DescribeSoqlListViewType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\ListViewColumnType[] $columns
     */
    private $columns = [
        
    ];

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\ListViewOrderByType[] $orderBy
     */
    private $orderBy = [
        
    ];

    /**
     * @property string $query
     */
    private $query = null;

    /**
     * @property string $relatedEntityId
     */
    private $relatedEntityId = null;

    /**
     * @property string $scope
     */
    private $scope = null;

    /**
     * @property string $scopeEntityId
     */
    private $scopeEntityId = null;

    /**
     * @property string $sobjectType
     */
    private $sobjectType = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\SoqlWhereConditionType $whereCondition
     */
    private $whereCondition = null;

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
     * Adds as orderBy
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\ListViewOrderByType $orderBy
     */
    public function addToOrderBy(\GoetasWebservices\Client\SalesforceEnterprise\Types\ListViewOrderByType $orderBy)
    {
        $this->orderBy[] = $orderBy;
        return $this;
    }

    /**
     * isset orderBy
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrderBy($index)
    {
        return isset($this->orderBy[$index]);
    }

    /**
     * unset orderBy
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrderBy($index)
    {
        unset($this->orderBy[$index]);
    }

    /**
     * Gets as orderBy
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\ListViewOrderByType[]
     */
    public function getOrderBy()
    {
        return $this->orderBy;
    }

    /**
     * Sets a new orderBy
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\ListViewOrderByType[] $orderBy
     * @return self
     */
    public function setOrderBy(array $orderBy)
    {
        $this->orderBy = $orderBy;
        return $this;
    }

    /**
     * Gets as query
     *
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Sets a new query
     *
     * @param string $query
     * @return self
     */
    public function setQuery($query)
    {
        $this->query = $query;
        return $this;
    }

    /**
     * Gets as relatedEntityId
     *
     * @return string
     */
    public function getRelatedEntityId()
    {
        return $this->relatedEntityId;
    }

    /**
     * Sets a new relatedEntityId
     *
     * @param string $relatedEntityId
     * @return self
     */
    public function setRelatedEntityId($relatedEntityId)
    {
        $this->relatedEntityId = $relatedEntityId;
        return $this;
    }

    /**
     * Gets as scope
     *
     * @return string
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * Sets a new scope
     *
     * @param string $scope
     * @return self
     */
    public function setScope($scope)
    {
        $this->scope = $scope;
        return $this;
    }

    /**
     * Gets as scopeEntityId
     *
     * @return string
     */
    public function getScopeEntityId()
    {
        return $this->scopeEntityId;
    }

    /**
     * Sets a new scopeEntityId
     *
     * @param string $scopeEntityId
     * @return self
     */
    public function setScopeEntityId($scopeEntityId)
    {
        $this->scopeEntityId = $scopeEntityId;
        return $this;
    }

    /**
     * Gets as sobjectType
     *
     * @return string
     */
    public function getSobjectType()
    {
        return $this->sobjectType;
    }

    /**
     * Sets a new sobjectType
     *
     * @param string $sobjectType
     * @return self
     */
    public function setSobjectType($sobjectType)
    {
        $this->sobjectType = $sobjectType;
        return $this;
    }

    /**
     * Gets as whereCondition
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\SoqlWhereConditionType
     */
    public function getWhereCondition()
    {
        return $this->whereCondition;
    }

    /**
     * Sets a new whereCondition
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\SoqlWhereConditionType $whereCondition
     * @return self
     */
    public function setWhereCondition(\GoetasWebservices\Client\SalesforceEnterprise\Types\SoqlWhereConditionType $whereCondition)
    {
        $this->whereCondition = $whereCondition;
        return $this;
    }


}

