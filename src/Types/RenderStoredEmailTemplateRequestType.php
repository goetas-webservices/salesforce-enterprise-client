<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing RenderStoredEmailTemplateRequestType
 *
 *
 * XSD Type: RenderStoredEmailTemplateRequest
 */
class RenderStoredEmailTemplateRequestType
{

    /**
     * @property string $attachmentRetrievalOption
     */
    private $attachmentRetrievalOption = null;

    /**
     * @property string $templateId
     */
    private $templateId = null;

    /**
     * @property bool $updateTemplateUsage
     */
    private $updateTemplateUsage = null;

    /**
     * @property string $whatId
     */
    private $whatId = null;

    /**
     * @property string $whoId
     */
    private $whoId = null;

    /**
     * Gets as attachmentRetrievalOption
     *
     * @return string
     */
    public function getAttachmentRetrievalOption()
    {
        return $this->attachmentRetrievalOption;
    }

    /**
     * Sets a new attachmentRetrievalOption
     *
     * @param string $attachmentRetrievalOption
     * @return self
     */
    public function setAttachmentRetrievalOption($attachmentRetrievalOption)
    {
        $this->attachmentRetrievalOption = $attachmentRetrievalOption;
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
     * Gets as updateTemplateUsage
     *
     * @return bool
     */
    public function getUpdateTemplateUsage()
    {
        return $this->updateTemplateUsage;
    }

    /**
     * Sets a new updateTemplateUsage
     *
     * @param bool $updateTemplateUsage
     * @return self
     */
    public function setUpdateTemplateUsage($updateTemplateUsage)
    {
        $this->updateTemplateUsage = $updateTemplateUsage;
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

