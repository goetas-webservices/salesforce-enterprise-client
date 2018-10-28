<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing RetrieveMassQuickActionTemplates
 */
class RetrieveMassQuickActionTemplates
{

    /**
     * @property string $quickActionName
     */
    private $quickActionName = null;

    /**
     * @property string[] $contextIds
     */
    private $contextIds = [
        
    ];

    /**
     * Gets as quickActionName
     *
     * @return string
     */
    public function getQuickActionName()
    {
        return $this->quickActionName;
    }

    /**
     * Sets a new quickActionName
     *
     * @param string $quickActionName
     * @return self
     */
    public function setQuickActionName($quickActionName)
    {
        $this->quickActionName = $quickActionName;
        return $this;
    }

    /**
     * Adds as contextIds
     *
     * @return self
     * @param string $contextIds
     */
    public function addToContextIds($contextIds)
    {
        $this->contextIds[] = $contextIds;
        return $this;
    }

    /**
     * isset contextIds
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContextIds($index)
    {
        return isset($this->contextIds[$index]);
    }

    /**
     * unset contextIds
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContextIds($index)
    {
        unset($this->contextIds[$index]);
    }

    /**
     * Gets as contextIds
     *
     * @return string[]
     */
    public function getContextIds()
    {
        return $this->contextIds;
    }

    /**
     * Sets a new contextIds
     *
     * @param string $contextIds
     * @return self
     */
    public function setContextIds(array $contextIds)
    {
        $this->contextIds = $contextIds;
        return $this;
    }


}

