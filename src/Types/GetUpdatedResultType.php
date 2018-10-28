<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing GetUpdatedResultType
 *
 *
 * XSD Type: GetUpdatedResult
 */
class GetUpdatedResultType
{

    /**
     * @property string[] $ids
     */
    private $ids = [
        
    ];

    /**
     * @property \DateTime $latestDateCovered
     */
    private $latestDateCovered = null;

    /**
     * Adds as ids
     *
     * @return self
     * @param string $ids
     */
    public function addToIds($ids)
    {
        $this->ids[] = $ids;
        return $this;
    }

    /**
     * isset ids
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIds($index)
    {
        return isset($this->ids[$index]);
    }

    /**
     * unset ids
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIds($index)
    {
        unset($this->ids[$index]);
    }

    /**
     * Gets as ids
     *
     * @return string[]
     */
    public function getIds()
    {
        return $this->ids;
    }

    /**
     * Sets a new ids
     *
     * @param string $ids
     * @return self
     */
    public function setIds(array $ids)
    {
        $this->ids = $ids;
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

