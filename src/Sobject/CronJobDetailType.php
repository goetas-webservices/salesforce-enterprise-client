<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing CronJobDetailType
 *
 *
 * XSD Type: CronJobDetail
 */
class CronJobDetailType extends SObjectType
{

    /**
     * @property string $jobType
     */
    private $jobType = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * Gets as jobType
     *
     * @return string
     */
    public function getJobType()
    {
        return $this->jobType;
    }

    /**
     * Sets a new jobType
     *
     * @param string $jobType
     * @return self
     */
    public function setJobType($jobType)
    {
        $this->jobType = $jobType;
        return $this;
    }

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }


}

