<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing SoqlConditionGroupType
 *
 *
 * XSD Type: SoqlConditionGroup
 */
class SoqlConditionGroupType extends SoqlWhereConditionType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\SoqlWhereConditionType[] $conditions
     */
    private $conditions = [
        
    ];

    /**
     * @property string $conjunction
     */
    private $conjunction = null;

    /**
     * Adds as conditions
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\SoqlWhereConditionType $conditions
     */
    public function addToConditions(\GoetasWebservices\Client\SalesforceEnterprise\Types\SoqlWhereConditionType $conditions)
    {
        $this->conditions[] = $conditions;
        return $this;
    }

    /**
     * isset conditions
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConditions($index)
    {
        return isset($this->conditions[$index]);
    }

    /**
     * unset conditions
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConditions($index)
    {
        unset($this->conditions[$index]);
    }

    /**
     * Gets as conditions
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\SoqlWhereConditionType[]
     */
    public function getConditions()
    {
        return $this->conditions;
    }

    /**
     * Sets a new conditions
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\SoqlWhereConditionType[] $conditions
     * @return self
     */
    public function setConditions(array $conditions)
    {
        $this->conditions = $conditions;
        return $this;
    }

    /**
     * Gets as conjunction
     *
     * @return string
     */
    public function getConjunction()
    {
        return $this->conjunction;
    }

    /**
     * Sets a new conjunction
     *
     * @param string $conjunction
     * @return self
     */
    public function setConjunction($conjunction)
    {
        $this->conjunction = $conjunction;
        return $this;
    }


}

