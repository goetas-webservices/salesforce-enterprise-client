<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DataCategoryType
 *
 *
 * XSD Type: DataCategory
 */
class DataCategoryType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DataCategoryType[] $childCategories
     */
    private $childCategories = [
        
    ];

    /**
     * @property string $label
     */
    private $label = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * Adds as childCategories
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DataCategoryType $childCategories
     */
    public function addToChildCategories(\GoetasWebservices\Client\SalesforceEnterprise\Types\DataCategoryType $childCategories)
    {
        $this->childCategories[] = $childCategories;
        return $this;
    }

    /**
     * isset childCategories
     *
     * @param int|string $index
     * @return bool
     */
    public function issetChildCategories($index)
    {
        return isset($this->childCategories[$index]);
    }

    /**
     * unset childCategories
     *
     * @param int|string $index
     * @return void
     */
    public function unsetChildCategories($index)
    {
        unset($this->childCategories[$index]);
    }

    /**
     * Gets as childCategories
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DataCategoryType[]
     */
    public function getChildCategories()
    {
        return $this->childCategories;
    }

    /**
     * Sets a new childCategories
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DataCategoryType[] $childCategories
     * @return self
     */
    public function setChildCategories(array $childCategories)
    {
        $this->childCategories = $childCategories;
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
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }


}

