<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing MatchingRuleItemType
 *
 *
 * XSD Type: MatchingRuleItem
 */
class MatchingRuleItemType extends SObjectType
{

    /**
     * @property string $blankValueBehavior
     */
    private $blankValueBehavior = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $createdBy
     */
    private $createdBy = null;

    /**
     * @property string $createdById
     */
    private $createdById = null;

    /**
     * @property \DateTime $createdDate
     */
    private $createdDate = null;

    /**
     * @property string $field
     */
    private $field = null;

    /**
     * @property bool $isDeleted
     */
    private $isDeleted = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $lastModifiedBy
     */
    private $lastModifiedBy = null;

    /**
     * @property string $lastModifiedById
     */
    private $lastModifiedById = null;

    /**
     * @property \DateTime $lastModifiedDate
     */
    private $lastModifiedDate = null;

    /**
     * @property string $matchingMethod
     */
    private $matchingMethod = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\MatchingRuleType $matchingRule
     */
    private $matchingRule = null;

    /**
     * @property string $matchingRuleId
     */
    private $matchingRuleId = null;

    /**
     * @property int $sortOrder
     */
    private $sortOrder = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * Gets as blankValueBehavior
     *
     * @return string
     */
    public function getBlankValueBehavior()
    {
        return $this->blankValueBehavior;
    }

    /**
     * Sets a new blankValueBehavior
     *
     * @param string $blankValueBehavior
     * @return self
     */
    public function setBlankValueBehavior($blankValueBehavior)
    {
        $this->blankValueBehavior = $blankValueBehavior;
        return $this;
    }

    /**
     * Gets as createdBy
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Sets a new createdBy
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $createdBy
     * @return self
     */
    public function setCreatedBy(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $createdBy)
    {
        $this->createdBy = $createdBy;
        return $this;
    }

    /**
     * Gets as createdById
     *
     * @return string
     */
    public function getCreatedById()
    {
        return $this->createdById;
    }

    /**
     * Sets a new createdById
     *
     * @param string $createdById
     * @return self
     */
    public function setCreatedById($createdById)
    {
        $this->createdById = $createdById;
        return $this;
    }

    /**
     * Gets as createdDate
     *
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * Sets a new createdDate
     *
     * @param \DateTime $createdDate
     * @return self
     */
    public function setCreatedDate(\DateTime $createdDate)
    {
        $this->createdDate = $createdDate;
        return $this;
    }

    /**
     * Gets as field
     *
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * Sets a new field
     *
     * @param string $field
     * @return self
     */
    public function setField($field)
    {
        $this->field = $field;
        return $this;
    }

    /**
     * Gets as isDeleted
     *
     * @return bool
     */
    public function getIsDeleted()
    {
        return $this->isDeleted;
    }

    /**
     * Sets a new isDeleted
     *
     * @param bool $isDeleted
     * @return self
     */
    public function setIsDeleted($isDeleted)
    {
        $this->isDeleted = $isDeleted;
        return $this;
    }

    /**
     * Gets as lastModifiedBy
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType
     */
    public function getLastModifiedBy()
    {
        return $this->lastModifiedBy;
    }

    /**
     * Sets a new lastModifiedBy
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $lastModifiedBy
     * @return self
     */
    public function setLastModifiedBy(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $lastModifiedBy)
    {
        $this->lastModifiedBy = $lastModifiedBy;
        return $this;
    }

    /**
     * Gets as lastModifiedById
     *
     * @return string
     */
    public function getLastModifiedById()
    {
        return $this->lastModifiedById;
    }

    /**
     * Sets a new lastModifiedById
     *
     * @param string $lastModifiedById
     * @return self
     */
    public function setLastModifiedById($lastModifiedById)
    {
        $this->lastModifiedById = $lastModifiedById;
        return $this;
    }

    /**
     * Gets as lastModifiedDate
     *
     * @return \DateTime
     */
    public function getLastModifiedDate()
    {
        return $this->lastModifiedDate;
    }

    /**
     * Sets a new lastModifiedDate
     *
     * @param \DateTime $lastModifiedDate
     * @return self
     */
    public function setLastModifiedDate(\DateTime $lastModifiedDate)
    {
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }

    /**
     * Gets as matchingMethod
     *
     * @return string
     */
    public function getMatchingMethod()
    {
        return $this->matchingMethod;
    }

    /**
     * Sets a new matchingMethod
     *
     * @param string $matchingMethod
     * @return self
     */
    public function setMatchingMethod($matchingMethod)
    {
        $this->matchingMethod = $matchingMethod;
        return $this;
    }

    /**
     * Gets as matchingRule
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\MatchingRuleType
     */
    public function getMatchingRule()
    {
        return $this->matchingRule;
    }

    /**
     * Sets a new matchingRule
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\MatchingRuleType $matchingRule
     * @return self
     */
    public function setMatchingRule(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\MatchingRuleType $matchingRule)
    {
        $this->matchingRule = $matchingRule;
        return $this;
    }

    /**
     * Gets as matchingRuleId
     *
     * @return string
     */
    public function getMatchingRuleId()
    {
        return $this->matchingRuleId;
    }

    /**
     * Sets a new matchingRuleId
     *
     * @param string $matchingRuleId
     * @return self
     */
    public function setMatchingRuleId($matchingRuleId)
    {
        $this->matchingRuleId = $matchingRuleId;
        return $this;
    }

    /**
     * Gets as sortOrder
     *
     * @return int
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * Sets a new sortOrder
     *
     * @param int $sortOrder
     * @return self
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;
        return $this;
    }

    /**
     * Gets as systemModstamp
     *
     * @return \DateTime
     */
    public function getSystemModstamp()
    {
        return $this->systemModstamp;
    }

    /**
     * Sets a new systemModstamp
     *
     * @param \DateTime $systemModstamp
     * @return self
     */
    public function setSystemModstamp(\DateTime $systemModstamp)
    {
        $this->systemModstamp = $systemModstamp;
        return $this;
    }


}

