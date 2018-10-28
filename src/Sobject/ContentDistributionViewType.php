<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing ContentDistributionViewType
 *
 *
 * XSD Type: ContentDistributionView
 */
class ContentDistributionViewType extends SObjectType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $createdBy
     */
    private $createdBy = null;

    /**
     * @property string $createdById
     */
    private $createdById = null;

    /**
     * @property \DateTime $createdDate
     */
    private $createdDate = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentDistributionType $distribution
     */
    private $distribution = null;

    /**
     * @property string $distributionId
     */
    private $distributionId = null;

    /**
     * @property bool $isDeleted
     */
    private $isDeleted = null;

    /**
     * @property bool $isDownload
     */
    private $isDownload = null;

    /**
     * @property bool $isInternal
     */
    private $isInternal = null;

    /**
     * @property string $parentViewId
     */
    private $parentViewId = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * Gets as createdBy
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Sets a new createdBy
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $createdBy
     * @return self
     */
    public function setCreatedBy(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $createdBy)
    {
        $this->createdBy = $createdBy;
        return $this;
    }

    /**
     * Gets as createdById
     *
     * @return string
     */
    public function getCreatedById()
    {
        return $this->createdById;
    }

    /**
     * Sets a new createdById
     *
     * @param string $createdById
     * @return self
     */
    public function setCreatedById($createdById)
    {
        $this->createdById = $createdById;
        return $this;
    }

    /**
     * Gets as createdDate
     *
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * Sets a new createdDate
     *
     * @param \DateTime $createdDate
     * @return self
     */
    public function setCreatedDate(\DateTime $createdDate)
    {
        $this->createdDate = $createdDate;
        return $this;
    }

    /**
     * Gets as distribution
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentDistributionType
     */
    public function getDistribution()
    {
        return $this->distribution;
    }

    /**
     * Sets a new distribution
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentDistributionType $distribution
     * @return self
     */
    public function setDistribution(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\ContentDistributionType $distribution)
    {
        $this->distribution = $distribution;
        return $this;
    }

    /**
     * Gets as distributionId
     *
     * @return string
     */
    public function getDistributionId()
    {
        return $this->distributionId;
    }

    /**
     * Sets a new distributionId
     *
     * @param string $distributionId
     * @return self
     */
    public function setDistributionId($distributionId)
    {
        $this->distributionId = $distributionId;
        return $this;
    }

    /**
     * Gets as isDeleted
     *
     * @return bool
     */
    public function getIsDeleted()
    {
        return $this->isDeleted;
    }

    /**
     * Sets a new isDeleted
     *
     * @param bool $isDeleted
     * @return self
     */
    public function setIsDeleted($isDeleted)
    {
        $this->isDeleted = $isDeleted;
        return $this;
    }

    /**
     * Gets as isDownload
     *
     * @return bool
     */
    public function getIsDownload()
    {
        return $this->isDownload;
    }

    /**
     * Sets a new isDownload
     *
     * @param bool $isDownload
     * @return self
     */
    public function setIsDownload($isDownload)
    {
        $this->isDownload = $isDownload;
        return $this;
    }

    /**
     * Gets as isInternal
     *
     * @return bool
     */
    public function getIsInternal()
    {
        return $this->isInternal;
    }

    /**
     * Sets a new isInternal
     *
     * @param bool $isInternal
     * @return self
     */
    public function setIsInternal($isInternal)
    {
        $this->isInternal = $isInternal;
        return $this;
    }

    /**
     * Gets as parentViewId
     *
     * @return string
     */
    public function getParentViewId()
    {
        return $this->parentViewId;
    }

    /**
     * Sets a new parentViewId
     *
     * @param string $parentViewId
     * @return self
     */
    public function setParentViewId($parentViewId)
    {
        $this->parentViewId = $parentViewId;
        return $this;
    }

    /**
     * Gets as systemModstamp
     *
     * @return \DateTime
     */
    public function getSystemModstamp()
    {
        return $this->systemModstamp;
    }

    /**
     * Sets a new systemModstamp
     *
     * @param \DateTime $systemModstamp
     * @return self
     */
    public function setSystemModstamp(\DateTime $systemModstamp)
    {
        $this->systemModstamp = $systemModstamp;
        return $this;
    }


}

