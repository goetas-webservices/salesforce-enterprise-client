<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing HolidayType
 *
 *
 * XSD Type: Holiday
 */
class HolidayType extends SObjectType
{

    /**
     * @property \DateTime $activityDate
     */
    private $activityDate = null;

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
     * @property string $description
     */
    private $description = null;

    /**
     * @property int $endTimeInMinutes
     */
    private $endTimeInMinutes = null;

    /**
     * @property bool $isAllDay
     */
    private $isAllDay = null;

    /**
     * @property bool $isRecurrence
     */
    private $isRecurrence = null;

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
     * @property int $recurrenceDayOfMonth
     */
    private $recurrenceDayOfMonth = null;

    /**
     * @property int $recurrenceDayOfWeekMask
     */
    private $recurrenceDayOfWeekMask = null;

    /**
     * @property \DateTime $recurrenceEndDateOnly
     */
    private $recurrenceEndDateOnly = null;

    /**
     * @property string $recurrenceInstance
     */
    private $recurrenceInstance = null;

    /**
     * @property int $recurrenceInterval
     */
    private $recurrenceInterval = null;

    /**
     * @property string $recurrenceMonthOfYear
     */
    private $recurrenceMonthOfYear = null;

    /**
     * @property \DateTime $recurrenceStartDate
     */
    private $recurrenceStartDate = null;

    /**
     * @property string $recurrenceType
     */
    private $recurrenceType = null;

    /**
     * @property int $startTimeInMinutes
     */
    private $startTimeInMinutes = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * Gets as activityDate
     *
     * @return \DateTime
     */
    public function getActivityDate()
    {
        return $this->activityDate;
    }

    /**
     * Sets a new activityDate
     *
     * @param \DateTime $activityDate
     * @return self
     */
    public function setActivityDate(\DateTime $activityDate)
    {
        $this->activityDate = $activityDate;
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
     * Gets as description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as endTimeInMinutes
     *
     * @return int
     */
    public function getEndTimeInMinutes()
    {
        return $this->endTimeInMinutes;
    }

    /**
     * Sets a new endTimeInMinutes
     *
     * @param int $endTimeInMinutes
     * @return self
     */
    public function setEndTimeInMinutes($endTimeInMinutes)
    {
        $this->endTimeInMinutes = $endTimeInMinutes;
        return $this;
    }

    /**
     * Gets as isAllDay
     *
     * @return bool
     */
    public function getIsAllDay()
    {
        return $this->isAllDay;
    }

    /**
     * Sets a new isAllDay
     *
     * @param bool $isAllDay
     * @return self
     */
    public function setIsAllDay($isAllDay)
    {
        $this->isAllDay = $isAllDay;
        return $this;
    }

    /**
     * Gets as isRecurrence
     *
     * @return bool
     */
    public function getIsRecurrence()
    {
        return $this->isRecurrence;
    }

    /**
     * Sets a new isRecurrence
     *
     * @param bool $isRecurrence
     * @return self
     */
    public function setIsRecurrence($isRecurrence)
    {
        $this->isRecurrence = $isRecurrence;
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
     * Gets as recurrenceDayOfMonth
     *
     * @return int
     */
    public function getRecurrenceDayOfMonth()
    {
        return $this->recurrenceDayOfMonth;
    }

    /**
     * Sets a new recurrenceDayOfMonth
     *
     * @param int $recurrenceDayOfMonth
     * @return self
     */
    public function setRecurrenceDayOfMonth($recurrenceDayOfMonth)
    {
        $this->recurrenceDayOfMonth = $recurrenceDayOfMonth;
        return $this;
    }

    /**
     * Gets as recurrenceDayOfWeekMask
     *
     * @return int
     */
    public function getRecurrenceDayOfWeekMask()
    {
        return $this->recurrenceDayOfWeekMask;
    }

    /**
     * Sets a new recurrenceDayOfWeekMask
     *
     * @param int $recurrenceDayOfWeekMask
     * @return self
     */
    public function setRecurrenceDayOfWeekMask($recurrenceDayOfWeekMask)
    {
        $this->recurrenceDayOfWeekMask = $recurrenceDayOfWeekMask;
        return $this;
    }

    /**
     * Gets as recurrenceEndDateOnly
     *
     * @return \DateTime
     */
    public function getRecurrenceEndDateOnly()
    {
        return $this->recurrenceEndDateOnly;
    }

    /**
     * Sets a new recurrenceEndDateOnly
     *
     * @param \DateTime $recurrenceEndDateOnly
     * @return self
     */
    public function setRecurrenceEndDateOnly(\DateTime $recurrenceEndDateOnly)
    {
        $this->recurrenceEndDateOnly = $recurrenceEndDateOnly;
        return $this;
    }

    /**
     * Gets as recurrenceInstance
     *
     * @return string
     */
    public function getRecurrenceInstance()
    {
        return $this->recurrenceInstance;
    }

    /**
     * Sets a new recurrenceInstance
     *
     * @param string $recurrenceInstance
     * @return self
     */
    public function setRecurrenceInstance($recurrenceInstance)
    {
        $this->recurrenceInstance = $recurrenceInstance;
        return $this;
    }

    /**
     * Gets as recurrenceInterval
     *
     * @return int
     */
    public function getRecurrenceInterval()
    {
        return $this->recurrenceInterval;
    }

    /**
     * Sets a new recurrenceInterval
     *
     * @param int $recurrenceInterval
     * @return self
     */
    public function setRecurrenceInterval($recurrenceInterval)
    {
        $this->recurrenceInterval = $recurrenceInterval;
        return $this;
    }

    /**
     * Gets as recurrenceMonthOfYear
     *
     * @return string
     */
    public function getRecurrenceMonthOfYear()
    {
        return $this->recurrenceMonthOfYear;
    }

    /**
     * Sets a new recurrenceMonthOfYear
     *
     * @param string $recurrenceMonthOfYear
     * @return self
     */
    public function setRecurrenceMonthOfYear($recurrenceMonthOfYear)
    {
        $this->recurrenceMonthOfYear = $recurrenceMonthOfYear;
        return $this;
    }

    /**
     * Gets as recurrenceStartDate
     *
     * @return \DateTime
     */
    public function getRecurrenceStartDate()
    {
        return $this->recurrenceStartDate;
    }

    /**
     * Sets a new recurrenceStartDate
     *
     * @param \DateTime $recurrenceStartDate
     * @return self
     */
    public function setRecurrenceStartDate(\DateTime $recurrenceStartDate)
    {
        $this->recurrenceStartDate = $recurrenceStartDate;
        return $this;
    }

    /**
     * Gets as recurrenceType
     *
     * @return string
     */
    public function getRecurrenceType()
    {
        return $this->recurrenceType;
    }

    /**
     * Sets a new recurrenceType
     *
     * @param string $recurrenceType
     * @return self
     */
    public function setRecurrenceType($recurrenceType)
    {
        $this->recurrenceType = $recurrenceType;
        return $this;
    }

    /**
     * Gets as startTimeInMinutes
     *
     * @return int
     */
    public function getStartTimeInMinutes()
    {
        return $this->startTimeInMinutes;
    }

    /**
     * Sets a new startTimeInMinutes
     *
     * @param int $startTimeInMinutes
     * @return self
     */
    public function setStartTimeInMinutes($startTimeInMinutes)
    {
        $this->startTimeInMinutes = $startTimeInMinutes;
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

