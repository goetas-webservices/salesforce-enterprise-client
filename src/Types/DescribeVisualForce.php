<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribeVisualForce
 */
class DescribeVisualForce
{

    /**
     * @property bool $includeAllDetails
     */
    private $includeAllDetails = null;

    /**
     * @property string $namespacePrefix
     */
    private $namespacePrefix = null;

    /**
     * Gets as includeAllDetails
     *
     * @return bool
     */
    public function getIncludeAllDetails()
    {
        return $this->includeAllDetails;
    }

    /**
     * Sets a new includeAllDetails
     *
     * @param bool $includeAllDetails
     * @return self
     */
    public function setIncludeAllDetails($includeAllDetails)
    {
        $this->includeAllDetails = $includeAllDetails;
        return $this;
    }

    /**
     * Gets as namespacePrefix
     *
     * @return string
     */
    public function getNamespacePrefix()
    {
        return $this->namespacePrefix;
    }

    /**
     * Sets a new namespacePrefix
     *
     * @param string $namespacePrefix
     * @return self
     */
    public function setNamespacePrefix($namespacePrefix)
    {
        $this->namespacePrefix = $namespacePrefix;
        return $this;
    }


}

