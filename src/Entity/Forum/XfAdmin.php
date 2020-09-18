<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfAdmin
 *
 * @ORM\Table(name="xf_admin")
 * @ORM\Entity
 */
class XfAdmin
{
    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userId;

    /**
     * @var binary
     *
     * @ORM\Column(name="extra_user_group_ids", type="binary", nullable=false)
     */
    private $extraUserGroupIds;

    /**
     * @var int
     *
     * @ORM\Column(name="last_login", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $lastLogin = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="permission_cache", type="blob", length=16777215, nullable=true)
     */
    private $permissionCache;

    /**
     * @var int
     *
     * @ORM\Column(name="admin_language_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $adminLanguageId = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="is_super_admin", type="boolean", nullable=false)
     */
    private $isSuperAdmin = '0';

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function getExtraUserGroupIds()
    {
        return $this->extraUserGroupIds;
    }

    public function setExtraUserGroupIds($extraUserGroupIds): self
    {
        $this->extraUserGroupIds = $extraUserGroupIds;

        return $this;
    }

    public function getLastLogin(): ?int
    {
        return $this->lastLogin;
    }

    public function setLastLogin(int $lastLogin): self
    {
        $this->lastLogin = $lastLogin;

        return $this;
    }

    public function getPermissionCache()
    {
        return $this->permissionCache;
    }

    public function setPermissionCache($permissionCache): self
    {
        $this->permissionCache = $permissionCache;

        return $this;
    }

    public function getAdminLanguageId(): ?int
    {
        return $this->adminLanguageId;
    }

    public function setAdminLanguageId(int $adminLanguageId): self
    {
        $this->adminLanguageId = $adminLanguageId;

        return $this;
    }

    public function getIsSuperAdmin(): ?bool
    {
        return $this->isSuperAdmin;
    }

    public function setIsSuperAdmin(bool $isSuperAdmin): self
    {
        $this->isSuperAdmin = $isSuperAdmin;

        return $this;
    }


}
