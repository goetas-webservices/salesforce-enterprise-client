<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing SendEmailErrorType
 *
 *
 * XSD Type: SendEmailError
 */
class SendEmailErrorType
{

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
     * @property string $targetObjectId
     */
    private $targetObjectId = null;

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

    /**
     * Gets as targetObjectId
     *
     * @return string
     */
    public function getTargetObjectId()
    {
        return $this->targetObjectId;
    }

    /**
     * Sets a new targetObjectId
     *
     * @param string $targetObjectId
     * @return self
     */
    public function setTargetObjectId($targetObjectId)
    {
        $this->targetObjectId = $targetObjectId;
        return $this;
    }


}

