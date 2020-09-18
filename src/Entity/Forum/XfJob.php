<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfJob
 *
 * @ORM\Table(name="xf_job", uniqueConstraints={@ORM\UniqueConstraint(name="unique_key", columns={"unique_key"})}, indexes={@ORM\Index(name="trigger_date", columns={"trigger_date"}), @ORM\Index(name="manual_execute_date", columns={"manual_execute", "trigger_date"})})
 * @ORM\Entity
 */
class XfJob
{
    /**
     * @var int
     *
     * @ORM\Column(name="job_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $jobId;

    /**
     * @var binary|null
     *
     * @ORM\Column(name="unique_key", type="binary", nullable=true)
     */
    private $uniqueKey;

    /**
     * @var string
     *
     * @ORM\Column(name="execute_class", type="string", length=100, nullable=false)
     */
    private $executeClass;

    /**
     * @var string
     *
     * @ORM\Column(name="execute_data", type="blob", length=16777215, nullable=false)
     */
    private $executeData;

    /**
     * @var bool
     *
     * @ORM\Column(name="manual_execute", type="boolean", nullable=false)
     */
    private $manualExecute;

    /**
     * @var int
     *
     * @ORM\Column(name="trigger_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $triggerDate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="last_run_date", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $lastRunDate;

    public function getJobId(): ?int
    {
        return $this->jobId;
    }

    public function getUniqueKey()
    {
        return $this->uniqueKey;
    }

    public function setUniqueKey($uniqueKey): self
    {
        $this->uniqueKey = $uniqueKey;

        return $this;
    }

    public function getExecuteClass(): ?string
    {
        return $this->executeClass;
    }

    public function setExecuteClass(string $executeClass): self
    {
        $this->executeClass = $executeClass;

        return $this;
    }

    public function getExecuteData()
    {
        return $this->executeData;
    }

    public function setExecuteData($executeData): self
    {
        $this->executeData = $executeData;

        return $this;
    }

    public function getManualExecute(): ?bool
    {
        return $this->manualExecute;
    }

    public function setManualExecute(bool $manualExecute): self
    {
        $this->manualExecute = $manualExecute;

        return $this;
    }

    public function getTriggerDate(): ?int
    {
        return $this->triggerDate;
    }

    public function setTriggerDate(int $triggerDate): self
    {
        $this->triggerDate = $triggerDate;

        return $this;
    }

    public function getLastRunDate(): ?int
    {
        return $this->lastRunDate;
    }

    public function setLastRunDate(?int $lastRunDate): self
    {
        $this->lastRunDate = $lastRunDate;

        return $this;
    }


}
