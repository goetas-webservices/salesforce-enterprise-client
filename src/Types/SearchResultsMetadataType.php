<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing SearchResultsMetadataType
 *
 *
 * XSD Type: SearchResultsMetadata
 */
class SearchResultsMetadataType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\LabelsSearchMetadataType[] $entityLabelMetadata
     */
    private $entityLabelMetadata = [
        
    ];

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\EntitySearchMetadataType[] $entityMetadata
     */
    private $entityMetadata = [
        
    ];

    /**
     * Adds as entityLabelMetadata
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\LabelsSearchMetadataType $entityLabelMetadata
     */
    public function addToEntityLabelMetadata(\GoetasWebservices\Client\SalesforceEnterprise\Types\LabelsSearchMetadataType $entityLabelMetadata)
    {
        $this->entityLabelMetadata[] = $entityLabelMetadata;
        return $this;
    }

    /**
     * isset entityLabelMetadata
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEntityLabelMetadata($index)
    {
        return isset($this->entityLabelMetadata[$index]);
    }

    /**
     * unset entityLabelMetadata
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEntityLabelMetadata($index)
    {
        unset($this->entityLabelMetadata[$index]);
    }

    /**
     * Gets as entityLabelMetadata
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\LabelsSearchMetadataType[]
     */
    public function getEntityLabelMetadata()
    {
        return $this->entityLabelMetadata;
    }

    /**
     * Sets a new entityLabelMetadata
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\LabelsSearchMetadataType[] $entityLabelMetadata
     * @return self
     */
    public function setEntityLabelMetadata(array $entityLabelMetadata)
    {
        $this->entityLabelMetadata = $entityLabelMetadata;
        return $this;
    }

    /**
     * Adds as entityMetadata
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\EntitySearchMetadataType $entityMetadata
     */
    public function addToEntityMetadata(\GoetasWebservices\Client\SalesforceEnterprise\Types\EntitySearchMetadataType $entityMetadata)
    {
        $this->entityMetadata[] = $entityMetadata;
        return $this;
    }

    /**
     * isset entityMetadata
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEntityMetadata($index)
    {
        return isset($this->entityMetadata[$index]);
    }

    /**
     * unset entityMetadata
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEntityMetadata($index)
    {
        unset($this->entityMetadata[$index]);
    }

    /**
     * Gets as entityMetadata
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\EntitySearchMetadataType[]
     */
    public function getEntityMetadata()
    {
        return $this->entityMetadata;
    }

    /**
     * Sets a new entityMetadata
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\EntitySearchMetadataType[] $entityMetadata
     * @return self
     */
    public function setEntityMetadata(array $entityMetadata)
    {
        $this->entityMetadata = $entityMetadata;
        return $this;
    }


}

