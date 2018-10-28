<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing RenderEmailTemplateBodyResultType
 *
 *
 * XSD Type: RenderEmailTemplateBodyResult
 */
class RenderEmailTemplateBodyResultType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\RenderEmailTemplateErrorType[] $errors
     */
    private $errors = [
        
    ];

    /**
     * @property string $mergedBody
     */
    private $mergedBody = null;

    /**
     * @property bool $success
     */
    private $success = null;

    /**
     * Adds as errors
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\RenderEmailTemplateErrorType $errors
     */
    public function addToErrors(\GoetasWebservices\Client\SalesforceEnterprise\Types\RenderEmailTemplateErrorType $errors)
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
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\RenderEmailTemplateErrorType[]
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * Sets a new errors
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\RenderEmailTemplateErrorType[] $errors
     * @return self
     */
    public function setErrors(array $errors)
    {
        $this->errors = $errors;
        return $this;
    }

    /**
     * Gets as mergedBody
     *
     * @return string
     */
    public function getMergedBody()
    {
        return $this->mergedBody;
    }

    /**
     * Sets a new mergedBody
     *
     * @param string $mergedBody
     * @return self
     */
    public function setMergedBody($mergedBody)
    {
        $this->mergedBody = $mergedBody;
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

