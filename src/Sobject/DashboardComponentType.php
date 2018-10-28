<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing DashboardComponentType
 *
 *
 * XSD Type: DashboardComponent
 */
class DashboardComponentType extends SObjectType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $attachedContentDocuments
     */
    private $attachedContentDocuments = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $combinedAttachments
     */
    private $combinedAttachments = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $contentDocumentLinks
     */
    private $contentDocumentLinks = null;

    /**
     * @property string $customReportId
     */
    private $customReportId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\DashboardType $dashboard
     */
    private $dashboard = null;

    /**
     * @property string $dashboardId
     */
    private $dashboardId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feedSubscriptionsForEntity
     */
    private $feedSubscriptionsForEntity = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feeds
     */
    private $feeds = null;

    /**
     * @property string $name
     */
    private $name = null;

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
     * Gets as customReportId
     *
     * @return string
     */
    public function getCustomReportId()
    {
        return $this->customReportId;
    }

    /**
     * Sets a new customReportId
     *
     * @param string $customReportId
     * @return self
     */
    public function setCustomReportId($customReportId)
    {
        $this->customReportId = $customReportId;
        return $this;
    }

    /**
     * Gets as dashboard
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\DashboardType
     */
    public function getDashboard()
    {
        return $this->dashboard;
    }

    /**
     * Sets a new dashboard
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\DashboardType $dashboard
     * @return self
     */
    public function setDashboard(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\DashboardType $dashboard)
    {
        $this->dashboard = $dashboard;
        return $this;
    }

    /**
     * Gets as dashboardId
     *
     * @return string
     */
    public function getDashboardId()
    {
        return $this->dashboardId;
    }

    /**
     * Sets a new dashboardId
     *
     * @param string $dashboardId
     * @return self
     */
    public function setDashboardId($dashboardId)
    {
        $this->dashboardId = $dashboardId;
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


}

