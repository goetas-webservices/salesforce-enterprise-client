<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing ReportChartComponentType
 *
 *
 * XSD Type: ReportChartComponent
 */
class ReportChartComponentType extends DescribeLayoutComponentType
{

    /**
     * @property bool $cacheData
     */
    private $cacheData = null;

    /**
     * @property string $contextFilterableField
     */
    private $contextFilterableField = null;

    /**
     * @property string $error
     */
    private $error = null;

    /**
     * @property bool $hideOnError
     */
    private $hideOnError = null;

    /**
     * @property bool $includeContext
     */
    private $includeContext = null;

    /**
     * @property bool $showTitle
     */
    private $showTitle = null;

    /**
     * @property string $size
     */
    private $size = null;

    /**
     * Gets as cacheData
     *
     * @return bool
     */
    public function getCacheData()
    {
        return $this->cacheData;
    }

    /**
     * Sets a new cacheData
     *
     * @param bool $cacheData
     * @return self
     */
    public function setCacheData($cacheData)
    {
        $this->cacheData = $cacheData;
        return $this;
    }

    /**
     * Gets as contextFilterableField
     *
     * @return string
     */
    public function getContextFilterableField()
    {
        return $this->contextFilterableField;
    }

    /**
     * Sets a new contextFilterableField
     *
     * @param string $contextFilterableField
     * @return self
     */
    public function setContextFilterableField($contextFilterableField)
    {
        $this->contextFilterableField = $contextFilterableField;
        return $this;
    }

    /**
     * Gets as error
     *
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Sets a new error
     *
     * @param string $error
     * @return self
     */
    public function setError($error)
    {
        $this->error = $error;
        return $this;
    }

    /**
     * Gets as hideOnError
     *
     * @return bool
     */
    public function getHideOnError()
    {
        return $this->hideOnError;
    }

    /**
     * Sets a new hideOnError
     *
     * @param bool $hideOnError
     * @return self
     */
    public function setHideOnError($hideOnError)
    {
        $this->hideOnError = $hideOnError;
        return $this;
    }

    /**
     * Gets as includeContext
     *
     * @return bool
     */
    public function getIncludeContext()
    {
        return $this->includeContext;
    }

    /**
     * Sets a new includeContext
     *
     * @param bool $includeContext
     * @return self
     */
    public function setIncludeContext($includeContext)
    {
        $this->includeContext = $includeContext;
        return $this;
    }

    /**
     * Gets as showTitle
     *
     * @return bool
     */
    public function getShowTitle()
    {
        return $this->showTitle;
    }

    /**
     * Sets a new showTitle
     *
     * @param bool $showTitle
     * @return self
     */
    public function setShowTitle($showTitle)
    {
        $this->showTitle = $showTitle;
        return $this;
    }

    /**
     * Gets as size
     *
     * @return string
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Sets a new size
     *
     * @param string $size
     * @return self
     */
    public function setSize($size)
    {
        $this->size = $size;
        return $this;
    }


}

