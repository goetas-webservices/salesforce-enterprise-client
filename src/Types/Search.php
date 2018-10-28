<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing Search
 */
class Search
{

    /**
     * @property string $searchString
     */
    private $searchString = null;

    /**
     * Gets as searchString
     *
     * @return string
     */
    public function getSearchString()
    {
        return $this->searchString;
    }

    /**
     * Sets a new searchString
     *
     * @param string $searchString
     * @return self
     */
    public function setSearchString($searchString)
    {
        $this->searchString = $searchString;
        return $this;
    }


}

