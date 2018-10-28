<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Types;

/**
 * Class representing KnowledgeLanguageItemType
 *
 *
 * XSD Type: KnowledgeLanguageItem
 */
class KnowledgeLanguageItemType
{

    /**
     * @property bool $active
     */
    private $active = null;

    /**
     * @property string $assigneeId
     */
    private $assigneeId = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * Gets as active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Sets a new active
     *
     * @param bool $active
     * @return self
     */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }

    /**
     * Gets as assigneeId
     *
     * @return string
     */
    public function getAssigneeId()
    {
        return $this->assigneeId;
    }

    /**
     * Sets a new assigneeId
     *
     * @param string $assigneeId
     * @return self
     */
    public function setAssigneeId($assigneeId)
    {
        $this->assigneeId = $assigneeId;
        return $this;
    }

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }


}

