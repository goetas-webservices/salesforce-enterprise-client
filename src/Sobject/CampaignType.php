<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing CampaignType
 *
 *
 * XSD Type: Campaign
 */
class CampaignType extends SObjectType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $activityHistories
     */
    private $activityHistories = null;

    /**
     * @property float $actualCost
     */
    private $actualCost = null;

    /**
     * @property float $amountAllOpportunities
     */
    private $amountAllOpportunities = null;

    /**
     * @property float $amountWonOpportunities
     */
    private $amountWonOpportunities = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $attachedContentDocuments
     */
    private $attachedContentDocuments = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $attachments
     */
    private $attachments = null;

    /**
     * @property float $budgetedCost
     */
    private $budgetedCost = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\RecordType $campaignMemberRecordType
     */
    private $campaignMemberRecordType = null;

    /**
     * @property string $campaignMemberRecordTypeId
     */
    private $campaignMemberRecordTypeId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $campaignMemberStatuses
     */
    private $campaignMemberStatuses = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $campaignMembers
     */
    private $campaignMembers = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $childCampaigns
     */
    private $childCampaigns = null;

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
     * @property string $description
     */
    private $description = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $emails
     */
    private $emails = null;

    /**
     * @property \DateTime $endDate
     */
    private $endDate = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $events
     */
    private $events = null;

    /**
     * @property float $expectedResponse
     */
    private $expectedResponse = null;

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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $histories
     */
    private $histories = null;

    /**
     * @property bool $isActive
     */
    private $isActive = null;

    /**
     * @property bool $isDeleted
     */
    private $isDeleted = null;

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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $leads
     */
    private $leads = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $listEmailRecipientSources
     */
    private $listEmailRecipientSources = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $listEmails
     */
    private $listEmails = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $lookedUpFromActivities
     */
    private $lookedUpFromActivities = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property int $numberOfContacts
     */
    private $numberOfContacts = null;

    /**
     * @property int $numberOfConvertedLeads
     */
    private $numberOfConvertedLeads = null;

    /**
     * @property int $numberOfLeads
     */
    private $numberOfLeads = null;

    /**
     * @property int $numberOfOpportunities
     */
    private $numberOfOpportunities = null;

    /**
     * @property int $numberOfResponses
     */
    private $numberOfResponses = null;

    /**
     * @property int $numberOfWonOpportunities
     */
    private $numberOfWonOpportunities = null;

    /**
     * @property float $numberSent
     */
    private $numberSent = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $openActivities
     */
    private $openActivities = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $opportunities
     */
    private $opportunities = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $owner
     */
    private $owner = null;

    /**
     * @property string $ownerId
     */
    private $ownerId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\CampaignType $parent
     */
    private $parent = null;

    /**
     * @property string $parentId
     */
    private $parentId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $processInstances
     */
    private $processInstances = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $processSteps
     */
    private $processSteps = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $recordAssociatedGroups
     */
    private $recordAssociatedGroups = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $shares
     */
    private $shares = null;

    /**
     * @property \DateTime $startDate
     */
    private $startDate = null;

    /**
     * @property string $status
     */
    private $status = null;

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
     * @property string $type
     */
    private $type = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserRecordAccessType $userRecordAccess
     */
    private $userRecordAccess = null;

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
     * Gets as actualCost
     *
     * @return float
     */
    public function getActualCost()
    {
        return $this->actualCost;
    }

    /**
     * Sets a new actualCost
     *
     * @param float $actualCost
     * @return self
     */
    public function setActualCost($actualCost)
    {
        $this->actualCost = $actualCost;
        return $this;
    }

    /**
     * Gets as amountAllOpportunities
     *
     * @return float
     */
    public function getAmountAllOpportunities()
    {
        return $this->amountAllOpportunities;
    }

    /**
     * Sets a new amountAllOpportunities
     *
     * @param float $amountAllOpportunities
     * @return self
     */
    public function setAmountAllOpportunities($amountAllOpportunities)
    {
        $this->amountAllOpportunities = $amountAllOpportunities;
        return $this;
    }

    /**
     * Gets as amountWonOpportunities
     *
     * @return float
     */
    public function getAmountWonOpportunities()
    {
        return $this->amountWonOpportunities;
    }

    /**
     * Sets a new amountWonOpportunities
     *
     * @param float $amountWonOpportunities
     * @return self
     */
    public function setAmountWonOpportunities($amountWonOpportunities)
    {
        $this->amountWonOpportunities = $amountWonOpportunities;
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
     * Gets as budgetedCost
     *
     * @return float
     */
    public function getBudgetedCost()
    {
        return $this->budgetedCost;
    }

    /**
     * Sets a new budgetedCost
     *
     * @param float $budgetedCost
     * @return self
     */
    public function setBudgetedCost($budgetedCost)
    {
        $this->budgetedCost = $budgetedCost;
        return $this;
    }

    /**
     * Gets as campaignMemberRecordType
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\RecordType
     */
    public function getCampaignMemberRecordType()
    {
        return $this->campaignMemberRecordType;
    }

    /**
     * Sets a new campaignMemberRecordType
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\RecordType $campaignMemberRecordType
     * @return self
     */
    public function setCampaignMemberRecordType(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\RecordType $campaignMemberRecordType)
    {
        $this->campaignMemberRecordType = $campaignMemberRecordType;
        return $this;
    }

    /**
     * Gets as campaignMemberRecordTypeId
     *
     * @return string
     */
    public function getCampaignMemberRecordTypeId()
    {
        return $this->campaignMemberRecordTypeId;
    }

    /**
     * Sets a new campaignMemberRecordTypeId
     *
     * @param string $campaignMemberRecordTypeId
     * @return self
     */
    public function setCampaignMemberRecordTypeId($campaignMemberRecordTypeId)
    {
        $this->campaignMemberRecordTypeId = $campaignMemberRecordTypeId;
        return $this;
    }

    /**
     * Gets as campaignMemberStatuses
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getCampaignMemberStatuses()
    {
        return $this->campaignMemberStatuses;
    }

    /**
     * Sets a new campaignMemberStatuses
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $campaignMemberStatuses
     * @return self
     */
    public function setCampaignMemberStatuses(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $campaignMemberStatuses)
    {
        $this->campaignMemberStatuses = $campaignMemberStatuses;
        return $this;
    }

    /**
     * Gets as campaignMembers
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getCampaignMembers()
    {
        return $this->campaignMembers;
    }

    /**
     * Sets a new campaignMembers
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $campaignMembers
     * @return self
     */
    public function setCampaignMembers(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $campaignMembers)
    {
        $this->campaignMembers = $campaignMembers;
        return $this;
    }

    /**
     * Gets as childCampaigns
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getChildCampaigns()
    {
        return $this->childCampaigns;
    }

    /**
     * Sets a new childCampaigns
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $childCampaigns
     * @return self
     */
    public function setChildCampaigns(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $childCampaigns)
    {
        $this->childCampaigns = $childCampaigns;
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
     * Gets as endDate
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Sets a new endDate
     *
     * @param \DateTime $endDate
     * @return self
     */
    public function setEndDate(\DateTime $endDate)
    {
        $this->endDate = $endDate;
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
     * Gets as expectedResponse
     *
     * @return float
     */
    public function getExpectedResponse()
    {
        return $this->expectedResponse;
    }

    /**
     * Sets a new expectedResponse
     *
     * @param float $expectedResponse
     * @return self
     */
    public function setExpectedResponse($expectedResponse)
    {
        $this->expectedResponse = $expectedResponse;
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
     * Gets as leads
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getLeads()
    {
        return $this->leads;
    }

    /**
     * Sets a new leads
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $leads
     * @return self
     */
    public function setLeads(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $leads)
    {
        $this->leads = $leads;
        return $this;
    }

    /**
     * Gets as listEmailRecipientSources
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getListEmailRecipientSources()
    {
        return $this->listEmailRecipientSources;
    }

    /**
     * Sets a new listEmailRecipientSources
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $listEmailRecipientSources
     * @return self
     */
    public function setListEmailRecipientSources(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $listEmailRecipientSources)
    {
        $this->listEmailRecipientSources = $listEmailRecipientSources;
        return $this;
    }

    /**
     * Gets as listEmails
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getListEmails()
    {
        return $this->listEmails;
    }

    /**
     * Sets a new listEmails
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $listEmails
     * @return self
     */
    public function setListEmails(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $listEmails)
    {
        $this->listEmails = $listEmails;
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
     * Gets as numberOfContacts
     *
     * @return int
     */
    public function getNumberOfContacts()
    {
        return $this->numberOfContacts;
    }

    /**
     * Sets a new numberOfContacts
     *
     * @param int $numberOfContacts
     * @return self
     */
    public function setNumberOfContacts($numberOfContacts)
    {
        $this->numberOfContacts = $numberOfContacts;
        return $this;
    }

    /**
     * Gets as numberOfConvertedLeads
     *
     * @return int
     */
    public function getNumberOfConvertedLeads()
    {
        return $this->numberOfConvertedLeads;
    }

    /**
     * Sets a new numberOfConvertedLeads
     *
     * @param int $numberOfConvertedLeads
     * @return self
     */
    public function setNumberOfConvertedLeads($numberOfConvertedLeads)
    {
        $this->numberOfConvertedLeads = $numberOfConvertedLeads;
        return $this;
    }

    /**
     * Gets as numberOfLeads
     *
     * @return int
     */
    public function getNumberOfLeads()
    {
        return $this->numberOfLeads;
    }

    /**
     * Sets a new numberOfLeads
     *
     * @param int $numberOfLeads
     * @return self
     */
    public function setNumberOfLeads($numberOfLeads)
    {
        $this->numberOfLeads = $numberOfLeads;
        return $this;
    }

    /**
     * Gets as numberOfOpportunities
     *
     * @return int
     */
    public function getNumberOfOpportunities()
    {
        return $this->numberOfOpportunities;
    }

    /**
     * Sets a new numberOfOpportunities
     *
     * @param int $numberOfOpportunities
     * @return self
     */
    public function setNumberOfOpportunities($numberOfOpportunities)
    {
        $this->numberOfOpportunities = $numberOfOpportunities;
        return $this;
    }

    /**
     * Gets as numberOfResponses
     *
     * @return int
     */
    public function getNumberOfResponses()
    {
        return $this->numberOfResponses;
    }

    /**
     * Sets a new numberOfResponses
     *
     * @param int $numberOfResponses
     * @return self
     */
    public function setNumberOfResponses($numberOfResponses)
    {
        $this->numberOfResponses = $numberOfResponses;
        return $this;
    }

    /**
     * Gets as numberOfWonOpportunities
     *
     * @return int
     */
    public function getNumberOfWonOpportunities()
    {
        return $this->numberOfWonOpportunities;
    }

    /**
     * Sets a new numberOfWonOpportunities
     *
     * @param int $numberOfWonOpportunities
     * @return self
     */
    public function setNumberOfWonOpportunities($numberOfWonOpportunities)
    {
        $this->numberOfWonOpportunities = $numberOfWonOpportunities;
        return $this;
    }

    /**
     * Gets as numberSent
     *
     * @return float
     */
    public function getNumberSent()
    {
        return $this->numberSent;
    }

    /**
     * Sets a new numberSent
     *
     * @param float $numberSent
     * @return self
     */
    public function setNumberSent($numberSent)
    {
        $this->numberSent = $numberSent;
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
     * Gets as opportunities
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getOpportunities()
    {
        return $this->opportunities;
    }

    /**
     * Sets a new opportunities
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $opportunities
     * @return self
     */
    public function setOpportunities(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $opportunities)
    {
        $this->opportunities = $opportunities;
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
     * Gets as parent
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\CampaignType
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Sets a new parent
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\CampaignType $parent
     * @return self
     */
    public function setParent(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\CampaignType $parent)
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * Gets as parentId
     *
     * @return string
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * Sets a new parentId
     *
     * @param string $parentId
     * @return self
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;
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
     * Gets as startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets a new startDate
     *
     * @param \DateTime $startDate
     * @return self
     */
    public function setStartDate(\DateTime $startDate)
    {
        $this->startDate = $startDate;
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

