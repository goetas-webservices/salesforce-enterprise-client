<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing SetupEntityAccessType
 *
 *
 * XSD Type: SetupEntityAccess
 */
class SetupEntityAccessType extends SObjectType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\PermissionSetType $parent
     */
    private $parent = null;

    /**
     * @property string $parentId
     */
    private $parentId = null;

    /**
     * @property string $setupEntityId
     */
    private $setupEntityId = null;

    /**
     * @property string $setupEntityType
     */
    private $setupEntityType = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

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
     * Gets as setupEntityId
     *
     * @return string
     */
    public function getSetupEntityId()
    {
        return $this->setupEntityId;
    }

    /**
     * Sets a new setupEntityId
     *
     * @param string $setupEntityId
     * @return self
     */
    public function setSetupEntityId($setupEntityId)
    {
        $this->setupEntityId = $setupEntityId;
        return $this;
    }

    /**
     * Gets as setupEntityType
     *
     * @return string
     */
    public function getSetupEntityType()
    {
        return $this->setupEntityType;
    }

    /**
     * Sets a new setupEntityType
     *
     * @param string $setupEntityType
     * @return self
     */
    public function setSetupEntityType($setupEntityType)
    {
        $this->setupEntityType = $setupEntityType;
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

