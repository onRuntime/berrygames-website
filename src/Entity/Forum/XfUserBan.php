<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfUserBan
 *
 * @ORM\Table(name="xf_user_ban", indexes={@ORM\Index(name="end_date", columns={"end_date"}), @ORM\Index(name="ban_date", columns={"ban_date"})})
 * @ORM\Entity
 */
class XfUserBan
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
     * @ORM\Column(name="ban_user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $banUserId;

    /**
     * @var int
     *
     * @ORM\Column(name="ban_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $banDate = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="end_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $endDate = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="user_reason", type="string", length=255, nullable=false)
     */
    private $userReason;

    /**
     * @var bool
     *
     * @ORM\Column(name="triggered", type="boolean", nullable=false, options={"default"="1"})
     */
    private $triggered = '1';

    public function getUserId(): ?int
    {
        return $this->userId;
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

    public function getBanDate(): ?int
    {
        return $this->banDate;
    }

    public function setBanDate(int $banDate): self
    {
        $this->banDate = $banDate;

        return $this;
    }

    public function getEndDate(): ?int
    {
        return $this->endDate;
    }

    public function setEndDate(int $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }

    public function getUserReason(): ?string
    {
        return $this->userReason;
    }

    public function setUserReason(string $userReason): self
    {
        $this->userReason = $userReason;

        return $this;
    }

    public function getTriggered(): ?bool
    {
        return $this->triggered;
    }

    public function setTriggered(bool $triggered): self
    {
        $this->triggered = $triggered;

        return $this;
    }


}
