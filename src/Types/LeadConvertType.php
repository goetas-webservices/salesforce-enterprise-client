<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing LeadConvertType
 *
 *
 * XSD Type: LeadConvert
 */
class LeadConvertType
{

    /**
     * @property string $accountId
     */
    private $accountId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $accountRecord
     */
    private $accountRecord = null;

    /**
     * @property bool $bypassAccountDedupeCheck
     */
    private $bypassAccountDedupeCheck = null;

    /**
     * @property bool $bypassContactDedupeCheck
     */
    private $bypassContactDedupeCheck = null;

    /**
     * @property string $contactId
     */
    private $contactId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $contactRecord
     */
    private $contactRecord = null;

    /**
     * @property string $convertedStatus
     */
    private $convertedStatus = null;

    /**
     * @property bool $doNotCreateOpportunity
     */
    private $doNotCreateOpportunity = null;

    /**
     * @property string $leadId
     */
    private $leadId = null;

    /**
     * @property string $opportunityId
     */
    private $opportunityId = null;

    /**
     * @property string $opportunityName
     */
    private $opportunityName = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $opportunityRecord
     */
    private $opportunityRecord = null;

    /**
     * @property bool $overwriteLeadSource
     */
    private $overwriteLeadSource = null;

    /**
     * @property string $ownerId
     */
    private $ownerId = null;

    /**
     * @property bool $sendNotificationEmail
     */
    private $sendNotificationEmail = null;

    /**
     * Gets as accountId
     *
     * @return string
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * Sets a new accountId
     *
     * @param string $accountId
     * @return self
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * Gets as accountRecord
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType
     */
    public function getAccountRecord()
    {
        return $this->accountRecord;
    }

    /**
     * Sets a new accountRecord
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $accountRecord
     * @return self
     */
    public function setAccountRecord(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $accountRecord)
    {
        $this->accountRecord = $accountRecord;
        return $this;
    }

    /**
     * Gets as bypassAccountDedupeCheck
     *
     * @return bool
     */
    public function getBypassAccountDedupeCheck()
    {
        return $this->bypassAccountDedupeCheck;
    }

    /**
     * Sets a new bypassAccountDedupeCheck
     *
     * @param bool $bypassAccountDedupeCheck
     * @return self
     */
    public function setBypassAccountDedupeCheck($bypassAccountDedupeCheck)
    {
        $this->bypassAccountDedupeCheck = $bypassAccountDedupeCheck;
        return $this;
    }

    /**
     * Gets as bypassContactDedupeCheck
     *
     * @return bool
     */
    public function getBypassContactDedupeCheck()
    {
        return $this->bypassContactDedupeCheck;
    }

    /**
     * Sets a new bypassContactDedupeCheck
     *
     * @param bool $bypassContactDedupeCheck
     * @return self
     */
    public function setBypassContactDedupeCheck($bypassContactDedupeCheck)
    {
        $this->bypassContactDedupeCheck = $bypassContactDedupeCheck;
        return $this;
    }

    /**
     * Gets as contactId
     *
     * @return string
     */
    public function getContactId()
    {
        return $this->contactId;
    }

    /**
     * Sets a new contactId
     *
     * @param string $contactId
     * @return self
     */
    public function setContactId($contactId)
    {
        $this->contactId = $contactId;
        return $this;
    }

    /**
     * Gets as contactRecord
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType
     */
    public function getContactRecord()
    {
        return $this->contactRecord;
    }

    /**
     * Sets a new contactRecord
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $contactRecord
     * @return self
     */
    public function setContactRecord(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $contactRecord)
    {
        $this->contactRecord = $contactRecord;
        return $this;
    }

    /**
     * Gets as convertedStatus
     *
     * @return string
     */
    public function getConvertedStatus()
    {
        return $this->convertedStatus;
    }

    /**
     * Sets a new convertedStatus
     *
     * @param string $convertedStatus
     * @return self
     */
    public function setConvertedStatus($convertedStatus)
    {
        $this->convertedStatus = $convertedStatus;
        return $this;
    }

    /**
     * Gets as doNotCreateOpportunity
     *
     * @return bool
     */
    public function getDoNotCreateOpportunity()
    {
        return $this->doNotCreateOpportunity;
    }

    /**
     * Sets a new doNotCreateOpportunity
     *
     * @param bool $doNotCreateOpportunity
     * @return self
     */
    public function setDoNotCreateOpportunity($doNotCreateOpportunity)
    {
        $this->doNotCreateOpportunity = $doNotCreateOpportunity;
        return $this;
    }

    /**
     * Gets as leadId
     *
     * @return string
     */
    public function getLeadId()
    {
        return $this->leadId;
    }

    /**
     * Sets a new leadId
     *
     * @param string $leadId
     * @return self
     */
    public function setLeadId($leadId)
    {
        $this->leadId = $leadId;
        return $this;
    }

    /**
     * Gets as opportunityId
     *
     * @return string
     */
    public function getOpportunityId()
    {
        return $this->opportunityId;
    }

    /**
     * Sets a new opportunityId
     *
     * @param string $opportunityId
     * @return self
     */
    public function setOpportunityId($opportunityId)
    {
        $this->opportunityId = $opportunityId;
        return $this;
    }

    /**
     * Gets as opportunityName
     *
     * @return string
     */
    public function getOpportunityName()
    {
        return $this->opportunityName;
    }

    /**
     * Sets a new opportunityName
     *
     * @param string $opportunityName
     * @return self
     */
    public function setOpportunityName($opportunityName)
    {
        $this->opportunityName = $opportunityName;
        return $this;
    }

    /**
     * Gets as opportunityRecord
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType
     */
    public function getOpportunityRecord()
    {
        return $this->opportunityRecord;
    }

    /**
     * Sets a new opportunityRecord
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $opportunityRecord
     * @return self
     */
    public function setOpportunityRecord(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $opportunityRecord)
    {
        $this->opportunityRecord = $opportunityRecord;
        return $this;
    }

    /**
     * Gets as overwriteLeadSource
     *
     * @return bool
     */
    public function getOverwriteLeadSource()
    {
        return $this->overwriteLeadSource;
    }

    /**
     * Sets a new overwriteLeadSource
     *
     * @param bool $overwriteLeadSource
     * @return self
     */
    public function setOverwriteLeadSource($overwriteLeadSource)
    {
        $this->overwriteLeadSource = $overwriteLeadSource;
        return $this;
    }

    /**
     * Gets as ownerId
     *
     * @return string
     */
    public function getOwnerId()
    {
        return $this->ownerId;
    }

    /**
     * Sets a new ownerId
     *
     * @param string $ownerId
     * @return self
     */
    public function setOwnerId($ownerId)
    {
        $this->ownerId = $ownerId;
        return $this;
    }

    /**
     * Gets as sendNotificationEmail
     *
     * @return bool
     */
    public function getSendNotificationEmail()
    {
        return $this->sendNotificationEmail;
    }

    /**
     * Sets a new sendNotificationEmail
     *
     * @param bool $sendNotificationEmail
     * @return self
     */
    public function setSendNotificationEmail($sendNotificationEmail)
    {
        $this->sendNotificationEmail = $sendNotificationEmail;
        return $this;
    }


}

