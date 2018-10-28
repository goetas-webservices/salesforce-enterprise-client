<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing LoginResultType
 *
 *
 * XSD Type: LoginResult
 */
class LoginResultType
{

    /**
     * @property string $metadataServerUrl
     */
    private $metadataServerUrl = null;

    /**
     * @property bool $passwordExpired
     */
    private $passwordExpired = null;

    /**
     * @property bool $sandbox
     */
    private $sandbox = null;

    /**
     * @property string $serverUrl
     */
    private $serverUrl = null;

    /**
     * @property string $sessionId
     */
    private $sessionId = null;

    /**
     * @property string $userId
     */
    private $userId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\GetUserInfoResultType $userInfo
     */
    private $userInfo = null;

    /**
     * Gets as metadataServerUrl
     *
     * @return string
     */
    public function getMetadataServerUrl()
    {
        return $this->metadataServerUrl;
    }

    /**
     * Sets a new metadataServerUrl
     *
     * @param string $metadataServerUrl
     * @return self
     */
    public function setMetadataServerUrl($metadataServerUrl)
    {
        $this->metadataServerUrl = $metadataServerUrl;
        return $this;
    }

    /**
     * Gets as passwordExpired
     *
     * @return bool
     */
    public function getPasswordExpired()
    {
        return $this->passwordExpired;
    }

    /**
     * Sets a new passwordExpired
     *
     * @param bool $passwordExpired
     * @return self
     */
    public function setPasswordExpired($passwordExpired)
    {
        $this->passwordExpired = $passwordExpired;
        return $this;
    }

    /**
     * Gets as sandbox
     *
     * @return bool
     */
    public function getSandbox()
    {
        return $this->sandbox;
    }

    /**
     * Sets a new sandbox
     *
     * @param bool $sandbox
     * @return self
     */
    public function setSandbox($sandbox)
    {
        $this->sandbox = $sandbox;
        return $this;
    }

    /**
     * Gets as serverUrl
     *
     * @return string
     */
    public function getServerUrl()
    {
        return $this->serverUrl;
    }

    /**
     * Sets a new serverUrl
     *
     * @param string $serverUrl
     * @return self
     */
    public function setServerUrl($serverUrl)
    {
        $this->serverUrl = $serverUrl;
        return $this;
    }

    /**
     * Gets as sessionId
     *
     * @return string
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }

    /**
     * Sets a new sessionId
     *
     * @param string $sessionId
     * @return self
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;
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

    /**
     * Gets as userInfo
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\GetUserInfoResultType
     */
    public function getUserInfo()
    {
        return $this->userInfo;
    }

    /**
     * Sets a new userInfo
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\GetUserInfoResultType $userInfo
     * @return self
     */
    public function setUserInfo(\GoetasWebservices\Client\SalesforceEnterprise\Types\GetUserInfoResultType $userInfo)
    {
        $this->userInfo = $userInfo;
        return $this;
    }


}

