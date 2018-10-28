<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing LocaleOptions
 */
class LocaleOptions
{

    /**
     * @property string $language
     */
    private $language = null;

    /**
     * @property bool $localizeErrors
     */
    private $localizeErrors = null;

    /**
     * Gets as language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * @param string $language
     * @return self
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Gets as localizeErrors
     *
     * @return bool
     */
    public function getLocalizeErrors()
    {
        return $this->localizeErrors;
    }

    /**
     * Sets a new localizeErrors
     *
     * @param bool $localizeErrors
     * @return self
     */
    public function setLocalizeErrors($localizeErrors)
    {
        $this->localizeErrors = $localizeErrors;
        return $this;
    }


}

