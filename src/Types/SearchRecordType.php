<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing SearchRecordType
 *
 *
 * XSD Type: SearchRecord
 */
class SearchRecordType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $record
     */
    private $record = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\SearchRecordMetadataType $searchRecordMetadata
     */
    private $searchRecordMetadata = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\SearchSnippetType $snippet
     */
    private $snippet = null;

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

    /**
     * Gets as searchRecordMetadata
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\SearchRecordMetadataType
     */
    public function getSearchRecordMetadata()
    {
        return $this->searchRecordMetadata;
    }

    /**
     * Sets a new searchRecordMetadata
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\SearchRecordMetadataType $searchRecordMetadata
     * @return self
     */
    public function setSearchRecordMetadata(\GoetasWebservices\Client\SalesforceEnterprise\Types\SearchRecordMetadataType $searchRecordMetadata)
    {
        $this->searchRecordMetadata = $searchRecordMetadata;
        return $this;
    }

    /**
     * Gets as snippet
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\SearchSnippetType
     */
    public function getSnippet()
    {
        return $this->snippet;
    }

    /**
     * Sets a new snippet
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\SearchSnippetType $snippet
     * @return self
     */
    public function setSnippet(\GoetasWebservices\Client\SalesforceEnterprise\Types\SearchSnippetType $snippet)
    {
        $this->snippet = $snippet;
        return $this;
    }


}

