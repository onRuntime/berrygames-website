<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfPermissionCombinationUserGroup
 *
 * @ORM\Table(name="xf_permission_combination_user_group", indexes={@ORM\Index(name="permission_combination_id", columns={"permission_combination_id"})})
 * @ORM\Entity
 */
class XfPermissionCombinationUserGroup
{
    /**
     * @var int
     *
     * @ORM\Column(name="user_group_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $userGroupId;

    /**
     * @var int
     *
     * @ORM\Column(name="permission_combination_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $permissionCombinationId;

    public function getUserGroupId(): ?int
    {
        return $this->userGroupId;
    }

    public function getPermissionCombinationId(): ?int
    {
        return $this->permissionCombinationId;
    }


}
