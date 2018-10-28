<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing UserLicenseType
 *
 *
 * XSD Type: UserLicense
 */
class UserLicenseType extends SObjectType
{

    /**
     * @property \DateTime $createdDate
     */
    private $createdDate = null;

    /**
     * @property \DateTime $lastModifiedDate
     */
    private $lastModifiedDate = null;

    /**
     * @property string $licenseDefinitionKey
     */
    private $licenseDefinitionKey = null;

    /**
     * @property string $masterLabel
     */
    private $masterLabel = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $status
     */
    private $status = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property int $totalLicenses
     */
    private $totalLicenses = null;

    /**
     * @property int $usedLicenses
     */
    private $usedLicenses = null;

    /**
     * @property \DateTime $usedLicensesLastUpdated
     */
    private $usedLicensesLastUpdated = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $userlicenses
     */
    private $userlicenses = null;

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
     * Gets as licenseDefinitionKey
     *
     * @return string
     */
    public function getLicenseDefinitionKey()
    {
        return $this->licenseDefinitionKey;
    }

    /**
     * Sets a new licenseDefinitionKey
     *
     * @param string $licenseDefinitionKey
     * @return self
     */
    public function setLicenseDefinitionKey($licenseDefinitionKey)
    {
        $this->licenseDefinitionKey = $licenseDefinitionKey;
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
     * Gets as status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
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
     * Gets as totalLicenses
     *
     * @return int
     */
    public function getTotalLicenses()
    {
        return $this->totalLicenses;
    }

    /**
     * Sets a new totalLicenses
     *
     * @param int $totalLicenses
     * @return self
     */
    public function setTotalLicenses($totalLicenses)
    {
        $this->totalLicenses = $totalLicenses;
        return $this;
    }

    /**
     * Gets as usedLicenses
     *
     * @return int
     */
    public function getUsedLicenses()
    {
        return $this->usedLicenses;
    }

    /**
     * Sets a new usedLicenses
     *
     * @param int $usedLicenses
     * @return self
     */
    public function setUsedLicenses($usedLicenses)
    {
        $this->usedLicenses = $usedLicenses;
        return $this;
    }

    /**
     * Gets as usedLicensesLastUpdated
     *
     * @return \DateTime
     */
    public function getUsedLicensesLastUpdated()
    {
        return $this->usedLicensesLastUpdated;
    }

    /**
     * Sets a new usedLicensesLastUpdated
     *
     * @param \DateTime $usedLicensesLastUpdated
     * @return self
     */
    public function setUsedLicensesLastUpdated(\DateTime $usedLicensesLastUpdated)
    {
        $this->usedLicensesLastUpdated = $usedLicensesLastUpdated;
        return $this;
    }

    /**
     * Gets as userlicenses
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getUserlicenses()
    {
        return $this->userlicenses;
    }

    /**
     * Sets a new userlicenses
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $userlicenses
     * @return self
     */
    public function setUserlicenses(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $userlicenses)
    {
        $this->userlicenses = $userlicenses;
        return $this;
    }


}

