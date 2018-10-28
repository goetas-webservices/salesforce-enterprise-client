<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing RecordActionHistoryType
 *
 *
 * XSD Type: RecordActionHistory
 */
class RecordActionHistoryType extends SObjectType
{

    /**
     * @property string $actionDefinitionApiName
     */
    private $actionDefinitionApiName = null;

    /**
     * @property string $actionDefinitionLabel
     */
    private $actionDefinitionLabel = null;

    /**
     * @property string $actionType
     */
    private $actionType = null;

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
     * @property bool $isMandatory
     */
    private $isMandatory = null;

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
     * @property \DateTime $loggedTime
     */
    private $loggedTime = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AccountType $parentRecord
     */
    private $parentRecord = null;

    /**
     * @property string $parentRecordId
     */
    private $parentRecordId = null;

    /**
     * @property string $pinned
     */
    private $pinned = null;

    /**
     * @property string $recordActionId
     */
    private $recordActionId = null;

    /**
     * @property string $state
     */
    private $state = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $user
     */
    private $user = null;

    /**
     * @property string $userId
     */
    private $userId = null;

    /**
     * Gets as actionDefinitionApiName
     *
     * @return string
     */
    public function getActionDefinitionApiName()
    {
        return $this->actionDefinitionApiName;
    }

    /**
     * Sets a new actionDefinitionApiName
     *
     * @param string $actionDefinitionApiName
     * @return self
     */
    public function setActionDefinitionApiName($actionDefinitionApiName)
    {
        $this->actionDefinitionApiName = $actionDefinitionApiName;
        return $this;
    }

    /**
     * Gets as actionDefinitionLabel
     *
     * @return string
     */
    public function getActionDefinitionLabel()
    {
        return $this->actionDefinitionLabel;
    }

    /**
     * Sets a new actionDefinitionLabel
     *
     * @param string $actionDefinitionLabel
     * @return self
     */
    public function setActionDefinitionLabel($actionDefinitionLabel)
    {
        $this->actionDefinitionLabel = $actionDefinitionLabel;
        return $this;
    }

    /**
     * Gets as actionType
     *
     * @return string
     */
    public function getActionType()
    {
        return $this->actionType;
    }

    /**
     * Sets a new actionType
     *
     * @param string $actionType
     * @return self
     */
    public function setActionType($actionType)
    {
        $this->actionType = $actionType;
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
     * Gets as isMandatory
     *
     * @return bool
     */
    public function getIsMandatory()
    {
        return $this->isMandatory;
    }

    /**
     * Sets a new isMandatory
     *
     * @param bool $isMandatory
     * @return self
     */
    public function setIsMandatory($isMandatory)
    {
        $this->isMandatory = $isMandatory;
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
     * Gets as loggedTime
     *
     * @return \DateTime
     */
    public function getLoggedTime()
    {
        return $this->loggedTime;
    }

    /**
     * Sets a new loggedTime
     *
     * @param \DateTime $loggedTime
     * @return self
     */
    public function setLoggedTime(\DateTime $loggedTime)
    {
        $this->loggedTime = $loggedTime;
        return $this;
    }

    /**
     * Gets as parentRecord
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AccountType
     */
    public function getParentRecord()
    {
        return $this->parentRecord;
    }

    /**
     * Sets a new parentRecord
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AccountType $parentRecord
     * @return self
     */
    public function setParentRecord(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\AccountType $parentRecord)
    {
        $this->parentRecord = $parentRecord;
        return $this;
    }

    /**
     * Gets as parentRecordId
     *
     * @return string
     */
    public function getParentRecordId()
    {
        return $this->parentRecordId;
    }

    /**
     * Sets a new parentRecordId
     *
     * @param string $parentRecordId
     * @return self
     */
    public function setParentRecordId($parentRecordId)
    {
        $this->parentRecordId = $parentRecordId;
        return $this;
    }

    /**
     * Gets as pinned
     *
     * @return string
     */
    public function getPinned()
    {
        return $this->pinned;
    }

    /**
     * Sets a new pinned
     *
     * @param string $pinned
     * @return self
     */
    public function setPinned($pinned)
    {
        $this->pinned = $pinned;
        return $this;
    }

    /**
     * Gets as recordActionId
     *
     * @return string
     */
    public function getRecordActionId()
    {
        return $this->recordActionId;
    }

    /**
     * Sets a new recordActionId
     *
     * @param string $recordActionId
     * @return self
     */
    public function setRecordActionId($recordActionId)
    {
        $this->recordActionId = $recordActionId;
        return $this;
    }

    /**
     * Gets as state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Sets a new state
     *
     * @param string $state
     * @return self
     */
    public function setState($state)
    {
        $this->state = $state;
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
     * Gets as user
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Sets a new user
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $user
     * @return self
     */
    public function setUser(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * Gets as userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Sets a new userId
     *
     * @param string $userId
     * @return self
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }


}

