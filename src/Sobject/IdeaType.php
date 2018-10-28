<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing IdeaType
 *
 *
 * XSD Type: Idea
 */
class IdeaType extends SObjectType
{

    /**
     * @property string $body
     */
    private $body = null;

    /**
     * @property string $categories
     */
    private $categories = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $comments
     */
    private $comments = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\CommunityType $community
     */
    private $community = null;

    /**
     * @property string $communityId
     */
    private $communityId = null;

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
     * @property string $creatorFullPhotoUrl
     */
    private $creatorFullPhotoUrl = null;

    /**
     * @property string $creatorName
     */
    private $creatorName = null;

    /**
     * @property string $creatorSmallPhotoUrl
     */
    private $creatorSmallPhotoUrl = null;

    /**
     * @property bool $isDeleted
     */
    private $isDeleted = null;

    /**
     * @property bool $isHtml
     */
    private $isHtml = null;

    /**
     * @property bool $isMerged
     */
    private $isMerged = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\IdeaCommentType $lastComment
     */
    private $lastComment = null;

    /**
     * @property \DateTime $lastCommentDate
     */
    private $lastCommentDate = null;

    /**
     * @property string $lastCommentId
     */
    private $lastCommentId = null;

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
     * @property int $numComments
     */
    private $numComments = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\IdeaType $parentIdea
     */
    private $parentIdea = null;

    /**
     * @property string $parentIdeaId
     */
    private $parentIdeaId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\RecordType $recordType
     */
    private $recordType = null;

    /**
     * @property string $recordTypeId
     */
    private $recordTypeId = null;

    /**
     * @property string $status
     */
    private $status = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property string $title
     */
    private $title = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserRecordAccessType $userRecordAccess
     */
    private $userRecordAccess = null;

    /**
     * @property float $voteScore
     */
    private $voteScore = null;

    /**
     * @property float $voteTotal
     */
    private $voteTotal = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $votes
     */
    private $votes = null;

    /**
     * Gets as body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param string $body
     * @return self
     */
    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as categories
     *
     * @return string
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Sets a new categories
     *
     * @param string $categories
     * @return self
     */
    public function setCategories($categories)
    {
        $this->categories = $categories;
        return $this;
    }

    /**
     * Gets as comments
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets a new comments
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $comments
     * @return self
     */
    public function setComments(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $comments)
    {
        $this->comments = $comments;
        return $this;
    }

    /**
     * Gets as community
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\CommunityType
     */
    public function getCommunity()
    {
        return $this->community;
    }

    /**
     * Sets a new community
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\CommunityType $community
     * @return self
     */
    public function setCommunity(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\CommunityType $community)
    {
        $this->community = $community;
        return $this;
    }

    /**
     * Gets as communityId
     *
     * @return string
     */
    public function getCommunityId()
    {
        return $this->communityId;
    }

    /**
     * Sets a new communityId
     *
     * @param string $communityId
     * @return self
     */
    public function setCommunityId($communityId)
    {
        $this->communityId = $communityId;
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
     * Gets as creatorFullPhotoUrl
     *
     * @return string
     */
    public function getCreatorFullPhotoUrl()
    {
        return $this->creatorFullPhotoUrl;
    }

    /**
     * Sets a new creatorFullPhotoUrl
     *
     * @param string $creatorFullPhotoUrl
     * @return self
     */
    public function setCreatorFullPhotoUrl($creatorFullPhotoUrl)
    {
        $this->creatorFullPhotoUrl = $creatorFullPhotoUrl;
        return $this;
    }

    /**
     * Gets as creatorName
     *
     * @return string
     */
    public function getCreatorName()
    {
        return $this->creatorName;
    }

    /**
     * Sets a new creatorName
     *
     * @param string $creatorName
     * @return self
     */
    public function setCreatorName($creatorName)
    {
        $this->creatorName = $creatorName;
        return $this;
    }

    /**
     * Gets as creatorSmallPhotoUrl
     *
     * @return string
     */
    public function getCreatorSmallPhotoUrl()
    {
        return $this->creatorSmallPhotoUrl;
    }

    /**
     * Sets a new creatorSmallPhotoUrl
     *
     * @param string $creatorSmallPhotoUrl
     * @return self
     */
    public function setCreatorSmallPhotoUrl($creatorSmallPhotoUrl)
    {
        $this->creatorSmallPhotoUrl = $creatorSmallPhotoUrl;
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
     * Gets as isHtml
     *
     * @return bool
     */
    public function getIsHtml()
    {
        return $this->isHtml;
    }

    /**
     * Sets a new isHtml
     *
     * @param bool $isHtml
     * @return self
     */
    public function setIsHtml($isHtml)
    {
        $this->isHtml = $isHtml;
        return $this;
    }

    /**
     * Gets as isMerged
     *
     * @return bool
     */
    public function getIsMerged()
    {
        return $this->isMerged;
    }

    /**
     * Sets a new isMerged
     *
     * @param bool $isMerged
     * @return self
     */
    public function setIsMerged($isMerged)
    {
        $this->isMerged = $isMerged;
        return $this;
    }

    /**
     * Gets as lastComment
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\IdeaCommentType
     */
    public function getLastComment()
    {
        return $this->lastComment;
    }

    /**
     * Sets a new lastComment
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\IdeaCommentType $lastComment
     * @return self
     */
    public function setLastComment(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\IdeaCommentType $lastComment)
    {
        $this->lastComment = $lastComment;
        return $this;
    }

    /**
     * Gets as lastCommentDate
     *
     * @return \DateTime
     */
    public function getLastCommentDate()
    {
        return $this->lastCommentDate;
    }

    /**
     * Sets a new lastCommentDate
     *
     * @param \DateTime $lastCommentDate
     * @return self
     */
    public function setLastCommentDate(\DateTime $lastCommentDate)
    {
        $this->lastCommentDate = $lastCommentDate;
        return $this;
    }

    /**
     * Gets as lastCommentId
     *
     * @return string
     */
    public function getLastCommentId()
    {
        return $this->lastCommentId;
    }

    /**
     * Sets a new lastCommentId
     *
     * @param string $lastCommentId
     * @return self
     */
    public function setLastCommentId($lastCommentId)
    {
        $this->lastCommentId = $lastCommentId;
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
     * Gets as numComments
     *
     * @return int
     */
    public function getNumComments()
    {
        return $this->numComments;
    }

    /**
     * Sets a new numComments
     *
     * @param int $numComments
     * @return self
     */
    public function setNumComments($numComments)
    {
        $this->numComments = $numComments;
        return $this;
    }

    /**
     * Gets as parentIdea
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\IdeaType
     */
    public function getParentIdea()
    {
        return $this->parentIdea;
    }

    /**
     * Sets a new parentIdea
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\IdeaType $parentIdea
     * @return self
     */
    public function setParentIdea(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\IdeaType $parentIdea)
    {
        $this->parentIdea = $parentIdea;
        return $this;
    }

    /**
     * Gets as parentIdeaId
     *
     * @return string
     */
    public function getParentIdeaId()
    {
        return $this->parentIdeaId;
    }

    /**
     * Sets a new parentIdeaId
     *
     * @param string $parentIdeaId
     * @return self
     */
    public function setParentIdeaId($parentIdeaId)
    {
        $this->parentIdeaId = $parentIdeaId;
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

    /**
     * Gets as voteScore
     *
     * @return float
     */
    public function getVoteScore()
    {
        return $this->voteScore;
    }

    /**
     * Sets a new voteScore
     *
     * @param float $voteScore
     * @return self
     */
    public function setVoteScore($voteScore)
    {
        $this->voteScore = $voteScore;
        return $this;
    }

    /**
     * Gets as voteTotal
     *
     * @return float
     */
    public function getVoteTotal()
    {
        return $this->voteTotal;
    }

    /**
     * Sets a new voteTotal
     *
     * @param float $voteTotal
     * @return self
     */
    public function setVoteTotal($voteTotal)
    {
        $this->voteTotal = $voteTotal;
        return $this;
    }

    /**
     * Gets as votes
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getVotes()
    {
        return $this->votes;
    }

    /**
     * Sets a new votes
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $votes
     * @return self
     */
    public function setVotes(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $votes)
    {
        $this->votes = $votes;
        return $this;
    }


}

