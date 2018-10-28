<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing SingleEmailMessageType
 *
 *
 * XSD Type: SingleEmailMessage
 */
class SingleEmailMessageType extends EmailType
{

    /**
     * @property string[] $bccAddresses
     */
    private $bccAddresses = [
        
    ];

    /**
     * @property string[] $ccAddresses
     */
    private $ccAddresses = [
        
    ];

    /**
     * @property string $charset
     */
    private $charset = null;

    /**
     * @property string[] $documentAttachments
     */
    private $documentAttachments = [
        
    ];

    /**
     * @property string[] $entityAttachments
     */
    private $entityAttachments = [
        
    ];

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\EmailFileAttachmentType[] $fileAttachments
     */
    private $fileAttachments = [
        
    ];

    /**
     * @property string $htmlBody
     */
    private $htmlBody = null;

    /**
     * @property string $inReplyTo
     */
    private $inReplyTo = null;

    /**
     * @property string $optOutPolicy
     */
    private $optOutPolicy = null;

    /**
     * @property string $orgWideEmailAddressId
     */
    private $orgWideEmailAddressId = null;

    /**
     * @property string $plainTextBody
     */
    private $plainTextBody = null;

    /**
     * @property string $references
     */
    private $references = null;

    /**
     * @property string $targetObjectId
     */
    private $targetObjectId = null;

    /**
     * @property string $templateId
     */
    private $templateId = null;

    /**
     * @property string $templateName
     */
    private $templateName = null;

    /**
     * @property string[] $toAddresses
     */
    private $toAddresses = [
        
    ];

    /**
     * @property bool $treatBodiesAsTemplate
     */
    private $treatBodiesAsTemplate = null;

    /**
     * @property bool $treatTargetObjectAsRecipient
     */
    private $treatTargetObjectAsRecipient = null;

    /**
     * @property string $whatId
     */
    private $whatId = null;

    /**
     * Adds as bccAddresses
     *
     * @return self
     * @param string $bccAddresses
     */
    public function addToBccAddresses($bccAddresses)
    {
        $this->bccAddresses[] = $bccAddresses;
        return $this;
    }

    /**
     * isset bccAddresses
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBccAddresses($index)
    {
        return isset($this->bccAddresses[$index]);
    }

    /**
     * unset bccAddresses
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBccAddresses($index)
    {
        unset($this->bccAddresses[$index]);
    }

    /**
     * Gets as bccAddresses
     *
     * @return string[]
     */
    public function getBccAddresses()
    {
        return $this->bccAddresses;
    }

    /**
     * Sets a new bccAddresses
     *
     * @param string[] $bccAddresses
     * @return self
     */
    public function setBccAddresses(array $bccAddresses)
    {
        $this->bccAddresses = $bccAddresses;
        return $this;
    }

    /**
     * Adds as ccAddresses
     *
     * @return self
     * @param string $ccAddresses
     */
    public function addToCcAddresses($ccAddresses)
    {
        $this->ccAddresses[] = $ccAddresses;
        return $this;
    }

    /**
     * isset ccAddresses
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCcAddresses($index)
    {
        return isset($this->ccAddresses[$index]);
    }

    /**
     * unset ccAddresses
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCcAddresses($index)
    {
        unset($this->ccAddresses[$index]);
    }

    /**
     * Gets as ccAddresses
     *
     * @return string[]
     */
    public function getCcAddresses()
    {
        return $this->ccAddresses;
    }

    /**
     * Sets a new ccAddresses
     *
     * @param string[] $ccAddresses
     * @return self
     */
    public function setCcAddresses(array $ccAddresses)
    {
        $this->ccAddresses = $ccAddresses;
        return $this;
    }

    /**
     * Gets as charset
     *
     * @return string
     */
    public function getCharset()
    {
        return $this->charset;
    }

    /**
     * Sets a new charset
     *
     * @param string $charset
     * @return self
     */
    public function setCharset($charset)
    {
        $this->charset = $charset;
        return $this;
    }

    /**
     * Adds as documentAttachments
     *
     * @return self
     * @param string $documentAttachments
     */
    public function addToDocumentAttachments($documentAttachments)
    {
        $this->documentAttachments[] = $documentAttachments;
        return $this;
    }

    /**
     * isset documentAttachments
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDocumentAttachments($index)
    {
        return isset($this->documentAttachments[$index]);
    }

    /**
     * unset documentAttachments
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDocumentAttachments($index)
    {
        unset($this->documentAttachments[$index]);
    }

    /**
     * Gets as documentAttachments
     *
     * @return string[]
     */
    public function getDocumentAttachments()
    {
        return $this->documentAttachments;
    }

    /**
     * Sets a new documentAttachments
     *
     * @param string $documentAttachments
     * @return self
     */
    public function setDocumentAttachments(array $documentAttachments)
    {
        $this->documentAttachments = $documentAttachments;
        return $this;
    }

    /**
     * Adds as entityAttachments
     *
     * @return self
     * @param string $entityAttachments
     */
    public function addToEntityAttachments($entityAttachments)
    {
        $this->entityAttachments[] = $entityAttachments;
        return $this;
    }

    /**
     * isset entityAttachments
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEntityAttachments($index)
    {
        return isset($this->entityAttachments[$index]);
    }

    /**
     * unset entityAttachments
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEntityAttachments($index)
    {
        unset($this->entityAttachments[$index]);
    }

    /**
     * Gets as entityAttachments
     *
     * @return string[]
     */
    public function getEntityAttachments()
    {
        return $this->entityAttachments;
    }

    /**
     * Sets a new entityAttachments
     *
     * @param string $entityAttachments
     * @return self
     */
    public function setEntityAttachments(array $entityAttachments)
    {
        $this->entityAttachments = $entityAttachments;
        return $this;
    }

    /**
     * Adds as fileAttachments
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\EmailFileAttachmentType $fileAttachments
     */
    public function addToFileAttachments(\GoetasWebservices\Client\SalesforceEnterprise\Types\EmailFileAttachmentType $fileAttachments)
    {
        $this->fileAttachments[] = $fileAttachments;
        return $this;
    }

    /**
     * isset fileAttachments
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFileAttachments($index)
    {
        return isset($this->fileAttachments[$index]);
    }

    /**
     * unset fileAttachments
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFileAttachments($index)
    {
        unset($this->fileAttachments[$index]);
    }

    /**
     * Gets as fileAttachments
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\EmailFileAttachmentType[]
     */
    public function getFileAttachments()
    {
        return $this->fileAttachments;
    }

    /**
     * Sets a new fileAttachments
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\EmailFileAttachmentType[] $fileAttachments
     * @return self
     */
    public function setFileAttachments(array $fileAttachments)
    {
        $this->fileAttachments = $fileAttachments;
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
     * Gets as inReplyTo
     *
     * @return string
     */
    public function getInReplyTo()
    {
        return $this->inReplyTo;
    }

    /**
     * Sets a new inReplyTo
     *
     * @param string $inReplyTo
     * @return self
     */
    public function setInReplyTo($inReplyTo)
    {
        $this->inReplyTo = $inReplyTo;
        return $this;
    }

    /**
     * Gets as optOutPolicy
     *
     * @return string
     */
    public function getOptOutPolicy()
    {
        return $this->optOutPolicy;
    }

    /**
     * Sets a new optOutPolicy
     *
     * @param string $optOutPolicy
     * @return self
     */
    public function setOptOutPolicy($optOutPolicy)
    {
        $this->optOutPolicy = $optOutPolicy;
        return $this;
    }

    /**
     * Gets as orgWideEmailAddressId
     *
     * @return string
     */
    public function getOrgWideEmailAddressId()
    {
        return $this->orgWideEmailAddressId;
    }

    /**
     * Sets a new orgWideEmailAddressId
     *
     * @param string $orgWideEmailAddressId
     * @return self
     */
    public function setOrgWideEmailAddressId($orgWideEmailAddressId)
    {
        $this->orgWideEmailAddressId = $orgWideEmailAddressId;
        return $this;
    }

    /**
     * Gets as plainTextBody
     *
     * @return string
     */
    public function getPlainTextBody()
    {
        return $this->plainTextBody;
    }

    /**
     * Sets a new plainTextBody
     *
     * @param string $plainTextBody
     * @return self
     */
    public function setPlainTextBody($plainTextBody)
    {
        $this->plainTextBody = $plainTextBody;
        return $this;
    }

    /**
     * Gets as references
     *
     * @return string
     */
    public function getReferences()
    {
        return $this->references;
    }

    /**
     * Sets a new references
     *
     * @param string $references
     * @return self
     */
    public function setReferences($references)
    {
        $this->references = $references;
        return $this;
    }

    /**
     * Gets as targetObjectId
     *
     * @return string
     */
    public function getTargetObjectId()
    {
        return $this->targetObjectId;
    }

    /**
     * Sets a new targetObjectId
     *
     * @param string $targetObjectId
     * @return self
     */
    public function setTargetObjectId($targetObjectId)
    {
        $this->targetObjectId = $targetObjectId;
        return $this;
    }

    /**
     * Gets as templateId
     *
     * @return string
     */
    public function getTemplateId()
    {
        return $this->templateId;
    }

    /**
     * Sets a new templateId
     *
     * @param string $templateId
     * @return self
     */
    public function setTemplateId($templateId)
    {
        $this->templateId = $templateId;
        return $this;
    }

    /**
     * Gets as templateName
     *
     * @return string
     */
    public function getTemplateName()
    {
        return $this->templateName;
    }

    /**
     * Sets a new templateName
     *
     * @param string $templateName
     * @return self
     */
    public function setTemplateName($templateName)
    {
        $this->templateName = $templateName;
        return $this;
    }

    /**
     * Adds as toAddresses
     *
     * @return self
     * @param string $toAddresses
     */
    public function addToToAddresses($toAddresses)
    {
        $this->toAddresses[] = $toAddresses;
        return $this;
    }

    /**
     * isset toAddresses
     *
     * @param int|string $index
     * @return bool
     */
    public function issetToAddresses($index)
    {
        return isset($this->toAddresses[$index]);
    }

    /**
     * unset toAddresses
     *
     * @param int|string $index
     * @return void
     */
    public function unsetToAddresses($index)
    {
        unset($this->toAddresses[$index]);
    }

    /**
     * Gets as toAddresses
     *
     * @return string[]
     */
    public function getToAddresses()
    {
        return $this->toAddresses;
    }

    /**
     * Sets a new toAddresses
     *
     * @param string[] $toAddresses
     * @return self
     */
    public function setToAddresses(array $toAddresses)
    {
        $this->toAddresses = $toAddresses;
        return $this;
    }

    /**
     * Gets as treatBodiesAsTemplate
     *
     * @return bool
     */
    public function getTreatBodiesAsTemplate()
    {
        return $this->treatBodiesAsTemplate;
    }

    /**
     * Sets a new treatBodiesAsTemplate
     *
     * @param bool $treatBodiesAsTemplate
     * @return self
     */
    public function setTreatBodiesAsTemplate($treatBodiesAsTemplate)
    {
        $this->treatBodiesAsTemplate = $treatBodiesAsTemplate;
        return $this;
    }

    /**
     * Gets as treatTargetObjectAsRecipient
     *
     * @return bool
     */
    public function getTreatTargetObjectAsRecipient()
    {
        return $this->treatTargetObjectAsRecipient;
    }

    /**
     * Sets a new treatTargetObjectAsRecipient
     *
     * @param bool $treatTargetObjectAsRecipient
     * @return self
     */
    public function setTreatTargetObjectAsRecipient($treatTargetObjectAsRecipient)
    {
        $this->treatTargetObjectAsRecipient = $treatTargetObjectAsRecipient;
        return $this;
    }

    /**
     * Gets as whatId
     *
     * @return string
     */
    public function getWhatId()
    {
        return $this->whatId;
    }

    /**
     * Sets a new whatId
     *
     * @param string $whatId
     * @return self
     */
    public function setWhatId($whatId)
    {
        $this->whatId = $whatId;
        return $this;
    }


}

