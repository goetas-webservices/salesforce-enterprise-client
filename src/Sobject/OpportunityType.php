<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing OpportunityType
 *
 *
 * XSD Type: Opportunity
 */
class OpportunityType extends SObjectType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AccountType $account
     */
    private $account = null;

    /**
     * @property string $accountId
     */
    private $accountId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $accountPartners
     */
    private $accountPartners = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $activityHistories
     */
    private $activityHistories = null;

    /**
     * @property float $amount
     */
    private $amount = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $attachedContentDocuments
     */
    private $attachedContentDocuments = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $attachments
     */
    private $attachments = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\CampaignType $campaign
     */
    private $campaign = null;

    /**
     * @property string $campaignId
     */
    private $campaignId = null;

    /**
     * @property \DateTime $closeDate
     */
    private $closeDate = null;

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
     * @property string $currentGeneratorsC
     */
    private $currentGeneratorsC = null;

    /**
     * @property string $deliveryInstallationStatusC
     */
    private $deliveryInstallationStatusC = null;

    /**
     * @property string $description
     */
    private $description = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $emails
     */
    private $emails = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $events
     */
    private $events = null;

    /**
     * @property float $expectedRevenue
     */
    private $expectedRevenue = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feedSubscriptionsForEntity
     */
    private $feedSubscriptionsForEntity = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feeds
     */
    private $feeds = null;

    /**
     * @property string $fiscal
     */
    private $fiscal = null;

    /**
     * @property int $fiscalQuarter
     */
    private $fiscalQuarter = null;

    /**
     * @property int $fiscalYear
     */
    private $fiscalYear = null;

    /**
     * @property string $forecastCategory
     */
    private $forecastCategory = null;

    /**
     * @property string $forecastCategoryName
     */
    private $forecastCategoryName = null;

    /**
     * @property bool $hasOpenActivity
     */
    private $hasOpenActivity = null;

    /**
     * @property bool $hasOpportunityLineItem
     */
    private $hasOpportunityLineItem = null;

    /**
     * @property bool $hasOverdueTask
     */
    private $hasOverdueTask = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $histories
     */
    private $histories = null;

    /**
     * @property bool $isClosed
     */
    private $isClosed = null;

    /**
     * @property bool $isDeleted
     */
    private $isDeleted = null;

    /**
     * @property bool $isPrivate
     */
    private $isPrivate = null;

    /**
     * @property bool $isWon
     */
    private $isWon = null;

    /**
     * @property \DateTime $lastActivityDate
     */
    private $lastActivityDate = null;

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
     * @property string $leadSource
     */
    private $leadSource = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $lookedUpFromActivities
     */
    private $lookedUpFromActivities = null;

    /**
     * @property string $mainCompetitorsC
     */
    private $mainCompetitorsC = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $nextStep
     */
    private $nextStep = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $notes
     */
    private $notes = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $notesAndAttachments
     */
    private $notesAndAttachments = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $openActivities
     */
    private $openActivities = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $opportunityCompetitors
     */
    private $opportunityCompetitors = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $opportunityContactRoles
     */
    private $opportunityContactRoles = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $opportunityHistories
     */
    private $opportunityHistories = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $opportunityLineItems
     */
    private $opportunityLineItems = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $opportunityPartnersFrom
     */
    private $opportunityPartnersFrom = null;

    /**
     * @property string $orderNumberC
     */
    private $orderNumberC = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $orders
     */
    private $orders = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $owner
     */
    private $owner = null;

    /**
     * @property string $ownerId
     */
    private $ownerId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $partners
     */
    private $partners = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\Pricebook2Type $pricebook2
     */
    private $pricebook2 = null;

    /**
     * @property string $pricebook2Id
     */
    private $pricebook2Id = null;

    /**
     * @property float $probability
     */
    private $probability = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $processInstances
     */
    private $processInstances = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $processSteps
     */
    private $processSteps = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $recordActionHistories
     */
    private $recordActionHistories = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $recordActions
     */
    private $recordActions = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $recordAssociatedGroups
     */
    private $recordAssociatedGroups = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $shares
     */
    private $shares = null;

    /**
     * @property string $stageName
     */
    private $stageName = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $tasks
     */
    private $tasks = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $topicAssignments
     */
    private $topicAssignments = null;

    /**
     * @property float $totalOpportunityQuantity
     */
    private $totalOpportunityQuantity = null;

    /**
     * @property string $trackingNumberC
     */
    private $trackingNumberC = null;

    /**
     * @property string $type
     */
    private $type = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserRecordAccessType $userRecordAccess
     */
    private $userRecordAccess = null;

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
     * Gets as accountPartners
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getAccountPartners()
    {
        return $this->accountPartners;
    }

    /**
     * Sets a new accountPartners
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $accountPartners
     * @return self
     */
    public function setAccountPartners(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $accountPartners)
    {
        $this->accountPartners = $accountPartners;
        return $this;
    }

    /**
     * Gets as activityHistories
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getActivityHistories()
    {
        return $this->activityHistories;
    }

    /**
     * Sets a new activityHistories
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $activityHistories
     * @return self
     */
    public function setActivityHistories(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $activityHistories)
    {
        $this->activityHistories = $activityHistories;
        return $this;
    }

    /**
     * Gets as amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * @param float $amount
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
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
     * Gets as attachments
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * Sets a new attachments
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $attachments
     * @return self
     */
    public function setAttachments(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $attachments)
    {
        $this->attachments = $attachments;
        return $this;
    }

    /**
     * Gets as campaign
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\CampaignType
     */
    public function getCampaign()
    {
        return $this->campaign;
    }

    /**
     * Sets a new campaign
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\CampaignType $campaign
     * @return self
     */
    public function setCampaign(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\CampaignType $campaign)
    {
        $this->campaign = $campaign;
        return $this;
    }

    /**
     * Gets as campaignId
     *
     * @return string
     */
    public function getCampaignId()
    {
        return $this->campaignId;
    }

    /**
     * Sets a new campaignId
     *
     * @param string $campaignId
     * @return self
     */
    public function setCampaignId($campaignId)
    {
        $this->campaignId = $campaignId;
        return $this;
    }

    /**
     * Gets as closeDate
     *
     * @return \DateTime
     */
    public function getCloseDate()
    {
        return $this->closeDate;
    }

    /**
     * Sets a new closeDate
     *
     * @param \DateTime $closeDate
     * @return self
     */
    public function setCloseDate(\DateTime $closeDate)
    {
        $this->closeDate = $closeDate;
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
     * Gets as currentGeneratorsC
     *
     * @return string
     */
    public function getCurrentGeneratorsC()
    {
        return $this->currentGeneratorsC;
    }

    /**
     * Sets a new currentGeneratorsC
     *
     * @param string $currentGeneratorsC
     * @return self
     */
    public function setCurrentGeneratorsC($currentGeneratorsC)
    {
        $this->currentGeneratorsC = $currentGeneratorsC;
        return $this;
    }

    /**
     * Gets as deliveryInstallationStatusC
     *
     * @return string
     */
    public function getDeliveryInstallationStatusC()
    {
        return $this->deliveryInstallationStatusC;
    }

    /**
     * Sets a new deliveryInstallationStatusC
     *
     * @param string $deliveryInstallationStatusC
     * @return self
     */
    public function setDeliveryInstallationStatusC($deliveryInstallationStatusC)
    {
        $this->deliveryInstallationStatusC = $deliveryInstallationStatusC;
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
     * Gets as emails
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getEmails()
    {
        return $this->emails;
    }

    /**
     * Sets a new emails
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $emails
     * @return self
     */
    public function setEmails(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $emails)
    {
        $this->emails = $emails;
        return $this;
    }

    /**
     * Gets as events
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * Sets a new events
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $events
     * @return self
     */
    public function setEvents(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $events)
    {
        $this->events = $events;
        return $this;
    }

    /**
     * Gets as expectedRevenue
     *
     * @return float
     */
    public function getExpectedRevenue()
    {
        return $this->expectedRevenue;
    }

    /**
     * Sets a new expectedRevenue
     *
     * @param float $expectedRevenue
     * @return self
     */
    public function setExpectedRevenue($expectedRevenue)
    {
        $this->expectedRevenue = $expectedRevenue;
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
     * Gets as fiscal
     *
     * @return string
     */
    public function getFiscal()
    {
        return $this->fiscal;
    }

    /**
     * Sets a new fiscal
     *
     * @param string $fiscal
     * @return self
     */
    public function setFiscal($fiscal)
    {
        $this->fiscal = $fiscal;
        return $this;
    }

    /**
     * Gets as fiscalQuarter
     *
     * @return int
     */
    public function getFiscalQuarter()
    {
        return $this->fiscalQuarter;
    }

    /**
     * Sets a new fiscalQuarter
     *
     * @param int $fiscalQuarter
     * @return self
     */
    public function setFiscalQuarter($fiscalQuarter)
    {
        $this->fiscalQuarter = $fiscalQuarter;
        return $this;
    }

    /**
     * Gets as fiscalYear
     *
     * @return int
     */
    public function getFiscalYear()
    {
        return $this->fiscalYear;
    }

    /**
     * Sets a new fiscalYear
     *
     * @param int $fiscalYear
     * @return self
     */
    public function setFiscalYear($fiscalYear)
    {
        $this->fiscalYear = $fiscalYear;
        return $this;
    }

    /**
     * Gets as forecastCategory
     *
     * @return string
     */
    public function getForecastCategory()
    {
        return $this->forecastCategory;
    }

    /**
     * Sets a new forecastCategory
     *
     * @param string $forecastCategory
     * @return self
     */
    public function setForecastCategory($forecastCategory)
    {
        $this->forecastCategory = $forecastCategory;
        return $this;
    }

    /**
     * Gets as forecastCategoryName
     *
     * @return string
     */
    public function getForecastCategoryName()
    {
        return $this->forecastCategoryName;
    }

    /**
     * Sets a new forecastCategoryName
     *
     * @param string $forecastCategoryName
     * @return self
     */
    public function setForecastCategoryName($forecastCategoryName)
    {
        $this->forecastCategoryName = $forecastCategoryName;
        return $this;
    }

    /**
     * Gets as hasOpenActivity
     *
     * @return bool
     */
    public function getHasOpenActivity()
    {
        return $this->hasOpenActivity;
    }

    /**
     * Sets a new hasOpenActivity
     *
     * @param bool $hasOpenActivity
     * @return self
     */
    public function setHasOpenActivity($hasOpenActivity)
    {
        $this->hasOpenActivity = $hasOpenActivity;
        return $this;
    }

    /**
     * Gets as hasOpportunityLineItem
     *
     * @return bool
     */
    public function getHasOpportunityLineItem()
    {
        return $this->hasOpportunityLineItem;
    }

    /**
     * Sets a new hasOpportunityLineItem
     *
     * @param bool $hasOpportunityLineItem
     * @return self
     */
    public function setHasOpportunityLineItem($hasOpportunityLineItem)
    {
        $this->hasOpportunityLineItem = $hasOpportunityLineItem;
        return $this;
    }

    /**
     * Gets as hasOverdueTask
     *
     * @return bool
     */
    public function getHasOverdueTask()
    {
        return $this->hasOverdueTask;
    }

    /**
     * Sets a new hasOverdueTask
     *
     * @param bool $hasOverdueTask
     * @return self
     */
    public function setHasOverdueTask($hasOverdueTask)
    {
        $this->hasOverdueTask = $hasOverdueTask;
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
     * Gets as isClosed
     *
     * @return bool
     */
    public function getIsClosed()
    {
        return $this->isClosed;
    }

    /**
     * Sets a new isClosed
     *
     * @param bool $isClosed
     * @return self
     */
    public function setIsClosed($isClosed)
    {
        $this->isClosed = $isClosed;
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
     * Gets as isPrivate
     *
     * @return bool
     */
    public function getIsPrivate()
    {
        return $this->isPrivate;
    }

    /**
     * Sets a new isPrivate
     *
     * @param bool $isPrivate
     * @return self
     */
    public function setIsPrivate($isPrivate)
    {
        $this->isPrivate = $isPrivate;
        return $this;
    }

    /**
     * Gets as isWon
     *
     * @return bool
     */
    public function getIsWon()
    {
        return $this->isWon;
    }

    /**
     * Sets a new isWon
     *
     * @param bool $isWon
     * @return self
     */
    public function setIsWon($isWon)
    {
        $this->isWon = $isWon;
        return $this;
    }

    /**
     * Gets as lastActivityDate
     *
     * @return \DateTime
     */
    public function getLastActivityDate()
    {
        return $this->lastActivityDate;
    }

    /**
     * Sets a new lastActivityDate
     *
     * @param \DateTime $lastActivityDate
     * @return self
     */
    public function setLastActivityDate(\DateTime $lastActivityDate)
    {
        $this->lastActivityDate = $lastActivityDate;
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
     * Gets as leadSource
     *
     * @return string
     */
    public function getLeadSource()
    {
        return $this->leadSource;
    }

    /**
     * Sets a new leadSource
     *
     * @param string $leadSource
     * @return self
     */
    public function setLeadSource($leadSource)
    {
        $this->leadSource = $leadSource;
        return $this;
    }

    /**
     * Gets as lookedUpFromActivities
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getLookedUpFromActivities()
    {
        return $this->lookedUpFromActivities;
    }

    /**
     * Sets a new lookedUpFromActivities
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $lookedUpFromActivities
     * @return self
     */
    public function setLookedUpFromActivities(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $lookedUpFromActivities)
    {
        $this->lookedUpFromActivities = $lookedUpFromActivities;
        return $this;
    }

    /**
     * Gets as mainCompetitorsC
     *
     * @return string
     */
    public function getMainCompetitorsC()
    {
        return $this->mainCompetitorsC;
    }

    /**
     * Sets a new mainCompetitorsC
     *
     * @param string $mainCompetitorsC
     * @return self
     */
    public function setMainCompetitorsC($mainCompetitorsC)
    {
        $this->mainCompetitorsC = $mainCompetitorsC;
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
     * Gets as nextStep
     *
     * @return string
     */
    public function getNextStep()
    {
        return $this->nextStep;
    }

    /**
     * Sets a new nextStep
     *
     * @param string $nextStep
     * @return self
     */
    public function setNextStep($nextStep)
    {
        $this->nextStep = $nextStep;
        return $this;
    }

    /**
     * Gets as notes
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Sets a new notes
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $notes
     * @return self
     */
    public function setNotes(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $notes)
    {
        $this->notes = $notes;
        return $this;
    }

    /**
     * Gets as notesAndAttachments
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getNotesAndAttachments()
    {
        return $this->notesAndAttachments;
    }

    /**
     * Sets a new notesAndAttachments
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $notesAndAttachments
     * @return self
     */
    public function setNotesAndAttachments(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $notesAndAttachments)
    {
        $this->notesAndAttachments = $notesAndAttachments;
        return $this;
    }

    /**
     * Gets as openActivities
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getOpenActivities()
    {
        return $this->openActivities;
    }

    /**
     * Sets a new openActivities
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $openActivities
     * @return self
     */
    public function setOpenActivities(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $openActivities)
    {
        $this->openActivities = $openActivities;
        return $this;
    }

    /**
     * Gets as opportunityCompetitors
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getOpportunityCompetitors()
    {
        return $this->opportunityCompetitors;
    }

    /**
     * Sets a new opportunityCompetitors
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $opportunityCompetitors
     * @return self
     */
    public function setOpportunityCompetitors(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $opportunityCompetitors)
    {
        $this->opportunityCompetitors = $opportunityCompetitors;
        return $this;
    }

    /**
     * Gets as opportunityContactRoles
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getOpportunityContactRoles()
    {
        return $this->opportunityContactRoles;
    }

    /**
     * Sets a new opportunityContactRoles
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $opportunityContactRoles
     * @return self
     */
    public function setOpportunityContactRoles(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $opportunityContactRoles)
    {
        $this->opportunityContactRoles = $opportunityContactRoles;
        return $this;
    }

    /**
     * Gets as opportunityHistories
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getOpportunityHistories()
    {
        return $this->opportunityHistories;
    }

    /**
     * Sets a new opportunityHistories
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $opportunityHistories
     * @return self
     */
    public function setOpportunityHistories(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $opportunityHistories)
    {
        $this->opportunityHistories = $opportunityHistories;
        return $this;
    }

    /**
     * Gets as opportunityLineItems
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getOpportunityLineItems()
    {
        return $this->opportunityLineItems;
    }

    /**
     * Sets a new opportunityLineItems
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $opportunityLineItems
     * @return self
     */
    public function setOpportunityLineItems(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $opportunityLineItems)
    {
        $this->opportunityLineItems = $opportunityLineItems;
        return $this;
    }

    /**
     * Gets as opportunityPartnersFrom
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getOpportunityPartnersFrom()
    {
        return $this->opportunityPartnersFrom;
    }

    /**
     * Sets a new opportunityPartnersFrom
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $opportunityPartnersFrom
     * @return self
     */
    public function setOpportunityPartnersFrom(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $opportunityPartnersFrom)
    {
        $this->opportunityPartnersFrom = $opportunityPartnersFrom;
        return $this;
    }

    /**
     * Gets as orderNumberC
     *
     * @return string
     */
    public function getOrderNumberC()
    {
        return $this->orderNumberC;
    }

    /**
     * Sets a new orderNumberC
     *
     * @param string $orderNumberC
     * @return self
     */
    public function setOrderNumberC($orderNumberC)
    {
        $this->orderNumberC = $orderNumberC;
        return $this;
    }

    /**
     * Gets as orders
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getOrders()
    {
        return $this->orders;
    }

    /**
     * Sets a new orders
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $orders
     * @return self
     */
    public function setOrders(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $orders)
    {
        $this->orders = $orders;
        return $this;
    }

    /**
     * Gets as owner
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Sets a new owner
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $owner
     * @return self
     */
    public function setOwner(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $owner)
    {
        $this->owner = $owner;
        return $this;
    }

    /**
     * Gets as ownerId
     *
     * @return string
     */
    public function getOwnerId()
    {
        return $this->ownerId;
    }

    /**
     * Sets a new ownerId
     *
     * @param string $ownerId
     * @return self
     */
    public function setOwnerId($ownerId)
    {
        $this->ownerId = $ownerId;
        return $this;
    }

    /**
     * Gets as partners
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getPartners()
    {
        return $this->partners;
    }

    /**
     * Sets a new partners
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $partners
     * @return self
     */
    public function setPartners(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $partners)
    {
        $this->partners = $partners;
        return $this;
    }

    /**
     * Gets as pricebook2
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\Pricebook2Type
     */
    public function getPricebook2()
    {
        return $this->pricebook2;
    }

    /**
     * Sets a new pricebook2
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\Pricebook2Type $pricebook2
     * @return self
     */
    public function setPricebook2(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\Pricebook2Type $pricebook2)
    {
        $this->pricebook2 = $pricebook2;
        return $this;
    }

    /**
     * Gets as pricebook2Id
     *
     * @return string
     */
    public function getPricebook2Id()
    {
        return $this->pricebook2Id;
    }

    /**
     * Sets a new pricebook2Id
     *
     * @param string $pricebook2Id
     * @return self
     */
    public function setPricebook2Id($pricebook2Id)
    {
        $this->pricebook2Id = $pricebook2Id;
        return $this;
    }

    /**
     * Gets as probability
     *
     * @return float
     */
    public function getProbability()
    {
        return $this->probability;
    }

    /**
     * Sets a new probability
     *
     * @param float $probability
     * @return self
     */
    public function setProbability($probability)
    {
        $this->probability = $probability;
        return $this;
    }

    /**
     * Gets as processInstances
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getProcessInstances()
    {
        return $this->processInstances;
    }

    /**
     * Sets a new processInstances
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $processInstances
     * @return self
     */
    public function setProcessInstances(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $processInstances)
    {
        $this->processInstances = $processInstances;
        return $this;
    }

    /**
     * Gets as processSteps
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getProcessSteps()
    {
        return $this->processSteps;
    }

    /**
     * Sets a new processSteps
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $processSteps
     * @return self
     */
    public function setProcessSteps(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $processSteps)
    {
        $this->processSteps = $processSteps;
        return $this;
    }

    /**
     * Gets as recordActionHistories
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getRecordActionHistories()
    {
        return $this->recordActionHistories;
    }

    /**
     * Sets a new recordActionHistories
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $recordActionHistories
     * @return self
     */
    public function setRecordActionHistories(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $recordActionHistories)
    {
        $this->recordActionHistories = $recordActionHistories;
        return $this;
    }

    /**
     * Gets as recordActions
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getRecordActions()
    {
        return $this->recordActions;
    }

    /**
     * Sets a new recordActions
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $recordActions
     * @return self
     */
    public function setRecordActions(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $recordActions)
    {
        $this->recordActions = $recordActions;
        return $this;
    }

    /**
     * Gets as recordAssociatedGroups
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getRecordAssociatedGroups()
    {
        return $this->recordAssociatedGroups;
    }

    /**
     * Sets a new recordAssociatedGroups
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $recordAssociatedGroups
     * @return self
     */
    public function setRecordAssociatedGroups(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $recordAssociatedGroups)
    {
        $this->recordAssociatedGroups = $recordAssociatedGroups;
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
     * Gets as stageName
     *
     * @return string
     */
    public function getStageName()
    {
        return $this->stageName;
    }

    /**
     * Sets a new stageName
     *
     * @param string $stageName
     * @return self
     */
    public function setStageName($stageName)
    {
        $this->stageName = $stageName;
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
     * Gets as tasks
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getTasks()
    {
        return $this->tasks;
    }

    /**
     * Sets a new tasks
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $tasks
     * @return self
     */
    public function setTasks(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $tasks)
    {
        $this->tasks = $tasks;
        return $this;
    }

    /**
     * Gets as topicAssignments
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getTopicAssignments()
    {
        return $this->topicAssignments;
    }

    /**
     * Sets a new topicAssignments
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $topicAssignments
     * @return self
     */
    public function setTopicAssignments(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $topicAssignments)
    {
        $this->topicAssignments = $topicAssignments;
        return $this;
    }

    /**
     * Gets as totalOpportunityQuantity
     *
     * @return float
     */
    public function getTotalOpportunityQuantity()
    {
        return $this->totalOpportunityQuantity;
    }

    /**
     * Sets a new totalOpportunityQuantity
     *
     * @param float $totalOpportunityQuantity
     * @return self
     */
    public function setTotalOpportunityQuantity($totalOpportunityQuantity)
    {
        $this->totalOpportunityQuantity = $totalOpportunityQuantity;
        return $this;
    }

    /**
     * Gets as trackingNumberC
     *
     * @return string
     */
    public function getTrackingNumberC()
    {
        return $this->trackingNumberC;
    }

    /**
     * Sets a new trackingNumberC
     *
     * @param string $trackingNumberC
     * @return self
     */
    public function setTrackingNumberC($trackingNumberC)
    {
        $this->trackingNumberC = $trackingNumberC;
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
     * Gets as userRecordAccess
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserRecordAccessType
     */
    public function getUserRecordAccess()
    {
        return $this->userRecordAccess;
    }

    /**
     * Sets a new userRecordAccess
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserRecordAccessType $userRecordAccess
     * @return self
     */
    public function setUserRecordAccess(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserRecordAccessType $userRecordAccess)
    {
        $this->userRecordAccess = $userRecordAccess;
        return $this;
    }


}

