<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing EntitySearchPromotionMetadataType
 *
 *
 * XSD Type: EntitySearchPromotionMetadata
 */
class EntitySearchPromotionMetadataType
{

    /**
     * @property int $promotedResultCount
     */
    private $promotedResultCount = null;

    /**
     * Gets as promotedResultCount
     *
     * @return int
     */
    public function getPromotedResultCount()
    {
        return $this->promotedResultCount;
    }

    /**
     * Sets a new promotedResultCount
     *
     * @param int $promotedResultCount
     * @return self
     */
    public function setPromotedResultCount($promotedResultCount)
    {
        $this->promotedResultCount = $promotedResultCount;
        return $this;
    }


}

