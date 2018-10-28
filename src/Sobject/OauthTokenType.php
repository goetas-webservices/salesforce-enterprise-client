<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing OauthTokenType
 *
 *
 * XSD Type: OauthToken
 */
class OauthTokenType extends SObjectType
{

    /**
     * @property string $accessToken
     */
    private $accessToken = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AppMenuItemType $appMenuItem
     */
    private $appMenuItem = null;

    /**
     * @property string $appMenuItemId
     */
    private $appMenuItemId = null;

    /**
     * @property string $appName
     */
    private $appName = null;

    /**
     * @property \DateTime $createdDate
     */
    private $createdDate = null;

    /**
     * @property string $deleteToken
     */
    private $deleteToken = null;

    /**
     * @property \DateTime $lastUsedDate
     */
    private $lastUsedDate = null;

    /**
     * @property string $requestToken
     */
    private $requestToken = null;

    /**
     * @property int $useCount
     */
    private $useCount = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $user
     */
    private $user = null;

    /**
     * @property string $userId
     */
    private $userId = null;

    /**
     * Gets as accessToken
     *
     * @return string
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * Sets a new accessToken
     *
     * @param string $accessToken
     * @return self
     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;
        return $this;
    }

    /**
     * Gets as appMenuItem
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AppMenuItemType
     */
    public function getAppMenuItem()
    {
        return $this->appMenuItem;
    }

    /**
     * Sets a new appMenuItem
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AppMenuItemType $appMenuItem
     * @return self
     */
    public function setAppMenuItem(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\AppMenuItemType $appMenuItem)
    {
        $this->appMenuItem = $appMenuItem;
        return $this;
    }

    /**
     * Gets as appMenuItemId
     *
     * @return string
     */
    public function getAppMenuItemId()
    {
        return $this->appMenuItemId;
    }

    /**
     * Sets a new appMenuItemId
     *
     * @param string $appMenuItemId
     * @return self
     */
    public function setAppMenuItemId($appMenuItemId)
    {
        $this->appMenuItemId = $appMenuItemId;
        return $this;
    }

    /**
     * Gets as appName
     *
     * @return string
     */
    public function getAppName()
    {
        return $this->appName;
    }

    /**
     * Sets a new appName
     *
     * @param string $appName
     * @return self
     */
    public function setAppName($appName)
    {
        $this->appName = $appName;
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
     * Gets as deleteToken
     *
     * @return string
     */
    public function getDeleteToken()
    {
        return $this->deleteToken;
    }

    /**
     * Sets a new deleteToken
     *
     * @param string $deleteToken
     * @return self
     */
    public function setDeleteToken($deleteToken)
    {
        $this->deleteToken = $deleteToken;
        return $this;
    }

    /**
     * Gets as lastUsedDate
     *
     * @return \DateTime
     */
    public function getLastUsedDate()
    {
        return $this->lastUsedDate;
    }

    /**
     * Sets a new lastUsedDate
     *
     * @param \DateTime $lastUsedDate
     * @return self
     */
    public function setLastUsedDate(\DateTime $lastUsedDate)
    {
        $this->lastUsedDate = $lastUsedDate;
        return $this;
    }

    /**
     * Gets as requestToken
     *
     * @return string
     */
    public function getRequestToken()
    {
        return $this->requestToken;
    }

    /**
     * Sets a new requestToken
     *
     * @param string $requestToken
     * @return self
     */
    public function setRequestToken($requestToken)
    {
        $this->requestToken = $requestToken;
        return $this;
    }

    /**
     * Gets as useCount
     *
     * @return int
     */
    public function getUseCount()
    {
        return $this->useCount;
    }

    /**
     * Sets a new useCount
     *
     * @param int $useCount
     * @return self
     */
    public function setUseCount($useCount)
    {
        $this->useCount = $useCount;
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

