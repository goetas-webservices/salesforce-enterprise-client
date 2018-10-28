<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing ContentDistributionType
 *
 *
 * XSD Type: ContentDistribution
 */
class ContentDistributionType extends SObjectType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $contentDistributionViews
     */
    private $contentDistributionViews = null;

    /**
     * @property string $contentDocumentId
     */
    private $contentDocumentId = null;

    /**
     * @property string $contentDownloadUrl
     */
    private $contentDownloadUrl = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentVersionType $contentVersion
     */
    private $contentVersion = null;

    /**
     * @property string $contentVersionId
     */
    private $contentVersionId = null;

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
     * @property string $distributionPublicUrl
     */
    private $distributionPublicUrl = null;

    /**
     * @property \DateTime $expiryDate
     */
    private $expiryDate = null;

    /**
     * @property \DateTime $firstViewDate
     */
    private $firstViewDate = null;

    /**
     * @property bool $isDeleted
     */
    private $isDeleted = null;

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
     * @property \DateTime $lastViewDate
     */
    private $lastViewDate = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $owner
     */
    private $owner = null;

    /**
     * @property string $ownerId
     */
    private $ownerId = null;

    /**
     * @property string $password
     */
    private $password = null;

    /**
     * @property string $pdfDownloadUrl
     */
    private $pdfDownloadUrl = null;

    /**
     * @property bool $preferencesAllowOriginalDownload
     */
    private $preferencesAllowOriginalDownload = null;

    /**
     * @property bool $preferencesAllowPDFDownload
     */
    private $preferencesAllowPDFDownload = null;

    /**
     * @property bool $preferencesAllowViewInBrowser
     */
    private $preferencesAllowViewInBrowser = null;

    /**
     * @property bool $preferencesExpires
     */
    private $preferencesExpires = null;

    /**
     * @property bool $preferencesLinkLatestVersion
     */
    private $preferencesLinkLatestVersion = null;

    /**
     * @property bool $preferencesNotifyOnVisit
     */
    private $preferencesNotifyOnVisit = null;

    /**
     * @property bool $preferencesNotifyRndtnComplete
     */
    private $preferencesNotifyRndtnComplete = null;

    /**
     * @property bool $preferencesPasswordRequired
     */
    private $preferencesPasswordRequired = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $relatedRecord
     */
    private $relatedRecord = null;

    /**
     * @property string $relatedRecordId
     */
    private $relatedRecordId = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property int $viewCount
     */
    private $viewCount = null;

    /**
     * Gets as contentDistributionViews
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getContentDistributionViews()
    {
        return $this->contentDistributionViews;
    }

    /**
     * Sets a new contentDistributionViews
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $contentDistributionViews
     * @return self
     */
    public function setContentDistributionViews(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $contentDistributionViews)
    {
        $this->contentDistributionViews = $contentDistributionViews;
        return $this;
    }

    /**
     * Gets as contentDocumentId
     *
     * @return string
     */
    public function getContentDocumentId()
    {
        return $this->contentDocumentId;
    }

    /**
     * Sets a new contentDocumentId
     *
     * @param string $contentDocumentId
     * @return self
     */
    public function setContentDocumentId($contentDocumentId)
    {
        $this->contentDocumentId = $contentDocumentId;
        return $this;
    }

    /**
     * Gets as contentDownloadUrl
     *
     * @return string
     */
    public function getContentDownloadUrl()
    {
        return $this->contentDownloadUrl;
    }

    /**
     * Sets a new contentDownloadUrl
     *
     * @param string $contentDownloadUrl
     * @return self
     */
    public function setContentDownloadUrl($contentDownloadUrl)
    {
        $this->contentDownloadUrl = $contentDownloadUrl;
        return $this;
    }

    /**
     * Gets as contentVersion
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentVersionType
     */
    public function getContentVersion()
    {
        return $this->contentVersion;
    }

    /**
     * Sets a new contentVersion
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentVersionType $contentVersion
     * @return self
     */
    public function setContentVersion(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentVersionType $contentVersion)
    {
        $this->contentVersion = $contentVersion;
        return $this;
    }

    /**
     * Gets as contentVersionId
     *
     * @return string
     */
    public function getContentVersionId()
    {
        return $this->contentVersionId;
    }

    /**
     * Sets a new contentVersionId
     *
     * @param string $contentVersionId
     * @return self
     */
    public function setContentVersionId($contentVersionId)
    {
        $this->contentVersionId = $contentVersionId;
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
     * Gets as distributionPublicUrl
     *
     * @return string
     */
    public function getDistributionPublicUrl()
    {
        return $this->distributionPublicUrl;
    }

    /**
     * Sets a new distributionPublicUrl
     *
     * @param string $distributionPublicUrl
     * @return self
     */
    public function setDistributionPublicUrl($distributionPublicUrl)
    {
        $this->distributionPublicUrl = $distributionPublicUrl;
        return $this;
    }

    /**
     * Gets as expiryDate
     *
     * @return \DateTime
     */
    public function getExpiryDate()
    {
        return $this->expiryDate;
    }

    /**
     * Sets a new expiryDate
     *
     * @param \DateTime $expiryDate
     * @return self
     */
    public function setExpiryDate(\DateTime $expiryDate)
    {
        $this->expiryDate = $expiryDate;
        return $this;
    }

    /**
     * Gets as firstViewDate
     *
     * @return \DateTime
     */
    public function getFirstViewDate()
    {
        return $this->firstViewDate;
    }

    /**
     * Sets a new firstViewDate
     *
     * @param \DateTime $firstViewDate
     * @return self
     */
    public function setFirstViewDate(\DateTime $firstViewDate)
    {
        $this->firstViewDate = $firstViewDate;
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
     * Gets as lastViewDate
     *
     * @return \DateTime
     */
    public function getLastViewDate()
    {
        return $this->lastViewDate;
    }

    /**
     * Sets a new lastViewDate
     *
     * @param \DateTime $lastViewDate
     * @return self
     */
    public function setLastViewDate(\DateTime $lastViewDate)
    {
        $this->lastViewDate = $lastViewDate;
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
     * Gets as password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Sets a new password
     *
     * @param string $password
     * @return self
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * Gets as pdfDownloadUrl
     *
     * @return string
     */
    public function getPdfDownloadUrl()
    {
        return $this->pdfDownloadUrl;
    }

    /**
     * Sets a new pdfDownloadUrl
     *
     * @param string $pdfDownloadUrl
     * @return self
     */
    public function setPdfDownloadUrl($pdfDownloadUrl)
    {
        $this->pdfDownloadUrl = $pdfDownloadUrl;
        return $this;
    }

    /**
     * Gets as preferencesAllowOriginalDownload
     *
     * @return bool
     */
    public function getPreferencesAllowOriginalDownload()
    {
        return $this->preferencesAllowOriginalDownload;
    }

    /**
     * Sets a new preferencesAllowOriginalDownload
     *
     * @param bool $preferencesAllowOriginalDownload
     * @return self
     */
    public function setPreferencesAllowOriginalDownload($preferencesAllowOriginalDownload)
    {
        $this->preferencesAllowOriginalDownload = $preferencesAllowOriginalDownload;
        return $this;
    }

    /**
     * Gets as preferencesAllowPDFDownload
     *
     * @return bool
     */
    public function getPreferencesAllowPDFDownload()
    {
        return $this->preferencesAllowPDFDownload;
    }

    /**
     * Sets a new preferencesAllowPDFDownload
     *
     * @param bool $preferencesAllowPDFDownload
     * @return self
     */
    public function setPreferencesAllowPDFDownload($preferencesAllowPDFDownload)
    {
        $this->preferencesAllowPDFDownload = $preferencesAllowPDFDownload;
        return $this;
    }

    /**
     * Gets as preferencesAllowViewInBrowser
     *
     * @return bool
     */
    public function getPreferencesAllowViewInBrowser()
    {
        return $this->preferencesAllowViewInBrowser;
    }

    /**
     * Sets a new preferencesAllowViewInBrowser
     *
     * @param bool $preferencesAllowViewInBrowser
     * @return self
     */
    public function setPreferencesAllowViewInBrowser($preferencesAllowViewInBrowser)
    {
        $this->preferencesAllowViewInBrowser = $preferencesAllowViewInBrowser;
        return $this;
    }

    /**
     * Gets as preferencesExpires
     *
     * @return bool
     */
    public function getPreferencesExpires()
    {
        return $this->preferencesExpires;
    }

    /**
     * Sets a new preferencesExpires
     *
     * @param bool $preferencesExpires
     * @return self
     */
    public function setPreferencesExpires($preferencesExpires)
    {
        $this->preferencesExpires = $preferencesExpires;
        return $this;
    }

    /**
     * Gets as preferencesLinkLatestVersion
     *
     * @return bool
     */
    public function getPreferencesLinkLatestVersion()
    {
        return $this->preferencesLinkLatestVersion;
    }

    /**
     * Sets a new preferencesLinkLatestVersion
     *
     * @param bool $preferencesLinkLatestVersion
     * @return self
     */
    public function setPreferencesLinkLatestVersion($preferencesLinkLatestVersion)
    {
        $this->preferencesLinkLatestVersion = $preferencesLinkLatestVersion;
        return $this;
    }

    /**
     * Gets as preferencesNotifyOnVisit
     *
     * @return bool
     */
    public function getPreferencesNotifyOnVisit()
    {
        return $this->preferencesNotifyOnVisit;
    }

    /**
     * Sets a new preferencesNotifyOnVisit
     *
     * @param bool $preferencesNotifyOnVisit
     * @return self
     */
    public function setPreferencesNotifyOnVisit($preferencesNotifyOnVisit)
    {
        $this->preferencesNotifyOnVisit = $preferencesNotifyOnVisit;
        return $this;
    }

    /**
     * Gets as preferencesNotifyRndtnComplete
     *
     * @return bool
     */
    public function getPreferencesNotifyRndtnComplete()
    {
        return $this->preferencesNotifyRndtnComplete;
    }

    /**
     * Sets a new preferencesNotifyRndtnComplete
     *
     * @param bool $preferencesNotifyRndtnComplete
     * @return self
     */
    public function setPreferencesNotifyRndtnComplete($preferencesNotifyRndtnComplete)
    {
        $this->preferencesNotifyRndtnComplete = $preferencesNotifyRndtnComplete;
        return $this;
    }

    /**
     * Gets as preferencesPasswordRequired
     *
     * @return bool
     */
    public function getPreferencesPasswordRequired()
    {
        return $this->preferencesPasswordRequired;
    }

    /**
     * Sets a new preferencesPasswordRequired
     *
     * @param bool $preferencesPasswordRequired
     * @return self
     */
    public function setPreferencesPasswordRequired($preferencesPasswordRequired)
    {
        $this->preferencesPasswordRequired = $preferencesPasswordRequired;
        return $this;
    }

    /**
     * Gets as relatedRecord
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType
     */
    public function getRelatedRecord()
    {
        return $this->relatedRecord;
    }

    /**
     * Sets a new relatedRecord
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $relatedRecord
     * @return self
     */
    public function setRelatedRecord(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $relatedRecord)
    {
        $this->relatedRecord = $relatedRecord;
        return $this;
    }

    /**
     * Gets as relatedRecordId
     *
     * @return string
     */
    public function getRelatedRecordId()
    {
        return $this->relatedRecordId;
    }

    /**
     * Sets a new relatedRecordId
     *
     * @param string $relatedRecordId
     * @return self
     */
    public function setRelatedRecordId($relatedRecordId)
    {
        $this->relatedRecordId = $relatedRecordId;
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
     * Gets as viewCount
     *
     * @return int
     */
    public function getViewCount()
    {
        return $this->viewCount;
    }

    /**
     * Sets a new viewCount
     *
     * @param int $viewCount
     * @return self
     */
    public function setViewCount($viewCount)
    {
        $this->viewCount = $viewCount;
        return $this;
    }


}

