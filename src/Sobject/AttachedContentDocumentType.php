<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing AttachedContentDocumentType
 *
 *
 * XSD Type: AttachedContentDocument
 */
class AttachedContentDocumentType extends SObjectType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentDocumentType $contentDocument
     */
    private $contentDocument = null;

    /**
     * @property string $contentDocumentId
     */
    private $contentDocumentId = null;

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
     * @property string $externalDataSourceName
     */
    private $externalDataSourceName = null;

    /**
     * @property string $externalDataSourceType
     */
    private $externalDataSourceType = null;

    /**
     * @property string $fileExtension
     */
    private $fileExtension = null;

    /**
     * @property string $fileType
     */
    private $fileType = null;

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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContractType $linkedEntity
     */
    private $linkedEntity = null;

    /**
     * @property string $linkedEntityId
     */
    private $linkedEntityId = null;

    /**
     * @property string $sharingOption
     */
    private $sharingOption = null;

    /**
     * @property string $title
     */
    private $title = null;

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
     * Gets as externalDataSourceName
     *
     * @return string
     */
    public function getExternalDataSourceName()
    {
        return $this->externalDataSourceName;
    }

    /**
     * Sets a new externalDataSourceName
     *
     * @param string $externalDataSourceName
     * @return self
     */
    public function setExternalDataSourceName($externalDataSourceName)
    {
        $this->externalDataSourceName = $externalDataSourceName;
        return $this;
    }

    /**
     * Gets as externalDataSourceType
     *
     * @return string
     */
    public function getExternalDataSourceType()
    {
        return $this->externalDataSourceType;
    }

    /**
     * Sets a new externalDataSourceType
     *
     * @param string $externalDataSourceType
     * @return self
     */
    public function setExternalDataSourceType($externalDataSourceType)
    {
        $this->externalDataSourceType = $externalDataSourceType;
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
     * Gets as linkedEntity
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContractType
     */
    public function getLinkedEntity()
    {
        return $this->linkedEntity;
    }

    /**
     * Sets a new linkedEntity
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContractType $linkedEntity
     * @return self
     */
    public function setLinkedEntity(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContractType $linkedEntity)
    {
        $this->linkedEntity = $linkedEntity;
        return $this;
    }

    /**
     * Gets as linkedEntityId
     *
     * @return string
     */
    public function getLinkedEntityId()
    {
        return $this->linkedEntityId;
    }

    /**
     * Sets a new linkedEntityId
     *
     * @param string $linkedEntityId
     * @return self
     */
    public function setLinkedEntityId($linkedEntityId)
    {
        $this->linkedEntityId = $linkedEntityId;
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


}

