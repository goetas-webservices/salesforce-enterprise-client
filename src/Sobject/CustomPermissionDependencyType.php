<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing CustomPermissionDependencyType
 *
 *
 * XSD Type: CustomPermissionDependency
 */
class CustomPermissionDependencyType extends SObjectType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $createdBy
     */
    private $createdBy = null;

    /**
     * @property string $createdById
     */
    private $createdById = null;

    /**
     * @property \DateTime $createdDate
     */
    private $createdDate = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\CustomPermissionType $customPermission
     */
    private $customPermission = null;

    /**
     * @property string $customPermissionId
     */
    private $customPermissionId = null;

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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\CustomPermissionType $requiredCustomPermission
     */
    private $requiredCustomPermission = null;

    /**
     * @property string $requiredCustomPermissionId
     */
    private $requiredCustomPermissionId = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * Gets as createdBy
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Sets a new createdBy
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $createdBy
     * @return self
     */
    public function setCreatedBy(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $createdBy)
    {
        $this->createdBy = $createdBy;
        return $this;
    }

    /**
     * Gets as createdById
     *
     * @return string
     */
    public function getCreatedById()
    {
        return $this->createdById;
    }

    /**
     * Sets a new createdById
     *
     * @param string $createdById
     * @return self
     */
    public function setCreatedById($createdById)
    {
        $this->createdById = $createdById;
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
     * Gets as customPermission
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\CustomPermissionType
     */
    public function getCustomPermission()
    {
        return $this->customPermission;
    }

    /**
     * Sets a new customPermission
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\CustomPermissionType $customPermission
     * @return self
     */
    public function setCustomPermission(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\CustomPermissionType $customPermission)
    {
        $this->customPermission = $customPermission;
        return $this;
    }

    /**
     * Gets as customPermissionId
     *
     * @return string
     */
    public function getCustomPermissionId()
    {
        return $this->customPermissionId;
    }

    /**
     * Sets a new customPermissionId
     *
     * @param string $customPermissionId
     * @return self
     */
    public function setCustomPermissionId($customPermissionId)
    {
        $this->customPermissionId = $customPermissionId;
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
     * Gets as requiredCustomPermission
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\CustomPermissionType
     */
    public function getRequiredCustomPermission()
    {
        return $this->requiredCustomPermission;
    }

    /**
     * Sets a new requiredCustomPermission
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\CustomPermissionType $requiredCustomPermission
     * @return self
     */
    public function setRequiredCustomPermission(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\CustomPermissionType $requiredCustomPermission)
    {
        $this->requiredCustomPermission = $requiredCustomPermission;
        return $this;
    }

    /**
     * Gets as requiredCustomPermissionId
     *
     * @return string
     */
    public function getRequiredCustomPermissionId()
    {
        return $this->requiredCustomPermissionId;
    }

    /**
     * Sets a new requiredCustomPermissionId
     *
     * @param string $requiredCustomPermissionId
     * @return self
     */
    public function setRequiredCustomPermissionId($requiredCustomPermissionId)
    {
        $this->requiredCustomPermissionId = $requiredCustomPermissionId;
        return $this;
    }

    /**
     * Gets as systemModstamp
     *
     * @return \DateTime
     */
    public function getSystemModstamp()
    {
        return $this->systemModstamp;
    }

    /**
     * Sets a new systemModstamp
     *
     * @param \DateTime $systemModstamp
     * @return self
     */
    public function setSystemModstamp(\DateTime $systemModstamp)
    {
        $this->systemModstamp = $systemModstamp;
        return $this;
    }


}

