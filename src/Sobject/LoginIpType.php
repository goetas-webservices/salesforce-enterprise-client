<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing LoginIpType
 *
 *
 * XSD Type: LoginIp
 */
class LoginIpType extends SObjectType
{

    /**
     * @property string $challengeMethod
     */
    private $challengeMethod = null;

    /**
     * @property \DateTime $challengeSentDate
     */
    private $challengeSentDate = null;

    /**
     * @property \DateTime $createdDate
     */
    private $createdDate = null;

    /**
     * @property bool $isAuthenticated
     */
    private $isAuthenticated = null;

    /**
     * @property string $sourceIp
     */
    private $sourceIp = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $users
     */
    private $users = null;

    /**
     * @property string $usersId
     */
    private $usersId = null;

    /**
     * Gets as challengeMethod
     *
     * @return string
     */
    public function getChallengeMethod()
    {
        return $this->challengeMethod;
    }

    /**
     * Sets a new challengeMethod
     *
     * @param string $challengeMethod
     * @return self
     */
    public function setChallengeMethod($challengeMethod)
    {
        $this->challengeMethod = $challengeMethod;
        return $this;
    }

    /**
     * Gets as challengeSentDate
     *
     * @return \DateTime
     */
    public function getChallengeSentDate()
    {
        return $this->challengeSentDate;
    }

    /**
     * Sets a new challengeSentDate
     *
     * @param \DateTime $challengeSentDate
     * @return self
     */
    public function setChallengeSentDate(\DateTime $challengeSentDate)
    {
        $this->challengeSentDate = $challengeSentDate;
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
     * Gets as isAuthenticated
     *
     * @return bool
     */
    public function getIsAuthenticated()
    {
        return $this->isAuthenticated;
    }

    /**
     * Sets a new isAuthenticated
     *
     * @param bool $isAuthenticated
     * @return self
     */
    public function setIsAuthenticated($isAuthenticated)
    {
        $this->isAuthenticated = $isAuthenticated;
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

