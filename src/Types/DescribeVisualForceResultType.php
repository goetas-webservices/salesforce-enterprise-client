<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing DescribeVisualForceResultType
 *
 *
 * XSD Type: DescribeVisualForceResult
 */
class DescribeVisualForceResultType
{

    /**
     * @property string $domain
     */
    private $domain = null;

    /**
     * Gets as domain
     *
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Sets a new domain
     *
     * @param string $domain
     * @return self
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
        return $this;
    }


}

