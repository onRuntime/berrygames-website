<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfPermissionEntryContent
 *
 * @ORM\Table(name="xf_permission_entry_content", uniqueConstraints={@ORM\UniqueConstraint(name="user_group_id_unique", columns={"user_group_id", "user_id", "content_type", "content_id", "permission_group_id", "permission_id"})}, indexes={@ORM\Index(name="content_type_content_id", columns={"content_type", "content_id"})})
 * @ORM\Entity
 */
class XfPermissionEntryContent
{
    /**
     * @var int
     *
     * @ORM\Column(name="permission_entry_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $permissionEntryId;

    /**
     * @var binary
     *
     * @ORM\Column(name="content_type", type="binary", nullable=false)
     */
    private $contentType;

    /**
     * @var int
     *
     * @ORM\Column(name="content_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $contentId;

    /**
     * @var int
     *
     * @ORM\Column(name="user_group_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $userGroupId;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $userId;

    /**
     * @var binary
     *
     * @ORM\Column(name="permission_group_id", type="binary", nullable=false)
     */
    private $permissionGroupId;

    /**
     * @var binary
     *
     * @ORM\Column(name="permission_id", type="binary", nullable=false)
     */
    private $permissionId;

    /**
     * @var string
     *
     * @ORM\Column(name="permission_value", type="string", length=0, nullable=false)
     */
    private $permissionValue;

    /**
     * @var int
     *
     * @ORM\Column(name="permission_value_int", type="integer", nullable=false)
     */
    private $permissionValueInt;

    public function getPermissionEntryId(): ?int
    {
        return $this->permissionEntryId;
    }

    public function getContentType()
    {
        return $this->contentType;
    }

    public function setContentType($contentType): self
    {
        $this->contentType = $contentType;

        return $this;
    }

    public function getContentId(): ?int
    {
        return $this->contentId;
    }

    public function setContentId(int $contentId): self
    {
        $this->contentId = $contentId;

        return $this;
    }

    public function getUserGroupId(): ?int
    {
        return $this->userGroupId;
    }

    public function setUserGroupId(int $userGroupId): self
    {
        $this->userGroupId = $userGroupId;

        return $this;
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getPermissionGroupId()
    {
        return $this->permissionGroupId;
    }

    public function setPermissionGroupId($permissionGroupId): self
    {
        $this->permissionGroupId = $permissionGroupId;

        return $this;
    }

    public function getPermissionId()
    {
        return $this->permissionId;
    }

    public function setPermissionId($permissionId): self
    {
        $this->permissionId = $permissionId;

        return $this;
    }

    public function getPermissionValue(): ?string
    {
        return $this->permissionValue;
    }

    public function setPermissionValue(string $permissionValue): self
    {
        $this->permissionValue = $permissionValue;

        return $this;
    }

    public function getPermissionValueInt(): ?int
    {
        return $this->permissionValueInt;
    }

    public function setPermissionValueInt(int $permissionValueInt): self
    {
        $this->permissionValueInt = $permissionValueInt;

        return $this;
    }


}
