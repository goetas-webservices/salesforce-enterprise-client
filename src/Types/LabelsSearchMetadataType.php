<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing LabelsSearchMetadataType
 *
 *
 * XSD Type: LabelsSearchMetadata
 */
class LabelsSearchMetadataType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\NameValuePairType[] $entityFieldLabels
     */
    private $entityFieldLabels = [
        
    ];

    /**
     * @property string $entityName
     */
    private $entityName = null;

    /**
     * Adds as entityFieldLabels
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\NameValuePairType $entityFieldLabels
     */
    public function addToEntityFieldLabels(\GoetasWebservices\Client\SalesforceEnterprise\Types\NameValuePairType $entityFieldLabels)
    {
        $this->entityFieldLabels[] = $entityFieldLabels;
        return $this;
    }

    /**
     * isset entityFieldLabels
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEntityFieldLabels($index)
    {
        return isset($this->entityFieldLabels[$index]);
    }

    /**
     * unset entityFieldLabels
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEntityFieldLabels($index)
    {
        unset($this->entityFieldLabels[$index]);
    }

    /**
     * Gets as entityFieldLabels
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\NameValuePairType[]
     */
    public function getEntityFieldLabels()
    {
        return $this->entityFieldLabels;
    }

    /**
     * Sets a new entityFieldLabels
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\NameValuePairType[] $entityFieldLabels
     * @return self
     */
    public function setEntityFieldLabels(array $entityFieldLabels)
    {
        $this->entityFieldLabels = $entityFieldLabels;
        return $this;
    }

    /**
     * Gets as entityName
     *
     * @return string
     */
    public function getEntityName()
    {
        return $this->entityName;
    }

    /**
     * Sets a new entityName
     *
     * @param string $entityName
     * @return self
     */
    public function setEntityName($entityName)
    {
        $this->entityName = $entityName;
        return $this;
    }


}

