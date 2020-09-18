<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfEmailBounceSoft
 *
 * @ORM\Table(name="xf_email_bounce_soft", uniqueConstraints={@ORM\UniqueConstraint(name="user_id", columns={"user_id", "bounce_date"})}, indexes={@ORM\Index(name="bounce_date", columns={"bounce_date"})})
 * @ORM\Entity
 */
class XfEmailBounceSoft
{
    /**
     * @var int
     *
     * @ORM\Column(name="bounce_soft_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $bounceSoftId;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $userId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="bounce_date", type="date", nullable=false)
     */
    private $bounceDate;

    /**
     * @var int
     *
     * @ORM\Column(name="bounce_total", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $bounceTotal;

    public function getBounceSoftId(): ?int
    {
        return $this->bounceSoftId;
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

    public function getBounceDate(): ?\DateTimeInterface
    {
        return $this->bounceDate;
    }

    public function setBounceDate(\DateTimeInterface $bounceDate): self
    {
        $this->bounceDate = $bounceDate;

        return $this;
    }

    public function getBounceTotal(): ?int
    {
        return $this->bounceTotal;
    }

    public function setBounceTotal(int $bounceTotal): self
    {
        $this->bounceTotal = $bounceTotal;

        return $this;
    }


}
