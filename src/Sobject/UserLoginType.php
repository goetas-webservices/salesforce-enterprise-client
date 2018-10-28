<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing UserLoginType
 *
 *
 * XSD Type: UserLogin
 */
class UserLoginType extends SObjectType
{

    /**
     * @property bool $isFrozen
     */
    private $isFrozen = null;

    /**
     * @property bool $isPasswordLocked
     */
    private $isPasswordLocked = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $lastModifiedBy
     */
    private $lastModifiedBy = null;

    /**
     * @property string $lastModifiedById
     */
    private $lastModifiedById = null;

    /**
     * @property \DateTime $lastModifiedDate
     */
    private $lastModifiedDate = null;

    /**
     * @property string $userId
     */
    private $userId = null;

    /**
     * Gets as isFrozen
     *
     * @return bool
     */
    public function getIsFrozen()
    {
        return $this->isFrozen;
    }

    /**
     * Sets a new isFrozen
     *
     * @param bool $isFrozen
     * @return self
     */
    public function setIsFrozen($isFrozen)
    {
        $this->isFrozen = $isFrozen;
        return $this;
    }

    /**
     * Gets as isPasswordLocked
     *
     * @return bool
     */
    public function getIsPasswordLocked()
    {
        return $this->isPasswordLocked;
    }

    /**
     * Sets a new isPasswordLocked
     *
     * @param bool $isPasswordLocked
     * @return self
     */
    public function setIsPasswordLocked($isPasswordLocked)
    {
        $this->isPasswordLocked = $isPasswordLocked;
        return $this;
    }

    /**
     * Gets as lastModifiedBy
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType
     */
    public function getLastModifiedBy()
    {
        return $this->lastModifiedBy;
    }

    /**
     * Sets a new lastModifiedBy
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $lastModifiedBy
     * @return self
     */
    public function setLastModifiedBy(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $lastModifiedBy)
    {
        $this->lastModifiedBy = $lastModifiedBy;
        return $this;
    }

    /**
     * Gets as lastModifiedById
     *
     * @return string
     */
    public function getLastModifiedById()
    {
        return $this->lastModifiedById;
    }

    /**
     * Sets a new lastModifiedById
     *
     * @param string $lastModifiedById
     * @return self
     */
    public function setLastModifiedById($lastModifiedById)
    {
        $this->lastModifiedById = $lastModifiedById;
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

