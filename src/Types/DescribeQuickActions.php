<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribeQuickActions
 */
class DescribeQuickActions
{

    /**
     * @property string[] $quickActions
     */
    private $quickActions = [
        
    ];

    /**
     * Adds as quickActions
     *
     * @return self
     * @param string $quickActions
     */
    public function addToQuickActions($quickActions)
    {
        $this->quickActions[] = $quickActions;
        return $this;
    }

    /**
     * isset quickActions
     *
     * @param int|string $index
     * @return bool
     */
    public function issetQuickActions($index)
    {
        return isset($this->quickActions[$index]);
    }

    /**
     * unset quickActions
     *
     * @param int|string $index
     * @return void
     */
    public function unsetQuickActions($index)
    {
        unset($this->quickActions[$index]);
    }

    /**
     * Gets as quickActions
     *
     * @return string[]
     */
    public function getQuickActions()
    {
        return $this->quickActions;
    }

    /**
     * Sets a new quickActions
     *
     * @param string[] $quickActions
     * @return self
     */
    public function setQuickActions(array $quickActions)
    {
        $this->quickActions = $quickActions;
        return $this;
    }


}

