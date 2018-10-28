<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing TopicAssignmentType
 *
 *
 * XSD Type: TopicAssignment
 */
class TopicAssignmentType extends SObjectType
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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContractType $entity
     */
    private $entity = null;

    /**
     * @property string $entityId
     */
    private $entityId = null;

    /**
     * @property string $entityKeyPrefix
     */
    private $entityKeyPrefix = null;

    /**
     * @property string $entityType
     */
    private $entityType = null;

    /**
     * @property bool $isDeleted
     */
    private $isDeleted = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\TopicType $topic
     */
    private $topic = null;

    /**
     * @property string $topicId
     */
    private $topicId = null;

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
     * Gets as entity
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContractType
     */
    public function getEntity()
    {
        return $this->entity;
    }

    /**
     * Sets a new entity
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContractType $entity
     * @return self
     */
    public function setEntity(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContractType $entity)
    {
        $this->entity = $entity;
        return $this;
    }

    /**
     * Gets as entityId
     *
     * @return string
     */
    public function getEntityId()
    {
        return $this->entityId;
    }

    /**
     * Sets a new entityId
     *
     * @param string $entityId
     * @return self
     */
    public function setEntityId($entityId)
    {
        $this->entityId = $entityId;
        return $this;
    }

    /**
     * Gets as entityKeyPrefix
     *
     * @return string
     */
    public function getEntityKeyPrefix()
    {
        return $this->entityKeyPrefix;
    }

    /**
     * Sets a new entityKeyPrefix
     *
     * @param string $entityKeyPrefix
     * @return self
     */
    public function setEntityKeyPrefix($entityKeyPrefix)
    {
        $this->entityKeyPrefix = $entityKeyPrefix;
        return $this;
    }

    /**
     * Gets as entityType
     *
     * @return string
     */
    public function getEntityType()
    {
        return $this->entityType;
    }

    /**
     * Sets a new entityType
     *
     * @param string $entityType
     * @return self
     */
    public function setEntityType($entityType)
    {
        $this->entityType = $entityType;
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
     * Gets as topic
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\TopicType
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * Sets a new topic
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\TopicType $topic
     * @return self
     */
    public function setTopic(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\TopicType $topic)
    {
        $this->topic = $topic;
        return $this;
    }

    /**
     * Gets as topicId
     *
     * @return string
     */
    public function getTopicId()
    {
        return $this->topicId;
    }

    /**
     * Sets a new topicId
     *
     * @param string $topicId
     * @return self
     */
    public function setTopicId($topicId)
    {
        $this->topicId = $topicId;
        return $this;
    }


}

