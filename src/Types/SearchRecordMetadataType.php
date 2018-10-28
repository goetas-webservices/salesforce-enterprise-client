<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing SearchRecordMetadataType
 *
 *
 * XSD Type: SearchRecordMetadata
 */
class SearchRecordMetadataType
{

    /**
     * @property bool $searchPromoted
     */
    private $searchPromoted = null;

    /**
     * @property bool $spellCorrected
     */
    private $spellCorrected = null;

    /**
     * Gets as searchPromoted
     *
     * @return bool
     */
    public function getSearchPromoted()
    {
        return $this->searchPromoted;
    }

    /**
     * Sets a new searchPromoted
     *
     * @param bool $searchPromoted
     * @return self
     */
    public function setSearchPromoted($searchPromoted)
    {
        $this->searchPromoted = $searchPromoted;
        return $this;
    }

    /**
     * Gets as spellCorrected
     *
     * @return bool
     */
    public function getSpellCorrected()
    {
        return $this->spellCorrected;
    }

    /**
     * Sets a new spellCorrected
     *
     * @param bool $spellCorrected
     * @return self
     */
    public function setSpellCorrected($spellCorrected)
    {
        $this->spellCorrected = $spellCorrected;
        return $this;
    }


}

