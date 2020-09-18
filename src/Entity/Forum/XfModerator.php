<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfModerator
 *
 * @ORM\Table(name="xf_moderator")
 * @ORM\Entity
 */
class XfModerator
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
     * @var bool
     *
     * @ORM\Column(name="is_super_moderator", type="boolean", nullable=false)
     */
    private $isSuperModerator;

    /**
     * @var binary
     *
     * @ORM\Column(name="extra_user_group_ids", type="binary", nullable=false)
     */
    private $extraUserGroupIds;

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function getIsSuperModerator(): ?bool
    {
        return $this->isSuperModerator;
    }

    public function setIsSuperModerator(bool $isSuperModerator): self
    {
        $this->isSuperModerator = $isSuperModerator;

        return $this;
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


}
