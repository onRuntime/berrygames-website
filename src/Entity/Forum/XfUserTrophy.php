<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfUserTrophy
 *
 * @ORM\Table(name="xf_user_trophy", indexes={@ORM\Index(name="user_id_award_date", columns={"user_id", "award_date"})})
 * @ORM\Entity
 */
class XfUserTrophy
{
    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $userId;

    /**
     * @var int
     *
     * @ORM\Column(name="trophy_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $trophyId;

    /**
     * @var int
     *
     * @ORM\Column(name="award_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $awardDate;

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function getTrophyId(): ?int
    {
        return $this->trophyId;
    }

    public function getAwardDate(): ?int
    {
        return $this->awardDate;
    }

    public function setAwardDate(int $awardDate): self
    {
        $this->awardDate = $awardDate;

        return $this;
    }


}
