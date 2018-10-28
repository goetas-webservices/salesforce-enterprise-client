<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing EntitySpellCorrectionMetadataType
 *
 *
 * XSD Type: EntitySpellCorrectionMetadata
 */
class EntitySpellCorrectionMetadataType
{

    /**
     * @property string $correctedQuery
     */
    private $correctedQuery = null;

    /**
     * @property bool $hasNonCorrectedResults
     */
    private $hasNonCorrectedResults = null;

    /**
     * Gets as correctedQuery
     *
     * @return string
     */
    public function getCorrectedQuery()
    {
        return $this->correctedQuery;
    }

    /**
     * Sets a new correctedQuery
     *
     * @param string $correctedQuery
     * @return self
     */
    public function setCorrectedQuery($correctedQuery)
    {
        $this->correctedQuery = $correctedQuery;
        return $this;
    }

    /**
     * Gets as hasNonCorrectedResults
     *
     * @return bool
     */
    public function getHasNonCorrectedResults()
    {
        return $this->hasNonCorrectedResults;
    }

    /**
     * Sets a new hasNonCorrectedResults
     *
     * @param bool $hasNonCorrectedResults
     * @return self
     */
    public function setHasNonCorrectedResults($hasNonCorrectedResults)
    {
        $this->hasNonCorrectedResults = $hasNonCorrectedResults;
        return $this;
    }


}

