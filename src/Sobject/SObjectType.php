<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing SObjectType
 *
 *
 * XSD Type: sObject
 */
class SObjectType
{

    /**
     * @property string[] $fieldsToNull
     */
    private $fieldsToNull = [
        
    ];

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * Adds as fieldsToNull
     *
     * @return self
     * @param string $fieldsToNull
     */
    public function addToFieldsToNull($fieldsToNull)
    {
        $this->fieldsToNull[] = $fieldsToNull;
        return $this;
    }

    /**
     * isset fieldsToNull
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFieldsToNull($index)
    {
        return isset($this->fieldsToNull[$index]);
    }

    /**
     * unset fieldsToNull
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFieldsToNull($index)
    {
        unset($this->fieldsToNull[$index]);
    }

    /**
     * Gets as fieldsToNull
     *
     * @return string[]
     */
    public function getFieldsToNull()
    {
        return $this->fieldsToNull;
    }

    /**
     * Sets a new fieldsToNull
     *
     * @param string[] $fieldsToNull
     * @return self
     */
    public function setFieldsToNull(array $fieldsToNull)
    {
        $this->fieldsToNull = $fieldsToNull;
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


}

