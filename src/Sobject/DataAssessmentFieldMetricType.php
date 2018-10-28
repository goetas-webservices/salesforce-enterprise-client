<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing DataAssessmentFieldMetricType
 *
 *
 * XSD Type: DataAssessmentFieldMetric
 */
class DataAssessmentFieldMetricType extends SObjectType
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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\DataAssessmentMetricType $dataAssessmentMetric
     */
    private $dataAssessmentMetric = null;

    /**
     * @property string $dataAssessmentMetricId
     */
    private $dataAssessmentMetricId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $dataAssessmentValueMetrics
     */
    private $dataAssessmentValueMetrics = null;

    /**
     * @property string $fieldName
     */
    private $fieldName = null;

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
     * @property int $numMatchedBlanks
     */
    private $numMatchedBlanks = null;

    /**
     * @property int $numMatchedDifferent
     */
    private $numMatchedDifferent = null;

    /**
     * @property int $numMatchedInSync
     */
    private $numMatchedInSync = null;

    /**
     * @property int $numUnmatchedBlanks
     */
    private $numUnmatchedBlanks = null;

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
     * Gets as dataAssessmentMetric
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\DataAssessmentMetricType
     */
    public function getDataAssessmentMetric()
    {
        return $this->dataAssessmentMetric;
    }

    /**
     * Sets a new dataAssessmentMetric
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\DataAssessmentMetricType $dataAssessmentMetric
     * @return self
     */
    public function setDataAssessmentMetric(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\DataAssessmentMetricType $dataAssessmentMetric)
    {
        $this->dataAssessmentMetric = $dataAssessmentMetric;
        return $this;
    }

    /**
     * Gets as dataAssessmentMetricId
     *
     * @return string
     */
    public function getDataAssessmentMetricId()
    {
        return $this->dataAssessmentMetricId;
    }

    /**
     * Sets a new dataAssessmentMetricId
     *
     * @param string $dataAssessmentMetricId
     * @return self
     */
    public function setDataAssessmentMetricId($dataAssessmentMetricId)
    {
        $this->dataAssessmentMetricId = $dataAssessmentMetricId;
        return $this;
    }

    /**
     * Gets as dataAssessmentValueMetrics
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getDataAssessmentValueMetrics()
    {
        return $this->dataAssessmentValueMetrics;
    }

    /**
     * Sets a new dataAssessmentValueMetrics
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $dataAssessmentValueMetrics
     * @return self
     */
    public function setDataAssessmentValueMetrics(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $dataAssessmentValueMetrics)
    {
        $this->dataAssessmentValueMetrics = $dataAssessmentValueMetrics;
        return $this;
    }

    /**
     * Gets as fieldName
     *
     * @return string
     */
    public function getFieldName()
    {
        return $this->fieldName;
    }

    /**
     * Sets a new fieldName
     *
     * @param string $fieldName
     * @return self
     */
    public function setFieldName($fieldName)
    {
        $this->fieldName = $fieldName;
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
     * Gets as numMatchedBlanks
     *
     * @return int
     */
    public function getNumMatchedBlanks()
    {
        return $this->numMatchedBlanks;
    }

    /**
     * Sets a new numMatchedBlanks
     *
     * @param int $numMatchedBlanks
     * @return self
     */
    public function setNumMatchedBlanks($numMatchedBlanks)
    {
        $this->numMatchedBlanks = $numMatchedBlanks;
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
     * Gets as numMatchedInSync
     *
     * @return int
     */
    public function getNumMatchedInSync()
    {
        return $this->numMatchedInSync;
    }

    /**
     * Sets a new numMatchedInSync
     *
     * @param int $numMatchedInSync
     * @return self
     */
    public function setNumMatchedInSync($numMatchedInSync)
    {
        $this->numMatchedInSync = $numMatchedInSync;
        return $this;
    }

    /**
     * Gets as numUnmatchedBlanks
     *
     * @return int
     */
    public function getNumUnmatchedBlanks()
    {
        return $this->numUnmatchedBlanks;
    }

    /**
     * Sets a new numUnmatchedBlanks
     *
     * @param int $numUnmatchedBlanks
     * @return self
     */
    public function setNumUnmatchedBlanks($numUnmatchedBlanks)
    {
        $this->numUnmatchedBlanks = $numUnmatchedBlanks;
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

