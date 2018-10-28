<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribeLayoutSaveOptionType
 *
 *
 * XSD Type: DescribeLayoutSaveOption
 */
class DescribeLayoutSaveOptionType
{

    /**
     * @property bool $defaultValue
     */
    private $defaultValue = null;

    /**
     * @property bool $isDisplayed
     */
    private $isDisplayed = null;

    /**
     * @property string $label
     */
    private $label = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $restHeaderName
     */
    private $restHeaderName = null;

    /**
     * @property string $soapHeaderName
     */
    private $soapHeaderName = null;

    /**
     * Gets as defaultValue
     *
     * @return bool
     */
    public function getDefaultValue()
    {
        return $this->defaultValue;
    }

    /**
     * Sets a new defaultValue
     *
     * @param bool $defaultValue
     * @return self
     */
    public function setDefaultValue($defaultValue)
    {
        $this->defaultValue = $defaultValue;
        return $this;
    }

    /**
     * Gets as isDisplayed
     *
     * @return bool
     */
    public function getIsDisplayed()
    {
        return $this->isDisplayed;
    }

    /**
     * Sets a new isDisplayed
     *
     * @param bool $isDisplayed
     * @return self
     */
    public function setIsDisplayed($isDisplayed)
    {
        $this->isDisplayed = $isDisplayed;
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
     * Gets as restHeaderName
     *
     * @return string
     */
    public function getRestHeaderName()
    {
        return $this->restHeaderName;
    }

    /**
     * Sets a new restHeaderName
     *
     * @param string $restHeaderName
     * @return self
     */
    public function setRestHeaderName($restHeaderName)
    {
        $this->restHeaderName = $restHeaderName;
        return $this;
    }

    /**
     * Gets as soapHeaderName
     *
     * @return string
     */
    public function getSoapHeaderName()
    {
        return $this->soapHeaderName;
    }

    /**
     * Sets a new soapHeaderName
     *
     * @param string $soapHeaderName
     * @return self
     */
    public function setSoapHeaderName($soapHeaderName)
    {
        $this->soapHeaderName = $soapHeaderName;
        return $this;
    }


}

