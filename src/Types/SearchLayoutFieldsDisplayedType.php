<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing SearchLayoutFieldsDisplayedType
 *
 *
 * XSD Type: SearchLayoutFieldsDisplayed
 */
class SearchLayoutFieldsDisplayedType
{

    /**
     * @property bool $applicable
     */
    private $applicable = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\SearchLayoutFieldType[] $fields
     */
    private $fields = [
        
    ];

    /**
     * Gets as applicable
     *
     * @return bool
     */
    public function getApplicable()
    {
        return $this->applicable;
    }

    /**
     * Sets a new applicable
     *
     * @param bool $applicable
     * @return self
     */
    public function setApplicable($applicable)
    {
        $this->applicable = $applicable;
        return $this;
    }

    /**
     * Adds as fields
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\SearchLayoutFieldType $fields
     */
    public function addToFields(\GoetasWebservices\Client\SalesforceEnterprise\Types\SearchLayoutFieldType $fields)
    {
        $this->fields[] = $fields;
        return $this;
    }

    /**
     * isset fields
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFields($index)
    {
        return isset($this->fields[$index]);
    }

    /**
     * unset fields
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFields($index)
    {
        unset($this->fields[$index]);
    }

    /**
     * Gets as fields
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\SearchLayoutFieldType[]
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * Sets a new fields
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\SearchLayoutFieldType[] $fields
     * @return self
     */
    public function setFields(array $fields)
    {
        $this->fields = $fields;
        return $this;
    }


}

