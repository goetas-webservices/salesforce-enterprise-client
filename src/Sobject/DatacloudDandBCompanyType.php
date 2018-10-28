<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing DatacloudDandBCompanyType
 *
 *
 * XSD Type: DatacloudDandBCompany
 */
class DatacloudDandBCompanyType extends SObjectType
{

    /**
     * @property string $city
     */
    private $city = null;

    /**
     * @property string $companyCurrencyIsoCode
     */
    private $companyCurrencyIsoCode = null;

    /**
     * @property string $companyId
     */
    private $companyId = null;

    /**
     * @property string $country
     */
    private $country = null;

    /**
     * @property string $countryAccessCode
     */
    private $countryAccessCode = null;

    /**
     * @property string $countryCode
     */
    private $countryCode = null;

    /**
     * @property string $currencyCode
     */
    private $currencyCode = null;

    /**
     * @property string $description
     */
    private $description = null;

    /**
     * @property string $domesticUltimateBusinessName
     */
    private $domesticUltimateBusinessName = null;

    /**
     * @property string $domesticUltimateDunsNumber
     */
    private $domesticUltimateDunsNumber = null;

    /**
     * @property string $dunsNumber
     */
    private $dunsNumber = null;

    /**
     * @property float $employeeQuantityGrowthRate
     */
    private $employeeQuantityGrowthRate = null;

    /**
     * @property float $employeesHere
     */
    private $employeesHere = null;

    /**
     * @property string $employeesHereReliability
     */
    private $employeesHereReliability = null;

    /**
     * @property float $employeesTotal
     */
    private $employeesTotal = null;

    /**
     * @property string $employeesTotalReliability
     */
    private $employeesTotalReliability = null;

    /**
     * @property string $externalId
     */
    private $externalId = null;

    /**
     * @property int $familyMembers
     */
    private $familyMembers = null;

    /**
     * @property string $fax
     */
    private $fax = null;

    /**
     * @property string $fifthNaics
     */
    private $fifthNaics = null;

    /**
     * @property string $fifthNaicsDesc
     */
    private $fifthNaicsDesc = null;

    /**
     * @property string $fifthSic
     */
    private $fifthSic = null;

    /**
     * @property string $fifthSic8
     */
    private $fifthSic8 = null;

    /**
     * @property string $fifthSic8Desc
     */
    private $fifthSic8Desc = null;

    /**
     * @property string $fifthSicDesc
     */
    private $fifthSicDesc = null;

    /**
     * @property string $fipsMsaCode
     */
    private $fipsMsaCode = null;

    /**
     * @property string $fipsMsaDesc
     */
    private $fipsMsaDesc = null;

    /**
     * @property int $fortuneRank
     */
    private $fortuneRank = null;

    /**
     * @property string $fourthNaics
     */
    private $fourthNaics = null;

    /**
     * @property string $fourthNaicsDesc
     */
    private $fourthNaicsDesc = null;

    /**
     * @property string $fourthSic
     */
    private $fourthSic = null;

    /**
     * @property string $fourthSic8
     */
    private $fourthSic8 = null;

    /**
     * @property string $fourthSic8Desc
     */
    private $fourthSic8Desc = null;

    /**
     * @property string $fourthSicDesc
     */
    private $fourthSicDesc = null;

    /**
     * @property string $fullAddress
     */
    private $fullAddress = null;

    /**
     * @property string $geoCodeAccuracy
     */
    private $geoCodeAccuracy = null;

    /**
     * @property string $globalUltimateBusinessName
     */
    private $globalUltimateBusinessName = null;

    /**
     * @property string $globalUltimateDunsNumber
     */
    private $globalUltimateDunsNumber = null;

    /**
     * @property float $globalUltimateTotalEmployees
     */
    private $globalUltimateTotalEmployees = null;

    /**
     * @property string $importExportAgent
     */
    private $importExportAgent = null;

    /**
     * @property string $includedInSnP500
     */
    private $includedInSnP500 = null;

    /**
     * @property string $industry
     */
    private $industry = null;

    /**
     * @property bool $isInCrm
     */
    private $isInCrm = null;

    /**
     * @property bool $isOwned
     */
    private $isOwned = null;

    /**
     * @property bool $isParent
     */
    private $isParent = null;

    /**
     * @property string $latitude
     */
    private $latitude = null;

    /**
     * @property string $legalStatus
     */
    private $legalStatus = null;

    /**
     * @property string $locationStatus
     */
    private $locationStatus = null;

    /**
     * @property string $longitude
     */
    private $longitude = null;

    /**
     * @property string $mailingCity
     */
    private $mailingCity = null;

    /**
     * @property string $mailingCountry
     */
    private $mailingCountry = null;

    /**
     * @property string $mailingCountryCode
     */
    private $mailingCountryCode = null;

    /**
     * @property string $mailingState
     */
    private $mailingState = null;

    /**
     * @property string $mailingStateCode
     */
    private $mailingStateCode = null;

    /**
     * @property string $mailingStreet
     */
    private $mailingStreet = null;

    /**
     * @property string $mailingZip
     */
    private $mailingZip = null;

    /**
     * @property string $marketingPreScreen
     */
    private $marketingPreScreen = null;

    /**
     * @property string $marketingSegmentationCluster
     */
    private $marketingSegmentationCluster = null;

    /**
     * @property string $minorityOwned
     */
    private $minorityOwned = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $nationalId
     */
    private $nationalId = null;

    /**
     * @property string $nationalIdType
     */
    private $nationalIdType = null;

    /**
     * @property string $outOfBusiness
     */
    private $outOfBusiness = null;

    /**
     * @property string $ownOrRent
     */
    private $ownOrRent = null;

    /**
     * @property string $parentOrHqBusinessName
     */
    private $parentOrHqBusinessName = null;

    /**
     * @property string $parentOrHqDunsNumber
     */
    private $parentOrHqDunsNumber = null;

    /**
     * @property string $phone
     */
    private $phone = null;

    /**
     * @property int $premisesMeasure
     */
    private $premisesMeasure = null;

    /**
     * @property string $premisesMeasureReliability
     */
    private $premisesMeasureReliability = null;

    /**
     * @property string $premisesMeasureUnit
     */
    private $premisesMeasureUnit = null;

    /**
     * @property string $primaryNaics
     */
    private $primaryNaics = null;

    /**
     * @property string $primaryNaicsDesc
     */
    private $primaryNaicsDesc = null;

    /**
     * @property string $primarySic
     */
    private $primarySic = null;

    /**
     * @property string $primarySic8
     */
    private $primarySic8 = null;

    /**
     * @property string $primarySic8Desc
     */
    private $primarySic8Desc = null;

    /**
     * @property string $primarySicDesc
     */
    private $primarySicDesc = null;

    /**
     * @property int $priorYearEmployees
     */
    private $priorYearEmployees = null;

    /**
     * @property float $priorYearRevenue
     */
    private $priorYearRevenue = null;

    /**
     * @property string $publicIndicator
     */
    private $publicIndicator = null;

    /**
     * @property float $revenue
     */
    private $revenue = null;

    /**
     * @property float $salesTurnoverGrowthRate
     */
    private $salesTurnoverGrowthRate = null;

    /**
     * @property float $salesVolume
     */
    private $salesVolume = null;

    /**
     * @property string $salesVolumeReliability
     */
    private $salesVolumeReliability = null;

    /**
     * @property string $secondNaics
     */
    private $secondNaics = null;

    /**
     * @property string $secondNaicsDesc
     */
    private $secondNaicsDesc = null;

    /**
     * @property string $secondSic
     */
    private $secondSic = null;

    /**
     * @property string $secondSic8
     */
    private $secondSic8 = null;

    /**
     * @property string $secondSic8Desc
     */
    private $secondSic8Desc = null;

    /**
     * @property string $secondSicDesc
     */
    private $secondSicDesc = null;

    /**
     * @property string $sicCodeDesc
     */
    private $sicCodeDesc = null;

    /**
     * @property string $sixthNaics
     */
    private $sixthNaics = null;

    /**
     * @property string $sixthNaicsDesc
     */
    private $sixthNaicsDesc = null;

    /**
     * @property string $sixthSic
     */
    private $sixthSic = null;

    /**
     * @property string $sixthSic8
     */
    private $sixthSic8 = null;

    /**
     * @property string $sixthSic8Desc
     */
    private $sixthSic8Desc = null;

    /**
     * @property string $sixthSicDesc
     */
    private $sixthSicDesc = null;

    /**
     * @property string $smallBusiness
     */
    private $smallBusiness = null;

    /**
     * @property string $state
     */
    private $state = null;

    /**
     * @property string $stateCode
     */
    private $stateCode = null;

    /**
     * @property string $stockExchange
     */
    private $stockExchange = null;

    /**
     * @property string $stockSymbol
     */
    private $stockSymbol = null;

    /**
     * @property string $street
     */
    private $street = null;

    /**
     * @property string $subsidiary
     */
    private $subsidiary = null;

    /**
     * @property string $thirdNaics
     */
    private $thirdNaics = null;

    /**
     * @property string $thirdNaicsDesc
     */
    private $thirdNaicsDesc = null;

    /**
     * @property string $thirdSic
     */
    private $thirdSic = null;

    /**
     * @property string $thirdSic8
     */
    private $thirdSic8 = null;

    /**
     * @property string $thirdSic8Desc
     */
    private $thirdSic8Desc = null;

    /**
     * @property string $thirdSicDesc
     */
    private $thirdSicDesc = null;

    /**
     * @property string $tradeStyle1
     */
    private $tradeStyle1 = null;

    /**
     * @property string $tradeStyle2
     */
    private $tradeStyle2 = null;

    /**
     * @property string $tradeStyle3
     */
    private $tradeStyle3 = null;

    /**
     * @property string $tradeStyle4
     */
    private $tradeStyle4 = null;

    /**
     * @property string $tradeStyle5
     */
    private $tradeStyle5 = null;

    /**
     * @property string $uRL
     */
    private $uRL = null;

    /**
     * @property string $usTaxId
     */
    private $usTaxId = null;

    /**
     * @property string $womenOwned
     */
    private $womenOwned = null;

    /**
     * @property string $yearStarted
     */
    private $yearStarted = null;

    /**
     * @property string $zip
     */
    private $zip = null;

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
     * Gets as companyCurrencyIsoCode
     *
     * @return string
     */
    public function getCompanyCurrencyIsoCode()
    {
        return $this->companyCurrencyIsoCode;
    }

    /**
     * Sets a new companyCurrencyIsoCode
     *
     * @param string $companyCurrencyIsoCode
     * @return self
     */
    public function setCompanyCurrencyIsoCode($companyCurrencyIsoCode)
    {
        $this->companyCurrencyIsoCode = $companyCurrencyIsoCode;
        return $this;
    }

    /**
     * Gets as companyId
     *
     * @return string
     */
    public function getCompanyId()
    {
        return $this->companyId;
    }

    /**
     * Sets a new companyId
     *
     * @param string $companyId
     * @return self
     */
    public function setCompanyId($companyId)
    {
        $this->companyId = $companyId;
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
     * Gets as countryAccessCode
     *
     * @return string
     */
    public function getCountryAccessCode()
    {
        return $this->countryAccessCode;
    }

    /**
     * Sets a new countryAccessCode
     *
     * @param string $countryAccessCode
     * @return self
     */
    public function setCountryAccessCode($countryAccessCode)
    {
        $this->countryAccessCode = $countryAccessCode;
        return $this;
    }

    /**
     * Gets as countryCode
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Sets a new countryCode
     *
     * @param string $countryCode
     * @return self
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    /**
     * Gets as currencyCode
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Sets a new currencyCode
     *
     * @param string $currencyCode
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
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
     * Gets as domesticUltimateBusinessName
     *
     * @return string
     */
    public function getDomesticUltimateBusinessName()
    {
        return $this->domesticUltimateBusinessName;
    }

    /**
     * Sets a new domesticUltimateBusinessName
     *
     * @param string $domesticUltimateBusinessName
     * @return self
     */
    public function setDomesticUltimateBusinessName($domesticUltimateBusinessName)
    {
        $this->domesticUltimateBusinessName = $domesticUltimateBusinessName;
        return $this;
    }

    /**
     * Gets as domesticUltimateDunsNumber
     *
     * @return string
     */
    public function getDomesticUltimateDunsNumber()
    {
        return $this->domesticUltimateDunsNumber;
    }

    /**
     * Sets a new domesticUltimateDunsNumber
     *
     * @param string $domesticUltimateDunsNumber
     * @return self
     */
    public function setDomesticUltimateDunsNumber($domesticUltimateDunsNumber)
    {
        $this->domesticUltimateDunsNumber = $domesticUltimateDunsNumber;
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
     * Gets as employeeQuantityGrowthRate
     *
     * @return float
     */
    public function getEmployeeQuantityGrowthRate()
    {
        return $this->employeeQuantityGrowthRate;
    }

    /**
     * Sets a new employeeQuantityGrowthRate
     *
     * @param float $employeeQuantityGrowthRate
     * @return self
     */
    public function setEmployeeQuantityGrowthRate($employeeQuantityGrowthRate)
    {
        $this->employeeQuantityGrowthRate = $employeeQuantityGrowthRate;
        return $this;
    }

    /**
     * Gets as employeesHere
     *
     * @return float
     */
    public function getEmployeesHere()
    {
        return $this->employeesHere;
    }

    /**
     * Sets a new employeesHere
     *
     * @param float $employeesHere
     * @return self
     */
    public function setEmployeesHere($employeesHere)
    {
        $this->employeesHere = $employeesHere;
        return $this;
    }

    /**
     * Gets as employeesHereReliability
     *
     * @return string
     */
    public function getEmployeesHereReliability()
    {
        return $this->employeesHereReliability;
    }

    /**
     * Sets a new employeesHereReliability
     *
     * @param string $employeesHereReliability
     * @return self
     */
    public function setEmployeesHereReliability($employeesHereReliability)
    {
        $this->employeesHereReliability = $employeesHereReliability;
        return $this;
    }

    /**
     * Gets as employeesTotal
     *
     * @return float
     */
    public function getEmployeesTotal()
    {
        return $this->employeesTotal;
    }

    /**
     * Sets a new employeesTotal
     *
     * @param float $employeesTotal
     * @return self
     */
    public function setEmployeesTotal($employeesTotal)
    {
        $this->employeesTotal = $employeesTotal;
        return $this;
    }

    /**
     * Gets as employeesTotalReliability
     *
     * @return string
     */
    public function getEmployeesTotalReliability()
    {
        return $this->employeesTotalReliability;
    }

    /**
     * Sets a new employeesTotalReliability
     *
     * @param string $employeesTotalReliability
     * @return self
     */
    public function setEmployeesTotalReliability($employeesTotalReliability)
    {
        $this->employeesTotalReliability = $employeesTotalReliability;
        return $this;
    }

    /**
     * Gets as externalId
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * Sets a new externalId
     *
     * @param string $externalId
     * @return self
     */
    public function setExternalId($externalId)
    {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * Gets as familyMembers
     *
     * @return int
     */
    public function getFamilyMembers()
    {
        return $this->familyMembers;
    }

    /**
     * Sets a new familyMembers
     *
     * @param int $familyMembers
     * @return self
     */
    public function setFamilyMembers($familyMembers)
    {
        $this->familyMembers = $familyMembers;
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
     * Gets as fifthNaics
     *
     * @return string
     */
    public function getFifthNaics()
    {
        return $this->fifthNaics;
    }

    /**
     * Sets a new fifthNaics
     *
     * @param string $fifthNaics
     * @return self
     */
    public function setFifthNaics($fifthNaics)
    {
        $this->fifthNaics = $fifthNaics;
        return $this;
    }

    /**
     * Gets as fifthNaicsDesc
     *
     * @return string
     */
    public function getFifthNaicsDesc()
    {
        return $this->fifthNaicsDesc;
    }

    /**
     * Sets a new fifthNaicsDesc
     *
     * @param string $fifthNaicsDesc
     * @return self
     */
    public function setFifthNaicsDesc($fifthNaicsDesc)
    {
        $this->fifthNaicsDesc = $fifthNaicsDesc;
        return $this;
    }

    /**
     * Gets as fifthSic
     *
     * @return string
     */
    public function getFifthSic()
    {
        return $this->fifthSic;
    }

    /**
     * Sets a new fifthSic
     *
     * @param string $fifthSic
     * @return self
     */
    public function setFifthSic($fifthSic)
    {
        $this->fifthSic = $fifthSic;
        return $this;
    }

    /**
     * Gets as fifthSic8
     *
     * @return string
     */
    public function getFifthSic8()
    {
        return $this->fifthSic8;
    }

    /**
     * Sets a new fifthSic8
     *
     * @param string $fifthSic8
     * @return self
     */
    public function setFifthSic8($fifthSic8)
    {
        $this->fifthSic8 = $fifthSic8;
        return $this;
    }

    /**
     * Gets as fifthSic8Desc
     *
     * @return string
     */
    public function getFifthSic8Desc()
    {
        return $this->fifthSic8Desc;
    }

    /**
     * Sets a new fifthSic8Desc
     *
     * @param string $fifthSic8Desc
     * @return self
     */
    public function setFifthSic8Desc($fifthSic8Desc)
    {
        $this->fifthSic8Desc = $fifthSic8Desc;
        return $this;
    }

    /**
     * Gets as fifthSicDesc
     *
     * @return string
     */
    public function getFifthSicDesc()
    {
        return $this->fifthSicDesc;
    }

    /**
     * Sets a new fifthSicDesc
     *
     * @param string $fifthSicDesc
     * @return self
     */
    public function setFifthSicDesc($fifthSicDesc)
    {
        $this->fifthSicDesc = $fifthSicDesc;
        return $this;
    }

    /**
     * Gets as fipsMsaCode
     *
     * @return string
     */
    public function getFipsMsaCode()
    {
        return $this->fipsMsaCode;
    }

    /**
     * Sets a new fipsMsaCode
     *
     * @param string $fipsMsaCode
     * @return self
     */
    public function setFipsMsaCode($fipsMsaCode)
    {
        $this->fipsMsaCode = $fipsMsaCode;
        return $this;
    }

    /**
     * Gets as fipsMsaDesc
     *
     * @return string
     */
    public function getFipsMsaDesc()
    {
        return $this->fipsMsaDesc;
    }

    /**
     * Sets a new fipsMsaDesc
     *
     * @param string $fipsMsaDesc
     * @return self
     */
    public function setFipsMsaDesc($fipsMsaDesc)
    {
        $this->fipsMsaDesc = $fipsMsaDesc;
        return $this;
    }

    /**
     * Gets as fortuneRank
     *
     * @return int
     */
    public function getFortuneRank()
    {
        return $this->fortuneRank;
    }

    /**
     * Sets a new fortuneRank
     *
     * @param int $fortuneRank
     * @return self
     */
    public function setFortuneRank($fortuneRank)
    {
        $this->fortuneRank = $fortuneRank;
        return $this;
    }

    /**
     * Gets as fourthNaics
     *
     * @return string
     */
    public function getFourthNaics()
    {
        return $this->fourthNaics;
    }

    /**
     * Sets a new fourthNaics
     *
     * @param string $fourthNaics
     * @return self
     */
    public function setFourthNaics($fourthNaics)
    {
        $this->fourthNaics = $fourthNaics;
        return $this;
    }

    /**
     * Gets as fourthNaicsDesc
     *
     * @return string
     */
    public function getFourthNaicsDesc()
    {
        return $this->fourthNaicsDesc;
    }

    /**
     * Sets a new fourthNaicsDesc
     *
     * @param string $fourthNaicsDesc
     * @return self
     */
    public function setFourthNaicsDesc($fourthNaicsDesc)
    {
        $this->fourthNaicsDesc = $fourthNaicsDesc;
        return $this;
    }

    /**
     * Gets as fourthSic
     *
     * @return string
     */
    public function getFourthSic()
    {
        return $this->fourthSic;
    }

    /**
     * Sets a new fourthSic
     *
     * @param string $fourthSic
     * @return self
     */
    public function setFourthSic($fourthSic)
    {
        $this->fourthSic = $fourthSic;
        return $this;
    }

    /**
     * Gets as fourthSic8
     *
     * @return string
     */
    public function getFourthSic8()
    {
        return $this->fourthSic8;
    }

    /**
     * Sets a new fourthSic8
     *
     * @param string $fourthSic8
     * @return self
     */
    public function setFourthSic8($fourthSic8)
    {
        $this->fourthSic8 = $fourthSic8;
        return $this;
    }

    /**
     * Gets as fourthSic8Desc
     *
     * @return string
     */
    public function getFourthSic8Desc()
    {
        return $this->fourthSic8Desc;
    }

    /**
     * Sets a new fourthSic8Desc
     *
     * @param string $fourthSic8Desc
     * @return self
     */
    public function setFourthSic8Desc($fourthSic8Desc)
    {
        $this->fourthSic8Desc = $fourthSic8Desc;
        return $this;
    }

    /**
     * Gets as fourthSicDesc
     *
     * @return string
     */
    public function getFourthSicDesc()
    {
        return $this->fourthSicDesc;
    }

    /**
     * Sets a new fourthSicDesc
     *
     * @param string $fourthSicDesc
     * @return self
     */
    public function setFourthSicDesc($fourthSicDesc)
    {
        $this->fourthSicDesc = $fourthSicDesc;
        return $this;
    }

    /**
     * Gets as fullAddress
     *
     * @return string
     */
    public function getFullAddress()
    {
        return $this->fullAddress;
    }

    /**
     * Sets a new fullAddress
     *
     * @param string $fullAddress
     * @return self
     */
    public function setFullAddress($fullAddress)
    {
        $this->fullAddress = $fullAddress;
        return $this;
    }

    /**
     * Gets as geoCodeAccuracy
     *
     * @return string
     */
    public function getGeoCodeAccuracy()
    {
        return $this->geoCodeAccuracy;
    }

    /**
     * Sets a new geoCodeAccuracy
     *
     * @param string $geoCodeAccuracy
     * @return self
     */
    public function setGeoCodeAccuracy($geoCodeAccuracy)
    {
        $this->geoCodeAccuracy = $geoCodeAccuracy;
        return $this;
    }

    /**
     * Gets as globalUltimateBusinessName
     *
     * @return string
     */
    public function getGlobalUltimateBusinessName()
    {
        return $this->globalUltimateBusinessName;
    }

    /**
     * Sets a new globalUltimateBusinessName
     *
     * @param string $globalUltimateBusinessName
     * @return self
     */
    public function setGlobalUltimateBusinessName($globalUltimateBusinessName)
    {
        $this->globalUltimateBusinessName = $globalUltimateBusinessName;
        return $this;
    }

    /**
     * Gets as globalUltimateDunsNumber
     *
     * @return string
     */
    public function getGlobalUltimateDunsNumber()
    {
        return $this->globalUltimateDunsNumber;
    }

    /**
     * Sets a new globalUltimateDunsNumber
     *
     * @param string $globalUltimateDunsNumber
     * @return self
     */
    public function setGlobalUltimateDunsNumber($globalUltimateDunsNumber)
    {
        $this->globalUltimateDunsNumber = $globalUltimateDunsNumber;
        return $this;
    }

    /**
     * Gets as globalUltimateTotalEmployees
     *
     * @return float
     */
    public function getGlobalUltimateTotalEmployees()
    {
        return $this->globalUltimateTotalEmployees;
    }

    /**
     * Sets a new globalUltimateTotalEmployees
     *
     * @param float $globalUltimateTotalEmployees
     * @return self
     */
    public function setGlobalUltimateTotalEmployees($globalUltimateTotalEmployees)
    {
        $this->globalUltimateTotalEmployees = $globalUltimateTotalEmployees;
        return $this;
    }

    /**
     * Gets as importExportAgent
     *
     * @return string
     */
    public function getImportExportAgent()
    {
        return $this->importExportAgent;
    }

    /**
     * Sets a new importExportAgent
     *
     * @param string $importExportAgent
     * @return self
     */
    public function setImportExportAgent($importExportAgent)
    {
        $this->importExportAgent = $importExportAgent;
        return $this;
    }

    /**
     * Gets as includedInSnP500
     *
     * @return string
     */
    public function getIncludedInSnP500()
    {
        return $this->includedInSnP500;
    }

    /**
     * Sets a new includedInSnP500
     *
     * @param string $includedInSnP500
     * @return self
     */
    public function setIncludedInSnP500($includedInSnP500)
    {
        $this->includedInSnP500 = $includedInSnP500;
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
     * Gets as isInCrm
     *
     * @return bool
     */
    public function getIsInCrm()
    {
        return $this->isInCrm;
    }

    /**
     * Sets a new isInCrm
     *
     * @param bool $isInCrm
     * @return self
     */
    public function setIsInCrm($isInCrm)
    {
        $this->isInCrm = $isInCrm;
        return $this;
    }

    /**
     * Gets as isOwned
     *
     * @return bool
     */
    public function getIsOwned()
    {
        return $this->isOwned;
    }

    /**
     * Sets a new isOwned
     *
     * @param bool $isOwned
     * @return self
     */
    public function setIsOwned($isOwned)
    {
        $this->isOwned = $isOwned;
        return $this;
    }

    /**
     * Gets as isParent
     *
     * @return bool
     */
    public function getIsParent()
    {
        return $this->isParent;
    }

    /**
     * Sets a new isParent
     *
     * @param bool $isParent
     * @return self
     */
    public function setIsParent($isParent)
    {
        $this->isParent = $isParent;
        return $this;
    }

    /**
     * Gets as latitude
     *
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Sets a new latitude
     *
     * @param string $latitude
     * @return self
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * Gets as legalStatus
     *
     * @return string
     */
    public function getLegalStatus()
    {
        return $this->legalStatus;
    }

    /**
     * Sets a new legalStatus
     *
     * @param string $legalStatus
     * @return self
     */
    public function setLegalStatus($legalStatus)
    {
        $this->legalStatus = $legalStatus;
        return $this;
    }

    /**
     * Gets as locationStatus
     *
     * @return string
     */
    public function getLocationStatus()
    {
        return $this->locationStatus;
    }

    /**
     * Sets a new locationStatus
     *
     * @param string $locationStatus
     * @return self
     */
    public function setLocationStatus($locationStatus)
    {
        $this->locationStatus = $locationStatus;
        return $this;
    }

    /**
     * Gets as longitude
     *
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Sets a new longitude
     *
     * @param string $longitude
     * @return self
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
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
     * Gets as mailingCountryCode
     *
     * @return string
     */
    public function getMailingCountryCode()
    {
        return $this->mailingCountryCode;
    }

    /**
     * Sets a new mailingCountryCode
     *
     * @param string $mailingCountryCode
     * @return self
     */
    public function setMailingCountryCode($mailingCountryCode)
    {
        $this->mailingCountryCode = $mailingCountryCode;
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
     * Gets as mailingStateCode
     *
     * @return string
     */
    public function getMailingStateCode()
    {
        return $this->mailingStateCode;
    }

    /**
     * Sets a new mailingStateCode
     *
     * @param string $mailingStateCode
     * @return self
     */
    public function setMailingStateCode($mailingStateCode)
    {
        $this->mailingStateCode = $mailingStateCode;
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
     * Gets as mailingZip
     *
     * @return string
     */
    public function getMailingZip()
    {
        return $this->mailingZip;
    }

    /**
     * Sets a new mailingZip
     *
     * @param string $mailingZip
     * @return self
     */
    public function setMailingZip($mailingZip)
    {
        $this->mailingZip = $mailingZip;
        return $this;
    }

    /**
     * Gets as marketingPreScreen
     *
     * @return string
     */
    public function getMarketingPreScreen()
    {
        return $this->marketingPreScreen;
    }

    /**
     * Sets a new marketingPreScreen
     *
     * @param string $marketingPreScreen
     * @return self
     */
    public function setMarketingPreScreen($marketingPreScreen)
    {
        $this->marketingPreScreen = $marketingPreScreen;
        return $this;
    }

    /**
     * Gets as marketingSegmentationCluster
     *
     * @return string
     */
    public function getMarketingSegmentationCluster()
    {
        return $this->marketingSegmentationCluster;
    }

    /**
     * Sets a new marketingSegmentationCluster
     *
     * @param string $marketingSegmentationCluster
     * @return self
     */
    public function setMarketingSegmentationCluster($marketingSegmentationCluster)
    {
        $this->marketingSegmentationCluster = $marketingSegmentationCluster;
        return $this;
    }

    /**
     * Gets as minorityOwned
     *
     * @return string
     */
    public function getMinorityOwned()
    {
        return $this->minorityOwned;
    }

    /**
     * Sets a new minorityOwned
     *
     * @param string $minorityOwned
     * @return self
     */
    public function setMinorityOwned($minorityOwned)
    {
        $this->minorityOwned = $minorityOwned;
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
     * Gets as nationalId
     *
     * @return string
     */
    public function getNationalId()
    {
        return $this->nationalId;
    }

    /**
     * Sets a new nationalId
     *
     * @param string $nationalId
     * @return self
     */
    public function setNationalId($nationalId)
    {
        $this->nationalId = $nationalId;
        return $this;
    }

    /**
     * Gets as nationalIdType
     *
     * @return string
     */
    public function getNationalIdType()
    {
        return $this->nationalIdType;
    }

    /**
     * Sets a new nationalIdType
     *
     * @param string $nationalIdType
     * @return self
     */
    public function setNationalIdType($nationalIdType)
    {
        $this->nationalIdType = $nationalIdType;
        return $this;
    }

    /**
     * Gets as outOfBusiness
     *
     * @return string
     */
    public function getOutOfBusiness()
    {
        return $this->outOfBusiness;
    }

    /**
     * Sets a new outOfBusiness
     *
     * @param string $outOfBusiness
     * @return self
     */
    public function setOutOfBusiness($outOfBusiness)
    {
        $this->outOfBusiness = $outOfBusiness;
        return $this;
    }

    /**
     * Gets as ownOrRent
     *
     * @return string
     */
    public function getOwnOrRent()
    {
        return $this->ownOrRent;
    }

    /**
     * Sets a new ownOrRent
     *
     * @param string $ownOrRent
     * @return self
     */
    public function setOwnOrRent($ownOrRent)
    {
        $this->ownOrRent = $ownOrRent;
        return $this;
    }

    /**
     * Gets as parentOrHqBusinessName
     *
     * @return string
     */
    public function getParentOrHqBusinessName()
    {
        return $this->parentOrHqBusinessName;
    }

    /**
     * Sets a new parentOrHqBusinessName
     *
     * @param string $parentOrHqBusinessName
     * @return self
     */
    public function setParentOrHqBusinessName($parentOrHqBusinessName)
    {
        $this->parentOrHqBusinessName = $parentOrHqBusinessName;
        return $this;
    }

    /**
     * Gets as parentOrHqDunsNumber
     *
     * @return string
     */
    public function getParentOrHqDunsNumber()
    {
        return $this->parentOrHqDunsNumber;
    }

    /**
     * Sets a new parentOrHqDunsNumber
     *
     * @param string $parentOrHqDunsNumber
     * @return self
     */
    public function setParentOrHqDunsNumber($parentOrHqDunsNumber)
    {
        $this->parentOrHqDunsNumber = $parentOrHqDunsNumber;
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
     * Gets as premisesMeasure
     *
     * @return int
     */
    public function getPremisesMeasure()
    {
        return $this->premisesMeasure;
    }

    /**
     * Sets a new premisesMeasure
     *
     * @param int $premisesMeasure
     * @return self
     */
    public function setPremisesMeasure($premisesMeasure)
    {
        $this->premisesMeasure = $premisesMeasure;
        return $this;
    }

    /**
     * Gets as premisesMeasureReliability
     *
     * @return string
     */
    public function getPremisesMeasureReliability()
    {
        return $this->premisesMeasureReliability;
    }

    /**
     * Sets a new premisesMeasureReliability
     *
     * @param string $premisesMeasureReliability
     * @return self
     */
    public function setPremisesMeasureReliability($premisesMeasureReliability)
    {
        $this->premisesMeasureReliability = $premisesMeasureReliability;
        return $this;
    }

    /**
     * Gets as premisesMeasureUnit
     *
     * @return string
     */
    public function getPremisesMeasureUnit()
    {
        return $this->premisesMeasureUnit;
    }

    /**
     * Sets a new premisesMeasureUnit
     *
     * @param string $premisesMeasureUnit
     * @return self
     */
    public function setPremisesMeasureUnit($premisesMeasureUnit)
    {
        $this->premisesMeasureUnit = $premisesMeasureUnit;
        return $this;
    }

    /**
     * Gets as primaryNaics
     *
     * @return string
     */
    public function getPrimaryNaics()
    {
        return $this->primaryNaics;
    }

    /**
     * Sets a new primaryNaics
     *
     * @param string $primaryNaics
     * @return self
     */
    public function setPrimaryNaics($primaryNaics)
    {
        $this->primaryNaics = $primaryNaics;
        return $this;
    }

    /**
     * Gets as primaryNaicsDesc
     *
     * @return string
     */
    public function getPrimaryNaicsDesc()
    {
        return $this->primaryNaicsDesc;
    }

    /**
     * Sets a new primaryNaicsDesc
     *
     * @param string $primaryNaicsDesc
     * @return self
     */
    public function setPrimaryNaicsDesc($primaryNaicsDesc)
    {
        $this->primaryNaicsDesc = $primaryNaicsDesc;
        return $this;
    }

    /**
     * Gets as primarySic
     *
     * @return string
     */
    public function getPrimarySic()
    {
        return $this->primarySic;
    }

    /**
     * Sets a new primarySic
     *
     * @param string $primarySic
     * @return self
     */
    public function setPrimarySic($primarySic)
    {
        $this->primarySic = $primarySic;
        return $this;
    }

    /**
     * Gets as primarySic8
     *
     * @return string
     */
    public function getPrimarySic8()
    {
        return $this->primarySic8;
    }

    /**
     * Sets a new primarySic8
     *
     * @param string $primarySic8
     * @return self
     */
    public function setPrimarySic8($primarySic8)
    {
        $this->primarySic8 = $primarySic8;
        return $this;
    }

    /**
     * Gets as primarySic8Desc
     *
     * @return string
     */
    public function getPrimarySic8Desc()
    {
        return $this->primarySic8Desc;
    }

    /**
     * Sets a new primarySic8Desc
     *
     * @param string $primarySic8Desc
     * @return self
     */
    public function setPrimarySic8Desc($primarySic8Desc)
    {
        $this->primarySic8Desc = $primarySic8Desc;
        return $this;
    }

    /**
     * Gets as primarySicDesc
     *
     * @return string
     */
    public function getPrimarySicDesc()
    {
        return $this->primarySicDesc;
    }

    /**
     * Sets a new primarySicDesc
     *
     * @param string $primarySicDesc
     * @return self
     */
    public function setPrimarySicDesc($primarySicDesc)
    {
        $this->primarySicDesc = $primarySicDesc;
        return $this;
    }

    /**
     * Gets as priorYearEmployees
     *
     * @return int
     */
    public function getPriorYearEmployees()
    {
        return $this->priorYearEmployees;
    }

    /**
     * Sets a new priorYearEmployees
     *
     * @param int $priorYearEmployees
     * @return self
     */
    public function setPriorYearEmployees($priorYearEmployees)
    {
        $this->priorYearEmployees = $priorYearEmployees;
        return $this;
    }

    /**
     * Gets as priorYearRevenue
     *
     * @return float
     */
    public function getPriorYearRevenue()
    {
        return $this->priorYearRevenue;
    }

    /**
     * Sets a new priorYearRevenue
     *
     * @param float $priorYearRevenue
     * @return self
     */
    public function setPriorYearRevenue($priorYearRevenue)
    {
        $this->priorYearRevenue = $priorYearRevenue;
        return $this;
    }

    /**
     * Gets as publicIndicator
     *
     * @return string
     */
    public function getPublicIndicator()
    {
        return $this->publicIndicator;
    }

    /**
     * Sets a new publicIndicator
     *
     * @param string $publicIndicator
     * @return self
     */
    public function setPublicIndicator($publicIndicator)
    {
        $this->publicIndicator = $publicIndicator;
        return $this;
    }

    /**
     * Gets as revenue
     *
     * @return float
     */
    public function getRevenue()
    {
        return $this->revenue;
    }

    /**
     * Sets a new revenue
     *
     * @param float $revenue
     * @return self
     */
    public function setRevenue($revenue)
    {
        $this->revenue = $revenue;
        return $this;
    }

    /**
     * Gets as salesTurnoverGrowthRate
     *
     * @return float
     */
    public function getSalesTurnoverGrowthRate()
    {
        return $this->salesTurnoverGrowthRate;
    }

    /**
     * Sets a new salesTurnoverGrowthRate
     *
     * @param float $salesTurnoverGrowthRate
     * @return self
     */
    public function setSalesTurnoverGrowthRate($salesTurnoverGrowthRate)
    {
        $this->salesTurnoverGrowthRate = $salesTurnoverGrowthRate;
        return $this;
    }

    /**
     * Gets as salesVolume
     *
     * @return float
     */
    public function getSalesVolume()
    {
        return $this->salesVolume;
    }

    /**
     * Sets a new salesVolume
     *
     * @param float $salesVolume
     * @return self
     */
    public function setSalesVolume($salesVolume)
    {
        $this->salesVolume = $salesVolume;
        return $this;
    }

    /**
     * Gets as salesVolumeReliability
     *
     * @return string
     */
    public function getSalesVolumeReliability()
    {
        return $this->salesVolumeReliability;
    }

    /**
     * Sets a new salesVolumeReliability
     *
     * @param string $salesVolumeReliability
     * @return self
     */
    public function setSalesVolumeReliability($salesVolumeReliability)
    {
        $this->salesVolumeReliability = $salesVolumeReliability;
        return $this;
    }

    /**
     * Gets as secondNaics
     *
     * @return string
     */
    public function getSecondNaics()
    {
        return $this->secondNaics;
    }

    /**
     * Sets a new secondNaics
     *
     * @param string $secondNaics
     * @return self
     */
    public function setSecondNaics($secondNaics)
    {
        $this->secondNaics = $secondNaics;
        return $this;
    }

    /**
     * Gets as secondNaicsDesc
     *
     * @return string
     */
    public function getSecondNaicsDesc()
    {
        return $this->secondNaicsDesc;
    }

    /**
     * Sets a new secondNaicsDesc
     *
     * @param string $secondNaicsDesc
     * @return self
     */
    public function setSecondNaicsDesc($secondNaicsDesc)
    {
        $this->secondNaicsDesc = $secondNaicsDesc;
        return $this;
    }

    /**
     * Gets as secondSic
     *
     * @return string
     */
    public function getSecondSic()
    {
        return $this->secondSic;
    }

    /**
     * Sets a new secondSic
     *
     * @param string $secondSic
     * @return self
     */
    public function setSecondSic($secondSic)
    {
        $this->secondSic = $secondSic;
        return $this;
    }

    /**
     * Gets as secondSic8
     *
     * @return string
     */
    public function getSecondSic8()
    {
        return $this->secondSic8;
    }

    /**
     * Sets a new secondSic8
     *
     * @param string $secondSic8
     * @return self
     */
    public function setSecondSic8($secondSic8)
    {
        $this->secondSic8 = $secondSic8;
        return $this;
    }

    /**
     * Gets as secondSic8Desc
     *
     * @return string
     */
    public function getSecondSic8Desc()
    {
        return $this->secondSic8Desc;
    }

    /**
     * Sets a new secondSic8Desc
     *
     * @param string $secondSic8Desc
     * @return self
     */
    public function setSecondSic8Desc($secondSic8Desc)
    {
        $this->secondSic8Desc = $secondSic8Desc;
        return $this;
    }

    /**
     * Gets as secondSicDesc
     *
     * @return string
     */
    public function getSecondSicDesc()
    {
        return $this->secondSicDesc;
    }

    /**
     * Sets a new secondSicDesc
     *
     * @param string $secondSicDesc
     * @return self
     */
    public function setSecondSicDesc($secondSicDesc)
    {
        $this->secondSicDesc = $secondSicDesc;
        return $this;
    }

    /**
     * Gets as sicCodeDesc
     *
     * @return string
     */
    public function getSicCodeDesc()
    {
        return $this->sicCodeDesc;
    }

    /**
     * Sets a new sicCodeDesc
     *
     * @param string $sicCodeDesc
     * @return self
     */
    public function setSicCodeDesc($sicCodeDesc)
    {
        $this->sicCodeDesc = $sicCodeDesc;
        return $this;
    }

    /**
     * Gets as sixthNaics
     *
     * @return string
     */
    public function getSixthNaics()
    {
        return $this->sixthNaics;
    }

    /**
     * Sets a new sixthNaics
     *
     * @param string $sixthNaics
     * @return self
     */
    public function setSixthNaics($sixthNaics)
    {
        $this->sixthNaics = $sixthNaics;
        return $this;
    }

    /**
     * Gets as sixthNaicsDesc
     *
     * @return string
     */
    public function getSixthNaicsDesc()
    {
        return $this->sixthNaicsDesc;
    }

    /**
     * Sets a new sixthNaicsDesc
     *
     * @param string $sixthNaicsDesc
     * @return self
     */
    public function setSixthNaicsDesc($sixthNaicsDesc)
    {
        $this->sixthNaicsDesc = $sixthNaicsDesc;
        return $this;
    }

    /**
     * Gets as sixthSic
     *
     * @return string
     */
    public function getSixthSic()
    {
        return $this->sixthSic;
    }

    /**
     * Sets a new sixthSic
     *
     * @param string $sixthSic
     * @return self
     */
    public function setSixthSic($sixthSic)
    {
        $this->sixthSic = $sixthSic;
        return $this;
    }

    /**
     * Gets as sixthSic8
     *
     * @return string
     */
    public function getSixthSic8()
    {
        return $this->sixthSic8;
    }

    /**
     * Sets a new sixthSic8
     *
     * @param string $sixthSic8
     * @return self
     */
    public function setSixthSic8($sixthSic8)
    {
        $this->sixthSic8 = $sixthSic8;
        return $this;
    }

    /**
     * Gets as sixthSic8Desc
     *
     * @return string
     */
    public function getSixthSic8Desc()
    {
        return $this->sixthSic8Desc;
    }

    /**
     * Sets a new sixthSic8Desc
     *
     * @param string $sixthSic8Desc
     * @return self
     */
    public function setSixthSic8Desc($sixthSic8Desc)
    {
        $this->sixthSic8Desc = $sixthSic8Desc;
        return $this;
    }

    /**
     * Gets as sixthSicDesc
     *
     * @return string
     */
    public function getSixthSicDesc()
    {
        return $this->sixthSicDesc;
    }

    /**
     * Sets a new sixthSicDesc
     *
     * @param string $sixthSicDesc
     * @return self
     */
    public function setSixthSicDesc($sixthSicDesc)
    {
        $this->sixthSicDesc = $sixthSicDesc;
        return $this;
    }

    /**
     * Gets as smallBusiness
     *
     * @return string
     */
    public function getSmallBusiness()
    {
        return $this->smallBusiness;
    }

    /**
     * Sets a new smallBusiness
     *
     * @param string $smallBusiness
     * @return self
     */
    public function setSmallBusiness($smallBusiness)
    {
        $this->smallBusiness = $smallBusiness;
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
     * Gets as stateCode
     *
     * @return string
     */
    public function getStateCode()
    {
        return $this->stateCode;
    }

    /**
     * Sets a new stateCode
     *
     * @param string $stateCode
     * @return self
     */
    public function setStateCode($stateCode)
    {
        $this->stateCode = $stateCode;
        return $this;
    }

    /**
     * Gets as stockExchange
     *
     * @return string
     */
    public function getStockExchange()
    {
        return $this->stockExchange;
    }

    /**
     * Sets a new stockExchange
     *
     * @param string $stockExchange
     * @return self
     */
    public function setStockExchange($stockExchange)
    {
        $this->stockExchange = $stockExchange;
        return $this;
    }

    /**
     * Gets as stockSymbol
     *
     * @return string
     */
    public function getStockSymbol()
    {
        return $this->stockSymbol;
    }

    /**
     * Sets a new stockSymbol
     *
     * @param string $stockSymbol
     * @return self
     */
    public function setStockSymbol($stockSymbol)
    {
        $this->stockSymbol = $stockSymbol;
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
     * Gets as subsidiary
     *
     * @return string
     */
    public function getSubsidiary()
    {
        return $this->subsidiary;
    }

    /**
     * Sets a new subsidiary
     *
     * @param string $subsidiary
     * @return self
     */
    public function setSubsidiary($subsidiary)
    {
        $this->subsidiary = $subsidiary;
        return $this;
    }

    /**
     * Gets as thirdNaics
     *
     * @return string
     */
    public function getThirdNaics()
    {
        return $this->thirdNaics;
    }

    /**
     * Sets a new thirdNaics
     *
     * @param string $thirdNaics
     * @return self
     */
    public function setThirdNaics($thirdNaics)
    {
        $this->thirdNaics = $thirdNaics;
        return $this;
    }

    /**
     * Gets as thirdNaicsDesc
     *
     * @return string
     */
    public function getThirdNaicsDesc()
    {
        return $this->thirdNaicsDesc;
    }

    /**
     * Sets a new thirdNaicsDesc
     *
     * @param string $thirdNaicsDesc
     * @return self
     */
    public function setThirdNaicsDesc($thirdNaicsDesc)
    {
        $this->thirdNaicsDesc = $thirdNaicsDesc;
        return $this;
    }

    /**
     * Gets as thirdSic
     *
     * @return string
     */
    public function getThirdSic()
    {
        return $this->thirdSic;
    }

    /**
     * Sets a new thirdSic
     *
     * @param string $thirdSic
     * @return self
     */
    public function setThirdSic($thirdSic)
    {
        $this->thirdSic = $thirdSic;
        return $this;
    }

    /**
     * Gets as thirdSic8
     *
     * @return string
     */
    public function getThirdSic8()
    {
        return $this->thirdSic8;
    }

    /**
     * Sets a new thirdSic8
     *
     * @param string $thirdSic8
     * @return self
     */
    public function setThirdSic8($thirdSic8)
    {
        $this->thirdSic8 = $thirdSic8;
        return $this;
    }

    /**
     * Gets as thirdSic8Desc
     *
     * @return string
     */
    public function getThirdSic8Desc()
    {
        return $this->thirdSic8Desc;
    }

    /**
     * Sets a new thirdSic8Desc
     *
     * @param string $thirdSic8Desc
     * @return self
     */
    public function setThirdSic8Desc($thirdSic8Desc)
    {
        $this->thirdSic8Desc = $thirdSic8Desc;
        return $this;
    }

    /**
     * Gets as thirdSicDesc
     *
     * @return string
     */
    public function getThirdSicDesc()
    {
        return $this->thirdSicDesc;
    }

    /**
     * Sets a new thirdSicDesc
     *
     * @param string $thirdSicDesc
     * @return self
     */
    public function setThirdSicDesc($thirdSicDesc)
    {
        $this->thirdSicDesc = $thirdSicDesc;
        return $this;
    }

    /**
     * Gets as tradeStyle1
     *
     * @return string
     */
    public function getTradeStyle1()
    {
        return $this->tradeStyle1;
    }

    /**
     * Sets a new tradeStyle1
     *
     * @param string $tradeStyle1
     * @return self
     */
    public function setTradeStyle1($tradeStyle1)
    {
        $this->tradeStyle1 = $tradeStyle1;
        return $this;
    }

    /**
     * Gets as tradeStyle2
     *
     * @return string
     */
    public function getTradeStyle2()
    {
        return $this->tradeStyle2;
    }

    /**
     * Sets a new tradeStyle2
     *
     * @param string $tradeStyle2
     * @return self
     */
    public function setTradeStyle2($tradeStyle2)
    {
        $this->tradeStyle2 = $tradeStyle2;
        return $this;
    }

    /**
     * Gets as tradeStyle3
     *
     * @return string
     */
    public function getTradeStyle3()
    {
        return $this->tradeStyle3;
    }

    /**
     * Sets a new tradeStyle3
     *
     * @param string $tradeStyle3
     * @return self
     */
    public function setTradeStyle3($tradeStyle3)
    {
        $this->tradeStyle3 = $tradeStyle3;
        return $this;
    }

    /**
     * Gets as tradeStyle4
     *
     * @return string
     */
    public function getTradeStyle4()
    {
        return $this->tradeStyle4;
    }

    /**
     * Sets a new tradeStyle4
     *
     * @param string $tradeStyle4
     * @return self
     */
    public function setTradeStyle4($tradeStyle4)
    {
        $this->tradeStyle4 = $tradeStyle4;
        return $this;
    }

    /**
     * Gets as tradeStyle5
     *
     * @return string
     */
    public function getTradeStyle5()
    {
        return $this->tradeStyle5;
    }

    /**
     * Sets a new tradeStyle5
     *
     * @param string $tradeStyle5
     * @return self
     */
    public function setTradeStyle5($tradeStyle5)
    {
        $this->tradeStyle5 = $tradeStyle5;
        return $this;
    }

    /**
     * Gets as uRL
     *
     * @return string
     */
    public function getURL()
    {
        return $this->uRL;
    }

    /**
     * Sets a new uRL
     *
     * @param string $uRL
     * @return self
     */
    public function setURL($uRL)
    {
        $this->uRL = $uRL;
        return $this;
    }

    /**
     * Gets as usTaxId
     *
     * @return string
     */
    public function getUsTaxId()
    {
        return $this->usTaxId;
    }

    /**
     * Sets a new usTaxId
     *
     * @param string $usTaxId
     * @return self
     */
    public function setUsTaxId($usTaxId)
    {
        $this->usTaxId = $usTaxId;
        return $this;
    }

    /**
     * Gets as womenOwned
     *
     * @return string
     */
    public function getWomenOwned()
    {
        return $this->womenOwned;
    }

    /**
     * Sets a new womenOwned
     *
     * @param string $womenOwned
     * @return self
     */
    public function setWomenOwned($womenOwned)
    {
        $this->womenOwned = $womenOwned;
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

    /**
     * Gets as zip
     *
     * @return string
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Sets a new zip
     *
     * @param string $zip
     * @return self
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
        return $this;
    }


}

