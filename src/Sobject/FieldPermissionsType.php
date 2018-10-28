<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing FieldPermissionsType
 *
 *
 * XSD Type: FieldPermissions
 */
class FieldPermissionsType extends SObjectType
{

    /**
     * @property string $field
     */
    private $field = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\PermissionSetType $parent
     */
    private $parent = null;

    /**
     * @property string $parentId
     */
    private $parentId = null;

    /**
     * @property bool $permissionsEdit
     */
    private $permissionsEdit = null;

    /**
     * @property bool $permissionsRead
     */
    private $permissionsRead = null;

    /**
     * @property string $sobjectType
     */
    private $sobjectType = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * Gets as field
     *
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * Sets a new field
     *
     * @param string $field
     * @return self
     */
    public function setField($field)
    {
        $this->field = $field;
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

