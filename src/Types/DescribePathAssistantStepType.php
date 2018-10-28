<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribePathAssistantStepType
 *
 *
 * XSD Type: DescribePathAssistantStep
 */
class DescribePathAssistantStepType
{

    /**
     * @property bool $closed
     */
    private $closed = null;

    /**
     * @property bool $converted
     */
    private $converted = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribePathAssistantFieldType[] $fields
     */
    private $fields = [
        
    ];

    /**
     * @property string $info
     */
    private $info = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutSectionType $layoutSection
     */
    private $layoutSection = null;

    /**
     * @property string $picklistLabel
     */
    private $picklistLabel = null;

    /**
     * @property string $picklistValue
     */
    private $picklistValue = null;

    /**
     * @property bool $won
     */
    private $won = null;

    /**
     * Gets as closed
     *
     * @return bool
     */
    public function getClosed()
    {
        return $this->closed;
    }

    /**
     * Sets a new closed
     *
     * @param bool $closed
     * @return self
     */
    public function setClosed($closed)
    {
        $this->closed = $closed;
        return $this;
    }

    /**
     * Gets as converted
     *
     * @return bool
     */
    public function getConverted()
    {
        return $this->converted;
    }

    /**
     * Sets a new converted
     *
     * @param bool $converted
     * @return self
     */
    public function setConverted($converted)
    {
        $this->converted = $converted;
        return $this;
    }

    /**
     * Adds as fields
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribePathAssistantFieldType $fields
     */
    public function addToFields(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribePathAssistantFieldType $fields)
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
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribePathAssistantFieldType[]
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * Sets a new fields
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribePathAssistantFieldType[] $fields
     * @return self
     */
    public function setFields(array $fields)
    {
        $this->fields = $fields;
        return $this;
    }

    /**
     * Gets as info
     *
     * @return string
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Sets a new info
     *
     * @param string $info
     * @return self
     */
    public function setInfo($info)
    {
        $this->info = $info;
        return $this;
    }

    /**
     * Gets as layoutSection
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutSectionType
     */
    public function getLayoutSection()
    {
        return $this->layoutSection;
    }

    /**
     * Sets a new layoutSection
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutSectionType $layoutSection
     * @return self
     */
    public function setLayoutSection(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutSectionType $layoutSection)
    {
        $this->layoutSection = $layoutSection;
        return $this;
    }

    /**
     * Gets as picklistLabel
     *
     * @return string
     */
    public function getPicklistLabel()
    {
        return $this->picklistLabel;
    }

    /**
     * Sets a new picklistLabel
     *
     * @param string $picklistLabel
     * @return self
     */
    public function setPicklistLabel($picklistLabel)
    {
        $this->picklistLabel = $picklistLabel;
        return $this;
    }

    /**
     * Gets as picklistValue
     *
     * @return string
     */
    public function getPicklistValue()
    {
        return $this->picklistValue;
    }

    /**
     * Sets a new picklistValue
     *
     * @param string $picklistValue
     * @return self
     */
    public function setPicklistValue($picklistValue)
    {
        $this->picklistValue = $picklistValue;
        return $this;
    }

    /**
     * Gets as won
     *
     * @return bool
     */
    public function getWon()
    {
        return $this->won;
    }

    /**
     * Sets a new won
     *
     * @param bool $won
     * @return self
     */
    public function setWon($won)
    {
        $this->won = $won;
        return $this;
    }


}

