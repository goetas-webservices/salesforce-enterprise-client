<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing NameCaseValueType
 *
 *
 * XSD Type: NameCaseValue
 */
class NameCaseValueType
{

    /**
     * @property string $article
     */
    private $article = null;

    /**
     * @property string $caseType
     */
    private $caseType = null;

    /**
     * @property string $number
     */
    private $number = null;

    /**
     * @property string $possessive
     */
    private $possessive = null;

    /**
     * @property string $value
     */
    private $value = null;

    /**
     * Gets as article
     *
     * @return string
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * Sets a new article
     *
     * @param string $article
     * @return self
     */
    public function setArticle($article)
    {
        $this->article = $article;
        return $this;
    }

    /**
     * Gets as caseType
     *
     * @return string
     */
    public function getCaseType()
    {
        return $this->caseType;
    }

    /**
     * Sets a new caseType
     *
     * @param string $caseType
     * @return self
     */
    public function setCaseType($caseType)
    {
        $this->caseType = $caseType;
        return $this;
    }

    /**
     * Gets as number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * @param string $number
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * Gets as possessive
     *
     * @return string
     */
    public function getPossessive()
    {
        return $this->possessive;
    }

    /**
     * Sets a new possessive
     *
     * @param string $possessive
     * @return self
     */
    public function setPossessive($possessive)
    {
        $this->possessive = $possessive;
        return $this;
    }

    /**
     * Gets as value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * @param string $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }


}

