<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribeLayoutResultType
 *
 *
 * XSD Type: DescribeLayoutResult
 */
class DescribeLayoutResultType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutType[] $layouts
     */
    private $layouts = [
        
    ];

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\RecordTypeMappingType[] $recordTypeMappings
     */
    private $recordTypeMappings = [
        
    ];

    /**
     * @property bool $recordTypeSelectorRequired
     */
    private $recordTypeSelectorRequired = null;

    /**
     * Adds as layouts
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutType $layouts
     */
    public function addToLayouts(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutType $layouts)
    {
        $this->layouts[] = $layouts;
        return $this;
    }

    /**
     * isset layouts
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLayouts($index)
    {
        return isset($this->layouts[$index]);
    }

    /**
     * unset layouts
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLayouts($index)
    {
        unset($this->layouts[$index]);
    }

    /**
     * Gets as layouts
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutType[]
     */
    public function getLayouts()
    {
        return $this->layouts;
    }

    /**
     * Sets a new layouts
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutType[] $layouts
     * @return self
     */
    public function setLayouts(array $layouts)
    {
        $this->layouts = $layouts;
        return $this;
    }

    /**
     * Adds as recordTypeMappings
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\RecordTypeMappingType $recordTypeMappings
     */
    public function addToRecordTypeMappings(\GoetasWebservices\Client\SalesforceEnterprise\Types\RecordTypeMappingType $recordTypeMappings)
    {
        $this->recordTypeMappings[] = $recordTypeMappings;
        return $this;
    }

    /**
     * isset recordTypeMappings
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRecordTypeMappings($index)
    {
        return isset($this->recordTypeMappings[$index]);
    }

    /**
     * unset recordTypeMappings
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRecordTypeMappings($index)
    {
        unset($this->recordTypeMappings[$index]);
    }

    /**
     * Gets as recordTypeMappings
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\RecordTypeMappingType[]
     */
    public function getRecordTypeMappings()
    {
        return $this->recordTypeMappings;
    }

    /**
     * Sets a new recordTypeMappings
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\RecordTypeMappingType[] $recordTypeMappings
     * @return self
     */
    public function setRecordTypeMappings(array $recordTypeMappings)
    {
        $this->recordTypeMappings = $recordTypeMappings;
        return $this;
    }

    /**
     * Gets as recordTypeSelectorRequired
     *
     * @return bool
     */
    public function getRecordTypeSelectorRequired()
    {
        return $this->recordTypeSelectorRequired;
    }

    /**
     * Sets a new recordTypeSelectorRequired
     *
     * @param bool $recordTypeSelectorRequired
     * @return self
     */
    public function setRecordTypeSelectorRequired($recordTypeSelectorRequired)
    {
        $this->recordTypeSelectorRequired = $recordTypeSelectorRequired;
        return $this;
    }


}

