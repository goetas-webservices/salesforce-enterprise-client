<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing FieldComponentType
 *
 *
 * XSD Type: FieldComponent
 */
class FieldComponentType extends DescribeLayoutComponentType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\FieldType $field
     */
    private $field = null;

    /**
     * Gets as field
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\FieldType
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * Sets a new field
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\FieldType $field
     * @return self
     */
    public function setField(\GoetasWebservices\Client\SalesforceEnterprise\Types\FieldType $field)
    {
        $this->field = $field;
        return $this;
    }


}

