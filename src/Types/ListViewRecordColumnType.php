<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing ListViewRecordColumnType
 *
 *
 * XSD Type: ListViewRecordColumn
 */
class ListViewRecordColumnType
{

    /**
     * @property string $fieldNameOrPath
     */
    private $fieldNameOrPath = null;

    /**
     * @property string $value
     */
    private $value = null;

    /**
     * Gets as fieldNameOrPath
     *
     * @return string
     */
    public function getFieldNameOrPath()
    {
        return $this->fieldNameOrPath;
    }

    /**
     * Sets a new fieldNameOrPath
     *
     * @param string $fieldNameOrPath
     * @return self
     */
    public function setFieldNameOrPath($fieldNameOrPath)
    {
        $this->fieldNameOrPath = $fieldNameOrPath;
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

