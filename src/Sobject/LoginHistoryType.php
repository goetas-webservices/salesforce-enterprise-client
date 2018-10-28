<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing LoginHistoryType
 *
 *
 * XSD Type: LoginHistory
 */
class LoginHistoryType extends SObjectType
{

    /**
     * @property string $apiType
     */
    private $apiType = null;

    /**
     * @property string $apiVersion
     */
    private $apiVersion = null;

    /**
     * @property string $application
     */
    private $application = null;

    /**
     * @property string $authenticationServiceId
     */
    private $authenticationServiceId = null;

    /**
     * @property string $browser
     */
    private $browser = null;

    /**
     * @property string $cipherSuite
     */
    private $cipherSuite = null;

    /**
     * @property string $clientVersion
     */
    private $clientVersion = null;

    /**
     * @property string $countryIso
     */
    private $countryIso = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\LoginGeoType $loginGeo
     */
    private $loginGeo = null;

    /**
     * @property string $loginGeoId
     */
    private $loginGeoId = null;

    /**
     * @property \DateTime $loginTime
     */
    private $loginTime = null;

    /**
     * @property string $loginType
     */
    private $loginType = null;

    /**
     * @property string $loginUrl
     */
    private $loginUrl = null;

    /**
     * @property string $platform
     */
    private $platform = null;

    /**
     * @property string $sourceIp
     */
    private $sourceIp = null;

    /**
     * @property string $status
     */
    private $status = null;

    /**
     * @property string $tlsProtocol
     */
    private $tlsProtocol = null;

    /**
     * @property string $userId
     */
    private $userId = null;

    /**
     * Gets as apiType
     *
     * @return string
     */
    public function getApiType()
    {
        return $this->apiType;
    }

    /**
     * Sets a new apiType
     *
     * @param string $apiType
     * @return self
     */
    public function setApiType($apiType)
    {
        $this->apiType = $apiType;
        return $this;
    }

    /**
     * Gets as apiVersion
     *
     * @return string
     */
    public function getApiVersion()
    {
        return $this->apiVersion;
    }

    /**
     * Sets a new apiVersion
     *
     * @param string $apiVersion
     * @return self
     */
    public function setApiVersion($apiVersion)
    {
        $this->apiVersion = $apiVersion;
        return $this;
    }

    /**
     * Gets as application
     *
     * @return string
     */
    public function getApplication()
    {
        return $this->application;
    }

    /**
     * Sets a new application
     *
     * @param string $application
     * @return self
     */
    public function setApplication($application)
    {
        $this->application = $application;
        return $this;
    }

    /**
     * Gets as authenticationServiceId
     *
     * @return string
     */
    public function getAuthenticationServiceId()
    {
        return $this->authenticationServiceId;
    }

    /**
     * Sets a new authenticationServiceId
     *
     * @param string $authenticationServiceId
     * @return self
     */
    public function setAuthenticationServiceId($authenticationServiceId)
    {
        $this->authenticationServiceId = $authenticationServiceId;
        return $this;
    }

    /**
     * Gets as browser
     *
     * @return string
     */
    public function getBrowser()
    {
        return $this->browser;
    }

    /**
     * Sets a new browser
     *
     * @param string $browser
     * @return self
     */
    public function setBrowser($browser)
    {
        $this->browser = $browser;
        return $this;
    }

    /**
     * Gets as cipherSuite
     *
     * @return string
     */
    public function getCipherSuite()
    {
        return $this->cipherSuite;
    }

    /**
     * Sets a new cipherSuite
     *
     * @param string $cipherSuite
     * @return self
     */
    public function setCipherSuite($cipherSuite)
    {
        $this->cipherSuite = $cipherSuite;
        return $this;
    }

    /**
     * Gets as clientVersion
     *
     * @return string
     */
    public function getClientVersion()
    {
        return $this->clientVersion;
    }

    /**
     * Sets a new clientVersion
     *
     * @param string $clientVersion
     * @return self
     */
    public function setClientVersion($clientVersion)
    {
        $this->clientVersion = $clientVersion;
        return $this;
    }

    /**
     * Gets as countryIso
     *
     * @return string
     */
    public function getCountryIso()
    {
        return $this->countryIso;
    }

    /**
     * Sets a new countryIso
     *
     * @param string $countryIso
     * @return self
     */
    public function setCountryIso($countryIso)
    {
        $this->countryIso = $countryIso;
        return $this;
    }

    /**
     * Gets as loginGeo
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\LoginGeoType
     */
    public function getLoginGeo()
    {
        return $this->loginGeo;
    }

    /**
     * Sets a new loginGeo
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\LoginGeoType $loginGeo
     * @return self
     */
    public function setLoginGeo(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\LoginGeoType $loginGeo)
    {
        $this->loginGeo = $loginGeo;
        return $this;
    }

    /**
     * Gets as loginGeoId
     *
     * @return string
     */
    public function getLoginGeoId()
    {
        return $this->loginGeoId;
    }

    /**
     * Sets a new loginGeoId
     *
     * @param string $loginGeoId
     * @return self
     */
    public function setLoginGeoId($loginGeoId)
    {
        $this->loginGeoId = $loginGeoId;
        return $this;
    }

    /**
     * Gets as loginTime
     *
     * @return \DateTime
     */
    public function getLoginTime()
    {
        return $this->loginTime;
    }

    /**
     * Sets a new loginTime
     *
     * @param \DateTime $loginTime
     * @return self
     */
    public function setLoginTime(\DateTime $loginTime)
    {
        $this->loginTime = $loginTime;
        return $this;
    }

    /**
     * Gets as loginType
     *
     * @return string
     */
    public function getLoginType()
    {
        return $this->loginType;
    }

    /**
     * Sets a new loginType
     *
     * @param string $loginType
     * @return self
     */
    public function setLoginType($loginType)
    {
        $this->loginType = $loginType;
        return $this;
    }

    /**
     * Gets as loginUrl
     *
     * @return string
     */
    public function getLoginUrl()
    {
        return $this->loginUrl;
    }

    /**
     * Sets a new loginUrl
     *
     * @param string $loginUrl
     * @return self
     */
    public function setLoginUrl($loginUrl)
    {
        $this->loginUrl = $loginUrl;
        return $this;
    }

    /**
     * Gets as platform
     *
     * @return string
     */
    public function getPlatform()
    {
        return $this->platform;
    }

    /**
     * Sets a new platform
     *
     * @param string $platform
     * @return self
     */
    public function setPlatform($platform)
    {
        $this->platform = $platform;
        return $this;
    }

    /**
     * Gets as sourceIp
     *
     * @return string
     */
    public function getSourceIp()
    {
        return $this->sourceIp;
    }

    /**
     * Sets a new sourceIp
     *
     * @param string $sourceIp
     * @return self
     */
    public function setSourceIp($sourceIp)
    {
        $this->sourceIp = $sourceIp;
        return $this;
    }

    /**
     * Gets as status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as tlsProtocol
     *
     * @return string
     */
    public function getTlsProtocol()
    {
        return $this->tlsProtocol;
    }

    /**
     * Sets a new tlsProtocol
     *
     * @param string $tlsProtocol
     * @return self
     */
    public function setTlsProtocol($tlsProtocol)
    {
        $this->tlsProtocol = $tlsProtocol;
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

