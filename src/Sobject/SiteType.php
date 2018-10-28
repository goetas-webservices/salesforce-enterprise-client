<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing SiteType
 *
 *
 * XSD Type: Site
 */
class SiteType extends SObjectType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $admin
     */
    private $admin = null;

    /**
     * @property string $adminId
     */
    private $adminId = null;

    /**
     * @property string $analyticsTrackingCode
     */
    private $analyticsTrackingCode = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $attachedContentDocuments
     */
    private $attachedContentDocuments = null;

    /**
     * @property string $clickjackProtectionLevel
     */
    private $clickjackProtectionLevel = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $combinedAttachments
     */
    private $combinedAttachments = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $contentDocumentLinks
     */
    private $contentDocumentLinks = null;

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
     * @property int $dailyBandwidthLimit
     */
    private $dailyBandwidthLimit = null;

    /**
     * @property int $dailyBandwidthUsed
     */
    private $dailyBandwidthUsed = null;

    /**
     * @property int $dailyRequestTimeLimit
     */
    private $dailyRequestTimeLimit = null;

    /**
     * @property int $dailyRequestTimeUsed
     */
    private $dailyRequestTimeUsed = null;

    /**
     * @property string $description
     */
    private $description = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feedSubscriptionsForEntity
     */
    private $feedSubscriptionsForEntity = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feeds
     */
    private $feeds = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $guestUser
     */
    private $guestUser = null;

    /**
     * @property string $guestUserId
     */
    private $guestUserId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $histories
     */
    private $histories = null;

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
     * @property string $masterLabel
     */
    private $masterLabel = null;

    /**
     * @property int $monthlyPageViewsEntitlement
     */
    private $monthlyPageViewsEntitlement = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property bool $optionsAllowGuestSupportApi
     */
    private $optionsAllowGuestSupportApi = null;

    /**
     * @property bool $optionsAllowHomePage
     */
    private $optionsAllowHomePage = null;

    /**
     * @property bool $optionsAllowStandardAnswersPages
     */
    private $optionsAllowStandardAnswersPages = null;

    /**
     * @property bool $optionsAllowStandardIdeasPages
     */
    private $optionsAllowStandardIdeasPages = null;

    /**
     * @property bool $optionsAllowStandardLookups
     */
    private $optionsAllowStandardLookups = null;

    /**
     * @property bool $optionsAllowStandardPortalPages
     */
    private $optionsAllowStandardPortalPages = null;

    /**
     * @property bool $optionsAllowStandardSearch
     */
    private $optionsAllowStandardSearch = null;

    /**
     * @property bool $optionsBrowserXssProtection
     */
    private $optionsBrowserXssProtection = null;

    /**
     * @property bool $optionsContentSniffingProtection
     */
    private $optionsContentSniffingProtection = null;

    /**
     * @property bool $optionsCspUpgradeInsecureRequests
     */
    private $optionsCspUpgradeInsecureRequests = null;

    /**
     * @property bool $optionsEnableFeeds
     */
    private $optionsEnableFeeds = null;

    /**
     * @property bool $optionsReferrerPolicyOriginWhenCrossOrigin
     */
    private $optionsReferrerPolicyOriginWhenCrossOrigin = null;

    /**
     * @property bool $optionsRequireHttps
     */
    private $optionsRequireHttps = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $siteDomainPaths
     */
    private $siteDomainPaths = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $siteIframeWhiteListUrls
     */
    private $siteIframeWhiteListUrls = null;

    /**
     * @property string $siteType
     */
    private $siteType = null;

    /**
     * @property string $status
     */
    private $status = null;

    /**
     * @property string $subdomain
     */
    private $subdomain = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property string $urlPathPrefix
     */
    private $urlPathPrefix = null;

    /**
     * Gets as admin
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType
     */
    public function getAdmin()
    {
        return $this->admin;
    }

    /**
     * Sets a new admin
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $admin
     * @return self
     */
    public function setAdmin(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $admin)
    {
        $this->admin = $admin;
        return $this;
    }

    /**
     * Gets as adminId
     *
     * @return string
     */
    public function getAdminId()
    {
        return $this->adminId;
    }

    /**
     * Sets a new adminId
     *
     * @param string $adminId
     * @return self
     */
    public function setAdminId($adminId)
    {
        $this->adminId = $adminId;
        return $this;
    }

    /**
     * Gets as analyticsTrackingCode
     *
     * @return string
     */
    public function getAnalyticsTrackingCode()
    {
        return $this->analyticsTrackingCode;
    }

    /**
     * Sets a new analyticsTrackingCode
     *
     * @param string $analyticsTrackingCode
     * @return self
     */
    public function setAnalyticsTrackingCode($analyticsTrackingCode)
    {
        $this->analyticsTrackingCode = $analyticsTrackingCode;
        return $this;
    }

    /**
     * Gets as attachedContentDocuments
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getAttachedContentDocuments()
    {
        return $this->attachedContentDocuments;
    }

    /**
     * Sets a new attachedContentDocuments
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $attachedContentDocuments
     * @return self
     */
    public function setAttachedContentDocuments(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $attachedContentDocuments)
    {
        $this->attachedContentDocuments = $attachedContentDocuments;
        return $this;
    }

    /**
     * Gets as clickjackProtectionLevel
     *
     * @return string
     */
    public function getClickjackProtectionLevel()
    {
        return $this->clickjackProtectionLevel;
    }

    /**
     * Sets a new clickjackProtectionLevel
     *
     * @param string $clickjackProtectionLevel
     * @return self
     */
    public function setClickjackProtectionLevel($clickjackProtectionLevel)
    {
        $this->clickjackProtectionLevel = $clickjackProtectionLevel;
        return $this;
    }

    /**
     * Gets as combinedAttachments
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getCombinedAttachments()
    {
        return $this->combinedAttachments;
    }

    /**
     * Sets a new combinedAttachments
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $combinedAttachments
     * @return self
     */
    public function setCombinedAttachments(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $combinedAttachments)
    {
        $this->combinedAttachments = $combinedAttachments;
        return $this;
    }

    /**
     * Gets as contentDocumentLinks
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getContentDocumentLinks()
    {
        return $this->contentDocumentLinks;
    }

    /**
     * Sets a new contentDocumentLinks
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $contentDocumentLinks
     * @return self
     */
    public function setContentDocumentLinks(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $contentDocumentLinks)
    {
        $this->contentDocumentLinks = $contentDocumentLinks;
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
     * Gets as dailyBandwidthLimit
     *
     * @return int
     */
    public function getDailyBandwidthLimit()
    {
        return $this->dailyBandwidthLimit;
    }

    /**
     * Sets a new dailyBandwidthLimit
     *
     * @param int $dailyBandwidthLimit
     * @return self
     */
    public function setDailyBandwidthLimit($dailyBandwidthLimit)
    {
        $this->dailyBandwidthLimit = $dailyBandwidthLimit;
        return $this;
    }

    /**
     * Gets as dailyBandwidthUsed
     *
     * @return int
     */
    public function getDailyBandwidthUsed()
    {
        return $this->dailyBandwidthUsed;
    }

    /**
     * Sets a new dailyBandwidthUsed
     *
     * @param int $dailyBandwidthUsed
     * @return self
     */
    public function setDailyBandwidthUsed($dailyBandwidthUsed)
    {
        $this->dailyBandwidthUsed = $dailyBandwidthUsed;
        return $this;
    }

    /**
     * Gets as dailyRequestTimeLimit
     *
     * @return int
     */
    public function getDailyRequestTimeLimit()
    {
        return $this->dailyRequestTimeLimit;
    }

    /**
     * Sets a new dailyRequestTimeLimit
     *
     * @param int $dailyRequestTimeLimit
     * @return self
     */
    public function setDailyRequestTimeLimit($dailyRequestTimeLimit)
    {
        $this->dailyRequestTimeLimit = $dailyRequestTimeLimit;
        return $this;
    }

    /**
     * Gets as dailyRequestTimeUsed
     *
     * @return int
     */
    public function getDailyRequestTimeUsed()
    {
        return $this->dailyRequestTimeUsed;
    }

    /**
     * Sets a new dailyRequestTimeUsed
     *
     * @param int $dailyRequestTimeUsed
     * @return self
     */
    public function setDailyRequestTimeUsed($dailyRequestTimeUsed)
    {
        $this->dailyRequestTimeUsed = $dailyRequestTimeUsed;
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
     * Gets as feedSubscriptionsForEntity
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getFeedSubscriptionsForEntity()
    {
        return $this->feedSubscriptionsForEntity;
    }

    /**
     * Sets a new feedSubscriptionsForEntity
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feedSubscriptionsForEntity
     * @return self
     */
    public function setFeedSubscriptionsForEntity(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feedSubscriptionsForEntity)
    {
        $this->feedSubscriptionsForEntity = $feedSubscriptionsForEntity;
        return $this;
    }

    /**
     * Gets as feeds
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getFeeds()
    {
        return $this->feeds;
    }

    /**
     * Sets a new feeds
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feeds
     * @return self
     */
    public function setFeeds(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feeds)
    {
        $this->feeds = $feeds;
        return $this;
    }

    /**
     * Gets as guestUser
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType
     */
    public function getGuestUser()
    {
        return $this->guestUser;
    }

    /**
     * Sets a new guestUser
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $guestUser
     * @return self
     */
    public function setGuestUser(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $guestUser)
    {
        $this->guestUser = $guestUser;
        return $this;
    }

    /**
     * Gets as guestUserId
     *
     * @return string
     */
    public function getGuestUserId()
    {
        return $this->guestUserId;
    }

    /**
     * Sets a new guestUserId
     *
     * @param string $guestUserId
     * @return self
     */
    public function setGuestUserId($guestUserId)
    {
        $this->guestUserId = $guestUserId;
        return $this;
    }

    /**
     * Gets as histories
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getHistories()
    {
        return $this->histories;
    }

    /**
     * Sets a new histories
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $histories
     * @return self
     */
    public function setHistories(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $histories)
    {
        $this->histories = $histories;
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
     * Gets as masterLabel
     *
     * @return string
     */
    public function getMasterLabel()
    {
        return $this->masterLabel;
    }

    /**
     * Sets a new masterLabel
     *
     * @param string $masterLabel
     * @return self
     */
    public function setMasterLabel($masterLabel)
    {
        $this->masterLabel = $masterLabel;
        return $this;
    }

    /**
     * Gets as monthlyPageViewsEntitlement
     *
     * @return int
     */
    public function getMonthlyPageViewsEntitlement()
    {
        return $this->monthlyPageViewsEntitlement;
    }

    /**
     * Sets a new monthlyPageViewsEntitlement
     *
     * @param int $monthlyPageViewsEntitlement
     * @return self
     */
    public function setMonthlyPageViewsEntitlement($monthlyPageViewsEntitlement)
    {
        $this->monthlyPageViewsEntitlement = $monthlyPageViewsEntitlement;
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
     * Gets as optionsAllowGuestSupportApi
     *
     * @return bool
     */
    public function getOptionsAllowGuestSupportApi()
    {
        return $this->optionsAllowGuestSupportApi;
    }

    /**
     * Sets a new optionsAllowGuestSupportApi
     *
     * @param bool $optionsAllowGuestSupportApi
     * @return self
     */
    public function setOptionsAllowGuestSupportApi($optionsAllowGuestSupportApi)
    {
        $this->optionsAllowGuestSupportApi = $optionsAllowGuestSupportApi;
        return $this;
    }

    /**
     * Gets as optionsAllowHomePage
     *
     * @return bool
     */
    public function getOptionsAllowHomePage()
    {
        return $this->optionsAllowHomePage;
    }

    /**
     * Sets a new optionsAllowHomePage
     *
     * @param bool $optionsAllowHomePage
     * @return self
     */
    public function setOptionsAllowHomePage($optionsAllowHomePage)
    {
        $this->optionsAllowHomePage = $optionsAllowHomePage;
        return $this;
    }

    /**
     * Gets as optionsAllowStandardAnswersPages
     *
     * @return bool
     */
    public function getOptionsAllowStandardAnswersPages()
    {
        return $this->optionsAllowStandardAnswersPages;
    }

    /**
     * Sets a new optionsAllowStandardAnswersPages
     *
     * @param bool $optionsAllowStandardAnswersPages
     * @return self
     */
    public function setOptionsAllowStandardAnswersPages($optionsAllowStandardAnswersPages)
    {
        $this->optionsAllowStandardAnswersPages = $optionsAllowStandardAnswersPages;
        return $this;
    }

    /**
     * Gets as optionsAllowStandardIdeasPages
     *
     * @return bool
     */
    public function getOptionsAllowStandardIdeasPages()
    {
        return $this->optionsAllowStandardIdeasPages;
    }

    /**
     * Sets a new optionsAllowStandardIdeasPages
     *
     * @param bool $optionsAllowStandardIdeasPages
     * @return self
     */
    public function setOptionsAllowStandardIdeasPages($optionsAllowStandardIdeasPages)
    {
        $this->optionsAllowStandardIdeasPages = $optionsAllowStandardIdeasPages;
        return $this;
    }

    /**
     * Gets as optionsAllowStandardLookups
     *
     * @return bool
     */
    public function getOptionsAllowStandardLookups()
    {
        return $this->optionsAllowStandardLookups;
    }

    /**
     * Sets a new optionsAllowStandardLookups
     *
     * @param bool $optionsAllowStandardLookups
     * @return self
     */
    public function setOptionsAllowStandardLookups($optionsAllowStandardLookups)
    {
        $this->optionsAllowStandardLookups = $optionsAllowStandardLookups;
        return $this;
    }

    /**
     * Gets as optionsAllowStandardPortalPages
     *
     * @return bool
     */
    public function getOptionsAllowStandardPortalPages()
    {
        return $this->optionsAllowStandardPortalPages;
    }

    /**
     * Sets a new optionsAllowStandardPortalPages
     *
     * @param bool $optionsAllowStandardPortalPages
     * @return self
     */
    public function setOptionsAllowStandardPortalPages($optionsAllowStandardPortalPages)
    {
        $this->optionsAllowStandardPortalPages = $optionsAllowStandardPortalPages;
        return $this;
    }

    /**
     * Gets as optionsAllowStandardSearch
     *
     * @return bool
     */
    public function getOptionsAllowStandardSearch()
    {
        return $this->optionsAllowStandardSearch;
    }

    /**
     * Sets a new optionsAllowStandardSearch
     *
     * @param bool $optionsAllowStandardSearch
     * @return self
     */
    public function setOptionsAllowStandardSearch($optionsAllowStandardSearch)
    {
        $this->optionsAllowStandardSearch = $optionsAllowStandardSearch;
        return $this;
    }

    /**
     * Gets as optionsBrowserXssProtection
     *
     * @return bool
     */
    public function getOptionsBrowserXssProtection()
    {
        return $this->optionsBrowserXssProtection;
    }

    /**
     * Sets a new optionsBrowserXssProtection
     *
     * @param bool $optionsBrowserXssProtection
     * @return self
     */
    public function setOptionsBrowserXssProtection($optionsBrowserXssProtection)
    {
        $this->optionsBrowserXssProtection = $optionsBrowserXssProtection;
        return $this;
    }

    /**
     * Gets as optionsContentSniffingProtection
     *
     * @return bool
     */
    public function getOptionsContentSniffingProtection()
    {
        return $this->optionsContentSniffingProtection;
    }

    /**
     * Sets a new optionsContentSniffingProtection
     *
     * @param bool $optionsContentSniffingProtection
     * @return self
     */
    public function setOptionsContentSniffingProtection($optionsContentSniffingProtection)
    {
        $this->optionsContentSniffingProtection = $optionsContentSniffingProtection;
        return $this;
    }

    /**
     * Gets as optionsCspUpgradeInsecureRequests
     *
     * @return bool
     */
    public function getOptionsCspUpgradeInsecureRequests()
    {
        return $this->optionsCspUpgradeInsecureRequests;
    }

    /**
     * Sets a new optionsCspUpgradeInsecureRequests
     *
     * @param bool $optionsCspUpgradeInsecureRequests
     * @return self
     */
    public function setOptionsCspUpgradeInsecureRequests($optionsCspUpgradeInsecureRequests)
    {
        $this->optionsCspUpgradeInsecureRequests = $optionsCspUpgradeInsecureRequests;
        return $this;
    }

    /**
     * Gets as optionsEnableFeeds
     *
     * @return bool
     */
    public function getOptionsEnableFeeds()
    {
        return $this->optionsEnableFeeds;
    }

    /**
     * Sets a new optionsEnableFeeds
     *
     * @param bool $optionsEnableFeeds
     * @return self
     */
    public function setOptionsEnableFeeds($optionsEnableFeeds)
    {
        $this->optionsEnableFeeds = $optionsEnableFeeds;
        return $this;
    }

    /**
     * Gets as optionsReferrerPolicyOriginWhenCrossOrigin
     *
     * @return bool
     */
    public function getOptionsReferrerPolicyOriginWhenCrossOrigin()
    {
        return $this->optionsReferrerPolicyOriginWhenCrossOrigin;
    }

    /**
     * Sets a new optionsReferrerPolicyOriginWhenCrossOrigin
     *
     * @param bool $optionsReferrerPolicyOriginWhenCrossOrigin
     * @return self
     */
    public function setOptionsReferrerPolicyOriginWhenCrossOrigin($optionsReferrerPolicyOriginWhenCrossOrigin)
    {
        $this->optionsReferrerPolicyOriginWhenCrossOrigin = $optionsReferrerPolicyOriginWhenCrossOrigin;
        return $this;
    }

    /**
     * Gets as optionsRequireHttps
     *
     * @return bool
     */
    public function getOptionsRequireHttps()
    {
        return $this->optionsRequireHttps;
    }

    /**
     * Sets a new optionsRequireHttps
     *
     * @param bool $optionsRequireHttps
     * @return self
     */
    public function setOptionsRequireHttps($optionsRequireHttps)
    {
        $this->optionsRequireHttps = $optionsRequireHttps;
        return $this;
    }

    /**
     * Gets as siteDomainPaths
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getSiteDomainPaths()
    {
        return $this->siteDomainPaths;
    }

    /**
     * Sets a new siteDomainPaths
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $siteDomainPaths
     * @return self
     */
    public function setSiteDomainPaths(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $siteDomainPaths)
    {
        $this->siteDomainPaths = $siteDomainPaths;
        return $this;
    }

    /**
     * Gets as siteIframeWhiteListUrls
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getSiteIframeWhiteListUrls()
    {
        return $this->siteIframeWhiteListUrls;
    }

    /**
     * Sets a new siteIframeWhiteListUrls
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $siteIframeWhiteListUrls
     * @return self
     */
    public function setSiteIframeWhiteListUrls(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $siteIframeWhiteListUrls)
    {
        $this->siteIframeWhiteListUrls = $siteIframeWhiteListUrls;
        return $this;
    }

    /**
     * Gets as siteType
     *
     * @return string
     */
    public function getSiteType()
    {
        return $this->siteType;
    }

    /**
     * Sets a new siteType
     *
     * @param string $siteType
     * @return self
     */
    public function setSiteType($siteType)
    {
        $this->siteType = $siteType;
        return $this;
    }

    /**
     * Gets as status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as subdomain
     *
     * @return string
     */
    public function getSubdomain()
    {
        return $this->subdomain;
    }

    /**
     * Sets a new subdomain
     *
     * @param string $subdomain
     * @return self
     */
    public function setSubdomain($subdomain)
    {
        $this->subdomain = $subdomain;
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
     * Gets as urlPathPrefix
     *
     * @return string
     */
    public function getUrlPathPrefix()
    {
        return $this->urlPathPrefix;
    }

    /**
     * Sets a new urlPathPrefix
     *
     * @param string $urlPathPrefix
     * @return self
     */
    public function setUrlPathPrefix($urlPathPrefix)
    {
        $this->urlPathPrefix = $urlPathPrefix;
        return $this;
    }


}

