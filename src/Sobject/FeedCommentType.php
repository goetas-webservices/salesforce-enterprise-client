<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing FeedCommentType
 *
 *
 * XSD Type: FeedComment
 */
class FeedCommentType extends SObjectType
{

    /**
     * @property string $commentBody
     */
    private $commentBody = null;

    /**
     * @property string $commentType
     */
    private $commentType = null;

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
     * @property string $feedItemId
     */
    private $feedItemId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feedRevisions
     */
    private $feedRevisions = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feedThreadedComments
     */
    private $feedThreadedComments = null;

    /**
     * @property bool $hasEntityLinks
     */
    private $hasEntityLinks = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $insertedBy
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
     * @property bool $isVerified
     */
    private $isVerified = null;

    /**
     * @property string $lastEditById
     */
    private $lastEditById = null;

    /**
     * @property \DateTime $lastEditDate
     */
    private $lastEditDate = null;

    /**
     * @property string $parentId
     */
    private $parentId = null;

    /**
     * @property string $relatedRecordId
     */
    private $relatedRecordId = null;

    /**
     * @property int $revision
     */
    private $revision = null;

    /**
     * @property string $status
     */
    private $status = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property int $threadChildrenCount
     */
    private $threadChildrenCount = null;

    /**
     * @property \DateTime $threadLastUpdatedDate
     */
    private $threadLastUpdatedDate = null;

    /**
     * @property int $threadLevel
     */
    private $threadLevel = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\FeedCommentType $threadParent
     */
    private $threadParent = null;

    /**
     * @property string $threadParentId
     */
    private $threadParentId = null;

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
     * Gets as commentType
     *
     * @return string
     */
    public function getCommentType()
    {
        return $this->commentType;
    }

    /**
     * Sets a new commentType
     *
     * @param string $commentType
     * @return self
     */
    public function setCommentType($commentType)
    {
        $this->commentType = $commentType;
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
     * Gets as feedItemId
     *
     * @return string
     */
    public function getFeedItemId()
    {
        return $this->feedItemId;
    }

    /**
     * Sets a new feedItemId
     *
     * @param string $feedItemId
     * @return self
     */
    public function setFeedItemId($feedItemId)
    {
        $this->feedItemId = $feedItemId;
        return $this;
    }

    /**
     * Gets as feedRevisions
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getFeedRevisions()
    {
        return $this->feedRevisions;
    }

    /**
     * Sets a new feedRevisions
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feedRevisions
     * @return self
     */
    public function setFeedRevisions(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feedRevisions)
    {
        $this->feedRevisions = $feedRevisions;
        return $this;
    }

    /**
     * Gets as feedThreadedComments
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getFeedThreadedComments()
    {
        return $this->feedThreadedComments;
    }

    /**
     * Sets a new feedThreadedComments
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feedThreadedComments
     * @return self
     */
    public function setFeedThreadedComments(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feedThreadedComments)
    {
        $this->feedThreadedComments = $feedThreadedComments;
        return $this;
    }

    /**
     * Gets as hasEntityLinks
     *
     * @return bool
     */
    public function getHasEntityLinks()
    {
        return $this->hasEntityLinks;
    }

    /**
     * Sets a new hasEntityLinks
     *
     * @param bool $hasEntityLinks
     * @return self
     */
    public function setHasEntityLinks($hasEntityLinks)
    {
        $this->hasEntityLinks = $hasEntityLinks;
        return $this;
    }

    /**
     * Gets as insertedBy
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType
     */
    public function getInsertedBy()
    {
        return $this->insertedBy;
    }

    /**
     * Sets a new insertedBy
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $insertedBy
     * @return self
     */
    public function setInsertedBy(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $insertedBy)
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
     * Gets as isVerified
     *
     * @return bool
     */
    public function getIsVerified()
    {
        return $this->isVerified;
    }

    /**
     * Sets a new isVerified
     *
     * @param bool $isVerified
     * @return self
     */
    public function setIsVerified($isVerified)
    {
        $this->isVerified = $isVerified;
        return $this;
    }

    /**
     * Gets as lastEditById
     *
     * @return string
     */
    public function getLastEditById()
    {
        return $this->lastEditById;
    }

    /**
     * Sets a new lastEditById
     *
     * @param string $lastEditById
     * @return self
     */
    public function setLastEditById($lastEditById)
    {
        $this->lastEditById = $lastEditById;
        return $this;
    }

    /**
     * Gets as lastEditDate
     *
     * @return \DateTime
     */
    public function getLastEditDate()
    {
        return $this->lastEditDate;
    }

    /**
     * Sets a new lastEditDate
     *
     * @param \DateTime $lastEditDate
     * @return self
     */
    public function setLastEditDate(\DateTime $lastEditDate)
    {
        $this->lastEditDate = $lastEditDate;
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
     * Gets as revision
     *
     * @return int
     */
    public function getRevision()
    {
        return $this->revision;
    }

    /**
     * Sets a new revision
     *
     * @param int $revision
     * @return self
     */
    public function setRevision($revision)
    {
        $this->revision = $revision;
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
     * Gets as threadChildrenCount
     *
     * @return int
     */
    public function getThreadChildrenCount()
    {
        return $this->threadChildrenCount;
    }

    /**
     * Sets a new threadChildrenCount
     *
     * @param int $threadChildrenCount
     * @return self
     */
    public function setThreadChildrenCount($threadChildrenCount)
    {
        $this->threadChildrenCount = $threadChildrenCount;
        return $this;
    }

    /**
     * Gets as threadLastUpdatedDate
     *
     * @return \DateTime
     */
    public function getThreadLastUpdatedDate()
    {
        return $this->threadLastUpdatedDate;
    }

    /**
     * Sets a new threadLastUpdatedDate
     *
     * @param \DateTime $threadLastUpdatedDate
     * @return self
     */
    public function setThreadLastUpdatedDate(\DateTime $threadLastUpdatedDate)
    {
        $this->threadLastUpdatedDate = $threadLastUpdatedDate;
        return $this;
    }

    /**
     * Gets as threadLevel
     *
     * @return int
     */
    public function getThreadLevel()
    {
        return $this->threadLevel;
    }

    /**
     * Sets a new threadLevel
     *
     * @param int $threadLevel
     * @return self
     */
    public function setThreadLevel($threadLevel)
    {
        $this->threadLevel = $threadLevel;
        return $this;
    }

    /**
     * Gets as threadParent
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\FeedCommentType
     */
    public function getThreadParent()
    {
        return $this->threadParent;
    }

    /**
     * Sets a new threadParent
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\FeedCommentType $threadParent
     * @return self
     */
    public function setThreadParent(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\FeedCommentType $threadParent)
    {
        $this->threadParent = $threadParent;
        return $this;
    }

    /**
     * Gets as threadParentId
     *
     * @return string
     */
    public function getThreadParentId()
    {
        return $this->threadParentId;
    }

    /**
     * Sets a new threadParentId
     *
     * @param string $threadParentId
     * @return self
     */
    public function setThreadParentId($threadParentId)
    {
        $this->threadParentId = $threadParentId;
        return $this;
    }


}

