<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing AuraDefinitionInfoType
 *
 *
 * XSD Type: AuraDefinitionInfo
 */
class AuraDefinitionInfoType extends SObjectType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AuraDefinitionBundleInfoType $auraDefinitionBundleInfo
     */
    private $auraDefinitionBundleInfo = null;

    /**
     * @property string $auraDefinitionBundleInfoId
     */
    private $auraDefinitionBundleInfoId = null;

    /**
     * @property string $auraDefinitionId
     */
    private $auraDefinitionId = null;

    /**
     * @property string $defType
     */
    private $defType = null;

    /**
     * @property string $developerName
     */
    private $developerName = null;

    /**
     * @property string $durableId
     */
    private $durableId = null;

    /**
     * @property string $format
     */
    private $format = null;

    /**
     * @property \DateTime $lastModifiedDate
     */
    private $lastModifiedDate = null;

    /**
     * @property string $namespacePrefix
     */
    private $namespacePrefix = null;

    /**
     * @property string $source
     */
    private $source = null;

    /**
     * Gets as auraDefinitionBundleInfo
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AuraDefinitionBundleInfoType
     */
    public function getAuraDefinitionBundleInfo()
    {
        return $this->auraDefinitionBundleInfo;
    }

    /**
     * Sets a new auraDefinitionBundleInfo
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AuraDefinitionBundleInfoType $auraDefinitionBundleInfo
     * @return self
     */
    public function setAuraDefinitionBundleInfo(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\AuraDefinitionBundleInfoType $auraDefinitionBundleInfo)
    {
        $this->auraDefinitionBundleInfo = $auraDefinitionBundleInfo;
        return $this;
    }

    /**
     * Gets as auraDefinitionBundleInfoId
     *
     * @return string
     */
    public function getAuraDefinitionBundleInfoId()
    {
        return $this->auraDefinitionBundleInfoId;
    }

    /**
     * Sets a new auraDefinitionBundleInfoId
     *
     * @param string $auraDefinitionBundleInfoId
     * @return self
     */
    public function setAuraDefinitionBundleInfoId($auraDefinitionBundleInfoId)
    {
        $this->auraDefinitionBundleInfoId = $auraDefinitionBundleInfoId;
        return $this;
    }

    /**
     * Gets as auraDefinitionId
     *
     * @return string
     */
    public function getAuraDefinitionId()
    {
        return $this->auraDefinitionId;
    }

    /**
     * Sets a new auraDefinitionId
     *
     * @param string $auraDefinitionId
     * @return self
     */
    public function setAuraDefinitionId($auraDefinitionId)
    {
        $this->auraDefinitionId = $auraDefinitionId;
        return $this;
    }

    /**
     * Gets as defType
     *
     * @return string
     */
    public function getDefType()
    {
        return $this->defType;
    }

    /**
     * Sets a new defType
     *
     * @param string $defType
     * @return self
     */
    public function setDefType($defType)
    {
        $this->defType = $defType;
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
     * Gets as format
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Sets a new format
     *
     * @param string $format
     * @return self
     */
    public function setFormat($format)
    {
        $this->format = $format;
        return $this;
    }

    /**
     * Gets as lastModifiedDate
     *
     * @return \DateTime
     */
    public function getLastModifiedDate()
    {
        return $this->lastModifiedDate;
    }

    /**
     * Sets a new lastModifiedDate
     *
     * @param \DateTime $lastModifiedDate
     * @return self
     */
    public function setLastModifiedDate(\DateTime $lastModifiedDate)
    {
        $this->lastModifiedDate = $lastModifiedDate;
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

    /**
     * Gets as source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Sets a new source
     *
     * @param string $source
     * @return self
     */
    public function setSource($source)
    {
        $this->source = $source;
        return $this;
    }


}

