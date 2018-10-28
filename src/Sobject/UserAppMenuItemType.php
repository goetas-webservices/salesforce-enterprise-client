<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing UserAppMenuItemType
 *
 *
 * XSD Type: UserAppMenuItem
 */
class UserAppMenuItemType extends SObjectType
{

    /**
     * @property string $appMenuItemId
     */
    private $appMenuItemId = null;

    /**
     * @property string $applicationId
     */
    private $applicationId = null;

    /**
     * @property string $description
     */
    private $description = null;

    /**
     * @property string $iconUrl
     */
    private $iconUrl = null;

    /**
     * @property string $infoUrl
     */
    private $infoUrl = null;

    /**
     * @property bool $isUsingAdminAuthorization
     */
    private $isUsingAdminAuthorization = null;

    /**
     * @property bool $isVisible
     */
    private $isVisible = null;

    /**
     * @property string $label
     */
    private $label = null;

    /**
     * @property string $logoUrl
     */
    private $logoUrl = null;

    /**
     * @property string $mobileStartUrl
     */
    private $mobileStartUrl = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property int $sortOrder
     */
    private $sortOrder = null;

    /**
     * @property string $startUrl
     */
    private $startUrl = null;

    /**
     * @property string $type
     */
    private $type = null;

    /**
     * @property int $userSortOrder
     */
    private $userSortOrder = null;

    /**
     * Gets as appMenuItemId
     *
     * @return string
     */
    public function getAppMenuItemId()
    {
        return $this->appMenuItemId;
    }

    /**
     * Sets a new appMenuItemId
     *
     * @param string $appMenuItemId
     * @return self
     */
    public function setAppMenuItemId($appMenuItemId)
    {
        $this->appMenuItemId = $appMenuItemId;
        return $this;
    }

    /**
     * Gets as applicationId
     *
     * @return string
     */
    public function getApplicationId()
    {
        return $this->applicationId;
    }

    /**
     * Sets a new applicationId
     *
     * @param string $applicationId
     * @return self
     */
    public function setApplicationId($applicationId)
    {
        $this->applicationId = $applicationId;
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
     * Gets as iconUrl
     *
     * @return string
     */
    public function getIconUrl()
    {
        return $this->iconUrl;
    }

    /**
     * Sets a new iconUrl
     *
     * @param string $iconUrl
     * @return self
     */
    public function setIconUrl($iconUrl)
    {
        $this->iconUrl = $iconUrl;
        return $this;
    }

    /**
     * Gets as infoUrl
     *
     * @return string
     */
    public function getInfoUrl()
    {
        return $this->infoUrl;
    }

    /**
     * Sets a new infoUrl
     *
     * @param string $infoUrl
     * @return self
     */
    public function setInfoUrl($infoUrl)
    {
        $this->infoUrl = $infoUrl;
        return $this;
    }

    /**
     * Gets as isUsingAdminAuthorization
     *
     * @return bool
     */
    public function getIsUsingAdminAuthorization()
    {
        return $this->isUsingAdminAuthorization;
    }

    /**
     * Sets a new isUsingAdminAuthorization
     *
     * @param bool $isUsingAdminAuthorization
     * @return self
     */
    public function setIsUsingAdminAuthorization($isUsingAdminAuthorization)
    {
        $this->isUsingAdminAuthorization = $isUsingAdminAuthorization;
        return $this;
    }

    /**
     * Gets as isVisible
     *
     * @return bool
     */
    public function getIsVisible()
    {
        return $this->isVisible;
    }

    /**
     * Sets a new isVisible
     *
     * @param bool $isVisible
     * @return self
     */
    public function setIsVisible($isVisible)
    {
        $this->isVisible = $isVisible;
        return $this;
    }

    /**
     * Gets as label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Sets a new label
     *
     * @param string $label
     * @return self
     */
    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }

    /**
     * Gets as logoUrl
     *
     * @return string
     */
    public function getLogoUrl()
    {
        return $this->logoUrl;
    }

    /**
     * Sets a new logoUrl
     *
     * @param string $logoUrl
     * @return self
     */
    public function setLogoUrl($logoUrl)
    {
        $this->logoUrl = $logoUrl;
        return $this;
    }

    /**
     * Gets as mobileStartUrl
     *
     * @return string
     */
    public function getMobileStartUrl()
    {
        return $this->mobileStartUrl;
    }

    /**
     * Sets a new mobileStartUrl
     *
     * @param string $mobileStartUrl
     * @return self
     */
    public function setMobileStartUrl($mobileStartUrl)
    {
        $this->mobileStartUrl = $mobileStartUrl;
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
     * Gets as sortOrder
     *
     * @return int
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * Sets a new sortOrder
     *
     * @param int $sortOrder
     * @return self
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;
        return $this;
    }

    /**
     * Gets as startUrl
     *
     * @return string
     */
    public function getStartUrl()
    {
        return $this->startUrl;
    }

    /**
     * Sets a new startUrl
     *
     * @param string $startUrl
     * @return self
     */
    public function setStartUrl($startUrl)
    {
        $this->startUrl = $startUrl;
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
     * Gets as userSortOrder
     *
     * @return int
     */
    public function getUserSortOrder()
    {
        return $this->userSortOrder;
    }

    /**
     * Sets a new userSortOrder
     *
     * @param int $userSortOrder
     * @return self
     */
    public function setUserSortOrder($userSortOrder)
    {
        $this->userSortOrder = $userSortOrder;
        return $this;
    }


}

