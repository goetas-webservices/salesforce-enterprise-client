<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing DatacloudCompanyType
 *
 *
 * XSD Type: DatacloudCompany
 */
class DatacloudCompanyType extends SObjectType
{

    /**
     * @property int $activeContacts
     */
    private $activeContacts = null;

    /**
     * @property float $annualRevenue
     */
    private $annualRevenue = null;

    /**
     * @property string $city
     */
    private $city = null;

    /**
     * @property string $companyId
     */
    private $companyId = null;

    /**
     * @property string $country
     */
    private $country = null;

    /**
     * @property string $countryCode
     */
    private $countryCode = null;

    /**
     * @property string $description
     */
    private $description = null;

    /**
     * @property string $dunsNumber
     */
    private $dunsNumber = null;

    /**
     * @property float $employeeQuantityGrowthRate
     */
    private $employeeQuantityGrowthRate = null;

    /**
     * @property string $externalId
     */
    private $externalId = null;

    /**
     * @property string $fax
     */
    private $fax = null;

    /**
     * @property int $fortuneRank
     */
    private $fortuneRank = null;

    /**
     * @property string $fullAddress
     */
    private $fullAddress = null;

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
     * @property bool $isInactive
     */
    private $isInactive = null;

    /**
     * @property bool $isOwned
     */
    private $isOwned = null;

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
     * @property int $priorYearEmployees
     */
    private $priorYearEmployees = null;

    /**
     * @property float $priorYearRevenue
     */
    private $priorYearRevenue = null;

    /**
     * @property float $salesTurnoverGrowthRate
     */
    private $salesTurnoverGrowthRate = null;

    /**
     * @property string $sic
     */
    private $sic = null;

    /**
     * @property string $sicCodeDesc
     */
    private $sicCodeDesc = null;

    /**
     * @property string $sicDesc
     */
    private $sicDesc = null;

    /**
     * @property string $site
     */
    private $site = null;

    /**
     * @property string $state
     */
    private $state = null;

    /**
     * @property string $stateCode
     */
    private $stateCode = null;

    /**
     * @property string $street
     */
    private $street = null;

    /**
     * @property string $tickerSymbol
     */
    private $tickerSymbol = null;

    /**
     * @property string $tradeStyle
     */
    private $tradeStyle = null;

    /**
     * @property \DateTime $updatedDate
     */
    private $updatedDate = null;

    /**
     * @property string $website
     */
    private $website = null;

    /**
     * @property string $yearStarted
     */
    private $yearStarted = null;

    /**
     * @property string $zip
     */
    private $zip = null;

    /**
     * Gets as activeContacts
     *
     * @return int
     */
    public function getActiveContacts()
    {
        return $this->activeContacts;
    }

    /**
     * Sets a new activeContacts
     *
     * @param int $activeContacts
     * @return self
     */
    public function setActiveContacts($activeContacts)
    {
        $this->activeContacts = $activeContacts;
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
     * Gets as tradeStyle
     *
     * @return string
     */
    public function getTradeStyle()
    {
        return $this->tradeStyle;
    }

    /**
     * Sets a new tradeStyle
     *
     * @param string $tradeStyle
     * @return self
     */
    public function setTradeStyle($tradeStyle)
    {
        $this->tradeStyle = $tradeStyle;
        return $this;
    }

    /**
     * Gets as updatedDate
     *
     * @return \DateTime
     */
    public function getUpdatedDate()
    {
        return $this->updatedDate;
    }

    /**
     * Sets a new updatedDate
     *
     * @param \DateTime $updatedDate
     * @return self
     */
    public function setUpdatedDate(\DateTime $updatedDate)
    {
        $this->updatedDate = $updatedDate;
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

