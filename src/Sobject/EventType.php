<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing EventType
 *
 *
 * XSD Type: Event
 */
class EventType extends SObjectType
{

    /**
     * @property string[] $acceptedEventInviteeIds
     */
    private $acceptedEventInviteeIds = [
        
    ];

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $acceptedEventRelations
     */
    private $acceptedEventRelations = null;

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
     * @property \DateTime $activityDateTime
     */
    private $activityDateTime = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $attachedContentDocuments
     */
    private $attachedContentDocuments = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $attachments
     */
    private $attachments = null;

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
     * @property string[] $declinedEventInviteeIds
     */
    private $declinedEventInviteeIds = [
        
    ];

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $declinedEventRelations
     */
    private $declinedEventRelations = null;

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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $eventRelations
     */
    private $eventRelations = null;

    /**
     * @property string $eventSubtype
     */
    private $eventSubtype = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feedSubscriptionsForEntity
     */
    private $feedSubscriptionsForEntity = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feeds
     */
    private $feeds = null;

    /**
     * @property string $groupEventType
     */
    private $groupEventType = null;

    /**
     * @property bool $isAllDayEvent
     */
    private $isAllDayEvent = null;

    /**
     * @property bool $isArchived
     */
    private $isArchived = null;

    /**
     * @property bool $isChild
     */
    private $isChild = null;

    /**
     * @property bool $isDeleted
     */
    private $isDeleted = null;

    /**
     * @property bool $isGroupEvent
     */
    private $isGroupEvent = null;

    /**
     * @property bool $isPrivate
     */
    private $isPrivate = null;

    /**
     * @property bool $isRecurrence
     */
    private $isRecurrence = null;

    /**
     * @property bool $isRecurrence2
     */
    private $isRecurrence2 = null;

    /**
     * @property bool $isRecurrence2Exception
     */
    private $isRecurrence2Exception = null;

    /**
     * @property bool $isRecurrence2Exclusion
     */
    private $isRecurrence2Exclusion = null;

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
     * @property \DateTime $recurrence2PatternStartDate
     */
    private $recurrence2PatternStartDate = null;

    /**
     * @property string $recurrence2PatternText
     */
    private $recurrence2PatternText = null;

    /**
     * @property string $recurrence2PatternTimeZone
     */
    private $recurrence2PatternTimeZone = null;

    /**
     * @property string $recurrence2PatternVersion
     */
    private $recurrence2PatternVersion = null;

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
     * @property \DateTime $recurrenceStartDateTime
     */
    private $recurrenceStartDateTime = null;

    /**
     * @property string $recurrenceTimeZoneSidKey
     */
    private $recurrenceTimeZoneSidKey = null;

    /**
     * @property string $recurrenceType
     */
    private $recurrenceType = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $recurringEvents
     */
    private $recurringEvents = null;

    /**
     * @property \DateTime $reminderDateTime
     */
    private $reminderDateTime = null;

    /**
     * @property string $showAs
     */
    private $showAs = null;

    /**
     * @property \DateTime $startDateTime
     */
    private $startDateTime = null;

    /**
     * @property string $subject
     */
    private $subject = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $topicAssignments
     */
    private $topicAssignments = null;

    /**
     * @property string[] $undecidedEventInviteeIds
     */
    private $undecidedEventInviteeIds = [
        
    ];

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $undecidedEventRelations
     */
    private $undecidedEventRelations = null;

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
     * Adds as acceptedEventInviteeIds
     *
     * @return self
     * @param string $acceptedEventInviteeIds
     */
    public function addToAcceptedEventInviteeIds($acceptedEventInviteeIds)
    {
        $this->acceptedEventInviteeIds[] = $acceptedEventInviteeIds;
        return $this;
    }

    /**
     * isset acceptedEventInviteeIds
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAcceptedEventInviteeIds($index)
    {
        return isset($this->acceptedEventInviteeIds[$index]);
    }

    /**
     * unset acceptedEventInviteeIds
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAcceptedEventInviteeIds($index)
    {
        unset($this->acceptedEventInviteeIds[$index]);
    }

    /**
     * Gets as acceptedEventInviteeIds
     *
     * @return string[]
     */
    public function getAcceptedEventInviteeIds()
    {
        return $this->acceptedEventInviteeIds;
    }

    /**
     * Sets a new acceptedEventInviteeIds
     *
     * @param string $acceptedEventInviteeIds
     * @return self
     */
    public function setAcceptedEventInviteeIds(array $acceptedEventInviteeIds)
    {
        $this->acceptedEventInviteeIds = $acceptedEventInviteeIds;
        return $this;
    }

    /**
     * Gets as acceptedEventRelations
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getAcceptedEventRelations()
    {
        return $this->acceptedEventRelations;
    }

    /**
     * Sets a new acceptedEventRelations
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $acceptedEventRelations
     * @return self
     */
    public function setAcceptedEventRelations(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $acceptedEventRelations)
    {
        $this->acceptedEventRelations = $acceptedEventRelations;
        return $this;
    }

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
     * Gets as activityDateTime
     *
     * @return \DateTime
     */
    public function getActivityDateTime()
    {
        return $this->activityDateTime;
    }

    /**
     * Sets a new activityDateTime
     *
     * @param \DateTime $activityDateTime
     * @return self
     */
    public function setActivityDateTime(\DateTime $activityDateTime)
    {
        $this->activityDateTime = $activityDateTime;
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
     * Adds as declinedEventInviteeIds
     *
     * @return self
     * @param string $declinedEventInviteeIds
     */
    public function addToDeclinedEventInviteeIds($declinedEventInviteeIds)
    {
        $this->declinedEventInviteeIds[] = $declinedEventInviteeIds;
        return $this;
    }

    /**
     * isset declinedEventInviteeIds
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDeclinedEventInviteeIds($index)
    {
        return isset($this->declinedEventInviteeIds[$index]);
    }

    /**
     * unset declinedEventInviteeIds
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDeclinedEventInviteeIds($index)
    {
        unset($this->declinedEventInviteeIds[$index]);
    }

    /**
     * Gets as declinedEventInviteeIds
     *
     * @return string[]
     */
    public function getDeclinedEventInviteeIds()
    {
        return $this->declinedEventInviteeIds;
    }

    /**
     * Sets a new declinedEventInviteeIds
     *
     * @param string $declinedEventInviteeIds
     * @return self
     */
    public function setDeclinedEventInviteeIds(array $declinedEventInviteeIds)
    {
        $this->declinedEventInviteeIds = $declinedEventInviteeIds;
        return $this;
    }

    /**
     * Gets as declinedEventRelations
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getDeclinedEventRelations()
    {
        return $this->declinedEventRelations;
    }

    /**
     * Sets a new declinedEventRelations
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $declinedEventRelations
     * @return self
     */
    public function setDeclinedEventRelations(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $declinedEventRelations)
    {
        $this->declinedEventRelations = $declinedEventRelations;
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
     * Gets as eventRelations
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getEventRelations()
    {
        return $this->eventRelations;
    }

    /**
     * Sets a new eventRelations
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $eventRelations
     * @return self
     */
    public function setEventRelations(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $eventRelations)
    {
        $this->eventRelations = $eventRelations;
        return $this;
    }

    /**
     * Gets as eventSubtype
     *
     * @return string
     */
    public function getEventSubtype()
    {
        return $this->eventSubtype;
    }

    /**
     * Sets a new eventSubtype
     *
     * @param string $eventSubtype
     * @return self
     */
    public function setEventSubtype($eventSubtype)
    {
        $this->eventSubtype = $eventSubtype;
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
     * Gets as groupEventType
     *
     * @return string
     */
    public function getGroupEventType()
    {
        return $this->groupEventType;
    }

    /**
     * Sets a new groupEventType
     *
     * @param string $groupEventType
     * @return self
     */
    public function setGroupEventType($groupEventType)
    {
        $this->groupEventType = $groupEventType;
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
     * Gets as isChild
     *
     * @return bool
     */
    public function getIsChild()
    {
        return $this->isChild;
    }

    /**
     * Sets a new isChild
     *
     * @param bool $isChild
     * @return self
     */
    public function setIsChild($isChild)
    {
        $this->isChild = $isChild;
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
     * Gets as isGroupEvent
     *
     * @return bool
     */
    public function getIsGroupEvent()
    {
        return $this->isGroupEvent;
    }

    /**
     * Sets a new isGroupEvent
     *
     * @param bool $isGroupEvent
     * @return self
     */
    public function setIsGroupEvent($isGroupEvent)
    {
        $this->isGroupEvent = $isGroupEvent;
        return $this;
    }

    /**
     * Gets as isPrivate
     *
     * @return bool
     */
    public function getIsPrivate()
    {
        return $this->isPrivate;
    }

    /**
     * Sets a new isPrivate
     *
     * @param bool $isPrivate
     * @return self
     */
    public function setIsPrivate($isPrivate)
    {
        $this->isPrivate = $isPrivate;
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
     * Gets as isRecurrence2
     *
     * @return bool
     */
    public function getIsRecurrence2()
    {
        return $this->isRecurrence2;
    }

    /**
     * Sets a new isRecurrence2
     *
     * @param bool $isRecurrence2
     * @return self
     */
    public function setIsRecurrence2($isRecurrence2)
    {
        $this->isRecurrence2 = $isRecurrence2;
        return $this;
    }

    /**
     * Gets as isRecurrence2Exception
     *
     * @return bool
     */
    public function getIsRecurrence2Exception()
    {
        return $this->isRecurrence2Exception;
    }

    /**
     * Sets a new isRecurrence2Exception
     *
     * @param bool $isRecurrence2Exception
     * @return self
     */
    public function setIsRecurrence2Exception($isRecurrence2Exception)
    {
        $this->isRecurrence2Exception = $isRecurrence2Exception;
        return $this;
    }

    /**
     * Gets as isRecurrence2Exclusion
     *
     * @return bool
     */
    public function getIsRecurrence2Exclusion()
    {
        return $this->isRecurrence2Exclusion;
    }

    /**
     * Sets a new isRecurrence2Exclusion
     *
     * @param bool $isRecurrence2Exclusion
     * @return self
     */
    public function setIsRecurrence2Exclusion($isRecurrence2Exclusion)
    {
        $this->isRecurrence2Exclusion = $isRecurrence2Exclusion;
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
     * Gets as recurrence2PatternStartDate
     *
     * @return \DateTime
     */
    public function getRecurrence2PatternStartDate()
    {
        return $this->recurrence2PatternStartDate;
    }

    /**
     * Sets a new recurrence2PatternStartDate
     *
     * @param \DateTime $recurrence2PatternStartDate
     * @return self
     */
    public function setRecurrence2PatternStartDate(\DateTime $recurrence2PatternStartDate)
    {
        $this->recurrence2PatternStartDate = $recurrence2PatternStartDate;
        return $this;
    }

    /**
     * Gets as recurrence2PatternText
     *
     * @return string
     */
    public function getRecurrence2PatternText()
    {
        return $this->recurrence2PatternText;
    }

    /**
     * Sets a new recurrence2PatternText
     *
     * @param string $recurrence2PatternText
     * @return self
     */
    public function setRecurrence2PatternText($recurrence2PatternText)
    {
        $this->recurrence2PatternText = $recurrence2PatternText;
        return $this;
    }

    /**
     * Gets as recurrence2PatternTimeZone
     *
     * @return string
     */
    public function getRecurrence2PatternTimeZone()
    {
        return $this->recurrence2PatternTimeZone;
    }

    /**
     * Sets a new recurrence2PatternTimeZone
     *
     * @param string $recurrence2PatternTimeZone
     * @return self
     */
    public function setRecurrence2PatternTimeZone($recurrence2PatternTimeZone)
    {
        $this->recurrence2PatternTimeZone = $recurrence2PatternTimeZone;
        return $this;
    }

    /**
     * Gets as recurrence2PatternVersion
     *
     * @return string
     */
    public function getRecurrence2PatternVersion()
    {
        return $this->recurrence2PatternVersion;
    }

    /**
     * Sets a new recurrence2PatternVersion
     *
     * @param string $recurrence2PatternVersion
     * @return self
     */
    public function setRecurrence2PatternVersion($recurrence2PatternVersion)
    {
        $this->recurrence2PatternVersion = $recurrence2PatternVersion;
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
     * Gets as recurrenceStartDateTime
     *
     * @return \DateTime
     */
    public function getRecurrenceStartDateTime()
    {
        return $this->recurrenceStartDateTime;
    }

    /**
     * Sets a new recurrenceStartDateTime
     *
     * @param \DateTime $recurrenceStartDateTime
     * @return self
     */
    public function setRecurrenceStartDateTime(\DateTime $recurrenceStartDateTime)
    {
        $this->recurrenceStartDateTime = $recurrenceStartDateTime;
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
     * Gets as recurringEvents
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getRecurringEvents()
    {
        return $this->recurringEvents;
    }

    /**
     * Sets a new recurringEvents
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $recurringEvents
     * @return self
     */
    public function setRecurringEvents(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $recurringEvents)
    {
        $this->recurringEvents = $recurringEvents;
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
     * Gets as showAs
     *
     * @return string
     */
    public function getShowAs()
    {
        return $this->showAs;
    }

    /**
     * Sets a new showAs
     *
     * @param string $showAs
     * @return self
     */
    public function setShowAs($showAs)
    {
        $this->showAs = $showAs;
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
     * Adds as undecidedEventInviteeIds
     *
     * @return self
     * @param string $undecidedEventInviteeIds
     */
    public function addToUndecidedEventInviteeIds($undecidedEventInviteeIds)
    {
        $this->undecidedEventInviteeIds[] = $undecidedEventInviteeIds;
        return $this;
    }

    /**
     * isset undecidedEventInviteeIds
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUndecidedEventInviteeIds($index)
    {
        return isset($this->undecidedEventInviteeIds[$index]);
    }

    /**
     * unset undecidedEventInviteeIds
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUndecidedEventInviteeIds($index)
    {
        unset($this->undecidedEventInviteeIds[$index]);
    }

    /**
     * Gets as undecidedEventInviteeIds
     *
     * @return string[]
     */
    public function getUndecidedEventInviteeIds()
    {
        return $this->undecidedEventInviteeIds;
    }

    /**
     * Sets a new undecidedEventInviteeIds
     *
     * @param string $undecidedEventInviteeIds
     * @return self
     */
    public function setUndecidedEventInviteeIds(array $undecidedEventInviteeIds)
    {
        $this->undecidedEventInviteeIds = $undecidedEventInviteeIds;
        return $this;
    }

    /**
     * Gets as undecidedEventRelations
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getUndecidedEventRelations()
    {
        return $this->undecidedEventRelations;
    }

    /**
     * Sets a new undecidedEventRelations
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $undecidedEventRelations
     * @return self
     */
    public function setUndecidedEventRelations(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $undecidedEventRelations)
    {
        $this->undecidedEventRelations = $undecidedEventRelations;
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

