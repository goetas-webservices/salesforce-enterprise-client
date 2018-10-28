<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DeletedRecordType
 *
 *
 * XSD Type: DeletedRecord
 */
class DeletedRecordType
{

    /**
     * @property \DateTime $deletedDate
     */
    private $deletedDate = null;

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * Gets as deletedDate
     *
     * @return \DateTime
     */
    public function getDeletedDate()
    {
        return $this->deletedDate;
    }

    /**
     * Sets a new deletedDate
     *
     * @param \DateTime $deletedDate
     * @return self
     */
    public function setDeletedDate(\DateTime $deletedDate)
    {
        $this->deletedDate = $deletedDate;
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


}

