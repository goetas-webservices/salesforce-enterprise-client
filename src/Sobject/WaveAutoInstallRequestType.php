<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing WaveAutoInstallRequestType
 *
 *
 * XSD Type: WaveAutoInstallRequest
 */
class WaveAutoInstallRequestType extends SObjectType
{

    /**
     * @property string $configuration
     */
    private $configuration = null;

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
     * @property string $failedReason
     */
    private $failedReason = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\FolderType $folder
     */
    private $folder = null;

    /**
     * @property string $folderId
     */
    private $folderId = null;

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
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $requestLog
     */
    private $requestLog = null;

    /**
     * @property string $requestStatus
     */
    private $requestStatus = null;

    /**
     * @property string $requestType
     */
    private $requestType = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property string $templateApiName
     */
    private $templateApiName = null;

    /**
     * @property string $templateVersion
     */
    private $templateVersion = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserRecordAccessType $userRecordAccess
     */
    private $userRecordAccess = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $waveCompatibilityCheckItems
     */
    private $waveCompatibilityCheckItems = null;

    /**
     * Gets as configuration
     *
     * @return string
     */
    public function getConfiguration()
    {
        return $this->configuration;
    }

    /**
     * Sets a new configuration
     *
     * @param string $configuration
     * @return self
     */
    public function setConfiguration($configuration)
    {
        $this->configuration = $configuration;
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
     * Gets as failedReason
     *
     * @return string
     */
    public function getFailedReason()
    {
        return $this->failedReason;
    }

    /**
     * Sets a new failedReason
     *
     * @param string $failedReason
     * @return self
     */
    public function setFailedReason($failedReason)
    {
        $this->failedReason = $failedReason;
        return $this;
    }

    /**
     * Gets as folder
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\FolderType
     */
    public function getFolder()
    {
        return $this->folder;
    }

    /**
     * Sets a new folder
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\FolderType $folder
     * @return self
     */
    public function setFolder(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\FolderType $folder)
    {
        $this->folder = $folder;
        return $this;
    }

    /**
     * Gets as folderId
     *
     * @return string
     */
    public function getFolderId()
    {
        return $this->folderId;
    }

    /**
     * Sets a new folderId
     *
     * @param string $folderId
     * @return self
     */
    public function setFolderId($folderId)
    {
        $this->folderId = $folderId;
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
     * Gets as requestLog
     *
     * @return string
     */
    public function getRequestLog()
    {
        return $this->requestLog;
    }

    /**
     * Sets a new requestLog
     *
     * @param string $requestLog
     * @return self
     */
    public function setRequestLog($requestLog)
    {
        $this->requestLog = $requestLog;
        return $this;
    }

    /**
     * Gets as requestStatus
     *
     * @return string
     */
    public function getRequestStatus()
    {
        return $this->requestStatus;
    }

    /**
     * Sets a new requestStatus
     *
     * @param string $requestStatus
     * @return self
     */
    public function setRequestStatus($requestStatus)
    {
        $this->requestStatus = $requestStatus;
        return $this;
    }

    /**
     * Gets as requestType
     *
     * @return string
     */
    public function getRequestType()
    {
        return $this->requestType;
    }

    /**
     * Sets a new requestType
     *
     * @param string $requestType
     * @return self
     */
    public function setRequestType($requestType)
    {
        $this->requestType = $requestType;
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
     * Gets as templateApiName
     *
     * @return string
     */
    public function getTemplateApiName()
    {
        return $this->templateApiName;
    }

    /**
     * Sets a new templateApiName
     *
     * @param string $templateApiName
     * @return self
     */
    public function setTemplateApiName($templateApiName)
    {
        $this->templateApiName = $templateApiName;
        return $this;
    }

    /**
     * Gets as templateVersion
     *
     * @return string
     */
    public function getTemplateVersion()
    {
        return $this->templateVersion;
    }

    /**
     * Sets a new templateVersion
     *
     * @param string $templateVersion
     * @return self
     */
    public function setTemplateVersion($templateVersion)
    {
        $this->templateVersion = $templateVersion;
        return $this;
    }

    /**
     * Gets as userRecordAccess
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserRecordAccessType
     */
    public function getUserRecordAccess()
    {
        return $this->userRecordAccess;
    }

    /**
     * Sets a new userRecordAccess
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserRecordAccessType $userRecordAccess
     * @return self
     */
    public function setUserRecordAccess(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserRecordAccessType $userRecordAccess)
    {
        $this->userRecordAccess = $userRecordAccess;
        return $this;
    }

    /**
     * Gets as waveCompatibilityCheckItems
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getWaveCompatibilityCheckItems()
    {
        return $this->waveCompatibilityCheckItems;
    }

    /**
     * Sets a new waveCompatibilityCheckItems
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $waveCompatibilityCheckItems
     * @return self
     */
    public function setWaveCompatibilityCheckItems(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $waveCompatibilityCheckItems)
    {
        $this->waveCompatibilityCheckItems = $waveCompatibilityCheckItems;
        return $this;
    }


}

