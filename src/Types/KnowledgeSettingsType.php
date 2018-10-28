<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing KnowledgeSettingsType
 *
 *
 * XSD Type: KnowledgeSettings
 */
class KnowledgeSettingsType
{

    /**
     * @property string $defaultLanguage
     */
    private $defaultLanguage = null;

    /**
     * @property bool $knowledgeEnabled
     */
    private $knowledgeEnabled = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\KnowledgeLanguageItemType[] $languages
     */
    private $languages = [
        
    ];

    /**
     * Gets as defaultLanguage
     *
     * @return string
     */
    public function getDefaultLanguage()
    {
        return $this->defaultLanguage;
    }

    /**
     * Sets a new defaultLanguage
     *
     * @param string $defaultLanguage
     * @return self
     */
    public function setDefaultLanguage($defaultLanguage)
    {
        $this->defaultLanguage = $defaultLanguage;
        return $this;
    }

    /**
     * Gets as knowledgeEnabled
     *
     * @return bool
     */
    public function getKnowledgeEnabled()
    {
        return $this->knowledgeEnabled;
    }

    /**
     * Sets a new knowledgeEnabled
     *
     * @param bool $knowledgeEnabled
     * @return self
     */
    public function setKnowledgeEnabled($knowledgeEnabled)
    {
        $this->knowledgeEnabled = $knowledgeEnabled;
        return $this;
    }

    /**
     * Adds as languages
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\KnowledgeLanguageItemType $languages
     */
    public function addToLanguages(\GoetasWebservices\Client\SalesforceEnterprise\Types\KnowledgeLanguageItemType $languages)
    {
        $this->languages[] = $languages;
        return $this;
    }

    /**
     * isset languages
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLanguages($index)
    {
        return isset($this->languages[$index]);
    }

    /**
     * unset languages
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLanguages($index)
    {
        unset($this->languages[$index]);
    }

    /**
     * Gets as languages
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\KnowledgeLanguageItemType[]
     */
    public function getLanguages()
    {
        return $this->languages;
    }

    /**
     * Sets a new languages
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\KnowledgeLanguageItemType[] $languages
     * @return self
     */
    public function setLanguages(array $languages)
    {
        $this->languages = $languages;
        return $this;
    }


}

