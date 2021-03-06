<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing CaseShareType
 *
 *
 * XSD Type: CaseShare
 */
class CaseShareType extends SObjectType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\CaseType $case
     */
    private $case = null;

    /**
     * @property string $caseAccessLevel
     */
    private $caseAccessLevel = null;

    /**
     * @property string $caseId
     */
    private $caseId = null;

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
     * @property string $rowCause
     */
    private $rowCause = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $userOrGroup
     */
    private $userOrGroup = null;

    /**
     * @property string $userOrGroupId
     */
    private $userOrGroupId = null;

    /**
     * Gets as case
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\CaseType
     */
    public function getCase()
    {
        return $this->case;
    }

    /**
     * Sets a new case
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\CaseType $case
     * @return self
     */
    public function setCase(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\CaseType $case)
    {
        $this->case = $case;
        return $this;
    }

    /**
     * Gets as caseAccessLevel
     *
     * @return string
     */
    public function getCaseAccessLevel()
    {
        return $this->caseAccessLevel;
    }

    /**
     * Sets a new caseAccessLevel
     *
     * @param string $caseAccessLevel
     * @return self
     */
    public function setCaseAccessLevel($caseAccessLevel)
    {
        $this->caseAccessLevel = $caseAccessLevel;
        return $this;
    }

    /**
     * Gets as caseId
     *
     * @return string
     */
    public function getCaseId()
    {
        return $this->caseId;
    }

    /**
     * Sets a new caseId
     *
     * @param string $caseId
     * @return self
     */
    public function setCaseId($caseId)
    {
        $this->caseId = $caseId;
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
     * Gets as rowCause
     *
     * @return string
     */
    public function getRowCause()
    {
        return $this->rowCause;
    }

    /**
     * Sets a new rowCause
     *
     * @param string $rowCause
     * @return self
     */
    public function setRowCause($rowCause)
    {
        $this->rowCause = $rowCause;
        return $this;
    }

    /**
     * Gets as userOrGroup
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType
     */
    public function getUserOrGroup()
    {
        return $this->userOrGroup;
    }

    /**
     * Sets a new userOrGroup
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $userOrGroup
     * @return self
     */
    public function setUserOrGroup(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $userOrGroup)
    {
        $this->userOrGroup = $userOrGroup;
        return $this;
    }

    /**
     * Gets as userOrGroupId
     *
     * @return string
     */
    public function getUserOrGroupId()
    {
        return $this->userOrGroupId;
    }

    /**
     * Sets a new userOrGroupId
     *
     * @param string $userOrGroupId
     * @return self
     */
    public function setUserOrGroupId($userOrGroupId)
    {
        $this->userOrGroupId = $userOrGroupId;
        return $this;
    }


}

