<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing UserRecordAccessType
 *
 *
 * XSD Type: UserRecordAccess
 */
class UserRecordAccessType extends SObjectType
{

    /**
     * @property bool $hasAllAccess
     */
    private $hasAllAccess = null;

    /**
     * @property bool $hasDeleteAccess
     */
    private $hasDeleteAccess = null;

    /**
     * @property bool $hasEditAccess
     */
    private $hasEditAccess = null;

    /**
     * @property bool $hasReadAccess
     */
    private $hasReadAccess = null;

    /**
     * @property bool $hasTransferAccess
     */
    private $hasTransferAccess = null;

    /**
     * @property string $maxAccessLevel
     */
    private $maxAccessLevel = null;

    /**
     * @property string $recordId
     */
    private $recordId = null;

    /**
     * @property string $userId
     */
    private $userId = null;

    /**
     * Gets as hasAllAccess
     *
     * @return bool
     */
    public function getHasAllAccess()
    {
        return $this->hasAllAccess;
    }

    /**
     * Sets a new hasAllAccess
     *
     * @param bool $hasAllAccess
     * @return self
     */
    public function setHasAllAccess($hasAllAccess)
    {
        $this->hasAllAccess = $hasAllAccess;
        return $this;
    }

    /**
     * Gets as hasDeleteAccess
     *
     * @return bool
     */
    public function getHasDeleteAccess()
    {
        return $this->hasDeleteAccess;
    }

    /**
     * Sets a new hasDeleteAccess
     *
     * @param bool $hasDeleteAccess
     * @return self
     */
    public function setHasDeleteAccess($hasDeleteAccess)
    {
        $this->hasDeleteAccess = $hasDeleteAccess;
        return $this;
    }

    /**
     * Gets as hasEditAccess
     *
     * @return bool
     */
    public function getHasEditAccess()
    {
        return $this->hasEditAccess;
    }

    /**
     * Sets a new hasEditAccess
     *
     * @param bool $hasEditAccess
     * @return self
     */
    public function setHasEditAccess($hasEditAccess)
    {
        $this->hasEditAccess = $hasEditAccess;
        return $this;
    }

    /**
     * Gets as hasReadAccess
     *
     * @return bool
     */
    public function getHasReadAccess()
    {
        return $this->hasReadAccess;
    }

    /**
     * Sets a new hasReadAccess
     *
     * @param bool $hasReadAccess
     * @return self
     */
    public function setHasReadAccess($hasReadAccess)
    {
        $this->hasReadAccess = $hasReadAccess;
        return $this;
    }

    /**
     * Gets as hasTransferAccess
     *
     * @return bool
     */
    public function getHasTransferAccess()
    {
        return $this->hasTransferAccess;
    }

    /**
     * Sets a new hasTransferAccess
     *
     * @param bool $hasTransferAccess
     * @return self
     */
    public function setHasTransferAccess($hasTransferAccess)
    {
        $this->hasTransferAccess = $hasTransferAccess;
        return $this;
    }

    /**
     * Gets as maxAccessLevel
     *
     * @return string
     */
    public function getMaxAccessLevel()
    {
        return $this->maxAccessLevel;
    }

    /**
     * Sets a new maxAccessLevel
     *
     * @param string $maxAccessLevel
     * @return self
     */
    public function setMaxAccessLevel($maxAccessLevel)
    {
        $this->maxAccessLevel = $maxAccessLevel;
        return $this;
    }

    /**
     * Gets as recordId
     *
     * @return string
     */
    public function getRecordId()
    {
        return $this->recordId;
    }

    /**
     * Sets a new recordId
     *
     * @param string $recordId
     * @return self
     */
    public function setRecordId($recordId)
    {
        $this->recordId = $recordId;
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

