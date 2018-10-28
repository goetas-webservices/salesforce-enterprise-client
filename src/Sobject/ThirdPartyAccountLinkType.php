<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing ThirdPartyAccountLinkType
 *
 *
 * XSD Type: ThirdPartyAccountLink
 */
class ThirdPartyAccountLinkType extends SObjectType
{

    /**
     * @property string $handle
     */
    private $handle = null;

    /**
     * @property bool $isNotSsoUsable
     */
    private $isNotSsoUsable = null;

    /**
     * @property string $provider
     */
    private $provider = null;

    /**
     * @property string $remoteIdentifier
     */
    private $remoteIdentifier = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AuthProviderType $ssoProvider
     */
    private $ssoProvider = null;

    /**
     * @property string $ssoProviderId
     */
    private $ssoProviderId = null;

    /**
     * @property string $ssoProviderName
     */
    private $ssoProviderName = null;

    /**
     * @property string $thirdPartyAccountLinkKey
     */
    private $thirdPartyAccountLinkKey = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $user
     */
    private $user = null;

    /**
     * @property string $userId
     */
    private $userId = null;

    /**
     * Gets as handle
     *
     * @return string
     */
    public function getHandle()
    {
        return $this->handle;
    }

    /**
     * Sets a new handle
     *
     * @param string $handle
     * @return self
     */
    public function setHandle($handle)
    {
        $this->handle = $handle;
        return $this;
    }

    /**
     * Gets as isNotSsoUsable
     *
     * @return bool
     */
    public function getIsNotSsoUsable()
    {
        return $this->isNotSsoUsable;
    }

    /**
     * Sets a new isNotSsoUsable
     *
     * @param bool $isNotSsoUsable
     * @return self
     */
    public function setIsNotSsoUsable($isNotSsoUsable)
    {
        $this->isNotSsoUsable = $isNotSsoUsable;
        return $this;
    }

    /**
     * Gets as provider
     *
     * @return string
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * Sets a new provider
     *
     * @param string $provider
     * @return self
     */
    public function setProvider($provider)
    {
        $this->provider = $provider;
        return $this;
    }

    /**
     * Gets as remoteIdentifier
     *
     * @return string
     */
    public function getRemoteIdentifier()
    {
        return $this->remoteIdentifier;
    }

    /**
     * Sets a new remoteIdentifier
     *
     * @param string $remoteIdentifier
     * @return self
     */
    public function setRemoteIdentifier($remoteIdentifier)
    {
        $this->remoteIdentifier = $remoteIdentifier;
        return $this;
    }

    /**
     * Gets as ssoProvider
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AuthProviderType
     */
    public function getSsoProvider()
    {
        return $this->ssoProvider;
    }

    /**
     * Sets a new ssoProvider
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AuthProviderType $ssoProvider
     * @return self
     */
    public function setSsoProvider(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\AuthProviderType $ssoProvider)
    {
        $this->ssoProvider = $ssoProvider;
        return $this;
    }

    /**
     * Gets as ssoProviderId
     *
     * @return string
     */
    public function getSsoProviderId()
    {
        return $this->ssoProviderId;
    }

    /**
     * Sets a new ssoProviderId
     *
     * @param string $ssoProviderId
     * @return self
     */
    public function setSsoProviderId($ssoProviderId)
    {
        $this->ssoProviderId = $ssoProviderId;
        return $this;
    }

    /**
     * Gets as ssoProviderName
     *
     * @return string
     */
    public function getSsoProviderName()
    {
        return $this->ssoProviderName;
    }

    /**
     * Sets a new ssoProviderName
     *
     * @param string $ssoProviderName
     * @return self
     */
    public function setSsoProviderName($ssoProviderName)
    {
        $this->ssoProviderName = $ssoProviderName;
        return $this;
    }

    /**
     * Gets as thirdPartyAccountLinkKey
     *
     * @return string
     */
    public function getThirdPartyAccountLinkKey()
    {
        return $this->thirdPartyAccountLinkKey;
    }

    /**
     * Sets a new thirdPartyAccountLinkKey
     *
     * @param string $thirdPartyAccountLinkKey
     * @return self
     */
    public function setThirdPartyAccountLinkKey($thirdPartyAccountLinkKey)
    {
        $this->thirdPartyAccountLinkKey = $thirdPartyAccountLinkKey;
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

