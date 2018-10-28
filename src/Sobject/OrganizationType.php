<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing OrganizationType
 *
 *
 * XSD Type: Organization
 */
class OrganizationType extends SObjectType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\AddressType $address
     */
    private $address = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $attachedContentDocuments
     */
    private $attachedContentDocuments = null;

    /**
     * @property string $city
     */
    private $city = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $combinedAttachments
     */
    private $combinedAttachments = null;

    /**
     * @property string $complianceBccEmail
     */
    private $complianceBccEmail = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $contentDocumentLinks
     */
    private $contentDocumentLinks = null;

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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $customBrands
     */
    private $customBrands = null;

    /**
     * @property string $defaultAccountAccess
     */
    private $defaultAccountAccess = null;

    /**
     * @property string $defaultCalendarAccess
     */
    private $defaultCalendarAccess = null;

    /**
     * @property string $defaultCampaignAccess
     */
    private $defaultCampaignAccess = null;

    /**
     * @property string $defaultCaseAccess
     */
    private $defaultCaseAccess = null;

    /**
     * @property string $defaultContactAccess
     */
    private $defaultContactAccess = null;

    /**
     * @property string $defaultLeadAccess
     */
    private $defaultLeadAccess = null;

    /**
     * @property string $defaultLocaleSidKey
     */
    private $defaultLocaleSidKey = null;

    /**
     * @property string $defaultOpportunityAccess
     */
    private $defaultOpportunityAccess = null;

    /**
     * @property string $defaultPricebookAccess
     */
    private $defaultPricebookAccess = null;

    /**
     * @property string $division
     */
    private $division = null;

    /**
     * @property string $fax
     */
    private $fax = null;

    /**
     * @property int $fiscalYearStartMonth
     */
    private $fiscalYearStartMonth = null;

    /**
     * @property string $geocodeAccuracy
     */
    private $geocodeAccuracy = null;

    /**
     * @property string $instanceName
     */
    private $instanceName = null;

    /**
     * @property bool $isReadOnly
     */
    private $isReadOnly = null;

    /**
     * @property bool $isSandbox
     */
    private $isSandbox = null;

    /**
     * @property string $languageLocaleKey
     */
    private $languageLocaleKey = null;

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
     * @property float $latitude
     */
    private $latitude = null;

    /**
     * @property float $longitude
     */
    private $longitude = null;

    /**
     * @property int $monthlyPageViewsEntitlement
     */
    private $monthlyPageViewsEntitlement = null;

    /**
     * @property int $monthlyPageViewsUsed
     */
    private $monthlyPageViewsUsed = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $namespacePrefix
     */
    private $namespacePrefix = null;

    /**
     * @property int $numKnowledgeService
     */
    private $numKnowledgeService = null;

    /**
     * @property string $organizationType
     */
    private $organizationType = null;

    /**
     * @property string $phone
     */
    private $phone = null;

    /**
     * @property string $postalCode
     */
    private $postalCode = null;

    /**
     * @property bool $preferencesActivityAnalyticsEnabled
     */
    private $preferencesActivityAnalyticsEnabled = null;

    /**
     * @property bool $preferencesAutoSelectIndividualOnMerge
     */
    private $preferencesAutoSelectIndividualOnMerge = null;

    /**
     * @property bool $preferencesConsentManagementEnabled
     */
    private $preferencesConsentManagementEnabled = null;

    /**
     * @property bool $preferencesIndividualAutoCreateEnabled
     */
    private $preferencesIndividualAutoCreateEnabled = null;

    /**
     * @property bool $preferencesLightningLoginEnabled
     */
    private $preferencesLightningLoginEnabled = null;

    /**
     * @property bool $preferencesOnlyLLPermUserAllowed
     */
    private $preferencesOnlyLLPermUserAllowed = null;

    /**
     * @property bool $preferencesRequireOpportunityProducts
     */
    private $preferencesRequireOpportunityProducts = null;

    /**
     * @property bool $preferencesTerminateOldestSession
     */
    private $preferencesTerminateOldestSession = null;

    /**
     * @property bool $preferencesTransactionSecurityPolicy
     */
    private $preferencesTransactionSecurityPolicy = null;

    /**
     * @property string $primaryContact
     */
    private $primaryContact = null;

    /**
     * @property bool $receivesAdminInfoEmails
     */
    private $receivesAdminInfoEmails = null;

    /**
     * @property bool $receivesInfoEmails
     */
    private $receivesInfoEmails = null;

    /**
     * @property string $signupCountryIsoCode
     */
    private $signupCountryIsoCode = null;

    /**
     * @property string $state
     */
    private $state = null;

    /**
     * @property string $street
     */
    private $street = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property string $timeZoneSidKey
     */
    private $timeZoneSidKey = null;

    /**
     * @property \DateTime $trialExpirationDate
     */
    private $trialExpirationDate = null;

    /**
     * @property string $uiSkin
     */
    private $uiSkin = null;

    /**
     * @property bool $usesStartDateAsFiscalYearName
     */
    private $usesStartDateAsFiscalYearName = null;

    /**
     * @property string $webToCaseDefaultOrigin
     */
    private $webToCaseDefaultOrigin = null;

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
     * Gets as complianceBccEmail
     *
     * @return string
     */
    public function getComplianceBccEmail()
    {
        return $this->complianceBccEmail;
    }

    /**
     * Sets a new complianceBccEmail
     *
     * @param string $complianceBccEmail
     * @return self
     */
    public function setComplianceBccEmail($complianceBccEmail)
    {
        $this->complianceBccEmail = $complianceBccEmail;
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
     * Gets as customBrands
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getCustomBrands()
    {
        return $this->customBrands;
    }

    /**
     * Sets a new customBrands
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $customBrands
     * @return self
     */
    public function setCustomBrands(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $customBrands)
    {
        $this->customBrands = $customBrands;
        return $this;
    }

    /**
     * Gets as defaultAccountAccess
     *
     * @return string
     */
    public function getDefaultAccountAccess()
    {
        return $this->defaultAccountAccess;
    }

    /**
     * Sets a new defaultAccountAccess
     *
     * @param string $defaultAccountAccess
     * @return self
     */
    public function setDefaultAccountAccess($defaultAccountAccess)
    {
        $this->defaultAccountAccess = $defaultAccountAccess;
        return $this;
    }

    /**
     * Gets as defaultCalendarAccess
     *
     * @return string
     */
    public function getDefaultCalendarAccess()
    {
        return $this->defaultCalendarAccess;
    }

    /**
     * Sets a new defaultCalendarAccess
     *
     * @param string $defaultCalendarAccess
     * @return self
     */
    public function setDefaultCalendarAccess($defaultCalendarAccess)
    {
        $this->defaultCalendarAccess = $defaultCalendarAccess;
        return $this;
    }

    /**
     * Gets as defaultCampaignAccess
     *
     * @return string
     */
    public function getDefaultCampaignAccess()
    {
        return $this->defaultCampaignAccess;
    }

    /**
     * Sets a new defaultCampaignAccess
     *
     * @param string $defaultCampaignAccess
     * @return self
     */
    public function setDefaultCampaignAccess($defaultCampaignAccess)
    {
        $this->defaultCampaignAccess = $defaultCampaignAccess;
        return $this;
    }

    /**
     * Gets as defaultCaseAccess
     *
     * @return string
     */
    public function getDefaultCaseAccess()
    {
        return $this->defaultCaseAccess;
    }

    /**
     * Sets a new defaultCaseAccess
     *
     * @param string $defaultCaseAccess
     * @return self
     */
    public function setDefaultCaseAccess($defaultCaseAccess)
    {
        $this->defaultCaseAccess = $defaultCaseAccess;
        return $this;
    }

    /**
     * Gets as defaultContactAccess
     *
     * @return string
     */
    public function getDefaultContactAccess()
    {
        return $this->defaultContactAccess;
    }

    /**
     * Sets a new defaultContactAccess
     *
     * @param string $defaultContactAccess
     * @return self
     */
    public function setDefaultContactAccess($defaultContactAccess)
    {
        $this->defaultContactAccess = $defaultContactAccess;
        return $this;
    }

    /**
     * Gets as defaultLeadAccess
     *
     * @return string
     */
    public function getDefaultLeadAccess()
    {
        return $this->defaultLeadAccess;
    }

    /**
     * Sets a new defaultLeadAccess
     *
     * @param string $defaultLeadAccess
     * @return self
     */
    public function setDefaultLeadAccess($defaultLeadAccess)
    {
        $this->defaultLeadAccess = $defaultLeadAccess;
        return $this;
    }

    /**
     * Gets as defaultLocaleSidKey
     *
     * @return string
     */
    public function getDefaultLocaleSidKey()
    {
        return $this->defaultLocaleSidKey;
    }

    /**
     * Sets a new defaultLocaleSidKey
     *
     * @param string $defaultLocaleSidKey
     * @return self
     */
    public function setDefaultLocaleSidKey($defaultLocaleSidKey)
    {
        $this->defaultLocaleSidKey = $defaultLocaleSidKey;
        return $this;
    }

    /**
     * Gets as defaultOpportunityAccess
     *
     * @return string
     */
    public function getDefaultOpportunityAccess()
    {
        return $this->defaultOpportunityAccess;
    }

    /**
     * Sets a new defaultOpportunityAccess
     *
     * @param string $defaultOpportunityAccess
     * @return self
     */
    public function setDefaultOpportunityAccess($defaultOpportunityAccess)
    {
        $this->defaultOpportunityAccess = $defaultOpportunityAccess;
        return $this;
    }

    /**
     * Gets as defaultPricebookAccess
     *
     * @return string
     */
    public function getDefaultPricebookAccess()
    {
        return $this->defaultPricebookAccess;
    }

    /**
     * Sets a new defaultPricebookAccess
     *
     * @param string $defaultPricebookAccess
     * @return self
     */
    public function setDefaultPricebookAccess($defaultPricebookAccess)
    {
        $this->defaultPricebookAccess = $defaultPricebookAccess;
        return $this;
    }

    /**
     * Gets as division
     *
     * @return string
     */
    public function getDivision()
    {
        return $this->division;
    }

    /**
     * Sets a new division
     *
     * @param string $division
     * @return self
     */
    public function setDivision($division)
    {
        $this->division = $division;
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
     * Gets as fiscalYearStartMonth
     *
     * @return int
     */
    public function getFiscalYearStartMonth()
    {
        return $this->fiscalYearStartMonth;
    }

    /**
     * Sets a new fiscalYearStartMonth
     *
     * @param int $fiscalYearStartMonth
     * @return self
     */
    public function setFiscalYearStartMonth($fiscalYearStartMonth)
    {
        $this->fiscalYearStartMonth = $fiscalYearStartMonth;
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
     * Gets as instanceName
     *
     * @return string
     */
    public function getInstanceName()
    {
        return $this->instanceName;
    }

    /**
     * Sets a new instanceName
     *
     * @param string $instanceName
     * @return self
     */
    public function setInstanceName($instanceName)
    {
        $this->instanceName = $instanceName;
        return $this;
    }

    /**
     * Gets as isReadOnly
     *
     * @return bool
     */
    public function getIsReadOnly()
    {
        return $this->isReadOnly;
    }

    /**
     * Sets a new isReadOnly
     *
     * @param bool $isReadOnly
     * @return self
     */
    public function setIsReadOnly($isReadOnly)
    {
        $this->isReadOnly = $isReadOnly;
        return $this;
    }

    /**
     * Gets as isSandbox
     *
     * @return bool
     */
    public function getIsSandbox()
    {
        return $this->isSandbox;
    }

    /**
     * Sets a new isSandbox
     *
     * @param bool $isSandbox
     * @return self
     */
    public function setIsSandbox($isSandbox)
    {
        $this->isSandbox = $isSandbox;
        return $this;
    }

    /**
     * Gets as languageLocaleKey
     *
     * @return string
     */
    public function getLanguageLocaleKey()
    {
        return $this->languageLocaleKey;
    }

    /**
     * Sets a new languageLocaleKey
     *
     * @param string $languageLocaleKey
     * @return self
     */
    public function setLanguageLocaleKey($languageLocaleKey)
    {
        $this->languageLocaleKey = $languageLocaleKey;
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
     * Gets as monthlyPageViewsEntitlement
     *
     * @return int
     */
    public function getMonthlyPageViewsEntitlement()
    {
        return $this->monthlyPageViewsEntitlement;
    }

    /**
     * Sets a new monthlyPageViewsEntitlement
     *
     * @param int $monthlyPageViewsEntitlement
     * @return self
     */
    public function setMonthlyPageViewsEntitlement($monthlyPageViewsEntitlement)
    {
        $this->monthlyPageViewsEntitlement = $monthlyPageViewsEntitlement;
        return $this;
    }

    /**
     * Gets as monthlyPageViewsUsed
     *
     * @return int
     */
    public function getMonthlyPageViewsUsed()
    {
        return $this->monthlyPageViewsUsed;
    }

    /**
     * Sets a new monthlyPageViewsUsed
     *
     * @param int $monthlyPageViewsUsed
     * @return self
     */
    public function setMonthlyPageViewsUsed($monthlyPageViewsUsed)
    {
        $this->monthlyPageViewsUsed = $monthlyPageViewsUsed;
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
     * Gets as namespacePrefix
     *
     * @return string
     */
    public function getNamespacePrefix()
    {
        return $this->namespacePrefix;
    }

    /**
     * Sets a new namespacePrefix
     *
     * @param string $namespacePrefix
     * @return self
     */
    public function setNamespacePrefix($namespacePrefix)
    {
        $this->namespacePrefix = $namespacePrefix;
        return $this;
    }

    /**
     * Gets as numKnowledgeService
     *
     * @return int
     */
    public function getNumKnowledgeService()
    {
        return $this->numKnowledgeService;
    }

    /**
     * Sets a new numKnowledgeService
     *
     * @param int $numKnowledgeService
     * @return self
     */
    public function setNumKnowledgeService($numKnowledgeService)
    {
        $this->numKnowledgeService = $numKnowledgeService;
        return $this;
    }

    /**
     * Gets as organizationType
     *
     * @return string
     */
    public function getOrganizationType()
    {
        return $this->organizationType;
    }

    /**
     * Sets a new organizationType
     *
     * @param string $organizationType
     * @return self
     */
    public function setOrganizationType($organizationType)
    {
        $this->organizationType = $organizationType;
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
     * Gets as preferencesActivityAnalyticsEnabled
     *
     * @return bool
     */
    public function getPreferencesActivityAnalyticsEnabled()
    {
        return $this->preferencesActivityAnalyticsEnabled;
    }

    /**
     * Sets a new preferencesActivityAnalyticsEnabled
     *
     * @param bool $preferencesActivityAnalyticsEnabled
     * @return self
     */
    public function setPreferencesActivityAnalyticsEnabled($preferencesActivityAnalyticsEnabled)
    {
        $this->preferencesActivityAnalyticsEnabled = $preferencesActivityAnalyticsEnabled;
        return $this;
    }

    /**
     * Gets as preferencesAutoSelectIndividualOnMerge
     *
     * @return bool
     */
    public function getPreferencesAutoSelectIndividualOnMerge()
    {
        return $this->preferencesAutoSelectIndividualOnMerge;
    }

    /**
     * Sets a new preferencesAutoSelectIndividualOnMerge
     *
     * @param bool $preferencesAutoSelectIndividualOnMerge
     * @return self
     */
    public function setPreferencesAutoSelectIndividualOnMerge($preferencesAutoSelectIndividualOnMerge)
    {
        $this->preferencesAutoSelectIndividualOnMerge = $preferencesAutoSelectIndividualOnMerge;
        return $this;
    }

    /**
     * Gets as preferencesConsentManagementEnabled
     *
     * @return bool
     */
    public function getPreferencesConsentManagementEnabled()
    {
        return $this->preferencesConsentManagementEnabled;
    }

    /**
     * Sets a new preferencesConsentManagementEnabled
     *
     * @param bool $preferencesConsentManagementEnabled
     * @return self
     */
    public function setPreferencesConsentManagementEnabled($preferencesConsentManagementEnabled)
    {
        $this->preferencesConsentManagementEnabled = $preferencesConsentManagementEnabled;
        return $this;
    }

    /**
     * Gets as preferencesIndividualAutoCreateEnabled
     *
     * @return bool
     */
    public function getPreferencesIndividualAutoCreateEnabled()
    {
        return $this->preferencesIndividualAutoCreateEnabled;
    }

    /**
     * Sets a new preferencesIndividualAutoCreateEnabled
     *
     * @param bool $preferencesIndividualAutoCreateEnabled
     * @return self
     */
    public function setPreferencesIndividualAutoCreateEnabled($preferencesIndividualAutoCreateEnabled)
    {
        $this->preferencesIndividualAutoCreateEnabled = $preferencesIndividualAutoCreateEnabled;
        return $this;
    }

    /**
     * Gets as preferencesLightningLoginEnabled
     *
     * @return bool
     */
    public function getPreferencesLightningLoginEnabled()
    {
        return $this->preferencesLightningLoginEnabled;
    }

    /**
     * Sets a new preferencesLightningLoginEnabled
     *
     * @param bool $preferencesLightningLoginEnabled
     * @return self
     */
    public function setPreferencesLightningLoginEnabled($preferencesLightningLoginEnabled)
    {
        $this->preferencesLightningLoginEnabled = $preferencesLightningLoginEnabled;
        return $this;
    }

    /**
     * Gets as preferencesOnlyLLPermUserAllowed
     *
     * @return bool
     */
    public function getPreferencesOnlyLLPermUserAllowed()
    {
        return $this->preferencesOnlyLLPermUserAllowed;
    }

    /**
     * Sets a new preferencesOnlyLLPermUserAllowed
     *
     * @param bool $preferencesOnlyLLPermUserAllowed
     * @return self
     */
    public function setPreferencesOnlyLLPermUserAllowed($preferencesOnlyLLPermUserAllowed)
    {
        $this->preferencesOnlyLLPermUserAllowed = $preferencesOnlyLLPermUserAllowed;
        return $this;
    }

    /**
     * Gets as preferencesRequireOpportunityProducts
     *
     * @return bool
     */
    public function getPreferencesRequireOpportunityProducts()
    {
        return $this->preferencesRequireOpportunityProducts;
    }

    /**
     * Sets a new preferencesRequireOpportunityProducts
     *
     * @param bool $preferencesRequireOpportunityProducts
     * @return self
     */
    public function setPreferencesRequireOpportunityProducts($preferencesRequireOpportunityProducts)
    {
        $this->preferencesRequireOpportunityProducts = $preferencesRequireOpportunityProducts;
        return $this;
    }

    /**
     * Gets as preferencesTerminateOldestSession
     *
     * @return bool
     */
    public function getPreferencesTerminateOldestSession()
    {
        return $this->preferencesTerminateOldestSession;
    }

    /**
     * Sets a new preferencesTerminateOldestSession
     *
     * @param bool $preferencesTerminateOldestSession
     * @return self
     */
    public function setPreferencesTerminateOldestSession($preferencesTerminateOldestSession)
    {
        $this->preferencesTerminateOldestSession = $preferencesTerminateOldestSession;
        return $this;
    }

    /**
     * Gets as preferencesTransactionSecurityPolicy
     *
     * @return bool
     */
    public function getPreferencesTransactionSecurityPolicy()
    {
        return $this->preferencesTransactionSecurityPolicy;
    }

    /**
     * Sets a new preferencesTransactionSecurityPolicy
     *
     * @param bool $preferencesTransactionSecurityPolicy
     * @return self
     */
    public function setPreferencesTransactionSecurityPolicy($preferencesTransactionSecurityPolicy)
    {
        $this->preferencesTransactionSecurityPolicy = $preferencesTransactionSecurityPolicy;
        return $this;
    }

    /**
     * Gets as primaryContact
     *
     * @return string
     */
    public function getPrimaryContact()
    {
        return $this->primaryContact;
    }

    /**
     * Sets a new primaryContact
     *
     * @param string $primaryContact
     * @return self
     */
    public function setPrimaryContact($primaryContact)
    {
        $this->primaryContact = $primaryContact;
        return $this;
    }

    /**
     * Gets as receivesAdminInfoEmails
     *
     * @return bool
     */
    public function getReceivesAdminInfoEmails()
    {
        return $this->receivesAdminInfoEmails;
    }

    /**
     * Sets a new receivesAdminInfoEmails
     *
     * @param bool $receivesAdminInfoEmails
     * @return self
     */
    public function setReceivesAdminInfoEmails($receivesAdminInfoEmails)
    {
        $this->receivesAdminInfoEmails = $receivesAdminInfoEmails;
        return $this;
    }

    /**
     * Gets as receivesInfoEmails
     *
     * @return bool
     */
    public function getReceivesInfoEmails()
    {
        return $this->receivesInfoEmails;
    }

    /**
     * Sets a new receivesInfoEmails
     *
     * @param bool $receivesInfoEmails
     * @return self
     */
    public function setReceivesInfoEmails($receivesInfoEmails)
    {
        $this->receivesInfoEmails = $receivesInfoEmails;
        return $this;
    }

    /**
     * Gets as signupCountryIsoCode
     *
     * @return string
     */
    public function getSignupCountryIsoCode()
    {
        return $this->signupCountryIsoCode;
    }

    /**
     * Sets a new signupCountryIsoCode
     *
     * @param string $signupCountryIsoCode
     * @return self
     */
    public function setSignupCountryIsoCode($signupCountryIsoCode)
    {
        $this->signupCountryIsoCode = $signupCountryIsoCode;
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
     * Gets as timeZoneSidKey
     *
     * @return string
     */
    public function getTimeZoneSidKey()
    {
        return $this->timeZoneSidKey;
    }

    /**
     * Sets a new timeZoneSidKey
     *
     * @param string $timeZoneSidKey
     * @return self
     */
    public function setTimeZoneSidKey($timeZoneSidKey)
    {
        $this->timeZoneSidKey = $timeZoneSidKey;
        return $this;
    }

    /**
     * Gets as trialExpirationDate
     *
     * @return \DateTime
     */
    public function getTrialExpirationDate()
    {
        return $this->trialExpirationDate;
    }

    /**
     * Sets a new trialExpirationDate
     *
     * @param \DateTime $trialExpirationDate
     * @return self
     */
    public function setTrialExpirationDate(\DateTime $trialExpirationDate)
    {
        $this->trialExpirationDate = $trialExpirationDate;
        return $this;
    }

    /**
     * Gets as uiSkin
     *
     * @return string
     */
    public function getUiSkin()
    {
        return $this->uiSkin;
    }

    /**
     * Sets a new uiSkin
     *
     * @param string $uiSkin
     * @return self
     */
    public function setUiSkin($uiSkin)
    {
        $this->uiSkin = $uiSkin;
        return $this;
    }

    /**
     * Gets as usesStartDateAsFiscalYearName
     *
     * @return bool
     */
    public function getUsesStartDateAsFiscalYearName()
    {
        return $this->usesStartDateAsFiscalYearName;
    }

    /**
     * Sets a new usesStartDateAsFiscalYearName
     *
     * @param bool $usesStartDateAsFiscalYearName
     * @return self
     */
    public function setUsesStartDateAsFiscalYearName($usesStartDateAsFiscalYearName)
    {
        $this->usesStartDateAsFiscalYearName = $usesStartDateAsFiscalYearName;
        return $this;
    }

    /**
     * Gets as webToCaseDefaultOrigin
     *
     * @return string
     */
    public function getWebToCaseDefaultOrigin()
    {
        return $this->webToCaseDefaultOrigin;
    }

    /**
     * Sets a new webToCaseDefaultOrigin
     *
     * @param string $webToCaseDefaultOrigin
     * @return self
     */
    public function setWebToCaseDefaultOrigin($webToCaseDefaultOrigin)
    {
        $this->webToCaseDefaultOrigin = $webToCaseDefaultOrigin;
        return $this;
    }


}

