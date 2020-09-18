<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfTfaAttempt
 *
 * @ORM\Table(name="xf_tfa_attempt", indexes={@ORM\Index(name="user_id_attempt_date", columns={"user_id", "attempt_date"}), @ORM\Index(name="attempt_date", columns={"attempt_date"})})
 * @ORM\Entity
 */
class XfTfaAttempt
{
    /**
     * @var int
     *
     * @ORM\Column(name="attempt_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $attemptId;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $userId;

    /**
     * @var int
     *
     * @ORM\Column(name="attempt_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $attemptDate;

    public function getAttemptId(): ?int
    {
        return $this->attemptId;
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getAttemptDate(): ?int
    {
        return $this->attemptDate;
    }

    public function setAttemptDate(int $attemptDate): self
    {
        $this->attemptDate = $attemptDate;

        return $this;
    }


}
