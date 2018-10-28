<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types\SoapStubs;

/**
 * Class representing Soap
 *
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\LoginResponse login(string $username, string $password) Login to the Salesforce.com SOAP Api
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSObjectResponse describeSObject(string $sObjectType) Describe an sObject
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSObjectsResponse describeSObjects(array $sObjectType) Describe multiple sObjects (upto 100)
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeGlobalResponse describeGlobal() Describe the Global state
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeDataCategoryGroupsResponse describeDataCategoryGroups(array $sObjectType) Describe all the data category groups available for a given set of types
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeDataCategoryGroupStructuresResponse describeDataCategoryGroupStructures(array $pairs, bool $topCategoriesOnly) Describe the data category group structures for a given set of pair of types and data category group name
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeDataCategoryMappingsResponse describeDataCategoryMappings() Describe your Data Category Mappings.
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeKnowledgeSettingsResponse describeKnowledgeSettings() Describes your Knowledge settings, such as if knowledgeEnabled is on or off, its default language and supported languages
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeAppMenuResponse describeAppMenu(string $appMenuType, string $networkId) Describe the items in an AppMenu
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeGlobalThemeResponse describeGlobalTheme() Describe Gloal and Themes
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeThemeResponse describeTheme(array $sobjectType) Describe Themes
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutResponse describeLayout(string $sObjectType, string $layoutName, array $recordTypeIds) Describe the layout of the given sObject or the given actionable global page.
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSoftphoneLayoutResponse describeSoftphoneLayout() Describe the layout of the SoftPhone
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSearchLayoutsResponse describeSearchLayouts(array $sObjectType) Describe the search view of an sObject
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSearchableEntitiesResponse describeSearchableEntities(bool $includeOnlyEntitiesWithTabs) Describe a list of entity names that reflects the current user's searchable entities
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSearchScopeOrderResponse describeSearchScopeOrder(bool $includeRealTimeEntities) Describe a list of objects representing the order and scope of objects on a users search result page
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeCompactLayoutsResponse describeCompactLayouts(string $sObjectType, array $recordTypeIds) Describe the compact layouts of the given sObject
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribePathAssistantsResponse describePathAssistants(string $sObjectType, string $picklistValue, array $recordTypeIds) Describe the Path Assistants for the given sObject and optionally RecordTypes
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeApprovalLayoutResponse describeApprovalLayout(string $sObjectType, array $approvalProcessNames) Describe the approval layouts of the given sObject
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSoqlListViewsResponse describeSoqlListViews(array $request) Describe the ListViews as SOQL metadata for the generation of SOQL.
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\ExecuteListViewResponse executeListView(\GoetasWebservices\Client\SalesforceEnterprise\Types\ExecuteListViewRequestType $request) Execute the specified list view and return the presentation-ready results.
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSObjectListViewsResponse describeSObjectListViews(string $sObjectType, bool $recentsOnly, string $isSoqlCompatible, int $limit, int $offset) Describe the ListViews of a SObject as SOQL metadata for the generation of SOQL.
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeTabsResponse describeTabs() Describe the tabs that appear on a users page
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeAllTabsResponse describeAllTabs() Describe all tabs available to a user
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribePrimaryCompactLayoutsResponse describePrimaryCompactLayouts(array $sObjectTypes) Describe the primary compact layouts for the sObjects requested
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\CreateResponse create(array $sObjects) Create a set of new sObjects
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\UpdateResponse update(array $sObjects) Update a set of sObjects
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\UpsertResponse upsert(string $externalIDFieldName, array $sObjects) Update or insert a set of sObjects based on object id
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\MergeResponse merge(array $request) Merge and update a set of sObjects based on object id
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\DeleteResponse delete(array $ids) Delete a set of sObjects
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\UndeleteResponse undelete(array $ids) Undelete a set of sObjects
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\EmptyRecycleBinResponse emptyRecycleBin(array $ids) Empty a set of sObjects from the recycle bin
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\RetrieveResponse retrieve(string $fieldList, string $sObjectType, array $ids) Get a set of sObjects
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\ProcessResponse process(array $actions) Submit an entity to a workflow process or process a workitem
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\ConvertLeadResponse convertLead(array $leadConverts) convert a set of leads
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\LogoutResponse logout() Logout the current user, invalidating the current session.
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\InvalidateSessionsResponse invalidateSessions(array $sessionIds) Logs out and invalidates session ids
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\GetDeletedResponse getDeleted(string $sObjectType, \DateTime $startDate, \DateTime $endDate) Get the IDs for deleted sObjects
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\GetUpdatedResponse getUpdated(string $sObjectType, \DateTime $startDate, \DateTime $endDate) Get the IDs for updated sObjects
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResponse query(string $queryString) Create a Query Cursor
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryAllResponse queryAll(string $queryString) Create a Query Cursor, including deleted sObjects
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryMoreResponse queryMore(string $queryLocator) Gets the next batch of sObjects from a query
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\SearchResponse search(string $searchString) Search for sObjects
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\GetServerTimestampResponse getServerTimestamp() Gets server timestamp
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\SetPasswordResponse setPassword(string $userId, string $password) Set a user's password
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\ChangeOwnPasswordResponse changeOwnPassword(string $oldPassword, string $newPassword) Change the current user's password
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\ResetPasswordResponse resetPassword(string $userId) Reset a user's password
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\GetUserInfoResponse getUserInfo() Returns standard information relevant to the current user
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\DeleteByExampleResponse deleteByExample(array $sObjects) Delete a set of sObjects by example. The passed SOBject is a template for the object to delete
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\SendEmailMessageResponse sendEmailMessage(array $ids) Send existing draft EmailMessage
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\SendEmailResponse sendEmail(array $messages) Send outbound email
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\RenderEmailTemplateResponse renderEmailTemplate(array $renderRequests) Perform a template merge on one or more blocks of text.
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\RenderStoredEmailTemplateResponse renderStoredEmailTemplate(\GoetasWebservices\Client\SalesforceEnterprise\Types\RenderStoredEmailTemplateRequestType $request) Perform a template merge using an email template stored in the database.
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\PerformQuickActionsResponse performQuickActions(array $quickActions) Perform a series of predefined actions such as quick create or log a task
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeQuickActionsResponse describeQuickActions(array $quickActions) Describe the details of a series of quick actions
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeQuickActionsForRecordTypeResponse describeQuickActionsForRecordType(array $quickActions, string $recordTypeId) Describe the details of a series of quick actions in context of requested recordType id for Update actions
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeAvailableQuickActionsResponse describeAvailableQuickActions(string $contextType) Describe the details of a series of quick actions available for the given contextType
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\RetrieveQuickActionTemplatesResponse retrieveQuickActionTemplates(array $quickActionNames, string $contextId) Retrieve the template sobjects, if appropriate, for the given quick action names in a given context
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\RetrieveMassQuickActionTemplatesResponse retrieveMassQuickActionTemplates(string $quickActionName, array $contextIds) Retrieve the template sobjects, if appropriate, for the given quick action names in a given contexts when used a mass quick action
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeVisualForceResponse describeVisualForce(bool $includeAllDetails, string $namespacePrefix) Describe visualforce for an org
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\FindDuplicatesResponse findDuplicates(array $sObjects) Find duplicates for a set of sObjects
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\FindDuplicatesByIdsResponse findDuplicatesByIds(array $ids) Find duplicates for a set of ids
 * @method \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeNounsResponse describeNouns(array $nouns, bool $onlyRenamed, bool $includeFields) Return the renameable nouns from the server for use in presentation using the salesforce grammar engine
 */
class Soap
{


}

