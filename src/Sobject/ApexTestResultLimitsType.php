<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing ApexTestResultLimitsType
 *
 *
 * XSD Type: ApexTestResultLimits
 */
class ApexTestResultLimitsType extends SObjectType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ApexTestResultType $apexTestResult
     */
    private $apexTestResult = null;

    /**
     * @property string $apexTestResultId
     */
    private $apexTestResultId = null;

    /**
     * @property int $asyncCalls
     */
    private $asyncCalls = null;

    /**
     * @property int $callouts
     */
    private $callouts = null;

    /**
     * @property int $cpu
     */
    private $cpu = null;

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
     * @property int $dml
     */
    private $dml = null;

    /**
     * @property int $dmlRows
     */
    private $dmlRows = null;

    /**
     * @property int $email
     */
    private $email = null;

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
     * @property string $limitContext
     */
    private $limitContext = null;

    /**
     * @property string $limitExceptions
     */
    private $limitExceptions = null;

    /**
     * @property int $mobilePush
     */
    private $mobilePush = null;

    /**
     * @property int $queryRows
     */
    private $queryRows = null;

    /**
     * @property int $soql
     */
    private $soql = null;

    /**
     * @property int $sosl
     */
    private $sosl = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * Gets as apexTestResult
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ApexTestResultType
     */
    public function getApexTestResult()
    {
        return $this->apexTestResult;
    }

    /**
     * Sets a new apexTestResult
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ApexTestResultType $apexTestResult
     * @return self
     */
    public function setApexTestResult(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\ApexTestResultType $apexTestResult)
    {
        $this->apexTestResult = $apexTestResult;
        return $this;
    }

    /**
     * Gets as apexTestResultId
     *
     * @return string
     */
    public function getApexTestResultId()
    {
        return $this->apexTestResultId;
    }

    /**
     * Sets a new apexTestResultId
     *
     * @param string $apexTestResultId
     * @return self
     */
    public function setApexTestResultId($apexTestResultId)
    {
        $this->apexTestResultId = $apexTestResultId;
        return $this;
    }

    /**
     * Gets as asyncCalls
     *
     * @return int
     */
    public function getAsyncCalls()
    {
        return $this->asyncCalls;
    }

    /**
     * Sets a new asyncCalls
     *
     * @param int $asyncCalls
     * @return self
     */
    public function setAsyncCalls($asyncCalls)
    {
        $this->asyncCalls = $asyncCalls;
        return $this;
    }

    /**
     * Gets as callouts
     *
     * @return int
     */
    public function getCallouts()
    {
        return $this->callouts;
    }

    /**
     * Sets a new callouts
     *
     * @param int $callouts
     * @return self
     */
    public function setCallouts($callouts)
    {
        $this->callouts = $callouts;
        return $this;
    }

    /**
     * Gets as cpu
     *
     * @return int
     */
    public function getCpu()
    {
        return $this->cpu;
    }

    /**
     * Sets a new cpu
     *
     * @param int $cpu
     * @return self
     */
    public function setCpu($cpu)
    {
        $this->cpu = $cpu;
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
     * Gets as dml
     *
     * @return int
     */
    public function getDml()
    {
        return $this->dml;
    }

    /**
     * Sets a new dml
     *
     * @param int $dml
     * @return self
     */
    public function setDml($dml)
    {
        $this->dml = $dml;
        return $this;
    }

    /**
     * Gets as dmlRows
     *
     * @return int
     */
    public function getDmlRows()
    {
        return $this->dmlRows;
    }

    /**
     * Sets a new dmlRows
     *
     * @param int $dmlRows
     * @return self
     */
    public function setDmlRows($dmlRows)
    {
        $this->dmlRows = $dmlRows;
        return $this;
    }

    /**
     * Gets as email
     *
     * @return int
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * @param int $email
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;
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
     * Gets as limitContext
     *
     * @return string
     */
    public function getLimitContext()
    {
        return $this->limitContext;
    }

    /**
     * Sets a new limitContext
     *
     * @param string $limitContext
     * @return self
     */
    public function setLimitContext($limitContext)
    {
        $this->limitContext = $limitContext;
        return $this;
    }

    /**
     * Gets as limitExceptions
     *
     * @return string
     */
    public function getLimitExceptions()
    {
        return $this->limitExceptions;
    }

    /**
     * Sets a new limitExceptions
     *
     * @param string $limitExceptions
     * @return self
     */
    public function setLimitExceptions($limitExceptions)
    {
        $this->limitExceptions = $limitExceptions;
        return $this;
    }

    /**
     * Gets as mobilePush
     *
     * @return int
     */
    public function getMobilePush()
    {
        return $this->mobilePush;
    }

    /**
     * Sets a new mobilePush
     *
     * @param int $mobilePush
     * @return self
     */
    public function setMobilePush($mobilePush)
    {
        $this->mobilePush = $mobilePush;
        return $this;
    }

    /**
     * Gets as queryRows
     *
     * @return int
     */
    public function getQueryRows()
    {
        return $this->queryRows;
    }

    /**
     * Sets a new queryRows
     *
     * @param int $queryRows
     * @return self
     */
    public function setQueryRows($queryRows)
    {
        $this->queryRows = $queryRows;
        return $this;
    }

    /**
     * Gets as soql
     *
     * @return int
     */
    public function getSoql()
    {
        return $this->soql;
    }

    /**
     * Sets a new soql
     *
     * @param int $soql
     * @return self
     */
    public function setSoql($soql)
    {
        $this->soql = $soql;
        return $this;
    }

    /**
     * Gets as sosl
     *
     * @return int
     */
    public function getSosl()
    {
        return $this->sosl;
    }

    /**
     * Sets a new sosl
     *
     * @param int $sosl
     * @return self
     */
    public function setSosl($sosl)
    {
        $this->sosl = $sosl;
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

