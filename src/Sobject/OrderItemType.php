<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing OrderItemType
 *
 *
 * XSD Type: OrderItem
 */
class OrderItemType extends SObjectType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $attachedContentDocuments
     */
    private $attachedContentDocuments = null;

    /**
     * @property float $availableQuantity
     */
    private $availableQuantity = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $childOrderItems
     */
    private $childOrderItems = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $combinedAttachments
     */
    private $combinedAttachments = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $contentDocumentLinks
     */
    private $contentDocumentLinks = null;

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
     * @property \DateTime $endDate
     */
    private $endDate = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feedSubscriptionsForEntity
     */
    private $feedSubscriptionsForEntity = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feeds
     */
    private $feeds = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $histories
     */
    private $histories = null;

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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\OrderType $order
     */
    private $order = null;

    /**
     * @property string $orderId
     */
    private $orderId = null;

    /**
     * @property string $orderItemNumber
     */
    private $orderItemNumber = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\OrderItemType $originalOrderItem
     */
    private $originalOrderItem = null;

    /**
     * @property string $originalOrderItemId
     */
    private $originalOrderItemId = null;

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
     * @property float $quantity
     */
    private $quantity = null;

    /**
     * @property \DateTime $serviceDate
     */
    private $serviceDate = null;

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
     * Gets as attachedContentDocuments
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getAttachedContentDocuments()
    {
        return $this->attachedContentDocuments;
    }

    /**
     * Sets a new attachedContentDocuments
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $attachedContentDocuments
     * @return self
     */
    public function setAttachedContentDocuments(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $attachedContentDocuments)
    {
        $this->attachedContentDocuments = $attachedContentDocuments;
        return $this;
    }

    /**
     * Gets as availableQuantity
     *
     * @return float
     */
    public function getAvailableQuantity()
    {
        return $this->availableQuantity;
    }

    /**
     * Sets a new availableQuantity
     *
     * @param float $availableQuantity
     * @return self
     */
    public function setAvailableQuantity($availableQuantity)
    {
        $this->availableQuantity = $availableQuantity;
        return $this;
    }

    /**
     * Gets as childOrderItems
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getChildOrderItems()
    {
        return $this->childOrderItems;
    }

    /**
     * Sets a new childOrderItems
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $childOrderItems
     * @return self
     */
    public function setChildOrderItems(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $childOrderItems)
    {
        $this->childOrderItems = $childOrderItems;
        return $this;
    }

    /**
     * Gets as combinedAttachments
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getCombinedAttachments()
    {
        return $this->combinedAttachments;
    }

    /**
     * Sets a new combinedAttachments
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $combinedAttachments
     * @return self
     */
    public function setCombinedAttachments(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $combinedAttachments)
    {
        $this->combinedAttachments = $combinedAttachments;
        return $this;
    }

    /**
     * Gets as contentDocumentLinks
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getContentDocumentLinks()
    {
        return $this->contentDocumentLinks;
    }

    /**
     * Sets a new contentDocumentLinks
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $contentDocumentLinks
     * @return self
     */
    public function setContentDocumentLinks(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $contentDocumentLinks)
    {
        $this->contentDocumentLinks = $contentDocumentLinks;
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
     * Gets as feedSubscriptionsForEntity
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getFeedSubscriptionsForEntity()
    {
        return $this->feedSubscriptionsForEntity;
    }

    /**
     * Sets a new feedSubscriptionsForEntity
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feedSubscriptionsForEntity
     * @return self
     */
    public function setFeedSubscriptionsForEntity(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feedSubscriptionsForEntity)
    {
        $this->feedSubscriptionsForEntity = $feedSubscriptionsForEntity;
        return $this;
    }

    /**
     * Gets as feeds
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getFeeds()
    {
        return $this->feeds;
    }

    /**
     * Sets a new feeds
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feeds
     * @return self
     */
    public function setFeeds(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feeds)
    {
        $this->feeds = $feeds;
        return $this;
    }

    /**
     * Gets as histories
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getHistories()
    {
        return $this->histories;
    }

    /**
     * Sets a new histories
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $histories
     * @return self
     */
    public function setHistories(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $histories)
    {
        $this->histories = $histories;
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
     * Gets as order
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\OrderType
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Sets a new order
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\OrderType $order
     * @return self
     */
    public function setOrder(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\OrderType $order)
    {
        $this->order = $order;
        return $this;
    }

    /**
     * Gets as orderId
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Sets a new orderId
     *
     * @param string $orderId
     * @return self
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * Gets as orderItemNumber
     *
     * @return string
     */
    public function getOrderItemNumber()
    {
        return $this->orderItemNumber;
    }

    /**
     * Sets a new orderItemNumber
     *
     * @param string $orderItemNumber
     * @return self
     */
    public function setOrderItemNumber($orderItemNumber)
    {
        $this->orderItemNumber = $orderItemNumber;
        return $this;
    }

    /**
     * Gets as originalOrderItem
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\OrderItemType
     */
    public function getOriginalOrderItem()
    {
        return $this->originalOrderItem;
    }

    /**
     * Sets a new originalOrderItem
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\OrderItemType $originalOrderItem
     * @return self
     */
    public function setOriginalOrderItem(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\OrderItemType $originalOrderItem)
    {
        $this->originalOrderItem = $originalOrderItem;
        return $this;
    }

    /**
     * Gets as originalOrderItemId
     *
     * @return string
     */
    public function getOriginalOrderItemId()
    {
        return $this->originalOrderItemId;
    }

    /**
     * Sets a new originalOrderItemId
     *
     * @param string $originalOrderItemId
     * @return self
     */
    public function setOriginalOrderItemId($originalOrderItemId)
    {
        $this->originalOrderItemId = $originalOrderItemId;
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

