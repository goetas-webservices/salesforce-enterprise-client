<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing EmailHeader
 */
class EmailHeader
{

    /**
     * @property bool $triggerAutoResponseEmail
     */
    private $triggerAutoResponseEmail = null;

    /**
     * @property bool $triggerOtherEmail
     */
    private $triggerOtherEmail = null;

    /**
     * @property bool $triggerUserEmail
     */
    private $triggerUserEmail = null;

    /**
     * Gets as triggerAutoResponseEmail
     *
     * @return bool
     */
    public function getTriggerAutoResponseEmail()
    {
        return $this->triggerAutoResponseEmail;
    }

    /**
     * Sets a new triggerAutoResponseEmail
     *
     * @param bool $triggerAutoResponseEmail
     * @return self
     */
    public function setTriggerAutoResponseEmail($triggerAutoResponseEmail)
    {
        $this->triggerAutoResponseEmail = $triggerAutoResponseEmail;
        return $this;
    }

    /**
     * Gets as triggerOtherEmail
     *
     * @return bool
     */
    public function getTriggerOtherEmail()
    {
        return $this->triggerOtherEmail;
    }

    /**
     * Sets a new triggerOtherEmail
     *
     * @param bool $triggerOtherEmail
     * @return self
     */
    public function setTriggerOtherEmail($triggerOtherEmail)
    {
        $this->triggerOtherEmail = $triggerOtherEmail;
        return $this;
    }

    /**
     * Gets as triggerUserEmail
     *
     * @return bool
     */
    public function getTriggerUserEmail()
    {
        return $this->triggerUserEmail;
    }

    /**
     * Sets a new triggerUserEmail
     *
     * @param bool $triggerUserEmail
     * @return self
     */
    public function setTriggerUserEmail($triggerUserEmail)
    {
        $this->triggerUserEmail = $triggerUserEmail;
        return $this;
    }


}

