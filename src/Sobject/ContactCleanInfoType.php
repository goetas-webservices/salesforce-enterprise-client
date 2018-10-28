<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing ContactCleanInfoType
 *
 *
 * XSD Type: ContactCleanInfo
 */
class ContactCleanInfoType extends SObjectType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\AddressType $address
     */
    private $address = null;

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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContactType $contact
     */
    private $contact = null;

    /**
     * @property string $contactId
     */
    private $contactId = null;

    /**
     * @property string $contactStatusDataDotCom
     */
    private $contactStatusDataDotCom = null;

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
     * @property string $dataDotComId
     */
    private $dataDotComId = null;

    /**
     * @property string $email
     */
    private $email = null;

    /**
     * @property string $firstName
     */
    private $firstName = null;

    /**
     * @property string $geocodeAccuracy
     */
    private $geocodeAccuracy = null;

    /**
     * @property bool $isDeleted
     */
    private $isDeleted = null;

    /**
     * @property bool $isDifferentCity
     */
    private $isDifferentCity = null;

    /**
     * @property bool $isDifferentCountry
     */
    private $isDifferentCountry = null;

    /**
     * @property bool $isDifferentCountryCode
     */
    private $isDifferentCountryCode = null;

    /**
     * @property bool $isDifferentEmail
     */
    private $isDifferentEmail = null;

    /**
     * @property bool $isDifferentFirstName
     */
    private $isDifferentFirstName = null;

    /**
     * @property bool $isDifferentLastName
     */
    private $isDifferentLastName = null;

    /**
     * @property bool $isDifferentPhone
     */
    private $isDifferentPhone = null;

    /**
     * @property bool $isDifferentPostalCode
     */
    private $isDifferentPostalCode = null;

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
     * @property bool $isDifferentTitle
     */
    private $isDifferentTitle = null;

    /**
     * @property bool $isFlaggedWrongAddress
     */
    private $isFlaggedWrongAddress = null;

    /**
     * @property bool $isFlaggedWrongEmail
     */
    private $isFlaggedWrongEmail = null;

    /**
     * @property bool $isFlaggedWrongName
     */
    private $isFlaggedWrongName = null;

    /**
     * @property bool $isFlaggedWrongPhone
     */
    private $isFlaggedWrongPhone = null;

    /**
     * @property bool $isFlaggedWrongTitle
     */
    private $isFlaggedWrongTitle = null;

    /**
     * @property bool $isInactive
     */
    private $isInactive = null;

    /**
     * @property bool $isReviewedAddress
     */
    private $isReviewedAddress = null;

    /**
     * @property bool $isReviewedEmail
     */
    private $isReviewedEmail = null;

    /**
     * @property bool $isReviewedName
     */
    private $isReviewedName = null;

    /**
     * @property bool $isReviewedPhone
     */
    private $isReviewedPhone = null;

    /**
     * @property bool $isReviewedTitle
     */
    private $isReviewedTitle = null;

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
     * @property string $lastName
     */
    private $lastName = null;

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
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $phone
     */
    private $phone = null;

    /**
     * @property string $postalCode
     */
    private $postalCode = null;

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
     * @property string $title
     */
    private $title = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserRecordAccessType $userRecordAccess
     */
    private $userRecordAccess = null;

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
     * Gets as contactStatusDataDotCom
     *
     * @return string
     */
    public function getContactStatusDataDotCom()
    {
        return $this->contactStatusDataDotCom;
    }

    /**
     * Sets a new contactStatusDataDotCom
     *
     * @param string $contactStatusDataDotCom
     * @return self
     */
    public function setContactStatusDataDotCom($contactStatusDataDotCom)
    {
        $this->contactStatusDataDotCom = $contactStatusDataDotCom;
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
     * Gets as isDifferentEmail
     *
     * @return bool
     */
    public function getIsDifferentEmail()
    {
        return $this->isDifferentEmail;
    }

    /**
     * Sets a new isDifferentEmail
     *
     * @param bool $isDifferentEmail
     * @return self
     */
    public function setIsDifferentEmail($isDifferentEmail)
    {
        $this->isDifferentEmail = $isDifferentEmail;
        return $this;
    }

    /**
     * Gets as isDifferentFirstName
     *
     * @return bool
     */
    public function getIsDifferentFirstName()
    {
        return $this->isDifferentFirstName;
    }

    /**
     * Sets a new isDifferentFirstName
     *
     * @param bool $isDifferentFirstName
     * @return self
     */
    public function setIsDifferentFirstName($isDifferentFirstName)
    {
        $this->isDifferentFirstName = $isDifferentFirstName;
        return $this;
    }

    /**
     * Gets as isDifferentLastName
     *
     * @return bool
     */
    public function getIsDifferentLastName()
    {
        return $this->isDifferentLastName;
    }

    /**
     * Sets a new isDifferentLastName
     *
     * @param bool $isDifferentLastName
     * @return self
     */
    public function setIsDifferentLastName($isDifferentLastName)
    {
        $this->isDifferentLastName = $isDifferentLastName;
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
     * Gets as isDifferentTitle
     *
     * @return bool
     */
    public function getIsDifferentTitle()
    {
        return $this->isDifferentTitle;
    }

    /**
     * Sets a new isDifferentTitle
     *
     * @param bool $isDifferentTitle
     * @return self
     */
    public function setIsDifferentTitle($isDifferentTitle)
    {
        $this->isDifferentTitle = $isDifferentTitle;
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
     * Gets as isFlaggedWrongEmail
     *
     * @return bool
     */
    public function getIsFlaggedWrongEmail()
    {
        return $this->isFlaggedWrongEmail;
    }

    /**
     * Sets a new isFlaggedWrongEmail
     *
     * @param bool $isFlaggedWrongEmail
     * @return self
     */
    public function setIsFlaggedWrongEmail($isFlaggedWrongEmail)
    {
        $this->isFlaggedWrongEmail = $isFlaggedWrongEmail;
        return $this;
    }

    /**
     * Gets as isFlaggedWrongName
     *
     * @return bool
     */
    public function getIsFlaggedWrongName()
    {
        return $this->isFlaggedWrongName;
    }

    /**
     * Sets a new isFlaggedWrongName
     *
     * @param bool $isFlaggedWrongName
     * @return self
     */
    public function setIsFlaggedWrongName($isFlaggedWrongName)
    {
        $this->isFlaggedWrongName = $isFlaggedWrongName;
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
     * Gets as isFlaggedWrongTitle
     *
     * @return bool
     */
    public function getIsFlaggedWrongTitle()
    {
        return $this->isFlaggedWrongTitle;
    }

    /**
     * Sets a new isFlaggedWrongTitle
     *
     * @param bool $isFlaggedWrongTitle
     * @return self
     */
    public function setIsFlaggedWrongTitle($isFlaggedWrongTitle)
    {
        $this->isFlaggedWrongTitle = $isFlaggedWrongTitle;
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
     * Gets as isReviewedEmail
     *
     * @return bool
     */
    public function getIsReviewedEmail()
    {
        return $this->isReviewedEmail;
    }

    /**
     * Sets a new isReviewedEmail
     *
     * @param bool $isReviewedEmail
     * @return self
     */
    public function setIsReviewedEmail($isReviewedEmail)
    {
        $this->isReviewedEmail = $isReviewedEmail;
        return $this;
    }

    /**
     * Gets as isReviewedName
     *
     * @return bool
     */
    public function getIsReviewedName()
    {
        return $this->isReviewedName;
    }

    /**
     * Sets a new isReviewedName
     *
     * @param bool $isReviewedName
     * @return self
     */
    public function setIsReviewedName($isReviewedName)
    {
        $this->isReviewedName = $isReviewedName;
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
     * Gets as isReviewedTitle
     *
     * @return bool
     */
    public function getIsReviewedTitle()
    {
        return $this->isReviewedTitle;
    }

    /**
     * Sets a new isReviewedTitle
     *
     * @param bool $isReviewedTitle
     * @return self
     */
    public function setIsReviewedTitle($isReviewedTitle)
    {
        $this->isReviewedTitle = $isReviewedTitle;
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

