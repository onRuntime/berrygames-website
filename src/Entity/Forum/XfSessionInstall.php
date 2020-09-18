<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfSessionInstall
 *
 * @ORM\Table(name="xf_session_install", indexes={@ORM\Index(name="expiry_date", columns={"expiry_date"})})
 * @ORM\Entity
 */
class XfSessionInstall
{
    /**
     * @var binary
     *
     * @ORM\Column(name="session_id", type="binary", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sessionId;

    /**
     * @var string
     *
     * @ORM\Column(name="session_data", type="blob", length=16777215, nullable=false)
     */
    private $sessionData;

    /**
     * @var int
     *
     * @ORM\Column(name="expiry_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $expiryDate;

    public function getSessionId()
    {
        return $this->sessionId;
    }

    public function getSessionData()
    {
        return $this->sessionData;
    }

    public function setSessionData($sessionData): self
    {
        $this->sessionData = $sessionData;

        return $this;
    }

    public function getExpiryDate(): ?int
    {
        return $this->expiryDate;
    }

    public function setExpiryDate(int $expiryDate): self
    {
        $this->expiryDate = $expiryDate;

        return $this;
    }


}
