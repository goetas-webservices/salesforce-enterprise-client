<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing PerformQuickActionResultType
 *
 *
 * XSD Type: PerformQuickActionResult
 */
class PerformQuickActionResultType
{

    /**
     * @property string $contextId
     */
    private $contextId = null;

    /**
     * @property bool $created
     */
    private $created = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\ErrorType[] $errors
     */
    private $errors = [
        
    ];

    /**
     * @property string[] $feedItemIds
     */
    private $feedItemIds = [
        
    ];

    /**
     * @property string[] $ids
     */
    private $ids = [
        
    ];

    /**
     * @property bool $success
     */
    private $success = null;

    /**
     * @property string $successMessage
     */
    private $successMessage = null;

    /**
     * Gets as contextId
     *
     * @return string
     */
    public function getContextId()
    {
        return $this->contextId;
    }

    /**
     * Sets a new contextId
     *
     * @param string $contextId
     * @return self
     */
    public function setContextId($contextId)
    {
        $this->contextId = $contextId;
        return $this;
    }

    /**
     * Gets as created
     *
     * @return bool
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Sets a new created
     *
     * @param bool $created
     * @return self
     */
    public function setCreated($created)
    {
        $this->created = $created;
        return $this;
    }

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
     * Adds as feedItemIds
     *
     * @return self
     * @param string $feedItemIds
     */
    public function addToFeedItemIds($feedItemIds)
    {
        $this->feedItemIds[] = $feedItemIds;
        return $this;
    }

    /**
     * isset feedItemIds
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFeedItemIds($index)
    {
        return isset($this->feedItemIds[$index]);
    }

    /**
     * unset feedItemIds
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFeedItemIds($index)
    {
        unset($this->feedItemIds[$index]);
    }

    /**
     * Gets as feedItemIds
     *
     * @return string[]
     */
    public function getFeedItemIds()
    {
        return $this->feedItemIds;
    }

    /**
     * Sets a new feedItemIds
     *
     * @param string $feedItemIds
     * @return self
     */
    public function setFeedItemIds(array $feedItemIds)
    {
        $this->feedItemIds = $feedItemIds;
        return $this;
    }

    /**
     * Adds as ids
     *
     * @return self
     * @param string $ids
     */
    public function addToIds($ids)
    {
        $this->ids[] = $ids;
        return $this;
    }

    /**
     * isset ids
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIds($index)
    {
        return isset($this->ids[$index]);
    }

    /**
     * unset ids
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIds($index)
    {
        unset($this->ids[$index]);
    }

    /**
     * Gets as ids
     *
     * @return string[]
     */
    public function getIds()
    {
        return $this->ids;
    }

    /**
     * Sets a new ids
     *
     * @param string $ids
     * @return self
     */
    public function setIds(array $ids)
    {
        $this->ids = $ids;
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
     * Gets as successMessage
     *
     * @return string
     */
    public function getSuccessMessage()
    {
        return $this->successMessage;
    }

    /**
     * Sets a new successMessage
     *
     * @param string $successMessage
     * @return self
     */
    public function setSuccessMessage($successMessage)
    {
        $this->successMessage = $successMessage;
        return $this;
    }


}

