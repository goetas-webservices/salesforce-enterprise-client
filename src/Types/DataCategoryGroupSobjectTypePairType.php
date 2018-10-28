<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DataCategoryGroupSobjectTypePairType
 *
 *
 * XSD Type: DataCategoryGroupSobjectTypePair
 */
class DataCategoryGroupSobjectTypePairType
{

    /**
     * @property string $dataCategoryGroupName
     */
    private $dataCategoryGroupName = null;

    /**
     * @property string $sobject
     */
    private $sobject = null;

    /**
     * Gets as dataCategoryGroupName
     *
     * @return string
     */
    public function getDataCategoryGroupName()
    {
        return $this->dataCategoryGroupName;
    }

    /**
     * Sets a new dataCategoryGroupName
     *
     * @param string $dataCategoryGroupName
     * @return self
     */
    public function setDataCategoryGroupName($dataCategoryGroupName)
    {
        $this->dataCategoryGroupName = $dataCategoryGroupName;
        return $this;
    }

    /**
     * Gets as sobject
     *
     * @return string
     */
    public function getSobject()
    {
        return $this->sobject;
    }

    /**
     * Sets a new sobject
     *
     * @param string $sobject
     * @return self
     */
    public function setSobject($sobject)
    {
        $this->sobject = $sobject;
        return $this;
    }


}

