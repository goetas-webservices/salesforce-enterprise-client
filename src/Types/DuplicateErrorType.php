<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DuplicateErrorType
 *
 *
 * XSD Type: DuplicateError
 */
class DuplicateErrorType extends ErrorType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DuplicateResultType $duplicateResult
     */
    private $duplicateResult = null;

    /**
     * Gets as duplicateResult
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DuplicateResultType
     */
    public function getDuplicateResult()
    {
        return $this->duplicateResult;
    }

    /**
     * Sets a new duplicateResult
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DuplicateResultType $duplicateResult
     * @return self
     */
    public function setDuplicateResult(\GoetasWebservices\Client\SalesforceEnterprise\Types\DuplicateResultType $duplicateResult)
    {
        $this->duplicateResult = $duplicateResult;
        return $this;
    }


}

