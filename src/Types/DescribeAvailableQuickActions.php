<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribeAvailableQuickActions
 */
class DescribeAvailableQuickActions
{

    /**
     * @property string $contextType
     */
    private $contextType = null;

    /**
     * Gets as contextType
     *
     * @return string
     */
    public function getContextType()
    {
        return $this->contextType;
    }

    /**
     * Sets a new contextType
     *
     * @param string $contextType
     * @return self
     */
    public function setContextType($contextType)
    {
        $this->contextType = $contextType;
        return $this;
    }


}

