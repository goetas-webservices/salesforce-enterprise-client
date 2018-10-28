<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DebuggingInfo
 */
class DebuggingInfo
{

    /**
     * @property string $debugLog
     */
    private $debugLog = null;

    /**
     * Gets as debugLog
     *
     * @return string
     */
    public function getDebugLog()
    {
        return $this->debugLog;
    }

    /**
     * Sets a new debugLog
     *
     * @param string $debugLog
     * @return self
     */
    public function setDebugLog($debugLog)
    {
        $this->debugLog = $debugLog;
        return $this;
    }


}

