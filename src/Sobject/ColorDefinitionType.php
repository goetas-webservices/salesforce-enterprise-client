<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing ColorDefinitionType
 *
 *
 * XSD Type: ColorDefinition
 */
class ColorDefinitionType extends SObjectType
{

    /**
     * @property string $color
     */
    private $color = null;

    /**
     * @property string $context
     */
    private $context = null;

    /**
     * @property string $durableId
     */
    private $durableId = null;

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
     * Gets as color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Sets a new color
     *
     * @param string $color
     * @return self
     */
    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }

    /**
     * Gets as context
     *
     * @return string
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Sets a new context
     *
     * @param string $context
     * @return self
     */
    public function setContext($context)
    {
        $this->context = $context;
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


}

