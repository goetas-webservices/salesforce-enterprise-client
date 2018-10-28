<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing WaveCompatibilityCheckItemType
 *
 *
 * XSD Type: WaveCompatibilityCheckItem
 */
class WaveCompatibilityCheckItemType extends SObjectType
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
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $payload
     */
    private $payload = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property string $taskName
     */
    private $taskName = null;

    /**
     * @property string $taskResult
     */
    private $taskResult = null;

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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\WaveAutoInstallRequestType $waveAutoInstallRequest
     */
    private $waveAutoInstallRequest = null;

    /**
     * @property string $waveAutoInstallRequestId
     */
    private $waveAutoInstallRequestId = null;

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
     * Gets as payload
     *
     * @return string
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * Sets a new payload
     *
     * @param string $payload
     * @return self
     */
    public function setPayload($payload)
    {
        $this->payload = $payload;
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
     * Gets as taskName
     *
     * @return string
     */
    public function getTaskName()
    {
        return $this->taskName;
    }

    /**
     * Sets a new taskName
     *
     * @param string $taskName
     * @return self
     */
    public function setTaskName($taskName)
    {
        $this->taskName = $taskName;
        return $this;
    }

    /**
     * Gets as taskResult
     *
     * @return string
     */
    public function getTaskResult()
    {
        return $this->taskResult;
    }

    /**
     * Sets a new taskResult
     *
     * @param string $taskResult
     * @return self
     */
    public function setTaskResult($taskResult)
    {
        $this->taskResult = $taskResult;
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
     * Gets as waveAutoInstallRequest
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\WaveAutoInstallRequestType
     */
    public function getWaveAutoInstallRequest()
    {
        return $this->waveAutoInstallRequest;
    }

    /**
     * Sets a new waveAutoInstallRequest
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\WaveAutoInstallRequestType $waveAutoInstallRequest
     * @return self
     */
    public function setWaveAutoInstallRequest(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\WaveAutoInstallRequestType $waveAutoInstallRequest)
    {
        $this->waveAutoInstallRequest = $waveAutoInstallRequest;
        return $this;
    }

    /**
     * Gets as waveAutoInstallRequestId
     *
     * @return string
     */
    public function getWaveAutoInstallRequestId()
    {
        return $this->waveAutoInstallRequestId;
    }

    /**
     * Sets a new waveAutoInstallRequestId
     *
     * @param string $waveAutoInstallRequestId
     * @return self
     */
    public function setWaveAutoInstallRequestId($waveAutoInstallRequestId)
    {
        $this->waveAutoInstallRequestId = $waveAutoInstallRequestId;
        return $this;
    }


}

