<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfTfaProvider
 *
 * @ORM\Table(name="xf_tfa_provider")
 * @ORM\Entity
 */
class XfTfaProvider
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
     * @var int
     *
     * @ORM\Column(name="priority", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $priority;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active;

    /**
     * @var string|null
     *
     * @ORM\Column(name="options", type="blob", length=65535, nullable=true)
     */
    private $options;

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

    public function getPriority(): ?int
    {
        return $this->priority;
    }

    public function setPriority(int $priority): self
    {
        $this->priority = $priority;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getOptions()
    {
        return $this->options;
    }

    public function setOptions($options): self
    {
        $this->options = $options;

        return $this;
    }


}
