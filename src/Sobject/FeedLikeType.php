<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing FeedLikeType
 *
 *
 * XSD Type: FeedLike
 */
class FeedLikeType extends SObjectType
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
     * @property string $feedEntityId
     */
    private $feedEntityId = null;

    /**
     * @property string $feedItemId
     */
    private $feedItemId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $insertedBy
     */
    private $insertedBy = null;

    /**
     * @property string $insertedById
     */
    private $insertedById = null;

    /**
     * @property bool $isDeleted
     */
    private $isDeleted = null;

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
     * Gets as feedEntityId
     *
     * @return string
     */
    public function getFeedEntityId()
    {
        return $this->feedEntityId;
    }

    /**
     * Sets a new feedEntityId
     *
     * @param string $feedEntityId
     * @return self
     */
    public function setFeedEntityId($feedEntityId)
    {
        $this->feedEntityId = $feedEntityId;
        return $this;
    }

    /**
     * Gets as feedItemId
     *
     * @return string
     */
    public function getFeedItemId()
    {
        return $this->feedItemId;
    }

    /**
     * Sets a new feedItemId
     *
     * @param string $feedItemId
     * @return self
     */
    public function setFeedItemId($feedItemId)
    {
        $this->feedItemId = $feedItemId;
        return $this;
    }

    /**
     * Gets as insertedBy
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType
     */
    public function getInsertedBy()
    {
        return $this->insertedBy;
    }

    /**
     * Sets a new insertedBy
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $insertedBy
     * @return self
     */
    public function setInsertedBy(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $insertedBy)
    {
        $this->insertedBy = $insertedBy;
        return $this;
    }

    /**
     * Gets as insertedById
     *
     * @return string
     */
    public function getInsertedById()
    {
        return $this->insertedById;
    }

    /**
     * Sets a new insertedById
     *
     * @param string $insertedById
     * @return self
     */
    public function setInsertedById($insertedById)
    {
        $this->insertedById = $insertedById;
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


}

