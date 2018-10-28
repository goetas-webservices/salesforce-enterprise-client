<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing UserFieldAccessType
 *
 *
 * XSD Type: UserFieldAccess
 */
class UserFieldAccessType extends SObjectType
{

    /**
     * @property string $durableId
     */
    private $durableId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\EntityDefinitionType $entityDefinition
     */
    private $entityDefinition = null;

    /**
     * @property string $entityDefinitionId
     */
    private $entityDefinitionId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\FieldDefinitionType $fieldDefinition
     */
    private $fieldDefinition = null;

    /**
     * @property string $fieldDefinitionId
     */
    private $fieldDefinitionId = null;

    /**
     * @property bool $isAccessible
     */
    private $isAccessible = null;

    /**
     * @property bool $isCreatable
     */
    private $isCreatable = null;

    /**
     * @property bool $isUpdatable
     */
    private $isUpdatable = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $user
     */
    private $user = null;

    /**
     * @property string $userId
     */
    private $userId = null;

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
     * Gets as entityDefinition
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\EntityDefinitionType
     */
    public function getEntityDefinition()
    {
        return $this->entityDefinition;
    }

    /**
     * Sets a new entityDefinition
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\EntityDefinitionType $entityDefinition
     * @return self
     */
    public function setEntityDefinition(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\EntityDefinitionType $entityDefinition)
    {
        $this->entityDefinition = $entityDefinition;
        return $this;
    }

    /**
     * Gets as entityDefinitionId
     *
     * @return string
     */
    public function getEntityDefinitionId()
    {
        return $this->entityDefinitionId;
    }

    /**
     * Sets a new entityDefinitionId
     *
     * @param string $entityDefinitionId
     * @return self
     */
    public function setEntityDefinitionId($entityDefinitionId)
    {
        $this->entityDefinitionId = $entityDefinitionId;
        return $this;
    }

    /**
     * Gets as fieldDefinition
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\FieldDefinitionType
     */
    public function getFieldDefinition()
    {
        return $this->fieldDefinition;
    }

    /**
     * Sets a new fieldDefinition
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\FieldDefinitionType $fieldDefinition
     * @return self
     */
    public function setFieldDefinition(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\FieldDefinitionType $fieldDefinition)
    {
        $this->fieldDefinition = $fieldDefinition;
        return $this;
    }

    /**
     * Gets as fieldDefinitionId
     *
     * @return string
     */
    public function getFieldDefinitionId()
    {
        return $this->fieldDefinitionId;
    }

    /**
     * Sets a new fieldDefinitionId
     *
     * @param string $fieldDefinitionId
     * @return self
     */
    public function setFieldDefinitionId($fieldDefinitionId)
    {
        $this->fieldDefinitionId = $fieldDefinitionId;
        return $this;
    }

    /**
     * Gets as isAccessible
     *
     * @return bool
     */
    public function getIsAccessible()
    {
        return $this->isAccessible;
    }

    /**
     * Sets a new isAccessible
     *
     * @param bool $isAccessible
     * @return self
     */
    public function setIsAccessible($isAccessible)
    {
        $this->isAccessible = $isAccessible;
        return $this;
    }

    /**
     * Gets as isCreatable
     *
     * @return bool
     */
    public function getIsCreatable()
    {
        return $this->isCreatable;
    }

    /**
     * Sets a new isCreatable
     *
     * @param bool $isCreatable
     * @return self
     */
    public function setIsCreatable($isCreatable)
    {
        $this->isCreatable = $isCreatable;
        return $this;
    }

    /**
     * Gets as isUpdatable
     *
     * @return bool
     */
    public function getIsUpdatable()
    {
        return $this->isUpdatable;
    }

    /**
     * Sets a new isUpdatable
     *
     * @param bool $isUpdatable
     * @return self
     */
    public function setIsUpdatable($isUpdatable)
    {
        $this->isUpdatable = $isUpdatable;
        return $this;
    }

    /**
     * Gets as user
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Sets a new user
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $user
     * @return self
     */
    public function setUser(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * Gets as userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Sets a new userId
     *
     * @param string $userId
     * @return self
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }


}

