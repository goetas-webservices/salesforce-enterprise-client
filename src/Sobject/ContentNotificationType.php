<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing ContentNotificationType
 *
 *
 * XSD Type: ContentNotification
 */
class ContentNotificationType extends SObjectType
{

    /**
     * @property \DateTime $createdDate
     */
    private $createdDate = null;

    /**
     * @property string $entityIdentifierId
     */
    private $entityIdentifierId = null;

    /**
     * @property string $entityType
     */
    private $entityType = null;

    /**
     * @property string $nature
     */
    private $nature = null;

    /**
     * @property string $subject
     */
    private $subject = null;

    /**
     * @property string $text
     */
    private $text = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $users
     */
    private $users = null;

    /**
     * @property string $usersId
     */
    private $usersId = null;

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
     * Gets as entityIdentifierId
     *
     * @return string
     */
    public function getEntityIdentifierId()
    {
        return $this->entityIdentifierId;
    }

    /**
     * Sets a new entityIdentifierId
     *
     * @param string $entityIdentifierId
     * @return self
     */
    public function setEntityIdentifierId($entityIdentifierId)
    {
        $this->entityIdentifierId = $entityIdentifierId;
        return $this;
    }

    /**
     * Gets as entityType
     *
     * @return string
     */
    public function getEntityType()
    {
        return $this->entityType;
    }

    /**
     * Sets a new entityType
     *
     * @param string $entityType
     * @return self
     */
    public function setEntityType($entityType)
    {
        $this->entityType = $entityType;
        return $this;
    }

    /**
     * Gets as nature
     *
     * @return string
     */
    public function getNature()
    {
        return $this->nature;
    }

    /**
     * Sets a new nature
     *
     * @param string $nature
     * @return self
     */
    public function setNature($nature)
    {
        $this->nature = $nature;
        return $this;
    }

    /**
     * Gets as subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Sets a new subject
     *
     * @param string $subject
     * @return self
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Gets as text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * @param string $text
     * @return self
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * Gets as users
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Sets a new users
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $users
     * @return self
     */
    public function setUsers(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $users)
    {
        $this->users = $users;
        return $this;
    }

    /**
     * Gets as usersId
     *
     * @return string
     */
    public function getUsersId()
    {
        return $this->usersId;
    }

    /**
     * Sets a new usersId
     *
     * @param string $usersId
     * @return self
     */
    public function setUsersId($usersId)
    {
        $this->usersId = $usersId;
        return $this;
    }


}

