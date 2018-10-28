<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing FlowInterviewType
 *
 *
 * XSD Type: FlowInterview
 */
class FlowInterviewType extends SObjectType
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
     * @property string $currentElement
     */
    private $currentElement = null;

    /**
     * @property string $guid
     */
    private $guid = null;

    /**
     * @property string $interviewLabel
     */
    private $interviewLabel = null;

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
     * @property string $name
     */
    private $name = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $owner
     */
    private $owner = null;

    /**
     * @property string $ownerId
     */
    private $ownerId = null;

    /**
     * @property string $pauseLabel
     */
    private $pauseLabel = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $recordActions
     */
    private $recordActions = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $recordRelations
     */
    private $recordRelations = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $stageRelations
     */
    private $stageRelations = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserRecordAccessType $userRecordAccess
     */
    private $userRecordAccess = null;

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
     * Gets as currentElement
     *
     * @return string
     */
    public function getCurrentElement()
    {
        return $this->currentElement;
    }

    /**
     * Sets a new currentElement
     *
     * @param string $currentElement
     * @return self
     */
    public function setCurrentElement($currentElement)
    {
        $this->currentElement = $currentElement;
        return $this;
    }

    /**
     * Gets as guid
     *
     * @return string
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * Sets a new guid
     *
     * @param string $guid
     * @return self
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;
        return $this;
    }

    /**
     * Gets as interviewLabel
     *
     * @return string
     */
    public function getInterviewLabel()
    {
        return $this->interviewLabel;
    }

    /**
     * Sets a new interviewLabel
     *
     * @param string $interviewLabel
     * @return self
     */
    public function setInterviewLabel($interviewLabel)
    {
        $this->interviewLabel = $interviewLabel;
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
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as owner
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Sets a new owner
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $owner
     * @return self
     */
    public function setOwner(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $owner)
    {
        $this->owner = $owner;
        return $this;
    }

    /**
     * Gets as ownerId
     *
     * @return string
     */
    public function getOwnerId()
    {
        return $this->ownerId;
    }

    /**
     * Sets a new ownerId
     *
     * @param string $ownerId
     * @return self
     */
    public function setOwnerId($ownerId)
    {
        $this->ownerId = $ownerId;
        return $this;
    }

    /**
     * Gets as pauseLabel
     *
     * @return string
     */
    public function getPauseLabel()
    {
        return $this->pauseLabel;
    }

    /**
     * Sets a new pauseLabel
     *
     * @param string $pauseLabel
     * @return self
     */
    public function setPauseLabel($pauseLabel)
    {
        $this->pauseLabel = $pauseLabel;
        return $this;
    }

    /**
     * Gets as recordActions
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getRecordActions()
    {
        return $this->recordActions;
    }

    /**
     * Sets a new recordActions
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $recordActions
     * @return self
     */
    public function setRecordActions(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $recordActions)
    {
        $this->recordActions = $recordActions;
        return $this;
    }

    /**
     * Gets as recordRelations
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getRecordRelations()
    {
        return $this->recordRelations;
    }

    /**
     * Sets a new recordRelations
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $recordRelations
     * @return self
     */
    public function setRecordRelations(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $recordRelations)
    {
        $this->recordRelations = $recordRelations;
        return $this;
    }

    /**
     * Gets as stageRelations
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getStageRelations()
    {
        return $this->stageRelations;
    }

    /**
     * Sets a new stageRelations
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $stageRelations
     * @return self
     */
    public function setStageRelations(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $stageRelations)
    {
        $this->stageRelations = $stageRelations;
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

