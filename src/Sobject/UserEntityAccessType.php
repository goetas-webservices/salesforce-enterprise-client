<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing UserEntityAccessType
 *
 *
 * XSD Type: UserEntityAccess
 */
class UserEntityAccessType extends SObjectType
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
     * @property bool $isActivateable
     */
    private $isActivateable = null;

    /**
     * @property bool $isCreatable
     */
    private $isCreatable = null;

    /**
     * @property bool $isDeletable
     */
    private $isDeletable = null;

    /**
     * @property bool $isEditable
     */
    private $isEditable = null;

    /**
     * @property bool $isFlsUpdatable
     */
    private $isFlsUpdatable = null;

    /**
     * @property bool $isMergeable
     */
    private $isMergeable = null;

    /**
     * @property bool $isReadable
     */
    private $isReadable = null;

    /**
     * @property bool $isUndeletable
     */
    private $isUndeletable = null;

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
     * Gets as isActivateable
     *
     * @return bool
     */
    public function getIsActivateable()
    {
        return $this->isActivateable;
    }

    /**
     * Sets a new isActivateable
     *
     * @param bool $isActivateable
     * @return self
     */
    public function setIsActivateable($isActivateable)
    {
        $this->isActivateable = $isActivateable;
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
     * Gets as isDeletable
     *
     * @return bool
     */
    public function getIsDeletable()
    {
        return $this->isDeletable;
    }

    /**
     * Sets a new isDeletable
     *
     * @param bool $isDeletable
     * @return self
     */
    public function setIsDeletable($isDeletable)
    {
        $this->isDeletable = $isDeletable;
        return $this;
    }

    /**
     * Gets as isEditable
     *
     * @return bool
     */
    public function getIsEditable()
    {
        return $this->isEditable;
    }

    /**
     * Sets a new isEditable
     *
     * @param bool $isEditable
     * @return self
     */
    public function setIsEditable($isEditable)
    {
        $this->isEditable = $isEditable;
        return $this;
    }

    /**
     * Gets as isFlsUpdatable
     *
     * @return bool
     */
    public function getIsFlsUpdatable()
    {
        return $this->isFlsUpdatable;
    }

    /**
     * Sets a new isFlsUpdatable
     *
     * @param bool $isFlsUpdatable
     * @return self
     */
    public function setIsFlsUpdatable($isFlsUpdatable)
    {
        $this->isFlsUpdatable = $isFlsUpdatable;
        return $this;
    }

    /**
     * Gets as isMergeable
     *
     * @return bool
     */
    public function getIsMergeable()
    {
        return $this->isMergeable;
    }

    /**
     * Sets a new isMergeable
     *
     * @param bool $isMergeable
     * @return self
     */
    public function setIsMergeable($isMergeable)
    {
        $this->isMergeable = $isMergeable;
        return $this;
    }

    /**
     * Gets as isReadable
     *
     * @return bool
     */
    public function getIsReadable()
    {
        return $this->isReadable;
    }

    /**
     * Sets a new isReadable
     *
     * @param bool $isReadable
     * @return self
     */
    public function setIsReadable($isReadable)
    {
        $this->isReadable = $isReadable;
        return $this;
    }

    /**
     * Gets as isUndeletable
     *
     * @return bool
     */
    public function getIsUndeletable()
    {
        return $this->isUndeletable;
    }

    /**
     * Sets a new isUndeletable
     *
     * @param bool $isUndeletable
     * @return self
     */
    public function setIsUndeletable($isUndeletable)
    {
        $this->isUndeletable = $isUndeletable;
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

