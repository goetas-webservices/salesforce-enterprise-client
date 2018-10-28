<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing PerformQuickActions
 */
class PerformQuickActions
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\PerformQuickActionRequestType[] $quickActions
     */
    private $quickActions = [
        
    ];

    /**
     * Adds as quickActions
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\PerformQuickActionRequestType $quickActions
     */
    public function addToQuickActions(\GoetasWebservices\Client\SalesforceEnterprise\Types\PerformQuickActionRequestType $quickActions)
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
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\PerformQuickActionRequestType[]
     */
    public function getQuickActions()
    {
        return $this->quickActions;
    }

    /**
     * Sets a new quickActions
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\PerformQuickActionRequestType[] $quickActions
     * @return self
     */
    public function setQuickActions(array $quickActions)
    {
        $this->quickActions = $quickActions;
        return $this;
    }


}

