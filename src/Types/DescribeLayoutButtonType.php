<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribeLayoutButtonType
 *
 *
 * XSD Type: DescribeLayoutButton
 */
class DescribeLayoutButtonType
{

    /**
     * @property string $behavior
     */
    private $behavior = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeColorType[] $colors
     */
    private $colors = [
        
    ];

    /**
     * @property string $content
     */
    private $content = null;

    /**
     * @property string $contentSource
     */
    private $contentSource = null;

    /**
     * @property bool $custom
     */
    private $custom = null;

    /**
     * @property string $encoding
     */
    private $encoding = null;

    /**
     * @property int $height
     */
    private $height = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeIconType[] $icons
     */
    private $icons = [
        
    ];

    /**
     * @property string $label
     */
    private $label = null;

    /**
     * @property bool $menubar
     */
    private $menubar = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property bool $overridden
     */
    private $overridden = null;

    /**
     * @property bool $resizeable
     */
    private $resizeable = null;

    /**
     * @property bool $scrollbars
     */
    private $scrollbars = null;

    /**
     * @property bool $showsLocation
     */
    private $showsLocation = null;

    /**
     * @property bool $showsStatus
     */
    private $showsStatus = null;

    /**
     * @property bool $toolbar
     */
    private $toolbar = null;

    /**
     * @property string $url
     */
    private $url = null;

    /**
     * @property int $width
     */
    private $width = null;

    /**
     * @property string $windowPosition
     */
    private $windowPosition = null;

    /**
     * Gets as behavior
     *
     * @return string
     */
    public function getBehavior()
    {
        return $this->behavior;
    }

    /**
     * Sets a new behavior
     *
     * @param string $behavior
     * @return self
     */
    public function setBehavior($behavior)
    {
        $this->behavior = $behavior;
        return $this;
    }

    /**
     * Adds as colors
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeColorType $colors
     */
    public function addToColors(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeColorType $colors)
    {
        $this->colors[] = $colors;
        return $this;
    }

    /**
     * isset colors
     *
     * @param int|string $index
     * @return bool
     */
    public function issetColors($index)
    {
        return isset($this->colors[$index]);
    }

    /**
     * unset colors
     *
     * @param int|string $index
     * @return void
     */
    public function unsetColors($index)
    {
        unset($this->colors[$index]);
    }

    /**
     * Gets as colors
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeColorType[]
     */
    public function getColors()
    {
        return $this->colors;
    }

    /**
     * Sets a new colors
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeColorType[] $colors
     * @return self
     */
    public function setColors(array $colors)
    {
        $this->colors = $colors;
        return $this;
    }

    /**
     * Gets as content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Sets a new content
     *
     * @param string $content
     * @return self
     */
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * Gets as contentSource
     *
     * @return string
     */
    public function getContentSource()
    {
        return $this->contentSource;
    }

    /**
     * Sets a new contentSource
     *
     * @param string $contentSource
     * @return self
     */
    public function setContentSource($contentSource)
    {
        $this->contentSource = $contentSource;
        return $this;
    }

    /**
     * Gets as custom
     *
     * @return bool
     */
    public function getCustom()
    {
        return $this->custom;
    }

    /**
     * Sets a new custom
     *
     * @param bool $custom
     * @return self
     */
    public function setCustom($custom)
    {
        $this->custom = $custom;
        return $this;
    }

    /**
     * Gets as encoding
     *
     * @return string
     */
    public function getEncoding()
    {
        return $this->encoding;
    }

    /**
     * Sets a new encoding
     *
     * @param string $encoding
     * @return self
     */
    public function setEncoding($encoding)
    {
        $this->encoding = $encoding;
        return $this;
    }

    /**
     * Gets as height
     *
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Sets a new height
     *
     * @param int $height
     * @return self
     */
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    /**
     * Adds as icons
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeIconType $icons
     */
    public function addToIcons(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeIconType $icons)
    {
        $this->icons[] = $icons;
        return $this;
    }

    /**
     * isset icons
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIcons($index)
    {
        return isset($this->icons[$index]);
    }

    /**
     * unset icons
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIcons($index)
    {
        unset($this->icons[$index]);
    }

    /**
     * Gets as icons
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeIconType[]
     */
    public function getIcons()
    {
        return $this->icons;
    }

    /**
     * Sets a new icons
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeIconType[] $icons
     * @return self
     */
    public function setIcons(array $icons)
    {
        $this->icons = $icons;
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
     * Gets as menubar
     *
     * @return bool
     */
    public function getMenubar()
    {
        return $this->menubar;
    }

    /**
     * Sets a new menubar
     *
     * @param bool $menubar
     * @return self
     */
    public function setMenubar($menubar)
    {
        $this->menubar = $menubar;
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
     * Gets as overridden
     *
     * @return bool
     */
    public function getOverridden()
    {
        return $this->overridden;
    }

    /**
     * Sets a new overridden
     *
     * @param bool $overridden
     * @return self
     */
    public function setOverridden($overridden)
    {
        $this->overridden = $overridden;
        return $this;
    }

    /**
     * Gets as resizeable
     *
     * @return bool
     */
    public function getResizeable()
    {
        return $this->resizeable;
    }

    /**
     * Sets a new resizeable
     *
     * @param bool $resizeable
     * @return self
     */
    public function setResizeable($resizeable)
    {
        $this->resizeable = $resizeable;
        return $this;
    }

    /**
     * Gets as scrollbars
     *
     * @return bool
     */
    public function getScrollbars()
    {
        return $this->scrollbars;
    }

    /**
     * Sets a new scrollbars
     *
     * @param bool $scrollbars
     * @return self
     */
    public function setScrollbars($scrollbars)
    {
        $this->scrollbars = $scrollbars;
        return $this;
    }

    /**
     * Gets as showsLocation
     *
     * @return bool
     */
    public function getShowsLocation()
    {
        return $this->showsLocation;
    }

    /**
     * Sets a new showsLocation
     *
     * @param bool $showsLocation
     * @return self
     */
    public function setShowsLocation($showsLocation)
    {
        $this->showsLocation = $showsLocation;
        return $this;
    }

    /**
     * Gets as showsStatus
     *
     * @return bool
     */
    public function getShowsStatus()
    {
        return $this->showsStatus;
    }

    /**
     * Sets a new showsStatus
     *
     * @param bool $showsStatus
     * @return self
     */
    public function setShowsStatus($showsStatus)
    {
        $this->showsStatus = $showsStatus;
        return $this;
    }

    /**
     * Gets as toolbar
     *
     * @return bool
     */
    public function getToolbar()
    {
        return $this->toolbar;
    }

    /**
     * Sets a new toolbar
     *
     * @param bool $toolbar
     * @return self
     */
    public function setToolbar($toolbar)
    {
        $this->toolbar = $toolbar;
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

    /**
     * Gets as width
     *
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Sets a new width
     *
     * @param int $width
     * @return self
     */
    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }

    /**
     * Gets as windowPosition
     *
     * @return string
     */
    public function getWindowPosition()
    {
        return $this->windowPosition;
    }

    /**
     * Sets a new windowPosition
     *
     * @param string $windowPosition
     * @return self
     */
    public function setWindowPosition($windowPosition)
    {
        $this->windowPosition = $windowPosition;
        return $this;
    }


}

