<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribeAvailableQuickActionResultType
 *
 *
 * XSD Type: DescribeAvailableQuickActionResult
 */
class DescribeAvailableQuickActionResultType
{

    /**
     * @property string $actionEnumOrId
     */
    private $actionEnumOrId = null;

    /**
     * @property string $label
     */
    private $label = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $type
     */
    private $type = null;

    /**
     * Gets as actionEnumOrId
     *
     * @return string
     */
    public function getActionEnumOrId()
    {
        return $this->actionEnumOrId;
    }

    /**
     * Sets a new actionEnumOrId
     *
     * @param string $actionEnumOrId
     * @return self
     */
    public function setActionEnumOrId($actionEnumOrId)
    {
        $this->actionEnumOrId = $actionEnumOrId;
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
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }


}

