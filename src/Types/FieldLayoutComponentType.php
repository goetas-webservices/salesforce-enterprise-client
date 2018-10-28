<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing FieldLayoutComponentType
 *
 *
 * XSD Type: FieldLayoutComponent
 */
class FieldLayoutComponentType extends DescribeLayoutComponentType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutComponentType[] $components
     */
    private $components = [
        
    ];

    /**
     * @property string $fieldType
     */
    private $fieldType = null;

    /**
     * Adds as components
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutComponentType $components
     */
    public function addToComponents(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutComponentType $components)
    {
        $this->components[] = $components;
        return $this;
    }

    /**
     * isset components
     *
     * @param int|string $index
     * @return bool
     */
    public function issetComponents($index)
    {
        return isset($this->components[$index]);
    }

    /**
     * unset components
     *
     * @param int|string $index
     * @return void
     */
    public function unsetComponents($index)
    {
        unset($this->components[$index]);
    }

    /**
     * Gets as components
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutComponentType[]
     */
    public function getComponents()
    {
        return $this->components;
    }

    /**
     * Sets a new components
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutComponentType[] $components
     * @return self
     */
    public function setComponents(array $components)
    {
        $this->components = $components;
        return $this;
    }

    /**
     * Gets as fieldType
     *
     * @return string
     */
    public function getFieldType()
    {
        return $this->fieldType;
    }

    /**
     * Sets a new fieldType
     *
     * @param string $fieldType
     * @return self
     */
    public function setFieldType($fieldType)
    {
        $this->fieldType = $fieldType;
        return $this;
    }


}

