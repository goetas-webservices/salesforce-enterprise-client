<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing EmailServicesFunctionType
 *
 *
 * XSD Type: EmailServicesFunction
 */
class EmailServicesFunctionType extends SObjectType
{

    /**
     * @property string $addressInactiveAction
     */
    private $addressInactiveAction = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $addresses
     */
    private $addresses = null;

    /**
     * @property string $apexClassId
     */
    private $apexClassId = null;

    /**
     * @property string $attachmentOption
     */
    private $attachmentOption = null;

    /**
     * @property string $authenticationFailureAction
     */
    private $authenticationFailureAction = null;

    /**
     * @property string $authorizationFailureAction
     */
    private $authorizationFailureAction = null;

    /**
     * @property string $authorizedSenders
     */
    private $authorizedSenders = null;

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
     * @property string $errorRoutingAddress
     */
    private $errorRoutingAddress = null;

    /**
     * @property string $functionInactiveAction
     */
    private $functionInactiveAction = null;

    /**
     * @property string $functionName
     */
    private $functionName = null;

    /**
     * @property bool $isActive
     */
    private $isActive = null;

    /**
     * @property bool $isAuthenticationRequired
     */
    private $isAuthenticationRequired = null;

    /**
     * @property bool $isErrorRoutingEnabled
     */
    private $isErrorRoutingEnabled = null;

    /**
     * @property bool $isTextAttachmentsAsBinary
     */
    private $isTextAttachmentsAsBinary = null;

    /**
     * @property bool $isTlsRequired
     */
    private $isTlsRequired = null;

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
     * @property string $overLimitAction
     */
    private $overLimitAction = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * Gets as addressInactiveAction
     *
     * @return string
     */
    public function getAddressInactiveAction()
    {
        return $this->addressInactiveAction;
    }

    /**
     * Sets a new addressInactiveAction
     *
     * @param string $addressInactiveAction
     * @return self
     */
    public function setAddressInactiveAction($addressInactiveAction)
    {
        $this->addressInactiveAction = $addressInactiveAction;
        return $this;
    }

    /**
     * Gets as addresses
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * Sets a new addresses
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $addresses
     * @return self
     */
    public function setAddresses(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $addresses)
    {
        $this->addresses = $addresses;
        return $this;
    }

    /**
     * Gets as apexClassId
     *
     * @return string
     */
    public function getApexClassId()
    {
        return $this->apexClassId;
    }

    /**
     * Sets a new apexClassId
     *
     * @param string $apexClassId
     * @return self
     */
    public function setApexClassId($apexClassId)
    {
        $this->apexClassId = $apexClassId;
        return $this;
    }

    /**
     * Gets as attachmentOption
     *
     * @return string
     */
    public function getAttachmentOption()
    {
        return $this->attachmentOption;
    }

    /**
     * Sets a new attachmentOption
     *
     * @param string $attachmentOption
     * @return self
     */
    public function setAttachmentOption($attachmentOption)
    {
        $this->attachmentOption = $attachmentOption;
        return $this;
    }

    /**
     * Gets as authenticationFailureAction
     *
     * @return string
     */
    public function getAuthenticationFailureAction()
    {
        return $this->authenticationFailureAction;
    }

    /**
     * Sets a new authenticationFailureAction
     *
     * @param string $authenticationFailureAction
     * @return self
     */
    public function setAuthenticationFailureAction($authenticationFailureAction)
    {
        $this->authenticationFailureAction = $authenticationFailureAction;
        return $this;
    }

    /**
     * Gets as authorizationFailureAction
     *
     * @return string
     */
    public function getAuthorizationFailureAction()
    {
        return $this->authorizationFailureAction;
    }

    /**
     * Sets a new authorizationFailureAction
     *
     * @param string $authorizationFailureAction
     * @return self
     */
    public function setAuthorizationFailureAction($authorizationFailureAction)
    {
        $this->authorizationFailureAction = $authorizationFailureAction;
        return $this;
    }

    /**
     * Gets as authorizedSenders
     *
     * @return string
     */
    public function getAuthorizedSenders()
    {
        return $this->authorizedSenders;
    }

    /**
     * Sets a new authorizedSenders
     *
     * @param string $authorizedSenders
     * @return self
     */
    public function setAuthorizedSenders($authorizedSenders)
    {
        $this->authorizedSenders = $authorizedSenders;
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
     * Gets as errorRoutingAddress
     *
     * @return string
     */
    public function getErrorRoutingAddress()
    {
        return $this->errorRoutingAddress;
    }

    /**
     * Sets a new errorRoutingAddress
     *
     * @param string $errorRoutingAddress
     * @return self
     */
    public function setErrorRoutingAddress($errorRoutingAddress)
    {
        $this->errorRoutingAddress = $errorRoutingAddress;
        return $this;
    }

    /**
     * Gets as functionInactiveAction
     *
     * @return string
     */
    public function getFunctionInactiveAction()
    {
        return $this->functionInactiveAction;
    }

    /**
     * Sets a new functionInactiveAction
     *
     * @param string $functionInactiveAction
     * @return self
     */
    public function setFunctionInactiveAction($functionInactiveAction)
    {
        $this->functionInactiveAction = $functionInactiveAction;
        return $this;
    }

    /**
     * Gets as functionName
     *
     * @return string
     */
    public function getFunctionName()
    {
        return $this->functionName;
    }

    /**
     * Sets a new functionName
     *
     * @param string $functionName
     * @return self
     */
    public function setFunctionName($functionName)
    {
        $this->functionName = $functionName;
        return $this;
    }

    /**
     * Gets as isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Sets a new isActive
     *
     * @param bool $isActive
     * @return self
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * Gets as isAuthenticationRequired
     *
     * @return bool
     */
    public function getIsAuthenticationRequired()
    {
        return $this->isAuthenticationRequired;
    }

    /**
     * Sets a new isAuthenticationRequired
     *
     * @param bool $isAuthenticationRequired
     * @return self
     */
    public function setIsAuthenticationRequired($isAuthenticationRequired)
    {
        $this->isAuthenticationRequired = $isAuthenticationRequired;
        return $this;
    }

    /**
     * Gets as isErrorRoutingEnabled
     *
     * @return bool
     */
    public function getIsErrorRoutingEnabled()
    {
        return $this->isErrorRoutingEnabled;
    }

    /**
     * Sets a new isErrorRoutingEnabled
     *
     * @param bool $isErrorRoutingEnabled
     * @return self
     */
    public function setIsErrorRoutingEnabled($isErrorRoutingEnabled)
    {
        $this->isErrorRoutingEnabled = $isErrorRoutingEnabled;
        return $this;
    }

    /**
     * Gets as isTextAttachmentsAsBinary
     *
     * @return bool
     */
    public function getIsTextAttachmentsAsBinary()
    {
        return $this->isTextAttachmentsAsBinary;
    }

    /**
     * Sets a new isTextAttachmentsAsBinary
     *
     * @param bool $isTextAttachmentsAsBinary
     * @return self
     */
    public function setIsTextAttachmentsAsBinary($isTextAttachmentsAsBinary)
    {
        $this->isTextAttachmentsAsBinary = $isTextAttachmentsAsBinary;
        return $this;
    }

    /**
     * Gets as isTlsRequired
     *
     * @return bool
     */
    public function getIsTlsRequired()
    {
        return $this->isTlsRequired;
    }

    /**
     * Sets a new isTlsRequired
     *
     * @param bool $isTlsRequired
     * @return self
     */
    public function setIsTlsRequired($isTlsRequired)
    {
        $this->isTlsRequired = $isTlsRequired;
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
     * Gets as overLimitAction
     *
     * @return string
     */
    public function getOverLimitAction()
    {
        return $this->overLimitAction;
    }

    /**
     * Sets a new overLimitAction
     *
     * @param string $overLimitAction
     * @return self
     */
    public function setOverLimitAction($overLimitAction)
    {
        $this->overLimitAction = $overLimitAction;
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

