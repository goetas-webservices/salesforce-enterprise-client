<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing ContractType
 *
 *
 * XSD Type: Contract
 */
class ContractType extends SObjectType
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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $activatedBy
     */
    private $activatedBy = null;

    /**
     * @property string $activatedById
     */
    private $activatedById = null;

    /**
     * @property \DateTime $activatedDate
     */
    private $activatedDate = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $activityHistories
     */
    private $activityHistories = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $attachedContentDocuments
     */
    private $attachedContentDocuments = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $attachments
     */
    private $attachments = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\AddressType $billingAddress
     */
    private $billingAddress = null;

    /**
     * @property string $billingCity
     */
    private $billingCity = null;

    /**
     * @property string $billingCountry
     */
    private $billingCountry = null;

    /**
     * @property string $billingGeocodeAccuracy
     */
    private $billingGeocodeAccuracy = null;

    /**
     * @property float $billingLatitude
     */
    private $billingLatitude = null;

    /**
     * @property float $billingLongitude
     */
    private $billingLongitude = null;

    /**
     * @property string $billingPostalCode
     */
    private $billingPostalCode = null;

    /**
     * @property string $billingState
     */
    private $billingState = null;

    /**
     * @property string $billingStreet
     */
    private $billingStreet = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $combinedAttachments
     */
    private $combinedAttachments = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $companySigned
     */
    private $companySigned = null;

    /**
     * @property \DateTime $companySignedDate
     */
    private $companySignedDate = null;

    /**
     * @property string $companySignedId
     */
    private $companySignedId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $contentDocumentLinks
     */
    private $contentDocumentLinks = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $contractContactRoles
     */
    private $contractContactRoles = null;

    /**
     * @property string $contractNumber
     */
    private $contractNumber = null;

    /**
     * @property int $contractTerm
     */
    private $contractTerm = null;

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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContactType $customerSigned
     */
    private $customerSigned = null;

    /**
     * @property \DateTime $customerSignedDate
     */
    private $customerSignedDate = null;

    /**
     * @property string $customerSignedId
     */
    private $customerSignedId = null;

    /**
     * @property string $customerSignedTitle
     */
    private $customerSignedTitle = null;

    /**
     * @property string $description
     */
    private $description = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $emails
     */
    private $emails = null;

    /**
     * @property \DateTime $endDate
     */
    private $endDate = null;

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
     * @property bool $isDeleted
     */
    private $isDeleted = null;

    /**
     * @property \DateTime $lastActivityDate
     */
    private $lastActivityDate = null;

    /**
     * @property \DateTime $lastApprovedDate
     */
    private $lastApprovedDate = null;

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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $orders
     */
    private $orders = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $owner
     */
    private $owner = null;

    /**
     * @property string $ownerExpirationNotice
     */
    private $ownerExpirationNotice = null;

    /**
     * @property string $ownerId
     */
    private $ownerId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\Pricebook2Type $pricebook2
     */
    private $pricebook2 = null;

    /**
     * @property string $pricebook2Id
     */
    private $pricebook2Id = null;

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
     * @property string $specialTerms
     */
    private $specialTerms = null;

    /**
     * @property \DateTime $startDate
     */
    private $startDate = null;

    /**
     * @property string $status
     */
    private $status = null;

    /**
     * @property string $statusCode
     */
    private $statusCode = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $tasks
     */
    private $tasks = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $topicAssignments
     */
    private $topicAssignments = null;

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
     * Gets as activatedBy
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType
     */
    public function getActivatedBy()
    {
        return $this->activatedBy;
    }

    /**
     * Sets a new activatedBy
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $activatedBy
     * @return self
     */
    public function setActivatedBy(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $activatedBy)
    {
        $this->activatedBy = $activatedBy;
        return $this;
    }

    /**
     * Gets as activatedById
     *
     * @return string
     */
    public function getActivatedById()
    {
        return $this->activatedById;
    }

    /**
     * Sets a new activatedById
     *
     * @param string $activatedById
     * @return self
     */
    public function setActivatedById($activatedById)
    {
        $this->activatedById = $activatedById;
        return $this;
    }

    /**
     * Gets as activatedDate
     *
     * @return \DateTime
     */
    public function getActivatedDate()
    {
        return $this->activatedDate;
    }

    /**
     * Sets a new activatedDate
     *
     * @param \DateTime $activatedDate
     * @return self
     */
    public function setActivatedDate(\DateTime $activatedDate)
    {
        $this->activatedDate = $activatedDate;
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
     * Gets as billingAddress
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\AddressType
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    /**
     * Sets a new billingAddress
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\AddressType $billingAddress
     * @return self
     */
    public function setBillingAddress(\GoetasWebservices\Client\SalesforceEnterprise\Types\AddressType $billingAddress)
    {
        $this->billingAddress = $billingAddress;
        return $this;
    }

    /**
     * Gets as billingCity
     *
     * @return string
     */
    public function getBillingCity()
    {
        return $this->billingCity;
    }

    /**
     * Sets a new billingCity
     *
     * @param string $billingCity
     * @return self
     */
    public function setBillingCity($billingCity)
    {
        $this->billingCity = $billingCity;
        return $this;
    }

    /**
     * Gets as billingCountry
     *
     * @return string
     */
    public function getBillingCountry()
    {
        return $this->billingCountry;
    }

    /**
     * Sets a new billingCountry
     *
     * @param string $billingCountry
     * @return self
     */
    public function setBillingCountry($billingCountry)
    {
        $this->billingCountry = $billingCountry;
        return $this;
    }

    /**
     * Gets as billingGeocodeAccuracy
     *
     * @return string
     */
    public function getBillingGeocodeAccuracy()
    {
        return $this->billingGeocodeAccuracy;
    }

    /**
     * Sets a new billingGeocodeAccuracy
     *
     * @param string $billingGeocodeAccuracy
     * @return self
     */
    public function setBillingGeocodeAccuracy($billingGeocodeAccuracy)
    {
        $this->billingGeocodeAccuracy = $billingGeocodeAccuracy;
        return $this;
    }

    /**
     * Gets as billingLatitude
     *
     * @return float
     */
    public function getBillingLatitude()
    {
        return $this->billingLatitude;
    }

    /**
     * Sets a new billingLatitude
     *
     * @param float $billingLatitude
     * @return self
     */
    public function setBillingLatitude($billingLatitude)
    {
        $this->billingLatitude = $billingLatitude;
        return $this;
    }

    /**
     * Gets as billingLongitude
     *
     * @return float
     */
    public function getBillingLongitude()
    {
        return $this->billingLongitude;
    }

    /**
     * Sets a new billingLongitude
     *
     * @param float $billingLongitude
     * @return self
     */
    public function setBillingLongitude($billingLongitude)
    {
        $this->billingLongitude = $billingLongitude;
        return $this;
    }

    /**
     * Gets as billingPostalCode
     *
     * @return string
     */
    public function getBillingPostalCode()
    {
        return $this->billingPostalCode;
    }

    /**
     * Sets a new billingPostalCode
     *
     * @param string $billingPostalCode
     * @return self
     */
    public function setBillingPostalCode($billingPostalCode)
    {
        $this->billingPostalCode = $billingPostalCode;
        return $this;
    }

    /**
     * Gets as billingState
     *
     * @return string
     */
    public function getBillingState()
    {
        return $this->billingState;
    }

    /**
     * Sets a new billingState
     *
     * @param string $billingState
     * @return self
     */
    public function setBillingState($billingState)
    {
        $this->billingState = $billingState;
        return $this;
    }

    /**
     * Gets as billingStreet
     *
     * @return string
     */
    public function getBillingStreet()
    {
        return $this->billingStreet;
    }

    /**
     * Sets a new billingStreet
     *
     * @param string $billingStreet
     * @return self
     */
    public function setBillingStreet($billingStreet)
    {
        $this->billingStreet = $billingStreet;
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
     * Gets as companySigned
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType
     */
    public function getCompanySigned()
    {
        return $this->companySigned;
    }

    /**
     * Sets a new companySigned
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $companySigned
     * @return self
     */
    public function setCompanySigned(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $companySigned)
    {
        $this->companySigned = $companySigned;
        return $this;
    }

    /**
     * Gets as companySignedDate
     *
     * @return \DateTime
     */
    public function getCompanySignedDate()
    {
        return $this->companySignedDate;
    }

    /**
     * Sets a new companySignedDate
     *
     * @param \DateTime $companySignedDate
     * @return self
     */
    public function setCompanySignedDate(\DateTime $companySignedDate)
    {
        $this->companySignedDate = $companySignedDate;
        return $this;
    }

    /**
     * Gets as companySignedId
     *
     * @return string
     */
    public function getCompanySignedId()
    {
        return $this->companySignedId;
    }

    /**
     * Sets a new companySignedId
     *
     * @param string $companySignedId
     * @return self
     */
    public function setCompanySignedId($companySignedId)
    {
        $this->companySignedId = $companySignedId;
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
     * Gets as contractNumber
     *
     * @return string
     */
    public function getContractNumber()
    {
        return $this->contractNumber;
    }

    /**
     * Sets a new contractNumber
     *
     * @param string $contractNumber
     * @return self
     */
    public function setContractNumber($contractNumber)
    {
        $this->contractNumber = $contractNumber;
        return $this;
    }

    /**
     * Gets as contractTerm
     *
     * @return int
     */
    public function getContractTerm()
    {
        return $this->contractTerm;
    }

    /**
     * Sets a new contractTerm
     *
     * @param int $contractTerm
     * @return self
     */
    public function setContractTerm($contractTerm)
    {
        $this->contractTerm = $contractTerm;
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
     * Gets as customerSigned
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContactType
     */
    public function getCustomerSigned()
    {
        return $this->customerSigned;
    }

    /**
     * Sets a new customerSigned
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContactType $customerSigned
     * @return self
     */
    public function setCustomerSigned(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContactType $customerSigned)
    {
        $this->customerSigned = $customerSigned;
        return $this;
    }

    /**
     * Gets as customerSignedDate
     *
     * @return \DateTime
     */
    public function getCustomerSignedDate()
    {
        return $this->customerSignedDate;
    }

    /**
     * Sets a new customerSignedDate
     *
     * @param \DateTime $customerSignedDate
     * @return self
     */
    public function setCustomerSignedDate(\DateTime $customerSignedDate)
    {
        $this->customerSignedDate = $customerSignedDate;
        return $this;
    }

    /**
     * Gets as customerSignedId
     *
     * @return string
     */
    public function getCustomerSignedId()
    {
        return $this->customerSignedId;
    }

    /**
     * Sets a new customerSignedId
     *
     * @param string $customerSignedId
     * @return self
     */
    public function setCustomerSignedId($customerSignedId)
    {
        $this->customerSignedId = $customerSignedId;
        return $this;
    }

    /**
     * Gets as customerSignedTitle
     *
     * @return string
     */
    public function getCustomerSignedTitle()
    {
        return $this->customerSignedTitle;
    }

    /**
     * Sets a new customerSignedTitle
     *
     * @param string $customerSignedTitle
     * @return self
     */
    public function setCustomerSignedTitle($customerSignedTitle)
    {
        $this->customerSignedTitle = $customerSignedTitle;
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
     * Gets as endDate
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Sets a new endDate
     *
     * @param \DateTime $endDate
     * @return self
     */
    public function setEndDate(\DateTime $endDate)
    {
        $this->endDate = $endDate;
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
     * Gets as lastApprovedDate
     *
     * @return \DateTime
     */
    public function getLastApprovedDate()
    {
        return $this->lastApprovedDate;
    }

    /**
     * Sets a new lastApprovedDate
     *
     * @param \DateTime $lastApprovedDate
     * @return self
     */
    public function setLastApprovedDate(\DateTime $lastApprovedDate)
    {
        $this->lastApprovedDate = $lastApprovedDate;
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
     * Gets as orders
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getOrders()
    {
        return $this->orders;
    }

    /**
     * Sets a new orders
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $orders
     * @return self
     */
    public function setOrders(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $orders)
    {
        $this->orders = $orders;
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
     * Gets as ownerExpirationNotice
     *
     * @return string
     */
    public function getOwnerExpirationNotice()
    {
        return $this->ownerExpirationNotice;
    }

    /**
     * Sets a new ownerExpirationNotice
     *
     * @param string $ownerExpirationNotice
     * @return self
     */
    public function setOwnerExpirationNotice($ownerExpirationNotice)
    {
        $this->ownerExpirationNotice = $ownerExpirationNotice;
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
     * Gets as pricebook2
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\Pricebook2Type
     */
    public function getPricebook2()
    {
        return $this->pricebook2;
    }

    /**
     * Sets a new pricebook2
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\Pricebook2Type $pricebook2
     * @return self
     */
    public function setPricebook2(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\Pricebook2Type $pricebook2)
    {
        $this->pricebook2 = $pricebook2;
        return $this;
    }

    /**
     * Gets as pricebook2Id
     *
     * @return string
     */
    public function getPricebook2Id()
    {
        return $this->pricebook2Id;
    }

    /**
     * Sets a new pricebook2Id
     *
     * @param string $pricebook2Id
     * @return self
     */
    public function setPricebook2Id($pricebook2Id)
    {
        $this->pricebook2Id = $pricebook2Id;
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
     * Gets as specialTerms
     *
     * @return string
     */
    public function getSpecialTerms()
    {
        return $this->specialTerms;
    }

    /**
     * Sets a new specialTerms
     *
     * @param string $specialTerms
     * @return self
     */
    public function setSpecialTerms($specialTerms)
    {
        $this->specialTerms = $specialTerms;
        return $this;
    }

    /**
     * Gets as startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets a new startDate
     *
     * @param \DateTime $startDate
     * @return self
     */
    public function setStartDate(\DateTime $startDate)
    {
        $this->startDate = $startDate;
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
     * Gets as statusCode
     *
     * @return string
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * Sets a new statusCode
     *
     * @param string $statusCode
     * @return self
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
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

