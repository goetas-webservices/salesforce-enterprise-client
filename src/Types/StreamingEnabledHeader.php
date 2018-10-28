<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing StreamingEnabledHeader
 */
class StreamingEnabledHeader
{

    /**
     * @property bool $streamingEnabled
     */
    private $streamingEnabled = null;

    /**
     * Gets as streamingEnabled
     *
     * @return bool
     */
    public function getStreamingEnabled()
    {
        return $this->streamingEnabled;
    }

    /**
     * Sets a new streamingEnabled
     *
     * @param bool $streamingEnabled
     * @return self
     */
    public function setStreamingEnabled($streamingEnabled)
    {
        $this->streamingEnabled = $streamingEnabled;
        return $this;
    }


}

