<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing SecureAgentType
 *
 *
 * XSD Type: SecureAgent
 */
class SecureAgentType extends SObjectType
{

    /**
     * @property string $agentKey
     */
    private $agentKey = null;

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
     * @property string $masterLabel
     */
    private $masterLabel = null;

    /**
     * @property int $priority
     */
    private $priority = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $proxyUser
     */
    private $proxyUser = null;

    /**
     * @property string $proxyUserId
     */
    private $proxyUserId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $secureAgentPlugins
     */
    private $secureAgentPlugins = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SecureAgentsClusterType $secureAgentsCluster
     */
    private $secureAgentsCluster = null;

    /**
     * @property string $secureAgentsClusterId
     */
    private $secureAgentsClusterId = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * Gets as agentKey
     *
     * @return string
     */
    public function getAgentKey()
    {
        return $this->agentKey;
    }

    /**
     * Sets a new agentKey
     *
     * @param string $agentKey
     * @return self
     */
    public function setAgentKey($agentKey)
    {
        $this->agentKey = $agentKey;
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
     * Gets as priority
     *
     * @return int
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Sets a new priority
     *
     * @param int $priority
     * @return self
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * Gets as proxyUser
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType
     */
    public function getProxyUser()
    {
        return $this->proxyUser;
    }

    /**
     * Sets a new proxyUser
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $proxyUser
     * @return self
     */
    public function setProxyUser(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $proxyUser)
    {
        $this->proxyUser = $proxyUser;
        return $this;
    }

    /**
     * Gets as proxyUserId
     *
     * @return string
     */
    public function getProxyUserId()
    {
        return $this->proxyUserId;
    }

    /**
     * Sets a new proxyUserId
     *
     * @param string $proxyUserId
     * @return self
     */
    public function setProxyUserId($proxyUserId)
    {
        $this->proxyUserId = $proxyUserId;
        return $this;
    }

    /**
     * Gets as secureAgentPlugins
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getSecureAgentPlugins()
    {
        return $this->secureAgentPlugins;
    }

    /**
     * Sets a new secureAgentPlugins
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $secureAgentPlugins
     * @return self
     */
    public function setSecureAgentPlugins(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $secureAgentPlugins)
    {
        $this->secureAgentPlugins = $secureAgentPlugins;
        return $this;
    }

    /**
     * Gets as secureAgentsCluster
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SecureAgentsClusterType
     */
    public function getSecureAgentsCluster()
    {
        return $this->secureAgentsCluster;
    }

    /**
     * Sets a new secureAgentsCluster
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SecureAgentsClusterType $secureAgentsCluster
     * @return self
     */
    public function setSecureAgentsCluster(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\SecureAgentsClusterType $secureAgentsCluster)
    {
        $this->secureAgentsCluster = $secureAgentsCluster;
        return $this;
    }

    /**
     * Gets as secureAgentsClusterId
     *
     * @return string
     */
    public function getSecureAgentsClusterId()
    {
        return $this->secureAgentsClusterId;
    }

    /**
     * Sets a new secureAgentsClusterId
     *
     * @param string $secureAgentsClusterId
     * @return self
     */
    public function setSecureAgentsClusterId($secureAgentsClusterId)
    {
        $this->secureAgentsClusterId = $secureAgentsClusterId;
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

