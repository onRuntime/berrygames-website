<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfPermissionEntry
 *
 * @ORM\Table(name="xf_permission_entry", uniqueConstraints={@ORM\UniqueConstraint(name="unique_permission", columns={"user_group_id", "user_id", "permission_group_id", "permission_id"})})
 * @ORM\Entity
 */
class XfPermissionEntry
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
