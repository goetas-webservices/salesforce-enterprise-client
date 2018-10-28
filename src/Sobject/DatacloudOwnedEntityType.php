<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing DatacloudOwnedEntityType
 *
 *
 * XSD Type: DatacloudOwnedEntity
 */
class DatacloudOwnedEntityType extends SObjectType
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
     * @property string $dataDotComKey
     */
    private $dataDotComKey = null;

    /**
     * @property string $datacloudEntityType
     */
    private $datacloudEntityType = null;

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
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $purchaseType
     */
    private $purchaseType = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\DatacloudPurchaseUsageType $purchaseUsage
     */
    private $purchaseUsage = null;

    /**
     * @property string $purchaseUsageId
     */
    private $purchaseUsageId = null;

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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserRecordAccessType $userRecordAccess
     */
    private $userRecordAccess = null;

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
     * Gets as dataDotComKey
     *
     * @return string
     */
    public function getDataDotComKey()
    {
        return $this->dataDotComKey;
    }

    /**
     * Sets a new dataDotComKey
     *
     * @param string $dataDotComKey
     * @return self
     */
    public function setDataDotComKey($dataDotComKey)
    {
        $this->dataDotComKey = $dataDotComKey;
        return $this;
    }

    /**
     * Gets as datacloudEntityType
     *
     * @return string
     */
    public function getDatacloudEntityType()
    {
        return $this->datacloudEntityType;
    }

    /**
     * Sets a new datacloudEntityType
     *
     * @param string $datacloudEntityType
     * @return self
     */
    public function setDatacloudEntityType($datacloudEntityType)
    {
        $this->datacloudEntityType = $datacloudEntityType;
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
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as purchaseType
     *
     * @return string
     */
    public function getPurchaseType()
    {
        return $this->purchaseType;
    }

    /**
     * Sets a new purchaseType
     *
     * @param string $purchaseType
     * @return self
     */
    public function setPurchaseType($purchaseType)
    {
        $this->purchaseType = $purchaseType;
        return $this;
    }

    /**
     * Gets as purchaseUsage
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\DatacloudPurchaseUsageType
     */
    public function getPurchaseUsage()
    {
        return $this->purchaseUsage;
    }

    /**
     * Sets a new purchaseUsage
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\DatacloudPurchaseUsageType $purchaseUsage
     * @return self
     */
    public function setPurchaseUsage(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\DatacloudPurchaseUsageType $purchaseUsage)
    {
        $this->purchaseUsage = $purchaseUsage;
        return $this;
    }

    /**
     * Gets as purchaseUsageId
     *
     * @return string
     */
    public function getPurchaseUsageId()
    {
        return $this->purchaseUsageId;
    }

    /**
     * Sets a new purchaseUsageId
     *
     * @param string $purchaseUsageId
     * @return self
     */
    public function setPurchaseUsageId($purchaseUsageId)
    {
        $this->purchaseUsageId = $purchaseUsageId;
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

    /**
     * Gets as userRecordAccess
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserRecordAccessType
     */
    public function getUserRecordAccess()
    {
        return $this->userRecordAccess;
    }

    /**
     * Sets a new userRecordAccess
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserRecordAccessType $userRecordAccess
     * @return self
     */
    public function setUserRecordAccess(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserRecordAccessType $userRecordAccess)
    {
        $this->userRecordAccess = $userRecordAccess;
        return $this;
    }


}

