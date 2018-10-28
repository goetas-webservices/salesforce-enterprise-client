<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing ContentDocumentType
 *
 *
 * XSD Type: ContentDocument
 */
class ContentDocumentType extends SObjectType
{

    /**
     * @property string $archivedById
     */
    private $archivedById = null;

    /**
     * @property \DateTime $archivedDate
     */
    private $archivedDate = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentAssetType $contentAsset
     */
    private $contentAsset = null;

    /**
     * @property string $contentAssetId
     */
    private $contentAssetId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $contentDistributions
     */
    private $contentDistributions = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $contentDocumentLinks
     */
    private $contentDocumentLinks = null;

    /**
     * @property \DateTime $contentModifiedDate
     */
    private $contentModifiedDate = null;

    /**
     * @property int $contentSize
     */
    private $contentSize = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $contentVersions
     */
    private $contentVersions = null;

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
     * @property string $description
     */
    private $description = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feedSubscriptionsForEntity
     */
    private $feedSubscriptionsForEntity = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feeds
     */
    private $feeds = null;

    /**
     * @property string $fileExtension
     */
    private $fileExtension = null;

    /**
     * @property string $fileType
     */
    private $fileType = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $histories
     */
    private $histories = null;

    /**
     * @property bool $isArchived
     */
    private $isArchived = null;

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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentVersionType $latestPublishedVersion
     */
    private $latestPublishedVersion = null;

    /**
     * @property string $latestPublishedVersionId
     */
    private $latestPublishedVersionId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $owner
     */
    private $owner = null;

    /**
     * @property string $ownerId
     */
    private $ownerId = null;

    /**
     * @property string $parentId
     */
    private $parentId = null;

    /**
     * @property string $publishStatus
     */
    private $publishStatus = null;

    /**
     * @property string $sharingOption
     */
    private $sharingOption = null;

    /**
     * @property string $sharingPrivacy
     */
    private $sharingPrivacy = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property string $title
     */
    private $title = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $topicAssignments
     */
    private $topicAssignments = null;

    /**
     * Gets as archivedById
     *
     * @return string
     */
    public function getArchivedById()
    {
        return $this->archivedById;
    }

    /**
     * Sets a new archivedById
     *
     * @param string $archivedById
     * @return self
     */
    public function setArchivedById($archivedById)
    {
        $this->archivedById = $archivedById;
        return $this;
    }

    /**
     * Gets as archivedDate
     *
     * @return \DateTime
     */
    public function getArchivedDate()
    {
        return $this->archivedDate;
    }

    /**
     * Sets a new archivedDate
     *
     * @param \DateTime $archivedDate
     * @return self
     */
    public function setArchivedDate(\DateTime $archivedDate)
    {
        $this->archivedDate = $archivedDate;
        return $this;
    }

    /**
     * Gets as contentAsset
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentAssetType
     */
    public function getContentAsset()
    {
        return $this->contentAsset;
    }

    /**
     * Sets a new contentAsset
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentAssetType $contentAsset
     * @return self
     */
    public function setContentAsset(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentAssetType $contentAsset)
    {
        $this->contentAsset = $contentAsset;
        return $this;
    }

    /**
     * Gets as contentAssetId
     *
     * @return string
     */
    public function getContentAssetId()
    {
        return $this->contentAssetId;
    }

    /**
     * Sets a new contentAssetId
     *
     * @param string $contentAssetId
     * @return self
     */
    public function setContentAssetId($contentAssetId)
    {
        $this->contentAssetId = $contentAssetId;
        return $this;
    }

    /**
     * Gets as contentDistributions
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getContentDistributions()
    {
        return $this->contentDistributions;
    }

    /**
     * Sets a new contentDistributions
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $contentDistributions
     * @return self
     */
    public function setContentDistributions(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $contentDistributions)
    {
        $this->contentDistributions = $contentDistributions;
        return $this;
    }

    /**
     * Gets as contentDocumentLinks
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getContentDocumentLinks()
    {
        return $this->contentDocumentLinks;
    }

    /**
     * Sets a new contentDocumentLinks
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $contentDocumentLinks
     * @return self
     */
    public function setContentDocumentLinks(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $contentDocumentLinks)
    {
        $this->contentDocumentLinks = $contentDocumentLinks;
        return $this;
    }

    /**
     * Gets as contentModifiedDate
     *
     * @return \DateTime
     */
    public function getContentModifiedDate()
    {
        return $this->contentModifiedDate;
    }

    /**
     * Sets a new contentModifiedDate
     *
     * @param \DateTime $contentModifiedDate
     * @return self
     */
    public function setContentModifiedDate(\DateTime $contentModifiedDate)
    {
        $this->contentModifiedDate = $contentModifiedDate;
        return $this;
    }

    /**
     * Gets as contentSize
     *
     * @return int
     */
    public function getContentSize()
    {
        return $this->contentSize;
    }

    /**
     * Sets a new contentSize
     *
     * @param int $contentSize
     * @return self
     */
    public function setContentSize($contentSize)
    {
        $this->contentSize = $contentSize;
        return $this;
    }

    /**
     * Gets as contentVersions
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getContentVersions()
    {
        return $this->contentVersions;
    }

    /**
     * Sets a new contentVersions
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $contentVersions
     * @return self
     */
    public function setContentVersions(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $contentVersions)
    {
        $this->contentVersions = $contentVersions;
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
     * Gets as description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as feedSubscriptionsForEntity
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getFeedSubscriptionsForEntity()
    {
        return $this->feedSubscriptionsForEntity;
    }

    /**
     * Sets a new feedSubscriptionsForEntity
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feedSubscriptionsForEntity
     * @return self
     */
    public function setFeedSubscriptionsForEntity(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feedSubscriptionsForEntity)
    {
        $this->feedSubscriptionsForEntity = $feedSubscriptionsForEntity;
        return $this;
    }

    /**
     * Gets as feeds
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getFeeds()
    {
        return $this->feeds;
    }

    /**
     * Sets a new feeds
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feeds
     * @return self
     */
    public function setFeeds(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feeds)
    {
        $this->feeds = $feeds;
        return $this;
    }

    /**
     * Gets as fileExtension
     *
     * @return string
     */
    public function getFileExtension()
    {
        return $this->fileExtension;
    }

    /**
     * Sets a new fileExtension
     *
     * @param string $fileExtension
     * @return self
     */
    public function setFileExtension($fileExtension)
    {
        $this->fileExtension = $fileExtension;
        return $this;
    }

    /**
     * Gets as fileType
     *
     * @return string
     */
    public function getFileType()
    {
        return $this->fileType;
    }

    /**
     * Sets a new fileType
     *
     * @param string $fileType
     * @return self
     */
    public function setFileType($fileType)
    {
        $this->fileType = $fileType;
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
     * Gets as isArchived
     *
     * @return bool
     */
    public function getIsArchived()
    {
        return $this->isArchived;
    }

    /**
     * Sets a new isArchived
     *
     * @param bool $isArchived
     * @return self
     */
    public function setIsArchived($isArchived)
    {
        $this->isArchived = $isArchived;
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
     * Gets as latestPublishedVersion
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentVersionType
     */
    public function getLatestPublishedVersion()
    {
        return $this->latestPublishedVersion;
    }

    /**
     * Sets a new latestPublishedVersion
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentVersionType $latestPublishedVersion
     * @return self
     */
    public function setLatestPublishedVersion(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentVersionType $latestPublishedVersion)
    {
        $this->latestPublishedVersion = $latestPublishedVersion;
        return $this;
    }

    /**
     * Gets as latestPublishedVersionId
     *
     * @return string
     */
    public function getLatestPublishedVersionId()
    {
        return $this->latestPublishedVersionId;
    }

    /**
     * Sets a new latestPublishedVersionId
     *
     * @param string $latestPublishedVersionId
     * @return self
     */
    public function setLatestPublishedVersionId($latestPublishedVersionId)
    {
        $this->latestPublishedVersionId = $latestPublishedVersionId;
        return $this;
    }

    /**
     * Gets as owner
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Sets a new owner
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $owner
     * @return self
     */
    public function setOwner(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $owner)
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
     * Gets as publishStatus
     *
     * @return string
     */
    public function getPublishStatus()
    {
        return $this->publishStatus;
    }

    /**
     * Sets a new publishStatus
     *
     * @param string $publishStatus
     * @return self
     */
    public function setPublishStatus($publishStatus)
    {
        $this->publishStatus = $publishStatus;
        return $this;
    }

    /**
     * Gets as sharingOption
     *
     * @return string
     */
    public function getSharingOption()
    {
        return $this->sharingOption;
    }

    /**
     * Sets a new sharingOption
     *
     * @param string $sharingOption
     * @return self
     */
    public function setSharingOption($sharingOption)
    {
        $this->sharingOption = $sharingOption;
        return $this;
    }

    /**
     * Gets as sharingPrivacy
     *
     * @return string
     */
    public function getSharingPrivacy()
    {
        return $this->sharingPrivacy;
    }

    /**
     * Sets a new sharingPrivacy
     *
     * @param string $sharingPrivacy
     * @return self
     */
    public function setSharingPrivacy($sharingPrivacy)
    {
        $this->sharingPrivacy = $sharingPrivacy;
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
     * Gets as topicAssignments
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getTopicAssignments()
    {
        return $this->topicAssignments;
    }

    /**
     * Sets a new topicAssignments
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $topicAssignments
     * @return self
     */
    public function setTopicAssignments(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $topicAssignments)
    {
        $this->topicAssignments = $topicAssignments;
        return $this;
    }


}

