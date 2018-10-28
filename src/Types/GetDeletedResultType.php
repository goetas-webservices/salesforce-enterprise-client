<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing GetDeletedResultType
 *
 *
 * XSD Type: GetDeletedResult
 */
class GetDeletedResultType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DeletedRecordType[] $deletedRecords
     */
    private $deletedRecords = [
        
    ];

    /**
     * @property \DateTime $earliestDateAvailable
     */
    private $earliestDateAvailable = null;

    /**
     * @property \DateTime $latestDateCovered
     */
    private $latestDateCovered = null;

    /**
     * Adds as deletedRecords
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DeletedRecordType $deletedRecords
     */
    public function addToDeletedRecords(\GoetasWebservices\Client\SalesforceEnterprise\Types\DeletedRecordType $deletedRecords)
    {
        $this->deletedRecords[] = $deletedRecords;
        return $this;
    }

    /**
     * isset deletedRecords
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDeletedRecords($index)
    {
        return isset($this->deletedRecords[$index]);
    }

    /**
     * unset deletedRecords
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDeletedRecords($index)
    {
        unset($this->deletedRecords[$index]);
    }

    /**
     * Gets as deletedRecords
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DeletedRecordType[]
     */
    public function getDeletedRecords()
    {
        return $this->deletedRecords;
    }

    /**
     * Sets a new deletedRecords
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DeletedRecordType[] $deletedRecords
     * @return self
     */
    public function setDeletedRecords(array $deletedRecords)
    {
        $this->deletedRecords = $deletedRecords;
        return $this;
    }

    /**
     * Gets as earliestDateAvailable
     *
     * @return \DateTime
     */
    public function getEarliestDateAvailable()
    {
        return $this->earliestDateAvailable;
    }

    /**
     * Sets a new earliestDateAvailable
     *
     * @param \DateTime $earliestDateAvailable
     * @return self
     */
    public function setEarliestDateAvailable(\DateTime $earliestDateAvailable)
    {
        $this->earliestDateAvailable = $earliestDateAvailable;
        return $this;
    }

    /**
     * Gets as latestDateCovered
     *
     * @return \DateTime
     */
    public function getLatestDateCovered()
    {
        return $this->latestDateCovered;
    }

    /**
     * Sets a new latestDateCovered
     *
     * @param \DateTime $latestDateCovered
     * @return self
     */
    public function setLatestDateCovered(\DateTime $latestDateCovered)
    {
        $this->latestDateCovered = $latestDateCovered;
        return $this;
    }


}

