<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribeAppMenu
 */
class DescribeAppMenu
{

    /**
     * @property string $appMenuType
     */
    private $appMenuType = null;

    /**
     * @property string $networkId
     */
    private $networkId = null;

    /**
     * Gets as appMenuType
     *
     * @return string
     */
    public function getAppMenuType()
    {
        return $this->appMenuType;
    }

    /**
     * Sets a new appMenuType
     *
     * @param string $appMenuType
     * @return self
     */
    public function setAppMenuType($appMenuType)
    {
        $this->appMenuType = $appMenuType;
        return $this;
    }

    /**
     * Gets as networkId
     *
     * @return string
     */
    public function getNetworkId()
    {
        return $this->networkId;
    }

    /**
     * Sets a new networkId
     *
     * @param string $networkId
     * @return self
     */
    public function setNetworkId($networkId)
    {
        $this->networkId = $networkId;
        return $this;
    }


}

