<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfPermissionCombination
 *
 * @ORM\Table(name="xf_permission_combination", indexes={@ORM\Index(name="user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class XfPermissionCombination
{
    /**
     * @var int
     *
     * @ORM\Column(name="permission_combination_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $permissionCombinationId;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="user_group_list", type="blob", length=16777215, nullable=false)
     */
    private $userGroupList;

    /**
     * @var string
     *
     * @ORM\Column(name="cache_value", type="blob", length=16777215, nullable=false)
     */
    private $cacheValue;

    public function getPermissionCombinationId(): ?int
    {
        return $this->permissionCombinationId;
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

    public function getUserGroupList()
    {
        return $this->userGroupList;
    }

    public function setUserGroupList($userGroupList): self
    {
        $this->userGroupList = $userGroupList;

        return $this;
    }

    public function getCacheValue()
    {
        return $this->cacheValue;
    }

    public function setCacheValue($cacheValue): self
    {
        $this->cacheValue = $cacheValue;

        return $this;
    }


}
