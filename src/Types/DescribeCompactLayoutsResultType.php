<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribeCompactLayoutsResultType
 *
 *
 * XSD Type: DescribeCompactLayoutsResult
 */
class DescribeCompactLayoutsResultType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeCompactLayoutType[] $compactLayouts
     */
    private $compactLayouts = [
        
    ];

    /**
     * @property string $defaultCompactLayoutId
     */
    private $defaultCompactLayoutId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\RecordTypeCompactLayoutMappingType[] $recordTypeCompactLayoutMappings
     */
    private $recordTypeCompactLayoutMappings = [
        
    ];

    /**
     * Adds as compactLayouts
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeCompactLayoutType $compactLayouts
     */
    public function addToCompactLayouts(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeCompactLayoutType $compactLayouts)
    {
        $this->compactLayouts[] = $compactLayouts;
        return $this;
    }

    /**
     * isset compactLayouts
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCompactLayouts($index)
    {
        return isset($this->compactLayouts[$index]);
    }

    /**
     * unset compactLayouts
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCompactLayouts($index)
    {
        unset($this->compactLayouts[$index]);
    }

    /**
     * Gets as compactLayouts
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeCompactLayoutType[]
     */
    public function getCompactLayouts()
    {
        return $this->compactLayouts;
    }

    /**
     * Sets a new compactLayouts
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeCompactLayoutType[] $compactLayouts
     * @return self
     */
    public function setCompactLayouts(array $compactLayouts)
    {
        $this->compactLayouts = $compactLayouts;
        return $this;
    }

    /**
     * Gets as defaultCompactLayoutId
     *
     * @return string
     */
    public function getDefaultCompactLayoutId()
    {
        return $this->defaultCompactLayoutId;
    }

    /**
     * Sets a new defaultCompactLayoutId
     *
     * @param string $defaultCompactLayoutId
     * @return self
     */
    public function setDefaultCompactLayoutId($defaultCompactLayoutId)
    {
        $this->defaultCompactLayoutId = $defaultCompactLayoutId;
        return $this;
    }

    /**
     * Adds as recordTypeCompactLayoutMappings
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\RecordTypeCompactLayoutMappingType $recordTypeCompactLayoutMappings
     */
    public function addToRecordTypeCompactLayoutMappings(\GoetasWebservices\Client\SalesforceEnterprise\Types\RecordTypeCompactLayoutMappingType $recordTypeCompactLayoutMappings)
    {
        $this->recordTypeCompactLayoutMappings[] = $recordTypeCompactLayoutMappings;
        return $this;
    }

    /**
     * isset recordTypeCompactLayoutMappings
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRecordTypeCompactLayoutMappings($index)
    {
        return isset($this->recordTypeCompactLayoutMappings[$index]);
    }

    /**
     * unset recordTypeCompactLayoutMappings
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRecordTypeCompactLayoutMappings($index)
    {
        unset($this->recordTypeCompactLayoutMappings[$index]);
    }

    /**
     * Gets as recordTypeCompactLayoutMappings
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\RecordTypeCompactLayoutMappingType[]
     */
    public function getRecordTypeCompactLayoutMappings()
    {
        return $this->recordTypeCompactLayoutMappings;
    }

    /**
     * Sets a new recordTypeCompactLayoutMappings
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\RecordTypeCompactLayoutMappingType[] $recordTypeCompactLayoutMappings
     * @return self
     */
    public function setRecordTypeCompactLayoutMappings(array $recordTypeCompactLayoutMappings)
    {
        $this->recordTypeCompactLayoutMappings = $recordTypeCompactLayoutMappings;
        return $this;
    }


}

