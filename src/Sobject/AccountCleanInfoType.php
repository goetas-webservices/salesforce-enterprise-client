<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing AccountCleanInfoType
 *
 *
 * XSD Type: AccountCleanInfo
 */
class AccountCleanInfoType extends SObjectType
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
     * @property string $accountSite
     */
    private $accountSite = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\AddressType $address
     */
    private $address = null;

    /**
     * @property float $annualRevenue
     */
    private $annualRevenue = null;

    /**
     * @property string $city
     */
    private $city = null;

    /**
     * @property bool $cleanedByJob
     */
    private $cleanedByJob = null;

    /**
     * @property bool $cleanedByUser
     */
    private $cleanedByUser = null;

    /**
     * @property string $companyName
     */
    private $companyName = null;

    /**
     * @property string $companyStatusDataDotCom
     */
    private $companyStatusDataDotCom = null;

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
     * @property string $dandBCompanyDunsNumber
     */
    private $dandBCompanyDunsNumber = null;

    /**
     * @property string $dataDotComId
     */
    private $dataDotComId = null;

    /**
     * @property string $description
     */
    private $description = null;

    /**
     * @property string $dunsNumber
     */
    private $dunsNumber = null;

    /**
     * @property int $dunsRightMatchConfidence
     */
    private $dunsRightMatchConfidence = null;

    /**
     * @property string $dunsRightMatchGrade
     */
    private $dunsRightMatchGrade = null;

    /**
     * @property string $fax
     */
    private $fax = null;

    /**
     * @property string $geocodeAccuracy
     */
    private $geocodeAccuracy = null;

    /**
     * @property string $industry
     */
    private $industry = null;

    /**
     * @property bool $isDeleted
     */
    private $isDeleted = null;

    /**
     * @property bool $isDifferentAccountSite
     */
    private $isDifferentAccountSite = null;

    /**
     * @property bool $isDifferentAnnualRevenue
     */
    private $isDifferentAnnualRevenue = null;

    /**
     * @property bool $isDifferentCity
     */
    private $isDifferentCity = null;

    /**
     * @property bool $isDifferentCompanyName
     */
    private $isDifferentCompanyName = null;

    /**
     * @property bool $isDifferentCountry
     */
    private $isDifferentCountry = null;

    /**
     * @property bool $isDifferentCountryCode
     */
    private $isDifferentCountryCode = null;

    /**
     * @property bool $isDifferentDandBCompanyDunsNumber
     */
    private $isDifferentDandBCompanyDunsNumber = null;

    /**
     * @property bool $isDifferentDescription
     */
    private $isDifferentDescription = null;

    /**
     * @property bool $isDifferentDunsNumber
     */
    private $isDifferentDunsNumber = null;

    /**
     * @property bool $isDifferentFax
     */
    private $isDifferentFax = null;

    /**
     * @property bool $isDifferentIndustry
     */
    private $isDifferentIndustry = null;

    /**
     * @property bool $isDifferentNaicsCode
     */
    private $isDifferentNaicsCode = null;

    /**
     * @property bool $isDifferentNaicsDescription
     */
    private $isDifferentNaicsDescription = null;

    /**
     * @property bool $isDifferentNumberOfEmployees
     */
    private $isDifferentNumberOfEmployees = null;

    /**
     * @property bool $isDifferentOwnership
     */
    private $isDifferentOwnership = null;

    /**
     * @property bool $isDifferentPhone
     */
    private $isDifferentPhone = null;

    /**
     * @property bool $isDifferentPostalCode
     */
    private $isDifferentPostalCode = null;

    /**
     * @property bool $isDifferentSic
     */
    private $isDifferentSic = null;

    /**
     * @property bool $isDifferentSicDescription
     */
    private $isDifferentSicDescription = null;

    /**
     * @property bool $isDifferentState
     */
    private $isDifferentState = null;

    /**
     * @property bool $isDifferentStateCode
     */
    private $isDifferentStateCode = null;

    /**
     * @property bool $isDifferentStreet
     */
    private $isDifferentStreet = null;

    /**
     * @property bool $isDifferentTickerSymbol
     */
    private $isDifferentTickerSymbol = null;

    /**
     * @property bool $isDifferentTradestyle
     */
    private $isDifferentTradestyle = null;

    /**
     * @property bool $isDifferentWebsite
     */
    private $isDifferentWebsite = null;

    /**
     * @property bool $isDifferentYearStarted
     */
    private $isDifferentYearStarted = null;

    /**
     * @property bool $isFlaggedWrongAccountSite
     */
    private $isFlaggedWrongAccountSite = null;

    /**
     * @property bool $isFlaggedWrongAddress
     */
    private $isFlaggedWrongAddress = null;

    /**
     * @property bool $isFlaggedWrongAnnualRevenue
     */
    private $isFlaggedWrongAnnualRevenue = null;

    /**
     * @property bool $isFlaggedWrongCompanyName
     */
    private $isFlaggedWrongCompanyName = null;

    /**
     * @property bool $isFlaggedWrongDescription
     */
    private $isFlaggedWrongDescription = null;

    /**
     * @property bool $isFlaggedWrongDunsNumber
     */
    private $isFlaggedWrongDunsNumber = null;

    /**
     * @property bool $isFlaggedWrongFax
     */
    private $isFlaggedWrongFax = null;

    /**
     * @property bool $isFlaggedWrongIndustry
     */
    private $isFlaggedWrongIndustry = null;

    /**
     * @property bool $isFlaggedWrongNaicsCode
     */
    private $isFlaggedWrongNaicsCode = null;

    /**
     * @property bool $isFlaggedWrongNaicsDescription
     */
    private $isFlaggedWrongNaicsDescription = null;

    /**
     * @property bool $isFlaggedWrongNumberOfEmployees
     */
    private $isFlaggedWrongNumberOfEmployees = null;

    /**
     * @property bool $isFlaggedWrongOwnership
     */
    private $isFlaggedWrongOwnership = null;

    /**
     * @property bool $isFlaggedWrongPhone
     */
    private $isFlaggedWrongPhone = null;

    /**
     * @property bool $isFlaggedWrongSic
     */
    private $isFlaggedWrongSic = null;

    /**
     * @property bool $isFlaggedWrongSicDescription
     */
    private $isFlaggedWrongSicDescription = null;

    /**
     * @property bool $isFlaggedWrongTickerSymbol
     */
    private $isFlaggedWrongTickerSymbol = null;

    /**
     * @property bool $isFlaggedWrongTradestyle
     */
    private $isFlaggedWrongTradestyle = null;

    /**
     * @property bool $isFlaggedWrongWebsite
     */
    private $isFlaggedWrongWebsite = null;

    /**
     * @property bool $isFlaggedWrongYearStarted
     */
    private $isFlaggedWrongYearStarted = null;

    /**
     * @property bool $isInactive
     */
    private $isInactive = null;

    /**
     * @property bool $isReviewedAccountSite
     */
    private $isReviewedAccountSite = null;

    /**
     * @property bool $isReviewedAddress
     */
    private $isReviewedAddress = null;

    /**
     * @property bool $isReviewedAnnualRevenue
     */
    private $isReviewedAnnualRevenue = null;

    /**
     * @property bool $isReviewedCompanyName
     */
    private $isReviewedCompanyName = null;

    /**
     * @property bool $isReviewedDandBCompanyDunsNumber
     */
    private $isReviewedDandBCompanyDunsNumber = null;

    /**
     * @property bool $isReviewedDescription
     */
    private $isReviewedDescription = null;

    /**
     * @property bool $isReviewedDunsNumber
     */
    private $isReviewedDunsNumber = null;

    /**
     * @property bool $isReviewedFax
     */
    private $isReviewedFax = null;

    /**
     * @property bool $isReviewedIndustry
     */
    private $isReviewedIndustry = null;

    /**
     * @property bool $isReviewedNaicsCode
     */
    private $isReviewedNaicsCode = null;

    /**
     * @property bool $isReviewedNaicsDescription
     */
    private $isReviewedNaicsDescription = null;

    /**
     * @property bool $isReviewedNumberOfEmployees
     */
    private $isReviewedNumberOfEmployees = null;

    /**
     * @property bool $isReviewedOwnership
     */
    private $isReviewedOwnership = null;

    /**
     * @property bool $isReviewedPhone
     */
    private $isReviewedPhone = null;

    /**
     * @property bool $isReviewedSic
     */
    private $isReviewedSic = null;

    /**
     * @property bool $isReviewedSicDescription
     */
    private $isReviewedSicDescription = null;

    /**
     * @property bool $isReviewedTickerSymbol
     */
    private $isReviewedTickerSymbol = null;

    /**
     * @property bool $isReviewedTradestyle
     */
    private $isReviewedTradestyle = null;

    /**
     * @property bool $isReviewedWebsite
     */
    private $isReviewedWebsite = null;

    /**
     * @property bool $isReviewedYearStarted
     */
    private $isReviewedYearStarted = null;

    /**
     * @property \DateTime $lastMatchedDate
     */
    private $lastMatchedDate = null;

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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $lastStatusChangedBy
     */
    private $lastStatusChangedBy = null;

    /**
     * @property string $lastStatusChangedById
     */
    private $lastStatusChangedById = null;

    /**
     * @property \DateTime $lastStatusChangedDate
     */
    private $lastStatusChangedDate = null;

    /**
     * @property float $latitude
     */
    private $latitude = null;

    /**
     * @property float $longitude
     */
    private $longitude = null;

    /**
     * @property string $naicsCode
     */
    private $naicsCode = null;

    /**
     * @property string $naicsDescription
     */
    private $naicsDescription = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property int $numberOfEmployees
     */
    private $numberOfEmployees = null;

    /**
     * @property string $ownership
     */
    private $ownership = null;

    /**
     * @property string $phone
     */
    private $phone = null;

    /**
     * @property string $postalCode
     */
    private $postalCode = null;

    /**
     * @property string $sic
     */
    private $sic = null;

    /**
     * @property string $sicDescription
     */
    private $sicDescription = null;

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
     * @property string $tickerSymbol
     */
    private $tickerSymbol = null;

    /**
     * @property string $tradestyle
     */
    private $tradestyle = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserRecordAccessType $userRecordAccess
     */
    private $userRecordAccess = null;

    /**
     * @property string $website
     */
    private $website = null;

    /**
     * @property string $yearStarted
     */
    private $yearStarted = null;

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
     * Gets as accountSite
     *
     * @return string
     */
    public function getAccountSite()
    {
        return $this->accountSite;
    }

    /**
     * Sets a new accountSite
     *
     * @param string $accountSite
     * @return self
     */
    public function setAccountSite($accountSite)
    {
        $this->accountSite = $accountSite;
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
     * Gets as cleanedByJob
     *
     * @return bool
     */
    public function getCleanedByJob()
    {
        return $this->cleanedByJob;
    }

    /**
     * Sets a new cleanedByJob
     *
     * @param bool $cleanedByJob
     * @return self
     */
    public function setCleanedByJob($cleanedByJob)
    {
        $this->cleanedByJob = $cleanedByJob;
        return $this;
    }

    /**
     * Gets as cleanedByUser
     *
     * @return bool
     */
    public function getCleanedByUser()
    {
        return $this->cleanedByUser;
    }

    /**
     * Sets a new cleanedByUser
     *
     * @param bool $cleanedByUser
     * @return self
     */
    public function setCleanedByUser($cleanedByUser)
    {
        $this->cleanedByUser = $cleanedByUser;
        return $this;
    }

    /**
     * Gets as companyName
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Sets a new companyName
     *
     * @param string $companyName
     * @return self
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * Gets as companyStatusDataDotCom
     *
     * @return string
     */
    public function getCompanyStatusDataDotCom()
    {
        return $this->companyStatusDataDotCom;
    }

    /**
     * Sets a new companyStatusDataDotCom
     *
     * @param string $companyStatusDataDotCom
     * @return self
     */
    public function setCompanyStatusDataDotCom($companyStatusDataDotCom)
    {
        $this->companyStatusDataDotCom = $companyStatusDataDotCom;
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
     * Gets as dandBCompanyDunsNumber
     *
     * @return string
     */
    public function getDandBCompanyDunsNumber()
    {
        return $this->dandBCompanyDunsNumber;
    }

    /**
     * Sets a new dandBCompanyDunsNumber
     *
     * @param string $dandBCompanyDunsNumber
     * @return self
     */
    public function setDandBCompanyDunsNumber($dandBCompanyDunsNumber)
    {
        $this->dandBCompanyDunsNumber = $dandBCompanyDunsNumber;
        return $this;
    }

    /**
     * Gets as dataDotComId
     *
     * @return string
     */
    public function getDataDotComId()
    {
        return $this->dataDotComId;
    }

    /**
     * Sets a new dataDotComId
     *
     * @param string $dataDotComId
     * @return self
     */
    public function setDataDotComId($dataDotComId)
    {
        $this->dataDotComId = $dataDotComId;
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
     * Gets as dunsRightMatchConfidence
     *
     * @return int
     */
    public function getDunsRightMatchConfidence()
    {
        return $this->dunsRightMatchConfidence;
    }

    /**
     * Sets a new dunsRightMatchConfidence
     *
     * @param int $dunsRightMatchConfidence
     * @return self
     */
    public function setDunsRightMatchConfidence($dunsRightMatchConfidence)
    {
        $this->dunsRightMatchConfidence = $dunsRightMatchConfidence;
        return $this;
    }

    /**
     * Gets as dunsRightMatchGrade
     *
     * @return string
     */
    public function getDunsRightMatchGrade()
    {
        return $this->dunsRightMatchGrade;
    }

    /**
     * Sets a new dunsRightMatchGrade
     *
     * @param string $dunsRightMatchGrade
     * @return self
     */
    public function setDunsRightMatchGrade($dunsRightMatchGrade)
    {
        $this->dunsRightMatchGrade = $dunsRightMatchGrade;
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
     * Gets as isDifferentAccountSite
     *
     * @return bool
     */
    public function getIsDifferentAccountSite()
    {
        return $this->isDifferentAccountSite;
    }

    /**
     * Sets a new isDifferentAccountSite
     *
     * @param bool $isDifferentAccountSite
     * @return self
     */
    public function setIsDifferentAccountSite($isDifferentAccountSite)
    {
        $this->isDifferentAccountSite = $isDifferentAccountSite;
        return $this;
    }

    /**
     * Gets as isDifferentAnnualRevenue
     *
     * @return bool
     */
    public function getIsDifferentAnnualRevenue()
    {
        return $this->isDifferentAnnualRevenue;
    }

    /**
     * Sets a new isDifferentAnnualRevenue
     *
     * @param bool $isDifferentAnnualRevenue
     * @return self
     */
    public function setIsDifferentAnnualRevenue($isDifferentAnnualRevenue)
    {
        $this->isDifferentAnnualRevenue = $isDifferentAnnualRevenue;
        return $this;
    }

    /**
     * Gets as isDifferentCity
     *
     * @return bool
     */
    public function getIsDifferentCity()
    {
        return $this->isDifferentCity;
    }

    /**
     * Sets a new isDifferentCity
     *
     * @param bool $isDifferentCity
     * @return self
     */
    public function setIsDifferentCity($isDifferentCity)
    {
        $this->isDifferentCity = $isDifferentCity;
        return $this;
    }

    /**
     * Gets as isDifferentCompanyName
     *
     * @return bool
     */
    public function getIsDifferentCompanyName()
    {
        return $this->isDifferentCompanyName;
    }

    /**
     * Sets a new isDifferentCompanyName
     *
     * @param bool $isDifferentCompanyName
     * @return self
     */
    public function setIsDifferentCompanyName($isDifferentCompanyName)
    {
        $this->isDifferentCompanyName = $isDifferentCompanyName;
        return $this;
    }

    /**
     * Gets as isDifferentCountry
     *
     * @return bool
     */
    public function getIsDifferentCountry()
    {
        return $this->isDifferentCountry;
    }

    /**
     * Sets a new isDifferentCountry
     *
     * @param bool $isDifferentCountry
     * @return self
     */
    public function setIsDifferentCountry($isDifferentCountry)
    {
        $this->isDifferentCountry = $isDifferentCountry;
        return $this;
    }

    /**
     * Gets as isDifferentCountryCode
     *
     * @return bool
     */
    public function getIsDifferentCountryCode()
    {
        return $this->isDifferentCountryCode;
    }

    /**
     * Sets a new isDifferentCountryCode
     *
     * @param bool $isDifferentCountryCode
     * @return self
     */
    public function setIsDifferentCountryCode($isDifferentCountryCode)
    {
        $this->isDifferentCountryCode = $isDifferentCountryCode;
        return $this;
    }

    /**
     * Gets as isDifferentDandBCompanyDunsNumber
     *
     * @return bool
     */
    public function getIsDifferentDandBCompanyDunsNumber()
    {
        return $this->isDifferentDandBCompanyDunsNumber;
    }

    /**
     * Sets a new isDifferentDandBCompanyDunsNumber
     *
     * @param bool $isDifferentDandBCompanyDunsNumber
     * @return self
     */
    public function setIsDifferentDandBCompanyDunsNumber($isDifferentDandBCompanyDunsNumber)
    {
        $this->isDifferentDandBCompanyDunsNumber = $isDifferentDandBCompanyDunsNumber;
        return $this;
    }

    /**
     * Gets as isDifferentDescription
     *
     * @return bool
     */
    public function getIsDifferentDescription()
    {
        return $this->isDifferentDescription;
    }

    /**
     * Sets a new isDifferentDescription
     *
     * @param bool $isDifferentDescription
     * @return self
     */
    public function setIsDifferentDescription($isDifferentDescription)
    {
        $this->isDifferentDescription = $isDifferentDescription;
        return $this;
    }

    /**
     * Gets as isDifferentDunsNumber
     *
     * @return bool
     */
    public function getIsDifferentDunsNumber()
    {
        return $this->isDifferentDunsNumber;
    }

    /**
     * Sets a new isDifferentDunsNumber
     *
     * @param bool $isDifferentDunsNumber
     * @return self
     */
    public function setIsDifferentDunsNumber($isDifferentDunsNumber)
    {
        $this->isDifferentDunsNumber = $isDifferentDunsNumber;
        return $this;
    }

    /**
     * Gets as isDifferentFax
     *
     * @return bool
     */
    public function getIsDifferentFax()
    {
        return $this->isDifferentFax;
    }

    /**
     * Sets a new isDifferentFax
     *
     * @param bool $isDifferentFax
     * @return self
     */
    public function setIsDifferentFax($isDifferentFax)
    {
        $this->isDifferentFax = $isDifferentFax;
        return $this;
    }

    /**
     * Gets as isDifferentIndustry
     *
     * @return bool
     */
    public function getIsDifferentIndustry()
    {
        return $this->isDifferentIndustry;
    }

    /**
     * Sets a new isDifferentIndustry
     *
     * @param bool $isDifferentIndustry
     * @return self
     */
    public function setIsDifferentIndustry($isDifferentIndustry)
    {
        $this->isDifferentIndustry = $isDifferentIndustry;
        return $this;
    }

    /**
     * Gets as isDifferentNaicsCode
     *
     * @return bool
     */
    public function getIsDifferentNaicsCode()
    {
        return $this->isDifferentNaicsCode;
    }

    /**
     * Sets a new isDifferentNaicsCode
     *
     * @param bool $isDifferentNaicsCode
     * @return self
     */
    public function setIsDifferentNaicsCode($isDifferentNaicsCode)
    {
        $this->isDifferentNaicsCode = $isDifferentNaicsCode;
        return $this;
    }

    /**
     * Gets as isDifferentNaicsDescription
     *
     * @return bool
     */
    public function getIsDifferentNaicsDescription()
    {
        return $this->isDifferentNaicsDescription;
    }

    /**
     * Sets a new isDifferentNaicsDescription
     *
     * @param bool $isDifferentNaicsDescription
     * @return self
     */
    public function setIsDifferentNaicsDescription($isDifferentNaicsDescription)
    {
        $this->isDifferentNaicsDescription = $isDifferentNaicsDescription;
        return $this;
    }

    /**
     * Gets as isDifferentNumberOfEmployees
     *
     * @return bool
     */
    public function getIsDifferentNumberOfEmployees()
    {
        return $this->isDifferentNumberOfEmployees;
    }

    /**
     * Sets a new isDifferentNumberOfEmployees
     *
     * @param bool $isDifferentNumberOfEmployees
     * @return self
     */
    public function setIsDifferentNumberOfEmployees($isDifferentNumberOfEmployees)
    {
        $this->isDifferentNumberOfEmployees = $isDifferentNumberOfEmployees;
        return $this;
    }

    /**
     * Gets as isDifferentOwnership
     *
     * @return bool
     */
    public function getIsDifferentOwnership()
    {
        return $this->isDifferentOwnership;
    }

    /**
     * Sets a new isDifferentOwnership
     *
     * @param bool $isDifferentOwnership
     * @return self
     */
    public function setIsDifferentOwnership($isDifferentOwnership)
    {
        $this->isDifferentOwnership = $isDifferentOwnership;
        return $this;
    }

    /**
     * Gets as isDifferentPhone
     *
     * @return bool
     */
    public function getIsDifferentPhone()
    {
        return $this->isDifferentPhone;
    }

    /**
     * Sets a new isDifferentPhone
     *
     * @param bool $isDifferentPhone
     * @return self
     */
    public function setIsDifferentPhone($isDifferentPhone)
    {
        $this->isDifferentPhone = $isDifferentPhone;
        return $this;
    }

    /**
     * Gets as isDifferentPostalCode
     *
     * @return bool
     */
    public function getIsDifferentPostalCode()
    {
        return $this->isDifferentPostalCode;
    }

    /**
     * Sets a new isDifferentPostalCode
     *
     * @param bool $isDifferentPostalCode
     * @return self
     */
    public function setIsDifferentPostalCode($isDifferentPostalCode)
    {
        $this->isDifferentPostalCode = $isDifferentPostalCode;
        return $this;
    }

    /**
     * Gets as isDifferentSic
     *
     * @return bool
     */
    public function getIsDifferentSic()
    {
        return $this->isDifferentSic;
    }

    /**
     * Sets a new isDifferentSic
     *
     * @param bool $isDifferentSic
     * @return self
     */
    public function setIsDifferentSic($isDifferentSic)
    {
        $this->isDifferentSic = $isDifferentSic;
        return $this;
    }

    /**
     * Gets as isDifferentSicDescription
     *
     * @return bool
     */
    public function getIsDifferentSicDescription()
    {
        return $this->isDifferentSicDescription;
    }

    /**
     * Sets a new isDifferentSicDescription
     *
     * @param bool $isDifferentSicDescription
     * @return self
     */
    public function setIsDifferentSicDescription($isDifferentSicDescription)
    {
        $this->isDifferentSicDescription = $isDifferentSicDescription;
        return $this;
    }

    /**
     * Gets as isDifferentState
     *
     * @return bool
     */
    public function getIsDifferentState()
    {
        return $this->isDifferentState;
    }

    /**
     * Sets a new isDifferentState
     *
     * @param bool $isDifferentState
     * @return self
     */
    public function setIsDifferentState($isDifferentState)
    {
        $this->isDifferentState = $isDifferentState;
        return $this;
    }

    /**
     * Gets as isDifferentStateCode
     *
     * @return bool
     */
    public function getIsDifferentStateCode()
    {
        return $this->isDifferentStateCode;
    }

    /**
     * Sets a new isDifferentStateCode
     *
     * @param bool $isDifferentStateCode
     * @return self
     */
    public function setIsDifferentStateCode($isDifferentStateCode)
    {
        $this->isDifferentStateCode = $isDifferentStateCode;
        return $this;
    }

    /**
     * Gets as isDifferentStreet
     *
     * @return bool
     */
    public function getIsDifferentStreet()
    {
        return $this->isDifferentStreet;
    }

    /**
     * Sets a new isDifferentStreet
     *
     * @param bool $isDifferentStreet
     * @return self
     */
    public function setIsDifferentStreet($isDifferentStreet)
    {
        $this->isDifferentStreet = $isDifferentStreet;
        return $this;
    }

    /**
     * Gets as isDifferentTickerSymbol
     *
     * @return bool
     */
    public function getIsDifferentTickerSymbol()
    {
        return $this->isDifferentTickerSymbol;
    }

    /**
     * Sets a new isDifferentTickerSymbol
     *
     * @param bool $isDifferentTickerSymbol
     * @return self
     */
    public function setIsDifferentTickerSymbol($isDifferentTickerSymbol)
    {
        $this->isDifferentTickerSymbol = $isDifferentTickerSymbol;
        return $this;
    }

    /**
     * Gets as isDifferentTradestyle
     *
     * @return bool
     */
    public function getIsDifferentTradestyle()
    {
        return $this->isDifferentTradestyle;
    }

    /**
     * Sets a new isDifferentTradestyle
     *
     * @param bool $isDifferentTradestyle
     * @return self
     */
    public function setIsDifferentTradestyle($isDifferentTradestyle)
    {
        $this->isDifferentTradestyle = $isDifferentTradestyle;
        return $this;
    }

    /**
     * Gets as isDifferentWebsite
     *
     * @return bool
     */
    public function getIsDifferentWebsite()
    {
        return $this->isDifferentWebsite;
    }

    /**
     * Sets a new isDifferentWebsite
     *
     * @param bool $isDifferentWebsite
     * @return self
     */
    public function setIsDifferentWebsite($isDifferentWebsite)
    {
        $this->isDifferentWebsite = $isDifferentWebsite;
        return $this;
    }

    /**
     * Gets as isDifferentYearStarted
     *
     * @return bool
     */
    public function getIsDifferentYearStarted()
    {
        return $this->isDifferentYearStarted;
    }

    /**
     * Sets a new isDifferentYearStarted
     *
     * @param bool $isDifferentYearStarted
     * @return self
     */
    public function setIsDifferentYearStarted($isDifferentYearStarted)
    {
        $this->isDifferentYearStarted = $isDifferentYearStarted;
        return $this;
    }

    /**
     * Gets as isFlaggedWrongAccountSite
     *
     * @return bool
     */
    public function getIsFlaggedWrongAccountSite()
    {
        return $this->isFlaggedWrongAccountSite;
    }

    /**
     * Sets a new isFlaggedWrongAccountSite
     *
     * @param bool $isFlaggedWrongAccountSite
     * @return self
     */
    public function setIsFlaggedWrongAccountSite($isFlaggedWrongAccountSite)
    {
        $this->isFlaggedWrongAccountSite = $isFlaggedWrongAccountSite;
        return $this;
    }

    /**
     * Gets as isFlaggedWrongAddress
     *
     * @return bool
     */
    public function getIsFlaggedWrongAddress()
    {
        return $this->isFlaggedWrongAddress;
    }

    /**
     * Sets a new isFlaggedWrongAddress
     *
     * @param bool $isFlaggedWrongAddress
     * @return self
     */
    public function setIsFlaggedWrongAddress($isFlaggedWrongAddress)
    {
        $this->isFlaggedWrongAddress = $isFlaggedWrongAddress;
        return $this;
    }

    /**
     * Gets as isFlaggedWrongAnnualRevenue
     *
     * @return bool
     */
    public function getIsFlaggedWrongAnnualRevenue()
    {
        return $this->isFlaggedWrongAnnualRevenue;
    }

    /**
     * Sets a new isFlaggedWrongAnnualRevenue
     *
     * @param bool $isFlaggedWrongAnnualRevenue
     * @return self
     */
    public function setIsFlaggedWrongAnnualRevenue($isFlaggedWrongAnnualRevenue)
    {
        $this->isFlaggedWrongAnnualRevenue = $isFlaggedWrongAnnualRevenue;
        return $this;
    }

    /**
     * Gets as isFlaggedWrongCompanyName
     *
     * @return bool
     */
    public function getIsFlaggedWrongCompanyName()
    {
        return $this->isFlaggedWrongCompanyName;
    }

    /**
     * Sets a new isFlaggedWrongCompanyName
     *
     * @param bool $isFlaggedWrongCompanyName
     * @return self
     */
    public function setIsFlaggedWrongCompanyName($isFlaggedWrongCompanyName)
    {
        $this->isFlaggedWrongCompanyName = $isFlaggedWrongCompanyName;
        return $this;
    }

    /**
     * Gets as isFlaggedWrongDescription
     *
     * @return bool
     */
    public function getIsFlaggedWrongDescription()
    {
        return $this->isFlaggedWrongDescription;
    }

    /**
     * Sets a new isFlaggedWrongDescription
     *
     * @param bool $isFlaggedWrongDescription
     * @return self
     */
    public function setIsFlaggedWrongDescription($isFlaggedWrongDescription)
    {
        $this->isFlaggedWrongDescription = $isFlaggedWrongDescription;
        return $this;
    }

    /**
     * Gets as isFlaggedWrongDunsNumber
     *
     * @return bool
     */
    public function getIsFlaggedWrongDunsNumber()
    {
        return $this->isFlaggedWrongDunsNumber;
    }

    /**
     * Sets a new isFlaggedWrongDunsNumber
     *
     * @param bool $isFlaggedWrongDunsNumber
     * @return self
     */
    public function setIsFlaggedWrongDunsNumber($isFlaggedWrongDunsNumber)
    {
        $this->isFlaggedWrongDunsNumber = $isFlaggedWrongDunsNumber;
        return $this;
    }

    /**
     * Gets as isFlaggedWrongFax
     *
     * @return bool
     */
    public function getIsFlaggedWrongFax()
    {
        return $this->isFlaggedWrongFax;
    }

    /**
     * Sets a new isFlaggedWrongFax
     *
     * @param bool $isFlaggedWrongFax
     * @return self
     */
    public function setIsFlaggedWrongFax($isFlaggedWrongFax)
    {
        $this->isFlaggedWrongFax = $isFlaggedWrongFax;
        return $this;
    }

    /**
     * Gets as isFlaggedWrongIndustry
     *
     * @return bool
     */
    public function getIsFlaggedWrongIndustry()
    {
        return $this->isFlaggedWrongIndustry;
    }

    /**
     * Sets a new isFlaggedWrongIndustry
     *
     * @param bool $isFlaggedWrongIndustry
     * @return self
     */
    public function setIsFlaggedWrongIndustry($isFlaggedWrongIndustry)
    {
        $this->isFlaggedWrongIndustry = $isFlaggedWrongIndustry;
        return $this;
    }

    /**
     * Gets as isFlaggedWrongNaicsCode
     *
     * @return bool
     */
    public function getIsFlaggedWrongNaicsCode()
    {
        return $this->isFlaggedWrongNaicsCode;
    }

    /**
     * Sets a new isFlaggedWrongNaicsCode
     *
     * @param bool $isFlaggedWrongNaicsCode
     * @return self
     */
    public function setIsFlaggedWrongNaicsCode($isFlaggedWrongNaicsCode)
    {
        $this->isFlaggedWrongNaicsCode = $isFlaggedWrongNaicsCode;
        return $this;
    }

    /**
     * Gets as isFlaggedWrongNaicsDescription
     *
     * @return bool
     */
    public function getIsFlaggedWrongNaicsDescription()
    {
        return $this->isFlaggedWrongNaicsDescription;
    }

    /**
     * Sets a new isFlaggedWrongNaicsDescription
     *
     * @param bool $isFlaggedWrongNaicsDescription
     * @return self
     */
    public function setIsFlaggedWrongNaicsDescription($isFlaggedWrongNaicsDescription)
    {
        $this->isFlaggedWrongNaicsDescription = $isFlaggedWrongNaicsDescription;
        return $this;
    }

    /**
     * Gets as isFlaggedWrongNumberOfEmployees
     *
     * @return bool
     */
    public function getIsFlaggedWrongNumberOfEmployees()
    {
        return $this->isFlaggedWrongNumberOfEmployees;
    }

    /**
     * Sets a new isFlaggedWrongNumberOfEmployees
     *
     * @param bool $isFlaggedWrongNumberOfEmployees
     * @return self
     */
    public function setIsFlaggedWrongNumberOfEmployees($isFlaggedWrongNumberOfEmployees)
    {
        $this->isFlaggedWrongNumberOfEmployees = $isFlaggedWrongNumberOfEmployees;
        return $this;
    }

    /**
     * Gets as isFlaggedWrongOwnership
     *
     * @return bool
     */
    public function getIsFlaggedWrongOwnership()
    {
        return $this->isFlaggedWrongOwnership;
    }

    /**
     * Sets a new isFlaggedWrongOwnership
     *
     * @param bool $isFlaggedWrongOwnership
     * @return self
     */
    public function setIsFlaggedWrongOwnership($isFlaggedWrongOwnership)
    {
        $this->isFlaggedWrongOwnership = $isFlaggedWrongOwnership;
        return $this;
    }

    /**
     * Gets as isFlaggedWrongPhone
     *
     * @return bool
     */
    public function getIsFlaggedWrongPhone()
    {
        return $this->isFlaggedWrongPhone;
    }

    /**
     * Sets a new isFlaggedWrongPhone
     *
     * @param bool $isFlaggedWrongPhone
     * @return self
     */
    public function setIsFlaggedWrongPhone($isFlaggedWrongPhone)
    {
        $this->isFlaggedWrongPhone = $isFlaggedWrongPhone;
        return $this;
    }

    /**
     * Gets as isFlaggedWrongSic
     *
     * @return bool
     */
    public function getIsFlaggedWrongSic()
    {
        return $this->isFlaggedWrongSic;
    }

    /**
     * Sets a new isFlaggedWrongSic
     *
     * @param bool $isFlaggedWrongSic
     * @return self
     */
    public function setIsFlaggedWrongSic($isFlaggedWrongSic)
    {
        $this->isFlaggedWrongSic = $isFlaggedWrongSic;
        return $this;
    }

    /**
     * Gets as isFlaggedWrongSicDescription
     *
     * @return bool
     */
    public function getIsFlaggedWrongSicDescription()
    {
        return $this->isFlaggedWrongSicDescription;
    }

    /**
     * Sets a new isFlaggedWrongSicDescription
     *
     * @param bool $isFlaggedWrongSicDescription
     * @return self
     */
    public function setIsFlaggedWrongSicDescription($isFlaggedWrongSicDescription)
    {
        $this->isFlaggedWrongSicDescription = $isFlaggedWrongSicDescription;
        return $this;
    }

    /**
     * Gets as isFlaggedWrongTickerSymbol
     *
     * @return bool
     */
    public function getIsFlaggedWrongTickerSymbol()
    {
        return $this->isFlaggedWrongTickerSymbol;
    }

    /**
     * Sets a new isFlaggedWrongTickerSymbol
     *
     * @param bool $isFlaggedWrongTickerSymbol
     * @return self
     */
    public function setIsFlaggedWrongTickerSymbol($isFlaggedWrongTickerSymbol)
    {
        $this->isFlaggedWrongTickerSymbol = $isFlaggedWrongTickerSymbol;
        return $this;
    }

    /**
     * Gets as isFlaggedWrongTradestyle
     *
     * @return bool
     */
    public function getIsFlaggedWrongTradestyle()
    {
        return $this->isFlaggedWrongTradestyle;
    }

    /**
     * Sets a new isFlaggedWrongTradestyle
     *
     * @param bool $isFlaggedWrongTradestyle
     * @return self
     */
    public function setIsFlaggedWrongTradestyle($isFlaggedWrongTradestyle)
    {
        $this->isFlaggedWrongTradestyle = $isFlaggedWrongTradestyle;
        return $this;
    }

    /**
     * Gets as isFlaggedWrongWebsite
     *
     * @return bool
     */
    public function getIsFlaggedWrongWebsite()
    {
        return $this->isFlaggedWrongWebsite;
    }

    /**
     * Sets a new isFlaggedWrongWebsite
     *
     * @param bool $isFlaggedWrongWebsite
     * @return self
     */
    public function setIsFlaggedWrongWebsite($isFlaggedWrongWebsite)
    {
        $this->isFlaggedWrongWebsite = $isFlaggedWrongWebsite;
        return $this;
    }

    /**
     * Gets as isFlaggedWrongYearStarted
     *
     * @return bool
     */
    public function getIsFlaggedWrongYearStarted()
    {
        return $this->isFlaggedWrongYearStarted;
    }

    /**
     * Sets a new isFlaggedWrongYearStarted
     *
     * @param bool $isFlaggedWrongYearStarted
     * @return self
     */
    public function setIsFlaggedWrongYearStarted($isFlaggedWrongYearStarted)
    {
        $this->isFlaggedWrongYearStarted = $isFlaggedWrongYearStarted;
        return $this;
    }

    /**
     * Gets as isInactive
     *
     * @return bool
     */
    public function getIsInactive()
    {
        return $this->isInactive;
    }

    /**
     * Sets a new isInactive
     *
     * @param bool $isInactive
     * @return self
     */
    public function setIsInactive($isInactive)
    {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * Gets as isReviewedAccountSite
     *
     * @return bool
     */
    public function getIsReviewedAccountSite()
    {
        return $this->isReviewedAccountSite;
    }

    /**
     * Sets a new isReviewedAccountSite
     *
     * @param bool $isReviewedAccountSite
     * @return self
     */
    public function setIsReviewedAccountSite($isReviewedAccountSite)
    {
        $this->isReviewedAccountSite = $isReviewedAccountSite;
        return $this;
    }

    /**
     * Gets as isReviewedAddress
     *
     * @return bool
     */
    public function getIsReviewedAddress()
    {
        return $this->isReviewedAddress;
    }

    /**
     * Sets a new isReviewedAddress
     *
     * @param bool $isReviewedAddress
     * @return self
     */
    public function setIsReviewedAddress($isReviewedAddress)
    {
        $this->isReviewedAddress = $isReviewedAddress;
        return $this;
    }

    /**
     * Gets as isReviewedAnnualRevenue
     *
     * @return bool
     */
    public function getIsReviewedAnnualRevenue()
    {
        return $this->isReviewedAnnualRevenue;
    }

    /**
     * Sets a new isReviewedAnnualRevenue
     *
     * @param bool $isReviewedAnnualRevenue
     * @return self
     */
    public function setIsReviewedAnnualRevenue($isReviewedAnnualRevenue)
    {
        $this->isReviewedAnnualRevenue = $isReviewedAnnualRevenue;
        return $this;
    }

    /**
     * Gets as isReviewedCompanyName
     *
     * @return bool
     */
    public function getIsReviewedCompanyName()
    {
        return $this->isReviewedCompanyName;
    }

    /**
     * Sets a new isReviewedCompanyName
     *
     * @param bool $isReviewedCompanyName
     * @return self
     */
    public function setIsReviewedCompanyName($isReviewedCompanyName)
    {
        $this->isReviewedCompanyName = $isReviewedCompanyName;
        return $this;
    }

    /**
     * Gets as isReviewedDandBCompanyDunsNumber
     *
     * @return bool
     */
    public function getIsReviewedDandBCompanyDunsNumber()
    {
        return $this->isReviewedDandBCompanyDunsNumber;
    }

    /**
     * Sets a new isReviewedDandBCompanyDunsNumber
     *
     * @param bool $isReviewedDandBCompanyDunsNumber
     * @return self
     */
    public function setIsReviewedDandBCompanyDunsNumber($isReviewedDandBCompanyDunsNumber)
    {
        $this->isReviewedDandBCompanyDunsNumber = $isReviewedDandBCompanyDunsNumber;
        return $this;
    }

    /**
     * Gets as isReviewedDescription
     *
     * @return bool
     */
    public function getIsReviewedDescription()
    {
        return $this->isReviewedDescription;
    }

    /**
     * Sets a new isReviewedDescription
     *
     * @param bool $isReviewedDescription
     * @return self
     */
    public function setIsReviewedDescription($isReviewedDescription)
    {
        $this->isReviewedDescription = $isReviewedDescription;
        return $this;
    }

    /**
     * Gets as isReviewedDunsNumber
     *
     * @return bool
     */
    public function getIsReviewedDunsNumber()
    {
        return $this->isReviewedDunsNumber;
    }

    /**
     * Sets a new isReviewedDunsNumber
     *
     * @param bool $isReviewedDunsNumber
     * @return self
     */
    public function setIsReviewedDunsNumber($isReviewedDunsNumber)
    {
        $this->isReviewedDunsNumber = $isReviewedDunsNumber;
        return $this;
    }

    /**
     * Gets as isReviewedFax
     *
     * @return bool
     */
    public function getIsReviewedFax()
    {
        return $this->isReviewedFax;
    }

    /**
     * Sets a new isReviewedFax
     *
     * @param bool $isReviewedFax
     * @return self
     */
    public function setIsReviewedFax($isReviewedFax)
    {
        $this->isReviewedFax = $isReviewedFax;
        return $this;
    }

    /**
     * Gets as isReviewedIndustry
     *
     * @return bool
     */
    public function getIsReviewedIndustry()
    {
        return $this->isReviewedIndustry;
    }

    /**
     * Sets a new isReviewedIndustry
     *
     * @param bool $isReviewedIndustry
     * @return self
     */
    public function setIsReviewedIndustry($isReviewedIndustry)
    {
        $this->isReviewedIndustry = $isReviewedIndustry;
        return $this;
    }

    /**
     * Gets as isReviewedNaicsCode
     *
     * @return bool
     */
    public function getIsReviewedNaicsCode()
    {
        return $this->isReviewedNaicsCode;
    }

    /**
     * Sets a new isReviewedNaicsCode
     *
     * @param bool $isReviewedNaicsCode
     * @return self
     */
    public function setIsReviewedNaicsCode($isReviewedNaicsCode)
    {
        $this->isReviewedNaicsCode = $isReviewedNaicsCode;
        return $this;
    }

    /**
     * Gets as isReviewedNaicsDescription
     *
     * @return bool
     */
    public function getIsReviewedNaicsDescription()
    {
        return $this->isReviewedNaicsDescription;
    }

    /**
     * Sets a new isReviewedNaicsDescription
     *
     * @param bool $isReviewedNaicsDescription
     * @return self
     */
    public function setIsReviewedNaicsDescription($isReviewedNaicsDescription)
    {
        $this->isReviewedNaicsDescription = $isReviewedNaicsDescription;
        return $this;
    }

    /**
     * Gets as isReviewedNumberOfEmployees
     *
     * @return bool
     */
    public function getIsReviewedNumberOfEmployees()
    {
        return $this->isReviewedNumberOfEmployees;
    }

    /**
     * Sets a new isReviewedNumberOfEmployees
     *
     * @param bool $isReviewedNumberOfEmployees
     * @return self
     */
    public function setIsReviewedNumberOfEmployees($isReviewedNumberOfEmployees)
    {
        $this->isReviewedNumberOfEmployees = $isReviewedNumberOfEmployees;
        return $this;
    }

    /**
     * Gets as isReviewedOwnership
     *
     * @return bool
     */
    public function getIsReviewedOwnership()
    {
        return $this->isReviewedOwnership;
    }

    /**
     * Sets a new isReviewedOwnership
     *
     * @param bool $isReviewedOwnership
     * @return self
     */
    public function setIsReviewedOwnership($isReviewedOwnership)
    {
        $this->isReviewedOwnership = $isReviewedOwnership;
        return $this;
    }

    /**
     * Gets as isReviewedPhone
     *
     * @return bool
     */
    public function getIsReviewedPhone()
    {
        return $this->isReviewedPhone;
    }

    /**
     * Sets a new isReviewedPhone
     *
     * @param bool $isReviewedPhone
     * @return self
     */
    public function setIsReviewedPhone($isReviewedPhone)
    {
        $this->isReviewedPhone = $isReviewedPhone;
        return $this;
    }

    /**
     * Gets as isReviewedSic
     *
     * @return bool
     */
    public function getIsReviewedSic()
    {
        return $this->isReviewedSic;
    }

    /**
     * Sets a new isReviewedSic
     *
     * @param bool $isReviewedSic
     * @return self
     */
    public function setIsReviewedSic($isReviewedSic)
    {
        $this->isReviewedSic = $isReviewedSic;
        return $this;
    }

    /**
     * Gets as isReviewedSicDescription
     *
     * @return bool
     */
    public function getIsReviewedSicDescription()
    {
        return $this->isReviewedSicDescription;
    }

    /**
     * Sets a new isReviewedSicDescription
     *
     * @param bool $isReviewedSicDescription
     * @return self
     */
    public function setIsReviewedSicDescription($isReviewedSicDescription)
    {
        $this->isReviewedSicDescription = $isReviewedSicDescription;
        return $this;
    }

    /**
     * Gets as isReviewedTickerSymbol
     *
     * @return bool
     */
    public function getIsReviewedTickerSymbol()
    {
        return $this->isReviewedTickerSymbol;
    }

    /**
     * Sets a new isReviewedTickerSymbol
     *
     * @param bool $isReviewedTickerSymbol
     * @return self
     */
    public function setIsReviewedTickerSymbol($isReviewedTickerSymbol)
    {
        $this->isReviewedTickerSymbol = $isReviewedTickerSymbol;
        return $this;
    }

    /**
     * Gets as isReviewedTradestyle
     *
     * @return bool
     */
    public function getIsReviewedTradestyle()
    {
        return $this->isReviewedTradestyle;
    }

    /**
     * Sets a new isReviewedTradestyle
     *
     * @param bool $isReviewedTradestyle
     * @return self
     */
    public function setIsReviewedTradestyle($isReviewedTradestyle)
    {
        $this->isReviewedTradestyle = $isReviewedTradestyle;
        return $this;
    }

    /**
     * Gets as isReviewedWebsite
     *
     * @return bool
     */
    public function getIsReviewedWebsite()
    {
        return $this->isReviewedWebsite;
    }

    /**
     * Sets a new isReviewedWebsite
     *
     * @param bool $isReviewedWebsite
     * @return self
     */
    public function setIsReviewedWebsite($isReviewedWebsite)
    {
        $this->isReviewedWebsite = $isReviewedWebsite;
        return $this;
    }

    /**
     * Gets as isReviewedYearStarted
     *
     * @return bool
     */
    public function getIsReviewedYearStarted()
    {
        return $this->isReviewedYearStarted;
    }

    /**
     * Sets a new isReviewedYearStarted
     *
     * @param bool $isReviewedYearStarted
     * @return self
     */
    public function setIsReviewedYearStarted($isReviewedYearStarted)
    {
        $this->isReviewedYearStarted = $isReviewedYearStarted;
        return $this;
    }

    /**
     * Gets as lastMatchedDate
     *
     * @return \DateTime
     */
    public function getLastMatchedDate()
    {
        return $this->lastMatchedDate;
    }

    /**
     * Sets a new lastMatchedDate
     *
     * @param \DateTime $lastMatchedDate
     * @return self
     */
    public function setLastMatchedDate(\DateTime $lastMatchedDate)
    {
        $this->lastMatchedDate = $lastMatchedDate;
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
     * Gets as lastStatusChangedBy
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType
     */
    public function getLastStatusChangedBy()
    {
        return $this->lastStatusChangedBy;
    }

    /**
     * Sets a new lastStatusChangedBy
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $lastStatusChangedBy
     * @return self
     */
    public function setLastStatusChangedBy(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $lastStatusChangedBy)
    {
        $this->lastStatusChangedBy = $lastStatusChangedBy;
        return $this;
    }

    /**
     * Gets as lastStatusChangedById
     *
     * @return string
     */
    public function getLastStatusChangedById()
    {
        return $this->lastStatusChangedById;
    }

    /**
     * Sets a new lastStatusChangedById
     *
     * @param string $lastStatusChangedById
     * @return self
     */
    public function setLastStatusChangedById($lastStatusChangedById)
    {
        $this->lastStatusChangedById = $lastStatusChangedById;
        return $this;
    }

    /**
     * Gets as lastStatusChangedDate
     *
     * @return \DateTime
     */
    public function getLastStatusChangedDate()
    {
        return $this->lastStatusChangedDate;
    }

    /**
     * Sets a new lastStatusChangedDate
     *
     * @param \DateTime $lastStatusChangedDate
     * @return self
     */
    public function setLastStatusChangedDate(\DateTime $lastStatusChangedDate)
    {
        $this->lastStatusChangedDate = $lastStatusChangedDate;
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
     * Gets as naicsDescription
     *
     * @return string
     */
    public function getNaicsDescription()
    {
        return $this->naicsDescription;
    }

    /**
     * Sets a new naicsDescription
     *
     * @param string $naicsDescription
     * @return self
     */
    public function setNaicsDescription($naicsDescription)
    {
        $this->naicsDescription = $naicsDescription;
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
     * Gets as sicDescription
     *
     * @return string
     */
    public function getSicDescription()
    {
        return $this->sicDescription;
    }

    /**
     * Sets a new sicDescription
     *
     * @param string $sicDescription
     * @return self
     */
    public function setSicDescription($sicDescription)
    {
        $this->sicDescription = $sicDescription;
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

