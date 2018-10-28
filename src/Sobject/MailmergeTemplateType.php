<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing MailmergeTemplateType
 *
 *
 * XSD Type: MailmergeTemplate
 */
class MailmergeTemplateType extends SObjectType
{

    /**
     * @property mixed $body
     */
    private $body = null;

    /**
     * @property int $bodyLength
     */
    private $bodyLength = null;

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
     * @property string $filename
     */
    private $filename = null;

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
     * @property \DateTime $lastUsedDate
     */
    private $lastUsedDate = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property bool $securityOptionsAttachmentHasFlash
     */
    private $securityOptionsAttachmentHasFlash = null;

    /**
     * @property bool $securityOptionsAttachmentHasXSSThreat
     */
    private $securityOptionsAttachmentHasXSSThreat = null;

    /**
     * @property bool $securityOptionsAttachmentScannedForXSS
     */
    private $securityOptionsAttachmentScannedForXSS = null;

    /**
     * @property bool $securityOptionsAttachmentScannedforFlash
     */
    private $securityOptionsAttachmentScannedforFlash = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * Gets as body
     *
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param mixed $body
     * @return self
     */
    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as bodyLength
     *
     * @return int
     */
    public function getBodyLength()
    {
        return $this->bodyLength;
    }

    /**
     * Sets a new bodyLength
     *
     * @param int $bodyLength
     * @return self
     */
    public function setBodyLength($bodyLength)
    {
        $this->bodyLength = $bodyLength;
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
     * Gets as filename
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Sets a new filename
     *
     * @param string $filename
     * @return self
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;
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
     * Gets as lastUsedDate
     *
     * @return \DateTime
     */
    public function getLastUsedDate()
    {
        return $this->lastUsedDate;
    }

    /**
     * Sets a new lastUsedDate
     *
     * @param \DateTime $lastUsedDate
     * @return self
     */
    public function setLastUsedDate(\DateTime $lastUsedDate)
    {
        $this->lastUsedDate = $lastUsedDate;
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
     * Gets as securityOptionsAttachmentHasFlash
     *
     * @return bool
     */
    public function getSecurityOptionsAttachmentHasFlash()
    {
        return $this->securityOptionsAttachmentHasFlash;
    }

    /**
     * Sets a new securityOptionsAttachmentHasFlash
     *
     * @param bool $securityOptionsAttachmentHasFlash
     * @return self
     */
    public function setSecurityOptionsAttachmentHasFlash($securityOptionsAttachmentHasFlash)
    {
        $this->securityOptionsAttachmentHasFlash = $securityOptionsAttachmentHasFlash;
        return $this;
    }

    /**
     * Gets as securityOptionsAttachmentHasXSSThreat
     *
     * @return bool
     */
    public function getSecurityOptionsAttachmentHasXSSThreat()
    {
        return $this->securityOptionsAttachmentHasXSSThreat;
    }

    /**
     * Sets a new securityOptionsAttachmentHasXSSThreat
     *
     * @param bool $securityOptionsAttachmentHasXSSThreat
     * @return self
     */
    public function setSecurityOptionsAttachmentHasXSSThreat($securityOptionsAttachmentHasXSSThreat)
    {
        $this->securityOptionsAttachmentHasXSSThreat = $securityOptionsAttachmentHasXSSThreat;
        return $this;
    }

    /**
     * Gets as securityOptionsAttachmentScannedForXSS
     *
     * @return bool
     */
    public function getSecurityOptionsAttachmentScannedForXSS()
    {
        return $this->securityOptionsAttachmentScannedForXSS;
    }

    /**
     * Sets a new securityOptionsAttachmentScannedForXSS
     *
     * @param bool $securityOptionsAttachmentScannedForXSS
     * @return self
     */
    public function setSecurityOptionsAttachmentScannedForXSS($securityOptionsAttachmentScannedForXSS)
    {
        $this->securityOptionsAttachmentScannedForXSS = $securityOptionsAttachmentScannedForXSS;
        return $this;
    }

    /**
     * Gets as securityOptionsAttachmentScannedforFlash
     *
     * @return bool
     */
    public function getSecurityOptionsAttachmentScannedforFlash()
    {
        return $this->securityOptionsAttachmentScannedforFlash;
    }

    /**
     * Sets a new securityOptionsAttachmentScannedforFlash
     *
     * @param bool $securityOptionsAttachmentScannedforFlash
     * @return self
     */
    public function setSecurityOptionsAttachmentScannedforFlash($securityOptionsAttachmentScannedforFlash)
    {
        $this->securityOptionsAttachmentScannedforFlash = $securityOptionsAttachmentScannedforFlash;
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

