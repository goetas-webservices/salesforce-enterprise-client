<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing Query
 */
class Query
{

    /**
     * @property string $queryString
     */
    private $queryString = null;

    /**
     * Gets as queryString
     *
     * @return string
     */
    public function getQueryString()
    {
        return $this->queryString;
    }

    /**
     * Sets a new queryString
     *
     * @param string $queryString
     * @return self
     */
    public function setQueryString($queryString)
    {
        $this->queryString = $queryString;
        return $this;
    }


}

