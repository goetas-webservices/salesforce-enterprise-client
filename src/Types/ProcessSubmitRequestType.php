<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing ProcessSubmitRequestType
 *
 *
 * XSD Type: ProcessSubmitRequest
 */
class ProcessSubmitRequestType extends ProcessRequestType
{

    /**
     * @property string $objectId
     */
    private $objectId = null;

    /**
     * @property string $submitterId
     */
    private $submitterId = null;

    /**
     * @property string $processDefinitionNameOrId
     */
    private $processDefinitionNameOrId = null;

    /**
     * @property bool $skipEntryCriteria
     */
    private $skipEntryCriteria = null;

    /**
     * Gets as objectId
     *
     * @return string
     */
    public function getObjectId()
    {
        return $this->objectId;
    }

    /**
     * Sets a new objectId
     *
     * @param string $objectId
     * @return self
     */
    public function setObjectId($objectId)
    {
        $this->objectId = $objectId;
        return $this;
    }

    /**
     * Gets as submitterId
     *
     * @return string
     */
    public function getSubmitterId()
    {
        return $this->submitterId;
    }

    /**
     * Sets a new submitterId
     *
     * @param string $submitterId
     * @return self
     */
    public function setSubmitterId($submitterId)
    {
        $this->submitterId = $submitterId;
        return $this;
    }

    /**
     * Gets as processDefinitionNameOrId
     *
     * @return string
     */
    public function getProcessDefinitionNameOrId()
    {
        return $this->processDefinitionNameOrId;
    }

    /**
     * Sets a new processDefinitionNameOrId
     *
     * @param string $processDefinitionNameOrId
     * @return self
     */
    public function setProcessDefinitionNameOrId($processDefinitionNameOrId)
    {
        $this->processDefinitionNameOrId = $processDefinitionNameOrId;
        return $this;
    }

    /**
     * Gets as skipEntryCriteria
     *
     * @return bool
     */
    public function getSkipEntryCriteria()
    {
        return $this->skipEntryCriteria;
    }

    /**
     * Sets a new skipEntryCriteria
     *
     * @param bool $skipEntryCriteria
     * @return self
     */
    public function setSkipEntryCriteria($skipEntryCriteria)
    {
        $this->skipEntryCriteria = $skipEntryCriteria;
        return $this;
    }


}

