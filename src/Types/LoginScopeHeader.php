<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing LoginScopeHeader
 */
class LoginScopeHeader
{

    /**
     * @property string $organizationId
     */
    private $organizationId = null;

    /**
     * @property string $portalId
     */
    private $portalId = null;

    /**
     * Gets as organizationId
     *
     * @return string
     */
    public function getOrganizationId()
    {
        return $this->organizationId;
    }

    /**
     * Sets a new organizationId
     *
     * @param string $organizationId
     * @return self
     */
    public function setOrganizationId($organizationId)
    {
        $this->organizationId = $organizationId;
        return $this;
    }

    /**
     * Gets as portalId
     *
     * @return string
     */
    public function getPortalId()
    {
        return $this->portalId;
    }

    /**
     * Sets a new portalId
     *
     * @param string $portalId
     * @return self
     */
    public function setPortalId($portalId)
    {
        $this->portalId = $portalId;
        return $this;
    }


}

