<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfThreadReplyBan
 *
 * @ORM\Table(name="xf_thread_reply_ban", uniqueConstraints={@ORM\UniqueConstraint(name="thread_id", columns={"thread_id", "user_id"})}, indexes={@ORM\Index(name="user_id", columns={"user_id"}), @ORM\Index(name="expiry_date", columns={"expiry_date"})})
 * @ORM\Entity
 */
class XfThreadReplyBan
{
    /**
     * @var int
     *
     * @ORM\Column(name="thread_reply_ban_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $threadReplyBanId;

    /**
     * @var int
     *
     * @ORM\Column(name="thread_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $threadId;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $userId;

    /**
     * @var int
     *
     * @ORM\Column(name="ban_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $banDate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="expiry_date", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $expiryDate;

    /**
     * @var string
     *
     * @ORM\Column(name="reason", type="string", length=100, nullable=false)
     */
    private $reason = '';

    /**
     * @var int
     *
     * @ORM\Column(name="ban_user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $banUserId;

    public function getThreadReplyBanId(): ?int
    {
        return $this->threadReplyBanId;
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

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getBanDate(): ?int
    {
        return $this->banDate;
    }

    public function setBanDate(int $banDate): self
    {
        $this->banDate = $banDate;

        return $this;
    }

    public function getExpiryDate(): ?int
    {
        return $this->expiryDate;
    }

    public function setExpiryDate(?int $expiryDate): self
    {
        $this->expiryDate = $expiryDate;

        return $this;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function setReason(string $reason): self
    {
        $this->reason = $reason;

        return $this;
    }

    public function getBanUserId(): ?int
    {
        return $this->banUserId;
    }

    public function setBanUserId(int $banUserId): self
    {
        $this->banUserId = $banUserId;

        return $this;
    }


}
