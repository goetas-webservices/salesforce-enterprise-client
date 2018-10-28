<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DuplicateResultType
 *
 *
 * XSD Type: DuplicateResult
 */
class DuplicateResultType
{

    /**
     * @property bool $allowSave
     */
    private $allowSave = null;

    /**
     * @property string $duplicateRule
     */
    private $duplicateRule = null;

    /**
     * @property string $duplicateRuleEntityType
     */
    private $duplicateRuleEntityType = null;

    /**
     * @property string $errorMessage
     */
    private $errorMessage = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\MatchResultType[] $matchResults
     */
    private $matchResults = [
        
    ];

    /**
     * Gets as allowSave
     *
     * @return bool
     */
    public function getAllowSave()
    {
        return $this->allowSave;
    }

    /**
     * Sets a new allowSave
     *
     * @param bool $allowSave
     * @return self
     */
    public function setAllowSave($allowSave)
    {
        $this->allowSave = $allowSave;
        return $this;
    }

    /**
     * Gets as duplicateRule
     *
     * @return string
     */
    public function getDuplicateRule()
    {
        return $this->duplicateRule;
    }

    /**
     * Sets a new duplicateRule
     *
     * @param string $duplicateRule
     * @return self
     */
    public function setDuplicateRule($duplicateRule)
    {
        $this->duplicateRule = $duplicateRule;
        return $this;
    }

    /**
     * Gets as duplicateRuleEntityType
     *
     * @return string
     */
    public function getDuplicateRuleEntityType()
    {
        return $this->duplicateRuleEntityType;
    }

    /**
     * Sets a new duplicateRuleEntityType
     *
     * @param string $duplicateRuleEntityType
     * @return self
     */
    public function setDuplicateRuleEntityType($duplicateRuleEntityType)
    {
        $this->duplicateRuleEntityType = $duplicateRuleEntityType;
        return $this;
    }

    /**
     * Gets as errorMessage
     *
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    /**
     * Sets a new errorMessage
     *
     * @param string $errorMessage
     * @return self
     */
    public function setErrorMessage($errorMessage)
    {
        $this->errorMessage = $errorMessage;
        return $this;
    }

    /**
     * Adds as matchResults
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\MatchResultType $matchResults
     */
    public function addToMatchResults(\GoetasWebservices\Client\SalesforceEnterprise\Types\MatchResultType $matchResults)
    {
        $this->matchResults[] = $matchResults;
        return $this;
    }

    /**
     * isset matchResults
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMatchResults($index)
    {
        return isset($this->matchResults[$index]);
    }

    /**
     * unset matchResults
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMatchResults($index)
    {
        unset($this->matchResults[$index]);
    }

    /**
     * Gets as matchResults
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\MatchResultType[]
     */
    public function getMatchResults()
    {
        return $this->matchResults;
    }

    /**
     * Sets a new matchResults
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\MatchResultType[] $matchResults
     * @return self
     */
    public function setMatchResults(array $matchResults)
    {
        $this->matchResults = $matchResults;
        return $this;
    }


}

