<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing EmbeddedServiceLabelType
 *
 *
 * XSD Type: EmbeddedServiceLabel
 */
class EmbeddedServiceLabelType extends SObjectType
{

    /**
     * @property string $customLabelName
     */
    private $customLabelName = null;

    /**
     * @property string $durableId
     */
    private $durableId = null;

    /**
     * @property string $embeddedServiceConfigDeveloperName
     */
    private $embeddedServiceConfigDeveloperName = null;

    /**
     * @property string $labelKey
     */
    private $labelKey = null;

    /**
     * Gets as customLabelName
     *
     * @return string
     */
    public function getCustomLabelName()
    {
        return $this->customLabelName;
    }

    /**
     * Sets a new customLabelName
     *
     * @param string $customLabelName
     * @return self
     */
    public function setCustomLabelName($customLabelName)
    {
        $this->customLabelName = $customLabelName;
        return $this;
    }

    /**
     * Gets as durableId
     *
     * @return string
     */
    public function getDurableId()
    {
        return $this->durableId;
    }

    /**
     * Sets a new durableId
     *
     * @param string $durableId
     * @return self
     */
    public function setDurableId($durableId)
    {
        $this->durableId = $durableId;
        return $this;
    }

    /**
     * Gets as embeddedServiceConfigDeveloperName
     *
     * @return string
     */
    public function getEmbeddedServiceConfigDeveloperName()
    {
        return $this->embeddedServiceConfigDeveloperName;
    }

    /**
     * Sets a new embeddedServiceConfigDeveloperName
     *
     * @param string $embeddedServiceConfigDeveloperName
     * @return self
     */
    public function setEmbeddedServiceConfigDeveloperName($embeddedServiceConfigDeveloperName)
    {
        $this->embeddedServiceConfigDeveloperName = $embeddedServiceConfigDeveloperName;
        return $this;
    }

    /**
     * Gets as labelKey
     *
     * @return string
     */
    public function getLabelKey()
    {
        return $this->labelKey;
    }

    /**
     * Sets a new labelKey
     *
     * @param string $labelKey
     * @return self
     */
    public function setLabelKey($labelKey)
    {
        $this->labelKey = $labelKey;
        return $this;
    }


}

