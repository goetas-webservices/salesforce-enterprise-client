<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribeNouns
 */
class DescribeNouns
{

    /**
     * @property string[] $nouns
     */
    private $nouns = [
        
    ];

    /**
     * @property bool $onlyRenamed
     */
    private $onlyRenamed = null;

    /**
     * @property bool $includeFields
     */
    private $includeFields = null;

    /**
     * Adds as nouns
     *
     * @return self
     * @param string $nouns
     */
    public function addToNouns($nouns)
    {
        $this->nouns[] = $nouns;
        return $this;
    }

    /**
     * isset nouns
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNouns($index)
    {
        return isset($this->nouns[$index]);
    }

    /**
     * unset nouns
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNouns($index)
    {
        unset($this->nouns[$index]);
    }

    /**
     * Gets as nouns
     *
     * @return string[]
     */
    public function getNouns()
    {
        return $this->nouns;
    }

    /**
     * Sets a new nouns
     *
     * @param string[] $nouns
     * @return self
     */
    public function setNouns(array $nouns)
    {
        $this->nouns = $nouns;
        return $this;
    }

    /**
     * Gets as onlyRenamed
     *
     * @return bool
     */
    public function getOnlyRenamed()
    {
        return $this->onlyRenamed;
    }

    /**
     * Sets a new onlyRenamed
     *
     * @param bool $onlyRenamed
     * @return self
     */
    public function setOnlyRenamed($onlyRenamed)
    {
        $this->onlyRenamed = $onlyRenamed;
        return $this;
    }

    /**
     * Gets as includeFields
     *
     * @return bool
     */
    public function getIncludeFields()
    {
        return $this->includeFields;
    }

    /**
     * Sets a new includeFields
     *
     * @param bool $includeFields
     * @return self
     */
    public function setIncludeFields($includeFields)
    {
        $this->includeFields = $includeFields;
        return $this;
    }


}

