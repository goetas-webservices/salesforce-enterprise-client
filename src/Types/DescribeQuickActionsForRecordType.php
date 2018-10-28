<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribeQuickActionsForRecordType
 */
class DescribeQuickActionsForRecordType
{

    /**
     * @property string[] $quickActions
     */
    private $quickActions = [
        
    ];

    /**
     * @property string $recordTypeId
     */
    private $recordTypeId = null;

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

    /**
     * Gets as recordTypeId
     *
     * @return string
     */
    public function getRecordTypeId()
    {
        return $this->recordTypeId;
    }

    /**
     * Sets a new recordTypeId
     *
     * @param string $recordTypeId
     * @return self
     */
    public function setRecordTypeId($recordTypeId)
    {
        $this->recordTypeId = $recordTypeId;
        return $this;
    }


}

