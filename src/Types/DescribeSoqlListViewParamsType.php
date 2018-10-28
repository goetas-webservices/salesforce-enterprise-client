<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribeSoqlListViewParamsType
 *
 *
 * XSD Type: DescribeSoqlListViewParams
 */
class DescribeSoqlListViewParamsType
{

    /**
     * @property string $developerNameOrId
     */
    private $developerNameOrId = null;

    /**
     * @property string $sobjectType
     */
    private $sobjectType = null;

    /**
     * Gets as developerNameOrId
     *
     * @return string
     */
    public function getDeveloperNameOrId()
    {
        return $this->developerNameOrId;
    }

    /**
     * Sets a new developerNameOrId
     *
     * @param string $developerNameOrId
     * @return self
     */
    public function setDeveloperNameOrId($developerNameOrId)
    {
        $this->developerNameOrId = $developerNameOrId;
        return $this;
    }

    /**
     * Gets as sobjectType
     *
     * @return string
     */
    public function getSobjectType()
    {
        return $this->sobjectType;
    }

    /**
     * Sets a new sobjectType
     *
     * @param string $sobjectType
     * @return self
     */
    public function setSobjectType($sobjectType)
    {
        $this->sobjectType = $sobjectType;
        return $this;
    }


}

