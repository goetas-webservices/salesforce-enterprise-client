<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing AuthProviderType
 *
 *
 * XSD Type: AuthProvider
 */
class AuthProviderType extends SObjectType
{

    /**
     * @property string $authorizeUrl
     */
    private $authorizeUrl = null;

    /**
     * @property string $consumerKey
     */
    private $consumerKey = null;

    /**
     * @property string $consumerSecret
     */
    private $consumerSecret = null;

    /**
     * @property \DateTime $createdDate
     */
    private $createdDate = null;

    /**
     * @property string $customMetadataTypeRecord
     */
    private $customMetadataTypeRecord = null;

    /**
     * @property string $defaultScopes
     */
    private $defaultScopes = null;

    /**
     * @property string $developerName
     */
    private $developerName = null;

    /**
     * @property string $errorUrl
     */
    private $errorUrl = null;

    /**
     * @property string $executionUserId
     */
    private $executionUserId = null;

    /**
     * @property string $friendlyName
     */
    private $friendlyName = null;

    /**
     * @property string $iconUrl
     */
    private $iconUrl = null;

    /**
     * @property string $idTokenIssuer
     */
    private $idTokenIssuer = null;

    /**
     * @property string $linkKickoffUrl
     */
    private $linkKickoffUrl = null;

    /**
     * @property string $logoutUrl
     */
    private $logoutUrl = null;

    /**
     * @property string $oauthKickoffUrl
     */
    private $oauthKickoffUrl = null;

    /**
     * @property bool $optionsIncludeOrgIdInId
     */
    private $optionsIncludeOrgIdInId = null;

    /**
     * @property bool $optionsSendAccessTokenInHeader
     */
    private $optionsSendAccessTokenInHeader = null;

    /**
     * @property bool $optionsSendClientCredentialsInHeader
     */
    private $optionsSendClientCredentialsInHeader = null;

    /**
     * @property string $pluginId
     */
    private $pluginId = null;

    /**
     * @property string $providerType
     */
    private $providerType = null;

    /**
     * @property string $registrationHandlerId
     */
    private $registrationHandlerId = null;

    /**
     * @property string $ssoKickoffUrl
     */
    private $ssoKickoffUrl = null;

    /**
     * @property string $tokenUrl
     */
    private $tokenUrl = null;

    /**
     * @property string $userInfoUrl
     */
    private $userInfoUrl = null;

    /**
     * Gets as authorizeUrl
     *
     * @return string
     */
    public function getAuthorizeUrl()
    {
        return $this->authorizeUrl;
    }

    /**
     * Sets a new authorizeUrl
     *
     * @param string $authorizeUrl
     * @return self
     */
    public function setAuthorizeUrl($authorizeUrl)
    {
        $this->authorizeUrl = $authorizeUrl;
        return $this;
    }

    /**
     * Gets as consumerKey
     *
     * @return string
     */
    public function getConsumerKey()
    {
        return $this->consumerKey;
    }

    /**
     * Sets a new consumerKey
     *
     * @param string $consumerKey
     * @return self
     */
    public function setConsumerKey($consumerKey)
    {
        $this->consumerKey = $consumerKey;
        return $this;
    }

    /**
     * Gets as consumerSecret
     *
     * @return string
     */
    public function getConsumerSecret()
    {
        return $this->consumerSecret;
    }

    /**
     * Sets a new consumerSecret
     *
     * @param string $consumerSecret
     * @return self
     */
    public function setConsumerSecret($consumerSecret)
    {
        $this->consumerSecret = $consumerSecret;
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
     * Gets as customMetadataTypeRecord
     *
     * @return string
     */
    public function getCustomMetadataTypeRecord()
    {
        return $this->customMetadataTypeRecord;
    }

    /**
     * Sets a new customMetadataTypeRecord
     *
     * @param string $customMetadataTypeRecord
     * @return self
     */
    public function setCustomMetadataTypeRecord($customMetadataTypeRecord)
    {
        $this->customMetadataTypeRecord = $customMetadataTypeRecord;
        return $this;
    }

    /**
     * Gets as defaultScopes
     *
     * @return string
     */
    public function getDefaultScopes()
    {
        return $this->defaultScopes;
    }

    /**
     * Sets a new defaultScopes
     *
     * @param string $defaultScopes
     * @return self
     */
    public function setDefaultScopes($defaultScopes)
    {
        $this->defaultScopes = $defaultScopes;
        return $this;
    }

    /**
     * Gets as developerName
     *
     * @return string
     */
    public function getDeveloperName()
    {
        return $this->developerName;
    }

    /**
     * Sets a new developerName
     *
     * @param string $developerName
     * @return self
     */
    public function setDeveloperName($developerName)
    {
        $this->developerName = $developerName;
        return $this;
    }

    /**
     * Gets as errorUrl
     *
     * @return string
     */
    public function getErrorUrl()
    {
        return $this->errorUrl;
    }

    /**
     * Sets a new errorUrl
     *
     * @param string $errorUrl
     * @return self
     */
    public function setErrorUrl($errorUrl)
    {
        $this->errorUrl = $errorUrl;
        return $this;
    }

    /**
     * Gets as executionUserId
     *
     * @return string
     */
    public function getExecutionUserId()
    {
        return $this->executionUserId;
    }

    /**
     * Sets a new executionUserId
     *
     * @param string $executionUserId
     * @return self
     */
    public function setExecutionUserId($executionUserId)
    {
        $this->executionUserId = $executionUserId;
        return $this;
    }

    /**
     * Gets as friendlyName
     *
     * @return string
     */
    public function getFriendlyName()
    {
        return $this->friendlyName;
    }

    /**
     * Sets a new friendlyName
     *
     * @param string $friendlyName
     * @return self
     */
    public function setFriendlyName($friendlyName)
    {
        $this->friendlyName = $friendlyName;
        return $this;
    }

    /**
     * Gets as iconUrl
     *
     * @return string
     */
    public function getIconUrl()
    {
        return $this->iconUrl;
    }

    /**
     * Sets a new iconUrl
     *
     * @param string $iconUrl
     * @return self
     */
    public function setIconUrl($iconUrl)
    {
        $this->iconUrl = $iconUrl;
        return $this;
    }

    /**
     * Gets as idTokenIssuer
     *
     * @return string
     */
    public function getIdTokenIssuer()
    {
        return $this->idTokenIssuer;
    }

    /**
     * Sets a new idTokenIssuer
     *
     * @param string $idTokenIssuer
     * @return self
     */
    public function setIdTokenIssuer($idTokenIssuer)
    {
        $this->idTokenIssuer = $idTokenIssuer;
        return $this;
    }

    /**
     * Gets as linkKickoffUrl
     *
     * @return string
     */
    public function getLinkKickoffUrl()
    {
        return $this->linkKickoffUrl;
    }

    /**
     * Sets a new linkKickoffUrl
     *
     * @param string $linkKickoffUrl
     * @return self
     */
    public function setLinkKickoffUrl($linkKickoffUrl)
    {
        $this->linkKickoffUrl = $linkKickoffUrl;
        return $this;
    }

    /**
     * Gets as logoutUrl
     *
     * @return string
     */
    public function getLogoutUrl()
    {
        return $this->logoutUrl;
    }

    /**
     * Sets a new logoutUrl
     *
     * @param string $logoutUrl
     * @return self
     */
    public function setLogoutUrl($logoutUrl)
    {
        $this->logoutUrl = $logoutUrl;
        return $this;
    }

    /**
     * Gets as oauthKickoffUrl
     *
     * @return string
     */
    public function getOauthKickoffUrl()
    {
        return $this->oauthKickoffUrl;
    }

    /**
     * Sets a new oauthKickoffUrl
     *
     * @param string $oauthKickoffUrl
     * @return self
     */
    public function setOauthKickoffUrl($oauthKickoffUrl)
    {
        $this->oauthKickoffUrl = $oauthKickoffUrl;
        return $this;
    }

    /**
     * Gets as optionsIncludeOrgIdInId
     *
     * @return bool
     */
    public function getOptionsIncludeOrgIdInId()
    {
        return $this->optionsIncludeOrgIdInId;
    }

    /**
     * Sets a new optionsIncludeOrgIdInId
     *
     * @param bool $optionsIncludeOrgIdInId
     * @return self
     */
    public function setOptionsIncludeOrgIdInId($optionsIncludeOrgIdInId)
    {
        $this->optionsIncludeOrgIdInId = $optionsIncludeOrgIdInId;
        return $this;
    }

    /**
     * Gets as optionsSendAccessTokenInHeader
     *
     * @return bool
     */
    public function getOptionsSendAccessTokenInHeader()
    {
        return $this->optionsSendAccessTokenInHeader;
    }

    /**
     * Sets a new optionsSendAccessTokenInHeader
     *
     * @param bool $optionsSendAccessTokenInHeader
     * @return self
     */
    public function setOptionsSendAccessTokenInHeader($optionsSendAccessTokenInHeader)
    {
        $this->optionsSendAccessTokenInHeader = $optionsSendAccessTokenInHeader;
        return $this;
    }

    /**
     * Gets as optionsSendClientCredentialsInHeader
     *
     * @return bool
     */
    public function getOptionsSendClientCredentialsInHeader()
    {
        return $this->optionsSendClientCredentialsInHeader;
    }

    /**
     * Sets a new optionsSendClientCredentialsInHeader
     *
     * @param bool $optionsSendClientCredentialsInHeader
     * @return self
     */
    public function setOptionsSendClientCredentialsInHeader($optionsSendClientCredentialsInHeader)
    {
        $this->optionsSendClientCredentialsInHeader = $optionsSendClientCredentialsInHeader;
        return $this;
    }

    /**
     * Gets as pluginId
     *
     * @return string
     */
    public function getPluginId()
    {
        return $this->pluginId;
    }

    /**
     * Sets a new pluginId
     *
     * @param string $pluginId
     * @return self
     */
    public function setPluginId($pluginId)
    {
        $this->pluginId = $pluginId;
        return $this;
    }

    /**
     * Gets as providerType
     *
     * @return string
     */
    public function getProviderType()
    {
        return $this->providerType;
    }

    /**
     * Sets a new providerType
     *
     * @param string $providerType
     * @return self
     */
    public function setProviderType($providerType)
    {
        $this->providerType = $providerType;
        return $this;
    }

    /**
     * Gets as registrationHandlerId
     *
     * @return string
     */
    public function getRegistrationHandlerId()
    {
        return $this->registrationHandlerId;
    }

    /**
     * Sets a new registrationHandlerId
     *
     * @param string $registrationHandlerId
     * @return self
     */
    public function setRegistrationHandlerId($registrationHandlerId)
    {
        $this->registrationHandlerId = $registrationHandlerId;
        return $this;
    }

    /**
     * Gets as ssoKickoffUrl
     *
     * @return string
     */
    public function getSsoKickoffUrl()
    {
        return $this->ssoKickoffUrl;
    }

    /**
     * Sets a new ssoKickoffUrl
     *
     * @param string $ssoKickoffUrl
     * @return self
     */
    public function setSsoKickoffUrl($ssoKickoffUrl)
    {
        $this->ssoKickoffUrl = $ssoKickoffUrl;
        return $this;
    }

    /**
     * Gets as tokenUrl
     *
     * @return string
     */
    public function getTokenUrl()
    {
        return $this->tokenUrl;
    }

    /**
     * Sets a new tokenUrl
     *
     * @param string $tokenUrl
     * @return self
     */
    public function setTokenUrl($tokenUrl)
    {
        $this->tokenUrl = $tokenUrl;
        return $this;
    }

    /**
     * Gets as userInfoUrl
     *
     * @return string
     */
    public function getUserInfoUrl()
    {
        return $this->userInfoUrl;
    }

    /**
     * Sets a new userInfoUrl
     *
     * @param string $userInfoUrl
     * @return self
     */
    public function setUserInfoUrl($userInfoUrl)
    {
        $this->userInfoUrl = $userInfoUrl;
        return $this;
    }


}

