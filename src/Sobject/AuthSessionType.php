<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing AuthSessionType
 *
 *
 * XSD Type: AuthSession
 */
class AuthSessionType extends SObjectType
{

    /**
     * @property \DateTime $createdDate
     */
    private $createdDate = null;

    /**
     * @property bool $isCurrent
     */
    private $isCurrent = null;

    /**
     * @property \DateTime $lastModifiedDate
     */
    private $lastModifiedDate = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\LoginGeoType $loginGeo
     */
    private $loginGeo = null;

    /**
     * @property string $loginGeoId
     */
    private $loginGeoId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\LoginHistoryType $loginHistory
     */
    private $loginHistory = null;

    /**
     * @property string $loginHistoryId
     */
    private $loginHistoryId = null;

    /**
     * @property string $loginType
     */
    private $loginType = null;

    /**
     * @property string $logoutUrl
     */
    private $logoutUrl = null;

    /**
     * @property int $numSecondsValid
     */
    private $numSecondsValid = null;

    /**
     * @property string $parentId
     */
    private $parentId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $sessionPermSetActivations
     */
    private $sessionPermSetActivations = null;

    /**
     * @property string $sessionSecurityLevel
     */
    private $sessionSecurityLevel = null;

    /**
     * @property string $sessionType
     */
    private $sessionType = null;

    /**
     * @property string $sourceIp
     */
    private $sourceIp = null;

    /**
     * @property string $userType
     */
    private $userType = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $users
     */
    private $users = null;

    /**
     * @property string $usersId
     */
    private $usersId = null;

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
     * Gets as isCurrent
     *
     * @return bool
     */
    public function getIsCurrent()
    {
        return $this->isCurrent;
    }

    /**
     * Sets a new isCurrent
     *
     * @param bool $isCurrent
     * @return self
     */
    public function setIsCurrent($isCurrent)
    {
        $this->isCurrent = $isCurrent;
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
     * Gets as loginHistory
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\LoginHistoryType
     */
    public function getLoginHistory()
    {
        return $this->loginHistory;
    }

    /**
     * Sets a new loginHistory
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\LoginHistoryType $loginHistory
     * @return self
     */
    public function setLoginHistory(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\LoginHistoryType $loginHistory)
    {
        $this->loginHistory = $loginHistory;
        return $this;
    }

    /**
     * Gets as loginHistoryId
     *
     * @return string
     */
    public function getLoginHistoryId()
    {
        return $this->loginHistoryId;
    }

    /**
     * Sets a new loginHistoryId
     *
     * @param string $loginHistoryId
     * @return self
     */
    public function setLoginHistoryId($loginHistoryId)
    {
        $this->loginHistoryId = $loginHistoryId;
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
     * Gets as numSecondsValid
     *
     * @return int
     */
    public function getNumSecondsValid()
    {
        return $this->numSecondsValid;
    }

    /**
     * Sets a new numSecondsValid
     *
     * @param int $numSecondsValid
     * @return self
     */
    public function setNumSecondsValid($numSecondsValid)
    {
        $this->numSecondsValid = $numSecondsValid;
        return $this;
    }

    /**
     * Gets as parentId
     *
     * @return string
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * Sets a new parentId
     *
     * @param string $parentId
     * @return self
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;
        return $this;
    }

    /**
     * Gets as sessionPermSetActivations
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getSessionPermSetActivations()
    {
        return $this->sessionPermSetActivations;
    }

    /**
     * Sets a new sessionPermSetActivations
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $sessionPermSetActivations
     * @return self
     */
    public function setSessionPermSetActivations(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $sessionPermSetActivations)
    {
        $this->sessionPermSetActivations = $sessionPermSetActivations;
        return $this;
    }

    /**
     * Gets as sessionSecurityLevel
     *
     * @return string
     */
    public function getSessionSecurityLevel()
    {
        return $this->sessionSecurityLevel;
    }

    /**
     * Sets a new sessionSecurityLevel
     *
     * @param string $sessionSecurityLevel
     * @return self
     */
    public function setSessionSecurityLevel($sessionSecurityLevel)
    {
        $this->sessionSecurityLevel = $sessionSecurityLevel;
        return $this;
    }

    /**
     * Gets as sessionType
     *
     * @return string
     */
    public function getSessionType()
    {
        return $this->sessionType;
    }

    /**
     * Sets a new sessionType
     *
     * @param string $sessionType
     * @return self
     */
    public function setSessionType($sessionType)
    {
        $this->sessionType = $sessionType;
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
     * Gets as users
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Sets a new users
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $users
     * @return self
     */
    public function setUsers(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $users)
    {
        $this->users = $users;
        return $this;
    }

    /**
     * Gets as usersId
     *
     * @return string
     */
    public function getUsersId()
    {
        return $this->usersId;
    }

    /**
     * Sets a new usersId
     *
     * @param string $usersId
     * @return self
     */
    public function setUsersId($usersId)
    {
        $this->usersId = $usersId;
        return $this;
    }


}

