<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfUserRemember
 *
 * @ORM\Table(name="xf_user_remember", uniqueConstraints={@ORM\UniqueConstraint(name="user_id_remember_key", columns={"user_id", "remember_key"})}, indexes={@ORM\Index(name="expiry_date", columns={"expiry_date"})})
 * @ORM\Entity
 */
class XfUserRemember
{
    /**
     * @var int
     *
     * @ORM\Column(name="remember_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $rememberId;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $userId;

    /**
     * @var binary
     *
     * @ORM\Column(name="remember_key", type="binary", nullable=false)
     */
    private $rememberKey;

    /**
     * @var int
     *
     * @ORM\Column(name="start_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $startDate;

    /**
     * @var int
     *
     * @ORM\Column(name="expiry_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $expiryDate;

    public function getRememberId(): ?int
    {
        return $this->rememberId;
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

    public function getRememberKey()
    {
        return $this->rememberKey;
    }

    public function setRememberKey($rememberKey): self
    {
        $this->rememberKey = $rememberKey;

        return $this;
    }

    public function getStartDate(): ?int
    {
        return $this->startDate;
    }

    public function setStartDate(int $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getExpiryDate(): ?int
    {
        return $this->expiryDate;
    }

    public function setExpiryDate(int $expiryDate): self
    {
        $this->expiryDate = $expiryDate;

        return $this;
    }


}
