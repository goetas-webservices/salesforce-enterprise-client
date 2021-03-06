<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing UserProvAccountType
 *
 *
 * XSD Type: UserProvAccount
 */
class UserProvAccountType extends SObjectType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ConnectedApplicationType $connectedApp
     */
    private $connectedApp = null;

    /**
     * @property string $connectedAppId
     */
    private $connectedAppId = null;

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
     * @property \DateTime $deletedDate
     */
    private $deletedDate = null;

    /**
     * @property string $externalEmail
     */
    private $externalEmail = null;

    /**
     * @property string $externalFirstName
     */
    private $externalFirstName = null;

    /**
     * @property string $externalLastName
     */
    private $externalLastName = null;

    /**
     * @property string $externalUserId
     */
    private $externalUserId = null;

    /**
     * @property string $externalUsername
     */
    private $externalUsername = null;

    /**
     * @property bool $isDeleted
     */
    private $isDeleted = null;

    /**
     * @property bool $isKnownLink
     */
    private $isKnownLink = null;

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
     * @property string $linkState
     */
    private $linkState = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $salesforceUser
     */
    private $salesforceUser = null;

    /**
     * @property string $salesforceUserId
     */
    private $salesforceUserId = null;

    /**
     * @property string $status
     */
    private $status = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserRecordAccessType $userRecordAccess
     */
    private $userRecordAccess = null;

    /**
     * Gets as connectedApp
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ConnectedApplicationType
     */
    public function getConnectedApp()
    {
        return $this->connectedApp;
    }

    /**
     * Sets a new connectedApp
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ConnectedApplicationType $connectedApp
     * @return self
     */
    public function setConnectedApp(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\ConnectedApplicationType $connectedApp)
    {
        $this->connectedApp = $connectedApp;
        return $this;
    }

    /**
     * Gets as connectedAppId
     *
     * @return string
     */
    public function getConnectedAppId()
    {
        return $this->connectedAppId;
    }

    /**
     * Sets a new connectedAppId
     *
     * @param string $connectedAppId
     * @return self
     */
    public function setConnectedAppId($connectedAppId)
    {
        $this->connectedAppId = $connectedAppId;
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
     * Gets as deletedDate
     *
     * @return \DateTime
     */
    public function getDeletedDate()
    {
        return $this->deletedDate;
    }

    /**
     * Sets a new deletedDate
     *
     * @param \DateTime $deletedDate
     * @return self
     */
    public function setDeletedDate(\DateTime $deletedDate)
    {
        $this->deletedDate = $deletedDate;
        return $this;
    }

    /**
     * Gets as externalEmail
     *
     * @return string
     */
    public function getExternalEmail()
    {
        return $this->externalEmail;
    }

    /**
     * Sets a new externalEmail
     *
     * @param string $externalEmail
     * @return self
     */
    public function setExternalEmail($externalEmail)
    {
        $this->externalEmail = $externalEmail;
        return $this;
    }

    /**
     * Gets as externalFirstName
     *
     * @return string
     */
    public function getExternalFirstName()
    {
        return $this->externalFirstName;
    }

    /**
     * Sets a new externalFirstName
     *
     * @param string $externalFirstName
     * @return self
     */
    public function setExternalFirstName($externalFirstName)
    {
        $this->externalFirstName = $externalFirstName;
        return $this;
    }

    /**
     * Gets as externalLastName
     *
     * @return string
     */
    public function getExternalLastName()
    {
        return $this->externalLastName;
    }

    /**
     * Sets a new externalLastName
     *
     * @param string $externalLastName
     * @return self
     */
    public function setExternalLastName($externalLastName)
    {
        $this->externalLastName = $externalLastName;
        return $this;
    }

    /**
     * Gets as externalUserId
     *
     * @return string
     */
    public function getExternalUserId()
    {
        return $this->externalUserId;
    }

    /**
     * Sets a new externalUserId
     *
     * @param string $externalUserId
     * @return self
     */
    public function setExternalUserId($externalUserId)
    {
        $this->externalUserId = $externalUserId;
        return $this;
    }

    /**
     * Gets as externalUsername
     *
     * @return string
     */
    public function getExternalUsername()
    {
        return $this->externalUsername;
    }

    /**
     * Sets a new externalUsername
     *
     * @param string $externalUsername
     * @return self
     */
    public function setExternalUsername($externalUsername)
    {
        $this->externalUsername = $externalUsername;
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
     * Gets as isKnownLink
     *
     * @return bool
     */
    public function getIsKnownLink()
    {
        return $this->isKnownLink;
    }

    /**
     * Sets a new isKnownLink
     *
     * @param bool $isKnownLink
     * @return self
     */
    public function setIsKnownLink($isKnownLink)
    {
        $this->isKnownLink = $isKnownLink;
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
     * Gets as linkState
     *
     * @return string
     */
    public function getLinkState()
    {
        return $this->linkState;
    }

    /**
     * Sets a new linkState
     *
     * @param string $linkState
     * @return self
     */
    public function setLinkState($linkState)
    {
        $this->linkState = $linkState;
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
     * Gets as salesforceUser
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType
     */
    public function getSalesforceUser()
    {
        return $this->salesforceUser;
    }

    /**
     * Sets a new salesforceUser
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $salesforceUser
     * @return self
     */
    public function setSalesforceUser(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $salesforceUser)
    {
        $this->salesforceUser = $salesforceUser;
        return $this;
    }

    /**
     * Gets as salesforceUserId
     *
     * @return string
     */
    public function getSalesforceUserId()
    {
        return $this->salesforceUserId;
    }

    /**
     * Sets a new salesforceUserId
     *
     * @param string $salesforceUserId
     * @return self
     */
    public function setSalesforceUserId($salesforceUserId)
    {
        $this->salesforceUserId = $salesforceUserId;
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

