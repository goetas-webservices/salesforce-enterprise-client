<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing AssetShareType
 *
 *
 * XSD Type: AssetShare
 */
class AssetShareType extends SObjectType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AssetType $asset
     */
    private $asset = null;

    /**
     * @property string $assetAccessLevel
     */
    private $assetAccessLevel = null;

    /**
     * @property string $assetId
     */
    private $assetId = null;

    /**
     * @property bool $isDeleted
     */
    private $isDeleted = null;

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
     * @property string $rowCause
     */
    private $rowCause = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $userOrGroup
     */
    private $userOrGroup = null;

    /**
     * @property string $userOrGroupId
     */
    private $userOrGroupId = null;

    /**
     * Gets as asset
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AssetType
     */
    public function getAsset()
    {
        return $this->asset;
    }

    /**
     * Sets a new asset
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AssetType $asset
     * @return self
     */
    public function setAsset(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\AssetType $asset)
    {
        $this->asset = $asset;
        return $this;
    }

    /**
     * Gets as assetAccessLevel
     *
     * @return string
     */
    public function getAssetAccessLevel()
    {
        return $this->assetAccessLevel;
    }

    /**
     * Sets a new assetAccessLevel
     *
     * @param string $assetAccessLevel
     * @return self
     */
    public function setAssetAccessLevel($assetAccessLevel)
    {
        $this->assetAccessLevel = $assetAccessLevel;
        return $this;
    }

    /**
     * Gets as assetId
     *
     * @return string
     */
    public function getAssetId()
    {
        return $this->assetId;
    }

    /**
     * Sets a new assetId
     *
     * @param string $assetId
     * @return self
     */
    public function setAssetId($assetId)
    {
        $this->assetId = $assetId;
        return $this;
    }

    /**
     * Gets as isDeleted
     *
     * @return bool
     */
    public function getIsDeleted()
    {
        return $this->isDeleted;
    }

    /**
     * Sets a new isDeleted
     *
     * @param bool $isDeleted
     * @return self
     */
    public function setIsDeleted($isDeleted)
    {
        $this->isDeleted = $isDeleted;
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
     * Gets as rowCause
     *
     * @return string
     */
    public function getRowCause()
    {
        return $this->rowCause;
    }

    /**
     * Sets a new rowCause
     *
     * @param string $rowCause
     * @return self
     */
    public function setRowCause($rowCause)
    {
        $this->rowCause = $rowCause;
        return $this;
    }

    /**
     * Gets as userOrGroup
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType
     */
    public function getUserOrGroup()
    {
        return $this->userOrGroup;
    }

    /**
     * Sets a new userOrGroup
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $userOrGroup
     * @return self
     */
    public function setUserOrGroup(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $userOrGroup)
    {
        $this->userOrGroup = $userOrGroup;
        return $this;
    }

    /**
     * Gets as userOrGroupId
     *
     * @return string
     */
    public function getUserOrGroupId()
    {
        return $this->userOrGroupId;
    }

    /**
     * Sets a new userOrGroupId
     *
     * @param string $userOrGroupId
     * @return self
     */
    public function setUserOrGroupId($userOrGroupId)
    {
        $this->userOrGroupId = $userOrGroupId;
        return $this;
    }


}

