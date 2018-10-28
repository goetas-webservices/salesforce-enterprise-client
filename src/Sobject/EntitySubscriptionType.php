<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing EntitySubscriptionType
 *
 *
 * XSD Type: EntitySubscription
 */
class EntitySubscriptionType extends SObjectType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $createdBy
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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $parent
     */
    private $parent = null;

    /**
     * @property string $parentId
     */
    private $parentId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $subscriber
     */
    private $subscriber = null;

    /**
     * @property string $subscriberId
     */
    private $subscriberId = null;

    /**
     * Gets as createdBy
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Sets a new createdBy
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $createdBy
     * @return self
     */
    public function setCreatedBy(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $createdBy)
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
     * Gets as subscriber
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType
     */
    public function getSubscriber()
    {
        return $this->subscriber;
    }

    /**
     * Sets a new subscriber
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $subscriber
     * @return self
     */
    public function setSubscriber(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $subscriber)
    {
        $this->subscriber = $subscriber;
        return $this;
    }

    /**
     * Gets as subscriberId
     *
     * @return string
     */
    public function getSubscriberId()
    {
        return $this->subscriberId;
    }

    /**
     * Sets a new subscriberId
     *
     * @param string $subscriberId
     * @return self
     */
    public function setSubscriberId($subscriberId)
    {
        $this->subscriberId = $subscriberId;
        return $this;
    }


}

