<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing UserType
 *
 *
 * XSD Type: User
 */
class UserType extends SObjectType
{

    /**
     * @property string $aboutMe
     */
    private $aboutMe = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $acceptedEventRelations
     */
    private $acceptedEventRelations = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AccountType $account
     */
    private $account = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $accountCleanInfoReviewers
     */
    private $accountCleanInfoReviewers = null;

    /**
     * @property string $accountId
     */
    private $accountId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\AddressType $address
     */
    private $address = null;

    /**
     * @property string $alias
     */
    private $alias = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $attachedContentDocuments
     */
    private $attachedContentDocuments = null;

    /**
     * @property string $badgeText
     */
    private $badgeText = null;

    /**
     * @property string $bannerPhotoUrl
     */
    private $bannerPhotoUrl = null;

    /**
     * @property string $callCenterId
     */
    private $callCenterId = null;

    /**
     * @property string $city
     */
    private $city = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $combinedAttachments
     */
    private $combinedAttachments = null;

    /**
     * @property string $communityNickname
     */
    private $communityNickname = null;

    /**
     * @property string $companyName
     */
    private $companyName = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContactType $contact
     */
    private $contact = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $contactCleanInfoReviewers
     */
    private $contactCleanInfoReviewers = null;

    /**
     * @property string $contactId
     */
    private $contactId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $contentDocumentLinks
     */
    private $contentDocumentLinks = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $contractsSigned
     */
    private $contractsSigned = null;

    /**
     * @property string $country
     */
    private $country = null;

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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $declinedEventRelations
     */
    private $declinedEventRelations = null;

    /**
     * @property string $defaultGroupNotificationFrequency
     */
    private $defaultGroupNotificationFrequency = null;

    /**
     * @property string $delegatedApproverId
     */
    private $delegatedApproverId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $delegatedUsers
     */
    private $delegatedUsers = null;

    /**
     * @property string $department
     */
    private $department = null;

    /**
     * @property string $digestFrequency
     */
    private $digestFrequency = null;

    /**
     * @property string $division
     */
    private $division = null;

    /**
     * @property string $email
     */
    private $email = null;

    /**
     * @property string $emailEncodingKey
     */
    private $emailEncodingKey = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $emailMessageRelations
     */
    private $emailMessageRelations = null;

    /**
     * @property bool $emailPreferencesAutoBcc
     */
    private $emailPreferencesAutoBcc = null;

    /**
     * @property bool $emailPreferencesAutoBccStayInTouch
     */
    private $emailPreferencesAutoBccStayInTouch = null;

    /**
     * @property bool $emailPreferencesStayInTouchReminder
     */
    private $emailPreferencesStayInTouchReminder = null;

    /**
     * @property string $employeeNumber
     */
    private $employeeNumber = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $eventRelations
     */
    private $eventRelations = null;

    /**
     * @property string $extension
     */
    private $extension = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $externalDataUserAuths
     */
    private $externalDataUserAuths = null;

    /**
     * @property string $fax
     */
    private $fax = null;

    /**
     * @property string $federationIdentifier
     */
    private $federationIdentifier = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feedSubscriptions
     */
    private $feedSubscriptions = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feedSubscriptionsForEntity
     */
    private $feedSubscriptionsForEntity = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feeds
     */
    private $feeds = null;

    /**
     * @property string $firstName
     */
    private $firstName = null;

    /**
     * @property bool $forecastEnabled
     */
    private $forecastEnabled = null;

    /**
     * @property string $fullPhotoUrl
     */
    private $fullPhotoUrl = null;

    /**
     * @property string $geocodeAccuracy
     */
    private $geocodeAccuracy = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $groupMembershipRequests
     */
    private $groupMembershipRequests = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $groupMemberships
     */
    private $groupMemberships = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $installedMobileApps
     */
    private $installedMobileApps = null;

    /**
     * @property bool $isActive
     */
    private $isActive = null;

    /**
     * @property bool $isExtIndicatorVisible
     */
    private $isExtIndicatorVisible = null;

    /**
     * @property bool $isProfilePhotoActive
     */
    private $isProfilePhotoActive = null;

    /**
     * @property int $jigsawImportLimitOverride
     */
    private $jigsawImportLimitOverride = null;

    /**
     * @property string $languageLocaleKey
     */
    private $languageLocaleKey = null;

    /**
     * @property \DateTime $lastLoginDate
     */
    private $lastLoginDate = null;

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
     * @property string $lastName
     */
    private $lastName = null;

    /**
     * @property \DateTime $lastPasswordChangeDate
     */
    private $lastPasswordChangeDate = null;

    /**
     * @property \DateTime $lastReferencedDate
     */
    private $lastReferencedDate = null;

    /**
     * @property \DateTime $lastViewedDate
     */
    private $lastViewedDate = null;

    /**
     * @property float $latitude
     */
    private $latitude = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $leadCleanInfoReviewers
     */
    private $leadCleanInfoReviewers = null;

    /**
     * @property string $localeSidKey
     */
    private $localeSidKey = null;

    /**
     * @property float $longitude
     */
    private $longitude = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $managedUsers
     */
    private $managedUsers = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $manager
     */
    private $manager = null;

    /**
     * @property string $managerId
     */
    private $managerId = null;

    /**
     * @property string $mediumBannerPhotoUrl
     */
    private $mediumBannerPhotoUrl = null;

    /**
     * @property string $mediumPhotoUrl
     */
    private $mediumPhotoUrl = null;

    /**
     * @property string $mobilePhone
     */
    private $mobilePhone = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property \DateTime $offlinePdaTrialExpirationDate
     */
    private $offlinePdaTrialExpirationDate = null;

    /**
     * @property \DateTime $offlineTrialExpirationDate
     */
    private $offlineTrialExpirationDate = null;

    /**
     * @property string $outOfOfficeMessage
     */
    private $outOfOfficeMessage = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $outgoingEmailRelations
     */
    private $outgoingEmailRelations = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $ownedContentDocuments
     */
    private $ownedContentDocuments = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $permissionSetAssignments
     */
    private $permissionSetAssignments = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $permissionSetLicenseAssignments
     */
    private $permissionSetLicenseAssignments = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $personRecord
     */
    private $personRecord = null;

    /**
     * @property string $phone
     */
    private $phone = null;

    /**
     * @property string $postalCode
     */
    private $postalCode = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ProfileType $profile
     */
    private $profile = null;

    /**
     * @property string $profileId
     */
    private $profileId = null;

    /**
     * @property bool $receivesAdminInfoEmails
     */
    private $receivesAdminInfoEmails = null;

    /**
     * @property bool $receivesInfoEmails
     */
    private $receivesInfoEmails = null;

    /**
     * @property string $senderEmail
     */
    private $senderEmail = null;

    /**
     * @property string $senderName
     */
    private $senderName = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $sessionPermSetActivations
     */
    private $sessionPermSetActivations = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $shares
     */
    private $shares = null;

    /**
     * @property string $signature
     */
    private $signature = null;

    /**
     * @property string $smallBannerPhotoUrl
     */
    private $smallBannerPhotoUrl = null;

    /**
     * @property string $smallPhotoUrl
     */
    private $smallPhotoUrl = null;

    /**
     * @property string $state
     */
    private $state = null;

    /**
     * @property string $stayInTouchNote
     */
    private $stayInTouchNote = null;

    /**
     * @property string $stayInTouchSignature
     */
    private $stayInTouchSignature = null;

    /**
     * @property string $stayInTouchSubject
     */
    private $stayInTouchSubject = null;

    /**
     * @property string $street
     */
    private $street = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property string $timeZoneSidKey
     */
    private $timeZoneSidKey = null;

    /**
     * @property string $title
     */
    private $title = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $undecidedEventRelations
     */
    private $undecidedEventRelations = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $userEntityAccessRights
     */
    private $userEntityAccessRights = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $userFieldAccessRights
     */
    private $userFieldAccessRights = null;

    /**
     * @property bool $userPermissionsCallCenterAutoLogin
     */
    private $userPermissionsCallCenterAutoLogin = null;

    /**
     * @property bool $userPermissionsInteractionUser
     */
    private $userPermissionsInteractionUser = null;

    /**
     * @property bool $userPermissionsJigsawProspectingUser
     */
    private $userPermissionsJigsawProspectingUser = null;

    /**
     * @property bool $userPermissionsKnowledgeUser
     */
    private $userPermissionsKnowledgeUser = null;

    /**
     * @property bool $userPermissionsMarketingUser
     */
    private $userPermissionsMarketingUser = null;

    /**
     * @property bool $userPermissionsMobileUser
     */
    private $userPermissionsMobileUser = null;

    /**
     * @property bool $userPermissionsOfflineUser
     */
    private $userPermissionsOfflineUser = null;

    /**
     * @property bool $userPermissionsSFContentUser
     */
    private $userPermissionsSFContentUser = null;

    /**
     * @property bool $userPermissionsSiteforceContributorUser
     */
    private $userPermissionsSiteforceContributorUser = null;

    /**
     * @property bool $userPermissionsSiteforcePublisherUser
     */
    private $userPermissionsSiteforcePublisherUser = null;

    /**
     * @property bool $userPermissionsSupportUser
     */
    private $userPermissionsSupportUser = null;

    /**
     * @property bool $userPermissionsWorkDotComUserFeature
     */
    private $userPermissionsWorkDotComUserFeature = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $userPreferences
     */
    private $userPreferences = null;

    /**
     * @property bool $userPreferencesActivityRemindersPopup
     */
    private $userPreferencesActivityRemindersPopup = null;

    /**
     * @property bool $userPreferencesApexPagesDeveloperMode
     */
    private $userPreferencesApexPagesDeveloperMode = null;

    /**
     * @property bool $userPreferencesCacheDiagnostics
     */
    private $userPreferencesCacheDiagnostics = null;

    /**
     * @property bool $userPreferencesContentEmailAsAndWhen
     */
    private $userPreferencesContentEmailAsAndWhen = null;

    /**
     * @property bool $userPreferencesContentNoEmail
     */
    private $userPreferencesContentNoEmail = null;

    /**
     * @property bool $userPreferencesCreateLEXAppsWTShown
     */
    private $userPreferencesCreateLEXAppsWTShown = null;

    /**
     * @property bool $userPreferencesDisCommentAfterLikeEmail
     */
    private $userPreferencesDisCommentAfterLikeEmail = null;

    /**
     * @property bool $userPreferencesDisMentionsCommentEmail
     */
    private $userPreferencesDisMentionsCommentEmail = null;

    /**
     * @property bool $userPreferencesDisProfPostCommentEmail
     */
    private $userPreferencesDisProfPostCommentEmail = null;

    /**
     * @property bool $userPreferencesDisableAllFeedsEmail
     */
    private $userPreferencesDisableAllFeedsEmail = null;

    /**
     * @property bool $userPreferencesDisableBookmarkEmail
     */
    private $userPreferencesDisableBookmarkEmail = null;

    /**
     * @property bool $userPreferencesDisableChangeCommentEmail
     */
    private $userPreferencesDisableChangeCommentEmail = null;

    /**
     * @property bool $userPreferencesDisableEndorsementEmail
     */
    private $userPreferencesDisableEndorsementEmail = null;

    /**
     * @property bool $userPreferencesDisableFeedbackEmail
     */
    private $userPreferencesDisableFeedbackEmail = null;

    /**
     * @property bool $userPreferencesDisableFileShareNotificationsForApi
     */
    private $userPreferencesDisableFileShareNotificationsForApi = null;

    /**
     * @property bool $userPreferencesDisableFollowersEmail
     */
    private $userPreferencesDisableFollowersEmail = null;

    /**
     * @property bool $userPreferencesDisableLaterCommentEmail
     */
    private $userPreferencesDisableLaterCommentEmail = null;

    /**
     * @property bool $userPreferencesDisableLikeEmail
     */
    private $userPreferencesDisableLikeEmail = null;

    /**
     * @property bool $userPreferencesDisableMentionsPostEmail
     */
    private $userPreferencesDisableMentionsPostEmail = null;

    /**
     * @property bool $userPreferencesDisableMessageEmail
     */
    private $userPreferencesDisableMessageEmail = null;

    /**
     * @property bool $userPreferencesDisableProfilePostEmail
     */
    private $userPreferencesDisableProfilePostEmail = null;

    /**
     * @property bool $userPreferencesDisableSharePostEmail
     */
    private $userPreferencesDisableSharePostEmail = null;

    /**
     * @property bool $userPreferencesDisableWorkEmail
     */
    private $userPreferencesDisableWorkEmail = null;

    /**
     * @property bool $userPreferencesEnableAutoSubForFeeds
     */
    private $userPreferencesEnableAutoSubForFeeds = null;

    /**
     * @property bool $userPreferencesEventRemindersCheckboxDefault
     */
    private $userPreferencesEventRemindersCheckboxDefault = null;

    /**
     * @property bool $userPreferencesExcludeMailAppAttachments
     */
    private $userPreferencesExcludeMailAppAttachments = null;

    /**
     * @property bool $userPreferencesFavoritesShowTopFavorites
     */
    private $userPreferencesFavoritesShowTopFavorites = null;

    /**
     * @property bool $userPreferencesFavoritesWTShown
     */
    private $userPreferencesFavoritesWTShown = null;

    /**
     * @property bool $userPreferencesGlobalNavBarWTShown
     */
    private $userPreferencesGlobalNavBarWTShown = null;

    /**
     * @property bool $userPreferencesGlobalNavGridMenuWTShown
     */
    private $userPreferencesGlobalNavGridMenuWTShown = null;

    /**
     * @property bool $userPreferencesHasCelebrationBadge
     */
    private $userPreferencesHasCelebrationBadge = null;

    /**
     * @property bool $userPreferencesHideBiggerPhotoCallout
     */
    private $userPreferencesHideBiggerPhotoCallout = null;

    /**
     * @property bool $userPreferencesHideCSNDesktopTask
     */
    private $userPreferencesHideCSNDesktopTask = null;

    /**
     * @property bool $userPreferencesHideCSNGetChatterMobileTask
     */
    private $userPreferencesHideCSNGetChatterMobileTask = null;

    /**
     * @property bool $userPreferencesHideChatterOnboardingSplash
     */
    private $userPreferencesHideChatterOnboardingSplash = null;

    /**
     * @property bool $userPreferencesHideEndUserOnboardingAssistantModal
     */
    private $userPreferencesHideEndUserOnboardingAssistantModal = null;

    /**
     * @property bool $userPreferencesHideLightningMigrationModal
     */
    private $userPreferencesHideLightningMigrationModal = null;

    /**
     * @property bool $userPreferencesHideS1BrowserUI
     */
    private $userPreferencesHideS1BrowserUI = null;

    /**
     * @property bool $userPreferencesHideSecondChatterOnboardingSplash
     */
    private $userPreferencesHideSecondChatterOnboardingSplash = null;

    /**
     * @property bool $userPreferencesHideSfxWelcomeMat
     */
    private $userPreferencesHideSfxWelcomeMat = null;

    /**
     * @property bool $userPreferencesJigsawListUser
     */
    private $userPreferencesJigsawListUser = null;

    /**
     * @property bool $userPreferencesLightningExperiencePreferred
     */
    private $userPreferencesLightningExperiencePreferred = null;

    /**
     * @property bool $userPreferencesNewLightningReportRunPageEnabled
     */
    private $userPreferencesNewLightningReportRunPageEnabled = null;

    /**
     * @property bool $userPreferencesPathAssistantCollapsed
     */
    private $userPreferencesPathAssistantCollapsed = null;

    /**
     * @property bool $userPreferencesPipelineViewHideHelpPopover
     */
    private $userPreferencesPipelineViewHideHelpPopover = null;

    /**
     * @property bool $userPreferencesPreviewCustomTheme
     */
    private $userPreferencesPreviewCustomTheme = null;

    /**
     * @property bool $userPreferencesPreviewLightning
     */
    private $userPreferencesPreviewLightning = null;

    /**
     * @property bool $userPreferencesRecordHomeReservedWTShown
     */
    private $userPreferencesRecordHomeReservedWTShown = null;

    /**
     * @property bool $userPreferencesRecordHomeSectionCollapseWTShown
     */
    private $userPreferencesRecordHomeSectionCollapseWTShown = null;

    /**
     * @property bool $userPreferencesReminderSoundOff
     */
    private $userPreferencesReminderSoundOff = null;

    /**
     * @property bool $userPreferencesShowCityToExternalUsers
     */
    private $userPreferencesShowCityToExternalUsers = null;

    /**
     * @property bool $userPreferencesShowCityToGuestUsers
     */
    private $userPreferencesShowCityToGuestUsers = null;

    /**
     * @property bool $userPreferencesShowCountryToExternalUsers
     */
    private $userPreferencesShowCountryToExternalUsers = null;

    /**
     * @property bool $userPreferencesShowCountryToGuestUsers
     */
    private $userPreferencesShowCountryToGuestUsers = null;

    /**
     * @property bool $userPreferencesShowEmailToExternalUsers
     */
    private $userPreferencesShowEmailToExternalUsers = null;

    /**
     * @property bool $userPreferencesShowEmailToGuestUsers
     */
    private $userPreferencesShowEmailToGuestUsers = null;

    /**
     * @property bool $userPreferencesShowFaxToExternalUsers
     */
    private $userPreferencesShowFaxToExternalUsers = null;

    /**
     * @property bool $userPreferencesShowFaxToGuestUsers
     */
    private $userPreferencesShowFaxToGuestUsers = null;

    /**
     * @property bool $userPreferencesShowManagerToExternalUsers
     */
    private $userPreferencesShowManagerToExternalUsers = null;

    /**
     * @property bool $userPreferencesShowManagerToGuestUsers
     */
    private $userPreferencesShowManagerToGuestUsers = null;

    /**
     * @property bool $userPreferencesShowMobilePhoneToExternalUsers
     */
    private $userPreferencesShowMobilePhoneToExternalUsers = null;

    /**
     * @property bool $userPreferencesShowMobilePhoneToGuestUsers
     */
    private $userPreferencesShowMobilePhoneToGuestUsers = null;

    /**
     * @property bool $userPreferencesShowPostalCodeToExternalUsers
     */
    private $userPreferencesShowPostalCodeToExternalUsers = null;

    /**
     * @property bool $userPreferencesShowPostalCodeToGuestUsers
     */
    private $userPreferencesShowPostalCodeToGuestUsers = null;

    /**
     * @property bool $userPreferencesShowProfilePicToGuestUsers
     */
    private $userPreferencesShowProfilePicToGuestUsers = null;

    /**
     * @property bool $userPreferencesShowStateToExternalUsers
     */
    private $userPreferencesShowStateToExternalUsers = null;

    /**
     * @property bool $userPreferencesShowStateToGuestUsers
     */
    private $userPreferencesShowStateToGuestUsers = null;

    /**
     * @property bool $userPreferencesShowStreetAddressToExternalUsers
     */
    private $userPreferencesShowStreetAddressToExternalUsers = null;

    /**
     * @property bool $userPreferencesShowStreetAddressToGuestUsers
     */
    private $userPreferencesShowStreetAddressToGuestUsers = null;

    /**
     * @property bool $userPreferencesShowTitleToExternalUsers
     */
    private $userPreferencesShowTitleToExternalUsers = null;

    /**
     * @property bool $userPreferencesShowTitleToGuestUsers
     */
    private $userPreferencesShowTitleToGuestUsers = null;

    /**
     * @property bool $userPreferencesShowWorkPhoneToExternalUsers
     */
    private $userPreferencesShowWorkPhoneToExternalUsers = null;

    /**
     * @property bool $userPreferencesShowWorkPhoneToGuestUsers
     */
    private $userPreferencesShowWorkPhoneToGuestUsers = null;

    /**
     * @property bool $userPreferencesSortFeedByComment
     */
    private $userPreferencesSortFeedByComment = null;

    /**
     * @property bool $userPreferencesSuppressEventSFXReminders
     */
    private $userPreferencesSuppressEventSFXReminders = null;

    /**
     * @property bool $userPreferencesSuppressTaskSFXReminders
     */
    private $userPreferencesSuppressTaskSFXReminders = null;

    /**
     * @property bool $userPreferencesTaskRemindersCheckboxDefault
     */
    private $userPreferencesTaskRemindersCheckboxDefault = null;

    /**
     * @property bool $userPreferencesUserDebugModePref
     */
    private $userPreferencesUserDebugModePref = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserRoleType $userRole
     */
    private $userRole = null;

    /**
     * @property string $userRoleId
     */
    private $userRoleId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $userSites
     */
    private $userSites = null;

    /**
     * @property string $userType
     */
    private $userType = null;

    /**
     * @property string $username
     */
    private $username = null;

    /**
     * Gets as aboutMe
     *
     * @return string
     */
    public function getAboutMe()
    {
        return $this->aboutMe;
    }

    /**
     * Sets a new aboutMe
     *
     * @param string $aboutMe
     * @return self
     */
    public function setAboutMe($aboutMe)
    {
        $this->aboutMe = $aboutMe;
        return $this;
    }

    /**
     * Gets as acceptedEventRelations
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getAcceptedEventRelations()
    {
        return $this->acceptedEventRelations;
    }

    /**
     * Sets a new acceptedEventRelations
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $acceptedEventRelations
     * @return self
     */
    public function setAcceptedEventRelations(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $acceptedEventRelations)
    {
        $this->acceptedEventRelations = $acceptedEventRelations;
        return $this;
    }

    /**
     * Gets as account
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AccountType
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Sets a new account
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AccountType $account
     * @return self
     */
    public function setAccount(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\AccountType $account)
    {
        $this->account = $account;
        return $this;
    }

    /**
     * Gets as accountCleanInfoReviewers
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getAccountCleanInfoReviewers()
    {
        return $this->accountCleanInfoReviewers;
    }

    /**
     * Sets a new accountCleanInfoReviewers
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $accountCleanInfoReviewers
     * @return self
     */
    public function setAccountCleanInfoReviewers(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $accountCleanInfoReviewers)
    {
        $this->accountCleanInfoReviewers = $accountCleanInfoReviewers;
        return $this;
    }

    /**
     * Gets as accountId
     *
     * @return string
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * Sets a new accountId
     *
     * @param string $accountId
     * @return self
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * Gets as address
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\AddressType
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\AddressType $address
     * @return self
     */
    public function setAddress(\GoetasWebservices\Client\SalesforceEnterprise\Types\AddressType $address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Gets as alias
     *
     * @return string
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Sets a new alias
     *
     * @param string $alias
     * @return self
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;
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
     * Gets as badgeText
     *
     * @return string
     */
    public function getBadgeText()
    {
        return $this->badgeText;
    }

    /**
     * Sets a new badgeText
     *
     * @param string $badgeText
     * @return self
     */
    public function setBadgeText($badgeText)
    {
        $this->badgeText = $badgeText;
        return $this;
    }

    /**
     * Gets as bannerPhotoUrl
     *
     * @return string
     */
    public function getBannerPhotoUrl()
    {
        return $this->bannerPhotoUrl;
    }

    /**
     * Sets a new bannerPhotoUrl
     *
     * @param string $bannerPhotoUrl
     * @return self
     */
    public function setBannerPhotoUrl($bannerPhotoUrl)
    {
        $this->bannerPhotoUrl = $bannerPhotoUrl;
        return $this;
    }

    /**
     * Gets as callCenterId
     *
     * @return string
     */
    public function getCallCenterId()
    {
        return $this->callCenterId;
    }

    /**
     * Sets a new callCenterId
     *
     * @param string $callCenterId
     * @return self
     */
    public function setCallCenterId($callCenterId)
    {
        $this->callCenterId = $callCenterId;
        return $this;
    }

    /**
     * Gets as city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Sets a new city
     *
     * @param string $city
     * @return self
     */
    public function setCity($city)
    {
        $this->city = $city;
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
     * Gets as communityNickname
     *
     * @return string
     */
    public function getCommunityNickname()
    {
        return $this->communityNickname;
    }

    /**
     * Sets a new communityNickname
     *
     * @param string $communityNickname
     * @return self
     */
    public function setCommunityNickname($communityNickname)
    {
        $this->communityNickname = $communityNickname;
        return $this;
    }

    /**
     * Gets as companyName
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Sets a new companyName
     *
     * @param string $companyName
     * @return self
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * Gets as contact
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContactType
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContactType $contact
     * @return self
     */
    public function setContact(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContactType $contact)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Gets as contactCleanInfoReviewers
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getContactCleanInfoReviewers()
    {
        return $this->contactCleanInfoReviewers;
    }

    /**
     * Sets a new contactCleanInfoReviewers
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $contactCleanInfoReviewers
     * @return self
     */
    public function setContactCleanInfoReviewers(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $contactCleanInfoReviewers)
    {
        $this->contactCleanInfoReviewers = $contactCleanInfoReviewers;
        return $this;
    }

    /**
     * Gets as contactId
     *
     * @return string
     */
    public function getContactId()
    {
        return $this->contactId;
    }

    /**
     * Sets a new contactId
     *
     * @param string $contactId
     * @return self
     */
    public function setContactId($contactId)
    {
        $this->contactId = $contactId;
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
     * Gets as contractsSigned
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getContractsSigned()
    {
        return $this->contractsSigned;
    }

    /**
     * Sets a new contractsSigned
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $contractsSigned
     * @return self
     */
    public function setContractsSigned(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $contractsSigned)
    {
        $this->contractsSigned = $contractsSigned;
        return $this;
    }

    /**
     * Gets as country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets a new country
     *
     * @param string $country
     * @return self
     */
    public function setCountry($country)
    {
        $this->country = $country;
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
     * Gets as declinedEventRelations
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getDeclinedEventRelations()
    {
        return $this->declinedEventRelations;
    }

    /**
     * Sets a new declinedEventRelations
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $declinedEventRelations
     * @return self
     */
    public function setDeclinedEventRelations(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $declinedEventRelations)
    {
        $this->declinedEventRelations = $declinedEventRelations;
        return $this;
    }

    /**
     * Gets as defaultGroupNotificationFrequency
     *
     * @return string
     */
    public function getDefaultGroupNotificationFrequency()
    {
        return $this->defaultGroupNotificationFrequency;
    }

    /**
     * Sets a new defaultGroupNotificationFrequency
     *
     * @param string $defaultGroupNotificationFrequency
     * @return self
     */
    public function setDefaultGroupNotificationFrequency($defaultGroupNotificationFrequency)
    {
        $this->defaultGroupNotificationFrequency = $defaultGroupNotificationFrequency;
        return $this;
    }

    /**
     * Gets as delegatedApproverId
     *
     * @return string
     */
    public function getDelegatedApproverId()
    {
        return $this->delegatedApproverId;
    }

    /**
     * Sets a new delegatedApproverId
     *
     * @param string $delegatedApproverId
     * @return self
     */
    public function setDelegatedApproverId($delegatedApproverId)
    {
        $this->delegatedApproverId = $delegatedApproverId;
        return $this;
    }

    /**
     * Gets as delegatedUsers
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getDelegatedUsers()
    {
        return $this->delegatedUsers;
    }

    /**
     * Sets a new delegatedUsers
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $delegatedUsers
     * @return self
     */
    public function setDelegatedUsers(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $delegatedUsers)
    {
        $this->delegatedUsers = $delegatedUsers;
        return $this;
    }

    /**
     * Gets as department
     *
     * @return string
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Sets a new department
     *
     * @param string $department
     * @return self
     */
    public function setDepartment($department)
    {
        $this->department = $department;
        return $this;
    }

    /**
     * Gets as digestFrequency
     *
     * @return string
     */
    public function getDigestFrequency()
    {
        return $this->digestFrequency;
    }

    /**
     * Sets a new digestFrequency
     *
     * @param string $digestFrequency
     * @return self
     */
    public function setDigestFrequency($digestFrequency)
    {
        $this->digestFrequency = $digestFrequency;
        return $this;
    }

    /**
     * Gets as division
     *
     * @return string
     */
    public function getDivision()
    {
        return $this->division;
    }

    /**
     * Sets a new division
     *
     * @param string $division
     * @return self
     */
    public function setDivision($division)
    {
        $this->division = $division;
        return $this;
    }

    /**
     * Gets as email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * @param string $email
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Gets as emailEncodingKey
     *
     * @return string
     */
    public function getEmailEncodingKey()
    {
        return $this->emailEncodingKey;
    }

    /**
     * Sets a new emailEncodingKey
     *
     * @param string $emailEncodingKey
     * @return self
     */
    public function setEmailEncodingKey($emailEncodingKey)
    {
        $this->emailEncodingKey = $emailEncodingKey;
        return $this;
    }

    /**
     * Gets as emailMessageRelations
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getEmailMessageRelations()
    {
        return $this->emailMessageRelations;
    }

    /**
     * Sets a new emailMessageRelations
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $emailMessageRelations
     * @return self
     */
    public function setEmailMessageRelations(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $emailMessageRelations)
    {
        $this->emailMessageRelations = $emailMessageRelations;
        return $this;
    }

    /**
     * Gets as emailPreferencesAutoBcc
     *
     * @return bool
     */
    public function getEmailPreferencesAutoBcc()
    {
        return $this->emailPreferencesAutoBcc;
    }

    /**
     * Sets a new emailPreferencesAutoBcc
     *
     * @param bool $emailPreferencesAutoBcc
     * @return self
     */
    public function setEmailPreferencesAutoBcc($emailPreferencesAutoBcc)
    {
        $this->emailPreferencesAutoBcc = $emailPreferencesAutoBcc;
        return $this;
    }

    /**
     * Gets as emailPreferencesAutoBccStayInTouch
     *
     * @return bool
     */
    public function getEmailPreferencesAutoBccStayInTouch()
    {
        return $this->emailPreferencesAutoBccStayInTouch;
    }

    /**
     * Sets a new emailPreferencesAutoBccStayInTouch
     *
     * @param bool $emailPreferencesAutoBccStayInTouch
     * @return self
     */
    public function setEmailPreferencesAutoBccStayInTouch($emailPreferencesAutoBccStayInTouch)
    {
        $this->emailPreferencesAutoBccStayInTouch = $emailPreferencesAutoBccStayInTouch;
        return $this;
    }

    /**
     * Gets as emailPreferencesStayInTouchReminder
     *
     * @return bool
     */
    public function getEmailPreferencesStayInTouchReminder()
    {
        return $this->emailPreferencesStayInTouchReminder;
    }

    /**
     * Sets a new emailPreferencesStayInTouchReminder
     *
     * @param bool $emailPreferencesStayInTouchReminder
     * @return self
     */
    public function setEmailPreferencesStayInTouchReminder($emailPreferencesStayInTouchReminder)
    {
        $this->emailPreferencesStayInTouchReminder = $emailPreferencesStayInTouchReminder;
        return $this;
    }

    /**
     * Gets as employeeNumber
     *
     * @return string
     */
    public function getEmployeeNumber()
    {
        return $this->employeeNumber;
    }

    /**
     * Sets a new employeeNumber
     *
     * @param string $employeeNumber
     * @return self
     */
    public function setEmployeeNumber($employeeNumber)
    {
        $this->employeeNumber = $employeeNumber;
        return $this;
    }

    /**
     * Gets as eventRelations
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getEventRelations()
    {
        return $this->eventRelations;
    }

    /**
     * Sets a new eventRelations
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $eventRelations
     * @return self
     */
    public function setEventRelations(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $eventRelations)
    {
        $this->eventRelations = $eventRelations;
        return $this;
    }

    /**
     * Gets as extension
     *
     * @return string
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Sets a new extension
     *
     * @param string $extension
     * @return self
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;
        return $this;
    }

    /**
     * Gets as externalDataUserAuths
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getExternalDataUserAuths()
    {
        return $this->externalDataUserAuths;
    }

    /**
     * Sets a new externalDataUserAuths
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $externalDataUserAuths
     * @return self
     */
    public function setExternalDataUserAuths(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $externalDataUserAuths)
    {
        $this->externalDataUserAuths = $externalDataUserAuths;
        return $this;
    }

    /**
     * Gets as fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Sets a new fax
     *
     * @param string $fax
     * @return self
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
        return $this;
    }

    /**
     * Gets as federationIdentifier
     *
     * @return string
     */
    public function getFederationIdentifier()
    {
        return $this->federationIdentifier;
    }

    /**
     * Sets a new federationIdentifier
     *
     * @param string $federationIdentifier
     * @return self
     */
    public function setFederationIdentifier($federationIdentifier)
    {
        $this->federationIdentifier = $federationIdentifier;
        return $this;
    }

    /**
     * Gets as feedSubscriptions
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getFeedSubscriptions()
    {
        return $this->feedSubscriptions;
    }

    /**
     * Sets a new feedSubscriptions
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feedSubscriptions
     * @return self
     */
    public function setFeedSubscriptions(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feedSubscriptions)
    {
        $this->feedSubscriptions = $feedSubscriptions;
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
     * Gets as firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Sets a new firstName
     *
     * @param string $firstName
     * @return self
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * Gets as forecastEnabled
     *
     * @return bool
     */
    public function getForecastEnabled()
    {
        return $this->forecastEnabled;
    }

    /**
     * Sets a new forecastEnabled
     *
     * @param bool $forecastEnabled
     * @return self
     */
    public function setForecastEnabled($forecastEnabled)
    {
        $this->forecastEnabled = $forecastEnabled;
        return $this;
    }

    /**
     * Gets as fullPhotoUrl
     *
     * @return string
     */
    public function getFullPhotoUrl()
    {
        return $this->fullPhotoUrl;
    }

    /**
     * Sets a new fullPhotoUrl
     *
     * @param string $fullPhotoUrl
     * @return self
     */
    public function setFullPhotoUrl($fullPhotoUrl)
    {
        $this->fullPhotoUrl = $fullPhotoUrl;
        return $this;
    }

    /**
     * Gets as geocodeAccuracy
     *
     * @return string
     */
    public function getGeocodeAccuracy()
    {
        return $this->geocodeAccuracy;
    }

    /**
     * Sets a new geocodeAccuracy
     *
     * @param string $geocodeAccuracy
     * @return self
     */
    public function setGeocodeAccuracy($geocodeAccuracy)
    {
        $this->geocodeAccuracy = $geocodeAccuracy;
        return $this;
    }

    /**
     * Gets as groupMembershipRequests
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getGroupMembershipRequests()
    {
        return $this->groupMembershipRequests;
    }

    /**
     * Sets a new groupMembershipRequests
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $groupMembershipRequests
     * @return self
     */
    public function setGroupMembershipRequests(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $groupMembershipRequests)
    {
        $this->groupMembershipRequests = $groupMembershipRequests;
        return $this;
    }

    /**
     * Gets as groupMemberships
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getGroupMemberships()
    {
        return $this->groupMemberships;
    }

    /**
     * Sets a new groupMemberships
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $groupMemberships
     * @return self
     */
    public function setGroupMemberships(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $groupMemberships)
    {
        $this->groupMemberships = $groupMemberships;
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
     * Gets as isExtIndicatorVisible
     *
     * @return bool
     */
    public function getIsExtIndicatorVisible()
    {
        return $this->isExtIndicatorVisible;
    }

    /**
     * Sets a new isExtIndicatorVisible
     *
     * @param bool $isExtIndicatorVisible
     * @return self
     */
    public function setIsExtIndicatorVisible($isExtIndicatorVisible)
    {
        $this->isExtIndicatorVisible = $isExtIndicatorVisible;
        return $this;
    }

    /**
     * Gets as isProfilePhotoActive
     *
     * @return bool
     */
    public function getIsProfilePhotoActive()
    {
        return $this->isProfilePhotoActive;
    }

    /**
     * Sets a new isProfilePhotoActive
     *
     * @param bool $isProfilePhotoActive
     * @return self
     */
    public function setIsProfilePhotoActive($isProfilePhotoActive)
    {
        $this->isProfilePhotoActive = $isProfilePhotoActive;
        return $this;
    }

    /**
     * Gets as jigsawImportLimitOverride
     *
     * @return int
     */
    public function getJigsawImportLimitOverride()
    {
        return $this->jigsawImportLimitOverride;
    }

    /**
     * Sets a new jigsawImportLimitOverride
     *
     * @param int $jigsawImportLimitOverride
     * @return self
     */
    public function setJigsawImportLimitOverride($jigsawImportLimitOverride)
    {
        $this->jigsawImportLimitOverride = $jigsawImportLimitOverride;
        return $this;
    }

    /**
     * Gets as languageLocaleKey
     *
     * @return string
     */
    public function getLanguageLocaleKey()
    {
        return $this->languageLocaleKey;
    }

    /**
     * Sets a new languageLocaleKey
     *
     * @param string $languageLocaleKey
     * @return self
     */
    public function setLanguageLocaleKey($languageLocaleKey)
    {
        $this->languageLocaleKey = $languageLocaleKey;
        return $this;
    }

    /**
     * Gets as lastLoginDate
     *
     * @return \DateTime
     */
    public function getLastLoginDate()
    {
        return $this->lastLoginDate;
    }

    /**
     * Sets a new lastLoginDate
     *
     * @param \DateTime $lastLoginDate
     * @return self
     */
    public function setLastLoginDate(\DateTime $lastLoginDate)
    {
        $this->lastLoginDate = $lastLoginDate;
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
     * Gets as lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Sets a new lastName
     *
     * @param string $lastName
     * @return self
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * Gets as lastPasswordChangeDate
     *
     * @return \DateTime
     */
    public function getLastPasswordChangeDate()
    {
        return $this->lastPasswordChangeDate;
    }

    /**
     * Sets a new lastPasswordChangeDate
     *
     * @param \DateTime $lastPasswordChangeDate
     * @return self
     */
    public function setLastPasswordChangeDate(\DateTime $lastPasswordChangeDate)
    {
        $this->lastPasswordChangeDate = $lastPasswordChangeDate;
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
     * Gets as latitude
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Sets a new latitude
     *
     * @param float $latitude
     * @return self
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * Gets as leadCleanInfoReviewers
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getLeadCleanInfoReviewers()
    {
        return $this->leadCleanInfoReviewers;
    }

    /**
     * Sets a new leadCleanInfoReviewers
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $leadCleanInfoReviewers
     * @return self
     */
    public function setLeadCleanInfoReviewers(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $leadCleanInfoReviewers)
    {
        $this->leadCleanInfoReviewers = $leadCleanInfoReviewers;
        return $this;
    }

    /**
     * Gets as localeSidKey
     *
     * @return string
     */
    public function getLocaleSidKey()
    {
        return $this->localeSidKey;
    }

    /**
     * Sets a new localeSidKey
     *
     * @param string $localeSidKey
     * @return self
     */
    public function setLocaleSidKey($localeSidKey)
    {
        $this->localeSidKey = $localeSidKey;
        return $this;
    }

    /**
     * Gets as longitude
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Sets a new longitude
     *
     * @param float $longitude
     * @return self
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * Gets as managedUsers
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getManagedUsers()
    {
        return $this->managedUsers;
    }

    /**
     * Sets a new managedUsers
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $managedUsers
     * @return self
     */
    public function setManagedUsers(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $managedUsers)
    {
        $this->managedUsers = $managedUsers;
        return $this;
    }

    /**
     * Gets as manager
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType
     */
    public function getManager()
    {
        return $this->manager;
    }

    /**
     * Sets a new manager
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $manager
     * @return self
     */
    public function setManager(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $manager)
    {
        $this->manager = $manager;
        return $this;
    }

    /**
     * Gets as managerId
     *
     * @return string
     */
    public function getManagerId()
    {
        return $this->managerId;
    }

    /**
     * Sets a new managerId
     *
     * @param string $managerId
     * @return self
     */
    public function setManagerId($managerId)
    {
        $this->managerId = $managerId;
        return $this;
    }

    /**
     * Gets as mediumBannerPhotoUrl
     *
     * @return string
     */
    public function getMediumBannerPhotoUrl()
    {
        return $this->mediumBannerPhotoUrl;
    }

    /**
     * Sets a new mediumBannerPhotoUrl
     *
     * @param string $mediumBannerPhotoUrl
     * @return self
     */
    public function setMediumBannerPhotoUrl($mediumBannerPhotoUrl)
    {
        $this->mediumBannerPhotoUrl = $mediumBannerPhotoUrl;
        return $this;
    }

    /**
     * Gets as mediumPhotoUrl
     *
     * @return string
     */
    public function getMediumPhotoUrl()
    {
        return $this->mediumPhotoUrl;
    }

    /**
     * Sets a new mediumPhotoUrl
     *
     * @param string $mediumPhotoUrl
     * @return self
     */
    public function setMediumPhotoUrl($mediumPhotoUrl)
    {
        $this->mediumPhotoUrl = $mediumPhotoUrl;
        return $this;
    }

    /**
     * Gets as mobilePhone
     *
     * @return string
     */
    public function getMobilePhone()
    {
        return $this->mobilePhone;
    }

    /**
     * Sets a new mobilePhone
     *
     * @param string $mobilePhone
     * @return self
     */
    public function setMobilePhone($mobilePhone)
    {
        $this->mobilePhone = $mobilePhone;
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
     * Gets as offlinePdaTrialExpirationDate
     *
     * @return \DateTime
     */
    public function getOfflinePdaTrialExpirationDate()
    {
        return $this->offlinePdaTrialExpirationDate;
    }

    /**
     * Sets a new offlinePdaTrialExpirationDate
     *
     * @param \DateTime $offlinePdaTrialExpirationDate
     * @return self
     */
    public function setOfflinePdaTrialExpirationDate(\DateTime $offlinePdaTrialExpirationDate)
    {
        $this->offlinePdaTrialExpirationDate = $offlinePdaTrialExpirationDate;
        return $this;
    }

    /**
     * Gets as offlineTrialExpirationDate
     *
     * @return \DateTime
     */
    public function getOfflineTrialExpirationDate()
    {
        return $this->offlineTrialExpirationDate;
    }

    /**
     * Sets a new offlineTrialExpirationDate
     *
     * @param \DateTime $offlineTrialExpirationDate
     * @return self
     */
    public function setOfflineTrialExpirationDate(\DateTime $offlineTrialExpirationDate)
    {
        $this->offlineTrialExpirationDate = $offlineTrialExpirationDate;
        return $this;
    }

    /**
     * Gets as outOfOfficeMessage
     *
     * @return string
     */
    public function getOutOfOfficeMessage()
    {
        return $this->outOfOfficeMessage;
    }

    /**
     * Sets a new outOfOfficeMessage
     *
     * @param string $outOfOfficeMessage
     * @return self
     */
    public function setOutOfOfficeMessage($outOfOfficeMessage)
    {
        $this->outOfOfficeMessage = $outOfOfficeMessage;
        return $this;
    }

    /**
     * Gets as outgoingEmailRelations
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getOutgoingEmailRelations()
    {
        return $this->outgoingEmailRelations;
    }

    /**
     * Sets a new outgoingEmailRelations
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $outgoingEmailRelations
     * @return self
     */
    public function setOutgoingEmailRelations(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $outgoingEmailRelations)
    {
        $this->outgoingEmailRelations = $outgoingEmailRelations;
        return $this;
    }

    /**
     * Gets as ownedContentDocuments
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getOwnedContentDocuments()
    {
        return $this->ownedContentDocuments;
    }

    /**
     * Sets a new ownedContentDocuments
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $ownedContentDocuments
     * @return self
     */
    public function setOwnedContentDocuments(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $ownedContentDocuments)
    {
        $this->ownedContentDocuments = $ownedContentDocuments;
        return $this;
    }

    /**
     * Gets as permissionSetAssignments
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getPermissionSetAssignments()
    {
        return $this->permissionSetAssignments;
    }

    /**
     * Sets a new permissionSetAssignments
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $permissionSetAssignments
     * @return self
     */
    public function setPermissionSetAssignments(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $permissionSetAssignments)
    {
        $this->permissionSetAssignments = $permissionSetAssignments;
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
     * Gets as personRecord
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getPersonRecord()
    {
        return $this->personRecord;
    }

    /**
     * Sets a new personRecord
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $personRecord
     * @return self
     */
    public function setPersonRecord(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $personRecord)
    {
        $this->personRecord = $personRecord;
        return $this;
    }

    /**
     * Gets as phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Sets a new phone
     *
     * @param string $phone
     * @return self
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * Gets as postalCode
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Sets a new postalCode
     *
     * @param string $postalCode
     * @return self
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    /**
     * Gets as profile
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ProfileType
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Sets a new profile
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ProfileType $profile
     * @return self
     */
    public function setProfile(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\ProfileType $profile)
    {
        $this->profile = $profile;
        return $this;
    }

    /**
     * Gets as profileId
     *
     * @return string
     */
    public function getProfileId()
    {
        return $this->profileId;
    }

    /**
     * Sets a new profileId
     *
     * @param string $profileId
     * @return self
     */
    public function setProfileId($profileId)
    {
        $this->profileId = $profileId;
        return $this;
    }

    /**
     * Gets as receivesAdminInfoEmails
     *
     * @return bool
     */
    public function getReceivesAdminInfoEmails()
    {
        return $this->receivesAdminInfoEmails;
    }

    /**
     * Sets a new receivesAdminInfoEmails
     *
     * @param bool $receivesAdminInfoEmails
     * @return self
     */
    public function setReceivesAdminInfoEmails($receivesAdminInfoEmails)
    {
        $this->receivesAdminInfoEmails = $receivesAdminInfoEmails;
        return $this;
    }

    /**
     * Gets as receivesInfoEmails
     *
     * @return bool
     */
    public function getReceivesInfoEmails()
    {
        return $this->receivesInfoEmails;
    }

    /**
     * Sets a new receivesInfoEmails
     *
     * @param bool $receivesInfoEmails
     * @return self
     */
    public function setReceivesInfoEmails($receivesInfoEmails)
    {
        $this->receivesInfoEmails = $receivesInfoEmails;
        return $this;
    }

    /**
     * Gets as senderEmail
     *
     * @return string
     */
    public function getSenderEmail()
    {
        return $this->senderEmail;
    }

    /**
     * Sets a new senderEmail
     *
     * @param string $senderEmail
     * @return self
     */
    public function setSenderEmail($senderEmail)
    {
        $this->senderEmail = $senderEmail;
        return $this;
    }

    /**
     * Gets as senderName
     *
     * @return string
     */
    public function getSenderName()
    {
        return $this->senderName;
    }

    /**
     * Sets a new senderName
     *
     * @param string $senderName
     * @return self
     */
    public function setSenderName($senderName)
    {
        $this->senderName = $senderName;
        return $this;
    }

    /**
     * Gets as sessionPermSetActivations
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getSessionPermSetActivations()
    {
        return $this->sessionPermSetActivations;
    }

    /**
     * Sets a new sessionPermSetActivations
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $sessionPermSetActivations
     * @return self
     */
    public function setSessionPermSetActivations(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $sessionPermSetActivations)
    {
        $this->sessionPermSetActivations = $sessionPermSetActivations;
        return $this;
    }

    /**
     * Gets as shares
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getShares()
    {
        return $this->shares;
    }

    /**
     * Sets a new shares
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $shares
     * @return self
     */
    public function setShares(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $shares)
    {
        $this->shares = $shares;
        return $this;
    }

    /**
     * Gets as signature
     *
     * @return string
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Sets a new signature
     *
     * @param string $signature
     * @return self
     */
    public function setSignature($signature)
    {
        $this->signature = $signature;
        return $this;
    }

    /**
     * Gets as smallBannerPhotoUrl
     *
     * @return string
     */
    public function getSmallBannerPhotoUrl()
    {
        return $this->smallBannerPhotoUrl;
    }

    /**
     * Sets a new smallBannerPhotoUrl
     *
     * @param string $smallBannerPhotoUrl
     * @return self
     */
    public function setSmallBannerPhotoUrl($smallBannerPhotoUrl)
    {
        $this->smallBannerPhotoUrl = $smallBannerPhotoUrl;
        return $this;
    }

    /**
     * Gets as smallPhotoUrl
     *
     * @return string
     */
    public function getSmallPhotoUrl()
    {
        return $this->smallPhotoUrl;
    }

    /**
     * Sets a new smallPhotoUrl
     *
     * @param string $smallPhotoUrl
     * @return self
     */
    public function setSmallPhotoUrl($smallPhotoUrl)
    {
        $this->smallPhotoUrl = $smallPhotoUrl;
        return $this;
    }

    /**
     * Gets as state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Sets a new state
     *
     * @param string $state
     * @return self
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * Gets as stayInTouchNote
     *
     * @return string
     */
    public function getStayInTouchNote()
    {
        return $this->stayInTouchNote;
    }

    /**
     * Sets a new stayInTouchNote
     *
     * @param string $stayInTouchNote
     * @return self
     */
    public function setStayInTouchNote($stayInTouchNote)
    {
        $this->stayInTouchNote = $stayInTouchNote;
        return $this;
    }

    /**
     * Gets as stayInTouchSignature
     *
     * @return string
     */
    public function getStayInTouchSignature()
    {
        return $this->stayInTouchSignature;
    }

    /**
     * Sets a new stayInTouchSignature
     *
     * @param string $stayInTouchSignature
     * @return self
     */
    public function setStayInTouchSignature($stayInTouchSignature)
    {
        $this->stayInTouchSignature = $stayInTouchSignature;
        return $this;
    }

    /**
     * Gets as stayInTouchSubject
     *
     * @return string
     */
    public function getStayInTouchSubject()
    {
        return $this->stayInTouchSubject;
    }

    /**
     * Sets a new stayInTouchSubject
     *
     * @param string $stayInTouchSubject
     * @return self
     */
    public function setStayInTouchSubject($stayInTouchSubject)
    {
        $this->stayInTouchSubject = $stayInTouchSubject;
        return $this;
    }

    /**
     * Gets as street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Sets a new street
     *
     * @param string $street
     * @return self
     */
    public function setStreet($street)
    {
        $this->street = $street;
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
     * Gets as timeZoneSidKey
     *
     * @return string
     */
    public function getTimeZoneSidKey()
    {
        return $this->timeZoneSidKey;
    }

    /**
     * Sets a new timeZoneSidKey
     *
     * @param string $timeZoneSidKey
     * @return self
     */
    public function setTimeZoneSidKey($timeZoneSidKey)
    {
        $this->timeZoneSidKey = $timeZoneSidKey;
        return $this;
    }

    /**
     * Gets as title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * @param string $title
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as undecidedEventRelations
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getUndecidedEventRelations()
    {
        return $this->undecidedEventRelations;
    }

    /**
     * Sets a new undecidedEventRelations
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $undecidedEventRelations
     * @return self
     */
    public function setUndecidedEventRelations(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $undecidedEventRelations)
    {
        $this->undecidedEventRelations = $undecidedEventRelations;
        return $this;
    }

    /**
     * Gets as userEntityAccessRights
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getUserEntityAccessRights()
    {
        return $this->userEntityAccessRights;
    }

    /**
     * Sets a new userEntityAccessRights
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $userEntityAccessRights
     * @return self
     */
    public function setUserEntityAccessRights(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $userEntityAccessRights)
    {
        $this->userEntityAccessRights = $userEntityAccessRights;
        return $this;
    }

    /**
     * Gets as userFieldAccessRights
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getUserFieldAccessRights()
    {
        return $this->userFieldAccessRights;
    }

    /**
     * Sets a new userFieldAccessRights
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $userFieldAccessRights
     * @return self
     */
    public function setUserFieldAccessRights(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $userFieldAccessRights)
    {
        $this->userFieldAccessRights = $userFieldAccessRights;
        return $this;
    }

    /**
     * Gets as userPermissionsCallCenterAutoLogin
     *
     * @return bool
     */
    public function getUserPermissionsCallCenterAutoLogin()
    {
        return $this->userPermissionsCallCenterAutoLogin;
    }

    /**
     * Sets a new userPermissionsCallCenterAutoLogin
     *
     * @param bool $userPermissionsCallCenterAutoLogin
     * @return self
     */
    public function setUserPermissionsCallCenterAutoLogin($userPermissionsCallCenterAutoLogin)
    {
        $this->userPermissionsCallCenterAutoLogin = $userPermissionsCallCenterAutoLogin;
        return $this;
    }

    /**
     * Gets as userPermissionsInteractionUser
     *
     * @return bool
     */
    public function getUserPermissionsInteractionUser()
    {
        return $this->userPermissionsInteractionUser;
    }

    /**
     * Sets a new userPermissionsInteractionUser
     *
     * @param bool $userPermissionsInteractionUser
     * @return self
     */
    public function setUserPermissionsInteractionUser($userPermissionsInteractionUser)
    {
        $this->userPermissionsInteractionUser = $userPermissionsInteractionUser;
        return $this;
    }

    /**
     * Gets as userPermissionsJigsawProspectingUser
     *
     * @return bool
     */
    public function getUserPermissionsJigsawProspectingUser()
    {
        return $this->userPermissionsJigsawProspectingUser;
    }

    /**
     * Sets a new userPermissionsJigsawProspectingUser
     *
     * @param bool $userPermissionsJigsawProspectingUser
     * @return self
     */
    public function setUserPermissionsJigsawProspectingUser($userPermissionsJigsawProspectingUser)
    {
        $this->userPermissionsJigsawProspectingUser = $userPermissionsJigsawProspectingUser;
        return $this;
    }

    /**
     * Gets as userPermissionsKnowledgeUser
     *
     * @return bool
     */
    public function getUserPermissionsKnowledgeUser()
    {
        return $this->userPermissionsKnowledgeUser;
    }

    /**
     * Sets a new userPermissionsKnowledgeUser
     *
     * @param bool $userPermissionsKnowledgeUser
     * @return self
     */
    public function setUserPermissionsKnowledgeUser($userPermissionsKnowledgeUser)
    {
        $this->userPermissionsKnowledgeUser = $userPermissionsKnowledgeUser;
        return $this;
    }

    /**
     * Gets as userPermissionsMarketingUser
     *
     * @return bool
     */
    public function getUserPermissionsMarketingUser()
    {
        return $this->userPermissionsMarketingUser;
    }

    /**
     * Sets a new userPermissionsMarketingUser
     *
     * @param bool $userPermissionsMarketingUser
     * @return self
     */
    public function setUserPermissionsMarketingUser($userPermissionsMarketingUser)
    {
        $this->userPermissionsMarketingUser = $userPermissionsMarketingUser;
        return $this;
    }

    /**
     * Gets as userPermissionsMobileUser
     *
     * @return bool
     */
    public function getUserPermissionsMobileUser()
    {
        return $this->userPermissionsMobileUser;
    }

    /**
     * Sets a new userPermissionsMobileUser
     *
     * @param bool $userPermissionsMobileUser
     * @return self
     */
    public function setUserPermissionsMobileUser($userPermissionsMobileUser)
    {
        $this->userPermissionsMobileUser = $userPermissionsMobileUser;
        return $this;
    }

    /**
     * Gets as userPermissionsOfflineUser
     *
     * @return bool
     */
    public function getUserPermissionsOfflineUser()
    {
        return $this->userPermissionsOfflineUser;
    }

    /**
     * Sets a new userPermissionsOfflineUser
     *
     * @param bool $userPermissionsOfflineUser
     * @return self
     */
    public function setUserPermissionsOfflineUser($userPermissionsOfflineUser)
    {
        $this->userPermissionsOfflineUser = $userPermissionsOfflineUser;
        return $this;
    }

    /**
     * Gets as userPermissionsSFContentUser
     *
     * @return bool
     */
    public function getUserPermissionsSFContentUser()
    {
        return $this->userPermissionsSFContentUser;
    }

    /**
     * Sets a new userPermissionsSFContentUser
     *
     * @param bool $userPermissionsSFContentUser
     * @return self
     */
    public function setUserPermissionsSFContentUser($userPermissionsSFContentUser)
    {
        $this->userPermissionsSFContentUser = $userPermissionsSFContentUser;
        return $this;
    }

    /**
     * Gets as userPermissionsSiteforceContributorUser
     *
     * @return bool
     */
    public function getUserPermissionsSiteforceContributorUser()
    {
        return $this->userPermissionsSiteforceContributorUser;
    }

    /**
     * Sets a new userPermissionsSiteforceContributorUser
     *
     * @param bool $userPermissionsSiteforceContributorUser
     * @return self
     */
    public function setUserPermissionsSiteforceContributorUser($userPermissionsSiteforceContributorUser)
    {
        $this->userPermissionsSiteforceContributorUser = $userPermissionsSiteforceContributorUser;
        return $this;
    }

    /**
     * Gets as userPermissionsSiteforcePublisherUser
     *
     * @return bool
     */
    public function getUserPermissionsSiteforcePublisherUser()
    {
        return $this->userPermissionsSiteforcePublisherUser;
    }

    /**
     * Sets a new userPermissionsSiteforcePublisherUser
     *
     * @param bool $userPermissionsSiteforcePublisherUser
     * @return self
     */
    public function setUserPermissionsSiteforcePublisherUser($userPermissionsSiteforcePublisherUser)
    {
        $this->userPermissionsSiteforcePublisherUser = $userPermissionsSiteforcePublisherUser;
        return $this;
    }

    /**
     * Gets as userPermissionsSupportUser
     *
     * @return bool
     */
    public function getUserPermissionsSupportUser()
    {
        return $this->userPermissionsSupportUser;
    }

    /**
     * Sets a new userPermissionsSupportUser
     *
     * @param bool $userPermissionsSupportUser
     * @return self
     */
    public function setUserPermissionsSupportUser($userPermissionsSupportUser)
    {
        $this->userPermissionsSupportUser = $userPermissionsSupportUser;
        return $this;
    }

    /**
     * Gets as userPermissionsWorkDotComUserFeature
     *
     * @return bool
     */
    public function getUserPermissionsWorkDotComUserFeature()
    {
        return $this->userPermissionsWorkDotComUserFeature;
    }

    /**
     * Sets a new userPermissionsWorkDotComUserFeature
     *
     * @param bool $userPermissionsWorkDotComUserFeature
     * @return self
     */
    public function setUserPermissionsWorkDotComUserFeature($userPermissionsWorkDotComUserFeature)
    {
        $this->userPermissionsWorkDotComUserFeature = $userPermissionsWorkDotComUserFeature;
        return $this;
    }

    /**
     * Gets as userPreferences
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getUserPreferences()
    {
        return $this->userPreferences;
    }

    /**
     * Sets a new userPreferences
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $userPreferences
     * @return self
     */
    public function setUserPreferences(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $userPreferences)
    {
        $this->userPreferences = $userPreferences;
        return $this;
    }

    /**
     * Gets as userPreferencesActivityRemindersPopup
     *
     * @return bool
     */
    public function getUserPreferencesActivityRemindersPopup()
    {
        return $this->userPreferencesActivityRemindersPopup;
    }

    /**
     * Sets a new userPreferencesActivityRemindersPopup
     *
     * @param bool $userPreferencesActivityRemindersPopup
     * @return self
     */
    public function setUserPreferencesActivityRemindersPopup($userPreferencesActivityRemindersPopup)
    {
        $this->userPreferencesActivityRemindersPopup = $userPreferencesActivityRemindersPopup;
        return $this;
    }

    /**
     * Gets as userPreferencesApexPagesDeveloperMode
     *
     * @return bool
     */
    public function getUserPreferencesApexPagesDeveloperMode()
    {
        return $this->userPreferencesApexPagesDeveloperMode;
    }

    /**
     * Sets a new userPreferencesApexPagesDeveloperMode
     *
     * @param bool $userPreferencesApexPagesDeveloperMode
     * @return self
     */
    public function setUserPreferencesApexPagesDeveloperMode($userPreferencesApexPagesDeveloperMode)
    {
        $this->userPreferencesApexPagesDeveloperMode = $userPreferencesApexPagesDeveloperMode;
        return $this;
    }

    /**
     * Gets as userPreferencesCacheDiagnostics
     *
     * @return bool
     */
    public function getUserPreferencesCacheDiagnostics()
    {
        return $this->userPreferencesCacheDiagnostics;
    }

    /**
     * Sets a new userPreferencesCacheDiagnostics
     *
     * @param bool $userPreferencesCacheDiagnostics
     * @return self
     */
    public function setUserPreferencesCacheDiagnostics($userPreferencesCacheDiagnostics)
    {
        $this->userPreferencesCacheDiagnostics = $userPreferencesCacheDiagnostics;
        return $this;
    }

    /**
     * Gets as userPreferencesContentEmailAsAndWhen
     *
     * @return bool
     */
    public function getUserPreferencesContentEmailAsAndWhen()
    {
        return $this->userPreferencesContentEmailAsAndWhen;
    }

    /**
     * Sets a new userPreferencesContentEmailAsAndWhen
     *
     * @param bool $userPreferencesContentEmailAsAndWhen
     * @return self
     */
    public function setUserPreferencesContentEmailAsAndWhen($userPreferencesContentEmailAsAndWhen)
    {
        $this->userPreferencesContentEmailAsAndWhen = $userPreferencesContentEmailAsAndWhen;
        return $this;
    }

    /**
     * Gets as userPreferencesContentNoEmail
     *
     * @return bool
     */
    public function getUserPreferencesContentNoEmail()
    {
        return $this->userPreferencesContentNoEmail;
    }

    /**
     * Sets a new userPreferencesContentNoEmail
     *
     * @param bool $userPreferencesContentNoEmail
     * @return self
     */
    public function setUserPreferencesContentNoEmail($userPreferencesContentNoEmail)
    {
        $this->userPreferencesContentNoEmail = $userPreferencesContentNoEmail;
        return $this;
    }

    /**
     * Gets as userPreferencesCreateLEXAppsWTShown
     *
     * @return bool
     */
    public function getUserPreferencesCreateLEXAppsWTShown()
    {
        return $this->userPreferencesCreateLEXAppsWTShown;
    }

    /**
     * Sets a new userPreferencesCreateLEXAppsWTShown
     *
     * @param bool $userPreferencesCreateLEXAppsWTShown
     * @return self
     */
    public function setUserPreferencesCreateLEXAppsWTShown($userPreferencesCreateLEXAppsWTShown)
    {
        $this->userPreferencesCreateLEXAppsWTShown = $userPreferencesCreateLEXAppsWTShown;
        return $this;
    }

    /**
     * Gets as userPreferencesDisCommentAfterLikeEmail
     *
     * @return bool
     */
    public function getUserPreferencesDisCommentAfterLikeEmail()
    {
        return $this->userPreferencesDisCommentAfterLikeEmail;
    }

    /**
     * Sets a new userPreferencesDisCommentAfterLikeEmail
     *
     * @param bool $userPreferencesDisCommentAfterLikeEmail
     * @return self
     */
    public function setUserPreferencesDisCommentAfterLikeEmail($userPreferencesDisCommentAfterLikeEmail)
    {
        $this->userPreferencesDisCommentAfterLikeEmail = $userPreferencesDisCommentAfterLikeEmail;
        return $this;
    }

    /**
     * Gets as userPreferencesDisMentionsCommentEmail
     *
     * @return bool
     */
    public function getUserPreferencesDisMentionsCommentEmail()
    {
        return $this->userPreferencesDisMentionsCommentEmail;
    }

    /**
     * Sets a new userPreferencesDisMentionsCommentEmail
     *
     * @param bool $userPreferencesDisMentionsCommentEmail
     * @return self
     */
    public function setUserPreferencesDisMentionsCommentEmail($userPreferencesDisMentionsCommentEmail)
    {
        $this->userPreferencesDisMentionsCommentEmail = $userPreferencesDisMentionsCommentEmail;
        return $this;
    }

    /**
     * Gets as userPreferencesDisProfPostCommentEmail
     *
     * @return bool
     */
    public function getUserPreferencesDisProfPostCommentEmail()
    {
        return $this->userPreferencesDisProfPostCommentEmail;
    }

    /**
     * Sets a new userPreferencesDisProfPostCommentEmail
     *
     * @param bool $userPreferencesDisProfPostCommentEmail
     * @return self
     */
    public function setUserPreferencesDisProfPostCommentEmail($userPreferencesDisProfPostCommentEmail)
    {
        $this->userPreferencesDisProfPostCommentEmail = $userPreferencesDisProfPostCommentEmail;
        return $this;
    }

    /**
     * Gets as userPreferencesDisableAllFeedsEmail
     *
     * @return bool
     */
    public function getUserPreferencesDisableAllFeedsEmail()
    {
        return $this->userPreferencesDisableAllFeedsEmail;
    }

    /**
     * Sets a new userPreferencesDisableAllFeedsEmail
     *
     * @param bool $userPreferencesDisableAllFeedsEmail
     * @return self
     */
    public function setUserPreferencesDisableAllFeedsEmail($userPreferencesDisableAllFeedsEmail)
    {
        $this->userPreferencesDisableAllFeedsEmail = $userPreferencesDisableAllFeedsEmail;
        return $this;
    }

    /**
     * Gets as userPreferencesDisableBookmarkEmail
     *
     * @return bool
     */
    public function getUserPreferencesDisableBookmarkEmail()
    {
        return $this->userPreferencesDisableBookmarkEmail;
    }

    /**
     * Sets a new userPreferencesDisableBookmarkEmail
     *
     * @param bool $userPreferencesDisableBookmarkEmail
     * @return self
     */
    public function setUserPreferencesDisableBookmarkEmail($userPreferencesDisableBookmarkEmail)
    {
        $this->userPreferencesDisableBookmarkEmail = $userPreferencesDisableBookmarkEmail;
        return $this;
    }

    /**
     * Gets as userPreferencesDisableChangeCommentEmail
     *
     * @return bool
     */
    public function getUserPreferencesDisableChangeCommentEmail()
    {
        return $this->userPreferencesDisableChangeCommentEmail;
    }

    /**
     * Sets a new userPreferencesDisableChangeCommentEmail
     *
     * @param bool $userPreferencesDisableChangeCommentEmail
     * @return self
     */
    public function setUserPreferencesDisableChangeCommentEmail($userPreferencesDisableChangeCommentEmail)
    {
        $this->userPreferencesDisableChangeCommentEmail = $userPreferencesDisableChangeCommentEmail;
        return $this;
    }

    /**
     * Gets as userPreferencesDisableEndorsementEmail
     *
     * @return bool
     */
    public function getUserPreferencesDisableEndorsementEmail()
    {
        return $this->userPreferencesDisableEndorsementEmail;
    }

    /**
     * Sets a new userPreferencesDisableEndorsementEmail
     *
     * @param bool $userPreferencesDisableEndorsementEmail
     * @return self
     */
    public function setUserPreferencesDisableEndorsementEmail($userPreferencesDisableEndorsementEmail)
    {
        $this->userPreferencesDisableEndorsementEmail = $userPreferencesDisableEndorsementEmail;
        return $this;
    }

    /**
     * Gets as userPreferencesDisableFeedbackEmail
     *
     * @return bool
     */
    public function getUserPreferencesDisableFeedbackEmail()
    {
        return $this->userPreferencesDisableFeedbackEmail;
    }

    /**
     * Sets a new userPreferencesDisableFeedbackEmail
     *
     * @param bool $userPreferencesDisableFeedbackEmail
     * @return self
     */
    public function setUserPreferencesDisableFeedbackEmail($userPreferencesDisableFeedbackEmail)
    {
        $this->userPreferencesDisableFeedbackEmail = $userPreferencesDisableFeedbackEmail;
        return $this;
    }

    /**
     * Gets as userPreferencesDisableFileShareNotificationsForApi
     *
     * @return bool
     */
    public function getUserPreferencesDisableFileShareNotificationsForApi()
    {
        return $this->userPreferencesDisableFileShareNotificationsForApi;
    }

    /**
     * Sets a new userPreferencesDisableFileShareNotificationsForApi
     *
     * @param bool $userPreferencesDisableFileShareNotificationsForApi
     * @return self
     */
    public function setUserPreferencesDisableFileShareNotificationsForApi($userPreferencesDisableFileShareNotificationsForApi)
    {
        $this->userPreferencesDisableFileShareNotificationsForApi = $userPreferencesDisableFileShareNotificationsForApi;
        return $this;
    }

    /**
     * Gets as userPreferencesDisableFollowersEmail
     *
     * @return bool
     */
    public function getUserPreferencesDisableFollowersEmail()
    {
        return $this->userPreferencesDisableFollowersEmail;
    }

    /**
     * Sets a new userPreferencesDisableFollowersEmail
     *
     * @param bool $userPreferencesDisableFollowersEmail
     * @return self
     */
    public function setUserPreferencesDisableFollowersEmail($userPreferencesDisableFollowersEmail)
    {
        $this->userPreferencesDisableFollowersEmail = $userPreferencesDisableFollowersEmail;
        return $this;
    }

    /**
     * Gets as userPreferencesDisableLaterCommentEmail
     *
     * @return bool
     */
    public function getUserPreferencesDisableLaterCommentEmail()
    {
        return $this->userPreferencesDisableLaterCommentEmail;
    }

    /**
     * Sets a new userPreferencesDisableLaterCommentEmail
     *
     * @param bool $userPreferencesDisableLaterCommentEmail
     * @return self
     */
    public function setUserPreferencesDisableLaterCommentEmail($userPreferencesDisableLaterCommentEmail)
    {
        $this->userPreferencesDisableLaterCommentEmail = $userPreferencesDisableLaterCommentEmail;
        return $this;
    }

    /**
     * Gets as userPreferencesDisableLikeEmail
     *
     * @return bool
     */
    public function getUserPreferencesDisableLikeEmail()
    {
        return $this->userPreferencesDisableLikeEmail;
    }

    /**
     * Sets a new userPreferencesDisableLikeEmail
     *
     * @param bool $userPreferencesDisableLikeEmail
     * @return self
     */
    public function setUserPreferencesDisableLikeEmail($userPreferencesDisableLikeEmail)
    {
        $this->userPreferencesDisableLikeEmail = $userPreferencesDisableLikeEmail;
        return $this;
    }

    /**
     * Gets as userPreferencesDisableMentionsPostEmail
     *
     * @return bool
     */
    public function getUserPreferencesDisableMentionsPostEmail()
    {
        return $this->userPreferencesDisableMentionsPostEmail;
    }

    /**
     * Sets a new userPreferencesDisableMentionsPostEmail
     *
     * @param bool $userPreferencesDisableMentionsPostEmail
     * @return self
     */
    public function setUserPreferencesDisableMentionsPostEmail($userPreferencesDisableMentionsPostEmail)
    {
        $this->userPreferencesDisableMentionsPostEmail = $userPreferencesDisableMentionsPostEmail;
        return $this;
    }

    /**
     * Gets as userPreferencesDisableMessageEmail
     *
     * @return bool
     */
    public function getUserPreferencesDisableMessageEmail()
    {
        return $this->userPreferencesDisableMessageEmail;
    }

    /**
     * Sets a new userPreferencesDisableMessageEmail
     *
     * @param bool $userPreferencesDisableMessageEmail
     * @return self
     */
    public function setUserPreferencesDisableMessageEmail($userPreferencesDisableMessageEmail)
    {
        $this->userPreferencesDisableMessageEmail = $userPreferencesDisableMessageEmail;
        return $this;
    }

    /**
     * Gets as userPreferencesDisableProfilePostEmail
     *
     * @return bool
     */
    public function getUserPreferencesDisableProfilePostEmail()
    {
        return $this->userPreferencesDisableProfilePostEmail;
    }

    /**
     * Sets a new userPreferencesDisableProfilePostEmail
     *
     * @param bool $userPreferencesDisableProfilePostEmail
     * @return self
     */
    public function setUserPreferencesDisableProfilePostEmail($userPreferencesDisableProfilePostEmail)
    {
        $this->userPreferencesDisableProfilePostEmail = $userPreferencesDisableProfilePostEmail;
        return $this;
    }

    /**
     * Gets as userPreferencesDisableSharePostEmail
     *
     * @return bool
     */
    public function getUserPreferencesDisableSharePostEmail()
    {
        return $this->userPreferencesDisableSharePostEmail;
    }

    /**
     * Sets a new userPreferencesDisableSharePostEmail
     *
     * @param bool $userPreferencesDisableSharePostEmail
     * @return self
     */
    public function setUserPreferencesDisableSharePostEmail($userPreferencesDisableSharePostEmail)
    {
        $this->userPreferencesDisableSharePostEmail = $userPreferencesDisableSharePostEmail;
        return $this;
    }

    /**
     * Gets as userPreferencesDisableWorkEmail
     *
     * @return bool
     */
    public function getUserPreferencesDisableWorkEmail()
    {
        return $this->userPreferencesDisableWorkEmail;
    }

    /**
     * Sets a new userPreferencesDisableWorkEmail
     *
     * @param bool $userPreferencesDisableWorkEmail
     * @return self
     */
    public function setUserPreferencesDisableWorkEmail($userPreferencesDisableWorkEmail)
    {
        $this->userPreferencesDisableWorkEmail = $userPreferencesDisableWorkEmail;
        return $this;
    }

    /**
     * Gets as userPreferencesEnableAutoSubForFeeds
     *
     * @return bool
     */
    public function getUserPreferencesEnableAutoSubForFeeds()
    {
        return $this->userPreferencesEnableAutoSubForFeeds;
    }

    /**
     * Sets a new userPreferencesEnableAutoSubForFeeds
     *
     * @param bool $userPreferencesEnableAutoSubForFeeds
     * @return self
     */
    public function setUserPreferencesEnableAutoSubForFeeds($userPreferencesEnableAutoSubForFeeds)
    {
        $this->userPreferencesEnableAutoSubForFeeds = $userPreferencesEnableAutoSubForFeeds;
        return $this;
    }

    /**
     * Gets as userPreferencesEventRemindersCheckboxDefault
     *
     * @return bool
     */
    public function getUserPreferencesEventRemindersCheckboxDefault()
    {
        return $this->userPreferencesEventRemindersCheckboxDefault;
    }

    /**
     * Sets a new userPreferencesEventRemindersCheckboxDefault
     *
     * @param bool $userPreferencesEventRemindersCheckboxDefault
     * @return self
     */
    public function setUserPreferencesEventRemindersCheckboxDefault($userPreferencesEventRemindersCheckboxDefault)
    {
        $this->userPreferencesEventRemindersCheckboxDefault = $userPreferencesEventRemindersCheckboxDefault;
        return $this;
    }

    /**
     * Gets as userPreferencesExcludeMailAppAttachments
     *
     * @return bool
     */
    public function getUserPreferencesExcludeMailAppAttachments()
    {
        return $this->userPreferencesExcludeMailAppAttachments;
    }

    /**
     * Sets a new userPreferencesExcludeMailAppAttachments
     *
     * @param bool $userPreferencesExcludeMailAppAttachments
     * @return self
     */
    public function setUserPreferencesExcludeMailAppAttachments($userPreferencesExcludeMailAppAttachments)
    {
        $this->userPreferencesExcludeMailAppAttachments = $userPreferencesExcludeMailAppAttachments;
        return $this;
    }

    /**
     * Gets as userPreferencesFavoritesShowTopFavorites
     *
     * @return bool
     */
    public function getUserPreferencesFavoritesShowTopFavorites()
    {
        return $this->userPreferencesFavoritesShowTopFavorites;
    }

    /**
     * Sets a new userPreferencesFavoritesShowTopFavorites
     *
     * @param bool $userPreferencesFavoritesShowTopFavorites
     * @return self
     */
    public function setUserPreferencesFavoritesShowTopFavorites($userPreferencesFavoritesShowTopFavorites)
    {
        $this->userPreferencesFavoritesShowTopFavorites = $userPreferencesFavoritesShowTopFavorites;
        return $this;
    }

    /**
     * Gets as userPreferencesFavoritesWTShown
     *
     * @return bool
     */
    public function getUserPreferencesFavoritesWTShown()
    {
        return $this->userPreferencesFavoritesWTShown;
    }

    /**
     * Sets a new userPreferencesFavoritesWTShown
     *
     * @param bool $userPreferencesFavoritesWTShown
     * @return self
     */
    public function setUserPreferencesFavoritesWTShown($userPreferencesFavoritesWTShown)
    {
        $this->userPreferencesFavoritesWTShown = $userPreferencesFavoritesWTShown;
        return $this;
    }

    /**
     * Gets as userPreferencesGlobalNavBarWTShown
     *
     * @return bool
     */
    public function getUserPreferencesGlobalNavBarWTShown()
    {
        return $this->userPreferencesGlobalNavBarWTShown;
    }

    /**
     * Sets a new userPreferencesGlobalNavBarWTShown
     *
     * @param bool $userPreferencesGlobalNavBarWTShown
     * @return self
     */
    public function setUserPreferencesGlobalNavBarWTShown($userPreferencesGlobalNavBarWTShown)
    {
        $this->userPreferencesGlobalNavBarWTShown = $userPreferencesGlobalNavBarWTShown;
        return $this;
    }

    /**
     * Gets as userPreferencesGlobalNavGridMenuWTShown
     *
     * @return bool
     */
    public function getUserPreferencesGlobalNavGridMenuWTShown()
    {
        return $this->userPreferencesGlobalNavGridMenuWTShown;
    }

    /**
     * Sets a new userPreferencesGlobalNavGridMenuWTShown
     *
     * @param bool $userPreferencesGlobalNavGridMenuWTShown
     * @return self
     */
    public function setUserPreferencesGlobalNavGridMenuWTShown($userPreferencesGlobalNavGridMenuWTShown)
    {
        $this->userPreferencesGlobalNavGridMenuWTShown = $userPreferencesGlobalNavGridMenuWTShown;
        return $this;
    }

    /**
     * Gets as userPreferencesHasCelebrationBadge
     *
     * @return bool
     */
    public function getUserPreferencesHasCelebrationBadge()
    {
        return $this->userPreferencesHasCelebrationBadge;
    }

    /**
     * Sets a new userPreferencesHasCelebrationBadge
     *
     * @param bool $userPreferencesHasCelebrationBadge
     * @return self
     */
    public function setUserPreferencesHasCelebrationBadge($userPreferencesHasCelebrationBadge)
    {
        $this->userPreferencesHasCelebrationBadge = $userPreferencesHasCelebrationBadge;
        return $this;
    }

    /**
     * Gets as userPreferencesHideBiggerPhotoCallout
     *
     * @return bool
     */
    public function getUserPreferencesHideBiggerPhotoCallout()
    {
        return $this->userPreferencesHideBiggerPhotoCallout;
    }

    /**
     * Sets a new userPreferencesHideBiggerPhotoCallout
     *
     * @param bool $userPreferencesHideBiggerPhotoCallout
     * @return self
     */
    public function setUserPreferencesHideBiggerPhotoCallout($userPreferencesHideBiggerPhotoCallout)
    {
        $this->userPreferencesHideBiggerPhotoCallout = $userPreferencesHideBiggerPhotoCallout;
        return $this;
    }

    /**
     * Gets as userPreferencesHideCSNDesktopTask
     *
     * @return bool
     */
    public function getUserPreferencesHideCSNDesktopTask()
    {
        return $this->userPreferencesHideCSNDesktopTask;
    }

    /**
     * Sets a new userPreferencesHideCSNDesktopTask
     *
     * @param bool $userPreferencesHideCSNDesktopTask
     * @return self
     */
    public function setUserPreferencesHideCSNDesktopTask($userPreferencesHideCSNDesktopTask)
    {
        $this->userPreferencesHideCSNDesktopTask = $userPreferencesHideCSNDesktopTask;
        return $this;
    }

    /**
     * Gets as userPreferencesHideCSNGetChatterMobileTask
     *
     * @return bool
     */
    public function getUserPreferencesHideCSNGetChatterMobileTask()
    {
        return $this->userPreferencesHideCSNGetChatterMobileTask;
    }

    /**
     * Sets a new userPreferencesHideCSNGetChatterMobileTask
     *
     * @param bool $userPreferencesHideCSNGetChatterMobileTask
     * @return self
     */
    public function setUserPreferencesHideCSNGetChatterMobileTask($userPreferencesHideCSNGetChatterMobileTask)
    {
        $this->userPreferencesHideCSNGetChatterMobileTask = $userPreferencesHideCSNGetChatterMobileTask;
        return $this;
    }

    /**
     * Gets as userPreferencesHideChatterOnboardingSplash
     *
     * @return bool
     */
    public function getUserPreferencesHideChatterOnboardingSplash()
    {
        return $this->userPreferencesHideChatterOnboardingSplash;
    }

    /**
     * Sets a new userPreferencesHideChatterOnboardingSplash
     *
     * @param bool $userPreferencesHideChatterOnboardingSplash
     * @return self
     */
    public function setUserPreferencesHideChatterOnboardingSplash($userPreferencesHideChatterOnboardingSplash)
    {
        $this->userPreferencesHideChatterOnboardingSplash = $userPreferencesHideChatterOnboardingSplash;
        return $this;
    }

    /**
     * Gets as userPreferencesHideEndUserOnboardingAssistantModal
     *
     * @return bool
     */
    public function getUserPreferencesHideEndUserOnboardingAssistantModal()
    {
        return $this->userPreferencesHideEndUserOnboardingAssistantModal;
    }

    /**
     * Sets a new userPreferencesHideEndUserOnboardingAssistantModal
     *
     * @param bool $userPreferencesHideEndUserOnboardingAssistantModal
     * @return self
     */
    public function setUserPreferencesHideEndUserOnboardingAssistantModal($userPreferencesHideEndUserOnboardingAssistantModal)
    {
        $this->userPreferencesHideEndUserOnboardingAssistantModal = $userPreferencesHideEndUserOnboardingAssistantModal;
        return $this;
    }

    /**
     * Gets as userPreferencesHideLightningMigrationModal
     *
     * @return bool
     */
    public function getUserPreferencesHideLightningMigrationModal()
    {
        return $this->userPreferencesHideLightningMigrationModal;
    }

    /**
     * Sets a new userPreferencesHideLightningMigrationModal
     *
     * @param bool $userPreferencesHideLightningMigrationModal
     * @return self
     */
    public function setUserPreferencesHideLightningMigrationModal($userPreferencesHideLightningMigrationModal)
    {
        $this->userPreferencesHideLightningMigrationModal = $userPreferencesHideLightningMigrationModal;
        return $this;
    }

    /**
     * Gets as userPreferencesHideS1BrowserUI
     *
     * @return bool
     */
    public function getUserPreferencesHideS1BrowserUI()
    {
        return $this->userPreferencesHideS1BrowserUI;
    }

    /**
     * Sets a new userPreferencesHideS1BrowserUI
     *
     * @param bool $userPreferencesHideS1BrowserUI
     * @return self
     */
    public function setUserPreferencesHideS1BrowserUI($userPreferencesHideS1BrowserUI)
    {
        $this->userPreferencesHideS1BrowserUI = $userPreferencesHideS1BrowserUI;
        return $this;
    }

    /**
     * Gets as userPreferencesHideSecondChatterOnboardingSplash
     *
     * @return bool
     */
    public function getUserPreferencesHideSecondChatterOnboardingSplash()
    {
        return $this->userPreferencesHideSecondChatterOnboardingSplash;
    }

    /**
     * Sets a new userPreferencesHideSecondChatterOnboardingSplash
     *
     * @param bool $userPreferencesHideSecondChatterOnboardingSplash
     * @return self
     */
    public function setUserPreferencesHideSecondChatterOnboardingSplash($userPreferencesHideSecondChatterOnboardingSplash)
    {
        $this->userPreferencesHideSecondChatterOnboardingSplash = $userPreferencesHideSecondChatterOnboardingSplash;
        return $this;
    }

    /**
     * Gets as userPreferencesHideSfxWelcomeMat
     *
     * @return bool
     */
    public function getUserPreferencesHideSfxWelcomeMat()
    {
        return $this->userPreferencesHideSfxWelcomeMat;
    }

    /**
     * Sets a new userPreferencesHideSfxWelcomeMat
     *
     * @param bool $userPreferencesHideSfxWelcomeMat
     * @return self
     */
    public function setUserPreferencesHideSfxWelcomeMat($userPreferencesHideSfxWelcomeMat)
    {
        $this->userPreferencesHideSfxWelcomeMat = $userPreferencesHideSfxWelcomeMat;
        return $this;
    }

    /**
     * Gets as userPreferencesJigsawListUser
     *
     * @return bool
     */
    public function getUserPreferencesJigsawListUser()
    {
        return $this->userPreferencesJigsawListUser;
    }

    /**
     * Sets a new userPreferencesJigsawListUser
     *
     * @param bool $userPreferencesJigsawListUser
     * @return self
     */
    public function setUserPreferencesJigsawListUser($userPreferencesJigsawListUser)
    {
        $this->userPreferencesJigsawListUser = $userPreferencesJigsawListUser;
        return $this;
    }

    /**
     * Gets as userPreferencesLightningExperiencePreferred
     *
     * @return bool
     */
    public function getUserPreferencesLightningExperiencePreferred()
    {
        return $this->userPreferencesLightningExperiencePreferred;
    }

    /**
     * Sets a new userPreferencesLightningExperiencePreferred
     *
     * @param bool $userPreferencesLightningExperiencePreferred
     * @return self
     */
    public function setUserPreferencesLightningExperiencePreferred($userPreferencesLightningExperiencePreferred)
    {
        $this->userPreferencesLightningExperiencePreferred = $userPreferencesLightningExperiencePreferred;
        return $this;
    }

    /**
     * Gets as userPreferencesNewLightningReportRunPageEnabled
     *
     * @return bool
     */
    public function getUserPreferencesNewLightningReportRunPageEnabled()
    {
        return $this->userPreferencesNewLightningReportRunPageEnabled;
    }

    /**
     * Sets a new userPreferencesNewLightningReportRunPageEnabled
     *
     * @param bool $userPreferencesNewLightningReportRunPageEnabled
     * @return self
     */
    public function setUserPreferencesNewLightningReportRunPageEnabled($userPreferencesNewLightningReportRunPageEnabled)
    {
        $this->userPreferencesNewLightningReportRunPageEnabled = $userPreferencesNewLightningReportRunPageEnabled;
        return $this;
    }

    /**
     * Gets as userPreferencesPathAssistantCollapsed
     *
     * @return bool
     */
    public function getUserPreferencesPathAssistantCollapsed()
    {
        return $this->userPreferencesPathAssistantCollapsed;
    }

    /**
     * Sets a new userPreferencesPathAssistantCollapsed
     *
     * @param bool $userPreferencesPathAssistantCollapsed
     * @return self
     */
    public function setUserPreferencesPathAssistantCollapsed($userPreferencesPathAssistantCollapsed)
    {
        $this->userPreferencesPathAssistantCollapsed = $userPreferencesPathAssistantCollapsed;
        return $this;
    }

    /**
     * Gets as userPreferencesPipelineViewHideHelpPopover
     *
     * @return bool
     */
    public function getUserPreferencesPipelineViewHideHelpPopover()
    {
        return $this->userPreferencesPipelineViewHideHelpPopover;
    }

    /**
     * Sets a new userPreferencesPipelineViewHideHelpPopover
     *
     * @param bool $userPreferencesPipelineViewHideHelpPopover
     * @return self
     */
    public function setUserPreferencesPipelineViewHideHelpPopover($userPreferencesPipelineViewHideHelpPopover)
    {
        $this->userPreferencesPipelineViewHideHelpPopover = $userPreferencesPipelineViewHideHelpPopover;
        return $this;
    }

    /**
     * Gets as userPreferencesPreviewCustomTheme
     *
     * @return bool
     */
    public function getUserPreferencesPreviewCustomTheme()
    {
        return $this->userPreferencesPreviewCustomTheme;
    }

    /**
     * Sets a new userPreferencesPreviewCustomTheme
     *
     * @param bool $userPreferencesPreviewCustomTheme
     * @return self
     */
    public function setUserPreferencesPreviewCustomTheme($userPreferencesPreviewCustomTheme)
    {
        $this->userPreferencesPreviewCustomTheme = $userPreferencesPreviewCustomTheme;
        return $this;
    }

    /**
     * Gets as userPreferencesPreviewLightning
     *
     * @return bool
     */
    public function getUserPreferencesPreviewLightning()
    {
        return $this->userPreferencesPreviewLightning;
    }

    /**
     * Sets a new userPreferencesPreviewLightning
     *
     * @param bool $userPreferencesPreviewLightning
     * @return self
     */
    public function setUserPreferencesPreviewLightning($userPreferencesPreviewLightning)
    {
        $this->userPreferencesPreviewLightning = $userPreferencesPreviewLightning;
        return $this;
    }

    /**
     * Gets as userPreferencesRecordHomeReservedWTShown
     *
     * @return bool
     */
    public function getUserPreferencesRecordHomeReservedWTShown()
    {
        return $this->userPreferencesRecordHomeReservedWTShown;
    }

    /**
     * Sets a new userPreferencesRecordHomeReservedWTShown
     *
     * @param bool $userPreferencesRecordHomeReservedWTShown
     * @return self
     */
    public function setUserPreferencesRecordHomeReservedWTShown($userPreferencesRecordHomeReservedWTShown)
    {
        $this->userPreferencesRecordHomeReservedWTShown = $userPreferencesRecordHomeReservedWTShown;
        return $this;
    }

    /**
     * Gets as userPreferencesRecordHomeSectionCollapseWTShown
     *
     * @return bool
     */
    public function getUserPreferencesRecordHomeSectionCollapseWTShown()
    {
        return $this->userPreferencesRecordHomeSectionCollapseWTShown;
    }

    /**
     * Sets a new userPreferencesRecordHomeSectionCollapseWTShown
     *
     * @param bool $userPreferencesRecordHomeSectionCollapseWTShown
     * @return self
     */
    public function setUserPreferencesRecordHomeSectionCollapseWTShown($userPreferencesRecordHomeSectionCollapseWTShown)
    {
        $this->userPreferencesRecordHomeSectionCollapseWTShown = $userPreferencesRecordHomeSectionCollapseWTShown;
        return $this;
    }

    /**
     * Gets as userPreferencesReminderSoundOff
     *
     * @return bool
     */
    public function getUserPreferencesReminderSoundOff()
    {
        return $this->userPreferencesReminderSoundOff;
    }

    /**
     * Sets a new userPreferencesReminderSoundOff
     *
     * @param bool $userPreferencesReminderSoundOff
     * @return self
     */
    public function setUserPreferencesReminderSoundOff($userPreferencesReminderSoundOff)
    {
        $this->userPreferencesReminderSoundOff = $userPreferencesReminderSoundOff;
        return $this;
    }

    /**
     * Gets as userPreferencesShowCityToExternalUsers
     *
     * @return bool
     */
    public function getUserPreferencesShowCityToExternalUsers()
    {
        return $this->userPreferencesShowCityToExternalUsers;
    }

    /**
     * Sets a new userPreferencesShowCityToExternalUsers
     *
     * @param bool $userPreferencesShowCityToExternalUsers
     * @return self
     */
    public function setUserPreferencesShowCityToExternalUsers($userPreferencesShowCityToExternalUsers)
    {
        $this->userPreferencesShowCityToExternalUsers = $userPreferencesShowCityToExternalUsers;
        return $this;
    }

    /**
     * Gets as userPreferencesShowCityToGuestUsers
     *
     * @return bool
     */
    public function getUserPreferencesShowCityToGuestUsers()
    {
        return $this->userPreferencesShowCityToGuestUsers;
    }

    /**
     * Sets a new userPreferencesShowCityToGuestUsers
     *
     * @param bool $userPreferencesShowCityToGuestUsers
     * @return self
     */
    public function setUserPreferencesShowCityToGuestUsers($userPreferencesShowCityToGuestUsers)
    {
        $this->userPreferencesShowCityToGuestUsers = $userPreferencesShowCityToGuestUsers;
        return $this;
    }

    /**
     * Gets as userPreferencesShowCountryToExternalUsers
     *
     * @return bool
     */
    public function getUserPreferencesShowCountryToExternalUsers()
    {
        return $this->userPreferencesShowCountryToExternalUsers;
    }

    /**
     * Sets a new userPreferencesShowCountryToExternalUsers
     *
     * @param bool $userPreferencesShowCountryToExternalUsers
     * @return self
     */
    public function setUserPreferencesShowCountryToExternalUsers($userPreferencesShowCountryToExternalUsers)
    {
        $this->userPreferencesShowCountryToExternalUsers = $userPreferencesShowCountryToExternalUsers;
        return $this;
    }

    /**
     * Gets as userPreferencesShowCountryToGuestUsers
     *
     * @return bool
     */
    public function getUserPreferencesShowCountryToGuestUsers()
    {
        return $this->userPreferencesShowCountryToGuestUsers;
    }

    /**
     * Sets a new userPreferencesShowCountryToGuestUsers
     *
     * @param bool $userPreferencesShowCountryToGuestUsers
     * @return self
     */
    public function setUserPreferencesShowCountryToGuestUsers($userPreferencesShowCountryToGuestUsers)
    {
        $this->userPreferencesShowCountryToGuestUsers = $userPreferencesShowCountryToGuestUsers;
        return $this;
    }

    /**
     * Gets as userPreferencesShowEmailToExternalUsers
     *
     * @return bool
     */
    public function getUserPreferencesShowEmailToExternalUsers()
    {
        return $this->userPreferencesShowEmailToExternalUsers;
    }

    /**
     * Sets a new userPreferencesShowEmailToExternalUsers
     *
     * @param bool $userPreferencesShowEmailToExternalUsers
     * @return self
     */
    public function setUserPreferencesShowEmailToExternalUsers($userPreferencesShowEmailToExternalUsers)
    {
        $this->userPreferencesShowEmailToExternalUsers = $userPreferencesShowEmailToExternalUsers;
        return $this;
    }

    /**
     * Gets as userPreferencesShowEmailToGuestUsers
     *
     * @return bool
     */
    public function getUserPreferencesShowEmailToGuestUsers()
    {
        return $this->userPreferencesShowEmailToGuestUsers;
    }

    /**
     * Sets a new userPreferencesShowEmailToGuestUsers
     *
     * @param bool $userPreferencesShowEmailToGuestUsers
     * @return self
     */
    public function setUserPreferencesShowEmailToGuestUsers($userPreferencesShowEmailToGuestUsers)
    {
        $this->userPreferencesShowEmailToGuestUsers = $userPreferencesShowEmailToGuestUsers;
        return $this;
    }

    /**
     * Gets as userPreferencesShowFaxToExternalUsers
     *
     * @return bool
     */
    public function getUserPreferencesShowFaxToExternalUsers()
    {
        return $this->userPreferencesShowFaxToExternalUsers;
    }

    /**
     * Sets a new userPreferencesShowFaxToExternalUsers
     *
     * @param bool $userPreferencesShowFaxToExternalUsers
     * @return self
     */
    public function setUserPreferencesShowFaxToExternalUsers($userPreferencesShowFaxToExternalUsers)
    {
        $this->userPreferencesShowFaxToExternalUsers = $userPreferencesShowFaxToExternalUsers;
        return $this;
    }

    /**
     * Gets as userPreferencesShowFaxToGuestUsers
     *
     * @return bool
     */
    public function getUserPreferencesShowFaxToGuestUsers()
    {
        return $this->userPreferencesShowFaxToGuestUsers;
    }

    /**
     * Sets a new userPreferencesShowFaxToGuestUsers
     *
     * @param bool $userPreferencesShowFaxToGuestUsers
     * @return self
     */
    public function setUserPreferencesShowFaxToGuestUsers($userPreferencesShowFaxToGuestUsers)
    {
        $this->userPreferencesShowFaxToGuestUsers = $userPreferencesShowFaxToGuestUsers;
        return $this;
    }

    /**
     * Gets as userPreferencesShowManagerToExternalUsers
     *
     * @return bool
     */
    public function getUserPreferencesShowManagerToExternalUsers()
    {
        return $this->userPreferencesShowManagerToExternalUsers;
    }

    /**
     * Sets a new userPreferencesShowManagerToExternalUsers
     *
     * @param bool $userPreferencesShowManagerToExternalUsers
     * @return self
     */
    public function setUserPreferencesShowManagerToExternalUsers($userPreferencesShowManagerToExternalUsers)
    {
        $this->userPreferencesShowManagerToExternalUsers = $userPreferencesShowManagerToExternalUsers;
        return $this;
    }

    /**
     * Gets as userPreferencesShowManagerToGuestUsers
     *
     * @return bool
     */
    public function getUserPreferencesShowManagerToGuestUsers()
    {
        return $this->userPreferencesShowManagerToGuestUsers;
    }

    /**
     * Sets a new userPreferencesShowManagerToGuestUsers
     *
     * @param bool $userPreferencesShowManagerToGuestUsers
     * @return self
     */
    public function setUserPreferencesShowManagerToGuestUsers($userPreferencesShowManagerToGuestUsers)
    {
        $this->userPreferencesShowManagerToGuestUsers = $userPreferencesShowManagerToGuestUsers;
        return $this;
    }

    /**
     * Gets as userPreferencesShowMobilePhoneToExternalUsers
     *
     * @return bool
     */
    public function getUserPreferencesShowMobilePhoneToExternalUsers()
    {
        return $this->userPreferencesShowMobilePhoneToExternalUsers;
    }

    /**
     * Sets a new userPreferencesShowMobilePhoneToExternalUsers
     *
     * @param bool $userPreferencesShowMobilePhoneToExternalUsers
     * @return self
     */
    public function setUserPreferencesShowMobilePhoneToExternalUsers($userPreferencesShowMobilePhoneToExternalUsers)
    {
        $this->userPreferencesShowMobilePhoneToExternalUsers = $userPreferencesShowMobilePhoneToExternalUsers;
        return $this;
    }

    /**
     * Gets as userPreferencesShowMobilePhoneToGuestUsers
     *
     * @return bool
     */
    public function getUserPreferencesShowMobilePhoneToGuestUsers()
    {
        return $this->userPreferencesShowMobilePhoneToGuestUsers;
    }

    /**
     * Sets a new userPreferencesShowMobilePhoneToGuestUsers
     *
     * @param bool $userPreferencesShowMobilePhoneToGuestUsers
     * @return self
     */
    public function setUserPreferencesShowMobilePhoneToGuestUsers($userPreferencesShowMobilePhoneToGuestUsers)
    {
        $this->userPreferencesShowMobilePhoneToGuestUsers = $userPreferencesShowMobilePhoneToGuestUsers;
        return $this;
    }

    /**
     * Gets as userPreferencesShowPostalCodeToExternalUsers
     *
     * @return bool
     */
    public function getUserPreferencesShowPostalCodeToExternalUsers()
    {
        return $this->userPreferencesShowPostalCodeToExternalUsers;
    }

    /**
     * Sets a new userPreferencesShowPostalCodeToExternalUsers
     *
     * @param bool $userPreferencesShowPostalCodeToExternalUsers
     * @return self
     */
    public function setUserPreferencesShowPostalCodeToExternalUsers($userPreferencesShowPostalCodeToExternalUsers)
    {
        $this->userPreferencesShowPostalCodeToExternalUsers = $userPreferencesShowPostalCodeToExternalUsers;
        return $this;
    }

    /**
     * Gets as userPreferencesShowPostalCodeToGuestUsers
     *
     * @return bool
     */
    public function getUserPreferencesShowPostalCodeToGuestUsers()
    {
        return $this->userPreferencesShowPostalCodeToGuestUsers;
    }

    /**
     * Sets a new userPreferencesShowPostalCodeToGuestUsers
     *
     * @param bool $userPreferencesShowPostalCodeToGuestUsers
     * @return self
     */
    public function setUserPreferencesShowPostalCodeToGuestUsers($userPreferencesShowPostalCodeToGuestUsers)
    {
        $this->userPreferencesShowPostalCodeToGuestUsers = $userPreferencesShowPostalCodeToGuestUsers;
        return $this;
    }

    /**
     * Gets as userPreferencesShowProfilePicToGuestUsers
     *
     * @return bool
     */
    public function getUserPreferencesShowProfilePicToGuestUsers()
    {
        return $this->userPreferencesShowProfilePicToGuestUsers;
    }

    /**
     * Sets a new userPreferencesShowProfilePicToGuestUsers
     *
     * @param bool $userPreferencesShowProfilePicToGuestUsers
     * @return self
     */
    public function setUserPreferencesShowProfilePicToGuestUsers($userPreferencesShowProfilePicToGuestUsers)
    {
        $this->userPreferencesShowProfilePicToGuestUsers = $userPreferencesShowProfilePicToGuestUsers;
        return $this;
    }

    /**
     * Gets as userPreferencesShowStateToExternalUsers
     *
     * @return bool
     */
    public function getUserPreferencesShowStateToExternalUsers()
    {
        return $this->userPreferencesShowStateToExternalUsers;
    }

    /**
     * Sets a new userPreferencesShowStateToExternalUsers
     *
     * @param bool $userPreferencesShowStateToExternalUsers
     * @return self
     */
    public function setUserPreferencesShowStateToExternalUsers($userPreferencesShowStateToExternalUsers)
    {
        $this->userPreferencesShowStateToExternalUsers = $userPreferencesShowStateToExternalUsers;
        return $this;
    }

    /**
     * Gets as userPreferencesShowStateToGuestUsers
     *
     * @return bool
     */
    public function getUserPreferencesShowStateToGuestUsers()
    {
        return $this->userPreferencesShowStateToGuestUsers;
    }

    /**
     * Sets a new userPreferencesShowStateToGuestUsers
     *
     * @param bool $userPreferencesShowStateToGuestUsers
     * @return self
     */
    public function setUserPreferencesShowStateToGuestUsers($userPreferencesShowStateToGuestUsers)
    {
        $this->userPreferencesShowStateToGuestUsers = $userPreferencesShowStateToGuestUsers;
        return $this;
    }

    /**
     * Gets as userPreferencesShowStreetAddressToExternalUsers
     *
     * @return bool
     */
    public function getUserPreferencesShowStreetAddressToExternalUsers()
    {
        return $this->userPreferencesShowStreetAddressToExternalUsers;
    }

    /**
     * Sets a new userPreferencesShowStreetAddressToExternalUsers
     *
     * @param bool $userPreferencesShowStreetAddressToExternalUsers
     * @return self
     */
    public function setUserPreferencesShowStreetAddressToExternalUsers($userPreferencesShowStreetAddressToExternalUsers)
    {
        $this->userPreferencesShowStreetAddressToExternalUsers = $userPreferencesShowStreetAddressToExternalUsers;
        return $this;
    }

    /**
     * Gets as userPreferencesShowStreetAddressToGuestUsers
     *
     * @return bool
     */
    public function getUserPreferencesShowStreetAddressToGuestUsers()
    {
        return $this->userPreferencesShowStreetAddressToGuestUsers;
    }

    /**
     * Sets a new userPreferencesShowStreetAddressToGuestUsers
     *
     * @param bool $userPreferencesShowStreetAddressToGuestUsers
     * @return self
     */
    public function setUserPreferencesShowStreetAddressToGuestUsers($userPreferencesShowStreetAddressToGuestUsers)
    {
        $this->userPreferencesShowStreetAddressToGuestUsers = $userPreferencesShowStreetAddressToGuestUsers;
        return $this;
    }

    /**
     * Gets as userPreferencesShowTitleToExternalUsers
     *
     * @return bool
     */
    public function getUserPreferencesShowTitleToExternalUsers()
    {
        return $this->userPreferencesShowTitleToExternalUsers;
    }

    /**
     * Sets a new userPreferencesShowTitleToExternalUsers
     *
     * @param bool $userPreferencesShowTitleToExternalUsers
     * @return self
     */
    public function setUserPreferencesShowTitleToExternalUsers($userPreferencesShowTitleToExternalUsers)
    {
        $this->userPreferencesShowTitleToExternalUsers = $userPreferencesShowTitleToExternalUsers;
        return $this;
    }

    /**
     * Gets as userPreferencesShowTitleToGuestUsers
     *
     * @return bool
     */
    public function getUserPreferencesShowTitleToGuestUsers()
    {
        return $this->userPreferencesShowTitleToGuestUsers;
    }

    /**
     * Sets a new userPreferencesShowTitleToGuestUsers
     *
     * @param bool $userPreferencesShowTitleToGuestUsers
     * @return self
     */
    public function setUserPreferencesShowTitleToGuestUsers($userPreferencesShowTitleToGuestUsers)
    {
        $this->userPreferencesShowTitleToGuestUsers = $userPreferencesShowTitleToGuestUsers;
        return $this;
    }

    /**
     * Gets as userPreferencesShowWorkPhoneToExternalUsers
     *
     * @return bool
     */
    public function getUserPreferencesShowWorkPhoneToExternalUsers()
    {
        return $this->userPreferencesShowWorkPhoneToExternalUsers;
    }

    /**
     * Sets a new userPreferencesShowWorkPhoneToExternalUsers
     *
     * @param bool $userPreferencesShowWorkPhoneToExternalUsers
     * @return self
     */
    public function setUserPreferencesShowWorkPhoneToExternalUsers($userPreferencesShowWorkPhoneToExternalUsers)
    {
        $this->userPreferencesShowWorkPhoneToExternalUsers = $userPreferencesShowWorkPhoneToExternalUsers;
        return $this;
    }

    /**
     * Gets as userPreferencesShowWorkPhoneToGuestUsers
     *
     * @return bool
     */
    public function getUserPreferencesShowWorkPhoneToGuestUsers()
    {
        return $this->userPreferencesShowWorkPhoneToGuestUsers;
    }

    /**
     * Sets a new userPreferencesShowWorkPhoneToGuestUsers
     *
     * @param bool $userPreferencesShowWorkPhoneToGuestUsers
     * @return self
     */
    public function setUserPreferencesShowWorkPhoneToGuestUsers($userPreferencesShowWorkPhoneToGuestUsers)
    {
        $this->userPreferencesShowWorkPhoneToGuestUsers = $userPreferencesShowWorkPhoneToGuestUsers;
        return $this;
    }

    /**
     * Gets as userPreferencesSortFeedByComment
     *
     * @return bool
     */
    public function getUserPreferencesSortFeedByComment()
    {
        return $this->userPreferencesSortFeedByComment;
    }

    /**
     * Sets a new userPreferencesSortFeedByComment
     *
     * @param bool $userPreferencesSortFeedByComment
     * @return self
     */
    public function setUserPreferencesSortFeedByComment($userPreferencesSortFeedByComment)
    {
        $this->userPreferencesSortFeedByComment = $userPreferencesSortFeedByComment;
        return $this;
    }

    /**
     * Gets as userPreferencesSuppressEventSFXReminders
     *
     * @return bool
     */
    public function getUserPreferencesSuppressEventSFXReminders()
    {
        return $this->userPreferencesSuppressEventSFXReminders;
    }

    /**
     * Sets a new userPreferencesSuppressEventSFXReminders
     *
     * @param bool $userPreferencesSuppressEventSFXReminders
     * @return self
     */
    public function setUserPreferencesSuppressEventSFXReminders($userPreferencesSuppressEventSFXReminders)
    {
        $this->userPreferencesSuppressEventSFXReminders = $userPreferencesSuppressEventSFXReminders;
        return $this;
    }

    /**
     * Gets as userPreferencesSuppressTaskSFXReminders
     *
     * @return bool
     */
    public function getUserPreferencesSuppressTaskSFXReminders()
    {
        return $this->userPreferencesSuppressTaskSFXReminders;
    }

    /**
     * Sets a new userPreferencesSuppressTaskSFXReminders
     *
     * @param bool $userPreferencesSuppressTaskSFXReminders
     * @return self
     */
    public function setUserPreferencesSuppressTaskSFXReminders($userPreferencesSuppressTaskSFXReminders)
    {
        $this->userPreferencesSuppressTaskSFXReminders = $userPreferencesSuppressTaskSFXReminders;
        return $this;
    }

    /**
     * Gets as userPreferencesTaskRemindersCheckboxDefault
     *
     * @return bool
     */
    public function getUserPreferencesTaskRemindersCheckboxDefault()
    {
        return $this->userPreferencesTaskRemindersCheckboxDefault;
    }

    /**
     * Sets a new userPreferencesTaskRemindersCheckboxDefault
     *
     * @param bool $userPreferencesTaskRemindersCheckboxDefault
     * @return self
     */
    public function setUserPreferencesTaskRemindersCheckboxDefault($userPreferencesTaskRemindersCheckboxDefault)
    {
        $this->userPreferencesTaskRemindersCheckboxDefault = $userPreferencesTaskRemindersCheckboxDefault;
        return $this;
    }

    /**
     * Gets as userPreferencesUserDebugModePref
     *
     * @return bool
     */
    public function getUserPreferencesUserDebugModePref()
    {
        return $this->userPreferencesUserDebugModePref;
    }

    /**
     * Sets a new userPreferencesUserDebugModePref
     *
     * @param bool $userPreferencesUserDebugModePref
     * @return self
     */
    public function setUserPreferencesUserDebugModePref($userPreferencesUserDebugModePref)
    {
        $this->userPreferencesUserDebugModePref = $userPreferencesUserDebugModePref;
        return $this;
    }

    /**
     * Gets as userRole
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserRoleType
     */
    public function getUserRole()
    {
        return $this->userRole;
    }

    /**
     * Sets a new userRole
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserRoleType $userRole
     * @return self
     */
    public function setUserRole(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserRoleType $userRole)
    {
        $this->userRole = $userRole;
        return $this;
    }

    /**
     * Gets as userRoleId
     *
     * @return string
     */
    public function getUserRoleId()
    {
        return $this->userRoleId;
    }

    /**
     * Sets a new userRoleId
     *
     * @param string $userRoleId
     * @return self
     */
    public function setUserRoleId($userRoleId)
    {
        $this->userRoleId = $userRoleId;
        return $this;
    }

    /**
     * Gets as userSites
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getUserSites()
    {
        return $this->userSites;
    }

    /**
     * Sets a new userSites
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $userSites
     * @return self
     */
    public function setUserSites(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $userSites)
    {
        $this->userSites = $userSites;
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
     * Gets as username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Sets a new username
     *
     * @param string $username
     * @return self
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }


}

