<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribeSearchableEntities
 */
class DescribeSearchableEntities
{

    /**
     * @property bool $includeOnlyEntitiesWithTabs
     */
    private $includeOnlyEntitiesWithTabs = null;

    /**
     * Gets as includeOnlyEntitiesWithTabs
     *
     * @return bool
     */
    public function getIncludeOnlyEntitiesWithTabs()
    {
        return $this->includeOnlyEntitiesWithTabs;
    }

    /**
     * Sets a new includeOnlyEntitiesWithTabs
     *
     * @param bool $includeOnlyEntitiesWithTabs
     * @return self
     */
    public function setIncludeOnlyEntitiesWithTabs($includeOnlyEntitiesWithTabs)
    {
        $this->includeOnlyEntitiesWithTabs = $includeOnlyEntitiesWithTabs;
        return $this;
    }


}

