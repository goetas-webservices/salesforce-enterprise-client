<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing FieldDiffType
 *
 *
 * XSD Type: FieldDiff
 */
class FieldDiffType
{

    /**
     * @property string $difference
     */
    private $difference = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * Gets as difference
     *
     * @return string
     */
    public function getDifference()
    {
        return $this->difference;
    }

    /**
     * Sets a new difference
     *
     * @param string $difference
     * @return self
     */
    public function setDifference($difference)
    {
        $this->difference = $difference;
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

