<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing MruHeader
 */
class MruHeader
{

    /**
     * @property bool $updateMru
     */
    private $updateMru = null;

    /**
     * Gets as updateMru
     *
     * @return bool
     */
    public function getUpdateMru()
    {
        return $this->updateMru;
    }

    /**
     * Sets a new updateMru
     *
     * @param bool $updateMru
     * @return self
     */
    public function setUpdateMru($updateMru)
    {
        $this->updateMru = $updateMru;
        return $this;
    }


}

