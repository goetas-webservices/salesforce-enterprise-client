<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing ForecastShareType
 *
 *
 * XSD Type: ForecastShare
 */
class ForecastShareType extends SObjectType
{

    /**
     * @property string $accessLevel
     */
    private $accessLevel = null;

    /**
     * @property bool $canSubmit
     */
    private $canSubmit = null;

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
     * @property string $rowCause
     */
    private $rowCause = null;

    /**
     * @property string $userOrGroupId
     */
    private $userOrGroupId = null;

    /**
     * @property string $userRoleId
     */
    private $userRoleId = null;

    /**
     * Gets as accessLevel
     *
     * @return string
     */
    public function getAccessLevel()
    {
        return $this->accessLevel;
    }

    /**
     * Sets a new accessLevel
     *
     * @param string $accessLevel
     * @return self
     */
    public function setAccessLevel($accessLevel)
    {
        $this->accessLevel = $accessLevel;
        return $this;
    }

    /**
     * Gets as canSubmit
     *
     * @return bool
     */
    public function getCanSubmit()
    {
        return $this->canSubmit;
    }

    /**
     * Sets a new canSubmit
     *
     * @param bool $canSubmit
     * @return self
     */
    public function setCanSubmit($canSubmit)
    {
        $this->canSubmit = $canSubmit;
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
     * Gets as rowCause
     *
     * @return string
     */
    public function getRowCause()
    {
        return $this->rowCause;
    }

    /**
     * Sets a new rowCause
     *
     * @param string $rowCause
     * @return self
     */
    public function setRowCause($rowCause)
    {
        $this->rowCause = $rowCause;
        return $this;
    }

    /**
     * Gets as userOrGroupId
     *
     * @return string
     */
    public function getUserOrGroupId()
    {
        return $this->userOrGroupId;
    }

    /**
     * Sets a new userOrGroupId
     *
     * @param string $userOrGroupId
     * @return self
     */
    public function setUserOrGroupId($userOrGroupId)
    {
        $this->userOrGroupId = $userOrGroupId;
        return $this;
    }

    /**
     * Gets as userRoleId
     *
     * @return string
     */
    public function getUserRoleId()
    {
        return $this->userRoleId;
    }

    /**
     * Sets a new userRoleId
     *
     * @param string $userRoleId
     * @return self
     */
    public function setUserRoleId($userRoleId)
    {
        $this->userRoleId = $userRoleId;
        return $this;
    }


}

