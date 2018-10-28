<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing ContentWorkspaceDocType
 *
 *
 * XSD Type: ContentWorkspaceDoc
 */
class ContentWorkspaceDocType extends SObjectType
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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentWorkspaceType $contentWorkspace
     */
    private $contentWorkspace = null;

    /**
     * @property string $contentWorkspaceId
     */
    private $contentWorkspaceId = null;

    /**
     * @property \DateTime $createdDate
     */
    private $createdDate = null;

    /**
     * @property bool $isDeleted
     */
    private $isDeleted = null;

    /**
     * @property bool $isOwner
     */
    private $isOwner = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

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
     * Gets as contentWorkspace
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentWorkspaceType
     */
    public function getContentWorkspace()
    {
        return $this->contentWorkspace;
    }

    /**
     * Sets a new contentWorkspace
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentWorkspaceType $contentWorkspace
     * @return self
     */
    public function setContentWorkspace(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentWorkspaceType $contentWorkspace)
    {
        $this->contentWorkspace = $contentWorkspace;
        return $this;
    }

    /**
     * Gets as contentWorkspaceId
     *
     * @return string
     */
    public function getContentWorkspaceId()
    {
        return $this->contentWorkspaceId;
    }

    /**
     * Sets a new contentWorkspaceId
     *
     * @param string $contentWorkspaceId
     * @return self
     */
    public function setContentWorkspaceId($contentWorkspaceId)
    {
        $this->contentWorkspaceId = $contentWorkspaceId;
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
     * Gets as isOwner
     *
     * @return bool
     */
    public function getIsOwner()
    {
        return $this->isOwner;
    }

    /**
     * Sets a new isOwner
     *
     * @param bool $isOwner
     * @return self
     */
    public function setIsOwner($isOwner)
    {
        $this->isOwner = $isOwner;
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

