<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing PricebookEntryType
 *
 *
 * XSD Type: PricebookEntry
 */
class PricebookEntryType extends SObjectType
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
     * @property bool $isActive
     */
    private $isActive = null;

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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $opportunityLineItems
     */
    private $opportunityLineItems = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $orderItems
     */
    private $orderItems = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\Pricebook2Type $pricebook2
     */
    private $pricebook2 = null;

    /**
     * @property string $pricebook2Id
     */
    private $pricebook2Id = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\Product2Type $product2
     */
    private $product2 = null;

    /**
     * @property string $product2Id
     */
    private $product2Id = null;

    /**
     * @property string $productCode
     */
    private $productCode = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property float $unitPrice
     */
    private $unitPrice = null;

    /**
     * @property bool $useStandardPrice
     */
    private $useStandardPrice = null;

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
     * Gets as isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Sets a new isActive
     *
     * @param bool $isActive
     * @return self
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
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
     * Gets as opportunityLineItems
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getOpportunityLineItems()
    {
        return $this->opportunityLineItems;
    }

    /**
     * Sets a new opportunityLineItems
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $opportunityLineItems
     * @return self
     */
    public function setOpportunityLineItems(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $opportunityLineItems)
    {
        $this->opportunityLineItems = $opportunityLineItems;
        return $this;
    }

    /**
     * Gets as orderItems
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getOrderItems()
    {
        return $this->orderItems;
    }

    /**
     * Sets a new orderItems
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $orderItems
     * @return self
     */
    public function setOrderItems(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $orderItems)
    {
        $this->orderItems = $orderItems;
        return $this;
    }

    /**
     * Gets as pricebook2
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\Pricebook2Type
     */
    public function getPricebook2()
    {
        return $this->pricebook2;
    }

    /**
     * Sets a new pricebook2
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\Pricebook2Type $pricebook2
     * @return self
     */
    public function setPricebook2(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\Pricebook2Type $pricebook2)
    {
        $this->pricebook2 = $pricebook2;
        return $this;
    }

    /**
     * Gets as pricebook2Id
     *
     * @return string
     */
    public function getPricebook2Id()
    {
        return $this->pricebook2Id;
    }

    /**
     * Sets a new pricebook2Id
     *
     * @param string $pricebook2Id
     * @return self
     */
    public function setPricebook2Id($pricebook2Id)
    {
        $this->pricebook2Id = $pricebook2Id;
        return $this;
    }

    /**
     * Gets as product2
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\Product2Type
     */
    public function getProduct2()
    {
        return $this->product2;
    }

    /**
     * Sets a new product2
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\Product2Type $product2
     * @return self
     */
    public function setProduct2(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\Product2Type $product2)
    {
        $this->product2 = $product2;
        return $this;
    }

    /**
     * Gets as product2Id
     *
     * @return string
     */
    public function getProduct2Id()
    {
        return $this->product2Id;
    }

    /**
     * Sets a new product2Id
     *
     * @param string $product2Id
     * @return self
     */
    public function setProduct2Id($product2Id)
    {
        $this->product2Id = $product2Id;
        return $this;
    }

    /**
     * Gets as productCode
     *
     * @return string
     */
    public function getProductCode()
    {
        return $this->productCode;
    }

    /**
     * Sets a new productCode
     *
     * @param string $productCode
     * @return self
     */
    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;
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
     * Gets as unitPrice
     *
     * @return float
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * Sets a new unitPrice
     *
     * @param float $unitPrice
     * @return self
     */
    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;
        return $this;
    }

    /**
     * Gets as useStandardPrice
     *
     * @return bool
     */
    public function getUseStandardPrice()
    {
        return $this->useStandardPrice;
    }

    /**
     * Sets a new useStandardPrice
     *
     * @param bool $useStandardPrice
     * @return self
     */
    public function setUseStandardPrice($useStandardPrice)
    {
        $this->useStandardPrice = $useStandardPrice;
        return $this;
    }


}

