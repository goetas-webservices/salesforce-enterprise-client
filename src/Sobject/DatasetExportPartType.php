<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing DatasetExportPartType
 *
 *
 * XSD Type: DatasetExportPart
 */
class DatasetExportPartType extends SObjectType
{

    /**
     * @property int $compressedDataFileLength
     */
    private $compressedDataFileLength = null;

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
     * @property mixed $dataFile
     */
    private $dataFile = null;

    /**
     * @property int $dataFileLength
     */
    private $dataFileLength = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\DatasetExportType $datasetExport
     */
    private $datasetExport = null;

    /**
     * @property string $datasetExportId
     */
    private $datasetExportId = null;

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
     * @property string $owner
     */
    private $owner = null;

    /**
     * @property int $partNumber
     */
    private $partNumber = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * Gets as compressedDataFileLength
     *
     * @return int
     */
    public function getCompressedDataFileLength()
    {
        return $this->compressedDataFileLength;
    }

    /**
     * Sets a new compressedDataFileLength
     *
     * @param int $compressedDataFileLength
     * @return self
     */
    public function setCompressedDataFileLength($compressedDataFileLength)
    {
        $this->compressedDataFileLength = $compressedDataFileLength;
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
     * Gets as dataFile
     *
     * @return mixed
     */
    public function getDataFile()
    {
        return $this->dataFile;
    }

    /**
     * Sets a new dataFile
     *
     * @param mixed $dataFile
     * @return self
     */
    public function setDataFile($dataFile)
    {
        $this->dataFile = $dataFile;
        return $this;
    }

    /**
     * Gets as dataFileLength
     *
     * @return int
     */
    public function getDataFileLength()
    {
        return $this->dataFileLength;
    }

    /**
     * Sets a new dataFileLength
     *
     * @param int $dataFileLength
     * @return self
     */
    public function setDataFileLength($dataFileLength)
    {
        $this->dataFileLength = $dataFileLength;
        return $this;
    }

    /**
     * Gets as datasetExport
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\DatasetExportType
     */
    public function getDatasetExport()
    {
        return $this->datasetExport;
    }

    /**
     * Sets a new datasetExport
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\DatasetExportType $datasetExport
     * @return self
     */
    public function setDatasetExport(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\DatasetExportType $datasetExport)
    {
        $this->datasetExport = $datasetExport;
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
     * Gets as partNumber
     *
     * @return int
     */
    public function getPartNumber()
    {
        return $this->partNumber;
    }

    /**
     * Sets a new partNumber
     *
     * @param int $partNumber
     * @return self
     */
    public function setPartNumber($partNumber)
    {
        $this->partNumber = $partNumber;
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

