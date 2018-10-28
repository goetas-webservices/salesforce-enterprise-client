<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing AssignmentRuleHeader
 */
class AssignmentRuleHeader
{

    /**
     * @property string $assignmentRuleId
     */
    private $assignmentRuleId = null;

    /**
     * @property bool $useDefaultRule
     */
    private $useDefaultRule = null;

    /**
     * Gets as assignmentRuleId
     *
     * @return string
     */
    public function getAssignmentRuleId()
    {
        return $this->assignmentRuleId;
    }

    /**
     * Sets a new assignmentRuleId
     *
     * @param string $assignmentRuleId
     * @return self
     */
    public function setAssignmentRuleId($assignmentRuleId)
    {
        $this->assignmentRuleId = $assignmentRuleId;
        return $this;
    }

    /**
     * Gets as useDefaultRule
     *
     * @return bool
     */
    public function getUseDefaultRule()
    {
        return $this->useDefaultRule;
    }

    /**
     * Sets a new useDefaultRule
     *
     * @param bool $useDefaultRule
     * @return self
     */
    public function setUseDefaultRule($useDefaultRule)
    {
        $this->useDefaultRule = $useDefaultRule;
        return $this;
    }


}

