<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing OutgoingEmailRelationType
 *
 *
 * XSD Type: OutgoingEmailRelation
 */
class OutgoingEmailRelationType extends SObjectType
{

    /**
     * @property string $externalId
     */
    private $externalId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\OutgoingEmailType $outgoingEmail
     */
    private $outgoingEmail = null;

    /**
     * @property string $outgoingEmailId
     */
    private $outgoingEmailId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $relation
     */
    private $relation = null;

    /**
     * @property string $relationAddress
     */
    private $relationAddress = null;

    /**
     * @property string $relationId
     */
    private $relationId = null;

    /**
     * Gets as externalId
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * Sets a new externalId
     *
     * @param string $externalId
     * @return self
     */
    public function setExternalId($externalId)
    {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * Gets as outgoingEmail
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\OutgoingEmailType
     */
    public function getOutgoingEmail()
    {
        return $this->outgoingEmail;
    }

    /**
     * Sets a new outgoingEmail
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\OutgoingEmailType $outgoingEmail
     * @return self
     */
    public function setOutgoingEmail(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\OutgoingEmailType $outgoingEmail)
    {
        $this->outgoingEmail = $outgoingEmail;
        return $this;
    }

    /**
     * Gets as outgoingEmailId
     *
     * @return string
     */
    public function getOutgoingEmailId()
    {
        return $this->outgoingEmailId;
    }

    /**
     * Sets a new outgoingEmailId
     *
     * @param string $outgoingEmailId
     * @return self
     */
    public function setOutgoingEmailId($outgoingEmailId)
    {
        $this->outgoingEmailId = $outgoingEmailId;
        return $this;
    }

    /**
     * Gets as relation
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType
     */
    public function getRelation()
    {
        return $this->relation;
    }

    /**
     * Sets a new relation
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $relation
     * @return self
     */
    public function setRelation(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\SObjectType $relation)
    {
        $this->relation = $relation;
        return $this;
    }

    /**
     * Gets as relationAddress
     *
     * @return string
     */
    public function getRelationAddress()
    {
        return $this->relationAddress;
    }

    /**
     * Sets a new relationAddress
     *
     * @param string $relationAddress
     * @return self
     */
    public function setRelationAddress($relationAddress)
    {
        $this->relationAddress = $relationAddress;
        return $this;
    }

    /**
     * Gets as relationId
     *
     * @return string
     */
    public function getRelationId()
    {
        return $this->relationId;
    }

    /**
     * Sets a new relationId
     *
     * @param string $relationId
     * @return self
     */
    public function setRelationId($relationId)
    {
        $this->relationId = $relationId;
        return $this;
    }


}

