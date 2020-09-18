<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfUserReject
 *
 * @ORM\Table(name="xf_user_reject", indexes={@ORM\Index(name="reject_date", columns={"reject_date"})})
 * @ORM\Entity
 */
class XfUserReject
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
     * @var int
     *
     * @ORM\Column(name="reject_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $rejectDate;

    /**
     * @var int
     *
     * @ORM\Column(name="reject_user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $rejectUserId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="reject_reason", type="string", length=200, nullable=false)
     */
    private $rejectReason = '';

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function getRejectDate(): ?int
    {
        return $this->rejectDate;
    }

    public function setRejectDate(int $rejectDate): self
    {
        $this->rejectDate = $rejectDate;

        return $this;
    }

    public function getRejectUserId(): ?int
    {
        return $this->rejectUserId;
    }

    public function setRejectUserId(int $rejectUserId): self
    {
        $this->rejectUserId = $rejectUserId;

        return $this;
    }

    public function getRejectReason(): ?string
    {
        return $this->rejectReason;
    }

    public function setRejectReason(string $rejectReason): self
    {
        $this->rejectReason = $rejectReason;

        return $this;
    }


}
