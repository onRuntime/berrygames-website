<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfUserGroupRelation
 *
 * @ORM\Table(name="xf_user_group_relation", indexes={@ORM\Index(name="user_group_id_is_primary", columns={"user_group_id", "is_primary"})})
 * @ORM\Entity
 */
class XfUserGroupRelation
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
     * @var int
     *
     * @ORM\Column(name="user_group_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $userGroupId;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_primary", type="boolean", nullable=false)
     */
    private $isPrimary;

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function getUserGroupId(): ?int
    {
        return $this->userGroupId;
    }

    public function getIsPrimary(): ?bool
    {
        return $this->isPrimary;
    }

    public function setIsPrimary(bool $isPrimary): self
    {
        $this->isPrimary = $isPrimary;

        return $this;
    }


}
