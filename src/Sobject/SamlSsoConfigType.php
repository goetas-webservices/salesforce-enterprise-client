<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing SamlSsoConfigType
 *
 *
 * XSD Type: SamlSsoConfig
 */
class SamlSsoConfigType extends SObjectType
{

    /**
     * @property string $attributeFormat
     */
    private $attributeFormat = null;

    /**
     * @property string $attributeName
     */
    private $attributeName = null;

    /**
     * @property string $audience
     */
    private $audience = null;

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
     * @property string $developerName
     */
    private $developerName = null;

    /**
     * @property string $errorUrl
     */
    private $errorUrl = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $executionUser
     */
    private $executionUser = null;

    /**
     * @property string $executionUserId
     */
    private $executionUserId = null;

    /**
     * @property string $identityLocation
     */
    private $identityLocation = null;

    /**
     * @property string $identityMapping
     */
    private $identityMapping = null;

    /**
     * @property bool $isDeleted
     */
    private $isDeleted = null;

    /**
     * @property string $issuer
     */
    private $issuer = null;

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
     * @property string $loginUrl
     */
    private $loginUrl = null;

    /**
     * @property string $logoutUrl
     */
    private $logoutUrl = null;

    /**
     * @property string $masterLabel
     */
    private $masterLabel = null;

    /**
     * @property string $namespacePrefix
     */
    private $namespacePrefix = null;

    /**
     * @property bool $optionsSpInitBinding
     */
    private $optionsSpInitBinding = null;

    /**
     * @property bool $optionsUserProvisioning
     */
    private $optionsUserProvisioning = null;

    /**
     * @property string $requestSignatureMethod
     */
    private $requestSignatureMethod = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ApexClassType $samlJitHandler
     */
    private $samlJitHandler = null;

    /**
     * @property string $samlJitHandlerId
     */
    private $samlJitHandlerId = null;

    /**
     * @property string $singleLogoutBinding
     */
    private $singleLogoutBinding = null;

    /**
     * @property string $singleLogoutUrl
     */
    private $singleLogoutUrl = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property string $validationCert
     */
    private $validationCert = null;

    /**
     * @property string $version
     */
    private $version = null;

    /**
     * Gets as attributeFormat
     *
     * @return string
     */
    public function getAttributeFormat()
    {
        return $this->attributeFormat;
    }

    /**
     * Sets a new attributeFormat
     *
     * @param string $attributeFormat
     * @return self
     */
    public function setAttributeFormat($attributeFormat)
    {
        $this->attributeFormat = $attributeFormat;
        return $this;
    }

    /**
     * Gets as attributeName
     *
     * @return string
     */
    public function getAttributeName()
    {
        return $this->attributeName;
    }

    /**
     * Sets a new attributeName
     *
     * @param string $attributeName
     * @return self
     */
    public function setAttributeName($attributeName)
    {
        $this->attributeName = $attributeName;
        return $this;
    }

    /**
     * Gets as audience
     *
     * @return string
     */
    public function getAudience()
    {
        return $this->audience;
    }

    /**
     * Sets a new audience
     *
     * @param string $audience
     * @return self
     */
    public function setAudience($audience)
    {
        $this->audience = $audience;
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
     * Gets as errorUrl
     *
     * @return string
     */
    public function getErrorUrl()
    {
        return $this->errorUrl;
    }

    /**
     * Sets a new errorUrl
     *
     * @param string $errorUrl
     * @return self
     */
    public function setErrorUrl($errorUrl)
    {
        $this->errorUrl = $errorUrl;
        return $this;
    }

    /**
     * Gets as executionUser
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType
     */
    public function getExecutionUser()
    {
        return $this->executionUser;
    }

    /**
     * Sets a new executionUser
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $executionUser
     * @return self
     */
    public function setExecutionUser(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $executionUser)
    {
        $this->executionUser = $executionUser;
        return $this;
    }

    /**
     * Gets as executionUserId
     *
     * @return string
     */
    public function getExecutionUserId()
    {
        return $this->executionUserId;
    }

    /**
     * Sets a new executionUserId
     *
     * @param string $executionUserId
     * @return self
     */
    public function setExecutionUserId($executionUserId)
    {
        $this->executionUserId = $executionUserId;
        return $this;
    }

    /**
     * Gets as identityLocation
     *
     * @return string
     */
    public function getIdentityLocation()
    {
        return $this->identityLocation;
    }

    /**
     * Sets a new identityLocation
     *
     * @param string $identityLocation
     * @return self
     */
    public function setIdentityLocation($identityLocation)
    {
        $this->identityLocation = $identityLocation;
        return $this;
    }

    /**
     * Gets as identityMapping
     *
     * @return string
     */
    public function getIdentityMapping()
    {
        return $this->identityMapping;
    }

    /**
     * Sets a new identityMapping
     *
     * @param string $identityMapping
     * @return self
     */
    public function setIdentityMapping($identityMapping)
    {
        $this->identityMapping = $identityMapping;
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
     * Gets as issuer
     *
     * @return string
     */
    public function getIssuer()
    {
        return $this->issuer;
    }

    /**
     * Sets a new issuer
     *
     * @param string $issuer
     * @return self
     */
    public function setIssuer($issuer)
    {
        $this->issuer = $issuer;
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
     * Gets as loginUrl
     *
     * @return string
     */
    public function getLoginUrl()
    {
        return $this->loginUrl;
    }

    /**
     * Sets a new loginUrl
     *
     * @param string $loginUrl
     * @return self
     */
    public function setLoginUrl($loginUrl)
    {
        $this->loginUrl = $loginUrl;
        return $this;
    }

    /**
     * Gets as logoutUrl
     *
     * @return string
     */
    public function getLogoutUrl()
    {
        return $this->logoutUrl;
    }

    /**
     * Sets a new logoutUrl
     *
     * @param string $logoutUrl
     * @return self
     */
    public function setLogoutUrl($logoutUrl)
    {
        $this->logoutUrl = $logoutUrl;
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
     * Gets as optionsSpInitBinding
     *
     * @return bool
     */
    public function getOptionsSpInitBinding()
    {
        return $this->optionsSpInitBinding;
    }

    /**
     * Sets a new optionsSpInitBinding
     *
     * @param bool $optionsSpInitBinding
     * @return self
     */
    public function setOptionsSpInitBinding($optionsSpInitBinding)
    {
        $this->optionsSpInitBinding = $optionsSpInitBinding;
        return $this;
    }

    /**
     * Gets as optionsUserProvisioning
     *
     * @return bool
     */
    public function getOptionsUserProvisioning()
    {
        return $this->optionsUserProvisioning;
    }

    /**
     * Sets a new optionsUserProvisioning
     *
     * @param bool $optionsUserProvisioning
     * @return self
     */
    public function setOptionsUserProvisioning($optionsUserProvisioning)
    {
        $this->optionsUserProvisioning = $optionsUserProvisioning;
        return $this;
    }

    /**
     * Gets as requestSignatureMethod
     *
     * @return string
     */
    public function getRequestSignatureMethod()
    {
        return $this->requestSignatureMethod;
    }

    /**
     * Sets a new requestSignatureMethod
     *
     * @param string $requestSignatureMethod
     * @return self
     */
    public function setRequestSignatureMethod($requestSignatureMethod)
    {
        $this->requestSignatureMethod = $requestSignatureMethod;
        return $this;
    }

    /**
     * Gets as samlJitHandler
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ApexClassType
     */
    public function getSamlJitHandler()
    {
        return $this->samlJitHandler;
    }

    /**
     * Sets a new samlJitHandler
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ApexClassType $samlJitHandler
     * @return self
     */
    public function setSamlJitHandler(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\ApexClassType $samlJitHandler)
    {
        $this->samlJitHandler = $samlJitHandler;
        return $this;
    }

    /**
     * Gets as samlJitHandlerId
     *
     * @return string
     */
    public function getSamlJitHandlerId()
    {
        return $this->samlJitHandlerId;
    }

    /**
     * Sets a new samlJitHandlerId
     *
     * @param string $samlJitHandlerId
     * @return self
     */
    public function setSamlJitHandlerId($samlJitHandlerId)
    {
        $this->samlJitHandlerId = $samlJitHandlerId;
        return $this;
    }

    /**
     * Gets as singleLogoutBinding
     *
     * @return string
     */
    public function getSingleLogoutBinding()
    {
        return $this->singleLogoutBinding;
    }

    /**
     * Sets a new singleLogoutBinding
     *
     * @param string $singleLogoutBinding
     * @return self
     */
    public function setSingleLogoutBinding($singleLogoutBinding)
    {
        $this->singleLogoutBinding = $singleLogoutBinding;
        return $this;
    }

    /**
     * Gets as singleLogoutUrl
     *
     * @return string
     */
    public function getSingleLogoutUrl()
    {
        return $this->singleLogoutUrl;
    }

    /**
     * Sets a new singleLogoutUrl
     *
     * @param string $singleLogoutUrl
     * @return self
     */
    public function setSingleLogoutUrl($singleLogoutUrl)
    {
        $this->singleLogoutUrl = $singleLogoutUrl;
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
     * Gets as validationCert
     *
     * @return string
     */
    public function getValidationCert()
    {
        return $this->validationCert;
    }

    /**
     * Sets a new validationCert
     *
     * @param string $validationCert
     * @return self
     */
    public function setValidationCert($validationCert)
    {
        $this->validationCert = $validationCert;
        return $this;
    }

    /**
     * Gets as version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }


}

