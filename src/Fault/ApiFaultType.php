<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Fault;

/**
 * Class representing ApiFaultType
 *
 *
 * XSD Type: ApiFault
 */
class ApiFaultType
{

    /**
     * @property string $exceptionCode
     */
    private $exceptionCode = null;

    /**
     * @property string $exceptionMessage
     */
    private $exceptionMessage = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\ExtendedErrorDetailsType[] $extendedErrorDetails
     */
    private $extendedErrorDetails = [
        
    ];

    /**
     * Gets as exceptionCode
     *
     * @return string
     */
    public function getExceptionCode()
    {
        return $this->exceptionCode;
    }

    /**
     * Sets a new exceptionCode
     *
     * @param string $exceptionCode
     * @return self
     */
    public function setExceptionCode($exceptionCode)
    {
        $this->exceptionCode = $exceptionCode;
        return $this;
    }

    /**
     * Gets as exceptionMessage
     *
     * @return string
     */
    public function getExceptionMessage()
    {
        return $this->exceptionMessage;
    }

    /**
     * Sets a new exceptionMessage
     *
     * @param string $exceptionMessage
     * @return self
     */
    public function setExceptionMessage($exceptionMessage)
    {
        $this->exceptionMessage = $exceptionMessage;
        return $this;
    }

    /**
     * Adds as extendedErrorDetails
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\ExtendedErrorDetailsType $extendedErrorDetails
     */
    public function addToExtendedErrorDetails(\GoetasWebservices\Client\SalesforceEnterprise\Types\ExtendedErrorDetailsType $extendedErrorDetails)
    {
        $this->extendedErrorDetails[] = $extendedErrorDetails;
        return $this;
    }

    /**
     * isset extendedErrorDetails
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExtendedErrorDetails($index)
    {
        return isset($this->extendedErrorDetails[$index]);
    }

    /**
     * unset extendedErrorDetails
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExtendedErrorDetails($index)
    {
        unset($this->extendedErrorDetails[$index]);
    }

    /**
     * Gets as extendedErrorDetails
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\ExtendedErrorDetailsType[]
     */
    public function getExtendedErrorDetails()
    {
        return $this->extendedErrorDetails;
    }

    /**
     * Sets a new extendedErrorDetails
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\ExtendedErrorDetailsType[] $extendedErrorDetails
     * @return self
     */
    public function setExtendedErrorDetails(array $extendedErrorDetails)
    {
        $this->extendedErrorDetails = $extendedErrorDetails;
        return $this;
    }


}

