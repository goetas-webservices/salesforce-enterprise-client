<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribeSObjectListViews
 */
class DescribeSObjectListViews
{

    /**
     * @property string $sObjectType
     */
    private $sObjectType = null;

    /**
     * @property bool $recentsOnly
     */
    private $recentsOnly = null;

    /**
     * @property string $isSoqlCompatible
     */
    private $isSoqlCompatible = null;

    /**
     * @property int $limit
     */
    private $limit = null;

    /**
     * @property int $offset
     */
    private $offset = null;

    /**
     * Gets as sObjectType
     *
     * @return string
     */
    public function getSObjectType()
    {
        return $this->sObjectType;
    }

    /**
     * Sets a new sObjectType
     *
     * @param string $sObjectType
     * @return self
     */
    public function setSObjectType($sObjectType)
    {
        $this->sObjectType = $sObjectType;
        return $this;
    }

    /**
     * Gets as recentsOnly
     *
     * @return bool
     */
    public function getRecentsOnly()
    {
        return $this->recentsOnly;
    }

    /**
     * Sets a new recentsOnly
     *
     * @param bool $recentsOnly
     * @return self
     */
    public function setRecentsOnly($recentsOnly)
    {
        $this->recentsOnly = $recentsOnly;
        return $this;
    }

    /**
     * Gets as isSoqlCompatible
     *
     * @return string
     */
    public function getIsSoqlCompatible()
    {
        return $this->isSoqlCompatible;
    }

    /**
     * Sets a new isSoqlCompatible
     *
     * @param string $isSoqlCompatible
     * @return self
     */
    public function setIsSoqlCompatible($isSoqlCompatible)
    {
        $this->isSoqlCompatible = $isSoqlCompatible;
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


}

