<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing ChatterActivityType
 *
 *
 * XSD Type: ChatterActivity
 */
class ChatterActivityType extends SObjectType
{

    /**
     * @property int $commentCount
     */
    private $commentCount = null;

    /**
     * @property int $commentReceivedCount
     */
    private $commentReceivedCount = null;

    /**
     * @property int $influenceRawRank
     */
    private $influenceRawRank = null;

    /**
     * @property int $likeReceivedCount
     */
    private $likeReceivedCount = null;

    /**
     * @property string $parentId
     */
    private $parentId = null;

    /**
     * @property int $postCount
     */
    private $postCount = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * Gets as commentCount
     *
     * @return int
     */
    public function getCommentCount()
    {
        return $this->commentCount;
    }

    /**
     * Sets a new commentCount
     *
     * @param int $commentCount
     * @return self
     */
    public function setCommentCount($commentCount)
    {
        $this->commentCount = $commentCount;
        return $this;
    }

    /**
     * Gets as commentReceivedCount
     *
     * @return int
     */
    public function getCommentReceivedCount()
    {
        return $this->commentReceivedCount;
    }

    /**
     * Sets a new commentReceivedCount
     *
     * @param int $commentReceivedCount
     * @return self
     */
    public function setCommentReceivedCount($commentReceivedCount)
    {
        $this->commentReceivedCount = $commentReceivedCount;
        return $this;
    }

    /**
     * Gets as influenceRawRank
     *
     * @return int
     */
    public function getInfluenceRawRank()
    {
        return $this->influenceRawRank;
    }

    /**
     * Sets a new influenceRawRank
     *
     * @param int $influenceRawRank
     * @return self
     */
    public function setInfluenceRawRank($influenceRawRank)
    {
        $this->influenceRawRank = $influenceRawRank;
        return $this;
    }

    /**
     * Gets as likeReceivedCount
     *
     * @return int
     */
    public function getLikeReceivedCount()
    {
        return $this->likeReceivedCount;
    }

    /**
     * Sets a new likeReceivedCount
     *
     * @param int $likeReceivedCount
     * @return self
     */
    public function setLikeReceivedCount($likeReceivedCount)
    {
        $this->likeReceivedCount = $likeReceivedCount;
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
     * Gets as postCount
     *
     * @return int
     */
    public function getPostCount()
    {
        return $this->postCount;
    }

    /**
     * Sets a new postCount
     *
     * @param int $postCount
     * @return self
     */
    public function setPostCount($postCount)
    {
        $this->postCount = $postCount;
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

