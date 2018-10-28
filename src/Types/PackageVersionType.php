<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing PackageVersionType
 *
 *
 * XSD Type: PackageVersion
 */
class PackageVersionType
{

    /**
     * @property int $majorNumber
     */
    private $majorNumber = null;

    /**
     * @property int $minorNumber
     */
    private $minorNumber = null;

    /**
     * @property string $namespace
     */
    private $namespace = null;

    /**
     * Gets as majorNumber
     *
     * @return int
     */
    public function getMajorNumber()
    {
        return $this->majorNumber;
    }

    /**
     * Sets a new majorNumber
     *
     * @param int $majorNumber
     * @return self
     */
    public function setMajorNumber($majorNumber)
    {
        $this->majorNumber = $majorNumber;
        return $this;
    }

    /**
     * Gets as minorNumber
     *
     * @return int
     */
    public function getMinorNumber()
    {
        return $this->minorNumber;
    }

    /**
     * Sets a new minorNumber
     *
     * @param int $minorNumber
     * @return self
     */
    public function setMinorNumber($minorNumber)
    {
        $this->minorNumber = $minorNumber;
        return $this;
    }

    /**
     * Gets as namespace
     *
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * Sets a new namespace
     *
     * @param string $namespace
     * @return self
     */
    public function setNamespace($namespace)
    {
        $this->namespace = $namespace;
        return $this;
    }


}

