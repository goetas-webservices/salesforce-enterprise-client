<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribeSearchableEntityResultType
 *
 *
 * XSD Type: DescribeSearchableEntityResult
 */
class DescribeSearchableEntityResultType
{

    /**
     * @property string $label
     */
    private $label = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $pluralLabel
     */
    private $pluralLabel = null;

    /**
     * Gets as label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Sets a new label
     *
     * @param string $label
     * @return self
     */
    public function setLabel($label)
    {
        $this->label = $label;
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

    /**
     * Gets as pluralLabel
     *
     * @return string
     */
    public function getPluralLabel()
    {
        return $this->pluralLabel;
    }

    /**
     * Sets a new pluralLabel
     *
     * @param string $pluralLabel
     * @return self
     */
    public function setPluralLabel($pluralLabel)
    {
        $this->pluralLabel = $pluralLabel;
        return $this;
    }


}

