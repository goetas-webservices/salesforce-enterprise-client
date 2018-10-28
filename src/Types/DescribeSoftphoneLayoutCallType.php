<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribeSoftphoneLayoutCallType
 *
 *
 * XSD Type: DescribeSoftphoneLayoutCallType
 */
class DescribeSoftphoneLayoutCallType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSoftphoneLayoutInfoFieldType[] $infoFields
     */
    private $infoFields = [
        
    ];

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSoftphoneScreenPopOptionType[] $screenPopOptions
     */
    private $screenPopOptions = [
        
    ];

    /**
     * @property string $screenPopsOpenWithin
     */
    private $screenPopsOpenWithin = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSoftphoneLayoutSectionType[] $sections
     */
    private $sections = [
        
    ];

    /**
     * Adds as infoFields
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSoftphoneLayoutInfoFieldType $infoFields
     */
    public function addToInfoFields(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSoftphoneLayoutInfoFieldType $infoFields)
    {
        $this->infoFields[] = $infoFields;
        return $this;
    }

    /**
     * isset infoFields
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInfoFields($index)
    {
        return isset($this->infoFields[$index]);
    }

    /**
     * unset infoFields
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInfoFields($index)
    {
        unset($this->infoFields[$index]);
    }

    /**
     * Gets as infoFields
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSoftphoneLayoutInfoFieldType[]
     */
    public function getInfoFields()
    {
        return $this->infoFields;
    }

    /**
     * Sets a new infoFields
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSoftphoneLayoutInfoFieldType[] $infoFields
     * @return self
     */
    public function setInfoFields(array $infoFields)
    {
        $this->infoFields = $infoFields;
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
     * Adds as screenPopOptions
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSoftphoneScreenPopOptionType $screenPopOptions
     */
    public function addToScreenPopOptions(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSoftphoneScreenPopOptionType $screenPopOptions)
    {
        $this->screenPopOptions[] = $screenPopOptions;
        return $this;
    }

    /**
     * isset screenPopOptions
     *
     * @param int|string $index
     * @return bool
     */
    public function issetScreenPopOptions($index)
    {
        return isset($this->screenPopOptions[$index]);
    }

    /**
     * unset screenPopOptions
     *
     * @param int|string $index
     * @return void
     */
    public function unsetScreenPopOptions($index)
    {
        unset($this->screenPopOptions[$index]);
    }

    /**
     * Gets as screenPopOptions
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSoftphoneScreenPopOptionType[]
     */
    public function getScreenPopOptions()
    {
        return $this->screenPopOptions;
    }

    /**
     * Sets a new screenPopOptions
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSoftphoneScreenPopOptionType[] $screenPopOptions
     * @return self
     */
    public function setScreenPopOptions(array $screenPopOptions)
    {
        $this->screenPopOptions = $screenPopOptions;
        return $this;
    }

    /**
     * Gets as screenPopsOpenWithin
     *
     * @return string
     */
    public function getScreenPopsOpenWithin()
    {
        return $this->screenPopsOpenWithin;
    }

    /**
     * Sets a new screenPopsOpenWithin
     *
     * @param string $screenPopsOpenWithin
     * @return self
     */
    public function setScreenPopsOpenWithin($screenPopsOpenWithin)
    {
        $this->screenPopsOpenWithin = $screenPopsOpenWithin;
        return $this;
    }

    /**
     * Adds as sections
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSoftphoneLayoutSectionType $sections
     */
    public function addToSections(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSoftphoneLayoutSectionType $sections)
    {
        $this->sections[] = $sections;
        return $this;
    }

    /**
     * isset sections
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSections($index)
    {
        return isset($this->sections[$index]);
    }

    /**
     * unset sections
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSections($index)
    {
        unset($this->sections[$index]);
    }

    /**
     * Gets as sections
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSoftphoneLayoutSectionType[]
     */
    public function getSections()
    {
        return $this->sections;
    }

    /**
     * Sets a new sections
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSoftphoneLayoutSectionType[] $sections
     * @return self
     */
    public function setSections(array $sections)
    {
        $this->sections = $sections;
        return $this;
    }


}

