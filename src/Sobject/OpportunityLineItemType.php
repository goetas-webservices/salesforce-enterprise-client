<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing OpportunityLineItemType
 *
 *
 * XSD Type: OpportunityLineItem
 */
class OpportunityLineItemType extends SObjectType
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
     * @property float $listPrice
     */
    private $listPrice = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\OpportunityType $opportunity
     */
    private $opportunity = null;

    /**
     * @property string $opportunityId
     */
    private $opportunityId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\PricebookEntryType $pricebookEntry
     */
    private $pricebookEntry = null;

    /**
     * @property string $pricebookEntryId
     */
    private $pricebookEntryId = null;

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
     * @property float $quantity
     */
    private $quantity = null;

    /**
     * @property \DateTime $serviceDate
     */
    private $serviceDate = null;

    /**
     * @property int $sortOrder
     */
    private $sortOrder = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property float $totalPrice
     */
    private $totalPrice = null;

    /**
     * @property float $unitPrice
     */
    private $unitPrice = null;

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
     * Gets as listPrice
     *
     * @return float
     */
    public function getListPrice()
    {
        return $this->listPrice;
    }

    /**
     * Sets a new listPrice
     *
     * @param float $listPrice
     * @return self
     */
    public function setListPrice($listPrice)
    {
        $this->listPrice = $listPrice;
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
     * Gets as opportunity
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\OpportunityType
     */
    public function getOpportunity()
    {
        return $this->opportunity;
    }

    /**
     * Sets a new opportunity
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\OpportunityType $opportunity
     * @return self
     */
    public function setOpportunity(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\OpportunityType $opportunity)
    {
        $this->opportunity = $opportunity;
        return $this;
    }

    /**
     * Gets as opportunityId
     *
     * @return string
     */
    public function getOpportunityId()
    {
        return $this->opportunityId;
    }

    /**
     * Sets a new opportunityId
     *
     * @param string $opportunityId
     * @return self
     */
    public function setOpportunityId($opportunityId)
    {
        $this->opportunityId = $opportunityId;
        return $this;
    }

    /**
     * Gets as pricebookEntry
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\PricebookEntryType
     */
    public function getPricebookEntry()
    {
        return $this->pricebookEntry;
    }

    /**
     * Sets a new pricebookEntry
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\PricebookEntryType $pricebookEntry
     * @return self
     */
    public function setPricebookEntry(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\PricebookEntryType $pricebookEntry)
    {
        $this->pricebookEntry = $pricebookEntry;
        return $this;
    }

    /**
     * Gets as pricebookEntryId
     *
     * @return string
     */
    public function getPricebookEntryId()
    {
        return $this->pricebookEntryId;
    }

    /**
     * Sets a new pricebookEntryId
     *
     * @param string $pricebookEntryId
     * @return self
     */
    public function setPricebookEntryId($pricebookEntryId)
    {
        $this->pricebookEntryId = $pricebookEntryId;
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
     * Gets as quantity
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * @param float $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as serviceDate
     *
     * @return \DateTime
     */
    public function getServiceDate()
    {
        return $this->serviceDate;
    }

    /**
     * Sets a new serviceDate
     *
     * @param \DateTime $serviceDate
     * @return self
     */
    public function setServiceDate(\DateTime $serviceDate)
    {
        $this->serviceDate = $serviceDate;
        return $this;
    }

    /**
     * Gets as sortOrder
     *
     * @return int
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * Sets a new sortOrder
     *
     * @param int $sortOrder
     * @return self
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;
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
     * Gets as totalPrice
     *
     * @return float
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * Sets a new totalPrice
     *
     * @param float $totalPrice
     * @return self
     */
    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice = $totalPrice;
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

