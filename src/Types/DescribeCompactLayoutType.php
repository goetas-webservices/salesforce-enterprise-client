<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribeCompactLayoutType
 *
 *
 * XSD Type: DescribeCompactLayout
 */
class DescribeCompactLayoutType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutButtonType[] $actions
     */
    private $actions = [
        
    ];

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutItemType[] $fieldItems
     */
    private $fieldItems = [
        
    ];

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutItemType[] $imageItems
     */
    private $imageItems = [
        
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
     * @property string $objectType
     */
    private $objectType = null;

    /**
     * Adds as actions
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutButtonType $actions
     */
    public function addToActions(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutButtonType $actions)
    {
        $this->actions[] = $actions;
        return $this;
    }

    /**
     * isset actions
     *
     * @param int|string $index
     * @return bool
     */
    public function issetActions($index)
    {
        return isset($this->actions[$index]);
    }

    /**
     * unset actions
     *
     * @param int|string $index
     * @return void
     */
    public function unsetActions($index)
    {
        unset($this->actions[$index]);
    }

    /**
     * Gets as actions
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutButtonType[]
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * Sets a new actions
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutButtonType[] $actions
     * @return self
     */
    public function setActions(array $actions)
    {
        $this->actions = $actions;
        return $this;
    }

    /**
     * Adds as fieldItems
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutItemType $fieldItems
     */
    public function addToFieldItems(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutItemType $fieldItems)
    {
        $this->fieldItems[] = $fieldItems;
        return $this;
    }

    /**
     * isset fieldItems
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFieldItems($index)
    {
        return isset($this->fieldItems[$index]);
    }

    /**
     * unset fieldItems
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFieldItems($index)
    {
        unset($this->fieldItems[$index]);
    }

    /**
     * Gets as fieldItems
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutItemType[]
     */
    public function getFieldItems()
    {
        return $this->fieldItems;
    }

    /**
     * Sets a new fieldItems
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutItemType[] $fieldItems
     * @return self
     */
    public function setFieldItems(array $fieldItems)
    {
        $this->fieldItems = $fieldItems;
        return $this;
    }

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Adds as imageItems
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutItemType $imageItems
     */
    public function addToImageItems(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutItemType $imageItems)
    {
        $this->imageItems[] = $imageItems;
        return $this;
    }

    /**
     * isset imageItems
     *
     * @param int|string $index
     * @return bool
     */
    public function issetImageItems($index)
    {
        return isset($this->imageItems[$index]);
    }

    /**
     * unset imageItems
     *
     * @param int|string $index
     * @return void
     */
    public function unsetImageItems($index)
    {
        unset($this->imageItems[$index]);
    }

    /**
     * Gets as imageItems
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutItemType[]
     */
    public function getImageItems()
    {
        return $this->imageItems;
    }

    /**
     * Sets a new imageItems
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutItemType[] $imageItems
     * @return self
     */
    public function setImageItems(array $imageItems)
    {
        $this->imageItems = $imageItems;
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
     * Gets as objectType
     *
     * @return string
     */
    public function getObjectType()
    {
        return $this->objectType;
    }

    /**
     * Sets a new objectType
     *
     * @param string $objectType
     * @return self
     */
    public function setObjectType($objectType)
    {
        $this->objectType = $objectType;
        return $this;
    }


}

