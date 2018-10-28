<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing PushTopicType
 *
 *
 * XSD Type: PushTopic
 */
class PushTopicType extends SObjectType
{

    /**
     * @property float $apiVersion
     */
    private $apiVersion = null;

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
     * @property string $description
     */
    private $description = null;

    /**
     * @property bool $isActive
     */
    private $isActive = null;

    /**
     * @property bool $isDeleted
     */
    private $isDeleted = null;

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
     * @property string $notifyForFields
     */
    private $notifyForFields = null;

    /**
     * @property bool $notifyForOperationCreate
     */
    private $notifyForOperationCreate = null;

    /**
     * @property bool $notifyForOperationDelete
     */
    private $notifyForOperationDelete = null;

    /**
     * @property bool $notifyForOperationUndelete
     */
    private $notifyForOperationUndelete = null;

    /**
     * @property bool $notifyForOperationUpdate
     */
    private $notifyForOperationUpdate = null;

    /**
     * @property string $notifyForOperations
     */
    private $notifyForOperations = null;

    /**
     * @property string $query
     */
    private $query = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * Gets as apiVersion
     *
     * @return float
     */
    public function getApiVersion()
    {
        return $this->apiVersion;
    }

    /**
     * Sets a new apiVersion
     *
     * @param float $apiVersion
     * @return self
     */
    public function setApiVersion($apiVersion)
    {
        $this->apiVersion = $apiVersion;
        return $this;
    }

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
     * Gets as description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
     * Gets as notifyForFields
     *
     * @return string
     */
    public function getNotifyForFields()
    {
        return $this->notifyForFields;
    }

    /**
     * Sets a new notifyForFields
     *
     * @param string $notifyForFields
     * @return self
     */
    public function setNotifyForFields($notifyForFields)
    {
        $this->notifyForFields = $notifyForFields;
        return $this;
    }

    /**
     * Gets as notifyForOperationCreate
     *
     * @return bool
     */
    public function getNotifyForOperationCreate()
    {
        return $this->notifyForOperationCreate;
    }

    /**
     * Sets a new notifyForOperationCreate
     *
     * @param bool $notifyForOperationCreate
     * @return self
     */
    public function setNotifyForOperationCreate($notifyForOperationCreate)
    {
        $this->notifyForOperationCreate = $notifyForOperationCreate;
        return $this;
    }

    /**
     * Gets as notifyForOperationDelete
     *
     * @return bool
     */
    public function getNotifyForOperationDelete()
    {
        return $this->notifyForOperationDelete;
    }

    /**
     * Sets a new notifyForOperationDelete
     *
     * @param bool $notifyForOperationDelete
     * @return self
     */
    public function setNotifyForOperationDelete($notifyForOperationDelete)
    {
        $this->notifyForOperationDelete = $notifyForOperationDelete;
        return $this;
    }

    /**
     * Gets as notifyForOperationUndelete
     *
     * @return bool
     */
    public function getNotifyForOperationUndelete()
    {
        return $this->notifyForOperationUndelete;
    }

    /**
     * Sets a new notifyForOperationUndelete
     *
     * @param bool $notifyForOperationUndelete
     * @return self
     */
    public function setNotifyForOperationUndelete($notifyForOperationUndelete)
    {
        $this->notifyForOperationUndelete = $notifyForOperationUndelete;
        return $this;
    }

    /**
     * Gets as notifyForOperationUpdate
     *
     * @return bool
     */
    public function getNotifyForOperationUpdate()
    {
        return $this->notifyForOperationUpdate;
    }

    /**
     * Sets a new notifyForOperationUpdate
     *
     * @param bool $notifyForOperationUpdate
     * @return self
     */
    public function setNotifyForOperationUpdate($notifyForOperationUpdate)
    {
        $this->notifyForOperationUpdate = $notifyForOperationUpdate;
        return $this;
    }

    /**
     * Gets as notifyForOperations
     *
     * @return string
     */
    public function getNotifyForOperations()
    {
        return $this->notifyForOperations;
    }

    /**
     * Sets a new notifyForOperations
     *
     * @param string $notifyForOperations
     * @return self
     */
    public function setNotifyForOperations($notifyForOperations)
    {
        $this->notifyForOperations = $notifyForOperations;
        return $this;
    }

    /**
     * Gets as query
     *
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Sets a new query
     *
     * @param string $query
     * @return self
     */
    public function setQuery($query)
    {
        $this->query = $query;
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

