<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing PublisherType
 *
 *
 * XSD Type: Publisher
 */
class PublisherType extends SObjectType
{

    /**
     * @property string $durableId
     */
    private $durableId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $installedEntityDefinitions
     */
    private $installedEntityDefinitions = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $installedFieldDefinitions
     */
    private $installedFieldDefinitions = null;

    /**
     * @property bool $isSalesforce
     */
    private $isSalesforce = null;

    /**
     * @property int $majorVersion
     */
    private $majorVersion = null;

    /**
     * @property int $minorVersion
     */
    private $minorVersion = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $namespacePrefix
     */
    private $namespacePrefix = null;

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
     * Gets as installedEntityDefinitions
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getInstalledEntityDefinitions()
    {
        return $this->installedEntityDefinitions;
    }

    /**
     * Sets a new installedEntityDefinitions
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $installedEntityDefinitions
     * @return self
     */
    public function setInstalledEntityDefinitions(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $installedEntityDefinitions)
    {
        $this->installedEntityDefinitions = $installedEntityDefinitions;
        return $this;
    }

    /**
     * Gets as installedFieldDefinitions
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getInstalledFieldDefinitions()
    {
        return $this->installedFieldDefinitions;
    }

    /**
     * Sets a new installedFieldDefinitions
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $installedFieldDefinitions
     * @return self
     */
    public function setInstalledFieldDefinitions(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $installedFieldDefinitions)
    {
        $this->installedFieldDefinitions = $installedFieldDefinitions;
        return $this;
    }

    /**
     * Gets as isSalesforce
     *
     * @return bool
     */
    public function getIsSalesforce()
    {
        return $this->isSalesforce;
    }

    /**
     * Sets a new isSalesforce
     *
     * @param bool $isSalesforce
     * @return self
     */
    public function setIsSalesforce($isSalesforce)
    {
        $this->isSalesforce = $isSalesforce;
        return $this;
    }

    /**
     * Gets as majorVersion
     *
     * @return int
     */
    public function getMajorVersion()
    {
        return $this->majorVersion;
    }

    /**
     * Sets a new majorVersion
     *
     * @param int $majorVersion
     * @return self
     */
    public function setMajorVersion($majorVersion)
    {
        $this->majorVersion = $majorVersion;
        return $this;
    }

    /**
     * Gets as minorVersion
     *
     * @return int
     */
    public function getMinorVersion()
    {
        return $this->minorVersion;
    }

    /**
     * Sets a new minorVersion
     *
     * @param int $minorVersion
     * @return self
     */
    public function setMinorVersion($minorVersion)
    {
        $this->minorVersion = $minorVersion;
        return $this;
    }

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
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

