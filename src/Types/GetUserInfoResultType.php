<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing GetUserInfoResultType
 *
 *
 * XSD Type: GetUserInfoResult
 */
class GetUserInfoResultType
{

    /**
     * @property bool $accessibilityMode
     */
    private $accessibilityMode = null;

    /**
     * @property bool $chatterExternal
     */
    private $chatterExternal = null;

    /**
     * @property string $currencySymbol
     */
    private $currencySymbol = null;

    /**
     * @property int $orgAttachmentFileSizeLimit
     */
    private $orgAttachmentFileSizeLimit = null;

    /**
     * @property string $orgDefaultCurrencyIsoCode
     */
    private $orgDefaultCurrencyIsoCode = null;

    /**
     * @property string $orgDefaultCurrencyLocale
     */
    private $orgDefaultCurrencyLocale = null;

    /**
     * @property bool $orgDisallowHtmlAttachments
     */
    private $orgDisallowHtmlAttachments = null;

    /**
     * @property bool $orgHasPersonAccounts
     */
    private $orgHasPersonAccounts = null;

    /**
     * @property string $organizationId
     */
    private $organizationId = null;

    /**
     * @property bool $organizationMultiCurrency
     */
    private $organizationMultiCurrency = null;

    /**
     * @property string $organizationName
     */
    private $organizationName = null;

    /**
     * @property string $profileId
     */
    private $profileId = null;

    /**
     * @property string $roleId
     */
    private $roleId = null;

    /**
     * @property int $sessionSecondsValid
     */
    private $sessionSecondsValid = null;

    /**
     * @property string $userDefaultCurrencyIsoCode
     */
    private $userDefaultCurrencyIsoCode = null;

    /**
     * @property string $userEmail
     */
    private $userEmail = null;

    /**
     * @property string $userFullName
     */
    private $userFullName = null;

    /**
     * @property string $userId
     */
    private $userId = null;

    /**
     * @property string $userLanguage
     */
    private $userLanguage = null;

    /**
     * @property string $userLocale
     */
    private $userLocale = null;

    /**
     * @property string $userName
     */
    private $userName = null;

    /**
     * @property string $userTimeZone
     */
    private $userTimeZone = null;

    /**
     * @property string $userType
     */
    private $userType = null;

    /**
     * @property string $userUiSkin
     */
    private $userUiSkin = null;

    /**
     * Gets as accessibilityMode
     *
     * @return bool
     */
    public function getAccessibilityMode()
    {
        return $this->accessibilityMode;
    }

    /**
     * Sets a new accessibilityMode
     *
     * @param bool $accessibilityMode
     * @return self
     */
    public function setAccessibilityMode($accessibilityMode)
    {
        $this->accessibilityMode = $accessibilityMode;
        return $this;
    }

    /**
     * Gets as chatterExternal
     *
     * @return bool
     */
    public function getChatterExternal()
    {
        return $this->chatterExternal;
    }

    /**
     * Sets a new chatterExternal
     *
     * @param bool $chatterExternal
     * @return self
     */
    public function setChatterExternal($chatterExternal)
    {
        $this->chatterExternal = $chatterExternal;
        return $this;
    }

    /**
     * Gets as currencySymbol
     *
     * @return string
     */
    public function getCurrencySymbol()
    {
        return $this->currencySymbol;
    }

    /**
     * Sets a new currencySymbol
     *
     * @param string $currencySymbol
     * @return self
     */
    public function setCurrencySymbol($currencySymbol)
    {
        $this->currencySymbol = $currencySymbol;
        return $this;
    }

    /**
     * Gets as orgAttachmentFileSizeLimit
     *
     * @return int
     */
    public function getOrgAttachmentFileSizeLimit()
    {
        return $this->orgAttachmentFileSizeLimit;
    }

    /**
     * Sets a new orgAttachmentFileSizeLimit
     *
     * @param int $orgAttachmentFileSizeLimit
     * @return self
     */
    public function setOrgAttachmentFileSizeLimit($orgAttachmentFileSizeLimit)
    {
        $this->orgAttachmentFileSizeLimit = $orgAttachmentFileSizeLimit;
        return $this;
    }

    /**
     * Gets as orgDefaultCurrencyIsoCode
     *
     * @return string
     */
    public function getOrgDefaultCurrencyIsoCode()
    {
        return $this->orgDefaultCurrencyIsoCode;
    }

    /**
     * Sets a new orgDefaultCurrencyIsoCode
     *
     * @param string $orgDefaultCurrencyIsoCode
     * @return self
     */
    public function setOrgDefaultCurrencyIsoCode($orgDefaultCurrencyIsoCode)
    {
        $this->orgDefaultCurrencyIsoCode = $orgDefaultCurrencyIsoCode;
        return $this;
    }

    /**
     * Gets as orgDefaultCurrencyLocale
     *
     * @return string
     */
    public function getOrgDefaultCurrencyLocale()
    {
        return $this->orgDefaultCurrencyLocale;
    }

    /**
     * Sets a new orgDefaultCurrencyLocale
     *
     * @param string $orgDefaultCurrencyLocale
     * @return self
     */
    public function setOrgDefaultCurrencyLocale($orgDefaultCurrencyLocale)
    {
        $this->orgDefaultCurrencyLocale = $orgDefaultCurrencyLocale;
        return $this;
    }

    /**
     * Gets as orgDisallowHtmlAttachments
     *
     * @return bool
     */
    public function getOrgDisallowHtmlAttachments()
    {
        return $this->orgDisallowHtmlAttachments;
    }

    /**
     * Sets a new orgDisallowHtmlAttachments
     *
     * @param bool $orgDisallowHtmlAttachments
     * @return self
     */
    public function setOrgDisallowHtmlAttachments($orgDisallowHtmlAttachments)
    {
        $this->orgDisallowHtmlAttachments = $orgDisallowHtmlAttachments;
        return $this;
    }

    /**
     * Gets as orgHasPersonAccounts
     *
     * @return bool
     */
    public function getOrgHasPersonAccounts()
    {
        return $this->orgHasPersonAccounts;
    }

    /**
     * Sets a new orgHasPersonAccounts
     *
     * @param bool $orgHasPersonAccounts
     * @return self
     */
    public function setOrgHasPersonAccounts($orgHasPersonAccounts)
    {
        $this->orgHasPersonAccounts = $orgHasPersonAccounts;
        return $this;
    }

    /**
     * Gets as organizationId
     *
     * @return string
     */
    public function getOrganizationId()
    {
        return $this->organizationId;
    }

    /**
     * Sets a new organizationId
     *
     * @param string $organizationId
     * @return self
     */
    public function setOrganizationId($organizationId)
    {
        $this->organizationId = $organizationId;
        return $this;
    }

    /**
     * Gets as organizationMultiCurrency
     *
     * @return bool
     */
    public function getOrganizationMultiCurrency()
    {
        return $this->organizationMultiCurrency;
    }

    /**
     * Sets a new organizationMultiCurrency
     *
     * @param bool $organizationMultiCurrency
     * @return self
     */
    public function setOrganizationMultiCurrency($organizationMultiCurrency)
    {
        $this->organizationMultiCurrency = $organizationMultiCurrency;
        return $this;
    }

    /**
     * Gets as organizationName
     *
     * @return string
     */
    public function getOrganizationName()
    {
        return $this->organizationName;
    }

    /**
     * Sets a new organizationName
     *
     * @param string $organizationName
     * @return self
     */
    public function setOrganizationName($organizationName)
    {
        $this->organizationName = $organizationName;
        return $this;
    }

    /**
     * Gets as profileId
     *
     * @return string
     */
    public function getProfileId()
    {
        return $this->profileId;
    }

    /**
     * Sets a new profileId
     *
     * @param string $profileId
     * @return self
     */
    public function setProfileId($profileId)
    {
        $this->profileId = $profileId;
        return $this;
    }

    /**
     * Gets as roleId
     *
     * @return string
     */
    public function getRoleId()
    {
        return $this->roleId;
    }

    /**
     * Sets a new roleId
     *
     * @param string $roleId
     * @return self
     */
    public function setRoleId($roleId)
    {
        $this->roleId = $roleId;
        return $this;
    }

    /**
     * Gets as sessionSecondsValid
     *
     * @return int
     */
    public function getSessionSecondsValid()
    {
        return $this->sessionSecondsValid;
    }

    /**
     * Sets a new sessionSecondsValid
     *
     * @param int $sessionSecondsValid
     * @return self
     */
    public function setSessionSecondsValid($sessionSecondsValid)
    {
        $this->sessionSecondsValid = $sessionSecondsValid;
        return $this;
    }

    /**
     * Gets as userDefaultCurrencyIsoCode
     *
     * @return string
     */
    public function getUserDefaultCurrencyIsoCode()
    {
        return $this->userDefaultCurrencyIsoCode;
    }

    /**
     * Sets a new userDefaultCurrencyIsoCode
     *
     * @param string $userDefaultCurrencyIsoCode
     * @return self
     */
    public function setUserDefaultCurrencyIsoCode($userDefaultCurrencyIsoCode)
    {
        $this->userDefaultCurrencyIsoCode = $userDefaultCurrencyIsoCode;
        return $this;
    }

    /**
     * Gets as userEmail
     *
     * @return string
     */
    public function getUserEmail()
    {
        return $this->userEmail;
    }

    /**
     * Sets a new userEmail
     *
     * @param string $userEmail
     * @return self
     */
    public function setUserEmail($userEmail)
    {
        $this->userEmail = $userEmail;
        return $this;
    }

    /**
     * Gets as userFullName
     *
     * @return string
     */
    public function getUserFullName()
    {
        return $this->userFullName;
    }

    /**
     * Sets a new userFullName
     *
     * @param string $userFullName
     * @return self
     */
    public function setUserFullName($userFullName)
    {
        $this->userFullName = $userFullName;
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
     * Gets as userLanguage
     *
     * @return string
     */
    public function getUserLanguage()
    {
        return $this->userLanguage;
    }

    /**
     * Sets a new userLanguage
     *
     * @param string $userLanguage
     * @return self
     */
    public function setUserLanguage($userLanguage)
    {
        $this->userLanguage = $userLanguage;
        return $this;
    }

    /**
     * Gets as userLocale
     *
     * @return string
     */
    public function getUserLocale()
    {
        return $this->userLocale;
    }

    /**
     * Sets a new userLocale
     *
     * @param string $userLocale
     * @return self
     */
    public function setUserLocale($userLocale)
    {
        $this->userLocale = $userLocale;
        return $this;
    }

    /**
     * Gets as userName
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Sets a new userName
     *
     * @param string $userName
     * @return self
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
        return $this;
    }

    /**
     * Gets as userTimeZone
     *
     * @return string
     */
    public function getUserTimeZone()
    {
        return $this->userTimeZone;
    }

    /**
     * Sets a new userTimeZone
     *
     * @param string $userTimeZone
     * @return self
     */
    public function setUserTimeZone($userTimeZone)
    {
        $this->userTimeZone = $userTimeZone;
        return $this;
    }

    /**
     * Gets as userType
     *
     * @return string
     */
    public function getUserType()
    {
        return $this->userType;
    }

    /**
     * Sets a new userType
     *
     * @param string $userType
     * @return self
     */
    public function setUserType($userType)
    {
        $this->userType = $userType;
        return $this;
    }

    /**
     * Gets as userUiSkin
     *
     * @return string
     */
    public function getUserUiSkin()
    {
        return $this->userUiSkin;
    }

    /**
     * Sets a new userUiSkin
     *
     * @param string $userUiSkin
     * @return self
     */
    public function setUserUiSkin($userUiSkin)
    {
        $this->userUiSkin = $userUiSkin;
        return $this;
    }


}

