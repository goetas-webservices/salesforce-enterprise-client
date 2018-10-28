<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing PlatformActionType
 *
 *
 * XSD Type: PlatformAction
 */
class PlatformActionType extends SObjectType
{

    /**
     * @property string $actionListContext
     */
    private $actionListContext = null;

    /**
     * @property string $actionTarget
     */
    private $actionTarget = null;

    /**
     * @property string $actionTargetType
     */
    private $actionTargetType = null;

    /**
     * @property string $apiName
     */
    private $apiName = null;

    /**
     * @property string $category
     */
    private $category = null;

    /**
     * @property string $confirmationMessage
     */
    private $confirmationMessage = null;

    /**
     * @property string $deviceFormat
     */
    private $deviceFormat = null;

    /**
     * @property string $externalId
     */
    private $externalId = null;

    /**
     * @property string $groupId
     */
    private $groupId = null;

    /**
     * @property string $iconContentType
     */
    private $iconContentType = null;

    /**
     * @property int $iconHeight
     */
    private $iconHeight = null;

    /**
     * @property string $iconUrl
     */
    private $iconUrl = null;

    /**
     * @property int $iconWidth
     */
    private $iconWidth = null;

    /**
     * @property string $invocationStatus
     */
    private $invocationStatus = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $invokedByUser
     */
    private $invokedByUser = null;

    /**
     * @property string $invokedByUserId
     */
    private $invokedByUserId = null;

    /**
     * @property bool $isGroupDefault
     */
    private $isGroupDefault = null;

    /**
     * @property bool $isMassAction
     */
    private $isMassAction = null;

    /**
     * @property string $label
     */
    private $label = null;

    /**
     * @property \DateTime $lastModifiedDate
     */
    private $lastModifiedDate = null;

    /**
     * @property string $primaryColor
     */
    private $primaryColor = null;

    /**
     * @property string $relatedListRecordId
     */
    private $relatedListRecordId = null;

    /**
     * @property string $relatedSourceEntity
     */
    private $relatedSourceEntity = null;

    /**
     * @property string $section
     */
    private $section = null;

    /**
     * @property string $sourceEntity
     */
    private $sourceEntity = null;

    /**
     * @property string $subtype
     */
    private $subtype = null;

    /**
     * @property string $targetObject
     */
    private $targetObject = null;

    /**
     * @property string $targetUrl
     */
    private $targetUrl = null;

    /**
     * @property string $type
     */
    private $type = null;

    /**
     * Gets as actionListContext
     *
     * @return string
     */
    public function getActionListContext()
    {
        return $this->actionListContext;
    }

    /**
     * Sets a new actionListContext
     *
     * @param string $actionListContext
     * @return self
     */
    public function setActionListContext($actionListContext)
    {
        $this->actionListContext = $actionListContext;
        return $this;
    }

    /**
     * Gets as actionTarget
     *
     * @return string
     */
    public function getActionTarget()
    {
        return $this->actionTarget;
    }

    /**
     * Sets a new actionTarget
     *
     * @param string $actionTarget
     * @return self
     */
    public function setActionTarget($actionTarget)
    {
        $this->actionTarget = $actionTarget;
        return $this;
    }

    /**
     * Gets as actionTargetType
     *
     * @return string
     */
    public function getActionTargetType()
    {
        return $this->actionTargetType;
    }

    /**
     * Sets a new actionTargetType
     *
     * @param string $actionTargetType
     * @return self
     */
    public function setActionTargetType($actionTargetType)
    {
        $this->actionTargetType = $actionTargetType;
        return $this;
    }

    /**
     * Gets as apiName
     *
     * @return string
     */
    public function getApiName()
    {
        return $this->apiName;
    }

    /**
     * Sets a new apiName
     *
     * @param string $apiName
     * @return self
     */
    public function setApiName($apiName)
    {
        $this->apiName = $apiName;
        return $this;
    }

    /**
     * Gets as category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * @param string $category
     * @return self
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Gets as confirmationMessage
     *
     * @return string
     */
    public function getConfirmationMessage()
    {
        return $this->confirmationMessage;
    }

    /**
     * Sets a new confirmationMessage
     *
     * @param string $confirmationMessage
     * @return self
     */
    public function setConfirmationMessage($confirmationMessage)
    {
        $this->confirmationMessage = $confirmationMessage;
        return $this;
    }

    /**
     * Gets as deviceFormat
     *
     * @return string
     */
    public function getDeviceFormat()
    {
        return $this->deviceFormat;
    }

    /**
     * Sets a new deviceFormat
     *
     * @param string $deviceFormat
     * @return self
     */
    public function setDeviceFormat($deviceFormat)
    {
        $this->deviceFormat = $deviceFormat;
        return $this;
    }

    /**
     * Gets as externalId
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * Sets a new externalId
     *
     * @param string $externalId
     * @return self
     */
    public function setExternalId($externalId)
    {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * Gets as groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Sets a new groupId
     *
     * @param string $groupId
     * @return self
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * Gets as iconContentType
     *
     * @return string
     */
    public function getIconContentType()
    {
        return $this->iconContentType;
    }

    /**
     * Sets a new iconContentType
     *
     * @param string $iconContentType
     * @return self
     */
    public function setIconContentType($iconContentType)
    {
        $this->iconContentType = $iconContentType;
        return $this;
    }

    /**
     * Gets as iconHeight
     *
     * @return int
     */
    public function getIconHeight()
    {
        return $this->iconHeight;
    }

    /**
     * Sets a new iconHeight
     *
     * @param int $iconHeight
     * @return self
     */
    public function setIconHeight($iconHeight)
    {
        $this->iconHeight = $iconHeight;
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
     * Gets as iconWidth
     *
     * @return int
     */
    public function getIconWidth()
    {
        return $this->iconWidth;
    }

    /**
     * Sets a new iconWidth
     *
     * @param int $iconWidth
     * @return self
     */
    public function setIconWidth($iconWidth)
    {
        $this->iconWidth = $iconWidth;
        return $this;
    }

    /**
     * Gets as invocationStatus
     *
     * @return string
     */
    public function getInvocationStatus()
    {
        return $this->invocationStatus;
    }

    /**
     * Sets a new invocationStatus
     *
     * @param string $invocationStatus
     * @return self
     */
    public function setInvocationStatus($invocationStatus)
    {
        $this->invocationStatus = $invocationStatus;
        return $this;
    }

    /**
     * Gets as invokedByUser
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType
     */
    public function getInvokedByUser()
    {
        return $this->invokedByUser;
    }

    /**
     * Sets a new invokedByUser
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $invokedByUser
     * @return self
     */
    public function setInvokedByUser(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $invokedByUser)
    {
        $this->invokedByUser = $invokedByUser;
        return $this;
    }

    /**
     * Gets as invokedByUserId
     *
     * @return string
     */
    public function getInvokedByUserId()
    {
        return $this->invokedByUserId;
    }

    /**
     * Sets a new invokedByUserId
     *
     * @param string $invokedByUserId
     * @return self
     */
    public function setInvokedByUserId($invokedByUserId)
    {
        $this->invokedByUserId = $invokedByUserId;
        return $this;
    }

    /**
     * Gets as isGroupDefault
     *
     * @return bool
     */
    public function getIsGroupDefault()
    {
        return $this->isGroupDefault;
    }

    /**
     * Sets a new isGroupDefault
     *
     * @param bool $isGroupDefault
     * @return self
     */
    public function setIsGroupDefault($isGroupDefault)
    {
        $this->isGroupDefault = $isGroupDefault;
        return $this;
    }

    /**
     * Gets as isMassAction
     *
     * @return bool
     */
    public function getIsMassAction()
    {
        return $this->isMassAction;
    }

    /**
     * Sets a new isMassAction
     *
     * @param bool $isMassAction
     * @return self
     */
    public function setIsMassAction($isMassAction)
    {
        $this->isMassAction = $isMassAction;
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
     * Gets as primaryColor
     *
     * @return string
     */
    public function getPrimaryColor()
    {
        return $this->primaryColor;
    }

    /**
     * Sets a new primaryColor
     *
     * @param string $primaryColor
     * @return self
     */
    public function setPrimaryColor($primaryColor)
    {
        $this->primaryColor = $primaryColor;
        return $this;
    }

    /**
     * Gets as relatedListRecordId
     *
     * @return string
     */
    public function getRelatedListRecordId()
    {
        return $this->relatedListRecordId;
    }

    /**
     * Sets a new relatedListRecordId
     *
     * @param string $relatedListRecordId
     * @return self
     */
    public function setRelatedListRecordId($relatedListRecordId)
    {
        $this->relatedListRecordId = $relatedListRecordId;
        return $this;
    }

    /**
     * Gets as relatedSourceEntity
     *
     * @return string
     */
    public function getRelatedSourceEntity()
    {
        return $this->relatedSourceEntity;
    }

    /**
     * Sets a new relatedSourceEntity
     *
     * @param string $relatedSourceEntity
     * @return self
     */
    public function setRelatedSourceEntity($relatedSourceEntity)
    {
        $this->relatedSourceEntity = $relatedSourceEntity;
        return $this;
    }

    /**
     * Gets as section
     *
     * @return string
     */
    public function getSection()
    {
        return $this->section;
    }

    /**
     * Sets a new section
     *
     * @param string $section
     * @return self
     */
    public function setSection($section)
    {
        $this->section = $section;
        return $this;
    }

    /**
     * Gets as sourceEntity
     *
     * @return string
     */
    public function getSourceEntity()
    {
        return $this->sourceEntity;
    }

    /**
     * Sets a new sourceEntity
     *
     * @param string $sourceEntity
     * @return self
     */
    public function setSourceEntity($sourceEntity)
    {
        $this->sourceEntity = $sourceEntity;
        return $this;
    }

    /**
     * Gets as subtype
     *
     * @return string
     */
    public function getSubtype()
    {
        return $this->subtype;
    }

    /**
     * Sets a new subtype
     *
     * @param string $subtype
     * @return self
     */
    public function setSubtype($subtype)
    {
        $this->subtype = $subtype;
        return $this;
    }

    /**
     * Gets as targetObject
     *
     * @return string
     */
    public function getTargetObject()
    {
        return $this->targetObject;
    }

    /**
     * Sets a new targetObject
     *
     * @param string $targetObject
     * @return self
     */
    public function setTargetObject($targetObject)
    {
        $this->targetObject = $targetObject;
        return $this;
    }

    /**
     * Gets as targetUrl
     *
     * @return string
     */
    public function getTargetUrl()
    {
        return $this->targetUrl;
    }

    /**
     * Sets a new targetUrl
     *
     * @param string $targetUrl
     * @return self
     */
    public function setTargetUrl($targetUrl)
    {
        $this->targetUrl = $targetUrl;
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

