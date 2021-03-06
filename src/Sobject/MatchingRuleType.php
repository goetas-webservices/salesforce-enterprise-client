<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing MatchingRuleType
 *
 *
 * XSD Type: MatchingRule
 */
class MatchingRuleType extends SObjectType
{

    /**
     * @property string $booleanFilter
     */
    private $booleanFilter = null;

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
     * @property bool $isDeleted
     */
    private $isDeleted = null;

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
     * @property string $matchEngine
     */
    private $matchEngine = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $matchingRuleItems
     */
    private $matchingRuleItems = null;

    /**
     * @property string $namespacePrefix
     */
    private $namespacePrefix = null;

    /**
     * @property string $ruleStatus
     */
    private $ruleStatus = null;

    /**
     * @property string $sobjectSubtype
     */
    private $sobjectSubtype = null;

    /**
     * @property string $sobjectType
     */
    private $sobjectType = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * Gets as booleanFilter
     *
     * @return string
     */
    public function getBooleanFilter()
    {
        return $this->booleanFilter;
    }

    /**
     * Sets a new booleanFilter
     *
     * @param string $booleanFilter
     * @return self
     */
    public function setBooleanFilter($booleanFilter)
    {
        $this->booleanFilter = $booleanFilter;
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
     * Gets as matchEngine
     *
     * @return string
     */
    public function getMatchEngine()
    {
        return $this->matchEngine;
    }

    /**
     * Sets a new matchEngine
     *
     * @param string $matchEngine
     * @return self
     */
    public function setMatchEngine($matchEngine)
    {
        $this->matchEngine = $matchEngine;
        return $this;
    }

    /**
     * Gets as matchingRuleItems
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getMatchingRuleItems()
    {
        return $this->matchingRuleItems;
    }

    /**
     * Sets a new matchingRuleItems
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $matchingRuleItems
     * @return self
     */
    public function setMatchingRuleItems(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $matchingRuleItems)
    {
        $this->matchingRuleItems = $matchingRuleItems;
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
     * Gets as ruleStatus
     *
     * @return string
     */
    public function getRuleStatus()
    {
        return $this->ruleStatus;
    }

    /**
     * Sets a new ruleStatus
     *
     * @param string $ruleStatus
     * @return self
     */
    public function setRuleStatus($ruleStatus)
    {
        $this->ruleStatus = $ruleStatus;
        return $this;
    }

    /**
     * Gets as sobjectSubtype
     *
     * @return string
     */
    public function getSobjectSubtype()
    {
        return $this->sobjectSubtype;
    }

    /**
     * Sets a new sobjectSubtype
     *
     * @param string $sobjectSubtype
     * @return self
     */
    public function setSobjectSubtype($sobjectSubtype)
    {
        $this->sobjectSubtype = $sobjectSubtype;
        return $this;
    }

    /**
     * Gets as sobjectType
     *
     * @return string
     */
    public function getSobjectType()
    {
        return $this->sobjectType;
    }

    /**
     * Sets a new sobjectType
     *
     * @param string $sobjectType
     * @return self
     */
    public function setSobjectType($sobjectType)
    {
        $this->sobjectType = $sobjectType;
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


}

