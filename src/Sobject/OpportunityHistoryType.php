<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing OpportunityHistoryType
 *
 *
 * XSD Type: OpportunityHistory
 */
class OpportunityHistoryType extends SObjectType
{

    /**
     * @property float $amount
     */
    private $amount = null;

    /**
     * @property \DateTime $closeDate
     */
    private $closeDate = null;

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
     * @property float $expectedRevenue
     */
    private $expectedRevenue = null;

    /**
     * @property string $forecastCategory
     */
    private $forecastCategory = null;

    /**
     * @property bool $isDeleted
     */
    private $isDeleted = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\OpportunityType $opportunity
     */
    private $opportunity = null;

    /**
     * @property string $opportunityId
     */
    private $opportunityId = null;

    /**
     * @property float $probability
     */
    private $probability = null;

    /**
     * @property string $stageName
     */
    private $stageName = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * Gets as amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * @param float $amount
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Gets as closeDate
     *
     * @return \DateTime
     */
    public function getCloseDate()
    {
        return $this->closeDate;
    }

    /**
     * Sets a new closeDate
     *
     * @param \DateTime $closeDate
     * @return self
     */
    public function setCloseDate(\DateTime $closeDate)
    {
        $this->closeDate = $closeDate;
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
     * Gets as expectedRevenue
     *
     * @return float
     */
    public function getExpectedRevenue()
    {
        return $this->expectedRevenue;
    }

    /**
     * Sets a new expectedRevenue
     *
     * @param float $expectedRevenue
     * @return self
     */
    public function setExpectedRevenue($expectedRevenue)
    {
        $this->expectedRevenue = $expectedRevenue;
        return $this;
    }

    /**
     * Gets as forecastCategory
     *
     * @return string
     */
    public function getForecastCategory()
    {
        return $this->forecastCategory;
    }

    /**
     * Sets a new forecastCategory
     *
     * @param string $forecastCategory
     * @return self
     */
    public function setForecastCategory($forecastCategory)
    {
        $this->forecastCategory = $forecastCategory;
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
     * Gets as opportunity
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\OpportunityType
     */
    public function getOpportunity()
    {
        return $this->opportunity;
    }

    /**
     * Sets a new opportunity
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\OpportunityType $opportunity
     * @return self
     */
    public function setOpportunity(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\OpportunityType $opportunity)
    {
        $this->opportunity = $opportunity;
        return $this;
    }

    /**
     * Gets as opportunityId
     *
     * @return string
     */
    public function getOpportunityId()
    {
        return $this->opportunityId;
    }

    /**
     * Sets a new opportunityId
     *
     * @param string $opportunityId
     * @return self
     */
    public function setOpportunityId($opportunityId)
    {
        $this->opportunityId = $opportunityId;
        return $this;
    }

    /**
     * Gets as probability
     *
     * @return float
     */
    public function getProbability()
    {
        return $this->probability;
    }

    /**
     * Sets a new probability
     *
     * @param float $probability
     * @return self
     */
    public function setProbability($probability)
    {
        $this->probability = $probability;
        return $this;
    }

    /**
     * Gets as stageName
     *
     * @return string
     */
    public function getStageName()
    {
        return $this->stageName;
    }

    /**
     * Sets a new stageName
     *
     * @param string $stageName
     * @return self
     */
    public function setStageName($stageName)
    {
        $this->stageName = $stageName;
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

