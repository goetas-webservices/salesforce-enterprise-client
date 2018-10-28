<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing OwnerChangeOptionType
 *
 *
 * XSD Type: OwnerChangeOption
 */
class OwnerChangeOptionType
{

    /**
     * @property string $type
     */
    private $type = null;

    /**
     * @property bool $execute
     */
    private $execute = null;

    /**
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as execute
     *
     * @return bool
     */
    public function getExecute()
    {
        return $this->execute;
    }

    /**
     * Sets a new execute
     *
     * @param bool $execute
     * @return self
     */
    public function setExecute($execute)
    {
        $this->execute = $execute;
        return $this;
    }


}

