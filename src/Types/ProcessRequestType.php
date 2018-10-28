<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing ProcessRequestType
 *
 *
 * XSD Type: ProcessRequest
 */
class ProcessRequestType
{

    /**
     * @property string $comments
     */
    private $comments = null;

    /**
     * @property string[] $nextApproverIds
     */
    private $nextApproverIds = [
        
    ];

    /**
     * Gets as comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets a new comments
     *
     * @param string $comments
     * @return self
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
        return $this;
    }

    /**
     * Adds as nextApproverIds
     *
     * @return self
     * @param string $nextApproverIds
     */
    public function addToNextApproverIds($nextApproverIds)
    {
        $this->nextApproverIds[] = $nextApproverIds;
        return $this;
    }

    /**
     * isset nextApproverIds
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNextApproverIds($index)
    {
        return isset($this->nextApproverIds[$index]);
    }

    /**
     * unset nextApproverIds
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNextApproverIds($index)
    {
        unset($this->nextApproverIds[$index]);
    }

    /**
     * Gets as nextApproverIds
     *
     * @return string[]
     */
    public function getNextApproverIds()
    {
        return $this->nextApproverIds;
    }

    /**
     * Sets a new nextApproverIds
     *
     * @param string $nextApproverIds
     * @return self
     */
    public function setNextApproverIds(array $nextApproverIds)
    {
        $this->nextApproverIds = $nextApproverIds;
        return $this;
    }


}

