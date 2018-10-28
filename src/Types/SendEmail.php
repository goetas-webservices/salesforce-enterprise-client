<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing SendEmail
 */
class SendEmail
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\EmailType[] $messages
     */
    private $messages = [
        
    ];

    /**
     * Adds as messages
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\EmailType $messages
     */
    public function addToMessages(\GoetasWebservices\Client\SalesforceEnterprise\Types\EmailType $messages)
    {
        $this->messages[] = $messages;
        return $this;
    }

    /**
     * isset messages
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMessages($index)
    {
        return isset($this->messages[$index]);
    }

    /**
     * unset messages
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMessages($index)
    {
        unset($this->messages[$index]);
    }

    /**
     * Gets as messages
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\EmailType[]
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * Sets a new messages
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\EmailType[] $messages
     * @return self
     */
    public function setMessages(array $messages)
    {
        $this->messages = $messages;
        return $this;
    }


}

