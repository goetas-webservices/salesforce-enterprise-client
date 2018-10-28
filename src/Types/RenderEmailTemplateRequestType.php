<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing RenderEmailTemplateRequestType
 *
 *
 * XSD Type: RenderEmailTemplateRequest
 */
class RenderEmailTemplateRequestType
{

    /**
     * @property bool $escapeHtmlInMergeFields
     */
    private $escapeHtmlInMergeFields = null;

    /**
     * @property string[] $templateBodies
     */
    private $templateBodies = [
        
    ];

    /**
     * @property string $whatId
     */
    private $whatId = null;

    /**
     * @property string $whoId
     */
    private $whoId = null;

    /**
     * Gets as escapeHtmlInMergeFields
     *
     * @return bool
     */
    public function getEscapeHtmlInMergeFields()
    {
        return $this->escapeHtmlInMergeFields;
    }

    /**
     * Sets a new escapeHtmlInMergeFields
     *
     * @param bool $escapeHtmlInMergeFields
     * @return self
     */
    public function setEscapeHtmlInMergeFields($escapeHtmlInMergeFields)
    {
        $this->escapeHtmlInMergeFields = $escapeHtmlInMergeFields;
        return $this;
    }

    /**
     * Adds as templateBodies
     *
     * @return self
     * @param string $templateBodies
     */
    public function addToTemplateBodies($templateBodies)
    {
        $this->templateBodies[] = $templateBodies;
        return $this;
    }

    /**
     * isset templateBodies
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTemplateBodies($index)
    {
        return isset($this->templateBodies[$index]);
    }

    /**
     * unset templateBodies
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTemplateBodies($index)
    {
        unset($this->templateBodies[$index]);
    }

    /**
     * Gets as templateBodies
     *
     * @return string[]
     */
    public function getTemplateBodies()
    {
        return $this->templateBodies;
    }

    /**
     * Sets a new templateBodies
     *
     * @param string[] $templateBodies
     * @return self
     */
    public function setTemplateBodies(array $templateBodies)
    {
        $this->templateBodies = $templateBodies;
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

