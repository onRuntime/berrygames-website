<?php

namespace App\Entity\Berrygames;

use DateTime;
use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Gifts
 *
 * @ORM\Table(name="gifts")
 * @ORM\Entity
 * @UniqueEntity("code")
 */
class Gifts
{
    /**
     * @var string
     *
     * @ORM\Id
     * @ORM\Column(name="code", type="string", length=255, nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="command", type="string", length=255, nullable=false)
     */
    private $command;

    /**
     * @var int
     *
     * @ORM\Column(name="uses", type="integer", nullable=false)
     */
    private $uses;

    /**
     * @var array|null
     *
     * @ORM\Column(name="used", type="array", length=0, nullable=true, options={"default"="NULL"})
     */
    private $used = '';

    /**
     * @var DateTime
     *
     * @ORM\Column(name="start_date", type="date", nullable=false)
     */
    private $startDate;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="end_date", type="date", nullable=false)
     */
    private $endDate;

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getCommand(): ?string
    {
        return $this->command;
    }

    public function setCommand(string $command): self
    {
        $this->command = $command;

        return $this;
    }

    public function getUses(): ?int
    {
        return $this->uses;
    }

    public function setUses(int $uses): self
    {
        $this->uses = $uses;

        return $this;
    }

    public function getUsed(): ?array
    {
        return array($this->used);
    }

    public function setUsed(?array $used): self
    {
        $this->used = $used;

        return $this;
    }

    public function getStartDate(): ?DateTimeInterface
    {
        return $this->startDate;
    }

    public function setStartDate(DateTimeInterface $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getEndDate(): ?DateTimeInterface
    {
        return $this->endDate;
    }

    public function setEndDate(DateTimeInterface $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }


}
