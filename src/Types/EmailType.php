<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing EmailType
 *
 *
 * XSD Type: Email
 */
class EmailType
{

    /**
     * @property bool $bccSender
     */
    private $bccSender = null;

    /**
     * @property string $emailPriority
     */
    private $emailPriority = null;

    /**
     * @property string $replyTo
     */
    private $replyTo = null;

    /**
     * @property bool $saveAsActivity
     */
    private $saveAsActivity = null;

    /**
     * @property string $senderDisplayName
     */
    private $senderDisplayName = null;

    /**
     * @property string $subject
     */
    private $subject = null;

    /**
     * @property bool $useSignature
     */
    private $useSignature = null;

    /**
     * Gets as bccSender
     *
     * @return bool
     */
    public function getBccSender()
    {
        return $this->bccSender;
    }

    /**
     * Sets a new bccSender
     *
     * @param bool $bccSender
     * @return self
     */
    public function setBccSender($bccSender)
    {
        $this->bccSender = $bccSender;
        return $this;
    }

    /**
     * Gets as emailPriority
     *
     * @return string
     */
    public function getEmailPriority()
    {
        return $this->emailPriority;
    }

    /**
     * Sets a new emailPriority
     *
     * @param string $emailPriority
     * @return self
     */
    public function setEmailPriority($emailPriority)
    {
        $this->emailPriority = $emailPriority;
        return $this;
    }

    /**
     * Gets as replyTo
     *
     * @return string
     */
    public function getReplyTo()
    {
        return $this->replyTo;
    }

    /**
     * Sets a new replyTo
     *
     * @param string $replyTo
     * @return self
     */
    public function setReplyTo($replyTo)
    {
        $this->replyTo = $replyTo;
        return $this;
    }

    /**
     * Gets as saveAsActivity
     *
     * @return bool
     */
    public function getSaveAsActivity()
    {
        return $this->saveAsActivity;
    }

    /**
     * Sets a new saveAsActivity
     *
     * @param bool $saveAsActivity
     * @return self
     */
    public function setSaveAsActivity($saveAsActivity)
    {
        $this->saveAsActivity = $saveAsActivity;
        return $this;
    }

    /**
     * Gets as senderDisplayName
     *
     * @return string
     */
    public function getSenderDisplayName()
    {
        return $this->senderDisplayName;
    }

    /**
     * Sets a new senderDisplayName
     *
     * @param string $senderDisplayName
     * @return self
     */
    public function setSenderDisplayName($senderDisplayName)
    {
        $this->senderDisplayName = $senderDisplayName;
        return $this;
    }

    /**
     * Gets as subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Sets a new subject
     *
     * @param string $subject
     * @return self
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Gets as useSignature
     *
     * @return bool
     */
    public function getUseSignature()
    {
        return $this->useSignature;
    }

    /**
     * Sets a new useSignature
     *
     * @param bool $useSignature
     * @return self
     */
    public function setUseSignature($useSignature)
    {
        $this->useSignature = $useSignature;
        return $this;
    }


}

