<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing PeriodType
 *
 *
 * XSD Type: Period
 */
class PeriodType extends SObjectType
{

    /**
     * @property \DateTime $endDate
     */
    private $endDate = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\FiscalYearSettingsType $fiscalYearSettings
     */
    private $fiscalYearSettings = null;

    /**
     * @property string $fiscalYearSettingsId
     */
    private $fiscalYearSettingsId = null;

    /**
     * @property string $fullyQualifiedLabel
     */
    private $fullyQualifiedLabel = null;

    /**
     * @property bool $isForecastPeriod
     */
    private $isForecastPeriod = null;

    /**
     * @property int $number
     */
    private $number = null;

    /**
     * @property string $periodLabel
     */
    private $periodLabel = null;

    /**
     * @property string $quarterLabel
     */
    private $quarterLabel = null;

    /**
     * @property \DateTime $startDate
     */
    private $startDate = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property string $type
     */
    private $type = null;

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
     * Gets as fiscalYearSettings
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\FiscalYearSettingsType
     */
    public function getFiscalYearSettings()
    {
        return $this->fiscalYearSettings;
    }

    /**
     * Sets a new fiscalYearSettings
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\FiscalYearSettingsType $fiscalYearSettings
     * @return self
     */
    public function setFiscalYearSettings(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\FiscalYearSettingsType $fiscalYearSettings)
    {
        $this->fiscalYearSettings = $fiscalYearSettings;
        return $this;
    }

    /**
     * Gets as fiscalYearSettingsId
     *
     * @return string
     */
    public function getFiscalYearSettingsId()
    {
        return $this->fiscalYearSettingsId;
    }

    /**
     * Sets a new fiscalYearSettingsId
     *
     * @param string $fiscalYearSettingsId
     * @return self
     */
    public function setFiscalYearSettingsId($fiscalYearSettingsId)
    {
        $this->fiscalYearSettingsId = $fiscalYearSettingsId;
        return $this;
    }

    /**
     * Gets as fullyQualifiedLabel
     *
     * @return string
     */
    public function getFullyQualifiedLabel()
    {
        return $this->fullyQualifiedLabel;
    }

    /**
     * Sets a new fullyQualifiedLabel
     *
     * @param string $fullyQualifiedLabel
     * @return self
     */
    public function setFullyQualifiedLabel($fullyQualifiedLabel)
    {
        $this->fullyQualifiedLabel = $fullyQualifiedLabel;
        return $this;
    }

    /**
     * Gets as isForecastPeriod
     *
     * @return bool
     */
    public function getIsForecastPeriod()
    {
        return $this->isForecastPeriod;
    }

    /**
     * Sets a new isForecastPeriod
     *
     * @param bool $isForecastPeriod
     * @return self
     */
    public function setIsForecastPeriod($isForecastPeriod)
    {
        $this->isForecastPeriod = $isForecastPeriod;
        return $this;
    }

    /**
     * Gets as number
     *
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * @param int $number
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * Gets as periodLabel
     *
     * @return string
     */
    public function getPeriodLabel()
    {
        return $this->periodLabel;
    }

    /**
     * Sets a new periodLabel
     *
     * @param string $periodLabel
     * @return self
     */
    public function setPeriodLabel($periodLabel)
    {
        $this->periodLabel = $periodLabel;
        return $this;
    }

    /**
     * Gets as quarterLabel
     *
     * @return string
     */
    public function getQuarterLabel()
    {
        return $this->quarterLabel;
    }

    /**
     * Sets a new quarterLabel
     *
     * @param string $quarterLabel
     * @return self
     */
    public function setQuarterLabel($quarterLabel)
    {
        $this->quarterLabel = $quarterLabel;
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
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }


}

