<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing AccountType
 *
 *
 * XSD Type: Account
 */
class AccountType extends SObjectType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $accountCleanInfos
     */
    private $accountCleanInfos = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $accountContactRoles
     */
    private $accountContactRoles = null;

    /**
     * @property string $accountNumber
     */
    private $accountNumber = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $accountPartnersFrom
     */
    private $accountPartnersFrom = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $accountPartnersTo
     */
    private $accountPartnersTo = null;

    /**
     * @property string $accountSource
     */
    private $accountSource = null;

    /**
     * @property string $activeC
     */
    private $activeC = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $activityHistories
     */
    private $activityHistories = null;

    /**
     * @property float $annualRevenue
     */
    private $annualRevenue = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $assets
     */
    private $assets = null;

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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $cases
     */
    private $cases = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $childAccounts
     */
    private $childAccounts = null;

    /**
     * @property string $cleanStatus
     */
    private $cleanStatus = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $combinedAttachments
     */
    private $combinedAttachments = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $contacts
     */
    private $contacts = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $contentDocumentLinks
     */
    private $contentDocumentLinks = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $contracts
     */
    private $contracts = null;

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
     * @property string $customerPriorityC
     */
    private $customerPriorityC = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\DandBCompanyType $dandbCompany
     */
    private $dandbCompany = null;

    /**
     * @property string $dandbCompanyId
     */
    private $dandbCompanyId = null;

    /**
     * @property string $description
     */
    private $description = null;

    /**
     * @property string $dunsNumber
     */
    private $dunsNumber = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $duplicateRecordItems
     */
    private $duplicateRecordItems = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $emails
     */
    private $emails = null;

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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $histories
     */
    private $histories = null;

    /**
     * @property string $industry
     */
    private $industry = null;

    /**
     * @property bool $isDeleted
     */
    private $isDeleted = null;

    /**
     * @property string $jigsaw
     */
    private $jigsaw = null;

    /**
     * @property string $jigsawCompanyId
     */
    private $jigsawCompanyId = null;

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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AccountType $masterRecord
     */
    private $masterRecord = null;

    /**
     * @property string $masterRecordId
     */
    private $masterRecordId = null;

    /**
     * @property string $naicsCode
     */
    private $naicsCode = null;

    /**
     * @property string $naicsDesc
     */
    private $naicsDesc = null;

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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $opportunities
     */
    private $opportunities = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $opportunityPartnersTo
     */
    private $opportunityPartnersTo = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $orders
     */
    private $orders = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $owner
     */
    private $owner = null;

    /**
     * @property string $ownerId
     */
    private $ownerId = null;

    /**
     * @property string $ownership
     */
    private $ownership = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AccountType $parent
     */
    private $parent = null;

    /**
     * @property string $parentId
     */
    private $parentId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $partnersFrom
     */
    private $partnersFrom = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $partnersTo
     */
    private $partnersTo = null;

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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $providedAssets
     */
    private $providedAssets = null;

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
     * @property \DateTime $sLAExpirationDateC
     */
    private $sLAExpirationDateC = null;

    /**
     * @property string $sLASerialNumberC
     */
    private $sLASerialNumberC = null;

    /**
     * @property string $sLAC
     */
    private $sLAC = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $servicedAssets
     */
    private $servicedAssets = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $shares
     */
    private $shares = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\AddressType $shippingAddress
     */
    private $shippingAddress = null;

    /**
     * @property string $shippingCity
     */
    private $shippingCity = null;

    /**
     * @property string $shippingCountry
     */
    private $shippingCountry = null;

    /**
     * @property string $shippingGeocodeAccuracy
     */
    private $shippingGeocodeAccuracy = null;

    /**
     * @property float $shippingLatitude
     */
    private $shippingLatitude = null;

    /**
     * @property float $shippingLongitude
     */
    private $shippingLongitude = null;

    /**
     * @property string $shippingPostalCode
     */
    private $shippingPostalCode = null;

    /**
     * @property string $shippingState
     */
    private $shippingState = null;

    /**
     * @property string $shippingStreet
     */
    private $shippingStreet = null;

    /**
     * @property string $sic
     */
    private $sic = null;

    /**
     * @property string $sicDesc
     */
    private $sicDesc = null;

    /**
     * @property string $site
     */
    private $site = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $tasks
     */
    private $tasks = null;

    /**
     * @property string $tickerSymbol
     */
    private $tickerSymbol = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $topicAssignments
     */
    private $topicAssignments = null;

    /**
     * @property string $tradestyle
     */
    private $tradestyle = null;

    /**
     * @property string $type
     */
    private $type = null;

    /**
     * @property string $upsellOpportunityC
     */
    private $upsellOpportunityC = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserRecordAccessType $userRecordAccess
     */
    private $userRecordAccess = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $users
     */
    private $users = null;

    /**
     * @property string $website
     */
    private $website = null;

    /**
     * @property string $yearStarted
     */
    private $yearStarted = null;

    /**
     * Gets as accountCleanInfos
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getAccountCleanInfos()
    {
        return $this->accountCleanInfos;
    }

    /**
     * Sets a new accountCleanInfos
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $accountCleanInfos
     * @return self
     */
    public function setAccountCleanInfos(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $accountCleanInfos)
    {
        $this->accountCleanInfos = $accountCleanInfos;
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
     * Gets as accountNumber
     *
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * Sets a new accountNumber
     *
     * @param string $accountNumber
     * @return self
     */
    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;
        return $this;
    }

    /**
     * Gets as accountPartnersFrom
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getAccountPartnersFrom()
    {
        return $this->accountPartnersFrom;
    }

    /**
     * Sets a new accountPartnersFrom
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $accountPartnersFrom
     * @return self
     */
    public function setAccountPartnersFrom(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $accountPartnersFrom)
    {
        $this->accountPartnersFrom = $accountPartnersFrom;
        return $this;
    }

    /**
     * Gets as accountPartnersTo
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getAccountPartnersTo()
    {
        return $this->accountPartnersTo;
    }

    /**
     * Sets a new accountPartnersTo
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $accountPartnersTo
     * @return self
     */
    public function setAccountPartnersTo(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $accountPartnersTo)
    {
        $this->accountPartnersTo = $accountPartnersTo;
        return $this;
    }

    /**
     * Gets as accountSource
     *
     * @return string
     */
    public function getAccountSource()
    {
        return $this->accountSource;
    }

    /**
     * Sets a new accountSource
     *
     * @param string $accountSource
     * @return self
     */
    public function setAccountSource($accountSource)
    {
        $this->accountSource = $accountSource;
        return $this;
    }

    /**
     * Gets as activeC
     *
     * @return string
     */
    public function getActiveC()
    {
        return $this->activeC;
    }

    /**
     * Sets a new activeC
     *
     * @param string $activeC
     * @return self
     */
    public function setActiveC($activeC)
    {
        $this->activeC = $activeC;
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
     * Gets as childAccounts
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getChildAccounts()
    {
        return $this->childAccounts;
    }

    /**
     * Sets a new childAccounts
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $childAccounts
     * @return self
     */
    public function setChildAccounts(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $childAccounts)
    {
        $this->childAccounts = $childAccounts;
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
     * Gets as contacts
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * Sets a new contacts
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $contacts
     * @return self
     */
    public function setContacts(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $contacts)
    {
        $this->contacts = $contacts;
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
     * Gets as contracts
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getContracts()
    {
        return $this->contracts;
    }

    /**
     * Sets a new contracts
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $contracts
     * @return self
     */
    public function setContracts(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $contracts)
    {
        $this->contracts = $contracts;
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
     * Gets as customerPriorityC
     *
     * @return string
     */
    public function getCustomerPriorityC()
    {
        return $this->customerPriorityC;
    }

    /**
     * Sets a new customerPriorityC
     *
     * @param string $customerPriorityC
     * @return self
     */
    public function setCustomerPriorityC($customerPriorityC)
    {
        $this->customerPriorityC = $customerPriorityC;
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
     * Gets as dunsNumber
     *
     * @return string
     */
    public function getDunsNumber()
    {
        return $this->dunsNumber;
    }

    /**
     * Sets a new dunsNumber
     *
     * @param string $dunsNumber
     * @return self
     */
    public function setDunsNumber($dunsNumber)
    {
        $this->dunsNumber = $dunsNumber;
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
     * Gets as jigsawCompanyId
     *
     * @return string
     */
    public function getJigsawCompanyId()
    {
        return $this->jigsawCompanyId;
    }

    /**
     * Sets a new jigsawCompanyId
     *
     * @param string $jigsawCompanyId
     * @return self
     */
    public function setJigsawCompanyId($jigsawCompanyId)
    {
        $this->jigsawCompanyId = $jigsawCompanyId;
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
     * Gets as masterRecord
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AccountType
     */
    public function getMasterRecord()
    {
        return $this->masterRecord;
    }

    /**
     * Sets a new masterRecord
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AccountType $masterRecord
     * @return self
     */
    public function setMasterRecord(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\AccountType $masterRecord)
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
     * Gets as naicsCode
     *
     * @return string
     */
    public function getNaicsCode()
    {
        return $this->naicsCode;
    }

    /**
     * Sets a new naicsCode
     *
     * @param string $naicsCode
     * @return self
     */
    public function setNaicsCode($naicsCode)
    {
        $this->naicsCode = $naicsCode;
        return $this;
    }

    /**
     * Gets as naicsDesc
     *
     * @return string
     */
    public function getNaicsDesc()
    {
        return $this->naicsDesc;
    }

    /**
     * Sets a new naicsDesc
     *
     * @param string $naicsDesc
     * @return self
     */
    public function setNaicsDesc($naicsDesc)
    {
        $this->naicsDesc = $naicsDesc;
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
     * Gets as opportunityPartnersTo
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getOpportunityPartnersTo()
    {
        return $this->opportunityPartnersTo;
    }

    /**
     * Sets a new opportunityPartnersTo
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $opportunityPartnersTo
     * @return self
     */
    public function setOpportunityPartnersTo(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $opportunityPartnersTo)
    {
        $this->opportunityPartnersTo = $opportunityPartnersTo;
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
     * Gets as ownership
     *
     * @return string
     */
    public function getOwnership()
    {
        return $this->ownership;
    }

    /**
     * Sets a new ownership
     *
     * @param string $ownership
     * @return self
     */
    public function setOwnership($ownership)
    {
        $this->ownership = $ownership;
        return $this;
    }

    /**
     * Gets as parent
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AccountType
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Sets a new parent
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AccountType $parent
     * @return self
     */
    public function setParent(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\AccountType $parent)
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
     * Gets as partnersFrom
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getPartnersFrom()
    {
        return $this->partnersFrom;
    }

    /**
     * Sets a new partnersFrom
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $partnersFrom
     * @return self
     */
    public function setPartnersFrom(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $partnersFrom)
    {
        $this->partnersFrom = $partnersFrom;
        return $this;
    }

    /**
     * Gets as partnersTo
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getPartnersTo()
    {
        return $this->partnersTo;
    }

    /**
     * Sets a new partnersTo
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $partnersTo
     * @return self
     */
    public function setPartnersTo(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $partnersTo)
    {
        $this->partnersTo = $partnersTo;
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
     * Gets as providedAssets
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getProvidedAssets()
    {
        return $this->providedAssets;
    }

    /**
     * Sets a new providedAssets
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $providedAssets
     * @return self
     */
    public function setProvidedAssets(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $providedAssets)
    {
        $this->providedAssets = $providedAssets;
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
     * Gets as sLAExpirationDateC
     *
     * @return \DateTime
     */
    public function getSLAExpirationDateC()
    {
        return $this->sLAExpirationDateC;
    }

    /**
     * Sets a new sLAExpirationDateC
     *
     * @param \DateTime $sLAExpirationDateC
     * @return self
     */
    public function setSLAExpirationDateC(\DateTime $sLAExpirationDateC)
    {
        $this->sLAExpirationDateC = $sLAExpirationDateC;
        return $this;
    }

    /**
     * Gets as sLASerialNumberC
     *
     * @return string
     */
    public function getSLASerialNumberC()
    {
        return $this->sLASerialNumberC;
    }

    /**
     * Sets a new sLASerialNumberC
     *
     * @param string $sLASerialNumberC
     * @return self
     */
    public function setSLASerialNumberC($sLASerialNumberC)
    {
        $this->sLASerialNumberC = $sLASerialNumberC;
        return $this;
    }

    /**
     * Gets as sLAC
     *
     * @return string
     */
    public function getSLAC()
    {
        return $this->sLAC;
    }

    /**
     * Sets a new sLAC
     *
     * @param string $sLAC
     * @return self
     */
    public function setSLAC($sLAC)
    {
        $this->sLAC = $sLAC;
        return $this;
    }

    /**
     * Gets as servicedAssets
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getServicedAssets()
    {
        return $this->servicedAssets;
    }

    /**
     * Sets a new servicedAssets
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $servicedAssets
     * @return self
     */
    public function setServicedAssets(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $servicedAssets)
    {
        $this->servicedAssets = $servicedAssets;
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
     * Gets as shippingAddress
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\AddressType
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    /**
     * Sets a new shippingAddress
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\AddressType $shippingAddress
     * @return self
     */
    public function setShippingAddress(\GoetasWebservices\Client\SalesforceEnterprise\Types\AddressType $shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;
        return $this;
    }

    /**
     * Gets as shippingCity
     *
     * @return string
     */
    public function getShippingCity()
    {
        return $this->shippingCity;
    }

    /**
     * Sets a new shippingCity
     *
     * @param string $shippingCity
     * @return self
     */
    public function setShippingCity($shippingCity)
    {
        $this->shippingCity = $shippingCity;
        return $this;
    }

    /**
     * Gets as shippingCountry
     *
     * @return string
     */
    public function getShippingCountry()
    {
        return $this->shippingCountry;
    }

    /**
     * Sets a new shippingCountry
     *
     * @param string $shippingCountry
     * @return self
     */
    public function setShippingCountry($shippingCountry)
    {
        $this->shippingCountry = $shippingCountry;
        return $this;
    }

    /**
     * Gets as shippingGeocodeAccuracy
     *
     * @return string
     */
    public function getShippingGeocodeAccuracy()
    {
        return $this->shippingGeocodeAccuracy;
    }

    /**
     * Sets a new shippingGeocodeAccuracy
     *
     * @param string $shippingGeocodeAccuracy
     * @return self
     */
    public function setShippingGeocodeAccuracy($shippingGeocodeAccuracy)
    {
        $this->shippingGeocodeAccuracy = $shippingGeocodeAccuracy;
        return $this;
    }

    /**
     * Gets as shippingLatitude
     *
     * @return float
     */
    public function getShippingLatitude()
    {
        return $this->shippingLatitude;
    }

    /**
     * Sets a new shippingLatitude
     *
     * @param float $shippingLatitude
     * @return self
     */
    public function setShippingLatitude($shippingLatitude)
    {
        $this->shippingLatitude = $shippingLatitude;
        return $this;
    }

    /**
     * Gets as shippingLongitude
     *
     * @return float
     */
    public function getShippingLongitude()
    {
        return $this->shippingLongitude;
    }

    /**
     * Sets a new shippingLongitude
     *
     * @param float $shippingLongitude
     * @return self
     */
    public function setShippingLongitude($shippingLongitude)
    {
        $this->shippingLongitude = $shippingLongitude;
        return $this;
    }

    /**
     * Gets as shippingPostalCode
     *
     * @return string
     */
    public function getShippingPostalCode()
    {
        return $this->shippingPostalCode;
    }

    /**
     * Sets a new shippingPostalCode
     *
     * @param string $shippingPostalCode
     * @return self
     */
    public function setShippingPostalCode($shippingPostalCode)
    {
        $this->shippingPostalCode = $shippingPostalCode;
        return $this;
    }

    /**
     * Gets as shippingState
     *
     * @return string
     */
    public function getShippingState()
    {
        return $this->shippingState;
    }

    /**
     * Sets a new shippingState
     *
     * @param string $shippingState
     * @return self
     */
    public function setShippingState($shippingState)
    {
        $this->shippingState = $shippingState;
        return $this;
    }

    /**
     * Gets as shippingStreet
     *
     * @return string
     */
    public function getShippingStreet()
    {
        return $this->shippingStreet;
    }

    /**
     * Sets a new shippingStreet
     *
     * @param string $shippingStreet
     * @return self
     */
    public function setShippingStreet($shippingStreet)
    {
        $this->shippingStreet = $shippingStreet;
        return $this;
    }

    /**
     * Gets as sic
     *
     * @return string
     */
    public function getSic()
    {
        return $this->sic;
    }

    /**
     * Sets a new sic
     *
     * @param string $sic
     * @return self
     */
    public function setSic($sic)
    {
        $this->sic = $sic;
        return $this;
    }

    /**
     * Gets as sicDesc
     *
     * @return string
     */
    public function getSicDesc()
    {
        return $this->sicDesc;
    }

    /**
     * Sets a new sicDesc
     *
     * @param string $sicDesc
     * @return self
     */
    public function setSicDesc($sicDesc)
    {
        $this->sicDesc = $sicDesc;
        return $this;
    }

    /**
     * Gets as site
     *
     * @return string
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Sets a new site
     *
     * @param string $site
     * @return self
     */
    public function setSite($site)
    {
        $this->site = $site;
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
     * Gets as tickerSymbol
     *
     * @return string
     */
    public function getTickerSymbol()
    {
        return $this->tickerSymbol;
    }

    /**
     * Sets a new tickerSymbol
     *
     * @param string $tickerSymbol
     * @return self
     */
    public function setTickerSymbol($tickerSymbol)
    {
        $this->tickerSymbol = $tickerSymbol;
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
     * Gets as tradestyle
     *
     * @return string
     */
    public function getTradestyle()
    {
        return $this->tradestyle;
    }

    /**
     * Sets a new tradestyle
     *
     * @param string $tradestyle
     * @return self
     */
    public function setTradestyle($tradestyle)
    {
        $this->tradestyle = $tradestyle;
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
     * Gets as upsellOpportunityC
     *
     * @return string
     */
    public function getUpsellOpportunityC()
    {
        return $this->upsellOpportunityC;
    }

    /**
     * Sets a new upsellOpportunityC
     *
     * @param string $upsellOpportunityC
     * @return self
     */
    public function setUpsellOpportunityC($upsellOpportunityC)
    {
        $this->upsellOpportunityC = $upsellOpportunityC;
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

    /**
     * Gets as yearStarted
     *
     * @return string
     */
    public function getYearStarted()
    {
        return $this->yearStarted;
    }

    /**
     * Sets a new yearStarted
     *
     * @param string $yearStarted
     * @return self
     */
    public function setYearStarted($yearStarted)
    {
        $this->yearStarted = $yearStarted;
        return $this;
    }


}

