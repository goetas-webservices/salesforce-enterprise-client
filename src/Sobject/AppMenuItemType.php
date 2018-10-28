<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing AppMenuItemType
 *
 *
 * XSD Type: AppMenuItem
 */
class AppMenuItemType extends SObjectType
{

    /**
     * @property string $applicationId
     */
    private $applicationId = null;

    /**
     * @property string $canvasAccessMethod
     */
    private $canvasAccessMethod = null;

    /**
     * @property bool $canvasEnabled
     */
    private $canvasEnabled = null;

    /**
     * @property string $canvasOptions
     */
    private $canvasOptions = null;

    /**
     * @property string $canvasReferenceId
     */
    private $canvasReferenceId = null;

    /**
     * @property string $canvasSelectedLocations
     */
    private $canvasSelectedLocations = null;

    /**
     * @property string $canvasUrl
     */
    private $canvasUrl = null;

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
     * @property string $iconUrl
     */
    private $iconUrl = null;

    /**
     * @property string $infoUrl
     */
    private $infoUrl = null;

    /**
     * @property bool $isAccessible
     */
    private $isAccessible = null;

    /**
     * @property bool $isDeleted
     */
    private $isDeleted = null;

    /**
     * @property bool $isRegisteredDeviceOnly
     */
    private $isRegisteredDeviceOnly = null;

    /**
     * @property bool $isUsingAdminAuthorization
     */
    private $isUsingAdminAuthorization = null;

    /**
     * @property bool $isVisible
     */
    private $isVisible = null;

    /**
     * @property string $label
     */
    private $label = null;

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
     * @property string $logoUrl
     */
    private $logoUrl = null;

    /**
     * @property string $mobileAppBinaryId
     */
    private $mobileAppBinaryId = null;

    /**
     * @property string $mobileAppInstallUrl
     */
    private $mobileAppInstallUrl = null;

    /**
     * @property \DateTime $mobileAppInstalledDate
     */
    private $mobileAppInstalledDate = null;

    /**
     * @property string $mobileAppInstalledVersion
     */
    private $mobileAppInstalledVersion = null;

    /**
     * @property string $mobileAppVer
     */
    private $mobileAppVer = null;

    /**
     * @property string $mobileDeviceType
     */
    private $mobileDeviceType = null;

    /**
     * @property string $mobileMinOsVer
     */
    private $mobileMinOsVer = null;

    /**
     * @property string $mobilePlatform
     */
    private $mobilePlatform = null;

    /**
     * @property string $mobileStartUrl
     */
    private $mobileStartUrl = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $namespacePrefix
     */
    private $namespacePrefix = null;

    /**
     * @property int $sortOrder
     */
    private $sortOrder = null;

    /**
     * @property string $startUrl
     */
    private $startUrl = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property string $type
     */
    private $type = null;

    /**
     * @property int $userSortOrder
     */
    private $userSortOrder = null;

    /**
     * Gets as applicationId
     *
     * @return string
     */
    public function getApplicationId()
    {
        return $this->applicationId;
    }

    /**
     * Sets a new applicationId
     *
     * @param string $applicationId
     * @return self
     */
    public function setApplicationId($applicationId)
    {
        $this->applicationId = $applicationId;
        return $this;
    }

    /**
     * Gets as canvasAccessMethod
     *
     * @return string
     */
    public function getCanvasAccessMethod()
    {
        return $this->canvasAccessMethod;
    }

    /**
     * Sets a new canvasAccessMethod
     *
     * @param string $canvasAccessMethod
     * @return self
     */
    public function setCanvasAccessMethod($canvasAccessMethod)
    {
        $this->canvasAccessMethod = $canvasAccessMethod;
        return $this;
    }

    /**
     * Gets as canvasEnabled
     *
     * @return bool
     */
    public function getCanvasEnabled()
    {
        return $this->canvasEnabled;
    }

    /**
     * Sets a new canvasEnabled
     *
     * @param bool $canvasEnabled
     * @return self
     */
    public function setCanvasEnabled($canvasEnabled)
    {
        $this->canvasEnabled = $canvasEnabled;
        return $this;
    }

    /**
     * Gets as canvasOptions
     *
     * @return string
     */
    public function getCanvasOptions()
    {
        return $this->canvasOptions;
    }

    /**
     * Sets a new canvasOptions
     *
     * @param string $canvasOptions
     * @return self
     */
    public function setCanvasOptions($canvasOptions)
    {
        $this->canvasOptions = $canvasOptions;
        return $this;
    }

    /**
     * Gets as canvasReferenceId
     *
     * @return string
     */
    public function getCanvasReferenceId()
    {
        return $this->canvasReferenceId;
    }

    /**
     * Sets a new canvasReferenceId
     *
     * @param string $canvasReferenceId
     * @return self
     */
    public function setCanvasReferenceId($canvasReferenceId)
    {
        $this->canvasReferenceId = $canvasReferenceId;
        return $this;
    }

    /**
     * Gets as canvasSelectedLocations
     *
     * @return string
     */
    public function getCanvasSelectedLocations()
    {
        return $this->canvasSelectedLocations;
    }

    /**
     * Sets a new canvasSelectedLocations
     *
     * @param string $canvasSelectedLocations
     * @return self
     */
    public function setCanvasSelectedLocations($canvasSelectedLocations)
    {
        $this->canvasSelectedLocations = $canvasSelectedLocations;
        return $this;
    }

    /**
     * Gets as canvasUrl
     *
     * @return string
     */
    public function getCanvasUrl()
    {
        return $this->canvasUrl;
    }

    /**
     * Sets a new canvasUrl
     *
     * @param string $canvasUrl
     * @return self
     */
    public function setCanvasUrl($canvasUrl)
    {
        $this->canvasUrl = $canvasUrl;
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
     * Gets as iconUrl
     *
     * @return string
     */
    public function getIconUrl()
    {
        return $this->iconUrl;
    }

    /**
     * Sets a new iconUrl
     *
     * @param string $iconUrl
     * @return self
     */
    public function setIconUrl($iconUrl)
    {
        $this->iconUrl = $iconUrl;
        return $this;
    }

    /**
     * Gets as infoUrl
     *
     * @return string
     */
    public function getInfoUrl()
    {
        return $this->infoUrl;
    }

    /**
     * Sets a new infoUrl
     *
     * @param string $infoUrl
     * @return self
     */
    public function setInfoUrl($infoUrl)
    {
        $this->infoUrl = $infoUrl;
        return $this;
    }

    /**
     * Gets as isAccessible
     *
     * @return bool
     */
    public function getIsAccessible()
    {
        return $this->isAccessible;
    }

    /**
     * Sets a new isAccessible
     *
     * @param bool $isAccessible
     * @return self
     */
    public function setIsAccessible($isAccessible)
    {
        $this->isAccessible = $isAccessible;
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
     * Gets as isRegisteredDeviceOnly
     *
     * @return bool
     */
    public function getIsRegisteredDeviceOnly()
    {
        return $this->isRegisteredDeviceOnly;
    }

    /**
     * Sets a new isRegisteredDeviceOnly
     *
     * @param bool $isRegisteredDeviceOnly
     * @return self
     */
    public function setIsRegisteredDeviceOnly($isRegisteredDeviceOnly)
    {
        $this->isRegisteredDeviceOnly = $isRegisteredDeviceOnly;
        return $this;
    }

    /**
     * Gets as isUsingAdminAuthorization
     *
     * @return bool
     */
    public function getIsUsingAdminAuthorization()
    {
        return $this->isUsingAdminAuthorization;
    }

    /**
     * Sets a new isUsingAdminAuthorization
     *
     * @param bool $isUsingAdminAuthorization
     * @return self
     */
    public function setIsUsingAdminAuthorization($isUsingAdminAuthorization)
    {
        $this->isUsingAdminAuthorization = $isUsingAdminAuthorization;
        return $this;
    }

    /**
     * Gets as isVisible
     *
     * @return bool
     */
    public function getIsVisible()
    {
        return $this->isVisible;
    }

    /**
     * Sets a new isVisible
     *
     * @param bool $isVisible
     * @return self
     */
    public function setIsVisible($isVisible)
    {
        $this->isVisible = $isVisible;
        return $this;
    }

    /**
     * Gets as label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Sets a new label
     *
     * @param string $label
     * @return self
     */
    public function setLabel($label)
    {
        $this->label = $label;
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
     * Gets as logoUrl
     *
     * @return string
     */
    public function getLogoUrl()
    {
        return $this->logoUrl;
    }

    /**
     * Sets a new logoUrl
     *
     * @param string $logoUrl
     * @return self
     */
    public function setLogoUrl($logoUrl)
    {
        $this->logoUrl = $logoUrl;
        return $this;
    }

    /**
     * Gets as mobileAppBinaryId
     *
     * @return string
     */
    public function getMobileAppBinaryId()
    {
        return $this->mobileAppBinaryId;
    }

    /**
     * Sets a new mobileAppBinaryId
     *
     * @param string $mobileAppBinaryId
     * @return self
     */
    public function setMobileAppBinaryId($mobileAppBinaryId)
    {
        $this->mobileAppBinaryId = $mobileAppBinaryId;
        return $this;
    }

    /**
     * Gets as mobileAppInstallUrl
     *
     * @return string
     */
    public function getMobileAppInstallUrl()
    {
        return $this->mobileAppInstallUrl;
    }

    /**
     * Sets a new mobileAppInstallUrl
     *
     * @param string $mobileAppInstallUrl
     * @return self
     */
    public function setMobileAppInstallUrl($mobileAppInstallUrl)
    {
        $this->mobileAppInstallUrl = $mobileAppInstallUrl;
        return $this;
    }

    /**
     * Gets as mobileAppInstalledDate
     *
     * @return \DateTime
     */
    public function getMobileAppInstalledDate()
    {
        return $this->mobileAppInstalledDate;
    }

    /**
     * Sets a new mobileAppInstalledDate
     *
     * @param \DateTime $mobileAppInstalledDate
     * @return self
     */
    public function setMobileAppInstalledDate(\DateTime $mobileAppInstalledDate)
    {
        $this->mobileAppInstalledDate = $mobileAppInstalledDate;
        return $this;
    }

    /**
     * Gets as mobileAppInstalledVersion
     *
     * @return string
     */
    public function getMobileAppInstalledVersion()
    {
        return $this->mobileAppInstalledVersion;
    }

    /**
     * Sets a new mobileAppInstalledVersion
     *
     * @param string $mobileAppInstalledVersion
     * @return self
     */
    public function setMobileAppInstalledVersion($mobileAppInstalledVersion)
    {
        $this->mobileAppInstalledVersion = $mobileAppInstalledVersion;
        return $this;
    }

    /**
     * Gets as mobileAppVer
     *
     * @return string
     */
    public function getMobileAppVer()
    {
        return $this->mobileAppVer;
    }

    /**
     * Sets a new mobileAppVer
     *
     * @param string $mobileAppVer
     * @return self
     */
    public function setMobileAppVer($mobileAppVer)
    {
        $this->mobileAppVer = $mobileAppVer;
        return $this;
    }

    /**
     * Gets as mobileDeviceType
     *
     * @return string
     */
    public function getMobileDeviceType()
    {
        return $this->mobileDeviceType;
    }

    /**
     * Sets a new mobileDeviceType
     *
     * @param string $mobileDeviceType
     * @return self
     */
    public function setMobileDeviceType($mobileDeviceType)
    {
        $this->mobileDeviceType = $mobileDeviceType;
        return $this;
    }

    /**
     * Gets as mobileMinOsVer
     *
     * @return string
     */
    public function getMobileMinOsVer()
    {
        return $this->mobileMinOsVer;
    }

    /**
     * Sets a new mobileMinOsVer
     *
     * @param string $mobileMinOsVer
     * @return self
     */
    public function setMobileMinOsVer($mobileMinOsVer)
    {
        $this->mobileMinOsVer = $mobileMinOsVer;
        return $this;
    }

    /**
     * Gets as mobilePlatform
     *
     * @return string
     */
    public function getMobilePlatform()
    {
        return $this->mobilePlatform;
    }

    /**
     * Sets a new mobilePlatform
     *
     * @param string $mobilePlatform
     * @return self
     */
    public function setMobilePlatform($mobilePlatform)
    {
        $this->mobilePlatform = $mobilePlatform;
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
     * Gets as namespacePrefix
     *
     * @return string
     */
    public function getNamespacePrefix()
    {
        return $this->namespacePrefix;
    }

    /**
     * Sets a new namespacePrefix
     *
     * @param string $namespacePrefix
     * @return self
     */
    public function setNamespacePrefix($namespacePrefix)
    {
        $this->namespacePrefix = $namespacePrefix;
        return $this;
    }

    /**
     * Gets as sortOrder
     *
     * @return int
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * Sets a new sortOrder
     *
     * @param int $sortOrder
     * @return self
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;
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

    /**
     * Gets as userSortOrder
     *
     * @return int
     */
    public function getUserSortOrder()
    {
        return $this->userSortOrder;
    }

    /**
     * Sets a new userSortOrder
     *
     * @param int $userSortOrder
     * @return self
     */
    public function setUserSortOrder($userSortOrder)
    {
        $this->userSortOrder = $userSortOrder;
        return $this;
    }


}

