<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing GetServerTimestampResultType
 *
 *
 * XSD Type: GetServerTimestampResult
 */
class GetServerTimestampResultType
{

    /**
     * @property \DateTime $timestamp
     */
    private $timestamp = null;

    /**
     * Gets as timestamp
     *
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Sets a new timestamp
     *
     * @param \DateTime $timestamp
     * @return self
     */
    public function setTimestamp(\DateTime $timestamp)
    {
        $this->timestamp = $timestamp;
        return $this;
    }


}

