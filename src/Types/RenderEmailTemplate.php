<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing RenderEmailTemplate
 */
class RenderEmailTemplate
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\RenderEmailTemplateRequestType[] $renderRequests
     */
    private $renderRequests = [
        
    ];

    /**
     * Adds as renderRequests
     *
     * @return self
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\RenderEmailTemplateRequestType $renderRequests
     */
    public function addToRenderRequests(\GoetasWebservices\Client\SalesforceEnterprise\Types\RenderEmailTemplateRequestType $renderRequests)
    {
        $this->renderRequests[] = $renderRequests;
        return $this;
    }

    /**
     * isset renderRequests
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRenderRequests($index)
    {
        return isset($this->renderRequests[$index]);
    }

    /**
     * unset renderRequests
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRenderRequests($index)
    {
        unset($this->renderRequests[$index]);
    }

    /**
     * Gets as renderRequests
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\RenderEmailTemplateRequestType[]
     */
    public function getRenderRequests()
    {
        return $this->renderRequests;
    }

    /**
     * Sets a new renderRequests
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\RenderEmailTemplateRequestType[] $renderRequests
     * @return self
     */
    public function setRenderRequests(array $renderRequests)
    {
        $this->renderRequests = $renderRequests;
        return $this;
    }


}

