<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing ExtendedErrorDetailsType
 *
 *
 * XSD Type: ExtendedErrorDetails
 */
class ExtendedErrorDetailsType
{

    /**
     * @property string $extendedErrorCode
     */
    private $extendedErrorCode = null;

    /**
     * Gets as extendedErrorCode
     *
     * @return string
     */
    public function getExtendedErrorCode()
    {
        return $this->extendedErrorCode;
    }

    /**
     * Sets a new extendedErrorCode
     *
     * @param string $extendedErrorCode
     * @return self
     */
    public function setExtendedErrorCode($extendedErrorCode)
    {
        $this->extendedErrorCode = $extendedErrorCode;
        return $this;
    }


}

