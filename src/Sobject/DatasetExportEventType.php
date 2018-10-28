<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing DatasetExportEventType
 *
 *
 * XSD Type: DatasetExportEvent
 */
class DatasetExportEventType extends SObjectType
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
     * @property string $dataflowInstanceId
     */
    private $dataflowInstanceId = null;

    /**
     * @property string $datasetExportId
     */
    private $datasetExportId = null;

    /**
     * @property string $message
     */
    private $message = null;

    /**
     * @property string $owner
     */
    private $owner = null;

    /**
     * @property string $publisherInfo
     */
    private $publisherInfo = null;

    /**
     * @property string $publisherType
     */
    private $publisherType = null;

    /**
     * @property string $replayId
     */
    private $replayId = null;

    /**
     * @property string $status
     */
    private $status = null;

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
     * Gets as dataflowInstanceId
     *
     * @return string
     */
    public function getDataflowInstanceId()
    {
        return $this->dataflowInstanceId;
    }

    /**
     * Sets a new dataflowInstanceId
     *
     * @param string $dataflowInstanceId
     * @return self
     */
    public function setDataflowInstanceId($dataflowInstanceId)
    {
        $this->dataflowInstanceId = $dataflowInstanceId;
        return $this;
    }

    /**
     * Gets as datasetExportId
     *
     * @return string
     */
    public function getDatasetExportId()
    {
        return $this->datasetExportId;
    }

    /**
     * Sets a new datasetExportId
     *
     * @param string $datasetExportId
     * @return self
     */
    public function setDatasetExportId($datasetExportId)
    {
        $this->datasetExportId = $datasetExportId;
        return $this;
    }

    /**
     * Gets as message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Sets a new message
     *
     * @param string $message
     * @return self
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    /**
     * Gets as owner
     *
     * @return string
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Sets a new owner
     *
     * @param string $owner
     * @return self
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;
        return $this;
    }

    /**
     * Gets as publisherInfo
     *
     * @return string
     */
    public function getPublisherInfo()
    {
        return $this->publisherInfo;
    }

    /**
     * Sets a new publisherInfo
     *
     * @param string $publisherInfo
     * @return self
     */
    public function setPublisherInfo($publisherInfo)
    {
        $this->publisherInfo = $publisherInfo;
        return $this;
    }

    /**
     * Gets as publisherType
     *
     * @return string
     */
    public function getPublisherType()
    {
        return $this->publisherType;
    }

    /**
     * Sets a new publisherType
     *
     * @param string $publisherType
     * @return self
     */
    public function setPublisherType($publisherType)
    {
        $this->publisherType = $publisherType;
        return $this;
    }

    /**
     * Gets as replayId
     *
     * @return string
     */
    public function getReplayId()
    {
        return $this->replayId;
    }

    /**
     * Sets a new replayId
     *
     * @param string $replayId
     * @return self
     */
    public function setReplayId($replayId)
    {
        $this->replayId = $replayId;
        return $this;
    }

    /**
     * Gets as status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }


}

