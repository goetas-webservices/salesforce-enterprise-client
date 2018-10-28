<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing UserProvisioningConfigType
 *
 *
 * XSD Type: UserProvisioningConfig
 */
class UserProvisioningConfigType extends SObjectType
{

    /**
     * @property string $approvalRequired
     */
    private $approvalRequired = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ConnectedApplicationType $connectedApp
     */
    private $connectedApp = null;

    /**
     * @property string $connectedAppId
     */
    private $connectedAppId = null;

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
     * @property string $developerName
     */
    private $developerName = null;

    /**
     * @property bool $enabled
     */
    private $enabled = null;

    /**
     * @property string $enabledOperations
     */
    private $enabledOperations = null;

    /**
     * @property bool $isDeleted
     */
    private $isDeleted = null;

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
     * @property \DateTime $lastReconDateTime
     */
    private $lastReconDateTime = null;

    /**
     * @property string $masterLabel
     */
    private $masterLabel = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\NamedCredentialType $namedCredential
     */
    private $namedCredential = null;

    /**
     * @property string $namedCredentialId
     */
    private $namedCredentialId = null;

    /**
     * @property string $namespacePrefix
     */
    private $namespacePrefix = null;

    /**
     * @property string $notes
     */
    private $notes = null;

    /**
     * @property string $onUpdateAttributes
     */
    private $onUpdateAttributes = null;

    /**
     * @property string $reconFilter
     */
    private $reconFilter = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property string $userAccountMapping
     */
    private $userAccountMapping = null;

    /**
     * Gets as approvalRequired
     *
     * @return string
     */
    public function getApprovalRequired()
    {
        return $this->approvalRequired;
    }

    /**
     * Sets a new approvalRequired
     *
     * @param string $approvalRequired
     * @return self
     */
    public function setApprovalRequired($approvalRequired)
    {
        $this->approvalRequired = $approvalRequired;
        return $this;
    }

    /**
     * Gets as connectedApp
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ConnectedApplicationType
     */
    public function getConnectedApp()
    {
        return $this->connectedApp;
    }

    /**
     * Sets a new connectedApp
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ConnectedApplicationType $connectedApp
     * @return self
     */
    public function setConnectedApp(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\ConnectedApplicationType $connectedApp)
    {
        $this->connectedApp = $connectedApp;
        return $this;
    }

    /**
     * Gets as connectedAppId
     *
     * @return string
     */
    public function getConnectedAppId()
    {
        return $this->connectedAppId;
    }

    /**
     * Sets a new connectedAppId
     *
     * @param string $connectedAppId
     * @return self
     */
    public function setConnectedAppId($connectedAppId)
    {
        $this->connectedAppId = $connectedAppId;
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
     * Gets as enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Sets a new enabled
     *
     * @param bool $enabled
     * @return self
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * Gets as enabledOperations
     *
     * @return string
     */
    public function getEnabledOperations()
    {
        return $this->enabledOperations;
    }

    /**
     * Sets a new enabledOperations
     *
     * @param string $enabledOperations
     * @return self
     */
    public function setEnabledOperations($enabledOperations)
    {
        $this->enabledOperations = $enabledOperations;
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
     * Gets as lastReconDateTime
     *
     * @return \DateTime
     */
    public function getLastReconDateTime()
    {
        return $this->lastReconDateTime;
    }

    /**
     * Sets a new lastReconDateTime
     *
     * @param \DateTime $lastReconDateTime
     * @return self
     */
    public function setLastReconDateTime(\DateTime $lastReconDateTime)
    {
        $this->lastReconDateTime = $lastReconDateTime;
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
     * Gets as namedCredential
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\NamedCredentialType
     */
    public function getNamedCredential()
    {
        return $this->namedCredential;
    }

    /**
     * Sets a new namedCredential
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\NamedCredentialType $namedCredential
     * @return self
     */
    public function setNamedCredential(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\NamedCredentialType $namedCredential)
    {
        $this->namedCredential = $namedCredential;
        return $this;
    }

    /**
     * Gets as namedCredentialId
     *
     * @return string
     */
    public function getNamedCredentialId()
    {
        return $this->namedCredentialId;
    }

    /**
     * Sets a new namedCredentialId
     *
     * @param string $namedCredentialId
     * @return self
     */
    public function setNamedCredentialId($namedCredentialId)
    {
        $this->namedCredentialId = $namedCredentialId;
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
     * Gets as notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Sets a new notes
     *
     * @param string $notes
     * @return self
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
        return $this;
    }

    /**
     * Gets as onUpdateAttributes
     *
     * @return string
     */
    public function getOnUpdateAttributes()
    {
        return $this->onUpdateAttributes;
    }

    /**
     * Sets a new onUpdateAttributes
     *
     * @param string $onUpdateAttributes
     * @return self
     */
    public function setOnUpdateAttributes($onUpdateAttributes)
    {
        $this->onUpdateAttributes = $onUpdateAttributes;
        return $this;
    }

    /**
     * Gets as reconFilter
     *
     * @return string
     */
    public function getReconFilter()
    {
        return $this->reconFilter;
    }

    /**
     * Sets a new reconFilter
     *
     * @param string $reconFilter
     * @return self
     */
    public function setReconFilter($reconFilter)
    {
        $this->reconFilter = $reconFilter;
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
     * Gets as userAccountMapping
     *
     * @return string
     */
    public function getUserAccountMapping()
    {
        return $this->userAccountMapping;
    }

    /**
     * Sets a new userAccountMapping
     *
     * @param string $userAccountMapping
     * @return self
     */
    public function setUserAccountMapping($userAccountMapping)
    {
        $this->userAccountMapping = $userAccountMapping;
        return $this;
    }


}

