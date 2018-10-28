<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribeLayoutType
 *
 *
 * XSD Type: DescribeLayout
 */
class DescribeLayoutType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutButtonType[] $buttonLayoutSection
     */
    private $buttonLayoutSection = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutSectionType[] $detailLayoutSections
     */
    private $detailLayoutSections = [
        
    ];

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutSectionType[] $editLayoutSections
     */
    private $editLayoutSections = [
        
    ];

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutFeedFilterType[] $feedView
     */
    private $feedView = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutSectionType $highlightsPanelLayoutSection
     */
    private $highlightsPanelLayoutSection = null;

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeQuickActionListItemResultType[] $quickActionList
     */
    private $quickActionList = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeRelatedContentItemType[] $relatedContent
     */
    private $relatedContent = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\RelatedListType[] $relatedLists
     */
    private $relatedLists = [
        
    ];

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutSaveOptionType[] $saveOptions
     */
    private $saveOptions = [
        
    ];

    /**
     * Adds as detailButtons
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutButtonType $detailButtons
     */
    public function addToButtonLayoutSection(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutButtonType $detailButtons)
    {
        $this->buttonLayoutSection[] = $detailButtons;
        return $this;
    }

    /**
     * isset buttonLayoutSection
     *
     * @param int|string $index
     * @return bool
     */
    public function issetButtonLayoutSection($index)
    {
        return isset($this->buttonLayoutSection[$index]);
    }

    /**
     * unset buttonLayoutSection
     *
     * @param int|string $index
     * @return void
     */
    public function unsetButtonLayoutSection($index)
    {
        unset($this->buttonLayoutSection[$index]);
    }

    /**
     * Gets as buttonLayoutSection
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutButtonType[]
     */
    public function getButtonLayoutSection()
    {
        return $this->buttonLayoutSection;
    }

    /**
     * Sets a new buttonLayoutSection
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutButtonType[] $buttonLayoutSection
     * @return self
     */
    public function setButtonLayoutSection(array $buttonLayoutSection)
    {
        $this->buttonLayoutSection = $buttonLayoutSection;
        return $this;
    }

    /**
     * Adds as detailLayoutSections
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutSectionType $detailLayoutSections
     */
    public function addToDetailLayoutSections(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutSectionType $detailLayoutSections)
    {
        $this->detailLayoutSections[] = $detailLayoutSections;
        return $this;
    }

    /**
     * isset detailLayoutSections
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDetailLayoutSections($index)
    {
        return isset($this->detailLayoutSections[$index]);
    }

    /**
     * unset detailLayoutSections
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDetailLayoutSections($index)
    {
        unset($this->detailLayoutSections[$index]);
    }

    /**
     * Gets as detailLayoutSections
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutSectionType[]
     */
    public function getDetailLayoutSections()
    {
        return $this->detailLayoutSections;
    }

    /**
     * Sets a new detailLayoutSections
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutSectionType[] $detailLayoutSections
     * @return self
     */
    public function setDetailLayoutSections(array $detailLayoutSections)
    {
        $this->detailLayoutSections = $detailLayoutSections;
        return $this;
    }

    /**
     * Adds as editLayoutSections
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutSectionType $editLayoutSections
     */
    public function addToEditLayoutSections(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutSectionType $editLayoutSections)
    {
        $this->editLayoutSections[] = $editLayoutSections;
        return $this;
    }

    /**
     * isset editLayoutSections
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEditLayoutSections($index)
    {
        return isset($this->editLayoutSections[$index]);
    }

    /**
     * unset editLayoutSections
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEditLayoutSections($index)
    {
        unset($this->editLayoutSections[$index]);
    }

    /**
     * Gets as editLayoutSections
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutSectionType[]
     */
    public function getEditLayoutSections()
    {
        return $this->editLayoutSections;
    }

    /**
     * Sets a new editLayoutSections
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutSectionType[] $editLayoutSections
     * @return self
     */
    public function setEditLayoutSections(array $editLayoutSections)
    {
        $this->editLayoutSections = $editLayoutSections;
        return $this;
    }

    /**
     * Adds as feedFilters
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutFeedFilterType $feedFilters
     */
    public function addToFeedView(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutFeedFilterType $feedFilters)
    {
        $this->feedView[] = $feedFilters;
        return $this;
    }

    /**
     * isset feedView
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFeedView($index)
    {
        return isset($this->feedView[$index]);
    }

    /**
     * unset feedView
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFeedView($index)
    {
        unset($this->feedView[$index]);
    }

    /**
     * Gets as feedView
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutFeedFilterType[]
     */
    public function getFeedView()
    {
        return $this->feedView;
    }

    /**
     * Sets a new feedView
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutFeedFilterType[] $feedView
     * @return self
     */
    public function setFeedView(array $feedView)
    {
        $this->feedView = $feedView;
        return $this;
    }

    /**
     * Gets as highlightsPanelLayoutSection
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutSectionType
     */
    public function getHighlightsPanelLayoutSection()
    {
        return $this->highlightsPanelLayoutSection;
    }

    /**
     * Sets a new highlightsPanelLayoutSection
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutSectionType $highlightsPanelLayoutSection
     * @return self
     */
    public function setHighlightsPanelLayoutSection(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutSectionType $highlightsPanelLayoutSection)
    {
        $this->highlightsPanelLayoutSection = $highlightsPanelLayoutSection;
        return $this;
    }

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Adds as quickActionListItems
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeQuickActionListItemResultType $quickActionListItems
     */
    public function addToQuickActionList(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeQuickActionListItemResultType $quickActionListItems)
    {
        $this->quickActionList[] = $quickActionListItems;
        return $this;
    }

    /**
     * isset quickActionList
     *
     * @param int|string $index
     * @return bool
     */
    public function issetQuickActionList($index)
    {
        return isset($this->quickActionList[$index]);
    }

    /**
     * unset quickActionList
     *
     * @param int|string $index
     * @return void
     */
    public function unsetQuickActionList($index)
    {
        unset($this->quickActionList[$index]);
    }

    /**
     * Gets as quickActionList
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeQuickActionListItemResultType[]
     */
    public function getQuickActionList()
    {
        return $this->quickActionList;
    }

    /**
     * Sets a new quickActionList
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeQuickActionListItemResultType[] $quickActionList
     * @return self
     */
    public function setQuickActionList(array $quickActionList)
    {
        $this->quickActionList = $quickActionList;
        return $this;
    }

    /**
     * Adds as relatedContentItems
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeRelatedContentItemType $relatedContentItems
     */
    public function addToRelatedContent(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeRelatedContentItemType $relatedContentItems)
    {
        $this->relatedContent[] = $relatedContentItems;
        return $this;
    }

    /**
     * isset relatedContent
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelatedContent($index)
    {
        return isset($this->relatedContent[$index]);
    }

    /**
     * unset relatedContent
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelatedContent($index)
    {
        unset($this->relatedContent[$index]);
    }

    /**
     * Gets as relatedContent
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeRelatedContentItemType[]
     */
    public function getRelatedContent()
    {
        return $this->relatedContent;
    }

    /**
     * Sets a new relatedContent
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeRelatedContentItemType[] $relatedContent
     * @return self
     */
    public function setRelatedContent(array $relatedContent)
    {
        $this->relatedContent = $relatedContent;
        return $this;
    }

    /**
     * Adds as relatedLists
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\RelatedListType $relatedLists
     */
    public function addToRelatedLists(\GoetasWebservices\Client\SalesforceEnterprise\Types\RelatedListType $relatedLists)
    {
        $this->relatedLists[] = $relatedLists;
        return $this;
    }

    /**
     * isset relatedLists
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelatedLists($index)
    {
        return isset($this->relatedLists[$index]);
    }

    /**
     * unset relatedLists
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelatedLists($index)
    {
        unset($this->relatedLists[$index]);
    }

    /**
     * Gets as relatedLists
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\RelatedListType[]
     */
    public function getRelatedLists()
    {
        return $this->relatedLists;
    }

    /**
     * Sets a new relatedLists
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\RelatedListType[] $relatedLists
     * @return self
     */
    public function setRelatedLists(array $relatedLists)
    {
        $this->relatedLists = $relatedLists;
        return $this;
    }

    /**
     * Adds as saveOptions
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutSaveOptionType $saveOptions
     */
    public function addToSaveOptions(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutSaveOptionType $saveOptions)
    {
        $this->saveOptions[] = $saveOptions;
        return $this;
    }

    /**
     * isset saveOptions
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSaveOptions($index)
    {
        return isset($this->saveOptions[$index]);
    }

    /**
     * unset saveOptions
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSaveOptions($index)
    {
        unset($this->saveOptions[$index]);
    }

    /**
     * Gets as saveOptions
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutSaveOptionType[]
     */
    public function getSaveOptions()
    {
        return $this->saveOptions;
    }

    /**
     * Sets a new saveOptions
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutSaveOptionType[] $saveOptions
     * @return self
     */
    public function setSaveOptions(array $saveOptions)
    {
        $this->saveOptions = $saveOptions;
        return $this;
    }


}

