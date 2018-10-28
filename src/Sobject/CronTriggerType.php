<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing CronTriggerType
 *
 *
 * XSD Type: CronTrigger
 */
class CronTriggerType extends SObjectType
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
     * @property string $cronExpression
     */
    private $cronExpression = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\CronJobDetailType $cronJobDetail
     */
    private $cronJobDetail = null;

    /**
     * @property string $cronJobDetailId
     */
    private $cronJobDetailId = null;

    /**
     * @property \DateTime $endTime
     */
    private $endTime = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $lastModifiedBy
     */
    private $lastModifiedBy = null;

    /**
     * @property string $lastModifiedById
     */
    private $lastModifiedById = null;

    /**
     * @property \DateTime $nextFireTime
     */
    private $nextFireTime = null;

    /**
     * @property string $ownerId
     */
    private $ownerId = null;

    /**
     * @property \DateTime $previousFireTime
     */
    private $previousFireTime = null;

    /**
     * @property \DateTime $startTime
     */
    private $startTime = null;

    /**
     * @property string $state
     */
    private $state = null;

    /**
     * @property string $timeZoneSidKey
     */
    private $timeZoneSidKey = null;

    /**
     * @property int $timesTriggered
     */
    private $timesTriggered = null;

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
     * Gets as cronExpression
     *
     * @return string
     */
    public function getCronExpression()
    {
        return $this->cronExpression;
    }

    /**
     * Sets a new cronExpression
     *
     * @param string $cronExpression
     * @return self
     */
    public function setCronExpression($cronExpression)
    {
        $this->cronExpression = $cronExpression;
        return $this;
    }

    /**
     * Gets as cronJobDetail
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\CronJobDetailType
     */
    public function getCronJobDetail()
    {
        return $this->cronJobDetail;
    }

    /**
     * Sets a new cronJobDetail
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\CronJobDetailType $cronJobDetail
     * @return self
     */
    public function setCronJobDetail(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\CronJobDetailType $cronJobDetail)
    {
        $this->cronJobDetail = $cronJobDetail;
        return $this;
    }

    /**
     * Gets as cronJobDetailId
     *
     * @return string
     */
    public function getCronJobDetailId()
    {
        return $this->cronJobDetailId;
    }

    /**
     * Sets a new cronJobDetailId
     *
     * @param string $cronJobDetailId
     * @return self
     */
    public function setCronJobDetailId($cronJobDetailId)
    {
        $this->cronJobDetailId = $cronJobDetailId;
        return $this;
    }

    /**
     * Gets as endTime
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Sets a new endTime
     *
     * @param \DateTime $endTime
     * @return self
     */
    public function setEndTime(\DateTime $endTime)
    {
        $this->endTime = $endTime;
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
     * Gets as nextFireTime
     *
     * @return \DateTime
     */
    public function getNextFireTime()
    {
        return $this->nextFireTime;
    }

    /**
     * Sets a new nextFireTime
     *
     * @param \DateTime $nextFireTime
     * @return self
     */
    public function setNextFireTime(\DateTime $nextFireTime)
    {
        $this->nextFireTime = $nextFireTime;
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
     * Gets as previousFireTime
     *
     * @return \DateTime
     */
    public function getPreviousFireTime()
    {
        return $this->previousFireTime;
    }

    /**
     * Sets a new previousFireTime
     *
     * @param \DateTime $previousFireTime
     * @return self
     */
    public function setPreviousFireTime(\DateTime $previousFireTime)
    {
        $this->previousFireTime = $previousFireTime;
        return $this;
    }

    /**
     * Gets as startTime
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Sets a new startTime
     *
     * @param \DateTime $startTime
     * @return self
     */
    public function setStartTime(\DateTime $startTime)
    {
        $this->startTime = $startTime;
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
     * Gets as timeZoneSidKey
     *
     * @return string
     */
    public function getTimeZoneSidKey()
    {
        return $this->timeZoneSidKey;
    }

    /**
     * Sets a new timeZoneSidKey
     *
     * @param string $timeZoneSidKey
     * @return self
     */
    public function setTimeZoneSidKey($timeZoneSidKey)
    {
        $this->timeZoneSidKey = $timeZoneSidKey;
        return $this;
    }

    /**
     * Gets as timesTriggered
     *
     * @return int
     */
    public function getTimesTriggered()
    {
        return $this->timesTriggered;
    }

    /**
     * Sets a new timesTriggered
     *
     * @param int $timesTriggered
     * @return self
     */
    public function setTimesTriggered($timesTriggered)
    {
        $this->timesTriggered = $timesTriggered;
        return $this;
    }


}

