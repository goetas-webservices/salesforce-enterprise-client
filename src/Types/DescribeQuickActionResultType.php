<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribeQuickActionResultType
 *
 *
 * XSD Type: DescribeQuickActionResult
 */
class DescribeQuickActionResultType
{

    /**
     * @property string $accessLevelRequired
     */
    private $accessLevelRequired = null;

    /**
     * @property string $actionEnumOrId
     */
    private $actionEnumOrId = null;

    /**
     * @property string $canvasApplicationId
     */
    private $canvasApplicationId = null;

    /**
     * @property string $canvasApplicationName
     */
    private $canvasApplicationName = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeColorType[] $colors
     */
    private $colors = [
        
    ];

    /**
     * @property string $contextSobjectType
     */
    private $contextSobjectType = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeQuickActionDefaultValueType[] $defaultValues
     */
    private $defaultValues = [
        
    ];

    /**
     * @property string $flowDevName
     */
    private $flowDevName = null;

    /**
     * @property string $flowRecordIdVar
     */
    private $flowRecordIdVar = null;

    /**
     * @property int $height
     */
    private $height = null;

    /**
     * @property string $iconName
     */
    private $iconName = null;

    /**
     * @property string $iconUrl
     */
    private $iconUrl = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeIconType[] $icons
     */
    private $icons = [
        
    ];

    /**
     * @property string $label
     */
    private $label = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutSectionType $layout
     */
    private $layout = null;

    /**
     * @property string $lightningComponentBundleId
     */
    private $lightningComponentBundleId = null;

    /**
     * @property string $lightningComponentBundleName
     */
    private $lightningComponentBundleName = null;

    /**
     * @property string $lightningComponentQualifiedName
     */
    private $lightningComponentQualifiedName = null;

    /**
     * @property string $miniIconUrl
     */
    private $miniIconUrl = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property bool $showQuickActionLcHeader
     */
    private $showQuickActionLcHeader = null;

    /**
     * @property bool $showQuickActionVfHeader
     */
    private $showQuickActionVfHeader = null;

    /**
     * @property string $targetParentField
     */
    private $targetParentField = null;

    /**
     * @property string $targetRecordTypeId
     */
    private $targetRecordTypeId = null;

    /**
     * @property string $targetSobjectType
     */
    private $targetSobjectType = null;

    /**
     * @property string $type
     */
    private $type = null;

    /**
     * @property string $visualforcePageName
     */
    private $visualforcePageName = null;

    /**
     * @property string $visualforcePageUrl
     */
    private $visualforcePageUrl = null;

    /**
     * @property int $width
     */
    private $width = null;

    /**
     * Gets as accessLevelRequired
     *
     * @return string
     */
    public function getAccessLevelRequired()
    {
        return $this->accessLevelRequired;
    }

    /**
     * Sets a new accessLevelRequired
     *
     * @param string $accessLevelRequired
     * @return self
     */
    public function setAccessLevelRequired($accessLevelRequired)
    {
        $this->accessLevelRequired = $accessLevelRequired;
        return $this;
    }

    /**
     * Gets as actionEnumOrId
     *
     * @return string
     */
    public function getActionEnumOrId()
    {
        return $this->actionEnumOrId;
    }

    /**
     * Sets a new actionEnumOrId
     *
     * @param string $actionEnumOrId
     * @return self
     */
    public function setActionEnumOrId($actionEnumOrId)
    {
        $this->actionEnumOrId = $actionEnumOrId;
        return $this;
    }

    /**
     * Gets as canvasApplicationId
     *
     * @return string
     */
    public function getCanvasApplicationId()
    {
        return $this->canvasApplicationId;
    }

    /**
     * Sets a new canvasApplicationId
     *
     * @param string $canvasApplicationId
     * @return self
     */
    public function setCanvasApplicationId($canvasApplicationId)
    {
        $this->canvasApplicationId = $canvasApplicationId;
        return $this;
    }

    /**
     * Gets as canvasApplicationName
     *
     * @return string
     */
    public function getCanvasApplicationName()
    {
        return $this->canvasApplicationName;
    }

    /**
     * Sets a new canvasApplicationName
     *
     * @param string $canvasApplicationName
     * @return self
     */
    public function setCanvasApplicationName($canvasApplicationName)
    {
        $this->canvasApplicationName = $canvasApplicationName;
        return $this;
    }

    /**
     * Adds as colors
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeColorType $colors
     */
    public function addToColors(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeColorType $colors)
    {
        $this->colors[] = $colors;
        return $this;
    }

    /**
     * isset colors
     *
     * @param int|string $index
     * @return bool
     */
    public function issetColors($index)
    {
        return isset($this->colors[$index]);
    }

    /**
     * unset colors
     *
     * @param int|string $index
     * @return void
     */
    public function unsetColors($index)
    {
        unset($this->colors[$index]);
    }

    /**
     * Gets as colors
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeColorType[]
     */
    public function getColors()
    {
        return $this->colors;
    }

    /**
     * Sets a new colors
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeColorType[] $colors
     * @return self
     */
    public function setColors(array $colors)
    {
        $this->colors = $colors;
        return $this;
    }

    /**
     * Gets as contextSobjectType
     *
     * @return string
     */
    public function getContextSobjectType()
    {
        return $this->contextSobjectType;
    }

    /**
     * Sets a new contextSobjectType
     *
     * @param string $contextSobjectType
     * @return self
     */
    public function setContextSobjectType($contextSobjectType)
    {
        $this->contextSobjectType = $contextSobjectType;
        return $this;
    }

    /**
     * Adds as defaultValues
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeQuickActionDefaultValueType $defaultValues
     */
    public function addToDefaultValues(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeQuickActionDefaultValueType $defaultValues)
    {
        $this->defaultValues[] = $defaultValues;
        return $this;
    }

    /**
     * isset defaultValues
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDefaultValues($index)
    {
        return isset($this->defaultValues[$index]);
    }

    /**
     * unset defaultValues
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDefaultValues($index)
    {
        unset($this->defaultValues[$index]);
    }

    /**
     * Gets as defaultValues
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeQuickActionDefaultValueType[]
     */
    public function getDefaultValues()
    {
        return $this->defaultValues;
    }

    /**
     * Sets a new defaultValues
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeQuickActionDefaultValueType[] $defaultValues
     * @return self
     */
    public function setDefaultValues(array $defaultValues)
    {
        $this->defaultValues = $defaultValues;
        return $this;
    }

    /**
     * Gets as flowDevName
     *
     * @return string
     */
    public function getFlowDevName()
    {
        return $this->flowDevName;
    }

    /**
     * Sets a new flowDevName
     *
     * @param string $flowDevName
     * @return self
     */
    public function setFlowDevName($flowDevName)
    {
        $this->flowDevName = $flowDevName;
        return $this;
    }

    /**
     * Gets as flowRecordIdVar
     *
     * @return string
     */
    public function getFlowRecordIdVar()
    {
        return $this->flowRecordIdVar;
    }

    /**
     * Sets a new flowRecordIdVar
     *
     * @param string $flowRecordIdVar
     * @return self
     */
    public function setFlowRecordIdVar($flowRecordIdVar)
    {
        $this->flowRecordIdVar = $flowRecordIdVar;
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
     * Gets as iconName
     *
     * @return string
     */
    public function getIconName()
    {
        return $this->iconName;
    }

    /**
     * Sets a new iconName
     *
     * @param string $iconName
     * @return self
     */
    public function setIconName($iconName)
    {
        $this->iconName = $iconName;
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
     * Adds as icons
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeIconType $icons
     */
    public function addToIcons(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeIconType $icons)
    {
        $this->icons[] = $icons;
        return $this;
    }

    /**
     * isset icons
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIcons($index)
    {
        return isset($this->icons[$index]);
    }

    /**
     * unset icons
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIcons($index)
    {
        unset($this->icons[$index]);
    }

    /**
     * Gets as icons
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeIconType[]
     */
    public function getIcons()
    {
        return $this->icons;
    }

    /**
     * Sets a new icons
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeIconType[] $icons
     * @return self
     */
    public function setIcons(array $icons)
    {
        $this->icons = $icons;
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
     * Gets as layout
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutSectionType
     */
    public function getLayout()
    {
        return $this->layout;
    }

    /**
     * Sets a new layout
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutSectionType $layout
     * @return self
     */
    public function setLayout(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutSectionType $layout)
    {
        $this->layout = $layout;
        return $this;
    }

    /**
     * Gets as lightningComponentBundleId
     *
     * @return string
     */
    public function getLightningComponentBundleId()
    {
        return $this->lightningComponentBundleId;
    }

    /**
     * Sets a new lightningComponentBundleId
     *
     * @param string $lightningComponentBundleId
     * @return self
     */
    public function setLightningComponentBundleId($lightningComponentBundleId)
    {
        $this->lightningComponentBundleId = $lightningComponentBundleId;
        return $this;
    }

    /**
     * Gets as lightningComponentBundleName
     *
     * @return string
     */
    public function getLightningComponentBundleName()
    {
        return $this->lightningComponentBundleName;
    }

    /**
     * Sets a new lightningComponentBundleName
     *
     * @param string $lightningComponentBundleName
     * @return self
     */
    public function setLightningComponentBundleName($lightningComponentBundleName)
    {
        $this->lightningComponentBundleName = $lightningComponentBundleName;
        return $this;
    }

    /**
     * Gets as lightningComponentQualifiedName
     *
     * @return string
     */
    public function getLightningComponentQualifiedName()
    {
        return $this->lightningComponentQualifiedName;
    }

    /**
     * Sets a new lightningComponentQualifiedName
     *
     * @param string $lightningComponentQualifiedName
     * @return self
     */
    public function setLightningComponentQualifiedName($lightningComponentQualifiedName)
    {
        $this->lightningComponentQualifiedName = $lightningComponentQualifiedName;
        return $this;
    }

    /**
     * Gets as miniIconUrl
     *
     * @return string
     */
    public function getMiniIconUrl()
    {
        return $this->miniIconUrl;
    }

    /**
     * Sets a new miniIconUrl
     *
     * @param string $miniIconUrl
     * @return self
     */
    public function setMiniIconUrl($miniIconUrl)
    {
        $this->miniIconUrl = $miniIconUrl;
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
     * Gets as showQuickActionLcHeader
     *
     * @return bool
     */
    public function getShowQuickActionLcHeader()
    {
        return $this->showQuickActionLcHeader;
    }

    /**
     * Sets a new showQuickActionLcHeader
     *
     * @param bool $showQuickActionLcHeader
     * @return self
     */
    public function setShowQuickActionLcHeader($showQuickActionLcHeader)
    {
        $this->showQuickActionLcHeader = $showQuickActionLcHeader;
        return $this;
    }

    /**
     * Gets as showQuickActionVfHeader
     *
     * @return bool
     */
    public function getShowQuickActionVfHeader()
    {
        return $this->showQuickActionVfHeader;
    }

    /**
     * Sets a new showQuickActionVfHeader
     *
     * @param bool $showQuickActionVfHeader
     * @return self
     */
    public function setShowQuickActionVfHeader($showQuickActionVfHeader)
    {
        $this->showQuickActionVfHeader = $showQuickActionVfHeader;
        return $this;
    }

    /**
     * Gets as targetParentField
     *
     * @return string
     */
    public function getTargetParentField()
    {
        return $this->targetParentField;
    }

    /**
     * Sets a new targetParentField
     *
     * @param string $targetParentField
     * @return self
     */
    public function setTargetParentField($targetParentField)
    {
        $this->targetParentField = $targetParentField;
        return $this;
    }

    /**
     * Gets as targetRecordTypeId
     *
     * @return string
     */
    public function getTargetRecordTypeId()
    {
        return $this->targetRecordTypeId;
    }

    /**
     * Sets a new targetRecordTypeId
     *
     * @param string $targetRecordTypeId
     * @return self
     */
    public function setTargetRecordTypeId($targetRecordTypeId)
    {
        $this->targetRecordTypeId = $targetRecordTypeId;
        return $this;
    }

    /**
     * Gets as targetSobjectType
     *
     * @return string
     */
    public function getTargetSobjectType()
    {
        return $this->targetSobjectType;
    }

    /**
     * Sets a new targetSobjectType
     *
     * @param string $targetSobjectType
     * @return self
     */
    public function setTargetSobjectType($targetSobjectType)
    {
        $this->targetSobjectType = $targetSobjectType;
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
     * Gets as visualforcePageName
     *
     * @return string
     */
    public function getVisualforcePageName()
    {
        return $this->visualforcePageName;
    }

    /**
     * Sets a new visualforcePageName
     *
     * @param string $visualforcePageName
     * @return self
     */
    public function setVisualforcePageName($visualforcePageName)
    {
        $this->visualforcePageName = $visualforcePageName;
        return $this;
    }

    /**
     * Gets as visualforcePageUrl
     *
     * @return string
     */
    public function getVisualforcePageUrl()
    {
        return $this->visualforcePageUrl;
    }

    /**
     * Sets a new visualforcePageUrl
     *
     * @param string $visualforcePageUrl
     * @return self
     */
    public function setVisualforcePageUrl($visualforcePageUrl)
    {
        $this->visualforcePageUrl = $visualforcePageUrl;
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

