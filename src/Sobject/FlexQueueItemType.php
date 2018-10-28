<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing FlexQueueItemType
 *
 *
 * XSD Type: FlexQueueItem
 */
class FlexQueueItemType extends SObjectType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AsyncApexJobType $asyncApexJob
     */
    private $asyncApexJob = null;

    /**
     * @property string $asyncApexJobId
     */
    private $asyncApexJobId = null;

    /**
     * @property string $flexQueueItemId
     */
    private $flexQueueItemId = null;

    /**
     * @property int $jobPosition
     */
    private $jobPosition = null;

    /**
     * @property string $jobType
     */
    private $jobType = null;

    /**
     * Gets as asyncApexJob
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AsyncApexJobType
     */
    public function getAsyncApexJob()
    {
        return $this->asyncApexJob;
    }

    /**
     * Sets a new asyncApexJob
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AsyncApexJobType $asyncApexJob
     * @return self
     */
    public function setAsyncApexJob(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\AsyncApexJobType $asyncApexJob)
    {
        $this->asyncApexJob = $asyncApexJob;
        return $this;
    }

    /**
     * Gets as asyncApexJobId
     *
     * @return string
     */
    public function getAsyncApexJobId()
    {
        return $this->asyncApexJobId;
    }

    /**
     * Sets a new asyncApexJobId
     *
     * @param string $asyncApexJobId
     * @return self
     */
    public function setAsyncApexJobId($asyncApexJobId)
    {
        $this->asyncApexJobId = $asyncApexJobId;
        return $this;
    }

    /**
     * Gets as flexQueueItemId
     *
     * @return string
     */
    public function getFlexQueueItemId()
    {
        return $this->flexQueueItemId;
    }

    /**
     * Sets a new flexQueueItemId
     *
     * @param string $flexQueueItemId
     * @return self
     */
    public function setFlexQueueItemId($flexQueueItemId)
    {
        $this->flexQueueItemId = $flexQueueItemId;
        return $this;
    }

    /**
     * Gets as jobPosition
     *
     * @return int
     */
    public function getJobPosition()
    {
        return $this->jobPosition;
    }

    /**
     * Sets a new jobPosition
     *
     * @param int $jobPosition
     * @return self
     */
    public function setJobPosition($jobPosition)
    {
        $this->jobPosition = $jobPosition;
        return $this;
    }

    /**
     * Gets as jobType
     *
     * @return string
     */
    public function getJobType()
    {
        return $this->jobType;
    }

    /**
     * Sets a new jobType
     *
     * @param string $jobType
     * @return self
     */
    public function setJobType($jobType)
    {
        $this->jobType = $jobType;
        return $this;
    }


}

