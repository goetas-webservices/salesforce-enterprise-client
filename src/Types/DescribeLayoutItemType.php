<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribeLayoutItemType
 *
 *
 * XSD Type: DescribeLayoutItem
 */
class DescribeLayoutItemType
{

    /**
     * @property bool $editableForNew
     */
    private $editableForNew = null;

    /**
     * @property bool $editableForUpdate
     */
    private $editableForUpdate = null;

    /**
     * @property string $label
     */
    private $label = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutComponentType[] $layoutComponents
     */
    private $layoutComponents = [
        
    ];

    /**
     * @property bool $placeholder
     */
    private $placeholder = null;

    /**
     * @property bool $required
     */
    private $required = null;

    /**
     * Gets as editableForNew
     *
     * @return bool
     */
    public function getEditableForNew()
    {
        return $this->editableForNew;
    }

    /**
     * Sets a new editableForNew
     *
     * @param bool $editableForNew
     * @return self
     */
    public function setEditableForNew($editableForNew)
    {
        $this->editableForNew = $editableForNew;
        return $this;
    }

    /**
     * Gets as editableForUpdate
     *
     * @return bool
     */
    public function getEditableForUpdate()
    {
        return $this->editableForUpdate;
    }

    /**
     * Sets a new editableForUpdate
     *
     * @param bool $editableForUpdate
     * @return self
     */
    public function setEditableForUpdate($editableForUpdate)
    {
        $this->editableForUpdate = $editableForUpdate;
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
     * Adds as layoutComponents
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutComponentType $layoutComponents
     */
    public function addToLayoutComponents(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutComponentType $layoutComponents)
    {
        $this->layoutComponents[] = $layoutComponents;
        return $this;
    }

    /**
     * isset layoutComponents
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLayoutComponents($index)
    {
        return isset($this->layoutComponents[$index]);
    }

    /**
     * unset layoutComponents
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLayoutComponents($index)
    {
        unset($this->layoutComponents[$index]);
    }

    /**
     * Gets as layoutComponents
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutComponentType[]
     */
    public function getLayoutComponents()
    {
        return $this->layoutComponents;
    }

    /**
     * Sets a new layoutComponents
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutComponentType[] $layoutComponents
     * @return self
     */
    public function setLayoutComponents(array $layoutComponents)
    {
        $this->layoutComponents = $layoutComponents;
        return $this;
    }

    /**
     * Gets as placeholder
     *
     * @return bool
     */
    public function getPlaceholder()
    {
        return $this->placeholder;
    }

    /**
     * Sets a new placeholder
     *
     * @param bool $placeholder
     * @return self
     */
    public function setPlaceholder($placeholder)
    {
        $this->placeholder = $placeholder;
        return $this;
    }

    /**
     * Gets as required
     *
     * @return bool
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * Sets a new required
     *
     * @param bool $required
     * @return self
     */
    public function setRequired($required)
    {
        $this->required = $required;
        return $this;
    }


}

