<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing AppTabMemberType
 *
 *
 * XSD Type: AppTabMember
 */
class AppTabMemberType extends SObjectType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AppDefinitionType $appDefinition
     */
    private $appDefinition = null;

    /**
     * @property string $appDefinitionId
     */
    private $appDefinitionId = null;

    /**
     * @property string $durableId
     */
    private $durableId = null;

    /**
     * @property int $sortOrder
     */
    private $sortOrder = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\TabDefinitionType $tabDefinition
     */
    private $tabDefinition = null;

    /**
     * @property string $tabDefinitionId
     */
    private $tabDefinitionId = null;

    /**
     * @property string $workspaceDriverField
     */
    private $workspaceDriverField = null;

    /**
     * Gets as appDefinition
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AppDefinitionType
     */
    public function getAppDefinition()
    {
        return $this->appDefinition;
    }

    /**
     * Sets a new appDefinition
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AppDefinitionType $appDefinition
     * @return self
     */
    public function setAppDefinition(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\AppDefinitionType $appDefinition)
    {
        $this->appDefinition = $appDefinition;
        return $this;
    }

    /**
     * Gets as appDefinitionId
     *
     * @return string
     */
    public function getAppDefinitionId()
    {
        return $this->appDefinitionId;
    }

    /**
     * Sets a new appDefinitionId
     *
     * @param string $appDefinitionId
     * @return self
     */
    public function setAppDefinitionId($appDefinitionId)
    {
        $this->appDefinitionId = $appDefinitionId;
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
     * Gets as sortOrder
     *
     * @return int
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * Sets a new sortOrder
     *
     * @param int $sortOrder
     * @return self
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;
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
     * Gets as workspaceDriverField
     *
     * @return string
     */
    public function getWorkspaceDriverField()
    {
        return $this->workspaceDriverField;
    }

    /**
     * Sets a new workspaceDriverField
     *
     * @param string $workspaceDriverField
     * @return self
     */
    public function setWorkspaceDriverField($workspaceDriverField)
    {
        $this->workspaceDriverField = $workspaceDriverField;
        return $this;
    }


}

