<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing CampaignMemberType
 *
 *
 * XSD Type: CampaignMember
 */
class CampaignMemberType extends SObjectType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\CampaignType $campaign
     */
    private $campaign = null;

    /**
     * @property string $campaignId
     */
    private $campaignId = null;

    /**
     * @property string $city
     */
    private $city = null;

    /**
     * @property string $companyOrAccount
     */
    private $companyOrAccount = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContactType $contact
     */
    private $contact = null;

    /**
     * @property string $contactId
     */
    private $contactId = null;

    /**
     * @property string $country
     */
    private $country = null;

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
     * @property bool $doNotCall
     */
    private $doNotCall = null;

    /**
     * @property string $email
     */
    private $email = null;

    /**
     * @property string $fax
     */
    private $fax = null;

    /**
     * @property string $firstName
     */
    private $firstName = null;

    /**
     * @property \DateTime $firstRespondedDate
     */
    private $firstRespondedDate = null;

    /**
     * @property bool $hasOptedOutOfEmail
     */
    private $hasOptedOutOfEmail = null;

    /**
     * @property bool $hasOptedOutOfFax
     */
    private $hasOptedOutOfFax = null;

    /**
     * @property bool $hasResponded
     */
    private $hasResponded = null;

    /**
     * @property bool $isDeleted
     */
    private $isDeleted = null;

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
     * @property string $lastName
     */
    private $lastName = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\LeadType $lead
     */
    private $lead = null;

    /**
     * @property string $leadId
     */
    private $leadId = null;

    /**
     * @property string $leadOrContactId
     */
    private $leadOrContactId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $leadOrContactOwner
     */
    private $leadOrContactOwner = null;

    /**
     * @property string $leadOrContactOwnerId
     */
    private $leadOrContactOwnerId = null;

    /**
     * @property string $leadSource
     */
    private $leadSource = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $listEmailIndividualRecipients
     */
    private $listEmailIndividualRecipients = null;

    /**
     * @property string $mobilePhone
     */
    private $mobilePhone = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $phone
     */
    private $phone = null;

    /**
     * @property string $postalCode
     */
    private $postalCode = null;

    /**
     * @property string $salutation
     */
    private $salutation = null;

    /**
     * @property string $state
     */
    private $state = null;

    /**
     * @property string $status
     */
    private $status = null;

    /**
     * @property string $street
     */
    private $street = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property string $title
     */
    private $title = null;

    /**
     * @property string $type
     */
    private $type = null;

    /**
     * Gets as campaign
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\CampaignType
     */
    public function getCampaign()
    {
        return $this->campaign;
    }

    /**
     * Sets a new campaign
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\CampaignType $campaign
     * @return self
     */
    public function setCampaign(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\CampaignType $campaign)
    {
        $this->campaign = $campaign;
        return $this;
    }

    /**
     * Gets as campaignId
     *
     * @return string
     */
    public function getCampaignId()
    {
        return $this->campaignId;
    }

    /**
     * Sets a new campaignId
     *
     * @param string $campaignId
     * @return self
     */
    public function setCampaignId($campaignId)
    {
        $this->campaignId = $campaignId;
        return $this;
    }

    /**
     * Gets as city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Sets a new city
     *
     * @param string $city
     * @return self
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * Gets as companyOrAccount
     *
     * @return string
     */
    public function getCompanyOrAccount()
    {
        return $this->companyOrAccount;
    }

    /**
     * Sets a new companyOrAccount
     *
     * @param string $companyOrAccount
     * @return self
     */
    public function setCompanyOrAccount($companyOrAccount)
    {
        $this->companyOrAccount = $companyOrAccount;
        return $this;
    }

    /**
     * Gets as contact
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContactType
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContactType $contact
     * @return self
     */
    public function setContact(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContactType $contact)
    {
        $this->contact = $contact;
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
     * Gets as country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets a new country
     *
     * @param string $country
     * @return self
     */
    public function setCountry($country)
    {
        $this->country = $country;
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
     * Gets as doNotCall
     *
     * @return bool
     */
    public function getDoNotCall()
    {
        return $this->doNotCall;
    }

    /**
     * Sets a new doNotCall
     *
     * @param bool $doNotCall
     * @return self
     */
    public function setDoNotCall($doNotCall)
    {
        $this->doNotCall = $doNotCall;
        return $this;
    }

    /**
     * Gets as email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * @param string $email
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Gets as fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Sets a new fax
     *
     * @param string $fax
     * @return self
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
        return $this;
    }

    /**
     * Gets as firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Sets a new firstName
     *
     * @param string $firstName
     * @return self
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * Gets as firstRespondedDate
     *
     * @return \DateTime
     */
    public function getFirstRespondedDate()
    {
        return $this->firstRespondedDate;
    }

    /**
     * Sets a new firstRespondedDate
     *
     * @param \DateTime $firstRespondedDate
     * @return self
     */
    public function setFirstRespondedDate(\DateTime $firstRespondedDate)
    {
        $this->firstRespondedDate = $firstRespondedDate;
        return $this;
    }

    /**
     * Gets as hasOptedOutOfEmail
     *
     * @return bool
     */
    public function getHasOptedOutOfEmail()
    {
        return $this->hasOptedOutOfEmail;
    }

    /**
     * Sets a new hasOptedOutOfEmail
     *
     * @param bool $hasOptedOutOfEmail
     * @return self
     */
    public function setHasOptedOutOfEmail($hasOptedOutOfEmail)
    {
        $this->hasOptedOutOfEmail = $hasOptedOutOfEmail;
        return $this;
    }

    /**
     * Gets as hasOptedOutOfFax
     *
     * @return bool
     */
    public function getHasOptedOutOfFax()
    {
        return $this->hasOptedOutOfFax;
    }

    /**
     * Sets a new hasOptedOutOfFax
     *
     * @param bool $hasOptedOutOfFax
     * @return self
     */
    public function setHasOptedOutOfFax($hasOptedOutOfFax)
    {
        $this->hasOptedOutOfFax = $hasOptedOutOfFax;
        return $this;
    }

    /**
     * Gets as hasResponded
     *
     * @return bool
     */
    public function getHasResponded()
    {
        return $this->hasResponded;
    }

    /**
     * Sets a new hasResponded
     *
     * @param bool $hasResponded
     * @return self
     */
    public function setHasResponded($hasResponded)
    {
        $this->hasResponded = $hasResponded;
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
     * Gets as lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Sets a new lastName
     *
     * @param string $lastName
     * @return self
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * Gets as lead
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\LeadType
     */
    public function getLead()
    {
        return $this->lead;
    }

    /**
     * Sets a new lead
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\LeadType $lead
     * @return self
     */
    public function setLead(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\LeadType $lead)
    {
        $this->lead = $lead;
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
     * Gets as leadOrContactId
     *
     * @return string
     */
    public function getLeadOrContactId()
    {
        return $this->leadOrContactId;
    }

    /**
     * Sets a new leadOrContactId
     *
     * @param string $leadOrContactId
     * @return self
     */
    public function setLeadOrContactId($leadOrContactId)
    {
        $this->leadOrContactId = $leadOrContactId;
        return $this;
    }

    /**
     * Gets as leadOrContactOwner
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType
     */
    public function getLeadOrContactOwner()
    {
        return $this->leadOrContactOwner;
    }

    /**
     * Sets a new leadOrContactOwner
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $leadOrContactOwner
     * @return self
     */
    public function setLeadOrContactOwner(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $leadOrContactOwner)
    {
        $this->leadOrContactOwner = $leadOrContactOwner;
        return $this;
    }

    /**
     * Gets as leadOrContactOwnerId
     *
     * @return string
     */
    public function getLeadOrContactOwnerId()
    {
        return $this->leadOrContactOwnerId;
    }

    /**
     * Sets a new leadOrContactOwnerId
     *
     * @param string $leadOrContactOwnerId
     * @return self
     */
    public function setLeadOrContactOwnerId($leadOrContactOwnerId)
    {
        $this->leadOrContactOwnerId = $leadOrContactOwnerId;
        return $this;
    }

    /**
     * Gets as leadSource
     *
     * @return string
     */
    public function getLeadSource()
    {
        return $this->leadSource;
    }

    /**
     * Sets a new leadSource
     *
     * @param string $leadSource
     * @return self
     */
    public function setLeadSource($leadSource)
    {
        $this->leadSource = $leadSource;
        return $this;
    }

    /**
     * Gets as listEmailIndividualRecipients
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getListEmailIndividualRecipients()
    {
        return $this->listEmailIndividualRecipients;
    }

    /**
     * Sets a new listEmailIndividualRecipients
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $listEmailIndividualRecipients
     * @return self
     */
    public function setListEmailIndividualRecipients(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $listEmailIndividualRecipients)
    {
        $this->listEmailIndividualRecipients = $listEmailIndividualRecipients;
        return $this;
    }

    /**
     * Gets as mobilePhone
     *
     * @return string
     */
    public function getMobilePhone()
    {
        return $this->mobilePhone;
    }

    /**
     * Sets a new mobilePhone
     *
     * @param string $mobilePhone
     * @return self
     */
    public function setMobilePhone($mobilePhone)
    {
        $this->mobilePhone = $mobilePhone;
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
     * Gets as phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Sets a new phone
     *
     * @param string $phone
     * @return self
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * Gets as postalCode
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Sets a new postalCode
     *
     * @param string $postalCode
     * @return self
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    /**
     * Gets as salutation
     *
     * @return string
     */
    public function getSalutation()
    {
        return $this->salutation;
    }

    /**
     * Sets a new salutation
     *
     * @param string $salutation
     * @return self
     */
    public function setSalutation($salutation)
    {
        $this->salutation = $salutation;
        return $this;
    }

    /**
     * Gets as state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Sets a new state
     *
     * @param string $state
     * @return self
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * Gets as status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Sets a new street
     *
     * @param string $street
     * @return self
     */
    public function setStreet($street)
    {
        $this->street = $street;
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
     * Gets as title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * @param string $title
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;
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

