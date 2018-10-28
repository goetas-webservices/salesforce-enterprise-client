<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribeLayoutComponentType
 *
 *
 * XSD Type: DescribeLayoutComponent
 */
class DescribeLayoutComponentType
{

    /**
     * @property int $displayLines
     */
    private $displayLines = null;

    /**
     * @property int $tabOrder
     */
    private $tabOrder = null;

    /**
     * @property string $type
     */
    private $type = null;

    /**
     * @property string $value
     */
    private $value = null;

    /**
     * Gets as displayLines
     *
     * @return int
     */
    public function getDisplayLines()
    {
        return $this->displayLines;
    }

    /**
     * Sets a new displayLines
     *
     * @param int $displayLines
     * @return self
     */
    public function setDisplayLines($displayLines)
    {
        $this->displayLines = $displayLines;
        return $this;
    }

    /**
     * Gets as tabOrder
     *
     * @return int
     */
    public function getTabOrder()
    {
        return $this->tabOrder;
    }

    /**
     * Sets a new tabOrder
     *
     * @param int $tabOrder
     * @return self
     */
    public function setTabOrder($tabOrder)
    {
        $this->tabOrder = $tabOrder;
        return $this;
    }

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
     * Gets as value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * @param string $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }


}

