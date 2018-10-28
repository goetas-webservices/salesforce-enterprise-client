<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing MacroShareType
 *
 *
 * XSD Type: MacroShare
 */
class MacroShareType extends SObjectType
{

    /**
     * @property string $accessLevel
     */
    private $accessLevel = null;

    /**
     * @property bool $isDeleted
     */
    private $isDeleted = null;

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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\MacroType $parent
     */
    private $parent = null;

    /**
     * @property string $parentId
     */
    private $parentId = null;

    /**
     * @property string $rowCause
     */
    private $rowCause = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $userOrGroup
     */
    private $userOrGroup = null;

    /**
     * @property string $userOrGroupId
     */
    private $userOrGroupId = null;

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
     * Gets as isDeleted
     *
     * @return bool
     */
    public function getIsDeleted()
    {
        return $this->isDeleted;
    }

    /**
     * Sets a new isDeleted
     *
     * @param bool $isDeleted
     * @return self
     */
    public function setIsDeleted($isDeleted)
    {
        $this->isDeleted = $isDeleted;
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
     * Gets as parent
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\MacroType
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Sets a new parent
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\MacroType $parent
     * @return self
     */
    public function setParent(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\MacroType $parent)
    {
        $this->parent = $parent;
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
     * Gets as userOrGroup
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType
     */
    public function getUserOrGroup()
    {
        return $this->userOrGroup;
    }

    /**
     * Sets a new userOrGroup
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $userOrGroup
     * @return self
     */
    public function setUserOrGroup(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $userOrGroup)
    {
        $this->userOrGroup = $userOrGroup;
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


}

