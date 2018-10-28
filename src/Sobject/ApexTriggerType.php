<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing ApexTriggerType
 *
 *
 * XSD Type: ApexTrigger
 */
class ApexTriggerType extends SObjectType
{

    /**
     * @property float $apiVersion
     */
    private $apiVersion = null;

    /**
     * @property string $body
     */
    private $body = null;

    /**
     * @property float $bodyCrc
     */
    private $bodyCrc = null;

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
     * @property bool $isValid
     */
    private $isValid = null;

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
     * @property int $lengthWithoutComments
     */
    private $lengthWithoutComments = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $namespacePrefix
     */
    private $namespacePrefix = null;

    /**
     * @property string $status
     */
    private $status = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property string $tableEnumOrId
     */
    private $tableEnumOrId = null;

    /**
     * @property bool $usageAfterDelete
     */
    private $usageAfterDelete = null;

    /**
     * @property bool $usageAfterInsert
     */
    private $usageAfterInsert = null;

    /**
     * @property bool $usageAfterUndelete
     */
    private $usageAfterUndelete = null;

    /**
     * @property bool $usageAfterUpdate
     */
    private $usageAfterUpdate = null;

    /**
     * @property bool $usageBeforeDelete
     */
    private $usageBeforeDelete = null;

    /**
     * @property bool $usageBeforeInsert
     */
    private $usageBeforeInsert = null;

    /**
     * @property bool $usageBeforeUpdate
     */
    private $usageBeforeUpdate = null;

    /**
     * @property bool $usageIsBulk
     */
    private $usageIsBulk = null;

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
     * Gets as body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param string $body
     * @return self
     */
    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as bodyCrc
     *
     * @return float
     */
    public function getBodyCrc()
    {
        return $this->bodyCrc;
    }

    /**
     * Sets a new bodyCrc
     *
     * @param float $bodyCrc
     * @return self
     */
    public function setBodyCrc($bodyCrc)
    {
        $this->bodyCrc = $bodyCrc;
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
     * Gets as isValid
     *
     * @return bool
     */
    public function getIsValid()
    {
        return $this->isValid;
    }

    /**
     * Sets a new isValid
     *
     * @param bool $isValid
     * @return self
     */
    public function setIsValid($isValid)
    {
        $this->isValid = $isValid;
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
     * Gets as lengthWithoutComments
     *
     * @return int
     */
    public function getLengthWithoutComments()
    {
        return $this->lengthWithoutComments;
    }

    /**
     * Sets a new lengthWithoutComments
     *
     * @param int $lengthWithoutComments
     * @return self
     */
    public function setLengthWithoutComments($lengthWithoutComments)
    {
        $this->lengthWithoutComments = $lengthWithoutComments;
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
     * Gets as namespacePrefix
     *
     * @return string
     */
    public function getNamespacePrefix()
    {
        return $this->namespacePrefix;
    }

    /**
     * Sets a new namespacePrefix
     *
     * @param string $namespacePrefix
     * @return self
     */
    public function setNamespacePrefix($namespacePrefix)
    {
        $this->namespacePrefix = $namespacePrefix;
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

    /**
     * Gets as tableEnumOrId
     *
     * @return string
     */
    public function getTableEnumOrId()
    {
        return $this->tableEnumOrId;
    }

    /**
     * Sets a new tableEnumOrId
     *
     * @param string $tableEnumOrId
     * @return self
     */
    public function setTableEnumOrId($tableEnumOrId)
    {
        $this->tableEnumOrId = $tableEnumOrId;
        return $this;
    }

    /**
     * Gets as usageAfterDelete
     *
     * @return bool
     */
    public function getUsageAfterDelete()
    {
        return $this->usageAfterDelete;
    }

    /**
     * Sets a new usageAfterDelete
     *
     * @param bool $usageAfterDelete
     * @return self
     */
    public function setUsageAfterDelete($usageAfterDelete)
    {
        $this->usageAfterDelete = $usageAfterDelete;
        return $this;
    }

    /**
     * Gets as usageAfterInsert
     *
     * @return bool
     */
    public function getUsageAfterInsert()
    {
        return $this->usageAfterInsert;
    }

    /**
     * Sets a new usageAfterInsert
     *
     * @param bool $usageAfterInsert
     * @return self
     */
    public function setUsageAfterInsert($usageAfterInsert)
    {
        $this->usageAfterInsert = $usageAfterInsert;
        return $this;
    }

    /**
     * Gets as usageAfterUndelete
     *
     * @return bool
     */
    public function getUsageAfterUndelete()
    {
        return $this->usageAfterUndelete;
    }

    /**
     * Sets a new usageAfterUndelete
     *
     * @param bool $usageAfterUndelete
     * @return self
     */
    public function setUsageAfterUndelete($usageAfterUndelete)
    {
        $this->usageAfterUndelete = $usageAfterUndelete;
        return $this;
    }

    /**
     * Gets as usageAfterUpdate
     *
     * @return bool
     */
    public function getUsageAfterUpdate()
    {
        return $this->usageAfterUpdate;
    }

    /**
     * Sets a new usageAfterUpdate
     *
     * @param bool $usageAfterUpdate
     * @return self
     */
    public function setUsageAfterUpdate($usageAfterUpdate)
    {
        $this->usageAfterUpdate = $usageAfterUpdate;
        return $this;
    }

    /**
     * Gets as usageBeforeDelete
     *
     * @return bool
     */
    public function getUsageBeforeDelete()
    {
        return $this->usageBeforeDelete;
    }

    /**
     * Sets a new usageBeforeDelete
     *
     * @param bool $usageBeforeDelete
     * @return self
     */
    public function setUsageBeforeDelete($usageBeforeDelete)
    {
        $this->usageBeforeDelete = $usageBeforeDelete;
        return $this;
    }

    /**
     * Gets as usageBeforeInsert
     *
     * @return bool
     */
    public function getUsageBeforeInsert()
    {
        return $this->usageBeforeInsert;
    }

    /**
     * Sets a new usageBeforeInsert
     *
     * @param bool $usageBeforeInsert
     * @return self
     */
    public function setUsageBeforeInsert($usageBeforeInsert)
    {
        $this->usageBeforeInsert = $usageBeforeInsert;
        return $this;
    }

    /**
     * Gets as usageBeforeUpdate
     *
     * @return bool
     */
    public function getUsageBeforeUpdate()
    {
        return $this->usageBeforeUpdate;
    }

    /**
     * Sets a new usageBeforeUpdate
     *
     * @param bool $usageBeforeUpdate
     * @return self
     */
    public function setUsageBeforeUpdate($usageBeforeUpdate)
    {
        $this->usageBeforeUpdate = $usageBeforeUpdate;
        return $this;
    }

    /**
     * Gets as usageIsBulk
     *
     * @return bool
     */
    public function getUsageIsBulk()
    {
        return $this->usageIsBulk;
    }

    /**
     * Sets a new usageIsBulk
     *
     * @param bool $usageIsBulk
     * @return self
     */
    public function setUsageIsBulk($usageIsBulk)
    {
        $this->usageIsBulk = $usageIsBulk;
        return $this;
    }


}

