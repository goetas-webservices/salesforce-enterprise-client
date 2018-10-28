<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing AnalyticsCloudComponentType
 *
 *
 * XSD Type: AnalyticsCloudComponent
 */
class AnalyticsCloudComponentType extends DescribeLayoutComponentType
{

    /**
     * @property string $error
     */
    private $error = null;

    /**
     * @property string $filter
     */
    private $filter = null;

    /**
     * @property string $height
     */
    private $height = null;

    /**
     * @property bool $hideOnError
     */
    private $hideOnError = null;

    /**
     * @property bool $showSharing
     */
    private $showSharing = null;

    /**
     * @property bool $showTitle
     */
    private $showTitle = null;

    /**
     * @property string $width
     */
    private $width = null;

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
     * Gets as filter
     *
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Sets a new filter
     *
     * @param string $filter
     * @return self
     */
    public function setFilter($filter)
    {
        $this->filter = $filter;
        return $this;
    }

    /**
     * Gets as height
     *
     * @return string
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Sets a new height
     *
     * @param string $height
     * @return self
     */
    public function setHeight($height)
    {
        $this->height = $height;
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
     * Gets as showSharing
     *
     * @return bool
     */
    public function getShowSharing()
    {
        return $this->showSharing;
    }

    /**
     * Sets a new showSharing
     *
     * @param bool $showSharing
     * @return self
     */
    public function setShowSharing($showSharing)
    {
        $this->showSharing = $showSharing;
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
     * Gets as width
     *
     * @return string
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Sets a new width
     *
     * @param string $width
     * @return self
     */
    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }


}

