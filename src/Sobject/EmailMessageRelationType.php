<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing EmailMessageRelationType
 *
 *
 * XSD Type: EmailMessageRelation
 */
class EmailMessageRelationType extends SObjectType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $createdBy
     */
    private $createdBy = null;

    /**
     * @property string $createdById
     */
    private $createdById = null;

    /**
     * @property \DateTime $createdDate
     */
    private $createdDate = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\EmailMessageType $emailMessage
     */
    private $emailMessage = null;

    /**
     * @property string $emailMessageId
     */
    private $emailMessageId = null;

    /**
     * @property bool $isDeleted
     */
    private $isDeleted = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $relation
     */
    private $relation = null;

    /**
     * @property string $relationAddress
     */
    private $relationAddress = null;

    /**
     * @property string $relationId
     */
    private $relationId = null;

    /**
     * @property string $relationObjectType
     */
    private $relationObjectType = null;

    /**
     * @property string $relationType
     */
    private $relationType = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * Gets as createdBy
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Sets a new createdBy
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $createdBy
     * @return self
     */
    public function setCreatedBy(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $createdBy)
    {
        $this->createdBy = $createdBy;
        return $this;
    }

    /**
     * Gets as createdById
     *
     * @return string
     */
    public function getCreatedById()
    {
        return $this->createdById;
    }

    /**
     * Sets a new createdById
     *
     * @param string $createdById
     * @return self
     */
    public function setCreatedById($createdById)
    {
        $this->createdById = $createdById;
        return $this;
    }

    /**
     * Gets as createdDate
     *
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * Sets a new createdDate
     *
     * @param \DateTime $createdDate
     * @return self
     */
    public function setCreatedDate(\DateTime $createdDate)
    {
        $this->createdDate = $createdDate;
        return $this;
    }

    /**
     * Gets as emailMessage
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\EmailMessageType
     */
    public function getEmailMessage()
    {
        return $this->emailMessage;
    }

    /**
     * Sets a new emailMessage
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\EmailMessageType $emailMessage
     * @return self
     */
    public function setEmailMessage(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\EmailMessageType $emailMessage)
    {
        $this->emailMessage = $emailMessage;
        return $this;
    }

    /**
     * Gets as emailMessageId
     *
     * @return string
     */
    public function getEmailMessageId()
    {
        return $this->emailMessageId;
    }

    /**
     * Sets a new emailMessageId
     *
     * @param string $emailMessageId
     * @return self
     */
    public function setEmailMessageId($emailMessageId)
    {
        $this->emailMessageId = $emailMessageId;
        return $this;
    }

    /**
     * Gets as isDeleted
     *
     * @return bool
     */
    public function getIsDeleted()
    {
        return $this->isDeleted;
    }

    /**
     * Sets a new isDeleted
     *
     * @param bool $isDeleted
     * @return self
     */
    public function setIsDeleted($isDeleted)
    {
        $this->isDeleted = $isDeleted;
        return $this;
    }

    /**
     * Gets as relation
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType
     */
    public function getRelation()
    {
        return $this->relation;
    }

    /**
     * Sets a new relation
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $relation
     * @return self
     */
    public function setRelation(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $relation)
    {
        $this->relation = $relation;
        return $this;
    }

    /**
     * Gets as relationAddress
     *
     * @return string
     */
    public function getRelationAddress()
    {
        return $this->relationAddress;
    }

    /**
     * Sets a new relationAddress
     *
     * @param string $relationAddress
     * @return self
     */
    public function setRelationAddress($relationAddress)
    {
        $this->relationAddress = $relationAddress;
        return $this;
    }

    /**
     * Gets as relationId
     *
     * @return string
     */
    public function getRelationId()
    {
        return $this->relationId;
    }

    /**
     * Sets a new relationId
     *
     * @param string $relationId
     * @return self
     */
    public function setRelationId($relationId)
    {
        $this->relationId = $relationId;
        return $this;
    }

    /**
     * Gets as relationObjectType
     *
     * @return string
     */
    public function getRelationObjectType()
    {
        return $this->relationObjectType;
    }

    /**
     * Sets a new relationObjectType
     *
     * @param string $relationObjectType
     * @return self
     */
    public function setRelationObjectType($relationObjectType)
    {
        $this->relationObjectType = $relationObjectType;
        return $this;
    }

    /**
     * Gets as relationType
     *
     * @return string
     */
    public function getRelationType()
    {
        return $this->relationType;
    }

    /**
     * Sets a new relationType
     *
     * @param string $relationType
     * @return self
     */
    public function setRelationType($relationType)
    {
        $this->relationType = $relationType;
        return $this;
    }

    /**
     * Gets as systemModstamp
     *
     * @return \DateTime
     */
    public function getSystemModstamp()
    {
        return $this->systemModstamp;
    }

    /**
     * Sets a new systemModstamp
     *
     * @param \DateTime $systemModstamp
     * @return self
     */
    public function setSystemModstamp(\DateTime $systemModstamp)
    {
        $this->systemModstamp = $systemModstamp;
        return $this;
    }


}

