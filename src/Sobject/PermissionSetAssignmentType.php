<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing PermissionSetAssignmentType
 *
 *
 * XSD Type: PermissionSetAssignment
 */
class PermissionSetAssignmentType extends SObjectType
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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\PermissionSetType $permissionSet
     */
    private $permissionSet = null;

    /**
     * @property string $permissionSetId
     */
    private $permissionSetId = null;

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
     * Gets as permissionSet
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\PermissionSetType
     */
    public function getPermissionSet()
    {
        return $this->permissionSet;
    }

    /**
     * Sets a new permissionSet
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\PermissionSetType $permissionSet
     * @return self
     */
    public function setPermissionSet(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\PermissionSetType $permissionSet)
    {
        $this->permissionSet = $permissionSet;
        return $this;
    }

    /**
     * Gets as permissionSetId
     *
     * @return string
     */
    public function getPermissionSetId()
    {
        return $this->permissionSetId;
    }

    /**
     * Sets a new permissionSetId
     *
     * @param string $permissionSetId
     * @return self
     */
    public function setPermissionSetId($permissionSetId)
    {
        $this->permissionSetId = $permissionSetId;
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

