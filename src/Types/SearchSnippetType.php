<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing SearchSnippetType
 *
 *
 * XSD Type: SearchSnippet
 */
class SearchSnippetType
{

    /**
     * @property string $text
     */
    private $text = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\NameValuePairType[] $wholeFields
     */
    private $wholeFields = [
        
    ];

    /**
     * Gets as text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * @param string $text
     * @return self
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * Adds as wholeFields
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\NameValuePairType $wholeFields
     */
    public function addToWholeFields(\GoetasWebservices\Client\SalesforceEnterprise\Types\NameValuePairType $wholeFields)
    {
        $this->wholeFields[] = $wholeFields;
        return $this;
    }

    /**
     * isset wholeFields
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWholeFields($index)
    {
        return isset($this->wholeFields[$index]);
    }

    /**
     * unset wholeFields
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWholeFields($index)
    {
        unset($this->wholeFields[$index]);
    }

    /**
     * Gets as wholeFields
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\NameValuePairType[]
     */
    public function getWholeFields()
    {
        return $this->wholeFields;
    }

    /**
     * Sets a new wholeFields
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\NameValuePairType[] $wholeFields
     * @return self
     */
    public function setWholeFields(array $wholeFields)
    {
        $this->wholeFields = $wholeFields;
        return $this;
    }


}

