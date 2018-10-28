<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing MassEmailMessageType
 *
 *
 * XSD Type: MassEmailMessage
 */
class MassEmailMessageType extends EmailType
{

    /**
     * @property string $description
     */
    private $description = null;

    /**
     * @property string[] $targetObjectIds
     */
    private $targetObjectIds = [
        
    ];

    /**
     * @property string $templateId
     */
    private $templateId = null;

    /**
     * @property string[] $whatIds
     */
    private $whatIds = [
        
    ];

    /**
     * Gets as description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Adds as targetObjectIds
     *
     * @return self
     * @param string $targetObjectIds
     */
    public function addToTargetObjectIds($targetObjectIds)
    {
        $this->targetObjectIds[] = $targetObjectIds;
        return $this;
    }

    /**
     * isset targetObjectIds
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTargetObjectIds($index)
    {
        return isset($this->targetObjectIds[$index]);
    }

    /**
     * unset targetObjectIds
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTargetObjectIds($index)
    {
        unset($this->targetObjectIds[$index]);
    }

    /**
     * Gets as targetObjectIds
     *
     * @return string[]
     */
    public function getTargetObjectIds()
    {
        return $this->targetObjectIds;
    }

    /**
     * Sets a new targetObjectIds
     *
     * @param string $targetObjectIds
     * @return self
     */
    public function setTargetObjectIds(array $targetObjectIds)
    {
        $this->targetObjectIds = $targetObjectIds;
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
     * Adds as whatIds
     *
     * @return self
     * @param string $whatIds
     */
    public function addToWhatIds($whatIds)
    {
        $this->whatIds[] = $whatIds;
        return $this;
    }

    /**
     * isset whatIds
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWhatIds($index)
    {
        return isset($this->whatIds[$index]);
    }

    /**
     * unset whatIds
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWhatIds($index)
    {
        unset($this->whatIds[$index]);
    }

    /**
     * Gets as whatIds
     *
     * @return string[]
     */
    public function getWhatIds()
    {
        return $this->whatIds;
    }

    /**
     * Sets a new whatIds
     *
     * @param string $whatIds
     * @return self
     */
    public function setWhatIds(array $whatIds)
    {
        $this->whatIds = $whatIds;
        return $this;
    }


}

