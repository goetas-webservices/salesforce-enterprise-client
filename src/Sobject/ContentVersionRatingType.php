<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing ContentVersionRatingType
 *
 *
 * XSD Type: ContentVersionRating
 */
class ContentVersionRatingType extends SObjectType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentVersionType $contentVersion
     */
    private $contentVersion = null;

    /**
     * @property string $contentVersionId
     */
    private $contentVersionId = null;

    /**
     * @property \DateTime $lastModifiedDate
     */
    private $lastModifiedDate = null;

    /**
     * @property int $rating
     */
    private $rating = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $user
     */
    private $user = null;

    /**
     * @property string $userComment
     */
    private $userComment = null;

    /**
     * @property string $userId
     */
    private $userId = null;

    /**
     * Gets as contentVersion
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentVersionType
     */
    public function getContentVersion()
    {
        return $this->contentVersion;
    }

    /**
     * Sets a new contentVersion
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentVersionType $contentVersion
     * @return self
     */
    public function setContentVersion(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentVersionType $contentVersion)
    {
        $this->contentVersion = $contentVersion;
        return $this;
    }

    /**
     * Gets as contentVersionId
     *
     * @return string
     */
    public function getContentVersionId()
    {
        return $this->contentVersionId;
    }

    /**
     * Sets a new contentVersionId
     *
     * @param string $contentVersionId
     * @return self
     */
    public function setContentVersionId($contentVersionId)
    {
        $this->contentVersionId = $contentVersionId;
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
     * Gets as rating
     *
     * @return int
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Sets a new rating
     *
     * @param int $rating
     * @return self
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
        return $this;
    }

    /**
     * Gets as user
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Sets a new user
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $user
     * @return self
     */
    public function setUser(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * Gets as userComment
     *
     * @return string
     */
    public function getUserComment()
    {
        return $this->userComment;
    }

    /**
     * Sets a new userComment
     *
     * @param string $userComment
     * @return self
     */
    public function setUserComment($userComment)
    {
        $this->userComment = $userComment;
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

