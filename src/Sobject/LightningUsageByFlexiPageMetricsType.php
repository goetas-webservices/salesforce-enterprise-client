<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing LightningUsageByFlexiPageMetricsType
 *
 *
 * XSD Type: LightningUsageByFlexiPageMetrics
 */
class LightningUsageByFlexiPageMetricsType extends SObjectType
{

    /**
     * @property string $flexiPageNameOrId
     */
    private $flexiPageNameOrId = null;

    /**
     * @property string $flexiPageType
     */
    private $flexiPageType = null;

    /**
     * @property \DateTime $metricsDate
     */
    private $metricsDate = null;

    /**
     * @property int $recordCountEPT
     */
    private $recordCountEPT = null;

    /**
     * @property int $sumEPT
     */
    private $sumEPT = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property int $totalCount
     */
    private $totalCount = null;

    /**
     * Gets as flexiPageNameOrId
     *
     * @return string
     */
    public function getFlexiPageNameOrId()
    {
        return $this->flexiPageNameOrId;
    }

    /**
     * Sets a new flexiPageNameOrId
     *
     * @param string $flexiPageNameOrId
     * @return self
     */
    public function setFlexiPageNameOrId($flexiPageNameOrId)
    {
        $this->flexiPageNameOrId = $flexiPageNameOrId;
        return $this;
    }

    /**
     * Gets as flexiPageType
     *
     * @return string
     */
    public function getFlexiPageType()
    {
        return $this->flexiPageType;
    }

    /**
     * Sets a new flexiPageType
     *
     * @param string $flexiPageType
     * @return self
     */
    public function setFlexiPageType($flexiPageType)
    {
        $this->flexiPageType = $flexiPageType;
        return $this;
    }

    /**
     * Gets as metricsDate
     *
     * @return \DateTime
     */
    public function getMetricsDate()
    {
        return $this->metricsDate;
    }

    /**
     * Sets a new metricsDate
     *
     * @param \DateTime $metricsDate
     * @return self
     */
    public function setMetricsDate(\DateTime $metricsDate)
    {
        $this->metricsDate = $metricsDate;
        return $this;
    }

    /**
     * Gets as recordCountEPT
     *
     * @return int
     */
    public function getRecordCountEPT()
    {
        return $this->recordCountEPT;
    }

    /**
     * Sets a new recordCountEPT
     *
     * @param int $recordCountEPT
     * @return self
     */
    public function setRecordCountEPT($recordCountEPT)
    {
        $this->recordCountEPT = $recordCountEPT;
        return $this;
    }

    /**
     * Gets as sumEPT
     *
     * @return int
     */
    public function getSumEPT()
    {
        return $this->sumEPT;
    }

    /**
     * Sets a new sumEPT
     *
     * @param int $sumEPT
     * @return self
     */
    public function setSumEPT($sumEPT)
    {
        $this->sumEPT = $sumEPT;
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
     * Gets as totalCount
     *
     * @return int
     */
    public function getTotalCount()
    {
        return $this->totalCount;
    }

    /**
     * Sets a new totalCount
     *
     * @param int $totalCount
     * @return self
     */
    public function setTotalCount($totalCount)
    {
        $this->totalCount = $totalCount;
        return $this;
    }


}

