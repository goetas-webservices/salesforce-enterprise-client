<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing DataAssessmentMetricType
 *
 *
 * XSD Type: DataAssessmentMetric
 */
class DataAssessmentMetricType extends SObjectType
{

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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $dataAssessmentMetrics
     */
    private $dataAssessmentMetrics = null;

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
     * @property int $numDuplicates
     */
    private $numDuplicates = null;

    /**
     * @property int $numMatched
     */
    private $numMatched = null;

    /**
     * @property int $numMatchedDifferent
     */
    private $numMatchedDifferent = null;

    /**
     * @property int $numProcessed
     */
    private $numProcessed = null;

    /**
     * @property int $numTotal
     */
    private $numTotal = null;

    /**
     * @property int $numUnmatched
     */
    private $numUnmatched = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserRecordAccessType $userRecordAccess
     */
    private $userRecordAccess = null;

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
     * Gets as dataAssessmentMetrics
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getDataAssessmentMetrics()
    {
        return $this->dataAssessmentMetrics;
    }

    /**
     * Sets a new dataAssessmentMetrics
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $dataAssessmentMetrics
     * @return self
     */
    public function setDataAssessmentMetrics(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $dataAssessmentMetrics)
    {
        $this->dataAssessmentMetrics = $dataAssessmentMetrics;
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
     * Gets as numDuplicates
     *
     * @return int
     */
    public function getNumDuplicates()
    {
        return $this->numDuplicates;
    }

    /**
     * Sets a new numDuplicates
     *
     * @param int $numDuplicates
     * @return self
     */
    public function setNumDuplicates($numDuplicates)
    {
        $this->numDuplicates = $numDuplicates;
        return $this;
    }

    /**
     * Gets as numMatched
     *
     * @return int
     */
    public function getNumMatched()
    {
        return $this->numMatched;
    }

    /**
     * Sets a new numMatched
     *
     * @param int $numMatched
     * @return self
     */
    public function setNumMatched($numMatched)
    {
        $this->numMatched = $numMatched;
        return $this;
    }

    /**
     * Gets as numMatchedDifferent
     *
     * @return int
     */
    public function getNumMatchedDifferent()
    {
        return $this->numMatchedDifferent;
    }

    /**
     * Sets a new numMatchedDifferent
     *
     * @param int $numMatchedDifferent
     * @return self
     */
    public function setNumMatchedDifferent($numMatchedDifferent)
    {
        $this->numMatchedDifferent = $numMatchedDifferent;
        return $this;
    }

    /**
     * Gets as numProcessed
     *
     * @return int
     */
    public function getNumProcessed()
    {
        return $this->numProcessed;
    }

    /**
     * Sets a new numProcessed
     *
     * @param int $numProcessed
     * @return self
     */
    public function setNumProcessed($numProcessed)
    {
        $this->numProcessed = $numProcessed;
        return $this;
    }

    /**
     * Gets as numTotal
     *
     * @return int
     */
    public function getNumTotal()
    {
        return $this->numTotal;
    }

    /**
     * Sets a new numTotal
     *
     * @param int $numTotal
     * @return self
     */
    public function setNumTotal($numTotal)
    {
        $this->numTotal = $numTotal;
        return $this;
    }

    /**
     * Gets as numUnmatched
     *
     * @return int
     */
    public function getNumUnmatched()
    {
        return $this->numUnmatched;
    }

    /**
     * Sets a new numUnmatched
     *
     * @param int $numUnmatched
     * @return self
     */
    public function setNumUnmatched($numUnmatched)
    {
        $this->numUnmatched = $numUnmatched;
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

