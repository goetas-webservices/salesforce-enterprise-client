<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing LimitInfoType
 *
 *
 * XSD Type: LimitInfo
 */
class LimitInfoType
{

    /**
     * @property int $current
     */
    private $current = null;

    /**
     * @property int $limit
     */
    private $limit = null;

    /**
     * @property string $type
     */
    private $type = null;

    /**
     * Gets as current
     *
     * @return int
     */
    public function getCurrent()
    {
        return $this->current;
    }

    /**
     * Sets a new current
     *
     * @param int $current
     * @return self
     */
    public function setCurrent($current)
    {
        $this->current = $current;
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

