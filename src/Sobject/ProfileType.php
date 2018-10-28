<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing ProfileType
 *
 *
 * XSD Type: Profile
 */
class ProfileType extends SObjectType
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
     * @property string $description
     */
    private $description = null;

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
     * @property \DateTime $lastReferencedDate
     */
    private $lastReferencedDate = null;

    /**
     * @property \DateTime $lastViewedDate
     */
    private $lastViewedDate = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property bool $permissionsAccessCMC
     */
    private $permissionsAccessCMC = null;

    /**
     * @property bool $permissionsActivateContract
     */
    private $permissionsActivateContract = null;

    /**
     * @property bool $permissionsActivateOrder
     */
    private $permissionsActivateOrder = null;

    /**
     * @property bool $permissionsAddAnalyticsRemoteConnections
     */
    private $permissionsAddAnalyticsRemoteConnections = null;

    /**
     * @property bool $permissionsAddDirectMessageMembers
     */
    private $permissionsAddDirectMessageMembers = null;

    /**
     * @property bool $permissionsAllowEmailIC
     */
    private $permissionsAllowEmailIC = null;

    /**
     * @property bool $permissionsAllowLightningLogin
     */
    private $permissionsAllowLightningLogin = null;

    /**
     * @property bool $permissionsAllowUniversalSearch
     */
    private $permissionsAllowUniversalSearch = null;

    /**
     * @property bool $permissionsAllowViewEditConvertedLeads
     */
    private $permissionsAllowViewEditConvertedLeads = null;

    /**
     * @property bool $permissionsAllowViewKnowledge
     */
    private $permissionsAllowViewKnowledge = null;

    /**
     * @property bool $permissionsApexRestServices
     */
    private $permissionsApexRestServices = null;

    /**
     * @property bool $permissionsApiEnabled
     */
    private $permissionsApiEnabled = null;

    /**
     * @property bool $permissionsAssignPermissionSets
     */
    private $permissionsAssignPermissionSets = null;

    /**
     * @property bool $permissionsAssignTopics
     */
    private $permissionsAssignTopics = null;

    /**
     * @property bool $permissionsAuthorApex
     */
    private $permissionsAuthorApex = null;

    /**
     * @property bool $permissionsAutomaticActivityCapture
     */
    private $permissionsAutomaticActivityCapture = null;

    /**
     * @property bool $permissionsBulkApiHardDelete
     */
    private $permissionsBulkApiHardDelete = null;

    /**
     * @property bool $permissionsBulkMacrosAllowed
     */
    private $permissionsBulkMacrosAllowed = null;

    /**
     * @property bool $permissionsCampaignInfluence2
     */
    private $permissionsCampaignInfluence2 = null;

    /**
     * @property bool $permissionsCanApproveFeedPost
     */
    private $permissionsCanApproveFeedPost = null;

    /**
     * @property bool $permissionsCanEditDataPrepRecipe
     */
    private $permissionsCanEditDataPrepRecipe = null;

    /**
     * @property bool $permissionsCanInsertFeedSystemFields
     */
    private $permissionsCanInsertFeedSystemFields = null;

    /**
     * @property bool $permissionsCanManageMaps
     */
    private $permissionsCanManageMaps = null;

    /**
     * @property bool $permissionsCanUseNewDashboardBuilder
     */
    private $permissionsCanUseNewDashboardBuilder = null;

    /**
     * @property bool $permissionsCanVerifyComment
     */
    private $permissionsCanVerifyComment = null;

    /**
     * @property bool $permissionsChangeDashboardColors
     */
    private $permissionsChangeDashboardColors = null;

    /**
     * @property bool $permissionsChatterComposeUiCodesnippet
     */
    private $permissionsChatterComposeUiCodesnippet = null;

    /**
     * @property bool $permissionsChatterEditOwnPost
     */
    private $permissionsChatterEditOwnPost = null;

    /**
     * @property bool $permissionsChatterEditOwnRecordPost
     */
    private $permissionsChatterEditOwnRecordPost = null;

    /**
     * @property bool $permissionsChatterFileLink
     */
    private $permissionsChatterFileLink = null;

    /**
     * @property bool $permissionsChatterInternalUser
     */
    private $permissionsChatterInternalUser = null;

    /**
     * @property bool $permissionsChatterInviteExternalUsers
     */
    private $permissionsChatterInviteExternalUsers = null;

    /**
     * @property bool $permissionsChatterOwnGroups
     */
    private $permissionsChatterOwnGroups = null;

    /**
     * @property bool $permissionsCloseConversations
     */
    private $permissionsCloseConversations = null;

    /**
     * @property bool $permissionsConfigCustomRecs
     */
    private $permissionsConfigCustomRecs = null;

    /**
     * @property bool $permissionsConnectOrgToEnvironmentHub
     */
    private $permissionsConnectOrgToEnvironmentHub = null;

    /**
     * @property bool $permissionsContentAdministrator
     */
    private $permissionsContentAdministrator = null;

    /**
     * @property bool $permissionsContentWorkspaces
     */
    private $permissionsContentWorkspaces = null;

    /**
     * @property bool $permissionsConvertLeads
     */
    private $permissionsConvertLeads = null;

    /**
     * @property bool $permissionsCreateCustomizeDashboards
     */
    private $permissionsCreateCustomizeDashboards = null;

    /**
     * @property bool $permissionsCreateCustomizeFilters
     */
    private $permissionsCreateCustomizeFilters = null;

    /**
     * @property bool $permissionsCreateCustomizeReports
     */
    private $permissionsCreateCustomizeReports = null;

    /**
     * @property bool $permissionsCreateDashboardFolders
     */
    private $permissionsCreateDashboardFolders = null;

    /**
     * @property bool $permissionsCreateLtngTempInPub
     */
    private $permissionsCreateLtngTempInPub = null;

    /**
     * @property bool $permissionsCreateMultiforce
     */
    private $permissionsCreateMultiforce = null;

    /**
     * @property bool $permissionsCreateReportFolders
     */
    private $permissionsCreateReportFolders = null;

    /**
     * @property bool $permissionsCreateReportInLightning
     */
    private $permissionsCreateReportInLightning = null;

    /**
     * @property bool $permissionsCreateTopics
     */
    private $permissionsCreateTopics = null;

    /**
     * @property bool $permissionsCreateWorkspaces
     */
    private $permissionsCreateWorkspaces = null;

    /**
     * @property bool $permissionsCustomMobileAppsAccess
     */
    private $permissionsCustomMobileAppsAccess = null;

    /**
     * @property bool $permissionsCustomSidebarOnAllPages
     */
    private $permissionsCustomSidebarOnAllPages = null;

    /**
     * @property bool $permissionsCustomizeApplication
     */
    private $permissionsCustomizeApplication = null;

    /**
     * @property bool $permissionsDataExport
     */
    private $permissionsDataExport = null;

    /**
     * @property bool $permissionsDelegatedTwoFactor
     */
    private $permissionsDelegatedTwoFactor = null;

    /**
     * @property bool $permissionsDeleteActivatedContract
     */
    private $permissionsDeleteActivatedContract = null;

    /**
     * @property bool $permissionsDeleteTopics
     */
    private $permissionsDeleteTopics = null;

    /**
     * @property bool $permissionsDistributeFromPersWksp
     */
    private $permissionsDistributeFromPersWksp = null;

    /**
     * @property bool $permissionsEditActivatedOrders
     */
    private $permissionsEditActivatedOrders = null;

    /**
     * @property bool $permissionsEditBrandTemplates
     */
    private $permissionsEditBrandTemplates = null;

    /**
     * @property bool $permissionsEditCaseComments
     */
    private $permissionsEditCaseComments = null;

    /**
     * @property bool $permissionsEditEvent
     */
    private $permissionsEditEvent = null;

    /**
     * @property bool $permissionsEditHtmlTemplates
     */
    private $permissionsEditHtmlTemplates = null;

    /**
     * @property bool $permissionsEditKnowledge
     */
    private $permissionsEditKnowledge = null;

    /**
     * @property bool $permissionsEditMyDashboards
     */
    private $permissionsEditMyDashboards = null;

    /**
     * @property bool $permissionsEditMyReports
     */
    private $permissionsEditMyReports = null;

    /**
     * @property bool $permissionsEditOppLineItemUnitPrice
     */
    private $permissionsEditOppLineItemUnitPrice = null;

    /**
     * @property bool $permissionsEditPublicDocuments
     */
    private $permissionsEditPublicDocuments = null;

    /**
     * @property bool $permissionsEditPublicFilters
     */
    private $permissionsEditPublicFilters = null;

    /**
     * @property bool $permissionsEditPublicTemplates
     */
    private $permissionsEditPublicTemplates = null;

    /**
     * @property bool $permissionsEditReadonlyFields
     */
    private $permissionsEditReadonlyFields = null;

    /**
     * @property bool $permissionsEditTask
     */
    private $permissionsEditTask = null;

    /**
     * @property bool $permissionsEditTopics
     */
    private $permissionsEditTopics = null;

    /**
     * @property bool $permissionsEmailAdministration
     */
    private $permissionsEmailAdministration = null;

    /**
     * @property bool $permissionsEmailMass
     */
    private $permissionsEmailMass = null;

    /**
     * @property bool $permissionsEmailSingle
     */
    private $permissionsEmailSingle = null;

    /**
     * @property bool $permissionsEmailTemplateManagement
     */
    private $permissionsEmailTemplateManagement = null;

    /**
     * @property bool $permissionsEnableCommunityAppLauncher
     */
    private $permissionsEnableCommunityAppLauncher = null;

    /**
     * @property bool $permissionsEnableNotifications
     */
    private $permissionsEnableNotifications = null;

    /**
     * @property bool $permissionsExportReport
     */
    private $permissionsExportReport = null;

    /**
     * @property bool $permissionsFeedPinning
     */
    private $permissionsFeedPinning = null;

    /**
     * @property bool $permissionsFlowUFLRequired
     */
    private $permissionsFlowUFLRequired = null;

    /**
     * @property bool $permissionsForceTwoFactor
     */
    private $permissionsForceTwoFactor = null;

    /**
     * @property bool $permissionsGiveRecognitionBadge
     */
    private $permissionsGiveRecognitionBadge = null;

    /**
     * @property bool $permissionsGovernNetworks
     */
    private $permissionsGovernNetworks = null;

    /**
     * @property bool $permissionsHideReadByList
     */
    private $permissionsHideReadByList = null;

    /**
     * @property bool $permissionsIdentityConnect
     */
    private $permissionsIdentityConnect = null;

    /**
     * @property bool $permissionsIdentityEnabled
     */
    private $permissionsIdentityEnabled = null;

    /**
     * @property bool $permissionsImportCustomObjects
     */
    private $permissionsImportCustomObjects = null;

    /**
     * @property bool $permissionsImportLeads
     */
    private $permissionsImportLeads = null;

    /**
     * @property bool $permissionsImportPersonal
     */
    private $permissionsImportPersonal = null;

    /**
     * @property bool $permissionsInsightsAppAdmin
     */
    private $permissionsInsightsAppAdmin = null;

    /**
     * @property bool $permissionsInsightsAppDashboardEditor
     */
    private $permissionsInsightsAppDashboardEditor = null;

    /**
     * @property bool $permissionsInsightsAppEltEditor
     */
    private $permissionsInsightsAppEltEditor = null;

    /**
     * @property bool $permissionsInsightsAppUploadUser
     */
    private $permissionsInsightsAppUploadUser = null;

    /**
     * @property bool $permissionsInsightsAppUser
     */
    private $permissionsInsightsAppUser = null;

    /**
     * @property bool $permissionsInsightsCreateApplication
     */
    private $permissionsInsightsCreateApplication = null;

    /**
     * @property bool $permissionsInstallMultiforce
     */
    private $permissionsInstallMultiforce = null;

    /**
     * @property bool $permissionsIotUser
     */
    private $permissionsIotUser = null;

    /**
     * @property bool $permissionsLightningConsoleAllowedForUser
     */
    private $permissionsLightningConsoleAllowedForUser = null;

    /**
     * @property bool $permissionsLightningExperienceUser
     */
    private $permissionsLightningExperienceUser = null;

    /**
     * @property bool $permissionsListEmailSend
     */
    private $permissionsListEmailSend = null;

    /**
     * @property bool $permissionsLtngPromoReserved01UserPerm
     */
    private $permissionsLtngPromoReserved01UserPerm = null;

    /**
     * @property bool $permissionsManageAnalyticSnapshots
     */
    private $permissionsManageAnalyticSnapshots = null;

    /**
     * @property bool $permissionsManageAuthProviders
     */
    private $permissionsManageAuthProviders = null;

    /**
     * @property bool $permissionsManageBusinessHourHolidays
     */
    private $permissionsManageBusinessHourHolidays = null;

    /**
     * @property bool $permissionsManageCallCenters
     */
    private $permissionsManageCallCenters = null;

    /**
     * @property bool $permissionsManageCases
     */
    private $permissionsManageCases = null;

    /**
     * @property bool $permissionsManageCategories
     */
    private $permissionsManageCategories = null;

    /**
     * @property bool $permissionsManageCertificates
     */
    private $permissionsManageCertificates = null;

    /**
     * @property bool $permissionsManageChatterMessages
     */
    private $permissionsManageChatterMessages = null;

    /**
     * @property bool $permissionsManageContentPermissions
     */
    private $permissionsManageContentPermissions = null;

    /**
     * @property bool $permissionsManageContentProperties
     */
    private $permissionsManageContentProperties = null;

    /**
     * @property bool $permissionsManageContentTypes
     */
    private $permissionsManageContentTypes = null;

    /**
     * @property bool $permissionsManageCustomPermissions
     */
    private $permissionsManageCustomPermissions = null;

    /**
     * @property bool $permissionsManageCustomReportTypes
     */
    private $permissionsManageCustomReportTypes = null;

    /**
     * @property bool $permissionsManageDashbdsInPubFolders
     */
    private $permissionsManageDashbdsInPubFolders = null;

    /**
     * @property bool $permissionsManageDataCategories
     */
    private $permissionsManageDataCategories = null;

    /**
     * @property bool $permissionsManageDataIntegrations
     */
    private $permissionsManageDataIntegrations = null;

    /**
     * @property bool $permissionsManageDynamicDashboards
     */
    private $permissionsManageDynamicDashboards = null;

    /**
     * @property bool $permissionsManageEmailClientConfig
     */
    private $permissionsManageEmailClientConfig = null;

    /**
     * @property bool $permissionsManageEncryptionKeys
     */
    private $permissionsManageEncryptionKeys = null;

    /**
     * @property bool $permissionsManageExchangeConfig
     */
    private $permissionsManageExchangeConfig = null;

    /**
     * @property bool $permissionsManageHealthCheck
     */
    private $permissionsManageHealthCheck = null;

    /**
     * @property bool $permissionsManageInteraction
     */
    private $permissionsManageInteraction = null;

    /**
     * @property bool $permissionsManageInternalUsers
     */
    private $permissionsManageInternalUsers = null;

    /**
     * @property bool $permissionsManageIpAddresses
     */
    private $permissionsManageIpAddresses = null;

    /**
     * @property bool $permissionsManageKnowledge
     */
    private $permissionsManageKnowledge = null;

    /**
     * @property bool $permissionsManageKnowledgeImportExport
     */
    private $permissionsManageKnowledgeImportExport = null;

    /**
     * @property bool $permissionsManageLeads
     */
    private $permissionsManageLeads = null;

    /**
     * @property bool $permissionsManageLoginAccessPolicies
     */
    private $permissionsManageLoginAccessPolicies = null;

    /**
     * @property bool $permissionsManageMobile
     */
    private $permissionsManageMobile = null;

    /**
     * @property bool $permissionsManageNetworks
     */
    private $permissionsManageNetworks = null;

    /**
     * @property bool $permissionsManagePasswordPolicies
     */
    private $permissionsManagePasswordPolicies = null;

    /**
     * @property bool $permissionsManageProfilesPermissionsets
     */
    private $permissionsManageProfilesPermissionsets = null;

    /**
     * @property bool $permissionsManagePvtRptsAndDashbds
     */
    private $permissionsManagePvtRptsAndDashbds = null;

    /**
     * @property bool $permissionsManageRemoteAccess
     */
    private $permissionsManageRemoteAccess = null;

    /**
     * @property bool $permissionsManageReportsInPubFolders
     */
    private $permissionsManageReportsInPubFolders = null;

    /**
     * @property bool $permissionsManageRoles
     */
    private $permissionsManageRoles = null;

    /**
     * @property bool $permissionsManageSearchPromotionRules
     */
    private $permissionsManageSearchPromotionRules = null;

    /**
     * @property bool $permissionsManageSessionPermissionSets
     */
    private $permissionsManageSessionPermissionSets = null;

    /**
     * @property bool $permissionsManageSharing
     */
    private $permissionsManageSharing = null;

    /**
     * @property bool $permissionsManageSolutions
     */
    private $permissionsManageSolutions = null;

    /**
     * @property bool $permissionsManageSurveys
     */
    private $permissionsManageSurveys = null;

    /**
     * @property bool $permissionsManageSynonyms
     */
    private $permissionsManageSynonyms = null;

    /**
     * @property bool $permissionsManageTemplatedApp
     */
    private $permissionsManageTemplatedApp = null;

    /**
     * @property bool $permissionsManageTwoFactor
     */
    private $permissionsManageTwoFactor = null;

    /**
     * @property bool $permissionsManageUnlistedGroups
     */
    private $permissionsManageUnlistedGroups = null;

    /**
     * @property bool $permissionsManageUsers
     */
    private $permissionsManageUsers = null;

    /**
     * @property bool $permissionsMassInlineEdit
     */
    private $permissionsMassInlineEdit = null;

    /**
     * @property bool $permissionsMergeTopics
     */
    private $permissionsMergeTopics = null;

    /**
     * @property bool $permissionsModerateChatter
     */
    private $permissionsModerateChatter = null;

    /**
     * @property bool $permissionsModerateNetworkUsers
     */
    private $permissionsModerateNetworkUsers = null;

    /**
     * @property bool $permissionsModifyAllData
     */
    private $permissionsModifyAllData = null;

    /**
     * @property bool $permissionsModifyMetadata
     */
    private $permissionsModifyMetadata = null;

    /**
     * @property bool $permissionsModifySecureAgents
     */
    private $permissionsModifySecureAgents = null;

    /**
     * @property bool $permissionsNewReportBuilder
     */
    private $permissionsNewReportBuilder = null;

    /**
     * @property bool $permissionsPackaging2
     */
    private $permissionsPackaging2 = null;

    /**
     * @property bool $permissionsPasswordNeverExpires
     */
    private $permissionsPasswordNeverExpires = null;

    /**
     * @property bool $permissionsPreventClassicExperience
     */
    private $permissionsPreventClassicExperience = null;

    /**
     * @property bool $permissionsPrivacyDataAccess
     */
    private $permissionsPrivacyDataAccess = null;

    /**
     * @property bool $permissionsPublishMultiforce
     */
    private $permissionsPublishMultiforce = null;

    /**
     * @property bool $permissionsRemoveDirectMessageMembers
     */
    private $permissionsRemoveDirectMessageMembers = null;

    /**
     * @property bool $permissionsResetPasswords
     */
    private $permissionsResetPasswords = null;

    /**
     * @property bool $permissionsRunFlow
     */
    private $permissionsRunFlow = null;

    /**
     * @property bool $permissionsRunReports
     */
    private $permissionsRunReports = null;

    /**
     * @property bool $permissionsSalesConsole
     */
    private $permissionsSalesConsole = null;

    /**
     * @property bool $permissionsScheduleReports
     */
    private $permissionsScheduleReports = null;

    /**
     * @property bool $permissionsSelectFilesFromSalesforce
     */
    private $permissionsSelectFilesFromSalesforce = null;

    /**
     * @property bool $permissionsSendAnnouncementEmails
     */
    private $permissionsSendAnnouncementEmails = null;

    /**
     * @property bool $permissionsSendSitRequests
     */
    private $permissionsSendSitRequests = null;

    /**
     * @property bool $permissionsShareInternalArticles
     */
    private $permissionsShareInternalArticles = null;

    /**
     * @property bool $permissionsShowCompanyNameAsUserBadge
     */
    private $permissionsShowCompanyNameAsUserBadge = null;

    /**
     * @property bool $permissionsSolutionImport
     */
    private $permissionsSolutionImport = null;

    /**
     * @property bool $permissionsStdAutomaticActivityCapture
     */
    private $permissionsStdAutomaticActivityCapture = null;

    /**
     * @property bool $permissionsSubmitMacrosAllowed
     */
    private $permissionsSubmitMacrosAllowed = null;

    /**
     * @property bool $permissionsSubscribeDashboardToOtherUsers
     */
    private $permissionsSubscribeDashboardToOtherUsers = null;

    /**
     * @property bool $permissionsSubscribeReportToOtherUsers
     */
    private $permissionsSubscribeReportToOtherUsers = null;

    /**
     * @property bool $permissionsSubscribeReportsRunAsUser
     */
    private $permissionsSubscribeReportsRunAsUser = null;

    /**
     * @property bool $permissionsSubscribeToLightningDashboards
     */
    private $permissionsSubscribeToLightningDashboards = null;

    /**
     * @property bool $permissionsSubscribeToLightningReports
     */
    private $permissionsSubscribeToLightningReports = null;

    /**
     * @property bool $permissionsTransferAnyCase
     */
    private $permissionsTransferAnyCase = null;

    /**
     * @property bool $permissionsTransferAnyEntity
     */
    private $permissionsTransferAnyEntity = null;

    /**
     * @property bool $permissionsTransferAnyLead
     */
    private $permissionsTransferAnyLead = null;

    /**
     * @property bool $permissionsTwoFactorApi
     */
    private $permissionsTwoFactorApi = null;

    /**
     * @property bool $permissionsUseTeamReassignWizards
     */
    private $permissionsUseTeamReassignWizards = null;

    /**
     * @property bool $permissionsUseTemplatedApp
     */
    private $permissionsUseTemplatedApp = null;

    /**
     * @property bool $permissionsUseWebLink
     */
    private $permissionsUseWebLink = null;

    /**
     * @property bool $permissionsViewAllActivities
     */
    private $permissionsViewAllActivities = null;

    /**
     * @property bool $permissionsViewAllData
     */
    private $permissionsViewAllData = null;

    /**
     * @property bool $permissionsViewAllUsers
     */
    private $permissionsViewAllUsers = null;

    /**
     * @property bool $permissionsViewContent
     */
    private $permissionsViewContent = null;

    /**
     * @property bool $permissionsViewDataAssessment
     */
    private $permissionsViewDataAssessment = null;

    /**
     * @property bool $permissionsViewDataCategories
     */
    private $permissionsViewDataCategories = null;

    /**
     * @property bool $permissionsViewEncryptedData
     */
    private $permissionsViewEncryptedData = null;

    /**
     * @property bool $permissionsViewEventLogFiles
     */
    private $permissionsViewEventLogFiles = null;

    /**
     * @property bool $permissionsViewHealthCheck
     */
    private $permissionsViewHealthCheck = null;

    /**
     * @property bool $permissionsViewHelpLink
     */
    private $permissionsViewHelpLink = null;

    /**
     * @property bool $permissionsViewMyTeamsDashboards
     */
    private $permissionsViewMyTeamsDashboards = null;

    /**
     * @property bool $permissionsViewOnlyEmbeddedAppUser
     */
    private $permissionsViewOnlyEmbeddedAppUser = null;

    /**
     * @property bool $permissionsViewPublicDashboards
     */
    private $permissionsViewPublicDashboards = null;

    /**
     * @property bool $permissionsViewPublicReports
     */
    private $permissionsViewPublicReports = null;

    /**
     * @property bool $permissionsViewRoles
     */
    private $permissionsViewRoles = null;

    /**
     * @property bool $permissionsViewSetup
     */
    private $permissionsViewSetup = null;

    /**
     * @property bool $permissionsWaveTabularDownload
     */
    private $permissionsWaveTabularDownload = null;

    /**
     * @property bool $permissionsWorkCalibrationUser
     */
    private $permissionsWorkCalibrationUser = null;

    /**
     * @property bool $permissionsWorkDotComUserPerm
     */
    private $permissionsWorkDotComUserPerm = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserLicenseType $userLicense
     */
    private $userLicense = null;

    /**
     * @property string $userLicenseId
     */
    private $userLicenseId = null;

    /**
     * @property string $userType
     */
    private $userType = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $users
     */
    private $users = null;

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
     * Gets as lastReferencedDate
     *
     * @return \DateTime
     */
    public function getLastReferencedDate()
    {
        return $this->lastReferencedDate;
    }

    /**
     * Sets a new lastReferencedDate
     *
     * @param \DateTime $lastReferencedDate
     * @return self
     */
    public function setLastReferencedDate(\DateTime $lastReferencedDate)
    {
        $this->lastReferencedDate = $lastReferencedDate;
        return $this;
    }

    /**
     * Gets as lastViewedDate
     *
     * @return \DateTime
     */
    public function getLastViewedDate()
    {
        return $this->lastViewedDate;
    }

    /**
     * Sets a new lastViewedDate
     *
     * @param \DateTime $lastViewedDate
     * @return self
     */
    public function setLastViewedDate(\DateTime $lastViewedDate)
    {
        $this->lastViewedDate = $lastViewedDate;
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
     * Gets as permissionsAccessCMC
     *
     * @return bool
     */
    public function getPermissionsAccessCMC()
    {
        return $this->permissionsAccessCMC;
    }

    /**
     * Sets a new permissionsAccessCMC
     *
     * @param bool $permissionsAccessCMC
     * @return self
     */
    public function setPermissionsAccessCMC($permissionsAccessCMC)
    {
        $this->permissionsAccessCMC = $permissionsAccessCMC;
        return $this;
    }

    /**
     * Gets as permissionsActivateContract
     *
     * @return bool
     */
    public function getPermissionsActivateContract()
    {
        return $this->permissionsActivateContract;
    }

    /**
     * Sets a new permissionsActivateContract
     *
     * @param bool $permissionsActivateContract
     * @return self
     */
    public function setPermissionsActivateContract($permissionsActivateContract)
    {
        $this->permissionsActivateContract = $permissionsActivateContract;
        return $this;
    }

    /**
     * Gets as permissionsActivateOrder
     *
     * @return bool
     */
    public function getPermissionsActivateOrder()
    {
        return $this->permissionsActivateOrder;
    }

    /**
     * Sets a new permissionsActivateOrder
     *
     * @param bool $permissionsActivateOrder
     * @return self
     */
    public function setPermissionsActivateOrder($permissionsActivateOrder)
    {
        $this->permissionsActivateOrder = $permissionsActivateOrder;
        return $this;
    }

    /**
     * Gets as permissionsAddAnalyticsRemoteConnections
     *
     * @return bool
     */
    public function getPermissionsAddAnalyticsRemoteConnections()
    {
        return $this->permissionsAddAnalyticsRemoteConnections;
    }

    /**
     * Sets a new permissionsAddAnalyticsRemoteConnections
     *
     * @param bool $permissionsAddAnalyticsRemoteConnections
     * @return self
     */
    public function setPermissionsAddAnalyticsRemoteConnections($permissionsAddAnalyticsRemoteConnections)
    {
        $this->permissionsAddAnalyticsRemoteConnections = $permissionsAddAnalyticsRemoteConnections;
        return $this;
    }

    /**
     * Gets as permissionsAddDirectMessageMembers
     *
     * @return bool
     */
    public function getPermissionsAddDirectMessageMembers()
    {
        return $this->permissionsAddDirectMessageMembers;
    }

    /**
     * Sets a new permissionsAddDirectMessageMembers
     *
     * @param bool $permissionsAddDirectMessageMembers
     * @return self
     */
    public function setPermissionsAddDirectMessageMembers($permissionsAddDirectMessageMembers)
    {
        $this->permissionsAddDirectMessageMembers = $permissionsAddDirectMessageMembers;
        return $this;
    }

    /**
     * Gets as permissionsAllowEmailIC
     *
     * @return bool
     */
    public function getPermissionsAllowEmailIC()
    {
        return $this->permissionsAllowEmailIC;
    }

    /**
     * Sets a new permissionsAllowEmailIC
     *
     * @param bool $permissionsAllowEmailIC
     * @return self
     */
    public function setPermissionsAllowEmailIC($permissionsAllowEmailIC)
    {
        $this->permissionsAllowEmailIC = $permissionsAllowEmailIC;
        return $this;
    }

    /**
     * Gets as permissionsAllowLightningLogin
     *
     * @return bool
     */
    public function getPermissionsAllowLightningLogin()
    {
        return $this->permissionsAllowLightningLogin;
    }

    /**
     * Sets a new permissionsAllowLightningLogin
     *
     * @param bool $permissionsAllowLightningLogin
     * @return self
     */
    public function setPermissionsAllowLightningLogin($permissionsAllowLightningLogin)
    {
        $this->permissionsAllowLightningLogin = $permissionsAllowLightningLogin;
        return $this;
    }

    /**
     * Gets as permissionsAllowUniversalSearch
     *
     * @return bool
     */
    public function getPermissionsAllowUniversalSearch()
    {
        return $this->permissionsAllowUniversalSearch;
    }

    /**
     * Sets a new permissionsAllowUniversalSearch
     *
     * @param bool $permissionsAllowUniversalSearch
     * @return self
     */
    public function setPermissionsAllowUniversalSearch($permissionsAllowUniversalSearch)
    {
        $this->permissionsAllowUniversalSearch = $permissionsAllowUniversalSearch;
        return $this;
    }

    /**
     * Gets as permissionsAllowViewEditConvertedLeads
     *
     * @return bool
     */
    public function getPermissionsAllowViewEditConvertedLeads()
    {
        return $this->permissionsAllowViewEditConvertedLeads;
    }

    /**
     * Sets a new permissionsAllowViewEditConvertedLeads
     *
     * @param bool $permissionsAllowViewEditConvertedLeads
     * @return self
     */
    public function setPermissionsAllowViewEditConvertedLeads($permissionsAllowViewEditConvertedLeads)
    {
        $this->permissionsAllowViewEditConvertedLeads = $permissionsAllowViewEditConvertedLeads;
        return $this;
    }

    /**
     * Gets as permissionsAllowViewKnowledge
     *
     * @return bool
     */
    public function getPermissionsAllowViewKnowledge()
    {
        return $this->permissionsAllowViewKnowledge;
    }

    /**
     * Sets a new permissionsAllowViewKnowledge
     *
     * @param bool $permissionsAllowViewKnowledge
     * @return self
     */
    public function setPermissionsAllowViewKnowledge($permissionsAllowViewKnowledge)
    {
        $this->permissionsAllowViewKnowledge = $permissionsAllowViewKnowledge;
        return $this;
    }

    /**
     * Gets as permissionsApexRestServices
     *
     * @return bool
     */
    public function getPermissionsApexRestServices()
    {
        return $this->permissionsApexRestServices;
    }

    /**
     * Sets a new permissionsApexRestServices
     *
     * @param bool $permissionsApexRestServices
     * @return self
     */
    public function setPermissionsApexRestServices($permissionsApexRestServices)
    {
        $this->permissionsApexRestServices = $permissionsApexRestServices;
        return $this;
    }

    /**
     * Gets as permissionsApiEnabled
     *
     * @return bool
     */
    public function getPermissionsApiEnabled()
    {
        return $this->permissionsApiEnabled;
    }

    /**
     * Sets a new permissionsApiEnabled
     *
     * @param bool $permissionsApiEnabled
     * @return self
     */
    public function setPermissionsApiEnabled($permissionsApiEnabled)
    {
        $this->permissionsApiEnabled = $permissionsApiEnabled;
        return $this;
    }

    /**
     * Gets as permissionsAssignPermissionSets
     *
     * @return bool
     */
    public function getPermissionsAssignPermissionSets()
    {
        return $this->permissionsAssignPermissionSets;
    }

    /**
     * Sets a new permissionsAssignPermissionSets
     *
     * @param bool $permissionsAssignPermissionSets
     * @return self
     */
    public function setPermissionsAssignPermissionSets($permissionsAssignPermissionSets)
    {
        $this->permissionsAssignPermissionSets = $permissionsAssignPermissionSets;
        return $this;
    }

    /**
     * Gets as permissionsAssignTopics
     *
     * @return bool
     */
    public function getPermissionsAssignTopics()
    {
        return $this->permissionsAssignTopics;
    }

    /**
     * Sets a new permissionsAssignTopics
     *
     * @param bool $permissionsAssignTopics
     * @return self
     */
    public function setPermissionsAssignTopics($permissionsAssignTopics)
    {
        $this->permissionsAssignTopics = $permissionsAssignTopics;
        return $this;
    }

    /**
     * Gets as permissionsAuthorApex
     *
     * @return bool
     */
    public function getPermissionsAuthorApex()
    {
        return $this->permissionsAuthorApex;
    }

    /**
     * Sets a new permissionsAuthorApex
     *
     * @param bool $permissionsAuthorApex
     * @return self
     */
    public function setPermissionsAuthorApex($permissionsAuthorApex)
    {
        $this->permissionsAuthorApex = $permissionsAuthorApex;
        return $this;
    }

    /**
     * Gets as permissionsAutomaticActivityCapture
     *
     * @return bool
     */
    public function getPermissionsAutomaticActivityCapture()
    {
        return $this->permissionsAutomaticActivityCapture;
    }

    /**
     * Sets a new permissionsAutomaticActivityCapture
     *
     * @param bool $permissionsAutomaticActivityCapture
     * @return self
     */
    public function setPermissionsAutomaticActivityCapture($permissionsAutomaticActivityCapture)
    {
        $this->permissionsAutomaticActivityCapture = $permissionsAutomaticActivityCapture;
        return $this;
    }

    /**
     * Gets as permissionsBulkApiHardDelete
     *
     * @return bool
     */
    public function getPermissionsBulkApiHardDelete()
    {
        return $this->permissionsBulkApiHardDelete;
    }

    /**
     * Sets a new permissionsBulkApiHardDelete
     *
     * @param bool $permissionsBulkApiHardDelete
     * @return self
     */
    public function setPermissionsBulkApiHardDelete($permissionsBulkApiHardDelete)
    {
        $this->permissionsBulkApiHardDelete = $permissionsBulkApiHardDelete;
        return $this;
    }

    /**
     * Gets as permissionsBulkMacrosAllowed
     *
     * @return bool
     */
    public function getPermissionsBulkMacrosAllowed()
    {
        return $this->permissionsBulkMacrosAllowed;
    }

    /**
     * Sets a new permissionsBulkMacrosAllowed
     *
     * @param bool $permissionsBulkMacrosAllowed
     * @return self
     */
    public function setPermissionsBulkMacrosAllowed($permissionsBulkMacrosAllowed)
    {
        $this->permissionsBulkMacrosAllowed = $permissionsBulkMacrosAllowed;
        return $this;
    }

    /**
     * Gets as permissionsCampaignInfluence2
     *
     * @return bool
     */
    public function getPermissionsCampaignInfluence2()
    {
        return $this->permissionsCampaignInfluence2;
    }

    /**
     * Sets a new permissionsCampaignInfluence2
     *
     * @param bool $permissionsCampaignInfluence2
     * @return self
     */
    public function setPermissionsCampaignInfluence2($permissionsCampaignInfluence2)
    {
        $this->permissionsCampaignInfluence2 = $permissionsCampaignInfluence2;
        return $this;
    }

    /**
     * Gets as permissionsCanApproveFeedPost
     *
     * @return bool
     */
    public function getPermissionsCanApproveFeedPost()
    {
        return $this->permissionsCanApproveFeedPost;
    }

    /**
     * Sets a new permissionsCanApproveFeedPost
     *
     * @param bool $permissionsCanApproveFeedPost
     * @return self
     */
    public function setPermissionsCanApproveFeedPost($permissionsCanApproveFeedPost)
    {
        $this->permissionsCanApproveFeedPost = $permissionsCanApproveFeedPost;
        return $this;
    }

    /**
     * Gets as permissionsCanEditDataPrepRecipe
     *
     * @return bool
     */
    public function getPermissionsCanEditDataPrepRecipe()
    {
        return $this->permissionsCanEditDataPrepRecipe;
    }

    /**
     * Sets a new permissionsCanEditDataPrepRecipe
     *
     * @param bool $permissionsCanEditDataPrepRecipe
     * @return self
     */
    public function setPermissionsCanEditDataPrepRecipe($permissionsCanEditDataPrepRecipe)
    {
        $this->permissionsCanEditDataPrepRecipe = $permissionsCanEditDataPrepRecipe;
        return $this;
    }

    /**
     * Gets as permissionsCanInsertFeedSystemFields
     *
     * @return bool
     */
    public function getPermissionsCanInsertFeedSystemFields()
    {
        return $this->permissionsCanInsertFeedSystemFields;
    }

    /**
     * Sets a new permissionsCanInsertFeedSystemFields
     *
     * @param bool $permissionsCanInsertFeedSystemFields
     * @return self
     */
    public function setPermissionsCanInsertFeedSystemFields($permissionsCanInsertFeedSystemFields)
    {
        $this->permissionsCanInsertFeedSystemFields = $permissionsCanInsertFeedSystemFields;
        return $this;
    }

    /**
     * Gets as permissionsCanManageMaps
     *
     * @return bool
     */
    public function getPermissionsCanManageMaps()
    {
        return $this->permissionsCanManageMaps;
    }

    /**
     * Sets a new permissionsCanManageMaps
     *
     * @param bool $permissionsCanManageMaps
     * @return self
     */
    public function setPermissionsCanManageMaps($permissionsCanManageMaps)
    {
        $this->permissionsCanManageMaps = $permissionsCanManageMaps;
        return $this;
    }

    /**
     * Gets as permissionsCanUseNewDashboardBuilder
     *
     * @return bool
     */
    public function getPermissionsCanUseNewDashboardBuilder()
    {
        return $this->permissionsCanUseNewDashboardBuilder;
    }

    /**
     * Sets a new permissionsCanUseNewDashboardBuilder
     *
     * @param bool $permissionsCanUseNewDashboardBuilder
     * @return self
     */
    public function setPermissionsCanUseNewDashboardBuilder($permissionsCanUseNewDashboardBuilder)
    {
        $this->permissionsCanUseNewDashboardBuilder = $permissionsCanUseNewDashboardBuilder;
        return $this;
    }

    /**
     * Gets as permissionsCanVerifyComment
     *
     * @return bool
     */
    public function getPermissionsCanVerifyComment()
    {
        return $this->permissionsCanVerifyComment;
    }

    /**
     * Sets a new permissionsCanVerifyComment
     *
     * @param bool $permissionsCanVerifyComment
     * @return self
     */
    public function setPermissionsCanVerifyComment($permissionsCanVerifyComment)
    {
        $this->permissionsCanVerifyComment = $permissionsCanVerifyComment;
        return $this;
    }

    /**
     * Gets as permissionsChangeDashboardColors
     *
     * @return bool
     */
    public function getPermissionsChangeDashboardColors()
    {
        return $this->permissionsChangeDashboardColors;
    }

    /**
     * Sets a new permissionsChangeDashboardColors
     *
     * @param bool $permissionsChangeDashboardColors
     * @return self
     */
    public function setPermissionsChangeDashboardColors($permissionsChangeDashboardColors)
    {
        $this->permissionsChangeDashboardColors = $permissionsChangeDashboardColors;
        return $this;
    }

    /**
     * Gets as permissionsChatterComposeUiCodesnippet
     *
     * @return bool
     */
    public function getPermissionsChatterComposeUiCodesnippet()
    {
        return $this->permissionsChatterComposeUiCodesnippet;
    }

    /**
     * Sets a new permissionsChatterComposeUiCodesnippet
     *
     * @param bool $permissionsChatterComposeUiCodesnippet
     * @return self
     */
    public function setPermissionsChatterComposeUiCodesnippet($permissionsChatterComposeUiCodesnippet)
    {
        $this->permissionsChatterComposeUiCodesnippet = $permissionsChatterComposeUiCodesnippet;
        return $this;
    }

    /**
     * Gets as permissionsChatterEditOwnPost
     *
     * @return bool
     */
    public function getPermissionsChatterEditOwnPost()
    {
        return $this->permissionsChatterEditOwnPost;
    }

    /**
     * Sets a new permissionsChatterEditOwnPost
     *
     * @param bool $permissionsChatterEditOwnPost
     * @return self
     */
    public function setPermissionsChatterEditOwnPost($permissionsChatterEditOwnPost)
    {
        $this->permissionsChatterEditOwnPost = $permissionsChatterEditOwnPost;
        return $this;
    }

    /**
     * Gets as permissionsChatterEditOwnRecordPost
     *
     * @return bool
     */
    public function getPermissionsChatterEditOwnRecordPost()
    {
        return $this->permissionsChatterEditOwnRecordPost;
    }

    /**
     * Sets a new permissionsChatterEditOwnRecordPost
     *
     * @param bool $permissionsChatterEditOwnRecordPost
     * @return self
     */
    public function setPermissionsChatterEditOwnRecordPost($permissionsChatterEditOwnRecordPost)
    {
        $this->permissionsChatterEditOwnRecordPost = $permissionsChatterEditOwnRecordPost;
        return $this;
    }

    /**
     * Gets as permissionsChatterFileLink
     *
     * @return bool
     */
    public function getPermissionsChatterFileLink()
    {
        return $this->permissionsChatterFileLink;
    }

    /**
     * Sets a new permissionsChatterFileLink
     *
     * @param bool $permissionsChatterFileLink
     * @return self
     */
    public function setPermissionsChatterFileLink($permissionsChatterFileLink)
    {
        $this->permissionsChatterFileLink = $permissionsChatterFileLink;
        return $this;
    }

    /**
     * Gets as permissionsChatterInternalUser
     *
     * @return bool
     */
    public function getPermissionsChatterInternalUser()
    {
        return $this->permissionsChatterInternalUser;
    }

    /**
     * Sets a new permissionsChatterInternalUser
     *
     * @param bool $permissionsChatterInternalUser
     * @return self
     */
    public function setPermissionsChatterInternalUser($permissionsChatterInternalUser)
    {
        $this->permissionsChatterInternalUser = $permissionsChatterInternalUser;
        return $this;
    }

    /**
     * Gets as permissionsChatterInviteExternalUsers
     *
     * @return bool
     */
    public function getPermissionsChatterInviteExternalUsers()
    {
        return $this->permissionsChatterInviteExternalUsers;
    }

    /**
     * Sets a new permissionsChatterInviteExternalUsers
     *
     * @param bool $permissionsChatterInviteExternalUsers
     * @return self
     */
    public function setPermissionsChatterInviteExternalUsers($permissionsChatterInviteExternalUsers)
    {
        $this->permissionsChatterInviteExternalUsers = $permissionsChatterInviteExternalUsers;
        return $this;
    }

    /**
     * Gets as permissionsChatterOwnGroups
     *
     * @return bool
     */
    public function getPermissionsChatterOwnGroups()
    {
        return $this->permissionsChatterOwnGroups;
    }

    /**
     * Sets a new permissionsChatterOwnGroups
     *
     * @param bool $permissionsChatterOwnGroups
     * @return self
     */
    public function setPermissionsChatterOwnGroups($permissionsChatterOwnGroups)
    {
        $this->permissionsChatterOwnGroups = $permissionsChatterOwnGroups;
        return $this;
    }

    /**
     * Gets as permissionsCloseConversations
     *
     * @return bool
     */
    public function getPermissionsCloseConversations()
    {
        return $this->permissionsCloseConversations;
    }

    /**
     * Sets a new permissionsCloseConversations
     *
     * @param bool $permissionsCloseConversations
     * @return self
     */
    public function setPermissionsCloseConversations($permissionsCloseConversations)
    {
        $this->permissionsCloseConversations = $permissionsCloseConversations;
        return $this;
    }

    /**
     * Gets as permissionsConfigCustomRecs
     *
     * @return bool
     */
    public function getPermissionsConfigCustomRecs()
    {
        return $this->permissionsConfigCustomRecs;
    }

    /**
     * Sets a new permissionsConfigCustomRecs
     *
     * @param bool $permissionsConfigCustomRecs
     * @return self
     */
    public function setPermissionsConfigCustomRecs($permissionsConfigCustomRecs)
    {
        $this->permissionsConfigCustomRecs = $permissionsConfigCustomRecs;
        return $this;
    }

    /**
     * Gets as permissionsConnectOrgToEnvironmentHub
     *
     * @return bool
     */
    public function getPermissionsConnectOrgToEnvironmentHub()
    {
        return $this->permissionsConnectOrgToEnvironmentHub;
    }

    /**
     * Sets a new permissionsConnectOrgToEnvironmentHub
     *
     * @param bool $permissionsConnectOrgToEnvironmentHub
     * @return self
     */
    public function setPermissionsConnectOrgToEnvironmentHub($permissionsConnectOrgToEnvironmentHub)
    {
        $this->permissionsConnectOrgToEnvironmentHub = $permissionsConnectOrgToEnvironmentHub;
        return $this;
    }

    /**
     * Gets as permissionsContentAdministrator
     *
     * @return bool
     */
    public function getPermissionsContentAdministrator()
    {
        return $this->permissionsContentAdministrator;
    }

    /**
     * Sets a new permissionsContentAdministrator
     *
     * @param bool $permissionsContentAdministrator
     * @return self
     */
    public function setPermissionsContentAdministrator($permissionsContentAdministrator)
    {
        $this->permissionsContentAdministrator = $permissionsContentAdministrator;
        return $this;
    }

    /**
     * Gets as permissionsContentWorkspaces
     *
     * @return bool
     */
    public function getPermissionsContentWorkspaces()
    {
        return $this->permissionsContentWorkspaces;
    }

    /**
     * Sets a new permissionsContentWorkspaces
     *
     * @param bool $permissionsContentWorkspaces
     * @return self
     */
    public function setPermissionsContentWorkspaces($permissionsContentWorkspaces)
    {
        $this->permissionsContentWorkspaces = $permissionsContentWorkspaces;
        return $this;
    }

    /**
     * Gets as permissionsConvertLeads
     *
     * @return bool
     */
    public function getPermissionsConvertLeads()
    {
        return $this->permissionsConvertLeads;
    }

    /**
     * Sets a new permissionsConvertLeads
     *
     * @param bool $permissionsConvertLeads
     * @return self
     */
    public function setPermissionsConvertLeads($permissionsConvertLeads)
    {
        $this->permissionsConvertLeads = $permissionsConvertLeads;
        return $this;
    }

    /**
     * Gets as permissionsCreateCustomizeDashboards
     *
     * @return bool
     */
    public function getPermissionsCreateCustomizeDashboards()
    {
        return $this->permissionsCreateCustomizeDashboards;
    }

    /**
     * Sets a new permissionsCreateCustomizeDashboards
     *
     * @param bool $permissionsCreateCustomizeDashboards
     * @return self
     */
    public function setPermissionsCreateCustomizeDashboards($permissionsCreateCustomizeDashboards)
    {
        $this->permissionsCreateCustomizeDashboards = $permissionsCreateCustomizeDashboards;
        return $this;
    }

    /**
     * Gets as permissionsCreateCustomizeFilters
     *
     * @return bool
     */
    public function getPermissionsCreateCustomizeFilters()
    {
        return $this->permissionsCreateCustomizeFilters;
    }

    /**
     * Sets a new permissionsCreateCustomizeFilters
     *
     * @param bool $permissionsCreateCustomizeFilters
     * @return self
     */
    public function setPermissionsCreateCustomizeFilters($permissionsCreateCustomizeFilters)
    {
        $this->permissionsCreateCustomizeFilters = $permissionsCreateCustomizeFilters;
        return $this;
    }

    /**
     * Gets as permissionsCreateCustomizeReports
     *
     * @return bool
     */
    public function getPermissionsCreateCustomizeReports()
    {
        return $this->permissionsCreateCustomizeReports;
    }

    /**
     * Sets a new permissionsCreateCustomizeReports
     *
     * @param bool $permissionsCreateCustomizeReports
     * @return self
     */
    public function setPermissionsCreateCustomizeReports($permissionsCreateCustomizeReports)
    {
        $this->permissionsCreateCustomizeReports = $permissionsCreateCustomizeReports;
        return $this;
    }

    /**
     * Gets as permissionsCreateDashboardFolders
     *
     * @return bool
     */
    public function getPermissionsCreateDashboardFolders()
    {
        return $this->permissionsCreateDashboardFolders;
    }

    /**
     * Sets a new permissionsCreateDashboardFolders
     *
     * @param bool $permissionsCreateDashboardFolders
     * @return self
     */
    public function setPermissionsCreateDashboardFolders($permissionsCreateDashboardFolders)
    {
        $this->permissionsCreateDashboardFolders = $permissionsCreateDashboardFolders;
        return $this;
    }

    /**
     * Gets as permissionsCreateLtngTempInPub
     *
     * @return bool
     */
    public function getPermissionsCreateLtngTempInPub()
    {
        return $this->permissionsCreateLtngTempInPub;
    }

    /**
     * Sets a new permissionsCreateLtngTempInPub
     *
     * @param bool $permissionsCreateLtngTempInPub
     * @return self
     */
    public function setPermissionsCreateLtngTempInPub($permissionsCreateLtngTempInPub)
    {
        $this->permissionsCreateLtngTempInPub = $permissionsCreateLtngTempInPub;
        return $this;
    }

    /**
     * Gets as permissionsCreateMultiforce
     *
     * @return bool
     */
    public function getPermissionsCreateMultiforce()
    {
        return $this->permissionsCreateMultiforce;
    }

    /**
     * Sets a new permissionsCreateMultiforce
     *
     * @param bool $permissionsCreateMultiforce
     * @return self
     */
    public function setPermissionsCreateMultiforce($permissionsCreateMultiforce)
    {
        $this->permissionsCreateMultiforce = $permissionsCreateMultiforce;
        return $this;
    }

    /**
     * Gets as permissionsCreateReportFolders
     *
     * @return bool
     */
    public function getPermissionsCreateReportFolders()
    {
        return $this->permissionsCreateReportFolders;
    }

    /**
     * Sets a new permissionsCreateReportFolders
     *
     * @param bool $permissionsCreateReportFolders
     * @return self
     */
    public function setPermissionsCreateReportFolders($permissionsCreateReportFolders)
    {
        $this->permissionsCreateReportFolders = $permissionsCreateReportFolders;
        return $this;
    }

    /**
     * Gets as permissionsCreateReportInLightning
     *
     * @return bool
     */
    public function getPermissionsCreateReportInLightning()
    {
        return $this->permissionsCreateReportInLightning;
    }

    /**
     * Sets a new permissionsCreateReportInLightning
     *
     * @param bool $permissionsCreateReportInLightning
     * @return self
     */
    public function setPermissionsCreateReportInLightning($permissionsCreateReportInLightning)
    {
        $this->permissionsCreateReportInLightning = $permissionsCreateReportInLightning;
        return $this;
    }

    /**
     * Gets as permissionsCreateTopics
     *
     * @return bool
     */
    public function getPermissionsCreateTopics()
    {
        return $this->permissionsCreateTopics;
    }

    /**
     * Sets a new permissionsCreateTopics
     *
     * @param bool $permissionsCreateTopics
     * @return self
     */
    public function setPermissionsCreateTopics($permissionsCreateTopics)
    {
        $this->permissionsCreateTopics = $permissionsCreateTopics;
        return $this;
    }

    /**
     * Gets as permissionsCreateWorkspaces
     *
     * @return bool
     */
    public function getPermissionsCreateWorkspaces()
    {
        return $this->permissionsCreateWorkspaces;
    }

    /**
     * Sets a new permissionsCreateWorkspaces
     *
     * @param bool $permissionsCreateWorkspaces
     * @return self
     */
    public function setPermissionsCreateWorkspaces($permissionsCreateWorkspaces)
    {
        $this->permissionsCreateWorkspaces = $permissionsCreateWorkspaces;
        return $this;
    }

    /**
     * Gets as permissionsCustomMobileAppsAccess
     *
     * @return bool
     */
    public function getPermissionsCustomMobileAppsAccess()
    {
        return $this->permissionsCustomMobileAppsAccess;
    }

    /**
     * Sets a new permissionsCustomMobileAppsAccess
     *
     * @param bool $permissionsCustomMobileAppsAccess
     * @return self
     */
    public function setPermissionsCustomMobileAppsAccess($permissionsCustomMobileAppsAccess)
    {
        $this->permissionsCustomMobileAppsAccess = $permissionsCustomMobileAppsAccess;
        return $this;
    }

    /**
     * Gets as permissionsCustomSidebarOnAllPages
     *
     * @return bool
     */
    public function getPermissionsCustomSidebarOnAllPages()
    {
        return $this->permissionsCustomSidebarOnAllPages;
    }

    /**
     * Sets a new permissionsCustomSidebarOnAllPages
     *
     * @param bool $permissionsCustomSidebarOnAllPages
     * @return self
     */
    public function setPermissionsCustomSidebarOnAllPages($permissionsCustomSidebarOnAllPages)
    {
        $this->permissionsCustomSidebarOnAllPages = $permissionsCustomSidebarOnAllPages;
        return $this;
    }

    /**
     * Gets as permissionsCustomizeApplication
     *
     * @return bool
     */
    public function getPermissionsCustomizeApplication()
    {
        return $this->permissionsCustomizeApplication;
    }

    /**
     * Sets a new permissionsCustomizeApplication
     *
     * @param bool $permissionsCustomizeApplication
     * @return self
     */
    public function setPermissionsCustomizeApplication($permissionsCustomizeApplication)
    {
        $this->permissionsCustomizeApplication = $permissionsCustomizeApplication;
        return $this;
    }

    /**
     * Gets as permissionsDataExport
     *
     * @return bool
     */
    public function getPermissionsDataExport()
    {
        return $this->permissionsDataExport;
    }

    /**
     * Sets a new permissionsDataExport
     *
     * @param bool $permissionsDataExport
     * @return self
     */
    public function setPermissionsDataExport($permissionsDataExport)
    {
        $this->permissionsDataExport = $permissionsDataExport;
        return $this;
    }

    /**
     * Gets as permissionsDelegatedTwoFactor
     *
     * @return bool
     */
    public function getPermissionsDelegatedTwoFactor()
    {
        return $this->permissionsDelegatedTwoFactor;
    }

    /**
     * Sets a new permissionsDelegatedTwoFactor
     *
     * @param bool $permissionsDelegatedTwoFactor
     * @return self
     */
    public function setPermissionsDelegatedTwoFactor($permissionsDelegatedTwoFactor)
    {
        $this->permissionsDelegatedTwoFactor = $permissionsDelegatedTwoFactor;
        return $this;
    }

    /**
     * Gets as permissionsDeleteActivatedContract
     *
     * @return bool
     */
    public function getPermissionsDeleteActivatedContract()
    {
        return $this->permissionsDeleteActivatedContract;
    }

    /**
     * Sets a new permissionsDeleteActivatedContract
     *
     * @param bool $permissionsDeleteActivatedContract
     * @return self
     */
    public function setPermissionsDeleteActivatedContract($permissionsDeleteActivatedContract)
    {
        $this->permissionsDeleteActivatedContract = $permissionsDeleteActivatedContract;
        return $this;
    }

    /**
     * Gets as permissionsDeleteTopics
     *
     * @return bool
     */
    public function getPermissionsDeleteTopics()
    {
        return $this->permissionsDeleteTopics;
    }

    /**
     * Sets a new permissionsDeleteTopics
     *
     * @param bool $permissionsDeleteTopics
     * @return self
     */
    public function setPermissionsDeleteTopics($permissionsDeleteTopics)
    {
        $this->permissionsDeleteTopics = $permissionsDeleteTopics;
        return $this;
    }

    /**
     * Gets as permissionsDistributeFromPersWksp
     *
     * @return bool
     */
    public function getPermissionsDistributeFromPersWksp()
    {
        return $this->permissionsDistributeFromPersWksp;
    }

    /**
     * Sets a new permissionsDistributeFromPersWksp
     *
     * @param bool $permissionsDistributeFromPersWksp
     * @return self
     */
    public function setPermissionsDistributeFromPersWksp($permissionsDistributeFromPersWksp)
    {
        $this->permissionsDistributeFromPersWksp = $permissionsDistributeFromPersWksp;
        return $this;
    }

    /**
     * Gets as permissionsEditActivatedOrders
     *
     * @return bool
     */
    public function getPermissionsEditActivatedOrders()
    {
        return $this->permissionsEditActivatedOrders;
    }

    /**
     * Sets a new permissionsEditActivatedOrders
     *
     * @param bool $permissionsEditActivatedOrders
     * @return self
     */
    public function setPermissionsEditActivatedOrders($permissionsEditActivatedOrders)
    {
        $this->permissionsEditActivatedOrders = $permissionsEditActivatedOrders;
        return $this;
    }

    /**
     * Gets as permissionsEditBrandTemplates
     *
     * @return bool
     */
    public function getPermissionsEditBrandTemplates()
    {
        return $this->permissionsEditBrandTemplates;
    }

    /**
     * Sets a new permissionsEditBrandTemplates
     *
     * @param bool $permissionsEditBrandTemplates
     * @return self
     */
    public function setPermissionsEditBrandTemplates($permissionsEditBrandTemplates)
    {
        $this->permissionsEditBrandTemplates = $permissionsEditBrandTemplates;
        return $this;
    }

    /**
     * Gets as permissionsEditCaseComments
     *
     * @return bool
     */
    public function getPermissionsEditCaseComments()
    {
        return $this->permissionsEditCaseComments;
    }

    /**
     * Sets a new permissionsEditCaseComments
     *
     * @param bool $permissionsEditCaseComments
     * @return self
     */
    public function setPermissionsEditCaseComments($permissionsEditCaseComments)
    {
        $this->permissionsEditCaseComments = $permissionsEditCaseComments;
        return $this;
    }

    /**
     * Gets as permissionsEditEvent
     *
     * @return bool
     */
    public function getPermissionsEditEvent()
    {
        return $this->permissionsEditEvent;
    }

    /**
     * Sets a new permissionsEditEvent
     *
     * @param bool $permissionsEditEvent
     * @return self
     */
    public function setPermissionsEditEvent($permissionsEditEvent)
    {
        $this->permissionsEditEvent = $permissionsEditEvent;
        return $this;
    }

    /**
     * Gets as permissionsEditHtmlTemplates
     *
     * @return bool
     */
    public function getPermissionsEditHtmlTemplates()
    {
        return $this->permissionsEditHtmlTemplates;
    }

    /**
     * Sets a new permissionsEditHtmlTemplates
     *
     * @param bool $permissionsEditHtmlTemplates
     * @return self
     */
    public function setPermissionsEditHtmlTemplates($permissionsEditHtmlTemplates)
    {
        $this->permissionsEditHtmlTemplates = $permissionsEditHtmlTemplates;
        return $this;
    }

    /**
     * Gets as permissionsEditKnowledge
     *
     * @return bool
     */
    public function getPermissionsEditKnowledge()
    {
        return $this->permissionsEditKnowledge;
    }

    /**
     * Sets a new permissionsEditKnowledge
     *
     * @param bool $permissionsEditKnowledge
     * @return self
     */
    public function setPermissionsEditKnowledge($permissionsEditKnowledge)
    {
        $this->permissionsEditKnowledge = $permissionsEditKnowledge;
        return $this;
    }

    /**
     * Gets as permissionsEditMyDashboards
     *
     * @return bool
     */
    public function getPermissionsEditMyDashboards()
    {
        return $this->permissionsEditMyDashboards;
    }

    /**
     * Sets a new permissionsEditMyDashboards
     *
     * @param bool $permissionsEditMyDashboards
     * @return self
     */
    public function setPermissionsEditMyDashboards($permissionsEditMyDashboards)
    {
        $this->permissionsEditMyDashboards = $permissionsEditMyDashboards;
        return $this;
    }

    /**
     * Gets as permissionsEditMyReports
     *
     * @return bool
     */
    public function getPermissionsEditMyReports()
    {
        return $this->permissionsEditMyReports;
    }

    /**
     * Sets a new permissionsEditMyReports
     *
     * @param bool $permissionsEditMyReports
     * @return self
     */
    public function setPermissionsEditMyReports($permissionsEditMyReports)
    {
        $this->permissionsEditMyReports = $permissionsEditMyReports;
        return $this;
    }

    /**
     * Gets as permissionsEditOppLineItemUnitPrice
     *
     * @return bool
     */
    public function getPermissionsEditOppLineItemUnitPrice()
    {
        return $this->permissionsEditOppLineItemUnitPrice;
    }

    /**
     * Sets a new permissionsEditOppLineItemUnitPrice
     *
     * @param bool $permissionsEditOppLineItemUnitPrice
     * @return self
     */
    public function setPermissionsEditOppLineItemUnitPrice($permissionsEditOppLineItemUnitPrice)
    {
        $this->permissionsEditOppLineItemUnitPrice = $permissionsEditOppLineItemUnitPrice;
        return $this;
    }

    /**
     * Gets as permissionsEditPublicDocuments
     *
     * @return bool
     */
    public function getPermissionsEditPublicDocuments()
    {
        return $this->permissionsEditPublicDocuments;
    }

    /**
     * Sets a new permissionsEditPublicDocuments
     *
     * @param bool $permissionsEditPublicDocuments
     * @return self
     */
    public function setPermissionsEditPublicDocuments($permissionsEditPublicDocuments)
    {
        $this->permissionsEditPublicDocuments = $permissionsEditPublicDocuments;
        return $this;
    }

    /**
     * Gets as permissionsEditPublicFilters
     *
     * @return bool
     */
    public function getPermissionsEditPublicFilters()
    {
        return $this->permissionsEditPublicFilters;
    }

    /**
     * Sets a new permissionsEditPublicFilters
     *
     * @param bool $permissionsEditPublicFilters
     * @return self
     */
    public function setPermissionsEditPublicFilters($permissionsEditPublicFilters)
    {
        $this->permissionsEditPublicFilters = $permissionsEditPublicFilters;
        return $this;
    }

    /**
     * Gets as permissionsEditPublicTemplates
     *
     * @return bool
     */
    public function getPermissionsEditPublicTemplates()
    {
        return $this->permissionsEditPublicTemplates;
    }

    /**
     * Sets a new permissionsEditPublicTemplates
     *
     * @param bool $permissionsEditPublicTemplates
     * @return self
     */
    public function setPermissionsEditPublicTemplates($permissionsEditPublicTemplates)
    {
        $this->permissionsEditPublicTemplates = $permissionsEditPublicTemplates;
        return $this;
    }

    /**
     * Gets as permissionsEditReadonlyFields
     *
     * @return bool
     */
    public function getPermissionsEditReadonlyFields()
    {
        return $this->permissionsEditReadonlyFields;
    }

    /**
     * Sets a new permissionsEditReadonlyFields
     *
     * @param bool $permissionsEditReadonlyFields
     * @return self
     */
    public function setPermissionsEditReadonlyFields($permissionsEditReadonlyFields)
    {
        $this->permissionsEditReadonlyFields = $permissionsEditReadonlyFields;
        return $this;
    }

    /**
     * Gets as permissionsEditTask
     *
     * @return bool
     */
    public function getPermissionsEditTask()
    {
        return $this->permissionsEditTask;
    }

    /**
     * Sets a new permissionsEditTask
     *
     * @param bool $permissionsEditTask
     * @return self
     */
    public function setPermissionsEditTask($permissionsEditTask)
    {
        $this->permissionsEditTask = $permissionsEditTask;
        return $this;
    }

    /**
     * Gets as permissionsEditTopics
     *
     * @return bool
     */
    public function getPermissionsEditTopics()
    {
        return $this->permissionsEditTopics;
    }

    /**
     * Sets a new permissionsEditTopics
     *
     * @param bool $permissionsEditTopics
     * @return self
     */
    public function setPermissionsEditTopics($permissionsEditTopics)
    {
        $this->permissionsEditTopics = $permissionsEditTopics;
        return $this;
    }

    /**
     * Gets as permissionsEmailAdministration
     *
     * @return bool
     */
    public function getPermissionsEmailAdministration()
    {
        return $this->permissionsEmailAdministration;
    }

    /**
     * Sets a new permissionsEmailAdministration
     *
     * @param bool $permissionsEmailAdministration
     * @return self
     */
    public function setPermissionsEmailAdministration($permissionsEmailAdministration)
    {
        $this->permissionsEmailAdministration = $permissionsEmailAdministration;
        return $this;
    }

    /**
     * Gets as permissionsEmailMass
     *
     * @return bool
     */
    public function getPermissionsEmailMass()
    {
        return $this->permissionsEmailMass;
    }

    /**
     * Sets a new permissionsEmailMass
     *
     * @param bool $permissionsEmailMass
     * @return self
     */
    public function setPermissionsEmailMass($permissionsEmailMass)
    {
        $this->permissionsEmailMass = $permissionsEmailMass;
        return $this;
    }

    /**
     * Gets as permissionsEmailSingle
     *
     * @return bool
     */
    public function getPermissionsEmailSingle()
    {
        return $this->permissionsEmailSingle;
    }

    /**
     * Sets a new permissionsEmailSingle
     *
     * @param bool $permissionsEmailSingle
     * @return self
     */
    public function setPermissionsEmailSingle($permissionsEmailSingle)
    {
        $this->permissionsEmailSingle = $permissionsEmailSingle;
        return $this;
    }

    /**
     * Gets as permissionsEmailTemplateManagement
     *
     * @return bool
     */
    public function getPermissionsEmailTemplateManagement()
    {
        return $this->permissionsEmailTemplateManagement;
    }

    /**
     * Sets a new permissionsEmailTemplateManagement
     *
     * @param bool $permissionsEmailTemplateManagement
     * @return self
     */
    public function setPermissionsEmailTemplateManagement($permissionsEmailTemplateManagement)
    {
        $this->permissionsEmailTemplateManagement = $permissionsEmailTemplateManagement;
        return $this;
    }

    /**
     * Gets as permissionsEnableCommunityAppLauncher
     *
     * @return bool
     */
    public function getPermissionsEnableCommunityAppLauncher()
    {
        return $this->permissionsEnableCommunityAppLauncher;
    }

    /**
     * Sets a new permissionsEnableCommunityAppLauncher
     *
     * @param bool $permissionsEnableCommunityAppLauncher
     * @return self
     */
    public function setPermissionsEnableCommunityAppLauncher($permissionsEnableCommunityAppLauncher)
    {
        $this->permissionsEnableCommunityAppLauncher = $permissionsEnableCommunityAppLauncher;
        return $this;
    }

    /**
     * Gets as permissionsEnableNotifications
     *
     * @return bool
     */
    public function getPermissionsEnableNotifications()
    {
        return $this->permissionsEnableNotifications;
    }

    /**
     * Sets a new permissionsEnableNotifications
     *
     * @param bool $permissionsEnableNotifications
     * @return self
     */
    public function setPermissionsEnableNotifications($permissionsEnableNotifications)
    {
        $this->permissionsEnableNotifications = $permissionsEnableNotifications;
        return $this;
    }

    /**
     * Gets as permissionsExportReport
     *
     * @return bool
     */
    public function getPermissionsExportReport()
    {
        return $this->permissionsExportReport;
    }

    /**
     * Sets a new permissionsExportReport
     *
     * @param bool $permissionsExportReport
     * @return self
     */
    public function setPermissionsExportReport($permissionsExportReport)
    {
        $this->permissionsExportReport = $permissionsExportReport;
        return $this;
    }

    /**
     * Gets as permissionsFeedPinning
     *
     * @return bool
     */
    public function getPermissionsFeedPinning()
    {
        return $this->permissionsFeedPinning;
    }

    /**
     * Sets a new permissionsFeedPinning
     *
     * @param bool $permissionsFeedPinning
     * @return self
     */
    public function setPermissionsFeedPinning($permissionsFeedPinning)
    {
        $this->permissionsFeedPinning = $permissionsFeedPinning;
        return $this;
    }

    /**
     * Gets as permissionsFlowUFLRequired
     *
     * @return bool
     */
    public function getPermissionsFlowUFLRequired()
    {
        return $this->permissionsFlowUFLRequired;
    }

    /**
     * Sets a new permissionsFlowUFLRequired
     *
     * @param bool $permissionsFlowUFLRequired
     * @return self
     */
    public function setPermissionsFlowUFLRequired($permissionsFlowUFLRequired)
    {
        $this->permissionsFlowUFLRequired = $permissionsFlowUFLRequired;
        return $this;
    }

    /**
     * Gets as permissionsForceTwoFactor
     *
     * @return bool
     */
    public function getPermissionsForceTwoFactor()
    {
        return $this->permissionsForceTwoFactor;
    }

    /**
     * Sets a new permissionsForceTwoFactor
     *
     * @param bool $permissionsForceTwoFactor
     * @return self
     */
    public function setPermissionsForceTwoFactor($permissionsForceTwoFactor)
    {
        $this->permissionsForceTwoFactor = $permissionsForceTwoFactor;
        return $this;
    }

    /**
     * Gets as permissionsGiveRecognitionBadge
     *
     * @return bool
     */
    public function getPermissionsGiveRecognitionBadge()
    {
        return $this->permissionsGiveRecognitionBadge;
    }

    /**
     * Sets a new permissionsGiveRecognitionBadge
     *
     * @param bool $permissionsGiveRecognitionBadge
     * @return self
     */
    public function setPermissionsGiveRecognitionBadge($permissionsGiveRecognitionBadge)
    {
        $this->permissionsGiveRecognitionBadge = $permissionsGiveRecognitionBadge;
        return $this;
    }

    /**
     * Gets as permissionsGovernNetworks
     *
     * @return bool
     */
    public function getPermissionsGovernNetworks()
    {
        return $this->permissionsGovernNetworks;
    }

    /**
     * Sets a new permissionsGovernNetworks
     *
     * @param bool $permissionsGovernNetworks
     * @return self
     */
    public function setPermissionsGovernNetworks($permissionsGovernNetworks)
    {
        $this->permissionsGovernNetworks = $permissionsGovernNetworks;
        return $this;
    }

    /**
     * Gets as permissionsHideReadByList
     *
     * @return bool
     */
    public function getPermissionsHideReadByList()
    {
        return $this->permissionsHideReadByList;
    }

    /**
     * Sets a new permissionsHideReadByList
     *
     * @param bool $permissionsHideReadByList
     * @return self
     */
    public function setPermissionsHideReadByList($permissionsHideReadByList)
    {
        $this->permissionsHideReadByList = $permissionsHideReadByList;
        return $this;
    }

    /**
     * Gets as permissionsIdentityConnect
     *
     * @return bool
     */
    public function getPermissionsIdentityConnect()
    {
        return $this->permissionsIdentityConnect;
    }

    /**
     * Sets a new permissionsIdentityConnect
     *
     * @param bool $permissionsIdentityConnect
     * @return self
     */
    public function setPermissionsIdentityConnect($permissionsIdentityConnect)
    {
        $this->permissionsIdentityConnect = $permissionsIdentityConnect;
        return $this;
    }

    /**
     * Gets as permissionsIdentityEnabled
     *
     * @return bool
     */
    public function getPermissionsIdentityEnabled()
    {
        return $this->permissionsIdentityEnabled;
    }

    /**
     * Sets a new permissionsIdentityEnabled
     *
     * @param bool $permissionsIdentityEnabled
     * @return self
     */
    public function setPermissionsIdentityEnabled($permissionsIdentityEnabled)
    {
        $this->permissionsIdentityEnabled = $permissionsIdentityEnabled;
        return $this;
    }

    /**
     * Gets as permissionsImportCustomObjects
     *
     * @return bool
     */
    public function getPermissionsImportCustomObjects()
    {
        return $this->permissionsImportCustomObjects;
    }

    /**
     * Sets a new permissionsImportCustomObjects
     *
     * @param bool $permissionsImportCustomObjects
     * @return self
     */
    public function setPermissionsImportCustomObjects($permissionsImportCustomObjects)
    {
        $this->permissionsImportCustomObjects = $permissionsImportCustomObjects;
        return $this;
    }

    /**
     * Gets as permissionsImportLeads
     *
     * @return bool
     */
    public function getPermissionsImportLeads()
    {
        return $this->permissionsImportLeads;
    }

    /**
     * Sets a new permissionsImportLeads
     *
     * @param bool $permissionsImportLeads
     * @return self
     */
    public function setPermissionsImportLeads($permissionsImportLeads)
    {
        $this->permissionsImportLeads = $permissionsImportLeads;
        return $this;
    }

    /**
     * Gets as permissionsImportPersonal
     *
     * @return bool
     */
    public function getPermissionsImportPersonal()
    {
        return $this->permissionsImportPersonal;
    }

    /**
     * Sets a new permissionsImportPersonal
     *
     * @param bool $permissionsImportPersonal
     * @return self
     */
    public function setPermissionsImportPersonal($permissionsImportPersonal)
    {
        $this->permissionsImportPersonal = $permissionsImportPersonal;
        return $this;
    }

    /**
     * Gets as permissionsInsightsAppAdmin
     *
     * @return bool
     */
    public function getPermissionsInsightsAppAdmin()
    {
        return $this->permissionsInsightsAppAdmin;
    }

    /**
     * Sets a new permissionsInsightsAppAdmin
     *
     * @param bool $permissionsInsightsAppAdmin
     * @return self
     */
    public function setPermissionsInsightsAppAdmin($permissionsInsightsAppAdmin)
    {
        $this->permissionsInsightsAppAdmin = $permissionsInsightsAppAdmin;
        return $this;
    }

    /**
     * Gets as permissionsInsightsAppDashboardEditor
     *
     * @return bool
     */
    public function getPermissionsInsightsAppDashboardEditor()
    {
        return $this->permissionsInsightsAppDashboardEditor;
    }

    /**
     * Sets a new permissionsInsightsAppDashboardEditor
     *
     * @param bool $permissionsInsightsAppDashboardEditor
     * @return self
     */
    public function setPermissionsInsightsAppDashboardEditor($permissionsInsightsAppDashboardEditor)
    {
        $this->permissionsInsightsAppDashboardEditor = $permissionsInsightsAppDashboardEditor;
        return $this;
    }

    /**
     * Gets as permissionsInsightsAppEltEditor
     *
     * @return bool
     */
    public function getPermissionsInsightsAppEltEditor()
    {
        return $this->permissionsInsightsAppEltEditor;
    }

    /**
     * Sets a new permissionsInsightsAppEltEditor
     *
     * @param bool $permissionsInsightsAppEltEditor
     * @return self
     */
    public function setPermissionsInsightsAppEltEditor($permissionsInsightsAppEltEditor)
    {
        $this->permissionsInsightsAppEltEditor = $permissionsInsightsAppEltEditor;
        return $this;
    }

    /**
     * Gets as permissionsInsightsAppUploadUser
     *
     * @return bool
     */
    public function getPermissionsInsightsAppUploadUser()
    {
        return $this->permissionsInsightsAppUploadUser;
    }

    /**
     * Sets a new permissionsInsightsAppUploadUser
     *
     * @param bool $permissionsInsightsAppUploadUser
     * @return self
     */
    public function setPermissionsInsightsAppUploadUser($permissionsInsightsAppUploadUser)
    {
        $this->permissionsInsightsAppUploadUser = $permissionsInsightsAppUploadUser;
        return $this;
    }

    /**
     * Gets as permissionsInsightsAppUser
     *
     * @return bool
     */
    public function getPermissionsInsightsAppUser()
    {
        return $this->permissionsInsightsAppUser;
    }

    /**
     * Sets a new permissionsInsightsAppUser
     *
     * @param bool $permissionsInsightsAppUser
     * @return self
     */
    public function setPermissionsInsightsAppUser($permissionsInsightsAppUser)
    {
        $this->permissionsInsightsAppUser = $permissionsInsightsAppUser;
        return $this;
    }

    /**
     * Gets as permissionsInsightsCreateApplication
     *
     * @return bool
     */
    public function getPermissionsInsightsCreateApplication()
    {
        return $this->permissionsInsightsCreateApplication;
    }

    /**
     * Sets a new permissionsInsightsCreateApplication
     *
     * @param bool $permissionsInsightsCreateApplication
     * @return self
     */
    public function setPermissionsInsightsCreateApplication($permissionsInsightsCreateApplication)
    {
        $this->permissionsInsightsCreateApplication = $permissionsInsightsCreateApplication;
        return $this;
    }

    /**
     * Gets as permissionsInstallMultiforce
     *
     * @return bool
     */
    public function getPermissionsInstallMultiforce()
    {
        return $this->permissionsInstallMultiforce;
    }

    /**
     * Sets a new permissionsInstallMultiforce
     *
     * @param bool $permissionsInstallMultiforce
     * @return self
     */
    public function setPermissionsInstallMultiforce($permissionsInstallMultiforce)
    {
        $this->permissionsInstallMultiforce = $permissionsInstallMultiforce;
        return $this;
    }

    /**
     * Gets as permissionsIotUser
     *
     * @return bool
     */
    public function getPermissionsIotUser()
    {
        return $this->permissionsIotUser;
    }

    /**
     * Sets a new permissionsIotUser
     *
     * @param bool $permissionsIotUser
     * @return self
     */
    public function setPermissionsIotUser($permissionsIotUser)
    {
        $this->permissionsIotUser = $permissionsIotUser;
        return $this;
    }

    /**
     * Gets as permissionsLightningConsoleAllowedForUser
     *
     * @return bool
     */
    public function getPermissionsLightningConsoleAllowedForUser()
    {
        return $this->permissionsLightningConsoleAllowedForUser;
    }

    /**
     * Sets a new permissionsLightningConsoleAllowedForUser
     *
     * @param bool $permissionsLightningConsoleAllowedForUser
     * @return self
     */
    public function setPermissionsLightningConsoleAllowedForUser($permissionsLightningConsoleAllowedForUser)
    {
        $this->permissionsLightningConsoleAllowedForUser = $permissionsLightningConsoleAllowedForUser;
        return $this;
    }

    /**
     * Gets as permissionsLightningExperienceUser
     *
     * @return bool
     */
    public function getPermissionsLightningExperienceUser()
    {
        return $this->permissionsLightningExperienceUser;
    }

    /**
     * Sets a new permissionsLightningExperienceUser
     *
     * @param bool $permissionsLightningExperienceUser
     * @return self
     */
    public function setPermissionsLightningExperienceUser($permissionsLightningExperienceUser)
    {
        $this->permissionsLightningExperienceUser = $permissionsLightningExperienceUser;
        return $this;
    }

    /**
     * Gets as permissionsListEmailSend
     *
     * @return bool
     */
    public function getPermissionsListEmailSend()
    {
        return $this->permissionsListEmailSend;
    }

    /**
     * Sets a new permissionsListEmailSend
     *
     * @param bool $permissionsListEmailSend
     * @return self
     */
    public function setPermissionsListEmailSend($permissionsListEmailSend)
    {
        $this->permissionsListEmailSend = $permissionsListEmailSend;
        return $this;
    }

    /**
     * Gets as permissionsLtngPromoReserved01UserPerm
     *
     * @return bool
     */
    public function getPermissionsLtngPromoReserved01UserPerm()
    {
        return $this->permissionsLtngPromoReserved01UserPerm;
    }

    /**
     * Sets a new permissionsLtngPromoReserved01UserPerm
     *
     * @param bool $permissionsLtngPromoReserved01UserPerm
     * @return self
     */
    public function setPermissionsLtngPromoReserved01UserPerm($permissionsLtngPromoReserved01UserPerm)
    {
        $this->permissionsLtngPromoReserved01UserPerm = $permissionsLtngPromoReserved01UserPerm;
        return $this;
    }

    /**
     * Gets as permissionsManageAnalyticSnapshots
     *
     * @return bool
     */
    public function getPermissionsManageAnalyticSnapshots()
    {
        return $this->permissionsManageAnalyticSnapshots;
    }

    /**
     * Sets a new permissionsManageAnalyticSnapshots
     *
     * @param bool $permissionsManageAnalyticSnapshots
     * @return self
     */
    public function setPermissionsManageAnalyticSnapshots($permissionsManageAnalyticSnapshots)
    {
        $this->permissionsManageAnalyticSnapshots = $permissionsManageAnalyticSnapshots;
        return $this;
    }

    /**
     * Gets as permissionsManageAuthProviders
     *
     * @return bool
     */
    public function getPermissionsManageAuthProviders()
    {
        return $this->permissionsManageAuthProviders;
    }

    /**
     * Sets a new permissionsManageAuthProviders
     *
     * @param bool $permissionsManageAuthProviders
     * @return self
     */
    public function setPermissionsManageAuthProviders($permissionsManageAuthProviders)
    {
        $this->permissionsManageAuthProviders = $permissionsManageAuthProviders;
        return $this;
    }

    /**
     * Gets as permissionsManageBusinessHourHolidays
     *
     * @return bool
     */
    public function getPermissionsManageBusinessHourHolidays()
    {
        return $this->permissionsManageBusinessHourHolidays;
    }

    /**
     * Sets a new permissionsManageBusinessHourHolidays
     *
     * @param bool $permissionsManageBusinessHourHolidays
     * @return self
     */
    public function setPermissionsManageBusinessHourHolidays($permissionsManageBusinessHourHolidays)
    {
        $this->permissionsManageBusinessHourHolidays = $permissionsManageBusinessHourHolidays;
        return $this;
    }

    /**
     * Gets as permissionsManageCallCenters
     *
     * @return bool
     */
    public function getPermissionsManageCallCenters()
    {
        return $this->permissionsManageCallCenters;
    }

    /**
     * Sets a new permissionsManageCallCenters
     *
     * @param bool $permissionsManageCallCenters
     * @return self
     */
    public function setPermissionsManageCallCenters($permissionsManageCallCenters)
    {
        $this->permissionsManageCallCenters = $permissionsManageCallCenters;
        return $this;
    }

    /**
     * Gets as permissionsManageCases
     *
     * @return bool
     */
    public function getPermissionsManageCases()
    {
        return $this->permissionsManageCases;
    }

    /**
     * Sets a new permissionsManageCases
     *
     * @param bool $permissionsManageCases
     * @return self
     */
    public function setPermissionsManageCases($permissionsManageCases)
    {
        $this->permissionsManageCases = $permissionsManageCases;
        return $this;
    }

    /**
     * Gets as permissionsManageCategories
     *
     * @return bool
     */
    public function getPermissionsManageCategories()
    {
        return $this->permissionsManageCategories;
    }

    /**
     * Sets a new permissionsManageCategories
     *
     * @param bool $permissionsManageCategories
     * @return self
     */
    public function setPermissionsManageCategories($permissionsManageCategories)
    {
        $this->permissionsManageCategories = $permissionsManageCategories;
        return $this;
    }

    /**
     * Gets as permissionsManageCertificates
     *
     * @return bool
     */
    public function getPermissionsManageCertificates()
    {
        return $this->permissionsManageCertificates;
    }

    /**
     * Sets a new permissionsManageCertificates
     *
     * @param bool $permissionsManageCertificates
     * @return self
     */
    public function setPermissionsManageCertificates($permissionsManageCertificates)
    {
        $this->permissionsManageCertificates = $permissionsManageCertificates;
        return $this;
    }

    /**
     * Gets as permissionsManageChatterMessages
     *
     * @return bool
     */
    public function getPermissionsManageChatterMessages()
    {
        return $this->permissionsManageChatterMessages;
    }

    /**
     * Sets a new permissionsManageChatterMessages
     *
     * @param bool $permissionsManageChatterMessages
     * @return self
     */
    public function setPermissionsManageChatterMessages($permissionsManageChatterMessages)
    {
        $this->permissionsManageChatterMessages = $permissionsManageChatterMessages;
        return $this;
    }

    /**
     * Gets as permissionsManageContentPermissions
     *
     * @return bool
     */
    public function getPermissionsManageContentPermissions()
    {
        return $this->permissionsManageContentPermissions;
    }

    /**
     * Sets a new permissionsManageContentPermissions
     *
     * @param bool $permissionsManageContentPermissions
     * @return self
     */
    public function setPermissionsManageContentPermissions($permissionsManageContentPermissions)
    {
        $this->permissionsManageContentPermissions = $permissionsManageContentPermissions;
        return $this;
    }

    /**
     * Gets as permissionsManageContentProperties
     *
     * @return bool
     */
    public function getPermissionsManageContentProperties()
    {
        return $this->permissionsManageContentProperties;
    }

    /**
     * Sets a new permissionsManageContentProperties
     *
     * @param bool $permissionsManageContentProperties
     * @return self
     */
    public function setPermissionsManageContentProperties($permissionsManageContentProperties)
    {
        $this->permissionsManageContentProperties = $permissionsManageContentProperties;
        return $this;
    }

    /**
     * Gets as permissionsManageContentTypes
     *
     * @return bool
     */
    public function getPermissionsManageContentTypes()
    {
        return $this->permissionsManageContentTypes;
    }

    /**
     * Sets a new permissionsManageContentTypes
     *
     * @param bool $permissionsManageContentTypes
     * @return self
     */
    public function setPermissionsManageContentTypes($permissionsManageContentTypes)
    {
        $this->permissionsManageContentTypes = $permissionsManageContentTypes;
        return $this;
    }

    /**
     * Gets as permissionsManageCustomPermissions
     *
     * @return bool
     */
    public function getPermissionsManageCustomPermissions()
    {
        return $this->permissionsManageCustomPermissions;
    }

    /**
     * Sets a new permissionsManageCustomPermissions
     *
     * @param bool $permissionsManageCustomPermissions
     * @return self
     */
    public function setPermissionsManageCustomPermissions($permissionsManageCustomPermissions)
    {
        $this->permissionsManageCustomPermissions = $permissionsManageCustomPermissions;
        return $this;
    }

    /**
     * Gets as permissionsManageCustomReportTypes
     *
     * @return bool
     */
    public function getPermissionsManageCustomReportTypes()
    {
        return $this->permissionsManageCustomReportTypes;
    }

    /**
     * Sets a new permissionsManageCustomReportTypes
     *
     * @param bool $permissionsManageCustomReportTypes
     * @return self
     */
    public function setPermissionsManageCustomReportTypes($permissionsManageCustomReportTypes)
    {
        $this->permissionsManageCustomReportTypes = $permissionsManageCustomReportTypes;
        return $this;
    }

    /**
     * Gets as permissionsManageDashbdsInPubFolders
     *
     * @return bool
     */
    public function getPermissionsManageDashbdsInPubFolders()
    {
        return $this->permissionsManageDashbdsInPubFolders;
    }

    /**
     * Sets a new permissionsManageDashbdsInPubFolders
     *
     * @param bool $permissionsManageDashbdsInPubFolders
     * @return self
     */
    public function setPermissionsManageDashbdsInPubFolders($permissionsManageDashbdsInPubFolders)
    {
        $this->permissionsManageDashbdsInPubFolders = $permissionsManageDashbdsInPubFolders;
        return $this;
    }

    /**
     * Gets as permissionsManageDataCategories
     *
     * @return bool
     */
    public function getPermissionsManageDataCategories()
    {
        return $this->permissionsManageDataCategories;
    }

    /**
     * Sets a new permissionsManageDataCategories
     *
     * @param bool $permissionsManageDataCategories
     * @return self
     */
    public function setPermissionsManageDataCategories($permissionsManageDataCategories)
    {
        $this->permissionsManageDataCategories = $permissionsManageDataCategories;
        return $this;
    }

    /**
     * Gets as permissionsManageDataIntegrations
     *
     * @return bool
     */
    public function getPermissionsManageDataIntegrations()
    {
        return $this->permissionsManageDataIntegrations;
    }

    /**
     * Sets a new permissionsManageDataIntegrations
     *
     * @param bool $permissionsManageDataIntegrations
     * @return self
     */
    public function setPermissionsManageDataIntegrations($permissionsManageDataIntegrations)
    {
        $this->permissionsManageDataIntegrations = $permissionsManageDataIntegrations;
        return $this;
    }

    /**
     * Gets as permissionsManageDynamicDashboards
     *
     * @return bool
     */
    public function getPermissionsManageDynamicDashboards()
    {
        return $this->permissionsManageDynamicDashboards;
    }

    /**
     * Sets a new permissionsManageDynamicDashboards
     *
     * @param bool $permissionsManageDynamicDashboards
     * @return self
     */
    public function setPermissionsManageDynamicDashboards($permissionsManageDynamicDashboards)
    {
        $this->permissionsManageDynamicDashboards = $permissionsManageDynamicDashboards;
        return $this;
    }

    /**
     * Gets as permissionsManageEmailClientConfig
     *
     * @return bool
     */
    public function getPermissionsManageEmailClientConfig()
    {
        return $this->permissionsManageEmailClientConfig;
    }

    /**
     * Sets a new permissionsManageEmailClientConfig
     *
     * @param bool $permissionsManageEmailClientConfig
     * @return self
     */
    public function setPermissionsManageEmailClientConfig($permissionsManageEmailClientConfig)
    {
        $this->permissionsManageEmailClientConfig = $permissionsManageEmailClientConfig;
        return $this;
    }

    /**
     * Gets as permissionsManageEncryptionKeys
     *
     * @return bool
     */
    public function getPermissionsManageEncryptionKeys()
    {
        return $this->permissionsManageEncryptionKeys;
    }

    /**
     * Sets a new permissionsManageEncryptionKeys
     *
     * @param bool $permissionsManageEncryptionKeys
     * @return self
     */
    public function setPermissionsManageEncryptionKeys($permissionsManageEncryptionKeys)
    {
        $this->permissionsManageEncryptionKeys = $permissionsManageEncryptionKeys;
        return $this;
    }

    /**
     * Gets as permissionsManageExchangeConfig
     *
     * @return bool
     */
    public function getPermissionsManageExchangeConfig()
    {
        return $this->permissionsManageExchangeConfig;
    }

    /**
     * Sets a new permissionsManageExchangeConfig
     *
     * @param bool $permissionsManageExchangeConfig
     * @return self
     */
    public function setPermissionsManageExchangeConfig($permissionsManageExchangeConfig)
    {
        $this->permissionsManageExchangeConfig = $permissionsManageExchangeConfig;
        return $this;
    }

    /**
     * Gets as permissionsManageHealthCheck
     *
     * @return bool
     */
    public function getPermissionsManageHealthCheck()
    {
        return $this->permissionsManageHealthCheck;
    }

    /**
     * Sets a new permissionsManageHealthCheck
     *
     * @param bool $permissionsManageHealthCheck
     * @return self
     */
    public function setPermissionsManageHealthCheck($permissionsManageHealthCheck)
    {
        $this->permissionsManageHealthCheck = $permissionsManageHealthCheck;
        return $this;
    }

    /**
     * Gets as permissionsManageInteraction
     *
     * @return bool
     */
    public function getPermissionsManageInteraction()
    {
        return $this->permissionsManageInteraction;
    }

    /**
     * Sets a new permissionsManageInteraction
     *
     * @param bool $permissionsManageInteraction
     * @return self
     */
    public function setPermissionsManageInteraction($permissionsManageInteraction)
    {
        $this->permissionsManageInteraction = $permissionsManageInteraction;
        return $this;
    }

    /**
     * Gets as permissionsManageInternalUsers
     *
     * @return bool
     */
    public function getPermissionsManageInternalUsers()
    {
        return $this->permissionsManageInternalUsers;
    }

    /**
     * Sets a new permissionsManageInternalUsers
     *
     * @param bool $permissionsManageInternalUsers
     * @return self
     */
    public function setPermissionsManageInternalUsers($permissionsManageInternalUsers)
    {
        $this->permissionsManageInternalUsers = $permissionsManageInternalUsers;
        return $this;
    }

    /**
     * Gets as permissionsManageIpAddresses
     *
     * @return bool
     */
    public function getPermissionsManageIpAddresses()
    {
        return $this->permissionsManageIpAddresses;
    }

    /**
     * Sets a new permissionsManageIpAddresses
     *
     * @param bool $permissionsManageIpAddresses
     * @return self
     */
    public function setPermissionsManageIpAddresses($permissionsManageIpAddresses)
    {
        $this->permissionsManageIpAddresses = $permissionsManageIpAddresses;
        return $this;
    }

    /**
     * Gets as permissionsManageKnowledge
     *
     * @return bool
     */
    public function getPermissionsManageKnowledge()
    {
        return $this->permissionsManageKnowledge;
    }

    /**
     * Sets a new permissionsManageKnowledge
     *
     * @param bool $permissionsManageKnowledge
     * @return self
     */
    public function setPermissionsManageKnowledge($permissionsManageKnowledge)
    {
        $this->permissionsManageKnowledge = $permissionsManageKnowledge;
        return $this;
    }

    /**
     * Gets as permissionsManageKnowledgeImportExport
     *
     * @return bool
     */
    public function getPermissionsManageKnowledgeImportExport()
    {
        return $this->permissionsManageKnowledgeImportExport;
    }

    /**
     * Sets a new permissionsManageKnowledgeImportExport
     *
     * @param bool $permissionsManageKnowledgeImportExport
     * @return self
     */
    public function setPermissionsManageKnowledgeImportExport($permissionsManageKnowledgeImportExport)
    {
        $this->permissionsManageKnowledgeImportExport = $permissionsManageKnowledgeImportExport;
        return $this;
    }

    /**
     * Gets as permissionsManageLeads
     *
     * @return bool
     */
    public function getPermissionsManageLeads()
    {
        return $this->permissionsManageLeads;
    }

    /**
     * Sets a new permissionsManageLeads
     *
     * @param bool $permissionsManageLeads
     * @return self
     */
    public function setPermissionsManageLeads($permissionsManageLeads)
    {
        $this->permissionsManageLeads = $permissionsManageLeads;
        return $this;
    }

    /**
     * Gets as permissionsManageLoginAccessPolicies
     *
     * @return bool
     */
    public function getPermissionsManageLoginAccessPolicies()
    {
        return $this->permissionsManageLoginAccessPolicies;
    }

    /**
     * Sets a new permissionsManageLoginAccessPolicies
     *
     * @param bool $permissionsManageLoginAccessPolicies
     * @return self
     */
    public function setPermissionsManageLoginAccessPolicies($permissionsManageLoginAccessPolicies)
    {
        $this->permissionsManageLoginAccessPolicies = $permissionsManageLoginAccessPolicies;
        return $this;
    }

    /**
     * Gets as permissionsManageMobile
     *
     * @return bool
     */
    public function getPermissionsManageMobile()
    {
        return $this->permissionsManageMobile;
    }

    /**
     * Sets a new permissionsManageMobile
     *
     * @param bool $permissionsManageMobile
     * @return self
     */
    public function setPermissionsManageMobile($permissionsManageMobile)
    {
        $this->permissionsManageMobile = $permissionsManageMobile;
        return $this;
    }

    /**
     * Gets as permissionsManageNetworks
     *
     * @return bool
     */
    public function getPermissionsManageNetworks()
    {
        return $this->permissionsManageNetworks;
    }

    /**
     * Sets a new permissionsManageNetworks
     *
     * @param bool $permissionsManageNetworks
     * @return self
     */
    public function setPermissionsManageNetworks($permissionsManageNetworks)
    {
        $this->permissionsManageNetworks = $permissionsManageNetworks;
        return $this;
    }

    /**
     * Gets as permissionsManagePasswordPolicies
     *
     * @return bool
     */
    public function getPermissionsManagePasswordPolicies()
    {
        return $this->permissionsManagePasswordPolicies;
    }

    /**
     * Sets a new permissionsManagePasswordPolicies
     *
     * @param bool $permissionsManagePasswordPolicies
     * @return self
     */
    public function setPermissionsManagePasswordPolicies($permissionsManagePasswordPolicies)
    {
        $this->permissionsManagePasswordPolicies = $permissionsManagePasswordPolicies;
        return $this;
    }

    /**
     * Gets as permissionsManageProfilesPermissionsets
     *
     * @return bool
     */
    public function getPermissionsManageProfilesPermissionsets()
    {
        return $this->permissionsManageProfilesPermissionsets;
    }

    /**
     * Sets a new permissionsManageProfilesPermissionsets
     *
     * @param bool $permissionsManageProfilesPermissionsets
     * @return self
     */
    public function setPermissionsManageProfilesPermissionsets($permissionsManageProfilesPermissionsets)
    {
        $this->permissionsManageProfilesPermissionsets = $permissionsManageProfilesPermissionsets;
        return $this;
    }

    /**
     * Gets as permissionsManagePvtRptsAndDashbds
     *
     * @return bool
     */
    public function getPermissionsManagePvtRptsAndDashbds()
    {
        return $this->permissionsManagePvtRptsAndDashbds;
    }

    /**
     * Sets a new permissionsManagePvtRptsAndDashbds
     *
     * @param bool $permissionsManagePvtRptsAndDashbds
     * @return self
     */
    public function setPermissionsManagePvtRptsAndDashbds($permissionsManagePvtRptsAndDashbds)
    {
        $this->permissionsManagePvtRptsAndDashbds = $permissionsManagePvtRptsAndDashbds;
        return $this;
    }

    /**
     * Gets as permissionsManageRemoteAccess
     *
     * @return bool
     */
    public function getPermissionsManageRemoteAccess()
    {
        return $this->permissionsManageRemoteAccess;
    }

    /**
     * Sets a new permissionsManageRemoteAccess
     *
     * @param bool $permissionsManageRemoteAccess
     * @return self
     */
    public function setPermissionsManageRemoteAccess($permissionsManageRemoteAccess)
    {
        $this->permissionsManageRemoteAccess = $permissionsManageRemoteAccess;
        return $this;
    }

    /**
     * Gets as permissionsManageReportsInPubFolders
     *
     * @return bool
     */
    public function getPermissionsManageReportsInPubFolders()
    {
        return $this->permissionsManageReportsInPubFolders;
    }

    /**
     * Sets a new permissionsManageReportsInPubFolders
     *
     * @param bool $permissionsManageReportsInPubFolders
     * @return self
     */
    public function setPermissionsManageReportsInPubFolders($permissionsManageReportsInPubFolders)
    {
        $this->permissionsManageReportsInPubFolders = $permissionsManageReportsInPubFolders;
        return $this;
    }

    /**
     * Gets as permissionsManageRoles
     *
     * @return bool
     */
    public function getPermissionsManageRoles()
    {
        return $this->permissionsManageRoles;
    }

    /**
     * Sets a new permissionsManageRoles
     *
     * @param bool $permissionsManageRoles
     * @return self
     */
    public function setPermissionsManageRoles($permissionsManageRoles)
    {
        $this->permissionsManageRoles = $permissionsManageRoles;
        return $this;
    }

    /**
     * Gets as permissionsManageSearchPromotionRules
     *
     * @return bool
     */
    public function getPermissionsManageSearchPromotionRules()
    {
        return $this->permissionsManageSearchPromotionRules;
    }

    /**
     * Sets a new permissionsManageSearchPromotionRules
     *
     * @param bool $permissionsManageSearchPromotionRules
     * @return self
     */
    public function setPermissionsManageSearchPromotionRules($permissionsManageSearchPromotionRules)
    {
        $this->permissionsManageSearchPromotionRules = $permissionsManageSearchPromotionRules;
        return $this;
    }

    /**
     * Gets as permissionsManageSessionPermissionSets
     *
     * @return bool
     */
    public function getPermissionsManageSessionPermissionSets()
    {
        return $this->permissionsManageSessionPermissionSets;
    }

    /**
     * Sets a new permissionsManageSessionPermissionSets
     *
     * @param bool $permissionsManageSessionPermissionSets
     * @return self
     */
    public function setPermissionsManageSessionPermissionSets($permissionsManageSessionPermissionSets)
    {
        $this->permissionsManageSessionPermissionSets = $permissionsManageSessionPermissionSets;
        return $this;
    }

    /**
     * Gets as permissionsManageSharing
     *
     * @return bool
     */
    public function getPermissionsManageSharing()
    {
        return $this->permissionsManageSharing;
    }

    /**
     * Sets a new permissionsManageSharing
     *
     * @param bool $permissionsManageSharing
     * @return self
     */
    public function setPermissionsManageSharing($permissionsManageSharing)
    {
        $this->permissionsManageSharing = $permissionsManageSharing;
        return $this;
    }

    /**
     * Gets as permissionsManageSolutions
     *
     * @return bool
     */
    public function getPermissionsManageSolutions()
    {
        return $this->permissionsManageSolutions;
    }

    /**
     * Sets a new permissionsManageSolutions
     *
     * @param bool $permissionsManageSolutions
     * @return self
     */
    public function setPermissionsManageSolutions($permissionsManageSolutions)
    {
        $this->permissionsManageSolutions = $permissionsManageSolutions;
        return $this;
    }

    /**
     * Gets as permissionsManageSurveys
     *
     * @return bool
     */
    public function getPermissionsManageSurveys()
    {
        return $this->permissionsManageSurveys;
    }

    /**
     * Sets a new permissionsManageSurveys
     *
     * @param bool $permissionsManageSurveys
     * @return self
     */
    public function setPermissionsManageSurveys($permissionsManageSurveys)
    {
        $this->permissionsManageSurveys = $permissionsManageSurveys;
        return $this;
    }

    /**
     * Gets as permissionsManageSynonyms
     *
     * @return bool
     */
    public function getPermissionsManageSynonyms()
    {
        return $this->permissionsManageSynonyms;
    }

    /**
     * Sets a new permissionsManageSynonyms
     *
     * @param bool $permissionsManageSynonyms
     * @return self
     */
    public function setPermissionsManageSynonyms($permissionsManageSynonyms)
    {
        $this->permissionsManageSynonyms = $permissionsManageSynonyms;
        return $this;
    }

    /**
     * Gets as permissionsManageTemplatedApp
     *
     * @return bool
     */
    public function getPermissionsManageTemplatedApp()
    {
        return $this->permissionsManageTemplatedApp;
    }

    /**
     * Sets a new permissionsManageTemplatedApp
     *
     * @param bool $permissionsManageTemplatedApp
     * @return self
     */
    public function setPermissionsManageTemplatedApp($permissionsManageTemplatedApp)
    {
        $this->permissionsManageTemplatedApp = $permissionsManageTemplatedApp;
        return $this;
    }

    /**
     * Gets as permissionsManageTwoFactor
     *
     * @return bool
     */
    public function getPermissionsManageTwoFactor()
    {
        return $this->permissionsManageTwoFactor;
    }

    /**
     * Sets a new permissionsManageTwoFactor
     *
     * @param bool $permissionsManageTwoFactor
     * @return self
     */
    public function setPermissionsManageTwoFactor($permissionsManageTwoFactor)
    {
        $this->permissionsManageTwoFactor = $permissionsManageTwoFactor;
        return $this;
    }

    /**
     * Gets as permissionsManageUnlistedGroups
     *
     * @return bool
     */
    public function getPermissionsManageUnlistedGroups()
    {
        return $this->permissionsManageUnlistedGroups;
    }

    /**
     * Sets a new permissionsManageUnlistedGroups
     *
     * @param bool $permissionsManageUnlistedGroups
     * @return self
     */
    public function setPermissionsManageUnlistedGroups($permissionsManageUnlistedGroups)
    {
        $this->permissionsManageUnlistedGroups = $permissionsManageUnlistedGroups;
        return $this;
    }

    /**
     * Gets as permissionsManageUsers
     *
     * @return bool
     */
    public function getPermissionsManageUsers()
    {
        return $this->permissionsManageUsers;
    }

    /**
     * Sets a new permissionsManageUsers
     *
     * @param bool $permissionsManageUsers
     * @return self
     */
    public function setPermissionsManageUsers($permissionsManageUsers)
    {
        $this->permissionsManageUsers = $permissionsManageUsers;
        return $this;
    }

    /**
     * Gets as permissionsMassInlineEdit
     *
     * @return bool
     */
    public function getPermissionsMassInlineEdit()
    {
        return $this->permissionsMassInlineEdit;
    }

    /**
     * Sets a new permissionsMassInlineEdit
     *
     * @param bool $permissionsMassInlineEdit
     * @return self
     */
    public function setPermissionsMassInlineEdit($permissionsMassInlineEdit)
    {
        $this->permissionsMassInlineEdit = $permissionsMassInlineEdit;
        return $this;
    }

    /**
     * Gets as permissionsMergeTopics
     *
     * @return bool
     */
    public function getPermissionsMergeTopics()
    {
        return $this->permissionsMergeTopics;
    }

    /**
     * Sets a new permissionsMergeTopics
     *
     * @param bool $permissionsMergeTopics
     * @return self
     */
    public function setPermissionsMergeTopics($permissionsMergeTopics)
    {
        $this->permissionsMergeTopics = $permissionsMergeTopics;
        return $this;
    }

    /**
     * Gets as permissionsModerateChatter
     *
     * @return bool
     */
    public function getPermissionsModerateChatter()
    {
        return $this->permissionsModerateChatter;
    }

    /**
     * Sets a new permissionsModerateChatter
     *
     * @param bool $permissionsModerateChatter
     * @return self
     */
    public function setPermissionsModerateChatter($permissionsModerateChatter)
    {
        $this->permissionsModerateChatter = $permissionsModerateChatter;
        return $this;
    }

    /**
     * Gets as permissionsModerateNetworkUsers
     *
     * @return bool
     */
    public function getPermissionsModerateNetworkUsers()
    {
        return $this->permissionsModerateNetworkUsers;
    }

    /**
     * Sets a new permissionsModerateNetworkUsers
     *
     * @param bool $permissionsModerateNetworkUsers
     * @return self
     */
    public function setPermissionsModerateNetworkUsers($permissionsModerateNetworkUsers)
    {
        $this->permissionsModerateNetworkUsers = $permissionsModerateNetworkUsers;
        return $this;
    }

    /**
     * Gets as permissionsModifyAllData
     *
     * @return bool
     */
    public function getPermissionsModifyAllData()
    {
        return $this->permissionsModifyAllData;
    }

    /**
     * Sets a new permissionsModifyAllData
     *
     * @param bool $permissionsModifyAllData
     * @return self
     */
    public function setPermissionsModifyAllData($permissionsModifyAllData)
    {
        $this->permissionsModifyAllData = $permissionsModifyAllData;
        return $this;
    }

    /**
     * Gets as permissionsModifyMetadata
     *
     * @return bool
     */
    public function getPermissionsModifyMetadata()
    {
        return $this->permissionsModifyMetadata;
    }

    /**
     * Sets a new permissionsModifyMetadata
     *
     * @param bool $permissionsModifyMetadata
     * @return self
     */
    public function setPermissionsModifyMetadata($permissionsModifyMetadata)
    {
        $this->permissionsModifyMetadata = $permissionsModifyMetadata;
        return $this;
    }

    /**
     * Gets as permissionsModifySecureAgents
     *
     * @return bool
     */
    public function getPermissionsModifySecureAgents()
    {
        return $this->permissionsModifySecureAgents;
    }

    /**
     * Sets a new permissionsModifySecureAgents
     *
     * @param bool $permissionsModifySecureAgents
     * @return self
     */
    public function setPermissionsModifySecureAgents($permissionsModifySecureAgents)
    {
        $this->permissionsModifySecureAgents = $permissionsModifySecureAgents;
        return $this;
    }

    /**
     * Gets as permissionsNewReportBuilder
     *
     * @return bool
     */
    public function getPermissionsNewReportBuilder()
    {
        return $this->permissionsNewReportBuilder;
    }

    /**
     * Sets a new permissionsNewReportBuilder
     *
     * @param bool $permissionsNewReportBuilder
     * @return self
     */
    public function setPermissionsNewReportBuilder($permissionsNewReportBuilder)
    {
        $this->permissionsNewReportBuilder = $permissionsNewReportBuilder;
        return $this;
    }

    /**
     * Gets as permissionsPackaging2
     *
     * @return bool
     */
    public function getPermissionsPackaging2()
    {
        return $this->permissionsPackaging2;
    }

    /**
     * Sets a new permissionsPackaging2
     *
     * @param bool $permissionsPackaging2
     * @return self
     */
    public function setPermissionsPackaging2($permissionsPackaging2)
    {
        $this->permissionsPackaging2 = $permissionsPackaging2;
        return $this;
    }

    /**
     * Gets as permissionsPasswordNeverExpires
     *
     * @return bool
     */
    public function getPermissionsPasswordNeverExpires()
    {
        return $this->permissionsPasswordNeverExpires;
    }

    /**
     * Sets a new permissionsPasswordNeverExpires
     *
     * @param bool $permissionsPasswordNeverExpires
     * @return self
     */
    public function setPermissionsPasswordNeverExpires($permissionsPasswordNeverExpires)
    {
        $this->permissionsPasswordNeverExpires = $permissionsPasswordNeverExpires;
        return $this;
    }

    /**
     * Gets as permissionsPreventClassicExperience
     *
     * @return bool
     */
    public function getPermissionsPreventClassicExperience()
    {
        return $this->permissionsPreventClassicExperience;
    }

    /**
     * Sets a new permissionsPreventClassicExperience
     *
     * @param bool $permissionsPreventClassicExperience
     * @return self
     */
    public function setPermissionsPreventClassicExperience($permissionsPreventClassicExperience)
    {
        $this->permissionsPreventClassicExperience = $permissionsPreventClassicExperience;
        return $this;
    }

    /**
     * Gets as permissionsPrivacyDataAccess
     *
     * @return bool
     */
    public function getPermissionsPrivacyDataAccess()
    {
        return $this->permissionsPrivacyDataAccess;
    }

    /**
     * Sets a new permissionsPrivacyDataAccess
     *
     * @param bool $permissionsPrivacyDataAccess
     * @return self
     */
    public function setPermissionsPrivacyDataAccess($permissionsPrivacyDataAccess)
    {
        $this->permissionsPrivacyDataAccess = $permissionsPrivacyDataAccess;
        return $this;
    }

    /**
     * Gets as permissionsPublishMultiforce
     *
     * @return bool
     */
    public function getPermissionsPublishMultiforce()
    {
        return $this->permissionsPublishMultiforce;
    }

    /**
     * Sets a new permissionsPublishMultiforce
     *
     * @param bool $permissionsPublishMultiforce
     * @return self
     */
    public function setPermissionsPublishMultiforce($permissionsPublishMultiforce)
    {
        $this->permissionsPublishMultiforce = $permissionsPublishMultiforce;
        return $this;
    }

    /**
     * Gets as permissionsRemoveDirectMessageMembers
     *
     * @return bool
     */
    public function getPermissionsRemoveDirectMessageMembers()
    {
        return $this->permissionsRemoveDirectMessageMembers;
    }

    /**
     * Sets a new permissionsRemoveDirectMessageMembers
     *
     * @param bool $permissionsRemoveDirectMessageMembers
     * @return self
     */
    public function setPermissionsRemoveDirectMessageMembers($permissionsRemoveDirectMessageMembers)
    {
        $this->permissionsRemoveDirectMessageMembers = $permissionsRemoveDirectMessageMembers;
        return $this;
    }

    /**
     * Gets as permissionsResetPasswords
     *
     * @return bool
     */
    public function getPermissionsResetPasswords()
    {
        return $this->permissionsResetPasswords;
    }

    /**
     * Sets a new permissionsResetPasswords
     *
     * @param bool $permissionsResetPasswords
     * @return self
     */
    public function setPermissionsResetPasswords($permissionsResetPasswords)
    {
        $this->permissionsResetPasswords = $permissionsResetPasswords;
        return $this;
    }

    /**
     * Gets as permissionsRunFlow
     *
     * @return bool
     */
    public function getPermissionsRunFlow()
    {
        return $this->permissionsRunFlow;
    }

    /**
     * Sets a new permissionsRunFlow
     *
     * @param bool $permissionsRunFlow
     * @return self
     */
    public function setPermissionsRunFlow($permissionsRunFlow)
    {
        $this->permissionsRunFlow = $permissionsRunFlow;
        return $this;
    }

    /**
     * Gets as permissionsRunReports
     *
     * @return bool
     */
    public function getPermissionsRunReports()
    {
        return $this->permissionsRunReports;
    }

    /**
     * Sets a new permissionsRunReports
     *
     * @param bool $permissionsRunReports
     * @return self
     */
    public function setPermissionsRunReports($permissionsRunReports)
    {
        $this->permissionsRunReports = $permissionsRunReports;
        return $this;
    }

    /**
     * Gets as permissionsSalesConsole
     *
     * @return bool
     */
    public function getPermissionsSalesConsole()
    {
        return $this->permissionsSalesConsole;
    }

    /**
     * Sets a new permissionsSalesConsole
     *
     * @param bool $permissionsSalesConsole
     * @return self
     */
    public function setPermissionsSalesConsole($permissionsSalesConsole)
    {
        $this->permissionsSalesConsole = $permissionsSalesConsole;
        return $this;
    }

    /**
     * Gets as permissionsScheduleReports
     *
     * @return bool
     */
    public function getPermissionsScheduleReports()
    {
        return $this->permissionsScheduleReports;
    }

    /**
     * Sets a new permissionsScheduleReports
     *
     * @param bool $permissionsScheduleReports
     * @return self
     */
    public function setPermissionsScheduleReports($permissionsScheduleReports)
    {
        $this->permissionsScheduleReports = $permissionsScheduleReports;
        return $this;
    }

    /**
     * Gets as permissionsSelectFilesFromSalesforce
     *
     * @return bool
     */
    public function getPermissionsSelectFilesFromSalesforce()
    {
        return $this->permissionsSelectFilesFromSalesforce;
    }

    /**
     * Sets a new permissionsSelectFilesFromSalesforce
     *
     * @param bool $permissionsSelectFilesFromSalesforce
     * @return self
     */
    public function setPermissionsSelectFilesFromSalesforce($permissionsSelectFilesFromSalesforce)
    {
        $this->permissionsSelectFilesFromSalesforce = $permissionsSelectFilesFromSalesforce;
        return $this;
    }

    /**
     * Gets as permissionsSendAnnouncementEmails
     *
     * @return bool
     */
    public function getPermissionsSendAnnouncementEmails()
    {
        return $this->permissionsSendAnnouncementEmails;
    }

    /**
     * Sets a new permissionsSendAnnouncementEmails
     *
     * @param bool $permissionsSendAnnouncementEmails
     * @return self
     */
    public function setPermissionsSendAnnouncementEmails($permissionsSendAnnouncementEmails)
    {
        $this->permissionsSendAnnouncementEmails = $permissionsSendAnnouncementEmails;
        return $this;
    }

    /**
     * Gets as permissionsSendSitRequests
     *
     * @return bool
     */
    public function getPermissionsSendSitRequests()
    {
        return $this->permissionsSendSitRequests;
    }

    /**
     * Sets a new permissionsSendSitRequests
     *
     * @param bool $permissionsSendSitRequests
     * @return self
     */
    public function setPermissionsSendSitRequests($permissionsSendSitRequests)
    {
        $this->permissionsSendSitRequests = $permissionsSendSitRequests;
        return $this;
    }

    /**
     * Gets as permissionsShareInternalArticles
     *
     * @return bool
     */
    public function getPermissionsShareInternalArticles()
    {
        return $this->permissionsShareInternalArticles;
    }

    /**
     * Sets a new permissionsShareInternalArticles
     *
     * @param bool $permissionsShareInternalArticles
     * @return self
     */
    public function setPermissionsShareInternalArticles($permissionsShareInternalArticles)
    {
        $this->permissionsShareInternalArticles = $permissionsShareInternalArticles;
        return $this;
    }

    /**
     * Gets as permissionsShowCompanyNameAsUserBadge
     *
     * @return bool
     */
    public function getPermissionsShowCompanyNameAsUserBadge()
    {
        return $this->permissionsShowCompanyNameAsUserBadge;
    }

    /**
     * Sets a new permissionsShowCompanyNameAsUserBadge
     *
     * @param bool $permissionsShowCompanyNameAsUserBadge
     * @return self
     */
    public function setPermissionsShowCompanyNameAsUserBadge($permissionsShowCompanyNameAsUserBadge)
    {
        $this->permissionsShowCompanyNameAsUserBadge = $permissionsShowCompanyNameAsUserBadge;
        return $this;
    }

    /**
     * Gets as permissionsSolutionImport
     *
     * @return bool
     */
    public function getPermissionsSolutionImport()
    {
        return $this->permissionsSolutionImport;
    }

    /**
     * Sets a new permissionsSolutionImport
     *
     * @param bool $permissionsSolutionImport
     * @return self
     */
    public function setPermissionsSolutionImport($permissionsSolutionImport)
    {
        $this->permissionsSolutionImport = $permissionsSolutionImport;
        return $this;
    }

    /**
     * Gets as permissionsStdAutomaticActivityCapture
     *
     * @return bool
     */
    public function getPermissionsStdAutomaticActivityCapture()
    {
        return $this->permissionsStdAutomaticActivityCapture;
    }

    /**
     * Sets a new permissionsStdAutomaticActivityCapture
     *
     * @param bool $permissionsStdAutomaticActivityCapture
     * @return self
     */
    public function setPermissionsStdAutomaticActivityCapture($permissionsStdAutomaticActivityCapture)
    {
        $this->permissionsStdAutomaticActivityCapture = $permissionsStdAutomaticActivityCapture;
        return $this;
    }

    /**
     * Gets as permissionsSubmitMacrosAllowed
     *
     * @return bool
     */
    public function getPermissionsSubmitMacrosAllowed()
    {
        return $this->permissionsSubmitMacrosAllowed;
    }

    /**
     * Sets a new permissionsSubmitMacrosAllowed
     *
     * @param bool $permissionsSubmitMacrosAllowed
     * @return self
     */
    public function setPermissionsSubmitMacrosAllowed($permissionsSubmitMacrosAllowed)
    {
        $this->permissionsSubmitMacrosAllowed = $permissionsSubmitMacrosAllowed;
        return $this;
    }

    /**
     * Gets as permissionsSubscribeDashboardToOtherUsers
     *
     * @return bool
     */
    public function getPermissionsSubscribeDashboardToOtherUsers()
    {
        return $this->permissionsSubscribeDashboardToOtherUsers;
    }

    /**
     * Sets a new permissionsSubscribeDashboardToOtherUsers
     *
     * @param bool $permissionsSubscribeDashboardToOtherUsers
     * @return self
     */
    public function setPermissionsSubscribeDashboardToOtherUsers($permissionsSubscribeDashboardToOtherUsers)
    {
        $this->permissionsSubscribeDashboardToOtherUsers = $permissionsSubscribeDashboardToOtherUsers;
        return $this;
    }

    /**
     * Gets as permissionsSubscribeReportToOtherUsers
     *
     * @return bool
     */
    public function getPermissionsSubscribeReportToOtherUsers()
    {
        return $this->permissionsSubscribeReportToOtherUsers;
    }

    /**
     * Sets a new permissionsSubscribeReportToOtherUsers
     *
     * @param bool $permissionsSubscribeReportToOtherUsers
     * @return self
     */
    public function setPermissionsSubscribeReportToOtherUsers($permissionsSubscribeReportToOtherUsers)
    {
        $this->permissionsSubscribeReportToOtherUsers = $permissionsSubscribeReportToOtherUsers;
        return $this;
    }

    /**
     * Gets as permissionsSubscribeReportsRunAsUser
     *
     * @return bool
     */
    public function getPermissionsSubscribeReportsRunAsUser()
    {
        return $this->permissionsSubscribeReportsRunAsUser;
    }

    /**
     * Sets a new permissionsSubscribeReportsRunAsUser
     *
     * @param bool $permissionsSubscribeReportsRunAsUser
     * @return self
     */
    public function setPermissionsSubscribeReportsRunAsUser($permissionsSubscribeReportsRunAsUser)
    {
        $this->permissionsSubscribeReportsRunAsUser = $permissionsSubscribeReportsRunAsUser;
        return $this;
    }

    /**
     * Gets as permissionsSubscribeToLightningDashboards
     *
     * @return bool
     */
    public function getPermissionsSubscribeToLightningDashboards()
    {
        return $this->permissionsSubscribeToLightningDashboards;
    }

    /**
     * Sets a new permissionsSubscribeToLightningDashboards
     *
     * @param bool $permissionsSubscribeToLightningDashboards
     * @return self
     */
    public function setPermissionsSubscribeToLightningDashboards($permissionsSubscribeToLightningDashboards)
    {
        $this->permissionsSubscribeToLightningDashboards = $permissionsSubscribeToLightningDashboards;
        return $this;
    }

    /**
     * Gets as permissionsSubscribeToLightningReports
     *
     * @return bool
     */
    public function getPermissionsSubscribeToLightningReports()
    {
        return $this->permissionsSubscribeToLightningReports;
    }

    /**
     * Sets a new permissionsSubscribeToLightningReports
     *
     * @param bool $permissionsSubscribeToLightningReports
     * @return self
     */
    public function setPermissionsSubscribeToLightningReports($permissionsSubscribeToLightningReports)
    {
        $this->permissionsSubscribeToLightningReports = $permissionsSubscribeToLightningReports;
        return $this;
    }

    /**
     * Gets as permissionsTransferAnyCase
     *
     * @return bool
     */
    public function getPermissionsTransferAnyCase()
    {
        return $this->permissionsTransferAnyCase;
    }

    /**
     * Sets a new permissionsTransferAnyCase
     *
     * @param bool $permissionsTransferAnyCase
     * @return self
     */
    public function setPermissionsTransferAnyCase($permissionsTransferAnyCase)
    {
        $this->permissionsTransferAnyCase = $permissionsTransferAnyCase;
        return $this;
    }

    /**
     * Gets as permissionsTransferAnyEntity
     *
     * @return bool
     */
    public function getPermissionsTransferAnyEntity()
    {
        return $this->permissionsTransferAnyEntity;
    }

    /**
     * Sets a new permissionsTransferAnyEntity
     *
     * @param bool $permissionsTransferAnyEntity
     * @return self
     */
    public function setPermissionsTransferAnyEntity($permissionsTransferAnyEntity)
    {
        $this->permissionsTransferAnyEntity = $permissionsTransferAnyEntity;
        return $this;
    }

    /**
     * Gets as permissionsTransferAnyLead
     *
     * @return bool
     */
    public function getPermissionsTransferAnyLead()
    {
        return $this->permissionsTransferAnyLead;
    }

    /**
     * Sets a new permissionsTransferAnyLead
     *
     * @param bool $permissionsTransferAnyLead
     * @return self
     */
    public function setPermissionsTransferAnyLead($permissionsTransferAnyLead)
    {
        $this->permissionsTransferAnyLead = $permissionsTransferAnyLead;
        return $this;
    }

    /**
     * Gets as permissionsTwoFactorApi
     *
     * @return bool
     */
    public function getPermissionsTwoFactorApi()
    {
        return $this->permissionsTwoFactorApi;
    }

    /**
     * Sets a new permissionsTwoFactorApi
     *
     * @param bool $permissionsTwoFactorApi
     * @return self
     */
    public function setPermissionsTwoFactorApi($permissionsTwoFactorApi)
    {
        $this->permissionsTwoFactorApi = $permissionsTwoFactorApi;
        return $this;
    }

    /**
     * Gets as permissionsUseTeamReassignWizards
     *
     * @return bool
     */
    public function getPermissionsUseTeamReassignWizards()
    {
        return $this->permissionsUseTeamReassignWizards;
    }

    /**
     * Sets a new permissionsUseTeamReassignWizards
     *
     * @param bool $permissionsUseTeamReassignWizards
     * @return self
     */
    public function setPermissionsUseTeamReassignWizards($permissionsUseTeamReassignWizards)
    {
        $this->permissionsUseTeamReassignWizards = $permissionsUseTeamReassignWizards;
        return $this;
    }

    /**
     * Gets as permissionsUseTemplatedApp
     *
     * @return bool
     */
    public function getPermissionsUseTemplatedApp()
    {
        return $this->permissionsUseTemplatedApp;
    }

    /**
     * Sets a new permissionsUseTemplatedApp
     *
     * @param bool $permissionsUseTemplatedApp
     * @return self
     */
    public function setPermissionsUseTemplatedApp($permissionsUseTemplatedApp)
    {
        $this->permissionsUseTemplatedApp = $permissionsUseTemplatedApp;
        return $this;
    }

    /**
     * Gets as permissionsUseWebLink
     *
     * @return bool
     */
    public function getPermissionsUseWebLink()
    {
        return $this->permissionsUseWebLink;
    }

    /**
     * Sets a new permissionsUseWebLink
     *
     * @param bool $permissionsUseWebLink
     * @return self
     */
    public function setPermissionsUseWebLink($permissionsUseWebLink)
    {
        $this->permissionsUseWebLink = $permissionsUseWebLink;
        return $this;
    }

    /**
     * Gets as permissionsViewAllActivities
     *
     * @return bool
     */
    public function getPermissionsViewAllActivities()
    {
        return $this->permissionsViewAllActivities;
    }

    /**
     * Sets a new permissionsViewAllActivities
     *
     * @param bool $permissionsViewAllActivities
     * @return self
     */
    public function setPermissionsViewAllActivities($permissionsViewAllActivities)
    {
        $this->permissionsViewAllActivities = $permissionsViewAllActivities;
        return $this;
    }

    /**
     * Gets as permissionsViewAllData
     *
     * @return bool
     */
    public function getPermissionsViewAllData()
    {
        return $this->permissionsViewAllData;
    }

    /**
     * Sets a new permissionsViewAllData
     *
     * @param bool $permissionsViewAllData
     * @return self
     */
    public function setPermissionsViewAllData($permissionsViewAllData)
    {
        $this->permissionsViewAllData = $permissionsViewAllData;
        return $this;
    }

    /**
     * Gets as permissionsViewAllUsers
     *
     * @return bool
     */
    public function getPermissionsViewAllUsers()
    {
        return $this->permissionsViewAllUsers;
    }

    /**
     * Sets a new permissionsViewAllUsers
     *
     * @param bool $permissionsViewAllUsers
     * @return self
     */
    public function setPermissionsViewAllUsers($permissionsViewAllUsers)
    {
        $this->permissionsViewAllUsers = $permissionsViewAllUsers;
        return $this;
    }

    /**
     * Gets as permissionsViewContent
     *
     * @return bool
     */
    public function getPermissionsViewContent()
    {
        return $this->permissionsViewContent;
    }

    /**
     * Sets a new permissionsViewContent
     *
     * @param bool $permissionsViewContent
     * @return self
     */
    public function setPermissionsViewContent($permissionsViewContent)
    {
        $this->permissionsViewContent = $permissionsViewContent;
        return $this;
    }

    /**
     * Gets as permissionsViewDataAssessment
     *
     * @return bool
     */
    public function getPermissionsViewDataAssessment()
    {
        return $this->permissionsViewDataAssessment;
    }

    /**
     * Sets a new permissionsViewDataAssessment
     *
     * @param bool $permissionsViewDataAssessment
     * @return self
     */
    public function setPermissionsViewDataAssessment($permissionsViewDataAssessment)
    {
        $this->permissionsViewDataAssessment = $permissionsViewDataAssessment;
        return $this;
    }

    /**
     * Gets as permissionsViewDataCategories
     *
     * @return bool
     */
    public function getPermissionsViewDataCategories()
    {
        return $this->permissionsViewDataCategories;
    }

    /**
     * Sets a new permissionsViewDataCategories
     *
     * @param bool $permissionsViewDataCategories
     * @return self
     */
    public function setPermissionsViewDataCategories($permissionsViewDataCategories)
    {
        $this->permissionsViewDataCategories = $permissionsViewDataCategories;
        return $this;
    }

    /**
     * Gets as permissionsViewEncryptedData
     *
     * @return bool
     */
    public function getPermissionsViewEncryptedData()
    {
        return $this->permissionsViewEncryptedData;
    }

    /**
     * Sets a new permissionsViewEncryptedData
     *
     * @param bool $permissionsViewEncryptedData
     * @return self
     */
    public function setPermissionsViewEncryptedData($permissionsViewEncryptedData)
    {
        $this->permissionsViewEncryptedData = $permissionsViewEncryptedData;
        return $this;
    }

    /**
     * Gets as permissionsViewEventLogFiles
     *
     * @return bool
     */
    public function getPermissionsViewEventLogFiles()
    {
        return $this->permissionsViewEventLogFiles;
    }

    /**
     * Sets a new permissionsViewEventLogFiles
     *
     * @param bool $permissionsViewEventLogFiles
     * @return self
     */
    public function setPermissionsViewEventLogFiles($permissionsViewEventLogFiles)
    {
        $this->permissionsViewEventLogFiles = $permissionsViewEventLogFiles;
        return $this;
    }

    /**
     * Gets as permissionsViewHealthCheck
     *
     * @return bool
     */
    public function getPermissionsViewHealthCheck()
    {
        return $this->permissionsViewHealthCheck;
    }

    /**
     * Sets a new permissionsViewHealthCheck
     *
     * @param bool $permissionsViewHealthCheck
     * @return self
     */
    public function setPermissionsViewHealthCheck($permissionsViewHealthCheck)
    {
        $this->permissionsViewHealthCheck = $permissionsViewHealthCheck;
        return $this;
    }

    /**
     * Gets as permissionsViewHelpLink
     *
     * @return bool
     */
    public function getPermissionsViewHelpLink()
    {
        return $this->permissionsViewHelpLink;
    }

    /**
     * Sets a new permissionsViewHelpLink
     *
     * @param bool $permissionsViewHelpLink
     * @return self
     */
    public function setPermissionsViewHelpLink($permissionsViewHelpLink)
    {
        $this->permissionsViewHelpLink = $permissionsViewHelpLink;
        return $this;
    }

    /**
     * Gets as permissionsViewMyTeamsDashboards
     *
     * @return bool
     */
    public function getPermissionsViewMyTeamsDashboards()
    {
        return $this->permissionsViewMyTeamsDashboards;
    }

    /**
     * Sets a new permissionsViewMyTeamsDashboards
     *
     * @param bool $permissionsViewMyTeamsDashboards
     * @return self
     */
    public function setPermissionsViewMyTeamsDashboards($permissionsViewMyTeamsDashboards)
    {
        $this->permissionsViewMyTeamsDashboards = $permissionsViewMyTeamsDashboards;
        return $this;
    }

    /**
     * Gets as permissionsViewOnlyEmbeddedAppUser
     *
     * @return bool
     */
    public function getPermissionsViewOnlyEmbeddedAppUser()
    {
        return $this->permissionsViewOnlyEmbeddedAppUser;
    }

    /**
     * Sets a new permissionsViewOnlyEmbeddedAppUser
     *
     * @param bool $permissionsViewOnlyEmbeddedAppUser
     * @return self
     */
    public function setPermissionsViewOnlyEmbeddedAppUser($permissionsViewOnlyEmbeddedAppUser)
    {
        $this->permissionsViewOnlyEmbeddedAppUser = $permissionsViewOnlyEmbeddedAppUser;
        return $this;
    }

    /**
     * Gets as permissionsViewPublicDashboards
     *
     * @return bool
     */
    public function getPermissionsViewPublicDashboards()
    {
        return $this->permissionsViewPublicDashboards;
    }

    /**
     * Sets a new permissionsViewPublicDashboards
     *
     * @param bool $permissionsViewPublicDashboards
     * @return self
     */
    public function setPermissionsViewPublicDashboards($permissionsViewPublicDashboards)
    {
        $this->permissionsViewPublicDashboards = $permissionsViewPublicDashboards;
        return $this;
    }

    /**
     * Gets as permissionsViewPublicReports
     *
     * @return bool
     */
    public function getPermissionsViewPublicReports()
    {
        return $this->permissionsViewPublicReports;
    }

    /**
     * Sets a new permissionsViewPublicReports
     *
     * @param bool $permissionsViewPublicReports
     * @return self
     */
    public function setPermissionsViewPublicReports($permissionsViewPublicReports)
    {
        $this->permissionsViewPublicReports = $permissionsViewPublicReports;
        return $this;
    }

    /**
     * Gets as permissionsViewRoles
     *
     * @return bool
     */
    public function getPermissionsViewRoles()
    {
        return $this->permissionsViewRoles;
    }

    /**
     * Sets a new permissionsViewRoles
     *
     * @param bool $permissionsViewRoles
     * @return self
     */
    public function setPermissionsViewRoles($permissionsViewRoles)
    {
        $this->permissionsViewRoles = $permissionsViewRoles;
        return $this;
    }

    /**
     * Gets as permissionsViewSetup
     *
     * @return bool
     */
    public function getPermissionsViewSetup()
    {
        return $this->permissionsViewSetup;
    }

    /**
     * Sets a new permissionsViewSetup
     *
     * @param bool $permissionsViewSetup
     * @return self
     */
    public function setPermissionsViewSetup($permissionsViewSetup)
    {
        $this->permissionsViewSetup = $permissionsViewSetup;
        return $this;
    }

    /**
     * Gets as permissionsWaveTabularDownload
     *
     * @return bool
     */
    public function getPermissionsWaveTabularDownload()
    {
        return $this->permissionsWaveTabularDownload;
    }

    /**
     * Sets a new permissionsWaveTabularDownload
     *
     * @param bool $permissionsWaveTabularDownload
     * @return self
     */
    public function setPermissionsWaveTabularDownload($permissionsWaveTabularDownload)
    {
        $this->permissionsWaveTabularDownload = $permissionsWaveTabularDownload;
        return $this;
    }

    /**
     * Gets as permissionsWorkCalibrationUser
     *
     * @return bool
     */
    public function getPermissionsWorkCalibrationUser()
    {
        return $this->permissionsWorkCalibrationUser;
    }

    /**
     * Sets a new permissionsWorkCalibrationUser
     *
     * @param bool $permissionsWorkCalibrationUser
     * @return self
     */
    public function setPermissionsWorkCalibrationUser($permissionsWorkCalibrationUser)
    {
        $this->permissionsWorkCalibrationUser = $permissionsWorkCalibrationUser;
        return $this;
    }

    /**
     * Gets as permissionsWorkDotComUserPerm
     *
     * @return bool
     */
    public function getPermissionsWorkDotComUserPerm()
    {
        return $this->permissionsWorkDotComUserPerm;
    }

    /**
     * Sets a new permissionsWorkDotComUserPerm
     *
     * @param bool $permissionsWorkDotComUserPerm
     * @return self
     */
    public function setPermissionsWorkDotComUserPerm($permissionsWorkDotComUserPerm)
    {
        $this->permissionsWorkDotComUserPerm = $permissionsWorkDotComUserPerm;
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
     * Gets as userLicense
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserLicenseType
     */
    public function getUserLicense()
    {
        return $this->userLicense;
    }

    /**
     * Sets a new userLicense
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserLicenseType $userLicense
     * @return self
     */
    public function setUserLicense(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserLicenseType $userLicense)
    {
        $this->userLicense = $userLicense;
        return $this;
    }

    /**
     * Gets as userLicenseId
     *
     * @return string
     */
    public function getUserLicenseId()
    {
        return $this->userLicenseId;
    }

    /**
     * Sets a new userLicenseId
     *
     * @param string $userLicenseId
     * @return self
     */
    public function setUserLicenseId($userLicenseId)
    {
        $this->userLicenseId = $userLicenseId;
        return $this;
    }

    /**
     * Gets as userType
     *
     * @return string
     */
    public function getUserType()
    {
        return $this->userType;
    }

    /**
     * Sets a new userType
     *
     * @param string $userType
     * @return self
     */
    public function setUserType($userType)
    {
        $this->userType = $userType;
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

