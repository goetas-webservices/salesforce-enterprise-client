<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing ContentDocumentSubscriptionType
 *
 *
 * XSD Type: ContentDocumentSubscription
 */
class ContentDocumentSubscriptionType extends SObjectType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentDocumentType $contentDocument
     */
    private $contentDocument = null;

    /**
     * @property string $contentDocumentId
     */
    private $contentDocumentId = null;

    /**
     * @property bool $isCommentSub
     */
    private $isCommentSub = null;

    /**
     * @property bool $isDocumentSub
     */
    private $isDocumentSub = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $user
     */
    private $user = null;

    /**
     * @property string $userId
     */
    private $userId = null;

    /**
     * Gets as contentDocument
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentDocumentType
     */
    public function getContentDocument()
    {
        return $this->contentDocument;
    }

    /**
     * Sets a new contentDocument
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentDocumentType $contentDocument
     * @return self
     */
    public function setContentDocument(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentDocumentType $contentDocument)
    {
        $this->contentDocument = $contentDocument;
        return $this;
    }

    /**
     * Gets as contentDocumentId
     *
     * @return string
     */
    public function getContentDocumentId()
    {
        return $this->contentDocumentId;
    }

    /**
     * Sets a new contentDocumentId
     *
     * @param string $contentDocumentId
     * @return self
     */
    public function setContentDocumentId($contentDocumentId)
    {
        $this->contentDocumentId = $contentDocumentId;
        return $this;
    }

    /**
     * Gets as isCommentSub
     *
     * @return bool
     */
    public function getIsCommentSub()
    {
        return $this->isCommentSub;
    }

    /**
     * Sets a new isCommentSub
     *
     * @param bool $isCommentSub
     * @return self
     */
    public function setIsCommentSub($isCommentSub)
    {
        $this->isCommentSub = $isCommentSub;
        return $this;
    }

    /**
     * Gets as isDocumentSub
     *
     * @return bool
     */
    public function getIsDocumentSub()
    {
        return $this->isDocumentSub;
    }

    /**
     * Sets a new isDocumentSub
     *
     * @param bool $isDocumentSub
     * @return self
     */
    public function setIsDocumentSub($isDocumentSub)
    {
        $this->isDocumentSub = $isDocumentSub;
        return $this;
    }

    /**
     * Gets as user
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Sets a new user
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $user
     * @return self
     */
    public function setUser(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * Gets as userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Sets a new userId
     *
     * @param string $userId
     * @return self
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }


}

