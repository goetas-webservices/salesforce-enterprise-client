<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing ContentWorkspaceMemberType
 *
 *
 * XSD Type: ContentWorkspaceMember
 */
class ContentWorkspaceMemberType extends SObjectType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentWorkspaceType $contentWorkspace
     */
    private $contentWorkspace = null;

    /**
     * @property string $contentWorkspaceId
     */
    private $contentWorkspaceId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentWorkspacePermissionType $contentWorkspacePermission
     */
    private $contentWorkspacePermission = null;

    /**
     * @property string $contentWorkspacePermissionId
     */
    private $contentWorkspacePermissionId = null;

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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $member
     */
    private $member = null;

    /**
     * @property string $memberId
     */
    private $memberId = null;

    /**
     * @property string $memberType
     */
    private $memberType = null;

    /**
     * Gets as contentWorkspace
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentWorkspaceType
     */
    public function getContentWorkspace()
    {
        return $this->contentWorkspace;
    }

    /**
     * Sets a new contentWorkspace
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentWorkspaceType $contentWorkspace
     * @return self
     */
    public function setContentWorkspace(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentWorkspaceType $contentWorkspace)
    {
        $this->contentWorkspace = $contentWorkspace;
        return $this;
    }

    /**
     * Gets as contentWorkspaceId
     *
     * @return string
     */
    public function getContentWorkspaceId()
    {
        return $this->contentWorkspaceId;
    }

    /**
     * Sets a new contentWorkspaceId
     *
     * @param string $contentWorkspaceId
     * @return self
     */
    public function setContentWorkspaceId($contentWorkspaceId)
    {
        $this->contentWorkspaceId = $contentWorkspaceId;
        return $this;
    }

    /**
     * Gets as contentWorkspacePermission
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentWorkspacePermissionType
     */
    public function getContentWorkspacePermission()
    {
        return $this->contentWorkspacePermission;
    }

    /**
     * Sets a new contentWorkspacePermission
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentWorkspacePermissionType $contentWorkspacePermission
     * @return self
     */
    public function setContentWorkspacePermission(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentWorkspacePermissionType $contentWorkspacePermission)
    {
        $this->contentWorkspacePermission = $contentWorkspacePermission;
        return $this;
    }

    /**
     * Gets as contentWorkspacePermissionId
     *
     * @return string
     */
    public function getContentWorkspacePermissionId()
    {
        return $this->contentWorkspacePermissionId;
    }

    /**
     * Sets a new contentWorkspacePermissionId
     *
     * @param string $contentWorkspacePermissionId
     * @return self
     */
    public function setContentWorkspacePermissionId($contentWorkspacePermissionId)
    {
        $this->contentWorkspacePermissionId = $contentWorkspacePermissionId;
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
     * Gets as member
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType
     */
    public function getMember()
    {
        return $this->member;
    }

    /**
     * Sets a new member
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $member
     * @return self
     */
    public function setMember(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $member)
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
     * Gets as memberType
     *
     * @return string
     */
    public function getMemberType()
    {
        return $this->memberType;
    }

    /**
     * Sets a new memberType
     *
     * @param string $memberType
     * @return self
     */
    public function setMemberType($memberType)
    {
        $this->memberType = $memberType;
        return $this;
    }


}

