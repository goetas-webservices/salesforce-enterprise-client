<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing VisualforcePageType
 *
 *
 * XSD Type: VisualforcePage
 */
class VisualforcePageType extends DescribeLayoutComponentType
{

    /**
     * @property bool $showLabel
     */
    private $showLabel = null;

    /**
     * @property bool $showScrollbars
     */
    private $showScrollbars = null;

    /**
     * @property string $suggestedHeight
     */
    private $suggestedHeight = null;

    /**
     * @property string $suggestedWidth
     */
    private $suggestedWidth = null;

    /**
     * @property string $url
     */
    private $url = null;

    /**
     * Gets as showLabel
     *
     * @return bool
     */
    public function getShowLabel()
    {
        return $this->showLabel;
    }

    /**
     * Sets a new showLabel
     *
     * @param bool $showLabel
     * @return self
     */
    public function setShowLabel($showLabel)
    {
        $this->showLabel = $showLabel;
        return $this;
    }

    /**
     * Gets as showScrollbars
     *
     * @return bool
     */
    public function getShowScrollbars()
    {
        return $this->showScrollbars;
    }

    /**
     * Sets a new showScrollbars
     *
     * @param bool $showScrollbars
     * @return self
     */
    public function setShowScrollbars($showScrollbars)
    {
        $this->showScrollbars = $showScrollbars;
        return $this;
    }

    /**
     * Gets as suggestedHeight
     *
     * @return string
     */
    public function getSuggestedHeight()
    {
        return $this->suggestedHeight;
    }

    /**
     * Sets a new suggestedHeight
     *
     * @param string $suggestedHeight
     * @return self
     */
    public function setSuggestedHeight($suggestedHeight)
    {
        $this->suggestedHeight = $suggestedHeight;
        return $this;
    }

    /**
     * Gets as suggestedWidth
     *
     * @return string
     */
    public function getSuggestedWidth()
    {
        return $this->suggestedWidth;
    }

    /**
     * Sets a new suggestedWidth
     *
     * @param string $suggestedWidth
     * @return self
     */
    public function setSuggestedWidth($suggestedWidth)
    {
        $this->suggestedWidth = $suggestedWidth;
        return $this;
    }

    /**
     * Gets as url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Sets a new url
     *
     * @param string $url
     * @return self
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }


}

