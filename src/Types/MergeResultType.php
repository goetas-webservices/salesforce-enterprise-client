<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing MergeResultType
 *
 *
 * XSD Type: MergeResult
 */
class MergeResultType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\ErrorType[] $errors
     */
    private $errors = [
        
    ];

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * @property string[] $mergedRecordIds
     */
    private $mergedRecordIds = [
        
    ];

    /**
     * @property bool $success
     */
    private $success = null;

    /**
     * @property string[] $updatedRelatedIds
     */
    private $updatedRelatedIds = [
        
    ];

    /**
     * Adds as errors
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\ErrorType $errors
     */
    public function addToErrors(\GoetasWebservices\Client\SalesforceEnterprise\Types\ErrorType $errors)
    {
        $this->errors[] = $errors;
        return $this;
    }

    /**
     * isset errors
     *
     * @param int|string $index
     * @return bool
     */
    public function issetErrors($index)
    {
        return isset($this->errors[$index]);
    }

    /**
     * unset errors
     *
     * @param int|string $index
     * @return void
     */
    public function unsetErrors($index)
    {
        unset($this->errors[$index]);
    }

    /**
     * Gets as errors
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\ErrorType[]
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * Sets a new errors
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\ErrorType[] $errors
     * @return self
     */
    public function setErrors(array $errors)
    {
        $this->errors = $errors;
        return $this;
    }

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Adds as mergedRecordIds
     *
     * @return self
     * @param string $mergedRecordIds
     */
    public function addToMergedRecordIds($mergedRecordIds)
    {
        $this->mergedRecordIds[] = $mergedRecordIds;
        return $this;
    }

    /**
     * isset mergedRecordIds
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMergedRecordIds($index)
    {
        return isset($this->mergedRecordIds[$index]);
    }

    /**
     * unset mergedRecordIds
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMergedRecordIds($index)
    {
        unset($this->mergedRecordIds[$index]);
    }

    /**
     * Gets as mergedRecordIds
     *
     * @return string[]
     */
    public function getMergedRecordIds()
    {
        return $this->mergedRecordIds;
    }

    /**
     * Sets a new mergedRecordIds
     *
     * @param string $mergedRecordIds
     * @return self
     */
    public function setMergedRecordIds(array $mergedRecordIds)
    {
        $this->mergedRecordIds = $mergedRecordIds;
        return $this;
    }

    /**
     * Gets as success
     *
     * @return bool
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * Sets a new success
     *
     * @param bool $success
     * @return self
     */
    public function setSuccess($success)
    {
        $this->success = $success;
        return $this;
    }

    /**
     * Adds as updatedRelatedIds
     *
     * @return self
     * @param string $updatedRelatedIds
     */
    public function addToUpdatedRelatedIds($updatedRelatedIds)
    {
        $this->updatedRelatedIds[] = $updatedRelatedIds;
        return $this;
    }

    /**
     * isset updatedRelatedIds
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUpdatedRelatedIds($index)
    {
        return isset($this->updatedRelatedIds[$index]);
    }

    /**
     * unset updatedRelatedIds
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUpdatedRelatedIds($index)
    {
        unset($this->updatedRelatedIds[$index]);
    }

    /**
     * Gets as updatedRelatedIds
     *
     * @return string[]
     */
    public function getUpdatedRelatedIds()
    {
        return $this->updatedRelatedIds;
    }

    /**
     * Sets a new updatedRelatedIds
     *
     * @param string $updatedRelatedIds
     * @return self
     */
    public function setUpdatedRelatedIds(array $updatedRelatedIds)
    {
        $this->updatedRelatedIds = $updatedRelatedIds;
        return $this;
    }


}

