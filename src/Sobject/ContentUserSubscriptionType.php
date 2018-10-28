<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing ContentUserSubscriptionType
 *
 *
 * XSD Type: ContentUserSubscription
 */
class ContentUserSubscriptionType extends SObjectType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $subscribedToUser
     */
    private $subscribedToUser = null;

    /**
     * @property string $subscribedToUserId
     */
    private $subscribedToUserId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $subscriberUser
     */
    private $subscriberUser = null;

    /**
     * @property string $subscriberUserId
     */
    private $subscriberUserId = null;

    /**
     * Gets as subscribedToUser
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType
     */
    public function getSubscribedToUser()
    {
        return $this->subscribedToUser;
    }

    /**
     * Sets a new subscribedToUser
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $subscribedToUser
     * @return self
     */
    public function setSubscribedToUser(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $subscribedToUser)
    {
        $this->subscribedToUser = $subscribedToUser;
        return $this;
    }

    /**
     * Gets as subscribedToUserId
     *
     * @return string
     */
    public function getSubscribedToUserId()
    {
        return $this->subscribedToUserId;
    }

    /**
     * Sets a new subscribedToUserId
     *
     * @param string $subscribedToUserId
     * @return self
     */
    public function setSubscribedToUserId($subscribedToUserId)
    {
        $this->subscribedToUserId = $subscribedToUserId;
        return $this;
    }

    /**
     * Gets as subscriberUser
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType
     */
    public function getSubscriberUser()
    {
        return $this->subscriberUser;
    }

    /**
     * Sets a new subscriberUser
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $subscriberUser
     * @return self
     */
    public function setSubscriberUser(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $subscriberUser)
    {
        $this->subscriberUser = $subscriberUser;
        return $this;
    }

    /**
     * Gets as subscriberUserId
     *
     * @return string
     */
    public function getSubscriberUserId()
    {
        return $this->subscriberUserId;
    }

    /**
     * Sets a new subscriberUserId
     *
     * @param string $subscriberUserId
     * @return self
     */
    public function setSubscriberUserId($subscriberUserId)
    {
        $this->subscriberUserId = $subscriberUserId;
        return $this;
    }


}

