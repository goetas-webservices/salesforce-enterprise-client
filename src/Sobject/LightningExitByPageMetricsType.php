<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing LightningExitByPageMetricsType
 *
 *
 * XSD Type: LightningExitByPageMetrics
 */
class LightningExitByPageMetricsType extends SObjectType
{

    /**
     * @property \DateTime $metricsDate
     */
    private $metricsDate = null;

    /**
     * @property string $pageName
     */
    private $pageName = null;

    /**
     * @property int $recordCount
     */
    private $recordCount = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $user
     */
    private $user = null;

    /**
     * @property string $userId
     */
    private $userId = null;

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
     * Gets as recordCount
     *
     * @return int
     */
    public function getRecordCount()
    {
        return $this->recordCount;
    }

    /**
     * Sets a new recordCount
     *
     * @param int $recordCount
     * @return self
     */
    public function setRecordCount($recordCount)
    {
        $this->recordCount = $recordCount;
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

