<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing EventLogFileType
 *
 *
 * XSD Type: EventLogFile
 */
class EventLogFileType extends SObjectType
{

    /**
     * @property float $apiVersion
     */
    private $apiVersion = null;

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
     * @property string $eventType
     */
    private $eventType = null;

    /**
     * @property string $interval
     */
    private $interval = null;

    /**
     * @property bool $isDeleted
     */
    private $isDeleted = null;

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
     * @property \DateTime $logDate
     */
    private $logDate = null;

    /**
     * @property mixed $logFile
     */
    private $logFile = null;

    /**
     * @property string $logFileContentType
     */
    private $logFileContentType = null;

    /**
     * @property string $logFileFieldNames
     */
    private $logFileFieldNames = null;

    /**
     * @property string $logFileFieldTypes
     */
    private $logFileFieldTypes = null;

    /**
     * @property float $logFileLength
     */
    private $logFileLength = null;

    /**
     * @property int $sequence
     */
    private $sequence = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * Gets as apiVersion
     *
     * @return float
     */
    public function getApiVersion()
    {
        return $this->apiVersion;
    }

    /**
     * Sets a new apiVersion
     *
     * @param float $apiVersion
     * @return self
     */
    public function setApiVersion($apiVersion)
    {
        $this->apiVersion = $apiVersion;
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
     * Gets as eventType
     *
     * @return string
     */
    public function getEventType()
    {
        return $this->eventType;
    }

    /**
     * Sets a new eventType
     *
     * @param string $eventType
     * @return self
     */
    public function setEventType($eventType)
    {
        $this->eventType = $eventType;
        return $this;
    }

    /**
     * Gets as interval
     *
     * @return string
     */
    public function getInterval()
    {
        return $this->interval;
    }

    /**
     * Sets a new interval
     *
     * @param string $interval
     * @return self
     */
    public function setInterval($interval)
    {
        $this->interval = $interval;
        return $this;
    }

    /**
     * Gets as isDeleted
     *
     * @return bool
     */
    public function getIsDeleted()
    {
        return $this->isDeleted;
    }

    /**
     * Sets a new isDeleted
     *
     * @param bool $isDeleted
     * @return self
     */
    public function setIsDeleted($isDeleted)
    {
        $this->isDeleted = $isDeleted;
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
     * Gets as logFile
     *
     * @return mixed
     */
    public function getLogFile()
    {
        return $this->logFile;
    }

    /**
     * Sets a new logFile
     *
     * @param mixed $logFile
     * @return self
     */
    public function setLogFile($logFile)
    {
        $this->logFile = $logFile;
        return $this;
    }

    /**
     * Gets as logFileContentType
     *
     * @return string
     */
    public function getLogFileContentType()
    {
        return $this->logFileContentType;
    }

    /**
     * Sets a new logFileContentType
     *
     * @param string $logFileContentType
     * @return self
     */
    public function setLogFileContentType($logFileContentType)
    {
        $this->logFileContentType = $logFileContentType;
        return $this;
    }

    /**
     * Gets as logFileFieldNames
     *
     * @return string
     */
    public function getLogFileFieldNames()
    {
        return $this->logFileFieldNames;
    }

    /**
     * Sets a new logFileFieldNames
     *
     * @param string $logFileFieldNames
     * @return self
     */
    public function setLogFileFieldNames($logFileFieldNames)
    {
        $this->logFileFieldNames = $logFileFieldNames;
        return $this;
    }

    /**
     * Gets as logFileFieldTypes
     *
     * @return string
     */
    public function getLogFileFieldTypes()
    {
        return $this->logFileFieldTypes;
    }

    /**
     * Sets a new logFileFieldTypes
     *
     * @param string $logFileFieldTypes
     * @return self
     */
    public function setLogFileFieldTypes($logFileFieldTypes)
    {
        $this->logFileFieldTypes = $logFileFieldTypes;
        return $this;
    }

    /**
     * Gets as logFileLength
     *
     * @return float
     */
    public function getLogFileLength()
    {
        return $this->logFileLength;
    }

    /**
     * Sets a new logFileLength
     *
     * @param float $logFileLength
     * @return self
     */
    public function setLogFileLength($logFileLength)
    {
        $this->logFileLength = $logFileLength;
        return $this;
    }

    /**
     * Gets as sequence
     *
     * @return int
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * Sets a new sequence
     *
     * @param int $sequence
     * @return self
     */
    public function setSequence($sequence)
    {
        $this->sequence = $sequence;
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

