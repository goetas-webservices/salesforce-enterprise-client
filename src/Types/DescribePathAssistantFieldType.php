<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribePathAssistantFieldType
 *
 *
 * XSD Type: DescribePathAssistantField
 */
class DescribePathAssistantFieldType
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
     * @property bool $readOnly
     */
    private $readOnly = null;

    /**
     * @property bool $required
     */
    private $required = null;

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
     * Gets as readOnly
     *
     * @return bool
     */
    public function getReadOnly()
    {
        return $this->readOnly;
    }

    /**
     * Sets a new readOnly
     *
     * @param bool $readOnly
     * @return self
     */
    public function setReadOnly($readOnly)
    {
        $this->readOnly = $readOnly;
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

