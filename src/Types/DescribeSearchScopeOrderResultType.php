<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribeSearchScopeOrderResultType
 *
 *
 * XSD Type: DescribeSearchScopeOrderResult
 */
class DescribeSearchScopeOrderResultType
{

    /**
     * @property string $keyPrefix
     */
    private $keyPrefix = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * Gets as keyPrefix
     *
     * @return string
     */
    public function getKeyPrefix()
    {
        return $this->keyPrefix;
    }

    /**
     * Sets a new keyPrefix
     *
     * @param string $keyPrefix
     * @return self
     */
    public function setKeyPrefix($keyPrefix)
    {
        $this->keyPrefix = $keyPrefix;
        return $this;
    }

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }


}

