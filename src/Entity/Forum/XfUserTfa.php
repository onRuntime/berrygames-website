<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfUserTfa
 *
 * @ORM\Table(name="xf_user_tfa", uniqueConstraints={@ORM\UniqueConstraint(name="user_id", columns={"user_id", "provider_id"})})
 * @ORM\Entity
 */
class XfUserTfa
{
    /**
     * @var int
     *
     * @ORM\Column(name="user_tfa_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userTfaId;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $userId;

    /**
     * @var binary
     *
     * @ORM\Column(name="provider_id", type="binary", nullable=false)
     */
    private $providerId;

    /**
     * @var string
     *
     * @ORM\Column(name="provider_data", type="blob", length=16777215, nullable=false)
     */
    private $providerData;

    /**
     * @var int
     *
     * @ORM\Column(name="last_used_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $lastUsedDate = '0';

    public function getUserTfaId(): ?int
    {
        return $this->userTfaId;
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

    public function getProviderId()
    {
        return $this->providerId;
    }

    public function setProviderId($providerId): self
    {
        $this->providerId = $providerId;

        return $this;
    }

    public function getProviderData()
    {
        return $this->providerData;
    }

    public function setProviderData($providerData): self
    {
        $this->providerData = $providerData;

        return $this;
    }

    public function getLastUsedDate(): ?int
    {
        return $this->lastUsedDate;
    }

    public function setLastUsedDate(int $lastUsedDate): self
    {
        $this->lastUsedDate = $lastUsedDate;

        return $this;
    }


}
