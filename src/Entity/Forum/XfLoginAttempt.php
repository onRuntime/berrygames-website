<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfLoginAttempt
 *
 * @ORM\Table(name="xf_login_attempt", indexes={@ORM\Index(name="attempt_date", columns={"attempt_date"}), @ORM\Index(name="ip_address_attempt_date", columns={"ip_address", "attempt_date"}), @ORM\Index(name="login_check", columns={"login", "ip_address", "attempt_date"})})
 * @ORM\Entity
 */
class XfLoginAttempt
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
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=60, nullable=false)
     */
    private $login;

    /**
     * @var binary
     *
     * @ORM\Column(name="ip_address", type="binary", nullable=false)
     */
    private $ipAddress;

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

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(string $login): self
    {
        $this->login = $login;

        return $this;
    }

    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    public function setIpAddress($ipAddress): self
    {
        $this->ipAddress = $ipAddress;

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
