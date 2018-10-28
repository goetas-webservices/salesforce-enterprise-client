<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing PicklistValueInfoType
 *
 *
 * XSD Type: PicklistValueInfo
 */
class PicklistValueInfoType extends SObjectType
{

    /**
     * @property string $durableId
     */
    private $durableId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\EntityParticleType $entityParticle
     */
    private $entityParticle = null;

    /**
     * @property string $entityParticleId
     */
    private $entityParticleId = null;

    /**
     * @property bool $isActive
     */
    private $isActive = null;

    /**
     * @property bool $isDefaultValue
     */
    private $isDefaultValue = null;

    /**
     * @property string $label
     */
    private $label = null;

    /**
     * @property string $validFor
     */
    private $validFor = null;

    /**
     * @property string $value
     */
    private $value = null;

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
     * Gets as entityParticle
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\EntityParticleType
     */
    public function getEntityParticle()
    {
        return $this->entityParticle;
    }

    /**
     * Sets a new entityParticle
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\EntityParticleType $entityParticle
     * @return self
     */
    public function setEntityParticle(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\EntityParticleType $entityParticle)
    {
        $this->entityParticle = $entityParticle;
        return $this;
    }

    /**
     * Gets as entityParticleId
     *
     * @return string
     */
    public function getEntityParticleId()
    {
        return $this->entityParticleId;
    }

    /**
     * Sets a new entityParticleId
     *
     * @param string $entityParticleId
     * @return self
     */
    public function setEntityParticleId($entityParticleId)
    {
        $this->entityParticleId = $entityParticleId;
        return $this;
    }

    /**
     * Gets as isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Sets a new isActive
     *
     * @param bool $isActive
     * @return self
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * Gets as isDefaultValue
     *
     * @return bool
     */
    public function getIsDefaultValue()
    {
        return $this->isDefaultValue;
    }

    /**
     * Sets a new isDefaultValue
     *
     * @param bool $isDefaultValue
     * @return self
     */
    public function setIsDefaultValue($isDefaultValue)
    {
        $this->isDefaultValue = $isDefaultValue;
        return $this;
    }

    /**
     * Gets as label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Sets a new label
     *
     * @param string $label
     * @return self
     */
    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }

    /**
     * Gets as validFor
     *
     * @return string
     */
    public function getValidFor()
    {
        return $this->validFor;
    }

    /**
     * Sets a new validFor
     *
     * @param string $validFor
     * @return self
     */
    public function setValidFor($validFor)
    {
        $this->validFor = $validFor;
        return $this;
    }

    /**
     * Gets as value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * @param string $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }


}

