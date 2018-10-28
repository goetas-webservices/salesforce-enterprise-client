<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing CollaborationInvitationType
 *
 *
 * XSD Type: CollaborationInvitation
 */
class CollaborationInvitationType extends SObjectType
{

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
     * @property string $invitedUserEmail
     */
    private $invitedUserEmail = null;

    /**
     * @property string $invitedUserEmailNormalized
     */
    private $invitedUserEmailNormalized = null;

    /**
     * @property string $inviterId
     */
    private $inviterId = null;

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
     * @property string $optionalMessage
     */
    private $optionalMessage = null;

    /**
     * @property string $parentId
     */
    private $parentId = null;

    /**
     * @property string $sharedEntityId
     */
    private $sharedEntityId = null;

    /**
     * @property string $status
     */
    private $status = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

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
     * Gets as invitedUserEmail
     *
     * @return string
     */
    public function getInvitedUserEmail()
    {
        return $this->invitedUserEmail;
    }

    /**
     * Sets a new invitedUserEmail
     *
     * @param string $invitedUserEmail
     * @return self
     */
    public function setInvitedUserEmail($invitedUserEmail)
    {
        $this->invitedUserEmail = $invitedUserEmail;
        return $this;
    }

    /**
     * Gets as invitedUserEmailNormalized
     *
     * @return string
     */
    public function getInvitedUserEmailNormalized()
    {
        return $this->invitedUserEmailNormalized;
    }

    /**
     * Sets a new invitedUserEmailNormalized
     *
     * @param string $invitedUserEmailNormalized
     * @return self
     */
    public function setInvitedUserEmailNormalized($invitedUserEmailNormalized)
    {
        $this->invitedUserEmailNormalized = $invitedUserEmailNormalized;
        return $this;
    }

    /**
     * Gets as inviterId
     *
     * @return string
     */
    public function getInviterId()
    {
        return $this->inviterId;
    }

    /**
     * Sets a new inviterId
     *
     * @param string $inviterId
     * @return self
     */
    public function setInviterId($inviterId)
    {
        $this->inviterId = $inviterId;
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
     * Gets as optionalMessage
     *
     * @return string
     */
    public function getOptionalMessage()
    {
        return $this->optionalMessage;
    }

    /**
     * Sets a new optionalMessage
     *
     * @param string $optionalMessage
     * @return self
     */
    public function setOptionalMessage($optionalMessage)
    {
        $this->optionalMessage = $optionalMessage;
        return $this;
    }

    /**
     * Gets as parentId
     *
     * @return string
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * Sets a new parentId
     *
     * @param string $parentId
     * @return self
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;
        return $this;
    }

    /**
     * Gets as sharedEntityId
     *
     * @return string
     */
    public function getSharedEntityId()
    {
        return $this->sharedEntityId;
    }

    /**
     * Sets a new sharedEntityId
     *
     * @param string $sharedEntityId
     * @return self
     */
    public function setSharedEntityId($sharedEntityId)
    {
        $this->sharedEntityId = $sharedEntityId;
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


}

