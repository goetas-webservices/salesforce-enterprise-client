<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing DashboardType
 *
 *
 * XSD Type: Dashboard
 */
class DashboardType extends SObjectType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $attachedContentDocuments
     */
    private $attachedContentDocuments = null;

    /**
     * @property string $backgroundDirection
     */
    private $backgroundDirection = null;

    /**
     * @property int $backgroundEnd
     */
    private $backgroundEnd = null;

    /**
     * @property int $backgroundStart
     */
    private $backgroundStart = null;

    /**
     * @property string $chartTheme
     */
    private $chartTheme = null;

    /**
     * @property string $colorPalette
     */
    private $colorPalette = null;

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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $dashboardComponents
     */
    private $dashboardComponents = null;

    /**
     * @property string $dashboardResultRefreshedDate
     */
    private $dashboardResultRefreshedDate = null;

    /**
     * @property string $dashboardResultRunningUser
     */
    private $dashboardResultRunningUser = null;

    /**
     * @property string $description
     */
    private $description = null;

    /**
     * @property string $developerName
     */
    private $developerName = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feedSubscriptionsForEntity
     */
    private $feedSubscriptionsForEntity = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $feeds
     */
    private $feeds = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\FolderType $folder
     */
    private $folder = null;

    /**
     * @property string $folderId
     */
    private $folderId = null;

    /**
     * @property string $folderName
     */
    private $folderName = null;

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
     * @property \DateTime $lastReferencedDate
     */
    private $lastReferencedDate = null;

    /**
     * @property \DateTime $lastViewedDate
     */
    private $lastViewedDate = null;

    /**
     * @property string $leftSize
     */
    private $leftSize = null;

    /**
     * @property string $middleSize
     */
    private $middleSize = null;

    /**
     * @property string $namespacePrefix
     */
    private $namespacePrefix = null;

    /**
     * @property string $rightSize
     */
    private $rightSize = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $runningUser
     */
    private $runningUser = null;

    /**
     * @property string $runningUserId
     */
    private $runningUserId = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property int $textColor
     */
    private $textColor = null;

    /**
     * @property string $title
     */
    private $title = null;

    /**
     * @property int $titleColor
     */
    private $titleColor = null;

    /**
     * @property int $titleSize
     */
    private $titleSize = null;

    /**
     * @property string $type
     */
    private $type = null;

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
     * Gets as backgroundDirection
     *
     * @return string
     */
    public function getBackgroundDirection()
    {
        return $this->backgroundDirection;
    }

    /**
     * Sets a new backgroundDirection
     *
     * @param string $backgroundDirection
     * @return self
     */
    public function setBackgroundDirection($backgroundDirection)
    {
        $this->backgroundDirection = $backgroundDirection;
        return $this;
    }

    /**
     * Gets as backgroundEnd
     *
     * @return int
     */
    public function getBackgroundEnd()
    {
        return $this->backgroundEnd;
    }

    /**
     * Sets a new backgroundEnd
     *
     * @param int $backgroundEnd
     * @return self
     */
    public function setBackgroundEnd($backgroundEnd)
    {
        $this->backgroundEnd = $backgroundEnd;
        return $this;
    }

    /**
     * Gets as backgroundStart
     *
     * @return int
     */
    public function getBackgroundStart()
    {
        return $this->backgroundStart;
    }

    /**
     * Sets a new backgroundStart
     *
     * @param int $backgroundStart
     * @return self
     */
    public function setBackgroundStart($backgroundStart)
    {
        $this->backgroundStart = $backgroundStart;
        return $this;
    }

    /**
     * Gets as chartTheme
     *
     * @return string
     */
    public function getChartTheme()
    {
        return $this->chartTheme;
    }

    /**
     * Sets a new chartTheme
     *
     * @param string $chartTheme
     * @return self
     */
    public function setChartTheme($chartTheme)
    {
        $this->chartTheme = $chartTheme;
        return $this;
    }

    /**
     * Gets as colorPalette
     *
     * @return string
     */
    public function getColorPalette()
    {
        return $this->colorPalette;
    }

    /**
     * Sets a new colorPalette
     *
     * @param string $colorPalette
     * @return self
     */
    public function setColorPalette($colorPalette)
    {
        $this->colorPalette = $colorPalette;
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
     * Gets as dashboardComponents
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getDashboardComponents()
    {
        return $this->dashboardComponents;
    }

    /**
     * Sets a new dashboardComponents
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $dashboardComponents
     * @return self
     */
    public function setDashboardComponents(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $dashboardComponents)
    {
        $this->dashboardComponents = $dashboardComponents;
        return $this;
    }

    /**
     * Gets as dashboardResultRefreshedDate
     *
     * @return string
     */
    public function getDashboardResultRefreshedDate()
    {
        return $this->dashboardResultRefreshedDate;
    }

    /**
     * Sets a new dashboardResultRefreshedDate
     *
     * @param string $dashboardResultRefreshedDate
     * @return self
     */
    public function setDashboardResultRefreshedDate($dashboardResultRefreshedDate)
    {
        $this->dashboardResultRefreshedDate = $dashboardResultRefreshedDate;
        return $this;
    }

    /**
     * Gets as dashboardResultRunningUser
     *
     * @return string
     */
    public function getDashboardResultRunningUser()
    {
        return $this->dashboardResultRunningUser;
    }

    /**
     * Sets a new dashboardResultRunningUser
     *
     * @param string $dashboardResultRunningUser
     * @return self
     */
    public function setDashboardResultRunningUser($dashboardResultRunningUser)
    {
        $this->dashboardResultRunningUser = $dashboardResultRunningUser;
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
     * Gets as folder
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\FolderType
     */
    public function getFolder()
    {
        return $this->folder;
    }

    /**
     * Sets a new folder
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\FolderType $folder
     * @return self
     */
    public function setFolder(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\FolderType $folder)
    {
        $this->folder = $folder;
        return $this;
    }

    /**
     * Gets as folderId
     *
     * @return string
     */
    public function getFolderId()
    {
        return $this->folderId;
    }

    /**
     * Sets a new folderId
     *
     * @param string $folderId
     * @return self
     */
    public function setFolderId($folderId)
    {
        $this->folderId = $folderId;
        return $this;
    }

    /**
     * Gets as folderName
     *
     * @return string
     */
    public function getFolderName()
    {
        return $this->folderName;
    }

    /**
     * Sets a new folderName
     *
     * @param string $folderName
     * @return self
     */
    public function setFolderName($folderName)
    {
        $this->folderName = $folderName;
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
     * Gets as leftSize
     *
     * @return string
     */
    public function getLeftSize()
    {
        return $this->leftSize;
    }

    /**
     * Sets a new leftSize
     *
     * @param string $leftSize
     * @return self
     */
    public function setLeftSize($leftSize)
    {
        $this->leftSize = $leftSize;
        return $this;
    }

    /**
     * Gets as middleSize
     *
     * @return string
     */
    public function getMiddleSize()
    {
        return $this->middleSize;
    }

    /**
     * Sets a new middleSize
     *
     * @param string $middleSize
     * @return self
     */
    public function setMiddleSize($middleSize)
    {
        $this->middleSize = $middleSize;
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
     * Gets as rightSize
     *
     * @return string
     */
    public function getRightSize()
    {
        return $this->rightSize;
    }

    /**
     * Sets a new rightSize
     *
     * @param string $rightSize
     * @return self
     */
    public function setRightSize($rightSize)
    {
        $this->rightSize = $rightSize;
        return $this;
    }

    /**
     * Gets as runningUser
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType
     */
    public function getRunningUser()
    {
        return $this->runningUser;
    }

    /**
     * Sets a new runningUser
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $runningUser
     * @return self
     */
    public function setRunningUser(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $runningUser)
    {
        $this->runningUser = $runningUser;
        return $this;
    }

    /**
     * Gets as runningUserId
     *
     * @return string
     */
    public function getRunningUserId()
    {
        return $this->runningUserId;
    }

    /**
     * Sets a new runningUserId
     *
     * @param string $runningUserId
     * @return self
     */
    public function setRunningUserId($runningUserId)
    {
        $this->runningUserId = $runningUserId;
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
     * Gets as textColor
     *
     * @return int
     */
    public function getTextColor()
    {
        return $this->textColor;
    }

    /**
     * Sets a new textColor
     *
     * @param int $textColor
     * @return self
     */
    public function setTextColor($textColor)
    {
        $this->textColor = $textColor;
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
     * Gets as titleColor
     *
     * @return int
     */
    public function getTitleColor()
    {
        return $this->titleColor;
    }

    /**
     * Sets a new titleColor
     *
     * @param int $titleColor
     * @return self
     */
    public function setTitleColor($titleColor)
    {
        $this->titleColor = $titleColor;
        return $this;
    }

    /**
     * Gets as titleSize
     *
     * @return int
     */
    public function getTitleSize()
    {
        return $this->titleSize;
    }

    /**
     * Sets a new titleSize
     *
     * @param int $titleSize
     * @return self
     */
    public function setTitleSize($titleSize)
    {
        $this->titleSize = $titleSize;
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


}

