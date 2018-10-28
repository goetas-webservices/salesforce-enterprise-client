<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing ChildRelationshipType
 *
 *
 * XSD Type: ChildRelationship
 */
class ChildRelationshipType
{

    /**
     * @property bool $cascadeDelete
     */
    private $cascadeDelete = null;

    /**
     * @property string $childSObject
     */
    private $childSObject = null;

    /**
     * @property bool $deprecatedAndHidden
     */
    private $deprecatedAndHidden = null;

    /**
     * @property string $field
     */
    private $field = null;

    /**
     * @property string[] $junctionIdListNames
     */
    private $junctionIdListNames = [
        
    ];

    /**
     * @property string[] $junctionReferenceTo
     */
    private $junctionReferenceTo = [
        
    ];

    /**
     * @property string $relationshipName
     */
    private $relationshipName = null;

    /**
     * @property bool $restrictedDelete
     */
    private $restrictedDelete = null;

    /**
     * Gets as cascadeDelete
     *
     * @return bool
     */
    public function getCascadeDelete()
    {
        return $this->cascadeDelete;
    }

    /**
     * Sets a new cascadeDelete
     *
     * @param bool $cascadeDelete
     * @return self
     */
    public function setCascadeDelete($cascadeDelete)
    {
        $this->cascadeDelete = $cascadeDelete;
        return $this;
    }

    /**
     * Gets as childSObject
     *
     * @return string
     */
    public function getChildSObject()
    {
        return $this->childSObject;
    }

    /**
     * Sets a new childSObject
     *
     * @param string $childSObject
     * @return self
     */
    public function setChildSObject($childSObject)
    {
        $this->childSObject = $childSObject;
        return $this;
    }

    /**
     * Gets as deprecatedAndHidden
     *
     * @return bool
     */
    public function getDeprecatedAndHidden()
    {
        return $this->deprecatedAndHidden;
    }

    /**
     * Sets a new deprecatedAndHidden
     *
     * @param bool $deprecatedAndHidden
     * @return self
     */
    public function setDeprecatedAndHidden($deprecatedAndHidden)
    {
        $this->deprecatedAndHidden = $deprecatedAndHidden;
        return $this;
    }

    /**
     * Gets as field
     *
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * Sets a new field
     *
     * @param string $field
     * @return self
     */
    public function setField($field)
    {
        $this->field = $field;
        return $this;
    }

    /**
     * Adds as junctionIdListNames
     *
     * @return self
     * @param string $junctionIdListNames
     */
    public function addToJunctionIdListNames($junctionIdListNames)
    {
        $this->junctionIdListNames[] = $junctionIdListNames;
        return $this;
    }

    /**
     * isset junctionIdListNames
     *
     * @param int|string $index
     * @return bool
     */
    public function issetJunctionIdListNames($index)
    {
        return isset($this->junctionIdListNames[$index]);
    }

    /**
     * unset junctionIdListNames
     *
     * @param int|string $index
     * @return void
     */
    public function unsetJunctionIdListNames($index)
    {
        unset($this->junctionIdListNames[$index]);
    }

    /**
     * Gets as junctionIdListNames
     *
     * @return string[]
     */
    public function getJunctionIdListNames()
    {
        return $this->junctionIdListNames;
    }

    /**
     * Sets a new junctionIdListNames
     *
     * @param string[] $junctionIdListNames
     * @return self
     */
    public function setJunctionIdListNames(array $junctionIdListNames)
    {
        $this->junctionIdListNames = $junctionIdListNames;
        return $this;
    }

    /**
     * Adds as junctionReferenceTo
     *
     * @return self
     * @param string $junctionReferenceTo
     */
    public function addToJunctionReferenceTo($junctionReferenceTo)
    {
        $this->junctionReferenceTo[] = $junctionReferenceTo;
        return $this;
    }

    /**
     * isset junctionReferenceTo
     *
     * @param int|string $index
     * @return bool
     */
    public function issetJunctionReferenceTo($index)
    {
        return isset($this->junctionReferenceTo[$index]);
    }

    /**
     * unset junctionReferenceTo
     *
     * @param int|string $index
     * @return void
     */
    public function unsetJunctionReferenceTo($index)
    {
        unset($this->junctionReferenceTo[$index]);
    }

    /**
     * Gets as junctionReferenceTo
     *
     * @return string[]
     */
    public function getJunctionReferenceTo()
    {
        return $this->junctionReferenceTo;
    }

    /**
     * Sets a new junctionReferenceTo
     *
     * @param string[] $junctionReferenceTo
     * @return self
     */
    public function setJunctionReferenceTo(array $junctionReferenceTo)
    {
        $this->junctionReferenceTo = $junctionReferenceTo;
        return $this;
    }

    /**
     * Gets as relationshipName
     *
     * @return string
     */
    public function getRelationshipName()
    {
        return $this->relationshipName;
    }

    /**
     * Sets a new relationshipName
     *
     * @param string $relationshipName
     * @return self
     */
    public function setRelationshipName($relationshipName)
    {
        $this->relationshipName = $relationshipName;
        return $this;
    }

    /**
     * Gets as restrictedDelete
     *
     * @return bool
     */
    public function getRestrictedDelete()
    {
        return $this->restrictedDelete;
    }

    /**
     * Sets a new restrictedDelete
     *
     * @param bool $restrictedDelete
     * @return self
     */
    public function setRestrictedDelete($restrictedDelete)
    {
        $this->restrictedDelete = $restrictedDelete;
        return $this;
    }


}

