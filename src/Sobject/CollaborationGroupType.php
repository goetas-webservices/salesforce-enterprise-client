<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing CollaborationGroupType
 *
 *
 * XSD Type: CollaborationGroup
 */
class CollaborationGroupType extends SObjectType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AnnouncementType $announcement
     */
    private $announcement = null;

    /**
     * @property string $announcementId
     */
    private $announcementId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $attachedContentDocuments
     */
    private $attachedContentDocuments = null;

    /**
     * @property string $bannerPhotoUrl
     */
    private $bannerPhotoUrl = null;

    /**
     * @property bool $canHaveGuests
     */
    private $canHaveGuests = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $collaborationGroupRecords
     */
    private $collaborationGroupRecords = null;

    /**
     * @property string $collaborationType
     */
    private $collaborationType = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $combinedAttachments
     */
    private $combinedAttachments = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $contentDocumentLinks
     */
    private $contentDocumentLinks = null;

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
     * @property string $fullPhotoUrl
     */
    private $fullPhotoUrl = null;

    /**
     * @property string $groupEmail
     */
    private $groupEmail = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $groupMemberRequests
     */
    private $groupMemberRequests = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $groupMembers
     */
    private $groupMembers = null;

    /**
     * @property bool $hasPrivateFieldsAccess
     */
    private $hasPrivateFieldsAccess = null;

    /**
     * @property string $informationBody
     */
    private $informationBody = null;

    /**
     * @property string $informationTitle
     */
    private $informationTitle = null;

    /**
     * @property bool $isArchived
     */
    private $isArchived = null;

    /**
     * @property bool $isAutoArchiveDisabled
     */
    private $isAutoArchiveDisabled = null;

    /**
     * @property bool $isBroadcast
     */
    private $isBroadcast = null;

    /**
     * @property \DateTime $lastFeedModifiedDate
     */
    private $lastFeedModifiedDate = null;

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
     * @property string $mediumPhotoUrl
     */
    private $mediumPhotoUrl = null;

    /**
     * @property int $memberCount
     */
    private $memberCount = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $owner
     */
    private $owner = null;

    /**
     * @property string $ownerId
     */
    private $ownerId = null;

    /**
     * @property string $smallPhotoUrl
     */
    private $smallPhotoUrl = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * Gets as announcement
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AnnouncementType
     */
    public function getAnnouncement()
    {
        return $this->announcement;
    }

    /**
     * Sets a new announcement
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AnnouncementType $announcement
     * @return self
     */
    public function setAnnouncement(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\AnnouncementType $announcement)
    {
        $this->announcement = $announcement;
        return $this;
    }

    /**
     * Gets as announcementId
     *
     * @return string
     */
    public function getAnnouncementId()
    {
        return $this->announcementId;
    }

    /**
     * Sets a new announcementId
     *
     * @param string $announcementId
     * @return self
     */
    public function setAnnouncementId($announcementId)
    {
        $this->announcementId = $announcementId;
        return $this;
    }

    /**
     * Gets as attachedContentDocuments
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getAttachedContentDocuments()
    {
        return $this->attachedContentDocuments;
    }

    /**
     * Sets a new attachedContentDocuments
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $attachedContentDocuments
     * @return self
     */
    public function setAttachedContentDocuments(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $attachedContentDocuments)
    {
        $this->attachedContentDocuments = $attachedContentDocuments;
        return $this;
    }

    /**
     * Gets as bannerPhotoUrl
     *
     * @return string
     */
    public function getBannerPhotoUrl()
    {
        return $this->bannerPhotoUrl;
    }

    /**
     * Sets a new bannerPhotoUrl
     *
     * @param string $bannerPhotoUrl
     * @return self
     */
    public function setBannerPhotoUrl($bannerPhotoUrl)
    {
        $this->bannerPhotoUrl = $bannerPhotoUrl;
        return $this;
    }

    /**
     * Gets as canHaveGuests
     *
     * @return bool
     */
    public function getCanHaveGuests()
    {
        return $this->canHaveGuests;
    }

    /**
     * Sets a new canHaveGuests
     *
     * @param bool $canHaveGuests
     * @return self
     */
    public function setCanHaveGuests($canHaveGuests)
    {
        $this->canHaveGuests = $canHaveGuests;
        return $this;
    }

    /**
     * Gets as collaborationGroupRecords
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getCollaborationGroupRecords()
    {
        return $this->collaborationGroupRecords;
    }

    /**
     * Sets a new collaborationGroupRecords
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $collaborationGroupRecords
     * @return self
     */
    public function setCollaborationGroupRecords(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $collaborationGroupRecords)
    {
        $this->collaborationGroupRecords = $collaborationGroupRecords;
        return $this;
    }

    /**
     * Gets as collaborationType
     *
     * @return string
     */
    public function getCollaborationType()
    {
        return $this->collaborationType;
    }

    /**
     * Sets a new collaborationType
     *
     * @param string $collaborationType
     * @return self
     */
    public function setCollaborationType($collaborationType)
    {
        $this->collaborationType = $collaborationType;
        return $this;
    }

    /**
     * Gets as combinedAttachments
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getCombinedAttachments()
    {
        return $this->combinedAttachments;
    }

    /**
     * Sets a new combinedAttachments
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $combinedAttachments
     * @return self
     */
    public function setCombinedAttachments(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $combinedAttachments)
    {
        $this->combinedAttachments = $combinedAttachments;
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
     * Gets as fullPhotoUrl
     *
     * @return string
     */
    public function getFullPhotoUrl()
    {
        return $this->fullPhotoUrl;
    }

    /**
     * Sets a new fullPhotoUrl
     *
     * @param string $fullPhotoUrl
     * @return self
     */
    public function setFullPhotoUrl($fullPhotoUrl)
    {
        $this->fullPhotoUrl = $fullPhotoUrl;
        return $this;
    }

    /**
     * Gets as groupEmail
     *
     * @return string
     */
    public function getGroupEmail()
    {
        return $this->groupEmail;
    }

    /**
     * Sets a new groupEmail
     *
     * @param string $groupEmail
     * @return self
     */
    public function setGroupEmail($groupEmail)
    {
        $this->groupEmail = $groupEmail;
        return $this;
    }

    /**
     * Gets as groupMemberRequests
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getGroupMemberRequests()
    {
        return $this->groupMemberRequests;
    }

    /**
     * Sets a new groupMemberRequests
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $groupMemberRequests
     * @return self
     */
    public function setGroupMemberRequests(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $groupMemberRequests)
    {
        $this->groupMemberRequests = $groupMemberRequests;
        return $this;
    }

    /**
     * Gets as groupMembers
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getGroupMembers()
    {
        return $this->groupMembers;
    }

    /**
     * Sets a new groupMembers
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $groupMembers
     * @return self
     */
    public function setGroupMembers(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $groupMembers)
    {
        $this->groupMembers = $groupMembers;
        return $this;
    }

    /**
     * Gets as hasPrivateFieldsAccess
     *
     * @return bool
     */
    public function getHasPrivateFieldsAccess()
    {
        return $this->hasPrivateFieldsAccess;
    }

    /**
     * Sets a new hasPrivateFieldsAccess
     *
     * @param bool $hasPrivateFieldsAccess
     * @return self
     */
    public function setHasPrivateFieldsAccess($hasPrivateFieldsAccess)
    {
        $this->hasPrivateFieldsAccess = $hasPrivateFieldsAccess;
        return $this;
    }

    /**
     * Gets as informationBody
     *
     * @return string
     */
    public function getInformationBody()
    {
        return $this->informationBody;
    }

    /**
     * Sets a new informationBody
     *
     * @param string $informationBody
     * @return self
     */
    public function setInformationBody($informationBody)
    {
        $this->informationBody = $informationBody;
        return $this;
    }

    /**
     * Gets as informationTitle
     *
     * @return string
     */
    public function getInformationTitle()
    {
        return $this->informationTitle;
    }

    /**
     * Sets a new informationTitle
     *
     * @param string $informationTitle
     * @return self
     */
    public function setInformationTitle($informationTitle)
    {
        $this->informationTitle = $informationTitle;
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
     * Gets as isAutoArchiveDisabled
     *
     * @return bool
     */
    public function getIsAutoArchiveDisabled()
    {
        return $this->isAutoArchiveDisabled;
    }

    /**
     * Sets a new isAutoArchiveDisabled
     *
     * @param bool $isAutoArchiveDisabled
     * @return self
     */
    public function setIsAutoArchiveDisabled($isAutoArchiveDisabled)
    {
        $this->isAutoArchiveDisabled = $isAutoArchiveDisabled;
        return $this;
    }

    /**
     * Gets as isBroadcast
     *
     * @return bool
     */
    public function getIsBroadcast()
    {
        return $this->isBroadcast;
    }

    /**
     * Sets a new isBroadcast
     *
     * @param bool $isBroadcast
     * @return self
     */
    public function setIsBroadcast($isBroadcast)
    {
        $this->isBroadcast = $isBroadcast;
        return $this;
    }

    /**
     * Gets as lastFeedModifiedDate
     *
     * @return \DateTime
     */
    public function getLastFeedModifiedDate()
    {
        return $this->lastFeedModifiedDate;
    }

    /**
     * Sets a new lastFeedModifiedDate
     *
     * @param \DateTime $lastFeedModifiedDate
     * @return self
     */
    public function setLastFeedModifiedDate(\DateTime $lastFeedModifiedDate)
    {
        $this->lastFeedModifiedDate = $lastFeedModifiedDate;
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
     * Gets as mediumPhotoUrl
     *
     * @return string
     */
    public function getMediumPhotoUrl()
    {
        return $this->mediumPhotoUrl;
    }

    /**
     * Sets a new mediumPhotoUrl
     *
     * @param string $mediumPhotoUrl
     * @return self
     */
    public function setMediumPhotoUrl($mediumPhotoUrl)
    {
        $this->mediumPhotoUrl = $mediumPhotoUrl;
        return $this;
    }

    /**
     * Gets as memberCount
     *
     * @return int
     */
    public function getMemberCount()
    {
        return $this->memberCount;
    }

    /**
     * Sets a new memberCount
     *
     * @param int $memberCount
     * @return self
     */
    public function setMemberCount($memberCount)
    {
        $this->memberCount = $memberCount;
        return $this;
    }

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * Gets as smallPhotoUrl
     *
     * @return string
     */
    public function getSmallPhotoUrl()
    {
        return $this->smallPhotoUrl;
    }

    /**
     * Sets a new smallPhotoUrl
     *
     * @param string $smallPhotoUrl
     * @return self
     */
    public function setSmallPhotoUrl($smallPhotoUrl)
    {
        $this->smallPhotoUrl = $smallPhotoUrl;
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

