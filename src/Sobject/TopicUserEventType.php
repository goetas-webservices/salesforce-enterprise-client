<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing TopicUserEventType
 *
 *
 * XSD Type: TopicUserEvent
 */
class TopicUserEventType extends SObjectType
{

    /**
     * @property string $actionEnum
     */
    private $actionEnum = null;

    /**
     * @property \DateTime $createdDate
     */
    private $createdDate = null;

    /**
     * @property string $topicId
     */
    private $topicId = null;

    /**
     * @property string $userId
     */
    private $userId = null;

    /**
     * Gets as actionEnum
     *
     * @return string
     */
    public function getActionEnum()
    {
        return $this->actionEnum;
    }

    /**
     * Sets a new actionEnum
     *
     * @param string $actionEnum
     * @return self
     */
    public function setActionEnum($actionEnum)
    {
        $this->actionEnum = $actionEnum;
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


}

