<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing InvalidateSessions
 */
class InvalidateSessions
{

    /**
     * @property string[] $sessionIds
     */
    private $sessionIds = [
        
    ];

    /**
     * Adds as sessionIds
     *
     * @return self
     * @param string $sessionIds
     */
    public function addToSessionIds($sessionIds)
    {
        $this->sessionIds[] = $sessionIds;
        return $this;
    }

    /**
     * isset sessionIds
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSessionIds($index)
    {
        return isset($this->sessionIds[$index]);
    }

    /**
     * unset sessionIds
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSessionIds($index)
    {
        unset($this->sessionIds[$index]);
    }

    /**
     * Gets as sessionIds
     *
     * @return string[]
     */
    public function getSessionIds()
    {
        return $this->sessionIds;
    }

    /**
     * Sets a new sessionIds
     *
     * @param string[] $sessionIds
     * @return self
     */
    public function setSessionIds(array $sessionIds)
    {
        $this->sessionIds = $sessionIds;
        return $this;
    }


}

