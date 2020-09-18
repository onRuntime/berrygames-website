<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfTrophy
 *
 * @ORM\Table(name="xf_trophy")
 * @ORM\Entity
 */
class XfTrophy
{
    /**
     * @var int
     *
     * @ORM\Column(name="trophy_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $trophyId;

    /**
     * @var int
     *
     * @ORM\Column(name="trophy_points", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $trophyPoints;

    /**
     * @var string
     *
     * @ORM\Column(name="user_criteria", type="blob", length=16777215, nullable=false)
     */
    private $userCriteria;

    public function getTrophyId(): ?int
    {
        return $this->trophyId;
    }

    public function getTrophyPoints(): ?int
    {
        return $this->trophyPoints;
    }

    public function setTrophyPoints(int $trophyPoints): self
    {
        $this->trophyPoints = $trophyPoints;

        return $this;
    }

    public function getUserCriteria()
    {
        return $this->userCriteria;
    }

    public function setUserCriteria($userCriteria): self
    {
        $this->userCriteria = $userCriteria;

        return $this;
    }


}
