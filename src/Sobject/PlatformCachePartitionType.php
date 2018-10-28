<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing PlatformCachePartitionType
 *
 *
 * XSD Type: PlatformCachePartitionType
 */
class PlatformCachePartitionType extends SObjectType
{

    /**
     * @property int $allocatedCapacity
     */
    private $allocatedCapacity = null;

    /**
     * @property int $allocatedPurchasedCapacity
     */
    private $allocatedPurchasedCapacity = null;

    /**
     * @property int $allocatedTrialCapacity
     */
    private $allocatedTrialCapacity = null;

    /**
     * @property string $cacheType
     */
    private $cacheType = null;

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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\PlatformCachePartitionType $platformCachePartition
     */
    private $platformCachePartition = null;

    /**
     * @property string $platformCachePartitionId
     */
    private $platformCachePartitionId = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * Gets as allocatedCapacity
     *
     * @return int
     */
    public function getAllocatedCapacity()
    {
        return $this->allocatedCapacity;
    }

    /**
     * Sets a new allocatedCapacity
     *
     * @param int $allocatedCapacity
     * @return self
     */
    public function setAllocatedCapacity($allocatedCapacity)
    {
        $this->allocatedCapacity = $allocatedCapacity;
        return $this;
    }

    /**
     * Gets as allocatedPurchasedCapacity
     *
     * @return int
     */
    public function getAllocatedPurchasedCapacity()
    {
        return $this->allocatedPurchasedCapacity;
    }

    /**
     * Sets a new allocatedPurchasedCapacity
     *
     * @param int $allocatedPurchasedCapacity
     * @return self
     */
    public function setAllocatedPurchasedCapacity($allocatedPurchasedCapacity)
    {
        $this->allocatedPurchasedCapacity = $allocatedPurchasedCapacity;
        return $this;
    }

    /**
     * Gets as allocatedTrialCapacity
     *
     * @return int
     */
    public function getAllocatedTrialCapacity()
    {
        return $this->allocatedTrialCapacity;
    }

    /**
     * Sets a new allocatedTrialCapacity
     *
     * @param int $allocatedTrialCapacity
     * @return self
     */
    public function setAllocatedTrialCapacity($allocatedTrialCapacity)
    {
        $this->allocatedTrialCapacity = $allocatedTrialCapacity;
        return $this;
    }

    /**
     * Gets as cacheType
     *
     * @return string
     */
    public function getCacheType()
    {
        return $this->cacheType;
    }

    /**
     * Sets a new cacheType
     *
     * @param string $cacheType
     * @return self
     */
    public function setCacheType($cacheType)
    {
        $this->cacheType = $cacheType;
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
     * Gets as platformCachePartition
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\PlatformCachePartitionType
     */
    public function getPlatformCachePartition()
    {
        return $this->platformCachePartition;
    }

    /**
     * Sets a new platformCachePartition
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\PlatformCachePartitionType $platformCachePartition
     * @return self
     */
    public function setPlatformCachePartition(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\PlatformCachePartitionType $platformCachePartition)
    {
        $this->platformCachePartition = $platformCachePartition;
        return $this;
    }

    /**
     * Gets as platformCachePartitionId
     *
     * @return string
     */
    public function getPlatformCachePartitionId()
    {
        return $this->platformCachePartitionId;
    }

    /**
     * Sets a new platformCachePartitionId
     *
     * @param string $platformCachePartitionId
     * @return self
     */
    public function setPlatformCachePartitionId($platformCachePartitionId)
    {
        $this->platformCachePartitionId = $platformCachePartitionId;
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

