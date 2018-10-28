<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing CollaborationGroupMemberType
 *
 *
 * XSD Type: CollaborationGroupMember
 */
class CollaborationGroupMemberType extends SObjectType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\CollaborationGroupType $collaborationGroup
     */
    private $collaborationGroup = null;

    /**
     * @property string $collaborationGroupId
     */
    private $collaborationGroupId = null;

    /**
     * @property string $collaborationRole
     */
    private $collaborationRole = null;

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
     * @property \DateTime $lastFeedAccessDate
     */
    private $lastFeedAccessDate = null;

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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $member
     */
    private $member = null;

    /**
     * @property string $memberId
     */
    private $memberId = null;

    /**
     * @property string $notificationFrequency
     */
    private $notificationFrequency = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * Gets as collaborationGroup
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\CollaborationGroupType
     */
    public function getCollaborationGroup()
    {
        return $this->collaborationGroup;
    }

    /**
     * Sets a new collaborationGroup
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\CollaborationGroupType $collaborationGroup
     * @return self
     */
    public function setCollaborationGroup(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\CollaborationGroupType $collaborationGroup)
    {
        $this->collaborationGroup = $collaborationGroup;
        return $this;
    }

    /**
     * Gets as collaborationGroupId
     *
     * @return string
     */
    public function getCollaborationGroupId()
    {
        return $this->collaborationGroupId;
    }

    /**
     * Sets a new collaborationGroupId
     *
     * @param string $collaborationGroupId
     * @return self
     */
    public function setCollaborationGroupId($collaborationGroupId)
    {
        $this->collaborationGroupId = $collaborationGroupId;
        return $this;
    }

    /**
     * Gets as collaborationRole
     *
     * @return string
     */
    public function getCollaborationRole()
    {
        return $this->collaborationRole;
    }

    /**
     * Sets a new collaborationRole
     *
     * @param string $collaborationRole
     * @return self
     */
    public function setCollaborationRole($collaborationRole)
    {
        $this->collaborationRole = $collaborationRole;
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
     * Gets as lastFeedAccessDate
     *
     * @return \DateTime
     */
    public function getLastFeedAccessDate()
    {
        return $this->lastFeedAccessDate;
    }

    /**
     * Sets a new lastFeedAccessDate
     *
     * @param \DateTime $lastFeedAccessDate
     * @return self
     */
    public function setLastFeedAccessDate(\DateTime $lastFeedAccessDate)
    {
        $this->lastFeedAccessDate = $lastFeedAccessDate;
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
     * Gets as member
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType
     */
    public function getMember()
    {
        return $this->member;
    }

    /**
     * Sets a new member
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $member
     * @return self
     */
    public function setMember(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $member)
    {
        $this->member = $member;
        return $this;
    }

    /**
     * Gets as memberId
     *
     * @return string
     */
    public function getMemberId()
    {
        return $this->memberId;
    }

    /**
     * Sets a new memberId
     *
     * @param string $memberId
     * @return self
     */
    public function setMemberId($memberId)
    {
        $this->memberId = $memberId;
        return $this;
    }

    /**
     * Gets as notificationFrequency
     *
     * @return string
     */
    public function getNotificationFrequency()
    {
        return $this->notificationFrequency;
    }

    /**
     * Sets a new notificationFrequency
     *
     * @param string $notificationFrequency
     * @return self
     */
    public function setNotificationFrequency($notificationFrequency)
    {
        $this->notificationFrequency = $notificationFrequency;
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

