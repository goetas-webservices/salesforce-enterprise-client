<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing ContactType
 *
 *
 * XSD Type: Contact
 */
class ContactType extends SObjectType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $acceptedEventRelations
     */
    private $acceptedEventRelations = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AccountType $account
     */
    private $account = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $accountContactRoles
     */
    private $accountContactRoles = null;

    /**
     * @property string $accountId
     */
    private $accountId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $activityHistories
     */
    private $activityHistories = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $assets
     */
    private $assets = null;

    /**
     * @property string $assistantName
     */
    private $assistantName = null;

    /**
     * @property string $assistantPhone
     */
    private $assistantPhone = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $attachedContentDocuments
     */
    private $attachedContentDocuments = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $attachments
     */
    private $attachments = null;

    /**
     * @property \DateTime $birthdate
     */
    private $birthdate = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $campaignMembers
     */
    private $campaignMembers = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $caseContactRoles
     */
    private $caseContactRoles = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $cases
     */
    private $cases = null;

    /**
     * @property string $cleanStatus
     */
    private $cleanStatus = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $combinedAttachments
     */
    private $combinedAttachments = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $contactCleanInfos
     */
    private $contactCleanInfos = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $contentDocumentLinks
     */
    private $contentDocumentLinks = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $contractContactRoles
     */
    private $contractContactRoles = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $contractsSigned
     */
    private $contractsSigned = null;

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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $declinedEventRelations
     */
    private $declinedEventRelations = null;

    /**
     * @property string $department
     */
    private $department = null;

    /**
     * @property string $description
     */
    private $description = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $duplicateRecordItems
     */
    private $duplicateRecordItems = null;

    /**
     * @property string $email
     */
    private $email = null;

    /**
     * @property \DateTime $emailBouncedDate
     */
    private $emailBouncedDate = null;

    /**
     * @property string $emailBouncedReason
     */
    private $emailBouncedReason = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $emailMessageRelations
     */
    private $emailMessageRelations = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $emailStatuses
     */
    private $emailStatuses = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $eventRelations
     */
    private $eventRelations = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $events
     */
    private $events = null;

    /**
     * @property string $fax
     */
    private $fax = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feedSubscriptionsForEntity
     */
    private $feedSubscriptionsForEntity = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feeds
     */
    private $feeds = null;

    /**
     * @property string $firstName
     */
    private $firstName = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $histories
     */
    private $histories = null;

    /**
     * @property string $homePhone
     */
    private $homePhone = null;

    /**
     * @property bool $isDeleted
     */
    private $isDeleted = null;

    /**
     * @property bool $isEmailBounced
     */
    private $isEmailBounced = null;

    /**
     * @property string $jigsaw
     */
    private $jigsaw = null;

    /**
     * @property string $jigsawContactId
     */
    private $jigsawContactId = null;

    /**
     * @property string $languagesC
     */
    private $languagesC = null;

    /**
     * @property \DateTime $lastActivityDate
     */
    private $lastActivityDate = null;

    /**
     * @property \DateTime $lastCURequestDate
     */
    private $lastCURequestDate = null;

    /**
     * @property \DateTime $lastCUUpdateDate
     */
    private $lastCUUpdateDate = null;

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
     * @property string $lastName
     */
    private $lastName = null;

    /**
     * @property \DateTime $lastReferencedDate
     */
    private $lastReferencedDate = null;

    /**
     * @property \DateTime $lastViewedDate
     */
    private $lastViewedDate = null;

    /**
     * @property string $leadSource
     */
    private $leadSource = null;

    /**
     * @property string $levelC
     */
    private $levelC = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $listEmailIndividualRecipients
     */
    private $listEmailIndividualRecipients = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $lookedUpFromActivities
     */
    private $lookedUpFromActivities = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\AddressType $mailingAddress
     */
    private $mailingAddress = null;

    /**
     * @property string $mailingCity
     */
    private $mailingCity = null;

    /**
     * @property string $mailingCountry
     */
    private $mailingCountry = null;

    /**
     * @property string $mailingGeocodeAccuracy
     */
    private $mailingGeocodeAccuracy = null;

    /**
     * @property float $mailingLatitude
     */
    private $mailingLatitude = null;

    /**
     * @property float $mailingLongitude
     */
    private $mailingLongitude = null;

    /**
     * @property string $mailingPostalCode
     */
    private $mailingPostalCode = null;

    /**
     * @property string $mailingState
     */
    private $mailingState = null;

    /**
     * @property string $mailingStreet
     */
    private $mailingStreet = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContactType $masterRecord
     */
    private $masterRecord = null;

    /**
     * @property string $masterRecordId
     */
    private $masterRecordId = null;

    /**
     * @property string $mobilePhone
     */
    private $mobilePhone = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $notes
     */
    private $notes = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $notesAndAttachments
     */
    private $notesAndAttachments = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $openActivities
     */
    private $openActivities = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $opportunities
     */
    private $opportunities = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $opportunityContactRoles
     */
    private $opportunityContactRoles = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\AddressType $otherAddress
     */
    private $otherAddress = null;

    /**
     * @property string $otherCity
     */
    private $otherCity = null;

    /**
     * @property string $otherCountry
     */
    private $otherCountry = null;

    /**
     * @property string $otherGeocodeAccuracy
     */
    private $otherGeocodeAccuracy = null;

    /**
     * @property float $otherLatitude
     */
    private $otherLatitude = null;

    /**
     * @property float $otherLongitude
     */
    private $otherLongitude = null;

    /**
     * @property string $otherPhone
     */
    private $otherPhone = null;

    /**
     * @property string $otherPostalCode
     */
    private $otherPostalCode = null;

    /**
     * @property string $otherState
     */
    private $otherState = null;

    /**
     * @property string $otherStreet
     */
    private $otherStreet = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $outgoingEmailRelations
     */
    private $outgoingEmailRelations = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $owner
     */
    private $owner = null;

    /**
     * @property string $ownerId
     */
    private $ownerId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $personRecord
     */
    private $personRecord = null;

    /**
     * @property string $phone
     */
    private $phone = null;

    /**
     * @property string $photoUrl
     */
    private $photoUrl = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $processInstances
     */
    private $processInstances = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $processSteps
     */
    private $processSteps = null;

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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContactType $reportsTo
     */
    private $reportsTo = null;

    /**
     * @property string $reportsToId
     */
    private $reportsToId = null;

    /**
     * @property string $salutation
     */
    private $salutation = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $shares
     */
    private $shares = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $tasks
     */
    private $tasks = null;

    /**
     * @property string $title
     */
    private $title = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $topicAssignments
     */
    private $topicAssignments = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $undecidedEventRelations
     */
    private $undecidedEventRelations = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserRecordAccessType $userRecordAccess
     */
    private $userRecordAccess = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $users
     */
    private $users = null;

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
     * Gets as accountContactRoles
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getAccountContactRoles()
    {
        return $this->accountContactRoles;
    }

    /**
     * Sets a new accountContactRoles
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $accountContactRoles
     * @return self
     */
    public function setAccountContactRoles(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $accountContactRoles)
    {
        $this->accountContactRoles = $accountContactRoles;
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
     * Gets as assets
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getAssets()
    {
        return $this->assets;
    }

    /**
     * Sets a new assets
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $assets
     * @return self
     */
    public function setAssets(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $assets)
    {
        $this->assets = $assets;
        return $this;
    }

    /**
     * Gets as assistantName
     *
     * @return string
     */
    public function getAssistantName()
    {
        return $this->assistantName;
    }

    /**
     * Sets a new assistantName
     *
     * @param string $assistantName
     * @return self
     */
    public function setAssistantName($assistantName)
    {
        $this->assistantName = $assistantName;
        return $this;
    }

    /**
     * Gets as assistantPhone
     *
     * @return string
     */
    public function getAssistantPhone()
    {
        return $this->assistantPhone;
    }

    /**
     * Sets a new assistantPhone
     *
     * @param string $assistantPhone
     * @return self
     */
    public function setAssistantPhone($assistantPhone)
    {
        $this->assistantPhone = $assistantPhone;
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
     * Gets as birthdate
     *
     * @return \DateTime
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Sets a new birthdate
     *
     * @param \DateTime $birthdate
     * @return self
     */
    public function setBirthdate(\DateTime $birthdate)
    {
        $this->birthdate = $birthdate;
        return $this;
    }

    /**
     * Gets as campaignMembers
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getCampaignMembers()
    {
        return $this->campaignMembers;
    }

    /**
     * Sets a new campaignMembers
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $campaignMembers
     * @return self
     */
    public function setCampaignMembers(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $campaignMembers)
    {
        $this->campaignMembers = $campaignMembers;
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
     * Gets as cleanStatus
     *
     * @return string
     */
    public function getCleanStatus()
    {
        return $this->cleanStatus;
    }

    /**
     * Sets a new cleanStatus
     *
     * @param string $cleanStatus
     * @return self
     */
    public function setCleanStatus($cleanStatus)
    {
        $this->cleanStatus = $cleanStatus;
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
     * Gets as contactCleanInfos
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getContactCleanInfos()
    {
        return $this->contactCleanInfos;
    }

    /**
     * Sets a new contactCleanInfos
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $contactCleanInfos
     * @return self
     */
    public function setContactCleanInfos(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $contactCleanInfos)
    {
        $this->contactCleanInfos = $contactCleanInfos;
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
     * Gets as contractContactRoles
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getContractContactRoles()
    {
        return $this->contractContactRoles;
    }

    /**
     * Sets a new contractContactRoles
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $contractContactRoles
     * @return self
     */
    public function setContractContactRoles(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $contractContactRoles)
    {
        $this->contractContactRoles = $contractContactRoles;
        return $this;
    }

    /**
     * Gets as contractsSigned
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getContractsSigned()
    {
        return $this->contractsSigned;
    }

    /**
     * Sets a new contractsSigned
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $contractsSigned
     * @return self
     */
    public function setContractsSigned(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $contractsSigned)
    {
        $this->contractsSigned = $contractsSigned;
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
     * Gets as department
     *
     * @return string
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Sets a new department
     *
     * @param string $department
     * @return self
     */
    public function setDepartment($department)
    {
        $this->department = $department;
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
     * Gets as duplicateRecordItems
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getDuplicateRecordItems()
    {
        return $this->duplicateRecordItems;
    }

    /**
     * Sets a new duplicateRecordItems
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $duplicateRecordItems
     * @return self
     */
    public function setDuplicateRecordItems(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $duplicateRecordItems)
    {
        $this->duplicateRecordItems = $duplicateRecordItems;
        return $this;
    }

    /**
     * Gets as email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * @param string $email
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Gets as emailBouncedDate
     *
     * @return \DateTime
     */
    public function getEmailBouncedDate()
    {
        return $this->emailBouncedDate;
    }

    /**
     * Sets a new emailBouncedDate
     *
     * @param \DateTime $emailBouncedDate
     * @return self
     */
    public function setEmailBouncedDate(\DateTime $emailBouncedDate)
    {
        $this->emailBouncedDate = $emailBouncedDate;
        return $this;
    }

    /**
     * Gets as emailBouncedReason
     *
     * @return string
     */
    public function getEmailBouncedReason()
    {
        return $this->emailBouncedReason;
    }

    /**
     * Sets a new emailBouncedReason
     *
     * @param string $emailBouncedReason
     * @return self
     */
    public function setEmailBouncedReason($emailBouncedReason)
    {
        $this->emailBouncedReason = $emailBouncedReason;
        return $this;
    }

    /**
     * Gets as emailMessageRelations
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getEmailMessageRelations()
    {
        return $this->emailMessageRelations;
    }

    /**
     * Sets a new emailMessageRelations
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $emailMessageRelations
     * @return self
     */
    public function setEmailMessageRelations(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $emailMessageRelations)
    {
        $this->emailMessageRelations = $emailMessageRelations;
        return $this;
    }

    /**
     * Gets as emailStatuses
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getEmailStatuses()
    {
        return $this->emailStatuses;
    }

    /**
     * Sets a new emailStatuses
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $emailStatuses
     * @return self
     */
    public function setEmailStatuses(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $emailStatuses)
    {
        $this->emailStatuses = $emailStatuses;
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
     * Gets as fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Sets a new fax
     *
     * @param string $fax
     * @return self
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
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
     * Gets as firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Sets a new firstName
     *
     * @param string $firstName
     * @return self
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
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
     * Gets as homePhone
     *
     * @return string
     */
    public function getHomePhone()
    {
        return $this->homePhone;
    }

    /**
     * Sets a new homePhone
     *
     * @param string $homePhone
     * @return self
     */
    public function setHomePhone($homePhone)
    {
        $this->homePhone = $homePhone;
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
     * Gets as isEmailBounced
     *
     * @return bool
     */
    public function getIsEmailBounced()
    {
        return $this->isEmailBounced;
    }

    /**
     * Sets a new isEmailBounced
     *
     * @param bool $isEmailBounced
     * @return self
     */
    public function setIsEmailBounced($isEmailBounced)
    {
        $this->isEmailBounced = $isEmailBounced;
        return $this;
    }

    /**
     * Gets as jigsaw
     *
     * @return string
     */
    public function getJigsaw()
    {
        return $this->jigsaw;
    }

    /**
     * Sets a new jigsaw
     *
     * @param string $jigsaw
     * @return self
     */
    public function setJigsaw($jigsaw)
    {
        $this->jigsaw = $jigsaw;
        return $this;
    }

    /**
     * Gets as jigsawContactId
     *
     * @return string
     */
    public function getJigsawContactId()
    {
        return $this->jigsawContactId;
    }

    /**
     * Sets a new jigsawContactId
     *
     * @param string $jigsawContactId
     * @return self
     */
    public function setJigsawContactId($jigsawContactId)
    {
        $this->jigsawContactId = $jigsawContactId;
        return $this;
    }

    /**
     * Gets as languagesC
     *
     * @return string
     */
    public function getLanguagesC()
    {
        return $this->languagesC;
    }

    /**
     * Sets a new languagesC
     *
     * @param string $languagesC
     * @return self
     */
    public function setLanguagesC($languagesC)
    {
        $this->languagesC = $languagesC;
        return $this;
    }

    /**
     * Gets as lastActivityDate
     *
     * @return \DateTime
     */
    public function getLastActivityDate()
    {
        return $this->lastActivityDate;
    }

    /**
     * Sets a new lastActivityDate
     *
     * @param \DateTime $lastActivityDate
     * @return self
     */
    public function setLastActivityDate(\DateTime $lastActivityDate)
    {
        $this->lastActivityDate = $lastActivityDate;
        return $this;
    }

    /**
     * Gets as lastCURequestDate
     *
     * @return \DateTime
     */
    public function getLastCURequestDate()
    {
        return $this->lastCURequestDate;
    }

    /**
     * Sets a new lastCURequestDate
     *
     * @param \DateTime $lastCURequestDate
     * @return self
     */
    public function setLastCURequestDate(\DateTime $lastCURequestDate)
    {
        $this->lastCURequestDate = $lastCURequestDate;
        return $this;
    }

    /**
     * Gets as lastCUUpdateDate
     *
     * @return \DateTime
     */
    public function getLastCUUpdateDate()
    {
        return $this->lastCUUpdateDate;
    }

    /**
     * Sets a new lastCUUpdateDate
     *
     * @param \DateTime $lastCUUpdateDate
     * @return self
     */
    public function setLastCUUpdateDate(\DateTime $lastCUUpdateDate)
    {
        $this->lastCUUpdateDate = $lastCUUpdateDate;
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
     * Gets as lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Sets a new lastName
     *
     * @param string $lastName
     * @return self
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
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
     * Gets as leadSource
     *
     * @return string
     */
    public function getLeadSource()
    {
        return $this->leadSource;
    }

    /**
     * Sets a new leadSource
     *
     * @param string $leadSource
     * @return self
     */
    public function setLeadSource($leadSource)
    {
        $this->leadSource = $leadSource;
        return $this;
    }

    /**
     * Gets as levelC
     *
     * @return string
     */
    public function getLevelC()
    {
        return $this->levelC;
    }

    /**
     * Sets a new levelC
     *
     * @param string $levelC
     * @return self
     */
    public function setLevelC($levelC)
    {
        $this->levelC = $levelC;
        return $this;
    }

    /**
     * Gets as listEmailIndividualRecipients
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getListEmailIndividualRecipients()
    {
        return $this->listEmailIndividualRecipients;
    }

    /**
     * Sets a new listEmailIndividualRecipients
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $listEmailIndividualRecipients
     * @return self
     */
    public function setListEmailIndividualRecipients(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $listEmailIndividualRecipients)
    {
        $this->listEmailIndividualRecipients = $listEmailIndividualRecipients;
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
     * Gets as mailingAddress
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\AddressType
     */
    public function getMailingAddress()
    {
        return $this->mailingAddress;
    }

    /**
     * Sets a new mailingAddress
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\AddressType $mailingAddress
     * @return self
     */
    public function setMailingAddress(\GoetasWebservices\Client\SalesforceEnterprise\Types\AddressType $mailingAddress)
    {
        $this->mailingAddress = $mailingAddress;
        return $this;
    }

    /**
     * Gets as mailingCity
     *
     * @return string
     */
    public function getMailingCity()
    {
        return $this->mailingCity;
    }

    /**
     * Sets a new mailingCity
     *
     * @param string $mailingCity
     * @return self
     */
    public function setMailingCity($mailingCity)
    {
        $this->mailingCity = $mailingCity;
        return $this;
    }

    /**
     * Gets as mailingCountry
     *
     * @return string
     */
    public function getMailingCountry()
    {
        return $this->mailingCountry;
    }

    /**
     * Sets a new mailingCountry
     *
     * @param string $mailingCountry
     * @return self
     */
    public function setMailingCountry($mailingCountry)
    {
        $this->mailingCountry = $mailingCountry;
        return $this;
    }

    /**
     * Gets as mailingGeocodeAccuracy
     *
     * @return string
     */
    public function getMailingGeocodeAccuracy()
    {
        return $this->mailingGeocodeAccuracy;
    }

    /**
     * Sets a new mailingGeocodeAccuracy
     *
     * @param string $mailingGeocodeAccuracy
     * @return self
     */
    public function setMailingGeocodeAccuracy($mailingGeocodeAccuracy)
    {
        $this->mailingGeocodeAccuracy = $mailingGeocodeAccuracy;
        return $this;
    }

    /**
     * Gets as mailingLatitude
     *
     * @return float
     */
    public function getMailingLatitude()
    {
        return $this->mailingLatitude;
    }

    /**
     * Sets a new mailingLatitude
     *
     * @param float $mailingLatitude
     * @return self
     */
    public function setMailingLatitude($mailingLatitude)
    {
        $this->mailingLatitude = $mailingLatitude;
        return $this;
    }

    /**
     * Gets as mailingLongitude
     *
     * @return float
     */
    public function getMailingLongitude()
    {
        return $this->mailingLongitude;
    }

    /**
     * Sets a new mailingLongitude
     *
     * @param float $mailingLongitude
     * @return self
     */
    public function setMailingLongitude($mailingLongitude)
    {
        $this->mailingLongitude = $mailingLongitude;
        return $this;
    }

    /**
     * Gets as mailingPostalCode
     *
     * @return string
     */
    public function getMailingPostalCode()
    {
        return $this->mailingPostalCode;
    }

    /**
     * Sets a new mailingPostalCode
     *
     * @param string $mailingPostalCode
     * @return self
     */
    public function setMailingPostalCode($mailingPostalCode)
    {
        $this->mailingPostalCode = $mailingPostalCode;
        return $this;
    }

    /**
     * Gets as mailingState
     *
     * @return string
     */
    public function getMailingState()
    {
        return $this->mailingState;
    }

    /**
     * Sets a new mailingState
     *
     * @param string $mailingState
     * @return self
     */
    public function setMailingState($mailingState)
    {
        $this->mailingState = $mailingState;
        return $this;
    }

    /**
     * Gets as mailingStreet
     *
     * @return string
     */
    public function getMailingStreet()
    {
        return $this->mailingStreet;
    }

    /**
     * Sets a new mailingStreet
     *
     * @param string $mailingStreet
     * @return self
     */
    public function setMailingStreet($mailingStreet)
    {
        $this->mailingStreet = $mailingStreet;
        return $this;
    }

    /**
     * Gets as masterRecord
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContactType
     */
    public function getMasterRecord()
    {
        return $this->masterRecord;
    }

    /**
     * Sets a new masterRecord
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContactType $masterRecord
     * @return self
     */
    public function setMasterRecord(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContactType $masterRecord)
    {
        $this->masterRecord = $masterRecord;
        return $this;
    }

    /**
     * Gets as masterRecordId
     *
     * @return string
     */
    public function getMasterRecordId()
    {
        return $this->masterRecordId;
    }

    /**
     * Sets a new masterRecordId
     *
     * @param string $masterRecordId
     * @return self
     */
    public function setMasterRecordId($masterRecordId)
    {
        $this->masterRecordId = $masterRecordId;
        return $this;
    }

    /**
     * Gets as mobilePhone
     *
     * @return string
     */
    public function getMobilePhone()
    {
        return $this->mobilePhone;
    }

    /**
     * Sets a new mobilePhone
     *
     * @param string $mobilePhone
     * @return self
     */
    public function setMobilePhone($mobilePhone)
    {
        $this->mobilePhone = $mobilePhone;
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
     * Gets as notes
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Sets a new notes
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $notes
     * @return self
     */
    public function setNotes(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $notes)
    {
        $this->notes = $notes;
        return $this;
    }

    /**
     * Gets as notesAndAttachments
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getNotesAndAttachments()
    {
        return $this->notesAndAttachments;
    }

    /**
     * Sets a new notesAndAttachments
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $notesAndAttachments
     * @return self
     */
    public function setNotesAndAttachments(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $notesAndAttachments)
    {
        $this->notesAndAttachments = $notesAndAttachments;
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
     * Gets as opportunities
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getOpportunities()
    {
        return $this->opportunities;
    }

    /**
     * Sets a new opportunities
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $opportunities
     * @return self
     */
    public function setOpportunities(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $opportunities)
    {
        $this->opportunities = $opportunities;
        return $this;
    }

    /**
     * Gets as opportunityContactRoles
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getOpportunityContactRoles()
    {
        return $this->opportunityContactRoles;
    }

    /**
     * Sets a new opportunityContactRoles
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $opportunityContactRoles
     * @return self
     */
    public function setOpportunityContactRoles(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $opportunityContactRoles)
    {
        $this->opportunityContactRoles = $opportunityContactRoles;
        return $this;
    }

    /**
     * Gets as otherAddress
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\AddressType
     */
    public function getOtherAddress()
    {
        return $this->otherAddress;
    }

    /**
     * Sets a new otherAddress
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\AddressType $otherAddress
     * @return self
     */
    public function setOtherAddress(\GoetasWebservices\Client\SalesforceEnterprise\Types\AddressType $otherAddress)
    {
        $this->otherAddress = $otherAddress;
        return $this;
    }

    /**
     * Gets as otherCity
     *
     * @return string
     */
    public function getOtherCity()
    {
        return $this->otherCity;
    }

    /**
     * Sets a new otherCity
     *
     * @param string $otherCity
     * @return self
     */
    public function setOtherCity($otherCity)
    {
        $this->otherCity = $otherCity;
        return $this;
    }

    /**
     * Gets as otherCountry
     *
     * @return string
     */
    public function getOtherCountry()
    {
        return $this->otherCountry;
    }

    /**
     * Sets a new otherCountry
     *
     * @param string $otherCountry
     * @return self
     */
    public function setOtherCountry($otherCountry)
    {
        $this->otherCountry = $otherCountry;
        return $this;
    }

    /**
     * Gets as otherGeocodeAccuracy
     *
     * @return string
     */
    public function getOtherGeocodeAccuracy()
    {
        return $this->otherGeocodeAccuracy;
    }

    /**
     * Sets a new otherGeocodeAccuracy
     *
     * @param string $otherGeocodeAccuracy
     * @return self
     */
    public function setOtherGeocodeAccuracy($otherGeocodeAccuracy)
    {
        $this->otherGeocodeAccuracy = $otherGeocodeAccuracy;
        return $this;
    }

    /**
     * Gets as otherLatitude
     *
     * @return float
     */
    public function getOtherLatitude()
    {
        return $this->otherLatitude;
    }

    /**
     * Sets a new otherLatitude
     *
     * @param float $otherLatitude
     * @return self
     */
    public function setOtherLatitude($otherLatitude)
    {
        $this->otherLatitude = $otherLatitude;
        return $this;
    }

    /**
     * Gets as otherLongitude
     *
     * @return float
     */
    public function getOtherLongitude()
    {
        return $this->otherLongitude;
    }

    /**
     * Sets a new otherLongitude
     *
     * @param float $otherLongitude
     * @return self
     */
    public function setOtherLongitude($otherLongitude)
    {
        $this->otherLongitude = $otherLongitude;
        return $this;
    }

    /**
     * Gets as otherPhone
     *
     * @return string
     */
    public function getOtherPhone()
    {
        return $this->otherPhone;
    }

    /**
     * Sets a new otherPhone
     *
     * @param string $otherPhone
     * @return self
     */
    public function setOtherPhone($otherPhone)
    {
        $this->otherPhone = $otherPhone;
        return $this;
    }

    /**
     * Gets as otherPostalCode
     *
     * @return string
     */
    public function getOtherPostalCode()
    {
        return $this->otherPostalCode;
    }

    /**
     * Sets a new otherPostalCode
     *
     * @param string $otherPostalCode
     * @return self
     */
    public function setOtherPostalCode($otherPostalCode)
    {
        $this->otherPostalCode = $otherPostalCode;
        return $this;
    }

    /**
     * Gets as otherState
     *
     * @return string
     */
    public function getOtherState()
    {
        return $this->otherState;
    }

    /**
     * Sets a new otherState
     *
     * @param string $otherState
     * @return self
     */
    public function setOtherState($otherState)
    {
        $this->otherState = $otherState;
        return $this;
    }

    /**
     * Gets as otherStreet
     *
     * @return string
     */
    public function getOtherStreet()
    {
        return $this->otherStreet;
    }

    /**
     * Sets a new otherStreet
     *
     * @param string $otherStreet
     * @return self
     */
    public function setOtherStreet($otherStreet)
    {
        $this->otherStreet = $otherStreet;
        return $this;
    }

    /**
     * Gets as outgoingEmailRelations
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getOutgoingEmailRelations()
    {
        return $this->outgoingEmailRelations;
    }

    /**
     * Sets a new outgoingEmailRelations
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $outgoingEmailRelations
     * @return self
     */
    public function setOutgoingEmailRelations(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $outgoingEmailRelations)
    {
        $this->outgoingEmailRelations = $outgoingEmailRelations;
        return $this;
    }

    /**
     * Gets as owner
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Sets a new owner
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $owner
     * @return self
     */
    public function setOwner(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $owner)
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
     * Gets as personRecord
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getPersonRecord()
    {
        return $this->personRecord;
    }

    /**
     * Sets a new personRecord
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $personRecord
     * @return self
     */
    public function setPersonRecord(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $personRecord)
    {
        $this->personRecord = $personRecord;
        return $this;
    }

    /**
     * Gets as phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Sets a new phone
     *
     * @param string $phone
     * @return self
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * Gets as photoUrl
     *
     * @return string
     */
    public function getPhotoUrl()
    {
        return $this->photoUrl;
    }

    /**
     * Sets a new photoUrl
     *
     * @param string $photoUrl
     * @return self
     */
    public function setPhotoUrl($photoUrl)
    {
        $this->photoUrl = $photoUrl;
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
     * Gets as reportsTo
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContactType
     */
    public function getReportsTo()
    {
        return $this->reportsTo;
    }

    /**
     * Sets a new reportsTo
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContactType $reportsTo
     * @return self
     */
    public function setReportsTo(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContactType $reportsTo)
    {
        $this->reportsTo = $reportsTo;
        return $this;
    }

    /**
     * Gets as reportsToId
     *
     * @return string
     */
    public function getReportsToId()
    {
        return $this->reportsToId;
    }

    /**
     * Sets a new reportsToId
     *
     * @param string $reportsToId
     * @return self
     */
    public function setReportsToId($reportsToId)
    {
        $this->reportsToId = $reportsToId;
        return $this;
    }

    /**
     * Gets as salutation
     *
     * @return string
     */
    public function getSalutation()
    {
        return $this->salutation;
    }

    /**
     * Sets a new salutation
     *
     * @param string $salutation
     * @return self
     */
    public function setSalutation($salutation)
    {
        $this->salutation = $salutation;
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
     * Gets as title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * @param string $title
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;
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
     * Gets as users
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Sets a new users
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $users
     * @return self
     */
    public function setUsers(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $users)
    {
        $this->users = $users;
        return $this;
    }


}

