<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing MatchResultType
 *
 *
 * XSD Type: MatchResult
 */
class MatchResultType
{

    /**
     * @property string $entityType
     */
    private $entityType = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\ErrorType[] $errors
     */
    private $errors = [
        
    ];

    /**
     * @property string $matchEngine
     */
    private $matchEngine = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\MatchRecordType[] $matchRecords
     */
    private $matchRecords = [
        
    ];

    /**
     * @property string $rule
     */
    private $rule = null;

    /**
     * @property int $size
     */
    private $size = null;

    /**
     * @property bool $success
     */
    private $success = null;

    /**
     * Gets as entityType
     *
     * @return string
     */
    public function getEntityType()
    {
        return $this->entityType;
    }

    /**
     * Sets a new entityType
     *
     * @param string $entityType
     * @return self
     */
    public function setEntityType($entityType)
    {
        $this->entityType = $entityType;
        return $this;
    }

    /**
     * Adds as errors
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\ErrorType $errors
     */
    public function addToErrors(\GoetasWebservices\Client\SalesforceEnterprise\Types\ErrorType $errors)
    {
        $this->errors[] = $errors;
        return $this;
    }

    /**
     * isset errors
     *
     * @param int|string $index
     * @return bool
     */
    public function issetErrors($index)
    {
        return isset($this->errors[$index]);
    }

    /**
     * unset errors
     *
     * @param int|string $index
     * @return void
     */
    public function unsetErrors($index)
    {
        unset($this->errors[$index]);
    }

    /**
     * Gets as errors
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\ErrorType[]
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * Sets a new errors
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\ErrorType[] $errors
     * @return self
     */
    public function setErrors(array $errors)
    {
        $this->errors = $errors;
        return $this;
    }

    /**
     * Gets as matchEngine
     *
     * @return string
     */
    public function getMatchEngine()
    {
        return $this->matchEngine;
    }

    /**
     * Sets a new matchEngine
     *
     * @param string $matchEngine
     * @return self
     */
    public function setMatchEngine($matchEngine)
    {
        $this->matchEngine = $matchEngine;
        return $this;
    }

    /**
     * Adds as matchRecords
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\MatchRecordType $matchRecords
     */
    public function addToMatchRecords(\GoetasWebservices\Client\SalesforceEnterprise\Types\MatchRecordType $matchRecords)
    {
        $this->matchRecords[] = $matchRecords;
        return $this;
    }

    /**
     * isset matchRecords
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMatchRecords($index)
    {
        return isset($this->matchRecords[$index]);
    }

    /**
     * unset matchRecords
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMatchRecords($index)
    {
        unset($this->matchRecords[$index]);
    }

    /**
     * Gets as matchRecords
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\MatchRecordType[]
     */
    public function getMatchRecords()
    {
        return $this->matchRecords;
    }

    /**
     * Sets a new matchRecords
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\MatchRecordType[] $matchRecords
     * @return self
     */
    public function setMatchRecords(array $matchRecords)
    {
        $this->matchRecords = $matchRecords;
        return $this;
    }

    /**
     * Gets as rule
     *
     * @return string
     */
    public function getRule()
    {
        return $this->rule;
    }

    /**
     * Sets a new rule
     *
     * @param string $rule
     * @return self
     */
    public function setRule($rule)
    {
        $this->rule = $rule;
        return $this;
    }

    /**
     * Gets as size
     *
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Sets a new size
     *
     * @param int $size
     * @return self
     */
    public function setSize($size)
    {
        $this->size = $size;
        return $this;
    }

    /**
     * Gets as success
     *
     * @return bool
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * Sets a new success
     *
     * @param bool $success
     * @return self
     */
    public function setSuccess($success)
    {
        $this->success = $success;
        return $this;
    }


}

