<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing SoqlSubQueryConditionType
 *
 *
 * XSD Type: SoqlSubQueryCondition
 */
class SoqlSubQueryConditionType extends SoqlWhereConditionType
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
     * @property string $subQuery
     */
    private $subQuery = null;

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
     * Gets as subQuery
     *
     * @return string
     */
    public function getSubQuery()
    {
        return $this->subQuery;
    }

    /**
     * Sets a new subQuery
     *
     * @param string $subQuery
     * @return self
     */
    public function setSubQuery($subQuery)
    {
        $this->subQuery = $subQuery;
        return $this;
    }


}

