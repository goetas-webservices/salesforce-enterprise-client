<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing ContentDocumentLinkType
 *
 *
 * XSD Type: ContentDocumentLink
 */
class ContentDocumentLinkType extends SObjectType
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
     * @property bool $isDeleted
     */
    private $isDeleted = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $linkedEntity
     */
    private $linkedEntity = null;

    /**
     * @property string $linkedEntityId
     */
    private $linkedEntityId = null;

    /**
     * @property string $shareType
     */
    private $shareType = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property string $visibility
     */
    private $visibility = null;

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
     * Gets as linkedEntity
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType
     */
    public function getLinkedEntity()
    {
        return $this->linkedEntity;
    }

    /**
     * Sets a new linkedEntity
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $linkedEntity
     * @return self
     */
    public function setLinkedEntity(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $linkedEntity)
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
     * Gets as shareType
     *
     * @return string
     */
    public function getShareType()
    {
        return $this->shareType;
    }

    /**
     * Sets a new shareType
     *
     * @param string $shareType
     * @return self
     */
    public function setShareType($shareType)
    {
        $this->shareType = $shareType;
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
     * Gets as visibility
     *
     * @return string
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     * Sets a new visibility
     *
     * @param string $visibility
     * @return self
     */
    public function setVisibility($visibility)
    {
        $this->visibility = $visibility;
        return $this;
    }


}

