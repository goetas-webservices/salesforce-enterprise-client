<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing ProcessWorkitemRequestType
 *
 *
 * XSD Type: ProcessWorkitemRequest
 */
class ProcessWorkitemRequestType extends ProcessRequestType
{

    /**
     * @property string $action
     */
    private $action = null;

    /**
     * @property string $workitemId
     */
    private $workitemId = null;

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
     * Gets as workitemId
     *
     * @return string
     */
    public function getWorkitemId()
    {
        return $this->workitemId;
    }

    /**
     * Sets a new workitemId
     *
     * @param string $workitemId
     * @return self
     */
    public function setWorkitemId($workitemId)
    {
        $this->workitemId = $workitemId;
        return $this;
    }


}

