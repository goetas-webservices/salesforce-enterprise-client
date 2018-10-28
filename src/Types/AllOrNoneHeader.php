<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing AllOrNoneHeader
 */
class AllOrNoneHeader
{

    /**
     * @property bool $allOrNone
     */
    private $allOrNone = null;

    /**
     * Gets as allOrNone
     *
     * @return bool
     */
    public function getAllOrNone()
    {
        return $this->allOrNone;
    }

    /**
     * Sets a new allOrNone
     *
     * @param bool $allOrNone
     * @return self
     */
    public function setAllOrNone($allOrNone)
    {
        $this->allOrNone = $allOrNone;
        return $this;
    }


}

