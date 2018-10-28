<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing ProcessNodeType
 *
 *
 * XSD Type: ProcessNode
 */
class ProcessNodeType extends SObjectType
{

    /**
     * @property string $description
     */
    private $description = null;

    /**
     * @property string $developerName
     */
    private $developerName = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ProcessDefinitionType $processDefinition
     */
    private $processDefinition = null;

    /**
     * @property string $processDefinitionId
     */
    private $processDefinitionId = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

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
     * Gets as processDefinition
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ProcessDefinitionType
     */
    public function getProcessDefinition()
    {
        return $this->processDefinition;
    }

    /**
     * Sets a new processDefinition
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ProcessDefinitionType $processDefinition
     * @return self
     */
    public function setProcessDefinition(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\ProcessDefinitionType $processDefinition)
    {
        $this->processDefinition = $processDefinition;
        return $this;
    }

    /**
     * Gets as processDefinitionId
     *
     * @return string
     */
    public function getProcessDefinitionId()
    {
        return $this->processDefinitionId;
    }

    /**
     * Sets a new processDefinitionId
     *
     * @param string $processDefinitionId
     * @return self
     */
    public function setProcessDefinitionId($processDefinitionId)
    {
        $this->processDefinitionId = $processDefinitionId;
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

