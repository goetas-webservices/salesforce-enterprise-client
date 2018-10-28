<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing PicklistEntryType
 *
 *
 * XSD Type: PicklistEntry
 */
class PicklistEntryType
{

    /**
     * @property bool $active
     */
    private $active = null;

    /**
     * @property bool $defaultValue
     */
    private $defaultValue = null;

    /**
     * @property string $label
     */
    private $label = null;

    /**
     * @property mixed $validFor
     */
    private $validFor = null;

    /**
     * @property string $value
     */
    private $value = null;

    /**
     * Gets as active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Sets a new active
     *
     * @param bool $active
     * @return self
     */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }

    /**
     * Gets as defaultValue
     *
     * @return bool
     */
    public function getDefaultValue()
    {
        return $this->defaultValue;
    }

    /**
     * Sets a new defaultValue
     *
     * @param bool $defaultValue
     * @return self
     */
    public function setDefaultValue($defaultValue)
    {
        $this->defaultValue = $defaultValue;
        return $this;
    }

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
     * Gets as validFor
     *
     * @return mixed
     */
    public function getValidFor()
    {
        return $this->validFor;
    }

    /**
     * Sets a new validFor
     *
     * @param mixed $validFor
     * @return self
     */
    public function setValidFor($validFor)
    {
        $this->validFor = $validFor;
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

