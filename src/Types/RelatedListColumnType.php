<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing RelatedListColumnType
 *
 *
 * XSD Type: RelatedListColumn
 */
class RelatedListColumnType
{

    /**
     * @property string $field
     */
    private $field = null;

    /**
     * @property string $fieldApiName
     */
    private $fieldApiName = null;

    /**
     * @property string $format
     */
    private $format = null;

    /**
     * @property string $label
     */
    private $label = null;

    /**
     * @property string $lookupId
     */
    private $lookupId = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property bool $sortable
     */
    private $sortable = null;

    /**
     * Gets as field
     *
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * Sets a new field
     *
     * @param string $field
     * @return self
     */
    public function setField($field)
    {
        $this->field = $field;
        return $this;
    }

    /**
     * Gets as fieldApiName
     *
     * @return string
     */
    public function getFieldApiName()
    {
        return $this->fieldApiName;
    }

    /**
     * Sets a new fieldApiName
     *
     * @param string $fieldApiName
     * @return self
     */
    public function setFieldApiName($fieldApiName)
    {
        $this->fieldApiName = $fieldApiName;
        return $this;
    }

    /**
     * Gets as format
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Sets a new format
     *
     * @param string $format
     * @return self
     */
    public function setFormat($format)
    {
        $this->format = $format;
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
     * Gets as lookupId
     *
     * @return string
     */
    public function getLookupId()
    {
        return $this->lookupId;
    }

    /**
     * Sets a new lookupId
     *
     * @param string $lookupId
     * @return self
     */
    public function setLookupId($lookupId)
    {
        $this->lookupId = $lookupId;
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
     * Gets as sortable
     *
     * @return bool
     */
    public function getSortable()
    {
        return $this->sortable;
    }

    /**
     * Sets a new sortable
     *
     * @param bool $sortable
     * @return self
     */
    public function setSortable($sortable)
    {
        $this->sortable = $sortable;
        return $this;
    }


}

