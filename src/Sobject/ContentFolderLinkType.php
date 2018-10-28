<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing ContentFolderLinkType
 *
 *
 * XSD Type: ContentFolderLink
 */
class ContentFolderLinkType extends SObjectType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentFolderType $contentFolder
     */
    private $contentFolder = null;

    /**
     * @property string $contentFolderId
     */
    private $contentFolderId = null;

    /**
     * @property string $enableFolderStatus
     */
    private $enableFolderStatus = null;

    /**
     * @property bool $isDeleted
     */
    private $isDeleted = null;

    /**
     * @property string $parentEntityId
     */
    private $parentEntityId = null;

    /**
     * Gets as contentFolder
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentFolderType
     */
    public function getContentFolder()
    {
        return $this->contentFolder;
    }

    /**
     * Sets a new contentFolder
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentFolderType $contentFolder
     * @return self
     */
    public function setContentFolder(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentFolderType $contentFolder)
    {
        $this->contentFolder = $contentFolder;
        return $this;
    }

    /**
     * Gets as contentFolderId
     *
     * @return string
     */
    public function getContentFolderId()
    {
        return $this->contentFolderId;
    }

    /**
     * Sets a new contentFolderId
     *
     * @param string $contentFolderId
     * @return self
     */
    public function setContentFolderId($contentFolderId)
    {
        $this->contentFolderId = $contentFolderId;
        return $this;
    }

    /**
     * Gets as enableFolderStatus
     *
     * @return string
     */
    public function getEnableFolderStatus()
    {
        return $this->enableFolderStatus;
    }

    /**
     * Sets a new enableFolderStatus
     *
     * @param string $enableFolderStatus
     * @return self
     */
    public function setEnableFolderStatus($enableFolderStatus)
    {
        $this->enableFolderStatus = $enableFolderStatus;
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
     * Gets as parentEntityId
     *
     * @return string
     */
    public function getParentEntityId()
    {
        return $this->parentEntityId;
    }

    /**
     * Sets a new parentEntityId
     *
     * @param string $parentEntityId
     * @return self
     */
    public function setParentEntityId($parentEntityId)
    {
        $this->parentEntityId = $parentEntityId;
        return $this;
    }


}

