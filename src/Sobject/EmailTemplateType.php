<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing EmailTemplateType
 *
 *
 * XSD Type: EmailTemplate
 */
class EmailTemplateType extends SObjectType
{

    /**
     * @property float $apiVersion
     */
    private $apiVersion = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $attachedContentDocuments
     */
    private $attachedContentDocuments = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $attachments
     */
    private $attachments = null;

    /**
     * @property string $body
     */
    private $body = null;

    /**
     * @property string $brandTemplateId
     */
    private $brandTemplateId = null;

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
     * @property string $developerName
     */
    private $developerName = null;

    /**
     * @property string $encoding
     */
    private $encoding = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\FolderType $folder
     */
    private $folder = null;

    /**
     * @property string $folderId
     */
    private $folderId = null;

    /**
     * @property string $htmlValue
     */
    private $htmlValue = null;

    /**
     * @property bool $isActive
     */
    private $isActive = null;

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
     * @property \DateTime $lastUsedDate
     */
    private $lastUsedDate = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $listEmailTemplates
     */
    private $listEmailTemplates = null;

    /**
     * @property string $markup
     */
    private $markup = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $namespacePrefix
     */
    private $namespacePrefix = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $owner
     */
    private $owner = null;

    /**
     * @property string $ownerId
     */
    private $ownerId = null;

    /**
     * @property string $relatedEntityType
     */
    private $relatedEntityType = null;

    /**
     * @property string $subject
     */
    private $subject = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property string $templateStyle
     */
    private $templateStyle = null;

    /**
     * @property string $templateType
     */
    private $templateType = null;

    /**
     * @property int $timesUsed
     */
    private $timesUsed = null;

    /**
     * @property string $uiType
     */
    private $uiType = null;

    /**
     * Gets as apiVersion
     *
     * @return float
     */
    public function getApiVersion()
    {
        return $this->apiVersion;
    }

    /**
     * Sets a new apiVersion
     *
     * @param float $apiVersion
     * @return self
     */
    public function setApiVersion($apiVersion)
    {
        $this->apiVersion = $apiVersion;
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
     * Gets as attachments
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * Sets a new attachments
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $attachments
     * @return self
     */
    public function setAttachments(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $attachments)
    {
        $this->attachments = $attachments;
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
     * Gets as brandTemplateId
     *
     * @return string
     */
    public function getBrandTemplateId()
    {
        return $this->brandTemplateId;
    }

    /**
     * Sets a new brandTemplateId
     *
     * @param string $brandTemplateId
     * @return self
     */
    public function setBrandTemplateId($brandTemplateId)
    {
        $this->brandTemplateId = $brandTemplateId;
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
     * Gets as encoding
     *
     * @return string
     */
    public function getEncoding()
    {
        return $this->encoding;
    }

    /**
     * Sets a new encoding
     *
     * @param string $encoding
     * @return self
     */
    public function setEncoding($encoding)
    {
        $this->encoding = $encoding;
        return $this;
    }

    /**
     * Gets as folder
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\FolderType
     */
    public function getFolder()
    {
        return $this->folder;
    }

    /**
     * Sets a new folder
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\FolderType $folder
     * @return self
     */
    public function setFolder(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\FolderType $folder)
    {
        $this->folder = $folder;
        return $this;
    }

    /**
     * Gets as folderId
     *
     * @return string
     */
    public function getFolderId()
    {
        return $this->folderId;
    }

    /**
     * Sets a new folderId
     *
     * @param string $folderId
     * @return self
     */
    public function setFolderId($folderId)
    {
        $this->folderId = $folderId;
        return $this;
    }

    /**
     * Gets as htmlValue
     *
     * @return string
     */
    public function getHtmlValue()
    {
        return $this->htmlValue;
    }

    /**
     * Sets a new htmlValue
     *
     * @param string $htmlValue
     * @return self
     */
    public function setHtmlValue($htmlValue)
    {
        $this->htmlValue = $htmlValue;
        return $this;
    }

    /**
     * Gets as isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Sets a new isActive
     *
     * @param bool $isActive
     * @return self
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
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
     * Gets as lastUsedDate
     *
     * @return \DateTime
     */
    public function getLastUsedDate()
    {
        return $this->lastUsedDate;
    }

    /**
     * Sets a new lastUsedDate
     *
     * @param \DateTime $lastUsedDate
     * @return self
     */
    public function setLastUsedDate(\DateTime $lastUsedDate)
    {
        $this->lastUsedDate = $lastUsedDate;
        return $this;
    }

    /**
     * Gets as listEmailTemplates
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getListEmailTemplates()
    {
        return $this->listEmailTemplates;
    }

    /**
     * Sets a new listEmailTemplates
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $listEmailTemplates
     * @return self
     */
    public function setListEmailTemplates(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $listEmailTemplates)
    {
        $this->listEmailTemplates = $listEmailTemplates;
        return $this;
    }

    /**
     * Gets as markup
     *
     * @return string
     */
    public function getMarkup()
    {
        return $this->markup;
    }

    /**
     * Sets a new markup
     *
     * @param string $markup
     * @return self
     */
    public function setMarkup($markup)
    {
        $this->markup = $markup;
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
     * Gets as relatedEntityType
     *
     * @return string
     */
    public function getRelatedEntityType()
    {
        return $this->relatedEntityType;
    }

    /**
     * Sets a new relatedEntityType
     *
     * @param string $relatedEntityType
     * @return self
     */
    public function setRelatedEntityType($relatedEntityType)
    {
        $this->relatedEntityType = $relatedEntityType;
        return $this;
    }

    /**
     * Gets as subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Sets a new subject
     *
     * @param string $subject
     * @return self
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
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
     * Gets as templateStyle
     *
     * @return string
     */
    public function getTemplateStyle()
    {
        return $this->templateStyle;
    }

    /**
     * Sets a new templateStyle
     *
     * @param string $templateStyle
     * @return self
     */
    public function setTemplateStyle($templateStyle)
    {
        $this->templateStyle = $templateStyle;
        return $this;
    }

    /**
     * Gets as templateType
     *
     * @return string
     */
    public function getTemplateType()
    {
        return $this->templateType;
    }

    /**
     * Sets a new templateType
     *
     * @param string $templateType
     * @return self
     */
    public function setTemplateType($templateType)
    {
        $this->templateType = $templateType;
        return $this;
    }

    /**
     * Gets as timesUsed
     *
     * @return int
     */
    public function getTimesUsed()
    {
        return $this->timesUsed;
    }

    /**
     * Sets a new timesUsed
     *
     * @param int $timesUsed
     * @return self
     */
    public function setTimesUsed($timesUsed)
    {
        $this->timesUsed = $timesUsed;
        return $this;
    }

    /**
     * Gets as uiType
     *
     * @return string
     */
    public function getUiType()
    {
        return $this->uiType;
    }

    /**
     * Sets a new uiType
     *
     * @param string $uiType
     * @return self
     */
    public function setUiType($uiType)
    {
        $this->uiType = $uiType;
        return $this;
    }


}

