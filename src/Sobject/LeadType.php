<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing LeadType
 *
 *
 * XSD Type: Lead
 */
class LeadType extends SObjectType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $acceptedEventRelations
     */
    private $acceptedEventRelations = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $activityHistories
     */
    private $activityHistories = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\AddressType $address
     */
    private $address = null;

    /**
     * @property float $annualRevenue
     */
    private $annualRevenue = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $attachedContentDocuments
     */
    private $attachedContentDocuments = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $attachments
     */
    private $attachments = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\CampaignType $campaign
     */
    private $campaign = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $campaignMembers
     */
    private $campaignMembers = null;

    /**
     * @property string $city
     */
    private $city = null;

    /**
     * @property string $cleanStatus
     */
    private $cleanStatus = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $combinedAttachments
     */
    private $combinedAttachments = null;

    /**
     * @property string $company
     */
    private $company = null;

    /**
     * @property string $companyDunsNumber
     */
    private $companyDunsNumber = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $contentDocumentLinks
     */
    private $contentDocumentLinks = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AccountType $convertedAccount
     */
    private $convertedAccount = null;

    /**
     * @property string $convertedAccountId
     */
    private $convertedAccountId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContactType $convertedContact
     */
    private $convertedContact = null;

    /**
     * @property string $convertedContactId
     */
    private $convertedContactId = null;

    /**
     * @property \DateTime $convertedDate
     */
    private $convertedDate = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\OpportunityType $convertedOpportunity
     */
    private $convertedOpportunity = null;

    /**
     * @property string $convertedOpportunityId
     */
    private $convertedOpportunityId = null;

    /**
     * @property string $country
     */
    private $country = null;

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
     * @property string $currentGeneratorsC
     */
    private $currentGeneratorsC = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\DandBCompanyType $dandbCompany
     */
    private $dandbCompany = null;

    /**
     * @property string $dandbCompanyId
     */
    private $dandbCompanyId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $declinedEventRelations
     */
    private $declinedEventRelations = null;

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
     * @property string $geocodeAccuracy
     */
    private $geocodeAccuracy = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $histories
     */
    private $histories = null;

    /**
     * @property string $industry
     */
    private $industry = null;

    /**
     * @property bool $isConverted
     */
    private $isConverted = null;

    /**
     * @property bool $isDeleted
     */
    private $isDeleted = null;

    /**
     * @property bool $isUnreadByOwner
     */
    private $isUnreadByOwner = null;

    /**
     * @property string $jigsaw
     */
    private $jigsaw = null;

    /**
     * @property string $jigsawContactId
     */
    private $jigsawContactId = null;

    /**
     * @property \DateTime $lastActivityDate
     */
    private $lastActivityDate = null;

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
     * @property float $latitude
     */
    private $latitude = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $leadCleanInfos
     */
    private $leadCleanInfos = null;

    /**
     * @property string $leadSource
     */
    private $leadSource = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $listEmailIndividualRecipients
     */
    private $listEmailIndividualRecipients = null;

    /**
     * @property float $longitude
     */
    private $longitude = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $lookedUpFromActivities
     */
    private $lookedUpFromActivities = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\LeadType $masterRecord
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
     * @property int $numberOfEmployees
     */
    private $numberOfEmployees = null;

    /**
     * @property float $numberofLocationsC
     */
    private $numberofLocationsC = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $openActivities
     */
    private $openActivities = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $outgoingEmailRelations
     */
    private $outgoingEmailRelations = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $owner
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
     * @property string $postalCode
     */
    private $postalCode = null;

    /**
     * @property string $primaryC
     */
    private $primaryC = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $processInstances
     */
    private $processInstances = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $processSteps
     */
    private $processSteps = null;

    /**
     * @property string $productInterestC
     */
    private $productInterestC = null;

    /**
     * @property string $rating
     */
    private $rating = null;

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
     * @property string $sICCodeC
     */
    private $sICCodeC = null;

    /**
     * @property string $salutation
     */
    private $salutation = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $shares
     */
    private $shares = null;

    /**
     * @property string $state
     */
    private $state = null;

    /**
     * @property string $status
     */
    private $status = null;

    /**
     * @property string $street
     */
    private $street = null;

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
     * @property string $website
     */
    private $website = null;

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
     * Gets as address
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\AddressType
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\AddressType $address
     * @return self
     */
    public function setAddress(\GoetasWebservices\Client\SalesforceEnterprise\Types\AddressType $address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Gets as annualRevenue
     *
     * @return float
     */
    public function getAnnualRevenue()
    {
        return $this->annualRevenue;
    }

    /**
     * Sets a new annualRevenue
     *
     * @param float $annualRevenue
     * @return self
     */
    public function setAnnualRevenue($annualRevenue)
    {
        $this->annualRevenue = $annualRevenue;
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
     * Gets as campaign
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\CampaignType
     */
    public function getCampaign()
    {
        return $this->campaign;
    }

    /**
     * Sets a new campaign
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\CampaignType $campaign
     * @return self
     */
    public function setCampaign(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\CampaignType $campaign)
    {
        $this->campaign = $campaign;
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
     * Gets as city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Sets a new city
     *
     * @param string $city
     * @return self
     */
    public function setCity($city)
    {
        $this->city = $city;
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
     * Gets as company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Sets a new company
     *
     * @param string $company
     * @return self
     */
    public function setCompany($company)
    {
        $this->company = $company;
        return $this;
    }

    /**
     * Gets as companyDunsNumber
     *
     * @return string
     */
    public function getCompanyDunsNumber()
    {
        return $this->companyDunsNumber;
    }

    /**
     * Sets a new companyDunsNumber
     *
     * @param string $companyDunsNumber
     * @return self
     */
    public function setCompanyDunsNumber($companyDunsNumber)
    {
        $this->companyDunsNumber = $companyDunsNumber;
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
     * Gets as convertedAccount
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AccountType
     */
    public function getConvertedAccount()
    {
        return $this->convertedAccount;
    }

    /**
     * Sets a new convertedAccount
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AccountType $convertedAccount
     * @return self
     */
    public function setConvertedAccount(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\AccountType $convertedAccount)
    {
        $this->convertedAccount = $convertedAccount;
        return $this;
    }

    /**
     * Gets as convertedAccountId
     *
     * @return string
     */
    public function getConvertedAccountId()
    {
        return $this->convertedAccountId;
    }

    /**
     * Sets a new convertedAccountId
     *
     * @param string $convertedAccountId
     * @return self
     */
    public function setConvertedAccountId($convertedAccountId)
    {
        $this->convertedAccountId = $convertedAccountId;
        return $this;
    }

    /**
     * Gets as convertedContact
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContactType
     */
    public function getConvertedContact()
    {
        return $this->convertedContact;
    }

    /**
     * Sets a new convertedContact
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContactType $convertedContact
     * @return self
     */
    public function setConvertedContact(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContactType $convertedContact)
    {
        $this->convertedContact = $convertedContact;
        return $this;
    }

    /**
     * Gets as convertedContactId
     *
     * @return string
     */
    public function getConvertedContactId()
    {
        return $this->convertedContactId;
    }

    /**
     * Sets a new convertedContactId
     *
     * @param string $convertedContactId
     * @return self
     */
    public function setConvertedContactId($convertedContactId)
    {
        $this->convertedContactId = $convertedContactId;
        return $this;
    }

    /**
     * Gets as convertedDate
     *
     * @return \DateTime
     */
    public function getConvertedDate()
    {
        return $this->convertedDate;
    }

    /**
     * Sets a new convertedDate
     *
     * @param \DateTime $convertedDate
     * @return self
     */
    public function setConvertedDate(\DateTime $convertedDate)
    {
        $this->convertedDate = $convertedDate;
        return $this;
    }

    /**
     * Gets as convertedOpportunity
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\OpportunityType
     */
    public function getConvertedOpportunity()
    {
        return $this->convertedOpportunity;
    }

    /**
     * Sets a new convertedOpportunity
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\OpportunityType $convertedOpportunity
     * @return self
     */
    public function setConvertedOpportunity(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\OpportunityType $convertedOpportunity)
    {
        $this->convertedOpportunity = $convertedOpportunity;
        return $this;
    }

    /**
     * Gets as convertedOpportunityId
     *
     * @return string
     */
    public function getConvertedOpportunityId()
    {
        return $this->convertedOpportunityId;
    }

    /**
     * Sets a new convertedOpportunityId
     *
     * @param string $convertedOpportunityId
     * @return self
     */
    public function setConvertedOpportunityId($convertedOpportunityId)
    {
        $this->convertedOpportunityId = $convertedOpportunityId;
        return $this;
    }

    /**
     * Gets as country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets a new country
     *
     * @param string $country
     * @return self
     */
    public function setCountry($country)
    {
        $this->country = $country;
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
     * Gets as currentGeneratorsC
     *
     * @return string
     */
    public function getCurrentGeneratorsC()
    {
        return $this->currentGeneratorsC;
    }

    /**
     * Sets a new currentGeneratorsC
     *
     * @param string $currentGeneratorsC
     * @return self
     */
    public function setCurrentGeneratorsC($currentGeneratorsC)
    {
        $this->currentGeneratorsC = $currentGeneratorsC;
        return $this;
    }

    /**
     * Gets as dandbCompany
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\DandBCompanyType
     */
    public function getDandbCompany()
    {
        return $this->dandbCompany;
    }

    /**
     * Sets a new dandbCompany
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\DandBCompanyType $dandbCompany
     * @return self
     */
    public function setDandbCompany(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\DandBCompanyType $dandbCompany)
    {
        $this->dandbCompany = $dandbCompany;
        return $this;
    }

    /**
     * Gets as dandbCompanyId
     *
     * @return string
     */
    public function getDandbCompanyId()
    {
        return $this->dandbCompanyId;
    }

    /**
     * Sets a new dandbCompanyId
     *
     * @param string $dandbCompanyId
     * @return self
     */
    public function setDandbCompanyId($dandbCompanyId)
    {
        $this->dandbCompanyId = $dandbCompanyId;
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
     * Gets as geocodeAccuracy
     *
     * @return string
     */
    public function getGeocodeAccuracy()
    {
        return $this->geocodeAccuracy;
    }

    /**
     * Sets a new geocodeAccuracy
     *
     * @param string $geocodeAccuracy
     * @return self
     */
    public function setGeocodeAccuracy($geocodeAccuracy)
    {
        $this->geocodeAccuracy = $geocodeAccuracy;
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
     * Gets as industry
     *
     * @return string
     */
    public function getIndustry()
    {
        return $this->industry;
    }

    /**
     * Sets a new industry
     *
     * @param string $industry
     * @return self
     */
    public function setIndustry($industry)
    {
        $this->industry = $industry;
        return $this;
    }

    /**
     * Gets as isConverted
     *
     * @return bool
     */
    public function getIsConverted()
    {
        return $this->isConverted;
    }

    /**
     * Sets a new isConverted
     *
     * @param bool $isConverted
     * @return self
     */
    public function setIsConverted($isConverted)
    {
        $this->isConverted = $isConverted;
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
     * Gets as isUnreadByOwner
     *
     * @return bool
     */
    public function getIsUnreadByOwner()
    {
        return $this->isUnreadByOwner;
    }

    /**
     * Sets a new isUnreadByOwner
     *
     * @param bool $isUnreadByOwner
     * @return self
     */
    public function setIsUnreadByOwner($isUnreadByOwner)
    {
        $this->isUnreadByOwner = $isUnreadByOwner;
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
     * Gets as latitude
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Sets a new latitude
     *
     * @param float $latitude
     * @return self
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * Gets as leadCleanInfos
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getLeadCleanInfos()
    {
        return $this->leadCleanInfos;
    }

    /**
     * Sets a new leadCleanInfos
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $leadCleanInfos
     * @return self
     */
    public function setLeadCleanInfos(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $leadCleanInfos)
    {
        $this->leadCleanInfos = $leadCleanInfos;
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
     * Gets as longitude
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Sets a new longitude
     *
     * @param float $longitude
     * @return self
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
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
     * Gets as masterRecord
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\LeadType
     */
    public function getMasterRecord()
    {
        return $this->masterRecord;
    }

    /**
     * Sets a new masterRecord
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\LeadType $masterRecord
     * @return self
     */
    public function setMasterRecord(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\LeadType $masterRecord)
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
     * Gets as numberOfEmployees
     *
     * @return int
     */
    public function getNumberOfEmployees()
    {
        return $this->numberOfEmployees;
    }

    /**
     * Sets a new numberOfEmployees
     *
     * @param int $numberOfEmployees
     * @return self
     */
    public function setNumberOfEmployees($numberOfEmployees)
    {
        $this->numberOfEmployees = $numberOfEmployees;
        return $this;
    }

    /**
     * Gets as numberofLocationsC
     *
     * @return float
     */
    public function getNumberofLocationsC()
    {
        return $this->numberofLocationsC;
    }

    /**
     * Sets a new numberofLocationsC
     *
     * @param float $numberofLocationsC
     * @return self
     */
    public function setNumberofLocationsC($numberofLocationsC)
    {
        $this->numberofLocationsC = $numberofLocationsC;
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
     * Gets as postalCode
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Sets a new postalCode
     *
     * @param string $postalCode
     * @return self
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    /**
     * Gets as primaryC
     *
     * @return string
     */
    public function getPrimaryC()
    {
        return $this->primaryC;
    }

    /**
     * Sets a new primaryC
     *
     * @param string $primaryC
     * @return self
     */
    public function setPrimaryC($primaryC)
    {
        $this->primaryC = $primaryC;
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
     * Gets as productInterestC
     *
     * @return string
     */
    public function getProductInterestC()
    {
        return $this->productInterestC;
    }

    /**
     * Sets a new productInterestC
     *
     * @param string $productInterestC
     * @return self
     */
    public function setProductInterestC($productInterestC)
    {
        $this->productInterestC = $productInterestC;
        return $this;
    }

    /**
     * Gets as rating
     *
     * @return string
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Sets a new rating
     *
     * @param string $rating
     * @return self
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
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
     * Gets as sICCodeC
     *
     * @return string
     */
    public function getSICCodeC()
    {
        return $this->sICCodeC;
    }

    /**
     * Sets a new sICCodeC
     *
     * @param string $sICCodeC
     * @return self
     */
    public function setSICCodeC($sICCodeC)
    {
        $this->sICCodeC = $sICCodeC;
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
     * Gets as street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Sets a new street
     *
     * @param string $street
     * @return self
     */
    public function setStreet($street)
    {
        $this->street = $street;
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
     * Gets as website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Sets a new website
     *
     * @param string $website
     * @return self
     */
    public function setWebsite($website)
    {
        $this->website = $website;
        return $this;
    }


}

