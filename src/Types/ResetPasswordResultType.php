<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing ResetPasswordResultType
 *
 *
 * XSD Type: ResetPasswordResult
 */
class ResetPasswordResultType
{

    /**
     * @property string $password
     */
    private $password = null;

    /**
     * Gets as password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Sets a new password
     *
     * @param string $password
     * @return self
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }


}

