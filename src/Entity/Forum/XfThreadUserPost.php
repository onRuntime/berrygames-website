<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfThreadUserPost
 *
 * @ORM\Table(name="xf_thread_user_post", indexes={@ORM\Index(name="user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class XfThreadUserPost
{
    /**
     * @var int
     *
     * @ORM\Column(name="thread_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $threadId;

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
     * @ORM\Column(name="post_count", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $postCount;

    public function getThreadId(): ?int
    {
        return $this->threadId;
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function getPostCount(): ?int
    {
        return $this->postCount;
    }

    public function setPostCount(int $postCount): self
    {
        $this->postCount = $postCount;

        return $this;
    }


}
