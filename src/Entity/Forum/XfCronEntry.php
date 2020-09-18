<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfCronEntry
 *
 * @ORM\Table(name="xf_cron_entry", indexes={@ORM\Index(name="active_next_run", columns={"active", "next_run"})})
 * @ORM\Entity
 */
class XfCronEntry
{
    /**
     * @var binary
     *
     * @ORM\Column(name="entry_id", type="binary", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $entryId;

    /**
     * @var string
     *
     * @ORM\Column(name="cron_class", type="string", length=100, nullable=false)
     */
    private $cronClass;

    /**
     * @var string
     *
     * @ORM\Column(name="cron_method", type="string", length=75, nullable=false)
     */
    private $cronMethod;

    /**
     * @var string
     *
     * @ORM\Column(name="run_rules", type="blob", length=16777215, nullable=false)
     */
    private $runRules;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active;

    /**
     * @var int
     *
     * @ORM\Column(name="next_run", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $nextRun;

    /**
     * @var binary
     *
     * @ORM\Column(name="addon_id", type="binary", nullable=false)
     */
    private $addonId;

    public function getEntryId()
    {
        return $this->entryId;
    }

    public function getCronClass(): ?string
    {
        return $this->cronClass;
    }

    public function setCronClass(string $cronClass): self
    {
        $this->cronClass = $cronClass;

        return $this;
    }

    public function getCronMethod(): ?string
    {
        return $this->cronMethod;
    }

    public function setCronMethod(string $cronMethod): self
    {
        $this->cronMethod = $cronMethod;

        return $this;
    }

    public function getRunRules()
    {
        return $this->runRules;
    }

    public function setRunRules($runRules): self
    {
        $this->runRules = $runRules;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getNextRun(): ?int
    {
        return $this->nextRun;
    }

    public function setNextRun(int $nextRun): self
    {
        $this->nextRun = $nextRun;

        return $this;
    }

    public function getAddonId()
    {
        return $this->addonId;
    }

    public function setAddonId($addonId): self
    {
        $this->addonId = $addonId;

        return $this;
    }


}
