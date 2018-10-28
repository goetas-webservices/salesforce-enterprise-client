<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing MergeRequestType
 *
 *
 * XSD Type: MergeRequest
 */
class MergeRequestType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\AdditionalInformationMapType[] $additionalInformationMap
     */
    private $additionalInformationMap = [
        
    ];

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $masterRecord
     */
    private $masterRecord = null;

    /**
     * @property string[] $recordToMergeIds
     */
    private $recordToMergeIds = [
        
    ];

    /**
     * Adds as additionalInformationMap
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\AdditionalInformationMapType $additionalInformationMap
     */
    public function addToAdditionalInformationMap(\GoetasWebservices\Client\SalesforceEnterprise\Types\AdditionalInformationMapType $additionalInformationMap)
    {
        $this->additionalInformationMap[] = $additionalInformationMap;
        return $this;
    }

    /**
     * isset additionalInformationMap
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalInformationMap($index)
    {
        return isset($this->additionalInformationMap[$index]);
    }

    /**
     * unset additionalInformationMap
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalInformationMap($index)
    {
        unset($this->additionalInformationMap[$index]);
    }

    /**
     * Gets as additionalInformationMap
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\AdditionalInformationMapType[]
     */
    public function getAdditionalInformationMap()
    {
        return $this->additionalInformationMap;
    }

    /**
     * Sets a new additionalInformationMap
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\AdditionalInformationMapType[] $additionalInformationMap
     * @return self
     */
    public function setAdditionalInformationMap(array $additionalInformationMap)
    {
        $this->additionalInformationMap = $additionalInformationMap;
        return $this;
    }

    /**
     * Gets as masterRecord
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType
     */
    public function getMasterRecord()
    {
        return $this->masterRecord;
    }

    /**
     * Sets a new masterRecord
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $masterRecord
     * @return self
     */
    public function setMasterRecord(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $masterRecord)
    {
        $this->masterRecord = $masterRecord;
        return $this;
    }

    /**
     * Adds as recordToMergeIds
     *
     * @return self
     * @param string $recordToMergeIds
     */
    public function addToRecordToMergeIds($recordToMergeIds)
    {
        $this->recordToMergeIds[] = $recordToMergeIds;
        return $this;
    }

    /**
     * isset recordToMergeIds
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRecordToMergeIds($index)
    {
        return isset($this->recordToMergeIds[$index]);
    }

    /**
     * unset recordToMergeIds
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRecordToMergeIds($index)
    {
        unset($this->recordToMergeIds[$index]);
    }

    /**
     * Gets as recordToMergeIds
     *
     * @return string[]
     */
    public function getRecordToMergeIds()
    {
        return $this->recordToMergeIds;
    }

    /**
     * Sets a new recordToMergeIds
     *
     * @param string $recordToMergeIds
     * @return self
     */
    public function setRecordToMergeIds(array $recordToMergeIds)
    {
        $this->recordToMergeIds = $recordToMergeIds;
        return $this;
    }


}

