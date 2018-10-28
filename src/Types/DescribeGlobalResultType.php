<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribeGlobalResultType
 *
 *
 * XSD Type: DescribeGlobalResult
 */
class DescribeGlobalResultType
{

    /**
     * @property string $encoding
     */
    private $encoding = null;

    /**
     * @property int $maxBatchSize
     */
    private $maxBatchSize = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeGlobalSObjectResultType[] $sobjects
     */
    private $sobjects = [
        
    ];

    /**
     * Gets as encoding
     *
     * @return string
     */
    public function getEncoding()
    {
        return $this->encoding;
    }

    /**
     * Sets a new encoding
     *
     * @param string $encoding
     * @return self
     */
    public function setEncoding($encoding)
    {
        $this->encoding = $encoding;
        return $this;
    }

    /**
     * Gets as maxBatchSize
     *
     * @return int
     */
    public function getMaxBatchSize()
    {
        return $this->maxBatchSize;
    }

    /**
     * Sets a new maxBatchSize
     *
     * @param int $maxBatchSize
     * @return self
     */
    public function setMaxBatchSize($maxBatchSize)
    {
        $this->maxBatchSize = $maxBatchSize;
        return $this;
    }

    /**
     * Adds as sobjects
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeGlobalSObjectResultType $sobjects
     */
    public function addToSobjects(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeGlobalSObjectResultType $sobjects)
    {
        $this->sobjects[] = $sobjects;
        return $this;
    }

    /**
     * isset sobjects
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSobjects($index)
    {
        return isset($this->sobjects[$index]);
    }

    /**
     * unset sobjects
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSobjects($index)
    {
        unset($this->sobjects[$index]);
    }

    /**
     * Gets as sobjects
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeGlobalSObjectResultType[]
     */
    public function getSobjects()
    {
        return $this->sobjects;
    }

    /**
     * Sets a new sobjects
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeGlobalSObjectResultType[] $sobjects
     * @return self
     */
    public function setSobjects(array $sobjects)
    {
        $this->sobjects = $sobjects;
        return $this;
    }


}

