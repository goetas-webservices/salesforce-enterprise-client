<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing CaseTeamMemberType
 *
 *
 * XSD Type: CaseTeamMember
 */
class CaseTeamMemberType extends SObjectType
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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $member
     */
    private $member = null;

    /**
     * @property string $memberId
     */
    private $memberId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\CaseType $parent
     */
    private $parent = null;

    /**
     * @property string $parentId
     */
    private $parentId = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\CaseTeamRoleType $teamRole
     */
    private $teamRole = null;

    /**
     * @property string $teamRoleId
     */
    private $teamRoleId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\CaseTeamTemplateType $teamTemplate
     */
    private $teamTemplate = null;

    /**
     * @property string $teamTemplateId
     */
    private $teamTemplateId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\CaseTeamTemplateMemberType $teamTemplateMember
     */
    private $teamTemplateMember = null;

    /**
     * @property string $teamTemplateMemberId
     */
    private $teamTemplateMemberId = null;

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
     * Gets as parent
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\CaseType
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Sets a new parent
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\CaseType $parent
     * @return self
     */
    public function setParent(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\CaseType $parent)
    {
        $this->parent = $parent;
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
     * Gets as teamRole
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\CaseTeamRoleType
     */
    public function getTeamRole()
    {
        return $this->teamRole;
    }

    /**
     * Sets a new teamRole
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\CaseTeamRoleType $teamRole
     * @return self
     */
    public function setTeamRole(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\CaseTeamRoleType $teamRole)
    {
        $this->teamRole = $teamRole;
        return $this;
    }

    /**
     * Gets as teamRoleId
     *
     * @return string
     */
    public function getTeamRoleId()
    {
        return $this->teamRoleId;
    }

    /**
     * Sets a new teamRoleId
     *
     * @param string $teamRoleId
     * @return self
     */
    public function setTeamRoleId($teamRoleId)
    {
        $this->teamRoleId = $teamRoleId;
        return $this;
    }

    /**
     * Gets as teamTemplate
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\CaseTeamTemplateType
     */
    public function getTeamTemplate()
    {
        return $this->teamTemplate;
    }

    /**
     * Sets a new teamTemplate
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\CaseTeamTemplateType $teamTemplate
     * @return self
     */
    public function setTeamTemplate(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\CaseTeamTemplateType $teamTemplate)
    {
        $this->teamTemplate = $teamTemplate;
        return $this;
    }

    /**
     * Gets as teamTemplateId
     *
     * @return string
     */
    public function getTeamTemplateId()
    {
        return $this->teamTemplateId;
    }

    /**
     * Sets a new teamTemplateId
     *
     * @param string $teamTemplateId
     * @return self
     */
    public function setTeamTemplateId($teamTemplateId)
    {
        $this->teamTemplateId = $teamTemplateId;
        return $this;
    }

    /**
     * Gets as teamTemplateMember
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\CaseTeamTemplateMemberType
     */
    public function getTeamTemplateMember()
    {
        return $this->teamTemplateMember;
    }

    /**
     * Sets a new teamTemplateMember
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\CaseTeamTemplateMemberType $teamTemplateMember
     * @return self
     */
    public function setTeamTemplateMember(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\CaseTeamTemplateMemberType $teamTemplateMember)
    {
        $this->teamTemplateMember = $teamTemplateMember;
        return $this;
    }

    /**
     * Gets as teamTemplateMemberId
     *
     * @return string
     */
    public function getTeamTemplateMemberId()
    {
        return $this->teamTemplateMemberId;
    }

    /**
     * Sets a new teamTemplateMemberId
     *
     * @param string $teamTemplateMemberId
     * @return self
     */
    public function setTeamTemplateMemberId($teamTemplateMemberId)
    {
        $this->teamTemplateMemberId = $teamTemplateMemberId;
        return $this;
    }


}

