<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing ConvertLead
 */
class ConvertLead
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\LeadConvertType[] $leadConverts
     */
    private $leadConverts = [
        
    ];

    /**
     * Adds as leadConverts
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\LeadConvertType $leadConverts
     */
    public function addToLeadConverts(\GoetasWebservices\Client\SalesforceEnterprise\Types\LeadConvertType $leadConverts)
    {
        $this->leadConverts[] = $leadConverts;
        return $this;
    }

    /**
     * isset leadConverts
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLeadConverts($index)
    {
        return isset($this->leadConverts[$index]);
    }

    /**
     * unset leadConverts
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLeadConverts($index)
    {
        unset($this->leadConverts[$index]);
    }

    /**
     * Gets as leadConverts
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\LeadConvertType[]
     */
    public function getLeadConverts()
    {
        return $this->leadConverts;
    }

    /**
     * Sets a new leadConverts
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\LeadConvertType[] $leadConverts
     * @return self
     */
    public function setLeadConverts(array $leadConverts)
    {
        $this->leadConverts = $leadConverts;
        return $this;
    }


}

