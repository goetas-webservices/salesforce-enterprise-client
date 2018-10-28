<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing TenantUsageEntitlementType
 *
 *
 * XSD Type: TenantUsageEntitlement
 */
class TenantUsageEntitlementType extends SObjectType
{

    /**
     * @property float $amountUsed
     */
    private $amountUsed = null;

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
     * @property float $currentAmountAllowed
     */
    private $currentAmountAllowed = null;

    /**
     * @property \DateTime $endDate
     */
    private $endDate = null;

    /**
     * @property string $frequency
     */
    private $frequency = null;

    /**
     * @property bool $hasRollover
     */
    private $hasRollover = null;

    /**
     * @property bool $isDeleted
     */
    private $isDeleted = null;

    /**
     * @property bool $isPersistentResource
     */
    private $isPersistentResource = null;

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
     * @property string $masterLabel
     */
    private $masterLabel = null;

    /**
     * @property float $overageGrace
     */
    private $overageGrace = null;

    /**
     * @property string $resourceGroupKey
     */
    private $resourceGroupKey = null;

    /**
     * @property string $setting
     */
    private $setting = null;

    /**
     * @property \DateTime $startDate
     */
    private $startDate = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property \DateTime $usageDate
     */
    private $usageDate = null;

    /**
     * Gets as amountUsed
     *
     * @return float
     */
    public function getAmountUsed()
    {
        return $this->amountUsed;
    }

    /**
     * Sets a new amountUsed
     *
     * @param float $amountUsed
     * @return self
     */
    public function setAmountUsed($amountUsed)
    {
        $this->amountUsed = $amountUsed;
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
     * Gets as currentAmountAllowed
     *
     * @return float
     */
    public function getCurrentAmountAllowed()
    {
        return $this->currentAmountAllowed;
    }

    /**
     * Sets a new currentAmountAllowed
     *
     * @param float $currentAmountAllowed
     * @return self
     */
    public function setCurrentAmountAllowed($currentAmountAllowed)
    {
        $this->currentAmountAllowed = $currentAmountAllowed;
        return $this;
    }

    /**
     * Gets as endDate
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Sets a new endDate
     *
     * @param \DateTime $endDate
     * @return self
     */
    public function setEndDate(\DateTime $endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * Gets as frequency
     *
     * @return string
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * Sets a new frequency
     *
     * @param string $frequency
     * @return self
     */
    public function setFrequency($frequency)
    {
        $this->frequency = $frequency;
        return $this;
    }

    /**
     * Gets as hasRollover
     *
     * @return bool
     */
    public function getHasRollover()
    {
        return $this->hasRollover;
    }

    /**
     * Sets a new hasRollover
     *
     * @param bool $hasRollover
     * @return self
     */
    public function setHasRollover($hasRollover)
    {
        $this->hasRollover = $hasRollover;
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
     * Gets as isPersistentResource
     *
     * @return bool
     */
    public function getIsPersistentResource()
    {
        return $this->isPersistentResource;
    }

    /**
     * Sets a new isPersistentResource
     *
     * @param bool $isPersistentResource
     * @return self
     */
    public function setIsPersistentResource($isPersistentResource)
    {
        $this->isPersistentResource = $isPersistentResource;
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
     * Gets as masterLabel
     *
     * @return string
     */
    public function getMasterLabel()
    {
        return $this->masterLabel;
    }

    /**
     * Sets a new masterLabel
     *
     * @param string $masterLabel
     * @return self
     */
    public function setMasterLabel($masterLabel)
    {
        $this->masterLabel = $masterLabel;
        return $this;
    }

    /**
     * Gets as overageGrace
     *
     * @return float
     */
    public function getOverageGrace()
    {
        return $this->overageGrace;
    }

    /**
     * Sets a new overageGrace
     *
     * @param float $overageGrace
     * @return self
     */
    public function setOverageGrace($overageGrace)
    {
        $this->overageGrace = $overageGrace;
        return $this;
    }

    /**
     * Gets as resourceGroupKey
     *
     * @return string
     */
    public function getResourceGroupKey()
    {
        return $this->resourceGroupKey;
    }

    /**
     * Sets a new resourceGroupKey
     *
     * @param string $resourceGroupKey
     * @return self
     */
    public function setResourceGroupKey($resourceGroupKey)
    {
        $this->resourceGroupKey = $resourceGroupKey;
        return $this;
    }

    /**
     * Gets as setting
     *
     * @return string
     */
    public function getSetting()
    {
        return $this->setting;
    }

    /**
     * Sets a new setting
     *
     * @param string $setting
     * @return self
     */
    public function setSetting($setting)
    {
        $this->setting = $setting;
        return $this;
    }

    /**
     * Gets as startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets a new startDate
     *
     * @param \DateTime $startDate
     * @return self
     */
    public function setStartDate(\DateTime $startDate)
    {
        $this->startDate = $startDate;
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
     * Gets as usageDate
     *
     * @return \DateTime
     */
    public function getUsageDate()
    {
        return $this->usageDate;
    }

    /**
     * Sets a new usageDate
     *
     * @param \DateTime $usageDate
     * @return self
     */
    public function setUsageDate(\DateTime $usageDate)
    {
        $this->usageDate = $usageDate;
        return $this;
    }


}

