<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing EntityIntentQueryMetadataType
 *
 *
 * XSD Type: EntityIntentQueryMetadata
 */
class EntityIntentQueryMetadataType
{

    /**
     * @property bool $intentQuery
     */
    private $intentQuery = null;

    /**
     * @property string $message
     */
    private $message = null;

    /**
     * Gets as intentQuery
     *
     * @return bool
     */
    public function getIntentQuery()
    {
        return $this->intentQuery;
    }

    /**
     * Sets a new intentQuery
     *
     * @param bool $intentQuery
     * @return self
     */
    public function setIntentQuery($intentQuery)
    {
        $this->intentQuery = $intentQuery;
        return $this;
    }

    /**
     * Gets as message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Sets a new message
     *
     * @param string $message
     * @return self
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }


}

