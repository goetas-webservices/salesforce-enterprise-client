<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing FiscalYearSettingsType
 *
 *
 * XSD Type: FiscalYearSettings
 */
class FiscalYearSettingsType extends SObjectType
{

    /**
     * @property string $description
     */
    private $description = null;

    /**
     * @property \DateTime $endDate
     */
    private $endDate = null;

    /**
     * @property bool $isStandardYear
     */
    private $isStandardYear = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $periodId
     */
    private $periodId = null;

    /**
     * @property string $periodLabelScheme
     */
    private $periodLabelScheme = null;

    /**
     * @property string $periodPrefix
     */
    private $periodPrefix = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $periods
     */
    private $periods = null;

    /**
     * @property string $quarterLabelScheme
     */
    private $quarterLabelScheme = null;

    /**
     * @property string $quarterPrefix
     */
    private $quarterPrefix = null;

    /**
     * @property \DateTime $startDate
     */
    private $startDate = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property string $weekLabelScheme
     */
    private $weekLabelScheme = null;

    /**
     * @property int $weekStartDay
     */
    private $weekStartDay = null;

    /**
     * @property string $yearType
     */
    private $yearType = null;

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
     * Gets as endDate
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Sets a new endDate
     *
     * @param \DateTime $endDate
     * @return self
     */
    public function setEndDate(\DateTime $endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * Gets as isStandardYear
     *
     * @return bool
     */
    public function getIsStandardYear()
    {
        return $this->isStandardYear;
    }

    /**
     * Sets a new isStandardYear
     *
     * @param bool $isStandardYear
     * @return self
     */
    public function setIsStandardYear($isStandardYear)
    {
        $this->isStandardYear = $isStandardYear;
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
     * Gets as periodId
     *
     * @return string
     */
    public function getPeriodId()
    {
        return $this->periodId;
    }

    /**
     * Sets a new periodId
     *
     * @param string $periodId
     * @return self
     */
    public function setPeriodId($periodId)
    {
        $this->periodId = $periodId;
        return $this;
    }

    /**
     * Gets as periodLabelScheme
     *
     * @return string
     */
    public function getPeriodLabelScheme()
    {
        return $this->periodLabelScheme;
    }

    /**
     * Sets a new periodLabelScheme
     *
     * @param string $periodLabelScheme
     * @return self
     */
    public function setPeriodLabelScheme($periodLabelScheme)
    {
        $this->periodLabelScheme = $periodLabelScheme;
        return $this;
    }

    /**
     * Gets as periodPrefix
     *
     * @return string
     */
    public function getPeriodPrefix()
    {
        return $this->periodPrefix;
    }

    /**
     * Sets a new periodPrefix
     *
     * @param string $periodPrefix
     * @return self
     */
    public function setPeriodPrefix($periodPrefix)
    {
        $this->periodPrefix = $periodPrefix;
        return $this;
    }

    /**
     * Gets as periods
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getPeriods()
    {
        return $this->periods;
    }

    /**
     * Sets a new periods
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $periods
     * @return self
     */
    public function setPeriods(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $periods)
    {
        $this->periods = $periods;
        return $this;
    }

    /**
     * Gets as quarterLabelScheme
     *
     * @return string
     */
    public function getQuarterLabelScheme()
    {
        return $this->quarterLabelScheme;
    }

    /**
     * Sets a new quarterLabelScheme
     *
     * @param string $quarterLabelScheme
     * @return self
     */
    public function setQuarterLabelScheme($quarterLabelScheme)
    {
        $this->quarterLabelScheme = $quarterLabelScheme;
        return $this;
    }

    /**
     * Gets as quarterPrefix
     *
     * @return string
     */
    public function getQuarterPrefix()
    {
        return $this->quarterPrefix;
    }

    /**
     * Sets a new quarterPrefix
     *
     * @param string $quarterPrefix
     * @return self
     */
    public function setQuarterPrefix($quarterPrefix)
    {
        $this->quarterPrefix = $quarterPrefix;
        return $this;
    }

    /**
     * Gets as startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets a new startDate
     *
     * @param \DateTime $startDate
     * @return self
     */
    public function setStartDate(\DateTime $startDate)
    {
        $this->startDate = $startDate;
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
     * Gets as weekLabelScheme
     *
     * @return string
     */
    public function getWeekLabelScheme()
    {
        return $this->weekLabelScheme;
    }

    /**
     * Sets a new weekLabelScheme
     *
     * @param string $weekLabelScheme
     * @return self
     */
    public function setWeekLabelScheme($weekLabelScheme)
    {
        $this->weekLabelScheme = $weekLabelScheme;
        return $this;
    }

    /**
     * Gets as weekStartDay
     *
     * @return int
     */
    public function getWeekStartDay()
    {
        return $this->weekStartDay;
    }

    /**
     * Sets a new weekStartDay
     *
     * @param int $weekStartDay
     * @return self
     */
    public function setWeekStartDay($weekStartDay)
    {
        $this->weekStartDay = $weekStartDay;
        return $this;
    }

    /**
     * Gets as yearType
     *
     * @return string
     */
    public function getYearType()
    {
        return $this->yearType;
    }

    /**
     * Sets a new yearType
     *
     * @param string $yearType
     * @return self
     */
    public function setYearType($yearType)
    {
        $this->yearType = $yearType;
        return $this;
    }


}

