<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DisableFeedTrackingHeader
 */
class DisableFeedTrackingHeader
{

    /**
     * @property bool $disableFeedTracking
     */
    private $disableFeedTracking = null;

    /**
     * Gets as disableFeedTracking
     *
     * @return bool
     */
    public function getDisableFeedTracking()
    {
        return $this->disableFeedTracking;
    }

    /**
     * Sets a new disableFeedTracking
     *
     * @param bool $disableFeedTracking
     * @return self
     */
    public function setDisableFeedTracking($disableFeedTracking)
    {
        $this->disableFeedTracking = $disableFeedTracking;
        return $this;
    }


}

