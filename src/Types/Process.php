<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing Process
 */
class Process
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\ProcessRequestType[] $actions
     */
    private $actions = [
        
    ];

    /**
     * Adds as actions
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\ProcessRequestType $actions
     */
    public function addToActions(\GoetasWebservices\Client\SalesforceEnterprise\Types\ProcessRequestType $actions)
    {
        $this->actions[] = $actions;
        return $this;
    }

    /**
     * isset actions
     *
     * @param int|string $index
     * @return bool
     */
    public function issetActions($index)
    {
        return isset($this->actions[$index]);
    }

    /**
     * unset actions
     *
     * @param int|string $index
     * @return void
     */
    public function unsetActions($index)
    {
        unset($this->actions[$index]);
    }

    /**
     * Gets as actions
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\ProcessRequestType[]
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * Sets a new actions
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\ProcessRequestType[] $actions
     * @return self
     */
    public function setActions(array $actions)
    {
        $this->actions = $actions;
        return $this;
    }


}

