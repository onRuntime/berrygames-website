<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfAdminPermissionEntry
 *
 * @ORM\Table(name="xf_admin_permission_entry")
 * @ORM\Entity
 */
class XfAdminPermissionEntry
{
    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $userId;

    /**
     * @var binary
     *
     * @ORM\Column(name="admin_permission_id", type="binary", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $adminPermissionId;

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function getAdminPermissionId()
    {
        return $this->adminPermissionId;
    }


}
