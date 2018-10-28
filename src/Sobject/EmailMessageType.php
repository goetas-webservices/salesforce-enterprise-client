<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing EmailMessageType
 *
 *
 * XSD Type: EmailMessage
 */
class EmailMessageType extends SObjectType
{

    /**
     * @property string $activityId
     */
    private $activityId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $attachedContentDocuments
     */
    private $attachedContentDocuments = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $attachments
     */
    private $attachments = null;

    /**
     * @property string $bccAddress
     */
    private $bccAddress = null;

    /**
     * @property string[] $bccIds
     */
    private $bccIds = [
        
    ];

    /**
     * @property string $ccAddress
     */
    private $ccAddress = null;

    /**
     * @property string[] $ccIds
     */
    private $ccIds = [
        
    ];

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $combinedAttachments
     */
    private $combinedAttachments = null;

    /**
     * @property string[] $contentDocumentIds
     */
    private $contentDocumentIds = [
        
    ];

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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $emailMessageRelations
     */
    private $emailMessageRelations = null;

    /**
     * @property \DateTime $firstOpenedDate
     */
    private $firstOpenedDate = null;

    /**
     * @property string $fromAddress
     */
    private $fromAddress = null;

    /**
     * @property string $fromName
     */
    private $fromName = null;

    /**
     * @property bool $hasAttachment
     */
    private $hasAttachment = null;

    /**
     * @property string $headers
     */
    private $headers = null;

    /**
     * @property string $htmlBody
     */
    private $htmlBody = null;

    /**
     * @property bool $incoming
     */
    private $incoming = null;

    /**
     * @property bool $isBounced
     */
    private $isBounced = null;

    /**
     * @property bool $isClientManaged
     */
    private $isClientManaged = null;

    /**
     * @property bool $isDeleted
     */
    private $isDeleted = null;

    /**
     * @property bool $isExternallyVisible
     */
    private $isExternallyVisible = null;

    /**
     * @property bool $isOpened
     */
    private $isOpened = null;

    /**
     * @property bool $isTracked
     */
    private $isTracked = null;

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
     * @property \DateTime $lastOpenedDate
     */
    private $lastOpenedDate = null;

    /**
     * @property \DateTime $messageDate
     */
    private $messageDate = null;

    /**
     * @property string $messageIdentifier
     */
    private $messageIdentifier = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\CaseType $parent
     */
    private $parent = null;

    /**
     * @property string $parentId
     */
    private $parentId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $processInstances
     */
    private $processInstances = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $processSteps
     */
    private $processSteps = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $relatedTo
     */
    private $relatedTo = null;

    /**
     * @property string $relatedToId
     */
    private $relatedToId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\EmailMessageType $replyToEmailMessage
     */
    private $replyToEmailMessage = null;

    /**
     * @property string $replyToEmailMessageId
     */
    private $replyToEmailMessageId = null;

    /**
     * @property string $status
     */
    private $status = null;

    /**
     * @property string $subject
     */
    private $subject = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property string $textBody
     */
    private $textBody = null;

    /**
     * @property string $threadIdentifier
     */
    private $threadIdentifier = null;

    /**
     * @property string $toAddress
     */
    private $toAddress = null;

    /**
     * @property string[] $toIds
     */
    private $toIds = [
        
    ];

    /**
     * @property string $validatedFromAddress
     */
    private $validatedFromAddress = null;

    /**
     * Gets as activityId
     *
     * @return string
     */
    public function getActivityId()
    {
        return $this->activityId;
    }

    /**
     * Sets a new activityId
     *
     * @param string $activityId
     * @return self
     */
    public function setActivityId($activityId)
    {
        $this->activityId = $activityId;
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
     * Gets as bccAddress
     *
     * @return string
     */
    public function getBccAddress()
    {
        return $this->bccAddress;
    }

    /**
     * Sets a new bccAddress
     *
     * @param string $bccAddress
     * @return self
     */
    public function setBccAddress($bccAddress)
    {
        $this->bccAddress = $bccAddress;
        return $this;
    }

    /**
     * Adds as bccIds
     *
     * @return self
     * @param string $bccIds
     */
    public function addToBccIds($bccIds)
    {
        $this->bccIds[] = $bccIds;
        return $this;
    }

    /**
     * isset bccIds
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBccIds($index)
    {
        return isset($this->bccIds[$index]);
    }

    /**
     * unset bccIds
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBccIds($index)
    {
        unset($this->bccIds[$index]);
    }

    /**
     * Gets as bccIds
     *
     * @return string[]
     */
    public function getBccIds()
    {
        return $this->bccIds;
    }

    /**
     * Sets a new bccIds
     *
     * @param string $bccIds
     * @return self
     */
    public function setBccIds(array $bccIds)
    {
        $this->bccIds = $bccIds;
        return $this;
    }

    /**
     * Gets as ccAddress
     *
     * @return string
     */
    public function getCcAddress()
    {
        return $this->ccAddress;
    }

    /**
     * Sets a new ccAddress
     *
     * @param string $ccAddress
     * @return self
     */
    public function setCcAddress($ccAddress)
    {
        $this->ccAddress = $ccAddress;
        return $this;
    }

    /**
     * Adds as ccIds
     *
     * @return self
     * @param string $ccIds
     */
    public function addToCcIds($ccIds)
    {
        $this->ccIds[] = $ccIds;
        return $this;
    }

    /**
     * isset ccIds
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCcIds($index)
    {
        return isset($this->ccIds[$index]);
    }

    /**
     * unset ccIds
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCcIds($index)
    {
        unset($this->ccIds[$index]);
    }

    /**
     * Gets as ccIds
     *
     * @return string[]
     */
    public function getCcIds()
    {
        return $this->ccIds;
    }

    /**
     * Sets a new ccIds
     *
     * @param string $ccIds
     * @return self
     */
    public function setCcIds(array $ccIds)
    {
        $this->ccIds = $ccIds;
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
     * Adds as contentDocumentIds
     *
     * @return self
     * @param string $contentDocumentIds
     */
    public function addToContentDocumentIds($contentDocumentIds)
    {
        $this->contentDocumentIds[] = $contentDocumentIds;
        return $this;
    }

    /**
     * isset contentDocumentIds
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContentDocumentIds($index)
    {
        return isset($this->contentDocumentIds[$index]);
    }

    /**
     * unset contentDocumentIds
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContentDocumentIds($index)
    {
        unset($this->contentDocumentIds[$index]);
    }

    /**
     * Gets as contentDocumentIds
     *
     * @return string[]
     */
    public function getContentDocumentIds()
    {
        return $this->contentDocumentIds;
    }

    /**
     * Sets a new contentDocumentIds
     *
     * @param string $contentDocumentIds
     * @return self
     */
    public function setContentDocumentIds(array $contentDocumentIds)
    {
        $this->contentDocumentIds = $contentDocumentIds;
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
     * Gets as emailMessageRelations
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getEmailMessageRelations()
    {
        return $this->emailMessageRelations;
    }

    /**
     * Sets a new emailMessageRelations
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $emailMessageRelations
     * @return self
     */
    public function setEmailMessageRelations(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $emailMessageRelations)
    {
        $this->emailMessageRelations = $emailMessageRelations;
        return $this;
    }

    /**
     * Gets as firstOpenedDate
     *
     * @return \DateTime
     */
    public function getFirstOpenedDate()
    {
        return $this->firstOpenedDate;
    }

    /**
     * Sets a new firstOpenedDate
     *
     * @param \DateTime $firstOpenedDate
     * @return self
     */
    public function setFirstOpenedDate(\DateTime $firstOpenedDate)
    {
        $this->firstOpenedDate = $firstOpenedDate;
        return $this;
    }

    /**
     * Gets as fromAddress
     *
     * @return string
     */
    public function getFromAddress()
    {
        return $this->fromAddress;
    }

    /**
     * Sets a new fromAddress
     *
     * @param string $fromAddress
     * @return self
     */
    public function setFromAddress($fromAddress)
    {
        $this->fromAddress = $fromAddress;
        return $this;
    }

    /**
     * Gets as fromName
     *
     * @return string
     */
    public function getFromName()
    {
        return $this->fromName;
    }

    /**
     * Sets a new fromName
     *
     * @param string $fromName
     * @return self
     */
    public function setFromName($fromName)
    {
        $this->fromName = $fromName;
        return $this;
    }

    /**
     * Gets as hasAttachment
     *
     * @return bool
     */
    public function getHasAttachment()
    {
        return $this->hasAttachment;
    }

    /**
     * Sets a new hasAttachment
     *
     * @param bool $hasAttachment
     * @return self
     */
    public function setHasAttachment($hasAttachment)
    {
        $this->hasAttachment = $hasAttachment;
        return $this;
    }

    /**
     * Gets as headers
     *
     * @return string
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * Sets a new headers
     *
     * @param string $headers
     * @return self
     */
    public function setHeaders($headers)
    {
        $this->headers = $headers;
        return $this;
    }

    /**
     * Gets as htmlBody
     *
     * @return string
     */
    public function getHtmlBody()
    {
        return $this->htmlBody;
    }

    /**
     * Sets a new htmlBody
     *
     * @param string $htmlBody
     * @return self
     */
    public function setHtmlBody($htmlBody)
    {
        $this->htmlBody = $htmlBody;
        return $this;
    }

    /**
     * Gets as incoming
     *
     * @return bool
     */
    public function getIncoming()
    {
        return $this->incoming;
    }

    /**
     * Sets a new incoming
     *
     * @param bool $incoming
     * @return self
     */
    public function setIncoming($incoming)
    {
        $this->incoming = $incoming;
        return $this;
    }

    /**
     * Gets as isBounced
     *
     * @return bool
     */
    public function getIsBounced()
    {
        return $this->isBounced;
    }

    /**
     * Sets a new isBounced
     *
     * @param bool $isBounced
     * @return self
     */
    public function setIsBounced($isBounced)
    {
        $this->isBounced = $isBounced;
        return $this;
    }

    /**
     * Gets as isClientManaged
     *
     * @return bool
     */
    public function getIsClientManaged()
    {
        return $this->isClientManaged;
    }

    /**
     * Sets a new isClientManaged
     *
     * @param bool $isClientManaged
     * @return self
     */
    public function setIsClientManaged($isClientManaged)
    {
        $this->isClientManaged = $isClientManaged;
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
     * Gets as isExternallyVisible
     *
     * @return bool
     */
    public function getIsExternallyVisible()
    {
        return $this->isExternallyVisible;
    }

    /**
     * Sets a new isExternallyVisible
     *
     * @param bool $isExternallyVisible
     * @return self
     */
    public function setIsExternallyVisible($isExternallyVisible)
    {
        $this->isExternallyVisible = $isExternallyVisible;
        return $this;
    }

    /**
     * Gets as isOpened
     *
     * @return bool
     */
    public function getIsOpened()
    {
        return $this->isOpened;
    }

    /**
     * Sets a new isOpened
     *
     * @param bool $isOpened
     * @return self
     */
    public function setIsOpened($isOpened)
    {
        $this->isOpened = $isOpened;
        return $this;
    }

    /**
     * Gets as isTracked
     *
     * @return bool
     */
    public function getIsTracked()
    {
        return $this->isTracked;
    }

    /**
     * Sets a new isTracked
     *
     * @param bool $isTracked
     * @return self
     */
    public function setIsTracked($isTracked)
    {
        $this->isTracked = $isTracked;
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
     * Gets as lastOpenedDate
     *
     * @return \DateTime
     */
    public function getLastOpenedDate()
    {
        return $this->lastOpenedDate;
    }

    /**
     * Sets a new lastOpenedDate
     *
     * @param \DateTime $lastOpenedDate
     * @return self
     */
    public function setLastOpenedDate(\DateTime $lastOpenedDate)
    {
        $this->lastOpenedDate = $lastOpenedDate;
        return $this;
    }

    /**
     * Gets as messageDate
     *
     * @return \DateTime
     */
    public function getMessageDate()
    {
        return $this->messageDate;
    }

    /**
     * Sets a new messageDate
     *
     * @param \DateTime $messageDate
     * @return self
     */
    public function setMessageDate(\DateTime $messageDate)
    {
        $this->messageDate = $messageDate;
        return $this;
    }

    /**
     * Gets as messageIdentifier
     *
     * @return string
     */
    public function getMessageIdentifier()
    {
        return $this->messageIdentifier;
    }

    /**
     * Sets a new messageIdentifier
     *
     * @param string $messageIdentifier
     * @return self
     */
    public function setMessageIdentifier($messageIdentifier)
    {
        $this->messageIdentifier = $messageIdentifier;
        return $this;
    }

    /**
     * Gets as parent
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\CaseType
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Sets a new parent
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\CaseType $parent
     * @return self
     */
    public function setParent(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\CaseType $parent)
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * Gets as parentId
     *
     * @return string
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * Sets a new parentId
     *
     * @param string $parentId
     * @return self
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;
        return $this;
    }

    /**
     * Gets as processInstances
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getProcessInstances()
    {
        return $this->processInstances;
    }

    /**
     * Sets a new processInstances
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $processInstances
     * @return self
     */
    public function setProcessInstances(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $processInstances)
    {
        $this->processInstances = $processInstances;
        return $this;
    }

    /**
     * Gets as processSteps
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getProcessSteps()
    {
        return $this->processSteps;
    }

    /**
     * Sets a new processSteps
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $processSteps
     * @return self
     */
    public function setProcessSteps(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $processSteps)
    {
        $this->processSteps = $processSteps;
        return $this;
    }

    /**
     * Gets as relatedTo
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType
     */
    public function getRelatedTo()
    {
        return $this->relatedTo;
    }

    /**
     * Sets a new relatedTo
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $relatedTo
     * @return self
     */
    public function setRelatedTo(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $relatedTo)
    {
        $this->relatedTo = $relatedTo;
        return $this;
    }

    /**
     * Gets as relatedToId
     *
     * @return string
     */
    public function getRelatedToId()
    {
        return $this->relatedToId;
    }

    /**
     * Sets a new relatedToId
     *
     * @param string $relatedToId
     * @return self
     */
    public function setRelatedToId($relatedToId)
    {
        $this->relatedToId = $relatedToId;
        return $this;
    }

    /**
     * Gets as replyToEmailMessage
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\EmailMessageType
     */
    public function getReplyToEmailMessage()
    {
        return $this->replyToEmailMessage;
    }

    /**
     * Sets a new replyToEmailMessage
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\EmailMessageType $replyToEmailMessage
     * @return self
     */
    public function setReplyToEmailMessage(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\EmailMessageType $replyToEmailMessage)
    {
        $this->replyToEmailMessage = $replyToEmailMessage;
        return $this;
    }

    /**
     * Gets as replyToEmailMessageId
     *
     * @return string
     */
    public function getReplyToEmailMessageId()
    {
        return $this->replyToEmailMessageId;
    }

    /**
     * Sets a new replyToEmailMessageId
     *
     * @param string $replyToEmailMessageId
     * @return self
     */
    public function setReplyToEmailMessageId($replyToEmailMessageId)
    {
        $this->replyToEmailMessageId = $replyToEmailMessageId;
        return $this;
    }

    /**
     * Gets as status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
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
     * Gets as textBody
     *
     * @return string
     */
    public function getTextBody()
    {
        return $this->textBody;
    }

    /**
     * Sets a new textBody
     *
     * @param string $textBody
     * @return self
     */
    public function setTextBody($textBody)
    {
        $this->textBody = $textBody;
        return $this;
    }

    /**
     * Gets as threadIdentifier
     *
     * @return string
     */
    public function getThreadIdentifier()
    {
        return $this->threadIdentifier;
    }

    /**
     * Sets a new threadIdentifier
     *
     * @param string $threadIdentifier
     * @return self
     */
    public function setThreadIdentifier($threadIdentifier)
    {
        $this->threadIdentifier = $threadIdentifier;
        return $this;
    }

    /**
     * Gets as toAddress
     *
     * @return string
     */
    public function getToAddress()
    {
        return $this->toAddress;
    }

    /**
     * Sets a new toAddress
     *
     * @param string $toAddress
     * @return self
     */
    public function setToAddress($toAddress)
    {
        $this->toAddress = $toAddress;
        return $this;
    }

    /**
     * Adds as toIds
     *
     * @return self
     * @param string $toIds
     */
    public function addToToIds($toIds)
    {
        $this->toIds[] = $toIds;
        return $this;
    }

    /**
     * isset toIds
     *
     * @param int|string $index
     * @return bool
     */
    public function issetToIds($index)
    {
        return isset($this->toIds[$index]);
    }

    /**
     * unset toIds
     *
     * @param int|string $index
     * @return void
     */
    public function unsetToIds($index)
    {
        unset($this->toIds[$index]);
    }

    /**
     * Gets as toIds
     *
     * @return string[]
     */
    public function getToIds()
    {
        return $this->toIds;
    }

    /**
     * Sets a new toIds
     *
     * @param string $toIds
     * @return self
     */
    public function setToIds(array $toIds)
    {
        $this->toIds = $toIds;
        return $this;
    }

    /**
     * Gets as validatedFromAddress
     *
     * @return string
     */
    public function getValidatedFromAddress()
    {
        return $this->validatedFromAddress;
    }

    /**
     * Sets a new validatedFromAddress
     *
     * @param string $validatedFromAddress
     * @return self
     */
    public function setValidatedFromAddress($validatedFromAddress)
    {
        $this->validatedFromAddress = $validatedFromAddress;
        return $this;
    }


}

