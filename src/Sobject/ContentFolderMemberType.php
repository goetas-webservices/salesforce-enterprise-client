<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing ContentFolderMemberType
 *
 *
 * XSD Type: ContentFolderMember
 */
class ContentFolderMemberType extends SObjectType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentDocumentType $childRecord
     */
    private $childRecord = null;

    /**
     * @property string $childRecordId
     */
    private $childRecordId = null;

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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentFolderType $parentContentFolder
     */
    private $parentContentFolder = null;

    /**
     * @property string $parentContentFolderId
     */
    private $parentContentFolderId = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * Gets as childRecord
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentDocumentType
     */
    public function getChildRecord()
    {
        return $this->childRecord;
    }

    /**
     * Sets a new childRecord
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentDocumentType $childRecord
     * @return self
     */
    public function setChildRecord(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentDocumentType $childRecord)
    {
        $this->childRecord = $childRecord;
        return $this;
    }

    /**
     * Gets as childRecordId
     *
     * @return string
     */
    public function getChildRecordId()
    {
        return $this->childRecordId;
    }

    /**
     * Sets a new childRecordId
     *
     * @param string $childRecordId
     * @return self
     */
    public function setChildRecordId($childRecordId)
    {
        $this->childRecordId = $childRecordId;
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
     * Gets as parentContentFolder
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentFolderType
     */
    public function getParentContentFolder()
    {
        return $this->parentContentFolder;
    }

    /**
     * Sets a new parentContentFolder
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentFolderType $parentContentFolder
     * @return self
     */
    public function setParentContentFolder(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentFolderType $parentContentFolder)
    {
        $this->parentContentFolder = $parentContentFolder;
        return $this;
    }

    /**
     * Gets as parentContentFolderId
     *
     * @return string
     */
    public function getParentContentFolderId()
    {
        return $this->parentContentFolderId;
    }

    /**
     * Sets a new parentContentFolderId
     *
     * @param string $parentContentFolderId
     * @return self
     */
    public function setParentContentFolderId($parentContentFolderId)
    {
        $this->parentContentFolderId = $parentContentFolderId;
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

