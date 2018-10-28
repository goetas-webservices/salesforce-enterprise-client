<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing ActionOverrideType
 *
 *
 * XSD Type: ActionOverride
 */
class ActionOverrideType
{

    /**
     * @property string $formFactor
     */
    private $formFactor = null;

    /**
     * @property bool $isAvailableInTouch
     */
    private $isAvailableInTouch = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $pageId
     */
    private $pageId = null;

    /**
     * @property string $url
     */
    private $url = null;

    /**
     * Gets as formFactor
     *
     * @return string
     */
    public function getFormFactor()
    {
        return $this->formFactor;
    }

    /**
     * Sets a new formFactor
     *
     * @param string $formFactor
     * @return self
     */
    public function setFormFactor($formFactor)
    {
        $this->formFactor = $formFactor;
        return $this;
    }

    /**
     * Gets as isAvailableInTouch
     *
     * @return bool
     */
    public function getIsAvailableInTouch()
    {
        return $this->isAvailableInTouch;
    }

    /**
     * Sets a new isAvailableInTouch
     *
     * @param bool $isAvailableInTouch
     * @return self
     */
    public function setIsAvailableInTouch($isAvailableInTouch)
    {
        $this->isAvailableInTouch = $isAvailableInTouch;
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
     * Gets as pageId
     *
     * @return string
     */
    public function getPageId()
    {
        return $this->pageId;
    }

    /**
     * Sets a new pageId
     *
     * @param string $pageId
     * @return self
     */
    public function setPageId($pageId)
    {
        $this->pageId = $pageId;
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

