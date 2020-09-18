<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfPaymentProvider
 *
 * @ORM\Table(name="xf_payment_provider")
 * @ORM\Entity
 */
class XfPaymentProvider
{
    /**
     * @var binary
     *
     * @ORM\Column(name="provider_id", type="binary", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $providerId;

    /**
     * @var string
     *
     * @ORM\Column(name="provider_class", type="string", length=100, nullable=false)
     */
    private $providerClass;

    /**
     * @var binary
     *
     * @ORM\Column(name="addon_id", type="binary", nullable=false)
     */
    private $addonId = '';

    public function getProviderId()
    {
        return $this->providerId;
    }

    public function getProviderClass(): ?string
    {
        return $this->providerClass;
    }

    public function setProviderClass(string $providerClass): self
    {
        $this->providerClass = $providerClass;

        return $this;
    }

    public function getAddonId()
    {
        return $this->addonId;
    }

    public function setAddonId($addonId): self
    {
        $this->addonId = $addonId;

        return $this;
    }


}
