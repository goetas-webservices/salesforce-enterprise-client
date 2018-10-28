<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing SetupAuditTrailType
 *
 *
 * XSD Type: SetupAuditTrail
 */
class SetupAuditTrailType extends SObjectType
{

    /**
     * @property string $action
     */
    private $action = null;

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
     * @property string $delegateUser
     */
    private $delegateUser = null;

    /**
     * @property string $display
     */
    private $display = null;

    /**
     * @property string $responsibleNamespacePrefix
     */
    private $responsibleNamespacePrefix = null;

    /**
     * @property string $section
     */
    private $section = null;

    /**
     * Gets as action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Sets a new action
     *
     * @param string $action
     * @return self
     */
    public function setAction($action)
    {
        $this->action = $action;
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
     * Gets as delegateUser
     *
     * @return string
     */
    public function getDelegateUser()
    {
        return $this->delegateUser;
    }

    /**
     * Sets a new delegateUser
     *
     * @param string $delegateUser
     * @return self
     */
    public function setDelegateUser($delegateUser)
    {
        $this->delegateUser = $delegateUser;
        return $this;
    }

    /**
     * Gets as display
     *
     * @return string
     */
    public function getDisplay()
    {
        return $this->display;
    }

    /**
     * Sets a new display
     *
     * @param string $display
     * @return self
     */
    public function setDisplay($display)
    {
        $this->display = $display;
        return $this;
    }

    /**
     * Gets as responsibleNamespacePrefix
     *
     * @return string
     */
    public function getResponsibleNamespacePrefix()
    {
        return $this->responsibleNamespacePrefix;
    }

    /**
     * Sets a new responsibleNamespacePrefix
     *
     * @param string $responsibleNamespacePrefix
     * @return self
     */
    public function setResponsibleNamespacePrefix($responsibleNamespacePrefix)
    {
        $this->responsibleNamespacePrefix = $responsibleNamespacePrefix;
        return $this;
    }

    /**
     * Gets as section
     *
     * @return string
     */
    public function getSection()
    {
        return $this->section;
    }

    /**
     * Sets a new section
     *
     * @param string $section
     * @return self
     */
    public function setSection($section)
    {
        $this->section = $section;
        return $this;
    }


}

