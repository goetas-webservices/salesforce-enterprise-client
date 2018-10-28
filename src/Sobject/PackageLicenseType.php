<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing PackageLicenseType
 *
 *
 * XSD Type: PackageLicense
 */
class PackageLicenseType extends SObjectType
{

    /**
     * @property int $allowedLicenses
     */
    private $allowedLicenses = null;

    /**
     * @property \DateTime $createdDate
     */
    private $createdDate = null;

    /**
     * @property \DateTime $expirationDate
     */
    private $expirationDate = null;

    /**
     * @property bool $isProvisioned
     */
    private $isProvisioned = null;

    /**
     * @property \DateTime $lastModifiedDate
     */
    private $lastModifiedDate = null;

    /**
     * @property string $namespacePrefix
     */
    private $namespacePrefix = null;

    /**
     * @property string $status
     */
    private $status = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property int $usedLicenses
     */
    private $usedLicenses = null;

    /**
     * Gets as allowedLicenses
     *
     * @return int
     */
    public function getAllowedLicenses()
    {
        return $this->allowedLicenses;
    }

    /**
     * Sets a new allowedLicenses
     *
     * @param int $allowedLicenses
     * @return self
     */
    public function setAllowedLicenses($allowedLicenses)
    {
        $this->allowedLicenses = $allowedLicenses;
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
     * Gets as expirationDate
     *
     * @return \DateTime
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * Sets a new expirationDate
     *
     * @param \DateTime $expirationDate
     * @return self
     */
    public function setExpirationDate(\DateTime $expirationDate)
    {
        $this->expirationDate = $expirationDate;
        return $this;
    }

    /**
     * Gets as isProvisioned
     *
     * @return bool
     */
    public function getIsProvisioned()
    {
        return $this->isProvisioned;
    }

    /**
     * Sets a new isProvisioned
     *
     * @param bool $isProvisioned
     * @return self
     */
    public function setIsProvisioned($isProvisioned)
    {
        $this->isProvisioned = $isProvisioned;
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
     * Gets as namespacePrefix
     *
     * @return string
     */
    public function getNamespacePrefix()
    {
        return $this->namespacePrefix;
    }

    /**
     * Sets a new namespacePrefix
     *
     * @param string $namespacePrefix
     * @return self
     */
    public function setNamespacePrefix($namespacePrefix)
    {
        $this->namespacePrefix = $namespacePrefix;
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


}

