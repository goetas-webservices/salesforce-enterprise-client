<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing RenderEmailTemplateResultType
 *
 *
 * XSD Type: RenderEmailTemplateResult
 */
class RenderEmailTemplateResultType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\RenderEmailTemplateBodyResultType[] $bodyResults
     */
    private $bodyResults = [
        
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
     * Adds as bodyResults
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\RenderEmailTemplateBodyResultType $bodyResults
     */
    public function addToBodyResults(\GoetasWebservices\Client\SalesforceEnterprise\Types\RenderEmailTemplateBodyResultType $bodyResults)
    {
        $this->bodyResults[] = $bodyResults;
        return $this;
    }

    /**
     * isset bodyResults
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBodyResults($index)
    {
        return isset($this->bodyResults[$index]);
    }

    /**
     * unset bodyResults
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBodyResults($index)
    {
        unset($this->bodyResults[$index]);
    }

    /**
     * Gets as bodyResults
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\RenderEmailTemplateBodyResultType[]
     */
    public function getBodyResults()
    {
        return $this->bodyResults;
    }

    /**
     * Sets a new bodyResults
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\RenderEmailTemplateBodyResultType[] $bodyResults
     * @return self
     */
    public function setBodyResults(array $bodyResults)
    {
        $this->bodyResults = $bodyResults;
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

