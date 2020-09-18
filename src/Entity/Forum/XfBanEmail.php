<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfBanEmail
 *
 * @ORM\Table(name="xf_ban_email", indexes={@ORM\Index(name="create_date", columns={"create_date"})})
 * @ORM\Entity
 */
class XfBanEmail
{
    /**
     * @var string
     *
     * @ORM\Column(name="banned_email", type="string", length=120, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $bannedEmail;

    /**
     * @var int
     *
     * @ORM\Column(name="create_user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $createUserId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="create_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $createDate = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="reason", type="string", length=255, nullable=false)
     */
    private $reason = '';

    /**
     * @var int
     *
     * @ORM\Column(name="last_triggered_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $lastTriggeredDate = '0';

    public function getBannedEmail(): ?string
    {
        return $this->bannedEmail;
    }

    public function getCreateUserId(): ?int
    {
        return $this->createUserId;
    }

    public function setCreateUserId(int $createUserId): self
    {
        $this->createUserId = $createUserId;

        return $this;
    }

    public function getCreateDate(): ?int
    {
        return $this->createDate;
    }

    public function setCreateDate(int $createDate): self
    {
        $this->createDate = $createDate;

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

    public function getLastTriggeredDate(): ?int
    {
        return $this->lastTriggeredDate;
    }

    public function setLastTriggeredDate(int $lastTriggeredDate): self
    {
        $this->lastTriggeredDate = $lastTriggeredDate;

        return $this;
    }


}
