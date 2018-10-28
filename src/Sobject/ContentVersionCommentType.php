<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing ContentVersionCommentType
 *
 *
 * XSD Type: ContentVersionComment
 */
class ContentVersionCommentType extends SObjectType
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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentVersionType $contentVersion
     */
    private $contentVersion = null;

    /**
     * @property string $contentVersionId
     */
    private $contentVersionId = null;

    /**
     * @property \DateTime $createdDate
     */
    private $createdDate = null;

    /**
     * @property string $userComment
     */
    private $userComment = null;

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
     * Gets as contentVersion
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentVersionType
     */
    public function getContentVersion()
    {
        return $this->contentVersion;
    }

    /**
     * Sets a new contentVersion
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentVersionType $contentVersion
     * @return self
     */
    public function setContentVersion(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentVersionType $contentVersion)
    {
        $this->contentVersion = $contentVersion;
        return $this;
    }

    /**
     * Gets as contentVersionId
     *
     * @return string
     */
    public function getContentVersionId()
    {
        return $this->contentVersionId;
    }

    /**
     * Sets a new contentVersionId
     *
     * @param string $contentVersionId
     * @return self
     */
    public function setContentVersionId($contentVersionId)
    {
        $this->contentVersionId = $contentVersionId;
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
     * Gets as userComment
     *
     * @return string
     */
    public function getUserComment()
    {
        return $this->userComment;
    }

    /**
     * Sets a new userComment
     *
     * @param string $userComment
     * @return self
     */
    public function setUserComment($userComment)
    {
        $this->userComment = $userComment;
        return $this;
    }


}

