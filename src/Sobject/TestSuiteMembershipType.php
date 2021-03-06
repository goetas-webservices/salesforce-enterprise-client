<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing TestSuiteMembershipType
 *
 *
 * XSD Type: TestSuiteMembership
 */
class TestSuiteMembershipType extends SObjectType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ApexClassType $apexClass
     */
    private $apexClass = null;

    /**
     * @property string $apexClassId
     */
    private $apexClassId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ApexTestSuiteType $apexTestSuite
     */
    private $apexTestSuite = null;

    /**
     * @property string $apexTestSuiteId
     */
    private $apexTestSuiteId = null;

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
     * Gets as apexClass
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ApexClassType
     */
    public function getApexClass()
    {
        return $this->apexClass;
    }

    /**
     * Sets a new apexClass
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ApexClassType $apexClass
     * @return self
     */
    public function setApexClass(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\ApexClassType $apexClass)
    {
        $this->apexClass = $apexClass;
        return $this;
    }

    /**
     * Gets as apexClassId
     *
     * @return string
     */
    public function getApexClassId()
    {
        return $this->apexClassId;
    }

    /**
     * Sets a new apexClassId
     *
     * @param string $apexClassId
     * @return self
     */
    public function setApexClassId($apexClassId)
    {
        $this->apexClassId = $apexClassId;
        return $this;
    }

    /**
     * Gets as apexTestSuite
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ApexTestSuiteType
     */
    public function getApexTestSuite()
    {
        return $this->apexTestSuite;
    }

    /**
     * Sets a new apexTestSuite
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ApexTestSuiteType $apexTestSuite
     * @return self
     */
    public function setApexTestSuite(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\ApexTestSuiteType $apexTestSuite)
    {
        $this->apexTestSuite = $apexTestSuite;
        return $this;
    }

    /**
     * Gets as apexTestSuiteId
     *
     * @return string
     */
    public function getApexTestSuiteId()
    {
        return $this->apexTestSuiteId;
    }

    /**
     * Sets a new apexTestSuiteId
     *
     * @param string $apexTestSuiteId
     * @return self
     */
    public function setApexTestSuiteId($apexTestSuiteId)
    {
        $this->apexTestSuiteId = $apexTestSuiteId;
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


}

