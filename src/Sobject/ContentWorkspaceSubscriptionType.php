<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing ContentWorkspaceSubscriptionType
 *
 *
 * XSD Type: ContentWorkspaceSubscription
 */
class ContentWorkspaceSubscriptionType extends SObjectType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentWorkspaceType $contentWorkspace
     */
    private $contentWorkspace = null;

    /**
     * @property string $contentWorkspaceId
     */
    private $contentWorkspaceId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $user
     */
    private $user = null;

    /**
     * @property string $userId
     */
    private $userId = null;

    /**
     * Gets as contentWorkspace
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentWorkspaceType
     */
    public function getContentWorkspace()
    {
        return $this->contentWorkspace;
    }

    /**
     * Sets a new contentWorkspace
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentWorkspaceType $contentWorkspace
     * @return self
     */
    public function setContentWorkspace(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentWorkspaceType $contentWorkspace)
    {
        $this->contentWorkspace = $contentWorkspace;
        return $this;
    }

    /**
     * Gets as contentWorkspaceId
     *
     * @return string
     */
    public function getContentWorkspaceId()
    {
        return $this->contentWorkspaceId;
    }

    /**
     * Sets a new contentWorkspaceId
     *
     * @param string $contentWorkspaceId
     * @return self
     */
    public function setContentWorkspaceId($contentWorkspaceId)
    {
        $this->contentWorkspaceId = $contentWorkspaceId;
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

