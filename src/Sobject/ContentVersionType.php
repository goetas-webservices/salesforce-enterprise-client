<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing ContentVersionType
 *
 *
 * XSD Type: ContentVersion
 */
class ContentVersionType extends SObjectType
{

    /**
     * @property string $checksum
     */
    private $checksum = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentBodyType $contentBody
     */
    private $contentBody = null;

    /**
     * @property string $contentBodyId
     */
    private $contentBodyId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentDocumentType $contentDocument
     */
    private $contentDocument = null;

    /**
     * @property string $contentDocumentId
     */
    private $contentDocumentId = null;

    /**
     * @property string $contentLocation
     */
    private $contentLocation = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $contentModifiedBy
     */
    private $contentModifiedBy = null;

    /**
     * @property string $contentModifiedById
     */
    private $contentModifiedById = null;

    /**
     * @property \DateTime $contentModifiedDate
     */
    private $contentModifiedDate = null;

    /**
     * @property int $contentSize
     */
    private $contentSize = null;

    /**
     * @property string $contentUrl
     */
    private $contentUrl = null;

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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ExternalDataSourceType $externalDataSource
     */
    private $externalDataSource = null;

    /**
     * @property string $externalDataSourceId
     */
    private $externalDataSourceId = null;

    /**
     * @property string $externalDocumentInfo1
     */
    private $externalDocumentInfo1 = null;

    /**
     * @property string $externalDocumentInfo2
     */
    private $externalDocumentInfo2 = null;

    /**
     * @property int $featuredContentBoost
     */
    private $featuredContentBoost = null;

    /**
     * @property \DateTime $featuredContentDate
     */
    private $featuredContentDate = null;

    /**
     * @property string $fileExtension
     */
    private $fileExtension = null;

    /**
     * @property string $fileType
     */
    private $fileType = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $firstPublishLocation
     */
    private $firstPublishLocation = null;

    /**
     * @property string $firstPublishLocationId
     */
    private $firstPublishLocationId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $histories
     */
    private $histories = null;

    /**
     * @property bool $isAssetEnabled
     */
    private $isAssetEnabled = null;

    /**
     * @property bool $isDeleted
     */
    private $isDeleted = null;

    /**
     * @property bool $isLatest
     */
    private $isLatest = null;

    /**
     * @property bool $isMajorVersion
     */
    private $isMajorVersion = null;

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
     * @property int $negativeRatingCount
     */
    private $negativeRatingCount = null;

    /**
     * @property string $origin
     */
    private $origin = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $owner
     */
    private $owner = null;

    /**
     * @property string $ownerId
     */
    private $ownerId = null;

    /**
     * @property string $pathOnClient
     */
    private $pathOnClient = null;

    /**
     * @property int $positiveRatingCount
     */
    private $positiveRatingCount = null;

    /**
     * @property string $publishStatus
     */
    private $publishStatus = null;

    /**
     * @property int $ratingCount
     */
    private $ratingCount = null;

    /**
     * @property string $reasonForChange
     */
    private $reasonForChange = null;

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
     * @property string $tagCsv
     */
    private $tagCsv = null;

    /**
     * @property string $textPreview
     */
    private $textPreview = null;

    /**
     * @property string $title
     */
    private $title = null;

    /**
     * @property mixed $versionData
     */
    private $versionData = null;

    /**
     * @property string $versionNumber
     */
    private $versionNumber = null;

    /**
     * Gets as checksum
     *
     * @return string
     */
    public function getChecksum()
    {
        return $this->checksum;
    }

    /**
     * Sets a new checksum
     *
     * @param string $checksum
     * @return self
     */
    public function setChecksum($checksum)
    {
        $this->checksum = $checksum;
        return $this;
    }

    /**
     * Gets as contentBody
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentBodyType
     */
    public function getContentBody()
    {
        return $this->contentBody;
    }

    /**
     * Sets a new contentBody
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentBodyType $contentBody
     * @return self
     */
    public function setContentBody(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentBodyType $contentBody)
    {
        $this->contentBody = $contentBody;
        return $this;
    }

    /**
     * Gets as contentBodyId
     *
     * @return string
     */
    public function getContentBodyId()
    {
        return $this->contentBodyId;
    }

    /**
     * Sets a new contentBodyId
     *
     * @param string $contentBodyId
     * @return self
     */
    public function setContentBodyId($contentBodyId)
    {
        $this->contentBodyId = $contentBodyId;
        return $this;
    }

    /**
     * Gets as contentDocument
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentDocumentType
     */
    public function getContentDocument()
    {
        return $this->contentDocument;
    }

    /**
     * Sets a new contentDocument
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentDocumentType $contentDocument
     * @return self
     */
    public function setContentDocument(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentDocumentType $contentDocument)
    {
        $this->contentDocument = $contentDocument;
        return $this;
    }

    /**
     * Gets as contentDocumentId
     *
     * @return string
     */
    public function getContentDocumentId()
    {
        return $this->contentDocumentId;
    }

    /**
     * Sets a new contentDocumentId
     *
     * @param string $contentDocumentId
     * @return self
     */
    public function setContentDocumentId($contentDocumentId)
    {
        $this->contentDocumentId = $contentDocumentId;
        return $this;
    }

    /**
     * Gets as contentLocation
     *
     * @return string
     */
    public function getContentLocation()
    {
        return $this->contentLocation;
    }

    /**
     * Sets a new contentLocation
     *
     * @param string $contentLocation
     * @return self
     */
    public function setContentLocation($contentLocation)
    {
        $this->contentLocation = $contentLocation;
        return $this;
    }

    /**
     * Gets as contentModifiedBy
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType
     */
    public function getContentModifiedBy()
    {
        return $this->contentModifiedBy;
    }

    /**
     * Sets a new contentModifiedBy
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $contentModifiedBy
     * @return self
     */
    public function setContentModifiedBy(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $contentModifiedBy)
    {
        $this->contentModifiedBy = $contentModifiedBy;
        return $this;
    }

    /**
     * Gets as contentModifiedById
     *
     * @return string
     */
    public function getContentModifiedById()
    {
        return $this->contentModifiedById;
    }

    /**
     * Sets a new contentModifiedById
     *
     * @param string $contentModifiedById
     * @return self
     */
    public function setContentModifiedById($contentModifiedById)
    {
        $this->contentModifiedById = $contentModifiedById;
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
     * Gets as contentUrl
     *
     * @return string
     */
    public function getContentUrl()
    {
        return $this->contentUrl;
    }

    /**
     * Sets a new contentUrl
     *
     * @param string $contentUrl
     * @return self
     */
    public function setContentUrl($contentUrl)
    {
        $this->contentUrl = $contentUrl;
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
     * Gets as externalDataSource
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ExternalDataSourceType
     */
    public function getExternalDataSource()
    {
        return $this->externalDataSource;
    }

    /**
     * Sets a new externalDataSource
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ExternalDataSourceType $externalDataSource
     * @return self
     */
    public function setExternalDataSource(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\ExternalDataSourceType $externalDataSource)
    {
        $this->externalDataSource = $externalDataSource;
        return $this;
    }

    /**
     * Gets as externalDataSourceId
     *
     * @return string
     */
    public function getExternalDataSourceId()
    {
        return $this->externalDataSourceId;
    }

    /**
     * Sets a new externalDataSourceId
     *
     * @param string $externalDataSourceId
     * @return self
     */
    public function setExternalDataSourceId($externalDataSourceId)
    {
        $this->externalDataSourceId = $externalDataSourceId;
        return $this;
    }

    /**
     * Gets as externalDocumentInfo1
     *
     * @return string
     */
    public function getExternalDocumentInfo1()
    {
        return $this->externalDocumentInfo1;
    }

    /**
     * Sets a new externalDocumentInfo1
     *
     * @param string $externalDocumentInfo1
     * @return self
     */
    public function setExternalDocumentInfo1($externalDocumentInfo1)
    {
        $this->externalDocumentInfo1 = $externalDocumentInfo1;
        return $this;
    }

    /**
     * Gets as externalDocumentInfo2
     *
     * @return string
     */
    public function getExternalDocumentInfo2()
    {
        return $this->externalDocumentInfo2;
    }

    /**
     * Sets a new externalDocumentInfo2
     *
     * @param string $externalDocumentInfo2
     * @return self
     */
    public function setExternalDocumentInfo2($externalDocumentInfo2)
    {
        $this->externalDocumentInfo2 = $externalDocumentInfo2;
        return $this;
    }

    /**
     * Gets as featuredContentBoost
     *
     * @return int
     */
    public function getFeaturedContentBoost()
    {
        return $this->featuredContentBoost;
    }

    /**
     * Sets a new featuredContentBoost
     *
     * @param int $featuredContentBoost
     * @return self
     */
    public function setFeaturedContentBoost($featuredContentBoost)
    {
        $this->featuredContentBoost = $featuredContentBoost;
        return $this;
    }

    /**
     * Gets as featuredContentDate
     *
     * @return \DateTime
     */
    public function getFeaturedContentDate()
    {
        return $this->featuredContentDate;
    }

    /**
     * Sets a new featuredContentDate
     *
     * @param \DateTime $featuredContentDate
     * @return self
     */
    public function setFeaturedContentDate(\DateTime $featuredContentDate)
    {
        $this->featuredContentDate = $featuredContentDate;
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
     * Gets as firstPublishLocation
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType
     */
    public function getFirstPublishLocation()
    {
        return $this->firstPublishLocation;
    }

    /**
     * Sets a new firstPublishLocation
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $firstPublishLocation
     * @return self
     */
    public function setFirstPublishLocation(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $firstPublishLocation)
    {
        $this->firstPublishLocation = $firstPublishLocation;
        return $this;
    }

    /**
     * Gets as firstPublishLocationId
     *
     * @return string
     */
    public function getFirstPublishLocationId()
    {
        return $this->firstPublishLocationId;
    }

    /**
     * Sets a new firstPublishLocationId
     *
     * @param string $firstPublishLocationId
     * @return self
     */
    public function setFirstPublishLocationId($firstPublishLocationId)
    {
        $this->firstPublishLocationId = $firstPublishLocationId;
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
     * Gets as isAssetEnabled
     *
     * @return bool
     */
    public function getIsAssetEnabled()
    {
        return $this->isAssetEnabled;
    }

    /**
     * Sets a new isAssetEnabled
     *
     * @param bool $isAssetEnabled
     * @return self
     */
    public function setIsAssetEnabled($isAssetEnabled)
    {
        $this->isAssetEnabled = $isAssetEnabled;
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
     * Gets as isLatest
     *
     * @return bool
     */
    public function getIsLatest()
    {
        return $this->isLatest;
    }

    /**
     * Sets a new isLatest
     *
     * @param bool $isLatest
     * @return self
     */
    public function setIsLatest($isLatest)
    {
        $this->isLatest = $isLatest;
        return $this;
    }

    /**
     * Gets as isMajorVersion
     *
     * @return bool
     */
    public function getIsMajorVersion()
    {
        return $this->isMajorVersion;
    }

    /**
     * Sets a new isMajorVersion
     *
     * @param bool $isMajorVersion
     * @return self
     */
    public function setIsMajorVersion($isMajorVersion)
    {
        $this->isMajorVersion = $isMajorVersion;
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
     * Gets as negativeRatingCount
     *
     * @return int
     */
    public function getNegativeRatingCount()
    {
        return $this->negativeRatingCount;
    }

    /**
     * Sets a new negativeRatingCount
     *
     * @param int $negativeRatingCount
     * @return self
     */
    public function setNegativeRatingCount($negativeRatingCount)
    {
        $this->negativeRatingCount = $negativeRatingCount;
        return $this;
    }

    /**
     * Gets as origin
     *
     * @return string
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * Sets a new origin
     *
     * @param string $origin
     * @return self
     */
    public function setOrigin($origin)
    {
        $this->origin = $origin;
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
     * Gets as pathOnClient
     *
     * @return string
     */
    public function getPathOnClient()
    {
        return $this->pathOnClient;
    }

    /**
     * Sets a new pathOnClient
     *
     * @param string $pathOnClient
     * @return self
     */
    public function setPathOnClient($pathOnClient)
    {
        $this->pathOnClient = $pathOnClient;
        return $this;
    }

    /**
     * Gets as positiveRatingCount
     *
     * @return int
     */
    public function getPositiveRatingCount()
    {
        return $this->positiveRatingCount;
    }

    /**
     * Sets a new positiveRatingCount
     *
     * @param int $positiveRatingCount
     * @return self
     */
    public function setPositiveRatingCount($positiveRatingCount)
    {
        $this->positiveRatingCount = $positiveRatingCount;
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
     * Gets as ratingCount
     *
     * @return int
     */
    public function getRatingCount()
    {
        return $this->ratingCount;
    }

    /**
     * Sets a new ratingCount
     *
     * @param int $ratingCount
     * @return self
     */
    public function setRatingCount($ratingCount)
    {
        $this->ratingCount = $ratingCount;
        return $this;
    }

    /**
     * Gets as reasonForChange
     *
     * @return string
     */
    public function getReasonForChange()
    {
        return $this->reasonForChange;
    }

    /**
     * Sets a new reasonForChange
     *
     * @param string $reasonForChange
     * @return self
     */
    public function setReasonForChange($reasonForChange)
    {
        $this->reasonForChange = $reasonForChange;
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
     * Gets as tagCsv
     *
     * @return string
     */
    public function getTagCsv()
    {
        return $this->tagCsv;
    }

    /**
     * Sets a new tagCsv
     *
     * @param string $tagCsv
     * @return self
     */
    public function setTagCsv($tagCsv)
    {
        $this->tagCsv = $tagCsv;
        return $this;
    }

    /**
     * Gets as textPreview
     *
     * @return string
     */
    public function getTextPreview()
    {
        return $this->textPreview;
    }

    /**
     * Sets a new textPreview
     *
     * @param string $textPreview
     * @return self
     */
    public function setTextPreview($textPreview)
    {
        $this->textPreview = $textPreview;
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
     * Gets as versionData
     *
     * @return mixed
     */
    public function getVersionData()
    {
        return $this->versionData;
    }

    /**
     * Sets a new versionData
     *
     * @param mixed $versionData
     * @return self
     */
    public function setVersionData($versionData)
    {
        $this->versionData = $versionData;
        return $this;
    }

    /**
     * Gets as versionNumber
     *
     * @return string
     */
    public function getVersionNumber()
    {
        return $this->versionNumber;
    }

    /**
     * Sets a new versionNumber
     *
     * @param string $versionNumber
     * @return self
     */
    public function setVersionNumber($versionNumber)
    {
        $this->versionNumber = $versionNumber;
        return $this;
    }


}

