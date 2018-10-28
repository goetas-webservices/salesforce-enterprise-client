<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing CustomPermissionType
 *
 *
 * XSD Type: CustomPermission
 */
class CustomPermissionType extends SObjectType
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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $customPermissionDependencyItem
     */
    private $customPermissionDependencyItem = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $customPermissionItem
     */
    private $customPermissionItem = null;

    /**
     * @property string $description
     */
    private $description = null;

    /**
     * @property string $developerName
     */
    private $developerName = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $grantedByLicenses
     */
    private $grantedByLicenses = null;

    /**
     * @property bool $isDeleted
     */
    private $isDeleted = null;

    /**
     * @property bool $isProtected
     */
    private $isProtected = null;

    /**
     * @property string $language
     */
    private $language = null;

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
     * @property string $namespacePrefix
     */
    private $namespacePrefix = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $setupEntityAccessItems
     */
    private $setupEntityAccessItems = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

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
     * Gets as customPermissionDependencyItem
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getCustomPermissionDependencyItem()
    {
        return $this->customPermissionDependencyItem;
    }

    /**
     * Sets a new customPermissionDependencyItem
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $customPermissionDependencyItem
     * @return self
     */
    public function setCustomPermissionDependencyItem(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $customPermissionDependencyItem)
    {
        $this->customPermissionDependencyItem = $customPermissionDependencyItem;
        return $this;
    }

    /**
     * Gets as customPermissionItem
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getCustomPermissionItem()
    {
        return $this->customPermissionItem;
    }

    /**
     * Sets a new customPermissionItem
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $customPermissionItem
     * @return self
     */
    public function setCustomPermissionItem(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $customPermissionItem)
    {
        $this->customPermissionItem = $customPermissionItem;
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
     * Gets as developerName
     *
     * @return string
     */
    public function getDeveloperName()
    {
        return $this->developerName;
    }

    /**
     * Sets a new developerName
     *
     * @param string $developerName
     * @return self
     */
    public function setDeveloperName($developerName)
    {
        $this->developerName = $developerName;
        return $this;
    }

    /**
     * Gets as grantedByLicenses
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getGrantedByLicenses()
    {
        return $this->grantedByLicenses;
    }

    /**
     * Sets a new grantedByLicenses
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $grantedByLicenses
     * @return self
     */
    public function setGrantedByLicenses(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $grantedByLicenses)
    {
        $this->grantedByLicenses = $grantedByLicenses;
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
     * Gets as isProtected
     *
     * @return bool
     */
    public function getIsProtected()
    {
        return $this->isProtected;
    }

    /**
     * Sets a new isProtected
     *
     * @param bool $isProtected
     * @return self
     */
    public function setIsProtected($isProtected)
    {
        $this->isProtected = $isProtected;
        return $this;
    }

    /**
     * Gets as language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * @param string $language
     * @return self
     */
    public function setLanguage($language)
    {
        $this->language = $language;
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
     * Gets as setupEntityAccessItems
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getSetupEntityAccessItems()
    {
        return $this->setupEntityAccessItems;
    }

    /**
     * Sets a new setupEntityAccessItems
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $setupEntityAccessItems
     * @return self
     */
    public function setSetupEntityAccessItems(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $setupEntityAccessItems)
    {
        $this->setupEntityAccessItems = $setupEntityAccessItems;
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

