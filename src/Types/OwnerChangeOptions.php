<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing OwnerChangeOptions
 */
class OwnerChangeOptions
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\OwnerChangeOptionType[] $options
     */
    private $options = [
        
    ];

    /**
     * Adds as options
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\OwnerChangeOptionType $options
     */
    public function addToOptions(\GoetasWebservices\Client\SalesforceEnterprise\Types\OwnerChangeOptionType $options)
    {
        $this->options[] = $options;
        return $this;
    }

    /**
     * isset options
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOptions($index)
    {
        return isset($this->options[$index]);
    }

    /**
     * unset options
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOptions($index)
    {
        unset($this->options[$index]);
    }

    /**
     * Gets as options
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\OwnerChangeOptionType[]
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Sets a new options
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\OwnerChangeOptionType[] $options
     * @return self
     */
    public function setOptions(array $options)
    {
        $this->options = $options;
        return $this;
    }


}

