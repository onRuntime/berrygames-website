<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfUserConnectedAccount
 *
 * @ORM\Table(name="xf_user_connected_account", uniqueConstraints={@ORM\UniqueConstraint(name="provider", columns={"provider", "provider_key"})})
 * @ORM\Entity
 */
class XfUserConnectedAccount
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
     * @var binary
     *
     * @ORM\Column(name="provider", type="binary", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $provider;

    /**
     * @var binary
     *
     * @ORM\Column(name="provider_key", type="binary", nullable=false)
     */
    private $providerKey;

    /**
     * @var string
     *
     * @ORM\Column(name="extra_data", type="blob", length=16777215, nullable=false)
     */
    private $extraData;

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function getProvider()
    {
        return $this->provider;
    }

    public function getProviderKey()
    {
        return $this->providerKey;
    }

    public function setProviderKey($providerKey): self
    {
        $this->providerKey = $providerKey;

        return $this;
    }

    public function getExtraData()
    {
        return $this->extraData;
    }

    public function setExtraData($extraData): self
    {
        $this->extraData = $extraData;

        return $this;
    }


}
