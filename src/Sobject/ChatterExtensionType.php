<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing ChatterExtensionType
 *
 *
 * XSD Type: ChatterExtension
 */
class ChatterExtensionType extends SObjectType
{

    /**
     * @property string $compositionComponentEnumOrId
     */
    private $compositionComponentEnumOrId = null;

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
     * @property string $developerName
     */
    private $developerName = null;

    /**
     * @property string $extensionName
     */
    private $extensionName = null;

    /**
     * @property string $headerText
     */
    private $headerText = null;

    /**
     * @property string $hoverText
     */
    private $hoverText = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentAssetType $icon
     */
    private $icon = null;

    /**
     * @property string $iconId
     */
    private $iconId = null;

    /**
     * @property bool $isDeleted
     */
    private $isDeleted = null;

    /**
     * @property bool $isProtected
     */
    private $isProtected = null;

    /**
     * @property string $language
     */
    private $language = null;

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
     * @property string $masterLabel
     */
    private $masterLabel = null;

    /**
     * @property string $namespacePrefix
     */
    private $namespacePrefix = null;

    /**
     * @property string $renderComponentEnumOrId
     */
    private $renderComponentEnumOrId = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property string $type
     */
    private $type = null;

    /**
     * Gets as compositionComponentEnumOrId
     *
     * @return string
     */
    public function getCompositionComponentEnumOrId()
    {
        return $this->compositionComponentEnumOrId;
    }

    /**
     * Sets a new compositionComponentEnumOrId
     *
     * @param string $compositionComponentEnumOrId
     * @return self
     */
    public function setCompositionComponentEnumOrId($compositionComponentEnumOrId)
    {
        $this->compositionComponentEnumOrId = $compositionComponentEnumOrId;
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
     * Gets as extensionName
     *
     * @return string
     */
    public function getExtensionName()
    {
        return $this->extensionName;
    }

    /**
     * Sets a new extensionName
     *
     * @param string $extensionName
     * @return self
     */
    public function setExtensionName($extensionName)
    {
        $this->extensionName = $extensionName;
        return $this;
    }

    /**
     * Gets as headerText
     *
     * @return string
     */
    public function getHeaderText()
    {
        return $this->headerText;
    }

    /**
     * Sets a new headerText
     *
     * @param string $headerText
     * @return self
     */
    public function setHeaderText($headerText)
    {
        $this->headerText = $headerText;
        return $this;
    }

    /**
     * Gets as hoverText
     *
     * @return string
     */
    public function getHoverText()
    {
        return $this->hoverText;
    }

    /**
     * Sets a new hoverText
     *
     * @param string $hoverText
     * @return self
     */
    public function setHoverText($hoverText)
    {
        $this->hoverText = $hoverText;
        return $this;
    }

    /**
     * Gets as icon
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentAssetType
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Sets a new icon
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentAssetType $icon
     * @return self
     */
    public function setIcon(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentAssetType $icon)
    {
        $this->icon = $icon;
        return $this;
    }

    /**
     * Gets as iconId
     *
     * @return string
     */
    public function getIconId()
    {
        return $this->iconId;
    }

    /**
     * Sets a new iconId
     *
     * @param string $iconId
     * @return self
     */
    public function setIconId($iconId)
    {
        $this->iconId = $iconId;
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
     * Gets as language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * @param string $language
     * @return self
     */
    public function setLanguage($language)
    {
        $this->language = $language;
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
     * Gets as renderComponentEnumOrId
     *
     * @return string
     */
    public function getRenderComponentEnumOrId()
    {
        return $this->renderComponentEnumOrId;
    }

    /**
     * Sets a new renderComponentEnumOrId
     *
     * @param string $renderComponentEnumOrId
     * @return self
     */
    public function setRenderComponentEnumOrId($renderComponentEnumOrId)
    {
        $this->renderComponentEnumOrId = $renderComponentEnumOrId;
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

