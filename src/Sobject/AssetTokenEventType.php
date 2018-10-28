<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing AssetTokenEventType
 *
 *
 * XSD Type: AssetTokenEvent
 */
class AssetTokenEventType extends SObjectType
{

    /**
     * @property string $actorTokenPayload
     */
    private $actorTokenPayload = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AssetType $asset
     */
    private $asset = null;

    /**
     * @property string $assetId
     */
    private $assetId = null;

    /**
     * @property string $assetName
     */
    private $assetName = null;

    /**
     * @property string $assetSerialNumber
     */
    private $assetSerialNumber = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ConnectedApplicationType $connectedApp
     */
    private $connectedApp = null;

    /**
     * @property string $connectedAppId
     */
    private $connectedAppId = null;

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
     * @property string $deviceId
     */
    private $deviceId = null;

    /**
     * @property string $deviceKey
     */
    private $deviceKey = null;

    /**
     * @property \DateTime $expiration
     */
    private $expiration = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $replayId
     */
    private $replayId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $user
     */
    private $user = null;

    /**
     * @property string $userId
     */
    private $userId = null;

    /**
     * Gets as actorTokenPayload
     *
     * @return string
     */
    public function getActorTokenPayload()
    {
        return $this->actorTokenPayload;
    }

    /**
     * Sets a new actorTokenPayload
     *
     * @param string $actorTokenPayload
     * @return self
     */
    public function setActorTokenPayload($actorTokenPayload)
    {
        $this->actorTokenPayload = $actorTokenPayload;
        return $this;
    }

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
     * Gets as assetName
     *
     * @return string
     */
    public function getAssetName()
    {
        return $this->assetName;
    }

    /**
     * Sets a new assetName
     *
     * @param string $assetName
     * @return self
     */
    public function setAssetName($assetName)
    {
        $this->assetName = $assetName;
        return $this;
    }

    /**
     * Gets as assetSerialNumber
     *
     * @return string
     */
    public function getAssetSerialNumber()
    {
        return $this->assetSerialNumber;
    }

    /**
     * Sets a new assetSerialNumber
     *
     * @param string $assetSerialNumber
     * @return self
     */
    public function setAssetSerialNumber($assetSerialNumber)
    {
        $this->assetSerialNumber = $assetSerialNumber;
        return $this;
    }

    /**
     * Gets as connectedApp
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ConnectedApplicationType
     */
    public function getConnectedApp()
    {
        return $this->connectedApp;
    }

    /**
     * Sets a new connectedApp
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ConnectedApplicationType $connectedApp
     * @return self
     */
    public function setConnectedApp(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\ConnectedApplicationType $connectedApp)
    {
        $this->connectedApp = $connectedApp;
        return $this;
    }

    /**
     * Gets as connectedAppId
     *
     * @return string
     */
    public function getConnectedAppId()
    {
        return $this->connectedAppId;
    }

    /**
     * Sets a new connectedAppId
     *
     * @param string $connectedAppId
     * @return self
     */
    public function setConnectedAppId($connectedAppId)
    {
        $this->connectedAppId = $connectedAppId;
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
     * Gets as deviceId
     *
     * @return string
     */
    public function getDeviceId()
    {
        return $this->deviceId;
    }

    /**
     * Sets a new deviceId
     *
     * @param string $deviceId
     * @return self
     */
    public function setDeviceId($deviceId)
    {
        $this->deviceId = $deviceId;
        return $this;
    }

    /**
     * Gets as deviceKey
     *
     * @return string
     */
    public function getDeviceKey()
    {
        return $this->deviceKey;
    }

    /**
     * Sets a new deviceKey
     *
     * @param string $deviceKey
     * @return self
     */
    public function setDeviceKey($deviceKey)
    {
        $this->deviceKey = $deviceKey;
        return $this;
    }

    /**
     * Gets as expiration
     *
     * @return \DateTime
     */
    public function getExpiration()
    {
        return $this->expiration;
    }

    /**
     * Sets a new expiration
     *
     * @param \DateTime $expiration
     * @return self
     */
    public function setExpiration(\DateTime $expiration)
    {
        $this->expiration = $expiration;
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
     * Gets as replayId
     *
     * @return string
     */
    public function getReplayId()
    {
        return $this->replayId;
    }

    /**
     * Sets a new replayId
     *
     * @param string $replayId
     * @return self
     */
    public function setReplayId($replayId)
    {
        $this->replayId = $replayId;
        return $this;
    }

    /**
     * Gets as user
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Sets a new user
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $user
     * @return self
     */
    public function setUser(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * Gets as userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Sets a new userId
     *
     * @param string $userId
     * @return self
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }


}

