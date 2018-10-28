<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing PackageVersionHeader
 */
class PackageVersionHeader
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\PackageVersionType[] $packageVersions
     */
    private $packageVersions = [
        
    ];

    /**
     * Adds as packageVersions
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\PackageVersionType $packageVersions
     */
    public function addToPackageVersions(\GoetasWebservices\Client\SalesforceEnterprise\Types\PackageVersionType $packageVersions)
    {
        $this->packageVersions[] = $packageVersions;
        return $this;
    }

    /**
     * isset packageVersions
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPackageVersions($index)
    {
        return isset($this->packageVersions[$index]);
    }

    /**
     * unset packageVersions
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPackageVersions($index)
    {
        unset($this->packageVersions[$index]);
    }

    /**
     * Gets as packageVersions
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\PackageVersionType[]
     */
    public function getPackageVersions()
    {
        return $this->packageVersions;
    }

    /**
     * Sets a new packageVersions
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\PackageVersionType[] $packageVersions
     * @return self
     */
    public function setPackageVersions(array $packageVersions)
    {
        $this->packageVersions = $packageVersions;
        return $this;
    }


}

