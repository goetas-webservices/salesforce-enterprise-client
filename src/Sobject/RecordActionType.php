<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing RecordActionType
 *
 *
 * XSD Type: RecordAction
 */
class RecordActionType extends SObjectType
{

    /**
     * @property string $actionDefinition
     */
    private $actionDefinition = null;

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
     * @property string $flowDefinition
     */
    private $flowDefinition = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\FlowInterviewType $flowInterview
     */
    private $flowInterview = null;

    /**
     * @property string $flowInterviewId
     */
    private $flowInterviewId = null;

    /**
     * @property bool $isDeleted
     */
    private $isDeleted = null;

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
     * @property int $order
     */
    private $order = null;

    /**
     * @property string $pinned
     */
    private $pinned = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AccountType $record
     */
    private $record = null;

    /**
     * @property string $recordId
     */
    private $recordId = null;

    /**
     * @property string $status
     */
    private $status = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserRecordAccessType $userRecordAccess
     */
    private $userRecordAccess = null;

    /**
     * Gets as actionDefinition
     *
     * @return string
     */
    public function getActionDefinition()
    {
        return $this->actionDefinition;
    }

    /**
     * Sets a new actionDefinition
     *
     * @param string $actionDefinition
     * @return self
     */
    public function setActionDefinition($actionDefinition)
    {
        $this->actionDefinition = $actionDefinition;
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
     * Gets as flowDefinition
     *
     * @return string
     */
    public function getFlowDefinition()
    {
        return $this->flowDefinition;
    }

    /**
     * Sets a new flowDefinition
     *
     * @param string $flowDefinition
     * @return self
     */
    public function setFlowDefinition($flowDefinition)
    {
        $this->flowDefinition = $flowDefinition;
        return $this;
    }

    /**
     * Gets as flowInterview
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\FlowInterviewType
     */
    public function getFlowInterview()
    {
        return $this->flowInterview;
    }

    /**
     * Sets a new flowInterview
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\FlowInterviewType $flowInterview
     * @return self
     */
    public function setFlowInterview(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\FlowInterviewType $flowInterview)
    {
        $this->flowInterview = $flowInterview;
        return $this;
    }

    /**
     * Gets as flowInterviewId
     *
     * @return string
     */
    public function getFlowInterviewId()
    {
        return $this->flowInterviewId;
    }

    /**
     * Sets a new flowInterviewId
     *
     * @param string $flowInterviewId
     * @return self
     */
    public function setFlowInterviewId($flowInterviewId)
    {
        $this->flowInterviewId = $flowInterviewId;
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
     * Gets as order
     *
     * @return int
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Sets a new order
     *
     * @param int $order
     * @return self
     */
    public function setOrder($order)
    {
        $this->order = $order;
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
     * Gets as record
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AccountType
     */
    public function getRecord()
    {
        return $this->record;
    }

    /**
     * Sets a new record
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AccountType $record
     * @return self
     */
    public function setRecord(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\AccountType $record)
    {
        $this->record = $record;
        return $this;
    }

    /**
     * Gets as recordId
     *
     * @return string
     */
    public function getRecordId()
    {
        return $this->recordId;
    }

    /**
     * Sets a new recordId
     *
     * @param string $recordId
     * @return self
     */
    public function setRecordId($recordId)
    {
        $this->recordId = $recordId;
        return $this;
    }

    /**
     * Gets as status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
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
     * Gets as userRecordAccess
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserRecordAccessType
     */
    public function getUserRecordAccess()
    {
        return $this->userRecordAccess;
    }

    /**
     * Sets a new userRecordAccess
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserRecordAccessType $userRecordAccess
     * @return self
     */
    public function setUserRecordAccess(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserRecordAccessType $userRecordAccess)
    {
        $this->userRecordAccess = $userRecordAccess;
        return $this;
    }


}

