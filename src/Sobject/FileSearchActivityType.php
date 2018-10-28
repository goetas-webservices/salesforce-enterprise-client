<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing FileSearchActivityType
 *
 *
 * XSD Type: FileSearchActivity
 */
class FileSearchActivityType extends SObjectType
{

    /**
     * @property float $avgNumResults
     */
    private $avgNumResults = null;

    /**
     * @property float $clickRank
     */
    private $clickRank = null;

    /**
     * @property int $countQueries
     */
    private $countQueries = null;

    /**
     * @property int $countUsers
     */
    private $countUsers = null;

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
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $period
     */
    private $period = null;

    /**
     * @property \DateTime $queryDate
     */
    private $queryDate = null;

    /**
     * @property string $queryLanguage
     */
    private $queryLanguage = null;

    /**
     * @property string $searchTerm
     */
    private $searchTerm = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserRecordAccessType $userRecordAccess
     */
    private $userRecordAccess = null;

    /**
     * Gets as avgNumResults
     *
     * @return float
     */
    public function getAvgNumResults()
    {
        return $this->avgNumResults;
    }

    /**
     * Sets a new avgNumResults
     *
     * @param float $avgNumResults
     * @return self
     */
    public function setAvgNumResults($avgNumResults)
    {
        $this->avgNumResults = $avgNumResults;
        return $this;
    }

    /**
     * Gets as clickRank
     *
     * @return float
     */
    public function getClickRank()
    {
        return $this->clickRank;
    }

    /**
     * Sets a new clickRank
     *
     * @param float $clickRank
     * @return self
     */
    public function setClickRank($clickRank)
    {
        $this->clickRank = $clickRank;
        return $this;
    }

    /**
     * Gets as countQueries
     *
     * @return int
     */
    public function getCountQueries()
    {
        return $this->countQueries;
    }

    /**
     * Sets a new countQueries
     *
     * @param int $countQueries
     * @return self
     */
    public function setCountQueries($countQueries)
    {
        $this->countQueries = $countQueries;
        return $this;
    }

    /**
     * Gets as countUsers
     *
     * @return int
     */
    public function getCountUsers()
    {
        return $this->countUsers;
    }

    /**
     * Sets a new countUsers
     *
     * @param int $countUsers
     * @return self
     */
    public function setCountUsers($countUsers)
    {
        $this->countUsers = $countUsers;
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
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as period
     *
     * @return string
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * @param string $period
     * @return self
     */
    public function setPeriod($period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Gets as queryDate
     *
     * @return \DateTime
     */
    public function getQueryDate()
    {
        return $this->queryDate;
    }

    /**
     * Sets a new queryDate
     *
     * @param \DateTime $queryDate
     * @return self
     */
    public function setQueryDate(\DateTime $queryDate)
    {
        $this->queryDate = $queryDate;
        return $this;
    }

    /**
     * Gets as queryLanguage
     *
     * @return string
     */
    public function getQueryLanguage()
    {
        return $this->queryLanguage;
    }

    /**
     * Sets a new queryLanguage
     *
     * @param string $queryLanguage
     * @return self
     */
    public function setQueryLanguage($queryLanguage)
    {
        $this->queryLanguage = $queryLanguage;
        return $this;
    }

    /**
     * Gets as searchTerm
     *
     * @return string
     */
    public function getSearchTerm()
    {
        return $this->searchTerm;
    }

    /**
     * Sets a new searchTerm
     *
     * @param string $searchTerm
     * @return self
     */
    public function setSearchTerm($searchTerm)
    {
        $this->searchTerm = $searchTerm;
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

    /**
     * Gets as userRecordAccess
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserRecordAccessType
     */
    public function getUserRecordAccess()
    {
        return $this->userRecordAccess;
    }

    /**
     * Sets a new userRecordAccess
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserRecordAccessType $userRecordAccess
     * @return self
     */
    public function setUserRecordAccess(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserRecordAccessType $userRecordAccess)
    {
        $this->userRecordAccess = $userRecordAccess;
        return $this;
    }


}

