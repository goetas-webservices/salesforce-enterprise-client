<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing ApexPageType
 *
 *
 * XSD Type: ApexPage
 */
class ApexPageType extends SObjectType
{

    /**
     * @property float $apiVersion
     */
    private $apiVersion = null;

    /**
     * @property string $controllerKey
     */
    private $controllerKey = null;

    /**
     * @property string $controllerType
     */
    private $controllerType = null;

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
     * @property bool $isAvailableInTouch
     */
    private $isAvailableInTouch = null;

    /**
     * @property bool $isConfirmationTokenRequired
     */
    private $isConfirmationTokenRequired = null;

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
     * @property string $markup
     */
    private $markup = null;

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
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $setupEntityAccessItems
     */
    private $setupEntityAccessItems = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * Gets as apiVersion
     *
     * @return float
     */
    public function getApiVersion()
    {
        return $this->apiVersion;
    }

    /**
     * Sets a new apiVersion
     *
     * @param float $apiVersion
     * @return self
     */
    public function setApiVersion($apiVersion)
    {
        $this->apiVersion = $apiVersion;
        return $this;
    }

    /**
     * Gets as controllerKey
     *
     * @return string
     */
    public function getControllerKey()
    {
        return $this->controllerKey;
    }

    /**
     * Sets a new controllerKey
     *
     * @param string $controllerKey
     * @return self
     */
    public function setControllerKey($controllerKey)
    {
        $this->controllerKey = $controllerKey;
        return $this;
    }

    /**
     * Gets as controllerType
     *
     * @return string
     */
    public function getControllerType()
    {
        return $this->controllerType;
    }

    /**
     * Sets a new controllerType
     *
     * @param string $controllerType
     * @return self
     */
    public function setControllerType($controllerType)
    {
        $this->controllerType = $controllerType;
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
     * Gets as isAvailableInTouch
     *
     * @return bool
     */
    public function getIsAvailableInTouch()
    {
        return $this->isAvailableInTouch;
    }

    /**
     * Sets a new isAvailableInTouch
     *
     * @param bool $isAvailableInTouch
     * @return self
     */
    public function setIsAvailableInTouch($isAvailableInTouch)
    {
        $this->isAvailableInTouch = $isAvailableInTouch;
        return $this;
    }

    /**
     * Gets as isConfirmationTokenRequired
     *
     * @return bool
     */
    public function getIsConfirmationTokenRequired()
    {
        return $this->isConfirmationTokenRequired;
    }

    /**
     * Sets a new isConfirmationTokenRequired
     *
     * @param bool $isConfirmationTokenRequired
     * @return self
     */
    public function setIsConfirmationTokenRequired($isConfirmationTokenRequired)
    {
        $this->isConfirmationTokenRequired = $isConfirmationTokenRequired;
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
     * Gets as markup
     *
     * @return string
     */
    public function getMarkup()
    {
        return $this->markup;
    }

    /**
     * Sets a new markup
     *
     * @param string $markup
     * @return self
     */
    public function setMarkup($markup)
    {
        $this->markup = $markup;
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
     * Gets as setupEntityAccessItems
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getSetupEntityAccessItems()
    {
        return $this->setupEntityAccessItems;
    }

    /**
     * Sets a new setupEntityAccessItems
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $setupEntityAccessItems
     * @return self
     */
    public function setSetupEntityAccessItems(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $setupEntityAccessItems)
    {
        $this->setupEntityAccessItems = $setupEntityAccessItems;
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

