<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing Product2FeedType
 *
 *
 * XSD Type: Product2Feed
 */
class Product2FeedType extends SObjectType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\FeedCommentType $bestComment
     */
    private $bestComment = null;

    /**
     * @property string $bestCommentId
     */
    private $bestCommentId = null;

    /**
     * @property string $body
     */
    private $body = null;

    /**
     * @property int $commentCount
     */
    private $commentCount = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $createdBy
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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feedAttachments
     */
    private $feedAttachments = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feedComments
     */
    private $feedComments = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feedLikes
     */
    private $feedLikes = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feedSignals
     */
    private $feedSignals = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feedTrackedChanges
     */
    private $feedTrackedChanges = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $insertedBy
     */
    private $insertedBy = null;

    /**
     * @property string $insertedById
     */
    private $insertedById = null;

    /**
     * @property bool $isDeleted
     */
    private $isDeleted = null;

    /**
     * @property bool $isRichText
     */
    private $isRichText = null;

    /**
     * @property \DateTime $lastModifiedDate
     */
    private $lastModifiedDate = null;

    /**
     * @property int $likeCount
     */
    private $likeCount = null;

    /**
     * @property string $linkUrl
     */
    private $linkUrl = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\Product2Type $parent
     */
    private $parent = null;

    /**
     * @property string $parentId
     */
    private $parentId = null;

    /**
     * @property string $relatedRecordId
     */
    private $relatedRecordId = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property string $title
     */
    private $title = null;

    /**
     * @property string $type
     */
    private $type = null;

    /**
     * Gets as bestComment
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\FeedCommentType
     */
    public function getBestComment()
    {
        return $this->bestComment;
    }

    /**
     * Sets a new bestComment
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\FeedCommentType $bestComment
     * @return self
     */
    public function setBestComment(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\FeedCommentType $bestComment)
    {
        $this->bestComment = $bestComment;
        return $this;
    }

    /**
     * Gets as bestCommentId
     *
     * @return string
     */
    public function getBestCommentId()
    {
        return $this->bestCommentId;
    }

    /**
     * Sets a new bestCommentId
     *
     * @param string $bestCommentId
     * @return self
     */
    public function setBestCommentId($bestCommentId)
    {
        $this->bestCommentId = $bestCommentId;
        return $this;
    }

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
     * Gets as commentCount
     *
     * @return int
     */
    public function getCommentCount()
    {
        return $this->commentCount;
    }

    /**
     * Sets a new commentCount
     *
     * @param int $commentCount
     * @return self
     */
    public function setCommentCount($commentCount)
    {
        $this->commentCount = $commentCount;
        return $this;
    }

    /**
     * Gets as createdBy
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Sets a new createdBy
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $createdBy
     * @return self
     */
    public function setCreatedBy(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $createdBy)
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
     * Gets as feedAttachments
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getFeedAttachments()
    {
        return $this->feedAttachments;
    }

    /**
     * Sets a new feedAttachments
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feedAttachments
     * @return self
     */
    public function setFeedAttachments(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feedAttachments)
    {
        $this->feedAttachments = $feedAttachments;
        return $this;
    }

    /**
     * Gets as feedComments
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getFeedComments()
    {
        return $this->feedComments;
    }

    /**
     * Sets a new feedComments
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feedComments
     * @return self
     */
    public function setFeedComments(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feedComments)
    {
        $this->feedComments = $feedComments;
        return $this;
    }

    /**
     * Gets as feedLikes
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getFeedLikes()
    {
        return $this->feedLikes;
    }

    /**
     * Sets a new feedLikes
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feedLikes
     * @return self
     */
    public function setFeedLikes(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feedLikes)
    {
        $this->feedLikes = $feedLikes;
        return $this;
    }

    /**
     * Gets as feedSignals
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getFeedSignals()
    {
        return $this->feedSignals;
    }

    /**
     * Sets a new feedSignals
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feedSignals
     * @return self
     */
    public function setFeedSignals(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feedSignals)
    {
        $this->feedSignals = $feedSignals;
        return $this;
    }

    /**
     * Gets as feedTrackedChanges
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getFeedTrackedChanges()
    {
        return $this->feedTrackedChanges;
    }

    /**
     * Sets a new feedTrackedChanges
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feedTrackedChanges
     * @return self
     */
    public function setFeedTrackedChanges(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feedTrackedChanges)
    {
        $this->feedTrackedChanges = $feedTrackedChanges;
        return $this;
    }

    /**
     * Gets as insertedBy
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType
     */
    public function getInsertedBy()
    {
        return $this->insertedBy;
    }

    /**
     * Sets a new insertedBy
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $insertedBy
     * @return self
     */
    public function setInsertedBy(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $insertedBy)
    {
        $this->insertedBy = $insertedBy;
        return $this;
    }

    /**
     * Gets as insertedById
     *
     * @return string
     */
    public function getInsertedById()
    {
        return $this->insertedById;
    }

    /**
     * Sets a new insertedById
     *
     * @param string $insertedById
     * @return self
     */
    public function setInsertedById($insertedById)
    {
        $this->insertedById = $insertedById;
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
     * Gets as isRichText
     *
     * @return bool
     */
    public function getIsRichText()
    {
        return $this->isRichText;
    }

    /**
     * Sets a new isRichText
     *
     * @param bool $isRichText
     * @return self
     */
    public function setIsRichText($isRichText)
    {
        $this->isRichText = $isRichText;
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
     * Gets as likeCount
     *
     * @return int
     */
    public function getLikeCount()
    {
        return $this->likeCount;
    }

    /**
     * Sets a new likeCount
     *
     * @param int $likeCount
     * @return self
     */
    public function setLikeCount($likeCount)
    {
        $this->likeCount = $likeCount;
        return $this;
    }

    /**
     * Gets as linkUrl
     *
     * @return string
     */
    public function getLinkUrl()
    {
        return $this->linkUrl;
    }

    /**
     * Sets a new linkUrl
     *
     * @param string $linkUrl
     * @return self
     */
    public function setLinkUrl($linkUrl)
    {
        $this->linkUrl = $linkUrl;
        return $this;
    }

    /**
     * Gets as parent
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\Product2Type
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Sets a new parent
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\Product2Type $parent
     * @return self
     */
    public function setParent(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\Product2Type $parent)
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
     * Gets as relatedRecordId
     *
     * @return string
     */
    public function getRelatedRecordId()
    {
        return $this->relatedRecordId;
    }

    /**
     * Sets a new relatedRecordId
     *
     * @param string $relatedRecordId
     * @return self
     */
    public function setRelatedRecordId($relatedRecordId)
    {
        $this->relatedRecordId = $relatedRecordId;
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
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }


}

