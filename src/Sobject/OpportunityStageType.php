<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing OpportunityStageType
 *
 *
 * XSD Type: OpportunityStage
 */
class OpportunityStageType extends SObjectType
{

    /**
     * @property string $apiName
     */
    private $apiName = null;

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
     * @property float $defaultProbability
     */
    private $defaultProbability = null;

    /**
     * @property string $description
     */
    private $description = null;

    /**
     * @property string $forecastCategory
     */
    private $forecastCategory = null;

    /**
     * @property string $forecastCategoryName
     */
    private $forecastCategoryName = null;

    /**
     * @property bool $isActive
     */
    private $isActive = null;

    /**
     * @property bool $isClosed
     */
    private $isClosed = null;

    /**
     * @property bool $isWon
     */
    private $isWon = null;

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
     * @property string $masterLabel
     */
    private $masterLabel = null;

    /**
     * @property int $sortOrder
     */
    private $sortOrder = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * Gets as apiName
     *
     * @return string
     */
    public function getApiName()
    {
        return $this->apiName;
    }

    /**
     * Sets a new apiName
     *
     * @param string $apiName
     * @return self
     */
    public function setApiName($apiName)
    {
        $this->apiName = $apiName;
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
     * Gets as defaultProbability
     *
     * @return float
     */
    public function getDefaultProbability()
    {
        return $this->defaultProbability;
    }

    /**
     * Sets a new defaultProbability
     *
     * @param float $defaultProbability
     * @return self
     */
    public function setDefaultProbability($defaultProbability)
    {
        $this->defaultProbability = $defaultProbability;
        return $this;
    }

    /**
     * Gets as description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
     * Gets as forecastCategoryName
     *
     * @return string
     */
    public function getForecastCategoryName()
    {
        return $this->forecastCategoryName;
    }

    /**
     * Sets a new forecastCategoryName
     *
     * @param string $forecastCategoryName
     * @return self
     */
    public function setForecastCategoryName($forecastCategoryName)
    {
        $this->forecastCategoryName = $forecastCategoryName;
        return $this;
    }

    /**
     * Gets as isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Sets a new isActive
     *
     * @param bool $isActive
     * @return self
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * Gets as isClosed
     *
     * @return bool
     */
    public function getIsClosed()
    {
        return $this->isClosed;
    }

    /**
     * Sets a new isClosed
     *
     * @param bool $isClosed
     * @return self
     */
    public function setIsClosed($isClosed)
    {
        $this->isClosed = $isClosed;
        return $this;
    }

    /**
     * Gets as isWon
     *
     * @return bool
     */
    public function getIsWon()
    {
        return $this->isWon;
    }

    /**
     * Sets a new isWon
     *
     * @param bool $isWon
     * @return self
     */
    public function setIsWon($isWon)
    {
        $this->isWon = $isWon;
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
     * Gets as masterLabel
     *
     * @return string
     */
    public function getMasterLabel()
    {
        return $this->masterLabel;
    }

    /**
     * Sets a new masterLabel
     *
     * @param string $masterLabel
     * @return self
     */
    public function setMasterLabel($masterLabel)
    {
        $this->masterLabel = $masterLabel;
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

