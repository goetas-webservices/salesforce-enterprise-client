<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing CaseType
 *
 *
 * XSD Type: Case
 */
class CaseType extends SObjectType
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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $activityHistories
     */
    private $activityHistories = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AssetType $asset
     */
    private $asset = null;

    /**
     * @property string $assetId
     */
    private $assetId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $attachedContentDocuments
     */
    private $attachedContentDocuments = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $attachments
     */
    private $attachments = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $caseComments
     */
    private $caseComments = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $caseContactRoles
     */
    private $caseContactRoles = null;

    /**
     * @property string $caseNumber
     */
    private $caseNumber = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $caseSolutions
     */
    private $caseSolutions = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $cases
     */
    private $cases = null;

    /**
     * @property \DateTime $closedDate
     */
    private $closedDate = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $combinedAttachments
     */
    private $combinedAttachments = null;

    /**
     * @property string $comments
     */
    private $comments = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContactType $contact
     */
    private $contact = null;

    /**
     * @property string $contactEmail
     */
    private $contactEmail = null;

    /**
     * @property string $contactFax
     */
    private $contactFax = null;

    /**
     * @property string $contactId
     */
    private $contactId = null;

    /**
     * @property string $contactMobile
     */
    private $contactMobile = null;

    /**
     * @property string $contactPhone
     */
    private $contactPhone = null;

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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $emailMessages
     */
    private $emailMessages = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $emails
     */
    private $emails = null;

    /**
     * @property string $engineeringReqNumberC
     */
    private $engineeringReqNumberC = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $events
     */
    private $events = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feedSubscriptionsForEntity
     */
    private $feedSubscriptionsForEntity = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feeds
     */
    private $feeds = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $histories
     */
    private $histories = null;

    /**
     * @property bool $isClosed
     */
    private $isClosed = null;

    /**
     * @property bool $isDeleted
     */
    private $isDeleted = null;

    /**
     * @property bool $isEscalated
     */
    private $isEscalated = null;

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
     * @property \DateTime $lastReferencedDate
     */
    private $lastReferencedDate = null;

    /**
     * @property \DateTime $lastViewedDate
     */
    private $lastViewedDate = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $lookedUpFromActivities
     */
    private $lookedUpFromActivities = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $openActivities
     */
    private $openActivities = null;

    /**
     * @property string $origin
     */
    private $origin = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $owner
     */
    private $owner = null;

    /**
     * @property string $ownerId
     */
    private $ownerId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\CaseType $parent
     */
    private $parent = null;

    /**
     * @property string $parentId
     */
    private $parentId = null;

    /**
     * @property string $potentialLiabilityC
     */
    private $potentialLiabilityC = null;

    /**
     * @property string $priority
     */
    private $priority = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $processInstances
     */
    private $processInstances = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $processSteps
     */
    private $processSteps = null;

    /**
     * @property string $productC
     */
    private $productC = null;

    /**
     * @property string $reason
     */
    private $reason = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $recordActionHistories
     */
    private $recordActionHistories = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $recordActions
     */
    private $recordActions = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $recordAssociatedGroups
     */
    private $recordAssociatedGroups = null;

    /**
     * @property string $sLAViolationC
     */
    private $sLAViolationC = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $shares
     */
    private $shares = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $solutions
     */
    private $solutions = null;

    /**
     * @property string $status
     */
    private $status = null;

    /**
     * @property string $subject
     */
    private $subject = null;

    /**
     * @property string $suppliedCompany
     */
    private $suppliedCompany = null;

    /**
     * @property string $suppliedEmail
     */
    private $suppliedEmail = null;

    /**
     * @property string $suppliedName
     */
    private $suppliedName = null;

    /**
     * @property string $suppliedPhone
     */
    private $suppliedPhone = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $tasks
     */
    private $tasks = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $teamMembers
     */
    private $teamMembers = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $teamTemplateRecords
     */
    private $teamTemplateRecords = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $topicAssignments
     */
    private $topicAssignments = null;

    /**
     * @property string $type
     */
    private $type = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserRecordAccessType $userRecordAccess
     */
    private $userRecordAccess = null;

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
     * Gets as activityHistories
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getActivityHistories()
    {
        return $this->activityHistories;
    }

    /**
     * Sets a new activityHistories
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $activityHistories
     * @return self
     */
    public function setActivityHistories(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $activityHistories)
    {
        $this->activityHistories = $activityHistories;
        return $this;
    }

    /**
     * Gets as asset
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AssetType
     */
    public function getAsset()
    {
        return $this->asset;
    }

    /**
     * Sets a new asset
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AssetType $asset
     * @return self
     */
    public function setAsset(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\AssetType $asset)
    {
        $this->asset = $asset;
        return $this;
    }

    /**
     * Gets as assetId
     *
     * @return string
     */
    public function getAssetId()
    {
        return $this->assetId;
    }

    /**
     * Sets a new assetId
     *
     * @param string $assetId
     * @return self
     */
    public function setAssetId($assetId)
    {
        $this->assetId = $assetId;
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
     * Gets as caseComments
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getCaseComments()
    {
        return $this->caseComments;
    }

    /**
     * Sets a new caseComments
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $caseComments
     * @return self
     */
    public function setCaseComments(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $caseComments)
    {
        $this->caseComments = $caseComments;
        return $this;
    }

    /**
     * Gets as caseContactRoles
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getCaseContactRoles()
    {
        return $this->caseContactRoles;
    }

    /**
     * Sets a new caseContactRoles
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $caseContactRoles
     * @return self
     */
    public function setCaseContactRoles(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $caseContactRoles)
    {
        $this->caseContactRoles = $caseContactRoles;
        return $this;
    }

    /**
     * Gets as caseNumber
     *
     * @return string
     */
    public function getCaseNumber()
    {
        return $this->caseNumber;
    }

    /**
     * Sets a new caseNumber
     *
     * @param string $caseNumber
     * @return self
     */
    public function setCaseNumber($caseNumber)
    {
        $this->caseNumber = $caseNumber;
        return $this;
    }

    /**
     * Gets as caseSolutions
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getCaseSolutions()
    {
        return $this->caseSolutions;
    }

    /**
     * Sets a new caseSolutions
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $caseSolutions
     * @return self
     */
    public function setCaseSolutions(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $caseSolutions)
    {
        $this->caseSolutions = $caseSolutions;
        return $this;
    }

    /**
     * Gets as cases
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getCases()
    {
        return $this->cases;
    }

    /**
     * Sets a new cases
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $cases
     * @return self
     */
    public function setCases(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $cases)
    {
        $this->cases = $cases;
        return $this;
    }

    /**
     * Gets as closedDate
     *
     * @return \DateTime
     */
    public function getClosedDate()
    {
        return $this->closedDate;
    }

    /**
     * Sets a new closedDate
     *
     * @param \DateTime $closedDate
     * @return self
     */
    public function setClosedDate(\DateTime $closedDate)
    {
        $this->closedDate = $closedDate;
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
     * Gets as comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets a new comments
     *
     * @param string $comments
     * @return self
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
        return $this;
    }

    /**
     * Gets as contact
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContactType
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContactType $contact
     * @return self
     */
    public function setContact(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContactType $contact)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Gets as contactEmail
     *
     * @return string
     */
    public function getContactEmail()
    {
        return $this->contactEmail;
    }

    /**
     * Sets a new contactEmail
     *
     * @param string $contactEmail
     * @return self
     */
    public function setContactEmail($contactEmail)
    {
        $this->contactEmail = $contactEmail;
        return $this;
    }

    /**
     * Gets as contactFax
     *
     * @return string
     */
    public function getContactFax()
    {
        return $this->contactFax;
    }

    /**
     * Sets a new contactFax
     *
     * @param string $contactFax
     * @return self
     */
    public function setContactFax($contactFax)
    {
        $this->contactFax = $contactFax;
        return $this;
    }

    /**
     * Gets as contactId
     *
     * @return string
     */
    public function getContactId()
    {
        return $this->contactId;
    }

    /**
     * Sets a new contactId
     *
     * @param string $contactId
     * @return self
     */
    public function setContactId($contactId)
    {
        $this->contactId = $contactId;
        return $this;
    }

    /**
     * Gets as contactMobile
     *
     * @return string
     */
    public function getContactMobile()
    {
        return $this->contactMobile;
    }

    /**
     * Sets a new contactMobile
     *
     * @param string $contactMobile
     * @return self
     */
    public function setContactMobile($contactMobile)
    {
        $this->contactMobile = $contactMobile;
        return $this;
    }

    /**
     * Gets as contactPhone
     *
     * @return string
     */
    public function getContactPhone()
    {
        return $this->contactPhone;
    }

    /**
     * Sets a new contactPhone
     *
     * @param string $contactPhone
     * @return self
     */
    public function setContactPhone($contactPhone)
    {
        $this->contactPhone = $contactPhone;
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
     * Gets as emailMessages
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getEmailMessages()
    {
        return $this->emailMessages;
    }

    /**
     * Sets a new emailMessages
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $emailMessages
     * @return self
     */
    public function setEmailMessages(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $emailMessages)
    {
        $this->emailMessages = $emailMessages;
        return $this;
    }

    /**
     * Gets as emails
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getEmails()
    {
        return $this->emails;
    }

    /**
     * Sets a new emails
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $emails
     * @return self
     */
    public function setEmails(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $emails)
    {
        $this->emails = $emails;
        return $this;
    }

    /**
     * Gets as engineeringReqNumberC
     *
     * @return string
     */
    public function getEngineeringReqNumberC()
    {
        return $this->engineeringReqNumberC;
    }

    /**
     * Sets a new engineeringReqNumberC
     *
     * @param string $engineeringReqNumberC
     * @return self
     */
    public function setEngineeringReqNumberC($engineeringReqNumberC)
    {
        $this->engineeringReqNumberC = $engineeringReqNumberC;
        return $this;
    }

    /**
     * Gets as events
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * Sets a new events
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $events
     * @return self
     */
    public function setEvents(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $events)
    {
        $this->events = $events;
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
     * Gets as histories
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getHistories()
    {
        return $this->histories;
    }

    /**
     * Sets a new histories
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $histories
     * @return self
     */
    public function setHistories(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $histories)
    {
        $this->histories = $histories;
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
     * Gets as isEscalated
     *
     * @return bool
     */
    public function getIsEscalated()
    {
        return $this->isEscalated;
    }

    /**
     * Sets a new isEscalated
     *
     * @param bool $isEscalated
     * @return self
     */
    public function setIsEscalated($isEscalated)
    {
        $this->isEscalated = $isEscalated;
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
     * Gets as lastReferencedDate
     *
     * @return \DateTime
     */
    public function getLastReferencedDate()
    {
        return $this->lastReferencedDate;
    }

    /**
     * Sets a new lastReferencedDate
     *
     * @param \DateTime $lastReferencedDate
     * @return self
     */
    public function setLastReferencedDate(\DateTime $lastReferencedDate)
    {
        $this->lastReferencedDate = $lastReferencedDate;
        return $this;
    }

    /**
     * Gets as lastViewedDate
     *
     * @return \DateTime
     */
    public function getLastViewedDate()
    {
        return $this->lastViewedDate;
    }

    /**
     * Sets a new lastViewedDate
     *
     * @param \DateTime $lastViewedDate
     * @return self
     */
    public function setLastViewedDate(\DateTime $lastViewedDate)
    {
        $this->lastViewedDate = $lastViewedDate;
        return $this;
    }

    /**
     * Gets as lookedUpFromActivities
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getLookedUpFromActivities()
    {
        return $this->lookedUpFromActivities;
    }

    /**
     * Sets a new lookedUpFromActivities
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $lookedUpFromActivities
     * @return self
     */
    public function setLookedUpFromActivities(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $lookedUpFromActivities)
    {
        $this->lookedUpFromActivities = $lookedUpFromActivities;
        return $this;
    }

    /**
     * Gets as openActivities
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getOpenActivities()
    {
        return $this->openActivities;
    }

    /**
     * Sets a new openActivities
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $openActivities
     * @return self
     */
    public function setOpenActivities(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $openActivities)
    {
        $this->openActivities = $openActivities;
        return $this;
    }

    /**
     * Gets as origin
     *
     * @return string
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * Sets a new origin
     *
     * @param string $origin
     * @return self
     */
    public function setOrigin($origin)
    {
        $this->origin = $origin;
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
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\CaseType
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Sets a new parent
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\CaseType $parent
     * @return self
     */
    public function setParent(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\CaseType $parent)
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
     * Gets as potentialLiabilityC
     *
     * @return string
     */
    public function getPotentialLiabilityC()
    {
        return $this->potentialLiabilityC;
    }

    /**
     * Sets a new potentialLiabilityC
     *
     * @param string $potentialLiabilityC
     * @return self
     */
    public function setPotentialLiabilityC($potentialLiabilityC)
    {
        $this->potentialLiabilityC = $potentialLiabilityC;
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
     * Gets as productC
     *
     * @return string
     */
    public function getProductC()
    {
        return $this->productC;
    }

    /**
     * Sets a new productC
     *
     * @param string $productC
     * @return self
     */
    public function setProductC($productC)
    {
        $this->productC = $productC;
        return $this;
    }

    /**
     * Gets as reason
     *
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Sets a new reason
     *
     * @param string $reason
     * @return self
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
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
     * Gets as recordAssociatedGroups
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getRecordAssociatedGroups()
    {
        return $this->recordAssociatedGroups;
    }

    /**
     * Sets a new recordAssociatedGroups
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $recordAssociatedGroups
     * @return self
     */
    public function setRecordAssociatedGroups(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $recordAssociatedGroups)
    {
        $this->recordAssociatedGroups = $recordAssociatedGroups;
        return $this;
    }

    /**
     * Gets as sLAViolationC
     *
     * @return string
     */
    public function getSLAViolationC()
    {
        return $this->sLAViolationC;
    }

    /**
     * Sets a new sLAViolationC
     *
     * @param string $sLAViolationC
     * @return self
     */
    public function setSLAViolationC($sLAViolationC)
    {
        $this->sLAViolationC = $sLAViolationC;
        return $this;
    }

    /**
     * Gets as shares
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getShares()
    {
        return $this->shares;
    }

    /**
     * Sets a new shares
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $shares
     * @return self
     */
    public function setShares(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $shares)
    {
        $this->shares = $shares;
        return $this;
    }

    /**
     * Gets as solutions
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getSolutions()
    {
        return $this->solutions;
    }

    /**
     * Sets a new solutions
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $solutions
     * @return self
     */
    public function setSolutions(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $solutions)
    {
        $this->solutions = $solutions;
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
     * Gets as suppliedCompany
     *
     * @return string
     */
    public function getSuppliedCompany()
    {
        return $this->suppliedCompany;
    }

    /**
     * Sets a new suppliedCompany
     *
     * @param string $suppliedCompany
     * @return self
     */
    public function setSuppliedCompany($suppliedCompany)
    {
        $this->suppliedCompany = $suppliedCompany;
        return $this;
    }

    /**
     * Gets as suppliedEmail
     *
     * @return string
     */
    public function getSuppliedEmail()
    {
        return $this->suppliedEmail;
    }

    /**
     * Sets a new suppliedEmail
     *
     * @param string $suppliedEmail
     * @return self
     */
    public function setSuppliedEmail($suppliedEmail)
    {
        $this->suppliedEmail = $suppliedEmail;
        return $this;
    }

    /**
     * Gets as suppliedName
     *
     * @return string
     */
    public function getSuppliedName()
    {
        return $this->suppliedName;
    }

    /**
     * Sets a new suppliedName
     *
     * @param string $suppliedName
     * @return self
     */
    public function setSuppliedName($suppliedName)
    {
        $this->suppliedName = $suppliedName;
        return $this;
    }

    /**
     * Gets as suppliedPhone
     *
     * @return string
     */
    public function getSuppliedPhone()
    {
        return $this->suppliedPhone;
    }

    /**
     * Sets a new suppliedPhone
     *
     * @param string $suppliedPhone
     * @return self
     */
    public function setSuppliedPhone($suppliedPhone)
    {
        $this->suppliedPhone = $suppliedPhone;
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
     * Gets as tasks
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getTasks()
    {
        return $this->tasks;
    }

    /**
     * Sets a new tasks
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $tasks
     * @return self
     */
    public function setTasks(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $tasks)
    {
        $this->tasks = $tasks;
        return $this;
    }

    /**
     * Gets as teamMembers
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getTeamMembers()
    {
        return $this->teamMembers;
    }

    /**
     * Sets a new teamMembers
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $teamMembers
     * @return self
     */
    public function setTeamMembers(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $teamMembers)
    {
        $this->teamMembers = $teamMembers;
        return $this;
    }

    /**
     * Gets as teamTemplateRecords
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getTeamTemplateRecords()
    {
        return $this->teamTemplateRecords;
    }

    /**
     * Sets a new teamTemplateRecords
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $teamTemplateRecords
     * @return self
     */
    public function setTeamTemplateRecords(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $teamTemplateRecords)
    {
        $this->teamTemplateRecords = $teamTemplateRecords;
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

