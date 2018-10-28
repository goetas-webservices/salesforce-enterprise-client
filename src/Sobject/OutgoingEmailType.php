<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing OutgoingEmailType
 *
 *
 * XSD Type: OutgoingEmail
 */
class OutgoingEmailType extends SObjectType
{

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
     * @property string[] $contentDocumentIds
     */
    private $contentDocumentIds = [
        
    ];

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $contentDocumentLinks
     */
    private $contentDocumentLinks = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $emailTemplate
     */
    private $emailTemplate = null;

    /**
     * @property string $emailTemplateId
     */
    private $emailTemplateId = null;

    /**
     * @property string $externalId
     */
    private $externalId = null;

    /**
     * @property string $htmlBody
     */
    private $htmlBody = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $outgoingEmailRelations
     */
    private $outgoingEmailRelations = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $relatedTo
     */
    private $relatedTo = null;

    /**
     * @property string $relatedToId
     */
    private $relatedToId = null;

    /**
     * @property string $subject
     */
    private $subject = null;

    /**
     * @property string $textBody
     */
    private $textBody = null;

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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $who
     */
    private $who = null;

    /**
     * @property string $whoId
     */
    private $whoId = null;

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
     * Gets as emailTemplate
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType
     */
    public function getEmailTemplate()
    {
        return $this->emailTemplate;
    }

    /**
     * Sets a new emailTemplate
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $emailTemplate
     * @return self
     */
    public function setEmailTemplate(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $emailTemplate)
    {
        $this->emailTemplate = $emailTemplate;
        return $this;
    }

    /**
     * Gets as emailTemplateId
     *
     * @return string
     */
    public function getEmailTemplateId()
    {
        return $this->emailTemplateId;
    }

    /**
     * Sets a new emailTemplateId
     *
     * @param string $emailTemplateId
     * @return self
     */
    public function setEmailTemplateId($emailTemplateId)
    {
        $this->emailTemplateId = $emailTemplateId;
        return $this;
    }

    /**
     * Gets as externalId
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * Sets a new externalId
     *
     * @param string $externalId
     * @return self
     */
    public function setExternalId($externalId)
    {
        $this->externalId = $externalId;
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
     * Gets as outgoingEmailRelations
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getOutgoingEmailRelations()
    {
        return $this->outgoingEmailRelations;
    }

    /**
     * Sets a new outgoingEmailRelations
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $outgoingEmailRelations
     * @return self
     */
    public function setOutgoingEmailRelations(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $outgoingEmailRelations)
    {
        $this->outgoingEmailRelations = $outgoingEmailRelations;
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

    /**
     * Gets as who
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType
     */
    public function getWho()
    {
        return $this->who;
    }

    /**
     * Sets a new who
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $who
     * @return self
     */
    public function setWho(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $who)
    {
        $this->who = $who;
        return $this;
    }

    /**
     * Gets as whoId
     *
     * @return string
     */
    public function getWhoId()
    {
        return $this->whoId;
    }

    /**
     * Sets a new whoId
     *
     * @param string $whoId
     * @return self
     */
    public function setWhoId($whoId)
    {
        $this->whoId = $whoId;
        return $this;
    }


}

