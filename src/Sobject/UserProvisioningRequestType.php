<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing UserProvisioningRequestType
 *
 *
 * XSD Type: UserProvisioningRequest
 */
class UserProvisioningRequestType extends SObjectType
{

    /**
     * @property string $appName
     */
    private $appName = null;

    /**
     * @property string $approvalStatus
     */
    private $approvalStatus = null;

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
     * @property string $externalUserId
     */
    private $externalUserId = null;

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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $manager
     */
    private $manager = null;

    /**
     * @property string $managerId
     */
    private $managerId = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $operation
     */
    private $operation = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $owner
     */
    private $owner = null;

    /**
     * @property string $ownerId
     */
    private $ownerId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserProvisioningRequestType $parent
     */
    private $parent = null;

    /**
     * @property string $parentId
     */
    private $parentId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $processInstances
     */
    private $processInstances = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $processSteps
     */
    private $processSteps = null;

    /**
     * @property int $retryCount
     */
    private $retryCount = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $salesforceUser
     */
    private $salesforceUser = null;

    /**
     * @property string $salesforceUserId
     */
    private $salesforceUserId = null;

    /**
     * @property \DateTime $scheduleDate
     */
    private $scheduleDate = null;

    /**
     * @property string $state
     */
    private $state = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserProvAccountType $userProvAccount
     */
    private $userProvAccount = null;

    /**
     * @property string $userProvAccountId
     */
    private $userProvAccountId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserProvisioningConfigType $userProvConfig
     */
    private $userProvConfig = null;

    /**
     * @property string $userProvConfigId
     */
    private $userProvConfigId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserRecordAccessType $userRecordAccess
     */
    private $userRecordAccess = null;

    /**
     * Gets as appName
     *
     * @return string
     */
    public function getAppName()
    {
        return $this->appName;
    }

    /**
     * Sets a new appName
     *
     * @param string $appName
     * @return self
     */
    public function setAppName($appName)
    {
        $this->appName = $appName;
        return $this;
    }

    /**
     * Gets as approvalStatus
     *
     * @return string
     */
    public function getApprovalStatus()
    {
        return $this->approvalStatus;
    }

    /**
     * Sets a new approvalStatus
     *
     * @param string $approvalStatus
     * @return self
     */
    public function setApprovalStatus($approvalStatus)
    {
        $this->approvalStatus = $approvalStatus;
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
     * Gets as externalUserId
     *
     * @return string
     */
    public function getExternalUserId()
    {
        return $this->externalUserId;
    }

    /**
     * Sets a new externalUserId
     *
     * @param string $externalUserId
     * @return self
     */
    public function setExternalUserId($externalUserId)
    {
        $this->externalUserId = $externalUserId;
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
     * Gets as manager
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType
     */
    public function getManager()
    {
        return $this->manager;
    }

    /**
     * Sets a new manager
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $manager
     * @return self
     */
    public function setManager(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $manager)
    {
        $this->manager = $manager;
        return $this;
    }

    /**
     * Gets as managerId
     *
     * @return string
     */
    public function getManagerId()
    {
        return $this->managerId;
    }

    /**
     * Sets a new managerId
     *
     * @param string $managerId
     * @return self
     */
    public function setManagerId($managerId)
    {
        $this->managerId = $managerId;
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
     * Gets as operation
     *
     * @return string
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * Sets a new operation
     *
     * @param string $operation
     * @return self
     */
    public function setOperation($operation)
    {
        $this->operation = $operation;
        return $this;
    }

    /**
     * Gets as owner
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Sets a new owner
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $owner
     * @return self
     */
    public function setOwner(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $owner)
    {
        $this->owner = $owner;
        return $this;
    }

    /**
     * Gets as ownerId
     *
     * @return string
     */
    public function getOwnerId()
    {
        return $this->ownerId;
    }

    /**
     * Sets a new ownerId
     *
     * @param string $ownerId
     * @return self
     */
    public function setOwnerId($ownerId)
    {
        $this->ownerId = $ownerId;
        return $this;
    }

    /**
     * Gets as parent
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserProvisioningRequestType
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Sets a new parent
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserProvisioningRequestType $parent
     * @return self
     */
    public function setParent(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserProvisioningRequestType $parent)
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * Gets as parentId
     *
     * @return string
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * Sets a new parentId
     *
     * @param string $parentId
     * @return self
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;
        return $this;
    }

    /**
     * Gets as processInstances
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getProcessInstances()
    {
        return $this->processInstances;
    }

    /**
     * Sets a new processInstances
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $processInstances
     * @return self
     */
    public function setProcessInstances(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $processInstances)
    {
        $this->processInstances = $processInstances;
        return $this;
    }

    /**
     * Gets as processSteps
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getProcessSteps()
    {
        return $this->processSteps;
    }

    /**
     * Sets a new processSteps
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $processSteps
     * @return self
     */
    public function setProcessSteps(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $processSteps)
    {
        $this->processSteps = $processSteps;
        return $this;
    }

    /**
     * Gets as retryCount
     *
     * @return int
     */
    public function getRetryCount()
    {
        return $this->retryCount;
    }

    /**
     * Sets a new retryCount
     *
     * @param int $retryCount
     * @return self
     */
    public function setRetryCount($retryCount)
    {
        $this->retryCount = $retryCount;
        return $this;
    }

    /**
     * Gets as salesforceUser
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType
     */
    public function getSalesforceUser()
    {
        return $this->salesforceUser;
    }

    /**
     * Sets a new salesforceUser
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $salesforceUser
     * @return self
     */
    public function setSalesforceUser(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $salesforceUser)
    {
        $this->salesforceUser = $salesforceUser;
        return $this;
    }

    /**
     * Gets as salesforceUserId
     *
     * @return string
     */
    public function getSalesforceUserId()
    {
        return $this->salesforceUserId;
    }

    /**
     * Sets a new salesforceUserId
     *
     * @param string $salesforceUserId
     * @return self
     */
    public function setSalesforceUserId($salesforceUserId)
    {
        $this->salesforceUserId = $salesforceUserId;
        return $this;
    }

    /**
     * Gets as scheduleDate
     *
     * @return \DateTime
     */
    public function getScheduleDate()
    {
        return $this->scheduleDate;
    }

    /**
     * Sets a new scheduleDate
     *
     * @param \DateTime $scheduleDate
     * @return self
     */
    public function setScheduleDate(\DateTime $scheduleDate)
    {
        $this->scheduleDate = $scheduleDate;
        return $this;
    }

    /**
     * Gets as state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Sets a new state
     *
     * @param string $state
     * @return self
     */
    public function setState($state)
    {
        $this->state = $state;
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
     * Gets as userProvAccount
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserProvAccountType
     */
    public function getUserProvAccount()
    {
        return $this->userProvAccount;
    }

    /**
     * Sets a new userProvAccount
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserProvAccountType $userProvAccount
     * @return self
     */
    public function setUserProvAccount(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserProvAccountType $userProvAccount)
    {
        $this->userProvAccount = $userProvAccount;
        return $this;
    }

    /**
     * Gets as userProvAccountId
     *
     * @return string
     */
    public function getUserProvAccountId()
    {
        return $this->userProvAccountId;
    }

    /**
     * Sets a new userProvAccountId
     *
     * @param string $userProvAccountId
     * @return self
     */
    public function setUserProvAccountId($userProvAccountId)
    {
        $this->userProvAccountId = $userProvAccountId;
        return $this;
    }

    /**
     * Gets as userProvConfig
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserProvisioningConfigType
     */
    public function getUserProvConfig()
    {
        return $this->userProvConfig;
    }

    /**
     * Sets a new userProvConfig
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserProvisioningConfigType $userProvConfig
     * @return self
     */
    public function setUserProvConfig(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserProvisioningConfigType $userProvConfig)
    {
        $this->userProvConfig = $userProvConfig;
        return $this;
    }

    /**
     * Gets as userProvConfigId
     *
     * @return string
     */
    public function getUserProvConfigId()
    {
        return $this->userProvConfigId;
    }

    /**
     * Sets a new userProvConfigId
     *
     * @param string $userProvConfigId
     * @return self
     */
    public function setUserProvConfigId($userProvConfigId)
    {
        $this->userProvConfigId = $userProvConfigId;
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


}

