<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfUserGroupChange
 *
 * @ORM\Table(name="xf_user_group_change", indexes={@ORM\Index(name="change_key", columns={"change_key"})})
 * @ORM\Entity
 */
class XfUserGroupChange
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
     * @ORM\Column(name="change_key", type="binary", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $changeKey;

    /**
     * @var binary
     *
     * @ORM\Column(name="group_ids", type="binary", nullable=false)
     */
    private $groupIds;

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function getChangeKey()
    {
        return $this->changeKey;
    }

    public function getGroupIds()
    {
        return $this->groupIds;
    }

    public function setGroupIds($groupIds): self
    {
        $this->groupIds = $groupIds;

        return $this;
    }


}
