<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing ApexTestSuiteType
 *
 *
 * XSD Type: ApexTestSuite
 */
class ApexTestSuiteType extends SObjectType
{

    /**
     * @property string[] $apexClassIds
     */
    private $apexClassIds = [
        
    ];

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $apexClassJunctions
     */
    private $apexClassJunctions = null;

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
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property string $testSuiteName
     */
    private $testSuiteName = null;

    /**
     * Adds as apexClassIds
     *
     * @return self
     * @param string $apexClassIds
     */
    public function addToApexClassIds($apexClassIds)
    {
        $this->apexClassIds[] = $apexClassIds;
        return $this;
    }

    /**
     * isset apexClassIds
     *
     * @param int|string $index
     * @return bool
     */
    public function issetApexClassIds($index)
    {
        return isset($this->apexClassIds[$index]);
    }

    /**
     * unset apexClassIds
     *
     * @param int|string $index
     * @return void
     */
    public function unsetApexClassIds($index)
    {
        unset($this->apexClassIds[$index]);
    }

    /**
     * Gets as apexClassIds
     *
     * @return string[]
     */
    public function getApexClassIds()
    {
        return $this->apexClassIds;
    }

    /**
     * Sets a new apexClassIds
     *
     * @param string $apexClassIds
     * @return self
     */
    public function setApexClassIds(array $apexClassIds)
    {
        $this->apexClassIds = $apexClassIds;
        return $this;
    }

    /**
     * Gets as apexClassJunctions
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getApexClassJunctions()
    {
        return $this->apexClassJunctions;
    }

    /**
     * Sets a new apexClassJunctions
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $apexClassJunctions
     * @return self
     */
    public function setApexClassJunctions(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $apexClassJunctions)
    {
        $this->apexClassJunctions = $apexClassJunctions;
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
     * Gets as testSuiteName
     *
     * @return string
     */
    public function getTestSuiteName()
    {
        return $this->testSuiteName;
    }

    /**
     * Sets a new testSuiteName
     *
     * @param string $testSuiteName
     * @return self
     */
    public function setTestSuiteName($testSuiteName)
    {
        $this->testSuiteName = $testSuiteName;
        return $this;
    }


}

