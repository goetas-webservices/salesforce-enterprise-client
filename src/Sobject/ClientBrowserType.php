<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing ClientBrowserType
 *
 *
 * XSD Type: ClientBrowser
 */
class ClientBrowserType extends SObjectType
{

    /**
     * @property \DateTime $createdDate
     */
    private $createdDate = null;

    /**
     * @property string $fullUserAgent
     */
    private $fullUserAgent = null;

    /**
     * @property \DateTime $lastUpdate
     */
    private $lastUpdate = null;

    /**
     * @property string $proxyInfo
     */
    private $proxyInfo = null;

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
     * Gets as fullUserAgent
     *
     * @return string
     */
    public function getFullUserAgent()
    {
        return $this->fullUserAgent;
    }

    /**
     * Sets a new fullUserAgent
     *
     * @param string $fullUserAgent
     * @return self
     */
    public function setFullUserAgent($fullUserAgent)
    {
        $this->fullUserAgent = $fullUserAgent;
        return $this;
    }

    /**
     * Gets as lastUpdate
     *
     * @return \DateTime
     */
    public function getLastUpdate()
    {
        return $this->lastUpdate;
    }

    /**
     * Sets a new lastUpdate
     *
     * @param \DateTime $lastUpdate
     * @return self
     */
    public function setLastUpdate(\DateTime $lastUpdate)
    {
        $this->lastUpdate = $lastUpdate;
        return $this;
    }

    /**
     * Gets as proxyInfo
     *
     * @return string
     */
    public function getProxyInfo()
    {
        return $this->proxyInfo;
    }

    /**
     * Sets a new proxyInfo
     *
     * @param string $proxyInfo
     * @return self
     */
    public function setProxyInfo($proxyInfo)
    {
        $this->proxyInfo = $proxyInfo;
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

