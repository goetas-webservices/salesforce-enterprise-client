<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing EmailStatusType
 *
 *
 * XSD Type: EmailStatus
 */
class EmailStatusType extends SObjectType
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
     * @property string $emailTemplateName
     */
    private $emailTemplateName = null;

    /**
     * @property \DateTime $firstOpenDate
     */
    private $firstOpenDate = null;

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
     * @property \DateTime $lastOpenDate
     */
    private $lastOpenDate = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\TaskType $task
     */
    private $task = null;

    /**
     * @property string $taskId
     */
    private $taskId = null;

    /**
     * @property int $timesOpened
     */
    private $timesOpened = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $who
     */
    private $who = null;

    /**
     * @property string $whoId
     */
    private $whoId = null;

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
     * Gets as emailTemplateName
     *
     * @return string
     */
    public function getEmailTemplateName()
    {
        return $this->emailTemplateName;
    }

    /**
     * Sets a new emailTemplateName
     *
     * @param string $emailTemplateName
     * @return self
     */
    public function setEmailTemplateName($emailTemplateName)
    {
        $this->emailTemplateName = $emailTemplateName;
        return $this;
    }

    /**
     * Gets as firstOpenDate
     *
     * @return \DateTime
     */
    public function getFirstOpenDate()
    {
        return $this->firstOpenDate;
    }

    /**
     * Sets a new firstOpenDate
     *
     * @param \DateTime $firstOpenDate
     * @return self
     */
    public function setFirstOpenDate(\DateTime $firstOpenDate)
    {
        $this->firstOpenDate = $firstOpenDate;
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
     * Gets as lastOpenDate
     *
     * @return \DateTime
     */
    public function getLastOpenDate()
    {
        return $this->lastOpenDate;
    }

    /**
     * Sets a new lastOpenDate
     *
     * @param \DateTime $lastOpenDate
     * @return self
     */
    public function setLastOpenDate(\DateTime $lastOpenDate)
    {
        $this->lastOpenDate = $lastOpenDate;
        return $this;
    }

    /**
     * Gets as task
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\TaskType
     */
    public function getTask()
    {
        return $this->task;
    }

    /**
     * Sets a new task
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\TaskType $task
     * @return self
     */
    public function setTask(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\TaskType $task)
    {
        $this->task = $task;
        return $this;
    }

    /**
     * Gets as taskId
     *
     * @return string
     */
    public function getTaskId()
    {
        return $this->taskId;
    }

    /**
     * Sets a new taskId
     *
     * @param string $taskId
     * @return self
     */
    public function setTaskId($taskId)
    {
        $this->taskId = $taskId;
        return $this;
    }

    /**
     * Gets as timesOpened
     *
     * @return int
     */
    public function getTimesOpened()
    {
        return $this->timesOpened;
    }

    /**
     * Sets a new timesOpened
     *
     * @param int $timesOpened
     * @return self
     */
    public function setTimesOpened($timesOpened)
    {
        $this->timesOpened = $timesOpened;
        return $this;
    }

    /**
     * Gets as who
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType
     */
    public function getWho()
    {
        return $this->who;
    }

    /**
     * Sets a new who
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $who
     * @return self
     */
    public function setWho(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $who)
    {
        $this->who = $who;
        return $this;
    }

    /**
     * Gets as whoId
     *
     * @return string
     */
    public function getWhoId()
    {
        return $this->whoId;
    }

    /**
     * Sets a new whoId
     *
     * @param string $whoId
     * @return self
     */
    public function setWhoId($whoId)
    {
        $this->whoId = $whoId;
        return $this;
    }


}

