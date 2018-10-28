<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing CaseSolutionType
 *
 *
 * XSD Type: CaseSolution
 */
class CaseSolutionType extends SObjectType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\CaseType $case
     */
    private $case = null;

    /**
     * @property string $caseId
     */
    private $caseId = null;

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
     * @property bool $isDeleted
     */
    private $isDeleted = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SolutionType $solution
     */
    private $solution = null;

    /**
     * @property string $solutionId
     */
    private $solutionId = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

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
     * Gets as solution
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SolutionType
     */
    public function getSolution()
    {
        return $this->solution;
    }

    /**
     * Sets a new solution
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SolutionType $solution
     * @return self
     */
    public function setSolution(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\SolutionType $solution)
    {
        $this->solution = $solution;
        return $this;
    }

    /**
     * Gets as solutionId
     *
     * @return string
     */
    public function getSolutionId()
    {
        return $this->solutionId;
    }

    /**
     * Sets a new solutionId
     *
     * @param string $solutionId
     * @return self
     */
    public function setSolutionId($solutionId)
    {
        $this->solutionId = $solutionId;
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

