<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfIpMatch
 *
 * @ORM\Table(name="xf_ip_match", indexes={@ORM\Index(name="start_range", columns={"start_range"}), @ORM\Index(name="create_date", columns={"create_date"})})
 * @ORM\Entity
 */
class XfIpMatch
{
    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=43, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ip;

    /**
     * @var string
     *
     * @ORM\Column(name="match_type", type="string", length=0, nullable=false, options={"default"="banned"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $matchType = 'banned';

    /**
     * @var binary
     *
     * @ORM\Column(name="first_byte", type="binary", nullable=false)
     */
    private $firstByte;

    /**
     * @var binary
     *
     * @ORM\Column(name="start_range", type="binary", nullable=false)
     */
    private $startRange;

    /**
     * @var binary
     *
     * @ORM\Column(name="end_range", type="binary", nullable=false)
     */
    private $endRange;

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

    public function getIp(): ?string
    {
        return $this->ip;
    }

    public function getMatchType(): ?string
    {
        return $this->matchType;
    }

    public function getFirstByte()
    {
        return $this->firstByte;
    }

    public function setFirstByte($firstByte): self
    {
        $this->firstByte = $firstByte;

        return $this;
    }

    public function getStartRange()
    {
        return $this->startRange;
    }

    public function setStartRange($startRange): self
    {
        $this->startRange = $startRange;

        return $this;
    }

    public function getEndRange()
    {
        return $this->endRange;
    }

    public function setEndRange($endRange): self
    {
        $this->endRange = $endRange;

        return $this;
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
