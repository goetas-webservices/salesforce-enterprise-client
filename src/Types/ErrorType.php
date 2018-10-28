<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing ErrorType
 *
 *
 * XSD Type: Error
 */
class ErrorType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\ExtendedErrorDetailsType[] $extendedErrorDetails
     */
    private $extendedErrorDetails = [
        
    ];

    /**
     * @property string[] $fields
     */
    private $fields = [
        
    ];

    /**
     * @property string $message
     */
    private $message = null;

    /**
     * @property string $statusCode
     */
    private $statusCode = null;

    /**
     * Adds as extendedErrorDetails
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\ExtendedErrorDetailsType $extendedErrorDetails
     */
    public function addToExtendedErrorDetails(\GoetasWebservices\Client\SalesforceEnterprise\Types\ExtendedErrorDetailsType $extendedErrorDetails)
    {
        $this->extendedErrorDetails[] = $extendedErrorDetails;
        return $this;
    }

    /**
     * isset extendedErrorDetails
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExtendedErrorDetails($index)
    {
        return isset($this->extendedErrorDetails[$index]);
    }

    /**
     * unset extendedErrorDetails
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExtendedErrorDetails($index)
    {
        unset($this->extendedErrorDetails[$index]);
    }

    /**
     * Gets as extendedErrorDetails
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\ExtendedErrorDetailsType[]
     */
    public function getExtendedErrorDetails()
    {
        return $this->extendedErrorDetails;
    }

    /**
     * Sets a new extendedErrorDetails
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\ExtendedErrorDetailsType[] $extendedErrorDetails
     * @return self
     */
    public function setExtendedErrorDetails(array $extendedErrorDetails)
    {
        $this->extendedErrorDetails = $extendedErrorDetails;
        return $this;
    }

    /**
     * Adds as fields
     *
     * @return self
     * @param string $fields
     */
    public function addToFields($fields)
    {
        $this->fields[] = $fields;
        return $this;
    }

    /**
     * isset fields
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFields($index)
    {
        return isset($this->fields[$index]);
    }

    /**
     * unset fields
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFields($index)
    {
        unset($this->fields[$index]);
    }

    /**
     * Gets as fields
     *
     * @return string[]
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * Sets a new fields
     *
     * @param string[] $fields
     * @return self
     */
    public function setFields(array $fields)
    {
        $this->fields = $fields;
        return $this;
    }

    /**
     * Gets as message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Sets a new message
     *
     * @param string $message
     * @return self
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    /**
     * Gets as statusCode
     *
     * @return string
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * Sets a new statusCode
     *
     * @param string $statusCode
     * @return self
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
        return $this;
    }


}

