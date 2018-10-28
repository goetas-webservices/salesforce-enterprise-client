<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribeSoftphoneLayoutResultType
 *
 *
 * XSD Type: DescribeSoftphoneLayoutResult
 */
class DescribeSoftphoneLayoutResultType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSoftphoneLayoutCallType[] $callTypes
     */
    private $callTypes = [
        
    ];

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * Adds as callTypes
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSoftphoneLayoutCallType $callTypes
     */
    public function addToCallTypes(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSoftphoneLayoutCallType $callTypes)
    {
        $this->callTypes[] = $callTypes;
        return $this;
    }

    /**
     * isset callTypes
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCallTypes($index)
    {
        return isset($this->callTypes[$index]);
    }

    /**
     * unset callTypes
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCallTypes($index)
    {
        unset($this->callTypes[$index]);
    }

    /**
     * Gets as callTypes
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSoftphoneLayoutCallType[]
     */
    public function getCallTypes()
    {
        return $this->callTypes;
    }

    /**
     * Sets a new callTypes
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeSoftphoneLayoutCallType[] $callTypes
     * @return self
     */
    public function setCallTypes(array $callTypes)
    {
        $this->callTypes = $callTypes;
        return $this;
    }

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
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

