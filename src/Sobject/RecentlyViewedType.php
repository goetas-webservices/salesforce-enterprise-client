<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing RecentlyViewedType
 *
 *
 * XSD Type: RecentlyViewed
 */
class RecentlyViewedType extends SObjectType
{

    /**
     * @property string $alias
     */
    private $alias = null;

    /**
     * @property string $email
     */
    private $email = null;

    /**
     * @property string $firstName
     */
    private $firstName = null;

    /**
     * @property bool $isActive
     */
    private $isActive = null;

    /**
     * @property string $language
     */
    private $language = null;

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
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $nameOrAlias
     */
    private $nameOrAlias = null;

    /**
     * @property string $phone
     */
    private $phone = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ProfileType $profile
     */
    private $profile = null;

    /**
     * @property string $profileId
     */
    private $profileId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\RecordType $recordType
     */
    private $recordType = null;

    /**
     * @property string $recordTypeId
     */
    private $recordTypeId = null;

    /**
     * @property string $title
     */
    private $title = null;

    /**
     * @property string $type
     */
    private $type = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserRoleType $userRole
     */
    private $userRole = null;

    /**
     * @property string $userRoleId
     */
    private $userRoleId = null;

    /**
     * Gets as alias
     *
     * @return string
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Sets a new alias
     *
     * @param string $alias
     * @return self
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;
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
     * Gets as isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Sets a new isActive
     *
     * @param bool $isActive
     * @return self
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * Gets as language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * @param string $language
     * @return self
     */
    public function setLanguage($language)
    {
        $this->language = $language;
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
     * Gets as nameOrAlias
     *
     * @return string
     */
    public function getNameOrAlias()
    {
        return $this->nameOrAlias;
    }

    /**
     * Sets a new nameOrAlias
     *
     * @param string $nameOrAlias
     * @return self
     */
    public function setNameOrAlias($nameOrAlias)
    {
        $this->nameOrAlias = $nameOrAlias;
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
     * Gets as profile
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ProfileType
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Sets a new profile
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ProfileType $profile
     * @return self
     */
    public function setProfile(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\ProfileType $profile)
    {
        $this->profile = $profile;
        return $this;
    }

    /**
     * Gets as profileId
     *
     * @return string
     */
    public function getProfileId()
    {
        return $this->profileId;
    }

    /**
     * Sets a new profileId
     *
     * @param string $profileId
     * @return self
     */
    public function setProfileId($profileId)
    {
        $this->profileId = $profileId;
        return $this;
    }

    /**
     * Gets as recordType
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\RecordType
     */
    public function getRecordType()
    {
        return $this->recordType;
    }

    /**
     * Sets a new recordType
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\RecordType $recordType
     * @return self
     */
    public function setRecordType(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\RecordType $recordType)
    {
        $this->recordType = $recordType;
        return $this;
    }

    /**
     * Gets as recordTypeId
     *
     * @return string
     */
    public function getRecordTypeId()
    {
        return $this->recordTypeId;
    }

    /**
     * Sets a new recordTypeId
     *
     * @param string $recordTypeId
     * @return self
     */
    public function setRecordTypeId($recordTypeId)
    {
        $this->recordTypeId = $recordTypeId;
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
     * Gets as userRole
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserRoleType
     */
    public function getUserRole()
    {
        return $this->userRole;
    }

    /**
     * Sets a new userRole
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserRoleType $userRole
     * @return self
     */
    public function setUserRole(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserRoleType $userRole)
    {
        $this->userRole = $userRole;
        return $this;
    }

    /**
     * Gets as userRoleId
     *
     * @return string
     */
    public function getUserRoleId()
    {
        return $this->userRoleId;
    }

    /**
     * Sets a new userRoleId
     *
     * @param string $userRoleId
     * @return self
     */
    public function setUserRoleId($userRoleId)
    {
        $this->userRoleId = $userRoleId;
        return $this;
    }


}

