<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing VisualforceAccessMetricsType
 *
 *
 * XSD Type: VisualforceAccessMetrics
 */
class VisualforceAccessMetricsType extends SObjectType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ApexPageType $apexPage
     */
    private $apexPage = null;

    /**
     * @property string $apexPageId
     */
    private $apexPageId = null;

    /**
     * @property int $dailyPageViewCount
     */
    private $dailyPageViewCount = null;

    /**
     * @property \DateTime $logDate
     */
    private $logDate = null;

    /**
     * @property \DateTime $metricsDate
     */
    private $metricsDate = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ProfileType $profile
     */
    private $profile = null;

    /**
     * @property string $profileId
     */
    private $profileId = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * Gets as apexPage
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ApexPageType
     */
    public function getApexPage()
    {
        return $this->apexPage;
    }

    /**
     * Sets a new apexPage
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ApexPageType $apexPage
     * @return self
     */
    public function setApexPage(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\ApexPageType $apexPage)
    {
        $this->apexPage = $apexPage;
        return $this;
    }

    /**
     * Gets as apexPageId
     *
     * @return string
     */
    public function getApexPageId()
    {
        return $this->apexPageId;
    }

    /**
     * Sets a new apexPageId
     *
     * @param string $apexPageId
     * @return self
     */
    public function setApexPageId($apexPageId)
    {
        $this->apexPageId = $apexPageId;
        return $this;
    }

    /**
     * Gets as dailyPageViewCount
     *
     * @return int
     */
    public function getDailyPageViewCount()
    {
        return $this->dailyPageViewCount;
    }

    /**
     * Sets a new dailyPageViewCount
     *
     * @param int $dailyPageViewCount
     * @return self
     */
    public function setDailyPageViewCount($dailyPageViewCount)
    {
        $this->dailyPageViewCount = $dailyPageViewCount;
        return $this;
    }

    /**
     * Gets as logDate
     *
     * @return \DateTime
     */
    public function getLogDate()
    {
        return $this->logDate;
    }

    /**
     * Sets a new logDate
     *
     * @param \DateTime $logDate
     * @return self
     */
    public function setLogDate(\DateTime $logDate)
    {
        $this->logDate = $logDate;
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
     * Gets as profile
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ProfileType
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Sets a new profile
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ProfileType $profile
     * @return self
     */
    public function setProfile(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\ProfileType $profile)
    {
        $this->profile = $profile;
        return $this;
    }

    /**
     * Gets as profileId
     *
     * @return string
     */
    public function getProfileId()
    {
        return $this->profileId;
    }

    /**
     * Sets a new profileId
     *
     * @param string $profileId
     * @return self
     */
    public function setProfileId($profileId)
    {
        $this->profileId = $profileId;
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

