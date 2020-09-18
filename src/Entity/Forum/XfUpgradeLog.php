<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfUpgradeLog
 *
 * @ORM\Table(name="xf_upgrade_log")
 * @ORM\Entity
 */
class XfUpgradeLog
{
    /**
     * @var int
     *
     * @ORM\Column(name="version_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $versionId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="last_step", type="smallint", nullable=true, options={"unsigned"=true})
     */
    private $lastStep;

    /**
     * @var int
     *
     * @ORM\Column(name="completion_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $completionDate = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="log_type", type="string", length=0, nullable=false, options={"default"="upgrade"})
     */
    private $logType = 'upgrade';

    public function getVersionId(): ?int
    {
        return $this->versionId;
    }

    public function getLastStep(): ?int
    {
        return $this->lastStep;
    }

    public function setLastStep(?int $lastStep): self
    {
        $this->lastStep = $lastStep;

        return $this;
    }

    public function getCompletionDate(): ?int
    {
        return $this->completionDate;
    }

    public function setCompletionDate(int $completionDate): self
    {
        $this->completionDate = $completionDate;

        return $this;
    }

    public function getLogType(): ?string
    {
        return $this->logType;
    }

    public function setLogType(string $logType): self
    {
        $this->logType = $logType;

        return $this;
    }


}
