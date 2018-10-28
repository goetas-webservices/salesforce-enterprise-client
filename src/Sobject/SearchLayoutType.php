<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing SearchLayoutType
 *
 *
 * XSD Type: SearchLayout
 */
class SearchLayoutType extends SObjectType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\SearchLayoutButtonsDisplayedType $buttonsDisplayed
     */
    private $buttonsDisplayed = null;

    /**
     * @property string $durableId
     */
    private $durableId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\EntityDefinitionType $entityDefinition
     */
    private $entityDefinition = null;

    /**
     * @property string $entityDefinitionId
     */
    private $entityDefinitionId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\SearchLayoutFieldsDisplayedType $fieldsDisplayed
     */
    private $fieldsDisplayed = null;

    /**
     * @property string $label
     */
    private $label = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $lastModifiedBy
     */
    private $lastModifiedBy = null;

    /**
     * @property string $lastModifiedById
     */
    private $lastModifiedById = null;

    /**
     * @property \DateTime $lastModifiedDate
     */
    private $lastModifiedDate = null;

    /**
     * @property string $layoutType
     */
    private $layoutType = null;

    /**
     * Gets as buttonsDisplayed
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\SearchLayoutButtonsDisplayedType
     */
    public function getButtonsDisplayed()
    {
        return $this->buttonsDisplayed;
    }

    /**
     * Sets a new buttonsDisplayed
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\SearchLayoutButtonsDisplayedType $buttonsDisplayed
     * @return self
     */
    public function setButtonsDisplayed(\GoetasWebservices\Client\SalesforceEnterprise\Types\SearchLayoutButtonsDisplayedType $buttonsDisplayed)
    {
        $this->buttonsDisplayed = $buttonsDisplayed;
        return $this;
    }

    /**
     * Gets as durableId
     *
     * @return string
     */
    public function getDurableId()
    {
        return $this->durableId;
    }

    /**
     * Sets a new durableId
     *
     * @param string $durableId
     * @return self
     */
    public function setDurableId($durableId)
    {
        $this->durableId = $durableId;
        return $this;
    }

    /**
     * Gets as entityDefinition
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\EntityDefinitionType
     */
    public function getEntityDefinition()
    {
        return $this->entityDefinition;
    }

    /**
     * Sets a new entityDefinition
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\EntityDefinitionType $entityDefinition
     * @return self
     */
    public function setEntityDefinition(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\EntityDefinitionType $entityDefinition)
    {
        $this->entityDefinition = $entityDefinition;
        return $this;
    }

    /**
     * Gets as entityDefinitionId
     *
     * @return string
     */
    public function getEntityDefinitionId()
    {
        return $this->entityDefinitionId;
    }

    /**
     * Sets a new entityDefinitionId
     *
     * @param string $entityDefinitionId
     * @return self
     */
    public function setEntityDefinitionId($entityDefinitionId)
    {
        $this->entityDefinitionId = $entityDefinitionId;
        return $this;
    }

    /**
     * Gets as fieldsDisplayed
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\SearchLayoutFieldsDisplayedType
     */
    public function getFieldsDisplayed()
    {
        return $this->fieldsDisplayed;
    }

    /**
     * Sets a new fieldsDisplayed
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\SearchLayoutFieldsDisplayedType $fieldsDisplayed
     * @return self
     */
    public function setFieldsDisplayed(\GoetasWebservices\Client\SalesforceEnterprise\Types\SearchLayoutFieldsDisplayedType $fieldsDisplayed)
    {
        $this->fieldsDisplayed = $fieldsDisplayed;
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
     * Gets as lastModifiedBy
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType
     */
    public function getLastModifiedBy()
    {
        return $this->lastModifiedBy;
    }

    /**
     * Sets a new lastModifiedBy
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $lastModifiedBy
     * @return self
     */
    public function setLastModifiedBy(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $lastModifiedBy)
    {
        $this->lastModifiedBy = $lastModifiedBy;
        return $this;
    }

    /**
     * Gets as lastModifiedById
     *
     * @return string
     */
    public function getLastModifiedById()
    {
        return $this->lastModifiedById;
    }

    /**
     * Sets a new lastModifiedById
     *
     * @param string $lastModifiedById
     * @return self
     */
    public function setLastModifiedById($lastModifiedById)
    {
        $this->lastModifiedById = $lastModifiedById;
        return $this;
    }

    /**
     * Gets as lastModifiedDate
     *
     * @return \DateTime
     */
    public function getLastModifiedDate()
    {
        return $this->lastModifiedDate;
    }

    /**
     * Sets a new lastModifiedDate
     *
     * @param \DateTime $lastModifiedDate
     * @return self
     */
    public function setLastModifiedDate(\DateTime $lastModifiedDate)
    {
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }

    /**
     * Gets as layoutType
     *
     * @return string
     */
    public function getLayoutType()
    {
        return $this->layoutType;
    }

    /**
     * Sets a new layoutType
     *
     * @param string $layoutType
     * @return self
     */
    public function setLayoutType($layoutType)
    {
        $this->layoutType = $layoutType;
        return $this;
    }


}

