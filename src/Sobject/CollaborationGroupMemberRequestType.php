<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing CollaborationGroupMemberRequestType
 *
 *
 * XSD Type: CollaborationGroupMemberRequest
 */
class CollaborationGroupMemberRequestType extends SObjectType
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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $requester
     */
    private $requester = null;

    /**
     * @property string $requesterId
     */
    private $requesterId = null;

    /**
     * @property string $responseMessage
     */
    private $responseMessage = null;

    /**
     * @property string $status
     */
    private $status = null;

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
     * Gets as requester
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType
     */
    public function getRequester()
    {
        return $this->requester;
    }

    /**
     * Sets a new requester
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $requester
     * @return self
     */
    public function setRequester(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $requester)
    {
        $this->requester = $requester;
        return $this;
    }

    /**
     * Gets as requesterId
     *
     * @return string
     */
    public function getRequesterId()
    {
        return $this->requesterId;
    }

    /**
     * Sets a new requesterId
     *
     * @param string $requesterId
     * @return self
     */
    public function setRequesterId($requesterId)
    {
        $this->requesterId = $requesterId;
        return $this;
    }

    /**
     * Gets as responseMessage
     *
     * @return string
     */
    public function getResponseMessage()
    {
        return $this->responseMessage;
    }

    /**
     * Sets a new responseMessage
     *
     * @param string $responseMessage
     * @return self
     */
    public function setResponseMessage($responseMessage)
    {
        $this->responseMessage = $responseMessage;
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

