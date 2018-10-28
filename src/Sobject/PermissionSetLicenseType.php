<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing PermissionSetLicenseType
 *
 *
 * XSD Type: PermissionSetLicense
 */
class PermissionSetLicenseType extends SObjectType
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
     * @property string $developerName
     */
    private $developerName = null;

    /**
     * @property \DateTime $expirationDate
     */
    private $expirationDate = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $grantedByLicenses
     */
    private $grantedByLicenses = null;

    /**
     * @property bool $isDeleted
     */
    private $isDeleted = null;

    /**
     * @property string $language
     */
    private $language = null;

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
     * @property bool $maximumPermissionsAccessCMC
     */
    private $maximumPermissionsAccessCMC = null;

    /**
     * @property bool $maximumPermissionsActivateContract
     */
    private $maximumPermissionsActivateContract = null;

    /**
     * @property bool $maximumPermissionsActivateOrder
     */
    private $maximumPermissionsActivateOrder = null;

    /**
     * @property bool $maximumPermissionsAddAnalyticsRemoteConnections
     */
    private $maximumPermissionsAddAnalyticsRemoteConnections = null;

    /**
     * @property bool $maximumPermissionsAddDirectMessageMembers
     */
    private $maximumPermissionsAddDirectMessageMembers = null;

    /**
     * @property bool $maximumPermissionsAllowEmailIC
     */
    private $maximumPermissionsAllowEmailIC = null;

    /**
     * @property bool $maximumPermissionsAllowLightningLogin
     */
    private $maximumPermissionsAllowLightningLogin = null;

    /**
     * @property bool $maximumPermissionsAllowUniversalSearch
     */
    private $maximumPermissionsAllowUniversalSearch = null;

    /**
     * @property bool $maximumPermissionsAllowViewEditConvertedLeads
     */
    private $maximumPermissionsAllowViewEditConvertedLeads = null;

    /**
     * @property bool $maximumPermissionsAllowViewKnowledge
     */
    private $maximumPermissionsAllowViewKnowledge = null;

    /**
     * @property bool $maximumPermissionsApexRestServices
     */
    private $maximumPermissionsApexRestServices = null;

    /**
     * @property bool $maximumPermissionsApiEnabled
     */
    private $maximumPermissionsApiEnabled = null;

    /**
     * @property bool $maximumPermissionsAssignPermissionSets
     */
    private $maximumPermissionsAssignPermissionSets = null;

    /**
     * @property bool $maximumPermissionsAssignTopics
     */
    private $maximumPermissionsAssignTopics = null;

    /**
     * @property bool $maximumPermissionsAuthorApex
     */
    private $maximumPermissionsAuthorApex = null;

    /**
     * @property bool $maximumPermissionsAutomaticActivityCapture
     */
    private $maximumPermissionsAutomaticActivityCapture = null;

    /**
     * @property bool $maximumPermissionsBulkApiHardDelete
     */
    private $maximumPermissionsBulkApiHardDelete = null;

    /**
     * @property bool $maximumPermissionsBulkMacrosAllowed
     */
    private $maximumPermissionsBulkMacrosAllowed = null;

    /**
     * @property bool $maximumPermissionsCampaignInfluence2
     */
    private $maximumPermissionsCampaignInfluence2 = null;

    /**
     * @property bool $maximumPermissionsCanApproveFeedPost
     */
    private $maximumPermissionsCanApproveFeedPost = null;

    /**
     * @property bool $maximumPermissionsCanEditDataPrepRecipe
     */
    private $maximumPermissionsCanEditDataPrepRecipe = null;

    /**
     * @property bool $maximumPermissionsCanInsertFeedSystemFields
     */
    private $maximumPermissionsCanInsertFeedSystemFields = null;

    /**
     * @property bool $maximumPermissionsCanManageMaps
     */
    private $maximumPermissionsCanManageMaps = null;

    /**
     * @property bool $maximumPermissionsCanUseNewDashboardBuilder
     */
    private $maximumPermissionsCanUseNewDashboardBuilder = null;

    /**
     * @property bool $maximumPermissionsCanVerifyComment
     */
    private $maximumPermissionsCanVerifyComment = null;

    /**
     * @property bool $maximumPermissionsChangeDashboardColors
     */
    private $maximumPermissionsChangeDashboardColors = null;

    /**
     * @property bool $maximumPermissionsChatterComposeUiCodesnippet
     */
    private $maximumPermissionsChatterComposeUiCodesnippet = null;

    /**
     * @property bool $maximumPermissionsChatterEditOwnPost
     */
    private $maximumPermissionsChatterEditOwnPost = null;

    /**
     * @property bool $maximumPermissionsChatterEditOwnRecordPost
     */
    private $maximumPermissionsChatterEditOwnRecordPost = null;

    /**
     * @property bool $maximumPermissionsChatterFileLink
     */
    private $maximumPermissionsChatterFileLink = null;

    /**
     * @property bool $maximumPermissionsChatterInternalUser
     */
    private $maximumPermissionsChatterInternalUser = null;

    /**
     * @property bool $maximumPermissionsChatterInviteExternalUsers
     */
    private $maximumPermissionsChatterInviteExternalUsers = null;

    /**
     * @property bool $maximumPermissionsChatterOwnGroups
     */
    private $maximumPermissionsChatterOwnGroups = null;

    /**
     * @property bool $maximumPermissionsCloseConversations
     */
    private $maximumPermissionsCloseConversations = null;

    /**
     * @property bool $maximumPermissionsConfigCustomRecs
     */
    private $maximumPermissionsConfigCustomRecs = null;

    /**
     * @property bool $maximumPermissionsConnectOrgToEnvironmentHub
     */
    private $maximumPermissionsConnectOrgToEnvironmentHub = null;

    /**
     * @property bool $maximumPermissionsContentAdministrator
     */
    private $maximumPermissionsContentAdministrator = null;

    /**
     * @property bool $maximumPermissionsContentWorkspaces
     */
    private $maximumPermissionsContentWorkspaces = null;

    /**
     * @property bool $maximumPermissionsConvertLeads
     */
    private $maximumPermissionsConvertLeads = null;

    /**
     * @property bool $maximumPermissionsCreateCustomizeDashboards
     */
    private $maximumPermissionsCreateCustomizeDashboards = null;

    /**
     * @property bool $maximumPermissionsCreateCustomizeFilters
     */
    private $maximumPermissionsCreateCustomizeFilters = null;

    /**
     * @property bool $maximumPermissionsCreateCustomizeReports
     */
    private $maximumPermissionsCreateCustomizeReports = null;

    /**
     * @property bool $maximumPermissionsCreateDashboardFolders
     */
    private $maximumPermissionsCreateDashboardFolders = null;

    /**
     * @property bool $maximumPermissionsCreateLtngTempInPub
     */
    private $maximumPermissionsCreateLtngTempInPub = null;

    /**
     * @property bool $maximumPermissionsCreatePackaging
     */
    private $maximumPermissionsCreatePackaging = null;

    /**
     * @property bool $maximumPermissionsCreateReportFolders
     */
    private $maximumPermissionsCreateReportFolders = null;

    /**
     * @property bool $maximumPermissionsCreateReportInLightning
     */
    private $maximumPermissionsCreateReportInLightning = null;

    /**
     * @property bool $maximumPermissionsCreateTopics
     */
    private $maximumPermissionsCreateTopics = null;

    /**
     * @property bool $maximumPermissionsCreateWorkspaces
     */
    private $maximumPermissionsCreateWorkspaces = null;

    /**
     * @property bool $maximumPermissionsCustomMobileAppsAccess
     */
    private $maximumPermissionsCustomMobileAppsAccess = null;

    /**
     * @property bool $maximumPermissionsCustomSidebarOnAllPages
     */
    private $maximumPermissionsCustomSidebarOnAllPages = null;

    /**
     * @property bool $maximumPermissionsCustomizeApplication
     */
    private $maximumPermissionsCustomizeApplication = null;

    /**
     * @property bool $maximumPermissionsDataExport
     */
    private $maximumPermissionsDataExport = null;

    /**
     * @property bool $maximumPermissionsDelegatedTwoFactor
     */
    private $maximumPermissionsDelegatedTwoFactor = null;

    /**
     * @property bool $maximumPermissionsDeleteActivatedContract
     */
    private $maximumPermissionsDeleteActivatedContract = null;

    /**
     * @property bool $maximumPermissionsDeleteTopics
     */
    private $maximumPermissionsDeleteTopics = null;

    /**
     * @property bool $maximumPermissionsDistributeFromPersWksp
     */
    private $maximumPermissionsDistributeFromPersWksp = null;

    /**
     * @property bool $maximumPermissionsEditActivatedOrders
     */
    private $maximumPermissionsEditActivatedOrders = null;

    /**
     * @property bool $maximumPermissionsEditBrandTemplates
     */
    private $maximumPermissionsEditBrandTemplates = null;

    /**
     * @property bool $maximumPermissionsEditCaseComments
     */
    private $maximumPermissionsEditCaseComments = null;

    /**
     * @property bool $maximumPermissionsEditEvent
     */
    private $maximumPermissionsEditEvent = null;

    /**
     * @property bool $maximumPermissionsEditHtmlTemplates
     */
    private $maximumPermissionsEditHtmlTemplates = null;

    /**
     * @property bool $maximumPermissionsEditKnowledge
     */
    private $maximumPermissionsEditKnowledge = null;

    /**
     * @property bool $maximumPermissionsEditMyDashboards
     */
    private $maximumPermissionsEditMyDashboards = null;

    /**
     * @property bool $maximumPermissionsEditMyReports
     */
    private $maximumPermissionsEditMyReports = null;

    /**
     * @property bool $maximumPermissionsEditOppLineItemUnitPrice
     */
    private $maximumPermissionsEditOppLineItemUnitPrice = null;

    /**
     * @property bool $maximumPermissionsEditPublicDocuments
     */
    private $maximumPermissionsEditPublicDocuments = null;

    /**
     * @property bool $maximumPermissionsEditPublicFilters
     */
    private $maximumPermissionsEditPublicFilters = null;

    /**
     * @property bool $maximumPermissionsEditPublicTemplates
     */
    private $maximumPermissionsEditPublicTemplates = null;

    /**
     * @property bool $maximumPermissionsEditReadonlyFields
     */
    private $maximumPermissionsEditReadonlyFields = null;

    /**
     * @property bool $maximumPermissionsEditTask
     */
    private $maximumPermissionsEditTask = null;

    /**
     * @property bool $maximumPermissionsEditTopics
     */
    private $maximumPermissionsEditTopics = null;

    /**
     * @property bool $maximumPermissionsEmailAdministration
     */
    private $maximumPermissionsEmailAdministration = null;

    /**
     * @property bool $maximumPermissionsEmailMass
     */
    private $maximumPermissionsEmailMass = null;

    /**
     * @property bool $maximumPermissionsEmailSingle
     */
    private $maximumPermissionsEmailSingle = null;

    /**
     * @property bool $maximumPermissionsEmailTemplateManagement
     */
    private $maximumPermissionsEmailTemplateManagement = null;

    /**
     * @property bool $maximumPermissionsEnableCommunityAppLauncher
     */
    private $maximumPermissionsEnableCommunityAppLauncher = null;

    /**
     * @property bool $maximumPermissionsEnableNotifications
     */
    private $maximumPermissionsEnableNotifications = null;

    /**
     * @property bool $maximumPermissionsExportReport
     */
    private $maximumPermissionsExportReport = null;

    /**
     * @property bool $maximumPermissionsFeedPinning
     */
    private $maximumPermissionsFeedPinning = null;

    /**
     * @property bool $maximumPermissionsFlowUFLRequired
     */
    private $maximumPermissionsFlowUFLRequired = null;

    /**
     * @property bool $maximumPermissionsForceTwoFactor
     */
    private $maximumPermissionsForceTwoFactor = null;

    /**
     * @property bool $maximumPermissionsGiveRecognitionBadge
     */
    private $maximumPermissionsGiveRecognitionBadge = null;

    /**
     * @property bool $maximumPermissionsGovernNetworks
     */
    private $maximumPermissionsGovernNetworks = null;

    /**
     * @property bool $maximumPermissionsHideReadByList
     */
    private $maximumPermissionsHideReadByList = null;

    /**
     * @property bool $maximumPermissionsIdentityConnect
     */
    private $maximumPermissionsIdentityConnect = null;

    /**
     * @property bool $maximumPermissionsIdentityEnabled
     */
    private $maximumPermissionsIdentityEnabled = null;

    /**
     * @property bool $maximumPermissionsImportCustomObjects
     */
    private $maximumPermissionsImportCustomObjects = null;

    /**
     * @property bool $maximumPermissionsImportLeads
     */
    private $maximumPermissionsImportLeads = null;

    /**
     * @property bool $maximumPermissionsImportPersonal
     */
    private $maximumPermissionsImportPersonal = null;

    /**
     * @property bool $maximumPermissionsInsightsAppAdmin
     */
    private $maximumPermissionsInsightsAppAdmin = null;

    /**
     * @property bool $maximumPermissionsInsightsAppDashboardEditor
     */
    private $maximumPermissionsInsightsAppDashboardEditor = null;

    /**
     * @property bool $maximumPermissionsInsightsAppEltEditor
     */
    private $maximumPermissionsInsightsAppEltEditor = null;

    /**
     * @property bool $maximumPermissionsInsightsAppUploadUser
     */
    private $maximumPermissionsInsightsAppUploadUser = null;

    /**
     * @property bool $maximumPermissionsInsightsAppUser
     */
    private $maximumPermissionsInsightsAppUser = null;

    /**
     * @property bool $maximumPermissionsInsightsCreateApplication
     */
    private $maximumPermissionsInsightsCreateApplication = null;

    /**
     * @property bool $maximumPermissionsInstallPackaging
     */
    private $maximumPermissionsInstallPackaging = null;

    /**
     * @property bool $maximumPermissionsIotUser
     */
    private $maximumPermissionsIotUser = null;

    /**
     * @property bool $maximumPermissionsLightningConsoleAllowedForUser
     */
    private $maximumPermissionsLightningConsoleAllowedForUser = null;

    /**
     * @property bool $maximumPermissionsLightningExperienceUser
     */
    private $maximumPermissionsLightningExperienceUser = null;

    /**
     * @property bool $maximumPermissionsListEmailSend
     */
    private $maximumPermissionsListEmailSend = null;

    /**
     * @property bool $maximumPermissionsLtngPromoReserved01UserPerm
     */
    private $maximumPermissionsLtngPromoReserved01UserPerm = null;

    /**
     * @property bool $maximumPermissionsManageAnalyticSnapshots
     */
    private $maximumPermissionsManageAnalyticSnapshots = null;

    /**
     * @property bool $maximumPermissionsManageAuthProviders
     */
    private $maximumPermissionsManageAuthProviders = null;

    /**
     * @property bool $maximumPermissionsManageBusinessHourHolidays
     */
    private $maximumPermissionsManageBusinessHourHolidays = null;

    /**
     * @property bool $maximumPermissionsManageCallCenters
     */
    private $maximumPermissionsManageCallCenters = null;

    /**
     * @property bool $maximumPermissionsManageCases
     */
    private $maximumPermissionsManageCases = null;

    /**
     * @property bool $maximumPermissionsManageCategories
     */
    private $maximumPermissionsManageCategories = null;

    /**
     * @property bool $maximumPermissionsManageCertificates
     */
    private $maximumPermissionsManageCertificates = null;

    /**
     * @property bool $maximumPermissionsManageChatterMessages
     */
    private $maximumPermissionsManageChatterMessages = null;

    /**
     * @property bool $maximumPermissionsManageContentPermissions
     */
    private $maximumPermissionsManageContentPermissions = null;

    /**
     * @property bool $maximumPermissionsManageContentProperties
     */
    private $maximumPermissionsManageContentProperties = null;

    /**
     * @property bool $maximumPermissionsManageContentTypes
     */
    private $maximumPermissionsManageContentTypes = null;

    /**
     * @property bool $maximumPermissionsManageCustomPermissions
     */
    private $maximumPermissionsManageCustomPermissions = null;

    /**
     * @property bool $maximumPermissionsManageCustomReportTypes
     */
    private $maximumPermissionsManageCustomReportTypes = null;

    /**
     * @property bool $maximumPermissionsManageDashbdsInPubFolders
     */
    private $maximumPermissionsManageDashbdsInPubFolders = null;

    /**
     * @property bool $maximumPermissionsManageDataCategories
     */
    private $maximumPermissionsManageDataCategories = null;

    /**
     * @property bool $maximumPermissionsManageDataIntegrations
     */
    private $maximumPermissionsManageDataIntegrations = null;

    /**
     * @property bool $maximumPermissionsManageDynamicDashboards
     */
    private $maximumPermissionsManageDynamicDashboards = null;

    /**
     * @property bool $maximumPermissionsManageEmailClientConfig
     */
    private $maximumPermissionsManageEmailClientConfig = null;

    /**
     * @property bool $maximumPermissionsManageEncryptionKeys
     */
    private $maximumPermissionsManageEncryptionKeys = null;

    /**
     * @property bool $maximumPermissionsManageExchangeConfig
     */
    private $maximumPermissionsManageExchangeConfig = null;

    /**
     * @property bool $maximumPermissionsManageHealthCheck
     */
    private $maximumPermissionsManageHealthCheck = null;

    /**
     * @property bool $maximumPermissionsManageInteraction
     */
    private $maximumPermissionsManageInteraction = null;

    /**
     * @property bool $maximumPermissionsManageInternalUsers
     */
    private $maximumPermissionsManageInternalUsers = null;

    /**
     * @property bool $maximumPermissionsManageIpAddresses
     */
    private $maximumPermissionsManageIpAddresses = null;

    /**
     * @property bool $maximumPermissionsManageKnowledge
     */
    private $maximumPermissionsManageKnowledge = null;

    /**
     * @property bool $maximumPermissionsManageKnowledgeImportExport
     */
    private $maximumPermissionsManageKnowledgeImportExport = null;

    /**
     * @property bool $maximumPermissionsManageLeads
     */
    private $maximumPermissionsManageLeads = null;

    /**
     * @property bool $maximumPermissionsManageLoginAccessPolicies
     */
    private $maximumPermissionsManageLoginAccessPolicies = null;

    /**
     * @property bool $maximumPermissionsManageMobile
     */
    private $maximumPermissionsManageMobile = null;

    /**
     * @property bool $maximumPermissionsManageNetworks
     */
    private $maximumPermissionsManageNetworks = null;

    /**
     * @property bool $maximumPermissionsManagePasswordPolicies
     */
    private $maximumPermissionsManagePasswordPolicies = null;

    /**
     * @property bool $maximumPermissionsManageProfilesPermissionsets
     */
    private $maximumPermissionsManageProfilesPermissionsets = null;

    /**
     * @property bool $maximumPermissionsManagePvtRptsAndDashbds
     */
    private $maximumPermissionsManagePvtRptsAndDashbds = null;

    /**
     * @property bool $maximumPermissionsManageRemoteAccess
     */
    private $maximumPermissionsManageRemoteAccess = null;

    /**
     * @property bool $maximumPermissionsManageReportsInPubFolders
     */
    private $maximumPermissionsManageReportsInPubFolders = null;

    /**
     * @property bool $maximumPermissionsManageRoles
     */
    private $maximumPermissionsManageRoles = null;

    /**
     * @property bool $maximumPermissionsManageSearchPromotionRules
     */
    private $maximumPermissionsManageSearchPromotionRules = null;

    /**
     * @property bool $maximumPermissionsManageSessionPermissionSets
     */
    private $maximumPermissionsManageSessionPermissionSets = null;

    /**
     * @property bool $maximumPermissionsManageSharing
     */
    private $maximumPermissionsManageSharing = null;

    /**
     * @property bool $maximumPermissionsManageSolutions
     */
    private $maximumPermissionsManageSolutions = null;

    /**
     * @property bool $maximumPermissionsManageSurveys
     */
    private $maximumPermissionsManageSurveys = null;

    /**
     * @property bool $maximumPermissionsManageSynonyms
     */
    private $maximumPermissionsManageSynonyms = null;

    /**
     * @property bool $maximumPermissionsManageTemplatedApp
     */
    private $maximumPermissionsManageTemplatedApp = null;

    /**
     * @property bool $maximumPermissionsManageTwoFactor
     */
    private $maximumPermissionsManageTwoFactor = null;

    /**
     * @property bool $maximumPermissionsManageUnlistedGroups
     */
    private $maximumPermissionsManageUnlistedGroups = null;

    /**
     * @property bool $maximumPermissionsManageUsers
     */
    private $maximumPermissionsManageUsers = null;

    /**
     * @property bool $maximumPermissionsMassInlineEdit
     */
    private $maximumPermissionsMassInlineEdit = null;

    /**
     * @property bool $maximumPermissionsMergeTopics
     */
    private $maximumPermissionsMergeTopics = null;

    /**
     * @property bool $maximumPermissionsModerateChatter
     */
    private $maximumPermissionsModerateChatter = null;

    /**
     * @property bool $maximumPermissionsModerateNetworkUsers
     */
    private $maximumPermissionsModerateNetworkUsers = null;

    /**
     * @property bool $maximumPermissionsModifyAllData
     */
    private $maximumPermissionsModifyAllData = null;

    /**
     * @property bool $maximumPermissionsModifyMetadata
     */
    private $maximumPermissionsModifyMetadata = null;

    /**
     * @property bool $maximumPermissionsModifySecureAgents
     */
    private $maximumPermissionsModifySecureAgents = null;

    /**
     * @property bool $maximumPermissionsNewReportBuilder
     */
    private $maximumPermissionsNewReportBuilder = null;

    /**
     * @property bool $maximumPermissionsPackaging2
     */
    private $maximumPermissionsPackaging2 = null;

    /**
     * @property bool $maximumPermissionsPasswordNeverExpires
     */
    private $maximumPermissionsPasswordNeverExpires = null;

    /**
     * @property bool $maximumPermissionsPreventClassicExperience
     */
    private $maximumPermissionsPreventClassicExperience = null;

    /**
     * @property bool $maximumPermissionsPrivacyDataAccess
     */
    private $maximumPermissionsPrivacyDataAccess = null;

    /**
     * @property bool $maximumPermissionsPublishPackaging
     */
    private $maximumPermissionsPublishPackaging = null;

    /**
     * @property bool $maximumPermissionsRemoveDirectMessageMembers
     */
    private $maximumPermissionsRemoveDirectMessageMembers = null;

    /**
     * @property bool $maximumPermissionsResetPasswords
     */
    private $maximumPermissionsResetPasswords = null;

    /**
     * @property bool $maximumPermissionsRunFlow
     */
    private $maximumPermissionsRunFlow = null;

    /**
     * @property bool $maximumPermissionsRunReports
     */
    private $maximumPermissionsRunReports = null;

    /**
     * @property bool $maximumPermissionsSalesConsole
     */
    private $maximumPermissionsSalesConsole = null;

    /**
     * @property bool $maximumPermissionsScheduleReports
     */
    private $maximumPermissionsScheduleReports = null;

    /**
     * @property bool $maximumPermissionsSelectFilesFromSalesforce
     */
    private $maximumPermissionsSelectFilesFromSalesforce = null;

    /**
     * @property bool $maximumPermissionsSendAnnouncementEmails
     */
    private $maximumPermissionsSendAnnouncementEmails = null;

    /**
     * @property bool $maximumPermissionsSendSitRequests
     */
    private $maximumPermissionsSendSitRequests = null;

    /**
     * @property bool $maximumPermissionsShareInternalArticles
     */
    private $maximumPermissionsShareInternalArticles = null;

    /**
     * @property bool $maximumPermissionsShowCompanyNameAsUserBadge
     */
    private $maximumPermissionsShowCompanyNameAsUserBadge = null;

    /**
     * @property bool $maximumPermissionsSolutionImport
     */
    private $maximumPermissionsSolutionImport = null;

    /**
     * @property bool $maximumPermissionsStdAutomaticActivityCapture
     */
    private $maximumPermissionsStdAutomaticActivityCapture = null;

    /**
     * @property bool $maximumPermissionsSubmitMacrosAllowed
     */
    private $maximumPermissionsSubmitMacrosAllowed = null;

    /**
     * @property bool $maximumPermissionsSubscribeDashboardToOtherUsers
     */
    private $maximumPermissionsSubscribeDashboardToOtherUsers = null;

    /**
     * @property bool $maximumPermissionsSubscribeReportToOtherUsers
     */
    private $maximumPermissionsSubscribeReportToOtherUsers = null;

    /**
     * @property bool $maximumPermissionsSubscribeReportsRunAsUser
     */
    private $maximumPermissionsSubscribeReportsRunAsUser = null;

    /**
     * @property bool $maximumPermissionsSubscribeToLightningDashboards
     */
    private $maximumPermissionsSubscribeToLightningDashboards = null;

    /**
     * @property bool $maximumPermissionsSubscribeToLightningReports
     */
    private $maximumPermissionsSubscribeToLightningReports = null;

    /**
     * @property bool $maximumPermissionsTransferAnyCase
     */
    private $maximumPermissionsTransferAnyCase = null;

    /**
     * @property bool $maximumPermissionsTransferAnyEntity
     */
    private $maximumPermissionsTransferAnyEntity = null;

    /**
     * @property bool $maximumPermissionsTransferAnyLead
     */
    private $maximumPermissionsTransferAnyLead = null;

    /**
     * @property bool $maximumPermissionsTwoFactorApi
     */
    private $maximumPermissionsTwoFactorApi = null;

    /**
     * @property bool $maximumPermissionsUseTeamReassignWizards
     */
    private $maximumPermissionsUseTeamReassignWizards = null;

    /**
     * @property bool $maximumPermissionsUseTemplatedApp
     */
    private $maximumPermissionsUseTemplatedApp = null;

    /**
     * @property bool $maximumPermissionsUseWebLink
     */
    private $maximumPermissionsUseWebLink = null;

    /**
     * @property bool $maximumPermissionsViewAllActivities
     */
    private $maximumPermissionsViewAllActivities = null;

    /**
     * @property bool $maximumPermissionsViewAllData
     */
    private $maximumPermissionsViewAllData = null;

    /**
     * @property bool $maximumPermissionsViewAllUsers
     */
    private $maximumPermissionsViewAllUsers = null;

    /**
     * @property bool $maximumPermissionsViewContent
     */
    private $maximumPermissionsViewContent = null;

    /**
     * @property bool $maximumPermissionsViewDataAssessment
     */
    private $maximumPermissionsViewDataAssessment = null;

    /**
     * @property bool $maximumPermissionsViewDataCategories
     */
    private $maximumPermissionsViewDataCategories = null;

    /**
     * @property bool $maximumPermissionsViewEncryptedData
     */
    private $maximumPermissionsViewEncryptedData = null;

    /**
     * @property bool $maximumPermissionsViewEventLogFiles
     */
    private $maximumPermissionsViewEventLogFiles = null;

    /**
     * @property bool $maximumPermissionsViewHealthCheck
     */
    private $maximumPermissionsViewHealthCheck = null;

    /**
     * @property bool $maximumPermissionsViewHelpLink
     */
    private $maximumPermissionsViewHelpLink = null;

    /**
     * @property bool $maximumPermissionsViewMyTeamsDashboards
     */
    private $maximumPermissionsViewMyTeamsDashboards = null;

    /**
     * @property bool $maximumPermissionsViewOnlyEmbeddedAppUser
     */
    private $maximumPermissionsViewOnlyEmbeddedAppUser = null;

    /**
     * @property bool $maximumPermissionsViewPublicDashboards
     */
    private $maximumPermissionsViewPublicDashboards = null;

    /**
     * @property bool $maximumPermissionsViewPublicReports
     */
    private $maximumPermissionsViewPublicReports = null;

    /**
     * @property bool $maximumPermissionsViewRoles
     */
    private $maximumPermissionsViewRoles = null;

    /**
     * @property bool $maximumPermissionsViewSetup
     */
    private $maximumPermissionsViewSetup = null;

    /**
     * @property bool $maximumPermissionsWaveTabularDownload
     */
    private $maximumPermissionsWaveTabularDownload = null;

    /**
     * @property bool $maximumPermissionsWorkCalibrationUser
     */
    private $maximumPermissionsWorkCalibrationUser = null;

    /**
     * @property bool $maximumPermissionsWorkDotComUserPerm
     */
    private $maximumPermissionsWorkDotComUserPerm = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $permissionSetLicenseAssignments
     */
    private $permissionSetLicenseAssignments = null;

    /**
     * @property string $permissionSetLicenseKey
     */
    private $permissionSetLicenseKey = null;

    /**
     * @property string $status
     */
    private $status = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property int $totalLicenses
     */
    private $totalLicenses = null;

    /**
     * @property int $usedLicenses
     */
    private $usedLicenses = null;

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
     * Gets as expirationDate
     *
     * @return \DateTime
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * Sets a new expirationDate
     *
     * @param \DateTime $expirationDate
     * @return self
     */
    public function setExpirationDate(\DateTime $expirationDate)
    {
        $this->expirationDate = $expirationDate;
        return $this;
    }

    /**
     * Gets as grantedByLicenses
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getGrantedByLicenses()
    {
        return $this->grantedByLicenses;
    }

    /**
     * Sets a new grantedByLicenses
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $grantedByLicenses
     * @return self
     */
    public function setGrantedByLicenses(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $grantedByLicenses)
    {
        $this->grantedByLicenses = $grantedByLicenses;
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
     * Gets as language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * @param string $language
     * @return self
     */
    public function setLanguage($language)
    {
        $this->language = $language;
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
     * Gets as maximumPermissionsAccessCMC
     *
     * @return bool
     */
    public function getMaximumPermissionsAccessCMC()
    {
        return $this->maximumPermissionsAccessCMC;
    }

    /**
     * Sets a new maximumPermissionsAccessCMC
     *
     * @param bool $maximumPermissionsAccessCMC
     * @return self
     */
    public function setMaximumPermissionsAccessCMC($maximumPermissionsAccessCMC)
    {
        $this->maximumPermissionsAccessCMC = $maximumPermissionsAccessCMC;
        return $this;
    }

    /**
     * Gets as maximumPermissionsActivateContract
     *
     * @return bool
     */
    public function getMaximumPermissionsActivateContract()
    {
        return $this->maximumPermissionsActivateContract;
    }

    /**
     * Sets a new maximumPermissionsActivateContract
     *
     * @param bool $maximumPermissionsActivateContract
     * @return self
     */
    public function setMaximumPermissionsActivateContract($maximumPermissionsActivateContract)
    {
        $this->maximumPermissionsActivateContract = $maximumPermissionsActivateContract;
        return $this;
    }

    /**
     * Gets as maximumPermissionsActivateOrder
     *
     * @return bool
     */
    public function getMaximumPermissionsActivateOrder()
    {
        return $this->maximumPermissionsActivateOrder;
    }

    /**
     * Sets a new maximumPermissionsActivateOrder
     *
     * @param bool $maximumPermissionsActivateOrder
     * @return self
     */
    public function setMaximumPermissionsActivateOrder($maximumPermissionsActivateOrder)
    {
        $this->maximumPermissionsActivateOrder = $maximumPermissionsActivateOrder;
        return $this;
    }

    /**
     * Gets as maximumPermissionsAddAnalyticsRemoteConnections
     *
     * @return bool
     */
    public function getMaximumPermissionsAddAnalyticsRemoteConnections()
    {
        return $this->maximumPermissionsAddAnalyticsRemoteConnections;
    }

    /**
     * Sets a new maximumPermissionsAddAnalyticsRemoteConnections
     *
     * @param bool $maximumPermissionsAddAnalyticsRemoteConnections
     * @return self
     */
    public function setMaximumPermissionsAddAnalyticsRemoteConnections($maximumPermissionsAddAnalyticsRemoteConnections)
    {
        $this->maximumPermissionsAddAnalyticsRemoteConnections = $maximumPermissionsAddAnalyticsRemoteConnections;
        return $this;
    }

    /**
     * Gets as maximumPermissionsAddDirectMessageMembers
     *
     * @return bool
     */
    public function getMaximumPermissionsAddDirectMessageMembers()
    {
        return $this->maximumPermissionsAddDirectMessageMembers;
    }

    /**
     * Sets a new maximumPermissionsAddDirectMessageMembers
     *
     * @param bool $maximumPermissionsAddDirectMessageMembers
     * @return self
     */
    public function setMaximumPermissionsAddDirectMessageMembers($maximumPermissionsAddDirectMessageMembers)
    {
        $this->maximumPermissionsAddDirectMessageMembers = $maximumPermissionsAddDirectMessageMembers;
        return $this;
    }

    /**
     * Gets as maximumPermissionsAllowEmailIC
     *
     * @return bool
     */
    public function getMaximumPermissionsAllowEmailIC()
    {
        return $this->maximumPermissionsAllowEmailIC;
    }

    /**
     * Sets a new maximumPermissionsAllowEmailIC
     *
     * @param bool $maximumPermissionsAllowEmailIC
     * @return self
     */
    public function setMaximumPermissionsAllowEmailIC($maximumPermissionsAllowEmailIC)
    {
        $this->maximumPermissionsAllowEmailIC = $maximumPermissionsAllowEmailIC;
        return $this;
    }

    /**
     * Gets as maximumPermissionsAllowLightningLogin
     *
     * @return bool
     */
    public function getMaximumPermissionsAllowLightningLogin()
    {
        return $this->maximumPermissionsAllowLightningLogin;
    }

    /**
     * Sets a new maximumPermissionsAllowLightningLogin
     *
     * @param bool $maximumPermissionsAllowLightningLogin
     * @return self
     */
    public function setMaximumPermissionsAllowLightningLogin($maximumPermissionsAllowLightningLogin)
    {
        $this->maximumPermissionsAllowLightningLogin = $maximumPermissionsAllowLightningLogin;
        return $this;
    }

    /**
     * Gets as maximumPermissionsAllowUniversalSearch
     *
     * @return bool
     */
    public function getMaximumPermissionsAllowUniversalSearch()
    {
        return $this->maximumPermissionsAllowUniversalSearch;
    }

    /**
     * Sets a new maximumPermissionsAllowUniversalSearch
     *
     * @param bool $maximumPermissionsAllowUniversalSearch
     * @return self
     */
    public function setMaximumPermissionsAllowUniversalSearch($maximumPermissionsAllowUniversalSearch)
    {
        $this->maximumPermissionsAllowUniversalSearch = $maximumPermissionsAllowUniversalSearch;
        return $this;
    }

    /**
     * Gets as maximumPermissionsAllowViewEditConvertedLeads
     *
     * @return bool
     */
    public function getMaximumPermissionsAllowViewEditConvertedLeads()
    {
        return $this->maximumPermissionsAllowViewEditConvertedLeads;
    }

    /**
     * Sets a new maximumPermissionsAllowViewEditConvertedLeads
     *
     * @param bool $maximumPermissionsAllowViewEditConvertedLeads
     * @return self
     */
    public function setMaximumPermissionsAllowViewEditConvertedLeads($maximumPermissionsAllowViewEditConvertedLeads)
    {
        $this->maximumPermissionsAllowViewEditConvertedLeads = $maximumPermissionsAllowViewEditConvertedLeads;
        return $this;
    }

    /**
     * Gets as maximumPermissionsAllowViewKnowledge
     *
     * @return bool
     */
    public function getMaximumPermissionsAllowViewKnowledge()
    {
        return $this->maximumPermissionsAllowViewKnowledge;
    }

    /**
     * Sets a new maximumPermissionsAllowViewKnowledge
     *
     * @param bool $maximumPermissionsAllowViewKnowledge
     * @return self
     */
    public function setMaximumPermissionsAllowViewKnowledge($maximumPermissionsAllowViewKnowledge)
    {
        $this->maximumPermissionsAllowViewKnowledge = $maximumPermissionsAllowViewKnowledge;
        return $this;
    }

    /**
     * Gets as maximumPermissionsApexRestServices
     *
     * @return bool
     */
    public function getMaximumPermissionsApexRestServices()
    {
        return $this->maximumPermissionsApexRestServices;
    }

    /**
     * Sets a new maximumPermissionsApexRestServices
     *
     * @param bool $maximumPermissionsApexRestServices
     * @return self
     */
    public function setMaximumPermissionsApexRestServices($maximumPermissionsApexRestServices)
    {
        $this->maximumPermissionsApexRestServices = $maximumPermissionsApexRestServices;
        return $this;
    }

    /**
     * Gets as maximumPermissionsApiEnabled
     *
     * @return bool
     */
    public function getMaximumPermissionsApiEnabled()
    {
        return $this->maximumPermissionsApiEnabled;
    }

    /**
     * Sets a new maximumPermissionsApiEnabled
     *
     * @param bool $maximumPermissionsApiEnabled
     * @return self
     */
    public function setMaximumPermissionsApiEnabled($maximumPermissionsApiEnabled)
    {
        $this->maximumPermissionsApiEnabled = $maximumPermissionsApiEnabled;
        return $this;
    }

    /**
     * Gets as maximumPermissionsAssignPermissionSets
     *
     * @return bool
     */
    public function getMaximumPermissionsAssignPermissionSets()
    {
        return $this->maximumPermissionsAssignPermissionSets;
    }

    /**
     * Sets a new maximumPermissionsAssignPermissionSets
     *
     * @param bool $maximumPermissionsAssignPermissionSets
     * @return self
     */
    public function setMaximumPermissionsAssignPermissionSets($maximumPermissionsAssignPermissionSets)
    {
        $this->maximumPermissionsAssignPermissionSets = $maximumPermissionsAssignPermissionSets;
        return $this;
    }

    /**
     * Gets as maximumPermissionsAssignTopics
     *
     * @return bool
     */
    public function getMaximumPermissionsAssignTopics()
    {
        return $this->maximumPermissionsAssignTopics;
    }

    /**
     * Sets a new maximumPermissionsAssignTopics
     *
     * @param bool $maximumPermissionsAssignTopics
     * @return self
     */
    public function setMaximumPermissionsAssignTopics($maximumPermissionsAssignTopics)
    {
        $this->maximumPermissionsAssignTopics = $maximumPermissionsAssignTopics;
        return $this;
    }

    /**
     * Gets as maximumPermissionsAuthorApex
     *
     * @return bool
     */
    public function getMaximumPermissionsAuthorApex()
    {
        return $this->maximumPermissionsAuthorApex;
    }

    /**
     * Sets a new maximumPermissionsAuthorApex
     *
     * @param bool $maximumPermissionsAuthorApex
     * @return self
     */
    public function setMaximumPermissionsAuthorApex($maximumPermissionsAuthorApex)
    {
        $this->maximumPermissionsAuthorApex = $maximumPermissionsAuthorApex;
        return $this;
    }

    /**
     * Gets as maximumPermissionsAutomaticActivityCapture
     *
     * @return bool
     */
    public function getMaximumPermissionsAutomaticActivityCapture()
    {
        return $this->maximumPermissionsAutomaticActivityCapture;
    }

    /**
     * Sets a new maximumPermissionsAutomaticActivityCapture
     *
     * @param bool $maximumPermissionsAutomaticActivityCapture
     * @return self
     */
    public function setMaximumPermissionsAutomaticActivityCapture($maximumPermissionsAutomaticActivityCapture)
    {
        $this->maximumPermissionsAutomaticActivityCapture = $maximumPermissionsAutomaticActivityCapture;
        return $this;
    }

    /**
     * Gets as maximumPermissionsBulkApiHardDelete
     *
     * @return bool
     */
    public function getMaximumPermissionsBulkApiHardDelete()
    {
        return $this->maximumPermissionsBulkApiHardDelete;
    }

    /**
     * Sets a new maximumPermissionsBulkApiHardDelete
     *
     * @param bool $maximumPermissionsBulkApiHardDelete
     * @return self
     */
    public function setMaximumPermissionsBulkApiHardDelete($maximumPermissionsBulkApiHardDelete)
    {
        $this->maximumPermissionsBulkApiHardDelete = $maximumPermissionsBulkApiHardDelete;
        return $this;
    }

    /**
     * Gets as maximumPermissionsBulkMacrosAllowed
     *
     * @return bool
     */
    public function getMaximumPermissionsBulkMacrosAllowed()
    {
        return $this->maximumPermissionsBulkMacrosAllowed;
    }

    /**
     * Sets a new maximumPermissionsBulkMacrosAllowed
     *
     * @param bool $maximumPermissionsBulkMacrosAllowed
     * @return self
     */
    public function setMaximumPermissionsBulkMacrosAllowed($maximumPermissionsBulkMacrosAllowed)
    {
        $this->maximumPermissionsBulkMacrosAllowed = $maximumPermissionsBulkMacrosAllowed;
        return $this;
    }

    /**
     * Gets as maximumPermissionsCampaignInfluence2
     *
     * @return bool
     */
    public function getMaximumPermissionsCampaignInfluence2()
    {
        return $this->maximumPermissionsCampaignInfluence2;
    }

    /**
     * Sets a new maximumPermissionsCampaignInfluence2
     *
     * @param bool $maximumPermissionsCampaignInfluence2
     * @return self
     */
    public function setMaximumPermissionsCampaignInfluence2($maximumPermissionsCampaignInfluence2)
    {
        $this->maximumPermissionsCampaignInfluence2 = $maximumPermissionsCampaignInfluence2;
        return $this;
    }

    /**
     * Gets as maximumPermissionsCanApproveFeedPost
     *
     * @return bool
     */
    public function getMaximumPermissionsCanApproveFeedPost()
    {
        return $this->maximumPermissionsCanApproveFeedPost;
    }

    /**
     * Sets a new maximumPermissionsCanApproveFeedPost
     *
     * @param bool $maximumPermissionsCanApproveFeedPost
     * @return self
     */
    public function setMaximumPermissionsCanApproveFeedPost($maximumPermissionsCanApproveFeedPost)
    {
        $this->maximumPermissionsCanApproveFeedPost = $maximumPermissionsCanApproveFeedPost;
        return $this;
    }

    /**
     * Gets as maximumPermissionsCanEditDataPrepRecipe
     *
     * @return bool
     */
    public function getMaximumPermissionsCanEditDataPrepRecipe()
    {
        return $this->maximumPermissionsCanEditDataPrepRecipe;
    }

    /**
     * Sets a new maximumPermissionsCanEditDataPrepRecipe
     *
     * @param bool $maximumPermissionsCanEditDataPrepRecipe
     * @return self
     */
    public function setMaximumPermissionsCanEditDataPrepRecipe($maximumPermissionsCanEditDataPrepRecipe)
    {
        $this->maximumPermissionsCanEditDataPrepRecipe = $maximumPermissionsCanEditDataPrepRecipe;
        return $this;
    }

    /**
     * Gets as maximumPermissionsCanInsertFeedSystemFields
     *
     * @return bool
     */
    public function getMaximumPermissionsCanInsertFeedSystemFields()
    {
        return $this->maximumPermissionsCanInsertFeedSystemFields;
    }

    /**
     * Sets a new maximumPermissionsCanInsertFeedSystemFields
     *
     * @param bool $maximumPermissionsCanInsertFeedSystemFields
     * @return self
     */
    public function setMaximumPermissionsCanInsertFeedSystemFields($maximumPermissionsCanInsertFeedSystemFields)
    {
        $this->maximumPermissionsCanInsertFeedSystemFields = $maximumPermissionsCanInsertFeedSystemFields;
        return $this;
    }

    /**
     * Gets as maximumPermissionsCanManageMaps
     *
     * @return bool
     */
    public function getMaximumPermissionsCanManageMaps()
    {
        return $this->maximumPermissionsCanManageMaps;
    }

    /**
     * Sets a new maximumPermissionsCanManageMaps
     *
     * @param bool $maximumPermissionsCanManageMaps
     * @return self
     */
    public function setMaximumPermissionsCanManageMaps($maximumPermissionsCanManageMaps)
    {
        $this->maximumPermissionsCanManageMaps = $maximumPermissionsCanManageMaps;
        return $this;
    }

    /**
     * Gets as maximumPermissionsCanUseNewDashboardBuilder
     *
     * @return bool
     */
    public function getMaximumPermissionsCanUseNewDashboardBuilder()
    {
        return $this->maximumPermissionsCanUseNewDashboardBuilder;
    }

    /**
     * Sets a new maximumPermissionsCanUseNewDashboardBuilder
     *
     * @param bool $maximumPermissionsCanUseNewDashboardBuilder
     * @return self
     */
    public function setMaximumPermissionsCanUseNewDashboardBuilder($maximumPermissionsCanUseNewDashboardBuilder)
    {
        $this->maximumPermissionsCanUseNewDashboardBuilder = $maximumPermissionsCanUseNewDashboardBuilder;
        return $this;
    }

    /**
     * Gets as maximumPermissionsCanVerifyComment
     *
     * @return bool
     */
    public function getMaximumPermissionsCanVerifyComment()
    {
        return $this->maximumPermissionsCanVerifyComment;
    }

    /**
     * Sets a new maximumPermissionsCanVerifyComment
     *
     * @param bool $maximumPermissionsCanVerifyComment
     * @return self
     */
    public function setMaximumPermissionsCanVerifyComment($maximumPermissionsCanVerifyComment)
    {
        $this->maximumPermissionsCanVerifyComment = $maximumPermissionsCanVerifyComment;
        return $this;
    }

    /**
     * Gets as maximumPermissionsChangeDashboardColors
     *
     * @return bool
     */
    public function getMaximumPermissionsChangeDashboardColors()
    {
        return $this->maximumPermissionsChangeDashboardColors;
    }

    /**
     * Sets a new maximumPermissionsChangeDashboardColors
     *
     * @param bool $maximumPermissionsChangeDashboardColors
     * @return self
     */
    public function setMaximumPermissionsChangeDashboardColors($maximumPermissionsChangeDashboardColors)
    {
        $this->maximumPermissionsChangeDashboardColors = $maximumPermissionsChangeDashboardColors;
        return $this;
    }

    /**
     * Gets as maximumPermissionsChatterComposeUiCodesnippet
     *
     * @return bool
     */
    public function getMaximumPermissionsChatterComposeUiCodesnippet()
    {
        return $this->maximumPermissionsChatterComposeUiCodesnippet;
    }

    /**
     * Sets a new maximumPermissionsChatterComposeUiCodesnippet
     *
     * @param bool $maximumPermissionsChatterComposeUiCodesnippet
     * @return self
     */
    public function setMaximumPermissionsChatterComposeUiCodesnippet($maximumPermissionsChatterComposeUiCodesnippet)
    {
        $this->maximumPermissionsChatterComposeUiCodesnippet = $maximumPermissionsChatterComposeUiCodesnippet;
        return $this;
    }

    /**
     * Gets as maximumPermissionsChatterEditOwnPost
     *
     * @return bool
     */
    public function getMaximumPermissionsChatterEditOwnPost()
    {
        return $this->maximumPermissionsChatterEditOwnPost;
    }

    /**
     * Sets a new maximumPermissionsChatterEditOwnPost
     *
     * @param bool $maximumPermissionsChatterEditOwnPost
     * @return self
     */
    public function setMaximumPermissionsChatterEditOwnPost($maximumPermissionsChatterEditOwnPost)
    {
        $this->maximumPermissionsChatterEditOwnPost = $maximumPermissionsChatterEditOwnPost;
        return $this;
    }

    /**
     * Gets as maximumPermissionsChatterEditOwnRecordPost
     *
     * @return bool
     */
    public function getMaximumPermissionsChatterEditOwnRecordPost()
    {
        return $this->maximumPermissionsChatterEditOwnRecordPost;
    }

    /**
     * Sets a new maximumPermissionsChatterEditOwnRecordPost
     *
     * @param bool $maximumPermissionsChatterEditOwnRecordPost
     * @return self
     */
    public function setMaximumPermissionsChatterEditOwnRecordPost($maximumPermissionsChatterEditOwnRecordPost)
    {
        $this->maximumPermissionsChatterEditOwnRecordPost = $maximumPermissionsChatterEditOwnRecordPost;
        return $this;
    }

    /**
     * Gets as maximumPermissionsChatterFileLink
     *
     * @return bool
     */
    public function getMaximumPermissionsChatterFileLink()
    {
        return $this->maximumPermissionsChatterFileLink;
    }

    /**
     * Sets a new maximumPermissionsChatterFileLink
     *
     * @param bool $maximumPermissionsChatterFileLink
     * @return self
     */
    public function setMaximumPermissionsChatterFileLink($maximumPermissionsChatterFileLink)
    {
        $this->maximumPermissionsChatterFileLink = $maximumPermissionsChatterFileLink;
        return $this;
    }

    /**
     * Gets as maximumPermissionsChatterInternalUser
     *
     * @return bool
     */
    public function getMaximumPermissionsChatterInternalUser()
    {
        return $this->maximumPermissionsChatterInternalUser;
    }

    /**
     * Sets a new maximumPermissionsChatterInternalUser
     *
     * @param bool $maximumPermissionsChatterInternalUser
     * @return self
     */
    public function setMaximumPermissionsChatterInternalUser($maximumPermissionsChatterInternalUser)
    {
        $this->maximumPermissionsChatterInternalUser = $maximumPermissionsChatterInternalUser;
        return $this;
    }

    /**
     * Gets as maximumPermissionsChatterInviteExternalUsers
     *
     * @return bool
     */
    public function getMaximumPermissionsChatterInviteExternalUsers()
    {
        return $this->maximumPermissionsChatterInviteExternalUsers;
    }

    /**
     * Sets a new maximumPermissionsChatterInviteExternalUsers
     *
     * @param bool $maximumPermissionsChatterInviteExternalUsers
     * @return self
     */
    public function setMaximumPermissionsChatterInviteExternalUsers($maximumPermissionsChatterInviteExternalUsers)
    {
        $this->maximumPermissionsChatterInviteExternalUsers = $maximumPermissionsChatterInviteExternalUsers;
        return $this;
    }

    /**
     * Gets as maximumPermissionsChatterOwnGroups
     *
     * @return bool
     */
    public function getMaximumPermissionsChatterOwnGroups()
    {
        return $this->maximumPermissionsChatterOwnGroups;
    }

    /**
     * Sets a new maximumPermissionsChatterOwnGroups
     *
     * @param bool $maximumPermissionsChatterOwnGroups
     * @return self
     */
    public function setMaximumPermissionsChatterOwnGroups($maximumPermissionsChatterOwnGroups)
    {
        $this->maximumPermissionsChatterOwnGroups = $maximumPermissionsChatterOwnGroups;
        return $this;
    }

    /**
     * Gets as maximumPermissionsCloseConversations
     *
     * @return bool
     */
    public function getMaximumPermissionsCloseConversations()
    {
        return $this->maximumPermissionsCloseConversations;
    }

    /**
     * Sets a new maximumPermissionsCloseConversations
     *
     * @param bool $maximumPermissionsCloseConversations
     * @return self
     */
    public function setMaximumPermissionsCloseConversations($maximumPermissionsCloseConversations)
    {
        $this->maximumPermissionsCloseConversations = $maximumPermissionsCloseConversations;
        return $this;
    }

    /**
     * Gets as maximumPermissionsConfigCustomRecs
     *
     * @return bool
     */
    public function getMaximumPermissionsConfigCustomRecs()
    {
        return $this->maximumPermissionsConfigCustomRecs;
    }

    /**
     * Sets a new maximumPermissionsConfigCustomRecs
     *
     * @param bool $maximumPermissionsConfigCustomRecs
     * @return self
     */
    public function setMaximumPermissionsConfigCustomRecs($maximumPermissionsConfigCustomRecs)
    {
        $this->maximumPermissionsConfigCustomRecs = $maximumPermissionsConfigCustomRecs;
        return $this;
    }

    /**
     * Gets as maximumPermissionsConnectOrgToEnvironmentHub
     *
     * @return bool
     */
    public function getMaximumPermissionsConnectOrgToEnvironmentHub()
    {
        return $this->maximumPermissionsConnectOrgToEnvironmentHub;
    }

    /**
     * Sets a new maximumPermissionsConnectOrgToEnvironmentHub
     *
     * @param bool $maximumPermissionsConnectOrgToEnvironmentHub
     * @return self
     */
    public function setMaximumPermissionsConnectOrgToEnvironmentHub($maximumPermissionsConnectOrgToEnvironmentHub)
    {
        $this->maximumPermissionsConnectOrgToEnvironmentHub = $maximumPermissionsConnectOrgToEnvironmentHub;
        return $this;
    }

    /**
     * Gets as maximumPermissionsContentAdministrator
     *
     * @return bool
     */
    public function getMaximumPermissionsContentAdministrator()
    {
        return $this->maximumPermissionsContentAdministrator;
    }

    /**
     * Sets a new maximumPermissionsContentAdministrator
     *
     * @param bool $maximumPermissionsContentAdministrator
     * @return self
     */
    public function setMaximumPermissionsContentAdministrator($maximumPermissionsContentAdministrator)
    {
        $this->maximumPermissionsContentAdministrator = $maximumPermissionsContentAdministrator;
        return $this;
    }

    /**
     * Gets as maximumPermissionsContentWorkspaces
     *
     * @return bool
     */
    public function getMaximumPermissionsContentWorkspaces()
    {
        return $this->maximumPermissionsContentWorkspaces;
    }

    /**
     * Sets a new maximumPermissionsContentWorkspaces
     *
     * @param bool $maximumPermissionsContentWorkspaces
     * @return self
     */
    public function setMaximumPermissionsContentWorkspaces($maximumPermissionsContentWorkspaces)
    {
        $this->maximumPermissionsContentWorkspaces = $maximumPermissionsContentWorkspaces;
        return $this;
    }

    /**
     * Gets as maximumPermissionsConvertLeads
     *
     * @return bool
     */
    public function getMaximumPermissionsConvertLeads()
    {
        return $this->maximumPermissionsConvertLeads;
    }

    /**
     * Sets a new maximumPermissionsConvertLeads
     *
     * @param bool $maximumPermissionsConvertLeads
     * @return self
     */
    public function setMaximumPermissionsConvertLeads($maximumPermissionsConvertLeads)
    {
        $this->maximumPermissionsConvertLeads = $maximumPermissionsConvertLeads;
        return $this;
    }

    /**
     * Gets as maximumPermissionsCreateCustomizeDashboards
     *
     * @return bool
     */
    public function getMaximumPermissionsCreateCustomizeDashboards()
    {
        return $this->maximumPermissionsCreateCustomizeDashboards;
    }

    /**
     * Sets a new maximumPermissionsCreateCustomizeDashboards
     *
     * @param bool $maximumPermissionsCreateCustomizeDashboards
     * @return self
     */
    public function setMaximumPermissionsCreateCustomizeDashboards($maximumPermissionsCreateCustomizeDashboards)
    {
        $this->maximumPermissionsCreateCustomizeDashboards = $maximumPermissionsCreateCustomizeDashboards;
        return $this;
    }

    /**
     * Gets as maximumPermissionsCreateCustomizeFilters
     *
     * @return bool
     */
    public function getMaximumPermissionsCreateCustomizeFilters()
    {
        return $this->maximumPermissionsCreateCustomizeFilters;
    }

    /**
     * Sets a new maximumPermissionsCreateCustomizeFilters
     *
     * @param bool $maximumPermissionsCreateCustomizeFilters
     * @return self
     */
    public function setMaximumPermissionsCreateCustomizeFilters($maximumPermissionsCreateCustomizeFilters)
    {
        $this->maximumPermissionsCreateCustomizeFilters = $maximumPermissionsCreateCustomizeFilters;
        return $this;
    }

    /**
     * Gets as maximumPermissionsCreateCustomizeReports
     *
     * @return bool
     */
    public function getMaximumPermissionsCreateCustomizeReports()
    {
        return $this->maximumPermissionsCreateCustomizeReports;
    }

    /**
     * Sets a new maximumPermissionsCreateCustomizeReports
     *
     * @param bool $maximumPermissionsCreateCustomizeReports
     * @return self
     */
    public function setMaximumPermissionsCreateCustomizeReports($maximumPermissionsCreateCustomizeReports)
    {
        $this->maximumPermissionsCreateCustomizeReports = $maximumPermissionsCreateCustomizeReports;
        return $this;
    }

    /**
     * Gets as maximumPermissionsCreateDashboardFolders
     *
     * @return bool
     */
    public function getMaximumPermissionsCreateDashboardFolders()
    {
        return $this->maximumPermissionsCreateDashboardFolders;
    }

    /**
     * Sets a new maximumPermissionsCreateDashboardFolders
     *
     * @param bool $maximumPermissionsCreateDashboardFolders
     * @return self
     */
    public function setMaximumPermissionsCreateDashboardFolders($maximumPermissionsCreateDashboardFolders)
    {
        $this->maximumPermissionsCreateDashboardFolders = $maximumPermissionsCreateDashboardFolders;
        return $this;
    }

    /**
     * Gets as maximumPermissionsCreateLtngTempInPub
     *
     * @return bool
     */
    public function getMaximumPermissionsCreateLtngTempInPub()
    {
        return $this->maximumPermissionsCreateLtngTempInPub;
    }

    /**
     * Sets a new maximumPermissionsCreateLtngTempInPub
     *
     * @param bool $maximumPermissionsCreateLtngTempInPub
     * @return self
     */
    public function setMaximumPermissionsCreateLtngTempInPub($maximumPermissionsCreateLtngTempInPub)
    {
        $this->maximumPermissionsCreateLtngTempInPub = $maximumPermissionsCreateLtngTempInPub;
        return $this;
    }

    /**
     * Gets as maximumPermissionsCreatePackaging
     *
     * @return bool
     */
    public function getMaximumPermissionsCreatePackaging()
    {
        return $this->maximumPermissionsCreatePackaging;
    }

    /**
     * Sets a new maximumPermissionsCreatePackaging
     *
     * @param bool $maximumPermissionsCreatePackaging
     * @return self
     */
    public function setMaximumPermissionsCreatePackaging($maximumPermissionsCreatePackaging)
    {
        $this->maximumPermissionsCreatePackaging = $maximumPermissionsCreatePackaging;
        return $this;
    }

    /**
     * Gets as maximumPermissionsCreateReportFolders
     *
     * @return bool
     */
    public function getMaximumPermissionsCreateReportFolders()
    {
        return $this->maximumPermissionsCreateReportFolders;
    }

    /**
     * Sets a new maximumPermissionsCreateReportFolders
     *
     * @param bool $maximumPermissionsCreateReportFolders
     * @return self
     */
    public function setMaximumPermissionsCreateReportFolders($maximumPermissionsCreateReportFolders)
    {
        $this->maximumPermissionsCreateReportFolders = $maximumPermissionsCreateReportFolders;
        return $this;
    }

    /**
     * Gets as maximumPermissionsCreateReportInLightning
     *
     * @return bool
     */
    public function getMaximumPermissionsCreateReportInLightning()
    {
        return $this->maximumPermissionsCreateReportInLightning;
    }

    /**
     * Sets a new maximumPermissionsCreateReportInLightning
     *
     * @param bool $maximumPermissionsCreateReportInLightning
     * @return self
     */
    public function setMaximumPermissionsCreateReportInLightning($maximumPermissionsCreateReportInLightning)
    {
        $this->maximumPermissionsCreateReportInLightning = $maximumPermissionsCreateReportInLightning;
        return $this;
    }

    /**
     * Gets as maximumPermissionsCreateTopics
     *
     * @return bool
     */
    public function getMaximumPermissionsCreateTopics()
    {
        return $this->maximumPermissionsCreateTopics;
    }

    /**
     * Sets a new maximumPermissionsCreateTopics
     *
     * @param bool $maximumPermissionsCreateTopics
     * @return self
     */
    public function setMaximumPermissionsCreateTopics($maximumPermissionsCreateTopics)
    {
        $this->maximumPermissionsCreateTopics = $maximumPermissionsCreateTopics;
        return $this;
    }

    /**
     * Gets as maximumPermissionsCreateWorkspaces
     *
     * @return bool
     */
    public function getMaximumPermissionsCreateWorkspaces()
    {
        return $this->maximumPermissionsCreateWorkspaces;
    }

    /**
     * Sets a new maximumPermissionsCreateWorkspaces
     *
     * @param bool $maximumPermissionsCreateWorkspaces
     * @return self
     */
    public function setMaximumPermissionsCreateWorkspaces($maximumPermissionsCreateWorkspaces)
    {
        $this->maximumPermissionsCreateWorkspaces = $maximumPermissionsCreateWorkspaces;
        return $this;
    }

    /**
     * Gets as maximumPermissionsCustomMobileAppsAccess
     *
     * @return bool
     */
    public function getMaximumPermissionsCustomMobileAppsAccess()
    {
        return $this->maximumPermissionsCustomMobileAppsAccess;
    }

    /**
     * Sets a new maximumPermissionsCustomMobileAppsAccess
     *
     * @param bool $maximumPermissionsCustomMobileAppsAccess
     * @return self
     */
    public function setMaximumPermissionsCustomMobileAppsAccess($maximumPermissionsCustomMobileAppsAccess)
    {
        $this->maximumPermissionsCustomMobileAppsAccess = $maximumPermissionsCustomMobileAppsAccess;
        return $this;
    }

    /**
     * Gets as maximumPermissionsCustomSidebarOnAllPages
     *
     * @return bool
     */
    public function getMaximumPermissionsCustomSidebarOnAllPages()
    {
        return $this->maximumPermissionsCustomSidebarOnAllPages;
    }

    /**
     * Sets a new maximumPermissionsCustomSidebarOnAllPages
     *
     * @param bool $maximumPermissionsCustomSidebarOnAllPages
     * @return self
     */
    public function setMaximumPermissionsCustomSidebarOnAllPages($maximumPermissionsCustomSidebarOnAllPages)
    {
        $this->maximumPermissionsCustomSidebarOnAllPages = $maximumPermissionsCustomSidebarOnAllPages;
        return $this;
    }

    /**
     * Gets as maximumPermissionsCustomizeApplication
     *
     * @return bool
     */
    public function getMaximumPermissionsCustomizeApplication()
    {
        return $this->maximumPermissionsCustomizeApplication;
    }

    /**
     * Sets a new maximumPermissionsCustomizeApplication
     *
     * @param bool $maximumPermissionsCustomizeApplication
     * @return self
     */
    public function setMaximumPermissionsCustomizeApplication($maximumPermissionsCustomizeApplication)
    {
        $this->maximumPermissionsCustomizeApplication = $maximumPermissionsCustomizeApplication;
        return $this;
    }

    /**
     * Gets as maximumPermissionsDataExport
     *
     * @return bool
     */
    public function getMaximumPermissionsDataExport()
    {
        return $this->maximumPermissionsDataExport;
    }

    /**
     * Sets a new maximumPermissionsDataExport
     *
     * @param bool $maximumPermissionsDataExport
     * @return self
     */
    public function setMaximumPermissionsDataExport($maximumPermissionsDataExport)
    {
        $this->maximumPermissionsDataExport = $maximumPermissionsDataExport;
        return $this;
    }

    /**
     * Gets as maximumPermissionsDelegatedTwoFactor
     *
     * @return bool
     */
    public function getMaximumPermissionsDelegatedTwoFactor()
    {
        return $this->maximumPermissionsDelegatedTwoFactor;
    }

    /**
     * Sets a new maximumPermissionsDelegatedTwoFactor
     *
     * @param bool $maximumPermissionsDelegatedTwoFactor
     * @return self
     */
    public function setMaximumPermissionsDelegatedTwoFactor($maximumPermissionsDelegatedTwoFactor)
    {
        $this->maximumPermissionsDelegatedTwoFactor = $maximumPermissionsDelegatedTwoFactor;
        return $this;
    }

    /**
     * Gets as maximumPermissionsDeleteActivatedContract
     *
     * @return bool
     */
    public function getMaximumPermissionsDeleteActivatedContract()
    {
        return $this->maximumPermissionsDeleteActivatedContract;
    }

    /**
     * Sets a new maximumPermissionsDeleteActivatedContract
     *
     * @param bool $maximumPermissionsDeleteActivatedContract
     * @return self
     */
    public function setMaximumPermissionsDeleteActivatedContract($maximumPermissionsDeleteActivatedContract)
    {
        $this->maximumPermissionsDeleteActivatedContract = $maximumPermissionsDeleteActivatedContract;
        return $this;
    }

    /**
     * Gets as maximumPermissionsDeleteTopics
     *
     * @return bool
     */
    public function getMaximumPermissionsDeleteTopics()
    {
        return $this->maximumPermissionsDeleteTopics;
    }

    /**
     * Sets a new maximumPermissionsDeleteTopics
     *
     * @param bool $maximumPermissionsDeleteTopics
     * @return self
     */
    public function setMaximumPermissionsDeleteTopics($maximumPermissionsDeleteTopics)
    {
        $this->maximumPermissionsDeleteTopics = $maximumPermissionsDeleteTopics;
        return $this;
    }

    /**
     * Gets as maximumPermissionsDistributeFromPersWksp
     *
     * @return bool
     */
    public function getMaximumPermissionsDistributeFromPersWksp()
    {
        return $this->maximumPermissionsDistributeFromPersWksp;
    }

    /**
     * Sets a new maximumPermissionsDistributeFromPersWksp
     *
     * @param bool $maximumPermissionsDistributeFromPersWksp
     * @return self
     */
    public function setMaximumPermissionsDistributeFromPersWksp($maximumPermissionsDistributeFromPersWksp)
    {
        $this->maximumPermissionsDistributeFromPersWksp = $maximumPermissionsDistributeFromPersWksp;
        return $this;
    }

    /**
     * Gets as maximumPermissionsEditActivatedOrders
     *
     * @return bool
     */
    public function getMaximumPermissionsEditActivatedOrders()
    {
        return $this->maximumPermissionsEditActivatedOrders;
    }

    /**
     * Sets a new maximumPermissionsEditActivatedOrders
     *
     * @param bool $maximumPermissionsEditActivatedOrders
     * @return self
     */
    public function setMaximumPermissionsEditActivatedOrders($maximumPermissionsEditActivatedOrders)
    {
        $this->maximumPermissionsEditActivatedOrders = $maximumPermissionsEditActivatedOrders;
        return $this;
    }

    /**
     * Gets as maximumPermissionsEditBrandTemplates
     *
     * @return bool
     */
    public function getMaximumPermissionsEditBrandTemplates()
    {
        return $this->maximumPermissionsEditBrandTemplates;
    }

    /**
     * Sets a new maximumPermissionsEditBrandTemplates
     *
     * @param bool $maximumPermissionsEditBrandTemplates
     * @return self
     */
    public function setMaximumPermissionsEditBrandTemplates($maximumPermissionsEditBrandTemplates)
    {
        $this->maximumPermissionsEditBrandTemplates = $maximumPermissionsEditBrandTemplates;
        return $this;
    }

    /**
     * Gets as maximumPermissionsEditCaseComments
     *
     * @return bool
     */
    public function getMaximumPermissionsEditCaseComments()
    {
        return $this->maximumPermissionsEditCaseComments;
    }

    /**
     * Sets a new maximumPermissionsEditCaseComments
     *
     * @param bool $maximumPermissionsEditCaseComments
     * @return self
     */
    public function setMaximumPermissionsEditCaseComments($maximumPermissionsEditCaseComments)
    {
        $this->maximumPermissionsEditCaseComments = $maximumPermissionsEditCaseComments;
        return $this;
    }

    /**
     * Gets as maximumPermissionsEditEvent
     *
     * @return bool
     */
    public function getMaximumPermissionsEditEvent()
    {
        return $this->maximumPermissionsEditEvent;
    }

    /**
     * Sets a new maximumPermissionsEditEvent
     *
     * @param bool $maximumPermissionsEditEvent
     * @return self
     */
    public function setMaximumPermissionsEditEvent($maximumPermissionsEditEvent)
    {
        $this->maximumPermissionsEditEvent = $maximumPermissionsEditEvent;
        return $this;
    }

    /**
     * Gets as maximumPermissionsEditHtmlTemplates
     *
     * @return bool
     */
    public function getMaximumPermissionsEditHtmlTemplates()
    {
        return $this->maximumPermissionsEditHtmlTemplates;
    }

    /**
     * Sets a new maximumPermissionsEditHtmlTemplates
     *
     * @param bool $maximumPermissionsEditHtmlTemplates
     * @return self
     */
    public function setMaximumPermissionsEditHtmlTemplates($maximumPermissionsEditHtmlTemplates)
    {
        $this->maximumPermissionsEditHtmlTemplates = $maximumPermissionsEditHtmlTemplates;
        return $this;
    }

    /**
     * Gets as maximumPermissionsEditKnowledge
     *
     * @return bool
     */
    public function getMaximumPermissionsEditKnowledge()
    {
        return $this->maximumPermissionsEditKnowledge;
    }

    /**
     * Sets a new maximumPermissionsEditKnowledge
     *
     * @param bool $maximumPermissionsEditKnowledge
     * @return self
     */
    public function setMaximumPermissionsEditKnowledge($maximumPermissionsEditKnowledge)
    {
        $this->maximumPermissionsEditKnowledge = $maximumPermissionsEditKnowledge;
        return $this;
    }

    /**
     * Gets as maximumPermissionsEditMyDashboards
     *
     * @return bool
     */
    public function getMaximumPermissionsEditMyDashboards()
    {
        return $this->maximumPermissionsEditMyDashboards;
    }

    /**
     * Sets a new maximumPermissionsEditMyDashboards
     *
     * @param bool $maximumPermissionsEditMyDashboards
     * @return self
     */
    public function setMaximumPermissionsEditMyDashboards($maximumPermissionsEditMyDashboards)
    {
        $this->maximumPermissionsEditMyDashboards = $maximumPermissionsEditMyDashboards;
        return $this;
    }

    /**
     * Gets as maximumPermissionsEditMyReports
     *
     * @return bool
     */
    public function getMaximumPermissionsEditMyReports()
    {
        return $this->maximumPermissionsEditMyReports;
    }

    /**
     * Sets a new maximumPermissionsEditMyReports
     *
     * @param bool $maximumPermissionsEditMyReports
     * @return self
     */
    public function setMaximumPermissionsEditMyReports($maximumPermissionsEditMyReports)
    {
        $this->maximumPermissionsEditMyReports = $maximumPermissionsEditMyReports;
        return $this;
    }

    /**
     * Gets as maximumPermissionsEditOppLineItemUnitPrice
     *
     * @return bool
     */
    public function getMaximumPermissionsEditOppLineItemUnitPrice()
    {
        return $this->maximumPermissionsEditOppLineItemUnitPrice;
    }

    /**
     * Sets a new maximumPermissionsEditOppLineItemUnitPrice
     *
     * @param bool $maximumPermissionsEditOppLineItemUnitPrice
     * @return self
     */
    public function setMaximumPermissionsEditOppLineItemUnitPrice($maximumPermissionsEditOppLineItemUnitPrice)
    {
        $this->maximumPermissionsEditOppLineItemUnitPrice = $maximumPermissionsEditOppLineItemUnitPrice;
        return $this;
    }

    /**
     * Gets as maximumPermissionsEditPublicDocuments
     *
     * @return bool
     */
    public function getMaximumPermissionsEditPublicDocuments()
    {
        return $this->maximumPermissionsEditPublicDocuments;
    }

    /**
     * Sets a new maximumPermissionsEditPublicDocuments
     *
     * @param bool $maximumPermissionsEditPublicDocuments
     * @return self
     */
    public function setMaximumPermissionsEditPublicDocuments($maximumPermissionsEditPublicDocuments)
    {
        $this->maximumPermissionsEditPublicDocuments = $maximumPermissionsEditPublicDocuments;
        return $this;
    }

    /**
     * Gets as maximumPermissionsEditPublicFilters
     *
     * @return bool
     */
    public function getMaximumPermissionsEditPublicFilters()
    {
        return $this->maximumPermissionsEditPublicFilters;
    }

    /**
     * Sets a new maximumPermissionsEditPublicFilters
     *
     * @param bool $maximumPermissionsEditPublicFilters
     * @return self
     */
    public function setMaximumPermissionsEditPublicFilters($maximumPermissionsEditPublicFilters)
    {
        $this->maximumPermissionsEditPublicFilters = $maximumPermissionsEditPublicFilters;
        return $this;
    }

    /**
     * Gets as maximumPermissionsEditPublicTemplates
     *
     * @return bool
     */
    public function getMaximumPermissionsEditPublicTemplates()
    {
        return $this->maximumPermissionsEditPublicTemplates;
    }

    /**
     * Sets a new maximumPermissionsEditPublicTemplates
     *
     * @param bool $maximumPermissionsEditPublicTemplates
     * @return self
     */
    public function setMaximumPermissionsEditPublicTemplates($maximumPermissionsEditPublicTemplates)
    {
        $this->maximumPermissionsEditPublicTemplates = $maximumPermissionsEditPublicTemplates;
        return $this;
    }

    /**
     * Gets as maximumPermissionsEditReadonlyFields
     *
     * @return bool
     */
    public function getMaximumPermissionsEditReadonlyFields()
    {
        return $this->maximumPermissionsEditReadonlyFields;
    }

    /**
     * Sets a new maximumPermissionsEditReadonlyFields
     *
     * @param bool $maximumPermissionsEditReadonlyFields
     * @return self
     */
    public function setMaximumPermissionsEditReadonlyFields($maximumPermissionsEditReadonlyFields)
    {
        $this->maximumPermissionsEditReadonlyFields = $maximumPermissionsEditReadonlyFields;
        return $this;
    }

    /**
     * Gets as maximumPermissionsEditTask
     *
     * @return bool
     */
    public function getMaximumPermissionsEditTask()
    {
        return $this->maximumPermissionsEditTask;
    }

    /**
     * Sets a new maximumPermissionsEditTask
     *
     * @param bool $maximumPermissionsEditTask
     * @return self
     */
    public function setMaximumPermissionsEditTask($maximumPermissionsEditTask)
    {
        $this->maximumPermissionsEditTask = $maximumPermissionsEditTask;
        return $this;
    }

    /**
     * Gets as maximumPermissionsEditTopics
     *
     * @return bool
     */
    public function getMaximumPermissionsEditTopics()
    {
        return $this->maximumPermissionsEditTopics;
    }

    /**
     * Sets a new maximumPermissionsEditTopics
     *
     * @param bool $maximumPermissionsEditTopics
     * @return self
     */
    public function setMaximumPermissionsEditTopics($maximumPermissionsEditTopics)
    {
        $this->maximumPermissionsEditTopics = $maximumPermissionsEditTopics;
        return $this;
    }

    /**
     * Gets as maximumPermissionsEmailAdministration
     *
     * @return bool
     */
    public function getMaximumPermissionsEmailAdministration()
    {
        return $this->maximumPermissionsEmailAdministration;
    }

    /**
     * Sets a new maximumPermissionsEmailAdministration
     *
     * @param bool $maximumPermissionsEmailAdministration
     * @return self
     */
    public function setMaximumPermissionsEmailAdministration($maximumPermissionsEmailAdministration)
    {
        $this->maximumPermissionsEmailAdministration = $maximumPermissionsEmailAdministration;
        return $this;
    }

    /**
     * Gets as maximumPermissionsEmailMass
     *
     * @return bool
     */
    public function getMaximumPermissionsEmailMass()
    {
        return $this->maximumPermissionsEmailMass;
    }

    /**
     * Sets a new maximumPermissionsEmailMass
     *
     * @param bool $maximumPermissionsEmailMass
     * @return self
     */
    public function setMaximumPermissionsEmailMass($maximumPermissionsEmailMass)
    {
        $this->maximumPermissionsEmailMass = $maximumPermissionsEmailMass;
        return $this;
    }

    /**
     * Gets as maximumPermissionsEmailSingle
     *
     * @return bool
     */
    public function getMaximumPermissionsEmailSingle()
    {
        return $this->maximumPermissionsEmailSingle;
    }

    /**
     * Sets a new maximumPermissionsEmailSingle
     *
     * @param bool $maximumPermissionsEmailSingle
     * @return self
     */
    public function setMaximumPermissionsEmailSingle($maximumPermissionsEmailSingle)
    {
        $this->maximumPermissionsEmailSingle = $maximumPermissionsEmailSingle;
        return $this;
    }

    /**
     * Gets as maximumPermissionsEmailTemplateManagement
     *
     * @return bool
     */
    public function getMaximumPermissionsEmailTemplateManagement()
    {
        return $this->maximumPermissionsEmailTemplateManagement;
    }

    /**
     * Sets a new maximumPermissionsEmailTemplateManagement
     *
     * @param bool $maximumPermissionsEmailTemplateManagement
     * @return self
     */
    public function setMaximumPermissionsEmailTemplateManagement($maximumPermissionsEmailTemplateManagement)
    {
        $this->maximumPermissionsEmailTemplateManagement = $maximumPermissionsEmailTemplateManagement;
        return $this;
    }

    /**
     * Gets as maximumPermissionsEnableCommunityAppLauncher
     *
     * @return bool
     */
    public function getMaximumPermissionsEnableCommunityAppLauncher()
    {
        return $this->maximumPermissionsEnableCommunityAppLauncher;
    }

    /**
     * Sets a new maximumPermissionsEnableCommunityAppLauncher
     *
     * @param bool $maximumPermissionsEnableCommunityAppLauncher
     * @return self
     */
    public function setMaximumPermissionsEnableCommunityAppLauncher($maximumPermissionsEnableCommunityAppLauncher)
    {
        $this->maximumPermissionsEnableCommunityAppLauncher = $maximumPermissionsEnableCommunityAppLauncher;
        return $this;
    }

    /**
     * Gets as maximumPermissionsEnableNotifications
     *
     * @return bool
     */
    public function getMaximumPermissionsEnableNotifications()
    {
        return $this->maximumPermissionsEnableNotifications;
    }

    /**
     * Sets a new maximumPermissionsEnableNotifications
     *
     * @param bool $maximumPermissionsEnableNotifications
     * @return self
     */
    public function setMaximumPermissionsEnableNotifications($maximumPermissionsEnableNotifications)
    {
        $this->maximumPermissionsEnableNotifications = $maximumPermissionsEnableNotifications;
        return $this;
    }

    /**
     * Gets as maximumPermissionsExportReport
     *
     * @return bool
     */
    public function getMaximumPermissionsExportReport()
    {
        return $this->maximumPermissionsExportReport;
    }

    /**
     * Sets a new maximumPermissionsExportReport
     *
     * @param bool $maximumPermissionsExportReport
     * @return self
     */
    public function setMaximumPermissionsExportReport($maximumPermissionsExportReport)
    {
        $this->maximumPermissionsExportReport = $maximumPermissionsExportReport;
        return $this;
    }

    /**
     * Gets as maximumPermissionsFeedPinning
     *
     * @return bool
     */
    public function getMaximumPermissionsFeedPinning()
    {
        return $this->maximumPermissionsFeedPinning;
    }

    /**
     * Sets a new maximumPermissionsFeedPinning
     *
     * @param bool $maximumPermissionsFeedPinning
     * @return self
     */
    public function setMaximumPermissionsFeedPinning($maximumPermissionsFeedPinning)
    {
        $this->maximumPermissionsFeedPinning = $maximumPermissionsFeedPinning;
        return $this;
    }

    /**
     * Gets as maximumPermissionsFlowUFLRequired
     *
     * @return bool
     */
    public function getMaximumPermissionsFlowUFLRequired()
    {
        return $this->maximumPermissionsFlowUFLRequired;
    }

    /**
     * Sets a new maximumPermissionsFlowUFLRequired
     *
     * @param bool $maximumPermissionsFlowUFLRequired
     * @return self
     */
    public function setMaximumPermissionsFlowUFLRequired($maximumPermissionsFlowUFLRequired)
    {
        $this->maximumPermissionsFlowUFLRequired = $maximumPermissionsFlowUFLRequired;
        return $this;
    }

    /**
     * Gets as maximumPermissionsForceTwoFactor
     *
     * @return bool
     */
    public function getMaximumPermissionsForceTwoFactor()
    {
        return $this->maximumPermissionsForceTwoFactor;
    }

    /**
     * Sets a new maximumPermissionsForceTwoFactor
     *
     * @param bool $maximumPermissionsForceTwoFactor
     * @return self
     */
    public function setMaximumPermissionsForceTwoFactor($maximumPermissionsForceTwoFactor)
    {
        $this->maximumPermissionsForceTwoFactor = $maximumPermissionsForceTwoFactor;
        return $this;
    }

    /**
     * Gets as maximumPermissionsGiveRecognitionBadge
     *
     * @return bool
     */
    public function getMaximumPermissionsGiveRecognitionBadge()
    {
        return $this->maximumPermissionsGiveRecognitionBadge;
    }

    /**
     * Sets a new maximumPermissionsGiveRecognitionBadge
     *
     * @param bool $maximumPermissionsGiveRecognitionBadge
     * @return self
     */
    public function setMaximumPermissionsGiveRecognitionBadge($maximumPermissionsGiveRecognitionBadge)
    {
        $this->maximumPermissionsGiveRecognitionBadge = $maximumPermissionsGiveRecognitionBadge;
        return $this;
    }

    /**
     * Gets as maximumPermissionsGovernNetworks
     *
     * @return bool
     */
    public function getMaximumPermissionsGovernNetworks()
    {
        return $this->maximumPermissionsGovernNetworks;
    }

    /**
     * Sets a new maximumPermissionsGovernNetworks
     *
     * @param bool $maximumPermissionsGovernNetworks
     * @return self
     */
    public function setMaximumPermissionsGovernNetworks($maximumPermissionsGovernNetworks)
    {
        $this->maximumPermissionsGovernNetworks = $maximumPermissionsGovernNetworks;
        return $this;
    }

    /**
     * Gets as maximumPermissionsHideReadByList
     *
     * @return bool
     */
    public function getMaximumPermissionsHideReadByList()
    {
        return $this->maximumPermissionsHideReadByList;
    }

    /**
     * Sets a new maximumPermissionsHideReadByList
     *
     * @param bool $maximumPermissionsHideReadByList
     * @return self
     */
    public function setMaximumPermissionsHideReadByList($maximumPermissionsHideReadByList)
    {
        $this->maximumPermissionsHideReadByList = $maximumPermissionsHideReadByList;
        return $this;
    }

    /**
     * Gets as maximumPermissionsIdentityConnect
     *
     * @return bool
     */
    public function getMaximumPermissionsIdentityConnect()
    {
        return $this->maximumPermissionsIdentityConnect;
    }

    /**
     * Sets a new maximumPermissionsIdentityConnect
     *
     * @param bool $maximumPermissionsIdentityConnect
     * @return self
     */
    public function setMaximumPermissionsIdentityConnect($maximumPermissionsIdentityConnect)
    {
        $this->maximumPermissionsIdentityConnect = $maximumPermissionsIdentityConnect;
        return $this;
    }

    /**
     * Gets as maximumPermissionsIdentityEnabled
     *
     * @return bool
     */
    public function getMaximumPermissionsIdentityEnabled()
    {
        return $this->maximumPermissionsIdentityEnabled;
    }

    /**
     * Sets a new maximumPermissionsIdentityEnabled
     *
     * @param bool $maximumPermissionsIdentityEnabled
     * @return self
     */
    public function setMaximumPermissionsIdentityEnabled($maximumPermissionsIdentityEnabled)
    {
        $this->maximumPermissionsIdentityEnabled = $maximumPermissionsIdentityEnabled;
        return $this;
    }

    /**
     * Gets as maximumPermissionsImportCustomObjects
     *
     * @return bool
     */
    public function getMaximumPermissionsImportCustomObjects()
    {
        return $this->maximumPermissionsImportCustomObjects;
    }

    /**
     * Sets a new maximumPermissionsImportCustomObjects
     *
     * @param bool $maximumPermissionsImportCustomObjects
     * @return self
     */
    public function setMaximumPermissionsImportCustomObjects($maximumPermissionsImportCustomObjects)
    {
        $this->maximumPermissionsImportCustomObjects = $maximumPermissionsImportCustomObjects;
        return $this;
    }

    /**
     * Gets as maximumPermissionsImportLeads
     *
     * @return bool
     */
    public function getMaximumPermissionsImportLeads()
    {
        return $this->maximumPermissionsImportLeads;
    }

    /**
     * Sets a new maximumPermissionsImportLeads
     *
     * @param bool $maximumPermissionsImportLeads
     * @return self
     */
    public function setMaximumPermissionsImportLeads($maximumPermissionsImportLeads)
    {
        $this->maximumPermissionsImportLeads = $maximumPermissionsImportLeads;
        return $this;
    }

    /**
     * Gets as maximumPermissionsImportPersonal
     *
     * @return bool
     */
    public function getMaximumPermissionsImportPersonal()
    {
        return $this->maximumPermissionsImportPersonal;
    }

    /**
     * Sets a new maximumPermissionsImportPersonal
     *
     * @param bool $maximumPermissionsImportPersonal
     * @return self
     */
    public function setMaximumPermissionsImportPersonal($maximumPermissionsImportPersonal)
    {
        $this->maximumPermissionsImportPersonal = $maximumPermissionsImportPersonal;
        return $this;
    }

    /**
     * Gets as maximumPermissionsInsightsAppAdmin
     *
     * @return bool
     */
    public function getMaximumPermissionsInsightsAppAdmin()
    {
        return $this->maximumPermissionsInsightsAppAdmin;
    }

    /**
     * Sets a new maximumPermissionsInsightsAppAdmin
     *
     * @param bool $maximumPermissionsInsightsAppAdmin
     * @return self
     */
    public function setMaximumPermissionsInsightsAppAdmin($maximumPermissionsInsightsAppAdmin)
    {
        $this->maximumPermissionsInsightsAppAdmin = $maximumPermissionsInsightsAppAdmin;
        return $this;
    }

    /**
     * Gets as maximumPermissionsInsightsAppDashboardEditor
     *
     * @return bool
     */
    public function getMaximumPermissionsInsightsAppDashboardEditor()
    {
        return $this->maximumPermissionsInsightsAppDashboardEditor;
    }

    /**
     * Sets a new maximumPermissionsInsightsAppDashboardEditor
     *
     * @param bool $maximumPermissionsInsightsAppDashboardEditor
     * @return self
     */
    public function setMaximumPermissionsInsightsAppDashboardEditor($maximumPermissionsInsightsAppDashboardEditor)
    {
        $this->maximumPermissionsInsightsAppDashboardEditor = $maximumPermissionsInsightsAppDashboardEditor;
        return $this;
    }

    /**
     * Gets as maximumPermissionsInsightsAppEltEditor
     *
     * @return bool
     */
    public function getMaximumPermissionsInsightsAppEltEditor()
    {
        return $this->maximumPermissionsInsightsAppEltEditor;
    }

    /**
     * Sets a new maximumPermissionsInsightsAppEltEditor
     *
     * @param bool $maximumPermissionsInsightsAppEltEditor
     * @return self
     */
    public function setMaximumPermissionsInsightsAppEltEditor($maximumPermissionsInsightsAppEltEditor)
    {
        $this->maximumPermissionsInsightsAppEltEditor = $maximumPermissionsInsightsAppEltEditor;
        return $this;
    }

    /**
     * Gets as maximumPermissionsInsightsAppUploadUser
     *
     * @return bool
     */
    public function getMaximumPermissionsInsightsAppUploadUser()
    {
        return $this->maximumPermissionsInsightsAppUploadUser;
    }

    /**
     * Sets a new maximumPermissionsInsightsAppUploadUser
     *
     * @param bool $maximumPermissionsInsightsAppUploadUser
     * @return self
     */
    public function setMaximumPermissionsInsightsAppUploadUser($maximumPermissionsInsightsAppUploadUser)
    {
        $this->maximumPermissionsInsightsAppUploadUser = $maximumPermissionsInsightsAppUploadUser;
        return $this;
    }

    /**
     * Gets as maximumPermissionsInsightsAppUser
     *
     * @return bool
     */
    public function getMaximumPermissionsInsightsAppUser()
    {
        return $this->maximumPermissionsInsightsAppUser;
    }

    /**
     * Sets a new maximumPermissionsInsightsAppUser
     *
     * @param bool $maximumPermissionsInsightsAppUser
     * @return self
     */
    public function setMaximumPermissionsInsightsAppUser($maximumPermissionsInsightsAppUser)
    {
        $this->maximumPermissionsInsightsAppUser = $maximumPermissionsInsightsAppUser;
        return $this;
    }

    /**
     * Gets as maximumPermissionsInsightsCreateApplication
     *
     * @return bool
     */
    public function getMaximumPermissionsInsightsCreateApplication()
    {
        return $this->maximumPermissionsInsightsCreateApplication;
    }

    /**
     * Sets a new maximumPermissionsInsightsCreateApplication
     *
     * @param bool $maximumPermissionsInsightsCreateApplication
     * @return self
     */
    public function setMaximumPermissionsInsightsCreateApplication($maximumPermissionsInsightsCreateApplication)
    {
        $this->maximumPermissionsInsightsCreateApplication = $maximumPermissionsInsightsCreateApplication;
        return $this;
    }

    /**
     * Gets as maximumPermissionsInstallPackaging
     *
     * @return bool
     */
    public function getMaximumPermissionsInstallPackaging()
    {
        return $this->maximumPermissionsInstallPackaging;
    }

    /**
     * Sets a new maximumPermissionsInstallPackaging
     *
     * @param bool $maximumPermissionsInstallPackaging
     * @return self
     */
    public function setMaximumPermissionsInstallPackaging($maximumPermissionsInstallPackaging)
    {
        $this->maximumPermissionsInstallPackaging = $maximumPermissionsInstallPackaging;
        return $this;
    }

    /**
     * Gets as maximumPermissionsIotUser
     *
     * @return bool
     */
    public function getMaximumPermissionsIotUser()
    {
        return $this->maximumPermissionsIotUser;
    }

    /**
     * Sets a new maximumPermissionsIotUser
     *
     * @param bool $maximumPermissionsIotUser
     * @return self
     */
    public function setMaximumPermissionsIotUser($maximumPermissionsIotUser)
    {
        $this->maximumPermissionsIotUser = $maximumPermissionsIotUser;
        return $this;
    }

    /**
     * Gets as maximumPermissionsLightningConsoleAllowedForUser
     *
     * @return bool
     */
    public function getMaximumPermissionsLightningConsoleAllowedForUser()
    {
        return $this->maximumPermissionsLightningConsoleAllowedForUser;
    }

    /**
     * Sets a new maximumPermissionsLightningConsoleAllowedForUser
     *
     * @param bool $maximumPermissionsLightningConsoleAllowedForUser
     * @return self
     */
    public function setMaximumPermissionsLightningConsoleAllowedForUser($maximumPermissionsLightningConsoleAllowedForUser)
    {
        $this->maximumPermissionsLightningConsoleAllowedForUser = $maximumPermissionsLightningConsoleAllowedForUser;
        return $this;
    }

    /**
     * Gets as maximumPermissionsLightningExperienceUser
     *
     * @return bool
     */
    public function getMaximumPermissionsLightningExperienceUser()
    {
        return $this->maximumPermissionsLightningExperienceUser;
    }

    /**
     * Sets a new maximumPermissionsLightningExperienceUser
     *
     * @param bool $maximumPermissionsLightningExperienceUser
     * @return self
     */
    public function setMaximumPermissionsLightningExperienceUser($maximumPermissionsLightningExperienceUser)
    {
        $this->maximumPermissionsLightningExperienceUser = $maximumPermissionsLightningExperienceUser;
        return $this;
    }

    /**
     * Gets as maximumPermissionsListEmailSend
     *
     * @return bool
     */
    public function getMaximumPermissionsListEmailSend()
    {
        return $this->maximumPermissionsListEmailSend;
    }

    /**
     * Sets a new maximumPermissionsListEmailSend
     *
     * @param bool $maximumPermissionsListEmailSend
     * @return self
     */
    public function setMaximumPermissionsListEmailSend($maximumPermissionsListEmailSend)
    {
        $this->maximumPermissionsListEmailSend = $maximumPermissionsListEmailSend;
        return $this;
    }

    /**
     * Gets as maximumPermissionsLtngPromoReserved01UserPerm
     *
     * @return bool
     */
    public function getMaximumPermissionsLtngPromoReserved01UserPerm()
    {
        return $this->maximumPermissionsLtngPromoReserved01UserPerm;
    }

    /**
     * Sets a new maximumPermissionsLtngPromoReserved01UserPerm
     *
     * @param bool $maximumPermissionsLtngPromoReserved01UserPerm
     * @return self
     */
    public function setMaximumPermissionsLtngPromoReserved01UserPerm($maximumPermissionsLtngPromoReserved01UserPerm)
    {
        $this->maximumPermissionsLtngPromoReserved01UserPerm = $maximumPermissionsLtngPromoReserved01UserPerm;
        return $this;
    }

    /**
     * Gets as maximumPermissionsManageAnalyticSnapshots
     *
     * @return bool
     */
    public function getMaximumPermissionsManageAnalyticSnapshots()
    {
        return $this->maximumPermissionsManageAnalyticSnapshots;
    }

    /**
     * Sets a new maximumPermissionsManageAnalyticSnapshots
     *
     * @param bool $maximumPermissionsManageAnalyticSnapshots
     * @return self
     */
    public function setMaximumPermissionsManageAnalyticSnapshots($maximumPermissionsManageAnalyticSnapshots)
    {
        $this->maximumPermissionsManageAnalyticSnapshots = $maximumPermissionsManageAnalyticSnapshots;
        return $this;
    }

    /**
     * Gets as maximumPermissionsManageAuthProviders
     *
     * @return bool
     */
    public function getMaximumPermissionsManageAuthProviders()
    {
        return $this->maximumPermissionsManageAuthProviders;
    }

    /**
     * Sets a new maximumPermissionsManageAuthProviders
     *
     * @param bool $maximumPermissionsManageAuthProviders
     * @return self
     */
    public function setMaximumPermissionsManageAuthProviders($maximumPermissionsManageAuthProviders)
    {
        $this->maximumPermissionsManageAuthProviders = $maximumPermissionsManageAuthProviders;
        return $this;
    }

    /**
     * Gets as maximumPermissionsManageBusinessHourHolidays
     *
     * @return bool
     */
    public function getMaximumPermissionsManageBusinessHourHolidays()
    {
        return $this->maximumPermissionsManageBusinessHourHolidays;
    }

    /**
     * Sets a new maximumPermissionsManageBusinessHourHolidays
     *
     * @param bool $maximumPermissionsManageBusinessHourHolidays
     * @return self
     */
    public function setMaximumPermissionsManageBusinessHourHolidays($maximumPermissionsManageBusinessHourHolidays)
    {
        $this->maximumPermissionsManageBusinessHourHolidays = $maximumPermissionsManageBusinessHourHolidays;
        return $this;
    }

    /**
     * Gets as maximumPermissionsManageCallCenters
     *
     * @return bool
     */
    public function getMaximumPermissionsManageCallCenters()
    {
        return $this->maximumPermissionsManageCallCenters;
    }

    /**
     * Sets a new maximumPermissionsManageCallCenters
     *
     * @param bool $maximumPermissionsManageCallCenters
     * @return self
     */
    public function setMaximumPermissionsManageCallCenters($maximumPermissionsManageCallCenters)
    {
        $this->maximumPermissionsManageCallCenters = $maximumPermissionsManageCallCenters;
        return $this;
    }

    /**
     * Gets as maximumPermissionsManageCases
     *
     * @return bool
     */
    public function getMaximumPermissionsManageCases()
    {
        return $this->maximumPermissionsManageCases;
    }

    /**
     * Sets a new maximumPermissionsManageCases
     *
     * @param bool $maximumPermissionsManageCases
     * @return self
     */
    public function setMaximumPermissionsManageCases($maximumPermissionsManageCases)
    {
        $this->maximumPermissionsManageCases = $maximumPermissionsManageCases;
        return $this;
    }

    /**
     * Gets as maximumPermissionsManageCategories
     *
     * @return bool
     */
    public function getMaximumPermissionsManageCategories()
    {
        return $this->maximumPermissionsManageCategories;
    }

    /**
     * Sets a new maximumPermissionsManageCategories
     *
     * @param bool $maximumPermissionsManageCategories
     * @return self
     */
    public function setMaximumPermissionsManageCategories($maximumPermissionsManageCategories)
    {
        $this->maximumPermissionsManageCategories = $maximumPermissionsManageCategories;
        return $this;
    }

    /**
     * Gets as maximumPermissionsManageCertificates
     *
     * @return bool
     */
    public function getMaximumPermissionsManageCertificates()
    {
        return $this->maximumPermissionsManageCertificates;
    }

    /**
     * Sets a new maximumPermissionsManageCertificates
     *
     * @param bool $maximumPermissionsManageCertificates
     * @return self
     */
    public function setMaximumPermissionsManageCertificates($maximumPermissionsManageCertificates)
    {
        $this->maximumPermissionsManageCertificates = $maximumPermissionsManageCertificates;
        return $this;
    }

    /**
     * Gets as maximumPermissionsManageChatterMessages
     *
     * @return bool
     */
    public function getMaximumPermissionsManageChatterMessages()
    {
        return $this->maximumPermissionsManageChatterMessages;
    }

    /**
     * Sets a new maximumPermissionsManageChatterMessages
     *
     * @param bool $maximumPermissionsManageChatterMessages
     * @return self
     */
    public function setMaximumPermissionsManageChatterMessages($maximumPermissionsManageChatterMessages)
    {
        $this->maximumPermissionsManageChatterMessages = $maximumPermissionsManageChatterMessages;
        return $this;
    }

    /**
     * Gets as maximumPermissionsManageContentPermissions
     *
     * @return bool
     */
    public function getMaximumPermissionsManageContentPermissions()
    {
        return $this->maximumPermissionsManageContentPermissions;
    }

    /**
     * Sets a new maximumPermissionsManageContentPermissions
     *
     * @param bool $maximumPermissionsManageContentPermissions
     * @return self
     */
    public function setMaximumPermissionsManageContentPermissions($maximumPermissionsManageContentPermissions)
    {
        $this->maximumPermissionsManageContentPermissions = $maximumPermissionsManageContentPermissions;
        return $this;
    }

    /**
     * Gets as maximumPermissionsManageContentProperties
     *
     * @return bool
     */
    public function getMaximumPermissionsManageContentProperties()
    {
        return $this->maximumPermissionsManageContentProperties;
    }

    /**
     * Sets a new maximumPermissionsManageContentProperties
     *
     * @param bool $maximumPermissionsManageContentProperties
     * @return self
     */
    public function setMaximumPermissionsManageContentProperties($maximumPermissionsManageContentProperties)
    {
        $this->maximumPermissionsManageContentProperties = $maximumPermissionsManageContentProperties;
        return $this;
    }

    /**
     * Gets as maximumPermissionsManageContentTypes
     *
     * @return bool
     */
    public function getMaximumPermissionsManageContentTypes()
    {
        return $this->maximumPermissionsManageContentTypes;
    }

    /**
     * Sets a new maximumPermissionsManageContentTypes
     *
     * @param bool $maximumPermissionsManageContentTypes
     * @return self
     */
    public function setMaximumPermissionsManageContentTypes($maximumPermissionsManageContentTypes)
    {
        $this->maximumPermissionsManageContentTypes = $maximumPermissionsManageContentTypes;
        return $this;
    }

    /**
     * Gets as maximumPermissionsManageCustomPermissions
     *
     * @return bool
     */
    public function getMaximumPermissionsManageCustomPermissions()
    {
        return $this->maximumPermissionsManageCustomPermissions;
    }

    /**
     * Sets a new maximumPermissionsManageCustomPermissions
     *
     * @param bool $maximumPermissionsManageCustomPermissions
     * @return self
     */
    public function setMaximumPermissionsManageCustomPermissions($maximumPermissionsManageCustomPermissions)
    {
        $this->maximumPermissionsManageCustomPermissions = $maximumPermissionsManageCustomPermissions;
        return $this;
    }

    /**
     * Gets as maximumPermissionsManageCustomReportTypes
     *
     * @return bool
     */
    public function getMaximumPermissionsManageCustomReportTypes()
    {
        return $this->maximumPermissionsManageCustomReportTypes;
    }

    /**
     * Sets a new maximumPermissionsManageCustomReportTypes
     *
     * @param bool $maximumPermissionsManageCustomReportTypes
     * @return self
     */
    public function setMaximumPermissionsManageCustomReportTypes($maximumPermissionsManageCustomReportTypes)
    {
        $this->maximumPermissionsManageCustomReportTypes = $maximumPermissionsManageCustomReportTypes;
        return $this;
    }

    /**
     * Gets as maximumPermissionsManageDashbdsInPubFolders
     *
     * @return bool
     */
    public function getMaximumPermissionsManageDashbdsInPubFolders()
    {
        return $this->maximumPermissionsManageDashbdsInPubFolders;
    }

    /**
     * Sets a new maximumPermissionsManageDashbdsInPubFolders
     *
     * @param bool $maximumPermissionsManageDashbdsInPubFolders
     * @return self
     */
    public function setMaximumPermissionsManageDashbdsInPubFolders($maximumPermissionsManageDashbdsInPubFolders)
    {
        $this->maximumPermissionsManageDashbdsInPubFolders = $maximumPermissionsManageDashbdsInPubFolders;
        return $this;
    }

    /**
     * Gets as maximumPermissionsManageDataCategories
     *
     * @return bool
     */
    public function getMaximumPermissionsManageDataCategories()
    {
        return $this->maximumPermissionsManageDataCategories;
    }

    /**
     * Sets a new maximumPermissionsManageDataCategories
     *
     * @param bool $maximumPermissionsManageDataCategories
     * @return self
     */
    public function setMaximumPermissionsManageDataCategories($maximumPermissionsManageDataCategories)
    {
        $this->maximumPermissionsManageDataCategories = $maximumPermissionsManageDataCategories;
        return $this;
    }

    /**
     * Gets as maximumPermissionsManageDataIntegrations
     *
     * @return bool
     */
    public function getMaximumPermissionsManageDataIntegrations()
    {
        return $this->maximumPermissionsManageDataIntegrations;
    }

    /**
     * Sets a new maximumPermissionsManageDataIntegrations
     *
     * @param bool $maximumPermissionsManageDataIntegrations
     * @return self
     */
    public function setMaximumPermissionsManageDataIntegrations($maximumPermissionsManageDataIntegrations)
    {
        $this->maximumPermissionsManageDataIntegrations = $maximumPermissionsManageDataIntegrations;
        return $this;
    }

    /**
     * Gets as maximumPermissionsManageDynamicDashboards
     *
     * @return bool
     */
    public function getMaximumPermissionsManageDynamicDashboards()
    {
        return $this->maximumPermissionsManageDynamicDashboards;
    }

    /**
     * Sets a new maximumPermissionsManageDynamicDashboards
     *
     * @param bool $maximumPermissionsManageDynamicDashboards
     * @return self
     */
    public function setMaximumPermissionsManageDynamicDashboards($maximumPermissionsManageDynamicDashboards)
    {
        $this->maximumPermissionsManageDynamicDashboards = $maximumPermissionsManageDynamicDashboards;
        return $this;
    }

    /**
     * Gets as maximumPermissionsManageEmailClientConfig
     *
     * @return bool
     */
    public function getMaximumPermissionsManageEmailClientConfig()
    {
        return $this->maximumPermissionsManageEmailClientConfig;
    }

    /**
     * Sets a new maximumPermissionsManageEmailClientConfig
     *
     * @param bool $maximumPermissionsManageEmailClientConfig
     * @return self
     */
    public function setMaximumPermissionsManageEmailClientConfig($maximumPermissionsManageEmailClientConfig)
    {
        $this->maximumPermissionsManageEmailClientConfig = $maximumPermissionsManageEmailClientConfig;
        return $this;
    }

    /**
     * Gets as maximumPermissionsManageEncryptionKeys
     *
     * @return bool
     */
    public function getMaximumPermissionsManageEncryptionKeys()
    {
        return $this->maximumPermissionsManageEncryptionKeys;
    }

    /**
     * Sets a new maximumPermissionsManageEncryptionKeys
     *
     * @param bool $maximumPermissionsManageEncryptionKeys
     * @return self
     */
    public function setMaximumPermissionsManageEncryptionKeys($maximumPermissionsManageEncryptionKeys)
    {
        $this->maximumPermissionsManageEncryptionKeys = $maximumPermissionsManageEncryptionKeys;
        return $this;
    }

    /**
     * Gets as maximumPermissionsManageExchangeConfig
     *
     * @return bool
     */
    public function getMaximumPermissionsManageExchangeConfig()
    {
        return $this->maximumPermissionsManageExchangeConfig;
    }

    /**
     * Sets a new maximumPermissionsManageExchangeConfig
     *
     * @param bool $maximumPermissionsManageExchangeConfig
     * @return self
     */
    public function setMaximumPermissionsManageExchangeConfig($maximumPermissionsManageExchangeConfig)
    {
        $this->maximumPermissionsManageExchangeConfig = $maximumPermissionsManageExchangeConfig;
        return $this;
    }

    /**
     * Gets as maximumPermissionsManageHealthCheck
     *
     * @return bool
     */
    public function getMaximumPermissionsManageHealthCheck()
    {
        return $this->maximumPermissionsManageHealthCheck;
    }

    /**
     * Sets a new maximumPermissionsManageHealthCheck
     *
     * @param bool $maximumPermissionsManageHealthCheck
     * @return self
     */
    public function setMaximumPermissionsManageHealthCheck($maximumPermissionsManageHealthCheck)
    {
        $this->maximumPermissionsManageHealthCheck = $maximumPermissionsManageHealthCheck;
        return $this;
    }

    /**
     * Gets as maximumPermissionsManageInteraction
     *
     * @return bool
     */
    public function getMaximumPermissionsManageInteraction()
    {
        return $this->maximumPermissionsManageInteraction;
    }

    /**
     * Sets a new maximumPermissionsManageInteraction
     *
     * @param bool $maximumPermissionsManageInteraction
     * @return self
     */
    public function setMaximumPermissionsManageInteraction($maximumPermissionsManageInteraction)
    {
        $this->maximumPermissionsManageInteraction = $maximumPermissionsManageInteraction;
        return $this;
    }

    /**
     * Gets as maximumPermissionsManageInternalUsers
     *
     * @return bool
     */
    public function getMaximumPermissionsManageInternalUsers()
    {
        return $this->maximumPermissionsManageInternalUsers;
    }

    /**
     * Sets a new maximumPermissionsManageInternalUsers
     *
     * @param bool $maximumPermissionsManageInternalUsers
     * @return self
     */
    public function setMaximumPermissionsManageInternalUsers($maximumPermissionsManageInternalUsers)
    {
        $this->maximumPermissionsManageInternalUsers = $maximumPermissionsManageInternalUsers;
        return $this;
    }

    /**
     * Gets as maximumPermissionsManageIpAddresses
     *
     * @return bool
     */
    public function getMaximumPermissionsManageIpAddresses()
    {
        return $this->maximumPermissionsManageIpAddresses;
    }

    /**
     * Sets a new maximumPermissionsManageIpAddresses
     *
     * @param bool $maximumPermissionsManageIpAddresses
     * @return self
     */
    public function setMaximumPermissionsManageIpAddresses($maximumPermissionsManageIpAddresses)
    {
        $this->maximumPermissionsManageIpAddresses = $maximumPermissionsManageIpAddresses;
        return $this;
    }

    /**
     * Gets as maximumPermissionsManageKnowledge
     *
     * @return bool
     */
    public function getMaximumPermissionsManageKnowledge()
    {
        return $this->maximumPermissionsManageKnowledge;
    }

    /**
     * Sets a new maximumPermissionsManageKnowledge
     *
     * @param bool $maximumPermissionsManageKnowledge
     * @return self
     */
    public function setMaximumPermissionsManageKnowledge($maximumPermissionsManageKnowledge)
    {
        $this->maximumPermissionsManageKnowledge = $maximumPermissionsManageKnowledge;
        return $this;
    }

    /**
     * Gets as maximumPermissionsManageKnowledgeImportExport
     *
     * @return bool
     */
    public function getMaximumPermissionsManageKnowledgeImportExport()
    {
        return $this->maximumPermissionsManageKnowledgeImportExport;
    }

    /**
     * Sets a new maximumPermissionsManageKnowledgeImportExport
     *
     * @param bool $maximumPermissionsManageKnowledgeImportExport
     * @return self
     */
    public function setMaximumPermissionsManageKnowledgeImportExport($maximumPermissionsManageKnowledgeImportExport)
    {
        $this->maximumPermissionsManageKnowledgeImportExport = $maximumPermissionsManageKnowledgeImportExport;
        return $this;
    }

    /**
     * Gets as maximumPermissionsManageLeads
     *
     * @return bool
     */
    public function getMaximumPermissionsManageLeads()
    {
        return $this->maximumPermissionsManageLeads;
    }

    /**
     * Sets a new maximumPermissionsManageLeads
     *
     * @param bool $maximumPermissionsManageLeads
     * @return self
     */
    public function setMaximumPermissionsManageLeads($maximumPermissionsManageLeads)
    {
        $this->maximumPermissionsManageLeads = $maximumPermissionsManageLeads;
        return $this;
    }

    /**
     * Gets as maximumPermissionsManageLoginAccessPolicies
     *
     * @return bool
     */
    public function getMaximumPermissionsManageLoginAccessPolicies()
    {
        return $this->maximumPermissionsManageLoginAccessPolicies;
    }

    /**
     * Sets a new maximumPermissionsManageLoginAccessPolicies
     *
     * @param bool $maximumPermissionsManageLoginAccessPolicies
     * @return self
     */
    public function setMaximumPermissionsManageLoginAccessPolicies($maximumPermissionsManageLoginAccessPolicies)
    {
        $this->maximumPermissionsManageLoginAccessPolicies = $maximumPermissionsManageLoginAccessPolicies;
        return $this;
    }

    /**
     * Gets as maximumPermissionsManageMobile
     *
     * @return bool
     */
    public function getMaximumPermissionsManageMobile()
    {
        return $this->maximumPermissionsManageMobile;
    }

    /**
     * Sets a new maximumPermissionsManageMobile
     *
     * @param bool $maximumPermissionsManageMobile
     * @return self
     */
    public function setMaximumPermissionsManageMobile($maximumPermissionsManageMobile)
    {
        $this->maximumPermissionsManageMobile = $maximumPermissionsManageMobile;
        return $this;
    }

    /**
     * Gets as maximumPermissionsManageNetworks
     *
     * @return bool
     */
    public function getMaximumPermissionsManageNetworks()
    {
        return $this->maximumPermissionsManageNetworks;
    }

    /**
     * Sets a new maximumPermissionsManageNetworks
     *
     * @param bool $maximumPermissionsManageNetworks
     * @return self
     */
    public function setMaximumPermissionsManageNetworks($maximumPermissionsManageNetworks)
    {
        $this->maximumPermissionsManageNetworks = $maximumPermissionsManageNetworks;
        return $this;
    }

    /**
     * Gets as maximumPermissionsManagePasswordPolicies
     *
     * @return bool
     */
    public function getMaximumPermissionsManagePasswordPolicies()
    {
        return $this->maximumPermissionsManagePasswordPolicies;
    }

    /**
     * Sets a new maximumPermissionsManagePasswordPolicies
     *
     * @param bool $maximumPermissionsManagePasswordPolicies
     * @return self
     */
    public function setMaximumPermissionsManagePasswordPolicies($maximumPermissionsManagePasswordPolicies)
    {
        $this->maximumPermissionsManagePasswordPolicies = $maximumPermissionsManagePasswordPolicies;
        return $this;
    }

    /**
     * Gets as maximumPermissionsManageProfilesPermissionsets
     *
     * @return bool
     */
    public function getMaximumPermissionsManageProfilesPermissionsets()
    {
        return $this->maximumPermissionsManageProfilesPermissionsets;
    }

    /**
     * Sets a new maximumPermissionsManageProfilesPermissionsets
     *
     * @param bool $maximumPermissionsManageProfilesPermissionsets
     * @return self
     */
    public function setMaximumPermissionsManageProfilesPermissionsets($maximumPermissionsManageProfilesPermissionsets)
    {
        $this->maximumPermissionsManageProfilesPermissionsets = $maximumPermissionsManageProfilesPermissionsets;
        return $this;
    }

    /**
     * Gets as maximumPermissionsManagePvtRptsAndDashbds
     *
     * @return bool
     */
    public function getMaximumPermissionsManagePvtRptsAndDashbds()
    {
        return $this->maximumPermissionsManagePvtRptsAndDashbds;
    }

    /**
     * Sets a new maximumPermissionsManagePvtRptsAndDashbds
     *
     * @param bool $maximumPermissionsManagePvtRptsAndDashbds
     * @return self
     */
    public function setMaximumPermissionsManagePvtRptsAndDashbds($maximumPermissionsManagePvtRptsAndDashbds)
    {
        $this->maximumPermissionsManagePvtRptsAndDashbds = $maximumPermissionsManagePvtRptsAndDashbds;
        return $this;
    }

    /**
     * Gets as maximumPermissionsManageRemoteAccess
     *
     * @return bool
     */
    public function getMaximumPermissionsManageRemoteAccess()
    {
        return $this->maximumPermissionsManageRemoteAccess;
    }

    /**
     * Sets a new maximumPermissionsManageRemoteAccess
     *
     * @param bool $maximumPermissionsManageRemoteAccess
     * @return self
     */
    public function setMaximumPermissionsManageRemoteAccess($maximumPermissionsManageRemoteAccess)
    {
        $this->maximumPermissionsManageRemoteAccess = $maximumPermissionsManageRemoteAccess;
        return $this;
    }

    /**
     * Gets as maximumPermissionsManageReportsInPubFolders
     *
     * @return bool
     */
    public function getMaximumPermissionsManageReportsInPubFolders()
    {
        return $this->maximumPermissionsManageReportsInPubFolders;
    }

    /**
     * Sets a new maximumPermissionsManageReportsInPubFolders
     *
     * @param bool $maximumPermissionsManageReportsInPubFolders
     * @return self
     */
    public function setMaximumPermissionsManageReportsInPubFolders($maximumPermissionsManageReportsInPubFolders)
    {
        $this->maximumPermissionsManageReportsInPubFolders = $maximumPermissionsManageReportsInPubFolders;
        return $this;
    }

    /**
     * Gets as maximumPermissionsManageRoles
     *
     * @return bool
     */
    public function getMaximumPermissionsManageRoles()
    {
        return $this->maximumPermissionsManageRoles;
    }

    /**
     * Sets a new maximumPermissionsManageRoles
     *
     * @param bool $maximumPermissionsManageRoles
     * @return self
     */
    public function setMaximumPermissionsManageRoles($maximumPermissionsManageRoles)
    {
        $this->maximumPermissionsManageRoles = $maximumPermissionsManageRoles;
        return $this;
    }

    /**
     * Gets as maximumPermissionsManageSearchPromotionRules
     *
     * @return bool
     */
    public function getMaximumPermissionsManageSearchPromotionRules()
    {
        return $this->maximumPermissionsManageSearchPromotionRules;
    }

    /**
     * Sets a new maximumPermissionsManageSearchPromotionRules
     *
     * @param bool $maximumPermissionsManageSearchPromotionRules
     * @return self
     */
    public function setMaximumPermissionsManageSearchPromotionRules($maximumPermissionsManageSearchPromotionRules)
    {
        $this->maximumPermissionsManageSearchPromotionRules = $maximumPermissionsManageSearchPromotionRules;
        return $this;
    }

    /**
     * Gets as maximumPermissionsManageSessionPermissionSets
     *
     * @return bool
     */
    public function getMaximumPermissionsManageSessionPermissionSets()
    {
        return $this->maximumPermissionsManageSessionPermissionSets;
    }

    /**
     * Sets a new maximumPermissionsManageSessionPermissionSets
     *
     * @param bool $maximumPermissionsManageSessionPermissionSets
     * @return self
     */
    public function setMaximumPermissionsManageSessionPermissionSets($maximumPermissionsManageSessionPermissionSets)
    {
        $this->maximumPermissionsManageSessionPermissionSets = $maximumPermissionsManageSessionPermissionSets;
        return $this;
    }

    /**
     * Gets as maximumPermissionsManageSharing
     *
     * @return bool
     */
    public function getMaximumPermissionsManageSharing()
    {
        return $this->maximumPermissionsManageSharing;
    }

    /**
     * Sets a new maximumPermissionsManageSharing
     *
     * @param bool $maximumPermissionsManageSharing
     * @return self
     */
    public function setMaximumPermissionsManageSharing($maximumPermissionsManageSharing)
    {
        $this->maximumPermissionsManageSharing = $maximumPermissionsManageSharing;
        return $this;
    }

    /**
     * Gets as maximumPermissionsManageSolutions
     *
     * @return bool
     */
    public function getMaximumPermissionsManageSolutions()
    {
        return $this->maximumPermissionsManageSolutions;
    }

    /**
     * Sets a new maximumPermissionsManageSolutions
     *
     * @param bool $maximumPermissionsManageSolutions
     * @return self
     */
    public function setMaximumPermissionsManageSolutions($maximumPermissionsManageSolutions)
    {
        $this->maximumPermissionsManageSolutions = $maximumPermissionsManageSolutions;
        return $this;
    }

    /**
     * Gets as maximumPermissionsManageSurveys
     *
     * @return bool
     */
    public function getMaximumPermissionsManageSurveys()
    {
        return $this->maximumPermissionsManageSurveys;
    }

    /**
     * Sets a new maximumPermissionsManageSurveys
     *
     * @param bool $maximumPermissionsManageSurveys
     * @return self
     */
    public function setMaximumPermissionsManageSurveys($maximumPermissionsManageSurveys)
    {
        $this->maximumPermissionsManageSurveys = $maximumPermissionsManageSurveys;
        return $this;
    }

    /**
     * Gets as maximumPermissionsManageSynonyms
     *
     * @return bool
     */
    public function getMaximumPermissionsManageSynonyms()
    {
        return $this->maximumPermissionsManageSynonyms;
    }

    /**
     * Sets a new maximumPermissionsManageSynonyms
     *
     * @param bool $maximumPermissionsManageSynonyms
     * @return self
     */
    public function setMaximumPermissionsManageSynonyms($maximumPermissionsManageSynonyms)
    {
        $this->maximumPermissionsManageSynonyms = $maximumPermissionsManageSynonyms;
        return $this;
    }

    /**
     * Gets as maximumPermissionsManageTemplatedApp
     *
     * @return bool
     */
    public function getMaximumPermissionsManageTemplatedApp()
    {
        return $this->maximumPermissionsManageTemplatedApp;
    }

    /**
     * Sets a new maximumPermissionsManageTemplatedApp
     *
     * @param bool $maximumPermissionsManageTemplatedApp
     * @return self
     */
    public function setMaximumPermissionsManageTemplatedApp($maximumPermissionsManageTemplatedApp)
    {
        $this->maximumPermissionsManageTemplatedApp = $maximumPermissionsManageTemplatedApp;
        return $this;
    }

    /**
     * Gets as maximumPermissionsManageTwoFactor
     *
     * @return bool
     */
    public function getMaximumPermissionsManageTwoFactor()
    {
        return $this->maximumPermissionsManageTwoFactor;
    }

    /**
     * Sets a new maximumPermissionsManageTwoFactor
     *
     * @param bool $maximumPermissionsManageTwoFactor
     * @return self
     */
    public function setMaximumPermissionsManageTwoFactor($maximumPermissionsManageTwoFactor)
    {
        $this->maximumPermissionsManageTwoFactor = $maximumPermissionsManageTwoFactor;
        return $this;
    }

    /**
     * Gets as maximumPermissionsManageUnlistedGroups
     *
     * @return bool
     */
    public function getMaximumPermissionsManageUnlistedGroups()
    {
        return $this->maximumPermissionsManageUnlistedGroups;
    }

    /**
     * Sets a new maximumPermissionsManageUnlistedGroups
     *
     * @param bool $maximumPermissionsManageUnlistedGroups
     * @return self
     */
    public function setMaximumPermissionsManageUnlistedGroups($maximumPermissionsManageUnlistedGroups)
    {
        $this->maximumPermissionsManageUnlistedGroups = $maximumPermissionsManageUnlistedGroups;
        return $this;
    }

    /**
     * Gets as maximumPermissionsManageUsers
     *
     * @return bool
     */
    public function getMaximumPermissionsManageUsers()
    {
        return $this->maximumPermissionsManageUsers;
    }

    /**
     * Sets a new maximumPermissionsManageUsers
     *
     * @param bool $maximumPermissionsManageUsers
     * @return self
     */
    public function setMaximumPermissionsManageUsers($maximumPermissionsManageUsers)
    {
        $this->maximumPermissionsManageUsers = $maximumPermissionsManageUsers;
        return $this;
    }

    /**
     * Gets as maximumPermissionsMassInlineEdit
     *
     * @return bool
     */
    public function getMaximumPermissionsMassInlineEdit()
    {
        return $this->maximumPermissionsMassInlineEdit;
    }

    /**
     * Sets a new maximumPermissionsMassInlineEdit
     *
     * @param bool $maximumPermissionsMassInlineEdit
     * @return self
     */
    public function setMaximumPermissionsMassInlineEdit($maximumPermissionsMassInlineEdit)
    {
        $this->maximumPermissionsMassInlineEdit = $maximumPermissionsMassInlineEdit;
        return $this;
    }

    /**
     * Gets as maximumPermissionsMergeTopics
     *
     * @return bool
     */
    public function getMaximumPermissionsMergeTopics()
    {
        return $this->maximumPermissionsMergeTopics;
    }

    /**
     * Sets a new maximumPermissionsMergeTopics
     *
     * @param bool $maximumPermissionsMergeTopics
     * @return self
     */
    public function setMaximumPermissionsMergeTopics($maximumPermissionsMergeTopics)
    {
        $this->maximumPermissionsMergeTopics = $maximumPermissionsMergeTopics;
        return $this;
    }

    /**
     * Gets as maximumPermissionsModerateChatter
     *
     * @return bool
     */
    public function getMaximumPermissionsModerateChatter()
    {
        return $this->maximumPermissionsModerateChatter;
    }

    /**
     * Sets a new maximumPermissionsModerateChatter
     *
     * @param bool $maximumPermissionsModerateChatter
     * @return self
     */
    public function setMaximumPermissionsModerateChatter($maximumPermissionsModerateChatter)
    {
        $this->maximumPermissionsModerateChatter = $maximumPermissionsModerateChatter;
        return $this;
    }

    /**
     * Gets as maximumPermissionsModerateNetworkUsers
     *
     * @return bool
     */
    public function getMaximumPermissionsModerateNetworkUsers()
    {
        return $this->maximumPermissionsModerateNetworkUsers;
    }

    /**
     * Sets a new maximumPermissionsModerateNetworkUsers
     *
     * @param bool $maximumPermissionsModerateNetworkUsers
     * @return self
     */
    public function setMaximumPermissionsModerateNetworkUsers($maximumPermissionsModerateNetworkUsers)
    {
        $this->maximumPermissionsModerateNetworkUsers = $maximumPermissionsModerateNetworkUsers;
        return $this;
    }

    /**
     * Gets as maximumPermissionsModifyAllData
     *
     * @return bool
     */
    public function getMaximumPermissionsModifyAllData()
    {
        return $this->maximumPermissionsModifyAllData;
    }

    /**
     * Sets a new maximumPermissionsModifyAllData
     *
     * @param bool $maximumPermissionsModifyAllData
     * @return self
     */
    public function setMaximumPermissionsModifyAllData($maximumPermissionsModifyAllData)
    {
        $this->maximumPermissionsModifyAllData = $maximumPermissionsModifyAllData;
        return $this;
    }

    /**
     * Gets as maximumPermissionsModifyMetadata
     *
     * @return bool
     */
    public function getMaximumPermissionsModifyMetadata()
    {
        return $this->maximumPermissionsModifyMetadata;
    }

    /**
     * Sets a new maximumPermissionsModifyMetadata
     *
     * @param bool $maximumPermissionsModifyMetadata
     * @return self
     */
    public function setMaximumPermissionsModifyMetadata($maximumPermissionsModifyMetadata)
    {
        $this->maximumPermissionsModifyMetadata = $maximumPermissionsModifyMetadata;
        return $this;
    }

    /**
     * Gets as maximumPermissionsModifySecureAgents
     *
     * @return bool
     */
    public function getMaximumPermissionsModifySecureAgents()
    {
        return $this->maximumPermissionsModifySecureAgents;
    }

    /**
     * Sets a new maximumPermissionsModifySecureAgents
     *
     * @param bool $maximumPermissionsModifySecureAgents
     * @return self
     */
    public function setMaximumPermissionsModifySecureAgents($maximumPermissionsModifySecureAgents)
    {
        $this->maximumPermissionsModifySecureAgents = $maximumPermissionsModifySecureAgents;
        return $this;
    }

    /**
     * Gets as maximumPermissionsNewReportBuilder
     *
     * @return bool
     */
    public function getMaximumPermissionsNewReportBuilder()
    {
        return $this->maximumPermissionsNewReportBuilder;
    }

    /**
     * Sets a new maximumPermissionsNewReportBuilder
     *
     * @param bool $maximumPermissionsNewReportBuilder
     * @return self
     */
    public function setMaximumPermissionsNewReportBuilder($maximumPermissionsNewReportBuilder)
    {
        $this->maximumPermissionsNewReportBuilder = $maximumPermissionsNewReportBuilder;
        return $this;
    }

    /**
     * Gets as maximumPermissionsPackaging2
     *
     * @return bool
     */
    public function getMaximumPermissionsPackaging2()
    {
        return $this->maximumPermissionsPackaging2;
    }

    /**
     * Sets a new maximumPermissionsPackaging2
     *
     * @param bool $maximumPermissionsPackaging2
     * @return self
     */
    public function setMaximumPermissionsPackaging2($maximumPermissionsPackaging2)
    {
        $this->maximumPermissionsPackaging2 = $maximumPermissionsPackaging2;
        return $this;
    }

    /**
     * Gets as maximumPermissionsPasswordNeverExpires
     *
     * @return bool
     */
    public function getMaximumPermissionsPasswordNeverExpires()
    {
        return $this->maximumPermissionsPasswordNeverExpires;
    }

    /**
     * Sets a new maximumPermissionsPasswordNeverExpires
     *
     * @param bool $maximumPermissionsPasswordNeverExpires
     * @return self
     */
    public function setMaximumPermissionsPasswordNeverExpires($maximumPermissionsPasswordNeverExpires)
    {
        $this->maximumPermissionsPasswordNeverExpires = $maximumPermissionsPasswordNeverExpires;
        return $this;
    }

    /**
     * Gets as maximumPermissionsPreventClassicExperience
     *
     * @return bool
     */
    public function getMaximumPermissionsPreventClassicExperience()
    {
        return $this->maximumPermissionsPreventClassicExperience;
    }

    /**
     * Sets a new maximumPermissionsPreventClassicExperience
     *
     * @param bool $maximumPermissionsPreventClassicExperience
     * @return self
     */
    public function setMaximumPermissionsPreventClassicExperience($maximumPermissionsPreventClassicExperience)
    {
        $this->maximumPermissionsPreventClassicExperience = $maximumPermissionsPreventClassicExperience;
        return $this;
    }

    /**
     * Gets as maximumPermissionsPrivacyDataAccess
     *
     * @return bool
     */
    public function getMaximumPermissionsPrivacyDataAccess()
    {
        return $this->maximumPermissionsPrivacyDataAccess;
    }

    /**
     * Sets a new maximumPermissionsPrivacyDataAccess
     *
     * @param bool $maximumPermissionsPrivacyDataAccess
     * @return self
     */
    public function setMaximumPermissionsPrivacyDataAccess($maximumPermissionsPrivacyDataAccess)
    {
        $this->maximumPermissionsPrivacyDataAccess = $maximumPermissionsPrivacyDataAccess;
        return $this;
    }

    /**
     * Gets as maximumPermissionsPublishPackaging
     *
     * @return bool
     */
    public function getMaximumPermissionsPublishPackaging()
    {
        return $this->maximumPermissionsPublishPackaging;
    }

    /**
     * Sets a new maximumPermissionsPublishPackaging
     *
     * @param bool $maximumPermissionsPublishPackaging
     * @return self
     */
    public function setMaximumPermissionsPublishPackaging($maximumPermissionsPublishPackaging)
    {
        $this->maximumPermissionsPublishPackaging = $maximumPermissionsPublishPackaging;
        return $this;
    }

    /**
     * Gets as maximumPermissionsRemoveDirectMessageMembers
     *
     * @return bool
     */
    public function getMaximumPermissionsRemoveDirectMessageMembers()
    {
        return $this->maximumPermissionsRemoveDirectMessageMembers;
    }

    /**
     * Sets a new maximumPermissionsRemoveDirectMessageMembers
     *
     * @param bool $maximumPermissionsRemoveDirectMessageMembers
     * @return self
     */
    public function setMaximumPermissionsRemoveDirectMessageMembers($maximumPermissionsRemoveDirectMessageMembers)
    {
        $this->maximumPermissionsRemoveDirectMessageMembers = $maximumPermissionsRemoveDirectMessageMembers;
        return $this;
    }

    /**
     * Gets as maximumPermissionsResetPasswords
     *
     * @return bool
     */
    public function getMaximumPermissionsResetPasswords()
    {
        return $this->maximumPermissionsResetPasswords;
    }

    /**
     * Sets a new maximumPermissionsResetPasswords
     *
     * @param bool $maximumPermissionsResetPasswords
     * @return self
     */
    public function setMaximumPermissionsResetPasswords($maximumPermissionsResetPasswords)
    {
        $this->maximumPermissionsResetPasswords = $maximumPermissionsResetPasswords;
        return $this;
    }

    /**
     * Gets as maximumPermissionsRunFlow
     *
     * @return bool
     */
    public function getMaximumPermissionsRunFlow()
    {
        return $this->maximumPermissionsRunFlow;
    }

    /**
     * Sets a new maximumPermissionsRunFlow
     *
     * @param bool $maximumPermissionsRunFlow
     * @return self
     */
    public function setMaximumPermissionsRunFlow($maximumPermissionsRunFlow)
    {
        $this->maximumPermissionsRunFlow = $maximumPermissionsRunFlow;
        return $this;
    }

    /**
     * Gets as maximumPermissionsRunReports
     *
     * @return bool
     */
    public function getMaximumPermissionsRunReports()
    {
        return $this->maximumPermissionsRunReports;
    }

    /**
     * Sets a new maximumPermissionsRunReports
     *
     * @param bool $maximumPermissionsRunReports
     * @return self
     */
    public function setMaximumPermissionsRunReports($maximumPermissionsRunReports)
    {
        $this->maximumPermissionsRunReports = $maximumPermissionsRunReports;
        return $this;
    }

    /**
     * Gets as maximumPermissionsSalesConsole
     *
     * @return bool
     */
    public function getMaximumPermissionsSalesConsole()
    {
        return $this->maximumPermissionsSalesConsole;
    }

    /**
     * Sets a new maximumPermissionsSalesConsole
     *
     * @param bool $maximumPermissionsSalesConsole
     * @return self
     */
    public function setMaximumPermissionsSalesConsole($maximumPermissionsSalesConsole)
    {
        $this->maximumPermissionsSalesConsole = $maximumPermissionsSalesConsole;
        return $this;
    }

    /**
     * Gets as maximumPermissionsScheduleReports
     *
     * @return bool
     */
    public function getMaximumPermissionsScheduleReports()
    {
        return $this->maximumPermissionsScheduleReports;
    }

    /**
     * Sets a new maximumPermissionsScheduleReports
     *
     * @param bool $maximumPermissionsScheduleReports
     * @return self
     */
    public function setMaximumPermissionsScheduleReports($maximumPermissionsScheduleReports)
    {
        $this->maximumPermissionsScheduleReports = $maximumPermissionsScheduleReports;
        return $this;
    }

    /**
     * Gets as maximumPermissionsSelectFilesFromSalesforce
     *
     * @return bool
     */
    public function getMaximumPermissionsSelectFilesFromSalesforce()
    {
        return $this->maximumPermissionsSelectFilesFromSalesforce;
    }

    /**
     * Sets a new maximumPermissionsSelectFilesFromSalesforce
     *
     * @param bool $maximumPermissionsSelectFilesFromSalesforce
     * @return self
     */
    public function setMaximumPermissionsSelectFilesFromSalesforce($maximumPermissionsSelectFilesFromSalesforce)
    {
        $this->maximumPermissionsSelectFilesFromSalesforce = $maximumPermissionsSelectFilesFromSalesforce;
        return $this;
    }

    /**
     * Gets as maximumPermissionsSendAnnouncementEmails
     *
     * @return bool
     */
    public function getMaximumPermissionsSendAnnouncementEmails()
    {
        return $this->maximumPermissionsSendAnnouncementEmails;
    }

    /**
     * Sets a new maximumPermissionsSendAnnouncementEmails
     *
     * @param bool $maximumPermissionsSendAnnouncementEmails
     * @return self
     */
    public function setMaximumPermissionsSendAnnouncementEmails($maximumPermissionsSendAnnouncementEmails)
    {
        $this->maximumPermissionsSendAnnouncementEmails = $maximumPermissionsSendAnnouncementEmails;
        return $this;
    }

    /**
     * Gets as maximumPermissionsSendSitRequests
     *
     * @return bool
     */
    public function getMaximumPermissionsSendSitRequests()
    {
        return $this->maximumPermissionsSendSitRequests;
    }

    /**
     * Sets a new maximumPermissionsSendSitRequests
     *
     * @param bool $maximumPermissionsSendSitRequests
     * @return self
     */
    public function setMaximumPermissionsSendSitRequests($maximumPermissionsSendSitRequests)
    {
        $this->maximumPermissionsSendSitRequests = $maximumPermissionsSendSitRequests;
        return $this;
    }

    /**
     * Gets as maximumPermissionsShareInternalArticles
     *
     * @return bool
     */
    public function getMaximumPermissionsShareInternalArticles()
    {
        return $this->maximumPermissionsShareInternalArticles;
    }

    /**
     * Sets a new maximumPermissionsShareInternalArticles
     *
     * @param bool $maximumPermissionsShareInternalArticles
     * @return self
     */
    public function setMaximumPermissionsShareInternalArticles($maximumPermissionsShareInternalArticles)
    {
        $this->maximumPermissionsShareInternalArticles = $maximumPermissionsShareInternalArticles;
        return $this;
    }

    /**
     * Gets as maximumPermissionsShowCompanyNameAsUserBadge
     *
     * @return bool
     */
    public function getMaximumPermissionsShowCompanyNameAsUserBadge()
    {
        return $this->maximumPermissionsShowCompanyNameAsUserBadge;
    }

    /**
     * Sets a new maximumPermissionsShowCompanyNameAsUserBadge
     *
     * @param bool $maximumPermissionsShowCompanyNameAsUserBadge
     * @return self
     */
    public function setMaximumPermissionsShowCompanyNameAsUserBadge($maximumPermissionsShowCompanyNameAsUserBadge)
    {
        $this->maximumPermissionsShowCompanyNameAsUserBadge = $maximumPermissionsShowCompanyNameAsUserBadge;
        return $this;
    }

    /**
     * Gets as maximumPermissionsSolutionImport
     *
     * @return bool
     */
    public function getMaximumPermissionsSolutionImport()
    {
        return $this->maximumPermissionsSolutionImport;
    }

    /**
     * Sets a new maximumPermissionsSolutionImport
     *
     * @param bool $maximumPermissionsSolutionImport
     * @return self
     */
    public function setMaximumPermissionsSolutionImport($maximumPermissionsSolutionImport)
    {
        $this->maximumPermissionsSolutionImport = $maximumPermissionsSolutionImport;
        return $this;
    }

    /**
     * Gets as maximumPermissionsStdAutomaticActivityCapture
     *
     * @return bool
     */
    public function getMaximumPermissionsStdAutomaticActivityCapture()
    {
        return $this->maximumPermissionsStdAutomaticActivityCapture;
    }

    /**
     * Sets a new maximumPermissionsStdAutomaticActivityCapture
     *
     * @param bool $maximumPermissionsStdAutomaticActivityCapture
     * @return self
     */
    public function setMaximumPermissionsStdAutomaticActivityCapture($maximumPermissionsStdAutomaticActivityCapture)
    {
        $this->maximumPermissionsStdAutomaticActivityCapture = $maximumPermissionsStdAutomaticActivityCapture;
        return $this;
    }

    /**
     * Gets as maximumPermissionsSubmitMacrosAllowed
     *
     * @return bool
     */
    public function getMaximumPermissionsSubmitMacrosAllowed()
    {
        return $this->maximumPermissionsSubmitMacrosAllowed;
    }

    /**
     * Sets a new maximumPermissionsSubmitMacrosAllowed
     *
     * @param bool $maximumPermissionsSubmitMacrosAllowed
     * @return self
     */
    public function setMaximumPermissionsSubmitMacrosAllowed($maximumPermissionsSubmitMacrosAllowed)
    {
        $this->maximumPermissionsSubmitMacrosAllowed = $maximumPermissionsSubmitMacrosAllowed;
        return $this;
    }

    /**
     * Gets as maximumPermissionsSubscribeDashboardToOtherUsers
     *
     * @return bool
     */
    public function getMaximumPermissionsSubscribeDashboardToOtherUsers()
    {
        return $this->maximumPermissionsSubscribeDashboardToOtherUsers;
    }

    /**
     * Sets a new maximumPermissionsSubscribeDashboardToOtherUsers
     *
     * @param bool $maximumPermissionsSubscribeDashboardToOtherUsers
     * @return self
     */
    public function setMaximumPermissionsSubscribeDashboardToOtherUsers($maximumPermissionsSubscribeDashboardToOtherUsers)
    {
        $this->maximumPermissionsSubscribeDashboardToOtherUsers = $maximumPermissionsSubscribeDashboardToOtherUsers;
        return $this;
    }

    /**
     * Gets as maximumPermissionsSubscribeReportToOtherUsers
     *
     * @return bool
     */
    public function getMaximumPermissionsSubscribeReportToOtherUsers()
    {
        return $this->maximumPermissionsSubscribeReportToOtherUsers;
    }

    /**
     * Sets a new maximumPermissionsSubscribeReportToOtherUsers
     *
     * @param bool $maximumPermissionsSubscribeReportToOtherUsers
     * @return self
     */
    public function setMaximumPermissionsSubscribeReportToOtherUsers($maximumPermissionsSubscribeReportToOtherUsers)
    {
        $this->maximumPermissionsSubscribeReportToOtherUsers = $maximumPermissionsSubscribeReportToOtherUsers;
        return $this;
    }

    /**
     * Gets as maximumPermissionsSubscribeReportsRunAsUser
     *
     * @return bool
     */
    public function getMaximumPermissionsSubscribeReportsRunAsUser()
    {
        return $this->maximumPermissionsSubscribeReportsRunAsUser;
    }

    /**
     * Sets a new maximumPermissionsSubscribeReportsRunAsUser
     *
     * @param bool $maximumPermissionsSubscribeReportsRunAsUser
     * @return self
     */
    public function setMaximumPermissionsSubscribeReportsRunAsUser($maximumPermissionsSubscribeReportsRunAsUser)
    {
        $this->maximumPermissionsSubscribeReportsRunAsUser = $maximumPermissionsSubscribeReportsRunAsUser;
        return $this;
    }

    /**
     * Gets as maximumPermissionsSubscribeToLightningDashboards
     *
     * @return bool
     */
    public function getMaximumPermissionsSubscribeToLightningDashboards()
    {
        return $this->maximumPermissionsSubscribeToLightningDashboards;
    }

    /**
     * Sets a new maximumPermissionsSubscribeToLightningDashboards
     *
     * @param bool $maximumPermissionsSubscribeToLightningDashboards
     * @return self
     */
    public function setMaximumPermissionsSubscribeToLightningDashboards($maximumPermissionsSubscribeToLightningDashboards)
    {
        $this->maximumPermissionsSubscribeToLightningDashboards = $maximumPermissionsSubscribeToLightningDashboards;
        return $this;
    }

    /**
     * Gets as maximumPermissionsSubscribeToLightningReports
     *
     * @return bool
     */
    public function getMaximumPermissionsSubscribeToLightningReports()
    {
        return $this->maximumPermissionsSubscribeToLightningReports;
    }

    /**
     * Sets a new maximumPermissionsSubscribeToLightningReports
     *
     * @param bool $maximumPermissionsSubscribeToLightningReports
     * @return self
     */
    public function setMaximumPermissionsSubscribeToLightningReports($maximumPermissionsSubscribeToLightningReports)
    {
        $this->maximumPermissionsSubscribeToLightningReports = $maximumPermissionsSubscribeToLightningReports;
        return $this;
    }

    /**
     * Gets as maximumPermissionsTransferAnyCase
     *
     * @return bool
     */
    public function getMaximumPermissionsTransferAnyCase()
    {
        return $this->maximumPermissionsTransferAnyCase;
    }

    /**
     * Sets a new maximumPermissionsTransferAnyCase
     *
     * @param bool $maximumPermissionsTransferAnyCase
     * @return self
     */
    public function setMaximumPermissionsTransferAnyCase($maximumPermissionsTransferAnyCase)
    {
        $this->maximumPermissionsTransferAnyCase = $maximumPermissionsTransferAnyCase;
        return $this;
    }

    /**
     * Gets as maximumPermissionsTransferAnyEntity
     *
     * @return bool
     */
    public function getMaximumPermissionsTransferAnyEntity()
    {
        return $this->maximumPermissionsTransferAnyEntity;
    }

    /**
     * Sets a new maximumPermissionsTransferAnyEntity
     *
     * @param bool $maximumPermissionsTransferAnyEntity
     * @return self
     */
    public function setMaximumPermissionsTransferAnyEntity($maximumPermissionsTransferAnyEntity)
    {
        $this->maximumPermissionsTransferAnyEntity = $maximumPermissionsTransferAnyEntity;
        return $this;
    }

    /**
     * Gets as maximumPermissionsTransferAnyLead
     *
     * @return bool
     */
    public function getMaximumPermissionsTransferAnyLead()
    {
        return $this->maximumPermissionsTransferAnyLead;
    }

    /**
     * Sets a new maximumPermissionsTransferAnyLead
     *
     * @param bool $maximumPermissionsTransferAnyLead
     * @return self
     */
    public function setMaximumPermissionsTransferAnyLead($maximumPermissionsTransferAnyLead)
    {
        $this->maximumPermissionsTransferAnyLead = $maximumPermissionsTransferAnyLead;
        return $this;
    }

    /**
     * Gets as maximumPermissionsTwoFactorApi
     *
     * @return bool
     */
    public function getMaximumPermissionsTwoFactorApi()
    {
        return $this->maximumPermissionsTwoFactorApi;
    }

    /**
     * Sets a new maximumPermissionsTwoFactorApi
     *
     * @param bool $maximumPermissionsTwoFactorApi
     * @return self
     */
    public function setMaximumPermissionsTwoFactorApi($maximumPermissionsTwoFactorApi)
    {
        $this->maximumPermissionsTwoFactorApi = $maximumPermissionsTwoFactorApi;
        return $this;
    }

    /**
     * Gets as maximumPermissionsUseTeamReassignWizards
     *
     * @return bool
     */
    public function getMaximumPermissionsUseTeamReassignWizards()
    {
        return $this->maximumPermissionsUseTeamReassignWizards;
    }

    /**
     * Sets a new maximumPermissionsUseTeamReassignWizards
     *
     * @param bool $maximumPermissionsUseTeamReassignWizards
     * @return self
     */
    public function setMaximumPermissionsUseTeamReassignWizards($maximumPermissionsUseTeamReassignWizards)
    {
        $this->maximumPermissionsUseTeamReassignWizards = $maximumPermissionsUseTeamReassignWizards;
        return $this;
    }

    /**
     * Gets as maximumPermissionsUseTemplatedApp
     *
     * @return bool
     */
    public function getMaximumPermissionsUseTemplatedApp()
    {
        return $this->maximumPermissionsUseTemplatedApp;
    }

    /**
     * Sets a new maximumPermissionsUseTemplatedApp
     *
     * @param bool $maximumPermissionsUseTemplatedApp
     * @return self
     */
    public function setMaximumPermissionsUseTemplatedApp($maximumPermissionsUseTemplatedApp)
    {
        $this->maximumPermissionsUseTemplatedApp = $maximumPermissionsUseTemplatedApp;
        return $this;
    }

    /**
     * Gets as maximumPermissionsUseWebLink
     *
     * @return bool
     */
    public function getMaximumPermissionsUseWebLink()
    {
        return $this->maximumPermissionsUseWebLink;
    }

    /**
     * Sets a new maximumPermissionsUseWebLink
     *
     * @param bool $maximumPermissionsUseWebLink
     * @return self
     */
    public function setMaximumPermissionsUseWebLink($maximumPermissionsUseWebLink)
    {
        $this->maximumPermissionsUseWebLink = $maximumPermissionsUseWebLink;
        return $this;
    }

    /**
     * Gets as maximumPermissionsViewAllActivities
     *
     * @return bool
     */
    public function getMaximumPermissionsViewAllActivities()
    {
        return $this->maximumPermissionsViewAllActivities;
    }

    /**
     * Sets a new maximumPermissionsViewAllActivities
     *
     * @param bool $maximumPermissionsViewAllActivities
     * @return self
     */
    public function setMaximumPermissionsViewAllActivities($maximumPermissionsViewAllActivities)
    {
        $this->maximumPermissionsViewAllActivities = $maximumPermissionsViewAllActivities;
        return $this;
    }

    /**
     * Gets as maximumPermissionsViewAllData
     *
     * @return bool
     */
    public function getMaximumPermissionsViewAllData()
    {
        return $this->maximumPermissionsViewAllData;
    }

    /**
     * Sets a new maximumPermissionsViewAllData
     *
     * @param bool $maximumPermissionsViewAllData
     * @return self
     */
    public function setMaximumPermissionsViewAllData($maximumPermissionsViewAllData)
    {
        $this->maximumPermissionsViewAllData = $maximumPermissionsViewAllData;
        return $this;
    }

    /**
     * Gets as maximumPermissionsViewAllUsers
     *
     * @return bool
     */
    public function getMaximumPermissionsViewAllUsers()
    {
        return $this->maximumPermissionsViewAllUsers;
    }

    /**
     * Sets a new maximumPermissionsViewAllUsers
     *
     * @param bool $maximumPermissionsViewAllUsers
     * @return self
     */
    public function setMaximumPermissionsViewAllUsers($maximumPermissionsViewAllUsers)
    {
        $this->maximumPermissionsViewAllUsers = $maximumPermissionsViewAllUsers;
        return $this;
    }

    /**
     * Gets as maximumPermissionsViewContent
     *
     * @return bool
     */
    public function getMaximumPermissionsViewContent()
    {
        return $this->maximumPermissionsViewContent;
    }

    /**
     * Sets a new maximumPermissionsViewContent
     *
     * @param bool $maximumPermissionsViewContent
     * @return self
     */
    public function setMaximumPermissionsViewContent($maximumPermissionsViewContent)
    {
        $this->maximumPermissionsViewContent = $maximumPermissionsViewContent;
        return $this;
    }

    /**
     * Gets as maximumPermissionsViewDataAssessment
     *
     * @return bool
     */
    public function getMaximumPermissionsViewDataAssessment()
    {
        return $this->maximumPermissionsViewDataAssessment;
    }

    /**
     * Sets a new maximumPermissionsViewDataAssessment
     *
     * @param bool $maximumPermissionsViewDataAssessment
     * @return self
     */
    public function setMaximumPermissionsViewDataAssessment($maximumPermissionsViewDataAssessment)
    {
        $this->maximumPermissionsViewDataAssessment = $maximumPermissionsViewDataAssessment;
        return $this;
    }

    /**
     * Gets as maximumPermissionsViewDataCategories
     *
     * @return bool
     */
    public function getMaximumPermissionsViewDataCategories()
    {
        return $this->maximumPermissionsViewDataCategories;
    }

    /**
     * Sets a new maximumPermissionsViewDataCategories
     *
     * @param bool $maximumPermissionsViewDataCategories
     * @return self
     */
    public function setMaximumPermissionsViewDataCategories($maximumPermissionsViewDataCategories)
    {
        $this->maximumPermissionsViewDataCategories = $maximumPermissionsViewDataCategories;
        return $this;
    }

    /**
     * Gets as maximumPermissionsViewEncryptedData
     *
     * @return bool
     */
    public function getMaximumPermissionsViewEncryptedData()
    {
        return $this->maximumPermissionsViewEncryptedData;
    }

    /**
     * Sets a new maximumPermissionsViewEncryptedData
     *
     * @param bool $maximumPermissionsViewEncryptedData
     * @return self
     */
    public function setMaximumPermissionsViewEncryptedData($maximumPermissionsViewEncryptedData)
    {
        $this->maximumPermissionsViewEncryptedData = $maximumPermissionsViewEncryptedData;
        return $this;
    }

    /**
     * Gets as maximumPermissionsViewEventLogFiles
     *
     * @return bool
     */
    public function getMaximumPermissionsViewEventLogFiles()
    {
        return $this->maximumPermissionsViewEventLogFiles;
    }

    /**
     * Sets a new maximumPermissionsViewEventLogFiles
     *
     * @param bool $maximumPermissionsViewEventLogFiles
     * @return self
     */
    public function setMaximumPermissionsViewEventLogFiles($maximumPermissionsViewEventLogFiles)
    {
        $this->maximumPermissionsViewEventLogFiles = $maximumPermissionsViewEventLogFiles;
        return $this;
    }

    /**
     * Gets as maximumPermissionsViewHealthCheck
     *
     * @return bool
     */
    public function getMaximumPermissionsViewHealthCheck()
    {
        return $this->maximumPermissionsViewHealthCheck;
    }

    /**
     * Sets a new maximumPermissionsViewHealthCheck
     *
     * @param bool $maximumPermissionsViewHealthCheck
     * @return self
     */
    public function setMaximumPermissionsViewHealthCheck($maximumPermissionsViewHealthCheck)
    {
        $this->maximumPermissionsViewHealthCheck = $maximumPermissionsViewHealthCheck;
        return $this;
    }

    /**
     * Gets as maximumPermissionsViewHelpLink
     *
     * @return bool
     */
    public function getMaximumPermissionsViewHelpLink()
    {
        return $this->maximumPermissionsViewHelpLink;
    }

    /**
     * Sets a new maximumPermissionsViewHelpLink
     *
     * @param bool $maximumPermissionsViewHelpLink
     * @return self
     */
    public function setMaximumPermissionsViewHelpLink($maximumPermissionsViewHelpLink)
    {
        $this->maximumPermissionsViewHelpLink = $maximumPermissionsViewHelpLink;
        return $this;
    }

    /**
     * Gets as maximumPermissionsViewMyTeamsDashboards
     *
     * @return bool
     */
    public function getMaximumPermissionsViewMyTeamsDashboards()
    {
        return $this->maximumPermissionsViewMyTeamsDashboards;
    }

    /**
     * Sets a new maximumPermissionsViewMyTeamsDashboards
     *
     * @param bool $maximumPermissionsViewMyTeamsDashboards
     * @return self
     */
    public function setMaximumPermissionsViewMyTeamsDashboards($maximumPermissionsViewMyTeamsDashboards)
    {
        $this->maximumPermissionsViewMyTeamsDashboards = $maximumPermissionsViewMyTeamsDashboards;
        return $this;
    }

    /**
     * Gets as maximumPermissionsViewOnlyEmbeddedAppUser
     *
     * @return bool
     */
    public function getMaximumPermissionsViewOnlyEmbeddedAppUser()
    {
        return $this->maximumPermissionsViewOnlyEmbeddedAppUser;
    }

    /**
     * Sets a new maximumPermissionsViewOnlyEmbeddedAppUser
     *
     * @param bool $maximumPermissionsViewOnlyEmbeddedAppUser
     * @return self
     */
    public function setMaximumPermissionsViewOnlyEmbeddedAppUser($maximumPermissionsViewOnlyEmbeddedAppUser)
    {
        $this->maximumPermissionsViewOnlyEmbeddedAppUser = $maximumPermissionsViewOnlyEmbeddedAppUser;
        return $this;
    }

    /**
     * Gets as maximumPermissionsViewPublicDashboards
     *
     * @return bool
     */
    public function getMaximumPermissionsViewPublicDashboards()
    {
        return $this->maximumPermissionsViewPublicDashboards;
    }

    /**
     * Sets a new maximumPermissionsViewPublicDashboards
     *
     * @param bool $maximumPermissionsViewPublicDashboards
     * @return self
     */
    public function setMaximumPermissionsViewPublicDashboards($maximumPermissionsViewPublicDashboards)
    {
        $this->maximumPermissionsViewPublicDashboards = $maximumPermissionsViewPublicDashboards;
        return $this;
    }

    /**
     * Gets as maximumPermissionsViewPublicReports
     *
     * @return bool
     */
    public function getMaximumPermissionsViewPublicReports()
    {
        return $this->maximumPermissionsViewPublicReports;
    }

    /**
     * Sets a new maximumPermissionsViewPublicReports
     *
     * @param bool $maximumPermissionsViewPublicReports
     * @return self
     */
    public function setMaximumPermissionsViewPublicReports($maximumPermissionsViewPublicReports)
    {
        $this->maximumPermissionsViewPublicReports = $maximumPermissionsViewPublicReports;
        return $this;
    }

    /**
     * Gets as maximumPermissionsViewRoles
     *
     * @return bool
     */
    public function getMaximumPermissionsViewRoles()
    {
        return $this->maximumPermissionsViewRoles;
    }

    /**
     * Sets a new maximumPermissionsViewRoles
     *
     * @param bool $maximumPermissionsViewRoles
     * @return self
     */
    public function setMaximumPermissionsViewRoles($maximumPermissionsViewRoles)
    {
        $this->maximumPermissionsViewRoles = $maximumPermissionsViewRoles;
        return $this;
    }

    /**
     * Gets as maximumPermissionsViewSetup
     *
     * @return bool
     */
    public function getMaximumPermissionsViewSetup()
    {
        return $this->maximumPermissionsViewSetup;
    }

    /**
     * Sets a new maximumPermissionsViewSetup
     *
     * @param bool $maximumPermissionsViewSetup
     * @return self
     */
    public function setMaximumPermissionsViewSetup($maximumPermissionsViewSetup)
    {
        $this->maximumPermissionsViewSetup = $maximumPermissionsViewSetup;
        return $this;
    }

    /**
     * Gets as maximumPermissionsWaveTabularDownload
     *
     * @return bool
     */
    public function getMaximumPermissionsWaveTabularDownload()
    {
        return $this->maximumPermissionsWaveTabularDownload;
    }

    /**
     * Sets a new maximumPermissionsWaveTabularDownload
     *
     * @param bool $maximumPermissionsWaveTabularDownload
     * @return self
     */
    public function setMaximumPermissionsWaveTabularDownload($maximumPermissionsWaveTabularDownload)
    {
        $this->maximumPermissionsWaveTabularDownload = $maximumPermissionsWaveTabularDownload;
        return $this;
    }

    /**
     * Gets as maximumPermissionsWorkCalibrationUser
     *
     * @return bool
     */
    public function getMaximumPermissionsWorkCalibrationUser()
    {
        return $this->maximumPermissionsWorkCalibrationUser;
    }

    /**
     * Sets a new maximumPermissionsWorkCalibrationUser
     *
     * @param bool $maximumPermissionsWorkCalibrationUser
     * @return self
     */
    public function setMaximumPermissionsWorkCalibrationUser($maximumPermissionsWorkCalibrationUser)
    {
        $this->maximumPermissionsWorkCalibrationUser = $maximumPermissionsWorkCalibrationUser;
        return $this;
    }

    /**
     * Gets as maximumPermissionsWorkDotComUserPerm
     *
     * @return bool
     */
    public function getMaximumPermissionsWorkDotComUserPerm()
    {
        return $this->maximumPermissionsWorkDotComUserPerm;
    }

    /**
     * Sets a new maximumPermissionsWorkDotComUserPerm
     *
     * @param bool $maximumPermissionsWorkDotComUserPerm
     * @return self
     */
    public function setMaximumPermissionsWorkDotComUserPerm($maximumPermissionsWorkDotComUserPerm)
    {
        $this->maximumPermissionsWorkDotComUserPerm = $maximumPermissionsWorkDotComUserPerm;
        return $this;
    }

    /**
     * Gets as permissionSetLicenseAssignments
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getPermissionSetLicenseAssignments()
    {
        return $this->permissionSetLicenseAssignments;
    }

    /**
     * Sets a new permissionSetLicenseAssignments
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $permissionSetLicenseAssignments
     * @return self
     */
    public function setPermissionSetLicenseAssignments(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $permissionSetLicenseAssignments)
    {
        $this->permissionSetLicenseAssignments = $permissionSetLicenseAssignments;
        return $this;
    }

    /**
     * Gets as permissionSetLicenseKey
     *
     * @return string
     */
    public function getPermissionSetLicenseKey()
    {
        return $this->permissionSetLicenseKey;
    }

    /**
     * Sets a new permissionSetLicenseKey
     *
     * @param string $permissionSetLicenseKey
     * @return self
     */
    public function setPermissionSetLicenseKey($permissionSetLicenseKey)
    {
        $this->permissionSetLicenseKey = $permissionSetLicenseKey;
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
     * Gets as totalLicenses
     *
     * @return int
     */
    public function getTotalLicenses()
    {
        return $this->totalLicenses;
    }

    /**
     * Sets a new totalLicenses
     *
     * @param int $totalLicenses
     * @return self
     */
    public function setTotalLicenses($totalLicenses)
    {
        $this->totalLicenses = $totalLicenses;
        return $this;
    }

    /**
     * Gets as usedLicenses
     *
     * @return int
     */
    public function getUsedLicenses()
    {
        return $this->usedLicenses;
    }

    /**
     * Sets a new usedLicenses
     *
     * @param int $usedLicenses
     * @return self
     */
    public function setUsedLicenses($usedLicenses)
    {
        $this->usedLicenses = $usedLicenses;
        return $this;
    }


}

