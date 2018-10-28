<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing FeedPollVoteType
 *
 *
 * XSD Type: FeedPollVote
 */
class FeedPollVoteType extends SObjectType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\FeedPollChoiceType $choice
     */
    private $choice = null;

    /**
     * @property string $choiceId
     */
    private $choiceId = null;

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
     * @property string $feedItemId
     */
    private $feedItemId = null;

    /**
     * @property bool $isDeleted
     */
    private $isDeleted = null;

    /**
     * @property \DateTime $lastModifiedDate
     */
    private $lastModifiedDate = null;

    /**
     * Gets as choice
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\FeedPollChoiceType
     */
    public function getChoice()
    {
        return $this->choice;
    }

    /**
     * Sets a new choice
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\FeedPollChoiceType $choice
     * @return self
     */
    public function setChoice(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\FeedPollChoiceType $choice)
    {
        $this->choice = $choice;
        return $this;
    }

    /**
     * Gets as choiceId
     *
     * @return string
     */
    public function getChoiceId()
    {
        return $this->choiceId;
    }

    /**
     * Sets a new choiceId
     *
     * @param string $choiceId
     * @return self
     */
    public function setChoiceId($choiceId)
    {
        $this->choiceId = $choiceId;
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


}

