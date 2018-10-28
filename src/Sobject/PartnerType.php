<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing PartnerType
 *
 *
 * XSD Type: Partner
 */
class PartnerType extends SObjectType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AccountType $accountFrom
     */
    private $accountFrom = null;

    /**
     * @property string $accountFromId
     */
    private $accountFromId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AccountType $accountTo
     */
    private $accountTo = null;

    /**
     * @property string $accountToId
     */
    private $accountToId = null;

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
     * @property bool $isPrimary
     */
    private $isPrimary = null;

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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\OpportunityType $opportunity
     */
    private $opportunity = null;

    /**
     * @property string $opportunityId
     */
    private $opportunityId = null;

    /**
     * @property string $reversePartnerId
     */
    private $reversePartnerId = null;

    /**
     * @property string $role
     */
    private $role = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * Gets as accountFrom
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AccountType
     */
    public function getAccountFrom()
    {
        return $this->accountFrom;
    }

    /**
     * Sets a new accountFrom
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AccountType $accountFrom
     * @return self
     */
    public function setAccountFrom(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\AccountType $accountFrom)
    {
        $this->accountFrom = $accountFrom;
        return $this;
    }

    /**
     * Gets as accountFromId
     *
     * @return string
     */
    public function getAccountFromId()
    {
        return $this->accountFromId;
    }

    /**
     * Sets a new accountFromId
     *
     * @param string $accountFromId
     * @return self
     */
    public function setAccountFromId($accountFromId)
    {
        $this->accountFromId = $accountFromId;
        return $this;
    }

    /**
     * Gets as accountTo
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AccountType
     */
    public function getAccountTo()
    {
        return $this->accountTo;
    }

    /**
     * Sets a new accountTo
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AccountType $accountTo
     * @return self
     */
    public function setAccountTo(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\AccountType $accountTo)
    {
        $this->accountTo = $accountTo;
        return $this;
    }

    /**
     * Gets as accountToId
     *
     * @return string
     */
    public function getAccountToId()
    {
        return $this->accountToId;
    }

    /**
     * Sets a new accountToId
     *
     * @param string $accountToId
     * @return self
     */
    public function setAccountToId($accountToId)
    {
        $this->accountToId = $accountToId;
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
     * Gets as isPrimary
     *
     * @return bool
     */
    public function getIsPrimary()
    {
        return $this->isPrimary;
    }

    /**
     * Sets a new isPrimary
     *
     * @param bool $isPrimary
     * @return self
     */
    public function setIsPrimary($isPrimary)
    {
        $this->isPrimary = $isPrimary;
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
     * Gets as opportunity
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\OpportunityType
     */
    public function getOpportunity()
    {
        return $this->opportunity;
    }

    /**
     * Sets a new opportunity
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\OpportunityType $opportunity
     * @return self
     */
    public function setOpportunity(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\OpportunityType $opportunity)
    {
        $this->opportunity = $opportunity;
        return $this;
    }

    /**
     * Gets as opportunityId
     *
     * @return string
     */
    public function getOpportunityId()
    {
        return $this->opportunityId;
    }

    /**
     * Sets a new opportunityId
     *
     * @param string $opportunityId
     * @return self
     */
    public function setOpportunityId($opportunityId)
    {
        $this->opportunityId = $opportunityId;
        return $this;
    }

    /**
     * Gets as reversePartnerId
     *
     * @return string
     */
    public function getReversePartnerId()
    {
        return $this->reversePartnerId;
    }

    /**
     * Sets a new reversePartnerId
     *
     * @param string $reversePartnerId
     * @return self
     */
    public function setReversePartnerId($reversePartnerId)
    {
        $this->reversePartnerId = $reversePartnerId;
        return $this;
    }

    /**
     * Gets as role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Sets a new role
     *
     * @param string $role
     * @return self
     */
    public function setRole($role)
    {
        $this->role = $role;
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

