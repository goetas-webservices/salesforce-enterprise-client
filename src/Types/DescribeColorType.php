<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribeColorType
 *
 *
 * XSD Type: DescribeColor
 */
class DescribeColorType
{

    /**
     * @property string $color
     */
    private $color = null;

    /**
     * @property string $context
     */
    private $context = null;

    /**
     * @property string $theme
     */
    private $theme = null;

    /**
     * Gets as color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Sets a new color
     *
     * @param string $color
     * @return self
     */
    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }

    /**
     * Gets as context
     *
     * @return string
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Sets a new context
     *
     * @param string $context
     * @return self
     */
    public function setContext($context)
    {
        $this->context = $context;
        return $this;
    }

    /**
     * Gets as theme
     *
     * @return string
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * Sets a new theme
     *
     * @param string $theme
     * @return self
     */
    public function setTheme($theme)
    {
        $this->theme = $theme;
        return $this;
    }


}

