<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing EmailServicesAddressType
 *
 *
 * XSD Type: EmailServicesAddress
 */
class EmailServicesAddressType extends SObjectType
{

    /**
     * @property string $authorizedSenders
     */
    private $authorizedSenders = null;

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
     * @property string $developerName
     */
    private $developerName = null;

    /**
     * @property string $emailDomainName
     */
    private $emailDomainName = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\EmailServicesFunctionType $function
     */
    private $function = null;

    /**
     * @property string $functionId
     */
    private $functionId = null;

    /**
     * @property bool $isActive
     */
    private $isActive = null;

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
     * @property string $localPart
     */
    private $localPart = null;

    /**
     * @property string $runAsUserId
     */
    private $runAsUserId = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * Gets as authorizedSenders
     *
     * @return string
     */
    public function getAuthorizedSenders()
    {
        return $this->authorizedSenders;
    }

    /**
     * Sets a new authorizedSenders
     *
     * @param string $authorizedSenders
     * @return self
     */
    public function setAuthorizedSenders($authorizedSenders)
    {
        $this->authorizedSenders = $authorizedSenders;
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
     * Gets as emailDomainName
     *
     * @return string
     */
    public function getEmailDomainName()
    {
        return $this->emailDomainName;
    }

    /**
     * Sets a new emailDomainName
     *
     * @param string $emailDomainName
     * @return self
     */
    public function setEmailDomainName($emailDomainName)
    {
        $this->emailDomainName = $emailDomainName;
        return $this;
    }

    /**
     * Gets as function
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\EmailServicesFunctionType
     */
    public function getFunction()
    {
        return $this->function;
    }

    /**
     * Sets a new function
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\EmailServicesFunctionType $function
     * @return self
     */
    public function setFunction(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\EmailServicesFunctionType $function)
    {
        $this->function = $function;
        return $this;
    }

    /**
     * Gets as functionId
     *
     * @return string
     */
    public function getFunctionId()
    {
        return $this->functionId;
    }

    /**
     * Sets a new functionId
     *
     * @param string $functionId
     * @return self
     */
    public function setFunctionId($functionId)
    {
        $this->functionId = $functionId;
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
     * Gets as localPart
     *
     * @return string
     */
    public function getLocalPart()
    {
        return $this->localPart;
    }

    /**
     * Sets a new localPart
     *
     * @param string $localPart
     * @return self
     */
    public function setLocalPart($localPart)
    {
        $this->localPart = $localPart;
        return $this;
    }

    /**
     * Gets as runAsUserId
     *
     * @return string
     */
    public function getRunAsUserId()
    {
        return $this->runAsUserId;
    }

    /**
     * Sets a new runAsUserId
     *
     * @param string $runAsUserId
     * @return self
     */
    public function setRunAsUserId($runAsUserId)
    {
        $this->runAsUserId = $runAsUserId;
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

