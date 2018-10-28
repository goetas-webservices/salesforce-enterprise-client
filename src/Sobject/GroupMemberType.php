<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing GroupMemberType
 *
 *
 * XSD Type: GroupMember
 */
class GroupMemberType extends SObjectType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\GroupType $group
     */
    private $group = null;

    /**
     * @property string $groupId
     */
    private $groupId = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property string $userOrGroupId
     */
    private $userOrGroupId = null;

    /**
     * Gets as group
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\GroupType
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Sets a new group
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\GroupType $group
     * @return self
     */
    public function setGroup(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\GroupType $group)
    {
        $this->group = $group;
        return $this;
    }

    /**
     * Gets as groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Sets a new groupId
     *
     * @param string $groupId
     * @return self
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
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

