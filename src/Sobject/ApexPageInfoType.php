<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing ApexPageInfoType
 *
 *
 * XSD Type: ApexPageInfo
 */
class ApexPageInfoType extends SObjectType
{

    /**
     * @property string $apexPageId
     */
    private $apexPageId = null;

    /**
     * @property float $apiVersion
     */
    private $apiVersion = null;

    /**
     * @property string $description
     */
    private $description = null;

    /**
     * @property string $durableId
     */
    private $durableId = null;

    /**
     * @property bool $isAvailableInTouch
     */
    private $isAvailableInTouch = null;

    /**
     * @property string $isShowHeader
     */
    private $isShowHeader = null;

    /**
     * @property string $masterLabel
     */
    private $masterLabel = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $nameSpacePrefix
     */
    private $nameSpacePrefix = null;

    /**
     * Gets as apexPageId
     *
     * @return string
     */
    public function getApexPageId()
    {
        return $this->apexPageId;
    }

    /**
     * Sets a new apexPageId
     *
     * @param string $apexPageId
     * @return self
     */
    public function setApexPageId($apexPageId)
    {
        $this->apexPageId = $apexPageId;
        return $this;
    }

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
     * Gets as isAvailableInTouch
     *
     * @return bool
     */
    public function getIsAvailableInTouch()
    {
        return $this->isAvailableInTouch;
    }

    /**
     * Sets a new isAvailableInTouch
     *
     * @param bool $isAvailableInTouch
     * @return self
     */
    public function setIsAvailableInTouch($isAvailableInTouch)
    {
        $this->isAvailableInTouch = $isAvailableInTouch;
        return $this;
    }

    /**
     * Gets as isShowHeader
     *
     * @return string
     */
    public function getIsShowHeader()
    {
        return $this->isShowHeader;
    }

    /**
     * Sets a new isShowHeader
     *
     * @param string $isShowHeader
     * @return self
     */
    public function setIsShowHeader($isShowHeader)
    {
        $this->isShowHeader = $isShowHeader;
        return $this;
    }

    /**
     * Gets as masterLabel
     *
     * @return string
     */
    public function getMasterLabel()
    {
        return $this->masterLabel;
    }

    /**
     * Sets a new masterLabel
     *
     * @param string $masterLabel
     * @return self
     */
    public function setMasterLabel($masterLabel)
    {
        $this->masterLabel = $masterLabel;
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
     * Gets as nameSpacePrefix
     *
     * @return string
     */
    public function getNameSpacePrefix()
    {
        return $this->nameSpacePrefix;
    }

    /**
     * Sets a new nameSpacePrefix
     *
     * @param string $nameSpacePrefix
     * @return self
     */
    public function setNameSpacePrefix($nameSpacePrefix)
    {
        $this->nameSpacePrefix = $nameSpacePrefix;
        return $this;
    }


}

