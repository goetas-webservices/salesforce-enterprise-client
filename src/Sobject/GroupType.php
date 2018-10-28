<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing GroupType
 *
 *
 * XSD Type: Group
 */
class GroupType extends SObjectType
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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $delegatedUsers
     */
    private $delegatedUsers = null;

    /**
     * @property string $developerName
     */
    private $developerName = null;

    /**
     * @property bool $doesIncludeBosses
     */
    private $doesIncludeBosses = null;

    /**
     * @property bool $doesSendEmailToMembers
     */
    private $doesSendEmailToMembers = null;

    /**
     * @property string $email
     */
    private $email = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $groupMembers
     */
    private $groupMembers = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $lastModifiedBy
     */
    private $lastModifiedBy = null;

    /**
     * @property string $lastModifiedById
     */
    private $lastModifiedById = null;

    /**
     * @property \DateTime $lastModifiedDate
     */
    private $lastModifiedDate = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $owner
     */
    private $owner = null;

    /**
     * @property string $ownerId
     */
    private $ownerId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $queueSobjects
     */
    private $queueSobjects = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $related
     */
    private $related = null;

    /**
     * @property string $relatedId
     */
    private $relatedId = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property string $type
     */
    private $type = null;

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
     * Gets as delegatedUsers
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getDelegatedUsers()
    {
        return $this->delegatedUsers;
    }

    /**
     * Sets a new delegatedUsers
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $delegatedUsers
     * @return self
     */
    public function setDelegatedUsers(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $delegatedUsers)
    {
        $this->delegatedUsers = $delegatedUsers;
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
     * Gets as doesIncludeBosses
     *
     * @return bool
     */
    public function getDoesIncludeBosses()
    {
        return $this->doesIncludeBosses;
    }

    /**
     * Sets a new doesIncludeBosses
     *
     * @param bool $doesIncludeBosses
     * @return self
     */
    public function setDoesIncludeBosses($doesIncludeBosses)
    {
        $this->doesIncludeBosses = $doesIncludeBosses;
        return $this;
    }

    /**
     * Gets as doesSendEmailToMembers
     *
     * @return bool
     */
    public function getDoesSendEmailToMembers()
    {
        return $this->doesSendEmailToMembers;
    }

    /**
     * Sets a new doesSendEmailToMembers
     *
     * @param bool $doesSendEmailToMembers
     * @return self
     */
    public function setDoesSendEmailToMembers($doesSendEmailToMembers)
    {
        $this->doesSendEmailToMembers = $doesSendEmailToMembers;
        return $this;
    }

    /**
     * Gets as email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * @param string $email
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Gets as groupMembers
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getGroupMembers()
    {
        return $this->groupMembers;
    }

    /**
     * Sets a new groupMembers
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $groupMembers
     * @return self
     */
    public function setGroupMembers(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $groupMembers)
    {
        $this->groupMembers = $groupMembers;
        return $this;
    }

    /**
     * Gets as lastModifiedBy
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType
     */
    public function getLastModifiedBy()
    {
        return $this->lastModifiedBy;
    }

    /**
     * Sets a new lastModifiedBy
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $lastModifiedBy
     * @return self
     */
    public function setLastModifiedBy(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $lastModifiedBy)
    {
        $this->lastModifiedBy = $lastModifiedBy;
        return $this;
    }

    /**
     * Gets as lastModifiedById
     *
     * @return string
     */
    public function getLastModifiedById()
    {
        return $this->lastModifiedById;
    }

    /**
     * Sets a new lastModifiedById
     *
     * @param string $lastModifiedById
     * @return self
     */
    public function setLastModifiedById($lastModifiedById)
    {
        $this->lastModifiedById = $lastModifiedById;
        return $this;
    }

    /**
     * Gets as lastModifiedDate
     *
     * @return \DateTime
     */
    public function getLastModifiedDate()
    {
        return $this->lastModifiedDate;
    }

    /**
     * Sets a new lastModifiedDate
     *
     * @param \DateTime $lastModifiedDate
     * @return self
     */
    public function setLastModifiedDate(\DateTime $lastModifiedDate)
    {
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as owner
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Sets a new owner
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $owner
     * @return self
     */
    public function setOwner(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $owner)
    {
        $this->owner = $owner;
        return $this;
    }

    /**
     * Gets as ownerId
     *
     * @return string
     */
    public function getOwnerId()
    {
        return $this->ownerId;
    }

    /**
     * Sets a new ownerId
     *
     * @param string $ownerId
     * @return self
     */
    public function setOwnerId($ownerId)
    {
        $this->ownerId = $ownerId;
        return $this;
    }

    /**
     * Gets as queueSobjects
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getQueueSobjects()
    {
        return $this->queueSobjects;
    }

    /**
     * Sets a new queueSobjects
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $queueSobjects
     * @return self
     */
    public function setQueueSobjects(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $queueSobjects)
    {
        $this->queueSobjects = $queueSobjects;
        return $this;
    }

    /**
     * Gets as related
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType
     */
    public function getRelated()
    {
        return $this->related;
    }

    /**
     * Sets a new related
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $related
     * @return self
     */
    public function setRelated(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $related)
    {
        $this->related = $related;
        return $this;
    }

    /**
     * Gets as relatedId
     *
     * @return string
     */
    public function getRelatedId()
    {
        return $this->relatedId;
    }

    /**
     * Sets a new relatedId
     *
     * @param string $relatedId
     * @return self
     */
    public function setRelatedId($relatedId)
    {
        $this->relatedId = $relatedId;
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

    /**
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }


}

