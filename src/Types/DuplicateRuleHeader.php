<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DuplicateRuleHeader
 */
class DuplicateRuleHeader
{

    /**
     * @property bool $allowSave
     */
    private $allowSave = null;

    /**
     * @property bool $includeRecordDetails
     */
    private $includeRecordDetails = null;

    /**
     * @property bool $runAsCurrentUser
     */
    private $runAsCurrentUser = null;

    /**
     * Gets as allowSave
     *
     * @return bool
     */
    public function getAllowSave()
    {
        return $this->allowSave;
    }

    /**
     * Sets a new allowSave
     *
     * @param bool $allowSave
     * @return self
     */
    public function setAllowSave($allowSave)
    {
        $this->allowSave = $allowSave;
        return $this;
    }

    /**
     * Gets as includeRecordDetails
     *
     * @return bool
     */
    public function getIncludeRecordDetails()
    {
        return $this->includeRecordDetails;
    }

    /**
     * Sets a new includeRecordDetails
     *
     * @param bool $includeRecordDetails
     * @return self
     */
    public function setIncludeRecordDetails($includeRecordDetails)
    {
        $this->includeRecordDetails = $includeRecordDetails;
        return $this;
    }

    /**
     * Gets as runAsCurrentUser
     *
     * @return bool
     */
    public function getRunAsCurrentUser()
    {
        return $this->runAsCurrentUser;
    }

    /**
     * Sets a new runAsCurrentUser
     *
     * @param bool $runAsCurrentUser
     * @return self
     */
    public function setRunAsCurrentUser($runAsCurrentUser)
    {
        $this->runAsCurrentUser = $runAsCurrentUser;
        return $this;
    }


}

