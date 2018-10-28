<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing QuickActionTemplateResultType
 *
 *
 * XSD Type: QuickActionTemplateResult
 */
class QuickActionTemplateResultType
{

    /**
     * @property string $contextId
     */
    private $contextId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $defaultValueFormulas
     */
    private $defaultValueFormulas = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $defaultValues
     */
    private $defaultValues = null;

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
     * Gets as contextId
     *
     * @return string
     */
    public function getContextId()
    {
        return $this->contextId;
    }

    /**
     * Sets a new contextId
     *
     * @param string $contextId
     * @return self
     */
    public function setContextId($contextId)
    {
        $this->contextId = $contextId;
        return $this;
    }

    /**
     * Gets as defaultValueFormulas
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType
     */
    public function getDefaultValueFormulas()
    {
        return $this->defaultValueFormulas;
    }

    /**
     * Sets a new defaultValueFormulas
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $defaultValueFormulas
     * @return self
     */
    public function setDefaultValueFormulas(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $defaultValueFormulas)
    {
        $this->defaultValueFormulas = $defaultValueFormulas;
        return $this;
    }

    /**
     * Gets as defaultValues
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType
     */
    public function getDefaultValues()
    {
        return $this->defaultValues;
    }

    /**
     * Sets a new defaultValues
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $defaultValues
     * @return self
     */
    public function setDefaultValues(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $defaultValues)
    {
        $this->defaultValues = $defaultValues;
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

