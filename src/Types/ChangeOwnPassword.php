<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing ChangeOwnPassword
 */
class ChangeOwnPassword
{

    /**
     * @property string $oldPassword
     */
    private $oldPassword = null;

    /**
     * @property string $newPassword
     */
    private $newPassword = null;

    /**
     * Gets as oldPassword
     *
     * @return string
     */
    public function getOldPassword()
    {
        return $this->oldPassword;
    }

    /**
     * Sets a new oldPassword
     *
     * @param string $oldPassword
     * @return self
     */
    public function setOldPassword($oldPassword)
    {
        $this->oldPassword = $oldPassword;
        return $this;
    }

    /**
     * Gets as newPassword
     *
     * @return string
     */
    public function getNewPassword()
    {
        return $this->newPassword;
    }

    /**
     * Sets a new newPassword
     *
     * @param string $newPassword
     * @return self
     */
    public function setNewPassword($newPassword)
    {
        $this->newPassword = $newPassword;
        return $this;
    }


}

