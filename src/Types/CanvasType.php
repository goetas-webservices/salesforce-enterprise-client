<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing CanvasType
 *
 *
 * XSD Type: Canvas
 */
class CanvasType extends DescribeLayoutComponentType
{

    /**
     * @property string $displayLocation
     */
    private $displayLocation = null;

    /**
     * @property string $referenceId
     */
    private $referenceId = null;

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
     * Gets as displayLocation
     *
     * @return string
     */
    public function getDisplayLocation()
    {
        return $this->displayLocation;
    }

    /**
     * Sets a new displayLocation
     *
     * @param string $displayLocation
     * @return self
     */
    public function setDisplayLocation($displayLocation)
    {
        $this->displayLocation = $displayLocation;
        return $this;
    }

    /**
     * Gets as referenceId
     *
     * @return string
     */
    public function getReferenceId()
    {
        return $this->referenceId;
    }

    /**
     * Sets a new referenceId
     *
     * @param string $referenceId
     * @return self
     */
    public function setReferenceId($referenceId)
    {
        $this->referenceId = $referenceId;
        return $this;
    }

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


}

