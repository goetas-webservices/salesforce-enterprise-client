<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing StampType
 *
 *
 * XSD Type: Stamp
 */
class StampType extends SObjectType
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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $customBrands
     */
    private $customBrands = null;

    /**
     * @property string $description
     */
    private $description = null;

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
     * @property string $masterLabel
     */
    private $masterLabel = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $parent
     */
    private $parent = null;

    /**
     * @property string $parentId
     */
    private $parentId = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

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
     * Gets as customBrands
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getCustomBrands()
    {
        return $this->customBrands;
    }

    /**
     * Sets a new customBrands
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $customBrands
     * @return self
     */
    public function setCustomBrands(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $customBrands)
    {
        $this->customBrands = $customBrands;
        return $this;
    }

    /**
     * Gets as description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
     * Gets as parent
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Sets a new parent
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $parent
     * @return self
     */
    public function setParent(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $parent)
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * Gets as parentId
     *
     * @return string
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * Sets a new parentId
     *
     * @param string $parentId
     * @return self
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;
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

