<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing LightningUsageByPageMetricsType
 *
 *
 * XSD Type: LightningUsageByPageMetrics
 */
class LightningUsageByPageMetricsType extends SObjectType
{

    /**
     * @property int $eptBin3To5
     */
    private $eptBin3To5 = null;

    /**
     * @property int $eptBin5To8
     */
    private $eptBin5To8 = null;

    /**
     * @property int $eptBin8To10
     */
    private $eptBin8To10 = null;

    /**
     * @property int $eptBinOver10
     */
    private $eptBinOver10 = null;

    /**
     * @property int $eptBinUnder3
     */
    private $eptBinUnder3 = null;

    /**
     * @property \DateTime $metricsDate
     */
    private $metricsDate = null;

    /**
     * @property string $pageName
     */
    private $pageName = null;

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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $user
     */
    private $user = null;

    /**
     * @property string $userId
     */
    private $userId = null;

    /**
     * Gets as eptBin3To5
     *
     * @return int
     */
    public function getEptBin3To5()
    {
        return $this->eptBin3To5;
    }

    /**
     * Sets a new eptBin3To5
     *
     * @param int $eptBin3To5
     * @return self
     */
    public function setEptBin3To5($eptBin3To5)
    {
        $this->eptBin3To5 = $eptBin3To5;
        return $this;
    }

    /**
     * Gets as eptBin5To8
     *
     * @return int
     */
    public function getEptBin5To8()
    {
        return $this->eptBin5To8;
    }

    /**
     * Sets a new eptBin5To8
     *
     * @param int $eptBin5To8
     * @return self
     */
    public function setEptBin5To8($eptBin5To8)
    {
        $this->eptBin5To8 = $eptBin5To8;
        return $this;
    }

    /**
     * Gets as eptBin8To10
     *
     * @return int
     */
    public function getEptBin8To10()
    {
        return $this->eptBin8To10;
    }

    /**
     * Sets a new eptBin8To10
     *
     * @param int $eptBin8To10
     * @return self
     */
    public function setEptBin8To10($eptBin8To10)
    {
        $this->eptBin8To10 = $eptBin8To10;
        return $this;
    }

    /**
     * Gets as eptBinOver10
     *
     * @return int
     */
    public function getEptBinOver10()
    {
        return $this->eptBinOver10;
    }

    /**
     * Sets a new eptBinOver10
     *
     * @param int $eptBinOver10
     * @return self
     */
    public function setEptBinOver10($eptBinOver10)
    {
        $this->eptBinOver10 = $eptBinOver10;
        return $this;
    }

    /**
     * Gets as eptBinUnder3
     *
     * @return int
     */
    public function getEptBinUnder3()
    {
        return $this->eptBinUnder3;
    }

    /**
     * Sets a new eptBinUnder3
     *
     * @param int $eptBinUnder3
     * @return self
     */
    public function setEptBinUnder3($eptBinUnder3)
    {
        $this->eptBinUnder3 = $eptBinUnder3;
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
     * Gets as pageName
     *
     * @return string
     */
    public function getPageName()
    {
        return $this->pageName;
    }

    /**
     * Sets a new pageName
     *
     * @param string $pageName
     * @return self
     */
    public function setPageName($pageName)
    {
        $this->pageName = $pageName;
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

    /**
     * Gets as user
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Sets a new user
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $user
     * @return self
     */
    public function setUser(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $user)
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

