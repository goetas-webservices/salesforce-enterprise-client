<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing SearchLayoutButtonsDisplayedType
 *
 *
 * XSD Type: SearchLayoutButtonsDisplayed
 */
class SearchLayoutButtonsDisplayedType
{

    /**
     * @property bool $applicable
     */
    private $applicable = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\SearchLayoutButtonType[] $buttons
     */
    private $buttons = [
        
    ];

    /**
     * Gets as applicable
     *
     * @return bool
     */
    public function getApplicable()
    {
        return $this->applicable;
    }

    /**
     * Sets a new applicable
     *
     * @param bool $applicable
     * @return self
     */
    public function setApplicable($applicable)
    {
        $this->applicable = $applicable;
        return $this;
    }

    /**
     * Adds as buttons
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\SearchLayoutButtonType $buttons
     */
    public function addToButtons(\GoetasWebservices\Client\SalesforceEnterprise\Types\SearchLayoutButtonType $buttons)
    {
        $this->buttons[] = $buttons;
        return $this;
    }

    /**
     * isset buttons
     *
     * @param int|string $index
     * @return bool
     */
    public function issetButtons($index)
    {
        return isset($this->buttons[$index]);
    }

    /**
     * unset buttons
     *
     * @param int|string $index
     * @return void
     */
    public function unsetButtons($index)
    {
        unset($this->buttons[$index]);
    }

    /**
     * Gets as buttons
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\SearchLayoutButtonType[]
     */
    public function getButtons()
    {
        return $this->buttons;
    }

    /**
     * Sets a new buttons
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\SearchLayoutButtonType[] $buttons
     * @return self
     */
    public function setButtons(array $buttons)
    {
        $this->buttons = $buttons;
        return $this;
    }


}

