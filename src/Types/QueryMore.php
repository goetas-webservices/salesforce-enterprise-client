<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing QueryMore
 */
class QueryMore
{

    /**
     * @property string $queryLocator
     */
    private $queryLocator = null;

    /**
     * Gets as queryLocator
     *
     * @return string
     */
    public function getQueryLocator()
    {
        return $this->queryLocator;
    }

    /**
     * Sets a new queryLocator
     *
     * @param string $queryLocator
     * @return self
     */
    public function setQueryLocator($queryLocator)
    {
        $this->queryLocator = $queryLocator;
        return $this;
    }


}

