<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing Merge
 */
class Merge
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\MergeRequestType[] $request
     */
    private $request = [
        
    ];

    /**
     * Adds as request
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\MergeRequestType $request
     */
    public function addToRequest(\GoetasWebservices\Client\SalesforceEnterprise\Types\MergeRequestType $request)
    {
        $this->request[] = $request;
        return $this;
    }

    /**
     * isset request
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequest($index)
    {
        return isset($this->request[$index]);
    }

    /**
     * unset request
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequest($index)
    {
        unset($this->request[$index]);
    }

    /**
     * Gets as request
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\MergeRequestType[]
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets a new request
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\MergeRequestType[] $request
     * @return self
     */
    public function setRequest(array $request)
    {
        $this->request = $request;
        return $this;
    }


}

