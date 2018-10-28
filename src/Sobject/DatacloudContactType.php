<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing DatacloudContactType
 *
 *
 * XSD Type: DatacloudContact
 */
class DatacloudContactType extends SObjectType
{

    /**
     * @property string $city
     */
    private $city = null;

    /**
     * @property string $companyId
     */
    private $companyId = null;

    /**
     * @property string $companyName
     */
    private $companyName = null;

    /**
     * @property string $contactId
     */
    private $contactId = null;

    /**
     * @property string $country
     */
    private $country = null;

    /**
     * @property string $department
     */
    private $department = null;

    /**
     * @property string $email
     */
    private $email = null;

    /**
     * @property string $externalId
     */
    private $externalId = null;

    /**
     * @property string $firstName
     */
    private $firstName = null;

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
     * @property string $lastName
     */
    private $lastName = null;

    /**
     * @property string $level
     */
    private $level = null;

    /**
     * @property string $phone
     */
    private $phone = null;

    /**
     * @property string $state
     */
    private $state = null;

    /**
     * @property string $street
     */
    private $street = null;

    /**
     * @property string $title
     */
    private $title = null;

    /**
     * @property \DateTime $updatedDate
     */
    private $updatedDate = null;

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
     * Gets as level
     *
     * @return string
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Sets a new level
     *
     * @param string $level
     * @return self
     */
    public function setLevel($level)
    {
        $this->level = $level;
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

