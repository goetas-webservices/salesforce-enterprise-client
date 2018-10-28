<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing SoqlNotConditionType
 *
 *
 * XSD Type: SoqlNotCondition
 */
class SoqlNotConditionType extends SoqlWhereConditionType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\SoqlWhereConditionType $condition
     */
    private $condition = null;

    /**
     * Gets as condition
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\SoqlWhereConditionType
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Sets a new condition
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\SoqlWhereConditionType $condition
     * @return self
     */
    public function setCondition(\GoetasWebservices\Client\SalesforceEnterprise\Types\SoqlWhereConditionType $condition)
    {
        $this->condition = $condition;
        return $this;
    }


}

