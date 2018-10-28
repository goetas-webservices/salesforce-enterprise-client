<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing RetrieveQuickActionTemplates
 */
class RetrieveQuickActionTemplates
{

    /**
     * @property string[] $quickActionNames
     */
    private $quickActionNames = [
        
    ];

    /**
     * @property string $contextId
     */
    private $contextId = null;

    /**
     * Adds as quickActionNames
     *
     * @return self
     * @param string $quickActionNames
     */
    public function addToQuickActionNames($quickActionNames)
    {
        $this->quickActionNames[] = $quickActionNames;
        return $this;
    }

    /**
     * isset quickActionNames
     *
     * @param int|string $index
     * @return bool
     */
    public function issetQuickActionNames($index)
    {
        return isset($this->quickActionNames[$index]);
    }

    /**
     * unset quickActionNames
     *
     * @param int|string $index
     * @return void
     */
    public function unsetQuickActionNames($index)
    {
        unset($this->quickActionNames[$index]);
    }

    /**
     * Gets as quickActionNames
     *
     * @return string[]
     */
    public function getQuickActionNames()
    {
        return $this->quickActionNames;
    }

    /**
     * Sets a new quickActionNames
     *
     * @param string[] $quickActionNames
     * @return self
     */
    public function setQuickActionNames(array $quickActionNames)
    {
        $this->quickActionNames = $quickActionNames;
        return $this;
    }

    /**
     * Gets as contextId
     *
     * @return string
     */
    public function getContextId()
    {
        return $this->contextId;
    }

    /**
     * Sets a new contextId
     *
     * @param string $contextId
     * @return self
     */
    public function setContextId($contextId)
    {
        $this->contextId = $contextId;
        return $this;
    }


}

