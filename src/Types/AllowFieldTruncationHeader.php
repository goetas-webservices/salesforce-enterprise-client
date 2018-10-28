<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing AllowFieldTruncationHeader
 */
class AllowFieldTruncationHeader
{

    /**
     * @property bool $allowFieldTruncation
     */
    private $allowFieldTruncation = null;

    /**
     * Gets as allowFieldTruncation
     *
     * @return bool
     */
    public function getAllowFieldTruncation()
    {
        return $this->allowFieldTruncation;
    }

    /**
     * Sets a new allowFieldTruncation
     *
     * @param bool $allowFieldTruncation
     * @return self
     */
    public function setAllowFieldTruncation($allowFieldTruncation)
    {
        $this->allowFieldTruncation = $allowFieldTruncation;
        return $this;
    }


}

