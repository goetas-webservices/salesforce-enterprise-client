<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing CustomLinkComponentType
 *
 *
 * XSD Type: CustomLinkComponent
 */
class CustomLinkComponentType extends DescribeLayoutComponentType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutButtonType $customLink
     */
    private $customLink = null;

    /**
     * Gets as customLink
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutButtonType
     */
    public function getCustomLink()
    {
        return $this->customLink;
    }

    /**
     * Sets a new customLink
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutButtonType $customLink
     * @return self
     */
    public function setCustomLink(\GoetasWebservices\Client\SalesforceEnterprise\Types\DescribeLayoutButtonType $customLink)
    {
        $this->customLink = $customLink;
        return $this;
    }


}

