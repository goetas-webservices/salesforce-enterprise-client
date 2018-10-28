<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribeDataCategoryGroupResultType
 *
 *
 * XSD Type: DescribeDataCategoryGroupResult
 */
class DescribeDataCategoryGroupResultType
{

    /**
     * @property int $categoryCount
     */
    private $categoryCount = null;

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
     * Gets as categoryCount
     *
     * @return int
     */
    public function getCategoryCount()
    {
        return $this->categoryCount;
    }

    /**
     * Sets a new categoryCount
     *
     * @param int $categoryCount
     * @return self
     */
    public function setCategoryCount($categoryCount)
    {
        $this->categoryCount = $categoryCount;
        return $this;
    }

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


}

