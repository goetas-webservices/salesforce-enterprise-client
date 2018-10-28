<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribeKnowledgeSettingsResponse
 */
class DescribeKnowledgeSettingsResponse
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\KnowledgeSettingsType $result
     */
    private $result = null;

    /**
     * Gets as result
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\KnowledgeSettingsType
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Sets a new result
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\KnowledgeSettingsType $result
     * @return self
     */
    public function setResult(\GoetasWebservices\Client\SalesforceEnterprise\Types\KnowledgeSettingsType $result)
    {
        $this->result = $result;
        return $this;
    }


}

