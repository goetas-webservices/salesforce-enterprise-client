<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing ContentWorkspaceType
 *
 *
 * XSD Type: ContentWorkspace
 */
class ContentWorkspaceType extends SObjectType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $attachedContentDocuments
     */
    private $attachedContentDocuments = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $combinedAttachments
     */
    private $combinedAttachments = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $contentDocumentLinks
     */
    private $contentDocumentLinks = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $contentFolderLinks
     */
    private $contentFolderLinks = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $contentWorkspaceMembers
     */
    private $contentWorkspaceMembers = null;

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
     * @property string $defaultRecordTypeId
     */
    private $defaultRecordTypeId = null;

    /**
     * @property string $description
     */
    private $description = null;

    /**
     * @property string $developerName
     */
    private $developerName = null;

    /**
     * @property bool $isRestrictContentTypes
     */
    private $isRestrictContentTypes = null;

    /**
     * @property bool $isRestrictLinkedContentTypes
     */
    private $isRestrictLinkedContentTypes = null;

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
     * @property \DateTime $lastWorkspaceActivityDate
     */
    private $lastWorkspaceActivityDate = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $namespacePrefix
     */
    private $namespacePrefix = null;

    /**
     * @property string $rootContentFolderId
     */
    private $rootContentFolderId = null;

    /**
     * @property bool $shouldAddCreatorMembership
     */
    private $shouldAddCreatorMembership = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property string $tagModel
     */
    private $tagModel = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentAssetType $workspaceImage
     */
    private $workspaceImage = null;

    /**
     * @property string $workspaceImageId
     */
    private $workspaceImageId = null;

    /**
     * @property string $workspaceType
     */
    private $workspaceType = null;

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
     * Gets as contentFolderLinks
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getContentFolderLinks()
    {
        return $this->contentFolderLinks;
    }

    /**
     * Sets a new contentFolderLinks
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $contentFolderLinks
     * @return self
     */
    public function setContentFolderLinks(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $contentFolderLinks)
    {
        $this->contentFolderLinks = $contentFolderLinks;
        return $this;
    }

    /**
     * Gets as contentWorkspaceMembers
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getContentWorkspaceMembers()
    {
        return $this->contentWorkspaceMembers;
    }

    /**
     * Sets a new contentWorkspaceMembers
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $contentWorkspaceMembers
     * @return self
     */
    public function setContentWorkspaceMembers(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $contentWorkspaceMembers)
    {
        $this->contentWorkspaceMembers = $contentWorkspaceMembers;
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
     * Gets as defaultRecordTypeId
     *
     * @return string
     */
    public function getDefaultRecordTypeId()
    {
        return $this->defaultRecordTypeId;
    }

    /**
     * Sets a new defaultRecordTypeId
     *
     * @param string $defaultRecordTypeId
     * @return self
     */
    public function setDefaultRecordTypeId($defaultRecordTypeId)
    {
        $this->defaultRecordTypeId = $defaultRecordTypeId;
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
     * Gets as developerName
     *
     * @return string
     */
    public function getDeveloperName()
    {
        return $this->developerName;
    }

    /**
     * Sets a new developerName
     *
     * @param string $developerName
     * @return self
     */
    public function setDeveloperName($developerName)
    {
        $this->developerName = $developerName;
        return $this;
    }

    /**
     * Gets as isRestrictContentTypes
     *
     * @return bool
     */
    public function getIsRestrictContentTypes()
    {
        return $this->isRestrictContentTypes;
    }

    /**
     * Sets a new isRestrictContentTypes
     *
     * @param bool $isRestrictContentTypes
     * @return self
     */
    public function setIsRestrictContentTypes($isRestrictContentTypes)
    {
        $this->isRestrictContentTypes = $isRestrictContentTypes;
        return $this;
    }

    /**
     * Gets as isRestrictLinkedContentTypes
     *
     * @return bool
     */
    public function getIsRestrictLinkedContentTypes()
    {
        return $this->isRestrictLinkedContentTypes;
    }

    /**
     * Sets a new isRestrictLinkedContentTypes
     *
     * @param bool $isRestrictLinkedContentTypes
     * @return self
     */
    public function setIsRestrictLinkedContentTypes($isRestrictLinkedContentTypes)
    {
        $this->isRestrictLinkedContentTypes = $isRestrictLinkedContentTypes;
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
     * Gets as lastWorkspaceActivityDate
     *
     * @return \DateTime
     */
    public function getLastWorkspaceActivityDate()
    {
        return $this->lastWorkspaceActivityDate;
    }

    /**
     * Sets a new lastWorkspaceActivityDate
     *
     * @param \DateTime $lastWorkspaceActivityDate
     * @return self
     */
    public function setLastWorkspaceActivityDate(\DateTime $lastWorkspaceActivityDate)
    {
        $this->lastWorkspaceActivityDate = $lastWorkspaceActivityDate;
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
     * Gets as namespacePrefix
     *
     * @return string
     */
    public function getNamespacePrefix()
    {
        return $this->namespacePrefix;
    }

    /**
     * Sets a new namespacePrefix
     *
     * @param string $namespacePrefix
     * @return self
     */
    public function setNamespacePrefix($namespacePrefix)
    {
        $this->namespacePrefix = $namespacePrefix;
        return $this;
    }

    /**
     * Gets as rootContentFolderId
     *
     * @return string
     */
    public function getRootContentFolderId()
    {
        return $this->rootContentFolderId;
    }

    /**
     * Sets a new rootContentFolderId
     *
     * @param string $rootContentFolderId
     * @return self
     */
    public function setRootContentFolderId($rootContentFolderId)
    {
        $this->rootContentFolderId = $rootContentFolderId;
        return $this;
    }

    /**
     * Gets as shouldAddCreatorMembership
     *
     * @return bool
     */
    public function getShouldAddCreatorMembership()
    {
        return $this->shouldAddCreatorMembership;
    }

    /**
     * Sets a new shouldAddCreatorMembership
     *
     * @param bool $shouldAddCreatorMembership
     * @return self
     */
    public function setShouldAddCreatorMembership($shouldAddCreatorMembership)
    {
        $this->shouldAddCreatorMembership = $shouldAddCreatorMembership;
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
     * Gets as tagModel
     *
     * @return string
     */
    public function getTagModel()
    {
        return $this->tagModel;
    }

    /**
     * Sets a new tagModel
     *
     * @param string $tagModel
     * @return self
     */
    public function setTagModel($tagModel)
    {
        $this->tagModel = $tagModel;
        return $this;
    }

    /**
     * Gets as workspaceImage
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentAssetType
     */
    public function getWorkspaceImage()
    {
        return $this->workspaceImage;
    }

    /**
     * Sets a new workspaceImage
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentAssetType $workspaceImage
     * @return self
     */
    public function setWorkspaceImage(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentAssetType $workspaceImage)
    {
        $this->workspaceImage = $workspaceImage;
        return $this;
    }

    /**
     * Gets as workspaceImageId
     *
     * @return string
     */
    public function getWorkspaceImageId()
    {
        return $this->workspaceImageId;
    }

    /**
     * Sets a new workspaceImageId
     *
     * @param string $workspaceImageId
     * @return self
     */
    public function setWorkspaceImageId($workspaceImageId)
    {
        $this->workspaceImageId = $workspaceImageId;
        return $this;
    }

    /**
     * Gets as workspaceType
     *
     * @return string
     */
    public function getWorkspaceType()
    {
        return $this->workspaceType;
    }

    /**
     * Sets a new workspaceType
     *
     * @param string $workspaceType
     * @return self
     */
    public function setWorkspaceType($workspaceType)
    {
        $this->workspaceType = $workspaceType;
        return $this;
    }


}

