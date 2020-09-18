<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfStatsDaily
 *
 * @ORM\Table(name="xf_stats_daily")
 * @ORM\Entity
 */
class XfStatsDaily
{
    /**
     * @var int
     *
     * @ORM\Column(name="stats_date", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $statsDate;

    /**
     * @var binary
     *
     * @ORM\Column(name="stats_type", type="binary", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $statsType;

    /**
     * @var int
     *
     * @ORM\Column(name="counter", type="bigint", nullable=false, options={"unsigned"=true})
     */
    private $counter;

    public function getStatsDate(): ?int
    {
        return $this->statsDate;
    }

    public function getStatsType()
    {
        return $this->statsType;
    }

    public function getCounter(): ?string
    {
        return $this->counter;
    }

    public function setCounter(string $counter): self
    {
        $this->counter = $counter;

        return $this;
    }


}
