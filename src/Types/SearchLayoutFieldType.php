<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing SearchLayoutFieldType
 *
 *
 * XSD Type: SearchLayoutField
 */
class SearchLayoutFieldType
{

    /**
     * @property string $apiName
     */
    private $apiName = null;

    /**
     * @property string $label
     */
    private $label = null;

    /**
     * @property bool $sortable
     */
    private $sortable = null;

    /**
     * Gets as apiName
     *
     * @return string
     */
    public function getApiName()
    {
        return $this->apiName;
    }

    /**
     * Sets a new apiName
     *
     * @param string $apiName
     * @return self
     */
    public function setApiName($apiName)
    {
        $this->apiName = $apiName;
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

