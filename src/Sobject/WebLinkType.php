<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing WebLinkType
 *
 *
 * XSD Type: WebLink
 */
class WebLinkType extends SObjectType
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
     * @property string $displayType
     */
    private $displayType = null;

    /**
     * @property string $encodingKey
     */
    private $encodingKey = null;

    /**
     * @property bool $hasMenubar
     */
    private $hasMenubar = null;

    /**
     * @property bool $hasScrollbars
     */
    private $hasScrollbars = null;

    /**
     * @property bool $hasToolbar
     */
    private $hasToolbar = null;

    /**
     * @property int $height
     */
    private $height = null;

    /**
     * @property bool $isProtected
     */
    private $isProtected = null;

    /**
     * @property bool $isResizable
     */
    private $isResizable = null;

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
     * @property string $linkType
     */
    private $linkType = null;

    /**
     * @property string $masterLabel
     */
    private $masterLabel = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $namespacePrefix
     */
    private $namespacePrefix = null;

    /**
     * @property string $openType
     */
    private $openType = null;

    /**
     * @property string $pageOrSobjectType
     */
    private $pageOrSobjectType = null;

    /**
     * @property string $position
     */
    private $position = null;

    /**
     * @property bool $requireRowSelection
     */
    private $requireRowSelection = null;

    /**
     * @property string $scontrolId
     */
    private $scontrolId = null;

    /**
     * @property bool $showsLocation
     */
    private $showsLocation = null;

    /**
     * @property bool $showsStatus
     */
    private $showsStatus = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property string $url
     */
    private $url = null;

    /**
     * @property int $width
     */
    private $width = null;

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
     * Gets as displayType
     *
     * @return string
     */
    public function getDisplayType()
    {
        return $this->displayType;
    }

    /**
     * Sets a new displayType
     *
     * @param string $displayType
     * @return self
     */
    public function setDisplayType($displayType)
    {
        $this->displayType = $displayType;
        return $this;
    }

    /**
     * Gets as encodingKey
     *
     * @return string
     */
    public function getEncodingKey()
    {
        return $this->encodingKey;
    }

    /**
     * Sets a new encodingKey
     *
     * @param string $encodingKey
     * @return self
     */
    public function setEncodingKey($encodingKey)
    {
        $this->encodingKey = $encodingKey;
        return $this;
    }

    /**
     * Gets as hasMenubar
     *
     * @return bool
     */
    public function getHasMenubar()
    {
        return $this->hasMenubar;
    }

    /**
     * Sets a new hasMenubar
     *
     * @param bool $hasMenubar
     * @return self
     */
    public function setHasMenubar($hasMenubar)
    {
        $this->hasMenubar = $hasMenubar;
        return $this;
    }

    /**
     * Gets as hasScrollbars
     *
     * @return bool
     */
    public function getHasScrollbars()
    {
        return $this->hasScrollbars;
    }

    /**
     * Sets a new hasScrollbars
     *
     * @param bool $hasScrollbars
     * @return self
     */
    public function setHasScrollbars($hasScrollbars)
    {
        $this->hasScrollbars = $hasScrollbars;
        return $this;
    }

    /**
     * Gets as hasToolbar
     *
     * @return bool
     */
    public function getHasToolbar()
    {
        return $this->hasToolbar;
    }

    /**
     * Sets a new hasToolbar
     *
     * @param bool $hasToolbar
     * @return self
     */
    public function setHasToolbar($hasToolbar)
    {
        $this->hasToolbar = $hasToolbar;
        return $this;
    }

    /**
     * Gets as height
     *
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Sets a new height
     *
     * @param int $height
     * @return self
     */
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    /**
     * Gets as isProtected
     *
     * @return bool
     */
    public function getIsProtected()
    {
        return $this->isProtected;
    }

    /**
     * Sets a new isProtected
     *
     * @param bool $isProtected
     * @return self
     */
    public function setIsProtected($isProtected)
    {
        $this->isProtected = $isProtected;
        return $this;
    }

    /**
     * Gets as isResizable
     *
     * @return bool
     */
    public function getIsResizable()
    {
        return $this->isResizable;
    }

    /**
     * Sets a new isResizable
     *
     * @param bool $isResizable
     * @return self
     */
    public function setIsResizable($isResizable)
    {
        $this->isResizable = $isResizable;
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
     * Gets as linkType
     *
     * @return string
     */
    public function getLinkType()
    {
        return $this->linkType;
    }

    /**
     * Sets a new linkType
     *
     * @param string $linkType
     * @return self
     */
    public function setLinkType($linkType)
    {
        $this->linkType = $linkType;
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
     * Gets as openType
     *
     * @return string
     */
    public function getOpenType()
    {
        return $this->openType;
    }

    /**
     * Sets a new openType
     *
     * @param string $openType
     * @return self
     */
    public function setOpenType($openType)
    {
        $this->openType = $openType;
        return $this;
    }

    /**
     * Gets as pageOrSobjectType
     *
     * @return string
     */
    public function getPageOrSobjectType()
    {
        return $this->pageOrSobjectType;
    }

    /**
     * Sets a new pageOrSobjectType
     *
     * @param string $pageOrSobjectType
     * @return self
     */
    public function setPageOrSobjectType($pageOrSobjectType)
    {
        $this->pageOrSobjectType = $pageOrSobjectType;
        return $this;
    }

    /**
     * Gets as position
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Sets a new position
     *
     * @param string $position
     * @return self
     */
    public function setPosition($position)
    {
        $this->position = $position;
        return $this;
    }

    /**
     * Gets as requireRowSelection
     *
     * @return bool
     */
    public function getRequireRowSelection()
    {
        return $this->requireRowSelection;
    }

    /**
     * Sets a new requireRowSelection
     *
     * @param bool $requireRowSelection
     * @return self
     */
    public function setRequireRowSelection($requireRowSelection)
    {
        $this->requireRowSelection = $requireRowSelection;
        return $this;
    }

    /**
     * Gets as scontrolId
     *
     * @return string
     */
    public function getScontrolId()
    {
        return $this->scontrolId;
    }

    /**
     * Sets a new scontrolId
     *
     * @param string $scontrolId
     * @return self
     */
    public function setScontrolId($scontrolId)
    {
        $this->scontrolId = $scontrolId;
        return $this;
    }

    /**
     * Gets as showsLocation
     *
     * @return bool
     */
    public function getShowsLocation()
    {
        return $this->showsLocation;
    }

    /**
     * Sets a new showsLocation
     *
     * @param bool $showsLocation
     * @return self
     */
    public function setShowsLocation($showsLocation)
    {
        $this->showsLocation = $showsLocation;
        return $this;
    }

    /**
     * Gets as showsStatus
     *
     * @return bool
     */
    public function getShowsStatus()
    {
        return $this->showsStatus;
    }

    /**
     * Sets a new showsStatus
     *
     * @param bool $showsStatus
     * @return self
     */
    public function setShowsStatus($showsStatus)
    {
        $this->showsStatus = $showsStatus;
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
     * Gets as url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Sets a new url
     *
     * @param string $url
     * @return self
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * Gets as width
     *
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Sets a new width
     *
     * @param int $width
     * @return self
     */
    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }


}

