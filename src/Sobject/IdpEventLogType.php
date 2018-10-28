<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing IdpEventLogType
 *
 *
 * XSD Type: IdpEventLog
 */
class IdpEventLogType extends SObjectType
{

    /**
     * @property string $appId
     */
    private $appId = null;

    /**
     * @property string $authSessionId
     */
    private $authSessionId = null;

    /**
     * @property string $errorCode
     */
    private $errorCode = null;

    /**
     * @property string $identityUsed
     */
    private $identityUsed = null;

    /**
     * @property string $initiatedBy
     */
    private $initiatedBy = null;

    /**
     * @property bool $optionsHasLogoutUrl
     */
    private $optionsHasLogoutUrl = null;

    /**
     * @property string $samlEntityUrl
     */
    private $samlEntityUrl = null;

    /**
     * @property string $ssoType
     */
    private $ssoType = null;

    /**
     * @property \DateTime $timestamp
     */
    private $timestamp = null;

    /**
     * @property string $userId
     */
    private $userId = null;

    /**
     * Gets as appId
     *
     * @return string
     */
    public function getAppId()
    {
        return $this->appId;
    }

    /**
     * Sets a new appId
     *
     * @param string $appId
     * @return self
     */
    public function setAppId($appId)
    {
        $this->appId = $appId;
        return $this;
    }

    /**
     * Gets as authSessionId
     *
     * @return string
     */
    public function getAuthSessionId()
    {
        return $this->authSessionId;
    }

    /**
     * Sets a new authSessionId
     *
     * @param string $authSessionId
     * @return self
     */
    public function setAuthSessionId($authSessionId)
    {
        $this->authSessionId = $authSessionId;
        return $this;
    }

    /**
     * Gets as errorCode
     *
     * @return string
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * Sets a new errorCode
     *
     * @param string $errorCode
     * @return self
     */
    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;
        return $this;
    }

    /**
     * Gets as identityUsed
     *
     * @return string
     */
    public function getIdentityUsed()
    {
        return $this->identityUsed;
    }

    /**
     * Sets a new identityUsed
     *
     * @param string $identityUsed
     * @return self
     */
    public function setIdentityUsed($identityUsed)
    {
        $this->identityUsed = $identityUsed;
        return $this;
    }

    /**
     * Gets as initiatedBy
     *
     * @return string
     */
    public function getInitiatedBy()
    {
        return $this->initiatedBy;
    }

    /**
     * Sets a new initiatedBy
     *
     * @param string $initiatedBy
     * @return self
     */
    public function setInitiatedBy($initiatedBy)
    {
        $this->initiatedBy = $initiatedBy;
        return $this;
    }

    /**
     * Gets as optionsHasLogoutUrl
     *
     * @return bool
     */
    public function getOptionsHasLogoutUrl()
    {
        return $this->optionsHasLogoutUrl;
    }

    /**
     * Sets a new optionsHasLogoutUrl
     *
     * @param bool $optionsHasLogoutUrl
     * @return self
     */
    public function setOptionsHasLogoutUrl($optionsHasLogoutUrl)
    {
        $this->optionsHasLogoutUrl = $optionsHasLogoutUrl;
        return $this;
    }

    /**
     * Gets as samlEntityUrl
     *
     * @return string
     */
    public function getSamlEntityUrl()
    {
        return $this->samlEntityUrl;
    }

    /**
     * Sets a new samlEntityUrl
     *
     * @param string $samlEntityUrl
     * @return self
     */
    public function setSamlEntityUrl($samlEntityUrl)
    {
        $this->samlEntityUrl = $samlEntityUrl;
        return $this;
    }

    /**
     * Gets as ssoType
     *
     * @return string
     */
    public function getSsoType()
    {
        return $this->ssoType;
    }

    /**
     * Sets a new ssoType
     *
     * @param string $ssoType
     * @return self
     */
    public function setSsoType($ssoType)
    {
        $this->ssoType = $ssoType;
        return $this;
    }

    /**
     * Gets as timestamp
     *
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Sets a new timestamp
     *
     * @param \DateTime $timestamp
     * @return self
     */
    public function setTimestamp(\DateTime $timestamp)
    {
        $this->timestamp = $timestamp;
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

