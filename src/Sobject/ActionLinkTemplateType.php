<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing ActionLinkTemplateType
 *
 *
 * XSD Type: ActionLinkTemplate
 */
class ActionLinkTemplateType extends SObjectType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ActionLinkGroupTemplateType $actionLinkGroupTemplate
     */
    private $actionLinkGroupTemplate = null;

    /**
     * @property string $actionLinkGroupTemplateId
     */
    private $actionLinkGroupTemplateId = null;

    /**
     * @property string $actionUrl
     */
    private $actionUrl = null;

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
     * @property string $headers
     */
    private $headers = null;

    /**
     * @property bool $isConfirmationRequired
     */
    private $isConfirmationRequired = null;

    /**
     * @property bool $isDeleted
     */
    private $isDeleted = null;

    /**
     * @property bool $isGroupDefault
     */
    private $isGroupDefault = null;

    /**
     * @property string $label
     */
    private $label = null;

    /**
     * @property string $labelKey
     */
    private $labelKey = null;

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
     * @property string $method
     */
    private $method = null;

    /**
     * @property int $position
     */
    private $position = null;

    /**
     * @property string $requestBody
     */
    private $requestBody = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property string $userAlias
     */
    private $userAlias = null;

    /**
     * @property string $userVisibility
     */
    private $userVisibility = null;

    /**
     * Gets as actionLinkGroupTemplate
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ActionLinkGroupTemplateType
     */
    public function getActionLinkGroupTemplate()
    {
        return $this->actionLinkGroupTemplate;
    }

    /**
     * Sets a new actionLinkGroupTemplate
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ActionLinkGroupTemplateType $actionLinkGroupTemplate
     * @return self
     */
    public function setActionLinkGroupTemplate(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\ActionLinkGroupTemplateType $actionLinkGroupTemplate)
    {
        $this->actionLinkGroupTemplate = $actionLinkGroupTemplate;
        return $this;
    }

    /**
     * Gets as actionLinkGroupTemplateId
     *
     * @return string
     */
    public function getActionLinkGroupTemplateId()
    {
        return $this->actionLinkGroupTemplateId;
    }

    /**
     * Sets a new actionLinkGroupTemplateId
     *
     * @param string $actionLinkGroupTemplateId
     * @return self
     */
    public function setActionLinkGroupTemplateId($actionLinkGroupTemplateId)
    {
        $this->actionLinkGroupTemplateId = $actionLinkGroupTemplateId;
        return $this;
    }

    /**
     * Gets as actionUrl
     *
     * @return string
     */
    public function getActionUrl()
    {
        return $this->actionUrl;
    }

    /**
     * Sets a new actionUrl
     *
     * @param string $actionUrl
     * @return self
     */
    public function setActionUrl($actionUrl)
    {
        $this->actionUrl = $actionUrl;
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
     * Gets as headers
     *
     * @return string
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * Sets a new headers
     *
     * @param string $headers
     * @return self
     */
    public function setHeaders($headers)
    {
        $this->headers = $headers;
        return $this;
    }

    /**
     * Gets as isConfirmationRequired
     *
     * @return bool
     */
    public function getIsConfirmationRequired()
    {
        return $this->isConfirmationRequired;
    }

    /**
     * Sets a new isConfirmationRequired
     *
     * @param bool $isConfirmationRequired
     * @return self
     */
    public function setIsConfirmationRequired($isConfirmationRequired)
    {
        $this->isConfirmationRequired = $isConfirmationRequired;
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
     * Gets as labelKey
     *
     * @return string
     */
    public function getLabelKey()
    {
        return $this->labelKey;
    }

    /**
     * Sets a new labelKey
     *
     * @param string $labelKey
     * @return self
     */
    public function setLabelKey($labelKey)
    {
        $this->labelKey = $labelKey;
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
     * Gets as method
     *
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Sets a new method
     *
     * @param string $method
     * @return self
     */
    public function setMethod($method)
    {
        $this->method = $method;
        return $this;
    }

    /**
     * Gets as position
     *
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Sets a new position
     *
     * @param int $position
     * @return self
     */
    public function setPosition($position)
    {
        $this->position = $position;
        return $this;
    }

    /**
     * Gets as requestBody
     *
     * @return string
     */
    public function getRequestBody()
    {
        return $this->requestBody;
    }

    /**
     * Sets a new requestBody
     *
     * @param string $requestBody
     * @return self
     */
    public function setRequestBody($requestBody)
    {
        $this->requestBody = $requestBody;
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
     * Gets as userAlias
     *
     * @return string
     */
    public function getUserAlias()
    {
        return $this->userAlias;
    }

    /**
     * Sets a new userAlias
     *
     * @param string $userAlias
     * @return self
     */
    public function setUserAlias($userAlias)
    {
        $this->userAlias = $userAlias;
        return $this;
    }

    /**
     * Gets as userVisibility
     *
     * @return string
     */
    public function getUserVisibility()
    {
        return $this->userVisibility;
    }

    /**
     * Sets a new userVisibility
     *
     * @param string $userVisibility
     * @return self
     */
    public function setUserVisibility($userVisibility)
    {
        $this->userVisibility = $userVisibility;
        return $this;
    }


}

