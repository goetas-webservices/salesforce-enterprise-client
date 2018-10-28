<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribeDataCategoryGroupStructureResultType
 *
 *
 * XSD Type: DescribeDataCategoryGroupStructureResult
 */
class DescribeDataCategoryGroupStructureResultType
{

    /**
     * @property string $description
     */
    private $description = null;

    /**
     * @property string $label
     */
    private $label = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $sobject
     */
    private $sobject = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DataCategoryType[] $topCategories
     */
    private $topCategories = [
        
    ];

    /**
     * Gets as description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
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

    /**
     * Gets as sobject
     *
     * @return string
     */
    public function getSobject()
    {
        return $this->sobject;
    }

    /**
     * Sets a new sobject
     *
     * @param string $sobject
     * @return self
     */
    public function setSobject($sobject)
    {
        $this->sobject = $sobject;
        return $this;
    }

    /**
     * Adds as topCategories
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DataCategoryType $topCategories
     */
    public function addToTopCategories(\GoetasWebservices\Client\SalesforceEnterprise\Types\DataCategoryType $topCategories)
    {
        $this->topCategories[] = $topCategories;
        return $this;
    }

    /**
     * isset topCategories
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTopCategories($index)
    {
        return isset($this->topCategories[$index]);
    }

    /**
     * unset topCategories
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTopCategories($index)
    {
        unset($this->topCategories[$index]);
    }

    /**
     * Gets as topCategories
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DataCategoryType[]
     */
    public function getTopCategories()
    {
        return $this->topCategories;
    }

    /**
     * Sets a new topCategories
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DataCategoryType[] $topCategories
     * @return self
     */
    public function setTopCategories(array $topCategories)
    {
        $this->topCategories = $topCategories;
        return $this;
    }


}

