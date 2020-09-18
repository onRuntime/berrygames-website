<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfForumRead
 *
 * @ORM\Table(name="xf_forum_read", uniqueConstraints={@ORM\UniqueConstraint(name="user_id_node_id", columns={"user_id", "node_id"})}, indexes={@ORM\Index(name="forum_read_date", columns={"forum_read_date"}), @ORM\Index(name="node_id", columns={"node_id"})})
 * @ORM\Entity
 */
class XfForumRead
{
    /**
     * @var int
     *
     * @ORM\Column(name="forum_read_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $forumReadId;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $userId;

    /**
     * @var int
     *
     * @ORM\Column(name="node_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $nodeId;

    /**
     * @var int
     *
     * @ORM\Column(name="forum_read_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $forumReadDate;

    public function getForumReadId(): ?int
    {
        return $this->forumReadId;
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

    public function getNodeId(): ?int
    {
        return $this->nodeId;
    }

    public function setNodeId(int $nodeId): self
    {
        $this->nodeId = $nodeId;

        return $this;
    }

    public function getForumReadDate(): ?int
    {
        return $this->forumReadDate;
    }

    public function setForumReadDate(int $forumReadDate): self
    {
        $this->forumReadDate = $forumReadDate;

        return $this;
    }


}
