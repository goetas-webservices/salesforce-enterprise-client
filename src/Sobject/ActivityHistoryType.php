<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing ActivityHistoryType
 *
 *
 * XSD Type: ActivityHistory
 */
class ActivityHistoryType extends SObjectType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AccountType $account
     */
    private $account = null;

    /**
     * @property string $accountId
     */
    private $accountId = null;

    /**
     * @property \DateTime $activityDate
     */
    private $activityDate = null;

    /**
     * @property string $activitySubtype
     */
    private $activitySubtype = null;

    /**
     * @property string $activityType
     */
    private $activityType = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\EmailMessageType $alternateDetail
     */
    private $alternateDetail = null;

    /**
     * @property string $alternateDetailId
     */
    private $alternateDetailId = null;

    /**
     * @property string $callDisposition
     */
    private $callDisposition = null;

    /**
     * @property int $callDurationInSeconds
     */
    private $callDurationInSeconds = null;

    /**
     * @property string $callObject
     */
    private $callObject = null;

    /**
     * @property string $callType
     */
    private $callType = null;

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
     * @property string $description
     */
    private $description = null;

    /**
     * @property int $durationInMinutes
     */
    private $durationInMinutes = null;

    /**
     * @property \DateTime $endDateTime
     */
    private $endDateTime = null;

    /**
     * @property bool $isAllDayEvent
     */
    private $isAllDayEvent = null;

    /**
     * @property bool $isClosed
     */
    private $isClosed = null;

    /**
     * @property bool $isDeleted
     */
    private $isDeleted = null;

    /**
     * @property bool $isHighPriority
     */
    private $isHighPriority = null;

    /**
     * @property bool $isReminderSet
     */
    private $isReminderSet = null;

    /**
     * @property bool $isTask
     */
    private $isTask = null;

    /**
     * @property bool $isVisibleInSelfService
     */
    private $isVisibleInSelfService = null;

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
     * @property string $location
     */
    private $location = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $owner
     */
    private $owner = null;

    /**
     * @property string $ownerId
     */
    private $ownerId = null;

    /**
     * @property string $priority
     */
    private $priority = null;

    /**
     * @property \DateTime $reminderDateTime
     */
    private $reminderDateTime = null;

    /**
     * @property \DateTime $startDateTime
     */
    private $startDateTime = null;

    /**
     * @property string $status
     */
    private $status = null;

    /**
     * @property string $subject
     */
    private $subject = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $what
     */
    private $what = null;

    /**
     * @property string $whatId
     */
    private $whatId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $who
     */
    private $who = null;

    /**
     * @property string $whoId
     */
    private $whoId = null;

    /**
     * Gets as account
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AccountType
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Sets a new account
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AccountType $account
     * @return self
     */
    public function setAccount(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\AccountType $account)
    {
        $this->account = $account;
        return $this;
    }

    /**
     * Gets as accountId
     *
     * @return string
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * Sets a new accountId
     *
     * @param string $accountId
     * @return self
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * Gets as activityDate
     *
     * @return \DateTime
     */
    public function getActivityDate()
    {
        return $this->activityDate;
    }

    /**
     * Sets a new activityDate
     *
     * @param \DateTime $activityDate
     * @return self
     */
    public function setActivityDate(\DateTime $activityDate)
    {
        $this->activityDate = $activityDate;
        return $this;
    }

    /**
     * Gets as activitySubtype
     *
     * @return string
     */
    public function getActivitySubtype()
    {
        return $this->activitySubtype;
    }

    /**
     * Sets a new activitySubtype
     *
     * @param string $activitySubtype
     * @return self
     */
    public function setActivitySubtype($activitySubtype)
    {
        $this->activitySubtype = $activitySubtype;
        return $this;
    }

    /**
     * Gets as activityType
     *
     * @return string
     */
    public function getActivityType()
    {
        return $this->activityType;
    }

    /**
     * Sets a new activityType
     *
     * @param string $activityType
     * @return self
     */
    public function setActivityType($activityType)
    {
        $this->activityType = $activityType;
        return $this;
    }

    /**
     * Gets as alternateDetail
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\EmailMessageType
     */
    public function getAlternateDetail()
    {
        return $this->alternateDetail;
    }

    /**
     * Sets a new alternateDetail
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\EmailMessageType $alternateDetail
     * @return self
     */
    public function setAlternateDetail(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\EmailMessageType $alternateDetail)
    {
        $this->alternateDetail = $alternateDetail;
        return $this;
    }

    /**
     * Gets as alternateDetailId
     *
     * @return string
     */
    public function getAlternateDetailId()
    {
        return $this->alternateDetailId;
    }

    /**
     * Sets a new alternateDetailId
     *
     * @param string $alternateDetailId
     * @return self
     */
    public function setAlternateDetailId($alternateDetailId)
    {
        $this->alternateDetailId = $alternateDetailId;
        return $this;
    }

    /**
     * Gets as callDisposition
     *
     * @return string
     */
    public function getCallDisposition()
    {
        return $this->callDisposition;
    }

    /**
     * Sets a new callDisposition
     *
     * @param string $callDisposition
     * @return self
     */
    public function setCallDisposition($callDisposition)
    {
        $this->callDisposition = $callDisposition;
        return $this;
    }

    /**
     * Gets as callDurationInSeconds
     *
     * @return int
     */
    public function getCallDurationInSeconds()
    {
        return $this->callDurationInSeconds;
    }

    /**
     * Sets a new callDurationInSeconds
     *
     * @param int $callDurationInSeconds
     * @return self
     */
    public function setCallDurationInSeconds($callDurationInSeconds)
    {
        $this->callDurationInSeconds = $callDurationInSeconds;
        return $this;
    }

    /**
     * Gets as callObject
     *
     * @return string
     */
    public function getCallObject()
    {
        return $this->callObject;
    }

    /**
     * Sets a new callObject
     *
     * @param string $callObject
     * @return self
     */
    public function setCallObject($callObject)
    {
        $this->callObject = $callObject;
        return $this;
    }

    /**
     * Gets as callType
     *
     * @return string
     */
    public function getCallType()
    {
        return $this->callType;
    }

    /**
     * Sets a new callType
     *
     * @param string $callType
     * @return self
     */
    public function setCallType($callType)
    {
        $this->callType = $callType;
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
     * Gets as durationInMinutes
     *
     * @return int
     */
    public function getDurationInMinutes()
    {
        return $this->durationInMinutes;
    }

    /**
     * Sets a new durationInMinutes
     *
     * @param int $durationInMinutes
     * @return self
     */
    public function setDurationInMinutes($durationInMinutes)
    {
        $this->durationInMinutes = $durationInMinutes;
        return $this;
    }

    /**
     * Gets as endDateTime
     *
     * @return \DateTime
     */
    public function getEndDateTime()
    {
        return $this->endDateTime;
    }

    /**
     * Sets a new endDateTime
     *
     * @param \DateTime $endDateTime
     * @return self
     */
    public function setEndDateTime(\DateTime $endDateTime)
    {
        $this->endDateTime = $endDateTime;
        return $this;
    }

    /**
     * Gets as isAllDayEvent
     *
     * @return bool
     */
    public function getIsAllDayEvent()
    {
        return $this->isAllDayEvent;
    }

    /**
     * Sets a new isAllDayEvent
     *
     * @param bool $isAllDayEvent
     * @return self
     */
    public function setIsAllDayEvent($isAllDayEvent)
    {
        $this->isAllDayEvent = $isAllDayEvent;
        return $this;
    }

    /**
     * Gets as isClosed
     *
     * @return bool
     */
    public function getIsClosed()
    {
        return $this->isClosed;
    }

    /**
     * Sets a new isClosed
     *
     * @param bool $isClosed
     * @return self
     */
    public function setIsClosed($isClosed)
    {
        $this->isClosed = $isClosed;
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
     * Gets as isHighPriority
     *
     * @return bool
     */
    public function getIsHighPriority()
    {
        return $this->isHighPriority;
    }

    /**
     * Sets a new isHighPriority
     *
     * @param bool $isHighPriority
     * @return self
     */
    public function setIsHighPriority($isHighPriority)
    {
        $this->isHighPriority = $isHighPriority;
        return $this;
    }

    /**
     * Gets as isReminderSet
     *
     * @return bool
     */
    public function getIsReminderSet()
    {
        return $this->isReminderSet;
    }

    /**
     * Sets a new isReminderSet
     *
     * @param bool $isReminderSet
     * @return self
     */
    public function setIsReminderSet($isReminderSet)
    {
        $this->isReminderSet = $isReminderSet;
        return $this;
    }

    /**
     * Gets as isTask
     *
     * @return bool
     */
    public function getIsTask()
    {
        return $this->isTask;
    }

    /**
     * Sets a new isTask
     *
     * @param bool $isTask
     * @return self
     */
    public function setIsTask($isTask)
    {
        $this->isTask = $isTask;
        return $this;
    }

    /**
     * Gets as isVisibleInSelfService
     *
     * @return bool
     */
    public function getIsVisibleInSelfService()
    {
        return $this->isVisibleInSelfService;
    }

    /**
     * Sets a new isVisibleInSelfService
     *
     * @param bool $isVisibleInSelfService
     * @return self
     */
    public function setIsVisibleInSelfService($isVisibleInSelfService)
    {
        $this->isVisibleInSelfService = $isVisibleInSelfService;
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
     * Gets as location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * @param string $location
     * @return self
     */
    public function setLocation($location)
    {
        $this->location = $location;
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
     * Gets as priority
     *
     * @return string
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Sets a new priority
     *
     * @param string $priority
     * @return self
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * Gets as reminderDateTime
     *
     * @return \DateTime
     */
    public function getReminderDateTime()
    {
        return $this->reminderDateTime;
    }

    /**
     * Sets a new reminderDateTime
     *
     * @param \DateTime $reminderDateTime
     * @return self
     */
    public function setReminderDateTime(\DateTime $reminderDateTime)
    {
        $this->reminderDateTime = $reminderDateTime;
        return $this;
    }

    /**
     * Gets as startDateTime
     *
     * @return \DateTime
     */
    public function getStartDateTime()
    {
        return $this->startDateTime;
    }

    /**
     * Sets a new startDateTime
     *
     * @param \DateTime $startDateTime
     * @return self
     */
    public function setStartDateTime(\DateTime $startDateTime)
    {
        $this->startDateTime = $startDateTime;
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
     * Gets as subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Sets a new subject
     *
     * @param string $subject
     * @return self
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
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
     * Gets as what
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType
     */
    public function getWhat()
    {
        return $this->what;
    }

    /**
     * Sets a new what
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $what
     * @return self
     */
    public function setWhat(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $what)
    {
        $this->what = $what;
        return $this;
    }

    /**
     * Gets as whatId
     *
     * @return string
     */
    public function getWhatId()
    {
        return $this->whatId;
    }

    /**
     * Sets a new whatId
     *
     * @param string $whatId
     * @return self
     */
    public function setWhatId($whatId)
    {
        $this->whatId = $whatId;
        return $this;
    }

    /**
     * Gets as who
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType
     */
    public function getWho()
    {
        return $this->who;
    }

    /**
     * Sets a new who
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $who
     * @return self
     */
    public function setWho(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $who)
    {
        $this->who = $who;
        return $this;
    }

    /**
     * Gets as whoId
     *
     * @return string
     */
    public function getWhoId()
    {
        return $this->whoId;
    }

    /**
     * Sets a new whoId
     *
     * @param string $whoId
     * @return self
     */
    public function setWhoId($whoId)
    {
        $this->whoId = $whoId;
        return $this;
    }


}

