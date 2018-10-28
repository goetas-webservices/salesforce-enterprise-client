<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing BusinessHoursType
 *
 *
 * XSD Type: BusinessHours
 */
class BusinessHoursType extends SObjectType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $cases
     */
    private $cases = null;

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
     * @property \DateTime $fridayEndTime
     */
    private $fridayEndTime = null;

    /**
     * @property \DateTime $fridayStartTime
     */
    private $fridayStartTime = null;

    /**
     * @property bool $isActive
     */
    private $isActive = null;

    /**
     * @property bool $isDefault
     */
    private $isDefault = null;

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
     * @property \DateTime $lastViewedDate
     */
    private $lastViewedDate = null;

    /**
     * @property \DateTime $mondayEndTime
     */
    private $mondayEndTime = null;

    /**
     * @property \DateTime $mondayStartTime
     */
    private $mondayStartTime = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property \DateTime $saturdayEndTime
     */
    private $saturdayEndTime = null;

    /**
     * @property \DateTime $saturdayStartTime
     */
    private $saturdayStartTime = null;

    /**
     * @property \DateTime $sundayEndTime
     */
    private $sundayEndTime = null;

    /**
     * @property \DateTime $sundayStartTime
     */
    private $sundayStartTime = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property \DateTime $thursdayEndTime
     */
    private $thursdayEndTime = null;

    /**
     * @property \DateTime $thursdayStartTime
     */
    private $thursdayStartTime = null;

    /**
     * @property string $timeZoneSidKey
     */
    private $timeZoneSidKey = null;

    /**
     * @property \DateTime $tuesdayEndTime
     */
    private $tuesdayEndTime = null;

    /**
     * @property \DateTime $tuesdayStartTime
     */
    private $tuesdayStartTime = null;

    /**
     * @property \DateTime $wednesdayEndTime
     */
    private $wednesdayEndTime = null;

    /**
     * @property \DateTime $wednesdayStartTime
     */
    private $wednesdayStartTime = null;

    /**
     * Gets as cases
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getCases()
    {
        return $this->cases;
    }

    /**
     * Sets a new cases
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $cases
     * @return self
     */
    public function setCases(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $cases)
    {
        $this->cases = $cases;
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
     * Gets as fridayEndTime
     *
     * @return \DateTime
     */
    public function getFridayEndTime()
    {
        return $this->fridayEndTime;
    }

    /**
     * Sets a new fridayEndTime
     *
     * @param \DateTime $fridayEndTime
     * @return self
     */
    public function setFridayEndTime(\DateTime $fridayEndTime)
    {
        $this->fridayEndTime = $fridayEndTime;
        return $this;
    }

    /**
     * Gets as fridayStartTime
     *
     * @return \DateTime
     */
    public function getFridayStartTime()
    {
        return $this->fridayStartTime;
    }

    /**
     * Sets a new fridayStartTime
     *
     * @param \DateTime $fridayStartTime
     * @return self
     */
    public function setFridayStartTime(\DateTime $fridayStartTime)
    {
        $this->fridayStartTime = $fridayStartTime;
        return $this;
    }

    /**
     * Gets as isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Sets a new isActive
     *
     * @param bool $isActive
     * @return self
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * Gets as isDefault
     *
     * @return bool
     */
    public function getIsDefault()
    {
        return $this->isDefault;
    }

    /**
     * Sets a new isDefault
     *
     * @param bool $isDefault
     * @return self
     */
    public function setIsDefault($isDefault)
    {
        $this->isDefault = $isDefault;
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
     * Gets as lastViewedDate
     *
     * @return \DateTime
     */
    public function getLastViewedDate()
    {
        return $this->lastViewedDate;
    }

    /**
     * Sets a new lastViewedDate
     *
     * @param \DateTime $lastViewedDate
     * @return self
     */
    public function setLastViewedDate(\DateTime $lastViewedDate)
    {
        $this->lastViewedDate = $lastViewedDate;
        return $this;
    }

    /**
     * Gets as mondayEndTime
     *
     * @return \DateTime
     */
    public function getMondayEndTime()
    {
        return $this->mondayEndTime;
    }

    /**
     * Sets a new mondayEndTime
     *
     * @param \DateTime $mondayEndTime
     * @return self
     */
    public function setMondayEndTime(\DateTime $mondayEndTime)
    {
        $this->mondayEndTime = $mondayEndTime;
        return $this;
    }

    /**
     * Gets as mondayStartTime
     *
     * @return \DateTime
     */
    public function getMondayStartTime()
    {
        return $this->mondayStartTime;
    }

    /**
     * Sets a new mondayStartTime
     *
     * @param \DateTime $mondayStartTime
     * @return self
     */
    public function setMondayStartTime(\DateTime $mondayStartTime)
    {
        $this->mondayStartTime = $mondayStartTime;
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
     * Gets as saturdayEndTime
     *
     * @return \DateTime
     */
    public function getSaturdayEndTime()
    {
        return $this->saturdayEndTime;
    }

    /**
     * Sets a new saturdayEndTime
     *
     * @param \DateTime $saturdayEndTime
     * @return self
     */
    public function setSaturdayEndTime(\DateTime $saturdayEndTime)
    {
        $this->saturdayEndTime = $saturdayEndTime;
        return $this;
    }

    /**
     * Gets as saturdayStartTime
     *
     * @return \DateTime
     */
    public function getSaturdayStartTime()
    {
        return $this->saturdayStartTime;
    }

    /**
     * Sets a new saturdayStartTime
     *
     * @param \DateTime $saturdayStartTime
     * @return self
     */
    public function setSaturdayStartTime(\DateTime $saturdayStartTime)
    {
        $this->saturdayStartTime = $saturdayStartTime;
        return $this;
    }

    /**
     * Gets as sundayEndTime
     *
     * @return \DateTime
     */
    public function getSundayEndTime()
    {
        return $this->sundayEndTime;
    }

    /**
     * Sets a new sundayEndTime
     *
     * @param \DateTime $sundayEndTime
     * @return self
     */
    public function setSundayEndTime(\DateTime $sundayEndTime)
    {
        $this->sundayEndTime = $sundayEndTime;
        return $this;
    }

    /**
     * Gets as sundayStartTime
     *
     * @return \DateTime
     */
    public function getSundayStartTime()
    {
        return $this->sundayStartTime;
    }

    /**
     * Sets a new sundayStartTime
     *
     * @param \DateTime $sundayStartTime
     * @return self
     */
    public function setSundayStartTime(\DateTime $sundayStartTime)
    {
        $this->sundayStartTime = $sundayStartTime;
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
     * Gets as thursdayEndTime
     *
     * @return \DateTime
     */
    public function getThursdayEndTime()
    {
        return $this->thursdayEndTime;
    }

    /**
     * Sets a new thursdayEndTime
     *
     * @param \DateTime $thursdayEndTime
     * @return self
     */
    public function setThursdayEndTime(\DateTime $thursdayEndTime)
    {
        $this->thursdayEndTime = $thursdayEndTime;
        return $this;
    }

    /**
     * Gets as thursdayStartTime
     *
     * @return \DateTime
     */
    public function getThursdayStartTime()
    {
        return $this->thursdayStartTime;
    }

    /**
     * Sets a new thursdayStartTime
     *
     * @param \DateTime $thursdayStartTime
     * @return self
     */
    public function setThursdayStartTime(\DateTime $thursdayStartTime)
    {
        $this->thursdayStartTime = $thursdayStartTime;
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
     * Gets as tuesdayEndTime
     *
     * @return \DateTime
     */
    public function getTuesdayEndTime()
    {
        return $this->tuesdayEndTime;
    }

    /**
     * Sets a new tuesdayEndTime
     *
     * @param \DateTime $tuesdayEndTime
     * @return self
     */
    public function setTuesdayEndTime(\DateTime $tuesdayEndTime)
    {
        $this->tuesdayEndTime = $tuesdayEndTime;
        return $this;
    }

    /**
     * Gets as tuesdayStartTime
     *
     * @return \DateTime
     */
    public function getTuesdayStartTime()
    {
        return $this->tuesdayStartTime;
    }

    /**
     * Sets a new tuesdayStartTime
     *
     * @param \DateTime $tuesdayStartTime
     * @return self
     */
    public function setTuesdayStartTime(\DateTime $tuesdayStartTime)
    {
        $this->tuesdayStartTime = $tuesdayStartTime;
        return $this;
    }

    /**
     * Gets as wednesdayEndTime
     *
     * @return \DateTime
     */
    public function getWednesdayEndTime()
    {
        return $this->wednesdayEndTime;
    }

    /**
     * Sets a new wednesdayEndTime
     *
     * @param \DateTime $wednesdayEndTime
     * @return self
     */
    public function setWednesdayEndTime(\DateTime $wednesdayEndTime)
    {
        $this->wednesdayEndTime = $wednesdayEndTime;
        return $this;
    }

    /**
     * Gets as wednesdayStartTime
     *
     * @return \DateTime
     */
    public function getWednesdayStartTime()
    {
        return $this->wednesdayStartTime;
    }

    /**
     * Sets a new wednesdayStartTime
     *
     * @param \DateTime $wednesdayStartTime
     * @return self
     */
    public function setWednesdayStartTime(\DateTime $wednesdayStartTime)
    {
        $this->wednesdayStartTime = $wednesdayStartTime;
        return $this;
    }


}

