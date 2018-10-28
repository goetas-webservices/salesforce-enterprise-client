<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing RenderEmailTemplateErrorType
 *
 *
 * XSD Type: RenderEmailTemplateError
 */
class RenderEmailTemplateErrorType
{

    /**
     * @property string $fieldName
     */
    private $fieldName = null;

    /**
     * @property string $message
     */
    private $message = null;

    /**
     * @property int $offset
     */
    private $offset = null;

    /**
     * @property string $statusCode
     */
    private $statusCode = null;

    /**
     * Gets as fieldName
     *
     * @return string
     */
    public function getFieldName()
    {
        return $this->fieldName;
    }

    /**
     * Sets a new fieldName
     *
     * @param string $fieldName
     * @return self
     */
    public function setFieldName($fieldName)
    {
        $this->fieldName = $fieldName;
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
     * Gets as offset
     *
     * @return int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * Sets a new offset
     *
     * @param int $offset
     * @return self
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;
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

