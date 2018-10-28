<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing CustomBrandAssetType
 *
 *
 * XSD Type: CustomBrandAsset
 */
class CustomBrandAssetType extends SObjectType
{

    /**
     * @property string $assetCategory
     */
    private $assetCategory = null;

    /**
     * @property string $assetSourceId
     */
    private $assetSourceId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $createdBy
     */
    private $createdBy = null;

    /**
     * @property string $createdById
     */
    private $createdById = null;

    /**
     * @property \DateTime $createdDate
     */
    private $createdDate = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\CustomBrandType $customBrand
     */
    private $customBrand = null;

    /**
     * @property string $customBrandId
     */
    private $customBrandId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $lastModifiedBy
     */
    private $lastModifiedBy = null;

    /**
     * @property string $lastModifiedById
     */
    private $lastModifiedById = null;

    /**
     * @property \DateTime $lastModifiedDate
     */
    private $lastModifiedDate = null;

    /**
     * @property string $textAsset
     */
    private $textAsset = null;

    /**
     * Gets as assetCategory
     *
     * @return string
     */
    public function getAssetCategory()
    {
        return $this->assetCategory;
    }

    /**
     * Sets a new assetCategory
     *
     * @param string $assetCategory
     * @return self
     */
    public function setAssetCategory($assetCategory)
    {
        $this->assetCategory = $assetCategory;
        return $this;
    }

    /**
     * Gets as assetSourceId
     *
     * @return string
     */
    public function getAssetSourceId()
    {
        return $this->assetSourceId;
    }

    /**
     * Sets a new assetSourceId
     *
     * @param string $assetSourceId
     * @return self
     */
    public function setAssetSourceId($assetSourceId)
    {
        $this->assetSourceId = $assetSourceId;
        return $this;
    }

    /**
     * Gets as createdBy
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Sets a new createdBy
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $createdBy
     * @return self
     */
    public function setCreatedBy(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $createdBy)
    {
        $this->createdBy = $createdBy;
        return $this;
    }

    /**
     * Gets as createdById
     *
     * @return string
     */
    public function getCreatedById()
    {
        return $this->createdById;
    }

    /**
     * Sets a new createdById
     *
     * @param string $createdById
     * @return self
     */
    public function setCreatedById($createdById)
    {
        $this->createdById = $createdById;
        return $this;
    }

    /**
     * Gets as createdDate
     *
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * Sets a new createdDate
     *
     * @param \DateTime $createdDate
     * @return self
     */
    public function setCreatedDate(\DateTime $createdDate)
    {
        $this->createdDate = $createdDate;
        return $this;
    }

    /**
     * Gets as customBrand
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\CustomBrandType
     */
    public function getCustomBrand()
    {
        return $this->customBrand;
    }

    /**
     * Sets a new customBrand
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\CustomBrandType $customBrand
     * @return self
     */
    public function setCustomBrand(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\CustomBrandType $customBrand)
    {
        $this->customBrand = $customBrand;
        return $this;
    }

    /**
     * Gets as customBrandId
     *
     * @return string
     */
    public function getCustomBrandId()
    {
        return $this->customBrandId;
    }

    /**
     * Sets a new customBrandId
     *
     * @param string $customBrandId
     * @return self
     */
    public function setCustomBrandId($customBrandId)
    {
        $this->customBrandId = $customBrandId;
        return $this;
    }

    /**
     * Gets as lastModifiedBy
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType
     */
    public function getLastModifiedBy()
    {
        return $this->lastModifiedBy;
    }

    /**
     * Sets a new lastModifiedBy
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $lastModifiedBy
     * @return self
     */
    public function setLastModifiedBy(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $lastModifiedBy)
    {
        $this->lastModifiedBy = $lastModifiedBy;
        return $this;
    }

    /**
     * Gets as lastModifiedById
     *
     * @return string
     */
    public function getLastModifiedById()
    {
        return $this->lastModifiedById;
    }

    /**
     * Sets a new lastModifiedById
     *
     * @param string $lastModifiedById
     * @return self
     */
    public function setLastModifiedById($lastModifiedById)
    {
        $this->lastModifiedById = $lastModifiedById;
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
     * Gets as textAsset
     *
     * @return string
     */
    public function getTextAsset()
    {
        return $this->textAsset;
    }

    /**
     * Sets a new textAsset
     *
     * @param string $textAsset
     * @return self
     */
    public function setTextAsset($textAsset)
    {
        $this->textAsset = $textAsset;
        return $this;
    }


}

