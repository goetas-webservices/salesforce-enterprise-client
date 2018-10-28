<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing MatchRecordType
 *
 *
 * XSD Type: MatchRecord
 */
class MatchRecordType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\AdditionalInformationMapType[] $additionalInformation
     */
    private $additionalInformation = [
        
    ];

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\FieldDiffType[] $fieldDiffs
     */
    private $fieldDiffs = [
        
    ];

    /**
     * @property float $matchConfidence
     */
    private $matchConfidence = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $record
     */
    private $record = null;

    /**
     * Adds as additionalInformation
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\AdditionalInformationMapType $additionalInformation
     */
    public function addToAdditionalInformation(\GoetasWebservices\Client\SalesforceEnterprise\Types\AdditionalInformationMapType $additionalInformation)
    {
        $this->additionalInformation[] = $additionalInformation;
        return $this;
    }

    /**
     * isset additionalInformation
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalInformation($index)
    {
        return isset($this->additionalInformation[$index]);
    }

    /**
     * unset additionalInformation
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalInformation($index)
    {
        unset($this->additionalInformation[$index]);
    }

    /**
     * Gets as additionalInformation
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\AdditionalInformationMapType[]
     */
    public function getAdditionalInformation()
    {
        return $this->additionalInformation;
    }

    /**
     * Sets a new additionalInformation
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\AdditionalInformationMapType[] $additionalInformation
     * @return self
     */
    public function setAdditionalInformation(array $additionalInformation)
    {
        $this->additionalInformation = $additionalInformation;
        return $this;
    }

    /**
     * Adds as fieldDiffs
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\FieldDiffType $fieldDiffs
     */
    public function addToFieldDiffs(\GoetasWebservices\Client\SalesforceEnterprise\Types\FieldDiffType $fieldDiffs)
    {
        $this->fieldDiffs[] = $fieldDiffs;
        return $this;
    }

    /**
     * isset fieldDiffs
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFieldDiffs($index)
    {
        return isset($this->fieldDiffs[$index]);
    }

    /**
     * unset fieldDiffs
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFieldDiffs($index)
    {
        unset($this->fieldDiffs[$index]);
    }

    /**
     * Gets as fieldDiffs
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\FieldDiffType[]
     */
    public function getFieldDiffs()
    {
        return $this->fieldDiffs;
    }

    /**
     * Sets a new fieldDiffs
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\FieldDiffType[] $fieldDiffs
     * @return self
     */
    public function setFieldDiffs(array $fieldDiffs)
    {
        $this->fieldDiffs = $fieldDiffs;
        return $this;
    }

    /**
     * Gets as matchConfidence
     *
     * @return float
     */
    public function getMatchConfidence()
    {
        return $this->matchConfidence;
    }

    /**
     * Sets a new matchConfidence
     *
     * @param float $matchConfidence
     * @return self
     */
    public function setMatchConfidence($matchConfidence)
    {
        $this->matchConfidence = $matchConfidence;
        return $this;
    }

    /**
     * Gets as record
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType
     */
    public function getRecord()
    {
        return $this->record;
    }

    /**
     * Sets a new record
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $record
     * @return self
     */
    public function setRecord(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $record)
    {
        $this->record = $record;
        return $this;
    }


}

