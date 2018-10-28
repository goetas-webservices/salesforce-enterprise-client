<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing FindDuplicatesResultType
 *
 *
 * XSD Type: FindDuplicatesResult
 */
class FindDuplicatesResultType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DuplicateResultType[] $duplicateResults
     */
    private $duplicateResults = [
        
    ];

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\ErrorType[] $errors
     */
    private $errors = [
        
    ];

    /**
     * @property bool $success
     */
    private $success = null;

    /**
     * Adds as duplicateResults
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DuplicateResultType $duplicateResults
     */
    public function addToDuplicateResults(\GoetasWebservices\Client\SalesforceEnterprise\Types\DuplicateResultType $duplicateResults)
    {
        $this->duplicateResults[] = $duplicateResults;
        return $this;
    }

    /**
     * isset duplicateResults
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDuplicateResults($index)
    {
        return isset($this->duplicateResults[$index]);
    }

    /**
     * unset duplicateResults
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDuplicateResults($index)
    {
        unset($this->duplicateResults[$index]);
    }

    /**
     * Gets as duplicateResults
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DuplicateResultType[]
     */
    public function getDuplicateResults()
    {
        return $this->duplicateResults;
    }

    /**
     * Sets a new duplicateResults
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DuplicateResultType[] $duplicateResults
     * @return self
     */
    public function setDuplicateResults(array $duplicateResults)
    {
        $this->duplicateResults = $duplicateResults;
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

