<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing InvalidateSessionsResultType
 *
 *
 * XSD Type: InvalidateSessionsResult
 */
class InvalidateSessionsResultType
{

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

