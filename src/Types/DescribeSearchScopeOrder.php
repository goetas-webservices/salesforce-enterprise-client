<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribeSearchScopeOrder
 */
class DescribeSearchScopeOrder
{

    /**
     * @property bool $includeRealTimeEntities
     */
    private $includeRealTimeEntities = null;

    /**
     * Gets as includeRealTimeEntities
     *
     * @return bool
     */
    public function getIncludeRealTimeEntities()
    {
        return $this->includeRealTimeEntities;
    }

    /**
     * Sets a new includeRealTimeEntities
     *
     * @param bool $includeRealTimeEntities
     * @return self
     */
    public function setIncludeRealTimeEntities($includeRealTimeEntities)
    {
        $this->includeRealTimeEntities = $includeRealTimeEntities;
        return $this;
    }


}

