<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing ChatterExtensionConfigType
 *
 *
 * XSD Type: ChatterExtensionConfig
 */
class ChatterExtensionConfigType extends SObjectType
{

    /**
     * @property bool $canCreate
     */
    private $canCreate = null;

    /**
     * @property bool $canRead
     */
    private $canRead = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ChatterExtensionType $chatterExtension
     */
    private $chatterExtension = null;

    /**
     * @property string $chatterExtensionId
     */
    private $chatterExtensionId = null;

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
     * @property int $position
     */
    private $position = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * Gets as canCreate
     *
     * @return bool
     */
    public function getCanCreate()
    {
        return $this->canCreate;
    }

    /**
     * Sets a new canCreate
     *
     * @param bool $canCreate
     * @return self
     */
    public function setCanCreate($canCreate)
    {
        $this->canCreate = $canCreate;
        return $this;
    }

    /**
     * Gets as canRead
     *
     * @return bool
     */
    public function getCanRead()
    {
        return $this->canRead;
    }

    /**
     * Sets a new canRead
     *
     * @param bool $canRead
     * @return self
     */
    public function setCanRead($canRead)
    {
        $this->canRead = $canRead;
        return $this;
    }

    /**
     * Gets as chatterExtension
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ChatterExtensionType
     */
    public function getChatterExtension()
    {
        return $this->chatterExtension;
    }

    /**
     * Sets a new chatterExtension
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ChatterExtensionType $chatterExtension
     * @return self
     */
    public function setChatterExtension(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\ChatterExtensionType $chatterExtension)
    {
        $this->chatterExtension = $chatterExtension;
        return $this;
    }

    /**
     * Gets as chatterExtensionId
     *
     * @return string
     */
    public function getChatterExtensionId()
    {
        return $this->chatterExtensionId;
    }

    /**
     * Sets a new chatterExtensionId
     *
     * @param string $chatterExtensionId
     * @return self
     */
    public function setChatterExtensionId($chatterExtensionId)
    {
        $this->chatterExtensionId = $chatterExtensionId;
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
     * Gets as position
     *
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Sets a new position
     *
     * @param int $position
     * @return self
     */
    public function setPosition($position)
    {
        $this->position = $position;
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

