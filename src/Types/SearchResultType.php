<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing SearchResultType
 *
 *
 * XSD Type: SearchResult
 */
class SearchResultType
{

    /**
     * @property string $queryId
     */
    private $queryId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\SearchRecordType[] $searchRecords
     */
    private $searchRecords = [
        
    ];

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\SearchResultsMetadataType $searchResultsMetadata
     */
    private $searchResultsMetadata = null;

    /**
     * Gets as queryId
     *
     * @return string
     */
    public function getQueryId()
    {
        return $this->queryId;
    }

    /**
     * Sets a new queryId
     *
     * @param string $queryId
     * @return self
     */
    public function setQueryId($queryId)
    {
        $this->queryId = $queryId;
        return $this;
    }

    /**
     * Adds as searchRecords
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\SearchRecordType $searchRecords
     */
    public function addToSearchRecords(\GoetasWebservices\Client\SalesforceEnterprise\Types\SearchRecordType $searchRecords)
    {
        $this->searchRecords[] = $searchRecords;
        return $this;
    }

    /**
     * isset searchRecords
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSearchRecords($index)
    {
        return isset($this->searchRecords[$index]);
    }

    /**
     * unset searchRecords
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSearchRecords($index)
    {
        unset($this->searchRecords[$index]);
    }

    /**
     * Gets as searchRecords
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\SearchRecordType[]
     */
    public function getSearchRecords()
    {
        return $this->searchRecords;
    }

    /**
     * Sets a new searchRecords
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\SearchRecordType[] $searchRecords
     * @return self
     */
    public function setSearchRecords(array $searchRecords)
    {
        $this->searchRecords = $searchRecords;
        return $this;
    }

    /**
     * Gets as searchResultsMetadata
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\SearchResultsMetadataType
     */
    public function getSearchResultsMetadata()
    {
        return $this->searchResultsMetadata;
    }

    /**
     * Sets a new searchResultsMetadata
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\SearchResultsMetadataType $searchResultsMetadata
     * @return self
     */
    public function setSearchResultsMetadata(\GoetasWebservices\Client\SalesforceEnterprise\Types\SearchResultsMetadataType $searchResultsMetadata)
    {
        $this->searchResultsMetadata = $searchResultsMetadata;
        return $this;
    }


}

