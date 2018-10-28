<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing NamedLayoutInfoType
 *
 *
 * XSD Type: NamedLayoutInfo
 */
class NamedLayoutInfoType
{

    /**
     * @property string $name
     */
    private $name = null;

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

