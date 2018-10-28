<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing QueryOptions
 */
class QueryOptions
{

    /**
     * @property int $batchSize
     */
    private $batchSize = null;

    /**
     * Gets as batchSize
     *
     * @return int
     */
    public function getBatchSize()
    {
        return $this->batchSize;
    }

    /**
     * Sets a new batchSize
     *
     * @param int $batchSize
     * @return self
     */
    public function setBatchSize($batchSize)
    {
        $this->batchSize = $batchSize;
        return $this;
    }


}

