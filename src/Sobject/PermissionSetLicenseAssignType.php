<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing PermissionSetLicenseAssignType
 *
 *
 * XSD Type: PermissionSetLicenseAssign
 */
class PermissionSetLicenseAssignType extends SObjectType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $assignee
     */
    private $assignee = null;

    /**
     * @property string $assigneeId
     */
    private $assigneeId = null;

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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\PermissionSetLicenseType $permissionSetLicense
     */
    private $permissionSetLicense = null;

    /**
     * @property string $permissionSetLicenseId
     */
    private $permissionSetLicenseId = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * Gets as assignee
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType
     */
    public function getAssignee()
    {
        return $this->assignee;
    }

    /**
     * Sets a new assignee
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $assignee
     * @return self
     */
    public function setAssignee(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $assignee)
    {
        $this->assignee = $assignee;
        return $this;
    }

    /**
     * Gets as assigneeId
     *
     * @return string
     */
    public function getAssigneeId()
    {
        return $this->assigneeId;
    }

    /**
     * Sets a new assigneeId
     *
     * @param string $assigneeId
     * @return self
     */
    public function setAssigneeId($assigneeId)
    {
        $this->assigneeId = $assigneeId;
        return $this;
    }

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
     * Gets as permissionSetLicense
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\PermissionSetLicenseType
     */
    public function getPermissionSetLicense()
    {
        return $this->permissionSetLicense;
    }

    /**
     * Sets a new permissionSetLicense
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\PermissionSetLicenseType $permissionSetLicense
     * @return self
     */
    public function setPermissionSetLicense(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\PermissionSetLicenseType $permissionSetLicense)
    {
        $this->permissionSetLicense = $permissionSetLicense;
        return $this;
    }

    /**
     * Gets as permissionSetLicenseId
     *
     * @return string
     */
    public function getPermissionSetLicenseId()
    {
        return $this->permissionSetLicenseId;
    }

    /**
     * Sets a new permissionSetLicenseId
     *
     * @param string $permissionSetLicenseId
     * @return self
     */
    public function setPermissionSetLicenseId($permissionSetLicenseId)
    {
        $this->permissionSetLicenseId = $permissionSetLicenseId;
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
