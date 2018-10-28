<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing SoqlConditionType
 *
 *
 * XSD Type: SoqlCondition
 */
class SoqlConditionType extends SoqlWhereConditionType
{

    /**
     * @property string $field
     */
    private $field = null;

    /**
     * @property string $operator
     */
    private $operator = null;

    /**
     * @property string[] $values
     */
    private $values = [
        
    ];

    /**
     * Gets as field
     *
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * Sets a new field
     *
     * @param string $field
     * @return self
     */
    public function setField($field)
    {
        $this->field = $field;
        return $this;
    }

    /**
     * Gets as operator
     *
     * @return string
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * Sets a new operator
     *
     * @param string $operator
     * @return self
     */
    public function setOperator($operator)
    {
        $this->operator = $operator;
        return $this;
    }

    /**
     * Adds as values
     *
     * @return self
     * @param string $values
     */
    public function addToValues($values)
    {
        $this->values[] = $values;
        return $this;
    }

    /**
     * isset values
     *
     * @param int|string $index
     * @return bool
     */
    public function issetValues($index)
    {
        return isset($this->values[$index]);
    }

    /**
     * unset values
     *
     * @param int|string $index
     * @return void
     */
    public function unsetValues($index)
    {
        unset($this->values[$index]);
    }

    /**
     * Gets as values
     *
     * @return string[]
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * Sets a new values
     *
     * @param string[] $values
     * @return self
     */
    public function setValues(array $values)
    {
        $this->values = $values;
        return $this;
    }


}

