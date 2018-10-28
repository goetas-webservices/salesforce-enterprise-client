<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing ExternalDataSourceType
 *
 *
 * XSD Type: ExternalDataSource
 */
class ExternalDataSourceType extends SObjectType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AuthProviderType $authProvider
     */
    private $authProvider = null;

    /**
     * @property string $authProviderId
     */
    private $authProviderId = null;

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
     * @property string $customConfiguration
     */
    private $customConfiguration = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $customHttpHeaders
     */
    private $customHttpHeaders = null;

    /**
     * @property string $developerName
     */
    private $developerName = null;

    /**
     * @property string $endpoint
     */
    private $endpoint = null;

    /**
     * @property bool $isDeleted
     */
    private $isDeleted = null;

    /**
     * @property bool $isWritable
     */
    private $isWritable = null;

    /**
     * @property string $language
     */
    private $language = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\StaticResourceType $largeIcon
     */
    private $largeIcon = null;

    /**
     * @property string $largeIconId
     */
    private $largeIconId = null;

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
     * @property string $principalType
     */
    private $principalType = null;

    /**
     * @property string $protocol
     */
    private $protocol = null;

    /**
     * @property string $repository
     */
    private $repository = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $setupEntityAccessItems
     */
    private $setupEntityAccessItems = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\StaticResourceType $smallIcon
     */
    private $smallIcon = null;

    /**
     * @property string $smallIconId
     */
    private $smallIconId = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property string $type
     */
    private $type = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $userAuths
     */
    private $userAuths = null;

    /**
     * Gets as authProvider
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AuthProviderType
     */
    public function getAuthProvider()
    {
        return $this->authProvider;
    }

    /**
     * Sets a new authProvider
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AuthProviderType $authProvider
     * @return self
     */
    public function setAuthProvider(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\AuthProviderType $authProvider)
    {
        $this->authProvider = $authProvider;
        return $this;
    }

    /**
     * Gets as authProviderId
     *
     * @return string
     */
    public function getAuthProviderId()
    {
        return $this->authProviderId;
    }

    /**
     * Sets a new authProviderId
     *
     * @param string $authProviderId
     * @return self
     */
    public function setAuthProviderId($authProviderId)
    {
        $this->authProviderId = $authProviderId;
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
     * Gets as customConfiguration
     *
     * @return string
     */
    public function getCustomConfiguration()
    {
        return $this->customConfiguration;
    }

    /**
     * Sets a new customConfiguration
     *
     * @param string $customConfiguration
     * @return self
     */
    public function setCustomConfiguration($customConfiguration)
    {
        $this->customConfiguration = $customConfiguration;
        return $this;
    }

    /**
     * Gets as customHttpHeaders
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getCustomHttpHeaders()
    {
        return $this->customHttpHeaders;
    }

    /**
     * Sets a new customHttpHeaders
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $customHttpHeaders
     * @return self
     */
    public function setCustomHttpHeaders(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $customHttpHeaders)
    {
        $this->customHttpHeaders = $customHttpHeaders;
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
     * Gets as endpoint
     *
     * @return string
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * Sets a new endpoint
     *
     * @param string $endpoint
     * @return self
     */
    public function setEndpoint($endpoint)
    {
        $this->endpoint = $endpoint;
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
     * Gets as isWritable
     *
     * @return bool
     */
    public function getIsWritable()
    {
        return $this->isWritable;
    }

    /**
     * Sets a new isWritable
     *
     * @param bool $isWritable
     * @return self
     */
    public function setIsWritable($isWritable)
    {
        $this->isWritable = $isWritable;
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
     * Gets as largeIcon
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\StaticResourceType
     */
    public function getLargeIcon()
    {
        return $this->largeIcon;
    }

    /**
     * Sets a new largeIcon
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\StaticResourceType $largeIcon
     * @return self
     */
    public function setLargeIcon(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\StaticResourceType $largeIcon)
    {
        $this->largeIcon = $largeIcon;
        return $this;
    }

    /**
     * Gets as largeIconId
     *
     * @return string
     */
    public function getLargeIconId()
    {
        return $this->largeIconId;
    }

    /**
     * Sets a new largeIconId
     *
     * @param string $largeIconId
     * @return self
     */
    public function setLargeIconId($largeIconId)
    {
        $this->largeIconId = $largeIconId;
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
     * Gets as principalType
     *
     * @return string
     */
    public function getPrincipalType()
    {
        return $this->principalType;
    }

    /**
     * Sets a new principalType
     *
     * @param string $principalType
     * @return self
     */
    public function setPrincipalType($principalType)
    {
        $this->principalType = $principalType;
        return $this;
    }

    /**
     * Gets as protocol
     *
     * @return string
     */
    public function getProtocol()
    {
        return $this->protocol;
    }

    /**
     * Sets a new protocol
     *
     * @param string $protocol
     * @return self
     */
    public function setProtocol($protocol)
    {
        $this->protocol = $protocol;
        return $this;
    }

    /**
     * Gets as repository
     *
     * @return string
     */
    public function getRepository()
    {
        return $this->repository;
    }

    /**
     * Sets a new repository
     *
     * @param string $repository
     * @return self
     */
    public function setRepository($repository)
    {
        $this->repository = $repository;
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
     * Gets as smallIcon
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\StaticResourceType
     */
    public function getSmallIcon()
    {
        return $this->smallIcon;
    }

    /**
     * Sets a new smallIcon
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\StaticResourceType $smallIcon
     * @return self
     */
    public function setSmallIcon(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\StaticResourceType $smallIcon)
    {
        $this->smallIcon = $smallIcon;
        return $this;
    }

    /**
     * Gets as smallIconId
     *
     * @return string
     */
    public function getSmallIconId()
    {
        return $this->smallIconId;
    }

    /**
     * Sets a new smallIconId
     *
     * @param string $smallIconId
     * @return self
     */
    public function setSmallIconId($smallIconId)
    {
        $this->smallIconId = $smallIconId;
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
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as userAuths
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getUserAuths()
    {
        return $this->userAuths;
    }

    /**
     * Sets a new userAuths
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $userAuths
     * @return self
     */
    public function setUserAuths(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $userAuths)
    {
        $this->userAuths = $userAuths;
        return $this;
    }


}

