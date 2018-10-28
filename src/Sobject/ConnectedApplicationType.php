<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing ConnectedApplicationType
 *
 *
 * XSD Type: ConnectedApplication
 */
class ConnectedApplicationType extends SObjectType
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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $installedMobileApps
     */
    private $installedMobileApps = null;

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
     * @property string $mobileSessionTimeout
     */
    private $mobileSessionTimeout = null;

    /**
     * @property string $mobileStartUrl
     */
    private $mobileStartUrl = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property bool $optionsAllowAdminApprovedUsersOnly
     */
    private $optionsAllowAdminApprovedUsersOnly = null;

    /**
     * @property bool $optionsFullContentPushNotifications
     */
    private $optionsFullContentPushNotifications = null;

    /**
     * @property bool $optionsHasSessionLevelPolicy
     */
    private $optionsHasSessionLevelPolicy = null;

    /**
     * @property bool $optionsIsInternal
     */
    private $optionsIsInternal = null;

    /**
     * @property bool $optionsRefreshTokenValidityMetric
     */
    private $optionsRefreshTokenValidityMetric = null;

    /**
     * @property string $pinLength
     */
    private $pinLength = null;

    /**
     * @property int $refreshTokenValidityPeriod
     */
    private $refreshTokenValidityPeriod = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $setupEntityAccessItems
     */
    private $setupEntityAccessItems = null;

    /**
     * @property string $startUrl
     */
    private $startUrl = null;

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
     * Gets as installedMobileApps
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getInstalledMobileApps()
    {
        return $this->installedMobileApps;
    }

    /**
     * Sets a new installedMobileApps
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $installedMobileApps
     * @return self
     */
    public function setInstalledMobileApps(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $installedMobileApps)
    {
        $this->installedMobileApps = $installedMobileApps;
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
     * Gets as mobileSessionTimeout
     *
     * @return string
     */
    public function getMobileSessionTimeout()
    {
        return $this->mobileSessionTimeout;
    }

    /**
     * Sets a new mobileSessionTimeout
     *
     * @param string $mobileSessionTimeout
     * @return self
     */
    public function setMobileSessionTimeout($mobileSessionTimeout)
    {
        $this->mobileSessionTimeout = $mobileSessionTimeout;
        return $this;
    }

    /**
     * Gets as mobileStartUrl
     *
     * @return string
     */
    public function getMobileStartUrl()
    {
        return $this->mobileStartUrl;
    }

    /**
     * Sets a new mobileStartUrl
     *
     * @param string $mobileStartUrl
     * @return self
     */
    public function setMobileStartUrl($mobileStartUrl)
    {
        $this->mobileStartUrl = $mobileStartUrl;
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
     * Gets as optionsAllowAdminApprovedUsersOnly
     *
     * @return bool
     */
    public function getOptionsAllowAdminApprovedUsersOnly()
    {
        return $this->optionsAllowAdminApprovedUsersOnly;
    }

    /**
     * Sets a new optionsAllowAdminApprovedUsersOnly
     *
     * @param bool $optionsAllowAdminApprovedUsersOnly
     * @return self
     */
    public function setOptionsAllowAdminApprovedUsersOnly($optionsAllowAdminApprovedUsersOnly)
    {
        $this->optionsAllowAdminApprovedUsersOnly = $optionsAllowAdminApprovedUsersOnly;
        return $this;
    }

    /**
     * Gets as optionsFullContentPushNotifications
     *
     * @return bool
     */
    public function getOptionsFullContentPushNotifications()
    {
        return $this->optionsFullContentPushNotifications;
    }

    /**
     * Sets a new optionsFullContentPushNotifications
     *
     * @param bool $optionsFullContentPushNotifications
     * @return self
     */
    public function setOptionsFullContentPushNotifications($optionsFullContentPushNotifications)
    {
        $this->optionsFullContentPushNotifications = $optionsFullContentPushNotifications;
        return $this;
    }

    /**
     * Gets as optionsHasSessionLevelPolicy
     *
     * @return bool
     */
    public function getOptionsHasSessionLevelPolicy()
    {
        return $this->optionsHasSessionLevelPolicy;
    }

    /**
     * Sets a new optionsHasSessionLevelPolicy
     *
     * @param bool $optionsHasSessionLevelPolicy
     * @return self
     */
    public function setOptionsHasSessionLevelPolicy($optionsHasSessionLevelPolicy)
    {
        $this->optionsHasSessionLevelPolicy = $optionsHasSessionLevelPolicy;
        return $this;
    }

    /**
     * Gets as optionsIsInternal
     *
     * @return bool
     */
    public function getOptionsIsInternal()
    {
        return $this->optionsIsInternal;
    }

    /**
     * Sets a new optionsIsInternal
     *
     * @param bool $optionsIsInternal
     * @return self
     */
    public function setOptionsIsInternal($optionsIsInternal)
    {
        $this->optionsIsInternal = $optionsIsInternal;
        return $this;
    }

    /**
     * Gets as optionsRefreshTokenValidityMetric
     *
     * @return bool
     */
    public function getOptionsRefreshTokenValidityMetric()
    {
        return $this->optionsRefreshTokenValidityMetric;
    }

    /**
     * Sets a new optionsRefreshTokenValidityMetric
     *
     * @param bool $optionsRefreshTokenValidityMetric
     * @return self
     */
    public function setOptionsRefreshTokenValidityMetric($optionsRefreshTokenValidityMetric)
    {
        $this->optionsRefreshTokenValidityMetric = $optionsRefreshTokenValidityMetric;
        return $this;
    }

    /**
     * Gets as pinLength
     *
     * @return string
     */
    public function getPinLength()
    {
        return $this->pinLength;
    }

    /**
     * Sets a new pinLength
     *
     * @param string $pinLength
     * @return self
     */
    public function setPinLength($pinLength)
    {
        $this->pinLength = $pinLength;
        return $this;
    }

    /**
     * Gets as refreshTokenValidityPeriod
     *
     * @return int
     */
    public function getRefreshTokenValidityPeriod()
    {
        return $this->refreshTokenValidityPeriod;
    }

    /**
     * Sets a new refreshTokenValidityPeriod
     *
     * @param int $refreshTokenValidityPeriod
     * @return self
     */
    public function setRefreshTokenValidityPeriod($refreshTokenValidityPeriod)
    {
        $this->refreshTokenValidityPeriod = $refreshTokenValidityPeriod;
        return $this;
    }

    /**
     * Gets as setupEntityAccessItems
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getSetupEntityAccessItems()
    {
        return $this->setupEntityAccessItems;
    }

    /**
     * Sets a new setupEntityAccessItems
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $setupEntityAccessItems
     * @return self
     */
    public function setSetupEntityAccessItems(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $setupEntityAccessItems)
    {
        $this->setupEntityAccessItems = $setupEntityAccessItems;
        return $this;
    }

    /**
     * Gets as startUrl
     *
     * @return string
     */
    public function getStartUrl()
    {
        return $this->startUrl;
    }

    /**
     * Sets a new startUrl
     *
     * @param string $startUrl
     * @return self
     */
    public function setStartUrl($startUrl)
    {
        $this->startUrl = $startUrl;
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

