<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing ExecuteListViewRequestType
 *
 *
 * XSD Type: ExecuteListViewRequest
 */
class ExecuteListViewRequestType
{

    /**
     * @property string $developerNameOrId
     */
    private $developerNameOrId = null;

    /**
     * @property int $limit
     */
    private $limit = null;

    /**
     * @property int $offset
     */
    private $offset = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\ListViewOrderByType[] $orderBy
     */
    private $orderBy = [
        
    ];

    /**
     * @property string $sobjectType
     */
    private $sobjectType = null;

    /**
     * Gets as developerNameOrId
     *
     * @return string
     */
    public function getDeveloperNameOrId()
    {
        return $this->developerNameOrId;
    }

    /**
     * Sets a new developerNameOrId
     *
     * @param string $developerNameOrId
     * @return self
     */
    public function setDeveloperNameOrId($developerNameOrId)
    {
        $this->developerNameOrId = $developerNameOrId;
        return $this;
    }

    /**
     * Gets as limit
     *
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * Sets a new limit
     *
     * @param int $limit
     * @return self
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
        return $this;
    }

    /**
     * Gets as offset
     *
     * @return int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * Sets a new offset
     *
     * @param int $offset
     * @return self
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;
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


}

