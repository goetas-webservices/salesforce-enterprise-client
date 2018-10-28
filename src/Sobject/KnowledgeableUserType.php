<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing KnowledgeableUserType
 *
 *
 * XSD Type: KnowledgeableUser
 */
class KnowledgeableUserType extends SObjectType
{

    /**
     * @property int $rawRank
     */
    private $rawRank = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property string $topicId
     */
    private $topicId = null;

    /**
     * @property string $userId
     */
    private $userId = null;

    /**
     * Gets as rawRank
     *
     * @return int
     */
    public function getRawRank()
    {
        return $this->rawRank;
    }

    /**
     * Sets a new rawRank
     *
     * @param int $rawRank
     * @return self
     */
    public function setRawRank($rawRank)
    {
        $this->rawRank = $rawRank;
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

