<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribePathAssistantType
 *
 *
 * XSD Type: DescribePathAssistant
 */
class DescribePathAssistantType
{

    /**
     * @property bool $active
     */
    private $active = null;

    /**
     * @property string $apiName
     */
    private $apiName = null;

    /**
     * @property string $label
     */
    private $label = null;

    /**
     * @property string $pathPicklistField
     */
    private $pathPicklistField = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\PicklistForRecordType[] $picklistsForRecordType
     */
    private $picklistsForRecordType = [
        
    ];

    /**
     * @property string $recordTypeId
     */
    private $recordTypeId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribePathAssistantStepType[] $steps
     */
    private $steps = [
        
    ];

    /**
     * Gets as active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Sets a new active
     *
     * @param bool $active
     * @return self
     */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }

    /**
     * Gets as apiName
     *
     * @return string
     */
    public function getApiName()
    {
        return $this->apiName;
    }

    /**
     * Sets a new apiName
     *
     * @param string $apiName
     * @return self
     */
    public function setApiName($apiName)
    {
        $this->apiName = $apiName;
        return $this;
    }

    /**
     * Gets as label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Sets a new label
     *
     * @param string $label
     * @return self
     */
    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }

    /**
     * Gets as pathPicklistField
     *
     * @return string
     */
    public function getPathPicklistField()
    {
        return $this->pathPicklistField;
    }

    /**
     * Sets a new pathPicklistField
     *
     * @param string $pathPicklistField
     * @return self
     */
    public function setPathPicklistField($pathPicklistField)
    {
        $this->pathPicklistField = $pathPicklistField;
        return $this;
    }

    /**
     * Adds as picklistsForRecordType
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\PicklistForRecordType $picklistsForRecordType
     */
    public function addToPicklistsForRecordType(\GoetasWebservices\Client\SalesforceEnterprise\Types\PicklistForRecordType $picklistsForRecordType)
    {
        $this->picklistsForRecordType[] = $picklistsForRecordType;
        return $this;
    }

    /**
     * isset picklistsForRecordType
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPicklistsForRecordType($index)
    {
        return isset($this->picklistsForRecordType[$index]);
    }

    /**
     * unset picklistsForRecordType
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPicklistsForRecordType($index)
    {
        unset($this->picklistsForRecordType[$index]);
    }

    /**
     * Gets as picklistsForRecordType
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\PicklistForRecordType[]
     */
    public function getPicklistsForRecordType()
    {
        return $this->picklistsForRecordType;
    }

    /**
     * Sets a new picklistsForRecordType
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\PicklistForRecordType[] $picklistsForRecordType
     * @return self
     */
    public function setPicklistsForRecordType(array $picklistsForRecordType)
    {
        $this->picklistsForRecordType = $picklistsForRecordType;
        return $this;
    }

    /**
     * Gets as recordTypeId
     *
     * @return string
     */
    public function getRecordTypeId()
    {
        return $this->recordTypeId;
    }

    /**
     * Sets a new recordTypeId
     *
     * @param string $recordTypeId
     * @return self
     */
    public function setRecordTypeId($recordTypeId)
    {
        $this->recordTypeId = $recordTypeId;
        return $this;
    }

    /**
     * Adds as steps
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribePathAssistantStepType $steps
     */
    public function addToSteps(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribePathAssistantStepType $steps)
    {
        $this->steps[] = $steps;
        return $this;
    }

    /**
     * isset steps
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSteps($index)
    {
        return isset($this->steps[$index]);
    }

    /**
     * unset steps
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSteps($index)
    {
        unset($this->steps[$index]);
    }

    /**
     * Gets as steps
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribePathAssistantStepType[]
     */
    public function getSteps()
    {
        return $this->steps;
    }

    /**
     * Sets a new steps
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribePathAssistantStepType[] $steps
     * @return self
     */
    public function setSteps(array $steps)
    {
        $this->steps = $steps;
        return $this;
    }


}

