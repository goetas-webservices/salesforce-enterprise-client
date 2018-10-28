<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribeSoftphoneScreenPopOptionType
 *
 *
 * XSD Type: DescribeSoftphoneScreenPopOption
 */
class DescribeSoftphoneScreenPopOptionType
{

    /**
     * @property string $matchType
     */
    private $matchType = null;

    /**
     * @property string $screenPopData
     */
    private $screenPopData = null;

    /**
     * @property string $screenPopType
     */
    private $screenPopType = null;

    /**
     * Gets as matchType
     *
     * @return string
     */
    public function getMatchType()
    {
        return $this->matchType;
    }

    /**
     * Sets a new matchType
     *
     * @param string $matchType
     * @return self
     */
    public function setMatchType($matchType)
    {
        $this->matchType = $matchType;
        return $this;
    }

    /**
     * Gets as screenPopData
     *
     * @return string
     */
    public function getScreenPopData()
    {
        return $this->screenPopData;
    }

    /**
     * Sets a new screenPopData
     *
     * @param string $screenPopData
     * @return self
     */
    public function setScreenPopData($screenPopData)
    {
        $this->screenPopData = $screenPopData;
        return $this;
    }

    /**
     * Gets as screenPopType
     *
     * @return string
     */
    public function getScreenPopType()
    {
        return $this->screenPopType;
    }

    /**
     * Sets a new screenPopType
     *
     * @param string $screenPopType
     * @return self
     */
    public function setScreenPopType($screenPopType)
    {
        $this->screenPopType = $screenPopType;
        return $this;
    }


}

