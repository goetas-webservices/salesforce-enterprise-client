<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing ContentWorkspacePermissionType
 *
 *
 * XSD Type: ContentWorkspacePermission
 */
class ContentWorkspacePermissionType extends SObjectType
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
     * @property string $description
     */
    private $description = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $lastModifiedBy
     */
    private $lastModifiedBy = null;

    /**
     * @property string $lastModifiedById
     */
    private $lastModifiedById = null;

    /**
     * @property \DateTime $lastModifiedDate
     */
    private $lastModifiedDate = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property bool $permissionsAddComment
     */
    private $permissionsAddComment = null;

    /**
     * @property bool $permissionsAddContent
     */
    private $permissionsAddContent = null;

    /**
     * @property bool $permissionsAddContentOBO
     */
    private $permissionsAddContentOBO = null;

    /**
     * @property bool $permissionsArchiveContent
     */
    private $permissionsArchiveContent = null;

    /**
     * @property bool $permissionsChatterSharing
     */
    private $permissionsChatterSharing = null;

    /**
     * @property bool $permissionsDeleteContent
     */
    private $permissionsDeleteContent = null;

    /**
     * @property bool $permissionsDeliverContent
     */
    private $permissionsDeliverContent = null;

    /**
     * @property bool $permissionsFeatureContent
     */
    private $permissionsFeatureContent = null;

    /**
     * @property bool $permissionsManageWorkspace
     */
    private $permissionsManageWorkspace = null;

    /**
     * @property bool $permissionsModifyComments
     */
    private $permissionsModifyComments = null;

    /**
     * @property bool $permissionsOrganizeFileAndFolder
     */
    private $permissionsOrganizeFileAndFolder = null;

    /**
     * @property bool $permissionsTagContent
     */
    private $permissionsTagContent = null;

    /**
     * @property bool $permissionsViewComments
     */
    private $permissionsViewComments = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property string $type
     */
    private $type = null;

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
     * Gets as description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as lastModifiedBy
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType
     */
    public function getLastModifiedBy()
    {
        return $this->lastModifiedBy;
    }

    /**
     * Sets a new lastModifiedBy
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $lastModifiedBy
     * @return self
     */
    public function setLastModifiedBy(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\UserType $lastModifiedBy)
    {
        $this->lastModifiedBy = $lastModifiedBy;
        return $this;
    }

    /**
     * Gets as lastModifiedById
     *
     * @return string
     */
    public function getLastModifiedById()
    {
        return $this->lastModifiedById;
    }

    /**
     * Sets a new lastModifiedById
     *
     * @param string $lastModifiedById
     * @return self
     */
    public function setLastModifiedById($lastModifiedById)
    {
        $this->lastModifiedById = $lastModifiedById;
        return $this;
    }

    /**
     * Gets as lastModifiedDate
     *
     * @return \DateTime
     */
    public function getLastModifiedDate()
    {
        return $this->lastModifiedDate;
    }

    /**
     * Sets a new lastModifiedDate
     *
     * @param \DateTime $lastModifiedDate
     * @return self
     */
    public function setLastModifiedDate(\DateTime $lastModifiedDate)
    {
        $this->lastModifiedDate = $lastModifiedDate;
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

    /**
     * Gets as permissionsAddComment
     *
     * @return bool
     */
    public function getPermissionsAddComment()
    {
        return $this->permissionsAddComment;
    }

    /**
     * Sets a new permissionsAddComment
     *
     * @param bool $permissionsAddComment
     * @return self
     */
    public function setPermissionsAddComment($permissionsAddComment)
    {
        $this->permissionsAddComment = $permissionsAddComment;
        return $this;
    }

    /**
     * Gets as permissionsAddContent
     *
     * @return bool
     */
    public function getPermissionsAddContent()
    {
        return $this->permissionsAddContent;
    }

    /**
     * Sets a new permissionsAddContent
     *
     * @param bool $permissionsAddContent
     * @return self
     */
    public function setPermissionsAddContent($permissionsAddContent)
    {
        $this->permissionsAddContent = $permissionsAddContent;
        return $this;
    }

    /**
     * Gets as permissionsAddContentOBO
     *
     * @return bool
     */
    public function getPermissionsAddContentOBO()
    {
        return $this->permissionsAddContentOBO;
    }

    /**
     * Sets a new permissionsAddContentOBO
     *
     * @param bool $permissionsAddContentOBO
     * @return self
     */
    public function setPermissionsAddContentOBO($permissionsAddContentOBO)
    {
        $this->permissionsAddContentOBO = $permissionsAddContentOBO;
        return $this;
    }

    /**
     * Gets as permissionsArchiveContent
     *
     * @return bool
     */
    public function getPermissionsArchiveContent()
    {
        return $this->permissionsArchiveContent;
    }

    /**
     * Sets a new permissionsArchiveContent
     *
     * @param bool $permissionsArchiveContent
     * @return self
     */
    public function setPermissionsArchiveContent($permissionsArchiveContent)
    {
        $this->permissionsArchiveContent = $permissionsArchiveContent;
        return $this;
    }

    /**
     * Gets as permissionsChatterSharing
     *
     * @return bool
     */
    public function getPermissionsChatterSharing()
    {
        return $this->permissionsChatterSharing;
    }

    /**
     * Sets a new permissionsChatterSharing
     *
     * @param bool $permissionsChatterSharing
     * @return self
     */
    public function setPermissionsChatterSharing($permissionsChatterSharing)
    {
        $this->permissionsChatterSharing = $permissionsChatterSharing;
        return $this;
    }

    /**
     * Gets as permissionsDeleteContent
     *
     * @return bool
     */
    public function getPermissionsDeleteContent()
    {
        return $this->permissionsDeleteContent;
    }

    /**
     * Sets a new permissionsDeleteContent
     *
     * @param bool $permissionsDeleteContent
     * @return self
     */
    public function setPermissionsDeleteContent($permissionsDeleteContent)
    {
        $this->permissionsDeleteContent = $permissionsDeleteContent;
        return $this;
    }

    /**
     * Gets as permissionsDeliverContent
     *
     * @return bool
     */
    public function getPermissionsDeliverContent()
    {
        return $this->permissionsDeliverContent;
    }

    /**
     * Sets a new permissionsDeliverContent
     *
     * @param bool $permissionsDeliverContent
     * @return self
     */
    public function setPermissionsDeliverContent($permissionsDeliverContent)
    {
        $this->permissionsDeliverContent = $permissionsDeliverContent;
        return $this;
    }

    /**
     * Gets as permissionsFeatureContent
     *
     * @return bool
     */
    public function getPermissionsFeatureContent()
    {
        return $this->permissionsFeatureContent;
    }

    /**
     * Sets a new permissionsFeatureContent
     *
     * @param bool $permissionsFeatureContent
     * @return self
     */
    public function setPermissionsFeatureContent($permissionsFeatureContent)
    {
        $this->permissionsFeatureContent = $permissionsFeatureContent;
        return $this;
    }

    /**
     * Gets as permissionsManageWorkspace
     *
     * @return bool
     */
    public function getPermissionsManageWorkspace()
    {
        return $this->permissionsManageWorkspace;
    }

    /**
     * Sets a new permissionsManageWorkspace
     *
     * @param bool $permissionsManageWorkspace
     * @return self
     */
    public function setPermissionsManageWorkspace($permissionsManageWorkspace)
    {
        $this->permissionsManageWorkspace = $permissionsManageWorkspace;
        return $this;
    }

    /**
     * Gets as permissionsModifyComments
     *
     * @return bool
     */
    public function getPermissionsModifyComments()
    {
        return $this->permissionsModifyComments;
    }

    /**
     * Sets a new permissionsModifyComments
     *
     * @param bool $permissionsModifyComments
     * @return self
     */
    public function setPermissionsModifyComments($permissionsModifyComments)
    {
        $this->permissionsModifyComments = $permissionsModifyComments;
        return $this;
    }

    /**
     * Gets as permissionsOrganizeFileAndFolder
     *
     * @return bool
     */
    public function getPermissionsOrganizeFileAndFolder()
    {
        return $this->permissionsOrganizeFileAndFolder;
    }

    /**
     * Sets a new permissionsOrganizeFileAndFolder
     *
     * @param bool $permissionsOrganizeFileAndFolder
     * @return self
     */
    public function setPermissionsOrganizeFileAndFolder($permissionsOrganizeFileAndFolder)
    {
        $this->permissionsOrganizeFileAndFolder = $permissionsOrganizeFileAndFolder;
        return $this;
    }

    /**
     * Gets as permissionsTagContent
     *
     * @return bool
     */
    public function getPermissionsTagContent()
    {
        return $this->permissionsTagContent;
    }

    /**
     * Sets a new permissionsTagContent
     *
     * @param bool $permissionsTagContent
     * @return self
     */
    public function setPermissionsTagContent($permissionsTagContent)
    {
        $this->permissionsTagContent = $permissionsTagContent;
        return $this;
    }

    /**
     * Gets as permissionsViewComments
     *
     * @return bool
     */
    public function getPermissionsViewComments()
    {
        return $this->permissionsViewComments;
    }

    /**
     * Sets a new permissionsViewComments
     *
     * @param bool $permissionsViewComments
     * @return self
     */
    public function setPermissionsViewComments($permissionsViewComments)
    {
        $this->permissionsViewComments = $permissionsViewComments;
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

    /**
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }


}

