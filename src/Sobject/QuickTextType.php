<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing QuickTextType
 *
 *
 * XSD Type: QuickText
 */
class QuickTextType extends SObjectType
{

    /**
     * @property string $category
     */
    private $category = null;

    /**
     * @property string $channel
     */
    private $channel = null;

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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $histories
     */
    private $histories = null;

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
     * @property \DateTime $lastReferencedDate
     */
    private $lastReferencedDate = null;

    /**
     * @property \DateTime $lastViewedDate
     */
    private $lastViewedDate = null;

    /**
     * @property string $message
     */
    private $message = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $owner
     */
    private $owner = null;

    /**
     * @property string $ownerId
     */
    private $ownerId = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserRecordAccessType $userRecordAccess
     */
    private $userRecordAccess = null;

    /**
     * Gets as category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * @param string $category
     * @return self
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Gets as channel
     *
     * @return string
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * Sets a new channel
     *
     * @param string $channel
     * @return self
     */
    public function setChannel($channel)
    {
        $this->channel = $channel;
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
     * Gets as message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Sets a new message
     *
     * @param string $message
     * @return self
     */
    public function setMessage($message)
    {
        $this->message = $message;
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
     * Gets as owner
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Sets a new owner
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $owner
     * @return self
     */
    public function setOwner(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $owner)
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

