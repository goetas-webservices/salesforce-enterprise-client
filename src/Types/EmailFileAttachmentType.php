<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing EmailFileAttachmentType
 *
 *
 * XSD Type: EmailFileAttachment
 */
class EmailFileAttachmentType
{

    /**
     * @property mixed $body
     */
    private $body = null;

    /**
     * @property string $contentType
     */
    private $contentType = null;

    /**
     * @property string $fileName
     */
    private $fileName = null;

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * @property bool $inline
     */
    private $inline = null;

    /**
     * Gets as body
     *
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param mixed $body
     * @return self
     */
    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as contentType
     *
     * @return string
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * Sets a new contentType
     *
     * @param string $contentType
     * @return self
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
        return $this;
    }

    /**
     * Gets as fileName
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * Sets a new fileName
     *
     * @param string $fileName
     * @return self
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
        return $this;
    }

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as inline
     *
     * @return bool
     */
    public function getInline()
    {
        return $this->inline;
    }

    /**
     * Sets a new inline
     *
     * @param bool $inline
     * @return self
     */
    public function setInline($inline)
    {
        $this->inline = $inline;
        return $this;
    }


}

