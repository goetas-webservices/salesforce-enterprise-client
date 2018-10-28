<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing DataType
 *
 *
 * XSD Type: DataType
 */
class DataType extends SObjectType
{

    /**
     * @property string $contextServiceDataTypeId
     */
    private $contextServiceDataTypeId = null;

    /**
     * @property string $contextWsdlDataTypeId
     */
    private $contextWsdlDataTypeId = null;

    /**
     * @property string $developerName
     */
    private $developerName = null;

    /**
     * @property string $durableId
     */
    private $durableId = null;

    /**
     * @property bool $isComplex
     */
    private $isComplex = null;

    /**
     * Gets as contextServiceDataTypeId
     *
     * @return string
     */
    public function getContextServiceDataTypeId()
    {
        return $this->contextServiceDataTypeId;
    }

    /**
     * Sets a new contextServiceDataTypeId
     *
     * @param string $contextServiceDataTypeId
     * @return self
     */
    public function setContextServiceDataTypeId($contextServiceDataTypeId)
    {
        $this->contextServiceDataTypeId = $contextServiceDataTypeId;
        return $this;
    }

    /**
     * Gets as contextWsdlDataTypeId
     *
     * @return string
     */
    public function getContextWsdlDataTypeId()
    {
        return $this->contextWsdlDataTypeId;
    }

    /**
     * Sets a new contextWsdlDataTypeId
     *
     * @param string $contextWsdlDataTypeId
     * @return self
     */
    public function setContextWsdlDataTypeId($contextWsdlDataTypeId)
    {
        $this->contextWsdlDataTypeId = $contextWsdlDataTypeId;
        return $this;
    }

    /**
     * Gets as developerName
     *
     * @return string
     */
    public function getDeveloperName()
    {
        return $this->developerName;
    }

    /**
     * Sets a new developerName
     *
     * @param string $developerName
     * @return self
     */
    public function setDeveloperName($developerName)
    {
        $this->developerName = $developerName;
        return $this;
    }

    /**
     * Gets as durableId
     *
     * @return string
     */
    public function getDurableId()
    {
        return $this->durableId;
    }

    /**
     * Sets a new durableId
     *
     * @param string $durableId
     * @return self
     */
    public function setDurableId($durableId)
    {
        $this->durableId = $durableId;
        return $this;
    }

    /**
     * Gets as isComplex
     *
     * @return bool
     */
    public function getIsComplex()
    {
        return $this->isComplex;
    }

    /**
     * Sets a new isComplex
     *
     * @param bool $isComplex
     * @return self
     */
    public function setIsComplex($isComplex)
    {
        $this->isComplex = $isComplex;
        return $this;
    }


}

