<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing UserRoleType
 *
 *
 * XSD Type: UserRole
 */
class UserRoleType extends SObjectType
{

    /**
     * @property string $caseAccessForAccountOwner
     */
    private $caseAccessForAccountOwner = null;

    /**
     * @property string $contactAccessForAccountOwner
     */
    private $contactAccessForAccountOwner = null;

    /**
     * @property string $developerName
     */
    private $developerName = null;

    /**
     * @property string $forecastUserId
     */
    private $forecastUserId = null;

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
     * @property bool $mayForecastManagerShare
     */
    private $mayForecastManagerShare = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $opportunityAccessForAccountOwner
     */
    private $opportunityAccessForAccountOwner = null;

    /**
     * @property string $parentRoleId
     */
    private $parentRoleId = null;

    /**
     * @property string $portalAccountId
     */
    private $portalAccountId = null;

    /**
     * @property string $portalAccountOwnerId
     */
    private $portalAccountOwnerId = null;

    /**
     * @property string $portalType
     */
    private $portalType = null;

    /**
     * @property string $rollupDescription
     */
    private $rollupDescription = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $users
     */
    private $users = null;

    /**
     * Gets as caseAccessForAccountOwner
     *
     * @return string
     */
    public function getCaseAccessForAccountOwner()
    {
        return $this->caseAccessForAccountOwner;
    }

    /**
     * Sets a new caseAccessForAccountOwner
     *
     * @param string $caseAccessForAccountOwner
     * @return self
     */
    public function setCaseAccessForAccountOwner($caseAccessForAccountOwner)
    {
        $this->caseAccessForAccountOwner = $caseAccessForAccountOwner;
        return $this;
    }

    /**
     * Gets as contactAccessForAccountOwner
     *
     * @return string
     */
    public function getContactAccessForAccountOwner()
    {
        return $this->contactAccessForAccountOwner;
    }

    /**
     * Sets a new contactAccessForAccountOwner
     *
     * @param string $contactAccessForAccountOwner
     * @return self
     */
    public function setContactAccessForAccountOwner($contactAccessForAccountOwner)
    {
        $this->contactAccessForAccountOwner = $contactAccessForAccountOwner;
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
     * Gets as forecastUserId
     *
     * @return string
     */
    public function getForecastUserId()
    {
        return $this->forecastUserId;
    }

    /**
     * Sets a new forecastUserId
     *
     * @param string $forecastUserId
     * @return self
     */
    public function setForecastUserId($forecastUserId)
    {
        $this->forecastUserId = $forecastUserId;
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
     * Gets as mayForecastManagerShare
     *
     * @return bool
     */
    public function getMayForecastManagerShare()
    {
        return $this->mayForecastManagerShare;
    }

    /**
     * Sets a new mayForecastManagerShare
     *
     * @param bool $mayForecastManagerShare
     * @return self
     */
    public function setMayForecastManagerShare($mayForecastManagerShare)
    {
        $this->mayForecastManagerShare = $mayForecastManagerShare;
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
     * Gets as opportunityAccessForAccountOwner
     *
     * @return string
     */
    public function getOpportunityAccessForAccountOwner()
    {
        return $this->opportunityAccessForAccountOwner;
    }

    /**
     * Sets a new opportunityAccessForAccountOwner
     *
     * @param string $opportunityAccessForAccountOwner
     * @return self
     */
    public function setOpportunityAccessForAccountOwner($opportunityAccessForAccountOwner)
    {
        $this->opportunityAccessForAccountOwner = $opportunityAccessForAccountOwner;
        return $this;
    }

    /**
     * Gets as parentRoleId
     *
     * @return string
     */
    public function getParentRoleId()
    {
        return $this->parentRoleId;
    }

    /**
     * Sets a new parentRoleId
     *
     * @param string $parentRoleId
     * @return self
     */
    public function setParentRoleId($parentRoleId)
    {
        $this->parentRoleId = $parentRoleId;
        return $this;
    }

    /**
     * Gets as portalAccountId
     *
     * @return string
     */
    public function getPortalAccountId()
    {
        return $this->portalAccountId;
    }

    /**
     * Sets a new portalAccountId
     *
     * @param string $portalAccountId
     * @return self
     */
    public function setPortalAccountId($portalAccountId)
    {
        $this->portalAccountId = $portalAccountId;
        return $this;
    }

    /**
     * Gets as portalAccountOwnerId
     *
     * @return string
     */
    public function getPortalAccountOwnerId()
    {
        return $this->portalAccountOwnerId;
    }

    /**
     * Sets a new portalAccountOwnerId
     *
     * @param string $portalAccountOwnerId
     * @return self
     */
    public function setPortalAccountOwnerId($portalAccountOwnerId)
    {
        $this->portalAccountOwnerId = $portalAccountOwnerId;
        return $this;
    }

    /**
     * Gets as portalType
     *
     * @return string
     */
    public function getPortalType()
    {
        return $this->portalType;
    }

    /**
     * Sets a new portalType
     *
     * @param string $portalType
     * @return self
     */
    public function setPortalType($portalType)
    {
        $this->portalType = $portalType;
        return $this;
    }

    /**
     * Gets as rollupDescription
     *
     * @return string
     */
    public function getRollupDescription()
    {
        return $this->rollupDescription;
    }

    /**
     * Sets a new rollupDescription
     *
     * @param string $rollupDescription
     * @return self
     */
    public function setRollupDescription($rollupDescription)
    {
        $this->rollupDescription = $rollupDescription;
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
     * Gets as users
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Sets a new users
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $users
     * @return self
     */
    public function setUsers(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $users)
    {
        $this->users = $users;
        return $this;
    }


}

