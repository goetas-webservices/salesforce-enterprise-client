<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing ObjectPermissionsType
 *
 *
 * XSD Type: ObjectPermissions
 */
class ObjectPermissionsType extends SObjectType
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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\PermissionSetType $parent
     */
    private $parent = null;

    /**
     * @property string $parentId
     */
    private $parentId = null;

    /**
     * @property bool $permissionsCreate
     */
    private $permissionsCreate = null;

    /**
     * @property bool $permissionsDelete
     */
    private $permissionsDelete = null;

    /**
     * @property bool $permissionsEdit
     */
    private $permissionsEdit = null;

    /**
     * @property bool $permissionsModifyAllRecords
     */
    private $permissionsModifyAllRecords = null;

    /**
     * @property bool $permissionsRead
     */
    private $permissionsRead = null;

    /**
     * @property bool $permissionsViewAllRecords
     */
    private $permissionsViewAllRecords = null;

    /**
     * @property string $sobjectType
     */
    private $sobjectType = null;

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
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\PermissionSetType
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Sets a new parent
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\PermissionSetType $parent
     * @return self
     */
    public function setParent(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\PermissionSetType $parent)
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
     * Gets as permissionsCreate
     *
     * @return bool
     */
    public function getPermissionsCreate()
    {
        return $this->permissionsCreate;
    }

    /**
     * Sets a new permissionsCreate
     *
     * @param bool $permissionsCreate
     * @return self
     */
    public function setPermissionsCreate($permissionsCreate)
    {
        $this->permissionsCreate = $permissionsCreate;
        return $this;
    }

    /**
     * Gets as permissionsDelete
     *
     * @return bool
     */
    public function getPermissionsDelete()
    {
        return $this->permissionsDelete;
    }

    /**
     * Sets a new permissionsDelete
     *
     * @param bool $permissionsDelete
     * @return self
     */
    public function setPermissionsDelete($permissionsDelete)
    {
        $this->permissionsDelete = $permissionsDelete;
        return $this;
    }

    /**
     * Gets as permissionsEdit
     *
     * @return bool
     */
    public function getPermissionsEdit()
    {
        return $this->permissionsEdit;
    }

    /**
     * Sets a new permissionsEdit
     *
     * @param bool $permissionsEdit
     * @return self
     */
    public function setPermissionsEdit($permissionsEdit)
    {
        $this->permissionsEdit = $permissionsEdit;
        return $this;
    }

    /**
     * Gets as permissionsModifyAllRecords
     *
     * @return bool
     */
    public function getPermissionsModifyAllRecords()
    {
        return $this->permissionsModifyAllRecords;
    }

    /**
     * Sets a new permissionsModifyAllRecords
     *
     * @param bool $permissionsModifyAllRecords
     * @return self
     */
    public function setPermissionsModifyAllRecords($permissionsModifyAllRecords)
    {
        $this->permissionsModifyAllRecords = $permissionsModifyAllRecords;
        return $this;
    }

    /**
     * Gets as permissionsRead
     *
     * @return bool
     */
    public function getPermissionsRead()
    {
        return $this->permissionsRead;
    }

    /**
     * Sets a new permissionsRead
     *
     * @param bool $permissionsRead
     * @return self
     */
    public function setPermissionsRead($permissionsRead)
    {
        $this->permissionsRead = $permissionsRead;
        return $this;
    }

    /**
     * Gets as permissionsViewAllRecords
     *
     * @return bool
     */
    public function getPermissionsViewAllRecords()
    {
        return $this->permissionsViewAllRecords;
    }

    /**
     * Sets a new permissionsViewAllRecords
     *
     * @param bool $permissionsViewAllRecords
     * @return self
     */
    public function setPermissionsViewAllRecords($permissionsViewAllRecords)
    {
        $this->permissionsViewAllRecords = $permissionsViewAllRecords;
        return $this;
    }

    /**
     * Gets as sobjectType
     *
     * @return string
     */
    public function getSobjectType()
    {
        return $this->sobjectType;
    }

    /**
     * Sets a new sobjectType
     *
     * @param string $sobjectType
     * @return self
     */
    public function setSobjectType($sobjectType)
    {
        $this->sobjectType = $sobjectType;
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

