<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing AuraDefinitionBundleInfoType
 *
 *
 * XSD Type: AuraDefinitionBundleInfo
 */
class AuraDefinitionBundleInfoType extends SObjectType
{

    /**
     * @property float $apiVersion
     */
    private $apiVersion = null;

    /**
     * @property string $auraDefinitionBundleId
     */
    private $auraDefinitionBundleId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $bundle
     */
    private $bundle = null;

    /**
     * @property string $developerName
     */
    private $developerName = null;

    /**
     * @property string $durableId
     */
    private $durableId = null;

    /**
     * @property string $namespacePrefix
     */
    private $namespacePrefix = null;

    /**
     * Gets as apiVersion
     *
     * @return float
     */
    public function getApiVersion()
    {
        return $this->apiVersion;
    }

    /**
     * Sets a new apiVersion
     *
     * @param float $apiVersion
     * @return self
     */
    public function setApiVersion($apiVersion)
    {
        $this->apiVersion = $apiVersion;
        return $this;
    }

    /**
     * Gets as auraDefinitionBundleId
     *
     * @return string
     */
    public function getAuraDefinitionBundleId()
    {
        return $this->auraDefinitionBundleId;
    }

    /**
     * Sets a new auraDefinitionBundleId
     *
     * @param string $auraDefinitionBundleId
     * @return self
     */
    public function setAuraDefinitionBundleId($auraDefinitionBundleId)
    {
        $this->auraDefinitionBundleId = $auraDefinitionBundleId;
        return $this;
    }

    /**
     * Gets as bundle
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getBundle()
    {
        return $this->bundle;
    }

    /**
     * Sets a new bundle
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $bundle
     * @return self
     */
    public function setBundle(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $bundle)
    {
        $this->bundle = $bundle;
        return $this;
    }

    /**
     * Gets as developerName
     *
     * @return string
     */
    public function getDeveloperName()
    {
        return $this->developerName;
    }

    /**
     * Sets a new developerName
     *
     * @param string $developerName
     * @return self
     */
    public function setDeveloperName($developerName)
    {
        $this->developerName = $developerName;
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
     * Gets as namespacePrefix
     *
     * @return string
     */
    public function getNamespacePrefix()
    {
        return $this->namespacePrefix;
    }

    /**
     * Sets a new namespacePrefix
     *
     * @param string $namespacePrefix
     * @return self
     */
    public function setNamespacePrefix($namespacePrefix)
    {
        $this->namespacePrefix = $namespacePrefix;
        return $this;
    }


}

