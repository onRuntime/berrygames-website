<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfUserTfaTrusted
 *
 * @ORM\Table(name="xf_user_tfa_trusted", uniqueConstraints={@ORM\UniqueConstraint(name="user_id", columns={"user_id", "trusted_key"})}, indexes={@ORM\Index(name="trusted_until", columns={"trusted_until"})})
 * @ORM\Entity
 */
class XfUserTfaTrusted
{
    /**
     * @var int
     *
     * @ORM\Column(name="tfa_trusted_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tfaTrustedId;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $userId;

    /**
     * @var binary
     *
     * @ORM\Column(name="trusted_key", type="binary", nullable=false)
     */
    private $trustedKey;

    /**
     * @var int
     *
     * @ORM\Column(name="trusted_until", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $trustedUntil;

    public function getTfaTrustedId(): ?int
    {
        return $this->tfaTrustedId;
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

    public function getTrustedKey()
    {
        return $this->trustedKey;
    }

    public function setTrustedKey($trustedKey): self
    {
        $this->trustedKey = $trustedKey;

        return $this;
    }

    public function getTrustedUntil(): ?int
    {
        return $this->trustedUntil;
    }

    public function setTrustedUntil(int $trustedUntil): self
    {
        $this->trustedUntil = $trustedUntil;

        return $this;
    }


}
