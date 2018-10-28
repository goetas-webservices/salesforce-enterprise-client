<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing EntitySearchMetadataType
 *
 *
 * XSD Type: EntitySearchMetadata
 */
class EntitySearchMetadataType
{

    /**
     * @property string $entityName
     */
    private $entityName = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\FieldLevelSearchMetadataType[] $fieldMetadata
     */
    private $fieldMetadata = [
        
    ];

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\EntityIntentQueryMetadataType $intentQueryMetadata
     */
    private $intentQueryMetadata = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\EntitySearchPromotionMetadataType $searchPromotionMetadata
     */
    private $searchPromotionMetadata = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\EntitySpellCorrectionMetadataType $spellCorrectionMetadata
     */
    private $spellCorrectionMetadata = null;

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

    /**
     * Adds as fieldMetadata
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\FieldLevelSearchMetadataType $fieldMetadata
     */
    public function addToFieldMetadata(\GoetasWebservices\Client\SalesforceEnterprise\Types\FieldLevelSearchMetadataType $fieldMetadata)
    {
        $this->fieldMetadata[] = $fieldMetadata;
        return $this;
    }

    /**
     * isset fieldMetadata
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFieldMetadata($index)
    {
        return isset($this->fieldMetadata[$index]);
    }

    /**
     * unset fieldMetadata
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFieldMetadata($index)
    {
        unset($this->fieldMetadata[$index]);
    }

    /**
     * Gets as fieldMetadata
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\FieldLevelSearchMetadataType[]
     */
    public function getFieldMetadata()
    {
        return $this->fieldMetadata;
    }

    /**
     * Sets a new fieldMetadata
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\FieldLevelSearchMetadataType[] $fieldMetadata
     * @return self
     */
    public function setFieldMetadata(array $fieldMetadata)
    {
        $this->fieldMetadata = $fieldMetadata;
        return $this;
    }

    /**
     * Gets as intentQueryMetadata
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\EntityIntentQueryMetadataType
     */
    public function getIntentQueryMetadata()
    {
        return $this->intentQueryMetadata;
    }

    /**
     * Sets a new intentQueryMetadata
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\EntityIntentQueryMetadataType $intentQueryMetadata
     * @return self
     */
    public function setIntentQueryMetadata(\GoetasWebservices\Client\SalesforceEnterprise\Types\EntityIntentQueryMetadataType $intentQueryMetadata)
    {
        $this->intentQueryMetadata = $intentQueryMetadata;
        return $this;
    }

    /**
     * Gets as searchPromotionMetadata
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\EntitySearchPromotionMetadataType
     */
    public function getSearchPromotionMetadata()
    {
        return $this->searchPromotionMetadata;
    }

    /**
     * Sets a new searchPromotionMetadata
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\EntitySearchPromotionMetadataType $searchPromotionMetadata
     * @return self
     */
    public function setSearchPromotionMetadata(\GoetasWebservices\Client\SalesforceEnterprise\Types\EntitySearchPromotionMetadataType $searchPromotionMetadata)
    {
        $this->searchPromotionMetadata = $searchPromotionMetadata;
        return $this;
    }

    /**
     * Gets as spellCorrectionMetadata
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\EntitySpellCorrectionMetadataType
     */
    public function getSpellCorrectionMetadata()
    {
        return $this->spellCorrectionMetadata;
    }

    /**
     * Sets a new spellCorrectionMetadata
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\EntitySpellCorrectionMetadataType $spellCorrectionMetadata
     * @return self
     */
    public function setSpellCorrectionMetadata(\GoetasWebservices\Client\SalesforceEnterprise\Types\EntitySpellCorrectionMetadataType $spellCorrectionMetadata)
    {
        $this->spellCorrectionMetadata = $spellCorrectionMetadata;
        return $this;
    }


}

