<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing ContactShareType
 *
 *
 * XSD Type: ContactShare
 */
class ContactShareType extends SObjectType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContactType $contact
     */
    private $contact = null;

    /**
     * @property string $contactAccessLevel
     */
    private $contactAccessLevel = null;

    /**
     * @property string $contactId
     */
    private $contactId = null;

    /**
     * @property bool $isDeleted
     */
    private $isDeleted = null;

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
     * @property string $rowCause
     */
    private $rowCause = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $userOrGroup
     */
    private $userOrGroup = null;

    /**
     * @property string $userOrGroupId
     */
    private $userOrGroupId = null;

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
     * Gets as contactAccessLevel
     *
     * @return string
     */
    public function getContactAccessLevel()
    {
        return $this->contactAccessLevel;
    }

    /**
     * Sets a new contactAccessLevel
     *
     * @param string $contactAccessLevel
     * @return self
     */
    public function setContactAccessLevel($contactAccessLevel)
    {
        $this->contactAccessLevel = $contactAccessLevel;
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
     * Gets as rowCause
     *
     * @return string
     */
    public function getRowCause()
    {
        return $this->rowCause;
    }

    /**
     * Sets a new rowCause
     *
     * @param string $rowCause
     * @return self
     */
    public function setRowCause($rowCause)
    {
        $this->rowCause = $rowCause;
        return $this;
    }

    /**
     * Gets as userOrGroup
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType
     */
    public function getUserOrGroup()
    {
        return $this->userOrGroup;
    }

    /**
     * Sets a new userOrGroup
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $userOrGroup
     * @return self
     */
    public function setUserOrGroup(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $userOrGroup)
    {
        $this->userOrGroup = $userOrGroup;
        return $this;
    }

    /**
     * Gets as userOrGroupId
     *
     * @return string
     */
    public function getUserOrGroupId()
    {
        return $this->userOrGroupId;
    }

    /**
     * Sets a new userOrGroupId
     *
     * @param string $userOrGroupId
     * @return self
     */
    public function setUserOrGroupId($userOrGroupId)
    {
        $this->userOrGroupId = $userOrGroupId;
        return $this;
    }


}

