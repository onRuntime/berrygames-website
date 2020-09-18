<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfAddonInstallBatch
 *
 * @ORM\Table(name="xf_addon_install_batch")
 * @ORM\Entity
 */
class XfAddonInstallBatch
{
    /**
     * @var int
     *
     * @ORM\Column(name="batch_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $batchId;

    /**
     * @var int
     *
     * @ORM\Column(name="start_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $startDate = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="complete_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $completeDate = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="addon_ids", type="blob", length=16777215, nullable=false)
     */
    private $addonIds;

    /**
     * @var string
     *
     * @ORM\Column(name="results", type="blob", length=65535, nullable=false)
     */
    private $results;

    public function getBatchId(): ?int
    {
        return $this->batchId;
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

    public function getCompleteDate(): ?int
    {
        return $this->completeDate;
    }

    public function setCompleteDate(int $completeDate): self
    {
        $this->completeDate = $completeDate;

        return $this;
    }

    public function getAddonIds()
    {
        return $this->addonIds;
    }

    public function setAddonIds($addonIds): self
    {
        $this->addonIds = $addonIds;

        return $this;
    }

    public function getResults()
    {
        return $this->results;
    }

    public function setResults($results): self
    {
        $this->results = $results;

        return $this;
    }


}
