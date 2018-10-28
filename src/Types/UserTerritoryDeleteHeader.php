<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing UserTerritoryDeleteHeader
 */
class UserTerritoryDeleteHeader
{

    /**
     * @property string $transferToUserId
     */
    private $transferToUserId = null;

    /**
     * Gets as transferToUserId
     *
     * @return string
     */
    public function getTransferToUserId()
    {
        return $this->transferToUserId;
    }

    /**
     * Sets a new transferToUserId
     *
     * @param string $transferToUserId
     * @return self
     */
    public function setTransferToUserId($transferToUserId)
    {
        $this->transferToUserId = $transferToUserId;
        return $this;
    }


}

