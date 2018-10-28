<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing TaskType
 *
 *
 * XSD Type: Task
 */
class TaskType extends SObjectType
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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $attachedContentDocuments
     */
    private $attachedContentDocuments = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $attachments
     */
    private $attachments = null;

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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $combinedAttachments
     */
    private $combinedAttachments = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $contentDocumentLinks
     */
    private $contentDocumentLinks = null;

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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feedSubscriptionsForEntity
     */
    private $feedSubscriptionsForEntity = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feeds
     */
    private $feeds = null;

    /**
     * @property bool $isArchived
     */
    private $isArchived = null;

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
     * @property bool $isRecurrence
     */
    private $isRecurrence = null;

    /**
     * @property bool $isReminderSet
     */
    private $isReminderSet = null;

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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $listEmailActivities
     */
    private $listEmailActivities = null;

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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $recordActionHistories
     */
    private $recordActionHistories = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $recordActions
     */
    private $recordActions = null;

    /**
     * @property string $recurrenceActivityId
     */
    private $recurrenceActivityId = null;

    /**
     * @property int $recurrenceDayOfMonth
     */
    private $recurrenceDayOfMonth = null;

    /**
     * @property int $recurrenceDayOfWeekMask
     */
    private $recurrenceDayOfWeekMask = null;

    /**
     * @property \DateTime $recurrenceEndDateOnly
     */
    private $recurrenceEndDateOnly = null;

    /**
     * @property string $recurrenceInstance
     */
    private $recurrenceInstance = null;

    /**
     * @property int $recurrenceInterval
     */
    private $recurrenceInterval = null;

    /**
     * @property string $recurrenceMonthOfYear
     */
    private $recurrenceMonthOfYear = null;

    /**
     * @property string $recurrenceRegeneratedType
     */
    private $recurrenceRegeneratedType = null;

    /**
     * @property \DateTime $recurrenceStartDateOnly
     */
    private $recurrenceStartDateOnly = null;

    /**
     * @property string $recurrenceTimeZoneSidKey
     */
    private $recurrenceTimeZoneSidKey = null;

    /**
     * @property string $recurrenceType
     */
    private $recurrenceType = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $recurringTasks
     */
    private $recurringTasks = null;

    /**
     * @property \DateTime $reminderDateTime
     */
    private $reminderDateTime = null;

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
     * @property string $taskSubtype
     */
    private $taskSubtype = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $topicAssignments
     */
    private $topicAssignments = null;

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
     * Gets as attachedContentDocuments
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getAttachedContentDocuments()
    {
        return $this->attachedContentDocuments;
    }

    /**
     * Sets a new attachedContentDocuments
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $attachedContentDocuments
     * @return self
     */
    public function setAttachedContentDocuments(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $attachedContentDocuments)
    {
        $this->attachedContentDocuments = $attachedContentDocuments;
        return $this;
    }

    /**
     * Gets as attachments
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * Sets a new attachments
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $attachments
     * @return self
     */
    public function setAttachments(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $attachments)
    {
        $this->attachments = $attachments;
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
     * Gets as combinedAttachments
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getCombinedAttachments()
    {
        return $this->combinedAttachments;
    }

    /**
     * Sets a new combinedAttachments
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $combinedAttachments
     * @return self
     */
    public function setCombinedAttachments(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $combinedAttachments)
    {
        $this->combinedAttachments = $combinedAttachments;
        return $this;
    }

    /**
     * Gets as contentDocumentLinks
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getContentDocumentLinks()
    {
        return $this->contentDocumentLinks;
    }

    /**
     * Sets a new contentDocumentLinks
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $contentDocumentLinks
     * @return self
     */
    public function setContentDocumentLinks(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $contentDocumentLinks)
    {
        $this->contentDocumentLinks = $contentDocumentLinks;
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
     * Gets as feedSubscriptionsForEntity
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getFeedSubscriptionsForEntity()
    {
        return $this->feedSubscriptionsForEntity;
    }

    /**
     * Sets a new feedSubscriptionsForEntity
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feedSubscriptionsForEntity
     * @return self
     */
    public function setFeedSubscriptionsForEntity(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feedSubscriptionsForEntity)
    {
        $this->feedSubscriptionsForEntity = $feedSubscriptionsForEntity;
        return $this;
    }

    /**
     * Gets as feeds
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getFeeds()
    {
        return $this->feeds;
    }

    /**
     * Sets a new feeds
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feeds
     * @return self
     */
    public function setFeeds(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feeds)
    {
        $this->feeds = $feeds;
        return $this;
    }

    /**
     * Gets as isArchived
     *
     * @return bool
     */
    public function getIsArchived()
    {
        return $this->isArchived;
    }

    /**
     * Sets a new isArchived
     *
     * @param bool $isArchived
     * @return self
     */
    public function setIsArchived($isArchived)
    {
        $this->isArchived = $isArchived;
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
     * Gets as isRecurrence
     *
     * @return bool
     */
    public function getIsRecurrence()
    {
        return $this->isRecurrence;
    }

    /**
     * Sets a new isRecurrence
     *
     * @param bool $isRecurrence
     * @return self
     */
    public function setIsRecurrence($isRecurrence)
    {
        $this->isRecurrence = $isRecurrence;
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
     * Gets as listEmailActivities
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getListEmailActivities()
    {
        return $this->listEmailActivities;
    }

    /**
     * Sets a new listEmailActivities
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $listEmailActivities
     * @return self
     */
    public function setListEmailActivities(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $listEmailActivities)
    {
        $this->listEmailActivities = $listEmailActivities;
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
     * Gets as recordActionHistories
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getRecordActionHistories()
    {
        return $this->recordActionHistories;
    }

    /**
     * Sets a new recordActionHistories
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $recordActionHistories
     * @return self
     */
    public function setRecordActionHistories(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $recordActionHistories)
    {
        $this->recordActionHistories = $recordActionHistories;
        return $this;
    }

    /**
     * Gets as recordActions
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getRecordActions()
    {
        return $this->recordActions;
    }

    /**
     * Sets a new recordActions
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $recordActions
     * @return self
     */
    public function setRecordActions(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $recordActions)
    {
        $this->recordActions = $recordActions;
        return $this;
    }

    /**
     * Gets as recurrenceActivityId
     *
     * @return string
     */
    public function getRecurrenceActivityId()
    {
        return $this->recurrenceActivityId;
    }

    /**
     * Sets a new recurrenceActivityId
     *
     * @param string $recurrenceActivityId
     * @return self
     */
    public function setRecurrenceActivityId($recurrenceActivityId)
    {
        $this->recurrenceActivityId = $recurrenceActivityId;
        return $this;
    }

    /**
     * Gets as recurrenceDayOfMonth
     *
     * @return int
     */
    public function getRecurrenceDayOfMonth()
    {
        return $this->recurrenceDayOfMonth;
    }

    /**
     * Sets a new recurrenceDayOfMonth
     *
     * @param int $recurrenceDayOfMonth
     * @return self
     */
    public function setRecurrenceDayOfMonth($recurrenceDayOfMonth)
    {
        $this->recurrenceDayOfMonth = $recurrenceDayOfMonth;
        return $this;
    }

    /**
     * Gets as recurrenceDayOfWeekMask
     *
     * @return int
     */
    public function getRecurrenceDayOfWeekMask()
    {
        return $this->recurrenceDayOfWeekMask;
    }

    /**
     * Sets a new recurrenceDayOfWeekMask
     *
     * @param int $recurrenceDayOfWeekMask
     * @return self
     */
    public function setRecurrenceDayOfWeekMask($recurrenceDayOfWeekMask)
    {
        $this->recurrenceDayOfWeekMask = $recurrenceDayOfWeekMask;
        return $this;
    }

    /**
     * Gets as recurrenceEndDateOnly
     *
     * @return \DateTime
     */
    public function getRecurrenceEndDateOnly()
    {
        return $this->recurrenceEndDateOnly;
    }

    /**
     * Sets a new recurrenceEndDateOnly
     *
     * @param \DateTime $recurrenceEndDateOnly
     * @return self
     */
    public function setRecurrenceEndDateOnly(\DateTime $recurrenceEndDateOnly)
    {
        $this->recurrenceEndDateOnly = $recurrenceEndDateOnly;
        return $this;
    }

    /**
     * Gets as recurrenceInstance
     *
     * @return string
     */
    public function getRecurrenceInstance()
    {
        return $this->recurrenceInstance;
    }

    /**
     * Sets a new recurrenceInstance
     *
     * @param string $recurrenceInstance
     * @return self
     */
    public function setRecurrenceInstance($recurrenceInstance)
    {
        $this->recurrenceInstance = $recurrenceInstance;
        return $this;
    }

    /**
     * Gets as recurrenceInterval
     *
     * @return int
     */
    public function getRecurrenceInterval()
    {
        return $this->recurrenceInterval;
    }

    /**
     * Sets a new recurrenceInterval
     *
     * @param int $recurrenceInterval
     * @return self
     */
    public function setRecurrenceInterval($recurrenceInterval)
    {
        $this->recurrenceInterval = $recurrenceInterval;
        return $this;
    }

    /**
     * Gets as recurrenceMonthOfYear
     *
     * @return string
     */
    public function getRecurrenceMonthOfYear()
    {
        return $this->recurrenceMonthOfYear;
    }

    /**
     * Sets a new recurrenceMonthOfYear
     *
     * @param string $recurrenceMonthOfYear
     * @return self
     */
    public function setRecurrenceMonthOfYear($recurrenceMonthOfYear)
    {
        $this->recurrenceMonthOfYear = $recurrenceMonthOfYear;
        return $this;
    }

    /**
     * Gets as recurrenceRegeneratedType
     *
     * @return string
     */
    public function getRecurrenceRegeneratedType()
    {
        return $this->recurrenceRegeneratedType;
    }

    /**
     * Sets a new recurrenceRegeneratedType
     *
     * @param string $recurrenceRegeneratedType
     * @return self
     */
    public function setRecurrenceRegeneratedType($recurrenceRegeneratedType)
    {
        $this->recurrenceRegeneratedType = $recurrenceRegeneratedType;
        return $this;
    }

    /**
     * Gets as recurrenceStartDateOnly
     *
     * @return \DateTime
     */
    public function getRecurrenceStartDateOnly()
    {
        return $this->recurrenceStartDateOnly;
    }

    /**
     * Sets a new recurrenceStartDateOnly
     *
     * @param \DateTime $recurrenceStartDateOnly
     * @return self
     */
    public function setRecurrenceStartDateOnly(\DateTime $recurrenceStartDateOnly)
    {
        $this->recurrenceStartDateOnly = $recurrenceStartDateOnly;
        return $this;
    }

    /**
     * Gets as recurrenceTimeZoneSidKey
     *
     * @return string
     */
    public function getRecurrenceTimeZoneSidKey()
    {
        return $this->recurrenceTimeZoneSidKey;
    }

    /**
     * Sets a new recurrenceTimeZoneSidKey
     *
     * @param string $recurrenceTimeZoneSidKey
     * @return self
     */
    public function setRecurrenceTimeZoneSidKey($recurrenceTimeZoneSidKey)
    {
        $this->recurrenceTimeZoneSidKey = $recurrenceTimeZoneSidKey;
        return $this;
    }

    /**
     * Gets as recurrenceType
     *
     * @return string
     */
    public function getRecurrenceType()
    {
        return $this->recurrenceType;
    }

    /**
     * Sets a new recurrenceType
     *
     * @param string $recurrenceType
     * @return self
     */
    public function setRecurrenceType($recurrenceType)
    {
        $this->recurrenceType = $recurrenceType;
        return $this;
    }

    /**
     * Gets as recurringTasks
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getRecurringTasks()
    {
        return $this->recurringTasks;
    }

    /**
     * Sets a new recurringTasks
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $recurringTasks
     * @return self
     */
    public function setRecurringTasks(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $recurringTasks)
    {
        $this->recurringTasks = $recurringTasks;
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
     * Gets as taskSubtype
     *
     * @return string
     */
    public function getTaskSubtype()
    {
        return $this->taskSubtype;
    }

    /**
     * Sets a new taskSubtype
     *
     * @param string $taskSubtype
     * @return self
     */
    public function setTaskSubtype($taskSubtype)
    {
        $this->taskSubtype = $taskSubtype;
        return $this;
    }

    /**
     * Gets as topicAssignments
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getTopicAssignments()
    {
        return $this->topicAssignments;
    }

    /**
     * Sets a new topicAssignments
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $topicAssignments
     * @return self
     */
    public function setTopicAssignments(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $topicAssignments)
    {
        $this->topicAssignments = $topicAssignments;
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

