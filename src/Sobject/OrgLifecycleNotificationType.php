<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing OrgLifecycleNotificationType
 *
 *
 * XSD Type: OrgLifecycleNotification
 */
class OrgLifecycleNotificationType extends SObjectType
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
     * @property string $lifecycleRequestId
     */
    private $lifecycleRequestId = null;

    /**
     * @property string $lifecycleRequestType
     */
    private $lifecycleRequestType = null;

    /**
     * @property string $orgId
     */
    private $orgId = null;

    /**
     * @property string $replayId
     */
    private $replayId = null;

    /**
     * @property string $status
     */
    private $status = null;

    /**
     * @property string $statusCode
     */
    private $statusCode = null;

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
     * Gets as lifecycleRequestId
     *
     * @return string
     */
    public function getLifecycleRequestId()
    {
        return $this->lifecycleRequestId;
    }

    /**
     * Sets a new lifecycleRequestId
     *
     * @param string $lifecycleRequestId
     * @return self
     */
    public function setLifecycleRequestId($lifecycleRequestId)
    {
        $this->lifecycleRequestId = $lifecycleRequestId;
        return $this;
    }

    /**
     * Gets as lifecycleRequestType
     *
     * @return string
     */
    public function getLifecycleRequestType()
    {
        return $this->lifecycleRequestType;
    }

    /**
     * Sets a new lifecycleRequestType
     *
     * @param string $lifecycleRequestType
     * @return self
     */
    public function setLifecycleRequestType($lifecycleRequestType)
    {
        $this->lifecycleRequestType = $lifecycleRequestType;
        return $this;
    }

    /**
     * Gets as orgId
     *
     * @return string
     */
    public function getOrgId()
    {
        return $this->orgId;
    }

    /**
     * Sets a new orgId
     *
     * @param string $orgId
     * @return self
     */
    public function setOrgId($orgId)
    {
        $this->orgId = $orgId;
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

    /**
     * Gets as statusCode
     *
     * @return string
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * Sets a new statusCode
     *
     * @param string $statusCode
     * @return self
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
        return $this;
    }


}

