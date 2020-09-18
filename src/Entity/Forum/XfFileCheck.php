<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfFileCheck
 *
 * @ORM\Table(name="xf_file_check")
 * @ORM\Entity
 */
class XfFileCheck
{
    /**
     * @var int
     *
     * @ORM\Column(name="check_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $checkId;

    /**
     * @var int
     *
     * @ORM\Column(name="check_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $checkDate;

    /**
     * @var string
     *
     * @ORM\Column(name="check_state", type="string", length=0, nullable=false, options={"default"="pending"})
     */
    private $checkState = 'pending';

    /**
     * @var binary
     *
     * @ORM\Column(name="check_hash", type="binary", nullable=false)
     */
    private $checkHash = '';

    /**
     * @var int
     *
     * @ORM\Column(name="total_missing", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $totalMissing = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="total_inconsistent", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $totalInconsistent = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="total_checked", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $totalChecked = '0';

    public function getCheckId(): ?int
    {
        return $this->checkId;
    }

    public function getCheckDate(): ?int
    {
        return $this->checkDate;
    }

    public function setCheckDate(int $checkDate): self
    {
        $this->checkDate = $checkDate;

        return $this;
    }

    public function getCheckState(): ?string
    {
        return $this->checkState;
    }

    public function setCheckState(string $checkState): self
    {
        $this->checkState = $checkState;

        return $this;
    }

    public function getCheckHash()
    {
        return $this->checkHash;
    }

    public function setCheckHash($checkHash): self
    {
        $this->checkHash = $checkHash;

        return $this;
    }

    public function getTotalMissing(): ?int
    {
        return $this->totalMissing;
    }

    public function setTotalMissing(int $totalMissing): self
    {
        $this->totalMissing = $totalMissing;

        return $this;
    }

    public function getTotalInconsistent(): ?int
    {
        return $this->totalInconsistent;
    }

    public function setTotalInconsistent(int $totalInconsistent): self
    {
        $this->totalInconsistent = $totalInconsistent;

        return $this;
    }

    public function getTotalChecked(): ?int
    {
        return $this->totalChecked;
    }

    public function setTotalChecked(int $totalChecked): self
    {
        $this->totalChecked = $totalChecked;

        return $this;
    }


}
