<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing IdeaCommentType
 *
 *
 * XSD Type: IdeaComment
 */
class IdeaCommentType extends SObjectType
{

    /**
     * @property string $commentBody
     */
    private $commentBody = null;

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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\IdeaType $idea
     */
    private $idea = null;

    /**
     * @property string $ideaId
     */
    private $ideaId = null;

    /**
     * @property bool $isDeleted
     */
    private $isDeleted = null;

    /**
     * @property bool $isHtml
     */
    private $isHtml = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property int $upVotes
     */
    private $upVotes = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $votes
     */
    private $votes = null;

    /**
     * Gets as commentBody
     *
     * @return string
     */
    public function getCommentBody()
    {
        return $this->commentBody;
    }

    /**
     * Sets a new commentBody
     *
     * @param string $commentBody
     * @return self
     */
    public function setCommentBody($commentBody)
    {
        $this->commentBody = $commentBody;
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
     * Gets as idea
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\IdeaType
     */
    public function getIdea()
    {
        return $this->idea;
    }

    /**
     * Sets a new idea
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\IdeaType $idea
     * @return self
     */
    public function setIdea(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\IdeaType $idea)
    {
        $this->idea = $idea;
        return $this;
    }

    /**
     * Gets as ideaId
     *
     * @return string
     */
    public function getIdeaId()
    {
        return $this->ideaId;
    }

    /**
     * Sets a new ideaId
     *
     * @param string $ideaId
     * @return self
     */
    public function setIdeaId($ideaId)
    {
        $this->ideaId = $ideaId;
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
     * Gets as upVotes
     *
     * @return int
     */
    public function getUpVotes()
    {
        return $this->upVotes;
    }

    /**
     * Sets a new upVotes
     *
     * @param int $upVotes
     * @return self
     */
    public function setUpVotes($upVotes)
    {
        $this->upVotes = $upVotes;
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

