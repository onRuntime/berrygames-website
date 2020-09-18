<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfThreadRead
 *
 * @ORM\Table(name="xf_thread_read", uniqueConstraints={@ORM\UniqueConstraint(name="user_id_thread_id", columns={"user_id", "thread_id"})}, indexes={@ORM\Index(name="thread_read_date", columns={"thread_read_date"}), @ORM\Index(name="thread_id", columns={"thread_id"})})
 * @ORM\Entity
 */
class XfThreadRead
{
    /**
     * @var int
     *
     * @ORM\Column(name="thread_read_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $threadReadId;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $userId;

    /**
     * @var int
     *
     * @ORM\Column(name="thread_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $threadId;

    /**
     * @var int
     *
     * @ORM\Column(name="thread_read_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $threadReadDate;

    public function getThreadReadId(): ?int
    {
        return $this->threadReadId;
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

    public function getThreadId(): ?int
    {
        return $this->threadId;
    }

    public function setThreadId(int $threadId): self
    {
        $this->threadId = $threadId;

        return $this;
    }

    public function getThreadReadDate(): ?int
    {
        return $this->threadReadDate;
    }

    public function setThreadReadDate(int $threadReadDate): self
    {
        $this->threadReadDate = $threadReadDate;

        return $this;
    }


}
