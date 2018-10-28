<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribeNounResultType
 *
 *
 * XSD Type: DescribeNounResult
 */
class DescribeNounResultType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\NameCaseValueType[] $caseValues
     */
    private $caseValues = [
        
    ];

    /**
     * @property string $developerName
     */
    private $developerName = null;

    /**
     * @property string $gender
     */
    private $gender = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $pluralAlias
     */
    private $pluralAlias = null;

    /**
     * @property string $startsWith
     */
    private $startsWith = null;

    /**
     * Adds as caseValues
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\NameCaseValueType $caseValues
     */
    public function addToCaseValues(\GoetasWebservices\Client\SalesforceEnterprise\Types\NameCaseValueType $caseValues)
    {
        $this->caseValues[] = $caseValues;
        return $this;
    }

    /**
     * isset caseValues
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCaseValues($index)
    {
        return isset($this->caseValues[$index]);
    }

    /**
     * unset caseValues
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCaseValues($index)
    {
        unset($this->caseValues[$index]);
    }

    /**
     * Gets as caseValues
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\NameCaseValueType[]
     */
    public function getCaseValues()
    {
        return $this->caseValues;
    }

    /**
     * Sets a new caseValues
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\NameCaseValueType[] $caseValues
     * @return self
     */
    public function setCaseValues(array $caseValues)
    {
        $this->caseValues = $caseValues;
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
     * Gets as gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Sets a new gender
     *
     * @param string $gender
     * @return self
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
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
     * Gets as pluralAlias
     *
     * @return string
     */
    public function getPluralAlias()
    {
        return $this->pluralAlias;
    }

    /**
     * Sets a new pluralAlias
     *
     * @param string $pluralAlias
     * @return self
     */
    public function setPluralAlias($pluralAlias)
    {
        $this->pluralAlias = $pluralAlias;
        return $this;
    }

    /**
     * Gets as startsWith
     *
     * @return string
     */
    public function getStartsWith()
    {
        return $this->startsWith;
    }

    /**
     * Sets a new startsWith
     *
     * @param string $startsWith
     * @return self
     */
    public function setStartsWith($startsWith)
    {
        $this->startsWith = $startsWith;
        return $this;
    }


}

