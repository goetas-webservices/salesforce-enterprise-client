<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing IconDefinitionType
 *
 *
 * XSD Type: IconDefinition
 */
class IconDefinitionType extends SObjectType
{

    /**
     * @property string $contentType
     */
    private $contentType = null;

    /**
     * @property string $durableId
     */
    private $durableId = null;

    /**
     * @property int $height
     */
    private $height = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\TabDefinitionType $tabDefinition
     */
    private $tabDefinition = null;

    /**
     * @property string $tabDefinitionId
     */
    private $tabDefinitionId = null;

    /**
     * @property string $theme
     */
    private $theme = null;

    /**
     * @property string $url
     */
    private $url = null;

    /**
     * @property int $width
     */
    private $width = null;

    /**
     * Gets as contentType
     *
     * @return string
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * Sets a new contentType
     *
     * @param string $contentType
     * @return self
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
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
     * Gets as height
     *
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Sets a new height
     *
     * @param int $height
     * @return self
     */
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    /**
     * Gets as tabDefinition
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\TabDefinitionType
     */
    public function getTabDefinition()
    {
        return $this->tabDefinition;
    }

    /**
     * Sets a new tabDefinition
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\TabDefinitionType $tabDefinition
     * @return self
     */
    public function setTabDefinition(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\TabDefinitionType $tabDefinition)
    {
        $this->tabDefinition = $tabDefinition;
        return $this;
    }

    /**
     * Gets as tabDefinitionId
     *
     * @return string
     */
    public function getTabDefinitionId()
    {
        return $this->tabDefinitionId;
    }

    /**
     * Sets a new tabDefinitionId
     *
     * @param string $tabDefinitionId
     * @return self
     */
    public function setTabDefinitionId($tabDefinitionId)
    {
        $this->tabDefinitionId = $tabDefinitionId;
        return $this;
    }

    /**
     * Gets as theme
     *
     * @return string
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * Sets a new theme
     *
     * @param string $theme
     * @return self
     */
    public function setTheme($theme)
    {
        $this->theme = $theme;
        return $this;
    }

    /**
     * Gets as url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Sets a new url
     *
     * @param string $url
     * @return self
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * Gets as width
     *
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Sets a new width
     *
     * @param int $width
     * @return self
     */
    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }


}

