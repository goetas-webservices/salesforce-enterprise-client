<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing SecureAgentPluginType
 *
 *
 * XSD Type: SecureAgentPlugin
 */
class SecureAgentPluginType extends SObjectType
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
     * @property string $pluginName
     */
    private $pluginName = null;

    /**
     * @property string $pluginType
     */
    private $pluginType = null;

    /**
     * @property string $requestedVersion
     */
    private $requestedVersion = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SecureAgentType $secureAgent
     */
    private $secureAgent = null;

    /**
     * @property string $secureAgentId
     */
    private $secureAgentId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $secureAgentPluginProperties
     */
    private $secureAgentPluginProperties = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property \DateTime $updateWindowEnd
     */
    private $updateWindowEnd = null;

    /**
     * @property \DateTime $updateWindowStart
     */
    private $updateWindowStart = null;

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
     * Gets as pluginName
     *
     * @return string
     */
    public function getPluginName()
    {
        return $this->pluginName;
    }

    /**
     * Sets a new pluginName
     *
     * @param string $pluginName
     * @return self
     */
    public function setPluginName($pluginName)
    {
        $this->pluginName = $pluginName;
        return $this;
    }

    /**
     * Gets as pluginType
     *
     * @return string
     */
    public function getPluginType()
    {
        return $this->pluginType;
    }

    /**
     * Sets a new pluginType
     *
     * @param string $pluginType
     * @return self
     */
    public function setPluginType($pluginType)
    {
        $this->pluginType = $pluginType;
        return $this;
    }

    /**
     * Gets as requestedVersion
     *
     * @return string
     */
    public function getRequestedVersion()
    {
        return $this->requestedVersion;
    }

    /**
     * Sets a new requestedVersion
     *
     * @param string $requestedVersion
     * @return self
     */
    public function setRequestedVersion($requestedVersion)
    {
        $this->requestedVersion = $requestedVersion;
        return $this;
    }

    /**
     * Gets as secureAgent
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SecureAgentType
     */
    public function getSecureAgent()
    {
        return $this->secureAgent;
    }

    /**
     * Sets a new secureAgent
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SecureAgentType $secureAgent
     * @return self
     */
    public function setSecureAgent(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\SecureAgentType $secureAgent)
    {
        $this->secureAgent = $secureAgent;
        return $this;
    }

    /**
     * Gets as secureAgentId
     *
     * @return string
     */
    public function getSecureAgentId()
    {
        return $this->secureAgentId;
    }

    /**
     * Sets a new secureAgentId
     *
     * @param string $secureAgentId
     * @return self
     */
    public function setSecureAgentId($secureAgentId)
    {
        $this->secureAgentId = $secureAgentId;
        return $this;
    }

    /**
     * Gets as secureAgentPluginProperties
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getSecureAgentPluginProperties()
    {
        return $this->secureAgentPluginProperties;
    }

    /**
     * Sets a new secureAgentPluginProperties
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $secureAgentPluginProperties
     * @return self
     */
    public function setSecureAgentPluginProperties(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $secureAgentPluginProperties)
    {
        $this->secureAgentPluginProperties = $secureAgentPluginProperties;
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
     * Gets as updateWindowEnd
     *
     * @return \DateTime
     */
    public function getUpdateWindowEnd()
    {
        return $this->updateWindowEnd;
    }

    /**
     * Sets a new updateWindowEnd
     *
     * @param \DateTime $updateWindowEnd
     * @return self
     */
    public function setUpdateWindowEnd(\DateTime $updateWindowEnd)
    {
        $this->updateWindowEnd = $updateWindowEnd;
        return $this;
    }

    /**
     * Gets as updateWindowStart
     *
     * @return \DateTime
     */
    public function getUpdateWindowStart()
    {
        return $this->updateWindowStart;
    }

    /**
     * Sets a new updateWindowStart
     *
     * @param \DateTime $updateWindowStart
     * @return self
     */
    public function setUpdateWindowStart(\DateTime $updateWindowStart)
    {
        $this->updateWindowStart = $updateWindowStart;
        return $this;
    }


}

