<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing RenderStoredEmailTemplateResultType
 *
 *
 * XSD Type: RenderStoredEmailTemplateResult
 */
class RenderStoredEmailTemplateResultType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\ErrorType[] $errors
     */
    private $errors = [
        
    ];

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\SingleEmailMessageType $renderedEmail
     */
    private $renderedEmail = null;

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
     * Gets as renderedEmail
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\SingleEmailMessageType
     */
    public function getRenderedEmail()
    {
        return $this->renderedEmail;
    }

    /**
     * Sets a new renderedEmail
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\SingleEmailMessageType $renderedEmail
     * @return self
     */
    public function setRenderedEmail(\GoetasWebservices\Client\SalesforceEnterprise\Types\SingleEmailMessageType $renderedEmail)
    {
        $this->renderedEmail = $renderedEmail;
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

