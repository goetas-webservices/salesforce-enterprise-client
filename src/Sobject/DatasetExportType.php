<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing DatasetExportType
 *
 *
 * XSD Type: DatasetExport
 */
class DatasetExportType extends SObjectType
{

    /**
     * @property int $compressedMetadataLength
     */
    private $compressedMetadataLength = null;

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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $datasetExportParts
     */
    private $datasetExportParts = null;

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
     * @property mixed $metadata
     */
    private $metadata = null;

    /**
     * @property int $metadataLength
     */
    private $metadataLength = null;

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
     * @property string $status
     */
    private $status = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * Gets as compressedMetadataLength
     *
     * @return int
     */
    public function getCompressedMetadataLength()
    {
        return $this->compressedMetadataLength;
    }

    /**
     * Sets a new compressedMetadataLength
     *
     * @param int $compressedMetadataLength
     * @return self
     */
    public function setCompressedMetadataLength($compressedMetadataLength)
    {
        $this->compressedMetadataLength = $compressedMetadataLength;
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
     * Gets as datasetExportParts
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getDatasetExportParts()
    {
        return $this->datasetExportParts;
    }

    /**
     * Sets a new datasetExportParts
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $datasetExportParts
     * @return self
     */
    public function setDatasetExportParts(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $datasetExportParts)
    {
        $this->datasetExportParts = $datasetExportParts;
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
     * Gets as metadata
     *
     * @return mixed
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Sets a new metadata
     *
     * @param mixed $metadata
     * @return self
     */
    public function setMetadata($metadata)
    {
        $this->metadata = $metadata;
        return $this;
    }

    /**
     * Gets as metadataLength
     *
     * @return int
     */
    public function getMetadataLength()
    {
        return $this->metadataLength;
    }

    /**
     * Sets a new metadataLength
     *
     * @param int $metadataLength
     * @return self
     */
    public function setMetadataLength($metadataLength)
    {
        $this->metadataLength = $metadataLength;
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

