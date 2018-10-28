<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing VerificationHistoryType
 *
 *
 * XSD Type: VerificationHistory
 */
class VerificationHistoryType extends SObjectType
{

    /**
     * @property string $activity
     */
    private $activity = null;

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
     * @property int $eventGroup
     */
    private $eventGroup = null;

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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\LoginGeoType $loginGeo
     */
    private $loginGeo = null;

    /**
     * @property string $loginGeoId
     */
    private $loginGeoId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\LoginHistoryType $loginHistory
     */
    private $loginHistory = null;

    /**
     * @property string $loginHistoryId
     */
    private $loginHistoryId = null;

    /**
     * @property string $policy
     */
    private $policy = null;

    /**
     * @property string $remarks
     */
    private $remarks = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ConnectedApplicationType $resource
     */
    private $resource = null;

    /**
     * @property string $resourceId
     */
    private $resourceId = null;

    /**
     * @property string $sourceIp
     */
    private $sourceIp = null;

    /**
     * @property string $status
     */
    private $status = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $user
     */
    private $user = null;

    /**
     * @property string $userId
     */
    private $userId = null;

    /**
     * @property string $verificationMethod
     */
    private $verificationMethod = null;

    /**
     * @property \DateTime $verificationTime
     */
    private $verificationTime = null;

    /**
     * Gets as activity
     *
     * @return string
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * Sets a new activity
     *
     * @param string $activity
     * @return self
     */
    public function setActivity($activity)
    {
        $this->activity = $activity;
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
     * Gets as eventGroup
     *
     * @return int
     */
    public function getEventGroup()
    {
        return $this->eventGroup;
    }

    /**
     * Sets a new eventGroup
     *
     * @param int $eventGroup
     * @return self
     */
    public function setEventGroup($eventGroup)
    {
        $this->eventGroup = $eventGroup;
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
     * Gets as loginGeo
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\LoginGeoType
     */
    public function getLoginGeo()
    {
        return $this->loginGeo;
    }

    /**
     * Sets a new loginGeo
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\LoginGeoType $loginGeo
     * @return self
     */
    public function setLoginGeo(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\LoginGeoType $loginGeo)
    {
        $this->loginGeo = $loginGeo;
        return $this;
    }

    /**
     * Gets as loginGeoId
     *
     * @return string
     */
    public function getLoginGeoId()
    {
        return $this->loginGeoId;
    }

    /**
     * Sets a new loginGeoId
     *
     * @param string $loginGeoId
     * @return self
     */
    public function setLoginGeoId($loginGeoId)
    {
        $this->loginGeoId = $loginGeoId;
        return $this;
    }

    /**
     * Gets as loginHistory
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\LoginHistoryType
     */
    public function getLoginHistory()
    {
        return $this->loginHistory;
    }

    /**
     * Sets a new loginHistory
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\LoginHistoryType $loginHistory
     * @return self
     */
    public function setLoginHistory(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\LoginHistoryType $loginHistory)
    {
        $this->loginHistory = $loginHistory;
        return $this;
    }

    /**
     * Gets as loginHistoryId
     *
     * @return string
     */
    public function getLoginHistoryId()
    {
        return $this->loginHistoryId;
    }

    /**
     * Sets a new loginHistoryId
     *
     * @param string $loginHistoryId
     * @return self
     */
    public function setLoginHistoryId($loginHistoryId)
    {
        $this->loginHistoryId = $loginHistoryId;
        return $this;
    }

    /**
     * Gets as policy
     *
     * @return string
     */
    public function getPolicy()
    {
        return $this->policy;
    }

    /**
     * Sets a new policy
     *
     * @param string $policy
     * @return self
     */
    public function setPolicy($policy)
    {
        $this->policy = $policy;
        return $this;
    }

    /**
     * Gets as remarks
     *
     * @return string
     */
    public function getRemarks()
    {
        return $this->remarks;
    }

    /**
     * Sets a new remarks
     *
     * @param string $remarks
     * @return self
     */
    public function setRemarks($remarks)
    {
        $this->remarks = $remarks;
        return $this;
    }

    /**
     * Gets as resource
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ConnectedApplicationType
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Sets a new resource
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ConnectedApplicationType $resource
     * @return self
     */
    public function setResource(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\ConnectedApplicationType $resource)
    {
        $this->resource = $resource;
        return $this;
    }

    /**
     * Gets as resourceId
     *
     * @return string
     */
    public function getResourceId()
    {
        return $this->resourceId;
    }

    /**
     * Sets a new resourceId
     *
     * @param string $resourceId
     * @return self
     */
    public function setResourceId($resourceId)
    {
        $this->resourceId = $resourceId;
        return $this;
    }

    /**
     * Gets as sourceIp
     *
     * @return string
     */
    public function getSourceIp()
    {
        return $this->sourceIp;
    }

    /**
     * Sets a new sourceIp
     *
     * @param string $sourceIp
     * @return self
     */
    public function setSourceIp($sourceIp)
    {
        $this->sourceIp = $sourceIp;
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
     * Gets as user
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Sets a new user
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $user
     * @return self
     */
    public function setUser(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * Gets as userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Sets a new userId
     *
     * @param string $userId
     * @return self
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Gets as verificationMethod
     *
     * @return string
     */
    public function getVerificationMethod()
    {
        return $this->verificationMethod;
    }

    /**
     * Sets a new verificationMethod
     *
     * @param string $verificationMethod
     * @return self
     */
    public function setVerificationMethod($verificationMethod)
    {
        $this->verificationMethod = $verificationMethod;
        return $this;
    }

    /**
     * Gets as verificationTime
     *
     * @return \DateTime
     */
    public function getVerificationTime()
    {
        return $this->verificationTime;
    }

    /**
     * Sets a new verificationTime
     *
     * @param \DateTime $verificationTime
     * @return self
     */
    public function setVerificationTime(\DateTime $verificationTime)
    {
        $this->verificationTime = $verificationTime;
        return $this;
    }


}

